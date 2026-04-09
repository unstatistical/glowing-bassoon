<?php

class Transaction {
    private Database $database;

    private bool $active;

    public function __construct(Database $database) {
        $this->database = $database;

        $this->begin();
    }

    public function begin(): void {
        $this->active = true;
        $this->database->begin();
    }

    public function commit(): void {
        $this->active = false;
        $this->database->commit();
    }

    public function rollback(): void {
        $this->active = false;
        $this->database->rollback();
    }

    public function __destruct() {
        if ($this->active) {
            $this->rollback();
        }
    }
}