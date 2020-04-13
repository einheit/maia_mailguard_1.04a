# a sample script to check if clamd is running, and start as needed
# this should be put in a cron job if systemd is not reliably
# managing clamd
RSTAT=`ps -ef|grep clamd|grep -v grep|wc -w`
STAT=`expr $RSTAT`
if [ $STAT -eq 0 ]; then
  echo "clamd was not running. starting now..."
  /sbin/clamd &
else
  echo "clamd is running..."
fi

