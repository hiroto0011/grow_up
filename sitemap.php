<?php

header("Content-Type: text/html; charset=UTF-8");

include('data/autoload.php');

$route = 'site_map';
$router = new Router($route);
$router->run();
