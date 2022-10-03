<?php
// DB接続情報
$dsn = 'mysql:host=mysql1.php.xdomain.ne.jp;dbname=sucseed123_sucseedtraining;charset=utf8;';
$username = 'sucseed123_train';
$password = 'sucseed123';

if(!isset($_SESSION)){
session_start();
}
// GETデータを受け取る
include('data/controllers/search-function.php');
// ページ出力関数
include('data/lib/page-number-function.php');

//save
if(isset($_GET['save'])&&$_GET['save']=="1"&&isset($_SESSION['username']))
{
	$pdo = new PDO($dsn,$username,$password);
	$pdo -> exec("set names utf8");
	$sql = "insert into gu_user_search_condition values(:user,:prefectures,
	:occupation,:type,:money_min,:money_max,:update,:keyword,:save,null)";
	$stmt = $pdo -> prepare($sql);

	$stmt -> bindParam(":user",$_SESSION['username']);
  $null = null;
	if($prefectures=='null')
	$stmt -> bindParam(":prefectures",$null);
	else
	$stmt -> bindParam(":prefectures",$prefectures);

	if($occupation=='null')
	$stmt -> bindParam(":occupation",$null);
	else
	{
		if(count($occupation)==1)
		$stmt -> bindParam(":occupation",$occupation[0]);
		else
		{
			$occupation_db = implode(",", $occupation);
			$stmt -> bindParam(":occupation",$occupation_db);
		}
	}

	if($type=='null')
	$stmt -> bindParam(":type",$null);
	else
	{
		if(count($type)==1)
		$stmt -> bindParam(":type",$type[0]);
		else
		{
			$type_db = implode(",", $type);
			$stmt -> bindParam(":type",$type_db);
		}
	}

	if($money_min=='null')
	$stmt -> bindParam(":money_min",$null);
	else
	$stmt -> bindParam(":money_min",$money_min);

	if($money_max=='null')
	$stmt -> bindParam(":money_max",$null);
	else
	$stmt -> bindParam(":money_max",$money_max);

	if($update=='null')
	$stmt -> bindParam(":update",$null);
	else
	$stmt -> bindParam(":update",$update);

	if($keyword=='null')
	$stmt -> bindParam(":keyword",$null);
	else
	$stmt -> bindParam(":keyword",$keyword);

	$date=date("YmdHis");
	$stmt -> bindParam(":save",$date);

	$stmt -> execute();

	echo '<script>';
	echo 'alert("キープしました。");';
	echo 'window.open("about:blank","_self").close();';
	echo '</script>';
}

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
//keep
if(isset($_GET['s_id'])){
	if(!isset($_SESSION['username']))
	{
		echo '<script>';
		echo 'alert("ログインしてください。");';
		echo 'window.open("about:blank","_self").close();';
		echo '</script>';
	//	return "ログインしてください。";
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
				//return "既にキープしたお仕事です。";
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
		//return "キープしました。";
	  }
	}
}
