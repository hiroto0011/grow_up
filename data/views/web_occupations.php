<?php
if(isset($_SESSION['username'])){
echo $this->layout('contentArea', array(
	'title' => 'Webデザイナー',
	'content' => $this->yield('content'),
	'breadcrumbs' => array(
		'TOP',
    '職種',
		'Webデザイナー'
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
		'title' => 'Webデザイナー',
		'content' => $this->yield('content'),
		'breadcrumbs' => array(
			'TOP',
      '職種',
			'Webデザイナー'
		)
	));
}
?>

<div id="contentsArea">


<div id="contentsLeft">
  <div class="contentsl_1">
    <img src="img/img_webDesigner.png" width="150" height="150" alt="Webデザイナー"><br><br>
    	<p style="font-size : 15px ;">ゲームのイラストを製作、WEBのUIデザインなどを行っていただきます。<br>
    		 ※ソフトウェアはSAI・Photoshop・Illustrator・コミックスタジオ・MAYA・3DMAX・<br>CLIP STUDIO・After Effects・flashなどを使用します。<br>
    		  やる気がある方には使い方を教えますので、未経験からソフトの使い方を覚えたい方も歓迎いたします。

    </p>

  </div>
</div>
</div>
