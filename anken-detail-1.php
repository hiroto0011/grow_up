<?php

header("Content-Type: text/html; charset=UTF-8");
//use CustomLib\Router;

include('data/autoload.php');




$route = 'anken_server';

$router = new Router($route);
$router->run();
