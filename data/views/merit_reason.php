<?php
if(isset($_SESSION['username'])){
echo $this->layout('contentArea', array(
	'title' => 'グローアップリクルートが選ばれる理由',
	'content' => $this->yield('content'),
	'breadcrumbs' => array(
		'TOP',
		'グローアップリクルートが選ばれる理由'
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
		'title' => 'グローアップリクルートが選ばれる理由',
		'content' => $this->yield('content'),
		'breadcrumbs' => array(
			'TOP',
			'グローアップリクルートが選ばれる理由'
		)
	));
}
?>

<div id="contentsArea">


<div id="contentsLeft">
  <div class="contentsl_1">

    <h3>1．業界トップクラスの求人情報数</h3>
        <p>全国20,000件以上の求人情報数。取引先企業は大企業からベンチャーまで幅広く、<br>
        職種も様々で未経験からチャレンジできる仕事もあります。<br>
        あなたの希望に沿った仕事が必ず見つかります。</p>
    <br>
    <h3>2．充実の福利厚生</h3>
        <p>健康保険、雇用保険、厚生年金などの各種社会保険制度は勿論のこと、<br>
        年一回の健康診断や有給休暇制度もご用意しています。<br>
        生命保険や損害保険に関する相談も承ります。</p>
    <br>
    <h3>3．各種スキルアップ支援</h3>
        <p>皆様の更なるステップアップに向けて、OAや語学などのスキルアップ講座や、<br>
        資格取得のための講座など様々なサポートを無料でご用意しています。</p>
    <br>
    <h3>4．働くママを支援</h3>
        <p>子育てを機に仕事から離れていた方々への再就職チャレンジを支援。<br>
        また、子育て中の方々でも安心して働ける環境をサポートしております。</p>
    <br>
    <h3>5．優良派遣事業者に認定されました</h3>
        <p>この制度は厚生労働省から委託された期間が派遣会社を調査、<br>
        派遣先企業と派遣社員の皆様双方が安心できるサービスを提供できているかを<br>
        一定の基準で判定し、これをクリアした派遣会社を「優良派遣事業者」として<br>
        認定するものです。2014年から始まり、グローアップ株式会社は2015年6月に<br>
        認定を受けました。</p>

  </div>
</div>

</div>
