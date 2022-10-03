<?php
if(isset($_SESSION['username'])){
echo $this->layout('contentArea', array(
	'title' => 'ゲーム運用案件の案件',
	'content' => $this->yield('content'),
	'breadcrumbs' => array(
		'TOP',
		'案件情報',
		'ゲーム運用案件の案件'
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
		'title' => 'ゲーム運用案件の案件',
		'content' => $this->yield('content'),
		'breadcrumbs' => array(
			'TOP',
			'案件情報',
			'ゲーム運用案件の案件'
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
			<dd class="anken-detail">ゲーム運用のアートディレクター</dd>
		<dt class="anken-title">開始時期</dt>
			<dd class="anken-detail">11月1日 or 12月1日</dd>
		<dt class="anken-title">総額予算</dt>
			<dd class="anken-detail">スキル見合い</dd>
		<dt class="anken-title">業務形態</dt>
			<dd class="anken-detail">業務委託可</dd>
		<dt class="anken-title">募集人数</dt>
			<dd class="anken-detail">１名</dd>
		<dt class="anken-title">職種</dt>
			<dd class="anken-detail">アートディレクター</dd>	
		<dt class="anken-title">対応方法</dt>
			<dd class="anken-detail">見積りが欲しい</dd>
		<dt class="anken-title">業務内容</dt>
			<dd class="anken-detail">・外部との折衝</dd>
			<dd class="anken-detail">・クライアントとの折衝</dd>
			<dd class="anken-detail">・デザイン事務所との折衝</dd>
			<dd class="anken-detail">・細かいリテイクチェック</dd>
			<dd class="anken-detail">・社内外の工数管理</dd>
		<dt class="anken-title">必須条件</dt>
			<dd class="anken-detail">・Unityでのデザイン経験</dd>
			<dd class="anken-detail">・GITHUBの使用経験</dd>
			<dd class="anken-detail">・実写系カードイラストゲーム経験</dd>
		<dt class="anken-title">人物像</dt>
			<dd class="anken-detail">・1～3年の業務従事・実務経験のある方</dd>
			<dd class="anken-detail">・ゲームが大好きな方</dd>
			<dd class="anken-detail">・明るくコミュニケーション能力の高い方</dd>
			<dd class="anken-detail">・素直な方</dd>
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