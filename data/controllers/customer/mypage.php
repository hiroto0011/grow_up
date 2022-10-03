<?php

if (!isset($_SESSION['username'])) {
	header('Location: login-input.php');
}

$validator = new Validator();

$model = new UserModel();
$model = $model->find('username', $_SESSION['username']);
if (!$model->is_activated) {
	$validator->setError('is_activated', 'メールアドレスがまだご確認なさっていません。登録したメールでメールアクティベーションの件をご覧ください。<a href="customer-resend-activation.php">メールを再送信します。</a>');
}