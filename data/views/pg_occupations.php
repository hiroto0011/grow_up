<?php
if(isset($_SESSION['username'])){
echo $this->layout('contentArea', array(
	'title' => 'プログラマー',
	'content' => $this->yield('content'),
	'breadcrumbs' => array(
		'TOP',
    '職種',
		'プログラマー'
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
		'title' => 'プログラマー',
		'content' => $this->yield('content'),
		'breadcrumbs' => array(
			'TOP',
      '職種',
			'プログラマー'
		)
	));
}
?>

<div id="contentsArea">


<div id="contentsLeft">
  <div class="contentsl_1">
    <img src="img/img_programmer.png" width="150" height="150" alt="プログラマー"><br><br>
    	<p style="font-size : 15px ;">国内・海外向けゲームの開発、iPhone、Android用アプリの開発を中心に携わっていただきます。<br>
    		 自分の作り上げたものがシステムとして形になり、それがきちんと動いた時には大きな達成感を得ることができます。<br>
            仕様書に記載されている内容を把握し、頭の中でプログラムの変換を行ったり、工夫をしてアルゴリズムを構築していくスキルが求められます。<br>
            また、プログラミングはパソコンに向かって黙々と開発作業を進めていくイメージがありますが、プロジェクト自体はチームで行うものであり、システムエンジニアや他のプログラマーとのコミュニケーションは避けて通れません。さらに、システムエンジニアが作った仕様書に沿って開発を進めるためには、仕様書に書かれていない背景を理解するためにシステムエンジニアとの意思疎通は不可欠です。<br>
            そのため、「相手の意図を汲み取る能力」「コミュニケーション能力」も求められます。
    ※PHP/Java/Perl/C/LAMP/Flash/HTML/Object-C/アンドロイド開発などの経験がある方歓迎いたします。
    </p>

  </div>
</div>

</div>
