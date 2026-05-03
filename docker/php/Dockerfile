FROM php:8.5-fpm-trixie

COPY .pgpass /root/.pgpass
RUN chmod 0600 /root/.pgpass

COPY php.ini /usr/local/etc/php/php.ini

RUN apt-get update && apt-get install -y libpq-dev && apt-get clean
RUN docker-php-ext-install pdo pgsql pdo_pgsql

RUN docker-php-ext-install sockets
COPY php-fpm.d/www.conf /usr/local/etc/php-fpm.d/www.conf

WORKDIR /var/www/html