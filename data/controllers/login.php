
<?php

header("Content-Type: text/html; charset=UTF-8");

use CustomLib\Validator;
use App\Models\User;

if (isset($_SESSION['username'])) {
	header('Location: mypage.php');
}

$validator = new Validator();
$model = new User();

if ($_POST) {
	$validator->input($_POST);
	$validator->setRule(array(
		'required' => 'username, input_password',
		'none' => array('username', $model)
	));

	if ($validator->validate()) {
		$model->input($_POST);
		$model = $model->find('username', $validator->data['username']);
		if ($model) {
			if ($model->password !== sha1($model->input_password . $model->token)) {
				$validator->setError('input_password', 'パスワードが間違えました。');
			} else {
				$_SESSION['username'] = $model->username;	
				header('Location: mypage.php');
			}
		}
	}
}