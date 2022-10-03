<?php
function search_sql_maker(array $conditions=array(),$purpose)
{
  switch($purpose)
  {
  case 'all':   $sql="SELECT * FROM work_locations
                INNER JOIN work_informations ON work_locations.id = work_informations.id
                LEFT JOIN work_occupations ON work_locations.id = work_occupations.id
                LEFT JOIN work_pages ON work_locations.id = work_pages.id
  				    	WHERE 1 ";
                break;
  case 'keep':  $sql="SELECT * FROM gu_user_keep
                INNER JOIN work_locations ON work_locations.id = gu_user_keep.job_id
                LEFT JOIN work_informations ON work_locations.id = work_informations.id
                LEFT JOIN work_occupations ON work_locations.id = work_occupations.id
                LEFT JOIN work_pages ON work_locations.id = work_pages.id
  				    	WHERE gu_user_keep.user_name =  ";
                $sql .="\"".$_SESSION['username']."\"";
                break;
  case 'history':$sql="SELECT * FROM gu_user_search_history
                INNER JOIN work_locations ON work_locations.id = gu_user_search_history.job_id
                LEFT JOIN work_informations ON work_locations.id = work_informations.id
                LEFT JOIN work_occupations ON work_locations.id = work_occupations.id
                LEFT JOIN work_pages ON work_locations.id = work_pages.id
  				    	WHERE gu_user_search_history.user_name =  ";
                $sql .="\"".$_SESSION['username']."\"";
                break;
  }
  foreach($conditions as $key=>$condition)
  {
    if($condition=='null')
    {
      continue;
    }
    else
    {
      switch($key)
      {
      case 'prefectures': $sql .=" and work_locations.prefectures = \"".$condition."\"";
                          break;
      case 'occupation':  $sql .=" and (";
			                    $orTaker=1;
			                    foreach($condition as $key2)
                          {
														if($orTaker==1)
														{
															$sql .=" work_occupations.occupation = \"".$key2."\"";
															$orTaker=2;
														}
														else
														{
															$sql .=" or work_occupations.occupation = \"".$key2."\"";
														}
													}
													$sql .=") ";
                          break;
			case 'type':        $sql .=" and (";
			                    $orTaker=1;
				                  foreach($condition as $key2)
												  {
														if($orTaker==1)
														{
															$sql .=" work_informations.type like '%".$key2."%' ";
															$orTaker=2;
														}
														else
														{
															$sql .=" or work_informations.type like '%".$key2."%' ";
														}
													}
													$sql .=") ";
												  break;
			//case 'money_min':   $sql .=" and work_pages.title like '%".$condition."%'";
										      //break;
			//case 'money_max':   $sql .=" and work_pages.title like '%".$condition."%'";
										      //break;
			case 'update':      $sql .=" and work_pages.updated_at > ".date("YmdHis",strtotime("-$condition day"));
							    		    break;
      case 'keyword':     $sql .=" and (work_pages.title like '%".$condition."%'".
                                 " or work_pages.remarks like '%".$condition."%'".
                                 " or work_occupations.occupation like '%".$condition."%'".
                                 " or work_occupations.description like '%".$condition."%'".
                                 " or work_occupations.environment like '%".$condition."%'".
                                 " or work_occupations.required_skill like '%".$condition."%'".
                                 " or work_occupations.recommended_skill like '%".$condition."%'".
                                 " or work_locations.prefectures like '%".$condition."%'".
                                 " or work_locations.district like '%".$condition."%'".
                                 " or work_locations.location like '%".$condition."%'".
                                 " or work_informations.period like '%".$condition."%'".
                                 " or work_informations.allowance like '%".$condition."%'".
                                 " or work_informations.money like '%".$condition."%'".
                                 " or work_informations.type like '%".$condition."%'".
                                 ") ";
										      break;
      }
    }
  }
  $sql .=" order by work_pages.updated_at desc;";
  return $sql;
}

function search_conditions_printer(array $conditions =array())
{
  $has_no_condition = true;
  echo '<table id="search_conditions">';
  echo '<tr>';
  echo '<th colspan="2">今の検索条件</th>';
  echo '</tr>';
	foreach($conditions as $key => $condition)
	{
		if($condition=="null")
		{
			continue;
		}
		else
		{
      $has_no_condition = false;
			switch($key)
			{
			case 'prefectures': echo '<tr>';
                          echo '<th>エリア</th>';
                          echo '<td>',$condition,'</td>';
                          echo '</tr>';
			                    break;
			case 'occupation':  echo '<tr>';
                          echo '<th>職種</th>';
                          echo '<td>';
			                    foreach($condition as $key2)
													{
														if($key2=="null")
														continue;
														echo $key2,' ';
													}
													echo '</td>';
                          echo '</tr>';
													break;
			case 'type':        echo '<tr>';
                          echo '<th>雇用形態</th>';
                          echo '<td>';
			                    foreach($condition as $key2)
		                    	{
			                    	echo $key2,' ';
			                    }
													echo '</td>';
                          echo '</tr>';
													break;
			//case 'money_min':   echo '<p style="font-weight:bold">最低月給 : ',$condition,'</p>';
			                    //break;
			//case 'money_max':   echo '<p style="font-weight:bold">最大月給 : ',$condition,'</p>';
			                    //break;
			case 'update':      echo '<tr>';
                          echo '<th>更新日</th>';
                          echo '<td>',$condition,'日以前</td>';
                          echo '</tr>';
			                    break;
			case 'keyword':     echo '<tr>';
                          echo '<th>フリーワード</th>';
                          echo '<td>',$condition,'</td>';
                          echo '</tr>';
			                    break;
			}
		}
	}
  if($has_no_condition)
  {
    echo '<tr>';
    echo '<td colspan="2">設定した検索条件がありません。</td>';
    echo '</tr>';
  }
  echo '</table>';
}

function search_engineer_printer(array $conditions =array())
{
  $has_no_condition = true;
  $totalLan = "";
  
  echo '<table id="search_conditions">';
  echo '<tr>';
  echo '<th colspan="2">今の検索条件</th>';
  echo '</tr>';
  
  foreach($conditions as $obj){
	if($condition=="null")
	{
		continue;
	}
	else
	{
		$has_no_condition = false;
		
		$totalLan .= $obj . " ";
	}
  }

  if($has_no_condition)
  {
    echo '<tr>';
    echo '<td colspan="2">設定した検索条件がありません。</td>';
    echo '</tr>';
  }
  else{
	  echo '<tr>';
      echo '<th>言語・技術</th>';
      echo '<td>',$totalLan,'</td>';
      echo '</tr>';
  }
  echo '</table>';
}

//初期化
if(isset($_GET['prefectures'])){
$prefectures = $_GET['prefectures'];
}
else {
	$prefectures='null';
}
//職種
if(isset($_GET['occupation'])){
	if(is_array($_GET['occupation']))
	{
		$occupation=array();
		foreach($_GET['occupation'] as $value)
		{
			if(!isset($value))
			{
				continue;
			}
			else
			{
				array_push($occupation,$value);
			}
		}
	}
	else
	{
		if($_GET['occupation']=="null")
		{
			$occupation='null';
		}
		else
		{
			$occupation=array();
			array_push($occupation,$_GET['occupation']);
		}
	}
}
else {
	$occupation='null';
}
//雇用形態
if(isset($_GET['type'])){
	$type=array();
	foreach($_GET['type'] as $value)
	{
		if(!isset($value))
			continue;
		else
		{
			array_push($type,$value);
		}
	}
}
else {
	$type='null';
}
//最低給与
/*if(isset($_GET['money_min'])){
$money_min = $_GET['money_min'];
}
else {
	$money_min='null';
}
//最高給与
if(isset($_GET['money_max'])){
$money_max = $_GET['money_max'];
}
else {
	$money_max='null';
}*/
//更新日
if(isset($_GET['update'])){
$update = $_GET['update'];
}
else {
	$update='null';
}
//フリーワード
if(isset($_GET['keyword']) && preg_match('/(?=.*[a-zA-Z0-9あ-ん])/',htmlspecialchars($_GET['keyword'])))
{
  if(preg_match('/(?=.*[!#$%^&*()?+=\/<>])/',htmlspecialchars($_GET['keyword'])))//特殊文字が含まれているのはエラー
    {
      echo '<script>';
      echo 'alert("特殊文字は検索できません。");';
      echo 'history.back();';
      echo '</script>';
    }
  else
    $keyword = htmlspecialchars($_GET['keyword']);
}
else
{
	$keyword='null';
}

?>
