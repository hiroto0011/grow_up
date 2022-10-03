<?php

header("Content-Type: text/html; charset=UTF-8");

include('data/autoload.php');

$route = 'redirect';
$router = new Router($route, array(
	'title' => '移動する',
	'duration' => 3,
	'url' => isset($_SESSION['username']) ? 'customer-mypage.php' : 'login-input.php',
	'message' => '誠にありがとうございます。メールアドレスをご確認しました。',
));
$router->controller('customer/activation');
$router->run();