#
# the database should be working at this point.
# load the spamassassin rulesets -
#
cp clamav.cf sanesecurity.cf /etc/mail/spamassassin/
/var/lib/maia/scripts/load-sa-rules.pl

echo
echo "installing php modules"
echo
yum install -y php
yum install -y php-pdo
yum install -y php-gd
yum install -y php-process
yum install -y php-xml
yum install -y php-mbstring
yum install -y php-mysql
yum install -y php-bcmath
yum install -y php-devel
yum install -y php-pear
yum install -y php-Smarty

echo
echo "installing pear modules"
echo
pear install DB
pear install MDB2
pear install MDB2#mysql
pear install Mail_mimeDecode
pear install Pager
pear install Net_Socket
pear install Net_SMTP
pear install Auth_SASL
pear install Log
pear channel-discover htmlpurifier.org
pear install hp/HTMLPurifier
pear list


echo
echo "preparing php directory"
chmod 775 /var/www/html/maia/themes/*/compiled
chown maia.apache /var/www/html/maia/themes/*/compiled
cp php/config.php.dist /var/www/html/maia/config.php
mkdir /var/www/cache
chown maia.apache /var/www/cache
chmod 775 /var/www/cache

echo
echo "reloading http server"
systemctl restart httpd

echo 
echo "now edit /var/www/html/maia/config.php around line 131" 
echo "to set the web database connection credentials:"
echo 
echo "then check the maia web interface at /maia/admin/configtest.php"
echo "and verify no tests have failed (all green or yellow, no red)"
echo
