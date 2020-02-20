<?php
	require 'backoffice/init.php';
	$sql="DELETE FROM user WHERE user_id={$_GET['id']}";
	if(mysql_query($sql)){
		header( "location:user.php?page=home&active=user" );
	}else{
		mysql_error();
	}

?>
