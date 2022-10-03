<div id="contentsArea">

<div class="contentsl_1">
<div id="sideline">
	<h2>お問い合わせフォーム</h2>
	<hr color="#7FC3EA" width="635" align="left">  <br />
<div>
	<hr color="#7FC3EA" width="635" align="left">  <br />


<br>

<!--メールフォームプロ　以下一行改変必須-->

<form id="mailformpro" action="" method="POST">
<link href="css/toiawase.css" type="text/css" rel="stylesheet">
	<dl class="mailform">
		<dt class="mfp"><span class="hissu">必須</span><span class="daimei">&nbsp;お名前</span><br>
			<input type="text" name="kanji_last_name" data-kana="セイ" size="15" value="<?= $validator->getData('kanji_last_name') ?>"> <input type="text" name="kanji_first_name" data-kana="メイ" size="15" value="<?= $validator->getData('kanji_first_name') ?>">
			<?php if ($validator->hasError('kanji_last_name')): ?>
			<div style="color: red"><?= $validator->getError('kanji_last_name') ?></div>
			<?php endif ?>
			<?php if ($validator->hasError('kanji_first_name')): ?>
			<div style="color: red"><?= $validator->getError('kanji_first_name') ?></div>
			<?php endif ?>
		</dt>
			<br>
		<dt class="mfp"><span class="hissu">必須</span><span class="daimei">フリガナ</span><br>
			<input type="text" name="furigana_last_name" size="15" data-charcheck="zenkaku" value="<?= $validator->getData('furigana_last_name') ?>">
			<input type="text" name="furigana_first_name" size="15" data-charcheck="kana" value="<?= $validator->getData('furigana_first_name') ?>">
			<?php if ($validator->hasError('furigana_last_name')): ?>
			<div style="color: red"><?= $validator->getError('furigana_last_name') ?></div>
			<?php endif ?>
			<?php if ($validator->hasError('furigana_first_name')): ?>
			<div style="color: red"><?= $validator->getError('furigana_first_name') ?></div>
			<?php endif ?>
		</dt>
			<br>
		<!--
        <dt class="mfp"><span class="hissu">必須</span><span class="daimei">性別</span></dt>
		<dd class="mfp">
			<label><input type="radio" name="性別" value="男性"> 男性</label>
			<label><input type="radio" name="性別" value="女性"> 女性</label>
		</dd>
		<<br>-->
		<dt class="mfp"><span class="daimei">会社名</span><br>
			<input type="kaisya" name="company_name" placeholder="例）グローアップ株式会社" size="40" value="<?= $validator->getData('company_name') ?>"></dt>
			<?php if ($validator->hasError('company_name')): ?>
			<div style="color: red"><?= $validator->getError('company_name') ?></div>
			<?php endif ?>
			<br>
		<dt class="mfp"><span class="hissu">必須</span><span class="daimei">メールアドレス</span><br>
			<input type="text" data-type="email" name="email" size="40" value="<?= $validator->getData('email') ?>"></dt>
			<?php if ($validator->hasError('email')): ?>
			<div style="color: red"><?= $validator->getError('email') ?></div>
			<?php endif ?>
			<br>
		<dt class="mfp"><span class="hissu">必須</span><span class="daimei">確認のためもう一度</span><br>
			<input type="text" data-type="email" name="confirm_email" data-post-disable="1" size="40" value="<?= $validator->getData('confirm_email') ?>"></dt>
			<?php if ($validator->hasError('confirm_email')): ?>
			<div style="color: red"><?= $validator->getError('confirm_email') ?></div>
			<?php endif ?>
		<br>
		<dt class="mfp"><span class="hissu">必須</span><span class="daimei">電話番号</span><br>
			<input type="tel" data-type="tel" name="telephone_number" size="16" data-min="9" value="<?= $validator->getData('telephone_number') ?>"></dt>
			<?php if ($validator->hasError('telephone_number')): ?>
			<div style="color: red"><?= $validator->getError('telephone_number') ?></div>
			<?php endif ?>
			<br>
		<dt class="mfp"><span class="daimei">郵便番号</span><br>
			<input type="text" name="postal_number" data-address="都道府県,市区町村,市区町村" autocomplete="off" value="<?= $validator->getData('postal_number') ?>">
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
				<span class="daimei">市区町村</span> <input type="address" name="city" size="50" value="<?= $validator->getData('city') ?>">
				<?php if ($validator->hasError('city')): ?>
				<div style="color: red"><?= $validator->getError('city') ?></div>
				<?php endif ?>
				<br>
				<span class="daimei">丁目番地</span> <input type="address" name="avenue" size="50" value="<?= $validator->getData('avenue') ?>">
				<?php if ($validator->hasError('avenue')): ?>
				<div style="color: red"><?= $validator->getError('avenue') ?></div>
				<?php endif ?>
				<br>
			</ol>
		</dd>
		<br>
		<dt class="mfp"><span class="daimei">件名</span></dt>
		<dd class="mfp"><input type="text" name="subject" size="50" value="<?= $validator->getData('subject') ?>">
			<?php if ($validator->hasError('subject')): ?>
			<div style="color: red"><?= $validator->getError('subject') ?></div>
			<?php endif ?>
		</dd>
		<br>
		<dt class="mfp"><span class="daimei">備考欄</span></dt>
		<dd class="mfp"><textarea name="body" rows="10" cols="60"><?= $validator->getData('body') ?></textarea>
			<?php if ($validator->hasError('body')): ?>
			<div style="color: red"><?= $validator->getError('body') ?></div>
			<?php endif ?>
		</dd>
		<br>
		<dt class="mfp"><span class="hissu">必須</span><span class="daimei">送信確認</span></dt>
		<dd class="mfp"><label><input type="checkbox" data-exc="1" name="confirm_sending" value="送信チェック済み"<?= !empty($validator->getData('confirm_sending')) ? ' checked="checked"' : '' ?>><span class="daimei"> 上記送信内容を確認したらチェックを入れてください</span></label>
			<?php if ($validator->hasError('confirm_sending')): ?>
			<div style="color: red"><?= $validator->getError('confirm_sending') ?></div>
			<?php endif ?>
		</dd>
	</dl>
	<div class="buttons">
		<span class="button"><button type="submit">送信する</button>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<button type="reset">リセット</button></span>
			<br>
	</div>
</form>
<script type="text/javascript" id="mfpjs" src="mailform/send.cgi" charset="UTF-8"></script>
<!--/メールフォームプロ　上の文は改変が必要です（mailformpro.cgiは存在しません！）-->

<!-- #content --></div>
</div>

<br><br><br>

<?php $this->beginSection('bottom') ?>
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
