<?php
date_default_timezone_set('Asia/Bangkok');
require '../backoffice/init.php';
//news_tag
if(isset($_POST['news_tag_name_th'])){
  $news_tag_name_th=$_POST['news_tag_name_th'];
  $news_tag_name_en=$_POST['news_tag_name_en'];
  $sql="INSERT INTO news_tag(news_tag_name_th,news_tag_name_en)
  VALUES('$news_tag_name_en','$news_tag_name_th')";
  if(!mysql_query($sql))echo mysql_error();
  header("Location:../news.php?page=home_tag");
}
if(isset($_POST['add_news'])){

  $news_topic=$_POST['news_topic'];
  $news_title=$_POST['news_title'];
  $news_tag=$_POST['news_tag'];
  $news_detail=$_POST['news_detail'];
  $news_date=date("Y-m-d H:i:s");
  $file = strtolower($_FILES['news_img_cover']['name']);
  $type= strrchr($file,".");
  if(isset($_FILES['news_img_cover'])){
    $file = strtolower($_FILES['news_img_cover']['name']);
    $type= strrchr($file,".");
    if($type==".png" or $type==".gif" or $type==".jpg"){
      $news_img_cover_name =rand(0,1000)."-".$_FILES['news_img_cover']['name'];
      $news_img_cover_tmp = $_FILES['news_img_cover']['tmp_name'];
      }
      else {
        echo "<script>
          alert('ไม่สามารถใช้ไฟล์ภาพนี้ได้ กรุณาใช้ภาพ .jpg , .png , .gif');
          window.history.go(-1);
        </script>";
        exit();
      }
  }
      $folder="../image/";
      $sql="SELECT * FROM news";
      $q=mysql_query($sql);


      if(mysql_num_rows($q)>0){
        while($rs=mysql_fetch_array($q)){
      	if($rs['news_img_cover']==$news_img_cover_name){
      		$news_img_cover_name =rand(0,1000)."-".$_FILES['news_img_cover']['name'];
        }
      }
      move_uploaded_file($news_img_cover_tmp,$folder.$news_img_cover_name) or die (mysql_error());
      $sql="INSERT INTO
      news(news_topic,news_title,news_detail,news_tag,news_date,news_img_cover)
      VALUES('$news_topic','$news_title','$news_detail','$news_tag','$news_date','$news_img_cover_name')";
      if(!mysql_query($sql))echo mysql_error();
      header( "location:../news.php?page=home");
      }
      else{
        move_uploaded_file($news_img_cover_tmp,$folder.$news_img_cover_name) or die (mysql_error());
        $sql="INSERT INTO
        news(news_topic,news_title,news_detail,news_tag,news_date,news_img_cover)
        VALUES('$news_topic','$news_title','$news_detail','$news_tag','$news_date','$news_img_cover_name')";
        if(!mysql_query($sql))echo mysql_error();
        header( "location:../news.php?page=home");

      }

}
if(isset($_POST['news_photo_album'])){
  $news_img=$_FILES['news_img_name'];
  for ($i=0; $i < count($news_img['name']); $i++) {
  $file_check= strrchr(strtolower($news_img['name'][$i]),".");
  if($file_check==".png" or $file_check==".gif" or $file_check==".jpg"){
    $news_img_name =rand(0,1000)."-".$news_img['name'][$i];
    $news_img_tmp = $news_img['tmp_name'][$i];
  }else {
    echo "<script>
      alert('ไม่สามารถใช้ไฟล์ภาพได้ กรุณาใช้ภาพ .jpg , .png , .gif');
      window.history.go(-1);
    </script>";
    exit();
  }
  $folder="../photo_news/";
  $sql="SELECT * FROM news_img";
  $q=mysql_query($sql);


  if(mysql_num_rows($q)>0){
    while($rs=mysql_fetch_array($q)){
    if($rs['news_img_name']==$news_img_name){
      $news_img_name =rand(0,1000)."-".$news_img['name'][$i];
    }
    }
  }

    move_uploaded_file($news_img_tmp,$folder.$news_img_name) or die (mysql_error());
    $sql="INSERT INTO
    news_img(news_img_name,news_id)
    VALUES('$news_img_name',{$_POST['news_id']})";
    if(!mysql_query($sql))echo mysql_error();
    header( "location:../news.php?page=home_album");


}
}

 ?>
