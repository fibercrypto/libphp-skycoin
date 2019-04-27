FROM composer:latest

WORKDIR /usr/src/skyapi
COPY ./lib/skyapi/composer.json ./

RUN composer install && ./vendor/bin/phpunit

VOLUME /usr/src/
