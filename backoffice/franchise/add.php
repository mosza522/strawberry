<?php
require '../backoffice/init.php';
/* addfranchise*/
  if(isset($_POST['add'])){
  	$franchise_name_th=$_POST['franchise_name_th'];
    $franchise_name_en=$_POST['franchise_name_en'];
  	$franchise_detail_th=$_POST['franchise_detail_th'];
    $franchise_detail_en=$_POST['franchise_detail_en'];

  if(isset($_FILES['franchise_img'])){
  	$franchise_file_name =rand(0,1000)."-".$_FILES['franchise_img']['name'];
  	$franchise_file_tmp = $_FILES['franchise_img']['tmp_name'];
  }
  $folder="../image/";
  $sql="SELECT franchise_img FROM franchise";
  $q=mysql_query($sql);

  if(mysql_num_rows($q)>0){
  while($rs=mysql_fetch_array($q)){
  	if($rs['franchise_img']==$franchise_file_name){
  		$franchise_file_name =rand(0,1000)."-".$_FILES['franchise_img']['name'];

  	}

  }
  move_uploaded_file($franchise_file_tmp,$folder.$franchise_file_name) or die (mysql_error());
  $sql="INSERT INTO franchise VALUES('','$franchise_name_th','$franchise_name_en',
    '$franchise_detail_th','$franchise_detail_en','$franchise_file_name')";
  if(!mysql_query($sql)){
    echo mysql_error();
  }
  echo "second";
  header( "location:../franchise.php?page=home&active=franchise" );
  }
  else{
  	move_uploaded_file($franchise_file_tmp,$folder.$franchise_file_name) or die (mysql_error());
    $sql="INSERT INTO franchise VALUES('','$franchise_name_th','$franchise_name_en',
      '$franchise_detail_th','$franchise_detail_en','$franchise_file_name')";
      if(!mysql_query($sql)){
        echo mysql_error();
      }
      echo "first";
  	header( "location:../franchise.php?page=home&active=franchise" );

  }
  }

 ?>
