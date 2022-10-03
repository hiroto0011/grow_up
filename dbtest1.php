
<?php

header("Content-Type: text/html; charset=UTF-8");

require_once('conf.php');
require_once('dbWrapper.Class.php');

$dbWrapper = new dbWrapper();

$db = $dbWrapper->connect();


$sql = "INSERT INTO csv_list(filename,submit_time,name,download_id) VALUES(?,NOW(),?,?)";
$param = array(

		"test.csv",
		"山田太郎",
		"RANDOM"

);

$stmt = $db->prepare($sql);

$stmt->execute($param);


$sql = "SELECT * FROM csv_list";
$stmt = $db->prepare($sql);
$stmt->execute();

$row = $stmt->fetch();
print_r($row);
?>