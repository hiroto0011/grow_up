<?php
if(isset($_SESSION['username'])){
echo $this->layout('contentArea', array(
	'title' => '採用情報',
	'content' => $this->yield('content'),
	'breadcrumbs' => array(
		'TOP',
		'採用情報'
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
		'title' => '採用情報',
		'content' => $this->yield('content'),
		'breadcrumbs' => array(
			'TOP',
			'採用情報'
		)
	));
}
?>

<div id="contentsArea">
<div id="contentsLeft">
  <div class="contentsl_1">
    <h2>営業職</h2>
    <img src="img/eigyo.jpg">
    <h3>クライアントのニーズにマッチするサービス実現に向けての挑戦。</h3>
    <p>各企業に対し、どのようなサービスが最適かを判断し、要件に合った提案を行います。<br>
    提案から受注までは1~2週間以内、大きい案件では3カ月以上かかることも。<br>
    個人の意欲、思考と行動で営業活動を行うことが出来るので、自分の強みを生かした業界での営業が出来ます。</p>
    <br><br><br>
    <h2>総合職</h2>
    <img src="img/kanri.jpg">
    <h3>企業活動の上で必ず発生する「お金の管理」や「人の管理」。<br>
        それらの業務を通じて、いかに各部門が本来の業務に集中して取り組めるか。</h3>
    <p>総務や人事、経理といった業務を通じて、営業や派遣スタッフ、<br>
        ひいては当社のすべての部門が本来の業務に集中して取り組めるようサポートしていきます。<br>
        専門知識を深めていただくことは勿論ですが、何よりも大事なことは部門の役目である、<br>
        「現場がいかに働きやすく仕事ができるかを考え、それをサポートする姿勢」です。</p>
    <br><br><br>

  </div>
</div>

</div>
