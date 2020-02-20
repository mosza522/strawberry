<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body style="">

		<?php
		require_once('backoffice/mpdf/mpdf.php');

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
    function DateThai($strDate)
    {
      if($strDate!=""){
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
  }
  }
		?>
		<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">

      <div class="container">
          <div class="ffgghh wow fadeInRight">
              <div class="row">
                  <div class="text-job" style="text-align:center;"> ใบสมัครแฟรนไชส์ </div>
              </div>
              <div class="row">
                  <div class="col-sm-12">
                      <div class="col-sm-6 imgjob1" style="text-align:center;"><img src="img/Logob.jpg"  width="250" height="200"></div>
                      <div class="col-sm-6 text-job2" style="text-align:center;">บริษัท ไลฟ์เวย์อินเตอร์เทรด จำกัด (สำนักงานใหญ่)
                          <br>Lifewayintertrade Co.,Ltd (Head Office)
                          <br> 5/7 ซ.พหลโยธิน 52 แยก 11(เดชศิรี) แขวงครองถนน
                          <br>เขตสายไหม กรุงเทพมหานคร 10220 </div>
                  </div>
              </div>
          </div>
          <form class="" action="regis_franchise.php" method="post" enctype="multipart/form-data">

          <div class="rpool wow fadeInLeft">
              <div class="text-jobk"> ขอขอบคุณทุกท่านที่ให้ความสนใจในธุรกิจแฟรนไชส์ของ Strawberry Club เพื่อใช้เป็นข้อมูลประกอบการการพิจารณาของทางบริษัทฯ
                  กรุณากรอกใบสมัครทุกส่วนที่เกี่ยวข้องกับท่าน </div>
              <div class="text-mok"> <i class="fa fa-hand-o-right" aria-hidden="true"></i><b>ข้อมูลทั่วไป</b> </div>
              <div class="row">
                  <div class="col-sm-2">
                      <div class="gfg"> <b>ชื่อ-สกุล (ไทย) </b></div>
                  </div>
                  <div class="col-sm-10 iopp">
                      <td width="80%">
                          <?=$_POST['title_th']?> <?=$_POST['firstname_th']?> <?=$_POST['lastname_th']?>
                        </td>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-2">
                      <div class="gfg"><b> ชื่อ-สกุล (อังกฤษ)</b></div>
                  </div>
                  <div class="col-sm-10 iopp">
                      <td width="80%"><?=$_POST['title_en']?> <?=$_POST['firstname_en']?> <?=$_POST['lastname_en']?></td>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-2">
                      <div class="gfg"><b> เลขบัตรประจำตัวประชาชน</b></div>
                  </div>
                  <div class="col-sm-10 iopp">
                      <td>
                          <?=$_POST['identity']?>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-2">
                      <div class="gfg"><b> เพศ</b></div>
                  </div>
                  <div class="col-sm-10 iopp">
                      <td class="smalltxt">
                          <?=$_POST['sex']?>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-2">
                      <div class="gfg"><b> วัน/เดือน/ปีเกิด</b></div>
                  </div>
                  <div class="col-sm-10 iopp">
                      <td>
                          <?=DateThai($_POST['bday'])?></td>
                      <td class="smalltxt" width="25%"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>น้ำหนัก</b> <font color="red">*</font>
                          <?=$_POST['weight']?>&nbsp;ก.ก </td>
                      <td class="smalltxt" width="25%"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>สูง</b> <font color="red">*</font>
                        <?=$_POST['height']?> &nbsp;ซ.ม </td>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-2">
                      <div class="gfg"><b> สัญชาติ</b></div>
                  </div>
                  <div class="col-sm-10 iopp">
                      <td>
                          <?=$_POST['nationality']?> </td>
                      <td class="smalltxt" width="25%"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>จำนวนพี่น้อง</b> <font color="red">*</font>
                  <?=$_POST['num_bro']?>        &nbsp;คน </td>
                      <td class="smalltxt" width="25%"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>ท่านเป็นคนท</b>ี่ <font color="red">*</font>
                  <?=$_POST['you_are']?>         &nbsp; </td>
                      <td class="smalltxt" width="25%"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>ศาสนา </b><font color="red">*</font>
                  <?=$_POST['religion']?>     &nbsp; </td>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-2">
                      <div class="gfg"> <b>สถานภาพครอบครัว</b></div>
                  </div>
                  <div class="col-sm-10 iopp">
                      <td class="smalltxt">
                          <?=$_POST['family']?> &nbsp;หย่า</td>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-2">
                      <div class="gfg"><b> สถานภาพทางทหาร</b></div>
                  </div>
                  <div class="col-sm-10 iopp">
                      <td class="smalltxt">
                        <?=$_POST['military']?>
                      </td>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-2">
                      <div class="gfg"><b> โรคประจำตัว </b></div>
                  </div>
                  <div class="col-sm-10 iopp">
                      <td class="smalltxt">
                        <?php if($_POST['disease']=="มี"){
                          echo $_POST['disease'];
                          echo "  ".$_POST['disease_have'];
                        } else{
                          echo $_POST['disease'];
                        }?></div>
              </div>
              <div class="row">
                  <div class="col-sm-2">
                      <div class="gfg"><b> ที่อยู่ปัจจุบัน (ที่ติดต่อได้)</b> </div>
                  </div>
                  <div class="col-lg-8 lo10">
                    <?=$_POST['address']?>
              </div>
              <div class="row">
                  <div class="col-sm-2">
                      <div class="gfg"> <b>เบอร์ติดต่อ</b></div>
                  </div>
                  <div class="col-sm-10 iopp">
                      <td><b> โทรศัพท์ :</b>
                          <?=$_POST['tell']?>&nbsp;&nbsp;<b> มือถือ :</b>
                          <?=$_POST['cellphone']?></td>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-2">
                      <div class="gfg"><b> อีเมล์</b></div>
                  </div>
                  <div class="col-sm-10 iopp">
                      <td>
                      <?=$_POST['email']?></td>
                  </div>
              </div>
              <div class="text-mok"> <i class="fa fa-hand-o-right" aria-hidden="true"></i><b> สถานที่ทำงาน </b></div>
              <div class="row">
                  <div class="col-sm-2">
                      <div class="gfg"><b> บริษัท</b></div>
                  </div>
                  <div class="col-sm-10 iopp">
                      <td>
                      <?=$_POST['office_name']?></td>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-2">
                      <div class="gfg"><b> ที่อยู่ปัจจุบัน (ที่ติดต่อได้)</b> </div>
                  </div>
                  <div class="col-lg-8 lo10">
              <?=$_POST['office_address']?></div>
              </div>
              <br>
              <div class="row">
                  <div class="col-sm-2">
                      <div class="gfg"><b> เบอร์ติดต่อ</b></div>
                  </div>
                  <div class="col-sm-10 iopp">
                      <td> <b>โทรศัพท์ :</b>
                          <?=$_POST['office_tell']?>
                          &nbsp;&nbsp; <b>มือถือ :</b>
                          <?=$_POST['office_cellphone']?>
                           </td>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-2">
                      <div class="gfg"> <b>อีเมล์</b></div>
                  </div>
                  <div class="col-sm-8 iopp">
                      <td>
                        <?=$_POST['office_email']?>
                          </td>
                  </div>
              </div>
              <div class="text-mok"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> <b>ข้อมูลทางการศึกษา</b> </div>
              <div class="row">
                  <div class="col-sm-12 gfg">
                      <div class="table-responsive">
                          <td hright="30">
                              <table bordercolor="#fb85b9" cellspacing="0" cellpadding="1" width="100%" broder="1">
                                  <tbody>
                                      <tr align="middle" bgcolor="#f8acc8">
                                          <td class="smalltxt" width="20%" height="20%"> ระดับการศึกษา</td>
                                          <td class="smalltxt" width="20%"> สถาบันการศึกษา</td>
                                          <td class="smalltxt" width="20%"> สาขา/วิชาเอก</td>
                                          <td class="smalltxt" width="20%"> ตั้งแต่</td>
                                          <td class="smalltxt" width="20%"> ถึง</td>
                                      </tr>
                                      <tr>
                                          <td align="left" class="smalltxt"> &nbsp; มัธยมศึกษาตอนต้น</td>
                                          <td align="middle" class="smalltxt">
                                            <?=$_POST['junior_school_name']?> </td>
                                          <td align="middle" class="smalltxt">
                                            <?=$_POST['junior_major']?></td>
                                          <td align="middle" class="smalltxt">
                                            <?=DateThai($_POST['junior_start'])?></td>
                                          <td align="middle" class="smalltxt">
                                            <?=DateThai($_POST['junior_end'])?></td>
                                      </tr>
                                      <tr>
                                          <td align="left" class="smalltxt"> &nbsp; มัธยมศึกษาตอนปลาย</td>
                                          <td align="middle" class="smalltxt">
                                            <?=$_POST['high_school_name']?></td>
                                          <td align="middle" class="smalltxt">
                                            <?=$_POST['high_major']?></td>
                                          <td align="middle" class="smalltxt">
                                            <?=DateThai($_POST['high_start'])?></td>
                                          <td align="middle" class="smalltxt">
                                            <?=DateThai($_POST['high_end'])?></td>
                                      </tr>
                                      <tr>
                                          <td align="left" class="smalltxt"> &nbsp; ประกาศนียบัตรวิชาชีพ</td>
                                          <td align="middle" class="smalltxt">
                                            <?=$_POST['vocational_school_name']?></td>
                                          <td align="middle" class="smalltxt">
                                          <?=$_POST['vocational_major']?></td>
                                          <td align="middle" class="smalltxt">
                                            <?=DateThai($_POST['vocational_start'])?></td>
                                          <td align="middle" class="smalltxt">
                                            <?=DateThai($_POST['vocational_end'])?></td>
                                      </tr>
                                      <tr>
                                          <td align="left" class="smalltxt"> &nbsp; ประกาศนียบัตรวิชาชีพชั้นสูง</td>
                                          <td align="middle" class="smalltxt">
                                          <?=$_POST['diploma_school_name']?></td>
                                          <td align="middle" class="smalltxt">
                                            <?=$_POST['diploma_major']?></td>
                                          <td align="middle" class="smalltxt">
                                          <?=DateThai($_POST['diploma_start'])?></td>
                                          <td align="middle" class="smalltxt">
                                          <?=DateThai($_POST['diploma_end'])?></td>
                                      </tr>
                                      <tr>
                                          <td align="left" class="smalltxt"> &nbsp; ปริญญาตรี</td>
                                          <td align="middle" class="smalltxt">
                                          <?=$_POST['bachelor_school_name']?></td>
                                          <td align="middle" class="smalltxt">
                                          <?=$_POST['bachelor_major']?></td>
                                          <td align="middle" class="smalltxt">
                                          <?=DateThai($_POST['bachelor_start'])?></td>
                                          <td align="middle" class="smalltxt">
                                          <?=DateThai($_POST['bachelor_end'])?></td>
                                      </tr>
                                      <tr>
                                          <td align="left" class="smalltxt"> &nbsp; ปริญญาโท</td>
                                          <td align="middle" class="smalltxt">
                                        <?=$_POST['master_school_name']?></td>
                                          <td align="middle" class="smalltxt">
                                        <?=$_POST['master_major']?></td>
                                          <td align="middle" class="smalltxt">
                                        <?=DateThai($_POST['master_start'])?></td>
                                          <td align="middle" class="smalltxt">
                                        <?=DateThai($_POST['master_end'])?></td>
                                      </tr>
                                      <tr>
                                          <td align="left" class="smalltxt"> &nbsp; ปริญญาเอก</td>
                                          <td align="middle" class="smalltxt">
                                        <?=$_POST['doctor_school_name']?></td>
                                          <td align="middle" class="smalltxt">
                                        <?=$_POST['doctor_major']?></td>
                                          <td align="middle" class="smalltxt">
                                        <?=DateThai($_POST['doctor_start'])?></td>
                                          <td align="middle" class="smalltxt">
                                        <?=DateThai($_POST['doctor_end'])?></td>
                                      </tr>
                                  </tbody>
                              </table>
                          </td>
                      </div>
                  </div>
              </div>
              <div class="text-mok"> <i class="fa fa-hand-o-right" aria-hidden="true"></i><b> ประวัติการทำงาน</b> </div>
              <div class="row">
                  <div class="col-sm-12 gfg">
                      <div class="table-responsive">
                          <td hright="30">
                              <table bordercolor="#fb85b9" cellspacing="0" cellpadding="1" width="100%" broder="1">
                                  <tbody>
                                      <tr align="middle" bgcolor="#f8acc8">
                                          <td class="smalltxt" width="20%" height="20%"> ชื่อสถานที่ทำงาน</td>
                                          <td class="smalltxt" width="20%"> ระยะเวลาในการทำงาน
                                              <br>วันที่เริ่มงาน ถึง วันที่สิ้นสุด</td>
                                          <td class="smalltxt" width="20%">ตำแหน่งงาน</td>
                                          <td class="smalltxt" width="20%">ลักษณะงาน / เงินเดือน (บาท)</td>
                                          <td class="smalltxt" width="20%">เหตุที่ออก</td>
                                      </tr>
                                      <tr>
                                          <td align="middle" class="smalltxt">
                                      <?=$_POST['name_ex_office1']?></td>
                                          <td align="middle" class="smalltxt">
                                        <?=DateThai($_POST['time_start1'])?>-
                                        <?=DateThai($_POST['time_end1'])?></td>
                                          <td align="middle" class="smalltxt">
                                        <?=$_POST['opsition1']?></td>
                                          <td align="middle" class="smalltxt">
                                        <?=$_POST['work_detail1']?>-
                                        <?=$_POST['salary1']?></td>
                                          <td align="middle" class="smalltxt">
                                        <?=$_POST['because1']?></td>
                                      </tr>
                                      <tr>
                                        <td align="middle" class="smalltxt">
                                    <?=$_POST['name_ex_office2']?></td>
                                        <td align="middle" class="smalltxt">
                                      <?=DateThai($_POST['time_start2'])?>-
                                      <?=DateThai($_POST['time_end2'])?></td>
                                        <td align="middle" class="smalltxt">
                                      <?=$_POST['opsition2']?></td>
                                        <td align="middle" class="smalltxt">
                                      <?=$_POST['work_detail2']?>-
                                      <?=$_POST['salary2']?></td>
                                        <td align="middle" class="smalltxt">
                                      <?=$_POST['because2']?></td>
                                      </tr>
                                      <tr>
                                        <td align="middle" class="smalltxt">
                                    <?=$_POST['name_ex_office3']?></td>
                                        <td align="middle" class="smalltxt">
                                      <?=DateThai($_POST['time_start3'])?>-
                                      <?=DateThai($_POST['time_end3'])?></td>
                                        <td align="middle" class="smalltxt">
                                      <?=$_POST['opsition3']?></td>
                                        <td align="middle" class="smalltxt">
                                      <?=$_POST['work_detail3']?>-
                                      <?=$_POST['salary3']?></td>
                                        <td align="middle" class="smalltxt">
                                      <?=$_POST['because3']?></td>
                                      </tr>
                                  </tbody>
                              </table>
                          </td>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-3">
                      <div class="gfg"> <b>สถานภาพการทำงานของคุณในปัจจุบัน</b></div>
                  </div>
                  <div class="col-sm-9 iopp">
                      <td class="smalltxt">
                        <?=$_POST['work']?>
                      </td>
                  </div>
              </div>
              <div class="text-mok tttt"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> ข้อมูลทางการเงิน </div>
              <div class="row">
                  <div class="col-sm-12 gfg">
                      <div class="table-responsive">
                          <td hright="30">
                              <table bordercolor="#fb85b9" cellspacing="0" cellpadding="1" width="100%" broder="1">
                                  <tbody>
                                      <tr align="middle" bgcolor="#f8acc8">
                                          <td class="smalltxt" width="25%" height="20%"> ทรัพย์สิน</td>
                                          <td class="smalltxt" width="25%"> บาท</td>
                                          <td class="smalltxt" width="25%"> หนี้สิน</td>
                                          <td class="smalltxt" width="25%"> บาท</td>
                                      </tr>
                                      <tr>
                                          <td align="left" class="smalltxt"> &nbsp; เงินสด</td>
                                          <td align="middle" class="smalltxt">
                                          <?=$_POST['cash']?></td>
                                          <td align="left" class="smalltxt"> &nbsp; เงินกู้</td>
                                          <td align="middle" class="smalltxt">
                                          <?=$_POST['loan']?></td>
                                      </tr>
                                      <tr>
                                          <td align="left" class="smalltxt"> &nbsp; เงินลงทุนระยะยาว</td>
                                          <td align="middle" class="smalltxt">
                                          <?=$_POST['long_term']?></td>
                                          <td align="left" class="smalltxt"> &nbsp; เงินเบิกเกินบัญชี</td>
                                          <td align="middle" class="smalltxt">
                                          <?=$_POST['overdrafts']?></td>
                                      </tr>
                                      <tr>
                                          <td align="left" class="smalltxt"> &nbsp; ที่ดิน</td>
                                          <td align="middle" class="smalltxt">
                                          <?=$_POST['land']?> </td>
                                          <td align="left" class="smalltxt"> &nbsp; เงินกู้ยืมระยะสั้นจากสถาบันการเงิน</td>
                                          <td align="middle" class="smalltxt">
                                          <?=$_POST['short_term']?></td>
                                      </tr>
                                      <tr>
                                          <td align="left" class="smalltxt"> &nbsp; อาคาร</td>
                                          <td align="middle" class="smalltxt">
                                          <?=$_POST['building']?></td>
                                          <td align="left" class="smalltxt"> &nbsp; เงินรับล่วงหน้าจากลูกค้า</td>
                                          <td align="middle" class="smalltxt">
                                          <?=$_POST['money_from_customers']?></td>
                                      </tr>
                                      <tr>
                                          <td align="left" class="smalltxt"> &nbsp; สินทรัพย์หมุนเวียนอื่นๆ</td>
                                          <td align="middle" class="smalltxt">
                                          <?=$_POST['cycle_asset']?></td>
                                          <td align="left" class="smalltxt"> &nbsp; ค่าใช้จ่ายอื่นๆ</td>
                                          <td align="middle" class="smalltxt">
                                          <?=$_POST['other_expenses']?></td>
                                      </tr>
                                      <tr>
                                          <td align="left" class="smalltxt"> &nbsp; รายได้อื่นๆ</td>
                                          <td align="middle" class="smalltxt">
                                          <?=$_POST['other_income']?></td>
                                          <td> </td>
                                          <td align="middle" class="smalltxt">
                                          </td>
                                      </tr>
                                      <tr>
                                          <td align="left" class="smalltxt"> &nbsp; รวมทรัพย์สิน</td>
                                          <td align="middle" class="smalltxt">
                                          <?=$_POST['all_asset']?> </td>
                                          <td align="left" class="smalltxt"> &nbsp; รวมหนี้สิน</td>
                                          <td align="middle" class="smalltxt">
                                          <?=$_POST['all_Debt']?></td>
                                      </tr>
                                  </tbody>
                              </table>
                          </td>
                      </div>
                  </div>
              </div>
              <br>
              <div class="row">
                  <div class="col-sm-2">
                      <div class="gfg"> <b>โปรดระบุจำนวนเงินลงทุนและแหล่งที่มาของเงินทุน</b> </div>
                  </div>
                  <div class="col-lg-8 lo10">
                    <?=$_POST['source_money']?>
                  </div>
              <div class="row">
                  <div class="col-sm-3">
                      <div class="gfg"> <b>หุ้นส่วนที่ต้องการร่วมลงทุน </b></div>
                  </div>
                  <div class="col-sm-9 iopp">
                      <td class="smalltxt">
                        <?=$_POST['partner']?>
                        </td>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-2">
                      <div class="gfg"><b> ถ้ามีโปรดระบุ</b> </div>
                  </div>
                  <div class="col-lg-8 lo10">
                    <?=$_POST['partner_etc']?>
                  </div>
              <div class="row">
                  <div class="col-sm-3">
                      <div class="gfg"> <b>ทราบข้อมูลเกี่ยวกับธุรกิจแฟรนไชส์ของ Strawberry Club ได้อย่างไร </b></div>
                  </div>
                  <div class="col-sm-9 iopp">
                      <td class="smalltxt">
                        <?=$_POST['known']?></td>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-2">
                      <div class="gfg"> <b>อื่นๆ กรุณาระบุ</b> </div>
                  </div>
                  <div class="col-lg-8 lo10">
                      <?=$_POST['known_etc']?></div>
              </div>
              <div class="text-mok"> <i class="fa fa-hand-o-right" aria-hidden="true"></i><b> สถานที่ต้องการเปิดสาขา</b> </div>
              <div class="gfg">
                  <div class="table-responsive">
                      <td hright="30">
                          <table bordercolor="#fb85b9" cellspacing="0" cellpadding="1" width="100%" broder="1">
                              <tbody>
                                  <tr align="middle" bgcolor="#f8acc8">
                                      <td class="smalltxt" width="15%" height="20%"> ลำดับ</td>
                                      <td class="smalltxt" width="15%">ชื่อสาขา</td>
                                      <td class="smalltxt" width="15%">ขนาดพื้นที่</td>
                                      <td class="smalltxt" width="15%">กว้าง (ตรม.)</td>
                                      <td class="smalltxt" width="15%">ยาว(ตรม.)</td>
                                      <td class="smalltxt" width="15%">ลึก(ตรม.)</td>
                                  </tr>
                                  <tr>
                                      <td align="middle" class="smalltxt">
                                        <?=$_POST['no1']?></td>
                                      <td align="middle" class="smalltxt">
                                      <?=$_POST['branch_name1']?></td>
                                      <td align="middle" class="smalltxt">
                                        <?=$_POST['size_area1']?></td>
                                      <td align="middle" class="smalltxt">
                                      <?=$_POST['width1']?></td>
                                      <td align="middle" class="smalltxt">
                                      <?=$_POST['long1']?></td>
                                      <td align="middle" class="smalltxt">
                                      <?=$_POST['deep1']?></td>
                                  </tr>
                                  <tr><td align="middle" class="smalltxt">
                                    <?=$_POST['no2']?></td>
                                  <td align="middle" class="smalltxt">
                                  <?=$_POST['branch_name2']?></td>
                                  <td align="middle" class="smalltxt">
                                    <?=$_POST['size_area2']?></td>
                                  <td align="middle" class="smalltxt">
                                  <?=$_POST['width2']?></td>
                                  <td align="middle" class="smalltxt">
                                  <?=$_POST['long2']?></td>
                                  <td align="middle" class="smalltxt">
                                  <?=$_POST['deep2']?></td>
                                </tr>
                                  <tr><td align="middle" class="smalltxt">
                                    <?=$_POST['no3']?></td>
                                  <td align="middle" class="smalltxt">
                                  <?=$_POST['branch_name3']?></td>
                                  <td align="middle" class="smalltxt">
                                    <?=$_POST['size_area3']?></td>
                                  <td align="middle" class="smalltxt">
                                  <?=$_POST['width3']?></td>
                                  <td align="middle" class="smalltxt">
                                  <?=$_POST['long3']?></td>
                                  <td align="middle" class="smalltxt">
                                  <?=$_POST['deep3']?></td>
                                </tr>
                              </tbody>
                          </table>
                      </td>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-12">
                    <br>
                    <br><br><br><br><br><br>
                      <div class="gfg"><b> เอกสารแนบรูปถ่ายด้านหน้า/ภายใน/ภายนอกอาคาร/บริเวณรอบข้าง</b>
                        <?php
                        $img=$_FILES['img'];
                        for ($i=0; $i < count($img['name']); $i++) {
                          ?>
                          <img src="img/<?=$img['name'][$i]?>" alt="" width="300" height="300">
                          <?php
                        }
                        ?>
                        <br><br><br><br><br>
                        <br><br><br><br><br><br>
                          <br><br><br><br><br><br><br><br><br><b> แผนที่</b> </div>
                          <?php
                          $img=$_FILES['map'];
                          for ($i=0; $i < count($img['name']); $i++) {
                            ?>
                            <img src="img/<?=$img['name'][$i]?>" alt="" width="300" height="300">
                            <?php
                          }
                          ?>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-4">
                      <div class="gfg"><b> อธิบายพื้นที่รอบร้าน/สถานที่ใกล้อะไร เช่น โรงพยาบาล,โรงเรียน,ห้างสรรพสินค้า อื่นๆ</b></div>
                  </div>
                  <div class="col-lg-6 lo10">
                    <?=$_POST['datail_area']?>
              </div>
              <div class="row">
                  <div class="col-sm-4">
                      <div class="gfg"><b> ถ้าใบสมัครของคุณได้ผ่านการคัดเลือกจากทางบริษัทฯ คุณพร้อมที่จะเปิดสาขาได้เมื่อไร</b></div>
                  </div>
                  <div class="col-sm-8 iopp">
                      <td class="smalltxt gfg">
                        <?=$_POST['ready']?>
                        </td>

                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-4">
                      <div class="gfg"> <b>ทำไมสนใจ ธุรกิจแฟรนไชส์ของ Strawberry Club</b></div>
                  </div>
                  <div class="col-lg-6 lo10">
                    <?=$_POST['why_interest']?>
              </div>
              <div class="row">
                  <div class="col-sm-4">
                      <div class="gfg"> <b>นโยบายการบริหารงานและการวางแผนการตลาดในสาขาของท่านเป็นอย่างไร</b> </div>
                  </div>
                  <div class="col-lg-6 lo10">
                    <?=$_POST['policy']?>
              </div>
              <div class="row">
                  <div class="col-sm-12">
                      <div class="gfg"> <b>ข้าพเจ้าขอรับรองว่า ข้อความดังกล่าวทั้งหมดในใบสมัครนี้เป็นความจริงทุกประการ</b> </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-12">
                      <div class="gfg1"> <b>กรุณากรอกข้อมูลของท่านให้ครบถ้วนตามความเป็นจริง พร้อมทั้งส่งกลับมาเพื่อทางบริษัทฯจะได้พิจารณาและดำเนินการในลำดับต่อไป</b>
                          <br> บริษัท ไลฟ์เวย์อินเตอร์เทรด จำกัด (กรุณานำส่ง คุณวุฒิชัย สารยศ) เลขที่ 5/7 ซ. พหลโยธิน 52 แยก 11 (เดชศิริ) แขวง คลอง
                          <br>ถนน เขต สายไหม กรุงเทพฯ 10220 Tel 02-937 8798 : strawberryclub.gm@gmail.com : strawberry club สินค้าน่ารักๆ ทุกชิ้น 10 บาท </div>
                  </div>
              </div>
              <br>

          </div>
          </form>
      </div>

		<?php

		$html = ob_get_contents();
		ob_end_clean();
		$pdf = new mPDF('th', 'A4', '0', 'THSaraban');
		$pdf->SetAutoFont();
		$pdf->SetDisplayMode('fullpage');
		$pdf->WriteHTML($html, 2);
		$pdf->Output('backoffice/pdf/franchise.pdf', 'F');

    require 'PHPMailer/PHPMailerAutoload.php';
		$mail = new PHPMailer();
		$mail->CharSet = "utf-8";
		$mail->Username = "strawberryclub.gm@gmail.com";
		$mail->From = "strawberryclub.gm@gmail.com";
		$mail->FromName = "Strawberry-club";
		$mail->isHTML(true);
		$mail->Subject = "ข้อมูลสมัครเฟรนไชส์";
		$mail->Body = "ข้อมูลสมัครเฟรนไชส";
		$mail->AltBody = "ข้อมูลสมัครเฟรนไชส";
		$mail->addAddress("strawberryclub.gm@gmail.com", "Strawberry-club");
		$mail->AddAttachment('backoffice/pdf/franchise.pdf');
		if (!$mail->send()) {
		    echo "Mailer Error: " . $mail->ErrorInfo;
		} else {

			echo "<script>
				alert('สมัคเสร็จสิ้น');
				</script>";
				header('Location: backoffice/pdf/franchise.pdf');
        //unlink('backoffice/pdf/franchise.pdf');
		}
		?>
	</body>
</html>
