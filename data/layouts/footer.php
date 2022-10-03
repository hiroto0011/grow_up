<div id="footer">
<div id="footerabout">
	<div id="about">
		<h3><span></span>　グローアップについて</h3>
	</div>

		<table>
	<tr>
	<td>
	<p><img src="./img/img_2.png"/></p>
	</td>
	<td>
		<div id="about_t">
			<h3>ニュースリリース</h3>
			<p>2018年7月1日</p>
		</div><!-- #about_t -->
		<div class="footer_link">
			<p class="mouseHvr"><a href="company.php"><font color="#7FC3EA">＞</font>コーポレートサイト</a></p>
			<p class="mouseHvr"><a href="news.php"><font color="#7FC3EA">＞</font>ニュースリリース</a></p>
			<p class="mouseHvr"><a href="recruit.php"><font color="#7FC3EA">＞</font>採用情報</a></p>
			<p class="mouseHvr"><a href="tantou.php"><font color="#7FC3EA">＞</font>企業のご担当者様</a></p>
		</div><!-- #syousai -->

	</td>
	</tr>
	</table>
	</div>


	<!--<div id="banner_link">
		<h3><span></span>　関連リンク</h3>
	</div>
<div id="banner">
<a href="#"><img src="./img/banner_1.png"></a>
<a href="#"><img src="./img/banner_2.png"></a>
<a href="#"><img src="./img/banner_3.png"></a>
<a href="#"><img src="./img/banner_4.png"></a>
</div>-->

  <div id="footerContnts">
  
    <address>Copyright&nbsp;(C)&nbsp;グローアップ株式会社.&nbsp;All&nbsp;Rights&nbsp;Reserved.</address>
  </div>
  </div><!-- #footer -->

<!--jquery-->
<!--topボタン-->
<div id="pagetop" style="position:fixed;right:30px;bottom:20px">
	<a href="#"><img src="img/pagetop.png"></a>
</div>

<script type="text/javascript">

//メニューバー固定
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


//ページトップに戻る
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
/*$('#pagetop').click(function(){
$('body').animate({
	scrollTop:0
},600);
	return false;
});*/
});


</script>
<!--jquery-->
<?= $this->yield('bottom') ?>
</body>
</html>
