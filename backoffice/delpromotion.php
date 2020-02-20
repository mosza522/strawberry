<?php
require 'backoffice/init.php';
if (isset($_GET['id'])){
$id=$_GET['id'];

$sql_del="SELECT promotion_img FROM promotion WHERE promotion_id=$id";
 $rs=mysql_fetch_array(mysql_query($sql_del));
echo $rs['promotion_img'];
$file="image"."/".$rs['promotion_img'];
unlink($file);

$sql="DELETE FROM promotion WHERE promotion_id=$id";
mysql_query($sql);
header("location:promotion.php?page=home&active=promotion");
}

?>
