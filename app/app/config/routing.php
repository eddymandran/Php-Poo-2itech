<?php

require_once "src/Resources/config/routes.php";

if (!array_key_exists($_SERVER["REQUEST_URI"], $routes)) {
    die('Resource not found');
}

$route = $routes[$_SERVER["REQUEST_URI"]];
