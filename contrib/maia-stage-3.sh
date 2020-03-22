echo
echo "setting up postfix for maia spam/virus filtering"
echo

cp /etc/postfix/main.cf /etc/postfix/main.cf-save-$$
cp /etc/postfix/master.cf /etc/postfix/master.cf-save-$$

cat master.cf-append >> /etc/postfix/master.cf

postconf -e inet_interfaces=all
postconf -e content_filter=maia:[127.0.0.1]:10024

systemctl restart postfix

echo
echo "perform any further required MTA setup now - e.g. relayhost"
echo

