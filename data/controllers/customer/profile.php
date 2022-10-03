<?php
$model = new UserModel();
$validator = new Validator();
$model = $model->find('username', $_SESSION['username']);
?>
