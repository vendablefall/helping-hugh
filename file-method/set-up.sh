#!/bin/bash

# Update source refrences
apt-get update -y 

# Install updates
apt-get install -y php apache2

# create php folder
mmkdir /var/www/html/php

# open permissions
chmod 777 /var/www/html/php 

# Remove default web page
rm /var/ww/html/index.html

# copy over our web-app files
cp ./write.php /var/ww/html/write.php 
cp ./index.php  /var/ww/html/index.php 