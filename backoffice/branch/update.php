<?php
require '../backoffice/init.php';
if(isset($_POST['update'])){
	$id=$_POST['id'];
	echo $branch_name_th=$_POST['branch_name_th'];
	echo $branch_name_en=$_POST['branch_name_en'];
	echo $branch_location=$_POST['branch_location'];
	echo $branch_region=$_POST['branch_region'];
	echo $branch_detail_th=$_POST['branch_detail_th'];
	echo $branch_detail_en=$_POST['branch_detail_en'];
if($_FILES['branch_img']['size']==""){
	$sql="UPDATE branch
				SET branch_name_th = '$branch_name_th', branch_name_en= '$branch_name_en', branch_location= '$branch_location'
				, branch_region = '$branch_region', branch_detail_th = '$branch_detail_th', branch_detail_en='$branch_detail_en'
				WHERE branch_id = $id";
	if(!mysql_query($sql)){
		mysql_error();
	}
	echo "no photo";
	header("location:../branch.php?page=home&active=branch");
}else {
	$sql="SELECT * FROM branch WHERE branch_id='$id'";
	$rs=mysql_fetch_array(mysql_query($sql));
	$file="../image/".$rs['branch_img'];
	unlink($file);
	$branch_file_name =rand(0,1000)."-".$_FILES['branch_img']['name'];
	$branch_file_tmp = $_FILES['branch_img']['tmp_name'];

	$folder="../image/";
	$sql_check="SELECT branch_img FROM branch";
	$q_check=mysql_query($sql_check);
	while ($rs_check=mysql_fetch_array($q_check)) {
		if($rs_check['branch_img']==$branch_file_name){
			$branch_file_name =rand(0,1000)."-".$_FILES['branch_img']['name'];
			}
		else{
			move_uploaded_file($branch_file_tmp,$folder.$branch_file_name) or die (mysql_error());
			$sql="UPDATE branch
						SET branch_name_th = '$branch_name_th', branch_name_en= '$branch_name_en', branch_location= '$branch_location'
						, branch_region = '$branch_region', branch_detail_th = '$branch_detail_th', branch_detail_en='$branch_detail_en'
						, branch_img = '$branch_file_name'
						WHERE branch_id = $id";
			mysql_query($sql);
			header("location:../branch.php?page=home&active=branch");
				}
	}



}
}
?>
