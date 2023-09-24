<?php
use Core\Response;

function dd($value) {
    // if i want to dispaly an array => var_dump(['something')
    echo "<pre>";
    var_dump($value); // info about the server - variable that is accessible from any script/file (super global)
    echo "</pre>";

    die(); // nothing after this will be executed
}

function isValue($value) {
    return $_SERVER['REQUEST_URI'] == $value;
}

function abort($code = Response::NOT_FOUND) {
    http_response_code($code);
    require base_path("views/{$code}.php");
    die();
}

function authorize($condition, $status = Response::FORBBIDEN) { 
    if(!$condition) {
        abort($status);
    }
}

function base_path($path) {
    return BASE_PATH . $path;
}

function view($path, $attributes = []) {
    extract($attributes);
    require base_path('views\\' . $path);
}

?>