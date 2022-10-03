<?php

$is_valid = false;
$model = null;
$reset_code = $_GET['code'];
$reset_data = json_decode(base64_decode($reset_code));

if ($reset_data) {
	$model = new UserModel();
	if ($model = $model->find('email', $reset_data->email)) {
		if ($model->is_activated) {
			header('Location: customer-mypage.php');
		}
		if (isset($_SESSION['username'])) {
			if ($_SESSION['username'] == $model->username)
				$is_valid = true;
		} else if ($model->token == $reset_data->token) {
			$is_valid = true;
		}
	}
}
if ($is_valid) {
	$model->is_activated = true;
	$model->update();
} else {
	echo 'Reset URL is invalid';
	exit;
}