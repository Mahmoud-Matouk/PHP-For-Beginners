<?php
require '../functions.php';

$config = require("../config.php");
$db = new DataBase($config['dataBase']);

$heading = "Notes";

$notes = $db->query('SELECT * FROM notes where user_id = 1 or 2')->get();

require "views/notes.view.php";