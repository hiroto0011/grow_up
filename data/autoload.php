<?php

session_start();
date_default_timezone_set('Asia/Tokyo');

$config = include('config' . DIRECTORY_SEPARATOR . 'db.php');

function autoload($className){
	if (!preg_match('/^(.+)Model$/', $className, $match)) {
		$path = 'lib/' . $className;
	} else {
		$path = 'models' . DIRECTORY_SEPARATOR . $className;
	}
	include($path . '.php');
}
spl_autoload_register('autoload');

PdoRepo::setConfig($config);
