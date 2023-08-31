<?php
require '../functions.php';
require '../Response.php';
$config = require("../config.php");
$db = new DataBase($config['database']);

$heading = "Note";
$currentUserId = 1;

$note = $db->query('SELECT * FROM notes where id = :id', ['id' => $_GET['id']])->fetch();

if (! $note) {
    abort(Response::NOT_FOUND);
};
if ($note['user_id'] !== $currentUserId) {
    abort(Response::FORBIDDEN);
};

require "views/note.view.php";