<?php
require "functions.php";
require "Database.php";

    $config = require("config.php");

    $db = new Database($config['dataBase']);
    $search = $db->query("SELECT * FROM name")->fetchAll();
    dd($search);