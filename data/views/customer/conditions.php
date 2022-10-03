<!--案件検索結果表示-->
<?php

if(isset($_GET['id']))
{
	$pdo = new PDO($dsn,$username,$password);
	$sql="delete from gu_user_search_condition
				where gu_user_search_condition.user_name=:username
				and gu_user_search_condition.id=:id";
	$stmt=$pdo->prepare($sql);
	$stmt->bindParam(":username",$_SESSION['username']);
	$stmt->bindParam(":id",$_GET['id']);
	$stmt->execute();
	echo '<script>';
	echo 'alert("削除しました。");';
	echo 'history.back();';
	echo '</script>';
}

echo $this->layout('contentArea', array(
	'title' => '保存した検索条件',
	'content' => $this->yield('content'),
	'breadcrumbs' => array(
		'TOP',
		'My Page'=>'customer-mypage.php',
		'保存した検索条件'
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
	<p>保存した検索条件を表示します。</p>
<br>

	<div id="about">
		<h3><span></span>　保存した検索条件</h3>
	</div>
	<br>
  <?php
	$pdo = new PDO($dsn,$username,$password);
	$pdo -> exec("set names utf8");
	$sql = "select * from gu_user_search_condition
					where gu_user_search_condition.user_name = :name
					order by gu_user_search_condition.saved_at desc";
	$stmt_con = $pdo->prepare($sql);
	$stmt_con -> bindParam(":name",$_SESSION['username']);
	$stmt_con -> execute();
  while($rec = $stmt_con -> fetch(PDO::FETCH_ASSOC))
	{
  if($rec==null)
  {
    echo 'キープした検索条件がございません。';
		break;
  }
  else
  {
		echo '<div style="border:solid;border-width:1px;width:50%;padding:2%;">';
    foreach($rec as $con => $value)
    {
			echo '<form class="search_condition" action="work.php" method="get">';
			if($value==null)
			continue;
			switch($con)
			{
				case 'prefectures' : echo 'エリア : ',$value,'<br>';
														 echo '<input type="hidden" name="prefectures" value="',$value,'">';
														 break;
				case 'occupation'  : echo '職種 : ',$value,'<br>';
														 foreach(explode(",",$value) as $occ_condition)
														 echo '<input type="hidden" name="occupation[]" value="',$occ_condition,'">';
														 break;
				case 'type'        : echo '雇用形態 : ',$value,'<br>';
														 foreach(explode(",",$value) as $type_condition)
														 {echo '<input type="hidden" name="type[]" value="',$type_condition,'">';}
														 break;
				case 'money_min'   : echo '最低給料 : ',$value,'<br>';
														 echo '<input type="hidden" name="money_min" value="',$value,'">';
														 break;
				case 'money_max'   : echo '最高給料 : ',$value,'<br>';
														 echo '<input type="hidden" name="money_max" value="',$value,'">';
														 break;
				case 'update'      : echo '更新日 : ',$value,'日以前<br>';
														 echo '<input type="hidden" name="update" value="',$value,'">';
														 break;
				case 'keyword'     : echo 'フリーワード : ',$value,'<br>';
														 echo '<input type="hidden" name="keyword" value="',$value,'">';
														 break;
				/*case 'saved_at'    : echo '保存した日 : ',$value,'<br>';
				                     break;*/
			}
		}
		echo '<input style="padding:0.5%;" type="submit" value="この条件で再検索">';
		echo '<a href="customer-conditions.php?id=',$rec['id'],'">この条件を削除</a>';
		echo '</form>';
		echo '</div>';
		echo '<br>';
    }
  }
?>
<br>
<br>
</div>

</div>

</div>
