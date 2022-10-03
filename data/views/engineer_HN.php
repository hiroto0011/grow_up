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
	'title' => 'HNの技術者',
	'content' => $this->yield('content'),
	'breadcrumbs' => array(
		'TOP',
		'技術者情報' => 'hito.php',
		'MNの技術者'
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
		'title' => 'MNの技術者',
		'content' => $this->yield('content'),
		'breadcrumbs' => array(
			'TOP',
			'技術者情報' => 'hito.php',
			'MNの技術者'
		),
		'sidebar_menu' => array(
		'お問い合わせ' => 'otoiawase.php',
		'スキルシート' => 'engineer_MN.php#skillsheet'
	)
	));
}
?>

<div id="contentsArea">

<div id="contentsLeft">
  <div class="contentsl_1">
    <dl>
		<dt class="anken-title">名前</dt>
			<dd class="anken-detail">HN</dd>
		<dt class="anken-title">職種</dt>
			<dd class="anken-detail">WEBデザイン ゲームプログラマー　サーバーエンジニア</dd>
		<dt class="anken-title">業務経験</dt>
			<dd class="anken-detail">・コーポレートサイトの作成</dd>	
			<dd class="anken-detail">・ショッピングサイトの作成</dd>	
		<dt class="anken-title">業務形態</dt>
			<dd class="anken-detail">業務委託</dd>
		<dt class="anken-title">使用可能OS</dt>
			<dd class="anken-detail">・Windows　10</dd>
			<dd class="anken-detail">・Windows 7</dd>	
			<dd class="anken-detail">・Linux</dd>	
		<dt class="anken-title">使用可能言語</dt>
			<dd class="anken-detail">・HTML</dd>
			<dd class="anken-detail">・Javascript</dd>	
			<dd class="anken-detail">・PHP</dd>	
			<dd class="anken-detail">・jQuery</dd>	
			<dd class="anken-detail">・CSS</dd>	
			<dd class="anken-detail">・C#</dd>
			<dd class="anken-detail">・MySQL</dd>
		<dt class="anken-title">使用可能ツール</dt>
			<dd class="anken-detail">・Wordpress</dd>
			<dd class="anken-detail">・Unity</dd>	
			<dd class="anken-detail">・UnrealEngine4</dd>			
			<dd class="anken-detail">・FFFTP</dd>	
			<dd class="anken-detail">・XAMPP</dd>
			<dd class="anken-detail">・Excel</dd>
			<dd class="anken-detail">・Word</dd>
			<dd class="anken-detail">・PowerPoint</dd>
			<dd class="anken-detail">・Photoshop</dd>
		<dt class="anken-title">使用可能DB</dt>
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

		<hr color="#7FC3EA">
		
		<div id="skillsheet">
		<p>スキルシートは下記ボタンでお願いいたします。</p>
		<a href="skillsheet/MN_skillsheet.pdf"><button  class="btn btn-primary">スキルシートをダウンロード</button></a>
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