<!-- jQuery -->
<script src="javascript/jquery.min.js"></script>
<!-- Owl Carousel  -->
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<script type="text/javascript" src="javascript/owl.carousel.min.js"></script>
<!-- Magnific Popup -->
<link rel="stylesheet" href="css/magnific-popup.css">
<script src="javascript/jquery.magnific-popup.min.js"></script>
<script src="javascript/magnific-popup-options.js"></script>


<?php
if(isset($_SESSION['username'])){
echo $this->layout('contentArea', array(
	'title' => 'KKの技術者',
	'content' => $this->yield('content'),
	'breadcrumbs' => array(
		'TOP',
		'技術者情報' => 'hito.php',
		'KKの技術者'
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
		'title' => 'KKの技術者',
		'content' => $this->yield('content'),
		'breadcrumbs' => array(
			'TOP',
			'技術者情報' => 'hito.php',
			'KKの技術者'
		),
		'sidebar_menu' => array(
		'お問い合わせ' => 'otoiawase.php',
		'スキルシート' => 'engineer_KK.php#skillsheet'
	)
	));
}
?>

<div id="contentsArea">

<div id="contentsLeft">
  <div class="contentsl_1">
    <dl>
		<dt class="anken-title">名前</dt>
			<dd class="anken-detail">KK</dd>
		<dt class="anken-title">職種</dt>
			<dd class="anken-detail">プログラマー</dd>
		<dt class="anken-title">業務経験</dt>
			<dd class="anken-detail">・Photoshopを使用した画像加工、イラスト制作</dd>	
			<dd class="anken-detail">・CLIP STUDIO PAINTを使用したイラスト制作</dd>	
			<dd class="anken-detail">・HTML、CSSを使用したホームページ制作</dd>	
			<dd class="anken-detail">・PHPを使用したWebサイト制作</dd>	
			<dd class="anken-detail">・PowerPointを使った提案書の制作</dd>	
			<dd class="anken-detail">・Excelを使用したスケジュール管理の制作</dd>	
			<dd class="anken-detail">・Wordを使用した議事録の制作、送付状の制作、仕様書の作成、要件定義書の制作</dd>	
		<dt class="anken-title">業務形態</dt>
			<dd class="anken-detail">業務委託</dd>
		<dt class="anken-title">使用可能OS</dt>
			<dd class="anken-detail">・Windows 10</dd>
			<dd class="anken-detail">・Windows 8</dd>	
			<dd class="anken-detail">・Windows 7</dd>
			<dd class="anken-detail">・Linux</dd>	
		<dt class="anken-title">使用可能言語</dt>
			<dd class="anken-detail">・JavaScript</dd>	
			<dd class="anken-detail">・JAVA</dd>	
			<dd class="anken-detail">・HTML</dd>	
			<dd class="anken-detail">・PHP</dd>	
			<dd class="anken-detail">・Jquery</dd>	
			<dd class="anken-detail">・CSS</dd>	
		<dt class="anken-title">使用可能ツール</dt>
			<dd class="anken-detail">・Live2d</dd>
			<dd class="anken-detail">・Wordpress</dd>	
			<dd class="anken-detail">・FFFTP</dd>	
			<dd class="anken-detail">・XAMPP</dd>
			<dd class="anken-detail">・Excel</dd>
			<dd class="anken-detail">・Word</dd>
			<dd class="anken-detail">・PowerPoint</dd>
			<dd class="anken-detail">・Photoshop</dd>
			<dd class="anken-detail">・Illustrator</dd>
			<dd class="anken-detail">・Premiere</dd>
		<dt class="anken-title">使用可能DB</dt>
			<dd class="anken-detail">・Oracle</dd>
			<dd class="anken-detail">・MySQL</dd>	
		<dt class="anken-title">稼働日数</dt>
			<dd class="anken-detail">・週5日</dd>
			<dd class="anken-detail">・即日</dd>
		<dt class="anken-title">並行状況</dt>
			<dd class="anken-detail">あり</dd>
		<dt class="anken-title">夜勤</dt>
			<dd class="anken-detail">可能</dd>
		<dt class="anken-title">残業</dt>
			<dd class="anken-detail">可能</dd>
		<h2 class="anken-title">実績サンプル</h2>
		<hr color="#7FC3EA">
		<div id="demo">
        <ul class="owl-carousel">
            <div class="item"><a href="img/engineer/kk1.jpg"><img src="img/engineer/kk1.jpg"></a></div>
            <div class="item"><a href="img/engineer/kk2.jpg"><img src="img/engineer/kk2.jpg"></a></div>
            <div class="item"><a href="img/engineer/kk3.jpg"><img src="img/engineer/kk3.jpg"></a></div>
            <div class="item"><a href="img/engineer/kk4.jpg"><img src="img/engineer/kk4.jpg"></a></div>
            <div class="item"><a href="img/engineer/kk5.jpg"><img src="img/engineer/kk5.jpg"></a></div>
            <div class="item"><a href="img/engineer/kk6.jpg"><img src="img/engineer/kk6.jpg"></a></div>
            <div class="item"><a href="img/engineer/kk7.jpg"><img src="img/engineer/kk7.jpg"></a></div>
            <div class="item"><a href="img/engineer/kk8.png"><img src="img/engineer/kk8.png"></a></div>
            <div class="item"><a href="img/engineer/kk9.jpg"><img src="img/engineer/kk9.jpg"></a></div>
        </ul> 
        </div>
		<hr color="#7FC3EA">
		
		<div id="skillsheet">
		<p>スキルシートは下記ボタンでお願いいたします。</p>
		<a href="skillsheet/KK_skillsheet.pdf"><button  class="btn btn-primary">スキルシートをダウンロード</button></a>
		</div>
		<p>お問い合わせ、ご提案は下記ボタンでお願いいたします。</p>
		<a href="otoiawase.php"><button  class="btn btn-primary">お問い合わせはこちら</button></a>
	</dl>
  </div>

</div>
</div>

<script type="text/javascript">
 $(function(){
        $('.owl-carousel').owlCarousel({
            items : 2, //ブラウザの幅が1199px 以上の時 8
            loop:true,
        	itemsDesktop : [800], // 1199px から 600px　まで 6つ
        	itemsDesktopSmall : false, // betweem 900px and 601px
        	itemsTablet: [600,4], //600px から 479px　まで　4つ
        	itemsMobile : [479,3], // 479px　以下は 3つ
        	loop:true,
            })
        });
 		$('.popup-image').magnificPopup({
    		type: 'image'
  		});
</script>
