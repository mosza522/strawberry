<?php

  session_start();
  error_reporting(E_ERROR);
  $i=0;
  $x=0;
if(isset($_POST["id"])){
  while (true){
    if($_SESSION['cart'][$i]==""){
      $_SESSION['cart'][$i]=$_POST["id"];
      echo $_SESSION['cart'][$i];
      break;
    }
    $i++;
  }


}

if(isset($_GET["id_change"])){
  $num=(int)$_GET['round'];
  if($num>=0){
  while (true){
    if($_SESSION['cart'][$i]=="" and $num>0){
      $_SESSION['cart'][$i]=$_GET["id_change"];

      $num--;
      }
      if($num==0){

        break;

      }

    $i++;
}

}else{
  for ($j=0; $j < 20; $j++) {
    while ($x<=count($_SESSION['cart'])){
    if(trim($_SESSION['cart'][$x])==trim($_GET['id_change']) and $num<0){
      unset($_SESSION['cart'][$x]);

      $num++;
      }
      $x++;
    }
    $x=0;
    $_SESSION['cart'] = array_values($_SESSION['cart']);
}



}

}
//dozen
if(isset($_GET["id_change_dozen"])){
  $num=(int)$_GET['round'];
  if($num>=0){
  while (true){
    if($_SESSION['cart_dozen'][$i]=="" and $num>0){
      $_SESSION['cart_dozen'][$i]=$_GET["id_change_dozen"];

      $num--;
      }
      if($num==0){

        break;

      }

    $i++;
}

}else{
  for ($j=0; $j < 20; $j++) {
    while ($x<=count($_SESSION['cart_dozen'])){
    if(trim($_SESSION['cart_dozen'][$x])==trim($_GET['id_change_dozen']) and $num<0){
      unset($_SESSION['cart_dozen'][$x]);

      $num++;
      }
      $x++;
    }
    $x=0;
    $_SESSION['cart_dozen'] = array_values($_SESSION['cart_dozen']);
}
}
}
//crate
if(isset($_GET["id_change_crate"])){
  $num=(int)$_GET['round'];
  if($num>=0){
  while (true){
    if($_SESSION['cart_crate'][$i]=="" and $num>0){
      $_SESSION['cart_crate'][$i]=$_GET["id_change_crate"];

      $num--;
      }
      if($num==0){

        break;

      }

    $i++;
}

}else{
  for ($j=0; $j < 20; $j++) {
    while ($x<=count($_SESSION['cart_crate'])){
    if(trim($_SESSION['cart_crate'][$x])==trim($_GET['id_change_crate']) and $num<0){
      unset($_SESSION['cart_crate'][$x]);

      $num++;
      }
      $x++;
    }
    $x=0;
    $_SESSION['cart_crate'] = array_values($_SESSION['cart_crate']);
}



}

}
$_SESSION['cart'] = array_values($_SESSION['cart']);
$_SESSION['cart_dozen'] = array_values($_SESSION['cart_dozen']);
$_SESSION['cart_crate'] = array_values($_SESSION['cart_crate']);

header('Location: order.php');



?>
