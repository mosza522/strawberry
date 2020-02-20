<?php
require '../backoffice/init.php';
if (isset($_POST['product_category_name_th'])) {
  if(isset($_FILES['product_category_img'])){
    $product_file_name =rand(0,1000)."-".$_FILES['product_category_img']['name'];
    $product_file_tmp = $_FILES['product_category_img']['tmp_name'];
  }
  $folder="../image/";
  $sql="SELECT product_category_img FROM product_category";
  $q=mysql_query($sql);

  if(mysql_num_rows($q)>0){
  while($rs=mysql_fetch_array($q)){
    if($rs['product_category_img']==$product_file_name){
      $product_file_name =rand(0,1000)."-".$_FILES['product_category_img']['name'];
    }
    }
    move_uploaded_file($product_file_tmp,$folder.$product_file_name) or die (mysql_error());
    $sql="INSERT INTO
    product_category(product_category_name_th,product_category_name_en,product_category_img)
    VALUES('{$_POST['product_category_name_th']}','{$_POST['product_category_name_en']}'
      ,'{$product_file_name}')";
    if(!mysql_query($sql)){
      echo mysql_error();
    }
    header( "location:../product.php?page=addproduct_category&active=product" );
  }
  else{
  	move_uploaded_file($product_file_tmp,$folder.$product_file_name) or die (mysql_error());
    $sql="INSERT INTO
    product_category(product_category_name_th,product_category_name_en,product_category_img)
    VALUES('{$_POST['product_category_name_th']}','{$_POST['product_category_name_en']}'
      ,'{$product_file_name}')";
      if(!mysql_query($sql)){
        echo mysql_error();
      }
  	header( "location:../product.php?page=addproduct_category&active=product" );

  }
  }

/* addproduct*/
  if(isset($_POST['add'])){
  	$product_type=$_POST['product_category'];
  	$product_name=$_POST['product_name'];
  	$product_price_retail=$_POST['product_price_retail'];
    $product_price_dozen=$_POST['product_price_dozen'];
    $id_product=$_POST['id_product'];
  if(isset($_FILES['product_file'])){
  	$product_file_name =rand(0,1000)."-".$_FILES['product_file']['name'];
  	$product_file_tmp = $_FILES['product_file']['tmp_name'];
  }
  $folder="../image/";
  $sql="SELECT product_img FROM product";
  $q=mysql_query($sql);

  if(mysql_num_rows($q)>0){
  while($rs=mysql_fetch_array($q)){
  	if($rs['product_img']==$product_file_name){
  		$product_file_name =rand(0,1000)."-".$_FILES['product_file']['name'];
    }
  	}
    move_uploaded_file($product_file_tmp,$folder.$product_file_name) or die (mysql_error());
    $sql="INSERT INTO product VALUES('','$product_type','$product_name','$product_price_retail'
      ,'$product_price_dozen','{$_POST['product_price_crate']}','$product_file_name','$id_product','')";
    if(!mysql_query($sql)){
      echo mysql_error();
    }
    header( "location:../product.php?page=home&active=product" );
  }
  else{
  	move_uploaded_file($product_file_tmp,$folder.$product_file_name) or die (mysql_error());
    $sql="INSERT INTO product VALUES('','$product_type','$product_name','$product_price_retail'
      ,'$product_price_dozen','{$_POST['product_price_crate']}','$product_file_name','$id_product','')";
      if(!mysql_query($sql)){
        echo mysql_error();
      }
  	header( "location:../product.php?page=home&active=product" );

  }
  }

 ?>
