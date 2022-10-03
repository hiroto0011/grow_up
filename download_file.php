
<?php

header("Content-Type: text/html; charset=UTF-8");

require_once("conf.php");
require_once('dbWrapper.Class.php');
		
		$id = $_GET["download_id"];
		$key = array();
		
		//データベースからファイル名の取り出し
		$dbWrapper = new dbWrapper();
		$db = $dbWrapper->connect();
		
		$sql = "SELECT filename FROM csv_list WHERE download_id = ?";
		
		$param = array(
		$id
		);
		
		$stmt = $db->prepare($sql);
		$stmt->execute($param);
		
		$key = $stmt->fetch(PDO::FETCH_ASSOC);
		
	
		$csvFileName = "temp/".$key["filename"];
		
		header('Content-Type: application/octet-stream');
		// ここで渡されるファイルがダウンロード時のファイル名になる
		header("Content-Disposition: attachment; filename=$key[filename]"); 
		header('Content-Transfer-Encoding: binary');
		header('Content-Length: ' . filesize($csvFileName));
		readfile($csvFileName);		
	    exit();




?>