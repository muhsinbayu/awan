#!/usr/bin/env bash
apt-get update
apt-get install -y apache2
apt-get -y install php7.0 libapache2-mod-php7.0
systemctl restart apache2
