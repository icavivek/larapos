FROM composer:1.9.0 as build
WORKDIR /app
COPY . /app

FROM php:7.3-apache-stretch

RUN apt-get update \
  && apt-get install -y --no-install-recommends \
  git \
  libc-client-dev \
  libicu-dev \
  libjpeg62-turbo-dev \
  libkrb5-dev \
  libmagickwand-dev \
  libpng-dev \
  libxml2-dev \
  default-mysql-client \
  sudo \
  unzip \
  zip \
  libzip-dev \
  && rm -r /var/lib/apt/lists/*



RUN docker-php-ext-install bcmath \
  && docker-php-ext-configure gd --with-jpeg-dir=/usr/include/ --with-png-dir=/usr/include/ \
  && docker-php-ext-install gd \
  && docker-php-ext-install gettext \
  && docker-php-ext-install intl \
  && docker-php-ext-install mysqli \
  && docker-php-ext-install pdo_mysql \
  && docker-php-ext-install soap \
  && docker-php-ext-install zip \
  && docker-php-ext-install pdo \
  && docker-php-ext-install pdo_mysql

RUN pecl install imagick \
  && docker-php-ext-enable imagick

RUN pecl install xdebug

EXPOSE 8080
COPY --from=build /app /var/www/
COPY docker/000-default.conf /etc/apache2/sites-available/000-default.conf
COPY .env.example /var/www/.env
RUN chmod 777 -R /var/www/storage/ && \
    echo "Listen 8080" >> /etc/apache2/ports.conf && \
    chown -R www-data:www-data /var/www/ && \
    a2enmod rewrite
