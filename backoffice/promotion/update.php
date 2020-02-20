<?php
require '../backoffice/init.php';
if(isset($_POST['update'])){
	echo $id=$_POST['id'];
	echo $promotion_title_th=$_POST['promotion_title_th'];
	$promotion_title_en=$_POST['promotion_title_en'];
	echo $promotion_detail_th=$_POST['promotion_detail_th'];
	$promotion_detail_en=$_POST['promotion_detail_en'];
if($_FILES['promotion_img']['size']==""){
	$sql="UPDATE promotion
				SET promotion_title_th = '$promotion_title_th', promotion_title_en = '$promotion_title_en',
				promotion_detail_th= '$promotion_detail_th',promotion_detail_en= '$promotion_detail_en'
				WHERE promotion_id = $id";
	if(!mysql_query($sql)){
		mysql_error();
	}
	echo "no photo";
	header("location:../promotion.php?page=home&active=promotion");
}else {
	$sql="SELECT * FROM promotion WHERE promotion_id='$id'";
	$rs=mysql_fetch_array(mysql_query($sql));
	$file="../image/".$rs['promotion_img'];
	unlink($file);
	$promotion_file_name =rand(0,1000)."-".$_FILES['promotion_img']['name'];
	$promotion_file_tmp = $_FILES['promotion_img']['tmp_name'];

	$folder="../image/";
	$sql_check="SELECT promotion_img FROM promotion";
	$q_check=mysql_query($sql_check);
	while ($rs_check=mysql_fetch_array($q_check)) {
		if($rs_check['promotion_img']==$promotion_file_name){
			$promotion_file_name =rand(0,1000)."-".$_FILES['promotion_img']['name'];
			}
			}
			move_uploaded_file($promotion_file_tmp,$folder.$promotion_file_name) or die (mysql_error());
			$sql="UPDATE promotion
						SET promotion_title_th = '$promotion_title_th', promotion_title_en = '$promotion_title_en',
						promotion_detail_th= '$promotion_detail_th',promotion_detail_en= '$promotion_detail_en',
						promotion_img = '$promotion_file_name'
						WHERE promotion_id = $id";
			mysql_query($sql);
			header("location:../promotion.php?page=home&active=promotion");


}
}
?>
