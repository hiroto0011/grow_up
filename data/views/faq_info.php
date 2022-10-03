<?php
if(isset($_SESSION['username'])){
echo $this->layout('contentArea', array(
	'title' => 'Q＆A',
	'content' => $this->yield('content'),
	'breadcrumbs' => array(
		'TOP',
		'Q＆A'
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
		'title' => 'Q＆A',
		'content' => $this->yield('content'),
		'breadcrumbs' => array(
			'TOP',
			'Q＆A'
		)
	));
}
?>

<div id="contentsArea">
<div id="contentsLeft">
  <div class="contentsl_1">
    <h3>Q.派遣スタッフとはなんでしょうか？正社員や契約社員とどのように違うのでしょうか？</h3>
        <p>A.一般的な労働契約と派遣契約の違いは「雇用関係」と「指揮・命令関係」が分かれているところです。<br>
        派遣スタッフと雇用契約を結ぶのは派遣スタッフを受け入れる企業ではなく派遣会社です。正社員や契約社員と異なり、<br>
        派遣スタッフへの給与の支払いは派遣会社が行います。</p>
    <br>
    <h3>Q.派遣先企業が派遣スタッフに対してしなければならないこと、してはいけないことは何かありますか？</h3>
        <p>A.派遣スタッフの担当業務およびその業務を指揮する指揮命令者をあらかじめ決定して頂くと共に、<br>
        契約以外の業務が発生することの無いようにご留意ください。</p>
    <br>
    <h3>Q.残業や休日出勤はお願いできるでしょうか？</h3>
        <p>A.派遣ご依頼の際に月の残業時間の目安や休日出勤の有無などをお知らせください。<br>
        その条件で対応可能なスタッフを人選いたします。</p>
    <br>
    <h3>Q.紹介予定派遣とはどのようなものですか？</h3>
        <p>A.派遣先に直接雇用されることを予定して一定期間派遣スタッフとして就業、派遣期間終了時に派遣スタッフと派遣先企業が合意すれば、<br>
        正社員や契約社員としての採用が決まる働き方です。お互いの適性を知るための試用期間がありますので、<br>
        入社後のミスマッチが少なくなります。</p>
    <br>


  </div>
</div>

</div>
