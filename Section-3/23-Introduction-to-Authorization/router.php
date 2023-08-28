<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    "/working/Section-3/22-Render-the-Notes-and-Note-Page/"        => './controllers/index.php',
    "/working/Section-3/22-Render-the-Notes-and-Note-Page/about"   => './controllers/about.php',
    "/working/Section-3/22-Render-the-Notes-and-Note-Page/notes"   => './controllers/notes.php',
    "/working/Section-3/22-Render-the-Notes-and-Note-Page/note"    => './controllers/note.php',
    "/working/Section-3/22-Render-the-Notes-and-Note-Page/contact" => './controllers/contact.php',
    "/working/Section-3/22-Render-the-Notes-and-Note-Page/rating"  => './controllers/rating.php',
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