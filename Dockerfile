FROM php:8.2-apache

RUN chmod -R 777 /var/www/html

COPY app/ /var/www/html/
