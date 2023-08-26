<?php
require "functions.php";
require "Database.php";

    $db = new Database();
    $search = $db->query("SELECT * FROM name")->fetchAll(PDO::FETCH_ASSOC);
    dd($search);