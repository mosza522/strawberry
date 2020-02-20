<?php
require '../backoffice/init.php';
/* addbranch*/
echo $_POST['add'];
  if(isset($_POST['add'])){
  	$branch_name_th=$_POST['branch_name_th'];
    $branch_name_en=$_POST['branch_name_en'];
    $branch_location=$_POST['branch_location'];
    $branch_region=$_POST['branch_region'];
  	$branch_detail_th=$_POST['branch_detail_th'];
    $branch_detail_en=$_POST['branch_detail_en'];

  if(isset($_FILES['branch_img'])){
  	$branch_file_name =rand(0,1000)."-".$_FILES['branch_img']['name'];
  	$branch_file_tmp = $_FILES['branch_img']['tmp_name'];
  }
  $folder="../image/";
  $sql="SELECT branch_img FROM branch";
  $q=mysql_query($sql);

  if(mysql_num_rows($q)>0){
  while($rs=mysql_fetch_array($q)){
  	if($rs['branch_img']==$branch_file_name){
  		$branch_file_name =rand(0,1000)."-".$_FILES['branch_img']['name'];

  	}
  	else{
  		move_uploaded_file($branch_file_tmp,$folder.$branch_file_name) or die (mysql_error());
  		$sql="INSERT INTO branch VALUES('','$branch_name_th','$branch_name_en','$branch_location',
      '$branch_region','$branch_detail_th','$branch_detail_en','$branch_file_name')";
  		if(!mysql_query($sql)){
        echo mysql_error();
      }
      echo "second";
  		header( "location:../branch.php?page=home&active=branch" );

  	}
  }
  }
  else{
    move_uploaded_file($branch_file_tmp,$folder.$branch_file_name) or die (mysql_error());
    $sql="INSERT INTO branch VALUES('','$branch_name_th','$branch_name_en','$branch_location',
    '$branch_region','$branch_detail_th','$branch_detail_en','$branch_file_name')";
    if(!mysql_query($sql)){
      echo mysql_error();
    }
      echo "first";
  	header( "location:../branch.php?page=home&active=branch" );

  }
  }

 ?>
