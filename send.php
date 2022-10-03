
<?php

header("Content-Type: text/html; charset=UTF-8");

require_once("conf.php");
require_once('dbWrapper.Class.php');

//ランダム文字列生成用
function gen_id($length){
	$str = array_merge(range('a', 'z'), range('0', '9'), range('A', 'Z'));
    $r_str = null;
    for ($i = 0; $i < $length; $i++) {
        $r_str .= $str[rand(0, count($str) - 1)];
    }
    return $r_str;
}


//変数準備
$input = $_POST;
$body = "";

//添付ファイル作成
//mb_convert_variables('SJIS', 'UTF-8', $input['姓']);
//mb_convert_variables('SJIS', 'UTF-8', $input['名']);
$csvFileName = 'temp/' .date('Y-m-d-h-i-s-') . rand() . '.csv';
$res = fopen($csvFileName, 'w');
		if ($res === FALSE) {
			throw new Exception('ファイルの書き込みに失敗しました。');

		}		
foreach($input as $key => $value) {
            
			if($key == "confirm"){
		continue;
	}
			
			if($key == "電話番号"){
			
			$value = "'".$value; 
			
}
			
			$datainfo = array($key,$value);
			
			// 文字コード変換。エクセルで開けるようにする
			mb_convert_variables('SJIS', 'UTF-8', $datainfo);

			// ファイルに書き出しをする
			fputcsv($res, $datainfo);
		}

		// ハンドル閉じる
		fclose($res);

		
//データーベースへの保存

$dbWrapper = new dbWrapper();
$db = $dbWrapper->connect();

$sql = "INSERT INTO csv_list(filename,submit_time,name,download_id) VALUES(?,NOW(),?,?)";

$download_id = gen_id(4);
$download_id .= date('h-i-s');

$tmp = explode("/",$csvFileName);

$param = array(
		$tmp[1],
		$input["姓"]." ".$input["名"],
		$download_id
);

$stmt = $db->prepare($sql);
$stmt->execute($param);


		/*
		// ダウンロード開始
		header('Content-Type: application/octet-stream');

		// ここで渡されるファイルがダウンロード時のファイル名になる
		header('Content-Disposition: attachment; filename=sampaleCsv.csv'); 
		header('Content-Transfer-Encoding: binary');
		header('Content-Length: ' . filesize($csvFileName));
		readfile($csvFileName);		
	    exit();		
			*/

//メール本文
foreach($input as $key => $value){
	
	if($key == "confirm"){
		continue;
	}
	
	$body .= $key." :".$value."\n";
	
}			


$body .= "csvファイル名 :".$tmp[1];

//送信準備			
mb_language("Japanese");
mb_internal_encoding("UTF-8");
//送り先、タイトル、送り主
$to      = $input["email"];
//$to      = "growup0908@gmail.com";
$subject = 'お問い合わせ';
$header = 'From: cst.enmt@gmail.com' . "\r\n";

//送信
if(mb_send_mail($to, $subject, $body, $header)){
	
	echo '<h1>問い合わせが完了しました</h1><a href="top.html">top</a>';
	
}else{
	
	echo "<h1>メールがうまく送信されませんでした</h1>";
	
}


?>




