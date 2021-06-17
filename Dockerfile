FROM composer:1.9.0 as build
WORKDIR /app
COPY . /app

FROM php:7.3-apache-stretch
RUN docker-php-ext-install pdo pdo_mysql

RUN docker-php-ext-install mbstring
#install some base extensions
RUN apt-get install -y \
        zlib1g-dev \
        zip \
  && docker-php-ext-install zip
  
RUN docker-php-ext-install gd

RUN composer global require hirak/prestissimo && composer install

EXPOSE 8080
COPY --from=build /app /var/www/
COPY docker/000-default.conf /etc/apache2/sites-available/000-default.conf
COPY .env.example /var/www/.env
RUN chmod 777 -R /var/www/storage/ && \
    echo "Listen 8080" >> /etc/apache2/ports.conf && \
    chown -R www-data:www-data /var/www/ && \
    a2enmod rewrite