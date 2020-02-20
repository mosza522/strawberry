<?php
session_start();
error_reporting(0);
$id=$_GET['id'];
for ($x=0; $x < 20; $x++) {
$_SESSION['cart'] = array_values($_SESSION['cart']);
$_SESSION['cart_dozen'] = array_values($_SESSION['cart_dozen']);
$_SESSION['cart_crate'] = array_values($_SESSION['cart_crate']);
for ($i=0; $i <=count($_SESSION['cart']); $i++) {
  if($_SESSION['cart'][$i]==$id){
unset($_SESSION['cart'][$i]);
}
}
for ($i=0; $i <=count($_SESSION['cart_dozen']); $i++) {
  if($_SESSION['cart_dozen'][$i]==$id){
unset($_SESSION['cart_dozen'][$i]);
}
}
for ($i=0; $i <=count($_SESSION['cart_crate']); $i++) {
  if($_SESSION['cart_crate'][$i]==$id){
unset($_SESSION['cart_crate'][$i]);
}
}
}

 ?>
 <script type="text/javascript">
   window.history.go(-1);
 </script>
