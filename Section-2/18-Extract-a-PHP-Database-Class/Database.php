<?php
class DataBase {
    public $connection;
    public function __construct() {
        $host     = 'localhost';
        $username = 'root';
        $password = '';
        $port     = 3306;
        $dbname   = 'muc';
    
        $dsn = "mysql: host=$host; user=$username; ;password=$password port=$port; dbname=$dbname; charset=utf8mb4";

        $this->connection = new PDO($dsn);
    }
    public function query($query) {
        $statement = $this->connection->prepare($query);
        $statement->execute();
        return $statement;
    }
};