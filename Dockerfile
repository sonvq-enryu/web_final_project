FROM php:7.1-fpm-alpine3.4
RUN apk update && \
    apk add  $PHPIZE_DEPS && \
    apk add mysql-dev && \
    docker-php-ext-install pdo pdo_mysql mysqli