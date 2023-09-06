<?php
const BASE_PATH = __DIR__.'/../';

require BASE_PATH . 'Core/functions.php';

view("contact.view.php", [
    'heading' => 'Contact Us',
]);