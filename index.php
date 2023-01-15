<?php

require 'controller/error.php';

$path = parse_url($_SERVER['REQUEST_URI'])['path'];
$routes = [
    '/' => 'controller/index.php',
    '/index.php' => 'controller/index.php',
    '/projects' => 'controller/projects.php',
    '/experience' => 'controller/experience.php',
    '/contact' => 'controller/contact.php',
    '/resume' => 'controller/resume.php'
];

if(array_key_exists($path, $routes)) {
    require $routes[$path];
} else {
    abort(404);
}