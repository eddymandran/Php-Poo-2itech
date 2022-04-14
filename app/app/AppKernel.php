<?php

require_once "app/config/routing.php";
require_once "app/AbstractController.php";

$method = $route["action"];
$controller = new $route["controller"];
$controller->$method();
