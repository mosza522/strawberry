<?php
require '../backoffice/init.php';
if(isset($_POST['id_user'])){
	$pass=md5($_POST['user_password']);
	$sql="UPDATE user
				SET user_fullname = '{$_POST['user_fullname']}', 	user_username = '{$_POST['user_username']}',
				user_password= '$pass',user_password_origin = '{$_POST['user_password']}', user_branch= '{$_POST['user_branch']}'
				, user_tell= '{$_POST['user_tell']}', user_email= '{$_POST['user_email']}'
				WHERE user_id = {$_POST['id_user']}";
	if(!mysql_query($sql)){
		mysql_error();
	}else{
		header("location:../user.php?page=home&active=user");
	}
}
?>
