<?php $this->beginSection('content') ?>
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
			<td>パスワード</td>
			<td>
				<div class="my-2">
					<input type="password" name="input_password" value="<?= $model->input_password ?>">
					<?php if ($validator->hasError('input_password')): ?>
					<div style="color: red"><?= $validator->getError('input_password') ?></div>
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

<div style="padding-bottom: 20px;margin-top: 40px;">
	<p class="my-2">My Pageを開設した方は<a href="login-input.php">ログインする</a></p>
</div>

<?php $this->endSection(); ?>

<?php
if(isset($_SESSION['username'])){
echo $this->layout('contentArea', array(
	'title' => '新規登録',
	'content' => $this->yield('content'),
	'breadcrumbs' => array(
		'TOP',
		'新規登録'
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
		'title' => '新規登録',
		'content' => $this->yield('content'),
		'breadcrumbs' => array(
			'TOP',
			'新規登録'
		)
	));
}
?>
