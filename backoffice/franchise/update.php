<?php
require '../backoffice/init.php';
if(isset($_POST['update'])){
	echo $id=$_POST['id'];
	echo $franchise_name_th=$_POST['franchise_name_th'];
	$franchise_name_en=$_POST['franchise_name_en'];
	echo $franchise_detail_th=$_POST['franchise_detail_th'];
	$franchise_detail_en=$_POST['franchise_detail_en'];
if($_FILES['franchise_img']['size']==""){
	$sql="UPDATE franchise
				SET franchise_name_th = '$franchise_name_th', franchise_name_en = '$franchise_name_en',
				franchise_detail_th= '$franchise_detail_th',franchise_detail_en= '$franchise_detail_en'
				WHERE franchise_id = $id";
	if(!mysql_query($sql)){
		mysql_error();
	}
	echo "no photo";
	header("location:../franchise.php?page=home&active=franchise");
}else {
	$sql="SELECT * FROM franchise WHERE franchise_id='$id'";
	$rs=mysql_fetch_array(mysql_query($sql));
	$file="../image/".$rs['franchise_img'];
	unlink($file);
	$franchise_file_name =rand(0,1000)."-".$_FILES['franchise_img']['name'];
	$franchise_file_tmp = $_FILES['franchise_img']['tmp_name'];

	$folder="../image/";
	$sql_check="SELECT franchise_img FROM franchise";
	$q_check=mysql_query($sql_check);
	while ($rs_check=mysql_fetch_array($q_check)) {
		if($rs_check['franchise_img']==$franchise_file_name){
			$franchise_file_name =rand(0,1000)."-".$_FILES['franchise_img']['name'];
			}

	}
	move_uploaded_file($franchise_file_tmp,$folder.$franchise_file_name) or die (mysql_error());
	$sql="UPDATE franchise
				SET franchise_name_th = '$franchise_name_th', franchise_name_en = '$franchise_name_en',
				franchise_detail_th= '$franchise_detail_th',franchise_detail_en= '$franchise_detail_en',
				franchise_img = '$franchise_file_name'
				WHERE franchise_id = $id";
	mysql_query($sql);
	header("location:../franchise.php?page=home&active=franchise");


}
}
?>
