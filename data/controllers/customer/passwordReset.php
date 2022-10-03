<?php

$is_valid = false;
$reset_model = null;
$model = null;
$reset_code = $_GET['reset'];
$reset_data = json_decode(base64_decode($reset_code));
if ($reset_data) {
	$model = new UserModel();
	$model = $model->find('id', $reset_data->user_id);

	$reset_model = new UserResetPasswordModel();
	if ($reset_model = $reset_model->find('user_id', $model->id)) {
		if ($reset_model->token == $reset_data->token) {
			$is_valid = true;
		}
	}
}
if ($is_valid) {
	$model->token = $reset_model->token;
	$model->password = $reset_model->password;
	$model->updated_at = time();
	$model->update();
	$reset_model->delete();
} else {
	echo 'Reset URL is invalid';
	exit;
}