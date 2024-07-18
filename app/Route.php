<?php

use CoffeeCode\Router\Router;

/**
 * @var Router $router
 */
$router->namespace("App\Controllers");

$router->get("/", "Page:control", 'page.control');
