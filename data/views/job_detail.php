<link rel="stylesheet" type="text/css" href="./css/syousai.css">

<div id="contentsArea">

<div id="contentsLeft">
  <div class="contentsl_1">
    <div id="sideline">
    	<h2>求人募集案件</h2>
    	<hr color="#7FC3EA" width="635" align="left">  <br />
    </div>
  </div>

<?php

try {
  $pdo = new PDO($dsn,$username,$password);
  $pdo -> exec("set names utf8");
  if ($s_id != null) {
    $sql = "SELECT * FROM work_locations
            INNER JOIN work_informations ON work_locations.id = work_informations.id
            LEFT JOIN work_occupations ON work_locations.id = work_occupations.id
            LEFT JOIN work_pages ON work_locations.id = work_pages.id
            WHERE work_locations.id = :s_id";

    $stmt = $pdo->prepare($sql);
    $stmt -> bindParam(":s_id",$s_id);
    $stmt -> execute();

    $rec = $stmt->fetch(PDO::FETCH_ASSOC);



  }else {
    echo $s_id;
  }

?>


<div class="area-box2">
  <div class="area-box2-inner">
<div class="area-box2-head">
 <div class="mod-head">
  <ul class="mod-head-labels">
    <li class="mod-head-labelitem">
      <!--<img src="seisyain.png"  width="110" alt="正社員">-->
      <p class="mod-head-p">仕事No：<?php print htmlspecialchars($rec['id']); ?></p>
    </li>
  </ul>
</div>
</div>

 <!--募集-->

<div class="area-box2-body2">
<div class="mod-detail-head">
 <h5 class="mod-detail-head">
   <p>
     <a><?php print htmlspecialchars($rec['title']); ?></a>
   </p>
 </h5>
</div>
<div class="mod-detail-body">
<div class="mod-detail-main">
 <table class="mod-detail-table">
 <tbody class="mod-detail-table-tbody">
  <tr class="mod-detail-table-tr">
   <th class="mod-detail-table-th-top" nowrap>勤務地</th>
   <td class="mod-detail-table-td-top">
     <?php print htmlspecialchars($rec['prefectures']); ?><br>
     <?php print htmlspecialchars($rec['district']); ?><br>
     <?php print htmlspecialchars($rec['location']); ?></td>
  </tr>
  <tr class="mod-detail-table-tr">
   <th class="mod-detail-table-th" nowrap>期間</th>
   <td class="mod-detail-table-td">
 <div class="float:left;">
       <?php print htmlspecialchars($rec['period']); ?>
 </div>
   </td>
   </tr>
   <tr class="mod-detail-table-tr">
    <th class="mod-detail-table-th" nowrap>勤務時間</th>
    <td class="mod-detail-table-td">
  <div class="float:left;">
    <?php print htmlspecialchars($rec['hours']); ?>
  </div>
    </td>
   </tr>
 <tr class="mod-detail-table-tr">
  <th class="mod-detail-table-th" nowrap>給与</th>
  <td class="mod-detail-table-td">
    <?php print htmlspecialchars($rec['allowance']); ?><br>
    <?php print htmlspecialchars($rec['money']); ?>
  </td>
 </tr>
 <tr class="mod-detail-table-tr">
    <th class="mod-detail-table-th" nowrap>職種</th>
    <td class="mod-detail-table-td">
      <?php print htmlspecialchars($rec['occupation']); ?>
    </td>
 </tr>
 <tr class="mod-detail-table-tr">
    <th class="mod-detail-table-th" nowrap>仕事内容</th>
    <td class="mod-detail-table-td">
      <?php print nl2br(htmlspecialchars($rec['description'])); ?>
    </td>
 </tr>

  </tbody>
    </table>
</div>
</div>
      </div>

 <!--応募資格-->

      <div class="area-box2-body2">
      <div class="mod-detail-head">
        <h4 class="mod-detail-head">
          <p>
            <a>応募資格</a>
          </p>
        </h4>
       </div>
       <div class="mod-detail-body">
       <div class="mod-detail-main">
        <table class="mod-detail-table">
        <tbody class="mod-detail-table-tbody">
         <tr class="mod-detail-table-tr">
          <th class="mod-detail-table-th-top" nowrap>開発環境</th>
          <td class="mod-detail-table-td-top">
            <?php print htmlspecialchars($rec['environment']); ?>
          </td>
         </tr>
         <tr class="mod-detail-table-tr">
          <th class="mod-detail-table-th" nowrap>必須スキル</th>
          <td class="mod-detail-table-td">
        <div class="float:left;">
          <?php print nl2br(htmlspecialchars($rec['required_skill'])); ?>
        </div>
          </td>
         </tr>
         <tr class="mod-detail-table-tr">
          <th class="mod-detail-table-th" nowrap>推奨スキル</th>
          <td class="mod-detail-table-td">
        <div class="float:left;">
          <?php print htmlspecialchars($rec['recommended_skill']); ?>
        </div>
          </td>
         </tr>
         </tbody>
           </table>
       </div>
       </div>
       </div>



      <div class="area-box2-foot">
        <div class="mod-buttons">
            <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" class="unit1-buttons">一覧へ戻る</a>
        </div>
      </div>
</div>
</div>



<?php

  $pdo = null;


} catch (Exception $e) {
  echo mb_convert_encoding($e->getMessage(),'UTF-8','SJIS-win');
  die();

}


 ?>


</div>

</div>
