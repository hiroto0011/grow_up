<?php
if(isset($_SESSION['username'])){
echo $this->layout('contentArea', array(
	'title' => '漫画家',
	'content' => $this->yield('content'),
	'breadcrumbs' => array(
		'TOP',
    '職種',
		'漫画家'
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
		'title' => '漫画家',
		'content' => $this->yield('content'),
		'breadcrumbs' => array(
			'TOP',
      '職種',
			'漫画家'
		)
	));
}
?>

<div id="contentsArea">

<div id="contentsLeft">
  <div class="contentsl_1">
    <img src="img/img_comicArtist.png" width="150" height="150" alt="漫画家"><br><br>
    	<p style="font-size : 15px ;">TL,男性向け,4コマギャグ,少年誌向け,童話の制作を行なっていただきます。<br>
    		在宅の方を中心にご活躍しています。 <br>
    		未経験の方からプロの方まで多数の応募をいただいております。

    </p>

  </div>
</div>
</div>
