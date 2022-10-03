<?php
if(isset($_SESSION['username'])){
echo $this->layout('contentArea', array(
	'title' => 'その他',
	'content' => $this->yield('content'),
	'breadcrumbs' => array(
		'TOP',
    '職種',
		'その他'
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
		'title' => 'その他',
		'content' => $this->yield('content'),
		'breadcrumbs' => array(
			'TOP',
      '職種',
			'その他'
		)
	));
}
?>

<div id="contentsArea">


<div id="contentsLeft">
  <div class="contentsl_1">
    <img src="img/img_scenarioWriter.png" width="150" height="150" alt="シナリオライター"><br><br>
    	<p style="font-size : 15px ;">乙女ゲーム・男性向けゲームのシナリオ、ゲームの企画書、<br>
    		童話向け書籍、 漫画の設定文書、コピーライティングなどを行っていただきます。 <br>
    		未経験の方も応募が可能です。

    </p>

  </div>
</div>

</div>
