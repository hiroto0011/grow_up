<!--案件検索結果表示-->
<?php

if(isset($_FILES['file']['tmp_name']))
{
  if(is_uploaded_file($_FILES['file']['tmp_name']))
  {
		if(!preg_match("/^[.A-Za-z0-9]*$/",basename($_FILES['file']['name'])))
		{
		  echo '<script>';
		  echo 'alert("ファイル名は英語と数字のみ可能です");';
			echo 'history.back();';
		  echo '</script>';
		}
		else{
    if(!file_exists('user-upload-file'))
    {
      mkdir('user-upload-file');
    }
    $file='user-upload-file/'.basename($_FILES['file']['name']);
    if(move_uploaded_file($_FILES['file']['tmp_name'],$file))
    {
      $pdo = new PDO($dsn,$username,$password);
      $sql = "insert into gu_user_upload_files values(:username,:file,:date,null)";
      $a = $pdo->prepare($sql);
      $a -> bindParam(":username",$_SESSION['username']);
      $filename=basename($_FILES['file']['name']);
      $a -> bindParam(":file",$filename);
      $date=date("YmdHis");
      $a->bindParam(":date",$date);
      $a->execute();
      echo '<script>';
      echo 'alert("アップロードしました。")';
      echo '</script>';
    }
    else {
      echo '<script>';
      echo 'alert("アップロードに失敗しました。")';
      echo '</script>';
    }
  }
  }
}

if(isset($_GET['id']))
{
	$pdo = new PDO($dsn,$username,$password);
	$pdo -> exec("set names utf8");
  $sql = "select * from gu_user_upload_files
          where gu_user_upload_files.user_name = :user
					and gu_user_upload_files.file_id = :id";
  $stmt = $pdo -> prepare($sql);
  $stmt -> bindParam(":user",$_SESSION['username']);
	$stmt -> bindParam(":id",$_GET['id']);
  $stmt -> execute();
  $key = $stmt -> fetch(PDO::FETCH_ASSOC);
	$file_dir = "user-upload-file/".$key['file'];
	unlink($file_dir);

	$pdo = new PDO($dsn,$username,$password);
	$pdo -> exec("set names utf8");
  $sql = "delete from gu_user_upload_files
          where gu_user_upload_files.user_name=:user
          and gu_user_upload_files.file_id=:id";
  $stmt2 = $pdo -> prepare($sql);
  $stmt2 -> bindParam(":user",$_SESSION['username']);
  $stmt2 -> bindParam(":id",$_GET['id']);
  $stmt2 -> execute();

  echo '<script>';
  echo 'alert("削除しました。");';
	echo 'location.href = "customer-file.php";';
  echo '</script>';
}


echo $this->layout('contentArea', array(
	'title' => 'アップロードしたファイル',
	'content' => $this->yield('content'),
	'breadcrumbs' => array(
		'TOP',
		'My Page'=>'customer-mypage.php',
		'アップロードしたファイル'
	),
  'sidebar_menu' => array(
		'検索履歴' => 'customer-search-history.php',
		'保存した検索条件'=>'customer-conditions.php',
		'保存したお仕事'=>'customer-keep.php',
		'ファイルアップロード'=>'customer-file.php'
	)
));?>
<link rel="stylesheet" type="text/css" href="./css/kyuzin.css">

<div id="contentsArea">

<div id="contentsLeft">

<div class="contentsl_1">
	<p>アップロードしたファイルを表示します。</p>
  <p>アップロードしたファイルは人材を探している会社が見えるようになります。</p>
<br>

	<div id="about">
		<h3><span></span>　アップロードしたファイル</h3>
	</div>
  <?php
  $pdo = new PDO($dsn,$username,$password);
	$pdo -> exec("set names utf8");
  $sql = "select * from gu_user_upload_files
          where gu_user_upload_files.user_name = :user";
  $stmt = $pdo -> prepare($sql);
  $stmt -> bindParam(":user",$_SESSION['username']);
  $stmt -> execute();
  $key = $stmt -> fetchAll(PDO::FETCH_ASSOC);
  if($key==null)
  {
    echo 'アップロードしたファイルがありません。';
  }
  else
  {
    foreach($key as $data)
    {
			echo '<br>';
			echo '<br>';
			if(preg_match("/(.+).jpg/",$data['file'])||
			   preg_match("/(.+).png/",$data['file']))
				 {
					 echo '<p><img class="userfile" src="user-upload-file/',$data['file'],'"</p>';
				 }
				 echo '<form action="customer-file-download.php" method="post">';
				 echo '<input type="hidden" name="filename" value="',$data['file'],'">';
         echo '<p><button>',$data['file'],'</button> / uploaded at ',$data['uploaded_at'],
           '<a href="customer-file.php?id=',$data['file_id'],'" style="float:right">
       このファイルを削除</a></p>';
			 echo '</form>';
      echo '<hr>';
    }
  }
?>
<br>
<br>

  <div id="about">
    <h3><span></span>　ファイルをアップロードする</h3>
  </div>
  <form action="customer-file.php"method="post" enctype="multipart/form-data">
    <p><input type="file" name="file"></p>
    <br>
    <p><input type="submit"value="アップロード"></p>
  </form>
</div>

</div>

</div>
