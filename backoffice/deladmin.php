<?php
	require 'backoffice/init.php';
	$row = $db->record(DB_PREFIX.'admin',array('admin_id' => $_GET['id']));

	$db->delete(DB_PREFIX.'admin',array('admin_id' => $_GET['id']));
	echo '<script>window.history.back();</script>';
?>	