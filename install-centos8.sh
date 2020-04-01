# new version - gather info up front to use during the install process

echo 
echo "this script is written for Centos 8, using a mysql DB" 
echo "if using postgresql or other DB, you'll need to manually"
echo "edit configs in /etc/maia/ and ~www/maia/config.php"
echo 
echo "if sendmail or other non-postfix MTA are installed," 
echo "disable or uninstall them before continuing."
echo 
echo -n "<ENTER> to continue or CTRL-C to stop..."
read junk
echo 

# rock bottom dependencies - 
yum install -y curl wget make gcc sudo net-tools less which rsync 

# get the info, write parames to a file
./get-info.sh

# looks like we need to make sure perl and postfix are installed first
yum install -y perl
yum install -y postfix

# find out what we need to change
./process-changes.sh

# continue with install

# add epel and get up to date
yum install -y epel-release
yum -y update
yum install -y telnet
yum install -y file
yum install -y tar
yum install -y perl-DBI 
yum install -y spamassassin
yum install -y perl-Archive-Zip
yum install -y perl-BerkeleyDB
yum install -y perl-Convert-UUlib
yum install -y perl-DBD-MySQL perl-DBD-Pg
yum install -y perl-Net-Server
yum install -y perl-Net-DNS-Nameserver
yum install -y perl-Text-CSV
yum install -y perl-Net-CIDR-Lite
yum install -y perl-LDAP
yum install -y perl-Unix-Syslog
yum install -y perl-Razor-Agent
yum install -y perl-Template-Toolkit
yum install -y perl-CPAN 
yum install -y perl-Geo-IP

#
# non-interactive cpan installs
#
yum install -y perl-App-cpanminus

cpanm forks
cpanm IP::Country::Fast
cpanm Convert::TNEF
cpanm Data::UUID
cpanm Digest::SHA1
cpanm Template

yum install -y clamav 
yum install -y clamav-update 
yum install -y clamav-data 
yum install -y clamav-server

yum install -y httpd httpd-tools

#
# add maia user and chown/chmod its files/dirs
#
useradd -d /var/lib/maia maia
chmod 755 /var/lib/maia

# create and chown dirs
mkdir -p /var/log/maia
chown -R maia.maia /var/log/maia

mkdir -p /var/log/clamav
chmod 775 /var/lib/clamav/

mkdir -p /etc/maia
cp maia.conf maiad.conf /etc/maia/

mkdir -p  /var/lib/maia/tmp
mkdir -p  /var/lib/maia/db
mkdir -p  /var/lib/maia/scripts
mkdir -p  /var/lib/maia/templates
cp maiad /var/lib/maia/
cp -r scripts/* /var/lib/maia/scripts/
cp -r templates/* /var/lib/maia/templates/
chown -R maia.maia /var/lib/maia/db
chown -R maia.virusgroup /var/lib/maia/tmp
chmod 775 /var/lib/maia/tmp

#
# web interface
#
mkdir -p /var/www/html/maia
cp -r php/* /var/www/html/maia

#
# install the systemd unit files -
#
cp maiad.service /etc/systemd/system/
cp clamd.service /etc/systemd/system/

# enable services
systemctl enable maiad.service
systemctl enable clamd.service

# provide config files
cp scan.conf /etc/clamd.d/

# install mysql client to begin with - 
yum install -y mariadb 

DBINST=`grep DB_INSTALL cfg_tpl/installer.tmpl | wc -l`
DB_INST=`expr $DBINST`

# install mysql server if called for - 
if [ $DB_INST -eq 1 ]; then
  echo "creating maia database..."
  yum install -y mariadb-server
  systemctl enable mariadb.service
  systemctl start mariadb.service
  mysqladmin create maia
  mysql maia < maia-mysql.sql 
  sh maia-grants.sh
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
cp clamav.cf sanesecurity.cf /etc/mail/spamassassin/
# /var/lib/maia/scripts/load-sa-rules.pl

echo
echo "installing php modules"
echo
yum install -y php
yum install -y php-pdo
yum install -y php-gd
yum install -y php-process
yum install -y php-xml
yum install -y php-mbstring
yum install -y php-mysqlnd
yum install -y php-bcmath
yum install -y php-devel
yum install -y php-pear
# smarty3 breaks maia
# yum install -y php-Smarty
tar -C /usr/share/php/ -xvf smarty2-maia.tar

echo
echo "installing pear modules"
echo

pear install Auth_SASL-1.0.6
pear install DB-1.8.2
pear install Log-1.12.9
pear install MDB2-2.5.0b5
pear install MDB2_Driver_mysqli-1.5.0b4
pear install Mail_Mime-1.8.9
pear install Mail_mimeDecode-1.5.5
pear install Net_Socket-1.0.14
pear install Net_SMTP-1.6.2
pear install Pager-2.4.9
pear list

# install html purifier separately -
tar -C /var -xvf htmlpurifier-4.12.0.tar.gz
ln -s /var/htmlpurifier-4.12.0 /var/htmlpurifier

### checkpoint 3

echo
echo "preparing php directory"

# temp bug workaround
for i in /var/www/html/maia/themes/*
do
 mkdir -p ${i}/compiled
done

chmod 775 /var/www/html/maia/themes/*/compiled
chown apache.maia /var/www/html/maia/themes/*/compiled
cp config.php /var/www/html/maia/
mkdir /var/www/cache
chown apache.maia /var/www/cache
chmod 775 /var/www/cache

echo
echo "reloading http server"
systemctl restart httpd

echo "stage 2 complete"

# call postfix setup script
./postfix-setup.sh

systemctl restart postfix

host=`grep HOST installer.tmpl | awk -F\= '{ print $2 }'`

echo
echo	"any other site specific MTA configuration can be applied now - "
echo

echo 
echo 	"at this point, a good sanity check would be to run"
echo	"/var/lib/maia/scripts/configtest.pl" 
echo 
echo	"You may now need to edit firewall to allow http access"
echo	"and set selinux to permissive to allow maia to operate"
echo	"Until appropriate selinux policies can be developed"
echo
echo	"If configtest.pl passes, check the web configuration"
echo	"at http://$host/maia/admin/configtest.php"
echo
echo	"if everything passes, and you are creating a database for the"
echo	"first time, (no existing database) create the initial maia user" 
echo	"by visiting http://$host/maia/internal-init.php"
echo
echo	"maia will send your login credentials to the email addess you"
echo	"supplied in the internal-init form. Use those credentials to"
echo	"log into the url below (note the "super=register" arg)"
echo	"http://${host}/maia/login.php?super=register"
echo
echo	"You will also need to set up cron jobs to maintain your system"
echo	"See docs/cronjob.txt for more info"
echo

