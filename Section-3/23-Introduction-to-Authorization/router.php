<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    "/working/Section-3/23-Introduction-to-Authorization/"        => './controllers/index.php',
    "/working/Section-3/23-Introduction-to-Authorization/about"   => './controllers/about.php',
    "/working/Section-3/23-Introduction-to-Authorization/notes"   => './controllers/notes.php',
    "/working/Section-3/23-Introduction-to-Authorization/note"    => './controllers/note.php',
    "/working/Section-3/23-Introduction-to-Authorization/contact" => './controllers/contact.php',
    "/working/Section-3/23-Introduction-to-Authorization/rating"  => './controllers/rating.php',
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