<?php
if(isset($_SESSION['username'])){
echo $this->layout('contentArea', array(
	'title' => 'アウトソーシング登録が初めての方へ',
	'content' => $this->yield('content'),
	'breadcrumbs' => array(
		'TOP',
		'アウトソーシング登録が初めての方へ'
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
		'title' => 'アウトソーシング登録が初めての方へ',
		'content' => $this->yield('content'),
		'breadcrumbs' => array(
			'TOP',
			'アウトソーシング登録が初めての方へ'
		)
	));
}
?>

<div id="contentsArea">

<div id="contentsLeft">
  <div class="contentsl_1">
    <h3>「人材派遣」と「アウトソーシング」。似ているようで違います。</h3>
        <p>人材派遣は派遣元会社が労働者派遣契約を結んでいる派遣先会社から依頼され、<br>
        スタッフを派遣し、業務を遂行することを言います。<br>
        スタッフへの業務上の指示は派遣先会社の担当者より直接行われ、<br>
        給与支払い、社会保険や雇用保険などについての手続きは派遣元会社と行います。<br>
        <br>
        一方アウトソーシングは請負元会社が業務請負契約を結んでいる請負先会社から業務を依頼され、<br>
        これを遂行することを言います。スタッフは請負元会社と雇用または業務委託契約を結びます。<br>
        スタッフへの業務上の指示は請負元会社の担当者より直接行われ、<br>
        給与・請負料の支払い、社会保険や雇用保険などについての手続きは請負元会社と行います。</p>

  </div>
</div>

</div>
