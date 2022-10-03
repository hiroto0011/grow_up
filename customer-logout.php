
<?php

header("Content-Type: text/html; charset=UTF-8");

session_start();
unset($_SESSION['username']);
header('Location: login-input.php');