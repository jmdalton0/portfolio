<?php

$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/' || $uri === '/index.php') {
    require('controller/index.php');

} else if ($uri === '/projects') {
    require('controller/projects.php');

} else if ($uri === '/experience') {
    require('controller/experience.php');

} else if ($uri === '/contact') {
    require('controller/contact.php');

} else if ($uri === '/resume') {
    require('controller/resume.php');

} else {
    $error_code = 404;
    require('controller/error.php');
}