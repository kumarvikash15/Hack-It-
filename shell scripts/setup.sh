#!/bin/bash
service apache start
cd /var/www/html
sudo chown www-data:www-data -R start/
cd /start/hackathon
sudo chmod 777 script.sh

firefox &
