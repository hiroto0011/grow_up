<!-- お問い合わせ -->
<?php $this->beginSection('content') ?>
<?php if ($validator->hasSuccessMessage()) {
	echo '<div class="my-2 alert alert-success">' . $validator->getSuccessMessage() . '</div>';
}
?>

<form id="mailformpro" action="/mailform/send.cgi" method="POST" onsubmit="return sendmail(this);">
<!--↓↓スパムメール防止などのセキュリティのためＣＧＩソース内に埋め込む事もできます！その時は絶対消してねこのタグ↓↓-->

<link href="css/toiawase.css" type="text/css" rel="stylesheet">
	<dl class="mailform">
		<dt class="mfp"><span class="hissu">必須</span><span class="daimei">&nbsp;お名前</span><br>
			<input type="text" placeholder="名字" name="kanji_last_name" data-kana="セイ" size="15" value="<?= $validator->getData('kanji_last_name') ?>">
			<input type="text" placeholder="お名前" name="kanji_first_name" data-kana="メイ" size="15" value="<?= $validator->getData('kanji_first_name') ?>">
			<?php if ($validator->hasError('kanji_last_name')): ?>
			<div style="color: red"><?= $validator->getError('kanji_last_name') ?></div>
			<?php endif ?>
			<?php if ($validator->hasError('kanji_first_name')): ?>
			<div style="color: red"><?= $validator->getError('kanji_first_name') ?></div>
			<?php endif ?>
		</dt>
			<br>
		<dt class="mfp"><span class="hissu">必須</span><span class="daimei">フリガナ</span><br>
			<input type="text" placeholder="ミョウジ" name="furigana_last_name" size="15" data-charcheck="zenkaku" value="<?= $validator->getData('furigana_last_name') ?>">
			<input type="text" placeholder="オナマエ" name="furigana_first_name" size="15" data-charcheck="kana" value="<?= $validator->getData('furigana_first_name') ?>">
			<?php if ($validator->hasError('furigana_last_name')): ?>
			<div style="color: red"><?= $validator->getError('furigana_last_name') ?></div>
			<?php endif ?>
			<?php if ($validator->hasError('furigana_first_name')): ?>
			<div style="color: red"><?= $validator->getError('furigana_first_name') ?></div>
			<?php endif ?>
		</dt>
			<br>
		<dt class="mfp"><span class="daimei">会社名 または 学校名</span><br>
			<input type="kaisya" placeholder="会社名 または 学校名" name="company_name" placeholder="例）グローアップ株式会社" size="40" value="<?= $validator->getData('company_name') ?>"></dt>
			<?php if ($validator->hasError('company_name')): ?>
			<div style="color: red"><?= $validator->getError('company_name') ?></div>
			<?php endif ?>
			<br>
		<dt class="mfp"><span class="hissu">必須</span><span class="daimei">メールアドレス</span><br>
			<input type="text" placeholder="メールアドレス" data-type="email" name="email" size="40" value="<?= $validator->getData('email') ?>" style="width: 100%;"></dt>
			<?php if ($validator->hasError('email')): ?>
			<div style="color: red"><?= $validator->getError('email') ?></div>
			<?php endif ?>
			<br>
		<dt class="mfp"><span class="hissu">必須</span><span class="daimei">確認のためもう一度</span><br>
			<input type="text" placeholder="メールアドレス" data-type="email" name="confirm_email" data-post-disable="1" size="40" value="<?= $validator->getData('confirm_email') ?>" style="width: 100%;"></dt>
			<?php if ($validator->hasError('confirm_email')): ?>
			<div style="color: red"><?= $validator->getError('confirm_email') ?></div>
			<?php endif ?>
		<br>
		<dt class="mfp"><span class="hissu">必須</span><span class="daimei">携帯番号</span><br>
			<input type="tel" placeholder="携帯番号" data-type="tel" name="telephone_number" size="16" data-min="9" value="<?= $validator->getData('telephone_number') ?>"></dt>
			<?php if ($validator->hasError('telephone_number')): ?>
			<div style="color: red"><?= $validator->getError('telephone_number') ?></div>
			<?php endif ?>
			<br>
		<dt class="mfp"><span class="daimei">郵便番号</span><br>
			<input type="text" placeholder="郵便番号" name="postal_number" data-address="都道府県,市区町村,市区町村" autocomplete="off" value="<?= $validator->getData('postal_number') ?>" onKeyUp="AjaxZip3.zip2addr(this,'','prefecture','city');">
			<?php if ($validator->hasError('postal_number')): ?>
			<div style="color: red"><?= $validator->getError('postal_number') ?></div>
			<?php endif ?>
		</dt>
		<br>
		<dt class="mfp"><span class="daimei">ご住所</span></dt>
		<dd class="mfp">
			<ol>
					<span class="daimei">都道府県</span>
					<select name="prefecture">
						<?php
						foreach ($prefecture_list as $key => $items) {
							if (is_string($items)) {
								echo '<option value="' . $key . '">' . $items . '</option>';
							} else {
								echo '<optgroup label="';
								foreach($items as $subkey => $item) {
									echo $subkey . '">';
									foreach($item as $item2) {
										$selected = $validator->getData('prefecture') == $item2 ? ' selected="selected"' : '';
										echo '<option value="' . $item2 . '"' . $selected . '>' . $item2 . '</option>';
									}
								}
								echo '</optgroup>';
							}
						}
						?>
					</select>
					<?php if ($validator->hasError('prefecture')): ?>
					<div style="color: red"><?= $validator->getError('prefecture') ?></div>
					<?php endif ?>
				<br>
				<span class="daimei">市区町村</span> <input type="address" name="city" size="50" placeholder="市区町村"value="<?= $validator->getData('city') ?>">
				<?php if ($validator->hasError('city')): ?>
				<div style="color: red"><?= $validator->getError('city') ?></div>
				<?php endif ?>
				<br>
				<span class="daimei">丁目番地</span> <input type="address" name="avenue" size="50" placeholder="丁目番地" value="<?= $validator->getData('avenue') ?>">
				<?php if ($validator->hasError('avenue')): ?>
				<div style="color: red"><?= $validator->getError('avenue') ?></div>
				<?php endif ?>
				<br>
			</ol>
		</dd>
		<br>
		<dt class="mfp"><span class="hissu">必須</span><span class="daimei">件名</span></dt>
		<dd class="mfp"><input type="text" placeholder="件名" name="subject" size="50" value="<?= $validator->getData('subject') ?>" style="width: 100%;">
			<?php if ($validator->hasError('subject')): ?>
			<div style="color: red"><?= $validator->getError('subject') ?></div>
			<?php endif ?>
		</dd>
		<br>
		<dt class="mfp"><span class="hissu">必須</span><span class="daimei">メッセージ</span></dt>
		<dd class="mfp"><textarea name="body" placeholder="メッセージ" rows="10" cols="60" style="width: 100%;"><?= $validator->getData('body') ?></textarea>
			<?php if ($validator->hasError('body')): ?>
			<div style="color: red"><?= $validator->getError('body') ?></div>
			<?php endif ?>
		</dd>
		<br>
		<dt class="mfp"><span class="hissu">必須</span><span class="daimei">送信確認</span></dt>
		<dd class="mfp"><label><input type="checkbox" data-exc="1" name="confirm_sending" value="送信チェック済み"<?= ($validator->getData('confirm_sending')=='') ? ' checked="checked"' : '' ?>><span class="daimei">
			上記送信内容を確認したらチェックを入れてください</span></label>
			<?php if ($validator->hasError('confirm_sending')): ?>
			<div style="color: red"><?= $validator->getError('confirm_sending') ?></div>
			<?php endif ?>
		</dd>
	</dl>
	<div class="my-2">
		<button type="submit" class="btn btn-success">送信する</button>
	</div>
</form>
<?php $this->endSection(); ?>

<?php $this->beginSection('bottom') ?>
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
<script type="text/javascript" src="mailform/mailform.js" charset="utf-8"></script>
<script type="text/javascript" src="mailform/postcodes/get.cgi?js" charset="utf-8"></script>
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
<?php $this->endSection() ?>

<?php
if(isset($_SESSION['username'])){
echo $this->layout('contentArea', array(
	'title' => 'お問い合わせ',
	'content' => $this->yield('content'),
	'breadcrumbs' => array(
		'TOP',
		'お問い合わせ'
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
		'title' => 'お問い合わせ',
		'content' => $this->yield('content'),
		'breadcrumbs' => array(
			'TOP',
			'お問い合わせ'
		)
	));
}
?>
