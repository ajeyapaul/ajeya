FROM php:8.0.2-fpm-alpine

#RUN docker-php-ext-install pdo pdo_mysql pdo_pgsql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


RUN set -ex\
    && apk --no-cache add postgresql-dev nodejs yarn\
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql

WORKDIR /var/www/html
