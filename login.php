<?php
    session_start();
error_reporting(0);
$host="localhost";
$user="strawberry_admin";
$pass="043522359";
$db="strawberry_club";
$connect = mysql_connect($host,$user,$pass);
mysql_query("SET NAMES UTF8",$connect);
mysql_select_db($db);
$username=$_POST['username'];
$pass_origin=$_POST['password'];
$password=md5($_POST['password']);
$sql="SELECT * FROM user WHERE user_username='{$username}' AND user_password_origin='{$pass_origin}'
AND user_password='{$password}'";
$q=mysql_query($sql);
$rs=mysql_fetch_array($q);
if(mysql_num_rows($q)==1){
  echo "<script>
    alert('Welcome user :".$rs['user_fullname']."');
    </script>";
    session_start();
    $_SESSION['user_id']=$rs['user_id'];
  echo "<script>
    window.history.go(-1);
  </script>";
}else{
  echo "<script>
    alert('User or Password incorrect');
    window.history.go(-1);
  </script>";
}
 ?>
