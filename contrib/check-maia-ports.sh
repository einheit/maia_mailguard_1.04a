#!/usr/bin/env bash
# check for maia ports 

tmp=$(which lsof &>/dev/null)
if [ $? == 0 ]; then
  lsof -i -P -n  | grep IPv4 |grep LISTEN| grep -e 25 -e 465 -e 3310 -e 10024
else
  tmp=$(which netstat &>/dev/null)
  if [ $? == 0 ]; then
    netstat -tulpn | grep LISTEN| grep -e 25 -e 465 -e 3310 -e 10024
  else
    tmp=$(which ss &>/dev/null)
    if [ $? == 0 ]; then
      ss -tulw4n|grep -e 25 -e 465 -e 3310 -e 10024
    fi 
  fi
fi

