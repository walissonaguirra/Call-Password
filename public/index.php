<?php
// var_dump($_SERVER, $_GET);exit;
require_once dirname(__DIR__) . '/vendor/autoload.php';

use CoffeeCode\Router\Router;

$router = new Router('https://127.0.0.1:8000');

include_once dirname(__DIR__) . '/app/Route.php';

$router->dispatch();