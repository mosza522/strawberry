<?php
require '../backoffice/init.php';


/* addmenu*/
  if(isset($_POST['add'])){
  	$menu_name_en=$_POST['menu_name_en'];
  	$menu_name_th=$_POST['menu_name_th'];
  	$menu_link=$_POST['menu_link'];

    $sql="INSERT INTO menu(menu_name_th,menu_name_en,menu_link) VALUES('$menu_name_th','$menu_name_en','$menu_link')";
      if(!mysql_query($sql)){
        echo mysql_error();
      }
  	header( "location:../menu_management.php?page=home" );

  }
// add menu_child
if(isset($_POST['menu_id'])){
  $menu_id=$_POST['menu_id'];
  $menu_child_name_th=$_POST['menu_child_name_th'];
  $menu_child_name_en=$_POST['menu_child_name_en'];
  $menu_child_link=$_POST['menu_child_link'];

  $sql="INSERT INTO menu_child(menu_id,menu_child_name_th,menu_child_name_en,menu_child_link)
  VALUES('$menu_id','$menu_child_name_th','$menu_child_name_en','$menu_child_link')";
    if(!mysql_query($sql)){
      echo mysql_error();
    }
  header( "location:../menu_management.php?page=home_child_menu" );

}

 ?>
