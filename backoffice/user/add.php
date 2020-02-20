<?php
	require '../backoffice/init.php';
	date_default_timezone_set("Asia/Bangkok");
	if(isset($_POST['user_fullname'])){
		$password = md5($_POST['user_password']);
		$date=date('Y-m-d H:i:s');
		$sql="INSERT INTO user
		VALUES('','{$_POST['user_fullname']}','{$_POST['user_username']}','{$password}',
			'{$_POST['user_password']}','{$_POST['user_branch']}','{$_POST['user_email']}',
			'{$_POST['user_tell']}','{$date}')
		";
		if(!mysql_query($sql)){
			mysql_error();
		}else{
			header( "location:../user.php?page=home&active=user" );
		}
}
 ?>
