<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body style="">

		<?php
		require('backoffice/mpdf/mpdf.php');

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
		ob_start();
		?>
		<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">

		<table width="100%" class="table-modal" style="font-size: 20px;">
			<tr>
					<td  colspan="8" align="center" style="text-align: center;"><img src="img/unnamed.png" align="middle" width="100" height="100"/></td>
				</tr>
					<tr>
						<td colspan="8" style="text-align: center;"><b>ข้อมูลการสมัครงาน</b> <br /><br /></td>
					</tr>
					<tr>
			<th bgcolor="#f8acc8" width="250">
				<i class="fa fa-hand-o-right" aria-hidden="true"></i> ตำแหน่งข้อมูลที่ต้องการสมัคร
				</th>
				<td colspan="7"></td>
				 </tr>
				<tr >
					<td>ตำแหน่งที่สนใจสมัคร 1 :</td>
					<td colspan="7">
						<?=$_POST['position_interest1']?>
					</td>
				</tr>
				<tr >
					<td>ตำแหน่งที่สนใจสมัคร 2 :</td>
					<td colspan="7">
						<?=$_POST['position_interest2']?>
					</td>
				</tr>
				<tr >
					<td>ตำแหน่งที่สนใจสมัคร 3 :</td>
					<td colspan="7">
						<?=$_POST['position_interest3']?>
					</td>
				</tr>
				<tr>
					<td>เงินเดือนที่ต้องการ : </td>
					<td colspan="7">
						<?=number_format($_POST['salary'])?>
					</td>
				</tr>
				<tr>
					<th bgcolor="#f8acc8" >
				<i class="fa fa-hand-o-right" aria-hidden="true"></i> เอกสารประกอบการสมัครงาน
				</th>
				<td colspan="7"></td>
				 </tr>
				<tr>

					<td class="td">ไฟล์รูปภาพ : </td>
					<td colspan="3">
						<img src="backoffice/job/<?=$picture_name?>" alt="" width="300" height="300">
					</td>
					<td>Transcript ผลการเรียน : </td>
					<td colspan="3">
						<img src="backoffice/job/<?=$transcript_name?>" alt="" width="300" height="300">
					</td>
				</tr>
				<tr>
					<th bgcolor="#f8acc8">
				<i class="fa fa-hand-o-right" aria-hidden="true"></i> เอกสารประกอบการสมัครงาน
				</th>
				<td colspan="7"></td>
				 </tr>
				<tr>
					<td>ชื่อ-สกุล (ไทย) : </td>
					<td colspan="7">
						<?=$fullname_th?>
					</td>
				</tr>
				<tr>
					<td>ชื่อ-สกุล (อังกฤษ) : </td>
					<td colspan="7">
						<?=$fullname_en?>
					</td>
				</tr>
				<tr>
					<td>เลขบัตรประจำตัวประชาชน : </td>
					<td colspan="7">
						<?=$_POST['identity']?>
					</td>
				</tr>
				<tr>
					<td>เพศ : </td>
					<td colspan="7">
						<?=$_POST['sex']?>
					</td>
				</tr>
				<tr>
					<td>วันเดือนปีเกิด : </td>
					<td >
						<?php
						if($_POST['bday']!=""){
							echo DateThai($_POST['bday']);
						}
						?>
					</td>
				 <td colspan="6">
					 น้ำหนัก :
						<?=$_POST['weight'] ?> กก.
						<span style="padding-left:5em"></span>
					สูง :

						<?=$_POST['height'] ?> ซ.ม.
					</td>
				</tr>
				<tr>
					<td>สัญชาติ : </td>
					<td>
						<?=$_POST['nationality']?>
					</td>
					<td colspan="6">
						จำวนวพี่น้อง : <?=$_POST['brethren']?>
						<span style="padding-left:5em"></span>
						ท่านเป็นคนที่ : <?=$_POST['num_of_brethren']?>
						<span style="padding-left:5em"></span>
						ศาสนา : <?=$_POST['religion']?>
					</td>
				</tr>
				<tr>
					<td>สถานภาพครอบครัว : </td>
					<td colspan="7">
						<?=$_POST['relationship']?>
					</td>
				</tr>
				<tr>
					<td>สถานภาพทางทหาร : </td>
					<td colspan="7">
						<?=$_POST['militar_status']?>
					</td>
				</tr>
				<tr>
					<td>โรคประจำตัว : </td>
					<td colspan="7">
						<?=$_POST['congenital_disease']?>
					</td>
				</tr>
				<tr>
					<td>ที่อยู่ปัจจุบัน (ที่ติดต่อได้) : </td>
					<td colspan="7">
						<?=$_POST['address']?>
					</td>
				</tr>
				<tr>
					<td>เบอร์ติดต่อ </td>
					<td colspan="7">
						โทรศัพท์ : <?=$_POST['tell']?>
						<span style="padding-left:5em"></span>
						โทรศัพท์ : <?=$_POST['cell_phone']?>
					</td>
				</tr>
				<tr>
					<td>อีเมล์ : </td>
					<td colspan="7">
						<?=$_POST['email']?>
					</td>
				</tr>
				<tr>
					<td colspan="8"></td>
				</tr>
				<tr>
					<th bgcolor="#f8acc8">
				<i class="fa fa-hand-o-right" aria-hidden="true"></i> เอกสารประกอบการสมัครงาน
				</th>
				<td colspan="5"></td>
				 </tr>
				 <tr>
					 <td colspan="8"></td>
				 </tr>

			</table>
			<table class="table-modal" bordercolor="#fb85b9" width="100%" border="1" cellspacing="0">

				 <tr >
					 <td  class="td-big" align="center">ระดับการศึกษา</th>
					 <th  class="td-big" align="center">สถาบันการศึกษา</th>
					 <th  class="td-big" align="center">สาขา/วิชาเอก</th>
					 <th  class="td-big" align="center">วุฒิการศึกษาที่ได้รับ</th>
					 <th  class="td-big" align="center">GPA</th>
					 <th  class="td-big" align="center">วันที่สำเร็จการศึกษา (DD/MM/YYYY)</th>
				 </tr>
				 <tr>
					 <td >มัธยมศึกษาตอนต้น</td>
					 <td ><?=$_POST['junior_school_name']?></td>
					 <td ><?=$_POST['junior_major']?></td>
					 <td ><?=$_POST['junior_education_background']?></td>
					 <td ><?=$_POST['junior_gpa']?></td>
					 <td align="center"><?php
					 if($_POST['junior_graduate_date']!=""){
						 echo DateThai($_POST['junior_graduate_date']);
					 }
					 ?></td>
				 </tr>
				 <tr>
					 <td>มัธยมศึกษาตอนปลาย</td>
					 <td><?=$_POST['high_school_name']?></td>
					 <td><?=$_POST['high_major']?></td>
					 <td><?=$_POST['high_education_background']?></td>
					 <td><?=$_POST['high_gpa']?></td>
					 <td align="center"><?php
					 if($_POST['high_graduate_date']!=""){
						 echo ($_POST['high_graduate_date']);
					 }
					 ?></td>
				 </tr>
				 <tr>
					 <td>ประกาศนียบัตรวิชาชีพ</td>
					 <td><?=$_POST['vocational_school_name']?></td>
					 <td><?=$_POST['vocational_major']?></td>
					 <td><?=$_POST['vocational_education_background']?></td>
					 <td><?=$_POST['vocational_gpa']?></td>
					 <td align="center"><?php
					 if($_POST['vocational_graduate_date']!=""){
						 echo DateThai($_POST['vocational_graduate_date']);
					 }
					 ?></td>
				 </tr>
				 <tr>
					 <td>ประกาศนียบัตรวิชาชีพชั้นสูง</td>
					 <td><?=$_POST['diploma_school_name']?></td>
					 <td><?=$_POST['diploma_major']?></td>
					 <td><?=$_POST['diploma_education_background']?></td>
					 <td><?=$_POST['diploma_gpa']?></td>
					 <td align="center"><?php
					 if($_POST['diploma_graduate_date']!=""){
						 echo DateThai($_POST['diploma_graduate_date']);
					 }
					 ?></td>
				 </tr>
				 <tr>
					 <td>ปริญญาตรี</td>
					 <td><?=$_POST['bachelor_school_name']?></td>
					 <td><?=$_POST['bachelor_major']?></td>
					 <td><?=$_POST['bachelor_education_background']?></td>
					 <td><?=$_POST['bachelor_gpa']?></td>
					 <td align="center"><?php
					 if($_POST['bachelor_graduate_date']!=""){
						 echo DateThai($_POST['bachelor_graduate_date']);
					 }
					 ?></td>
				 </tr>
				 <tr>
					 <td>ปริญญาโท</td>
					 <td><?=$_POST['mester_school_name']?></td>
					 <td><?=$_POST['mester_major']?></td>
					 <td><?=$_POST['mester_education_background']?></td>
					 <td><?=$_POST['mester_gpa']?></td>
					 <td align="center"><?php
					 if($_POST['mester_graduate_date']!=""){
						 echo DateThai($_POST['mester_graduate_date']);
					 }
					 ?></td>
				 </tr>
				 <tr>
					 <td >ปริญญาเอก</td>
					 <td><?=$_POST['doctor_school_name']?></td>
					 <td><?=$_POST['doctor_major']?></td>
					 <td><?=$_POST['doctor_education_background']?></td>
					 <td><?=$_POST['doctor_gpa']?></td>
					 <td align="center"><?php
					 if($_POST['doctor_graduate_date']!=""){
						 echo DateThai($_POST['doctor_graduate_date']);
					 }
					 ?></td>
				 </tr>
			 </table>
			 <br />
			  <br />
				 <br />
			 <table width="100%" class="table-modal">
				 <tr>
					 <td colspan="6"></td>
				 </tr>
				 <tr>
				 <th width="250" bgcolor="#f8acc8">
				 <i class="fa fa-hand-o-right" aria-hidden="true"></i> ประวัติการฝึกงาน
				 </th>
				 <td colspan="5"></td>
					</tr>
					<tr>
						<td colspan="6"> </td>
					</tr>

			 </table>

			 <table class="table-modal" bordercolor="#fb85b9" width="100%" border="1" cellspacing="0">

				 <tr>
					 <th class="td-big">ชื่อสถานททำงานี่/ฝึกงาน</th>
					 <th colspan="2"  class="td-big">ระยะเวลาในการทำงาน / ฝึกงาน
						 <br />วันที่เริ่มงาน ถึง วันที่สิ้นสุด</th>
					 <th class="td-big">ตำแหน่ง</th>
					 <th class="td-big">เงินเดือน (บาท)</th>
					 <th class="td-big">ลักษณะงาน</th>
				 </tr>
				 <tr>
					 <td><?=$_POST['office_name']?></td>
					 <td colspan="2"><?php
					 if($_POST['date_start']!=""){
						 echo DateThai($_POST['date_start']);
					 }
					 echo " - ";
					 if($_POST['date_end']!=""){
						 echo DateThai($_POST['date_end']);
					 }
					 ?></td>
					 <td><?=$_POST['position']?></td>
					 <td><?=$_POST['exsalary']?></td>
					 <td><?=$_POST['job_detail']?></td>
				 </tr>
				 <tr>
					 <td><?=$_POST['office_name2']?></td>
					 <td colspan="2"><?php
					 if($_POST['date_start2']!=""){
						 echo DateThai($_POST['date_start2']);
					 }
					 echo " - ";
					 if($_POST['date_end2']!=""){
						 echo DateThai($_POST['date_end2']);
					 }
					 ?></td>
					 <td><?=$_POST['position2']?></td>
					 <td><?=$_POST['exsalary2']?></td>
					 <td><?=$_POST['job_detail2']?></td>
				 </tr>
				 <tr>
					 <td><?=$_POST['office_name3']?></td>
					 <td colspan="2"><?php
					 if($_POST['date_start3']!=""){
						 echo DateThai($_POST['date_start3']);
					 }
					 echo " - ";
					 if($_POST['date_end3']!=""){
						 echo DateThai($_POST['date_end3']);
					 }
					 ?></td>
					 <td><?=$_POST['position3']?></td>
					 <td><?=$_POST['exsalary3']?></td>
					 <td><?=$_POST['job_detail3']?></td>
				 </tr>
			 </table>
			 <table width="100%" class="table-modal">
				 <tr>
					 <td colspan="6"></td>
				 </tr>
				 <tr>
				 <th width="250" bgcolor="#f8acc8">
				 <i class="fa fa-hand-o-right" aria-hidden="true"></i> รายละเอียดการปฎิบัติงาน
				 </th>
				 <td colspan="5"></td>
					</tr>

			 </table>
			 <table  width="100%" class="table-modal">
				 <tr>
					 <td width="250">ปฎิบัติงานเข้ากะได้หรือไม่ :</td>
					 <td colspan="5"><?=$_POST['work_shift']?></td>
				 </tr>
				 <tr>
					 <td>ปฎิบัติงานต่างจังหวัด ได้หรือไม่ :</td>
					 <td colspan="5"><?=$_POST['work_another_province']?></td>
				 </tr>
				 <tr>
					 <td>ปฎิบัติงานต่างประเทศ ได้หรือไม่ :</td>
					 <td colspan="5"><?=$_POST['work_another_country']?></td>
				 </tr>
				 <tr>
					 <td>ประเภทใบขับขี่ที่ท่านมี :</td>
					 <td colspan="5"><?=$_POST['driver_licence']?></td>
				 </tr>
				 <tr>
					 <td>หากผ่านการทดสอบท่าน สามารถเริ่มงาน :</td>
					 <td colspan="5"><?=$_POST['can_work_after_test']?> หลังทราบผล
			</td>
				 </tr>
			 </table>
			 <table width="100%" class="table-modal">
				 <tr>
					 <td colspan="6"></td>
				 </tr>
				 <tr>
				 <th width="250" bgcolor="#f8acc8">
				 <i class="fa fa-hand-o-right" aria-hidden="true"></i>  ความรู้ความสามารถพิเศษ (Skill)
				 </th>
				 <td colspan="5"></td>
					</tr>
					<tr>
						<td colspan="6"></td>
					</tr>

			 </table>
			 <table class="table-modal" bordercolor="#fb85b9" width="100%" border="1" cellspacing="0">

				 <tr>
					 <th class="td-big">ภาษา</th>
					 <th class="td-big">ฟัง</th>
					 <th class="td-big">พูด</th>
					 <th class="td-big">อ่าน</th>
					 <th class="td-big">เขียน</th>
				 </tr>
				 <tr>
					 <td>ไทย</td>
					 <td ><?=$_POST['listen_thai']?></td>
					 <td><?=$_POST['speak_thai']?></td>
					 <td><?=$_POST['read_thai']?></td>
					 <td><?=$_POST['write_thai']?></td>
				 </tr>
				 <tr>
					 <td>อักกฤษ</td>
					 <td ><?=$_POST['listen_en']?></td>
					 <td><?=$_POST['speak_en']?></td>
					 <td><?=$_POST['read_en']?></td>
					 <td><?=$_POST['write_en']?></td>
				 </tr>
				 <tr>
					 <td><?php if($_POST['language_etc1']=="")echo "-"; else $_POST['language_etc1'];?></td>
					 <td><?=$_POST['listen_etc1']?></td>
					 <td><?=$_POST['speak_etc1']?></td>
					 <td><?=$_POST['read_etc1']?></td>
					 <td><?=$_POST['write_etc1']?></td>
				 </tr>
				 <tr>
					 <td><?php if($_POST['language_etc2']=="")echo "-"; else $_POST['language_etc2'];?></td>
					 <td ><?=$_POST['listen_etc2']?></td>
					 <td><?=$_POST['speak_etc2']?></td>
					 <td><?=$_POST['read_etc2']?></td>
					 <td><?=$_POST['write_etc2']?></td>
				 </tr>
			 </table>
			 <table  width="100%" class="table-modal">
				 <tr>
					 <td width="250">ความสามารถเพิ่มเติม :</td>
					 <td colspan="5"><?=$_POST['talent']?></td>
				 </tr>
				 <tr>
					 <td>รางวัลความสำเร็จ :</td>
					 <td colspan="5"><?=$_POST['award']?></td>
				 </tr>

			 </table>
			 <table width="100%" class="table-modal">
				 <tr>
					 <td colspan="6"></td>
				 </tr>
				 <tr>
				 <th width="250" bgcolor="#f8acc8">
				 <i class="fa fa-hand-o-right" aria-hidden="true"></i>  บุคคลอ้างอิง
				 </th>
				 <td colspan="5"></td>
					</tr>
					<tr>
						<td colspan="6"></td>
					</tr>

			 </table>
			 <table class="table-modal" bordercolor="#fb85b9" width="100%" border="1" cellspacing="0">

				 <tr>
					 <th class="td-big">ชื่อ-สกุล</th>
					 <th class="td-big">สถานที่ทำงาน / ตำแหน่ง</th>
					 <th class="td-big">เบอร์โทรศัพท์ติดต่อ</th>
					 <th class="td-big">ความสัมพันธ์</th>

				 </tr>
				 <tr>
					 <td><?php if($_POST['reference_name']=="") echo"-"; else $_POST['reference_name'];?></td>
					 <td><?=$_POST['reference_office_or_position']?></td>
					 <td><?=$_POST['reference_tell']?></td>
					 <td><?=$_POST['reference_relation']?></td>
				 </tr>
				 <tr>
					 <td><?php if($_POST['reference_name2']=="") echo"-"; else $_POST['reference_name2'];?></td>
					 <td><?=$_POST['reference_office_or_position2']?></td>
					 <td><?=$_POST['reference_tell2']?></td>
					 <td><?=$_POST['reference_relation2']?></td>
				 </tr>
				 <tr>
					 <td><?php if($_POST['reference_name3']=="") echo"-"; else $_POST['reference_name3'];?></td>
					 <td><?=$_POST['reference_office_or_position3']?></td>
					 <td><?=$_POST['reference_tell3']?></td>
					 <td><?=$_POST['reference_relation3']?></td>
				 </tr>
			 </table>
			 <table width="100%" class="table-modal">
				 <tr>
					 <td colspan="6"></td>
				 </tr>
				 <tr>
				 <th width="250" bgcolor="#f8acc8">
				 <i class="fa fa-hand-o-right" aria-hidden="true"></i>  อื่น
				 </th>
				 <td colspan="5"></td>
					</tr>

			 </table>
			 <table width="100%" class="table-modal">
				 <tr>
					 <td width="250">ทราบข่าวการสมัครงานจาก :</td>
					 <td colspan="3"><?=$_POST['source']?></td>
				 </tr>
				 <tr>
					 <td width="250">หมายเหตุเพิ่มเติม :</td>
					 <td colspan="3"><?=$_POST['note']?></td>
				 </tr>
			 </table>

		<?php

		$html = ob_get_contents();
		ob_end_clean();
		$pdf = new mPDF('th', 'A4', '0', 'THSaraban');
		$pdf->SetAutoFont();
		$pdf->SetDisplayMode('fullpage');
		$pdf->WriteHTML($html, 2);
		$pdf->Output('backoffice/pdf/job.pdf', 'F');
		?>
	</body>
</html>
