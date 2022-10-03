<?php

header("Content-Type: text/html; charset=UTF-8");

//use CustomLib\Router;

include('data/autoload.php');

$route = 'news_detail';
$router = new Router($route);
$router->run();
