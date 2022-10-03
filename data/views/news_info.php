<?php
if(isset($_SESSION['username'])){
echo $this->layout('contentArea', array(
	'title' => 'ニュース',
	'content' => $this->yield('content'),
	'breadcrumbs' => array(
		'TOP',
		'ニュース'
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
			'ニュース'
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
      $sql = "select * from news order by news.updated_at desc;";
      $stmt = $pdo -> prepare($sql);
      $stmt2 = $pdo -> prepare($sql);
      $stmt -> execute();
      $stmt2 -> execute();
      $whole=0;
      while($stmt -> fetch())
      {
        $whole ++;
      }
      ?>
      <p style="color:#7FC3EA;font-size:1.5em">
  			<?php echo $whole,"件の結果があります。";?>
  		</p>
      <?php
      page_number_printer($num,$whole,$now);

      $ryou_counter=0;
      echo '<ul>';//<img src="img/tyuumoku.png"/>
      while ($rec = $stmt2 ->fetch(PDO::FETCH_ASSOC))
      {
        $ryou_counter++;
      	if( $ryou_counter <= ($now-1)*$num || $ryou_counter>$now*$num)
      	continue;
        echo '<li style="padding-top:0px;margin-bottom:5px;"class="clearfix"><h3>';
        echo '<a href="news-detail.php?id=',$rec['id'],'" class="mouseHvr" style="margin-left:10px;">';
        echo $rec['title'];
        echo '</a>';
        $YmdHis = explode(" ",$rec['updated_at']);
        $Ymd = $YmdHis[0];
        echo '<div style="float:right;margin-right:10px;">';
        echo 'アップロード : ',$Ymd;
        echo '</div>';
        echo '</h3>';
        echo '</li>';
      }
      echo '</ul>';
      page_number_printer($num,$whole,$now);
        }
      catch (PDOException $e) {
        	// UTF8に文字エンコーディングを変換します
      		echo mb_convert_encoding($e->getMessage(),'UTF-8','SJIS-win');
        	die();
      	}
      ?>
  </div>
</div>

</div>
