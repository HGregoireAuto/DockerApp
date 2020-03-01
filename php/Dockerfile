# https://github.com/mlocati/docker-php-extension-installer

FROM php:7.4-fpm
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
&& docker-php-ext-configure gd --with-freetype --with-jpeg \
&& docker-php-ext-install -j$(nproc) gd pdo_mysql gettext \
&& pecl install redis-5.1.1 \
&& docker-php-ext-enable redis  

