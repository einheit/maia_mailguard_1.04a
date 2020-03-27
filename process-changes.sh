#!/usr/bin/env bash

/bin/rm -f maia.conf maiad.conf config.php

cp cfg_tpl/maia.conf.tmpl maia.conf 
cp cfg_tpl/maiad.conf.tmpl maiad.conf 
cp cfg_tpl/config.php.tmpl config.php

# modify the working copies of the config files in place
HOST=`grep HOST installer.tmpl | awk -F\= '{ print $2 }'`
FQDN=`grep FQDN installer.tmpl | awk -F\= '{ print $2 }'`
DOMAIN=`grep DOMA installer.tmpl | awk -F\= '{ print $2 }'`
dbhost=`grep DBSERVER installer.tmpl | awk -F\= '{ print $2 }'`
passwd=`grep MAIAPASS installer.tmpl | awk -F\= '{ print $2 }'`

export HOST FQDN DOMAIN dbhost passwd

 echo "editing HOST"
 ./inline-edit.sh __HOST__ $HOST maiad.conf
 echo "editing DOMAIN"
 ./inline-edit.sh __DOMAIN__  $DOMAIN maiad.conf

for i in config.php maia.conf maiad.conf
do
 echo "editing DBHOST"
 ./inline-edit.sh __DBHOST__  $dbhost $i
 echo "editing PASSWORD/${passwd}"
 ./inline-edit.sh '__PASSWORD__'  $passwd $i
done

