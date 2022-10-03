
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>グローアップ株式会社</title>
	<meta name="description" content="グローアップ株式会社はWeb・ゲーム・イラスト・漫画の製作に特化した人材派遣・人材紹介サービスを行っております。" />
	<meta name="keywords" content="人材派遣,在宅業務,Web製作,ゲーム製作,イラスト" />
    <link href="css/reset.css" type="text/css" rel="stylesheet" />
	<link href="css/common.css" type="text/css" rel="stylesheet" />
	<script src="jquery-3.2.1.min.js"></script>
  <!--<script src="scripts.js"></script>-->

</head>

<body>
<script type="text/javascript" src="https://ad.xdomain.ne.jp/js/server-php.js"></script>
<div id="contentsBox">
 <div id="header">

  <div id="top_title" class="clearfix">
		<table>
		<tr>
		<td><a href="top.html" class="mouseHvr"><img src="img/logo.png" width="350" height="50" alt="グローアップ"/></a></td>
		<td>
	<div id="top_1">
			<table>
			<tr>
			<td colspan="2">
				<p>アウトソーシングをご希望の方</p>
				<div id="top_link">
				<ul>
		   <li><a href="#" class="mouseHvr">｜企業のご担当者様</a></li>
				 <li><a href="#" class="mouseHvr">｜コーポレートサイト</a></li>
					 <li><a href="#" class="mouseHvr">｜採用情報</a></li>
						 <li><a href="#" class="mouseHvr">｜ニュース</a></li>
						 </ul>
					 </div>
</td>
			</tr>
			<tr>
			<td><a href="customer-input.php" class="mouseHvr"><img src="img/tutorial.png" alt="tutorial"></a></td>
			<td>
				<div class="box2" style="width:160px;">
				<p> <a href="#">Q・A</a>　<a href="#">サイトマップ</a></p>
				</div>


				</td>
			</tr>
			</table>
</div>
		</td>
		</tr>
</table>
<!-- #top_title --></div>
<div id="main">
	<div id="sub">
  <div id="subNav">
		<ul>
   <li><a href="top.html"><img src="img/top_btn.png"  alt="トップ" onmouseover="this.src='img/top_btn_on.png'" onmouseout="this.src='img/top_btn.png'"/></a></li>
   <li><a href="work.html"><img src="img/work_btn.png"  alt="お仕事をお探しの方" onmouseover="this.src='img/work_btn_on.png'" onmouseout="this.src='img/work_btn.png'"/></a></li>
   <li><a href="hito.html"><img src="img/hito_btn.png" alt="人材をお探しの方" onmouseover="this.src='img/hito_btn_on.png'" onmouseout="this.src='img/hito_btn.png'"/></a></li>
   <li><a href="company.html"><img src="img/company_btn.png" alt="企業情報" onmouseover="this.src='img/company_btn_on.png'" onmouseout="this.src='img/company_btn.png'"/></a></li>
   <li><a href="otoiawase.html"><img src="img/qa_btn.png" alt="お問い合わせ" onmouseover="this.src='img/qa_btn_on.png'" onmouseout="this.src='img/qa_btn.png'"/></a></li></ul>
		　　　<a href="sucseed.zip"><img src="img/dl.png" class="mouseHvr" alt="応募書類ダウンロード"/></a>
<!-- #subNav --></div>
<!-- #sub --></div>
<!-- #main --></div>
<div id="border" class="clearfix"><hr style=" margin: 0 -500%;
padding: 0 500%; height:4px; background-color:#7FC3EA;noshade;"></div>





<table>
<div id="menu">
<li>
<a href="top.html">
グローアップ株式会社　トップ</a> > Mypageログイン
</li>
<h1>Mypageログイン</h1>

<p>


<!-- #content --></div>
</table>
<br>

<?php
$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8',
	'staff', 'password');
$sql=$pdo->prepare('select * from customer where login=? and password=?');
$sql->execute([$_REQUEST['login'], $_REQUEST['password']]);
foreach ($sql->fetchAll() as $row) {
	$_SESSION['customer']=[
		'id'=>$row['id'], 'name'=>$row['name'],
		'address'=>$row['address'], 'login'=>$row['login'],
		'password'=>$row['password']];
}
if (isset($_SESSION['customer'])) {
	echo 'いらっしゃいませ、', $_SESSION['customer']['name'], 'さん。';
} else {
	echo 'ログイン名またはパスワードが違います。';
}
?>

<br>
<br>

</p>




<div id="footer">
<div id="footerabout">
	<div id="about">
		<h3><span></span>　グローアップリクルートについて</h3>
	</div>

		<table>
	<tr>
	<td>
	<p><img src="./img/img_2.png"/></p>
	</td>
	<td>
		<div id="about_t">
		<h3>ニュースリリース</h3>
<p>2017年5月9日</p>
		<p>家事代行サービス『casial@ままさん（カジアルアットママサン）』サービス終了のお知らせ</p>
		<p>2017年3月23日</p>
			<p>アウトソーシングという働き方だからできる「らしさ」にフォーカスしたメディア<br>
			～グローアップリクルート「らしさオンライン」2017年3月23日スタート～</p>
<!-- #about_t --></div>
			<div class="footer_link">
			<p class="mouseHvr"><a href="#"><font color="#7FC3EA">＞</font>コーポレートサイト</a></p>
			<p class="mouseHvr"><a href="#"><font color="#7FC3EA">＞</font>ニュースリリース</a></p>
			<p class="mouseHvr"><a href="#"><font color="#7FC3EA">＞</font>採用情報</a></p>
			<p class="mouseHvr"><a href="#"><font color="#7FC3EA">＞</font>企業のご担当者様</a></p>
			<!-- #syousai --></div>

	</td>
	</tr>
	</table>
	</div>


	<div id="banner_link">
		<h3><span></span>　関連リンク</h3>
	</div>
<div id="banner">
<a href="#"><img src="./img/banner_1.png"></a>
<a href="#"><img src="./img/banner_2.png"></a>
<a href="#"><img src="./img/banner_3.png"></a>
<a href="#"><img src="./img/banner_4.png"></a>
</div>

  <div id="footerContnts">
    <address>Copyright&nbsp;(C)&nbsp;グローアップ株式会社.&nbsp;All&nbsp;Rights&nbsp;Reserved.</address>
  </div>
  </div><!-- #footer -->

<!--jquery-->
<script src="jquery-3.2.1.min.js"></script>

<div id="pagetop" style="position:fixed;right:30px;bottom:20px">
	<a href="#"><img src="img/pagetop.png"></a></div>

<script>
$(function () {
	//#pagetopを消す
	$('#pagetop').hide();
//スクロールされたら#pagetopを表示、sクロールが戻ったら非表示
$(window).scroll(function(){
	if($(this).scrollTop() > 45){
		$('#pagetop').fadeIn();
	}else {
		$('#pagetop').fadeOut();}
});
//#pagetopがクリックされたら上に戻る
$('#pagetop a').click(function(){
$('body').animate({
	scrollTop:0
},600);
	return false;
});});
</script>
<!--jquery-->


</body>
</html>
