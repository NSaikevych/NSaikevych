FROM php:fpm

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

RUN apt-get update && apt-get install -y \
    libssl-dev \
    git

RUN pecl install mongodb \
    && docker-php-ext-enable mongodb

WORKDIR /var/www
