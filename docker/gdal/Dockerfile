FROM debian:trixie

COPY .pgpass /root/.pgpass
RUN chmod 0600 /root/.pgpass

RUN apt-get update && apt-get install -y clang && apt-get clean

RUN apt-get update && apt-get -y install gdal-bin gdal-data gdal-plugins libgdal-dev && apt-get clean

WORKDIR /var/lib/gdal