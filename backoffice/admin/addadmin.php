<?php
	include 'class.upload.php';
	require '../backoffice/init.php';

	$user_password = trim($_POST['password']);
	$password = md5($user_password);
	//$admin_fullname = "Administrator";
	//$admin_permission = "superadmin";
	$admin_status	= "Y";
	
	$data = array(
			
				"admin_username"		=>$_POST["username"],
				"admin_password"		=>$password,
				"admin_password_origin"	=>$_POST['password'],
				"admin_fullname"		=>$_POST["admin_fullname"],
				"admin_permission"		=>$_POST["permission"],
				"admin_status"			=>$admin_status,
				"admin_create"			=>date('Y-m-d H:i:s')
				
			);
	$db->insert(DB_PREFIX.'admin', $data);
	echo '<script>parent.settext()</script>';
?>