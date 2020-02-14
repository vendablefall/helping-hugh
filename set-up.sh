#!/bin/bash

apt-get update -y 

apt-get install -y php mysql-server apache2

rm /var/ww/html/index.html

cp ./datamanip.php /var/ww/html/datamanip.php 
cp ./commentform.php  /var/ww/html/commentform.php 
cp ./captchaimg.php /var/ww/html/captchaimg.php 
cp ./index.php  /var/ww/html/index.php 

service mysql start

mysqladmin -u root -p create commentdb

mysql -u root -p -h localhost \
-e "GRANT ALL PRIVILEGES ON tblcomments.* TO 'test'@'%' IDENTIFIED BY 'test';" \
-D commentdb 

mysql -u root -p \
-h localhost -P 3306 \
-D commentdb 

##################################################
    CREATE TABLE tblcomments (
        id TEXT  ,
        pname TEXT  ,
        comment TEXT  ,
        pdate TEXT  ,
        url TEXT 
    );
##################################################

