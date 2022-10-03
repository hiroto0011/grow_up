<?php
if(isset($_SESSION['username'])){
echo $this->layout('contentArea', array(
	'title' => '営業',
	'content' => $this->yield('content'),
	'breadcrumbs' => array(
		'TOP',
    '職種',
		'営業'
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
		'title' => '営業',
		'content' => $this->yield('content'),
		'breadcrumbs' => array(
			'TOP',
      '職種',
			'営業'
		)
	));
}
?>

<div id="contentsArea">


<div id="contentsLeft">
  <div class="contentsl_1">
    <img src="img/img_sales.png" width="150" height="150" alt="営業"><br><br>
    	<p style="font-size : 15px ;">新規に企業を開拓し、企画提案をしていただきます。<br>
    		自分で営業先をゼロから作っていくので自分からチャンスを得ることができます。<br>
    		ゲーム会社、出版社を中心に営業を行なっていきます。
    </p>

  </div>
</div>
</div>
