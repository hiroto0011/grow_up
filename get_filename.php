
<h1>問い合わせファイル一覧</h1>

<?php

header("Content-Type: text/html; charset=UTF-8");

	// ディレクトリのパス
	$dir = "./temp" ;
	$output = "";
	$final_output = "";
	
	if( is_dir( $dir ) && $handle = opendir( $dir ) ) {
		
		while( ($file = readdir($handle)) !== false ) {
			
			if($file !== "." && $file !== ".."){
			
			$output .= "<li><a href='download_file.php?id=$file'>".$file."</a></li>"."\n"; 
			
			}
			//ファイルタイプの判定はエラー出るため後回しにします。
			//if( filetype( $path = $dir . $file ) == "file" ) {
			 //echo $file;
			//}
		}
	}
	
	$final_output .= "<ul>".$output."</li>";
	
	echo $final_output;
?>