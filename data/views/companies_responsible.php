<?php
if(isset($_SESSION['username'])){
echo $this->layout('contentArea', array(
	'title' => '企業のご担当者様へ',
	'content' => $this->yield('content'),
	'breadcrumbs' => array(
		'TOP',
		'企業のご担当者様'
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
		'title' => '企業のご担当者様ヘ',
		'content' => $this->yield('content'),
		'breadcrumbs' => array(
			'TOP',
			'企業のご担当者様'
		)
	));
}
?>

<div id="contentsArea">

<div id="contentsLeft">
  <div class="contentsl_1">
    <p style="font-size: 14px">グローアップ株式会社は時代の変化、企業の変化と共に日々発展してゆく貴社のニーズに対応した<br>
    人材を最善を尽くしてご提案いたします。また、採用時にかかる費用・時間のコスト削減をご提案、<br>
    サポートいたします。<br>
    <br>
    人材派遣のほか、紹介予定派遣、人材紹介、業務委託などのアウトソーシング業を展開し、<br>
    多様化する貴社のご希望を的確に捉え、確実にお応えいたします。</p>
    <br><br>
    <h3>・人材派遣サービス</h3>
        <p>雇用関係はグローアップ株式会社と派遣スタッフ様との間で結ばれます。<br>
        派遣スタッフ様に対する給与支払いや各種保険手続きなどは当社が行い、<br>
        業務の指示は派遣先企業様によって行われます。<br>
        労務関係の手間がかからず、採用コストが抑えられるというメリットがあります。<br>
        有期雇用となりますので、「ある一定の期間だけ人材が必要」、「急に人材が必要になった」<br>
        などという場合にお勧めです。</p>
        <br>
    <h3>・紹介予定派遣サービス</h3>
        <p>派遣先企業様と派遣スタッフ様の間での直接雇用を前提として、<br>
        最大6カ月間人材派遣サービスと同じ形態で業務を遂行します。派遣期間終了時に、<br>
        派遣先企業様と派遣スタッフ様双方の合意が得られれば、直接雇用へ切り替えます。<br>
        派遣期間内で労働者、使用者がお多大に判断できますので、失敗の少ない採用が可能です。</p>
        <br>
    <h3>・有料職業紹介サービス</h3>
        <p>正社員、アルバイトなどを問わず、企業様に求職者様をご紹介するサービスです。<br>
        ご紹介が成立すると企業様と求職様との間で直接雇用となります。</p>
        <br><br>
        <div id="sideline">
          <h2>対応エリア</h2>
        	<hr color="#7FC3EA" width="635" align="left">  <br />
        </div>
        <p style="font-size: 14px">東京23区、その他東京都内、埼玉県、神奈川県、千葉県を中心に<br>
        対応しております。またこれら以外の地域でのお取引例もございます。</p>
  </div>
</div>
</div>
