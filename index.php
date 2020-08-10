
<?php

$database = require 'core/bootstrap.php';

//$router = new Router;
//require 'routes.php';
// $uri = trim($_SERVER['REQUEST_URI'],'/');
//return $router->direct('about');
//var_dump(trim(($_SERVER['REQUEST_URI']),'/'));
$router = Router::load('routes.php');
//require $router->direct(Request::uri());
require $router->direct(Request::uri(),Request::methodType());