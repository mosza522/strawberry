<?php
require '../backoffice/init.php';
$sql_check="SELECT * FROM maps";
$q_check=mysql_query($sql_check);
$num=mysql_num_rows($q_check);
if($num>0){
  $sql="UPDATE maps SET map_title='{$_POST['map_title']}' , map_lat='{$_POST['map_lat']}', map_lng='{$_POST['map_lng']}'";
  mysql_query($sql);
}else{
  $sql="INSERT INTO maps VALUES ('','{$_POST['map_title']}','{$_POST['map_lat']}','{$_POST['map_lng']}')";
  mysql_query($sql);
}

header('Location: ../map.php?page=home&active=map');
 ?>
