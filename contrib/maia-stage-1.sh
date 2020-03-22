# install stage 1 packages

yum localinstall -y rpms/epel-release-latest-7.noarch.rpm 
yum -y update
#
yum install -y make gcc
yum install -y telnet
#
yum install -y file
yum install -y perl-DBI 
yum install -y spamassassin
yum install -y perl-Archive-Zip
yum install -y perl-BerkeleyDB
yum install -y perl-Convert-TNEF
yum install -y perl-Convert-UUlib
yum install -y perl-Digest-SHA1
yum install -y perl-DBD-MySQL perl-DBD-Pg
yum install -y perl-Data-UUID
yum install -y perl-Net-Server
yum install -y perl-Net-DNS-Nameserver
yum install -y perl-Text-CSV
yum install -y perl-Net-CIDR-Lite
yum install -y perl-Unix-Syslog
yum install -y perl-Razor-Agent
yum install -y perl-Template-Toolkit
yum install -y perl-CPAN 
#
#
yum install -y clamav 
yum install -y clamav-update 
yum install -y clamav-data 
yum install -y clamav-server

#
# echo "done with rpm installs"
#

#
# add maia user and chown all its files/dirs
#
useradd -d /var/lib/clamav clam
useradd -d /var/lib/maia maia
chmod 755 /var/lib/maia

# create and chown dirs
mkdir -p /var/log/maia
chown -R maia.maia /var/log/maia

mkdir -p /var/log/clamav
chown -R clam.clam /var/log/clamav/
chown -R clamupdate.clam /var/lib/clamav/
chmod 775 /var/lib/clamav/

mkdir /etc/maia
cp maia.conf.dist /etc/maia/maia.conf
cp maiad.conf.dist /etc/maia/maiad.conf

mkdir -p  /var/lib/maia/tmp
mkdir -p  /var/lib/maia/db
mkdir -p  /var/lib/maia/scripts
mkdir -p  /var/lib/maia/templates
cp maiad /var/lib/maia/
cp -r scripts/* /var/lib/maia/scripts/
cp -r templates/* /var/lib/maia/templates/
chown -R maia.maia /var/lib/maia/db
chown -R maia.maia /var/lib/maia/tmp

#
# web interface
#
mkdir -p /var/www/html/maia
cp -r php/* /var/www/html/maia
echo "done with file copy, starting package install"

#
# install the systemd unit files -
#
cp maiad.service /lib/systemd/system/
cp clamd.service /lib/systemd/system/

# enable services
systemctl enable maiad.service
systemctl enable clamd.service

# provide config files
/usr/bin/cp clamd.conf freshclam.conf /etc

# fix clam/maia group memberships
usermod -G maia clam
usermod -G clam maia

#
# cpan shenanigans -
#
curl -L http://cpanmin.us | perl - --sudo App::cpanminus

cpanm forks
cpanm IP::Country::Fast

echo "creating maia database..."
yum install -y mariadb mariadb-server
systemctl enable mariadb.service
systemctl start mariadb.service
mysqladmin create maia
mysql maia < maia-mysql.sql 

echo
echo "edit maia-grants.sh to set the password for the maia database"
echo "and then run maia-grants.sh"
echo
echo "that maia password needs to be set in 2 places now:"
echo   "around line 15 of /etc/maia/maia.conf" 
echo   "around line 194 of /etc/maia/maiad.conf" 
echo
echo "When that is done,run /var/lib/maia/scripts/configtest.pl" 
echo 
echo "if configtest.pl is successful, run the stage 2 script"
echo

