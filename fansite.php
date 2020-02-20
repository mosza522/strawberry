<!doctype html>
<html>

<head>
  <?php
  require('inc_header.php');
  $sql_header="SELECT * FROM page
  LEFT OUTER JOIN title
  ON page.page_id=title.page_id
  LEFT OUTER JOIN keywords
  ON page.page_id=keywords.page_id
  LEFT OUTER JOIN description
  ON page.page_id=description.page_id
  WHERE page.page_name='franchise'";
  $rs_header=mysql_fetch_array(mysql_query($sql_header));

   ?>
   <title><?=$rs_header['title']?></title>
   <meta name="keywords" content="<?=$rs_header['keywords']?>" />
   <meta name="description" content="<?=$rs_header['description']?>" />
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Itim|Mitr" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
 </head>

<style>
    .pand {
        padding: 12px;
    }
</style>

<body class="bgabout">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <?php require('inc_menu.php'); ?>
                    <div class="container">
                        <div class="row pand">
                            <div class="col-sm-12">
                                <div class="text-about  wow fadeInDown"><img src="img/security.png" class="img-responsive"> สมัครแฟรนไชส์</div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="ffgghh wow fadeInRight">
                                <div class="row">
                                    <div class="text-job"> ใบสมัครแฟรนไชส์ </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="col-sm-6 imgjob1"><img src="img/Logob.jpg" class="img-responsive"></div>
                                        <div class="col-sm-6 text-job2">บริษัท ไลฟ์เวย์อินเตอร์เทรด จำกัด (สำนักงานใหญ่)
                                            <br>Lifewayintertrade Co.,Ltd (Head Office)
                                            <br> 5/7 ซ.พหลโยธิน 52 แยก 11(เดชศิรี) แขวงครองถนน
                                            <br>เขตสายไหม กรุงเทพมหานคร 10220 </div>
                                    </div>
                                </div>
                            </div>
                            <form class="" target="_blank" action="regis_franchise.php" method="post" enctype="multipart/form-data">

                            <div class="rpool wow fadeInLeft">
                                <div class="text-jobk"> ขอขอบคุณทุกท่านที่ให้ความสนใจในธุรกิจแฟรนไชส์ของ Strawberry Club เพื่อใช้เป็นข้อมูลประกอบการการพิจารณาของทางบริษัทฯ
                                    <br>กรุณากรอกใบสมัครทุกส่วนที่เกี่ยวข้องกับท่าน </div>
                                <div class="text-mok"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> ข้อมูลทั่วไป </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg"> ชื่อ-สกุล (ไทย)</div>
                                    </div>
                                    <div class="col-sm-10 iopp">
                                        <td width="80%">
                                            <select name="title_th">
                                                <option value="นาย" >นาย</option>
                                                <option value="นาย" >นาง</option>
                                                <option value="นาง" >นางสาว</option>
                                            </select>
                                            <input type="text" name="firstname_th" size="20" maxlength="50"> -
                                            <input type="text" name="lastname_th" size="20" maxlength="50"> </td>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg"> ชื่อ-สกุล (อังกฤษ)</div>
                                    </div>
                                    <div class="col-sm-10 iopp">
                                        <td width="80%">
                                            <select name="title_en">
                                                <option value="Mr." >Mr.</option>
                                                <option value="Mrs." >Mrs.</option>
                                                <option value="Miss." >Miss.</option>
                                            </select>
                                            <input type="text" name="firstname_en" size="20" maxlength="50"> -
                                            <input type="text" name="lastname_en" size="20" maxlength="50"> </td>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg"> เลขบัตรประจำตัวประชาชน</div>
                                    </div>
                                    <div class="col-sm-10 iopp">
                                        <td>
                                            <input  name="identity" size="15" maxlength="13"> </td>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg"> เพศ</div>
                                    </div>
                                    <div class="col-sm-10 iopp">
                                        <td class="smalltxt">
                                            <input type="radio" value="ชาย" name="sex" >&nbsp;ชาย
                                            <input type="radio" value="หญิง" name="sex" >&nbsp;หญิง</td>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg"> วัน/เดือน/ปีเกิด</div>
                                    </div>
                                    <div class="col-sm-10 iopp">
                                        <td>
                                            <input  id="bday" name="bday"> </td>
                                        <td class="smalltxt" width="25%"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;น้ำหนัก <font color="red">*</font>
                                            <input id="weight" maxlength="3" size="4" name="weight">&nbsp;ก.ก </td>
                                        <td class="smalltxt" width="25%"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สูง <font color="red">*</font>
                                            <input id="weight" maxlength="3" size="4" name="height">&nbsp;ซ.ม </td>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg"> สัญชาติ</div>
                                    </div>
                                    <div class="col-sm-10 iopp">
                                        <td>
                                            <input name="nationality" > </td>
                                        <td class="smalltxt" width="25%"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;จำนวนพี่น้อง <font color="red">*</font>
                                            <input maxlength="3" size="4" name="num_bro">&nbsp;คน </td>
                                        <td class="smalltxt" width="25%"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ท่านเป็นคนที่ <font color="red">*</font>
                                            <input  maxlength="3" size="4" name="you_are">&nbsp; </td>
                                        <td class="smalltxt" width="25%"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ศาสนา <font color="red">*</font>
                                            <input  maxlength="3" size="4" name="religion">&nbsp; </td>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg"> สถานภาพครอบครัว</div>
                                    </div>
                                    <div class="col-sm-10 iopp">
                                        <td class="smalltxt">
                                            <input type="radio" value="โสด" name="family" >&nbsp;โสด
                                            <input type="radio" value="สมรส" name="family" >&nbsp;สมรส
                                            <input type="radio" value="หม้าย" name="family" >&nbsp;หม้าย
                                            <input type="radio" value="หย่า" name="family" >&nbsp;หย่า</td>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg"> สถานภาพทางทหาร</div>
                                    </div>
                                    <div class="col-sm-10 iopp">
                                        <td class="smalltxt">
                                            <input type="radio" value="พ้นภาระทางทหาร" name="military" >&nbsp; พ้นภาระทางทหาร
                                            <input type="radio" value="ยังไม่เกณฑ์" name="military" >&nbsp;ยังไม่เกณฑ์
                                            <input type="radio" value="ได้รับการยกเว้น" name="military" >&nbsp;ได้รับการยกเว้น </td>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg"> โรคประจำตัว </div>
                                    </div>
                                    <div class="col-sm-10 iopp">
                                        <td class="smalltxt">
                                            <input type="radio" value="ไม่มี" name="disease" >&nbsp; ไม่มี
                                            <input type="radio" value="มี" name="disease" >&nbsp;มี </td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;โปรดระบุ
                                        <input name="disease_have"> </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg"> ที่อยู่ปัจจุบัน (ที่ติดต่อได้) </div>
                                    </div>
                                    <div class="col-lg-8 lo10">
                                        <textarea class="form-control" rows="3" name="address" ></textarea> <span class="help-block"></span> </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg"> เบอร์ติดต่อ</div>
                                    </div>
                                    <div class="col-sm-10 iopp">
                                        <td> โทรศัพท์ :
                                            <input  name="tell" size="15" maxlength="10">&nbsp;&nbsp; มือถือ :
                                            <input  name="cellphone" size="15" maxlength="10"> </td>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg"> อีเมล์</div>
                                    </div>
                                    <div class="col-sm-10 iopp">
                                        <td>
                                            <input name="email" size="50" > </td>
                                    </div>
                                </div>
                                <div class="text-mok"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> สถานที่ทำงาน </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg"> บริษัท</div>
                                    </div>
                                    <div class="col-sm-10 iopp">
                                        <td>
                                            <input  name="office_name" size="50" > </td>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg"> ที่อยู่ปัจจุบัน (ที่ติดต่อได้) </div>
                                    </div>
                                    <div class="col-lg-8 lo10">
                                        <textarea class="form-control" rows="3" name="office_address"></textarea> <span class="help-block"></span> </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg"> เบอร์ติดต่อ</div>
                                    </div>
                                    <div class="col-sm-10 iopp">
                                        <td> โทรศัพท์ :
                                            <input  name="office_tell">&nbsp;&nbsp; มือถือ :
                                            <input  name="office_cellphone"> </td>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg"> อีเมล์</div>
                                    </div>
                                    <div class="col-sm-8 iopp">
                                        <td>
                                            <input type="text" name="office_email" placeholder="" class="form-control"> </td>
                                    </div>
                                </div>
                                <div class="text-mok"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> ข้อมูลทางการศึกษา </div>
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
                                                                <input type="text" size="22" name="junior_school_name"> </td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22"  name="junior_major"> </td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22" id="junior_start" name="junior_start"> </td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22" id="junior_end" name="junior_end"> </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" class="smalltxt"> &nbsp; มัธยมศึกษาตอนปลาย</td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22" name="high_school_name"> </td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22" name="high_major"> </td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22"id="high_start" name="high_start"> </td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22"id="high_end" name="high_end"> </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" class="smalltxt"> &nbsp; ประกาศนียบัตรวิชาชีพ</td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22" name="vocational_school_name"> </td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22" name="vocational_major"> </td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22"id="vocational_start" name="vocational_start"> </td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22"id="vocational_end" name="vocational_end"> </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" class="smalltxt"> &nbsp; ประกาศนียบัตรวิชาชีพชั้นสูง</td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22" name="diploma_school_name"> </td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22" name="diploma_major"> </td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22"id="diploma_start" name="diploma_start"> </td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22"id="diploma_end" name="diploma_end"> </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" class="smalltxt"> &nbsp; ปริญญาตรี</td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22" name="bachelor_school_name"> </td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22" name="bachelor_major"> </td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22"id="bachelor_start" name="bachelor_start"> </td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22"id="bachelor_end" name="bachelor_end"> </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" class="smalltxt"> &nbsp; ปริญญาโท</td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22" name="master_school_name"> </td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22" name="master_major"> </td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22"id="master_start" name="master_start"> </td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22"id="master_end" name="master_end"> </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" class="smalltxt"> &nbsp; ปริญญาเอก</td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22" name="doctor_school_name"> </td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22" name="doctor_major"> </td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22"id="doctor_start" name="doctor_start"> </td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22"id="doctor_end" name="doctor_end"> </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-mok"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> ประวัติการทำงาน </div>
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
                                                                <input type="text" size="22" name="name_ex_office1"> </td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="9" id="time_start1" name="time_start1">-
                                                                <input type="text" size="9" id="time_end1" name="time_end1"> </td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22" name="opsition1"> </td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="9" name="work_detail1">-
                                                                <input type="text" size="9" name="salary1"> </td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22" name="because1"> </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22" name="name_ex_office2"> </td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="9" id="time_start2"  name="time_start2">-
                                                                <input type="text" size="9" id="time_end2" name="time_end2"> </td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22" name="opsition2"> </td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="9" name="work_detail2">-
                                                                <input type="text" size="9" name="salary2"> </td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22" name="because2"> </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22" name="name_ex_office3"> </td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="9" id="time_start3" name="time_start3">-
                                                                <input type="text" size="9" id="time_end3" name="time_end3"> </td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22" name="opsition3"> </td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="9" name="work_detail3">-
                                                                <input type="text" size="9" name="salary3"> </td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22" name="because3"> </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="gfg"> สถานภาพการทำงานของคุณในปัจจุบัน</div>
                                    </div>
                                    <div class="col-sm-9 iopp">
                                        <td class="smalltxt">
                                            <input type="radio" value="Full Time" name="work" >&nbsp;Full Time
                                            <input type="radio" value="Part Time" name="work" >&nbsp;Part Time
                                            <input type="radio" value="Casual" name="work" >&nbsp;Casual
                                            <input type="radio" value="Self-employed" name="work" >&nbsp;Self-employed
                                            <input type="radio" value="Unemployed" name="work" >&nbsp;Unemployed </td>
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
                                                                <input type="text" size="22" name="cash"> </td>
                                                            <td align="left" class="smalltxt"> &nbsp; เงินกู้</td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22" name="loan"> </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" class="smalltxt"> &nbsp; เงินลงทุนระยะยาว</td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22" name="long_term"> </td>
                                                            <td align="left" class="smalltxt"> &nbsp; เงินเบิกเกินบัญชี</td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22" name="overdrafts"> </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" class="smalltxt"> &nbsp; ที่ดิน</td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22" name="land"> </td>
                                                            <td align="left" class="smalltxt"> &nbsp; เงินกู้ยืมระยะสั้นจากสถาบันการเงิน</td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22" name="short_term"> </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" class="smalltxt"> &nbsp; อาคาร</td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22" name="building"> </td>
                                                            <td align="left" class="smalltxt"> &nbsp; เงินรับล่วงหน้าจากลูกค้า</td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22" name="money_from_customers"> </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" class="smalltxt"> &nbsp; สินทรัพย์หมุนเวียนอื่นๆ</td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22" name="cycle_asset"> </td>
                                                            <td align="left" class="smalltxt"> &nbsp; ค่าใช้จ่ายอื่นๆ</td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22" name="other_expenses"> </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" class="smalltxt"> &nbsp; รายได้อื่นๆ</td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22" name="other_income"> </td>
                                                            <td> </td>
                                                            <td align="middle" class="smalltxt">
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" class="smalltxt"> &nbsp; รวมทรัพย์สิน</td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22" name="all_asset"> </td>
                                                            <td align="left" class="smalltxt"> &nbsp; รวมหนี้สิน</td>
                                                            <td align="middle" class="smalltxt">
                                                                <input type="text" size="22" name="all_Debt"> </td>
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
                                        <div class="gfg"> โปรดระบุจำนวนเงินลงทุนและแหล่งที่มาของเงินทุน </div>
                                    </div>
                                    <div class="col-lg-8 lo10">
                                        <textarea class="form-control" rows="3" name="source_money"></textarea> <span class="help-block"></span> </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="gfg"> หุ้นส่วนที่ต้องการร่วมลงทุน </div>
                                    </div>
                                    <div class="col-sm-9 iopp">
                                        <td class="smalltxt">
                                            <input type="radio" value="ไม่มี" name="partner" >&nbsp;ไม่มี
                                            <input type="radio" value="มี" name="partner" >&nbsp;มี </td>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg"> ถ้ามีโปรดระบุ </div>
                                    </div>
                                    <div class="col-lg-8 lo10">
                                        <textarea class="form-control" rows="3" name="partner_etc"></textarea> <span class="help-block"></span> </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="gfg"> ทราบข้อมูลเกี่ยวกับธุรกิจแฟรนไชส์ของ Strawberry Club ได้อย่างไร </div>
                                    </div>
                                    <div class="col-sm-9 iopp">
                                        <td class="smalltxt">
                                            <input type="radio" value="หนังสือพิมพ์" name="known" >&nbsp;หนังสือพิมพ์
                                            <input type="radio" value="Facebook" name="known" >&nbsp;Facebook
                                            <input type="radio" value="เว็บไซต์" name="known" >&nbsp;เว็บไซต์
                                            <input type="radio" value="เพื่อนแนะนำ" name="known" >&nbsp;เพื่อนแนะนำ
                                            <input type="radio" value="วิทยุ" name="known" >&nbsp;วิทยุ
                                            <input type="radio" value="ป้ายโฆษณา" name="known" >&nbsp;ป้ายโฆษณา </td>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg"> อื่นๆ กรุณาระบุ </div>
                                    </div>
                                    <div class="col-lg-8 lo10">
                                        <textarea class="form-control" rows="3" name="known_etc"></textarea> <span class="help-block"></span> </div>
                                </div>
                                <div class="text-mok"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> สถานที่ต้องการเปิดสาขา </div>
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
                                                            <input type="text" size="22" name="no1"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="branch_name1"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="size_area1"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="width1"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="long1"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="deep1"> </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="no2"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="branch_name2"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="size_area2"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="width2"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="long2"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="deep2"> </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="no3"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="branch_name3"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="size_area3"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="width3"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="long3"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="deep3"> </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="gfg">⦁ เอกสารแนบรูปถ่ายด้านหน้า/ภายใน/ภายนอกอาคาร/บริเวณรอบข้าง <input type="file" name="img[]" multiple required>
                                            <br>⦁ แผนที่ <input type="file" name="map[]" multiple required></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="gfg"> อธิบายพื้นที่รอบร้าน/สถานที่ใกล้อะไร เช่น โรงพยาบาล,โรงเรียน,ห้างสรรพสินค้า อื่นๆ</div>
                                    </div>
                                    <div class="col-lg-6 lo10">
                                        <textarea class="form-control" rows="3" name="datail_area"></textarea> <span class="help-block"></span> </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="gfg"> ถ้าใบสมัครของคุณได้ผ่านการคัดเลือกจากทางบริษัทฯ คุณพร้อมที่จะเปิดสาขาได้เมื่อไร</div>
                                    </div>
                                    <div class="col-sm-8 iopp">
                                        <td class="smalltxt gfg">
                                            <input type="radio" value="ทันที" name="ready" >&nbsp;ทันที
                                            <input type="radio" value="ภายใน 3 เดือน" name="ready" >&nbsp;ภายใน 3 เดือน
                                            <input type="radio" value="ภายใน 6 เดือน" name="ready" >&nbsp;ภายใน 6 เดือน
                                            <input type="radio" value="ภายใน 1 ปี" name="ready" >&nbsp;ภายใน 1 ปี
                                          </td>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="gfg"> ทำไมสนใจ ธุรกิจแฟรนไชส์ของ Strawberry Club</div>
                                    </div>
                                    <div class="col-lg-6 lo10">
                                        <textarea class="form-control" rows="3" name="why_interest"></textarea> <span class="help-block"></span> </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="gfg"> นโยบายการบริหารงานและการวางแผนการตลาดในสาขาของท่านเป็นอย่างไร </div>
                                    </div>
                                    <div class="col-lg-6 lo10">
                                        <textarea class="form-control" rows="3" name="policy"></textarea> <span class="help-block"></span> </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="gfg"> ข้าพเจ้าขอรับรองว่า ข้อความดังกล่าวทั้งหมดในใบสมัครนี้เป็นความจริงทุกประการ </div>
                                    </div>
                                </div>
                                <br>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="gfg1"> <b>กรุณากรอกข้อมูลของท่านให้ครบถ้วนตามความเป็นจริง พร้อมทั้งส่งกลับมาเพื่อทางบริษัทฯจะได้พิจารณาและดำเนินการในลำดับต่อไป</b>
                                            <br> บริษัท ไลฟ์เวย์อินเตอร์เทรด จำกัด (กรุณานำส่ง คุณวุฒิชัย สารยศ) เลขที่ 5/7 ซ. พหลโยธิน 52 แยก 11 (เดชศิริ) แขวง คลอง
                                            <br>ถนน เขต สายไหม กรุงเทพฯ 10220 Tel 02-937 8798 : strawberryclub.gm@gmail.com : strawberry club สินค้าน่ารักๆ ทุกชิ้น 10 บาท </div>
                                    </div>
                                </div>
                                <br>
                                <tr>
                                    <div class="rtreterty gfg">
                                        <td class="rtreterty">
                                            <input style="FONT-WEIGHT: bold; FONT-SIZE: 14pt; WIDTH: 232px; CURSOR: pointer; COLOR: #43200c; FONT-FAMILY: 'Itim', cursive; HEIGHT: 32px" type="submit" value="ส่งข้อมูลการสมัครแฟรนไชส์" name="submit_bt">
                                            <input style="FONT-WEIGHT: bold; FONT-SIZE: 14pt; WIDTH: 210px; CURSOR: pointer; COLOR: #43200c; FONT-FAMILY: 'Itim', cursive; HEIGHT: 32px" type="button" onclick="close_window()"  value="ยกเลิก" name="submit_bt"> </td>
                                    </div>
                                </tr>
                            </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php require('inc_footer.php'); ?>
        <script>
            $(document).ready(function () {
                $(".dropdown").hover(function () {
                    $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideDown("400");
                    $(this).toggleClass('open');
                }, function () {
                    $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideUp("400");
                    $(this).toggleClass('open');
                });
            });
        </script>

        <script type="text/javascript">
        $( function() {
            $( "#bday" ).datepicker({dateFormat: 'dd-mm-yy'});
            $( "#junior_start" ).datepicker({dateFormat: 'dd-mm-yy'});
            $( "#junior_end" ).datepicker({dateFormat: 'dd-mm-yy'});
            $( "#high_start" ).datepicker({dateFormat: 'dd-mm-yy'});
            $( "#high_end" ).datepicker({dateFormat: 'dd-mm-yy'});
            $( "#vocational_start" ).datepicker({dateFormat: 'dd-mm-yy'});
            $( "#vocational_end" ).datepicker({dateFormat: 'dd-mm-yy'});
            $( "#diploma_start" ).datepicker({dateFormat: 'dd-mm-yy'});
            $( "#diploma_end" ).datepicker({dateFormat: 'dd-mm-yy'});
            $( "#bachelor_start" ).datepicker({dateFormat: 'dd-mm-yy'});
            $( "#bachelor_end" ).datepicker({dateFormat: 'dd-mm-yy'});
            $( "#master_start" ).datepicker({dateFormat: 'dd-mm-yy'});
            $( "#master_end" ).datepicker({dateFormat: 'dd-mm-yy'});
            $( "#doctor_start" ).datepicker({dateFormat: 'dd-mm-yy'});
            $( "#doctor_end" ).datepicker({dateFormat: 'dd-mm-yy'});
            $( "#time_start1" ).datepicker({dateFormat: 'dd-mm-yy'});
            $( "#time_end1" ).datepicker({dateFormat: 'dd-mm-yy'});
            $( "#time_start2" ).datepicker({dateFormat: 'dd-mm-yy'});
            $( "#time_end2" ).datepicker({dateFormat: 'dd-mm-yy'});
            $( "#time_start3" ).datepicker({dateFormat: 'dd-mm-yy'});
            $( "#time_end3" ).datepicker({dateFormat: 'dd-mm-yy'});

          } );
        </script>
        <script type="text/javascript">
            // Select all links with hashes
            $('a[href*="#"]')
                // Remove links that don't actually link to anything
                .not('[href="#"]').not('[href="#0"]').click(function (event) {
                    // On-page links
                    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                        // Figure out element to scroll to
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                        // Does a scroll target exist?
                        if (target.length) {
                            // Only prevent default if animation is actually gonna happen
                            event.preventDefault();
                            $('html, body').animate({
                                scrollTop: target.offset().top
                            }, 0.1, function () {
                                // Callback after animation
                                // Must change focus!
                                var $target = $(target);
                                $target.focus();
                                if ($target.is(":focus")) { // Checking if the target was focused
                                    return false;
                                }
                                else {
                                    $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                                    $target.focus(); // Set focus again
                                };
                            });
                        }
                    }
                });
        </script>
</body>
<script type="text/javascript">
function close_window() {
if (confirm("Close Window?")) {
  close();
}
}
</script>

</html>
