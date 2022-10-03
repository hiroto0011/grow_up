<?php
if(isset($_SESSION['username'])){
echo $this->layout('contentArea', array(
	'title' => 'システムエンジニア',
	'content' => $this->yield('content'),
	'breadcrumbs' => array(
		'TOP',
    '職種',
		'システムエンジニア'
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
		'title' => 'システムエンジニア',
		'content' => $this->yield('content'),
		'breadcrumbs' => array(
			'TOP',
      '職種',
			'システムエンジニア'
		)
	));
}
?>

<div id="contentsArea">

<div id="contentsLeft">
  <div class="contentsl_1">
    <img src="img/img_systemsEngineer.png" width="150" height="150" alt="システムエンジニア"><br><br>
    	<p style="font-size : 15px ;">要件定義、画面設計、テスト設計等を担当していただきます。<br>
    		KPI改善を意識できる方、非技術者部門からのニーズを整理し、開発要件定義を作成できる方を募集しております。<br>
    		お客様と打ち合わせをして決めていくため、作る過程を自分で決めることが可能で楽しいです。
    </p>

  </div>
</div>
</div>
