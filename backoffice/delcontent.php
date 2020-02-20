<?php
require 'backoffice/init.php';

if(isset($_GET['id_type'])){
  $sql="DELETE FROM content_page WHERE content_page_id='{$_GET['id_type']}'";
  mysql_query($sql);
  header("location:content.php?page=home");
}
if(isset($_GET['content'])){
  $sql="SELECT * FROM content
  LEFT OUTER JOIN content_page
  ON content.content_page=content_page.content_page_id
  WHERE content_page={$_GET['content']} ";
  $q=mysql_query($sql);
  $rs=mysql_fetch_array($q);
  $page=$rs['content_page_name_en'];
  $sql="DELETE FROM content
  WHERE content_page={$_GET['content']}";
  mysql_query($sql);


  header("Location:content.php?page={$page}");
}
?>
