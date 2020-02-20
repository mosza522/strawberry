<?php

require '../backoffice/init.php';
if(isset($_POST['banner_type'])){
	$banner_type=$_POST['banner_type'];
	$banner_name=$_POST['banner_name'];
	$banner_detail=$_POST['banner_detail'];

if(isset($_FILES['banner_file'])){
		$banner_file_name =rand(0,1000)."-".$_FILES['banner_file']['name'];
		$banner_file_tmp = $_FILES['banner_file']['tmp_name'];

}
$folder="../image/";
$sql="SELECT banner_file FROM banner";
$q=mysql_query($sql);


if(mysql_num_rows($q)>0){
while($rs=mysql_fetch_array($q)){
	if($rs['banner_file']==$banner_file_name){
		$banner_file_name =rand(0,1000)."-".$_FILES['banner_file']['name'];

	}
}
move_uploaded_file($banner_file_tmp,$folder.$banner_file_name) or die (mysql_error());
$sql="INSERT INTO banner(banner_type,banner_name,banner_file,banner_detail) VALUES('$banner_type','$banner_name','$banner_file_name','$banner_detail')";
if(!mysql_query($sql))echo mysql_error();
header( "location:../banner.php?page=home" );
}
else{
	move_uploaded_file($banner_file_tmp,$folder.$banner_file_name) or die (mysql_error());
	$sql="INSERT INTO banner(banner_type,banner_name,banner_file,banner_detail) VALUES('','$banner_type','$banner_name','$banner_file_name','$banner_detail')";
	mysql_query($sql);
	if(!mysql_query($sql))echo mysql_error();
	header( "location:../banner.php?page=home&active=banner" );

}
}
if(isset($_POST['banner_type_name_th'])){
	$sql="INSERT INTO banner_type(banner_type_name_th,banner_type_name_en)
	VALUES ('{$_POST['banner_type_name_th']}','{$_POST['banner_type_name_en']}')";
	if(!mysql_query($sql))echo mysql_error();
	header( "location:../banner.php?page=addbanner_type&active=banner" );
}

?>
