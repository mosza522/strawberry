<?php
	require '../backoffice/init.php';
	
	$data = array(
		"banner_sort"				=>$_POST["sort"]
	);
	$db->update(DB_PREFIX.'banner', $data,array('banner_id' => $_POST['id']));
	echo '<script>parent.settext()</script>';
?>