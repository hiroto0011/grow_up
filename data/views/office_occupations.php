<?php
if(isset($_SESSION['username'])){
echo $this->layout('contentArea', array(
	'title' => '事務',
	'content' => $this->yield('content'),
	'breadcrumbs' => array(
		'TOP',
    '職種',
		'事務'
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
		'title' => '事務',
		'content' => $this->yield('content'),
		'breadcrumbs' => array(
			'TOP',
      '職種',
			'事務'
		)
	));
}
?>

<div id="contentsArea">


<div id="contentsLeft">
  <div class="contentsl_1">
    <img src="img/img_officeWork.png" width="150" height="150" alt="事務"><br><br>
    	<p style="font-size : 15px ;">事務作業は、経理、契約書作成、納品管理など総合的に行なっていただきます。<br>
    		 特に弊社では、ゲーム開発をはじめ、<br>
    		 イラスト・漫画・シナリオ・キャラクター制作等に関わっていただきます。<br>
    		  当社所属、あるいは契約している作家やクリエイター、イラストレーターと一緒に<br>
    			これらコンテンツの開発・制作の管理をします。<br>
    			まずは納品管理及びデータ入力などの事務からスタートし、<br>
          仕事の流れを覚えた人にはディレクション（進行管理）をお任せします。<br>
    			対外折衝力がついてきたら、企画営業として新規に企業を開拓し、<br>
          企画・提案や業務開拓もお任せします。 <br>
    			ディレクション事務職でのキャリアを活かし、イラストレーター、ライター、プログラマーへと<br>
    			キャリアチェンジするチャンスもございます。
      </p>

  </div>
</div>

</div>
