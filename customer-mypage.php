<?php

header("Content-Type: text/html; charset=UTF-8");

include('data/autoload.php');

$route = 'customer/mypage';
$router = new Router($route);
$router->run();