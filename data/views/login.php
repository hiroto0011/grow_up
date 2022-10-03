<div id="contentsArea">

<div id="contentsArea" class="clearfix">
	<h2>Mypageログイン</h2>
	<div>
	<hr color="#7FC3EA" width="635" align="left">
	</div>

	<form action="" method="post" style="padding: 20px 0;">
	ログイン名<input type="text" name="username">
	<?php if ($validator->hasError('username')): ?>
	<div style="color: red"><?= $validator->getError('username') ?></div>
	<?php endif ?>
	<br>
	パスワード<input type="password" name="input_password">
	<?php if ($validator->hasError('input_password')): ?>
	<div style="color: red"><?= $validator->getError('input_password') ?></div>
	<?php endif ?>
	<br>
	<input type="submit" value="ログイン">
	<input type="checkbox" name="riyu" value="1" checked="checked">次回から自動的にログイン
	</form>

	<div style="padding-bottom: 20px;">
		<p>第三者と共有で使用する端末をご利用の場合は、自動ログインのチェックを外してください。</p>
		<link rel="stylesheet"href="font-size.css "media="all"></p>
		<p> 上記に同意してログインする　</p>
		<p> My Pageを開設されていない方　</p>
		<p><a href="customer-input.php"> 登録する　</a></p>
	</div>
</div>

</div>
