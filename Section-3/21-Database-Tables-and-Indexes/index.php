<?php
require "functions.php";
require "Database.php";

    $config = require("config.php");
    $db = new Database($config['dataBase']);

    $id = $_GET['id'];
    $query = "SELECT * FROM php WHERE id = id";
    $search = $db->query($query, [":id" => $id])->fetch();
    dd($search);