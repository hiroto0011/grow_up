<?php
if(isset($_SESSION['username'])){
echo $this->layout('contentArea', array(
	'title' => '技術者情報',
	'content' => $this->yield('content'),
	'breadcrumbs' => array(
		'TOP',
		'技術者情報' => 'hito.php'
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
		'title' => '技術者情報',
		'content' => $this->yield('content'),
		'breadcrumbs' => array(
			'TOP',
			'技術者情報' => 'hito.php'
		)
	));
}
?>

<div id="contentsArea">

<div id="contentsLeft">
  <div class="contentsl_1">
    <section>以下の技術者一覧：</section>
	<div class="anken-margin">
		<a href="engineer_AH.php"><li>AHの技術者</li></a>
		<a href="engineer_HM.php"><li>HMの技術者</li></a>
		<a href="engineer_KY.php"><li>KYの技術者</li></a>
		<a href="engineer_MJ.php"><li>MJの技術者</li></a>
		<a href="engineer_HY.php"><li>HYの技術者</li></a>
		<a href="engineer_KK.php"><li>KKの技術者</li></a>
		<a href="engineer_SS.php"><li>SSの技術者</li></a>
		<a href="engineer_TA.php"><li>TAの技術者</li></a>
	</div>
  </div>

</div>
</div>
