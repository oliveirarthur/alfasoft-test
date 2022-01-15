FROM php:7.4-alpine

RUN docker-php-ext-install mysqli pdo pdo_mysql && \
    docker-php-ext-enable pdo_mysql
