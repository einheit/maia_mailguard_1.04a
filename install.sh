#!/usr/bin/env bash

# get os
if [ -f /etc/redhat-release ]; then
  export LXTYPE=RHEL
elif [ -f /etc/SuSE-release ]; then
  export LXTYPE=SUSE
elif [ -f /etc/SUSE-brand ]; then
  export LXTYPE=SUSE
elif [ -f /etc/debian_version ]; then
  export LXTYPE=DEBIAN
elif [ -f /etc/gentoo-release ]; then
  export LXTYPE=GENTOO
fi

if [ $LXTYPE == "RHEL" ]; then
  RREL=`grep -i version_id /etc/os-release | awk -F\= '{ print $2 }'`

  REL7=`echo $RREL | grep 7|wc -w`
  REL8=`echo $RREL | grep 8|wc -w`
  if [ $REL7 -eq 1 ]; then
    LVL=7
  elif [ $REL8 -eq 1 ]; then
    LVL=8
  fi
fi

if [ $LXTYPE == "RHEL" ]; then
  echo "centos/rhel version $LVL detected"
  echo "copy & paste the following command to begin the install:"
  echo
  echo " bash install-centos$LVL.sh | tee installer.log 2>&1"
  echo
else
  echo "$LXTYPE type system detected, installer not present"
  echo "refer to manual-install.txt for instructions"
fi


