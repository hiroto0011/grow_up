<?php
// DB接続情報
$dsn = 'mysql:host=mysql1.php.xdomain.ne.jp;dbname=sucseed123_sucseedtraining;charset=utf8;';
$username = 'sucseed123_train';
$password = 'sucseed123';

if(!isset($_SESSION)){
session_start();
}
if (!isset($_SESSION['username'])) {
	header('Location: login-input.php');
}
$validator = new Validator();

$model = new UserModel();
$model = $model->find('username', $_SESSION['username']);
