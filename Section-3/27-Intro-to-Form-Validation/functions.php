<?php
function dd($value) {
    Echo "<pre>";
    var_dump($value);
    Echo "</pre>";
    die();
}

function urlIs($value){
    return $_SERVER['REQUEST_URI'] === $value;
}

function abort($code = 404) {
    http_response_code($code);
    Echo "$code! Error..";
    die();
};

function authorize($condition){
    if (! $condition) {
        abort(Response::FORBIDDEN);
    };
};