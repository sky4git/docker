FROM php:7.2.19-fpm-alpine3.9
RUN apk update; \
    apk upgrade;
RUN docker-php-ext-install mysqli
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

VOLUME /var/www/html

