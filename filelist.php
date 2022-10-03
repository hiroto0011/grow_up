
<?php

header("Content-Type: text/html; charset=UTF-8");

require_once('conf.php');
require_once('dbWrapper.Class.php');

$dbWrapper = new dbWrapper();

$db = $dbWrapper->connect();

$sql = "SELECT * FROM csv_list";
$stmt = $db->prepare($sql);
$stmt->execute();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>グローアップ株式会社</title>
	<meta name="description" content="グローアップ株式会社は常に向上心と目的意識を持って働ける場を提供する 個の能力の可能性を見いだし、提示することによって人生の選択肢を増やす 性別、国籍、年齢に関係なく働ける場を提供し、人材に流動性を持たせる事を目的としております。" />
	<meta name="keywords" content="グローアップ株式会社" />
    <link href="css/management.css" type="text/css" rel="stylesheet" />
	<link href="css/common.css" type="text/css" rel="stylesheet" />
    <script src="js/scripts.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
		
		$(function(){
		$('#download_file').click(function (){
		
		var value = $("input[name='target']:checked").val();
		//ラジオボタンのいづれかが選択されていれば、その値をつけてサブミットする
		if( value != ""){
			
			window.location.href ='download_file.php?download_id=' + value;
			return;
		
		}else{
		
		alert("ダウンロードするファイルを選択してください");
		return;
		
		}
		
		});
		});
		
</script>
<!-- BootstrapのCSS読み込み -->
    <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- BootstrapのJS読み込み -->
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
<div class="little_space"></div>
<div class="title_box">
<h1>CSVファイル一覧</h1>
</div>
<div class="little_space">
</div>
<div class="container">
<table class="table table-striped table-bordered">
<tr>
<th width="60px"></th>
<th width="150px">名前</th>
<th>提出時間</th>
</tr>

<?php
$output = "";
while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
$output = "<tr>\n<th scope='row'><input type='radio' name='target' class='ccdx01-38-16' value='$result[download_id]' style='width:50px;'></th>\n";
$output .= "<td>$result[name]</td>\n";
$output .= "<td>$result[submit_time]</td></tr>\n";
print $output;
}
?>

</table>
<div class="title_box">
<div class="little_space"></div>
<button id="download_file" style="width:150px; height:40px">ダウンロード</button>
</div>
</body>