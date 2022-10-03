<?php $this->beginSection('content') ?>
<?php
if ($validator->hasSuccessMessage()) {
	echo '<div class="alert alert-success">' . $validator->getSuccessMessage() . '</div>';
}
?>
<form action="" method="post" class="form" style="padding: 20px 0;">
<div class="my-2">
	<input type="password" name="old_password" placeholder="パスワード" size="30" value="<?= $validator->getData('old_password') ?>" />
</div>
<?php if ($validator->hasError('old_password')): ?>
	<div style="color: red"><?= $validator->getError('old_password') ?></div>
<?php endif ?>
<div class="my-2">
	<input type="password" name="input_password" placeholder="新しいパスワード" size="30" value="<?= $validator->getData('input_password') ?>" />
</div>
<?php if ($validator->hasError('input_password')): ?>
	<div style="color: red"><?= $validator->getError('input_password') ?></div>
<?php endif ?>
<div class="my-2">
	<input type="password" name="input_password2" placeholder="新しいパスワード確認" size="30" value="<?= $validator->getData('input_password2') ?>" />
</div>
<?php if ($validator->hasError('input_password2')): ?>
	<div style="color: red"><?= $validator->getError('input_password2') ?></div>
<?php endif ?>
<div class="my-2">
	<input type="submit" class="btn btn-primary" value="変更">
</div>
</form>
<?php $this->endSection(); ?>
<?php

echo $this->layout('contentArea', array(
	'title' => 'パスワード変更',
	'content' => $this->yield('content'),
	'breadcrumbs' => array(
		'TOP',
		'My Page' => 'customer-mypage.php',
		'プロフィール' => 'customer-profile.php',
		'変更'
	),
));