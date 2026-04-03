FROM php:8.5-fpm-trixie

RUN apt-get update && apt-get install -y libpq-dev && apt-get clean
RUN docker-php-ext-install pgsql

RUN docker-php-ext-install sockets
COPY php-fpm.d/zz-docker.conf /usr/local/etc/php-fpm.d/zz-docker.conf