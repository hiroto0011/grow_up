<?php
if(isset($_SESSION['username'])){
echo $this->layout('contentArea', array(
	'title' => 'インフラ・ネットワークエンジニア案件',
	'content' => $this->yield('content'),
	'breadcrumbs' => array(
		'TOP',
		'案件情報',
		'インフラ・ネットワークエンジニア案件'
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
		'title' => 'インフラ・ネットワークエンジニア案件',
		'content' => $this->yield('content'),
		'breadcrumbs' => array(
			'TOP',
			'案件情報',
			'インフラ・ネットワークエンジニア案件'
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
			<dd class="anken-detail">インフラ・ネットワークエンジニア案件</dd>
		<dt class="anken-title">契約期間</dt>
			<dd class="anken-detail">１２月より長期で常駐ができる技術者を募集しております</dd>
		<dt class="anken-title">就業時間</dt>
			<dd class="anken-detail">09：00～18：00</dd>
		<dt class="anken-title">募集人数</dt>
			<dd class="anken-detail">2名</dd>
		<dt class="anken-title">職種</dt>
			<dd class="anken-detail">インフラ・ネットワークエンジニア</dd>	
		<dt class="anken-title">休日</dt>
			<dd class="anken-detail">土・日・祝日・年末年始</dd>
		<dt class="anken-title">業務内容</dt>
			<dd class="anken-detail">・ＮＷ設計</dd>
			<dd class="anken-detail">・新規設置機器への設定、導入支援</dd>
			<dd class="anken-detail">・ネットワーク関連の設定作業、トラブルシューティング等</dd>
		<dt class="anken-title">必須経験(条件)</dt>
			<dd class="anken-detail">・インフラのスキル</dd>
			<dd class="anken-detail">・config、Router、L3SW、L2SW、FWなどの知識のある方</dd>
			<dd class="anken-detail">・お客様対応ができる方,電話対応あり</dd>
		<dt class="anken-title">希望単価</dt>
			<dd class="anken-detail">スキル見合い</dd>
		<dt class="anken-title">勤務地</dt>
			<dd class="anken-detail">千葉県千葉市</dd>
		<dt class="anken-title">備考</dt>
			<dd class="anken-detail">・長期でできる方</dd>
			<dd class="anken-detail">・外国籍不可 </dd>
			<dd class="anken-detail">・スキルシート、紹介文をお送りください</dd>
		<p>お問い合わせ、ご応募は下記ボタンでお願いいたします。</p>
		<a href="otoiawase.php"><button  class="btn btn-primary">お問い合わせはこちら</button></a>
	</dl>
  </div>
</div>
</div>