<!--案件検索結果表示-->
<?php

if(isset($_GET['s_id']))
{
	$pdo = new PDO($dsn,$username,$password);
	$sql="delete from gu_user_keep
				where gu_user_keep.user_name=:username
				and gu_user_keep.job_id=:id";
	$stmt=$pdo->prepare($sql);
	$stmt->bindParam(":username",$_SESSION['username']);
	$stmt->bindParam(":id",$_GET['s_id']);
	$stmt->execute();
	echo '<script>';
	echo 'alert("削除しました。");';
	echo 'history.back();';
	echo '</script>';
}

echo $this->layout('contentArea', array(
	'title' => '保存したお仕事',
	'content' => $this->yield('content'),
	'breadcrumbs' => array(
		'TOP',
		'My Page'=>'customer-mypage.php',
		'保存したお仕事'
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
	<p>
		保存しておいたお仕事情報を表示します。
	</p>
</div>
<!--以下案件表示 -->
<?php
$conditions=array();
	try{
		// データベースへの接続を表すPDOインスタンスを生成
		  $pdo = new PDO($dsn,$username,$password);
			$pdo -> exec("set names utf8");
			$sql = search_sql_maker($conditions,'keep');
			$stmt = $pdo->prepare($sql);
			$stmt2 = $pdo->prepare($sql);
			$stmt -> execute();
			$stmt2 -> execute();
		// 1行ずつ取得
		$total=array();
		while($rec = $stmt->fetch(PDO::FETCH_ASSOC)){
			// テーブルの項目名を指定して値を表示
		  if(isset($total[$rec['job_id']]))
			{
				continue;
			}
			else {
				$total[$rec['job_id']]='1';
			}
		}
		?>


		<p style="color:#7FC3EA;font-size:1.5em">
			<?php
			echo '<p style="color:#7FC3EA;font-size:1.5em;text-align:center;margin-top:20px;margin-bottom:20px;">';
			echo count($total),"件の結果があります。";
			echo '</p>';
			?>
		</p>
   <?php page_number_printer($data_ryou,count($total),$page_number); ?>

		<?php
     $ryou_counter=0;
while($rec = $stmt2->fetch(PDO::FETCH_ASSOC)){
	$ryou_counter++;
	if( $ryou_counter <= ($page_number-1)*$data_ryou || $ryou_counter>$page_number*$data_ryou)
	continue;
?>

<div class="container">
	<div class="area-box2">
	  <div class="area-box2-inner">
	<div class="area-box2-head">
	  <div class="mod-head">
	   <div class="mod-head-labels">
	     <div class="mod-head-labelitem">
	       <!--<img src="seisyain.png"  width="110" alt="正社員">-->
	       <p class="mod-head-p">仕事No：<?php print htmlspecialchars($rec['id']); ?></p>
	     </div>
	   </div>

	 </div>
	 </div>
	<div class="area-box2-body2">
	<div class="mod-detail-head">
	  <h3 class="mod-detail-head">
	    <p>
	      <a><?php print htmlspecialchars($rec['title']); ?></a>
	    </p>
	  </h3>
	 </div>
	 <div class="mod-detail-body">
	 <div class="mod-detail-main">
	  <table class="mod-detail-table">
	  <tbody class="mod-detail-table-tbody">
	   <tr class="mod-detail-table-tr">
	    <th class="mod-detail-table-th-top" nowrap>仕事内容</th>
	    <td class="mod-detail-table-td-top">
	    <?php print nl2br(htmlspecialchars($rec['description'])); ?></td>
	   </tr>
	   <tr class="mod-detail-table-tr">
	    <th class="mod-detail-table-th" nowrap>給与</th>
	    <td class="mod-detail-table-td">
	  <div class="float:left;"><?php print htmlspecialchars($rec['allowance']); ?> <?php print htmlspecialchars($rec['money']); ?>
	  </div>
	    </td>
	   </tr>
	   <tr class="mod-detail-table-tr">
	    <th class="mod-detail-table-th" nowrap>時間<br>曜日・日数</th>
	    <td class="mod-detail-table-td">
	  <div class="float:left;">
	    <?php print htmlspecialchars($rec['hours']); ?>
	  </div>
	    </td>
	    </tr>
	    <tr class="mod-detail-table-tr">
	     <th class="mod-detail-table-th" nowrap>就業時間</th>
	     <td class="mod-detail-table-td">
	   <div class="float:left;"><?php print htmlspecialchars($rec['period']); ?>
	   </div>
	     </td>
	    </tr>
	  </tr>
	  <tr class="mod-detail-table-tr">
	   <th class="mod-detail-table-th" nowrap>勤務地</th>
	   <td class="mod-detail-table-td">
			 <?php print htmlspecialchars($rec['prefectures']); ?>
			 <br>
			 <?php print htmlspecialchars($rec['district']); ?>
	   </td>
	  </tr>
	   </tbody>
	     </table>
	 </div>
	 </div>
	       </div>
	       <div class="area-box2-foot">
	         <div class="mod-buttons">
	             <!--<a href="job.php" class="unit1-buttons">詳細を見る</a>-->
							 <form action="job.php" method="get">
								 <input type="hidden" name="s_id" value="<?php print htmlspecialchars($rec['id']); ?>">
					 			 <input type="submit" class="unit1-buttons" value="詳細を見る">
					 		</form>

					 </div>
					 <br>
					 <br>
					 <p>
						 保存した日：
						 <?php echo $rec['keeped_at']?>
					 </p>
					 <p>
						 更新日：
						 <?php echo $rec['updated_at']?>
					 <?php echo '<a href="customer-keep.php?s_id=',$rec['id'],'" style="float:right">'; ?>
						 このお仕事を削除
					 </a>
				 </p>
	       </div>

	 </div>
	</div>


</div>
	<?php
		print '<br />';
		}
		// 接続を閉じる
		$pdo = null;
	}catch (PDOException $e) {
		// UTF8に文字エンコーディングを変換します
		echo mb_convert_encoding($e->getMessage(),'UTF-8','SJIS-win');
		die();
	}
	?>


<?php page_number_printer($data_ryou,count($total),$page_number); ?>

</div>

</div>
