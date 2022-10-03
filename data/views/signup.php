<div id="contentsArea">


<div id="contentsArea" class="clearfix">
	<h2>新規登録</h2>
	<div>
		<hr color="#7FC3EA" width="635" align="left">
	</div>

	<div style="margin: 30px 0;">
		<div id="sinki">
			<form action="" method="post">
				<table>
					<tr>
						<td>お名前</td>
						<td>
							<input type="text" name="name" value="<?= $model->name ?>">
							<?php if ($validator->hasError('name')): ?>
							<div style="color: red"><?= $validator->getError('name') ?></div>
							<?php endif ?>
						</td>
					</tr>
					<tr>
						<td>ログイン名</td>
						<td>
							<input type="text" name="username" value="<?= $model->username ?>">
							<?php if ($validator->hasError('username')): ?>
							<div style="color: red"><?= $validator->getError('username') ?></div>
							<?php endif ?>
						</td>
					</tr>
					<tr>
						<td>メールアドレス</td>
						<td>
							<input type="text" name="email" value="<?= $model->email ?>">
							<?php if ($validator->hasError('email')): ?>
							<div style="color: red"><?= $validator->getError('email') ?></div>
							<?php endif ?>
						</td>
					</tr>
					<tr>
						<td>ご住所</td>
						<td>
							<input type="text" name="address" value="<?= $model->address ?>">
							<?php if ($validator->hasError('address')): ?>
							<div style="color: red"><?= $validator->getError('address') ?></div>
							<?php endif ?>
						</td>
					</tr>
					<tr>
						<td>パスワード</td>
						<td>
							<input type="password" name="input_password" value="<?= $model->input_password ?>">
							<?php if ($validator->hasError('input_password')): ?>
							<div style="color: red"><?= $validator->getError('input_password') ?></div>
							<?php endif ?>
						</td>
					</tr>
				</table>
				<input type="submit" value="確定">
		</form><!-- #login -->
		</div>
	</div>
</div>

</div>
