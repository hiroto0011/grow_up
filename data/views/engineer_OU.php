<?php
if(isset($_SESSION['username'])){
echo $this->layout('contentArea', array(
	'title' => 'OUの技術者',
	'content' => $this->yield('content'),
	'breadcrumbs' => array(
		'TOP',
		'技術者情報'=> 'hito.php',
		'OUの技術者'
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
		'title' => 'OUの技術者',
		'content' => $this->yield('content'),
		'breadcrumbs' => array(
			'TOP',
			'技術者情報'=> 'hito.php',
			'OUの技術者'
		),
		'sidebar_menu' => array(
		'お問い合わせ' => 'otoiawase.php',
		'スキルシート' => 'engineer_OU.php#skillsheet'
	)
	));
}
?>

<div id="contentsArea">

<div id="contentsLeft">
  <div class="contentsl_1">
    <dl>
		<dt class="anken-title">名前</dt>
			<dd class="anken-detail">OU</dd>
		<dt class="anken-title">職種</dt>
			<dd class="anken-detail">プログラマー</dd>
		<dt class="anken-title">業務経験</dt>
			<dd class="anken-detail">・テキスト仕様書作成</dd>	
			<dd class="anken-detail">・見積書作成</dd>	
			<dd class="anken-detail">・スケジュール調整</dd>
			<dd class="anken-detail">・案件進捗管理</dd>	
			<dd class="anken-detail">・データ集計</dd>	
			<dd class="anken-detail">・帳票作成</dd>	
			<dd class="anken-detail">・送付状作成</dd>	
			<dd class="anken-detail">・電話応対</dd>	
		<dt class="anken-title">業務形態</dt>
			<dd class="anken-detail">業務委託</dd>
		<dt class="anken-title">使用可能OS</dt>
			<dd class="anken-detail">・Windows10</dd>
			<dd class="anken-detail">・Windows８</dd>		
		<dt class="anken-title">使用可能言語</dt>
			<dd class="anken-detail">・javascript</dd>	
			<dd class="anken-detail">・java</dd>	
			<dd class="anken-detail">・VB</dd>	
			<dd class="anken-detail">・HTML</dd>	
			<dd class="anken-detail">・XLM</dd>	
			<dd class="anken-detail">・PHP</dd>	
			<dd class="anken-detail">・VBA</dd>	
			<dd class="anken-detail">・Ruby</dd>	
			<dd class="anken-detail">・swift</dd>	
		<dt class="anken-title">使用可能ツール</dt>
			<dd class="anken-detail">・Excel</dd>
			<dd class="anken-detail">・Word</dd>	
			<dd class="anken-detail">・PowerPoint</dd>	
			<dd class="anken-detail">・Apache</dd>
			<dd class="anken-detail">・Tomcat</dd>
			<dd class="anken-detail">・Eclipse</dd>
			<dd class="anken-detail">・Xcode</dd>
			<dd class="anken-detail">・Photoshop</dd>
		<dt class="anken-title">使用可能DB</dt>
			<dd class="anken-detail">・PL/SQL</dd>	
			<dd class="anken-detail">・MySQL</dd>	
			<dd class="anken-detail">・SQLServer</dd>
		<dt class="anken-title">稼働日数</dt>
			<dd class="anken-detail">・週5日</dd>
			<dd class="anken-detail">・即日</dd>
		<dt class="anken-title">並行状況</dt>
			<dd class="anken-detail">あり</dd>
		<dt class="anken-title">残業</dt>
			<dd class="anken-detail">可能</dd>		
	

		<hr color="#7FC3EA">
		
		<div id="skillsheet">
		<p>スキルシートは下記ボタンでお願いいたします。</p>
		<a href="skillsheet/OU_skillsheet.pdf"><button  class="btn btn-primary">スキルシートをダウンロード</button></a>
		</div>
		<p>お問い合わせ、ご提案は下記ボタンでお願いいたします。</p>
		<a href="otoiawase.php"><button  class="btn btn-primary">お問い合わせはこちら</button></a>
	</dl>
  </div>

</div>
</div>
