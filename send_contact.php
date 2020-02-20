<?php
session_start();
$host="localhost";
$user="strawberry_admin";
$pass="043522359";
$db="strawberry_club";
$connect = mysql_connect($host,$user,$pass);
mysql_query("SET NAMES UTF8",$connect);
mysql_select_db($db);
	function DateThai($strDate)
	{
		$strYear = date("Y",strtotime($strDate))+543;
		$strMonth= date("n",strtotime($strDate));
		$strDay= date("j",strtotime($strDate));
		$strHour= date("H",strtotime($strDate));
		$strMinute= date("i",strtotime($strDate));
		$strSeconds= date("s",strtotime($strDate));
		$strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
		$strMonthThai=$strMonthCut[$strMonth];
		return "$strDay/$strMonthThai/$strYear";
    //return "$strDay $strMonthThai $strYear, $strHour:$strMinute";
	}

	$strDate = date("Y-m-d H:i:s");

  $name=$_POST['name'];

  $email=$_POST['email'];

  $address=$_POST['address'];

  $tell=$_POST['tell'];

  $message=$_POST['message'];


?>
<?php
/**
 * This example shows making an SMTP connection with authentication.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that

/**
 * This example shows making an SMTP connection with authentication.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Asia/Bangkok');

require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer();
$mail->CharSet = "utf-8";
$mail->Username = "strawberryclub.gm@gmail.com";
$mail->From = "strawberryclub.gm@gmail.com";
$mail->FromName = "Strawberry-club";
$mail->isHTML(true);
$mail->Subject = "ข้อมูลผู้ติดต่อ";
$msg="NAME = ".$name."<br />";
$msg.="E-MAIL = ".$email."<br />";
$msg.="ADDRESS = ".$address."<br />";
$msg.="TEL = ".$tell."<br />";
$msg.="MESSAGE = ".$message."<br />";
$mail->Body = $msg;
//Set who the message is to be sent to
$mail->addAddress('strawberryclub.gm@gmail.com', 'Stawberry-Club');
//Set the subject line
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('message_email.php'), dirname(__FILE__));
// embed image
//$mail->AddEmbeddedImage('img/unnamed.png', 'image');
if (isset($_FILES['file_nab']) &&
    $_FILES['file_nab']['error'] == UPLOAD_ERR_OK) {
      //แนบไฟล์
    $mail->AddAttachment($_FILES['file_nab']['tmp_name'],
                         $_FILES['file_nab']['name']);
}
//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
	?>
    <script type="text/javascript">
			alert('ส่งข้อมูลเสร็จสิ้น');
			window.location.href="contact.php";
		</script>
<?php
}


?>
