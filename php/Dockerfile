# https://github.com/mlocati/docker-php-extension-installer

FROM php:7.4-fpm

ENV ACCEPT_EULA=Y

COPY php.ini /usr/local/etc/php/php.ini

RUN apt-get update \
    && apt-get install -y gnupg2 \
    && curl https://packages.microsoft.com/keys/microsoft.asc | apt-key add - \
    && curl https://packages.microsoft.com/config/debian/9/prod.list \
        > /etc/apt/sources.list.d/mssql-release.list \
    && apt-get install -y --no-install-recommends \
        locales \
        apt-transport-https \
    && echo "en_US.UTF-8 UTF-8" > /etc/locale.gen \
    && locale-gen \
    && apt-get update \
    && apt-get -y --no-install-recommends install \
        unixodbc-dev \
        msodbcsql17

RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
&& docker-php-ext-configure gd --with-freetype --with-jpeg \
&& docker-php-ext-install -j$(nproc) gd pdo_mysql gettext opcache \
&& pecl install redis-5.1.1 pdo_sqlsrv \
&& docker-php-ext-enable redis \
&& echo extension=pdo_sqlsrv.so > /usr/local/etc/php/conf.d/docker-php-ext-pdo_sqlsrv.ini
#&& echo zend_extension=/usr/local/lib/php/extensions/no-debug-non-zts-20190902/opcache.so > /usr/local/etc/php/conf.d/docker-php-ext-opcache.ini


