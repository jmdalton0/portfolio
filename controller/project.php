<?php

$id = htmlspecialchars($_GET['project']);
$project = $projects[$id];

if ($project !== null) {
    require 'view/project.view.php';
} else {
    abort(404);
}