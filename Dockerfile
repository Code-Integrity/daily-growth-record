# 1. 魂の定義（最新の PHP 8.4）
FROM php:8.4-fpm

# 2. 知性の移植（Composer）
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 3. 筋肉の増強（Laravel 12 に必要なライブラリ）
RUN apt-get update && apt-get install -y \
default-mysql-client \
zlib1g-dev \
libzip-dev \
unzip \
libonig-dev \
&& docker-php-ext-install pdo_mysql zip

# 4. 聖域の定義
WORKDIR /var/www/html
