FROM debian:trixie

COPY .pgpass /root/.pgpass
RUN chmod 0600 /root/.pgpass

RUN apt-get update && apt-get install -y clang && apt-get clean

RUN apt-get update && apt-get install -y libmapnik-dev mapnik-utils && apt-get clean

RUN apt-get update && apt-get install -y osm2pgsql && apt-get clean

WORKDIR /var/lib/mapnik

ENTRYPOINT ["osm2pgsql", "--create", "--log-sql", "--host=postgres", "--port=5432", "--database=mapnik", "--user=osm2pgsql", "/var/tmp/osm/oregon.osm.pbf"]