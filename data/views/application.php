<link href="css/reset.css" type="text/css" rel="stylesheet" />
<link href="css/common.css" type="text/css" rel="stylesheet" />

<?php
if(isset($_SESSION['username'])){
echo $this->layout('contentArea', array(
	'title' => '応募書類ダウンロード',
	'content' => $this->yield('content'),
	'breadcrumbs' => array(
		'TOP',
		'応募書類ダウンロード'
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
		'title' => '応募書類ダウンロード',
		'content' => $this->yield('content'),
		'breadcrumbs' => array(
			'TOP',
			'応募書類ダウンロード'
		)
	));
}
?>

<div class="clear"></div>

<div id="contentsArea">
    
     <!--<br>

   <table>
       <tr><a class="mouseHvr" href="INTERN.doc"><img src="img/t_rirekisyo.png"></a></tr>
       <tr><a class="mouseHvr" href="Careersheet-name.doc"><img src="img/t_syokumu.png"></a></tr>
       <tr><a class="mouseHvr" href="Careersheet-skill.xls"><img src="img/t_gijyutusya.png"></a></tr>
    </table>
   <br><br><br><br>

    -->
    

    <br>

    <div class="wrap">
        <div class="wr">
            <div class="wr-inner">
        <a class="mouseHvr" href="INTERN.doc"><img src="img/dl_rirekisyo2.jpg"></a>
            </div>
        </div>
        <div class="wr">
            <div class="wr-inner">
        <a class="mouseHvr" href="Careersheet-name.doc"><img src="img/dl_syokumu2.jpg"></a>
            </div>
        </div>
        <div class="wr">
            <div class="wr-inner">
        <a class="mouseHvr" href="Careersheet-skill.xls"><img src="img/dl_syokumugijutu.jpg"></a>
            </div>
        </div>
    </div>
    <div class="clear"></div>
   <br><br><br><br>

</div>
