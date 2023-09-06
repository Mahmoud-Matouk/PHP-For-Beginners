<?php
const BASE_PATH = __DIR__ . '/../../';
require BASE_PATH . 'Core/functions.php';

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);
dd($config);

$notes = $db->query('select * from notes where user_id = 1')->get();

view("notes/index.view.php", [
    'heading' => 'My Notes',
    'notes' => $notes
]);