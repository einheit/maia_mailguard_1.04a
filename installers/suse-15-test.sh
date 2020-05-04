#!/usr/bin/env bash
#
# first attempt at a suse installer
#

echo 
echo "this script is written for opensuse leap 15, using mysql DB" 
echo "if using postgresql or other DB, you'll need to manually"
echo "edit configs in /etc/maia/ and ~www/maia/config.php"
echo 
echo "if sendmail or other non-postfix MTA are installed," 
echo "disable or uninstall them before continuing."
echo
echo -n "<ENTER> to continue or CTRL-C to stop..."
read junk
echo 


# set path for the install - 
PATH=`pwd`/scripts:$PATH
export PATH

# basic dependencies - 
zypper in -y curl wget make gcc gcc-c++ sudo net-tools less which rsync 

# get the info, write parames to a file
get-info.sh

echo "If there are no errors, this script will run to completion."
echo
echo "Note that the install could take a good while, dependng on"
echo "available computing power and network bandwidth."
echo
echo -n "Feel free to take a break - <ENTER> to proceed  "
echo

# looks like we need to make sure perl and postfix are installed first
zypper in -y perl
zypper in -y postfix
systemctl enable postfix
systemctl restart postfix

# find out what we need to change
process-changes.sh

# continue with install
# set up conditions for maia to operate
zypper install -y firewalld
systemctl enable firewalld
firewall-cmd --permanent --add-service smtp
firewall-cmd --permanent --add-service smtps
firewall-cmd --permanent --add-service http
firewall-cmd --reload

# continue installing required packages
zypper in -y telnet
zypper in -y file
zypper in -y tar
zypper in -y perl-DBI 
zypper in -y spamassassin
zypper in -y perl-Archive-Zip
zypper in -y perl-BerkeleyDB
zypper in -y perl-Convert-UUlib
zypper in -y perl-DBD-mysql 
zypper in -y perl-DBD-Pg
#zypper install -y perl-Net-Server
#zypper install -y perl-Net-DNS-Nameserver
zypper in -y perl-Text-CSV
#zypper install -y perl-Net-CIDR-Lite
zypper in -y perl-ldap
zypper in -y perl-Unix-Syslog
#zypper install -y perl-razor-agents
zypper in -y perl-Template-Toolkit
#zypper install -y perl-Geo-IP
zypper in -y perl-Convert-TNEF
zypper in -y perl-forks
zypper in -y perl-IP-Country


#
# non-interactive cpan installs
#
zypper in -y perl-App-cpanminus 

cpanm Data::UUID
#cpanm forks
#cpanm IP::Country::Fast
#cpanm Convert::TNEF
#cpanm Digest::SHA1
#cpanm Template

mkdir -p /etc/maia
cp maia.conf maiad.conf /etc/maia/

# maiad helpers
zypper in -y arc
zypper in -y arj
zypper in -y cabextract
zypper in -y lzop
zypper in -y pax
zypper in -y unrar

# configtest.pl should work unless installing local DB

zypper in -y clamav

echo "updating virus sigs - this could take awhile..."
freshclam

zypper in -y apache2
zypper in -y apache2-mod_php7

# permit apache to operate
inline-edit.sh 'Options None' 'Options Indexes Includes FollowSymLinks' /etc/apache2/default-server.conf

systemctl enable apache2
systemctl start apache2
a2enmod php7

#
# add maia user and chown/chmod its files/dirs
#
groupadd maia
useradd -d /var/lib/maia -g maia maia
mkdir -p /var/lib/maia
chmod 755 /var/lib/maia

# create and chown dirs
mkdir -p /var/log/maia
chown -R maia.maia /var/log/maia

mkdir -p /var/log/clamav
#chmod 775 /var/lib/clamav/

mkdir -p  /var/lib/maia/tmp
mkdir -p  /var/lib/maia/db
mkdir -p  /var/lib/maia/scripts
mkdir -p  /var/lib/maia/templates
cp files/maiad /var/lib/maia/
cp -r maia_scripts/* /var/lib/maia/scripts/
cp -r maia_templates/* /var/lib/maia/templates/
chown -R maia.maia /var/lib/maia/db
chown -R maia.vscan /var/lib/maia/tmp
chmod 775 /var/lib/maia/tmp

#
# web interface
#
mkdir -p /srv/www/htdocs/maia
cp -r php/* /srv/www/htdocs/maia

#
# install the systemd unit files -
#
cp contrib/maiad.service /etc/systemd/system/

# enable services
systemctl enable maiad.service
systemctl enable clamd.service

# provide config files
# cp scan.conf /etc/clamd.d/
# suse uses clamd.conf, and by default it's tcp 3310

# install mysql client to begin with - 
zypper install -y mariadb-client 

DBINST=`grep DB_INSTALL installer.tmpl | wc -l`
DB_INST=`expr $DBINST`

# install mysql server if called for - 
if [ $DB_INST -eq 1 ]; then
  echo "creating maia database..."
  zypper install -y mariadb
  systemctl enable mariadb.service
  systemctl start mariadb.service
  mysqladmin create maia
  sleep 1
  maia-grants.sh
  status=$?
  if [ $status -ne 0 ]; then
    echo "*** problem granting maia privileges - db needs attention ***"
    read
  fi
  sleep 1
  mysql maia < files/maia-mysql.sql 
  status=$?
  if [ $status -ne 0 ]; then
    echo "*** problem importing maia schema - db needs attention ***"
    read
  fi
fi

echo "stage 1 install complete"

#
# the database should be working at this point.
#
# start maiad 
systemctl start maiad.service
# run freshclam
echo "running freshclam..."
freshclam
# start clamd
systemctl start clamd.service

# load the spamassassin rulesets -
#
cp files/*.cf /etc/mail/spamassassin/
# /var/lib/maia/scripts/load-sa-rules.pl

echo
echo "installing php modules"
echo
#zypper install -y php
zypper in -y php7-pdo
zypper in -y php7-gd
#zypper install -y php-process
#zypper install -y php-xml # xmlreader? xmlwriter?
zypper in -y php-mbstring
zypper in -y php7-mysql
zypper in -y php7-bcmath
zypper in -y php7-pgsql
zypper in -y php7-devel
zypper in -y php7-openssl
zypper in -y php7-pear
#zypper in -y php-Smarty

tar -C /usr/share/php7 -xvf files/smarty3-maia.tgz

echo
echo "installing pear modules"
echo

zypper in -y php7-pear-MDB2
zypper in -y php7-pear-MDB2_Driver_mysqli
zypper in -y php7-pear-Mail_Mime

pear channel-update pear.php.net

pear install Log-1.12.9
pear install Auth_SASL-1.0.6
pear install MDB2-2.5.0b5
pear install MDB2_Driver_mysqli-1.5.0b4
pear install Mail_Mime-1.8.9
pear install Mail_mimeDecode
pear install Pager
pear install Net_Socket-1.0.14
pear install Net_SMTP-1.6.2
pear list

# install html purifier separately -
tar -C /var -xvf files/htmlpurifier-4.12.0.tar.gz
ln -s /var/htmlpurifier-4.12.0 /var/htmlpurifier

### checkpoint 3

echo
echo "preparing php directory"

# temp bug workaround
for i in /srv/www/htdocs/maia/themes/*
do
 mkdir -p ${i}/compiled
done

chmod 775 /var/www/html/maia/themes/*/compiled
chown wwwrun.maia /var/www/html/maia/themes/*/compiled
cp config.php /srv/www/htdocs/maia/
ln -s /srv/www /var/www
mkdir /var/www/cache
chown wwwrun.maia /var/www/cache
chmod 775 /var/www/cache

echo
echo "reloading http server"
systemctl restart httpd

echo "stage 2 complete"

# call postfix setup script
postfix-setup.sh
systemctl restart postfix

host=`grep HOST installer.tmpl | awk -F\= '{ print $2 }'`

echo
echo	"any other site specific MTA configuration can be applied now - "
echo
echo 
echo 	"at this point, a good sanity check would be to run"
echo	" /var/lib/maia/scripts/configtest.pl" 
echo 
echo	"You may now need to edit firewall to allow http access"
echo	"and set selinux to permissive to allow maia to operate"
echo	"Until appropriate selinux policies can be developed"
echo
echo	"If configtest.pl passes, check the web configuration at"
echo	" http://$host/maia/admin/configtest.php"
echo
echo	"if everything passes, and you are creating a database for the"
echo	"first time, (no existing database) create the initial maia user" 
echo	"by visiting http://$host/maia/internal-init.php"
echo
echo	"maia will send your login credentials to the email addess you"
echo	"supplied in the internal-init form. Use those credentials to"
echo	"log into the url below (note the "super=register" arg)"
echo	" http://${host}/maia/login.php?super=register"
echo
echo	"You will also need to set up cron jobs to maintain your system"
echo	"See docs/cronjob.txt for more info"
echo

