<?php
if(isset($_SESSION['username'])){
echo $this->layout('contentArea', array(
	'title' => 'MJの技術者',
	'content' => $this->yield('content'),
	'breadcrumbs' => array(
		'TOP',
		'技術者情報' => 'hito.php',
		'MJの技術者'
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
		'title' => 'MJの技術者',
		'content' => $this->yield('content'),
		'breadcrumbs' => array(
			'TOP',
			'技術者情報' => 'hito.php',
			'MJの技術者'
		),
		'sidebar_menu' => array(
		'お問い合わせ' => 'otoiawase.php',
		'スキルシート' => 'engineer_MJ.php#skillsheet'
	)
	));
}
?>

<div id="contentsArea">

<div id="contentsLeft">
  <div class="contentsl_1">
    <dl>
		<dt class="anken-title">名前</dt>
			<dd class="anken-detail">MJ</dd>
		<dt class="anken-title">職種</dt>
			<dd class="anken-detail">プログラマー</dd>
		<dt class="anken-title">業務経験</dt>
			<dd class="anken-detail">・コーポレートサイトの作成</dd>	
			<dd class="anken-detail">・ショッピングサイトの作成</dd>	
			<dd class="anken-detail">・UNITYを使用したゲーム作成</dd>	
			<dd class="anken-detail">・Unreal Engine4を用いたゲームの作成</dd>	
			<dd class="anken-detail">・WEBテスト、スマホテスト</dd>	
			<dd class="anken-detail">・テスト仕様書作成</dd>	
			<dd class="anken-detail">・テスト設計、アプリ（IOS/Android）テスト経験</dd>	
			<dd class="anken-detail">・テスト項目書の作成経験、見積書作成</dd>	
			<dd class="anken-detail">・画像処理・音声処理・動画処理</dd>	
			<dd class="anken-detail">・Websプリケーション開発、スマホアプリ（API）開発</dd>
			<dd class="anken-detail">・業務システムの開発</dd>
			<dd class="anken-detail">・Androidアプリプログラミング</dd>
		<dt class="anken-title">業務形態</dt>
			<dd class="anken-detail">業務委託</dd>
		<dt class="anken-title">使用可能OS</dt>
			<dd class="anken-detail">・Windows１０</dd>
			<dd class="anken-detail">・Windows８</dd>	
			<dd class="anken-detail">・Windows７</dd>
			<dd class="anken-detail">・Linux</dd>	
		<dt class="anken-title">使用可能言語</dt>
			<dd class="anken-detail">・C#</dd>
			<dd class="anken-detail">・javascript</dd>	
			<dd class="anken-detail">・java</dd>	
			<dd class="anken-detail">・jsp</dd>	
			<dd class="anken-detail">・VB</dd>	
			<dd class="anken-detail">・HTML</dd>	
			<dd class="anken-detail">・XML</dd>	
			<dd class="anken-detail">・PHP</dd>	
			<dd class="anken-detail">・Python</dd>	
			<dd class="anken-detail">・VBA</dd>
		<dt class="anken-title">使用可能ツール</dt>
			<dd class="anken-detail">・Github</dd>
			<dd class="anken-detail">・Wordpress</dd>	
			<dd class="anken-detail">・FFFTP</dd>	
			<dd class="anken-detail">・XAMPP</dd>
			<dd class="anken-detail">・Excel</dd>
			<dd class="anken-detail">・Word</dd>
			<dd class="anken-detail">・PowerPoint</dd>
			<dd class="anken-detail">・Unity</dd>	
			<dd class="anken-detail">・UnrealEngine4</dd>	
		<dt class="anken-title">使用可能DB</dt>
			<dd class="anken-detail">・Oracle</dd>	
			<dd class="anken-detail">・MySQL</dd>	
			<dd class="anken-detail">・SQLServer</dd>
		<dt class="anken-title">稼働日数</dt>
			<dd class="anken-detail">・週5日</dd>
			<dd class="anken-detail">・即日</dd>
		<dt class="anken-title">並行状況</dt>
			<dd class="anken-detail">あり</dd>
		<dt class="anken-title">夜勤</dt>
			<dd class="anken-detail">可能</dd>
		<dt class="anken-title">残業</dt>
			<dd class="anken-detail">可能</dd>
		<dt class="anken-title">外国籍</dt>
			<dd class="anken-detail">インドネシア</dd>
		<h2 class="anken-title">実績サンプル</h2>
		<hr color="#7FC3EA">
		
		<div class="row">
		  <div class="column">
			<dt class="anken-title">開発環境</dt>
				<dd class="anken-detail">Unreal Engine</dd>
			<dt class="anken-title">使用言語</dt>	
				<dd class="anken-detail">C++</dd>	
			<dt class="anken-title">使用ツール</dt>
				<dd class="anken-detail">Unreal Engine 4</dd>
				<dd class="anken-detail">Github(ソース管理)</dd>
			<dt class="anken-title">開発人数</dt>
				<dd class="anken-detail">15人</dd>
			<dt class="anken-title">制作期間</dt>
				<dd class="anken-detail">6ヶ月間</dd>	
		  </div>
		  <div class="column">
			<h3 style="text-align:center;">3Dアクションゲーム</h3>
			<div style="width: 100%; height: 0px; position: relative; padding-bottom: 56.250%;">
	            <video  class="embed-responsive-item" src="./videos/mj-01.mp4" poster="./videos/mj.jpg" controls controlslist="nodownload" oncontextmenu="return false;" id="vid_download" width="100%" >
	            <p>このブラウザは video に未対応です。</p>
	            </video>
        	</div>
		  </div>
		</div>
		
		
		<h2 class="anken-title">実績サンプル</h2>
		<hr color="#7FC3EA">
		<div class="row">
		  <div class="column">
			<dt class="anken-title">開発環境</dt>
				<dd class="anken-detail">Unreal Engine 4</dd>
			<dt class="anken-title">使用言語</dt>	
				<dd class="anken-detail">C#</dd>	
			<dt class="anken-title">使用ツール</dt>
				<dd class="anken-detail">Unreal Engine 4</dd>
				<dd class="anken-detail">Github(ソース管理)</dd>
			<dt class="anken-title">開発人数</dt>
				<dd class="anken-detail">5人</dd>
			<dt class="anken-title">制作期間</dt>
				<dd class="anken-detail">6ヶ月間</dd>	
		  </div>
		   <div class="column">
			<h3 style="text-align:center;">3Dアドベンチャーゲーム</h3>
			<div style="width: 100%; height: 0px; position: relative; padding-bottom: 56.250%;">
	            <video  class="embed-responsive-item" src="./videos/mj-02.mp4" controls controlslist="nodownload" oncontextmenu="return false;" id="vid_download" width="100%" >
	            <p>このブラウザは video に未対応です。</p>
	            </video>
        	</div>
		  </div>
		</div>

		<h2 class="anken-title">実績サンプル</h2>
		<hr color="#7FC3EA">
		<div class="row">
		  <div class="column">
			<dt class="anken-title">開発環境</dt>
				<dd class="anken-detail">unity</dd>
			<dt class="anken-title">使用言語</dt>	
				<dd class="anken-detail">C#</dd>	
			<dt class="anken-title">使用ツール</dt>
				<dd class="anken-detail">Unity</dd>
				<dd class="anken-detail">Visual Studio</dd>
			<dt class="anken-title">開発人数</dt>
				<dd class="anken-detail">6人</dd>
			<dt class="anken-title">制作期間</dt>
				<dd class="anken-detail">6ヶ月間</dd>	
		  </div>
		   <div class="column">
			<h3 style="text-align:center;">2Dノベルゲーム(Android・PC)</h3>
			<div style="width: 100%; height: 0px; position: relative; padding-bottom: 56.250%;">
	            <video  class="embed-responsive-item" src="./videos/mj-03.mp4" controls controlslist="nodownload" oncontextmenu="return false;" id="vid_download" width="100%" >
	            <p>このブラウザは video に未対応です。</p>
	            </video>
        	</div>
		  </div>
		</div>

		<h2 class="anken-title">実績サンプル</h2>
		<hr color="#7FC3EA">
		<div class="row">
		  <div class="column">
			<dt class="anken-title">開発環境</dt>
				<dd class="anken-detail">unity</dd>
			<dt class="anken-title">使用言語</dt>	
				<dd class="anken-detail">C#</dd>	
			<dt class="anken-title">使用ツール</dt>
				<dd class="anken-detail">Unity</dd>
				<dd class="anken-detail">Visual Studio</dd>
			<dt class="anken-title">開発人数</dt>
				<dd class="anken-detail">6人</dd>
			<dt class="anken-title">制作期間</dt>
				<dd class="anken-detail">6ヶ月間</dd>	
		  </div>
		   <div class="column">
			<h3 style="text-align:center;">2D格闘ゲーム</h3>
			<div style="width: 100%; height: 0px; position: relative; padding-bottom: 56.250%;">
	            <video  class="embed-responsive-item" src="./videos/mj-04.mp4" controls controlslist="nodownload" oncontextmenu="return false;" id="vid_download" width="100%" >
	            <p>このブラウザは video に未対応です。</p>
	            </video>
        	</div>
		  </div>
		</div>

		<hr color="#7FC3EA">
		
		<div id="skillsheet">
		<p>スキルシートは下記ボタンでお願いいたします。</p>
		<a href="skillsheet/MJ_skillsheet.pdf"><button  class="btn btn-primary">スキルシートをダウンロード</button></a>
		</div>
		<p>お問い合わせ、ご提案は下記ボタンでお願いいたします。</p>
		<a href="otoiawase.php"><button  class="btn btn-primary">お問い合わせはこちら</button></a>
	</dl>
  </div>

</div>
</div>
