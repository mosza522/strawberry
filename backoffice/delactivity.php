<?php
require 'backoffice/init.php';
if (isset($_GET['id_tag'])){

$sql="DELETE FROM activity_tag WHERE activity_tag_id={$_GET['id_tag']}";
mysql_query($sql);
header("location:activity.php?page=home_tag");
}
if (isset($_GET['id_activity'])){

$sql_del="SELECT activity_img_cover FROM activity WHERE activity_id={$_GET['id_activity']}";
 $rs=mysql_fetch_array(mysql_query($sql_del));
echo $rs['activity_img_cover'];
$file="image"."/".$rs['activity_img_cover'];
unlink($file);

$sql="DELETE FROM activity WHERE activity_id={$_GET['id_activity']}";
mysql_query($sql);
header("location:activity.php?page=home");
}
if(isset($_GET['id_activity_photo'])){
  $sql_del="SELECT * FROM activity_img WHERE activity_img_id={$_GET['id_activity_photo']}";
   $rs=mysql_fetch_array(mysql_query($sql_del));
  echo $rs['activity_img_name'];
  $file="photo_activity"."/".$rs['activity_img_name'];
  unlink($file);

  $sql="DELETE FROM activity_img WHERE activity_img_id={$_GET['id_activity_photo']}";
  mysql_query($sql);
  header("location:activity.php?page=edit_activity_album&id={$rs['activity_id']}");

}
if(isset($_GET['id_activity_album'])){
  $sql_del="SELECT activity_img_name FROM activity_img WHERE activity_id={$_GET['id_activity_album']}";
  $q=mysql_query($sql_del);
  while ($rs=mysql_fetch_array($q)) {
    $file="photo_activity"."/".$rs['activity_img_name'];
    unlink($file);
   }
  $sql="DELETE FROM activity_img WHERE activity_id={$_GET['id_activity_album']}";
  mysql_query($sql);
  header("location:activity.php?page=home_album");

}
?>
