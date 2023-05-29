<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '' => 'index.php',
    '/' => 'index.php',
    '/index' => 'index.php',
    '/contact' => 'contact.php',
    '/experience' => 'experience.php',
    '/project' => 'project.php',
    '/projects' => 'projects.php',
    '/resume' => 'resume.php'
];

if (array_key_exists($uri, $routes)) {
    $path = 'src/php/controller/' . $routes[$uri];
    require $path;
} else {
    http_response_code(404);
}