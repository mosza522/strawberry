<?php
require 'backoffice/init.php';

if(isset($_GET['id'])){
  $sql="DELETE FROM page WHERE page_id='{$_GET['id']}'";
  mysql_query($sql);
  header("location:header_management.php?page=home_page");
}
if(isset($_GET['id_title'])){
  $sql="DELETE FROM title WHERE title_id='{$_GET['id_title']}'";
  mysql_query($sql);
  header("location:header_management.php?page=home_title");
}
if(isset($_GET['id_keywords'])){
  $sql="DELETE FROM keywords WHERE keywords_id='{$_GET['id_keywords']}'";
  mysql_query($sql);
  header("location:header_management.php?page=home_keywords");
}
if(isset($_GET['id_description'])){
  $sql="DELETE FROM description WHERE description_id='{$_GET['id_description']}'";
  mysql_query($sql);
  header("location:header_management.php?page=home_description");
}

?>
