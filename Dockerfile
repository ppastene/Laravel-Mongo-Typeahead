FROM php:7.4-fpm

RUN apt-get update && apt-get install -y \
    git zip unzip libcurl4-openssl-dev pkg-config libssl-dev

RUN docker-php-ext-install opcache
RUN pecl install mongodb \
&& echo "extension=mongodb.so" > /usr/local/etc/php/conf.d/ext-mongodb.ini

WORKDIR /var/www/html

# Composer
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer && \
    chmod +x /usr/local/bin/composer && \
    composer self-update --stable