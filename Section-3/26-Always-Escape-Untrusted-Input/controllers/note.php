<?php
require '../functions.php';
require '../Response.php';
$config = require("../config.php");
$db = new DataBase($config['dataBase']);

$heading = "Note";
$currentUserId = 1;

$note = $db->query('SELECT * FROM notes where id = :id', ['id' => $_GET['id']])->find();

authorize($note['user_id'] === $currentUserId);

require "views/note.view.php";