FROM ylupien/php:7.4-fpm

COPY ./php/php.ini /usr/local/etc/php/php.ini

RUN docker-php-ext-enable redis pdo_sqlsrv opcache 


WORKDIR /var/www
RUN rm -rf /var/www/*
COPY ./app/ .

RUN ./php-fpm-build.sh
