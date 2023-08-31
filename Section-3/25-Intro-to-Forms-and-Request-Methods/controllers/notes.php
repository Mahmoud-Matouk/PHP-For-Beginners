<?php
require '../functions.php';
require '../Database.php';
$config = require("../config.php");
$db = new Database($config['database']);

$heading = "Notes";

$notes = $db->query('SELECT * FROM notes where user_id = 1 or 2')->get();

require "views/notes.view.php";