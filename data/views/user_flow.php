<?php
if(isset($_SESSION['username'])){
echo $this->layout('contentArea', array(
	'title' => 'ご利用の流れ',
	'content' => $this->yield('content'),
	'breadcrumbs' => array(
		'TOP',
		'ご利用の流れ'
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
		'title' => 'ご利用の流れ',
		'content' => $this->yield('content'),
		'breadcrumbs' => array(
			'TOP',
			'ご利用の流れ'
		)
	));
}
?>

<div id="contentsArea">


<div id="contentsLeft">
  <div class="contentsl_1">
    <h3>ご利用にあたり、まずはご登録をお願いいたします。</h3>

    <p style="font-size:15px; font-weight: bold">Step1.利用登録</p>
    <p>当サイト上のフォームより、またはご来社いただき、必要事項をご登録ください。</p>
    <img src="img/down.png">
    <p style="font-size:15px; font-weight: bold">Step2.登録完了</p>
    <p>まずは希望される仕事の条件をお聞きします。<br>
    仕事内容によって、専用の説明会、面接登録会をご案内する場合がございます。</p>
    <img src="img/down.png">
    <p style="font-size:15px; font-weight: bold">Step3.お仕事紹介</p>
    <p>ヒアリングした内容を元に、あなたのスキルや条件を考慮し最適なお仕事をご紹介いたします。</p>
    <img src="img/down.png">
    <p style="font-size:15px; font-weight: bold">Step4.応募・面接</p>
    <p>ご希望の職場へ経歴書を提出します。ご希望の職場の担当者が採用を検討されたら、<br>
    面接となります。案件や職場によっては複数回の面接となる場合もあります。</p>
    <img src="img/down.png">
    <p style="font-size:15px; font-weight: bold">Step5.就業決定・雇用契約</p>
    <p>就業条件、業務内容、職場環境などをご確認いただき、問題が無ければ就業決定です。</p>
    <img src="img/down.png">
    <p style="font-size:15px; font-weight: bold">Step6.就業開始</p>
    <p>就業中は弊社担当が定期的にあなたの職場へお伺いし、サポートいたします。</p>
    <br><br><br><br>
    <div id="kantan_btn">
    <a href="customer-input.php" class="mouseHvr"><img src="img/kantan_btn.png"></a>
    </div>
  </div>
</div>

</div>
