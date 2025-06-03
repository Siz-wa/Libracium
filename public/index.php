<?php

require_once __DIR__.'../../app/Core/Bootstrap.php';

use app\Core\Router;
use Routes\Web;

$router = new Router();
$routes = new Web();

$routes->loadRoutes($router);

$uri = $_SERVER['REQUEST_URI'] === '/Libracium/public/'?'/Libracium/public/home':'/Libracium/public/';
// var_dump($uri);
// gets the URI and method
$action = trim(parse_url($uri, PHP_URL_PATH));
$method = $_SERVER['REQUEST_METHOD'];
$router->dispatch($action, $method);

?>