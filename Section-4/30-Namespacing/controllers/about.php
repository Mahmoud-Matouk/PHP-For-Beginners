<?php
const BASE_PATH = __DIR__.'/../';

require BASE_PATH . 'Core/functions.php';

view("about.view.php", [
    'heading' => 'About Us',
]);