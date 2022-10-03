<?php
// DB接続情報
$dsn = 'mysql:host=localhost;dbname=growup;charset=utf8;';
$username = 'root';
$password = '';

// GETデータを受け取る
//$id=$_SESSION['id'];//勤務場所
//echo $_SESSION['id'];
/*if(isset($_GET['prefectures'])){
$prefectures = $_GET['prefectures'];
}
//職種
if(isset($_GET['occupation'])){
$occupation = $_GET['occupation'];
}*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>グローアップ株式会社</title>
	<meta name="description" content="グローアップ株式会社はWeb・ゲーム・イラスト・漫画の製作に特化した人材派遣・人材紹介サービスを行っております。" />
	<meta name="keywords" content="人材派遣,在宅業務,Web製作,ゲーム製作,イラスト" />
    <link href="../css/reset.css" type="text/css" rel="stylesheet" />
	<link href="../css/common.css" type="text/css" rel="stylesheet" />
	<!--<script src="../jquery-3.2.1.min.js"></script>-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!--<script src="scripts.js"></script>-->

</head>

<body>
<script type="text/javascript" src="https://ad.xdomain.ne.jp/js/server-php.js"></script>
<div id="contentsBox">
 <div id="header">

  <div id="top_title" class="clearfix">
		<table>
		<tr>
		<td><a href="../top.html" class="mouseHvr"><img src="../img/logo.png" width="350" height="50" alt="グローアップ"/></a></td>
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
						 <li><a href="../news.html" class="mouseHvr">｜ニュース</a></li>
						 </ul>
					 </div>
</td>
			</tr>
			<tr>
			<td><a href="../customer-input.php" class="mouseHvr"><img src="../img/tutorial.png" alt="tutorial"></a></td>
			<td>
				<div class="box2" style="width:160px;">
				<p> <a href="../faq.html">Q・A</a>　<a href="../sitemap.html">サイトマップ</a></p>
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
   <li><a href="../top.html"><img src="../img/top_btn.png"  alt="トップ" onmouseover="this.src='../img/top_btn_on.png'" onmouseout="this.src='../img/top_btn.png'"/></a></li>
   <li><a href="../work.html"><img src="../img/work_btn.png"  alt="お仕事をお探しの方" onmouseover="this.src='../img/work_btn_on.png'" onmouseout="this.src='../img/work_btn.png'"/></a></li>
   <li><a href="../hito.html"><img src="../img/hito_btn.png" alt="人材をお探しの企業様" onmouseover="this.src='../img/hito_btn_on.png'" onmouseout="this.src='../img/hito_btn.png'"/></a></li>
   <li><a href="../company.html"><img src="../img/company_btn.png" alt="企業情報" onmouseover="this.src='../img/company_btn_on.png'" onmouseout="this.src='../img/company_btn.png'"/></a></li>
   <li><a href="../otoiawase.html"><img src="../img/qa_btn.png" alt="お問い合わせ" onmouseover="this.src='../img/qa_btn_on.png'" onmouseout="this.src='../img/qa_btn.png'"/></a></li></ul>
		　　　<a href="../oubo.html"><img src="../img/dl.png" class="mouseHvr" alt="応募書類ダウンロード"/></a>
<!-- #subNav --></div>
<!-- #sub --></div>
<!-- #main --></div>

<div id="topimg"><img src="../img/topimg.png" alt="top"/></div>
<div class="staff"><a href="../work.html"><img src="../img/search.png" alt="staff" onmouseover="this.src='../img/search_on.png'" onmouseout="this.src='../img/search.png'"/></a></div>
<div id="top_select">
	<table>
		<tr>
		<td valign="bottom"><h3>お仕事検索</h3></td>
		<td></td>
		<td align="right" valign="bottom"><a href="#"><img src="../img/top_img_btn1.png" alt="staff"/></a>　</td>
		<td><a href="#"><img src="../img/top_img_btn2.png" alt="staff"/></a></td>
		</tr>
	<tr>
	<td>

		<select name="select_1" cellspacing="10">
<option value="都道府県を選ぶ">都道府県を選ぶ</option>
<option value="東京都">東京都</option>
<option value="神奈川県">神奈川県</option>
<option value="埼玉県">埼玉県</option>
<option value="千葉県">千葉県</option>
<option value="茨城県">茨城県</option>
<option value="栃木県">栃木県</option>
<option value="群馬県">群馬県</option>
</select>　　
</td>
<td><select name="select_1">
	<option value="職務を選ぶ">職種を選ぶ</option>
	<option value ="事務">事務</option>
	<option value ="営業">営業</option>
	<option value ="プログラマー">プログラマー</option>
	<option value ="システムエンジニア">システムエンジニア</option>
	<option value ="イラストレーター">イラストレーター</option>
	<option value ="Webデザイナー">Webデザイナー</option>
	<option value ="DTPデザイナー">DTPデザイナー</option>
	<option value ="漫画家">漫画家</option>
	<option value ="シナリオライター">シナリオライター</option>
</select>　　
</td>
<!--
<td><select name="select_1">
<option value="勤務条件を選ぶ">勤務条件を選ぶ</option>
<option value="サンプル2">アウトソーシング</option>
<option value="サンプル3">長期</option>
<option value="サンプル3">短期</option>
<option value="サンプル3">シフト制</option>
<option value="サンプル3">土日休み</option>
<option value="サンプル3">週3日から</option>
<option value="サンプル3">週5日</option>
<option value="サンプル3">残業なし</option>

</select>　
</td>-->
	<td>
		<a href="#"><img src="../img/kensaku.png" alt="検索する" onmouseover="this.src='../img/kensaku_on.png'" onmouseout="this.src='../img/kensaku.png'"/></a>
		</td>
	</tr>
	</table>


</div>
<div id="contentsArea" class="clearfix">
	<?php
	// try-catch
	try{
		// データベースへの接続を表すPDOインスタンスを生成
		$pdo = new PDO($dsn,$username,$password);

		$sql = "SELECT * FROM work_locations
						INNER JOIN work_informations ON work_locations.id = work_informations.id
						LEFT JOIN work_occupations ON work_locations.id = work_occupations.id
						LEFT JOIN work_pages ON work_locations.id = work_pages.id
						WHERE work_locations.id = :detail";

		// プリペアドステートメントを作成
		$stmt = $pdo->prepare($sql);

		// プレースホルダと変数をバインド
		$stmt -> bindParam(":detail",$detail);
		$stmt -> execute(); //実行

		// 1行ずつ取得
		while($rec = $stmt->fetch(PDO::FETCH_ASSOC)){
			// テーブルの項目名を指定して値を表示
	?>

  <h2>求人募集案件</h2>
	<div>
  	<hr color="#7FC3EA" width="635" align="left">
	</div>
	<h3>aaa</h3>
	<b style="font-size:16px"><br />アプリケーションを開発/設計して頂きます。<br />プロジェクトは既に進行中のため、設計/開発フェーズでの参画となります。</b><br />
								 <!--<img src="jobpic/jobpic_02.jpg" />-->
									<table style="BORDER-RIGHT: #ffffff 1px solid; BORDER-TOP: #ffffff 1px solid; MARGIN-LEFT: 15px;margin-top:30px; BORDER-LEFT: #ffffff 1px solid; WIDTH: 540px; BORDER-BOTTOM: #ffffff 1px solid; BACKGROUND-COLOR: #cccccc" cellspacing="1" summary="会社概要">
											<tbody></tbody>
											<tr>
				<td colspan="2" style="padding:5px;background-color:#e6e6fa;text-align:center;font-weight:bold">仕事情報</td>
		</tr>
		<tr>
				<td style="PADDING-RIGHT: 10px; PADDING-LEFT: 10px; PADDING-BOTTOM: 10px; PADDING-TOP: 10px;font-weight:bold" scope="row" width="32%" bgcolor="#f5f5fa">お仕事番号</td>
				<td style="PADDING-RIGHT: 10px; PADDING-LEFT: 10px; PADDING-BOTTOM: 10px; PADDING-TOP: 10px; BACKGROUND-COLOR: #ffffff" width="68%">	20160629_01</td>
		</tr>
		<tr>
				<td style="PADDING-RIGHT: 10px; PADDING-LEFT: 10px; PADDING-BOTTOM: 10px; PADDING-TOP: 10px;font-weight:bold" scope="row" width="32%" bgcolor="#f5f5fa">仕事内容</td>
				<td style="PADDING-RIGHT: 10px; PADDING-LEFT: 10px; PADDING-BOTTOM: 10px; PADDING-TOP: 10px; BACKGROUND-COLOR: #ffffff" width="68%">アプリケーションを開発/設計して頂きます。</td>
		</tr>
		<tr>
				<td style="PADDING-RIGHT: 10px; PADDING-LEFT: 10px; PADDING-BOTTOM: 10px; PADDING-TOP: 10px;font-weight:bold" scope="row" width="32%" bgcolor="#f5f5fa">勤務時間</td>
				<td style="PADDING-RIGHT: 10px; PADDING-LEFT: 10px; PADDING-BOTTOM: 10px; PADDING-TOP: 10px; BACKGROUND-COLOR: #ffffff" width="68%">10：00～19：00</td>
		</tr>
		<tr>
				<td style="PADDING-RIGHT: 10px; PADDING-LEFT: 10px; PADDING-BOTTOM: 10px; PADDING-TOP: 10px;font-weight:bold" scope="row" width="32%" bgcolor="#f5f5fa">月収</td>
				<td style="PADDING-RIGHT: 10px; PADDING-LEFT: 10px; PADDING-BOTTOM: 10px; PADDING-TOP: 10px; BACKGROUND-COLOR: #ffffff" width="68%">50万円～60万円</td>
		</tr>
		<tr>
				<td style="PADDING-RIGHT: 10px; PADDING-LEFT: 10px; PADDING-BOTTOM: 10px; PADDING-TOP: 10px;font-weight:bold" scope="row" width="32%" bgcolor="#f5f5fa">勤務地</td>
				<td style="PADDING-RIGHT: 10px; PADDING-LEFT: 10px; PADDING-BOTTOM: 10px; PADDING-TOP: 10px; BACKGROUND-COLOR: #ffffff" width="68%">渋谷区</td>
		</tr>
		<tr>
				<td style="PADDING-RIGHT: 10px; PADDING-LEFT: 10px; PADDING-BOTTOM: 10px; PADDING-TOP: 10px;font-weight:bold" scope="row" width="32%" bgcolor="#f5f5fa">期間</td>
				<td style="PADDING-RIGHT: 10px; PADDING-LEFT: 10px; PADDING-BOTTOM: 10px; PADDING-TOP: 10px; BACKGROUND-COLOR: #ffffff" width="68%">即日～長期</td>
		</tr>
		<tr>
				<td style="PADDING-RIGHT: 10px; PADDING-LEFT: 10px; PADDING-BOTTOM: 10px; PADDING-TOP: 10px;font-weight:bold" scope="row" width="32%" bgcolor="#f5f5fa">開発環境</td>
				<td style="PADDING-RIGHT: 10px; PADDING-LEFT: 10px; PADDING-BOTTOM: 10px; PADDING-TOP: 10px; BACKGROUND-COLOR: #ffffff" width="68%">OS: Linux (Cent OS)<br />開発言語：Ruby, Golang, Lua, C/C++</td>
		</tr>
		<tr>
				<td style="PADDING-RIGHT: 10px; PADDING-LEFT: 10px; PADDING-BOTTOM: 10px; PADDING-TOP: 10px;font-weight:bold" scope="row" width="32%" bgcolor="#f5f5fa">スキル</td>
				<td style="PADDING-RIGHT: 10px; PADDING-LEFT: 10px; PADDING-BOTTOM: 10px; PADDING-TOP: 10px; BACKGROUND-COLOR: #ffffff" width="68%">【必須】<br />・Lightweight Language 3年以上<br />・Web API 開発経験<br />・標準的なWeb技術 (REST)<br />・設計経験あり</td>
		</tr>
		<!--<tr>
				<td style="PADDING-RIGHT: 10px; PADDING-LEFT: 10px; PADDING-BOTTOM: 10px; PADDING-TOP: 10px;font-weight:bold" scope="row" width="32%" bgcolor="#f5f5fa">備考</td>
				<td style="PADDING-RIGHT: 10px; PADDING-LEFT: 10px; PADDING-BOTTOM: 10px; PADDING-TOP: 10px; BACKGROUND-COLOR: #ffffff" width="68%"></td>
		</tr>-->


</table><br><br><br>

<?php
	print '<br />';
	}
	// 接続を閉じる
	$pdo = null;
}catch (PDOException $e) {
	// UTF8に文字エンコーディングを変換します
	echo mb_convert_encoding($e->getMessage(),'UTF-8','SJIS-win');
	die();
}
?>



<div id="footer">
<div id="footerabout">
	<div id="about">
		<h3><span></span>　グローアップリクルートについて</h3>
	</div>

		<table>
	<tr>
	<td>
	<p><img src="../img/img_2.png"/></p>
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
<a href="#" class="mouseHvr"><img src="../img/banner_1.png"></a>
<a href="#" class="mouseHvr"><img src="../img/banner_2.png"></a>
<a href="#" class="mouseHvr"><img src="../img/banner_3.png"></a>
<a href="#" class="mouseHvr"><img src="../img/banner_4.png"></a>
</div>


  <div id="footerContnts">
    <address>Copyright&nbsp;(C)&nbsp;グローアップ株式会社.&nbsp;All&nbsp;Rights&nbsp;Reserved.</address>
  </div>
  </div><!-- #footer -->
</div><!--contentsBox -->
</div>

<!--jquery-->
<!--topボタン-->
<p class="pagetop"><a href="#top"><img src="../img/pagetop.png" alt="PAGE TOP" /></a></p>
 <!--topボタン-->
<!--メニューバー固定-->
<script type="text/javascript">
jQuery(function($) {
	var nav = $('#main'),
	offset = nav.offset();
	$(window).scroll(function () {
	  if($(window).scrollTop() > offset.top) {
	    nav.addClass('fixed');
	  } else {
	    nav.removeClass('fixed');
	  }
	});
});
</script>
<!--メニューバー固定-->

<script>
$(function(){
   $(".PhotoBox").hover(function(){
      $(".SlideBox",this).stop().animate({top:"100px"},"fast");
   },function(){
      $(".SlideBox",this).stop().animate({top:"150px"},"slow");
   });

});
</script>
<!--jquery-->

</body>

</html>
