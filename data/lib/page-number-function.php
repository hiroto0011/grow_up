<?php
function page_number_printer($num,$whole,$now)//何個ずつ/全体数/現在位置
{
  if($whole==0)
  return;
  if($whole%$num == 0)
  $page_last=$whole/$num;
  else
  $page_last=(int)(($whole/$num)+1);
  echo '<table id="page_number_table">';
  echo '<tr>';
  echo '<td style="width:185px;">';
  echo '<table>';
  echo '<tr">';
  if($now<4)
  {
    for($i=1;$i<$now;$i++)
    {
      echo '<form action="" method="post">';
      echo '<td>';
      echo '<input type="hidden" name="data_ryou" value="',$num,'">';
      echo '<input type="hidden" name="page_number" value="',$i,'">';
      echo '<button>';
      echo $i;
      echo '</button>';
      echo '</td>';
      echo '</form>';
      echo '<td>/</td>';
    }
  }
  else
  {
    echo '<form action="" method="post">';
    echo '<td>';
    echo '<input type="hidden" name="data_ryou" value="',$num,'">';
    echo '<input type="hidden" name="page_number" value="1">';
    echo '<button>';
    echo '1';
    echo '</button>';
    echo '</td>';
    echo '</form>';

    echo '<td>/</td>';
    echo '<td>...</td>';
    echo '<td>/</td>';

    for($i=$now-2;$i<$now;$i++)
    {
      echo '<form action="" method="post">';
      echo '<td>';
      echo '<input type="hidden" name="data_ryou" value="',$num,'">';
      echo '<input type="hidden" name="page_number" value="',$i,'">';
      echo '<button>';
      echo $i;
      echo '</button>';
      echo '</td>';
      echo '</form>';
      echo '<td>/</td>';
    }
  }

  echo '<td style="font-weight:bold;font-size:15px">',$now,'</td>';

  if($now+2>=$page_last)
  {
    for($i=$now+1;$i<=$page_last;$i++)
    {
      echo '<td>/</td>';
      echo '<form action="" method="post">';
      echo '<td>';
      echo '<input type="hidden" name="data_ryou" value="',$num,'">';
      echo '<input type="hidden" name="page_number" value="',$i,'">';
      echo '<button>';
      echo $i;
      echo '</button>';
      echo '</td>';
      echo '</form>';
    }
  }
  else
  {
    for($i=$now+1;$i<=$now+2;$i++)
    {
      echo '<td>/</td>';
      echo '<form action="" method="post">';
      echo '<td>';
      echo '<input type="hidden" name="data_ryou" value="',$num,'">';
      echo '<input type="hidden" name="page_number" value="',$i,'">';
      echo '<button>';
      echo $i;
      echo '</button>';
      echo '</td>';
      echo '</form>';
    }
    echo '<td>/</td>';
    echo '<td>...</td>';
    echo '<td>/</td>';

    echo '<form action="" method="post">';
    echo '<td>';
    echo '<input type="hidden" name="data_ryou" value="',$num,'">';
    echo '<input type="hidden" name="page_number" value="',$page_last,'">';
    echo '<button>';
    echo $page_last;
    echo '</button>';
    echo '</td>';
    echo '</form>';
  }
  echo '</tr>';
  echo '</table>';
  echo '</td>';

  echo '<td style="">&nbsp Page No</td>';
  echo '<form action="" method="post">';
  echo '<input type="hidden" name="data_ryou" value="',$num,'">';
  echo '<td>';
  echo '<select name="page_number" style="width:40px;height:16px;">';
  for($i=1;$i<=$page_last;$i++)
  {
    echo '<option value="',$i,'">';
    echo $i;
    echo '</option>';
  }
  echo '</select>';
  echo '</td>';
  echo '<td><input type="submit" value="移動"></td>';
  echo '</form>';


  echo '<form action="" method="post">';
  echo '<td style="padding-left:30px;">';
  echo '<select name="data_ryou" style="width:50px;height:16px;">';
    echo '<option value="3">';
    echo '3個';
    echo '</option>';
    echo '<option value="5">';
    echo '5個';
    echo '</option>';
    echo '<option value="10">';
    echo '10個';
    echo '</option>';
    echo '<option value="20">';
    echo '20個';
    echo '</option>';
  echo '</select>';
  echo '</td>';
  echo '<td><input type="submit" value="ずつ見る"></td>';
  echo '</form>';


  echo '</tr>';
  echo '</table>';
}
 ?>
