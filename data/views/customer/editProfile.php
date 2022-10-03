<?php $this->beginSection('content') ?>
<?php
if ($validator->hasSuccessMessage()) {
	echo '<div class="alert alert-success">' . $validator->getSuccessMessage() . '</div>';
}
?>
<form action="" method="post" class="form">
	<table>
		<tr>
			<td>お名前</td>
			<td>
				<div class="my-2">
					<input type="text" name="name" value="<?= $model->name ?>">
					<?php if ($validator->hasError('name')): ?>
					<div style="color: red"><?= $validator->getError('name') ?></div>
					<?php endif ?>
				</div>
			</td>
		</tr>
		<tr>
			<td>ログイン名</td>
			<td>
				<div class="my-2">
					<input type="text" name="username" value="<?= $model->username ?>">
					<?php if ($validator->hasError('username')): ?>
					<div style="color: red"><?= $validator->getError('username') ?></div>
					<?php endif ?>
				</div>
			</td>
		</tr>
		<tr>
			<td>メールアドレス</td>
			<td>
				<div class="my-2">
					<input type="text" name="email" value="<?= $model->email ?>" size="40">
					<?php if ($validator->hasError('email')): ?>
					<div style="color: red"><?= $validator->getError('email') ?></div>
					<?php endif ?>
				</div>
			</td>
		</tr>
		<tr>
			<td>ご住所</td>
			<td>
				<div class="my-2">
					<input type="text" name="address" value="<?= $model->address ?>" size="60">
					<?php if ($validator->hasError('address')): ?>
					<div style="color: red"><?= $validator->getError('address') ?></div>
					<?php endif ?>
				</div>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" class="btn btn-success" value="確定"></td>
		</tr>
	</table>
</form><!-- #login -->
<?php $this->endSection(); ?>

<?php

echo $this->layout('contentArea', array(
	'title' => 'プロフィール編集',
	'content' => $this->yield('content'),
	'breadcrumbs' => array(
		'TOP',
		'My Page' => 'customer-mypage.php',
		'プロフィール' => 'customer-profile.php',
		'編集'
	),
));