<?php
	require '../backoffice/init.php';
	
	$data = array(
		"news_sort"				=>$_POST["sort"]
	);
	$db->update(DB_PREFIX.'news', $data,array('news_id' => $_POST['id']));
	echo '<script>parent.settext()</script>';
?>