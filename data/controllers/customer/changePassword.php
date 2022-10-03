<?php

$validator = new Validator();
if ($_POST) {
	$validator->input($_POST);
	$validator->setRule(array(
		'required' => 'old_password, input_password, input_password2',
	));
	if ($validator->getData('input_password') != $validator->getData('input_password2')) {
		$validator->setError('input_password2', '新しいパスワードは同じではありません');
	}
	$model = new UserModel();
	$model = $model->find('username', $_SESSION['username']);
	$input_password = sha1($validator->getData('old_password') . $model->token);
	$new_password = sha1($validator->getData('input_password') . $model->token);
	if ($input_password != $model->password) {
		$validator->setError('old_password', 'パスワードが間違えました。');
	}

	if ($model->password == $new_password) {
		$validator->setError('input_password', '元のパスワードを同じにしないようにしてください。');	
	}

	if ($validator->validate()) {
		$model->token = uniqid();
		$model->password = $new_password;
		if ($model->update()) {
			$validator->setSuccessMessage('パスワードを変更しました。');
			$validator->clearData();
		}
	}
}