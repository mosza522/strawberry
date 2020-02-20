<?php
require '../backoffice/init.php';
if(isset($_POST['id_menu'])){
	$menu_name_th=$_POST['menu_name_th'];
	$menu_name_en=$_POST['menu_name_en'];
	$menu_link=$_POST['menu_link'];
	$sql="UPDATE menu
	SET menu_name_th = '$menu_name_th', menu_name_en = '$menu_name_en', menu_link = '$menu_link'
	WHERE menu_id= {$_POST['id_menu']}";
	mysql_query($sql);
	header("location:../menu_management.php?page=home");
}
if(isset($_POST['menu_child'])){

	$menu_id=$_POST['menu_id'];
	$menu_child_name_th=$_POST['menu_child_name_th'];
	$menu_child_name_en=$_POST['menu_child_name_en'];
	$menu_child_link=$_POST['menu_child_link'];
	$sql="UPDATE menu_child
	SET menu_id = '$menu_id', menu_child_name_th = '$menu_child_name_th',
	menu_child_name_en = '$menu_child_name_en', menu_child_link = '$menu_child_link'
	WHERE menu_child_id= {$_POST['menu_child_id']}";
	mysql_query($sql);
	header("location:../menu_management.php?page=home_child_menu");
}

?>
