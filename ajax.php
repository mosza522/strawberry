<?php
session_start();
print_r($_POST);
if(isset($_POST['fbpost']['id']))$_SESSION['fb_id']=$_POST['fbpost']['id'];
if(isset($_POST['fbpost']['name']))$_SESSION['fb_name']=$_POST['fbpost']['name'];
if(isset($_POST['fbpost']['email'])){
  $_SESSION['fb_email']=$_POST['fbpost']['email'];
}

if(isset($_POST['email'])){
$_SESSION['email']=$_POST['email'];
echo $_SESSION['email'];
}
if(isset($_POST['name'])){
$_SESSION['name']=$_POST['name'];
echo $_SESSION['name'];
}
if(isset($_POST['address'])){
$_SESSION['address']=$_POST['address'];
echo $_SESSION['address'];
}
if(isset($_POST['tell'])){
$_SESSION['tell']=$_POST['tell'];
echo $_SESSION['tell'];
}
echo $_SESSION['fb_name'];
echo $_SESSION['fb_id'];
 ?>
