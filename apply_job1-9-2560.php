<?php
$host="localhost";
$user="root";
$pass="";
$db="strawberry";
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
		return "$strDay/$strMonthThai/$strYear";
    //return "$strDay $strMonthThai $strYear, $strHour:$strMinute";
	}
$strDate = date("Y-m-d H:i:s");


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


echo $_POST['position_interest1'];
echo "<br />";
echo $_POST['position_interest2'];
echo "<br />";
echo $_POST['position_interest3'];
echo "<br />";
echo $_POST['salary'];
echo "<br />";
echo $_FILES['picture']['name'];
echo "<br />";
echo $_FILES['picture']['tmp_name'];
echo "<br />";
echo $_FILES['transcript']['name'];
echo "<br />";
echo $_FILES['transcript']['tmp_name'];
echo "<br />";
echo $fullname_th=$_POST['title_th']." ".$_POST['firstname_th'].$_POST['lastname_th'];
echo "<br />";
echo $fullname_en=$_POST['title_en']." ".$_POST['firstname_en'].$_POST['lastname_en'];
echo "<br />";
echo $_POST['identity'];
echo "<br />";
echo $_POST['sex'];
echo "<br />";
echo $_POST['bday'];
echo "<br />";
echo $_POST['weight'];
echo "<br />";
echo $_POST['height'];
echo "<br />";
echo $_POST['nationality'];
echo "<br />";
echo $_POST['brethren'];
echo "<br />";
echo $_POST['num_of_brethren'];
echo "<br />";
echo $_POST['religion'];
echo "<br />";
echo $_POST['relationship'];
echo "<br />";
echo $_POST['militar_status'];
echo "<br />";
echo $_POST['congenital_disease'];
echo "<br />";
if($_POST['congenital_disease']=="ไม่มี"){
  $_POST['congenital_disease_etc']="";
  $congenital_disease=$_POST['congenital_disease'];
}else{
  $congenital_disease=$_POST['congenital_disease']." คือ ".$_POST['congenital_disease_etc'];
}
echo $_POST['address'];
echo "<br />";
echo $_POST['tell'];
echo "<br />";
echo $_POST['cell_phone'];
echo "<br />";
echo $_POST['email'];
echo "<br />";
echo $_POST['junior_school_name'];
echo "<br />";
echo $_POST['junior_major'];
echo "<br />";
echo $_POST['junior_education_background'];
echo "<br />";
echo $_POST['junior_gpa'];
echo "<br />";
echo $_POST['junior_graduate_date'];

echo $_POST['high_school_name'];
echo "<br />";
echo $_POST['high_major'];
echo "<br />";
echo $_POST['high_education_background'];
echo "<br />";
echo $_POST['high_gpa'];
echo "<br />";
echo $_POST['high_graduate_date'];
echo "<br />";
echo $_POST['vocational_school_name'];
echo "<br />";
echo $_POST['vocational_major'];
echo "<br />";
echo $_POST['vocational_education_background'];
echo "<br />";
echo $_POST['vocational_gpa'];
echo "<br />";
echo $_POST['vocational_graduate_date'];
echo "<br />";
echo $_POST['diploma_school_name'];
echo "<br />";
echo $_POST['diploma_major'];
echo "<br />";
echo $_POST['diploma_education_background'];
echo "<br />";
echo $_POST['diploma_gpa'];
echo "<br />";
echo $_POST['diploma_graduate_date'];
echo "<br />";
echo $_POST['bachelor_school_name'];
echo "<br />";
echo $_POST['bachelor_major'];
echo "<br />";
echo $_POST['bachelor_education_background'];
echo "<br />";
echo $_POST['bachelor_gpa'];
echo "<br />";
echo $_POST['bachelor_graduate_date'];
echo "<br />";
echo $_POST['master_school_name'];
echo "<br />";
echo $_POST['master_major'];
echo "<br />";
echo $_POST['master_education_background'];
echo "<br />";
echo $_POST['master_gpa'];
echo "<br />";
echo $_POST['master_graduate_date'];
echo "<br />";
echo $_POST['doctor_school_name'];
echo "<br />";
echo $_POST['doctor_major'];
echo "<br />";
echo $_POST['doctor_education_background'];
echo "<br />";
echo $_POST['doctor_gpa'];
echo "<br />";
echo $_POST['doctor_graduate_date'];
echo "<br />";
echo $_POST['office_name'];
echo "<br />";
echo $_POST['date_start'];
echo "<br />";
echo $_POST['date_end'];
echo "<br />";
echo $_POST['position'];
echo "<br />";
echo $_POST['ex_salary'];
echo "<br />";
echo $_POST['job_detail'];
echo "<br />";
echo $_POST['office_name2'];
echo "<br />";
echo $_POST['date_start2'];
echo "<br />";
echo $_POST['date_end2'];
echo "<br />";
echo $_POST['position2'];
echo "<br />";
echo $_POST['ex_salary2'];
echo "<br />";
echo $_POST['job_detail2'];
echo "<br />";
echo $_POST['office_name3'];
echo "<br />";
echo $_POST['date_start3'];
echo "<br />";
echo $_POST['date_end3'];
echo "<br />";
echo $_POST['position3'];
echo "<br />";
echo $_POST['ex_salary3'];
echo "<br />";
echo $_POST['job_detail3'];
echo "<br />";
echo $_POST['work_shift'];
echo "<br />";
echo $_POST['work_another_province'];
echo "<br />";
echo $_POST['work_another_country'];
echo "<br />";
echo $_POST['driver_licence'];
echo "<br />";
echo $_POST['can_work_after_test'];
echo "<br />";
echo $_POST['listen_thai'];
echo "<br />";
echo $_POST['speak_thai'];
echo "<br />";
echo $_POST['read_thai'];
echo "<br />";
echo $_POST['write_thai'];
echo "<br />";
echo $_POST['listen_en'];
echo "<br />";
echo $_POST['speak_en'];
echo "<br />";
echo $_POST['read_en'];
echo "<br />";
echo $_POST['write_en'];
echo "<br />";
echo $_POST['listen_etc1'];
echo "<br />";
echo $_POST['speak_etc1'];
echo "<br />";
echo $_POST['read_etc1'];
echo "<br />";
echo $_POST['write_etc1'];
echo "<br />";
echo $_POST['listen_etc2'];
echo "<br />";
echo $_POST['speak_etc2'];
echo "<br />";
echo $_POST['read_etc2'];
echo "<br />";
echo $_POST['write_etc2'];
echo "<br />";
echo $_POST['talent'];
echo "<br />";
echo $_POST['award'];
echo "<br />";
echo $_POST['reference_name'];
echo "<br />";
echo $_POST['reference_office_or_position'];
echo "<br />";
echo $_POST['reference_tell'];
echo "<br />";
echo $_POST['reference_relation'];
echo "<br />";
echo $_POST['reference_name2'];
echo "<br />";
echo $_POST['reference_office_or_position2'];
echo "<br />";
echo $_POST['reference_tell2'];
echo "<br />";
echo $_POST['reference_relation2'];
echo "<br />";
echo $_POST['reference_name3'];
echo "<br />";
echo $_POST['reference_office_or_position3'];
echo "<br />";
echo $_POST['reference_tell3'];
echo "<br />";
echo $_POST['reference_relation3'];
echo "<br />";
echo $_POST['source'];
echo "<br />";
echo $_POST['note'];
echo "<br />";

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
'{$_POST['write_thai']}','{$_POST['listen_en']}','{$_POST['speak_en']}','{$_POST['read_en']}','{$_POST['write_en']}',
'{$_POST['listen_etc1']}','{$_POST['speak_etc1']}','{$_POST['read_etc1']}','{$_POST['write_etc1']}','{$_POST['listen_etc2']}',
'{$_POST['speak_etc2']}','{$_POST['read_etc2']}','{$_POST['write_etc2']}','{$_POST['talent']}','{$_POST['award']}',
'{$_POST['reference_name']}','{$_POST['reference_office_or_position']}','{$_POST['reference_tell']}','{$_POST['reference_relation']}','{$_POST['reference_name2']}',
'{$_POST['reference_office_or_position2']}','{$_POST['reference_tell2']}','{$_POST['reference_relation2']}','{$_POST['reference_name3']}','{$_POST['reference_office_or_position3']}',
'{$_POST['reference_tell3']}','{$_POST['reference_relation3']}','{$_POST['source']}','{$_POST['note']}','$strDate')";
  if(mysql_query($sql)){
    echo "<script>
      alert('สมัคเสร็จสิ้น');
    </script>";
  }else{
    mysql_error();
  }

	/*

	<style media=\"screen\">
		.table-modal{
			font-family: 'Itim', cursive;
			font-size: 17px;
		}
		.table-modal tr {
			height:30px;
		}
		.td-big {
			height:70px;
			background-color: #f8acc8;

		}
		.bb td {
				 border-bottom: 3px solid #fb85b9 !important;
				}
		.cc td {
				border-bottom: 0px;
		}

	</style>
	<table width=\"100%\" class=\"table-modal\">
		<tr>
			<td colspan=\"8\"align=\"center\"><b>ข้อมูลการสมัครงาน</b> <br /><br /></td>
		</tr>
		<tr>
			<th bgcolor=\"#f8acc8\" width=\"250\">
		<i class=\"fa fa-hand-o-right\" aria-hidden=\"true\"></i> ตำแหน่งข้อมูลที่ต้องการสมัคร
		</th>
		<td colspan=\"7\"></td>
		 </tr>
		<tr >
			<td>ตำแหน่งที่สนใจสมัคร 1 :</td>
			<td colspan=\"7\">
				".$_POST['position_interest1']."
			</td>
		</tr>
		<tr >
			<td>ตำแหน่งที่สนใจสมัคร 2 :</td>
			<td colspan=\"7\">
				".$_POST['position_interest2']."
			</td>
		</tr>
		<tr >
			<td>ตำแหน่งที่สนใจสมัคร 3 :</td>
			<td colspan=\"7\">
				".$_POST['position_interest3']."
			</td>
		</tr>
		<tr>
			<td>เงินเดือนที่ต้องการ : </td>
			<td colspan=\"7\">
				".number_format($_POST['salary'])."
			</td>
		</tr>
		<tr>
			<th bgcolor=\"#f8acc8\">
		<i class=\"fa fa-hand-o-right\" aria-hidden=\"true\"></i> เอกสารประกอบการสมัครงาน
		</th>
		<td colspan=\"7\"></td>
		 </tr>
		<tr>
			<td class=\"td\">ไฟล์รูปภาพ : </td>
			<td colspan=\"3\">
				<img src=\"cid:picture\" alt=\"\" width=\"300\" height=\"300\">
			</td>
			<td>Transcript ผลการเรียน : </td>
			<td colspan=\"3\">
				<img src=\"cid:transcript\" alt=\"\" width=\"300\" height=\"300\">
			</td>
		</tr>
		<tr>
			<th bgcolor=\"#f8acc8\">
		<i class=\"fa fa-hand-o-right\" aria-hidden=\"true\"></i> เอกสารประกอบการสมัครงาน
		</th>
		<td colspan=\"7\"></td>
		 </tr>
		<tr>
			<td>ชื่อ-สกุล (ไทย) : </td>
			<td colspan=\"7\">
				".$fullname_th."
			</td>
		</tr>
		<tr>
			<td>ชื่อ-สกุล (อังกฤษ) : </td>
			<td colspan=\"7\">
				".$fullname_en."
			</td>
		</tr>
		<tr>
			<td>เลขบัตรประจำตัวประชาชน : </td>
			<td colspan=\"7\">
				".$_POST['identity']."
			</td>
		</tr>
		<tr>
			<td>เพศ : </td>
			<td colspan=\"7\">
				".$_POST['sex']."
			</td>
		</tr>
		<tr>
			<td>วันเดือนปีเกิด : </td>
			<td >
				";
				if($_POST['bday']!=""){
					$job_mail.=DateThai($_POST['bday']);
				}
				$job_mail.="
			</td>
		 <td colspan=\"6\">
			 น้ำหนัก :
				".$_POST['weight'] ." กก.
				<span style=\"padding-left:5em\"></span>
			สูง :

				".$_POST['height'] ." ซ.ม.
			</td>
		</tr>
		<tr>
			<td>สัญชาติ : </td>
			<td>
				".$_POST['nationality']."
			</td>
			<td colspan=\"6\">
				จำวนวพี่น้อง : ".$_POST['brethren']."
				<span style=\"padding-left:5em\"></span>
				ท่านเป็นคนที่ : ".$_POST['num_of_brethren']."
				<span style=\"padding-left:5em\"></span>
				ศาสนา : ".$_POST['religion']."
			</td>
		</tr>
		<tr>
			<td>สถานภาพครอบครัว : </td>
			<td colspan=\"7\">
				".$_POST['relationship']."
			</td>
		</tr>
		<tr>
			<td>สถานภาพทางทหาร : </td>
			<td colspan=\"7\">
				".$_POST['militar_status']."
			</td>
		</tr>
		<tr>
			<td>โรคประจำตัว : </td>
			<td colspan=\"7\">
				".$_POST['congenital_disease']."
			</td>
		</tr>
		<tr>
			<td>ที่อยู่ปัจจุบัน (ที่ติดต่อได้) : </td>
			<td colspan=\"7\">
				".$_POST['address']."
			</td>
		</tr>
		<tr>
			<td>เบอร์ติดต่อ </td>
			<td colspan=\"7\">
				โทรศัพท์ : ".$_POST['tell']."
				<span style=\"padding-left:5em\"></span>
				โทรศัพท์ : ".$_POST['cell_phone']."
			</td>
		</tr>
		<tr>
			<td>อีเมล์ : </td>
			<td colspan=\"7\">
				".$_POST['email']."
			</td>
		</tr>
		<tr>
			<td colspan=\"8\"></td>
		</tr>
		<tr>
			<th bgcolor=\"#f8acc8\">
		<i class=\"fa fa-hand-o-right\" aria-hidden=\"true\"></i> เอกสารประกอบการสมัครงาน
		</th>
		<td colspan=\"5\"></td>
		 </tr>
		 <tr>
			 <td colspan=\"8\"></td>
		 </tr>

	</table>
	<table class=\"table-modal\" bordercolor=\"#fb85b9\" width=\"100%\">

		 <tr>
			 <th  class=\"td-big\" align=\"center\">ระดับการศึกษา</th>
			 <th class=\"td-big\" align=\"center\">สถาบันการศึกษา</th>
			 <th class=\"td-big\" align=\"center\">สาขา/วิชาเอก</th>
			 <th class=\"td-big\" align=\"center\">วุฒิการศึกษาที่ได้รับ</th>
			 <th class=\"td-big\" align=\"center\">GPA</th>
			 <th class=\"td-big\" align=\"center\">วันที่สำเร็จการศึกษา (DD/MM/YYYY)</th>
		 </tr>
		 <tr>
			 <td>มัธยมศึกษาตอนต้น</td>
			 <td>".$_POST['junior_school_name']."</td>
			 <td>".$_POST['junior_major']."</td>
			 <td>".$_POST['junior_education_background']."</td>
			 <td>".$_POST['junior_gpa']."</td>
			 <td align=\"center\">";
			 if($_POST['junior_graduate_date']!=""){
				 $job_mail.=DateThai($_POST['junior_graduate_date']);
			 }
			 $job_mail.="</td>
		 </tr>
		 <tr>
			 <td>มัธยมศึกษาตอนปลาย</td>
			 <td>".$_POST['high_school_name']."</td>
			 <td>".$_POST['high_major']."</td>
			 <td>".$_POST['high_education_background']."</td>
			 <td>".$_POST['high_gpa']."</td>
			 <td align=\"center\">";
			 if($_POST['high_graduate_date']!=""){
				 $job_mail.=DateThai($_POST['high_graduate_date']);
			 }
			 $job_mail.="</td>
		 </tr>
		 <tr>
			 <td>ประกาศนียบัตรวิชาชีพ</td>
			 <td>".$_POST['vocational_school_name']."</td>
			 <td>".$_POST['vocational_major']."</td>
			 <td>".$_POST['vocational_education_background']."</td>
			 <td>".$_POST['vocational_gpa']."</td>
			 <td align=\"center\">";
			 if($_POST['vocational_graduate_date']!=""){
				 $job_mail.=DateThai($_POST['vocational_graduate_date']);
			 }
			 $job_mail.="</td>
		 </tr>
		 <tr>
			 <td>ประกาศนียบัตรวิชาชีพชั้นสูง</td>
			 <td>".$_POST['diploma_school_name']."</td>
			 <td>".$_POST['diploma_major']."</td>
			 <td>".$_POST['diploma_education_background']."</td>
			 <td>".$_POST['diploma_gpa']."</td>
			 <td align=\"center\">";
			 if($_POST['diploma_graduate_date']!=""){
				 $job_mail.=DateThai($_POST['diploma_graduate_date']);
			 }
			 $job_mail.="</td>
		 </tr>
		 <tr>
			 <td>ปริญญาตรี</td>
			 <td>".$_POST['bachelor_school_name']."</td>
			 <td>".$_POST['bachelor_major']."</td>
			 <td>".$_POST['bachelor_education_background']."</td>
			 <td>".$_POST['bachelor_gpa']."</td>
			 <td align=\"center\">";
			 if($_POST['bachelor_graduate_date']!=""){
				 $job_mail.=DateThai($_POST['bachelor_graduate_date']);
			 }
			 $job_mail.="</td>
		 </tr>
		 <tr>
			 <td>ปริญญาโท</td>
			 <td>".$_POST['mester_school_name']."</td>
			 <td>".$_POST['mester_major']."</td>
			 <td>".$_POST['mester_education_background']."</td>
			 <td>".$_POST['mester_gpa']."</td>
			 <td align=\"center\">";
			 if($_POST['mester_graduate_date']!=""){
				 $job_mail.=DateThai($_POST['mester_graduate_date']);
			 }
			 $job_mail.="</td>
		 </tr>
		 <tr>
			 <td >ปริญญาเอก</td>
			 <td>".$_POST['doctor_school_name']."</td>
			 <td>".$_POST['doctor_major']."</td>
			 <td>".$_POST['doctor_education_background']."</td>
			 <td>".$_POST['doctor_gpa']."</td>
			 <td align=\"center\">";
			 if($_POST['doctor_graduate_date']!=""){
				 $job_mail.=DateThai($_POST['doctor_graduate_date']);
			 }
			 $job_mail.="</td>
		 </tr>
	 </table>
	 <table width=\"100%\" class=\"table-modal\">
		 <tr>
			 <td colspan=\"6\"></td>
		 </tr>
		 <tr>
		 <th width=\"250\" bgcolor=\"#f8acc8\">
		 <i class=\"fa fa-hand-o-right\" aria-hidden=\"true\"></i> ประวัติการฝึกงาน
		 </th>
		 <td colspan=\"5\"></td>
			</tr>
			<tr>
				<td colspan=\"6\"> </td>
			</tr>
	 </table>

	 <table class=\"table-modal\" bordercolor=\"#fb85b9\" width=\"100%\">

		 <tr>
			 <th class=\"td-big\">ชื่อสถานททำงานี่/ฝึกงาน</th>
			 <th colspan=\"2\"  class=\"td-big\">ระยะเวลาในการทำงาน / ฝึกงาน
				 <br />วันที่เริ่มงาน ถึง วันที่สิ้นสุด</th>
			 <th class=\"td-big\">ตำแหน่ง</th>
			 <th class=\"td-big\">เงินเดือน (บาท)</th>
			 <th class=\"td-big\">ลักษณะงาน</th>
		 </tr>
		 <tr>
			 <td>".$_POST['office_name']."</td>
			 <td colspan=\"2\">";
			 if($_POST['date_start']!=""){
				 $job_mail.=DateThai($_POST['date_start']);
			 }
			 $job_mail.=" - ";
			 if($_POST['date_end']!=""){
				 $job_mail.=DateThai($_POST['date_end']);
			 }
			 $job_mail.="</td>
			 <td>".$_POST['position']."</td>
			 <td>".$_POST['exsalary']."</td>
			 <td>".$_POST['job_detail']."</td>
		 </tr>
		 <tr>
			 <td>".$_POST['office_name2']."</td>
			 <td colspan=\"2\">";
			 if($_POST['date_start2']!=""){
				 $job_mail.=DateThai($_POST['date_start2']);
			 }
			 $job_mail.=" - ";
			 if($_POST['date_end2']!=""){
				 $job_mail.=DateThai($_POST['date_end2']);
			 }
			 $job_mail.="</td>
			 <td>".$_POST['position2']."</td>
			 <td>".$_POST['exsalary2']."</td>
			 <td>".$_POST['job_detail2']."</td>
		 </tr>
		 <tr>
			 <td>".$_POST['office_name3']."</td>
			 <td colspan=\"2\">";
			 if($_POST['date_start3']!=""){
				 $job_mail.=DateThai($_POST['date_start3']);
			 }
			 $job_mail.=" - ";
			 if($_POST['date_end3']!=""){
				 $job_mail.=DateThai($_POST['date_end3']);
			 }
			 $job_mail.="</td>
			 <td>".$_POST['position3']."</td>
			 <td>".$_POST['exsalary3']."</td>
			 <td>".$_POST['job_detail3']."</td>
		 </tr>
	 </table>
	 <table width=\"100%\" class=\"table-modal\">
		 <tr>
			 <td colspan=\"6\"></td>
		 </tr>
		 <tr>
		 <th width=\"250\" bgcolor=\"#f8acc8\">
		 <i class=\"fa fa-hand-o-right\" aria-hidden=\"true\"></i> รายละเอียดการปฎิบัติงาน
		 </th>
		 <td colspan=\"5\"></td>
			</tr>

	 </table>
	 <table  width=\"100%\" class=\"table-modal\">
		 <tr>
			 <td width=\"250\">ปฎิบัติงานเข้ากะได้หรือไม่ :</td>
			 <td colspan=\"5\">".$_POST['work_shift']."</td>
		 </tr>
		 <tr>
			 <td>ปฎิบัติงานต่างจังหวัด ได้หรือไม่ :</td>
			 <td colspan=\"5\">".$_POST['work_another_province']."</td>
		 </tr>
		 <tr>
			 <td>ปฎิบัติงานต่างประเทศ ได้หรือไม่ :</td>
			 <td colspan=\"5\">".$_POST['work_another_country']."</td>
		 </tr>
		 <tr>
			 <td>ประเภทใบขับขี่ที่ท่านมี :</td>
			 <td colspan=\"5\">".$_POST['driver_licence']."</td>
		 </tr>
		 <tr>
			 <td>หากผ่านการทดสอบท่าน สามารถเริ่มงาน :</td>
			 <td colspan=\"5\">".$_POST['can_work_after_test']." หลังทราบผล
</td>
		 </tr>
	 </table>
	 <table width=\"100%\" class=\"table-modal\">
		 <tr>
			 <td colspan=\"6\"></td>
		 </tr>
		 <tr>
		 <th width=\"250\" bgcolor=\"#f8acc8\">
		 <i class=\"fa fa-hand-o-right\" aria-hidden=\"true\"></i>  ความรู้ความสามารถพิเศษ (Skill)
		 </th>
		 <td colspan=\"5\"></td>
			</tr>
			<tr>
				<td colspan=\"6\"></td>
			</tr>

	 </table>
	 <table class=\"table-modal\" bordercolor=\"#fb85b9\" width=\"100%\">

		 <tr>
			 <th class=\"td-big\">ภาษา</th>
			 <th class=\"td-big\">ฟัง</th>
			 <th class=\"td-big\">พูด</th>
			 <th class=\"td-big\">อ่าน</th>
			 <th class=\"td-big\">เขียน</th>
		 </tr>
		 <tr>
			 <td>ไทย</td>
			 <td >".$_POST['listen_thai']."</td>
			 <td>".$_POST['speak_thai']."</td>
			 <td>".$_POST['read_thai']."</td>
			 <td>".$_POST['write_thai']."</td>
		 </tr>
		 <tr>
			 <td>อักกฤษ</td>
			 <td >".$_POST['listen_en']."</td>
			 <td>".$_POST['speak_en']."</td>
			 <td>".$_POST['read_en']."</td>
			 <td>".$_POST['write_en']."</td>
		 </tr>
		 <tr>
			 <td>".$_POST['language_etc1']."</td>
			 <td>".$_POST['listen_etc1']."</td>
			 <td>".$_POST['speak_etc1']."</td>
			 <td>".$_POST['read_etc1']."</td>
			 <td>".$_POST['write_etc1']."</td>
		 </tr>
		 <tr>
			 <td>".$_POST['language_etc2']."</td>
			 <td >".$_POST['listen_etc2']."</td>
			 <td>".$_POST['speak_etc2']."</td>
			 <td>".$_POST['read_etc2']."</td>
			 <td>".$_POST['write_etc2']."</td>
		 </tr>
	 </table>
	 <table  width=\"100%\" class=\"table-modal\">
		 <tr>
			 <td width=\"250\">ความสามารถเพิ่มเติม :</td>
			 <td colspan=\"5\">".$_POST['talent']."</td>
		 </tr>
		 <tr>
			 <td>รางวัลความสำเร็จ :</td>
			 <td colspan=\"5\">".$_POST['award']."</td>
		 </tr>

	 </table>
	 <table width=\"100%\" class=\"table-modal\">
		 <tr>
			 <td colspan=\"6\"></td>
		 </tr>
		 <tr>
		 <th width=\"250\" bgcolor=\"#f8acc8\">
		 <i class=\"fa fa-hand-o-right\" aria-hidden=\"true\"></i>  บุคคลอ้างอิง
		 </th>
		 <td colspan=\"5\"></td>
			</tr>
			<tr>
				<td colspan=\"6\"></td>
			</tr>

	 </table>
	 <table class=\"table-modal\" bordercolor=\"#fb85b9\" width=\"100%\">

		 <tr>
			 <th class=\"td-big\">ชื่อ-สกุล</th>
			 <th class=\"td-big\">สถานที่ทำงาน / ตำแหน่ง</th>
			 <th class=\"td-big\">เบอร์โทรศัพท์ติดต่อ</th>
			 <th class=\"td-big\">ความสัมพันธ์</th>

		 </tr>
		 <tr>
			 <td>".$_POST['reference_name']."</td>
			 <td>".$_POST['reference_office_or_position']."</td>
			 <td>".$_POST['reference_tell']."</td>
			 <td>".$_POST['reference_relation']."</td>
		 </tr>
		 <tr>
			 <td>".$_POST['reference_name2']."</td>
			 <td>".$_POST['reference_office_or_position2']."</td>
			 <td>".$_POST['reference_tell2']."</td>
			 <td>".$_POST['reference_relation2']."</td>
		 </tr>
		 <tr>
			 <td>".$_POST['reference_name3']."</td>
			 <td>".$_POST['reference_office_or_position3']."</td>
			 <td>".$_POST['reference_tell3']."</td>
			 <td>".$_POST['reference_relation3']."</td>
		 </tr>
	 </table>
	 <table width=\"100%\" class=\"table-modal\">
		 <tr>
			 <td colspan=\"6\"></td>
		 </tr>
		 <tr>
		 <th width=\"250\" bgcolor=\"#f8acc8\">
		 <i class=\"fa fa-hand-o-right\" aria-hidden=\"true\"></i>  อื่น
		 </th>
		 <td colspan=\"5\"></td>
			</tr>

	 </table>
	 <table width=\"100%\" class=\"table-modal\">
		 <tr>
			 <td width=\"250\">ทราบข่าวการสมัครงานจาก :</td>
			 <td colspan=\"3\">".$_POST['source']."</td>
		 </tr>
		 <tr>
			 <td width=\"250\">หมายเหตุเพิ่มเติม :</td>
			 <td colspan=\"3\">".$_POST['note']."</td>
		 </tr>
	 </table>
	
	*/
 ?>
