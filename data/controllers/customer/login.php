<?php

if (isset($_SESSION['username'])) {
	header('Location: customer-mypage.php');
}

$validator = new Validator();
$model = new UserModel();

if ($_POST) {
	$validator->input($_POST);
	$validator->setRule(array(
		'required' => 'username, input_password',
		'none' => array('username', $model)
	));

	if ($validator->validate()) {
		$model->input($_POST);
		$model = $model->find('username', $validator->getData('username'));
		if ($model) {
			if ($model->password !== sha1($model->input_password . $model->token)) {
				$validator->setError('input_password', 'パスワードが間違えました。');
			} else {
				$_SESSION['username'] = $model->username;	
				header('Location: customer-mypage.php');
			}
		}
	}
}