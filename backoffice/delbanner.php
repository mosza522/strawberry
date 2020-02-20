<?php
require 'backoffice/init.php';
if (isset($_GET['id'])){
$id=$_GET['id'];

$sql_del="SELECT banner_file FROM banner WHERE banner_id=$id";
 $rs=mysql_fetch_array(mysql_query($sql_del));
echo $rs['banner_file'];
$file="image"."/".$rs['banner_file'];
unlink($file);

$sql="DELETE FROM banner WHERE banner_id=$id";
mysql_query($sql);
header("location:banner.php?page=home&active=banner");
}
if(isset($_GET['id_type'])){
  $sql="DELETE FROM banner_type WHERE banner_type_id='{$_GET['id_type']}'";
  mysql_query($sql);
  header("location:banner.php?page=addbanner_type&active=banner");
}
?>
