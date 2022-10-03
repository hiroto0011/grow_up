<?php $this->beginSection('content') ?>
<form action="" method="post" class="form" style="padding: 20px 0;">
<div class="my-2">
	<input type="text" name="username" placeholder="ログイン名" size="30" value="<?= $validator->getData('username') ?>" />
</div>
<?php if ($validator->hasError('username')): ?>
	<div style="color: red"><?= $validator->getError('username') ?></div>
<?php endif ?>
<div class="my-2">
	<input type="password" name="input_password" placeholder="パスワード" size="30" />
</div>
<?php if ($validator->hasError('input_password')): ?>
	<div style="color: red"><?= $validator->getError('input_password') ?></div>
<?php endif ?>
<div class="my-2">
	<input type="submit" class="btn btn-primary" value="ログイン">
	<label style="margin-left: 20px;">
		<input type="checkbox" name="remember_me" style="margin-right: 5px;" value="1"<?= $validator->getData('remember_me') ? ' checked="checked"' : '' ?>>次回から自動的にログイン
	</label>
</div>
</form>

<div style="padding-bottom: 20px;">
	<p class="my-2">第三者と共有で使用する端末をご利用の場合は、自動ログインのチェックを外してください。<br>上記に同意してログインする</p>
	<p class="my-2">My Pageを開設されていない方は<a href="customer-input.php">登録する</a></p>
	<p class="my-2">パスワードを忘れた方は<a href="customer-forgot-password.php">こちら</a></p>
</div>

<?php $this->endSection(); ?>

<?php

echo $this->layout('contentArea-anonym', array(
	'title' => 'My Pageログイン',
	'content' => $this->yield('content'),
	'breadcrumbs' => array(
		'TOP',
		'My Page',
		'ログイン'
	),
));