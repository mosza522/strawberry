<?php
require 'backoffice/init.php';
if (isset($_GET['id'])){
$id=$_GET['id'];

$sql_del="SELECT picture,transcript FROM job WHERE job_id=$id";
 $rs=mysql_fetch_array(mysql_query($sql_del));

$file="job"."/".$rs['picture'];
unlink($file);
$file="job"."/".$rs['transcript'];
unlink($file);

$sql="DELETE FROM job WHERE job_id=$id";
mysql_query($sql);
header("location:apply_job.php?page=home&active=apply_job");
}
if(isset($_GET['job_position_id'])){
  $sql="DELETE FROM job_position WHERE job_position_id={$_GET['job_position_id']}";
  mysql_query($sql);
header("location:apply_job.php?page=job_position&active=apply_job");
}
?>
