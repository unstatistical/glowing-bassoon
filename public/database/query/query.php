<?php

class Query implements ArrayAccess {
    private Database $database;

    private PgSql\Result $result;
    private array $array;

    public function __construct(Database $database, string $query, string ...$params) {
        $this->database = $database;

        $this->result = $this->database->query($query, ...$params);
        $this->array = pg_fetch_all($this->result);
    }

    public function offsetExists(mixed $offset): bool {
        return isset($this->array[$offset]);
    }

    public function offsetGet(mixed $offset): mixed {
        return $this->array[$offset];
    }

    public function offsetSet(mixed $offset, mixed $value): void {
        throw new Exception();
    }

    public function offsetUnset(mixed $offset): void {
        throw new Exception();
    }

    public function __destruct() {
        pg_free_result($this->result);
    }
}