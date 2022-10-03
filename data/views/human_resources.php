<link rel="stylesheet" type="text/css" href="./css/kyuzin.css">
<?php
include('data/controllers/search-function.php');

if(isset($_SESSION['username'])){
echo $this->layout('contentArea', array(
	'title' => '人材をお探しの方',
	'content' => $this->yield('content'),
	'breadcrumbs' => array(
		'TOP',
		'人材をお探しの方'
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
		'title' => '人材をお探しの方',
		'content' => $this->yield('content'),
		'breadcrumbs' => array(
			'TOP',
			'人材をお探しの方'
		)
	));
}
?>

<div id="contentsArea">

<div id="contentsLeft">
  <div class="contentsl_1">
    <div>
      <h3><span></span>　人材紹介サービスの特徴</h3>
    </div>
    <br />
    <div>弊社が企業様の求人依頼を受けて、それに該当する人材を企業様にご紹介いたします。</div>
    <br />
    <div>
      <h3><span></span>　人材紹介のメリット</h3>
    </div>
    <div>単に就職・転職希望者の希望によりマッチングを図るのではなく、希望者の経歴や適性などを総合的に判断します。<br />
      また、御社が採用する上で重要なポイントを明確に理解し、サイトなどでは伝えることのできない御社の魅力を直接伝えることが可能です。</div>
    <div>豊富な人材の中から御社のニーズに合う人材をご紹介いたします。</div>
    <div>公募による募集とは異なり、重要な御社の人事戦略が外部に漏れることはございません。</div>
    <div>通常の採用活動では発生する募集広告などの掲載費用や選考プロセスの管理コスト、人件費などの採用コストを削減できます。</div>
    <div></div>
    <br />
	
	<h3><span></span>　技術者一覧</h3>
	<div style="margin-bottom:20px"class = "check">
		<form name="hito" action="" method="get">
			<!-- 言語 -->
			<div class="skills">
				<th>言語</th>
				<?php $skills=array(
					"Java",
					"C/C++",
					"C#",
					"PHP",
					"HTML5/CSS",
					"JavaScript",
					"IOS/Android",
					"Ruby",
					"クラウド",
					"Python",
					"React.JS",
					"Ajax",
					"PL/SQL",
					"MySQL",
					"Oracle",
					"Unity",
					"Unreal_Engine4",
					"Photoshop/Illustrator",
					"ClipStudio"
					
				);?>
					<table>
						<?php for($work_count=1;$work_count<=12;$work_count++)
						{
							if($work_count%4==1)
							{
								echo '<tr>';
								echo '<td style="width:150px">';
								echo '<input type="checkbox" name="skill[',$work_count-1,']" value="',$skills[$work_count-1],'"> ';
								echo $skills[$work_count-1];
								echo '</td>';
							}
							elseif($work_count%4==0||$work_count==12)
							{
								echo '<td style="width:150px">';
								echo '<input type="checkbox" name="skill[',$work_count-1,']" value="',$skills[$work_count-1],'"> ';
								echo $skills[$work_count-1];
								echo '</td>';
								echo '</tr>';
							}
							else
							{
								echo '<td style="width:150px">';
								echo '<input type="checkbox" name="skill[',$work_count-1,']" value="',$skills[$work_count-1],'"> ';
								echo $skills[$work_count-1];
								echo '</td>';
							}
						}
						?>
					</table>
				</div>
				<hr>
				<div class="skills">
				<th>DB</th>
				<table>
					<?php for($work_count=13;$work_count<=15;$work_count++){
						if($work_count%4==1)
							{
								echo '<tr>';
								echo '<td style="width:150px">';
								echo '<input type="checkbox" name="skill[',$work_count-1,']" value="',$skills[$work_count-1],'"> ';
								echo $skills[$work_count-1];
								echo '</td>';
							}
							elseif($work_count%4==0||$work_count==12)
							{
								echo '<td style="width:150px">';
								echo '<input type="checkbox" name="skill[',$work_count-1,']" value="',$skills[$work_count-1],'"> ';
								echo $skills[$work_count-1];
								echo '</td>';
								echo '</tr>';
							}
							else
							{
								echo '<td style="width:150px">';
								echo '<input type="checkbox" name="skill[',$work_count-1,']" value="',$skills[$work_count-1],'"> ';
								echo $skills[$work_count-1];
								echo '</td>';
							}
						}
					?>
				</table>
				</div>
				<hr>
				<div class="skills">
				<th>ツール</th>
				<table>
					<?php for($work_count=16;$work_count<=19;$work_count++){
						if($work_count%4==0)
							{
								echo '<tr>';
								echo '<td style="width:150px">';
								echo '<input type="checkbox" name="skill[',$work_count-1,']" value="',$skills[$work_count-1],'"> ';
								echo $skills[$work_count-1];
								echo '</td>';
							}
							else
							{
								echo '<td style="width:150px">';
								echo '<input type="checkbox" name="skill[',$work_count-1,']" value="',$skills[$work_count-1],'"> ';
								echo $skills[$work_count-1];
								echo '</td>';
							}
						}
					?>
				</table>
				</div>
				<hr>
				<br>

				<table>
					<tr>
						<td>
			    	<input type="submit" value="この条件で検索" style="height:25px;width:100px;">
		      	</td>
		      	<?php 
					if(isset($_GET["skill"])){
						search_engineer_printer($_GET["skill"]); 
					}
					else{
						search_engineer_printer(array());
					}
				?>
	      	</tr>
      	</table>
		</form>
	</div>
	
	<?php
		
	class matterInfo{
		public $mTitle;
		public $mHref;
		public $mWorkDay;
		public $mWorkLoc = array();
		public $lanArray = array();
		public $occupationArray = array();
		
		//技術者詳細入力関数
		public function setInfo($t, $h, $oArray, $wl,$wd){
			$this->mTitle = $t; //技術者名
			$this->mHref = $h;	//詳細ページhref
			$this->occupationArray = $oArray; //職種(配列)
			$this->mWorkDay = $wd;	//稼働日数
			$this->mWorkLoc = $wl;	//希望勤務地(配列)
			$this->isDisplay = false;	//すでに表示されているか
		}
		
		//言語・技術入力関数(配列)
		public function setLaguage($array){
			$this->lanArray = $array;	//配列情報代入
		}
	}
	
	//human_resources.xml に技術者データを格納してある
	$xml = "human_resources.xml";
	$xmlData = simplexml_load_file($xml);
	
	$mi = array();
	$members = $xmlData->ListCount;
	for($i = 0; $i < $members; $i++){
		$mi[$i] = new matterInfo();
	}
	
	$memCount = 0;
	
	foreach($xmlData->engineer as $eng){
		$strArray = str_split($eng->Type);
		$engTypeArray = array();
		$engTypeCount = 0;
		
		for($i = 0; $i < count($strArray); $i++){			
			if($strArray[$i] == " "){
				$engTypeCount++;
			}
			else{
				$engTypeArray[$engTypeCount] .= $strArray[$i];
			}
		}
		
		$strArray = str_split($eng->Language);
		$lanTypeArray = array();
		$lanTypeCount = 0;
		
		for($i = 0; $i < count($strArray); $i++){
			if($strArray[$i] == " "){
				$lanTypeCount++;
			}
			else{
				$lanTypeArray[$lanTypeCount] .= $strArray[$i];
			}
		}
		
		$mi[$memCount]->setInfo($eng->EngineerName, $eng->EngineerPage, $engTypeArray, array($eng->Location), $eng->WarkDay);
		$mi[$memCount]->setLaguage($lanTypeArray);
		
		$memCount++;
	}
	
	function engCount($miArray, $ankenCount){
		$counter = 0;
		if(isset($_GET["skill"])){
			foreach($_GET["skill"] as $mat){
				for($i = 0; $i < $ankenCount; $i++){
					if($miArray[$i]->isDisplay == false){
				
						foreach($miArray[$i]->lanArray as $val){
							if($val == $mat){
								$miArray[$i]->isDisplay = true;
								$counter++;
							}
						}
					}
				}
			}
		}
		else{
			return $ankenCount;
		}
		return $counter;
	}
	
	function showMatter($mat, $miArray, $ankenCount){
		$engineerNameTitle = "技術者名";
		$workTypeTitle = "職種";
		$languageTitle = "言語・技術";
		$workDayTitle = "稼働日数";
		$workLocTitle = "希望勤務地";
		
		if(isset($_GET["skill"])){
		for($i = 0; $i < $ankenCount; $i++){
			if($miArray[$i]->isDisplay == false){
				
				foreach($miArray[$i]->lanArray as $val){
				
					if($val == $mat){
						$miArray[$i]->isDisplay = true;
						?>
						<div class="container">
							<div class="area-box2">
							  <div class="area-box2-inner">
							<div class="area-box2-head">
							</div>
							<div class="area-box2-body2">
					
							 <div class="mod-detail-body">
							 <div class="mod-detail-main">
							  <table class="mod-detail-table">
							  <tbody class="mod-detail-table-tbody">
							   <tr class="mod-detail-table-tr">
								<th class="mod-detail-table-th-top" nowrap><?php print $engineerNameTitle; ?></th>
								<td class="mod-detail-table-td-top">
								<?php print $miArray[$i]->mTitle; ?></td>
							   </tr>
							   
							   <tr class="mod-detail-table-tr">
								<th class="mod-detail-table-th" nowrap><?php print $workTypeTitle; ?></th>
								<td class="mod-detail-table-td">
							  <div class="float:left;">
								<?php 
									$cou = 0;
									foreach($miArray[$i]->occupationArray as $val){
										if($cou > 0)
											print ',';
										
										print $val;
										$cou++;
									}
								?>
							  </div>
								</td>
								</tr>
							   
							   <tr class="mod-detail-table-tr">
								<th class="mod-detail-table-th" nowrap><?php print $languageTitle; ?></th>
								<td class="mod-detail-table-td">
							  <div class="float:left;">
								<?php
									foreach($miArray[$i]->lanArray as $val){
										if($val != ""){
											?><li><?php print $val;
											?></li><?php
										}
									}
								?>
								
							  </div>
								</td>
							   </tr>
							   <tr class="mod-detail-table-tr">
								<th class="mod-detail-table-th" nowrap><?php print $workDayTitle; ?></th>
								<td class="mod-detail-table-td">
							  <div class="float:left;">
								<?php print $miArray[$i]->mWorkDay; ?>
							  </div>
								</td>
							   </tr>

							  <tr class="mod-detail-table-tr">
								<th class="mod-detail-table-th" nowrap><?php print $workLocTitle; ?></th>
								<td class="mod-detail-table-td">
							  <div class="float:left;">
								<?php
									$cou = 0;
									foreach($miArray[$i]->mWorkLoc as $val){
										if($cou > 0)
											print ',';
										
										print $val;
										$cou++;
									}
								?>
							  </div>
								</td>
							   </tr>
							   </tbody>
								 </table>
							 </div>
							 </div>
								   </div>
								   <div class="area-box2-foot">
									 <div class="mod-buttons">
										 <!--<a href="job.php" class="unit1-buttons">詳細を見る</a>-->
										<table>
												<tr>
												<td></td>
												<a href="<?php echo $miArray[$i]->mHref;?>" class="unit1-buttons" style="text-decoration: none; color:white;">詳細を見る</a>													 
												</tr>
										</table>
											 </div>
											 <br>
											 <br>
								   </div>

							 </div>
							</div>
							</div>
						<?php
					}
				}
			}
		}
		}
		else{
			for($i = 0; $i < $ankenCount; $i++){
				?>
				<div class="container">
				<div class="area-box2">
				  <div class="area-box2-inner">
					<div class="area-box2-head">
					</div>
					<div class="area-box2-body2">
				 <div class="mod-detail-body">
				 <div class="mod-detail-main">
				 <table class="mod-detail-table">
				 <tbody class="mod-detail-table-tbody">
					<tr class="mod-detail-table-tr">
					<th class="mod-detail-table-th-top" nowrap><?php print $engineerNameTitle;  ?></th>
					<td class="mod-detail-table-td-top">
						<?php print $miArray[$i]->mTitle; ?></td>
					</tr>
							   
					<tr class="mod-detail-table-tr">
					<th class="mod-detail-table-th" nowrap><?php print $workTypeTitle; ?></th>
					<td class="mod-detail-table-td">
						<div class="float:left;">
						<?php
							$cou = 0;
							foreach($miArray[$i]->occupationArray as $val){
								if($cou > 0)
									print ',';
										
								print $val;
								$cou++;
							}
						?>
						</div>
					</td>
					</tr>
							   
					<tr class="mod-detail-table-tr">
					<th class="mod-detail-table-th" nowrap><?php print $languageTitle; ?></th>
					<td class="mod-detail-table-td">
						<div class="float:left;">
						<?php
							foreach($miArray[$i]->lanArray as $val){
							if($val != ""){
									?><li><?php print $val;
									?></li><?php
								}
							}
						?>
								
						</div>
					</td>
 	                </tr>
					<tr class="mod-detail-table-tr">
					<th class="mod-detail-table-th" nowrap><?php print $workDayTitle; ?></th>
					<td class="mod-detail-table-td">
					<div class="float:left;">
					<?php print $miArray[$i]->mWorkDay; ?>
					</div>
					</td>
					</tr>

					<tr class="mod-detail-table-tr">
					<th class="mod-detail-table-th" nowrap><?php print $workLocTitle; ?></th>
					<td class="mod-detail-table-td">
					<div class="float:left;">
					<?php
						$cou = 0;
						foreach($miArray[$i]->mWorkLoc as $val){
							if($cou > 0)
								print ',';
							
							print $val;
							$cou++;
						}
					?>
					</div>
					</td>
					</tr>
				</tbody>
				</table>
				</div>
				</div>
				</div>
				<div class="area-box2-foot">
				<div class="mod-buttons">
				<table>
					<tr>
					<td></td>
					<a href="<?php echo $miArray[$i]->mHref;?>" class="unit1-buttons" style="text-decoration: none; color:white;">詳細を見る</a>	 
					</tr>
					</table>
				</div>
				<br>
				<br>
				</div>

				</div>
				</div>
				</div>
			<?php
		}
		}
	}
	
	if(isset($_GET["skill"])){
		$counter = 0;
		echo '<br><div class="matter_count">'.engCount($mi, $members).'件表示</div>';
	
		for($i = 0; $i < $members; $i++){
			$mi[$i]->isDisplay = false;
		}
		
		foreach($_GET["skill"] as $obj){
			showMatter($obj, $mi, $members);
		}
	}
	
	else{
		echo '<br><div class="matter_count">'.engCount($mi, $members).'件表示</div>';
		showMatter(null, $mi, $members);
	}
	?>

</div>
</div>
