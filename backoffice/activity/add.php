<?php
date_default_timezone_set('Asia/Bangkok');
require '../backoffice/init.php';
//activity_tag
if(isset($_POST['activity_tag_name_th'])){
  $activity_tag_name_th=$_POST['activity_tag_name_th'];
  $activity_tag_name_en=$_POST['activity_tag_name_en'];
  $sql="INSERT INTO activity_tag(activity_tag_name_th,activity_tag_name_en)
  VALUES('$activity_tag_name_th','$activity_tag_name_en')";
  if(!mysql_query($sql))echo mysql_error();
  header("Location:../activity.php?page=home_tag");
}
if(isset($_POST['add_activity'])){
  $activity_topic=$_POST['activity_topic'];
  $activity_title=$_POST['activity_title'];
  $activity_tag=$_POST['activity_tag'];
  $activity_detail=$_POST['activity_detail'];
  $activity_date=date("Y-m-d H:i:s");
  $file = strtolower($_FILES['activity_img_cover']['name']);
  $type= strrchr($file,".");
  if(isset($_FILES['activity_img_cover'])){
    $file = strtolower($_FILES['activity_img_cover']['name']);
    $type= strrchr($file,".");
    if($type==".png" or $type==".gif" or $type==".jpg"){
      $activity_img_cover_name =rand(0,1000)."-".$_FILES['activity_img_cover']['name'];
      $activity_img_cover_tmp = $_FILES['activity_img_cover']['tmp_name'];
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
      $sql="SELECT * FROM activity";
      $q=mysql_query($sql);


      if(mysql_num_rows($q)>0){
        while($rs=mysql_fetch_array($q)){
      	if($rs['activity_img_cover']==$activity_img_cover_name){
      		$activity_img_cover_name =rand(0,1000)."-".$_FILES['activity_img_cover']['name'];
        }
      }
      move_uploaded_file($activity_img_cover_tmp,$folder.$activity_img_cover_name) or die (mysql_error());
      $sql="INSERT INTO
      activity(activity_topic,activity_title,activity_detail,activity_tag,activity_date,activity_img_cover)
      VALUES('$activity_topic','$activity_title','$activity_detail','$activity_tag','$activity_date','$activity_img_cover_name')";
      if(!mysql_query($sql))echo mysql_error();
      header( "location:../activity.php?page=home");
      }
      else{
        move_uploaded_file($activity_img_cover_tmp,$folder.$activity_img_cover_name) or die (mysql_error());
        $sql="INSERT INTO
        activity(activity_topic,activity_title,activity_detail,activity_tag,activity_date,activity_img_cover)
        VALUES('$activity_topic','$activity_title','$activity_detail','$activity_tag','$activity_date','$activity_img_cover_name')";
        if(!mysql_query($sql))echo mysql_error();
        header( "location:../activity.php?page=home");

      }

}
if(isset($_POST['activity_photo_album'])){
  $activity_img=$_FILES['activity_img_name'];
  $check=true;
  for ($i=0; $i < count($activity_img['name']); $i++) {
    $file_check= strrchr(strtolower($activity_img['name'][$i]),".");
    if(!($file_check==".png" or $file_check==".gif" or $file_check==".jpg")){
    $check=false;
  }
  }
  if($check==true){
  for ($i=0; $i < count($activity_img['name']); $i++) {
    $activity_img_name =rand(0,1000)."-".$activity_img['name'][$i];
    $activity_img_tmp = $activity_img['tmp_name'][$i];
    $folder="../photo_activity/";
    $sql="SELECT * FROM activity_img";
    $q=mysql_query($sql);


    if(mysql_num_rows($q)>0){
      while($rs=mysql_fetch_array($q)){
      if($rs['activity_img_name']==$activity_img_name){
        $activity_img_name =rand(0,1000)."-".$activity_img['name'][$i];
      }
      }
    }

      move_uploaded_file($activity_img_tmp,$folder.$activity_img_name) or die (mysql_error());
      $sql="INSERT INTO
      activity_img(activity_img_name,activity_id)
      VALUES('$activity_img_name',{$_POST['activity_id']})";
      if(!mysql_query($sql))echo mysql_error();
      header( "location:../activity.php?page=home_album");




}
}else if($check==false){
  echo "<script>
    alert('ไม่สามารถใช้ไฟล์ภาพได้ กรุณาใช้ภาพ .jpg , .png , .gif');
    window.history.go(-1);
  </script>";
}
}

 ?>
