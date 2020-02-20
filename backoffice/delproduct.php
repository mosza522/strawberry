<?php
	require 'backoffice/init.php';
if(isset($_GET['id_category'])){
	$sql="DELETE FROM product_category
	WHERE product_category_id='{$_GET['id_category']}'";
	mysql_query($sql);

	header("location:product.php?page=addproduct_category&active=product");
}
if(isset($_GET['id'])){
	$sql_del="SELECT * FROM product WHERE product_id='{$_GET['id']}'";
	$q=mysql_query($sql_del);
	$rs=mysql_fetch_array($q);
	$file="image"."/".$rs['product_img'];
	unlink($file);

	$sql="DELETE FROM product
	WHERE product_id='{$_GET['id']}'";
	mysql_query($sql);
	header("location:product.php?page=home&active=product");
}
?>
