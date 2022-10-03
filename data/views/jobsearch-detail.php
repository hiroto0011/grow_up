<!--案件検索結果表示-->

<link rel="stylesheet" type="text/css" href="./css/kyuzin.css">

<?php
if(isset($_SESSION['username'])){
echo $this->layout('contentArea', array(
	'title' => '詳細条件で検索',
	'content' => $this->yield('content'),
	'breadcrumbs' => array(
		'TOP',
		'詳細条件で検索'
	),
	'sidebar_menu' => array(
		'検索履歴' => 'customer-search-history.php',
		'保存した検索条件'=>'customer-conditions.php',
		'保存したお仕事'=>'customer-keep.php',
		'ファイルアップロード'=>'customer-file.php'
	)
));
}
else {
	echo $this->layout('contentArea', array(
		'title' => '詳細条件で検索',
		'content' => $this->yield('content'),
		'breadcrumbs' => array(
			'TOP',
			'詳細条件で検索'
		)
	));
}
?>

<div id="contentsArea">

<div id="contentsLeft">

<div class="contentsl_1">

<form action="work.php"method="get" name="conditions">

	<div id="about2">
		<h3><span></span>　エリア</h3>
	</div>
	<br>
	<div class = "todouhuken">
<p>
		<select name="prefectures" style="height:25px;width:200px;margin-left:2px;">
			<option value ="null">設定しない</option>
			<option value ="東京">東京</option>
			<option value ="神奈川">神奈川</option>
			<option value ="埼玉">埼玉</option>
			<option value ="千葉">千葉</option>
			<option value ="茨城">茨城</option>
			<option value ="栃木">栃木</option>
			<option value ="群馬">群馬</option>
			<option value ="その他">その他</option>
		</select>
	</p>
</div>

<br>

	<div id="about2">
		<h3><span></span>　職種</h3>
	</div>
	<br>
			<!-- 職種 -->
			<div class="syokusyu">
				<?php $occupations=array(
					"事務",
					"営業",
					"プログラマー",
					"システムエンジニア",
					"イラストレーター",
					"Webデザイナー",
					"DTPデザイナー",
					"漫画家",
					"シナリオライター",
					"その他"
				);?>
					<table>
						<?php for($work_count=1;$work_count<=10;$work_count++)
						{
							if($work_count%4==1)
							{
								echo '<tr>';
								echo '<td style="width:150px">';
								echo '<input type="checkbox" name="occupation[]" value="',$occupations[$work_count-1],'"> ';
								echo $occupations[$work_count-1];
								echo '</td>';
							}
							elseif($work_count%4==0||$work_count==10)
							{
								echo '<td style="width:150px">';
								echo '<input type="checkbox" name="occupation[]" value="',$occupations[$work_count-1],'"> ';
								echo $occupations[$work_count-1];
								echo '</td>';
								echo '</tr>';
							}
							else
							{
								echo '<td style="width:150px">';
								echo '<input type="checkbox" name="occupation[]" value="',$occupations[$work_count-1],'"> ';
								echo $occupations[$work_count-1];
								echo '</td>';
							}
						}?>
					</table>
				</div>

<br>

				<div id="about2">
					<h3><span></span>　雇用形態</h3>
				</div>
<br>
				<div class = "koyou">
					<?php $types=array(
						"派遣社員",
						"正社員",
						"パート・アルバイト",
						"業務委託",
						"在宅業務"
					);?>
						<table>
							<?php for($type_count=1;$type_count<=5;$type_count++)
							{
								if($type_count%4==1)
								{
									echo '<tr>';
									echo '<td style="width:150px">';
									echo '<input type="checkbox" name="type[]" value="',$types[$type_count-1],'"> ';
									echo $types[$type_count-1];
									echo '</td>';
								}
								elseif($work_count%4==0||$work_count==10)
								{
									echo '<td style="width:150px">';
									echo '<input type="checkbox" name="type[]" value="',$types[$type_count-1],'"> ';
									echo $types[$type_count-1];
									echo '</td>';
									echo '</tr>';
								}
								else
								{
									echo '<td style="width:150px">';
									echo '<input type="checkbox" name="type[]" value="',$types[$type_count-1],'"> ';
									echo $types[$type_count-1];
									echo '</td>';
								}
							}?>
						</table>
				</div>
<!--
<br>

				<div id="about2">
					<h3><span></span>　給与</h3>
				</div>
				<br>
				<div class="money">
					<table>
						<tr>
							<td>月給 : &nbsp</td>
							<td>
						<select name="money_min">
							<option value ="null">設定しない</option>
							<option value ="10">10万円</option>
							<option value ="15">15万円</option>
							<option value ="20">20万円</option>
							<option value ="25">25万円</option>
							<option value ="30">30万円</option>
							<option value ="35">35万円</option>
							<option value ="40">40万円</option>
							<option value ="45">45万円</option>
							<option value ="50">50万円</option>
							<option value ="55">55万円</option>
							<option value ="60">60万円</option>
						</select>
					    </td>

							<td>&nbsp ~ &nbsp</td>

							<td>
					  <select name="money_max">
							<option value ="null">設定しない</option>
							<option value ="10">10万円</option>
							<option value ="15">15万円</option>
							<option value ="20">20万円</option>
							<option value ="25">25万円</option>
							<option value ="30">30万円</option>
							<option value ="35">35万円</option>
							<option value ="40">40万円</option>
							<option value ="45">45万円</option>
							<option value ="50">50万円</option>
							<option value ="55">55万円</option>
							<option value ="60">60万円</option>
						</select>
				     	</td>
						</tr>
					</table>
				</div>
-->
<br>

						<div id="about2">
							<h3><span></span>　更新日</h3>
						</div>
						<br>
						<div class="update">
			        <select name="update" style="height:25px;width:200px;margin-left:2px;">
								<option value="null">設定しない</option>
								<option value="1">24時間以内</option>
								<option value="2">2日以内</option>
								<option value="3">3日以内</option>
								<option value="5">5日以内</option>
								<option value="7">一週間以内</option>
								<option value="14">二週間以内</option>
								<option value="30">一ヶ月以内</option>
							</select>
						</div>

<br>

           <div id="about2">
						 <h3><span></span>　フリーワード</h3>
					 </div>
					 <br>
					 <div class="keyword">
						 <input type="text" name="keyword" style="height:25px;width:198px;padding-left:2px;color:black;margin-left:2px;"
						 placeholder='フリーワードを入力'>
					 </div>
					 <br>
					 <hr>
					 <br>
				<input type="hidden" name="save" value="0">
        <input type="submit" value="この条件で検索" style="height:35px;width:200px;
				position: relative;left:34.5%;top:13px;cursor:pointer;">
				</form>
				<div style="position:relative;bottom:7px;">
				<button onclick="save();" style="height:25px;width:100px;float:right;position:relative;bottom:20px;right:20px;cursor:pointer;">
					この条件を保存</button>
				<a href="customer-conditions.php" style="float:right;margin-top:10px;position:relative;left:100px;">保存した全ての条件を見る</a>
			  </div>
<script>
function save(){
	var check =document.conditions;
	var check2 =document.is_save;
	window.open('', 'POP');
	check.action='work.php';
	check.target='POP';
	check.save.value=1;
	check.submit();
}
</script>

<br>
</div>
</div>
