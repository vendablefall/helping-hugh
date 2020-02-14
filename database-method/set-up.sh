#!/bin/bash

# Update source refrences
apt-get update -y 

# Install updates
apt-get install -y php mysql-server apache2

# Remove default web page
rm /var/ww/html/index.html

# copy over our web-app files
cp ./datamanip.php /var/ww/html/datamanip.php 
cp ./commentform.php  /var/ww/html/commentform.php 
cp ./captchaimg.php /var/ww/html/captchaimg.php 
cp ./index.php  /var/ww/html/index.php 

# Start MySQL service
service mysql start

# Create the commentdb DataBase
mysqladmin -u root -p create commentdb

# give user: "test" all privledges on tblcomments.* with password: "test" 
mysql -u root -p -h localhost \
-e "GRANT ALL PRIVILEGES ON tblcomments.* TO 'test'@'%' IDENTIFIED BY 'test';" \
-D commentdb 

# log into the database as root
mysql -u root -p \
-h localhost -P 3306 \
-D commentdb 

# Create the tblcomments table in SQL
##################################################
    CREATE TABLE tblcomments (
        id TEXT  ,
        pname TEXT  ,
        comment TEXT  ,
        pdate TEXT  ,
        url TEXT 
    );
##################################################