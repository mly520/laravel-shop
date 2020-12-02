#!/bin/sh
#this is artisan queue cron.sh
ps -ef|grep queue:work|grep -v grep
if [ $? -ne 0 ] ; then
echo "start process ... "
/usr/local/bin/php /shared/httpd/laravel-shop/artisan queue:work --tries=2 & >> /dev/null 2>&1
fi