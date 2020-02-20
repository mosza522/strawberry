<?php
	include 'class.upload.php';
	require '../backoffice/init.php';
	
	$user_password = trim($_POST['password']);
	$conpassword = trim($_POST['conpassword']);
	$password = md5($user_password);
	
	//$admin_fullname = "Administrator";
	//$admin_permission = "superadmin";
	$admin_status	= "Y";
	
	$data = array(
			
				"admin_username"		=>$_POST["username"],
				"admin_password"		=>$password,
				"admin_password_origin"	=>$conpassword,
				"admin_fullname"		=>$_POST["admin_fullname"],
				"admin_permission"		=>$_POST["permission"],
				"admin_status"			=>$admin_status,
				"admin_create"			=>date('Y-m-d H:i:s')
				
			);
	$db->update(DB_PREFIX.'admin', $data,array('admin_id' => $_POST['id']));
	echo '<script>parent.settext()</script>';
?>