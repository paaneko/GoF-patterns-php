FROM php:8.3-fpm-alpine

RUN apk update && apk add --no-cache \
postgresql-dev \
libpng-dev \
oniguruma-dev \
libxml2-dev \
zip \
unzip \
git \
curl

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www