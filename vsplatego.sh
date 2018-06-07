#!/bin/bash

service mysqld start || service mysqld start && mysql -u root -ptoor -e 'create database test;';
tar -zxf /var/www/html/FiyoCMS.tar.gz -C /var/www/html;
rm -rf /var/www/html/FiyoCMS.tar.gz;
chmod -R 777 /var/www/html;
