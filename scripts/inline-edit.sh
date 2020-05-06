#/bin/bash

old_str=$1
new_str=$2
filename=$3

echo "perl -p -e 's#"$old_str"#"$new_str"#g' $filename" 
perl -pi -e "s#$old_str#$new_str#g" $filename

