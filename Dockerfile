FROM php:7.4-fpm

WORKDIR /var/www/html

# Composer
#RUN curl -sS https://getcomposer.org/installer | php
#RUN mv composer.phar /usr/local/bin/composer && \
#    chmod +x /usr/local/bin/composer && \
#    composer self-update --preview