<?php
if(isset($_SESSION['username'])){
echo $this->layout('contentArea', array(
	'title' => '案件情報',
	'content' => $this->yield('content'),
	'breadcrumbs' => array(
		'TOP',
		'案件情報'
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
		'title' => '案件情報',
		'content' => $this->yield('content'),
		'breadcrumbs' => array(
			'TOP',
			'案件情報'
		)
	));
}
?>

<div id="contentsArea">

<div id="contentsLeft">
  <div class="contentsl_1">
    以下の案件情報：
	<div class="anken-margin">
		<a href="anken-detail-1.php"><li>サーバー運用の案件</li></a>
		<a href="anken-detail-4.php"><li>ゲーム運用のアートディレクターの案件</li></a>
		<a href="anken-detail-5.php"><li>3Dのアートディレクターの案件</li></a>
		<a href="anken-detail-6.php"><li>モーションデザイナーの案件</li></a>
		<a href="anken-detail-7.php"><li>背景デザイナーの案件</li></a>
		<a href="anken-detail-8.php"><li>スマートフォンゲームの開発UIデザイナーの案件</li></a>
		<a href="anken-detail-9.php"><li>スマートフォンゲームの開発フロントエンドエンジニアの案件</li></a>
		<a href="anken-detail-10.php"><li>スマートフォンゲームの開発サーバーサイドエンジニアの案件</li></a>
		<a href="anken-detail-11.php"><li>スマートフォンゲームの開発スクリプターの案件</li></a>
		<a href="anken-detail-12.php"><li>スマートフォンゲームの開発イラストレーターの案件</li></a>
	</div>
  </div>

</div>
</div>
