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