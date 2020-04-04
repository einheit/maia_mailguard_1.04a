RSTAT=`ps -ef|grep clamd|grep -v grep|wc -w`
STAT=`expr $RSTAT`
if [ $STAT -eq 0 ]; then
  echo "clamd was not running. starting now..."
  /sbin/clamd &
else
  echo "clamd is running..."
fi

