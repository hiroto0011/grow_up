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
// GETデータを受け取る
include('data/controllers/search-function.php');
include('data/lib/page-number-function.php');
if(isset($_POST['page_number']))
$page_number=$_POST['page_number'];
else{
	$page_number=1;
}
if(isset($_POST['data_ryou']))
$data_ryou=$_POST['data_ryou'];
else {
	$data_ryou=3;
}
