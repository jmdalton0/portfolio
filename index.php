<?php

$path = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
];

if(array_key_exists($path, $routes)) {
    require $routes[$path];
} else {
    require "error.view.php";
}