<?php
require '../backoffice/init.php';
$sql="INSERT INTO job_position VALUES('','{$_POST['job_position_name']}','{$_POST['job_position_detail']}')";
if(mysql_query($sql))echo "Ok"; else echo mysql_error();
header("Location:../apply_job.php?page=job_position&active=apply_job");
 ?>
