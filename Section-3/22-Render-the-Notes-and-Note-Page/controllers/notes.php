<?php

$config = require("../config.php");
$db = new DataBase($config['database']);

$heading = "Notes";

$note = [];
dd($db);
require "views/notes.view.php";