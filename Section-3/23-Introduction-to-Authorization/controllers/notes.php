<?php
require '../functions.php';
$config = require("../config.php");
$db = new DataBase($config['database']);

$heading = "Notes";

$notes = $db->query('SELECT * FROM notes where user_id = 1 or 2')->fetchAll();

require "views/notes.view.php";