<?php
$host="localhost";
$user="strawberry_admin";
$pass="043522359";
$db="strawberry_club";
$connect = mysql_connect($host,$user,$pass);
mysql_query("SET NAMES UTF8",$connect);
mysql_select_db($db);
date_default_timezone_set("Asia/Bangkok");
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
  if($strDate!="0000-00-00" or $strDate!="" or $strDate!=null) {
  return "$strDay $strMonthThai $strYear";
}else {
  return "";
}
  //return "$strDay $strMonthThai $strYear, $strHour:$strMinute";
}
$strDate1 = date("Y-m-d H:i:s");


$folder="backoffice/job/";
$sql="SELECT picture FROM job";
$sql2="SELECT transcript FROM job";
$q=mysql_query($sql);
$q2=mysql_query($sql2);
//picture
$picture_name =rand(0,1000)."-".$_FILES['picture']['name'];
$picture_tmp = $_FILES['picture']['tmp_name'];
if(mysql_num_rows($q)>0){
	while($rs=mysql_fetch_array($q)){
	if($rs['picture']==$picture_name){
		$picture_name =rand(0,1000)."-".$_FILES['picture']['name'];

	}
}
	move_uploaded_file($picture_tmp,$folder.$picture_name) or die (mysql_error());
}
else{
		move_uploaded_file($picture_tmp,$folder.$picture_name) or die (mysql_error());
}
//transcript
$transcript_name =rand(0,1000)."-".$_FILES['transcript']['name'];
$transcript_tmp = $_FILES['transcript']['tmp_name'];
if(mysql_num_rows($q2)>0){
	while($rs2=mysql_fetch_array($q2)){
	if($rs2['transcript']==$transcript_name){
		$transcript_name =rand(0,1000)."-".$_FILES['transcript']['name'];

	}
	}
	move_uploaded_file($transcript_tmp,$folder.$transcript_name) or die (mysql_error());
}
else{
		move_uploaded_file($transcript_tmp,$folder.$transcript_name) or die (mysql_error());
}
$job=$_POST['job_interest'];
$i=0;
foreach ($job as $value) {
  if($i==0){
    $_POST['position_interest1']=$value;
  }
  if($i==1){
    $_POST['position_interest2']=$value;
  }
  if($i==2){
    $_POST['position_interest3']=$value;
  }
  $i++;
}
if(!isset($_POST['position_interest1'])){
$_POST['position_interest1']="";
}
if(!isset($_POST['position_interest2'])){
$_POST['position_interest2']="";
}
if(!isset($_POST['position_interest3'])){
$_POST['position_interest3']="";
}
if(!isset($_POST['junior_school_name'])){
$_POST['junior_school_name']="";
}
if(!isset($_POST['junior_major'])){
$_POST['junior_major']="";
}
if(!isset($_POST['junior_education_background'])){
$_POST['junior_education_background']="";
}
if(!isset($_POST['junior_gpa'])){
$_POST['junior_gpa']="";
}
if(!isset($_POST['junior_graduate_date'])){
$_POST['junior_graduate_date']="";
}
if(!isset($_POST['high_school_name'])){
$_POST['high_school_name']="";
}
if(!isset($_POST['high_major'])){
$_POST['high_major']="";
}
if(!isset($_POST['high_education_background'])){
$_POST['high_education_background']="";
}
if(!isset($_POST['high_gpa'])){
$_POST['high_gpa']="";
}
if(!isset($_POST['high_graduate_date'])){
$_POST['high_graduate_date']="";
}
if(!isset($_POST['vocational_school_name'])){
$_POST['vocational_school_name']="";
}
if(!isset($_POST['vocational_major'])){
$_POST['vocational_major']="";
}
if(!isset($_POST['vocational_education_background'])){
$_POST['vocational_education_background']="";
}
if(!isset($_POST['vocational_gpa'])){
$_POST['vocational_gpa']="";
}
if(!isset($_POST['vocational_graduate_date'])){
$_POST['vocational_graduate_date']="";
}
if(!isset($_POST['diploma_school_name'])){
$_POST['diploma_school_name']="";
}
if(!isset($_POST['diploma_major'])){
$_POST['diploma_major']="";
}if(!isset($_POST['diploma_education_background'])){
$_POST['diploma_education_background']="";
}
if(!isset($_POST['diploma_gpa'])){
$_POST['diploma_gpa']="";
}
if(!isset($_POST['diploma_graduate_date'])){
$_POST['diploma_graduate_date']="";
}
if(!isset($_POST['bachelor_school_name'])){
$_POST['bachelor_school_name']="";
}
if(!isset($_POST['bachelor_major'])){
$_POST['bachelor_major']="";
}
if(!isset($_POST['bachelor_education_background'])){
$_POST['bachelor_education_background']="";
}
if(!isset($_POST['bachelor_gpa'])){
$_POST['bachelor_gpa']="";
}
if(!isset($_POST['bachelor_graduate_date'])){
$_POST['bachelor_graduate_date']="";
}
if(!isset($_POST['master_school_name'])){
$_POST['master_school_name']="";
}
if(!isset($_POST['master_major'])){
$_POST['master_major']="";
}
if(!isset($_POST['master_education_background'])){
$_POST['master_education_background']="";
}
if(!isset($_POST['master_gpa'])){
$_POST['master_gpa']="";
}
if(!isset($_POST['master_graduate_date'])){
$_POST['master_graduate_date']="";
}
if(!isset($_POST['doctor_school_name'])){
$_POST['doctor_school_name']="";
}
if(!isset($_POST['doctor_major'])){
$_POST['doctor_major']="";
}
if(!isset($_POST['doctor_education_background'])){
$_POST['doctor_education_background']="";
}
if(!isset($_POST['doctor_gpa'])){
$_POST['doctor_gpa']="";
}
if(!isset($_POST['doctor_graduate_date'])){
$_POST['doctor_graduate_date']="";
}
if(!isset($_POST['office_name'])){
$_POST['office_name']="";
}
if(!isset($_POST['date_start'])){
$_POST['date_start']="";
}
if(!isset($_POST['date_end'])){
$_POST['date_end']="";
}
if(!isset($_POST['position'])){
$_POST['position']="";
}
if(!isset($_POST['ex_salary'])){
$_POST['ex_salary']="";
}
if(!isset($_POST['job_detail'])){
$_POST['job_detail']="";
}
if(!isset($_POST['office_name2'])){
$_POST['office_name2']="";
}
if(!isset($_POST['date_start2'])){
$_POST['date_start2']="";
}
if(!isset($_POST['date_end2'])){
$_POST['date_end2']="";
}
if(!isset($_POST['position2'])){
$_POST['position2']="";
}
if(!isset($_POST['ex_salary2'])){
$_POST['ex_salary2']="";
}
if(!isset($_POST['job_detail2'])){
$_POST['job_detail2']="";
}
if(!isset($_POST['office_name3'])){
$_POST['office_name3']="";
}
if(!isset($_POST['date_start3'])){
$_POST['date_start3']="";
}
if(!isset($_POST['date_end3'])){
$_POST['date_end3']="";
}
if(!isset($_POST['position3'])){
$_POST['position3']="";
}
if(!isset($_POST['ex_salary3'])){
$_POST['ex_salary3']="";
}
if(!isset($_POST['job_detail3'])){
$_POST['job_detail3']="";
}
if(!isset($_POST['talent'])){
$_POST['talent']="";
}
if(!isset($_POST['award'])){
$_POST['award']="";
}
if(!isset($_POST['reference_name'])){
$_POST['reference_name']="";
}
if(!isset($_POST['reference_office_or_position'])){
$_POST['reference_office_or_position']="";
}
if(!isset($_POST['reference_tell'])){
$_POST['reference_tell']="";
}
if(!isset($_POST['reference_relation'])){
$_POST['reference_relation']="";
}
if(!isset($_POST['reference_name2'])){
$_POST['reference_name2']="";
}
if(!isset($_POST['reference_office_or_position2'])){
$_POST['reference_office_or_position2']="";
}
if(!isset($_POST['reference_tell2'])){
$_POST['reference_tell2']="";
}
if(!isset($_POST['reference_relation2'])){
$_POST['reference_relation2']="";
}
if(!isset($_POST['reference_name3'])){
$_POST['reference_name3']="";
}
if(!isset($_POST['reference_office_or_position3'])){
$_POST['reference_office_or_position3']="";
}
if(!isset($_POST['reference_tell3'])){
$_POST['reference_tell3']="";
}
if(!isset($_POST['reference_relation3'])){
$_POST['reference_relation3']="";
}
if(!isset($_POST['note'])){
$_POST['note']="";
}

$fullname_th=$_POST['title_th']." ".$_POST['firstname_th'].$_POST['lastname_th'];

$fullname_en=$_POST['title_en']." ".$_POST['firstname_en'].$_POST['lastname_en'];

if($_POST['congenital_disease']=="ไม่มี"){
  $_POST['congenital_disease_etc']="";
  $congenital_disease=$_POST['congenital_disease'];
}else{
  $congenital_disease=$_POST['congenital_disease']." คือ ".$_POST['congenital_disease_etc'];
}

$sql="INSERT INTO job
VALUES('','{$_POST['position_interest1']}','{$_POST['position_interest2']}','{$_POST['position_interest3']}',
'{$_POST['salary']}','{$picture_name}','{$transcript_name}','$fullname_th',
'$fullname_en','{$_POST['identity']}','{$_POST['sex']}','{$_POST['bday']}','{$_POST['weight']}','{$_POST['height']}',
'{$_POST['nationality']}','{$_POST['brethren']}','{$_POST['num_of_brethren']}','{$_POST['religion']}','{$_POST['relationship']}','{$_POST['militar_status']}',
'$congenital_disease','{$_POST['address']}','{$_POST['tell']}','{$_POST['cell_phone']}','{$_POST['email']}',
'{$_POST['junior_school_name']}','{$_POST['junior_major']}','{$_POST['junior_education_background']}','{$_POST['junior_gpa']}','{$_POST['junior_graduate_date']}',
'{$_POST['high_school_name']}','{$_POST['high_major']}','{$_POST['high_education_background']}','{$_POST['high_gpa']}','{$_POST['high_graduate_date']}',
'{$_POST['vocational_school_name']}','{$_POST['vocational_major']}','{$_POST['vocational_education_background']}','{$_POST['vocational_gpa']}','{$_POST['vocational_graduate_date']}',
'{$_POST['diploma_school_name']}','{$_POST['diploma_major']}','{$_POST['diploma_education_background']}','{$_POST['diploma_gpa']}','{$_POST['diploma_graduate_date']}',
'{$_POST['bachelor_school_name']}','{$_POST['bachelor_major']}','{$_POST['bachelor_education_background']}','{$_POST['bachelor_gpa']}','{$_POST['bachelor_graduate_date']}','{$_POST['master_school_name']}',
'{$_POST['master_major']}','{$_POST['master_education_background']}','{$_POST['master_gpa']}','{$_POST['master_graduate_date']}','{$_POST['doctor_school_name']}',
'{$_POST['doctor_major']}','{$_POST['doctor_education_background']}','{$_POST['doctor_gpa']}','{$_POST['doctor_graduate_date']}','{$_POST['office_name']}',
'{$_POST['date_start']}','{$_POST['date_end']}','{$_POST['position']}','{$_POST['ex_salary']}','{$_POST['job_detail']}',
'{$_POST['office_name2']}','{$_POST['date_start2']}','{$_POST['date_end2']}','{$_POST['position2']}','{$_POST['ex_salary2']}',
'{$_POST['job_detail2']}','{$_POST['office_name3']}','{$_POST['date_start3']}','{$_POST['date_end3']}','{$_POST['position3']}',
'{$_POST['ex_salary3']}','{$_POST['job_detail3']}','{$_POST['work_shift']}','{$_POST['work_another_province']}','{$_POST['work_another_country']}',
'{$_POST['driver_licence']}','{$_POST['can_work_after_test']}','{$_POST['listen_thai']}','{$_POST['speak_thai']}','{$_POST['read_thai']}',
'{$_POST['write_thai']}','{$_POST['listen_en']}','{$_POST['speak_en']}','{$_POST['read_en']}','{$_POST['write_en']}','{$_POST['language_etc1']}',
'{$_POST['listen_etc1']}','{$_POST['speak_etc1']}','{$_POST['read_etc1']}','{$_POST['write_etc1']}','{$_POST['language_etc2']}','{$_POST['listen_etc2']}',
'{$_POST['speak_etc2']}','{$_POST['read_etc2']}','{$_POST['write_etc2']}','{$_POST['talent']}','{$_POST['award']}',
'{$_POST['reference_name']}','{$_POST['reference_office_or_position']}','{$_POST['reference_tell']}','{$_POST['reference_relation']}','{$_POST['reference_name2']}',
'{$_POST['reference_office_or_position2']}','{$_POST['reference_tell2']}','{$_POST['reference_relation2']}','{$_POST['reference_name3']}','{$_POST['reference_office_or_position3']}',
'{$_POST['reference_tell3']}','{$_POST['reference_relation3']}','{$_POST['source']}','{$_POST['note']}','$strDate1')";

	if(mysql_query($sql)){
		require 'PHPMailer/PHPMailerAutoload.php';
    require 'jobPdf.php';
    ?>

<?php
$mail = new PHPMailer();
$mail->CharSet = "utf-8";
$mail->Username = "strawberryclub.gm@gmail.com";
$mail->From = "strawberryclub.gm@gmail.com";
$mail->FromName = "Strawberry-club";
$mail->isHTML(true);
$mail->Subject = "สมัครงาน Strawberry-club";
$mail->AddAttachment("backoffice/pdf/job.pdf");
$mail->Body = "สมัครงาน Strawberry-club";
$mail->AltBody = "สมัครงาน Strawberry-club";
$mail->addAddress("strawberryclub.gm@gmail.com", 'Strawberry-Club');
if (!$mail->send()) {
		    echo "Mailer Error: " . $mail->ErrorInfo;
		} else {
      ?>
          <script type="text/javascript">
            alert('สมัครงานเรียบร้อย');
          </script>
      <?php
      header('Location: backoffice/pdf/job.pdf');
      //unlink('backoffice/pdf/job.pdf');
		}
}
  else{
    mysql_error();
  }
 ?>
