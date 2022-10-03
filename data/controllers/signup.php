
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
	$model->input($_POST);
	$model->created_at = time();
	$model->token = uniqid();
	$model->password = sha1($model->input_password . $model->token);

	$validator->input($_POST);
	$validator->setRule($model->rules());

	if ($validator->validate() && $model->save()) {
		header('Location: mypage.php');
	}
}