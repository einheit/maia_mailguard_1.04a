#
# a collection of one liners to check postfix, maia and clamd ports 
#
# try this - 
$ ss -tulw4n|grep -e 25 -e 3310 -e 10024

# or this -
$ netstat -tulp4n | grep LISTEN| grep -e 25 -e 3310 -e 10024 

# older versions of netstat: 
$ netstat -tulpn | grep LISTEN| grep -e 25 -e 3310 -e 10024

# or this 
$ lsof -i -P -n  | grep IPv4 |grep LISTEN| grep -e 25 -e 3310 -e 10024

#
# if secure smtp is required -
#

# submission port
$ openssl s_client -connect remote.example.com:587 -starttls smtp

# smtps port -
$ openssl s_client -connect remote.example.com:465

#
# the nagios way 
# make sure that both tests below are defined in commands.cfg
#
./check_smtp -H remote.example.com -p 587 -S
SMTP OK - 0.329 sec. response time|time=0.328936s;;;0.000000

./check_ssmtp -H remote.example.com -p 465 -S
SSMTP OK - 0.171 second response time on port 465 [220 remote.example.com Postfix ready]|time=0.171020s;;;0.000000;10.000000
