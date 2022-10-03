<?php
if(isset($_SESSION['username'])){
echo $this->layout('contentArea', array(
	'title' => 'サイトマップ',
	'content' => $this->yield('content'),
	'breadcrumbs' => array(
		'TOP',
		'サイトマップ'
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
		'title' => 'サイトマップ',
		'content' => $this->yield('content'),
		'breadcrumbs' => array(
			'TOP',
			'サイトマップ'
		)
	));
}
?>

<div id="contentsArea">
<div id="contentsLeft">
  <div class="contentsl_1">
    <h3><a href="index.php">トップページ</a></h3>
    <hr width=635 align="left">
    <br>
    <h3><a href="work.php">仕事をお探しの方</a></h3>
    <li>
    	都道府県別
    	<ul>
    		<li><a href="#">東京</a></li>
    		<li><a href="#">神奈川</a></li>
    		<li><a href="#">千葉</a></li>
    		<li><a href="#">埼玉</a></li>
    	</ul>
    </li>
    <br>
    <li>
    	職種別
    	<ul>
    		<li><a href="#">オフィスワーク・事務</a></li>
    		<li><a href="#">金融</a></li>
    		<li><a href="#">営業・販売</a></li>
    		<li><a href="#">製薬・研究開発</a></li>
    		<li><a href="#">クリエイティブ</a></li>
    		<li><a href="#">コスメ・ビューティー</a></li>
    		<li><a href="#">IT・エンジニア</a></li>
    		<li><a href="#">アパレル・ファッション販売</a></li>
    		<li><a href="#">その他</a></li>
    	</ul>
    </li>
    <hr width=635 align="left">
    <br>
    <h3><a href="hito.php">人材をお探しの方</a></h3>
    <hr width=635>
    <br>
    <h3><a href="company.php">企業情報</a></h3>
    <hr width=635 align="left">
    <br>
    <h3><a href="otoiawase.php">お問い合わせ</a></h3>
    <hr width=635 align="left">
    <br>
    <h3><a href="faq.php">Q&A</a></h3>

  </div>
</div>

</div>
