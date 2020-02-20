<?php
require '../backoffice/init.php';
/* addpromotion*/
  if(isset($_POST['add'])){
  	$promotion_title_th=$_POST['promotion_title_th'];
    $promotion_title_en=$_POST['promotion_title_en'];
  	$promotion_detail_th=$_POST['promotion_detail_th'];
    $promotion_detail_en=$_POST['promotion_detail_en'];

  if(isset($_FILES['promotion_img'])){
  	$promotion_file_name =rand(0,1000)."-".$_FILES['promotion_img']['name'];
  	$promotion_file_tmp = $_FILES['promotion_img']['tmp_name'];
  }
  $folder="../image/";
  $sql="SELECT promotion_img FROM promotion";
  $q=mysql_query($sql);

  if(mysql_num_rows($q)>0){
  while($rs=mysql_fetch_array($q)){
  	if($rs['promotion_img']==$promotion_file_name){
  		$promotion_file_name =rand(0,1000)."-".$_FILES['promotion_img']['name'];

  	}

  }
  move_uploaded_file($promotion_file_tmp,$folder.$promotion_file_name) or die (mysql_error());
  $sql="INSERT INTO promotion VALUES('','$promotion_title_th','$promotion_title_en',
    '$promotion_detail_th','$promotion_detail_en','$promotion_file_name')";
  if(!mysql_query($sql)){
    echo mysql_error();
  }
  echo "second";
  header( "location:../promotion.php?page=home&active=promotion" );
  }
  else{
  	move_uploaded_file($promotion_file_tmp,$folder.$promotion_file_name) or die (mysql_error());
    $sql="INSERT INTO promotion VALUES('','$promotion_title_th','$promotion_title_en',
      '$promotion_detail_th','$promotion_detail_en','$promotion_file_name')";
      if(!mysql_query($sql)){
        echo mysql_error();
      }
      echo "first";
  	header( "location:../promotion.php?page=home&active=promotion" );

  }
  }

 ?>
