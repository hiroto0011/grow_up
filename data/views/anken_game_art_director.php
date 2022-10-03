<?php
if(isset($_SESSION['username'])){
echo $this->layout('contentArea', array(
	'title' => '3Dのアートディレクターの案件',
	'content' => $this->yield('content'),
	'breadcrumbs' => array(
		'TOP',
		'案件情報',
		'3Dのアートディレクターの案件'
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
		'title' => '3Dのアートディレクターの案件',
		'content' => $this->yield('content'),
		'breadcrumbs' => array(
			'TOP',
			'案件情報',
			'3Dのアートディレクターの案件'
		),
		'sidebar_menu' => array(
		'お問い合わせ' => 'otoiawase.php'
	)
	));
}
?>

<div id="contentsArea">

<div id="contentsLeft">
  <div class="contentsl_1">
	<dl>
		<dt class="anken-title">案件名</dt>
			<dd class="anken-detail">3Dのアートディレクター</dd>
		<dt class="anken-title">開始時期</dt>
			<dd class="anken-detail">11月1日</dd>
		<dt class="anken-title">業務形態</dt>
			<dd class="anken-detail">業務委託可</dd>
		<dt class="anken-title">募集人数</dt>
			<dd class="anken-detail">１名</dd>
		<dt class="anken-title">職種</dt>
			<dd class="anken-detail">アートディレクター（MAYA）</dd>	
		<dt class="anken-title">対応方法</dt>
			<dd class="anken-detail">見積りが欲しい</dd>
		<dt class="anken-title">業務内容</dt>
			<dd class="anken-detail">Mayaを使用した3Dディレクション（モデル、モーション、エフェクト）</dd>
		<dt class="anken-title">必須条件</dt>
			<dd class="anken-detail">・Maya（基本技術）</dd>
			<dd class="anken-detail">・Photoshop（基本技術）</dd>
			<dd class="anken-detail">・Unity（基本技術）</dd>
			<dd class="anken-detail">・デザイン品質管理経験</dd>
		<dt class="anken-title">歓迎要件</dt>
			<dd class="anken-detail">・モーションの制作経験</dd>	
			<dd class="anken-detail">・エフェクトの制作経験</dd>	
		<dt class="anken-title">人物像</dt>
			<dd class="anken-detail">品質にこだわりを持てる方</dd>
		<dt class="anken-title">単価</dt>
			<dd class="anken-detail">スキル見合い</dd>
		<dt class="anken-title">勤務場所</dt>
			<dd class="anken-detail">東京２３区</dd>
		<dt class="anken-title">備考</dt>
			<dd class="anken-detail">スキルシート、紹介文をお送りください</dd>
		<p>お問い合わせ、ご応募は下記ボタンでお願いいたします。</p>
		<a href="otoiawase.php"><button  class="btn btn-primary">お問い合わせはこちら</button></a>
	</dl>
  </div>
</div>
</div>