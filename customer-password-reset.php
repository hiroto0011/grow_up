<?php

header("Content-Type: text/html; charset=UTF-8");

include('data/autoload.php');

$route = 'redirect';
$router = new Router($route, array(
	'title' => '移動する',
	'duration' => 3,
	'url' => 'login-input.php',
	'message' => 'パスワードを変更しました。新しいパスワードでログインしてください。',
));
$router->controller('customer/passwordReset');
$router->run();