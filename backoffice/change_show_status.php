<?php
require 'backoffice/init.php';
//banner
if(isset($_GET['banner_disappear'])){
  $sql="UPDATE banner
  SET banner_show_status ='0'
  WHERE banner_id = {$_GET['banner_disappear']}";
  if(!mysql_query($sql)){
    echo mysql_error();
  }else {
    header("Location:banner.php?page=home&active=banner");
  }
}
if(isset($_GET['banner_appear'])){
  $sql="UPDATE banner
  SET banner_show_status ='1'
  WHERE banner_id = {$_GET['banner_appear']}";
  if(!mysql_query($sql)){
    echo mysql_error();
  }else {
    header("Location:banner.php?page=home&active=banner");
  }
}
//menu
if(isset($_GET['menu_disappear'])){
  $sql="UPDATE menu
  SET menu_display_status ='0'
  WHERE menu_id = {$_GET['menu_disappear']}";
  if(!mysql_query($sql)){
    echo mysql_error();
  }else {
    header("Location:menu_management.php?page=home");
  }
}
if(isset($_GET['menu_appear'])){
  $sql="UPDATE menu
  SET menu_display_status ='1'
  WHERE menu_id = {$_GET['menu_appear']}";
  if(!mysql_query($sql)){
    echo mysql_error();
  }else {
    header("Location:menu_management.php?page=home");
  }
}
//menu_child
if(isset($_GET['menu_child_disappear'])){
  $sql="UPDATE menu_child
  SET menu_child_display_status ='0'
  WHERE menu_child_id = {$_GET['menu_child_disappear']}";
  if(!mysql_query($sql)){
    echo mysql_error();
  }else {
    header("Location:menu_management.php?page=home_child_menu");
  }
}
if(isset($_GET['menu_child_appear'])){
  $sql="UPDATE menu_child
  SET menu_child_display_status ='1'
  WHERE menu_child_id = {$_GET['menu_child_appear']}";
  if(!mysql_query($sql)){
    echo mysql_error();
  }else {
    header("Location:menu_management.php?page=home_child_menu");
  }
}
//news
if(isset($_GET['news_disappear'])){
  $sql="UPDATE news
  SET news_display_status ='0'
  WHERE news_id = {$_GET['news_disappear']}";
  if(!mysql_query($sql)){
    echo mysql_error();
  }else {
    header("Location:news.php?page=home");
  }
}
if(isset($_GET['news_appear'])){
  $sql="UPDATE news
  SET news_display_status ='1'
  WHERE news_id = {$_GET['news_appear']}";
  if(!mysql_query($sql)){
    echo mysql_error();
  }else {
    header("Location:news.php?page=home");
  }
}
if(isset($_GET['news_album_disappear'])){
  $sql="UPDATE news_img
  SET news_img_display_status ='0'
  WHERE news_id = {$_GET['news_album_disappear']}";
  if(!mysql_query($sql)){
    echo mysql_error();
  }else {
    header("Location:news.php?page=home_album");
  }
}
if(isset($_GET['news_album_appear'])){
  $sql="UPDATE news_img
  SET news_img_display_status ='1'
  WHERE news_id = {$_GET['news_album_appear']}";
  if(!mysql_query($sql)){
    echo mysql_error();
  }else {
    header("Location:news.php?page=home_album");
  }
}
//active
if(isset($_GET['activity_disappear'])){
  $sql="UPDATE activity
  SET activity_display_status ='0'
  WHERE activity_id = {$_GET['activity_disappear']}";
  if(!mysql_query($sql)){
    echo mysql_error();
  }else {
    header("Location:activity.php?page=home");
  }
}
if(isset($_GET['activity_appear'])){
  $sql="UPDATE activity
  SET activity_display_status ='1'
  WHERE activity_id = {$_GET['activity_appear']}";
  if(!mysql_query($sql)){
    echo mysql_error();
  }else {
    header("Location:activity.php?page=home");
  }
}
if(isset($_GET['activity_album_disappear'])){
  $sql="UPDATE activity_img
  SET activity_img_display_status ='0'
  WHERE activity_id = {$_GET['activity_album_disappear']}";
  if(!mysql_query($sql)){
    echo mysql_error();
  }else {
    header("Location:activity.php?page=home_album");
  }
}
if(isset($_GET['activity_album_appear'])){
  $sql="UPDATE activity_img
  SET activity_img_display_status ='1'
  WHERE activity_id = {$_GET['activity_album_appear']}";
  if(!mysql_query($sql)){
    echo mysql_error();
  }else {
    header("Location:activity.php?page=home_album");
  }
}
 ?>
