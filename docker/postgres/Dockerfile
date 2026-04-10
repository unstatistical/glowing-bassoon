FROM postgres:18.3-trixie

COPY postgis.sql /docker-entrypoint-initdb.d/postgis.sql
COPY init.sql /docker-entrypoint-initdb.d/init.sql

RUN apt-get update && apt-get install -y postgresql-18-postgis-3 postgresql-18-postgis-3-scripts && apt-get clean