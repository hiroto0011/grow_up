<!--案件検索結果表示-->

<link rel="stylesheet" type="text/css" href="./css/kyuzin.css">
<?php
if(isset($_SESSION['username'])){
echo $this->layout('contentArea', array(
	'title' => 'お仕事をお探しの方',
	'content' => $this->yield('content'),
	'breadcrumbs' => array(
		'TOP',
		'お仕事をお探しの方'
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
		'title' => 'お仕事をお探しの方',
		'content' => $this->yield('content'),
		'breadcrumbs' => array(
			'TOP',
			'お仕事をお探しの方'
		)
	));
}
?>

<div id="contentsArea">

<div id="contentsLeft">

<div class="contentsl_1">
	<div class="about">
		<h3><span></span>　お仕事紹介の流れ</h3>
	</div>
	<p>
		①お問い合わせのあったお仕事希望の方から条件をお聞きします。<br>
		&nbsp&nbsp&nbsp勤務地・時給・労働時間などのご希望があればお伝えください。<br>
		②弊社の様々な案件の中からご希望者のスキルや条件からマッチしたものをご紹介致します。<br>
		③ご希望者の経歴書を提示して頂きます。<br>
		④ご希望の職場の担当者が採用を検討されましたら、面接となります。<br>
		&nbsp&nbsp&nbsp案件により面接が複数回の場合もあります。<br>
		⑤お互いの条件が合いましたらお仕事開始となります。<br>
		&nbsp&nbsp&nbspまた、お問い合わせのあった方には職務経歴書制作の添削や面接の練習なども対応させて頂きます。
	</p>

	<div class="about">
		<h3><span></span>　派遣を選ぶ理由</h3>
	</div>
	<p>
		人材派遣は、人材派遣会社を通じて様々な派遣先を紹介するお仕事です。派遣先が求める、時間、専門のスキルや技術、
		資格、人手不足などによって派遣する人材が選ばれます。様々な職種がありIT、エンジニア、クリエイティブ系の専門職
		や販売やサービス業、、建設、営業、物流、製造、教育など派遣先があります。基本的には、人材派遣では、派遣先では
		なく、人材派遣会社と雇用契約を結ぶことになります。
	</p>
	

	<div class="about">
		<h3><span></span>　お仕事検索</h3>
	</div>
	<div style="margin-bottom:20px"class = "check">
		<form name="work" action="" method="get">
			<!-- 都道府県 -->
			<div class = "todouhuken">
				<th>エリア</th>
				<td>
					<select name ="prefectures" >
						<option value ="null">都道府県を選ぶ</option>
						<option value ="東京">東京</option>
						<option value ="神奈川">神奈川</option>
						<option value ="埼玉">埼玉</option>
						<option value ="千葉">千葉</option>
						<option value ="茨城">茨城</option>
						<option value ="栃木">栃木</option>
						<option value ="群馬">群馬</option>
						<option value ="その他">その他</option>
					</select>
				</td>
			</div>

			<!-- 職種 -->
			<div class="syokusyu">
				<th>職種</th>
				<?php $occupations=array(
					"事務",
					"営業",
					"プログラマー",
					"システムエンジニア",
					"インフラエンジニア",
					"イラストレーター",
					"Webデザイナー",
					"DTPデザイナー",
					"漫画家",
					"プランナー",
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
								echo '<input type="checkbox" name="occupation[',$work_count-1,']" value="',$occupations[$work_count-1],'"> ';
								echo $occupations[$work_count-1];
								echo '</td>';
							}
							elseif($work_count%4==0||$work_count==10)
							{
								echo '<td style="width:150px">';
								echo '<input type="checkbox" name="occupation[',$work_count-1,']" value="',$occupations[$work_count-1],'"> ';
								echo $occupations[$work_count-1];
								echo '</td>';
								echo '</tr>';
							}
							else
							{
								echo '<td style="width:150px">';
								echo '<input type="checkbox" name="occupation[',$work_count-1,']" value="',$occupations[$work_count-1],'"> ';
								echo $occupations[$work_count-1];
								echo '</td>';
							}
						}?>
					</table>
				</div>
				<hr>
				<br>

				<table>
					<tr>
						<td>
			    	<input type="submit" value="この条件で検索" style="height:25px;width:100px;">
		      	</td>
		      	<td style="width:400px"></td>
		      	<td>
			    	<p><a href="work-search-detail.php">もっと詳細な条件で検索</a></p>
		      	</td>
	      	</tr>
      	</table>
		</form>


</div>
<!--以下案件表示 -->
<!--SQL文を作る関数の定義-->

	<?php
	$search_conditions=array(
		'prefectures'=>$prefectures,
		'occupation'=>$occupation,
		'type'=>$type,
		//'money_min'=>$money_min,
		//'money_max'=>$money_max,
		'update'=>$update,
		'keyword'=>$keyword
	);
	
	class matterInfo{
		public $mTitle;
		public $mHref;
		public $firstTag;
		public $secondTag;
		public $ThirdTag;
		public $content;
		public $salary;
		public $weekHour;
		public $workHour;
		public $placeWork;
		
		public function setInfo($t, $h, $f, $s, $tt,$content,$salary,$weekHour,$workHour,$placeWork, $fLoc, $sLoc, $tLoc){
			$this->mTitle = $t; //案件タイトル
			$this->mHref = $h;	//詳細ページhref
			$this->firstTag = $f;	//検索用タグ
			$this->secondTag = $s;	//検索用タグ
			$this->thirdTag = $tt;	//検索用タグ
			$this->mContent = $content;	//業務内容
			$this->mSalary = $salary;	//給与
			$this->mWeekHour = $weekHour;	//契約期間
			$this->mWorkHour = $workHour;	//就業時間
			$this->mPlaceWork = $placeWork;	//勤務地
			$this->mFirstLoc = $fLoc;	//勤務地タグ
			$this->mSecondLoc = $sLoc;	//勤務地タグ
			$this->mThirdLoc = $tLoc;	//勤務地タグ
			$this->isDisplay = false;	//すでに表示されているか
		}
	}

	$mi = array();
	$anken =12; //追加する
	for($i = 0; $i < $anken; $i++){
		$mi[$i] = new matterInfo();
	}

	$mi[0]->setInfo("サーバー運用の案件", "anken-detail-1.php", "プログラマー", "システムエンジニア", "インフラエンジニア","Linuxによるサーバーの運用、監視","スキル見合い","24H365日のシフト制","2勤務交代　9時30分～21時30分　21時～34時","八王子方面", "東京", "", "");
	$mi[1]->setInfo("ゲーム運用のアートディレクターの案件", "anken-detail-4.php", "イラストレーター", "Webデザイナー", "","デザイン事務所との折衝","スキル見合い","即日-3ヶ月","10:00～19:00","東京２３区", "東京", "", "");
	$mi[2]->setInfo("3Dのアートディレクターの案件", "anken-detail-5.php", "イラストレーター", "DTPデザイナー", "","Mayaを使用した3Dディレクション","スキル見合い","即日-3ヶ月","10:00～19:00","東京２３区", "東京", "", "");
	$mi[3]->setInfo("モーションデザイナーの案件", "anken-detail-6.php", "イラストレーター", "プログラマー", "","Mayaを使用した3Dオペレーション","スキル見合い","即日-3ヶ月","10:00～19:00","東京２３区", "東京", "", "");
	$mi[4]->setInfo("背景デザイナーの案件", "anken-detail-7.php", "イラストレーター", "DTPデザイナー", "","Mayaを使用した3Dオペレーション","スキル見合い","即日-3ヶ月","10:00～19:00","東京２３区", "東京", "", "");
	$mi[5]->setInfo("スマートフォンゲームの開発UIデザイナーの案件", "anken-detail-8.php", "イラストレーター", "プログラマー", "","スマートフォンゲームのUIデザイン・実装","スキル見合い","即日-3ヶ月(半年に延長の場合あり)","10:00～19:00","港区周辺", "東京", "", "");
	$mi[6]->setInfo("スマートフォンゲームの開発フロントエンドエンジニアの案件", "anken-detail-9.php", "プログラマー", "システムエンジニア", "","スマートフォンゲーム開発・運用","スキル見合い","即日-3ヶ月(半年に延長の場合あり)","10:00～19:00","港区周辺", "東京", "", "");
	$mi[7]->setInfo("スマートフォンゲームの開発サーバーサイドエンジニアの案件", "anken-detail-10.php", "プログラマー", "システムエンジニア", "","スマートフォンゲーム開発・運用、プログラム設計・開発","スキル見合い","即日-3ヶ月(半年に延長の場合あり)","10:00～19:00","港区周辺", "東京", "", "");
	$mi[8]->setInfo("スマートフォンゲームの開発スクリプターの案件", "anken-detail-11.php", "シナリオライター", "", "","スマートフォンゲームにおけるノベルパートの担当","スキル見合い","即日-3ヶ月(半年に延長の場合あり)","10:00～19:00","港区周辺", "東京", "", "");
	$mi[9]->setInfo("スマートフォンゲームの開発イラストレーターの案件", "anken-detail-12.php", "イラストレーター", "", "","スマートフォンゲームにおけるイラスト制作","スキル見合い","即日-3ヶ月(半年に延長の場合あり)","10:00～19:00","港区周辺", "東京", "", "");
	$mi[10]->setInfo("インフラ・ネットワークエンジニア案件", "anken-detail-13.php", "プログラマー", "インフラエンジニア", "","ネットワーク関連の設定作業、トラブルシューティング等","スキル見合い","12月より長期","09：00～18：00","千葉県千葉市", "千葉", "", "");
	$mi[11]->setInfo("ソーシャルゲームのプランナーの案件", "anken-detail-2.php", "プランナー", "", "","パラメーター設定等のデータワーク、データ周りの細かい指示","スキル見合い","11月～2月(その後続いて運営をお願いする可能性あり)","10:00～19:00","東京23区", "東京", "", "");
	//下に貼り付け
	search_conditions_printer($search_conditions);
	
	$counter = 0;
	
	if(isset($_GET["occupation"])){
	foreach($search_conditions['occupation'] as $obj)
	{
		switch($obj){
			case "事務":
				for($i = 0; $i < $anken; $i++){
					if($mi[$i]->isDisplay == false){
						if($mi[$i]->firstTag == "事務" || $mi[$i]->secondTag == "事務" || $mi[$i]->thirdTag == "事務" ){
							if(($search_conditions['prefectures'] == $mi[$i]->mFirstLoc || $search_conditions['prefectures'] == $mi[$i]->mSecondLoc || $search_conditions['prefectures'] == $mi[$i]->mThirdLoc) || $search_conditions['prefectures'] == "null"){
								$mi[$i]->isDisplay = true;
								$counter++;
							}
						}
					}
				}
			break;
			case "プランナー":
				for($i = 0; $i < $anken; $i++){
					if($mi[$i]->isDisplay == false){
						if($mi[$i]->firstTag == "プランナー" || $mi[$i]->secondTag == "プランナー" || $mi[$i]->thirdTag == "プランナー" ){
							if(($search_conditions['prefectures'] == $mi[$i]->mFirstLoc || $search_conditions['prefectures'] == $mi[$i]->mSecondLoc || $search_conditions['prefectures'] == $mi[$i]->mThirdLoc) || $search_conditions['prefectures'] == "null"){
								$mi[$i]->isDisplay = true;
								$counter++;
							}
						}
					}
				}
			break;
			case "営業":
				for($i = 0; $i < $anken; $i++){
					if($mi[$i]->isDisplay == false){
						if($mi[$i]->firstTag == "営業" || $mi[$i]->secondTag == "営業" || $mi[$i]->thirdTag == "営業" ){
							if(($search_conditions['prefectures'] == $mi[$i]->mFirstLoc || $search_conditions['prefectures'] == $mi[$i]->mSecondLoc || $search_conditions['prefectures'] == $mi[$i]->mThirdLoc) || $search_conditions['prefectures'] == "null"){
								$mi[$i]->isDisplay = true;
								$counter++;
							}
						}
					}
				}
			break;
			case "プログラマー":
				for($i = 0; $i < $anken; $i++){
					if($mi[$i]->isDisplay == false){
						if($mi[$i]->firstTag == "プログラマー" || $mi[$i]->secondTag == "プログラマー" || $mi[$i]->thirdTag == "プログラマー" ){
							if(($search_conditions['prefectures'] == $mi[$i]->mFirstLoc || $search_conditions['prefectures'] == $mi[$i]->mSecondLoc || $search_conditions['prefectures'] == $mi[$i]->mThirdLoc) || $search_conditions['prefectures'] == "null"){
								$mi[$i]->isDisplay = true;
								$counter++;
							}
						}
					}
				}
			break;
			case "システムエンジニア":
				for($i = 0; $i < $anken; $i++){
					if($mi[$i]->isDisplay == false){
						if($mi[$i]->firstTag == "システムエンジニア" || $mi[$i]->secondTag == "システムエンジニア" || $mi[$i]->thirdTag == "システムエンジニア" ){
							if(($search_conditions['prefectures'] == $mi[$i]->mFirstLoc || $search_conditions['prefectures'] == $mi[$i]->mSecondLoc || $search_conditions['prefectures'] == $mi[$i]->mThirdLoc) || $search_conditions['prefectures'] == "null"){
								$mi[$i]->isDisplay = true;
								$counter++;
							}
						}
					}
				}
			break;
			case "イラストレーター":
				for($i = 0; $i < $anken; $i++){
					if($mi[$i]->isDisplay == false){
						if($mi[$i]->firstTag == "イラストレーター" || $mi[$i]->secondTag == "イラストレーター" || $mi[$i]->thirdTag == "イラストレーター" ){
							if(($search_conditions['prefectures'] == $mi[$i]->mFirstLoc || $search_conditions['prefectures'] == $mi[$i]->mSecondLoc || $search_conditions['prefectures'] == $mi[$i]->mThirdLoc) || $search_conditions['prefectures'] == "null"){
								$mi[$i]->isDisplay = true;
								$counter++;
							}
						}
					}
				}
			break;
			case "Webデザイナー":
				for($i = 0; $i < $anken; $i++){
					if($mi[$i]->isDisplay == false){
						if($mi[$i]->firstTag == "Webデザイナー" || $mi[$i]->secondTag == "Webデザイナー" || $mi[$i]->thirdTag == "Webデザイナー" ){
							if(($search_conditions['prefectures'] == $mi[$i]->mFirstLoc || $search_conditions['prefectures'] == $mi[$i]->mSecondLoc || $search_conditions['prefectures'] == $mi[$i]->mThirdLoc) || $search_conditions['prefectures'] == "null"){
								$mi[$i]->isDisplay = true;
								$counter++;
							}
						}
					}
				}
			break;
			case "DTPデザイナー":
				for($i = 0; $i < $anken; $i++){
					if($mi[$i]->isDisplay == false){
						if($mi[$i]->firstTag == "DTPデザイナー" || $mi[$i]->secondTag == "DTPデザイナー" || $mi[$i]->thirdTag == "DTPデザイナー" ){
							if(($search_conditions['prefectures'] == $mi[$i]->mFirstLoc || $search_conditions['prefectures'] == $mi[$i]->mSecondLoc || $search_conditions['prefectures'] == $mi[$i]->mThirdLoc) || $search_conditions['prefectures'] == "null"){
								$mi[$i]->isDisplay = true;
								$counter++;
							}
						}
					}
				}
			break;
			case "漫画家":
				for($i = 0; $i < $anken; $i++){
					if($mi[$i]->isDisplay == false){
						if($mi[$i]->firstTag == "漫画家" || $mi[$i]->secondTag == "漫画家" || $mi[$i]->thirdTag == "漫画家" ){
							if(($search_conditions['prefectures'] == $mi[$i]->mFirstLoc || $search_conditions['prefectures'] == $mi[$i]->mSecondLoc || $search_conditions['prefectures'] == $mi[$i]->mThirdLoc) || $search_conditions['prefectures'] == "null"){
								$mi[$i]->isDisplay = true;
								$counter++;
							}
						}
					}
				}
			break;
			case "シナリオライター":
				for($i = 0; $i < $anken; $i++){
					if($mi[$i]->isDisplay == false){
						if($mi[$i]->firstTag == "シナリオライター" || $mi[$i]->secondTag == "シナリオライター" || $mi[$i]->thirdTag == "シナリオライター" ){
							if(($search_conditions['prefectures'] == $mi[$i]->mFirstLoc || $search_conditions['prefectures'] == $mi[$i]->mSecondLoc || $search_conditions['prefectures'] == $mi[$i]->mThirdLoc) || $search_conditions['prefectures'] == "null"){
								$mi[$i]->isDisplay = true;
								$counter++;
							}
						}
					}
				}
			break;
			case "インフラエンジニア":
				for($i = 0; $i < $anken; $i++){
					if($mi[$i]->isDisplay == false){
						if($mi[$i]->firstTag == "インフラエンジニア" || $mi[$i]->secondTag == "インフラエンジニア" || $mi[$i]->thirdTag == "インフラエンジニア" ){
							if(($search_conditions['prefectures'] == $mi[$i]->mFirstLoc || $search_conditions['prefectures'] == $mi[$i]->mSecondLoc || $search_conditions['prefectures'] == $mi[$i]->mThirdLoc) || $search_conditions['prefectures'] == "null"){
								$mi[$i]->isDisplay = true;
								$counter++;
							}
						}
					}
				}
			break;
			case "その他":
				for($i = 0; $i < $anken; $i++){
					if($mi[$i]->isDisplay == false){
						if($mi[$i]->firstTag == "その他" || $mi[$i]->secondTag == "その他" || $mi[$i]->thirdTag == "その他" ){
							if(($search_conditions['prefectures'] == $mi[$i]->mFirstLoc || $search_conditions['prefectures'] == $mi[$i]->mSecondLoc || $search_conditions['prefectures'] == $mi[$i]->mThirdLoc) || $search_conditions['prefectures'] == "null"){
								$mi[$i]->isDisplay = true;
								$counter++;
							}
						}
					}
				}
			break;
		}
	}
	}
	else{
		for($i = 0; $i < $anken; $i++){
			if($mi[$i]->isDisplay == false){
				if(($search_conditions['prefectures'] == $mi[$i]->mFirstLoc || $search_conditions['prefectures'] == $mi[$i]->mSecondLoc || $search_conditions['prefectures'] == $mi[$i]->mThirdLoc) || $search_conditions['prefectures'] == "null"){
					$mi[$i]->isDisplay = true;
					$counter++;
				}
			}
		}
	}
	
	echo '<br><div class="matter_count">'.$counter.'件表示</div>';
	
	for($i = 0; $i < $anken; $i++){
		$mi[$i]->isDisplay = false;
	}
	
	//企業情報表示関数
	function showMatter($mat, $pre, $miArray, $ankenCount){
		for($i = 0; $i < $ankenCount; $i++){
			if($miArray[$i]->isDisplay == false){
				if($miArray[$i]->firstTag == $mat || $miArray[$i]->secondTag == $mat|| $miArray[$i]->thirdTag == $mat){
					if(($pre == $miArray[$i]->mFirstLoc || $pre== $miArray[$i]->mSecondLoc || $pre == $miArray[$i]->mThirdLoc) || $pre == "null"){
						$miArray[$i]->isDisplay = true;
						?>
						<br>
						<div class="container">
							<div class="area-box2">
							  <div class="area-box2-inner">
							<div class="area-box2-head">
							  <div class="mod-head">
							   <div class="mod-head-labels">
								 <div class="mod-head-labelitem">
								   <!--<img src="seisyain.png"  width="110" alt="正社員">-->
								   <p class="mod-head-p">仕事名：<?php print $miArray[$i]->mTitle; ?></p>
								 </div>
							   </div>
							 </div>
							 </div>
							<div class="area-box2-body2">
							
							 <div class="mod-detail-body">
							 <div class="mod-detail-main">
							  <table class="mod-detail-table">
							  <tbody class="mod-detail-table-tbody">
							   <tr class="mod-detail-table-tr">
								<th class="mod-detail-table-th-top" nowrap>業務内容</th>
								<td class="mod-detail-table-td-top">
								<?php print $miArray[$i]->mContent; ?></td>
							   </tr>
							   <tr class="mod-detail-table-tr">
								<th class="mod-detail-table-th" nowrap>給与</th>
								<td class="mod-detail-table-td">
							  <div class="float:left;"><?php print $miArray[$i]->mSalary; ?>
							  </div>
								</td>
							   </tr>

							   <tr class="mod-detail-table-tr">
								<th class="mod-detail-table-th" nowrap>契約期間</th>
								<td class="mod-detail-table-td">
							  <div class="float:left;">
								<?php print $miArray[$i]->mWeekHour; ?>
							  </div>
								</td>
								</tr>
								<tr class="mod-detail-table-tr">
								 <th class="mod-detail-table-th" nowrap>就業時間</th>
								 <td class="mod-detail-table-td">
							   <div class="float:left;"><?php print $miArray[$i]->mWorkHour; ?>
							   </div>
								 </td>
								</tr>
							  <tr class="mod-detail-table-tr">
							   <th class="mod-detail-table-th" nowrap>勤務地</th>
							   <td class="mod-detail-table-td">
									 <?php print $miArray[$i]->mPlaceWork; ?>
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
	
	if(isset($_GET["occupation"])){
		foreach($search_conditions['occupation'] as $obj){
			showMatter($obj, $search_conditions['prefectures'], $mi, $anken);
		}
	}
	else{
		for($i = 0; $i < $anken; $i++){
			showMatter(null, $search_conditions['prefectures'], $mi, $anken);
		}
	}
	
	?>

</div>
</div>
</div>
