<?php

function abort($code) {
    http_response_code($code);
    require 'view/error.view.php';
}
