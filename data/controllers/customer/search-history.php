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
else {
	$page_number=1;
}
if(isset($_POST['data_ryou']))
$data_ryou=$_POST['data_ryou'];
else {
	$data_ryou=3;
}
if(isset($_GET['s_id'])){
	if(!isset($_SESSION['username']))
	{
		echo '<script>';
		echo 'alert("ログインしてください。");';
		echo 'window.open("about:blank","_self").close();';
		echo '</script>';
	}
	else
	{
		$pdo = new PDO($dsn,$username,$password);
		$sql="select job_id from gu_user_keep
		      where gu_user_keep.user_name=:username";
	  $stmt=$pdo->prepare($sql);
		$stmt->bindParam(":username",$_SESSION['username']);
		$stmt->execute();
		$first=1;
		while($re=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			if($re['job_id']==$_GET['s_id'])
			{
				$first=0;
				echo '<script>';
				echo 'alert("既にキープしたお仕事です。");';
				echo 'window.open("about:blank","_self").close();';
				echo '</script>';
				break;
			}
		}
    if($first==1)
		{
    $pdo = new PDO($dsn,$username,$password);
		$sql2="insert into gu_user_keep values(:username,:job_id,:date)";
		$stmt2=$pdo->prepare($sql2);
		$stmt2->bindParam(":username",$_SESSION['username']);
		$stmt2->bindParam(":job_id",$_GET['s_id']);
		$ab=date("YmdHis");
		$stmt2 -> bindParam(":date",$ab);
		$stmt2->execute();
		echo '<script>';
		echo 'alert("キープしました。");';
		echo 'window.open("about:blank","_self").close();';
		echo '</script>;';
	  }
	}
}
