<?php $this->beginSection('content') ?>
<form class="form" method="post">
	<?php if ($validator->hasSuccessMessage()) {
		echo '<div class="my-2 alert alert-success">' . $validator->getSuccessMessage() . '</div>';
	}
	?>
	<div class="my-2">
		<input type="text" name="email_or_username" placeholder="ユーザーネームまたメールアドレス" size="40" value="<?= $validator->getData('email_or_username') ?>" />
		<?php if ($validator->hasError('email_or_username')): ?>
			<div style="color: red"><?= $validator->getError('email_or_username') ?></div>
		<?php endif ?>
	</div>
	<div>
		<button class="btn btn-primary">リセット</button>
	</div>
</form>
<?php $this->endSection(); ?>

<?php

echo $this->layout('contentArea-anonym', array(
	'title' => 'パスワードを忘れた',
	'content' => $this->yield('content'),
	'breadcrumbs' => array(
		'TOP',
		'My Page',
		'ログイン' => 'login-input.php',
		'パスワードを忘れた'
	),
));