<?php
require '../backoffice/init.php';
//activity tag
if(isset($_POST['id_activity_tag'])){
	$activity_tag_name_th=$_POST['activity_tag_name_th'];
	$activity_tag_name_en=$_POST['activity_tag_name_en'];
	$sql="UPDATE activity_tag
	SET activity_tag_name_th = '$activity_tag_name_th', activity_tag_name_en = '$activity_tag_name_en'
	WHERE activity_tag_id= {$_POST['id_activity_tag']}";
	mysql_query($sql);
	header("location:../activity.php?page=home_tag");
}
//activity
if(isset($_POST['update_activity_id'])){
	$activity_topic=$_POST['activity_topic'];
	$activity_title=$_POST['activity_title'];
	$activity_tag=$_POST['activity_tag'];
	$activity_detail=$_POST['activity_detail'];
	$id=$_POST['update_activity_id'];
	if($_FILES['activity_img_cover']['size']==0){
		$sql="UPDATE activity
					SET activity_topic = '$activity_topic', activity_title= '$activity_title', activity_tag='$activity_tag',
					activity_detail = '$activity_detail'
					WHERE activity_id = $id";
		if(!mysql_query($sql))echo mysql_error();
		header("location:../activity.php?page=home");
	}
	else{
	$sql="SELECT activity_img_cover FROM activity WHERE activity_id='{$id}'";
	$rs=mysql_fetch_array(mysql_query($sql));
	$file="../image/".$rs['activity_img_cover'];
	unlink($file);
	$activity_file_name =rand(0,1000)."-".$_FILES['activity_img_cover']['name'];
	$activity_file_tmp = $_FILES['activity_img_cover']['tmp_name'];

	$folder="../image/";
	$sql_check="SELECT activity_img_cover FROM activity";
	$q_check=mysql_query($sql_check);
	while ($rs_check=mysql_fetch_array($q_check)) {
		if($rs_check['activity_img_cover']==$activity_file_name){
			$activity_file_name =rand(0,1000)."-".$_FILES['activity_img_cover']['name'];
			}
		else{
			move_uploaded_file($activity_file_tmp,$folder.$activity_file_name) or die (mysql_error());
			$sql="UPDATE activity
						SET activity_topic = '$activity_topic', activity_title= '$activity_title', activity_tag='$activity_tag',
						activity_detail = '$activity_detail', activity_img_cover = '$activity_file_name'
						WHERE activity_id = $id";
			if(!mysql_query($sql))echo mysql_error();
			header("location:../activity.php?page=home");
				}
	}
}
}

?>
