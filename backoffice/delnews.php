<?php
require 'backoffice/init.php';
if (isset($_GET['id_tag'])){

$sql="DELETE FROM news_tag WHERE news_tag_id={$_GET['id_tag']}";
mysql_query($sql);
header("location:news.php?page=home_tag");
}
if (isset($_GET['id_news'])){

$sql_del="SELECT news_img_cover FROM news WHERE news_id={$_GET['id_news']}";
 $rs=mysql_fetch_array(mysql_query($sql_del));
echo $rs['news_img_cover'];
$file="image"."/".$rs['news_img_cover'];
unlink($file);

$sql="DELETE FROM news WHERE news_id={$_GET['id_news']}";
mysql_query($sql);
header("location:news.php?page=home");
}
if(isset($_GET['id_news_photo'])){
  $sql_del="SELECT * FROM news_img WHERE news_img_id={$_GET['id_news_photo']}";
   $rs=mysql_fetch_array(mysql_query($sql_del));
  echo $rs['news_img_name'];
  $file="photo_news"."/".$rs['news_img_name'];
  unlink($file);

  $sql="DELETE FROM news_img WHERE news_img_id={$_GET['id_news_photo']}";
  mysql_query($sql);
  header("location:news.php?page=edit_news_album&id={$rs['news_id']}");

}
if(isset($_GET['id_news_album'])){
  $sql_del="SELECT news_img_name FROM news_img WHERE news_id={$_GET['id_news_album']}";
  $q=mysql_query($sql_del);
  while ($rs=mysql_fetch_array($q)) {
    $file="photo_news"."/".$rs['news_img_name'];
    unlink($file);
   }
  $sql="DELETE FROM news_img WHERE news_id={$_GET['id_news_album']}";
  mysql_query($sql);
  header("location:news.php?page=home_album");

}
?>
