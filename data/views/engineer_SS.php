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
	'title' => 'SSの技術者',
	'content' => $this->yield('content'),
	'breadcrumbs' => array(
		'TOP',
		'技術者情報' => 'hito.php',
		'SSの技術者'
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
		'title' => 'SSの技術者',
		'content' => $this->yield('content'),
		'breadcrumbs' => array(
			'TOP',
			'技術者情報'=> 'hito.php',
			'SSの技術者'
		),
		'sidebar_menu' => array(
		'お問い合わせ' => 'otoiawase.php',
		'スキルシート' => 'engineer_SS.php#skillsheet'
	)
	));
}
?>

<div id="contentsArea">

<div id="contentsLeft">
  <div class="contentsl_1">
    <dl>
		<dt class="anken-title">名前</dt>
			<dd class="anken-detail">SS</dd>
		<dt class="anken-title">職種</dt>
			<dd class="anken-detail">イラストレーター</dd>
		<dt class="anken-title">業務経験</dt>
			<dd class="anken-detail">・HTML、CSSを使用したホームページ作成</dd>	
			<dd class="anken-detail">・PHP、JavaScript、Bootstrapを使用したWebサイトの作成</dd>	
			<dd class="anken-detail">・PowerPointを使った提案書の作成</dd>	
			<dd class="anken-detail">・Illustratorを使ったデザイン</dd>	
			<dd class="anken-detail">・Photoshopを使った提案書の作成</dd>	
			<dd class="anken-detail">・Excelを使用したスケジュール管理の制作</dd>	
			<dd class="anken-detail">・Wordを使った議事録の作成、送付状の作成、仕様書の作成、要件定義書の作成</dd>	
		<dt class="anken-title">業務形態</dt>
			<dd class="anken-detail">業務委託</dd>
		<dt class="anken-title">使用可能OS</dt>
			<dd class="anken-detail">・Windows 8</dd>	
		<dt class="anken-title">使用可能言語</dt>
			<dd class="anken-detail">・javascript</dd>	
			<dd class="anken-detail">・java</dd>	
			<dd class="anken-detail">・jsp</dd>	
			<dd class="anken-detail">・VB</dd>	
			<dd class="anken-detail">・HTML</dd>	
			<dd class="anken-detail">・XML</dd>	
			<dd class="anken-detail">・PHP</dd>
		<dt class="anken-title">使用可能ツール</dt>
			<dd class="anken-detail">・Wordpress</dd>	
			<dd class="anken-detail">・FFFTP</dd>	
			<dd class="anken-detail">・XAMPP</dd>
			<dd class="anken-detail">・Excel</dd>
			<dd class="anken-detail">・Word</dd>
			<dd class="anken-detail">・PowerPoint</dd>
			<dd class="anken-detail">・Photoshop</dd>
			<dd class="anken-detail">・Illustrator</dd>
			<dd class="anken-detail">・ClipStudio</dd>
		<dt class="anken-title">使用可能DB</dt>
			<dd class="anken-detail">・PL/SQL</dd>	
			<dd class="anken-detail">・MySQL</dd>	
			<dd class="anken-detail">・SQLServer</dd>		
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
            <div class="item"><a href="img/engineer/ss1.jpg"><img src="img/engineer/ss1.jpg"></a></div>
            <div class="item"><a href="img/engineer/ss2.jpg"><img src="img/engineer/ss2.jpg"></a></div>
            <div class="item"><a href="img/engineer/ss3.png"><img src="img/engineer/ss3.png"></a></div>
        </ul> 
        </div>
		<hr color="#7FC3EA">
		
		<div id="skillsheet">
		<p>スキルシートは下記ボタンでお願いいたします。</p>
		<a href="skillsheet/SS_skillsheet.pdf"><button  class="btn btn-primary">スキルシートをダウンロード</button></a>
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