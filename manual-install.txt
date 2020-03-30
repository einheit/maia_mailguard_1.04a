This procedure documents the install process for maia maiguard 1.04x.

We assume you have a working OS install. We've only tested on
Linux distributions, but FreeBSD etc should be doable also.

Note that there might be RHEL-isms, despite our effort at neutrality

If sendmail or any other non-postfix MTA is installed, uninstall 
or disable it before continuing.

Using whatever package management tools are included with your OS,
make sure the following are installed -

curl
wget
make
gcc
rsync 

tar
file
postfix
spamassassin

perl
perl-forks
perl-DBI 
perl-Archive-Zip
perl-BerkeleyDB
perl-Convert-TNEF
perl-Convert-UUlib
perl-Digest-SHA1
perl-DBD-MySQL perl-DBD-Pg
perl-Data-UUID
perl-Net-Server
perl-Net-DNS-Nameserver
perl-Text-CSV
perl-Net-CIDR-Lite
perl-LDAP
perl-Unix-Syslog
perl-Razor-Agent
perl-Template-Toolkit
perl-CPAN 
perl-Geo-IP
perl-IP-Country-Fast
perl-Convert-TNEF
perl-Data-UUID
perl-Digest-SHA1
perl-Template

if any of the above perl packages are not in your normal OS repos,
you can use cpan or cpanminus to install them.

For instance, we've had to use cpanminus to install:

forks
IP::Country::Fast
Convert::TNEF
Data::UUID
Digest::SHA1
Template

e.g: "cpanm IP::Country::Fast"

Install clamav. In centos, it's broken down into the following packages

clamav 
clamav-update 
clamav-data 
clamav-server

Install apache web server - in centos, the packages are:

httpd
httpd-tools

Run the following commands to add the maia user and environment

# add the user and set up their home dir
$ useradd -d /var/lib/maia maia
$ mkdir -p /var/lib/maia
$ chmod 755 /var/lib/maia

# create and chown log dirs
$ mkdir -p /var/log/maia
$ chown -R maia /var/log/maia

$ mkdir -p /var/log/clamav
$ chmod 775 /var/lib/clamav/

$ mkdir -p /etc/maia
$ cp maia.conf maiad.conf /etc/maia/

You must edit /etc/maia.conf and /etc/maiad.conf to suit your needs.
You will want to edit the database connection string, user and password,
as well as details about your domain, organization and other items.

$ mkdir -p  /var/lib/maia/tmp
$ mkdir -p  /var/lib/maia/db
$ mkdir -p  /var/lib/maia/scripts
$ mkdir -p  /var/lib/maia/templates
$ cp maiad /var/lib/maia/
$ cp -r scripts/* /var/lib/maia/scripts/
$ cp -r templates/* /var/lib/maia/templates/
$ chown -R maia.maia /var/lib/maia/db
$ chown -R maia.maia /var/lib/maia/tmp

#
# web interface
#
$ mkdir -p /var/www/html/maia
$ cp -r php/* /var/www/html/maia

#
# if using systemd, install the systemd unit files -
#
$ cp maiad.service /etc/systemd/system/
$ cp clamd.service /etc/systemd/system/

# enable services
$ systemctl enable maiad.service
$ systemctl enable clamd.service

# provide config files
$ cp scan.conf /etc/clamd.d/

# install mysql client to begin with - 
install mariadb or mysql

If creating a database server, run the following commands -
install mariadb-server
enable the db server to start on boot
start the db
import the maia schema:

 $ mysqladmin create maia
 $ mysql maia < maia-mysql.sql 
 $ sh maia-grants.sh

The database should be working at this point.

Start maiad  -
If using systemd, you'd run:
$ systemctl start maiad.service

In case of failure, run maiad by hand, and look for error messages.
it will warn, and fail to start, if there are any missing perl modules.

Once maiad is up, run freshclam to update the virus definitions.

when thats done, start clamd. if you use systemd, that would be:
$ systemctl start clamd.service

If clamd doesn't start, or dies quickly, run it by hand to check for
error messages. If there are no errors evident, it could be that you're
seeing a problem with systemd. In that case, clamd can be started from rc.local

$ cp clamav.cf sanesecurity.cf /etc/mail/spamassassin/

Once that is all running, you can test what's insstalled so far with:

$ /var/lib/maia/scripts/configtest.pl

If any errors are seen, go back and fix them before proceeding.

Next, install the web management portion of maailguard

The following php modules must be installed

php
php-pdo
php-gd
php-process
php-xml
php-mbstring
php-mysql (OR) php-mysqlnd
php-bcmath
php-devel
php-pear

Smarty3 breaks maia. Install the included Smarty2 package:

$ tar -C /usr/share/php/ -xvf smarty2-maia.tar

Install the pear modules

$ pear install Auth_SASL-1.0.6
$ pear install DB-1.8.2
$ pear install Log-1.12.9
$ pear install Mail_Mime-1.8.9
$ pear install Mail_mimeDecode-1.5.5
$ pear install Net_Socket-1.0.14
$ pear install Net_SMTP-1.6.2
$ pear install Pager-2.4.9

If you have php 5.x, install the following:
$ pear install MDB2
$ pear install MDB2_Driver_mysql
$ pear install MDB2_Driver_mysqli

if you have php 7.x, install the following:
$ pear install MDB2-2.5.0b5
$ pear install MDB2_Driver_mysqli-1.5.0b4

Verify what's installed: 
$ pear list

Install html purifier: 
$ tar -C /var -xvf htmlpurifier-4.12.0.tar.gz
$ ln -s /var/htmlpurifier-4.12.0 /var/htmlpurifier

Fix the permissions on the themes directory: 
 $ for i in /var/www/html/maia/themes/*
 $ do
   $ mkdir -p ${i}/compiled
 $ done

$ chmod 775 /var/www/html/maia/themes/*/compiled
$ chown apache.maia /var/www/html/maia/themes/*/compiled
$ cp config.php /var/www/html/maia/
$ mkdir /var/www/cache
$ chown apache.maia /var/www/cache
$ chmod 775 /var/www/cache

Restart the httpd server

Make sure your firewall rules allow access to the httpd server.

Edit your postfix configuration:
$ sh postfix-setup.sh
or manually edit postfix config to affect site specific configuration.

Restart postfix

Point Your browser at http://$your_host/maia/admin/configtest.php
Fix any rows that are not green or yellow

If everything passes, and you are starting with a new database,
create the initial maia user by visiting:

http://$host/maia/internal-init.php

You will want to update the maia rules database:
$ /var/lib/maia/scripts/load-sa-rules.pl

And perhaps put that in a cron job to run periodocally.

In addition, you will want to set up cron jobs to maintain the
spaamassassin rulesets & maia DB, report spam, & send notifications.

Here is an example crontab for the maia user -
--
# m h dom mon dow  	command
3 * * * *	/var/lib/maia/scripts/process-quarantine.pl > /dev/null
2 * * * *	/var/lib/maia/scripts/stats-snapshot.pl > /dev/null
7 23 * * *	/var/lib/maia/scripts/expire-quarantine-cache.pl > /dev/null
#9 21 * * 1	/var/lib/maia/scripts/send-quarantine-reminders.pl > /dev/null
5 11,17 * * *	/var/lib/maia/scripts/send-quarantine-digests.pl > /dev/null
--

Here is an example crontab for root - 
--
# m h dom mon dow       command
3 3 * * * /usr/local/sbin/do-sa-update.sh
--

In case you find anything not working as it should be, please visit
the issues page to see if there are workarounds -

  https://github.com/einheit/maia_mailguard_1.04a/issues

The original install document is available in docs/Install-maia-56e6.txt

