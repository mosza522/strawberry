<?php
require_once('backoffice/mpdf/mpdf.php');
ob_start();
session_start();
$host="localhost";
$user="strawberry_admin";
$pass="043522359";
$db="strawberry_club";
$connect = mysql_connect($host,$user,$pass);
mysql_query("SET NAMES UTF8",$connect);
mysql_select_db($db);
//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Asia/Bangkok');
if(isset($_SESSION['user_id'])){
$sql="SELECT * FROM user WHERE user_id='{$_SESSION['user_id']}'";
$q=mysql_query($sql);
$rs=mysql_fetch_array($q);
if(isset($_SESSION['user_id'])){
  $fullname=$rs['user_fullname'];
}else{
  $fullname="ผู้ใช้ทั่วไป";
}
}
require 'PHPMailer/PHPMailerAutoload.php';
if(isset($_SESSION['user_id'])){
include 'invoice_user.php';
}else{
include 'invoice.php';
}
sleep(3);
//Create a new PHPMailer instance
$mail = new PHPMailer();
$mail->CharSet = "utf-8";
$mail->Username = "strawberryclub.gm@gmail.com";
$mail->From = "strawberryclub.gm@gmail.com";
$mail->FromName = "Strawberry-club";
$mail->isHTML(true);
$mail->Subject = "ใบสั่งซื้อสินค้า (Invoice)";
$mail->Body = "เมื่อชำระเงินแล้วกรุณาแจ้งทาง Strawberry-club";
$mail->AltBody = "เมื่อชำระเงินแล้วกรุณาแจ้งทาง Strawberry-club";
//$mail->addAddress("pongsathorn.eakabut@gmail.com", '.');
//Set who the message is to be sent to

$mail->addAddress("{$_SESSION['email']}", $fullname);
$mail->AddCC("strawberryclub.gm@gmail.com", "Strawberry-Club");
//Set the subject line

//$mail->AddCC("{$rs['user_email']}", "{$rs['user_fullname']}");

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('message_email.php'), dirname(__FILE__));
//$mail->AddEmbeddedImage('img/unnamed.png', 'image');
$mail->AddAttachment('backoffice/pdf/invoice.pdf');
//echo $msg;

//send the message, check for errors

if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
?>
    <script type="text/javascript">
      alert('ส่งใบสั่งซื้อเรียบร้อย');
    </script>
<?php
    if(isset($_SESSION['cart']))unset($_SESSION['cart']);
    if(isset($_SESSION['cart_dozen']))unset($_SESSION['cart_dozen']);
    if(isset($_SESSION['cart_crate']))unset($_SESSION['cart_crate']);
    header('Location: backoffice/pdf/invoice.pdf');


		//unlink('backoffice/pdf/invoice.pdf');
	}
?>
