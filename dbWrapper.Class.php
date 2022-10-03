

<?php

header("Content-Type: text/html; charset=UTF-8");

class dbWrapper{
	
		function connect(){
		
		try {
			$db = new PDO(DNS, DBUSER, DBPASS);
		}catch (PDOException $e) {
			echo 'Connection failed: ' . $e->getMessage();
		}
			return $db;
		}
	
}
?>