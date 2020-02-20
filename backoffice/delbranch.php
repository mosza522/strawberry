<?php
require 'backoffice/init.php';
if (isset($_GET['id'])){
$id=$_GET['id'];

$sql_del="SELECT branch_img FROM branch WHERE branch_id=$id";
 $rs=mysql_fetch_array(mysql_query($sql_del));
echo $rs['branch_img'];
$file="image"."/".$rs['branch_img'];
unlink($file);

$sql="DELETE FROM branch WHERE branch_id=$id";
mysql_query($sql);
header("location:branch.php?page=home&active=branch");
}

?>
