<?php
require 'backoffice/init.php';
if (isset($_GET['id'])){
$id=$_GET['id'];

$sql="DELETE FROM menu WHERE menu_id=$id";
mysql_query($sql);
header("location:menu_management.php?page=home");
}
if (isset($_GET['id_child'])){
  $id=$_GET['id_child'];

  $sql="DELETE FROM menu_child WHERE menu_child_id=$id";
  mysql_query($sql);
  header("location:menu_management.php?page=home_child_menu");
}
?>
