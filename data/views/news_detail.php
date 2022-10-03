<?php
if(isset($_SESSION['username'])){
echo $this->layout('contentArea', array(
	'title' => 'ニュース',
	'content' => $this->yield('content'),
	'breadcrumbs' => array(
		'TOP',
		'ニュース' => 'news.php',
    '詳細内容'
	),
	'sidebar_menu' => array(
		'検索履歴' => 'customer-search-history.php',
		'保存した検索条件'=>'customer-conditions.php',
		'保存したお仕事'=>'customer-keep.php',
		'ファイルアップロード'=>'customer-file.php'
	)
));
}
else {
	echo $this->layout('contentArea', array(
		'title' => 'ニュース',
		'content' => $this->yield('content'),
		'breadcrumbs' => array(
			'TOP',
			'ニュース' => 'news.php',
      '詳細内容'
		)
	));
}
?>

<div id="contentsArea">
<div id="contentsLeft">
  <div class="contentsl_1">

<?php

try{
  $pdo = new PDO($dsn,$username,$password);
  $pdo -> exec("set names utf8");
  $sql = "select * from news where id= :id";
  $stmt = $pdo -> prepare($sql);
  $stmt -> bindParam(":id",$news_id);
  $stmt -> execute();
  $rec = $stmt->fetch(PDO::FETCH_ASSOC);
  if($rec==null)
  {
    echo 'データベースに登録されていない番号です。';
  }
  else
  {
    $file = "news/". $rec['file_name'];
    if(file_exists($file))
    {
      $contents=file_get_contents($file);
      echo $contents;
      echo '<br><br>';
			$YmdHis = explode(" ",$rec['updated_at']);
			$Ymd = $YmdHis[0];
      echo 'アップロード：',$Ymd;
    }
    else {
      echo 'newsフォルダ内にファイルがございません。';
    }
  }
}
catch (PDOException $e) {
		// UTF8に文字エンコーディングを変換します
		echo mb_convert_encoding($e->getMessage(),'UTF-8','SJIS-win');
		die();
	}
?>

<br>
<br>
<br>
</div>
</div>

</div>
