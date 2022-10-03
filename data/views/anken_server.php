<?php
if(isset($_SESSION['username'])){
echo $this->layout('contentArea', array(
	'title' => 'サーバー運用の案件',
	'content' => $this->yield('content'),
	'breadcrumbs' => array(
		'TOP',
		'案件情報',
		'サーバー運用の案件'
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
		'title' => 'サーバー運用の案件',
		'content' => $this->yield('content'),
		'breadcrumbs' => array(
			'TOP',
			'案件情報',
			'サーバー運用の案件'
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
			<dd class="anken-detail">サーバー運用</dd>
		<dt class="anken-title">業務場所</dt>
			<dd class="anken-detail">八王子方面</dd>
		<dt class="anken-title">業務形態</dt>
			<dd class="anken-detail">業務委託可</dd>
		<dt class="anken-title">募集人数</dt>
			<dd class="anken-detail">１名</dd>
		<dt class="anken-title">年齢層</dt>
			<dd class="anken-detail">若手活躍中</dd>
		<dt class="anken-title">希望単価</dt>
			<dd class="anken-detail">スキル見合い</dd>
		<dt class="anken-title">期間</dt>
			<dd class="anken-detail">即日～長期（１年以上希望）</dd>
		<dt class="anken-title">清算有無</dt>
			<dd class="anken-detail">有：130時間～190時間</dd>
		<dt class="anken-title">勤務時間</dt>
			<dd class="anken-detail">・24H365日のシフト制</dd>
			<dd class="anken-detail">・2勤務交代　9時30分～21時30分　21時～34時</dd>
		<dt class="anken-title">職務内容</dt>
			<dd class="anken-detail">Linuxにてサーバーの運用、監視</dd>
		<dt class="anken-title">環境</dt>
			<dd class="anken-detail">Linux</dd>
		<dt class="anken-title">必須スキル</dt>
			<dd class="anken-detail">・電話応対が出来る方</dd>
			<dd class="anken-detail">・Linuxの基本コマンドが操作が可能な方</dd>
			<dd class="anken-detail">・サーバ監視経験がある方</dd>
			<dd class="anken-detail">・JP1 AJSの基本操作が可能な方</dd>
			<dd class="anken-detail">・夜勤対応が可能な方</dd>
		<dt class="anken-title">備考</dt>
			<dd class="anken-detail">御社まで、外国籍不可</dd>
		<p>お問い合わせ、ご応募は下記ボタンでお願いいたします。</p>
		<a href="otoiawase.php"><button  class="btn btn-primary">お問い合わせはこちら</button></a>
	</dl>
  </div>

</div>
</div>
