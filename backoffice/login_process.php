<?php
 require_once 'backoffice/init.php';

  $user = trim($_POST['username']);
  $user_password = trim($_POST['password']);
  $password = md5($user_password);

    $sql 	= "Select * from tb_admin where admin_username = '".$user."' and admin_password = '".$password."' limit 1";
	$res 	= mysql_query($sql) or die("Error Select");
	$data 	= mysql_fetch_array($res);
	$numrow = mysql_num_rows($res);
	$date = date('Y-m-d H:i:s');
   if($numrow != 0)
	{
		$_SESSION['user']		=$data["admin_fullname"];
		$_SESSION['userid']		=$data['admin_id'];
		$_SESSION['permission']	=$data["admin_permission"];

		$sql_up = "update tb_admin set admin_lastlogin = '".$date."' where admin_id = '".$data['admin_id']."'";
		$res_up = mysql_query($sql_up) or die("Error Update");
		echo "1";
	}
	else
	{
        echo "0";
    }


?>
