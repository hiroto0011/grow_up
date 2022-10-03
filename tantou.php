<?php

header("Content-Type: text/html; charset=UTF-8");

include('data/autoload.php');

$route = 'companies_responsible';
$router = new Router($route);
$router->run();
