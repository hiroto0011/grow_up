<?php
// DB接続情報
$dsn = 'mysql:host=mysql1.php.xdomain.ne.jp;dbname=sucseed123_sucseedtraining;charset=utf8;';
$username = 'sucseed123_train';
$password = 'sucseed123';

if(!isset($_GET['id']))
{
  header('Location: news.php');
}
else {
  $news_id = $_GET['id'];
}
