<?php

if (isset($_SESSION['username'])) {
	header('Location: customer-mypage.php');
}

$validator = new Validator();
$model = new UserModel();

if ($_POST) {
	$model->input($_POST);
	$model->created_at = DATE("Ymdhis");
	$model->token = uniqid();
	$model->password = sha1($model->input_password . $model->token);

	$validator->input($_POST);
	$validator->setRule($model->rules());

	if ($validator->validate() && $model->save()) {
		// Send the activation email
		$sender = 'growup0908@gmail.com';
		$subject = 'メールのアクティベーション';
		$reset_data = json_encode(array(
			'email' => $model->email,
			'token' => $model->token
		));
		//$model->email = 'roomescape@naver.com';
		$recipient = $model->email;
		$token = base64_encode($reset_data);
		$url = 'http://localhost/growup/customer-activation.php?code=' . $token;
		$body = $this->view('customer/_email_activation', array('url' => $url));
		$email = new EmailSender();
		$email->setSender($sender);
		$email->setRecipient($recipient);
		$email->setSubject($subject);
		$email->setBody($body);
		$email->setIsHtml(false);
		if ($email->send()) {
			$validator->setSuccessMessage('パスワードリセットURLをメールにお送りしました。');
		}

		header('Location: customer-mypage.php');
	}
}
