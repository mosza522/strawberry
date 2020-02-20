<?php
require '../backoffice/init.php';
	if(isset($_POST['id_page'])){
		$sql="UPDATE page
					SET page_name = '{$_POST['page_name']}'
					WHERE page_id = '{$_POST['id_page']}'";
		mysql_query($sql);
		header("location:../header_management.php?page=home_page");

}
if(isset($_POST['id_title'])){
	$sql="UPDATE title
				SET page_id = '{$_POST['page_id_title']}', title = '{$_POST['title']}'
				WHERE title_id = '{$_POST['id_title']}'";
	mysql_query($sql);
	header("location:../header_management.php?page=home_title");

}
if(isset($_POST['id_keywords'])){
	$sql="UPDATE keywords
				SET page_id = '{$_POST['page_id_keywords']}', keywords = '{$_POST['keywords']}'
				WHERE keywords_id = '{$_POST['id_keywords']}'";
	mysql_query($sql);
	header("location:../header_management.php?page=home_keywords");

}
if(isset($_POST['id_description'])){
	$sql="UPDATE description
				SET page_id = '{$_POST['page_id_description']}', description = '{$_POST['description']}'
				WHERE description_id = '{$_POST['id_description']}'";
	mysql_query($sql);
	header("location:../header_management.php?page=home_description");

}


?>
