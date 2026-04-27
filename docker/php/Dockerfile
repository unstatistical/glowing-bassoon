FROM php:8.5-fpm-trixie

RUN apt-get update && apt-get install -y libpq-dev && apt-get clean
RUN docker-php-ext-install pdo pgsql pdo_pgsql

RUN docker-php-ext-install sockets
COPY php-fpm.d/www.conf /usr/local/etc/php-fpm.d/www.conf

RUN apt-get update && apt-get -y install gdal-bin gdal-data gdal-plugins libgdal-dev && apt-get clean