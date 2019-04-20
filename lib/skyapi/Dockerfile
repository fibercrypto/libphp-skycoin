FROM composer:latest

COPY . /usr/src/skyapi
WORKDIR /usr/src/skyapi

RUN composer install
RUN ./vendor/bin/phpunit


