<?php
require '../backoffice/init.php';
//news tag
if(isset($_POST['id_news_tag'])){
	$news_tag_name_th=$_POST['news_tag_name_th'];
	$news_tag_name_en=$_POST['news_tag_name_en'];
	$sql="UPDATE news_tag
	SET news_tag_name_th = '$news_tag_name_th', news_tag_name_en = '$news_tag_name_en'
	WHERE news_tag_id= {$_POST['id_news_tag']}";
	mysql_query($sql);
	header("location:../news.php?page=home_tag");
}
//news
if(isset($_POST['update_news_id'])){
	$news_topic=$_POST['news_topic'];
	$news_title=$_POST['news_title'];
	$news_tag=$_POST['news_tag'];
	$news_detail=$_POST['news_detail'];
	$id=$_POST['update_news_id'];
	if($_FILES['news_img_cover']['size']==0){
		$sql="UPDATE news
					SET news_topic = '$news_topic', news_title= '$news_title', news_tag='$news_tag',
					news_detail = '$news_detail'
					WHERE news_id = $id";
		if(!mysql_query($sql))echo mysql_error();
		header("location:../news.php?page=home");
	}
	else{
	$sql="SELECT news_img_cover FROM news WHERE news_id='{$id}'";
	$rs=mysql_fetch_array(mysql_query($sql));
	$file="../image/".$rs['news_img_cover'];
	unlink($file);
	$news_file_name =rand(0,1000)."-".$_FILES['news_img_cover']['name'];
	$news_file_tmp = $_FILES['news_img_cover']['tmp_name'];

	$folder="../image/";
	$sql_check="SELECT news_img_cover FROM news";
	$q_check=mysql_query($sql_check);
	while ($rs_check=mysql_fetch_array($q_check)) {
		if($rs_check['news_img_cover']==$news_file_name){
			$news_file_name =rand(0,1000)."-".$_FILES['news_img_cover']['name'];
			}
		else{
			move_uploaded_file($news_file_tmp,$folder.$news_file_name) or die (mysql_error());
			$sql="UPDATE news
						SET news_topic = '$news_topic', news_title= '$news_title', news_tag='$news_tag',
						news_detail = '$news_detail', news_img_cover = '$news_file_name'
						WHERE news_id = $id";
			if(!mysql_query($sql))echo mysql_error();
			header("location:../news.php?page=home");
				}
	}
}
}

?>
