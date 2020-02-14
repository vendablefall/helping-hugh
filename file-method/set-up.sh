#!/bin/bash

# Update source refrences
apt-get update -y 

# Install updates
apt-get install -y php apache2

# Remove default web page
rm /var/ww/html/index.html

# copy over our web-app files
cp ./action.php /var/ww/html/action.php 
cp ./index.html  /var/ww/html/index.html 