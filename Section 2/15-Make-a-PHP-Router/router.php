<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    "/" => '/controller/index.php',
    "/contact" => '/controller/contact.php',
    "/about" => '/controller/about.php',
    "/rating" => '/controller/rating.php',
];

function routeToController($uri, $routes){
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

routeToController($uri, $routes);
function abort($code = 404) {
    http_response_code($code);
    require "views/{$code}.php";
    die();
}