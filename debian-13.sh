#!/usr/bin/env bash
#
# debian 11 installer
#

echo 
echo "This install script is for Debian 13 using mysql"
echo "if using postgresql or other DB, you'll need to manually"
echo "edit configs in /etc/maia/ and ~www/maia/config.php"
echo 
echo "Be sure the system is up to date before running this script!"
echo 
echo "This script installs and configures the postfix MTA"
echo "If you wish to use something other than postfix,"
echo "you will need to install and set up that MTA after"
echo "the completion of this script, or install manually"
echo 
echo -n "<ENTER> to continue or CTRL-C to stop..."
read
echo 

# set path for the install - 
PATH=`pwd`/scripts:$PATH
export PATH

# get the info, write parames to a file
get-info.sh

echo "If there are no errors, this script will run to completion."
echo
echo "Note that the install could take a good while, dependng on"
echo "available computing power and network bandwidth."
echo
echo "Feel free to take a break!"
echo
echo "proceed? "
read

# install stage 1 packages

# suppress dialog boxes for package installs
export DEBIAN_FRONTEND=noninteractive

# basic sanity check -
apt update

# set locale for apt 
apt install -y locales
cp contrib/locale.gen /etc
/usr/sbin/locale-gen

# make sure perl is installed 
apt-get -y install perl

# make sure we have postfix
apt remove --purge exim4  exim4-base  exim4-config exim4-daemon-light
apt-get install -y postfix

# find out what we need to change
process-changes.sh

#
echo "now installing packages.."
apt-get install -y make gcc patch
apt-get install -y curl wget telnet
#
apt-get install -y file
apt-get install -y libarchive-zip-perl
apt-get install -y libberkeleydb-perl
apt-get install -y libconvert-tnef-perl
apt-get install -y libconvert-uulib-perl
apt-get install -y libcrypt-openssl-rsa-perl
apt-get install -y libdata-uuid-perl
apt-get install -y libdbd-mysql-perl libdbd-pg-perl
apt-get install -y libdbi-perl
apt-get install -y libdigest-sha-perl
apt-get install -y libencode-detect-perl
apt-get install -y libforks-perl
apt-get install -y libmail-dkim-perl
apt-get install -y libnet-cidr-lite-perl
apt-get install -y libnet-ldap-perl
apt-get install -y libnet-server-perl
apt-get install -y libtemplate-perl
apt-get install -y libtext-csv-perl
apt-get install -y libunix-syslog-perl
apt-get install -y perl-Net-DNS-Nameserver
apt-get install -y razor
apt-get install -y libmail-spf-perl
apt-get install -y spamassassin
#
#
# non-interactive cpan installs
#

apt-get install -y cpanminus

cpanm Digest::SHA1
cpanm IP::Country::Fast
cpanm LWP
cpanm Net::LDAP::LDIF
#cpanm Razor2::Client::Agent


#
# add maia user and chown all its files/dirs
#
useradd -d /var/lib/maia maia
mkdir -p /var/lib/maia
chmod 755 /var/lib/maia
chown -R maia.maia /var/lib/maia

# create and chown dirs
mkdir -p /var/log/maia
chown -R maia.maia /var/log/maia

mkdir -p  /var/lib/maia/tmp
mkdir -p  /var/lib/maia/db
mkdir -p  /var/lib/maia/scripts
mkdir -p  /var/lib/maia/templates
cp files/maiad /var/lib/maia/
cp -r maia_scripts/* /var/lib/maia/scripts/
cp -r maia_templates/* /var/lib/maia/templates/

chown -R maia.maia /var/lib/maia
chown root.root /var/lib/maia/maiad
chown -R maia.clamav /var/lib/maia/tmp
chmod 2775 /var/lib/maia/tmp

mkdir -p /etc/maia
cp maia.conf maiad.conf /etc/maia/

# maiad helpers
apt install -y arc
apt install -y arj
apt install -y cabextract
apt install -y lzop
apt install -y pax
apt install -y unrar || apt install -y unrar-free || echo "unrar not found"

# a handy tool for a quick check
cp -a contrib/check-maia-ports.sh /usr/local/bin/

# configtest.pl should work now unless installing a local DB server

apt-get install -y clamav 
apt-get install -y clamav-daemon
apt-get install -y clamav-freshclam


echo "php 7 and below no longer supported on debian 13, skipping web setup"
echo "you'll need a distro running php 7 or below for the web interface"

# enable services
cp contrib/maiad.service /etc/systemd/system
systemctl enable maiad

DBINST=`grep DB_INSTALL installer.tmpl | wc -l`
DB_INST=`expr $DBINST`

# install mysql server if called for -
if [ $DB_INST -eq 1 ]; then
  echo "creating maia database..."
  # suppress dialog boxes during mysql install -
  apt-get install -q -y -o Dpkg::Options::="--force-confdef" -o Dpkg::Options::="--force-confold" mariadb-server
  systemctl start mysql
  mysqladmin create maia
  maia-grants.sh
  status=$?
  if [ $status -ne 0 ]; then
    echo "*** problem granting maia privileges - db needs attention ***"
    read
  fi
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

# set up and start clamd
#cp /etc/clamav/clamd.conf /etc/clamav/clamd.conf_debian_orig-$$
#cp contrib/clamd-debian-maia-tcp.conf /etc/clamav/clamd.conf 
systemctl start clamav-daemon
systemctl start clamav-freshclam

# start maiad 
systemctl start maiad

# load the spamassassin rulesets -
#
cp files/*.cf /etc/mail/spamassassin/
# /var/lib/maia/scripts/load-sa-rules.pl

# call postfix setup script
systemctl enable postfix
systemctl start postfix
postfix-setup.sh
systemctl restart postfix

host=`grep HOST installer.tmpl | awk -F\= '{ print $2 }'`

echo
echo	"any other site specific MTA configuration can be applied now - "
echo
echo
echo    "at this point, a good sanity check would be to run"
echo    " /var/lib/maia/scripts/configtest.pl"
echo
echo    "You may now need to edit firewall to allow http access"
echo
echo    "If configtest.pl passes, check the configuration at the"
echo    " designated web server under /maia/admin/configtest.php"
echo
echo    "You will also need to set up cron jobs to maintain your system"
echo    "See docs/cronjob.txt for more info"
echo

