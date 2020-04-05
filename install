#!/usr/bin/env bash

SUPPORTED=0

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

if [ $LXTYPE == "DEBIAN" ]; then
    ID=`grep ^ID= /etc/os-release | awk -F\= '{ print $2 }'`
    RVER=`grep ^VERSION_ID= /etc/os-release | awk -F\= '{ print $2 }'`
  if [ $ID == "debian" ]; then
    NAME=`grep '^VERSION_CODENAME=' /etc/os-release | awk -F\= '{ print $2 }'`
    case $NAME in
	"stretch") VER=9
	;;
	"buster") VER=10
	;;
	*) echo "unsupported debian"
    esac
  elif [ $ID == "ubuntu" ]; then
    NAME=`grep '^VERSION_CODENAME=' /etc/os-release | awk -F\= '{ print $2 }'`
    case $NAME in
	"bionic") VER=18.04
	;;
	"focal") VER=20.04
	;;
	*) echo "unsupported ubuntu"
    esac
  fi
fi
 
if [ $LXTYPE == "RHEL" ]; then
  if [ -f install-centos$LVL.sh ]; then
    SUPPORTED=1
    echo "centos/rhel version $LVL detected"
    echo "copy & paste the following command to begin the install:"
    echo
    echo " bash install-centos$LVL.sh | tee installer.log 2>&1"
    echo
  fi
fi

if [ $LXTYPE == "DEBIAN" ]; then
  if [ -f install-${ID}-${VER}.sh ]; then
    SUPPORTED=1
    echo "Debian or derivative detected:"
    echo "$ID version $VER"
    echo
    echo "copy & paste the following command to begin the install:"
    echo
    echo " bash install-${ID}-${VER}.sh | tee installer.log 2>&1"
    echo
  fi
fi

if [ $SUPPORTED == 0 ]; then
  echo "$LXTYPE type system detected, installer not present"
  echo "refer to manual-install.txt for instructions"
fi

