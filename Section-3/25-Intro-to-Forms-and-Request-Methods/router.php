<?php
require "Response.php";

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    "/working/Section-3/24-Programming-is-Rewriting/" => './controllers/index.php',
    "/about"   => './controllers/about.php',
    "/notes"   => './controllers/notes.php',
    "/note"    => './controllers/note.php',
    "/contact" => './controllers/contact.php',
    "/rating"  => './controllers/rating.php',
];

function routeToController($uri, $routes){
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort(Response::NOT_FOUND);
    }
};

routeToController($uri, $routes);