<?php
require '../backoffice/init.php';
if(isset($_POST['page_name'])){
	$sql="INSERT INTO page(page_name)
	VALUES ('{$_POST['page_name']}')";
	if(!mysql_query($sql))echo mysql_error();
	header( "location:../header_management.php?page=home_page" );
}
if(isset($_POST['page_id_title'])){
	$sql="INSERT INTO title(page_id,title)
	VALUES ('{$_POST['page_id_title']}','{$_POST['title']}')";
	if(!mysql_query($sql))echo mysql_error();
	header( "location:../header_management.php?page=home_title" );
}
if(isset($_POST['page_id_keywords'])){
	$sql="INSERT INTO keywords(page_id,keywords)
	VALUES ('{$_POST['page_id_keywords']}','{$_POST['keywords']}')";
	if(!mysql_query($sql))echo mysql_error();
	header( "location:../header_management.php?page=home_keywords" );
}
if(isset($_POST['page_id_description'])){
	$sql="INSERT INTO description(page_id,description)
	VALUES ('{$_POST['page_id_description']}','{$_POST['description']}')";
	if(!mysql_query($sql))echo mysql_error();
	header( "location:../header_management.php?page=home_description" );
}
?>
