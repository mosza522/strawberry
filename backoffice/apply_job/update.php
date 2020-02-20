<?php
 require '../backoffice/init.php';

if(isset($_POST['id'])){
  $sql="UPDATE job_position SET job_position_name='{$_POST['job_position_name']}' ,
   job_position_detail='{$_POST['job_position_detail']}' WHERE job_position_id='{$_POST['id']}'";
   if(mysql_query($sql))header("location:../apply_job.php?page=job_position&active=apply_job");
   else echo mysql_error();
}


?>
