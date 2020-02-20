<?php
require '../backoffice/init.php';
if(isset($_POST['id_type'])){
	$name_th=$_POST['product_category_name_th'];
	$name_en=$_POST['product_category_name_en'];
	$id=$_POST['id_type'];
	if($_FILES['product_category_img']['size']==""){
		$sql="UPDATE product_category
		SET product_category_name_th = '$name_th', product_category_name_en = '$name_en'
		WHERE product_category_id= $id";
		mysql_query($sql);
		header("location:../product.php?page=addproduct_category&active=product");
	}else {
		$sql="SELECT * FROM product_category WHERE product_category_id='$id'";
		$rs=mysql_fetch_array(mysql_query($sql));
		$file="../image/".$rs['product_category_img'];
		unlink($file);
		$product_file_name =rand(0,1000)."-".$_FILES['product_category_img']['name'];
		$product_file_tmp = $_FILES['product_category_img']['tmp_name'];

		$folder="../image/";
		$sql_check="SELECT product_category_img FROM product_category";
		$q_check=mysql_query($sql_check);
		while ($rs_check=mysql_fetch_array($q_check)) {
			if($rs_check['product_category_img']==$product_file_name){
				$product_file_name =rand(0,1000)."-".$_FILES['product_category_img']['name'];
				}

		}
		move_uploaded_file($product_file_tmp,$folder.$product_file_name) or die (mysql_error());
		$sql="UPDATE product_category
		SET product_category_name_th = '$name_th', product_category_name_en = '$name_en'
		, product_category_img = '{$product_file_name}'
		WHERE product_category_id= $id";
		mysql_query($sql);
		header("location:../product.php?page=addproduct_category&active=product");


	}
}

if(isset($_POST['update'])){
	$id=$_POST['id'];
	$product_id_product=$_POST['product_id_product'];
	$product_category=$_POST['product_category'];
	$product_name=$_POST['product_name'];
	$product_price_retail=$_POST['product_price_retail'];
	$product_price_dozen=$_POST['product_price_dozen'];
if($_FILES['product_img']['size']==""){
	$sql="UPDATE product
				SET product_category = '$product_category', product_name= '$product_name', product_price_retail='$product_price_retail',
				product_price_dozen = '$product_price_dozen',product_price_crate='{$_POST['product_price_crate']}', product_id_product = '$product_id_product'
				WHERE product_id = $id";
	mysql_query($sql);
	header("location:../product.php?page=home&active=product");
}else {
	$sql="SELECT * FROM product WHERE product_id='$id'";
	$rs=mysql_fetch_array(mysql_query($sql));
	$file="../image/".$rs['product_img'];
	unlink($file);
	$product_file_name =rand(0,1000)."-".$_FILES['product_img']['name'];
	$product_file_tmp = $_FILES['product_img']['tmp_name'];

	$folder="../image/";
	$sql_check="SELECT product_img FROM product";
	$q_check=mysql_query($sql_check);
	while ($rs_check=mysql_fetch_array($q_check)) {
		if($rs_check['product_img']==$product_file_name){
			$product_file_name =rand(0,1000)."-".$_FILES['product_img']['name'];
			}

	}
	move_uploaded_file($product_file_tmp,$folder.$product_file_name) or die (mysql_error());
	$sql="UPDATE product
				SET product_category = '$product_category', product_name= '$product_name', product_price_retail='$product_price_retail',
				product_price_dozen = '$product_price_dozen',product_price_crate='{$_POST['product_price_crate']}', product_id_product = '$product_id_product',
				product_img = '$product_file_name'
				WHERE product_id = $id";
	mysql_query($sql);
	header("location:../product.php?page=home&active=product");


}
}
?>
