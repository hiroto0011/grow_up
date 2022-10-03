<?php

if (!isset($_SESSION['username'])) {
	header('Location: login-input.php');
}

$model = new UserModel();
$model = $model->find('username', $_SESSION['username']);

// Send the activation email
$sender = 'growup0908@gmail.com';
$subject = 'メールのアクティベーション';
$reset_data = json_encode(array(
	'email' => $model->email,
	'token' => $model->token
));
//$model->email = 'tester@localhost';
$recipient = $model->email;
$token = base64_encode($reset_data);
$url = 'http://localhost/growup/customer-activation.php?code=' . $token;
$body = $this->view('customer/_email_activation', array('url' => $url));
$email = new EmailSender();
$email->setSender($sender);
$email->setRecipient($recipient);
$email->setSubject($subject);
$email->setBody($body);
$email->setIsHtml(true);

if ($email->send()) {
	header('Location: customer-mypage.php');
}
