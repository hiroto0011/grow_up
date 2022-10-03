<?php
// DB接続情報
$dsn = 'mysql:host=mysql1.php.xdomain.ne.jp;dbname=sucseed123_sucseedtraining;charset=utf8;';
$username = 'sucseed123_train';
$password = 'sucseed123';

/*
if(!isset($_SESSION)){
session_start();
}
$id = $_SESSION['id'];
echo $id;
*/
//まずグローバル変数を初期化
//$_SESSION = array();
//セッションを破壊
//session_destroy();

if(isset($_GET['s_id'])){
$s_id = $_GET['s_id'];
}
if(isset($_SESSION['username']))
{
  $pdo = new PDO($dsn,$username,$password);
  $sql="insert into gu_user_search_history values(:user_name,:s_id,:time)";
  $a=$pdo->prepare($sql);
  $a -> bindParam(":user_name",$_SESSION['username']);
  $a -> bindParam(":s_id",$s_id);
  $ab=date("YmdHis");
  $a -> bindParam(":time",$ab);
  $a->execute();
}
