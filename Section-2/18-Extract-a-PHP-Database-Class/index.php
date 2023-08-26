<?php
require "functions.php";
// require "controllers/index.php";

// ? connect to our MySQL database.
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $port = 3306;
    $dbname = 'muc';

    $dsn = "mysql: host=$host; port=$port; dbname=$dbname; user=$username; charset=utf8mb4";

    $pdo = new PDO($dsn);
    $statement = $pdo->prepare("SELECT * FROM php");
    $statement->execute();

    $posts = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach ($posts as $post) {
        Echo "<li>" . $post['name']; "</li>";
    }

    dd($posts);