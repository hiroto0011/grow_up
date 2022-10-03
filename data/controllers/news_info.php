<?php
// DB接続情報
$dsn = 'mysql:host=mysql1.php.xdomain.ne.jp;dbname=sucseed123_sucseedtraining;charset=utf8;';
$username = 'sucseed123_train';
$password = 'sucseed123';

include('data/lib/page-number-function.php');
//page number
if(isset($_POST['page_number']))
{
  $now = $_POST['page_number'];
}
else {
  $now = 1;
}
//何個ずつ表示
if(isset($_POST['data_ryou']))
{
  $num = $_POST['data_ryou'];
}
else {
  $num = 3;
}
?>
