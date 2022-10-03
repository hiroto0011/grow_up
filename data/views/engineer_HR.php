<?php
if(isset($_SESSION['username'])){
echo $this->layout('contentArea', array(
	'title' => 'HRの技術者',
	'content' => $this->yield('content'),
	'breadcrumbs' => array(
		'TOP',
		'技術者情報' => 'hito.php',
		'HRの技術者'
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
		'title' => 'HRの技術者',
		'content' => $this->yield('content'),
		'breadcrumbs' => array(
			'TOP',
			'技術者情報' => 'hito.php',
			'HRの技術者'
		),
		'sidebar_menu' => array(
		'お問い合わせ' => 'otoiawase.php',
		'スキルシート' => 'engineer_HR.php#skillsheet'
	)
	));
}
?>

<div id="contentsArea">

<div id="contentsLeft">
  <div class="contentsl_1">
    <dl>
		<dt class="anken-title">名前</dt>
			<dd class="anken-detail">HR</dd>
		<dt class="anken-title">職種</dt>
			<dd class="anken-detail">プログラマー</dd>
		<dt class="anken-title">業務経験</dt>
			<dd class="anken-detail">・クラウド環境の開発経験</dd>	
			<dd class="anken-detail">・設計仕様書の作成</dd>	
			<dd class="anken-detail">・DB構築管理</dd>	
			<dd class="anken-detail">・Laravel開発</dd>	
			<dd class="anken-detail">・文書作成</dd>	
			<dd class="anken-detail">・DB性能解析</dd>	
			<dd class="anken-detail">・API作成・システム間連携</dd>	
			<dd class="anken-detail">・社内外の折衝経験</dd>
			<dd class="anken-detail">・工数見積算出経験</dd>
		<dt class="anken-title">業務形態</dt>
			<dd class="anken-detail">業務委託</dd>
		<dt class="anken-title">使用可能OS</dt>
			<dd class="anken-detail">・Windows10</dd>
			<dd class="anken-detail">・Windows８</dd>	
			<dd class="anken-detail">・Windows７</dd>
			<dd class="anken-detail">・Linux</dd>	
		<dt class="anken-title">使用可能言語</dt>
			<dd class="anken-detail">・JAVA</dd>
			<dd class="anken-detail">・JavaScript</dd>	
			<dd class="anken-detail">・PHP</dd>	
			<dd class="anken-detail">・HTML</dd>	
			<dd class="anken-detail">・PHP</dd>	
			<dd class="anken-detail">・CSS</dd>	
			<dd class="anken-detail">・C#</dd>	
			<dd class="anken-detail">・C++</dd>	
			<dd class="anken-detail">・VB</dd>	
		<dt class="anken-title">使用可能ツール</dt>
			<dd class="anken-detail">・AWS</dd>
			<dd class="anken-detail">・Eclipse</dd>	
			<dd class="anken-detail">・Apache</dd>	
			<dd class="anken-detail">・GIT</dd>
			<dd class="anken-detail">・FuelPHP</dd>
			<dd class="anken-detail">・Symfony</dd>
			<dd class="anken-detail">・CakePHP</dd>
		<dt class="anken-title">使用可能DB</dt>
			<dd class="anken-detail">・PL/SQL</dd>	
			<dd class="anken-detail">・MySQL</dd>	
			<dd class="anken-detail">・Oracle</dd>
			<dd class="anken-detail">・PostgreSql</dd>	
		<dt class="anken-title">稼働日数</dt>
			<dd class="anken-detail">・週5日</dd>
			<dd class="anken-detail">・即日</dd>
		<dt class="anken-title">並行状況</dt>
			<dd class="anken-detail">あり</dd>
		<dt class="anken-title">夜勤</dt>
			<dd class="anken-detail">可能</dd>
		<dt class="anken-title">残業</dt>
			<dd class="anken-detail">可能</dd>
<!-- 		<h2 class="anken-title">実績サンプル</h2>
		<hr color="#7FC3EA">
		
		<div class="row">
		  <div class="column">
			<dt class="anken-title">開発環境</dt>
				<dd class="anken-detail">Unity</dd>
			<dt class="anken-title">使用言語</dt>	
				<dd class="anken-detail">C#</dd>	
			<dt class="anken-title">使用ツール</dt>
				<dd class="anken-detail">VisualStudio</dd>
				<dd class="anken-detail">Arduino</dd>
			<dt class="anken-title">開発人数</dt>
				<dd class="anken-detail">1人</dd>
			<dt class="anken-title">制作期間</dt>
				<dd class="anken-detail">12ヶ月間</dd>	
		  </div>
		  <div class="column">
			<h3 style="text-align:center;">2Dアクションゲーム</h3>
			<div style="width:100%;height:0px;position:relative;padding-bottom:56.250%;"><iframe src="https://streamable.com/e/3kve4a" frameborder="0" width="100%" height="100%" allowfullscreen style="width:100%;height:100%;position:absolute;left:0px;top:0px;overflow:hidden;"></iframe></div>
		  </div>
		</div> -->
		
		
		

		<hr color="#7FC3EA">
		
		<div id="skillsheet">
		<p>スキルシートは下記ボタンでお願いいたします。</p>
		<a href="skillsheet/HM_skillsheet.pdf"><button  class="btn btn-primary">スキルシートをダウンロード</button></a>
		</div>
		<p>お問い合わせ、ご提案は下記ボタンでお願いいたします。</p>
		<a href="otoiawase.php"><button  class="btn btn-primary">お問い合わせはこちら</button></a>
	</dl>
  </div>

</div>
</div>
