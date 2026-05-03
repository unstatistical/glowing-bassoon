FROM postgres:18.3-trixie

COPY gdal.sql /docker-entrypoint-initdb.d/gdal.sql
COPY mapnik.sql /docker-entrypoint-initdb.d/mapnik.sql
COPY php.sql /docker-entrypoint-initdb.d/php.sql

RUN apt-get update && apt-get install -y postgresql-18-postgis-3 postgresql-18-postgis-3-scripts && apt-get clean

WORKDIR /var/lib/postgresql