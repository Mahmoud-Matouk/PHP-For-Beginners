<?php

require '../../Validator.php';

$config = require '../../config.php';
$db = new DataBase($config['dataBase']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];
    
    if (! Validator::string($_POST['body'])) {
        $errors['body'] = 'a body is required';
    }
    
    if (empty($errors)) {
        $db->query ("INSERT INTO `notes`(`id`, `body`, `user_id`) VALUES (:id, :body, :user_id)", [
            'id' => 1,
            'body' => $_POST['body'],
            'user_id' => 1,
        ]);
    };
};

require '../../functions.php';
require '../views/notes/create.view.php';