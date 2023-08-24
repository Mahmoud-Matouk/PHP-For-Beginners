<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    "/index.php" => '/controllers/index.php',
    "/contact"   => '/controllers/contact.php',
    "/about"     => '/controllers/about.php',
    "/rating"    => '/controllers/rating.php',
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
    Echo "$code! Error Not Found.";
    die();
}