<?php
session_start();
if($_GET['lang']=="en"){
  $_SESSION['lang']="en";
}else{
  $_SESSION['lang']="th";
}

echo "<script> window.history.go(-1)</script>";
 ?>
