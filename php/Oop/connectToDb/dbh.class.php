<?php

class Dbh{
    private $host = "localhost";
    private $user = "admin";
    private $password = "admin";
    private $dbName = "db_primer";

    protected function connect(): PDO
    {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        $pdo = new PDO($dsn, $this->user, $this->password);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}
