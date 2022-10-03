<?php
if(isset($_SESSION['username'])){
echo $this->layout('contentArea', array(
	'title' => '背景デザイナーの案件',
	'content' => $this->yield('content'),
	'breadcrumbs' => array(
		'TOP',
		'案件情報',
		'背景デザイナーの案件'
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
		'title' => '背景デザイナーの案件',
		'content' => $this->yield('content'),
		'breadcrumbs' => array(
			'TOP',
			'案件情報',
			'背景デザイナーの案件'
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
			<dd class="anken-detail">背景デザイナー</dd>
		<dt class="anken-title">開始時期</dt>
			<dd class="anken-detail">11月1日</dd>
		<dt class="anken-title">業務形態</dt>
			<dd class="anken-detail">業務委託可</dd>
		<dt class="anken-title">募集人数</dt>
			<dd class="anken-detail">１名</dd>
		<dt class="anken-title">職種</dt>
			<dd class="anken-detail">背景デザイナー（MAYA）</dd>	
		<dt class="anken-title">対応方法</dt>
			<dd class="anken-detail">見積りが欲しい</dd>
		<dt class="anken-title">業務内容</dt>
			<dd class="anken-detail">・Mayaを使用した3Dオペレーション</dd>
			<dd class="anken-detail">・モデル、モーション、エフェクト</dd>
		<dt class="anken-title">必須条件</dt>
			<dd class="anken-detail">・Maya（基本技術）</dd>
			<dd class="anken-detail">・Photoshop（基本技術）</dd>
			<dd class="anken-detail">・Unity（基本技術）</dd>
			<dd class="anken-detail">・デザイン品質管理経験</dd>
			<dd class="anken-detail">・リテイクチェック業務経験</dd>
		<dt class="anken-title">歓迎要件</dt>
			<dd class="anken-detail">・背景モデルの制作ができる方</dd>	
			<dd class="anken-detail">・背景テクスチャ制作背景に依存したプロップスの制作ができる方</dd>
			<dd class="anken-detail">・背景コリジョンまでの理解、実績のある方</dd>	
		<dt class="anken-title">勤務場所</dt>
			<dd class="anken-detail">東京２３区</dd>		
		<dt class="anken-title">単価</dt>
			<dd class="anken-detail">スキル見合い</dd>
		<dt class="anken-title">備考</dt>
			<dd class="anken-detail">スキルシート、紹介文をお送りください</dd>
		<p>お問い合わせ、ご応募は下記ボタンでお願いいたします。</p>
		<a href="otoiawase.php"><button  class="btn btn-primary">お問い合わせはこちら</button></a>
	</dl>
  </div>
</div>
</div>