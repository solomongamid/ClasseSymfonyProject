FROM php:7-fpm

#COMPOSER

RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer



RUN apt-get update -y && apt-get install -y libpng-dev curl libcurl4-openssl-dev
RUN apt-get install -y libpng-dev libjpeg-dev libpq-dev && docker-php-ext-install gd mbstring pdo pdo_mysql pdo_pgsql

