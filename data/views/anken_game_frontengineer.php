<?php
if(isset($_SESSION['username'])){
echo $this->layout('contentArea', array(
	'title' => 'スマートフォンゲームの開発フロントエンドエンジニアの案件',
	'content' => $this->yield('content'),
	'breadcrumbs' => array(
		'TOP',
		'案件情報',
		'スマートフォンゲームの開発フロントエンドエンジニアの案件'
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
		'title' => 'スマートフォンゲームの開発フロントエンドエンジニアの案件',
		'content' => $this->yield('content'),
		'breadcrumbs' => array(
			'TOP',
			'案件情報',
			'スマートフォンゲームの開発フロントエンドエンジニアの案件'
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
			<dd class="anken-detail">スマートフォンゲームの開発フロントエンドエンジニア</dd>
		<dt class="anken-title">契約期間</dt>
			<dd class="anken-detail">即日-3ヶ月(半年に延長の場合あり)</dd>
		<dt class="anken-title">就業時間</dt>
			<dd class="anken-detail">10:00～19:00</dd>
		<dt class="anken-title">職種</dt>
			<dd class="anken-detail">フロントエンドエンジニア</dd>	
		<dt class="anken-title">休日</dt>
			<dd class="anken-detail">土・日・祝日・年末年始</dd>
		<dt class="anken-title">業務内容</dt>
			<dd class="anken-detail">・スマートフォンゲーム開発・運用</dd>
			<dd class="anken-detail">・プログラム設計・開発</dd>
			<dd class="anken-detail">・LAMPでのサーバーサイド開発</dd>
		<dt class="anken-title">使用ソフト</dt>
			<dd class="anken-detail">・Unity,uGUI</dd>
			<dd class="anken-detail">・C#,PHP,Java,HTML</dd>
			<dd class="anken-detail">・Linux,Apache,Socket</dd>
			<dd class="anken-detail">・MySQL,Redis,Memcached</dd>
			<dd class="anken-detail">・AWS</dd>
		<dt class="anken-title">必須経験(条件)</dt>
			<dd class="anken-detail">・Unityでのゲーム開発経験</dd>
			<dd class="anken-detail">・パフォーマンスチューニングができる方</dd>
			<dd class="anken-detail">・アプリケーション開発経験もしくはコンシューマーゲーム開発・運用経験</dd>
		<dt class="anken-title">歓迎経験<dt>
			<dd class="anken-detail">・LAMP環境を利用したアプリ開発経験</dd>
			<dd class="anken-detail">・実務においてRedis,MemcachedなどのKVSを利用した経験</dd>
			<dd class="anken-detail">・uGUIによるアプリ開発経験</dd>
		<dt class="anken-title">人物像</dt>
			<dd class="anken-detail">・高いコミュニケーション能力を持っている方</dd>
			<dd class="anken-detail">・自ら率先し、課題解決ができる方</dd>
			<dd class="anken-detail">・ゲームが好きな方</dd>
			<dd class="anken-detail">・ものづくりに強い意志を持っている方</dd>
		<dt class="anken-title">単価</dt>
			<dd class="anken-detail">スキル見合い</dd>
		<dt class="anken-title">採用の流れ</dt>
			<dd class="anken-detail">職務経歴書・スキルシート・ポートフォリオによる審査→打ち合わせ→決定</dd>
		<dt class="anken-title">勤務地</dt>
			<dd class="anken-detail">港区周辺</dd>
		<dt class="anken-title">外国籍</dt>
			<dd class="anken-detail">スキルがあれば歓迎</dd>
		<dt class="anken-title">備考</dt>
			<dd class="anken-detail">スキルシート、紹介文をお送りください</dd>
		<p>お問い合わせ、ご応募は下記ボタンでお願いいたします。</p>
		<a href="otoiawase.php"><button  class="btn btn-primary">お問い合わせはこちら</button></a>
	</dl>
  </div>
</div>
</div>