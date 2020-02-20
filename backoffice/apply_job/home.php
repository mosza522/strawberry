
<?php
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
  if($strDate!="0000-00-00"){
  return "$strDay $strMonthThai $strYear";
}else {
  return "";
}
  //return "$strDay $strMonthThai $strYear, $strHour:$strMinute";
}
 ?>
    <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> ข้อมูลผู้สมัครงานทั้งหมด </h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
			 <div class="x_panel">
                  <div class="x_title">
                    <h2>Apply Job</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_title">
                </div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <a href="apply_job.php?page=job_position&active=apply_job"><button type="button" class="btn btn-primary"><i class="fa fa-plus-square" aria-hidden="true"></i> Job Position</button></a>

				                <table id="example" class="table">
                      <thead>
                        <tr>
              <th class="text-center" style="min-width: 40px;">No.</th>
						  <th class="text-center" style="min-width: 100px;">Full Name TH</th>
              <th class="text-center" style="min-width: 100px;">Full Name TH</th>
              <th class="text-center" style="min-width: 100;">All Detail</th>


						 <!-- <th class="text-center">Sort</th>-->
                          <th class="text-center" style="min-width: 200px;">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $sql="SELECT * FROM job
                        ";
                        $q=mysql_query($sql);
                        $i=1;
                        while($rs=mysql_fetch_array($q)){
                          ?>
                         <tr>
                           <td><?php echo $i."."; $i++; ?></td>
                           <td>
                             <?php
                             echo $rs['fullname_th'];
                             ?>
                           </td>

                           <td><?php echo $rs['fullname_en']; ?></td>
                           <td align="center">
                             <div class="col-sm-3 col-lg-3 col-md-3">
                                 <div class="branch-1">
                                     <div class="bordol-1">
                                         <div class="row"> <a href="" data-toggle="modal" data-target="#myModal<?= $rs['job_id']?>" class="btn btn-info">ดูขอมูลทั้งหมด</a> </div>
                                         <div class="modal fade" id="myModal<?= $rs['job_id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;">
                                             <div class="modal-dialog" role="document" style="width:83%;margin-left:17%">
                                                 <div class="modal-content">
                                                     <div class="modal-header">
                                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button> <span aria-hidden="true"></span>
                                                         <div class="modal-body">
                                                           <table width="100%" class="table-modal">
                                                             <tr>
                                                               <td colspan="8"align="center"><b>ข้อมูลการสมัครงาน</b> <br /><br /></td>
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
                                                                 <?=$rs['position_interest1']?>
                                                               </td>
                                                             </tr>
                                                             <tr >
                                                               <td>ตำแหน่งที่สนใจสมัคร 2 :</td>
                                                               <td colspan="7">
                                                                 <?=$rs['position_interest2']?>
                                                               </td>
                                                             </tr>
                                                             <tr >
                                                               <td>ตำแหน่งที่สนใจสมัคร 3 :</td>
                                                               <td colspan="7">
                                                                 <?=$rs['position_interest3']?>
                                                               </td>
                                                             </tr>
                                                             <tr>
                                                               <td>เงินเดือนที่ต้องการ : </td>
                                                               <td colspan="7">
                                                                 <?=number_format($rs['salary'])?>
                                                               </td>
                                                             </tr>
                                                             <tr>
                                                               <th bgcolor="#f8acc8">
                                                             <i class="fa fa-hand-o-right" aria-hidden="true"></i> เอกสารประกอบการสมัครงาน
                                                             </th>
                                                             <td colspan="7"></td>
                                                              </tr>
                                                             <tr>
                                                               <td class="td">ไฟล์รูปภาพ : </td>
                                                               <td colspan="3">
                                                                 <a href="job/<?=$rs['picture']?>" download ><img src="job/<?=$rs['picture']?>" alt="" width="300" height="300"></a>
                                                               </td>
                                                               <td>Transcript ผลการเรียน : </td>
                                                               <td colspan="3">
                                                                 <a href="job/<?=$rs['transcript']?>" download > <img src="job/<?=$rs['transcript']?>" alt="" width="300" height="300"></a>
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
                                                                 <?=$rs['fullname_th']?>
                                                               </td>
                                                             </tr>
                                                             <tr>
                                                               <td>ชื่อ-สกุล (อังกฤษ) : </td>
                                                               <td colspan="7">
                                                                 <?=$rs['fullname_en']?>
                                                               </td>
                                                             </tr>
                                                             <tr>
                                                               <td>เลขบัตรประจำตัวประชาชน : </td>
                                                               <td colspan="7">
                                                                 <?=$rs['identity']?>
                                                               </td>
                                                             </tr>
                                                             <tr>
                                                               <td>เพศ : </td>
                                                               <td colspan="7">
                                                                 <?=$rs['sex']?>
                                                               </td>
                                                             </tr>
                                                             <tr>
                                                               <td>วันเดือนปีเกิด : </td>
                                                               <td >
                                                                 <?=DateThai($rs['bday'])?>
                                                               </td>
                                                              <td colspan="6">
                                                                น้ำหนัก :
                                                                 <?=$rs['weight'] ?> กก.
                                                                 <span style="padding-left:5em"></span>
                                                               สูง :

                                                                 <?=$rs['height'] ?> ซ.ม.
                                                               </td>
                                                             </tr>
                                                             <tr>
                                                               <td>สัญชาติ : </td>
                                                               <td>
                                                                 <?=$rs['nationality']?>
                                                               </td>
                                                               <td colspan="6">
                                                                 จำวนวพี่น้อง : <?=$rs['brethren']?>
                                                                 <span style="padding-left:5em"></span>
                                                                 ท่านเป็นคนที่ : <?=$rs['num_of_brethren']?>
                                                                 <span style="padding-left:5em"></span>
                                                                 ศาสนา : <?=$rs['religion']?>
                                                               </td>
                                                             </tr>
                                                             <tr>
                                                               <td>สถานภาพครอบครัว : </td>
                                                               <td colspan="7">
                                                                 <?=$rs['relationship']?>
                                                               </td>
                                                             </tr>
                                                             <tr>
                                                               <td>สถานภาพทางทหาร : </td>
                                                               <td colspan="7">
                                                                 <?=$rs['militar_status']?>
                                                               </td>
                                                             </tr>
                                                             <tr>
                                                               <td>โรคประจำตัว : </td>
                                                               <td colspan="7">
                                                                 <?=$rs['congenital_disease']?>
                                                               </td>
                                                             </tr>
                                                             <tr>
                                                               <td>ที่อยู่ปัจจุบัน (ที่ติดต่อได้) : </td>
                                                               <td colspan="7">
                                                                 <?=$rs['address']?>
                                                               </td>
                                                             </tr>
                                                             <tr>
                                                               <td>เบอร์ติดต่อ </td>
                                                               <td colspan="7">
                                                                 โทรศัพท์ : <?=$rs['tell']?>
                                                                 <span style="padding-left:5em"></span>
                                                                 โทรศัพท์ : <?=$rs['cell_phone']?>
                                                               </td>
                                                             </tr>
                                                             <tr>
                                                               <td>อีเมล์ : </td>
                                                               <td colspan="7">
                                                                 <?=$rs['email']?>
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
                                                           <table class="table-modal" bordercolor="#fb85b9" width="100%">

                                                              <tr>
                                                                <th  class="td-big" align="center">ระดับการศึกษา</th>
                                                                <th class="td-big" align="center">สถาบันการศึกษา</th>
                                                                <th class="td-big" align="center">สาขา/วิชาเอก</th>
                                                                <th class="td-big" align="center">วุฒิการศึกษาที่ได้รับ</th>
                                                                <th class="td-big" align="center">GPA</th>
                                                                <th class="td-big" align="center">วันที่สำเร็จการศึกษา (DD/MM/YYYY)</th>
                                                              </tr>
                                                              <tr>
                                                                <td>มัธยมศึกษาตอนต้น</td>
                                                                <td><?=$rs['junior_school_name']?></td>
                                                                <td><?=$rs['junior_major']?></td>
                                                                <td><?=$rs['junior_education_background']?></td>
                                                                <td><?=$rs['junior_gpa']?></td>
                                                                <td align="center"><?=DateThai($rs['junior_graduate_date'])?></td>
                                                              </tr>
                                                              <tr>
                                                                <td>มัธยมศึกษาตอนปลาย</td>
                                                                <td><?=$rs['high_school_name']?></td>
                                                                <td><?=$rs['high_major']?></td>
                                                                <td><?=$rs['high_education_background']?></td>
                                                                <td><?=$rs['high_gpa']?></td>
                                                                <td align="center"><?=DateThai($rs['high_graduate_date'])?></td>
                                                              </tr>
                                                              <tr>
                                                                <td>ประกาศนียบัตรวิชาชีพ</td>
                                                                <td><?=$rs['vocational_school_name']?></td>
                                                                <td><?=$rs['vocational_major']?></td>
                                                                <td><?=$rs['vocational_education_background']?></td>
                                                                <td><?=$rs['vocational_gpa']?></td>
                                                                <td align="center"><?=DateThai($rs['vocational_graduate_date'])?></td>
                                                              </tr>
                                                              <tr>
                                                                <td>ประกาศนียบัตรวิชาชีพชั้นสูง</td>
                                                                <td><?=$rs['diploma_school_name']?></td>
                                                                <td><?=$rs['diploma_major']?></td>
                                                                <td><?=$rs['diploma_education_background']?></td>
                                                                <td><?=$rs['diploma_gpa']?></td>
                                                                <td align="center"><?=DateThai($rs['diploma_graduate_date'])?></td>
                                                              </tr>
                                                              <tr>
                                                                <td>ปริญญาตรี</td>
                                                                <td><?=$rs['bachelor_school_name']?></td>
                                                                <td><?=$rs['bachelor_major']?></td>
                                                                <td><?=$rs['bachelor_education_background']?></td>
                                                                <td><?=$rs['bachelor_gpa']?></td>
                                                                <td align="center"><?=DateThai($rs['bachelor_graduate_date'])?></td>
                                                              </tr>
                                                              <tr>
                                                                <td>ปริญญาโท</td>
                                                                <td><?=$rs['mester_school_name']?></td>
                                                                <td><?=$rs['mester_major']?></td>
                                                                <td><?=$rs['mester_education_background']?></td>
                                                                <td><?=$rs['mester_gpa']?></td>
                                                                <td align="center"><?=DateThai($rs['master_graduate_date'])?></td>
                                                              </tr>
                                                              <tr>
                                                                <td >ปริญญาเอก</td>
                                                                <td><?=$rs['doctor_school_name']?></td>
                                                                <td><?=$rs['doctor_major']?></td>
                                                                <td><?=$rs['doctor_education_background']?></td>
                                                                <td><?=$rs['doctor_gpa']?></td>
                                                                <td align="center"><?=DateThai($rs['doctor_graduate_date'])?></td>
                                                              </tr>
                                                            </table>
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

                                                            <table class="table-modal" bordercolor="#fb85b9" width="100%">

                                                              <tr>
                                                                <th class="td-big">ชื่อสถานททำงานี่/ฝึกงาน</th>
                                                                <th colspan="2"  class="td-big">ระยะเวลาในการทำงาน / ฝึกงาน
                                                                  <br />วันที่เริ่มงาน ถึง วันที่สิ้นสุด</th>
                                                                <th class="td-big">ตำแหน่ง</th>
                                                                <th class="td-big">เงินเดือน (บาท)</th>
                                                                <th class="td-big">ลักษณะงาน</th>
                                                              </tr>
                                                              <tr>
                                                                <td><?=$rs['office_name']?></td>
                                                                <td colspan="2"><?=DateThai($rs['date_start'])." - ".DateThai($rs['date_end'])?></td>
                                                                <td><?=$rs['position']?></td>
                                                                <td><?=$rs['exsalary']?></td>
                                                                <td><?=$rs['job_detail']?></td>
                                                              </tr>
                                                              <tr>
                                                                <td><?=$rs['office_name2']?></td>
                                                                <td colspan="2"><?=DateThai($rs['date_start2'])." - ".DateThai($rs['date_end2'])?></td>
                                                                <td><?=$rs['position2']?></td>
                                                                <td><?=$rs['exsalary2']?></td>
                                                                <td><?=$rs['job_detail2']?></td>
                                                              </tr>
                                                              <tr>
                                                                <td><?=$rs['office_name3']?></td>
                                                                <td colspan="2"><?=DateThai($rs['date_start3'])." - ".DateThai($rs['date_end3'])?></td>
                                                                <td><?=$rs['position3']?></td>
                                                                <td><?=$rs['exsalary3']?></td>
                                                                <td><?=$rs['job_detail3']?></td>
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
                                                                <td colspan="5"><?=$rs['work_shift']?></td>
                                                              </tr>
                                                              <tr>
                                                                <td>ปฎิบัติงานต่างจังหวัด ได้หรือไม่ :</td>
                                                                <td colspan="5"><?=$rs['work_another_province']?></td>
                                                              </tr>
                                                              <tr>
                                                                <td>ปฎิบัติงานต่างประเทศ ได้หรือไม่ :</td>
                                                                <td colspan="5"><?=$rs['work_another_country']?></td>
                                                              </tr>
                                                              <tr>
                                                                <td>ประเภทใบขับขี่ที่ท่านมี :</td>
                                                                <td colspan="5"><?=$rs['driver_licence']?></td>
                                                              </tr>
                                                              <tr>
                                                                <td>หากผ่านการทดสอบท่าน สามารถเริ่มงาน :</td>
                                                                <td colspan="5"><?=$rs['can_work_after_test']?> หลังทราบผล
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
                                                            <table class="table-modal" bordercolor="#fb85b9" width="100%">

                                                              <tr>
                                                                <th class="td-big">ภาษา</th>
                                                                <th class="td-big">ฟัง</th>
                                                                <th class="td-big">พูด</th>
                                                                <th class="td-big">อ่าน</th>
                                                                <th class="td-big">เขียน</th>
                                                              </tr>
                                                              <tr>
                                                                <td>ไทย</td>
                                                                <td ><?=$rs['listen_thai']?></td>
                                                                <td><?=$rs['speak_thai']?></td>
                                                                <td><?=$rs['read_thai']?></td>
                                                                <td><?=$rs['write_thai']?></td>
                                                              </tr>
                                                              <tr>
                                                                <td>อักกฤษ</td>
                                                                <td ><?=$rs['listen_en']?></td>
                                                                <td><?=$rs['speak_en']?></td>
                                                                <td><?=$rs['read_en']?></td>
                                                                <td><?=$rs['write_en']?></td>
                                                              </tr>
                                                              <tr>
                                                                <td><?=$rs['language_etc1']?></td>
                                                                <td ><?=$rs['listen_etc1']?></td>
                                                                <td><?=$rs['speak_etc1']?></td>
                                                                <td><?=$rs['read_etc1']?></td>
                                                                <td><?=$rs['write_etc1']?></td>
                                                              </tr>
                                                              <tr>
                                                                <td><?=$rs['language_etc2']?></td>
                                                                <td ><?=$rs['listen_etc2']?></td>
                                                                <td><?=$rs['speak_etc2']?></td>
                                                                <td><?=$rs['read_etc2']?></td>
                                                                <td><?=$rs['write_etc2']?></td>
                                                              </tr>
                                                            </table>
                                                            <table  width="100%" class="table-modal">
                                                              <tr>
                                                                <td width="250">ความสามารถเพิ่มเติม :</td>
                                                                <td colspan="5"><?=$rs['talent']?></td>
                                                              </tr>
                                                              <tr>
                                                                <td>รางวัลความสำเร็จ :</td>
                                                                <td colspan="5"><?=$rs['award']?></td>
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
                                                            <table class="table-modal" bordercolor="#fb85b9" width="100%">

                                                              <tr>
                                                                <th class="td-big">ชื่อ-สกุล</th>
                                                                <th class="td-big">สถานที่ทำงาน / ตำแหน่ง</th>
                                                                <th class="td-big">เบอร์โทรศัพท์ติดต่อ</th>
                                                                <th class="td-big">ความสัมพันธ์</th>

                                                              </tr>
                                                              <tr>
                                                                <td><?=$rs['reference_name']?></td>
                                                                <td><?=$rs['reference_office_or_position']?></td>
                                                                <td><?=$rs['reference_tell']?></td>
                                                                <td><?=$rs['reference_relation']?></td>
                                                              </tr>
                                                              <tr>
                                                                <td><?=$rs['reference_name2']?></td>
                                                                <td><?=$rs['reference_office_or_position2']?></td>
                                                                <td><?=$rs['reference_tell2']?></td>
                                                                <td><?=$rs['reference_relation2']?></td>
                                                              </tr>
                                                              <tr>
                                                                <td><?=$rs['reference_name3']?></td>
                                                                <td><?=$rs['reference_office_or_position3']?></td>
                                                                <td><?=$rs['reference_tell3']?></td>
                                                                <td><?=$rs['reference_relation3']?></td>
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
                                                                <td colspan="3"><?=$rs['source']?></td>
                                                              </tr>
                                                              <tr>
                                                                <td width="250">หมายเหตุเพิ่มเติม :</td>
                                                                <td colspan="3"><?=$rs['note']?></td>
                                                              </tr>
                                                            </table>

                                                         </div>
                                                         <div class="modal-footer">
                                                             <button type="Success" class="btn btn-warning" data-dismiss="modal">Close</button>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                           </td>

                           <td align="center">
 							<button type="button" class="btn btn-danger" onclick="del(<?php echo $rs['job_id']?>)"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</button>
 						  </td>
                         </tr>

					 <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
		<script src="//code.jquery.com/jquery-1.12.3.js"></script>
		<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
		<link href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" rel="stylesheet">
<script>
	$(document).ready(function(){
		$('#example').DataTable({
        "order": [[ 0, "asc" ]]
    });
	});

	function settext(text)
	{
		bootbox.dialog({
			message : '<div class="alert alert-success fade in m-b-15"><strong>Success!</strong> Insert Complete</div>',
			title: '&nbsp;',

		});
		setTimeout(function() {
			window.location.href="product.php?page=home";
		}, 1000);
	}

	function del(id)
	{
		bootbox.confirm({
			title: "Confirm?",
			message: "You want to remove the selected data or not.",
			buttons: {
				cancel: {
					label: '<i class="fa fa-times"></i> Cancel',
					className: 'btn-danger'
				},
				confirm: {
					label: '<i class="fa fa-check"></i> Confirm',
					className: 'btn-success'
				}
			},
			callback: function (result) {
				if(result == true)
				{
					window.location.href="deljob.php?id="+id+"";
				}
			}
		});

	}
</script>
<style media="screen">
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
