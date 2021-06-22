FROM composer:1.9.0 as build
WORKDIR /app
COPY . /app

FROM php:7.3-apache-stretch

RUN apt-get install -y software-properties-common \
  && apt-add-repository ppa:ondrej/php


RUN apt-get install -y --no-install-recommends \
  libc-client-dev \
  libapache2-mod-php7.3 \
  libicu-dev \
  libjpeg62-turbo-dev \
  libkrb5-dev \
  libmagickwand-dev \
  libpng-dev \
  libxml2-dev \
  unzip \
  zip \
  libzip-dev 

RUN apt-get -y update

RUN docker-php-ext-install gd \
  && docker-php-ext-configure gd --with-jpeg-dir=/usr/include/ --with-png-dir=/usr/include/ \
  && docker-php-ext-install gd \
  && docker-php-ext-install pdo \
  && docker-php-ext-install pdo_mysql

EXPOSE 8080
COPY --from=build /app /var/www/
COPY docker/000-default.conf /etc/apache2/sites-available/000-default.conf
COPY .env.example /var/www/.env
RUN chmod 777 -R /var/www/storage/ && \
    echo "Listen 8080" >> /etc/apache2/ports.conf && \
    chown -R www-data:www-data /var/www/ && \
    a2enmod rewrite
