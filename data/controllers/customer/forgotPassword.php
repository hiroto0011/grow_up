<?php

if (isset($_SESSION['username'])) {
	header('Location: customer-mypage.php');
}

$validator = new Validator();

if ($_POST) {
	$validator->input($_POST);
	$validator->setRule(array(
		'required' => 'email_or_username'
	));

	$model = new UserModel();

	if ($validator->validate()) {
		if (preg_match('/@/', $validator->getData('email_or_username'))) {
			if (!($model = $model->find('email', $validator->getData('email_or_username')))) {
				$validator->setError('email_or_username', 'メールアドレスが登録されていません');
			}
		} else {
			$model = new UserModel();
			if (!($model = $model->find('username', $validator->getData('email_or_username')))) {
				$validator->setError('email_or_username', 'ログイン名が登録されていません');
			}
		}
	}
	if ($validator->isValid()) {
		// Re-new token
		$new_token = uniqid();
		$reset_model = new UserResetPasswordModel();
		$reset_model = $reset_model->find('user_id', $model->id);
		if ($reset_model) {
			$reset_model->token = $new_token;
			$reset_model->created_at = time();
			$reset_model->update();
		} else {
			$reset_model = new UserResetPasswordModel();
			$reset_model->user_id = $model->id;
			$reset_model->token = $new_token;
			$reset_model->created_at = time();
			$reset_model->save();
		}
		// Send the email
		$sender = 'info-grow@growup59.jp';
		$subject = 'パスワードのリセット';
		$reset_data = json_encode(array(
			'email' => $model->email,
			'token' => $new_token
		));
		$recipient = $model->email;
		$token = base64_encode($reset_data);
		$url = 'http://growup59.com/customer-reset-password.php?reset=' . $token;
		$body = $this->view('customer/_forgot_password', array('url' => $url));
		$email = new EmailSender();
		$email->setSender($sender);
		$email->setRecipient($recipient);
		$email->setSubject($subject);
		$email->setBody($body);
		$email->setIsHtml(true);
		if ($email->send()) {
			$validator->setSuccessMessage('パスワードリセットURLをメールにお送りしました。');
		}
	}
}
