<?php
require 'backoffice/init.php';
if (isset($_GET['id'])){
$id=$_GET['id'];

$sql_del="SELECT franchise_img FROM franchise WHERE franchise_id=$id";
 $rs=mysql_fetch_array(mysql_query($sql_del));
echo $rs['franchise_img'];
$file="image"."/".$rs['franchise_img'];
unlink($file);

$sql="DELETE FROM franchise WHERE franchise_id=$id";
mysql_query($sql);
header("location:franchise.php?page=home&active=franchise");
}

?>
