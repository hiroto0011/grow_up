<?php
echo $this->layout('contentArea', array(
	'title' => 'プロフィール',
	'breadcrumbs' => array(
		'TOP',
		'My Page' => 'customer-mypage.php',
		'プロフィール'
	),
	'sidebar_menu' => array(
		'プロフィール編集' => 'customer-edit.php',
		'パスワード変更' => 'customer-change-password.php',
	)
));
?>
<table style="width:400px">
	<tr>
		<td style="font-size:1.5em">お名前</td>
		<td>
			<div class="my-2">
				<p style="font-size:1.3em"><?= $model->name?></p>
			</div>
		</td>
	</tr>
	<tr>
		<td style="font-size:1.5em">ログイン名</td>
		<td>
			<div class="my-2">
				<p style="font-size:1.3em"><?= $model->username ?></p>
			</div>
		</td>
	</tr>
	<tr>
		<td style="font-size:1.5em">メールアドレス</td>
		<td>
			<div class="my-2">
				<p style="font-size:1.3em"><?= $model->email ?></p>
			</div>
		</td>
	</tr>
	<tr>
		<td style="font-size:1.5em">ご住所</td>
		<td>
			<div class="my-2">
				<p style="font-size:1.3em"><?= $model->address ?></p>
			</div>
		</td>
	</tr>
</table>

<?php
