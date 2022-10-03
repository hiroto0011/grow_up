

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>WEBサイト・動画・ゲーム・漫画・イラスト制作【グローアップ株式会社】</title>
	<meta name="description" content="WEBサイト・動画・ゲーム・漫画・イラストなどデジタルコンテンツ制作の事ならグローアップ株式会社へお任せください。お客様に満足いただける、品質・価格・サービスをご提供致します" />
	<meta name="keywords" content="C言語,Unity,PHP,Java,Linux,Flash,After Effects,WEB,JavaScript,Maya,Unity,Spine,PhotoShop,Illustrator,CLIP STUDIO PAINT" />
	<link href="css/reset.css" type="text/css" rel="stylesheet" />
	<link href="css/common.css" type="text/css" rel="stylesheet" />
	<!--<script src="jquery-3.2.1.min.js"></script>-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="javascript/sidebar.js"></script>
	<!--<script src="scripts.js"></script>-->
	<style type="text/css">
	.clearfix{
		clear: both;
	}
	a:link {text-decoration: none; color:inherit;}
a:visited {text-decoration: none; color:inherit;}
a:hover {text-decoration: underline;}
</style>
</head>

<body>
	<script type="text/javascript" src="https://ad.xdomain.ne.jp/js/server-php.js"></script>
	<div id="contentsBox">
		<div id="header">

			<div id="top_title" class="clearfix">
				<!--kokokara-->
				<table>
					<tr>
						<td><a href="index.php" class="mouseHvr"><img src="img/logo.png" width="350" height="50" alt="グローアップ"/></a></td>
						<td style="position:relative;left:10%;">
							<?php if(isset($_SESSION['username'])):?>
							<div id="top_login">
								<div class="top_login_inf">
								<?php echo "ようこそ, ", $_SESSION['username'],"様";?>
							 </div>
							<div class="top_login_option">
								<p><a href="customer-mypage.php">My Page</a>&nbsp<a href="customer-profile.php">プロフィール</a>
								&nbsp<a href="customer-logout.php">ログアウト</a></p>
							</div>
							</div>
							<?php else:?>
								<div id="top_login">
										<div class="top_login_inf" >
										<p><a href="login-input.php" style="color:#167DB9;">ログイン画面へ</a></p>
									</div>
									<div class="top_login_option" >
										<p><a href="customer-input.php">会員登録</a>&nbsp&nbsp&nbsp<a href="customer-forgot-password.php">パスワードを忘れた</a></p>
									</div>
								</div>
									<?php endif?>
						</td>
					</tr>
					<tr>
						<td style="position:relative;left:2%;">
							<div id="top_link">
								<ul>
									<li><a href="tantou.php" class="mouseHvr">｜企業のご担当者様</a></li>
									<li><a href="recruit.php" class="mouseHvr">｜採用情報</a></li>
									<li><a href="news.php" class="mouseHvr">｜ニュース</a></li>
                                    <li><a href="access.php" class="mouseHvr">｜アクセス</a></li>
								</ul>
							</div>
						</td>
						<?php if (isset($_SESSION['username'])): ?>
							<td style="position:relative;left:3.5%;top:4.7px;"><a href="customer-logout.php" class="mouseHvr"><img src="img/tutorial.png" alt="tutorial"></a></td>
						<?php else: ?>
							<td style="position:relative;left:3.5%;top:4.7px;"><a href="customer-input.php" class="mouseHvr"><img src="img/tutorial.png" alt="tutorial"></a></td>
						<?php endif ?>
						<td style="position:relative;right:5.7%;top:5px;">
							<div class="box2" style="width:160px;">
								<p> <a href="faq.php">Q・A</a>&nbsp &nbsp &nbsp &nbsp<a href="sitemap.php">サイトマップ</a></p>
							</div>
						</td>
					</tr>
				</table>
				<!--kokomade-->
				<!--<table>
					<tr>
						<td><a href="index.php" class="mouseHvr"><img src="img/logo.png" width="350" height="50" alt="グローアップ"/></a></td>
						<td>
							<div id="top_1">
								<table>
									<tr>
										<td colspan="2">
											<p>アウトソーシングをご希望の方</p>
											<div id="top_link">
												<ul>
													<li><a href="tantou.php" class="mouseHvr">｜企業のご担当者様</a></li>
													<li><a href="company.php" class="mouseHvr">｜コーポレートサイト</a></li>
													<li><a href="recruit.php" class="mouseHvr">｜採用情報</a></li>
													<li><a href="news.php" class="mouseHvr">｜ニュース</a></li>
												</ul>
											</div>
										</td>
									</tr>
									<tr>
										<?php if (isset($_SESSION['username'])): ?>
											<td><a href="customer-logout.php" class="mouseHvr"><img src="img/tutorial.png" alt="tutorial"></a></td>
										<?php else: ?>
											<td><a href="customer-input.php" class="mouseHvr"><img src="img/tutorial.png" alt="tutorial"></a></td>
										<?php endif ?>
										<td>
											<div class="box2" style="width:160px;">
												<p> <a href="faq.php">Q・A</a>&nbsp &nbsp &nbsp &nbsp<a href="sitemap.php">サイトマップ</a></p>
											</div>


										</td>
									</tr>
								</table>
							</div>
						</td>
						<td>
							<?php if(isset($_SESSION['username'])):?>
							<div id="top_login">
								<div class="top_login_inf">
								<?php echo "ようこそ, ", $_SESSION['username'],"様";?>
							 </div>
							<div class="top_login_option">
								<p><a href="customer-profile.php">プロフィール</a>&nbsp<a href="customer-mypage.php">My page</a>
								&nbsp<a href="customer-logout.php">ログアウト</a></p>
							</div>
							</div>
							<?php else:?>
								<div id="top_login">
										<div class="top_login_inf" >
										<p><a href="login-input.php">ログイン画面へ</a></p>
									</div>
									<div class="top_login_option" >
										<p><a href="customer-input.php">会員登録</a>&nbsp&nbsp&nbsp<a href="customer-forgot-password.php">パスワードを忘れた</a></p>
									</div>
								</div>
									<?php endif?>
						</td>
					</tr>
				</table>-->
				<!-- #top_title --></div>


				<div id="main">
					<div id="sub">
						<div id="subNav">
							<ul>
								<li><a href="index.php"><img src="img/top_btn.png"  alt="トップ" onmouseover="this.src='img/top_btn_on.png'" onmouseout="this.src='img/top_btn.png'"/></a></li>
								<li><a href="work.php"><img src="img/work_btn.png"  alt="お仕事をお探しの方" onmouseover="this.src='img/work_btn_on.png'" onmouseout="this.src='img/work_btn.png'"/></a></li>
								<li><a href="hito.php"><img src="img/hito_btn.png" alt="人材をお探しの企業様" onmouseover="this.src='img/hito_btn_on.png'" onmouseout="this.src='img/hito_btn.png'"/></a></li>
								<li><a href="company.php"><img src="img/company_btn.png" alt="企業情報" onmouseover="this.src='img/company_btn_on.png'" onmouseout="this.src='img/company_btn.png'"/></a></li>
								<li><a href="otoiawase.php"><img src="img/qa_btn.png" alt="お問い合わせ" onmouseover="this.src='img/qa_btn_on.png'" onmouseout="this.src='img/qa_btn.png'"/></a></li>
							</ul>
							<a href="oubo.php" style="padding: 0px 10px;"><img src="img/dl.png" class="mouseHvr" alt="応募書類ダウンロード"/></a>
							<!-- #subNav --></div>
							<!-- #sub --></div>
							<!-- #main --></div>

							<!--トップ画面-->
							<div id="topimg">
								<img src="img/topimg.png" alt="top" />
							</div>
							<div class="staff">
								<a href="work.php"><img src="img/search.png" alt="staff" onmouseover="this.src='img/search_on.png'" onmouseout="this.src='img/search.png'"/></a>
							</div>

							<!--検索箇所-->
							<div id="top_select">
								<form method="get" action="work.php" name="work">
									<table>
										<!--<tr>
										<td valign="bottom"><h3>お仕事検索</h3></td>
									-->		<!--<td></td>-->
									<!--<td align="right" valign="bottom"><a href="#"><img src="img/top_img_btn1.png" alt="staff"/></a>　</td>
									<td><a href="#"><img src="img/top_img_btn2.png" alt="staff"/></a></td>-->
									<!--</tr>-->
									<tr>
										<td><b>お仕事検索</b></td>
										<td>
											<select name="prefectures" id="prefectures">

												<option value="null">都道府県を選ぶ</option>
												<option value="東京">東京</option>
												<option value="神奈川">神奈川</option>
												<option value="埼玉">埼玉</option>
												<option value="千葉">千葉</option>
												<option value="茨城">茨城</option>
												<option value="栃木">栃木</option>
												<option value="群馬">群馬</option>
												<option value="その他">その他</option>
											</select>　　
										</td>
										<td>
											<select name="occupation" id="occupation">
												<option value="null">職種を選ぶ</option>
												<option value="事務">事務</option>
												<option value="営業">営業</option>
												<option value="プログラマー">プログラマー</option>
												<option value="システムエンジニア">システムエンジニア</option>
												<option value="イラストレーター">イラストレーター</option>
												<option value="Webデザイナー">Webデザイナー</option>
												<option value="DTPデザイナー">DTPデザイナー</option>
												<option value="漫画家">漫画家</option>
												<option value="シナリオライター">シナリオライター</option>
												<option value="その他">その他</option>
											</select>　　
										</td>
										<td style="cursor:pointer;">
											<img src="img/kensaku.png" alt="検索する" onclick="submit()" onmouseover="this.src='img/kensaku_on.png'" onmouseout="this.src='img/kensaku.png'"/>
										</td>
									</tr>
								</table>
							</form>
						</div>