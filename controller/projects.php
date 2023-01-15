<?php

require 'model/project.php';

$projects = array();


// Retro Snake
$id = 0;
$name = 'Retro Snake';
$description = 'Play the classic arcade game';
$image = 'snake-thumbnail.png';
$project = new Project($id, $name, $description, $image);
$project->add_version(
    'html',
    'https://main.d2ekriyhkjbi1e.amplifyapp.com/'
);
$project->add_version(
    'react',
    'https://main.dgz0c5e5s0xmk.amplifyapp.com/'
);
$project->add_version(
    'vue',
    'https://main.d205xu0buubnb2.amplifyapp.com/'
);
array_push($projects, $project);


// Chess
$id = 1;
$name = 'Chess';
$description = 'Help train my Chess Engine';
$image = '';
$project = new Project($id, $name, $description, $image);
$project->add_version(
    'html',
    'jessedalton.com'
);
array_push($projects, $project);


// Other
$id = 2;
$name = 'Other';
$description = '';
$image = '';
$project = new Project($id, $name, $description, $image);
array_push($projects, $project);


if (array_key_exists('project', $_GET)) {
    require 'controller/project.php';
} else {
    require 'view/projects.view.php';
}