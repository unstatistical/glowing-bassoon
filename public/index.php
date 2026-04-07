<?php

$connection = pg_connect("host=postgres port=5432 dbname=postgres user=postgres password=postgres");
if (!$connection) {
    exit(pg_last_error());
}

pg_close($connection);