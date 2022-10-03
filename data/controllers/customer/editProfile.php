<?php

$model = new UserModel();
$validator = new Validator();
$model = $model->find('username', $_SESSION['username']);

if ($_POST) {
	$validator->input($_POST);
	$model->input($_POST);
	$model->updated_at = time();
	$model->updated_user_id = $model->id;
	$validator->setRule(array(
		'required' => 'name, email, username, address',
		'email' => 'email',
	));

	if ($validator->validate() && $model->update()) {
		$_SESSION['username'] = $model->username;
		$validator->setSuccessMessage('プロファイルを変更しました。');
	}
}