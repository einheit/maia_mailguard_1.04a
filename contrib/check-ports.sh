# try this - 
$ ss -tulw4n|grep -e 25 -e 3310 -e 10024

# or this -
$ netstat -tulp4n | grep LISTEN| grep -e 25 -e 3310 -e 10024 

# or this 
$ lsof -i -P -n  | grep IPv4 |grep LISTEN| grep -e 25 -e 3310 -e 10024

