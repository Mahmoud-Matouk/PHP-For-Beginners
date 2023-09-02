<?php
require "Response.php";
$routes = require('routes.php');

function routeToController($uri, $routes){
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort(Response::NOT_FOUND);
    }
};

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

routeToController($uri, $routes);