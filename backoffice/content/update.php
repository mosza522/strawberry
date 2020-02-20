<?php
require '../backoffice/init.php';
	if(isset($_POST['banner_type'])){
		$banner_type=$_POST['banner_type'];
		$banner_name=$_POST['banner_name'];
		$banner_detail=$_POST['banner_detail'];
		$id=$_POST['id'];
	if($_FILES['banner_file']['size']==""){
		$sql="UPDATE banner
					SET banner_type = '$banner_type', banner_name= '$banner_name', banner_detail='$banner_detail'
					WHERE banner_id = $id";
		mysql_query($sql);
		header("location:../banner.php?page=home");
	}else {
		$sql="SELECT * FROM banner WHERE banner_id='$id'";
		$rs=mysql_fetch_array(mysql_query($sql));
		$file="../image/".$rs['banner_file'];
		unlink($file);
		$banner_file_name =rand(0,1000)."-".$_FILES['banner_file']['name'];
		$banner_file_tmp = $_FILES['banner_file']['tmp_name'];

		$folder="../image/";
		$sql_check="SELECT banner_file FROM banner";
		$q_check=mysql_query($sql_check);
		while ($rs_check=mysql_fetch_array($q_check)) {
			if($rs_check['banner_file']==$banner_file_name){
				$banner_file_name =rand(0,1000)."-".$_FILES['banner_file']['name'];
				}
			else{
				move_uploaded_file($banner_file_tmp,$folder.$banner_file_name) or die (mysql_error());
				$sql="UPDATE banner
							SET banner_type = '$banner_type', banner_name= '$banner_name', banner_detail='$banner_detail',
							banner_file='$banner_file_name'
							WHERE banner_id = $id";
			  mysql_query($sql);
				header("location:../banner.php?page=home");
					}
		}



	}
}
if(isset($_POST['id_content_page'])){
	echo $name_th=$_POST['content_page_name_th'];
	echo $name_en=$_POST['content_page_name_en'];
	echo $id=$_POST['id_content_page'];
	$sql="UPDATE content_page
	SET content_page_name_th = '$name_th', content_page_name_en = '$name_en'
	WHERE content_page_id= $id";
	mysql_query($sql);
	header("location:../content.php?page=home");

}


?>
