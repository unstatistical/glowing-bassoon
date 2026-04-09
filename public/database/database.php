<?php

include "query/query.php";
include "transaction/transaction.php";

class Database {
    private PgSql\Connection $connection;

    private string $connection_string;
    private string $host;
    private string $port;
    private string $dbname;
    private string $user;
    private string $password;

    public function __construct(string $dbname, string $user, string $password, string $host = "localhost", string $port = "5432") {
        $this->host = $host;
        $this->port = $port;
        $this->dbname = $dbname;
        $this->user = $user;
        $this->password = $password;

        $this->connection_string = "host=$this->host port=$this->port dbname=$this->dbname user=$this->user password=$this->password";

        $this->connection = pg_connect($this->connection_string);
    }

    public function begin(): void {
        $this->query("BEGIN");
    }

    public function query(string $query, string ...$params): PgSql\Result {
        if (empty($params)) {
            return pg_query($this->connection, $query);
        } else {
            return pg_query_params($this->connection, $query, $params);
        }
    }

    public function commit(): void {
        $this->query("COMMIT");
    }

    public function rollback(): void {
        $this->query("ROLLBACK");
    }

    public function __destruct() {
        pg_close($this->connection);
    }
}