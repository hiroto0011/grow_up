<?php

$is_valid = false;
$reset_model = null;
$model = null;
$reset_code = $_GET['reset'];
$reset_data = json_decode(base64_decode($reset_code));

if ($reset_data) {
	$model = new UserModel();
	$model = $model->find('email', $reset_data->email);

	$reset_model = new UserResetPasswordModel();
	if ($reset_model = $reset_model->find('user_id', $model->id)) {
		if ($reset_model->token == $reset_data->token) {
			$is_valid = true;
		}
	}
}
if (!$is_valid) {
	echo 'Reset URL is invalid';
	exit;
}

$validator = new Validator();
if ($_POST) {
	$validator->input($_POST);
	$validator->setRule(array(
		'required' => 'input_password, input_password2',
	));
	if ($validator->getData('input_password') != $validator->getData('input_password2')) {
		$validator->setError('input_password2', '新しいパスワードは同じではありません');
	}
	if ($validator->validate()) {
		$reset_model->token = uniqid();
		$reset_model->password = sha1($validator->getData('input_password') . $reset_model->token);
		$reset_model->update();
		$token_data = json_encode(array(
			'user_id' => $model->id,
			'token' => $reset_model->token,
			'password' => $reset_model->password,
		));
		$token = base64_encode($token_data);
		header('Location: customer-password-reset.php?reset=' . $token);
	}
}