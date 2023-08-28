<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    "/working/Section-2/15-Make-a-PHP-Router/"          => './controllers/index.php',
    "/working/Section-2/15-Make-a-PHP-Router/about"     => './controllers/about.php',
    "/working/Section-2/15-Make-a-PHP-Router/contact"   => './controllers/contact.php',
    "/working/Section-2/15-Make-a-PHP-Router/rating"    => './controllers/rating.php',
];

function routeToController($uri, $routes){
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
};

routeToController($uri, $routes);

function abort($code = 404) {
    http_response_code($code);
    Echo "$code! Error Not Found..";
    die();
};