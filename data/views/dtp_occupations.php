<?php
if(isset($_SESSION['username'])){
echo $this->layout('contentArea', array(
	'title' => 'DTPデザイナー',
	'content' => $this->yield('content'),
	'breadcrumbs' => array(
		'TOP',
    '職種',
		'DTPデザイナー'
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
		'title' => 'DTPデザイナー',
		'content' => $this->yield('content'),
		'breadcrumbs' => array(
			'TOP',
      '職種',
			'DTPデザイナー'
		)
	));
}
?>

<div id="contentsArea">


<div id="contentsLeft">
  <div class="contentsl_1">
    <img src="img/img_dtpDesigner.png" width="150" height="150" alt="DTPデザイナー"><br><br>
    	<p style="font-size : 15px ;">童話の書籍、ファッション雑誌の書籍、ポスター、チラシ、年賀状、名刺など<br>
    		のレイアウトを考えデザインしていただきます。

    </p>

  </div>
</div>

</div>
