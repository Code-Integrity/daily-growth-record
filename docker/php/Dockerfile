FROM php:8.4-fpm

# 最新の Composer を高速移植
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 必要な筋肉（ライブラリ）の増強
RUN apt-get update && apt-get install -y \
default-mysql-client \
zlib1g-dev \
libzip-dev \
unzip \
libonig-dev \
&& docker-php-ext-install pdo_mysql zip

COPY php.ini /usr/local/etc/php/

WORKDIR /var/www/html