

<?php
if(isset($_SESSION['username'])){
echo $this->layout('contentArea', array(
	'title' => '企業情報',
	'content' => $this->yield('content'),
	'breadcrumbs' => array(
		'TOP',
		'企業情報'
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
		'title' => '企業情報',
		'content' => $this->yield('content'),
		'breadcrumbs' => array(
			'TOP',
			'企業情報'
		)
	));
}
?>

<div id="contentsArea">

<div id="contentsLeft">

<div class="contentsl_1">

<div class="list_kigyou">
<table border="2" rules="all" style="margin-bottom:20px;">
	<tbody><!-- 空白の所は、項目を記入 -->
		<tr>
			<th width="200">
			社名
		  </th>
			<td width="1573">
			グローアップ株式会社
			</td>
		</tr>
		<tr>
			<th>
			所在地
		  </th>
			<td>
			【本部：営業部、経営企画部、制作部（郵送先、面接・打合せ会場）】<br>
			東京都世田谷区上馬1-9-22<br>
			</td>
		</tr>
		<tr>
			<th>
			設立
		  </th>
			<td>
			2017年［平成29年］5月9日
			</td>
		</tr>
		<tr>
			<th>
			事業概要
		</th>
			<td>
				アプリ開発<br>
				システム開発<br>
                WEBデザイン<br>
                イラスト制作<br>
                漫画制作<br>
                ゲーム制作<br>
				人材派遣事業<br>
		  	アウトソーシング事業<br>
			</td>
		</tr>
        <tr>
			<th>
			派遣番号
		  </th>
			<td>
			13-310792
			</td>
		</tr>
        <tr>
			<th>
			有料職業紹介許可番号
		  </th>
			<td>
			13-ユ-309569
			</td>
		</tr>
</table>
</div>
</div>
    
    <br>

<!--<div class="contentsl_ac">
    <a href="./access.php" style="font-size : 16px;">詳しいアクセスはこちら</a>
</div>
    
    <br>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d810.6637130605649!2d139.66794112917626!3d35.63623438872234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f58ec1127bbd%3A0xa54e8a2c2ec4b813!2z44Kw44Ot44O844Ki44OD44OX5qCq5byP5Lya56S-!5e0!3m2!1sja!2sjp!4v1551841596078" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

<p>
  <small><a href="https://www.google.com/maps/place/%E3%82%B0%E3%83%AD%E3%83%BC%E3%82%A2%E3%83%83%E3%83%97%E6%A0%AA%E5%BC%8F%E4%BC%9A%E7%A4%BE/@35.6362344,139.6679411,19z/data=!3m1!4b1!4m5!3m4!1s0x6018f58ec1127bbd:0xa54e8a2c2ec4b813!8m2!3d35.6362333!4d139.6684883?hl=ja" style="color:#0000FF;text-align:left" target="_blank">大きな地図で見る</a></small>
</p>

</div>

</div>-->