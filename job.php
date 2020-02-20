<!doctype html>
<html>

<head>
    <title>Page Title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <?php require('inc_header.php'); ?>
        <link href="https://fonts.googleapis.com/css?family=Itim|Mitr" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/font-awesome.css"> </head>
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
                                <div class="text-about  wow fadeInDown"><img src="img/security.png" class="img-responsive"> สมัครงาน</div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="ffgghh wow fadeInRight">
                                <div class="row">
                                    <div class="text-job"> ใบสมัครงาน/APPLICATIPN FROM </div>
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
                            <div class="rpool wow fadeInLeft">
                                <div class="text-jobk"> กรุณากรอกใบสมัครทุกส่วนที่เกี่ยวข้องกับท่าน </div>
                                <div class="text-mok"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> ตำแหน่งข้อมูลที่ต้องการสมัคร </div>
                                <div class="row">
                                    <div class="col-sm-2 gfg"> ตำแหน่งที่ว่าง </div>
                                    <div class="col-sm-10 iopp">
                                        <select name="position_interest1">
                                            <option value="selected">---ตำแหน่งที่ว่าง---</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2 gfg"> ตำแหน่งที่สนใจสมัคร </div>
                                    <div class="col-sm-10 iopp">
                                        <select name="position_interest1">
                                            <option value="selected">---กรุณาเลือกตำแหน่งที่สนใจ1---</option>
                                        </select>
                                        <br>
                                        <select name="position_interest1">
                                            <option value="selected">---กรุณาเลือกตำแหน่งที่สนใจ2---</option>
                                        </select>
                                        <br>
                                        <select name="position_interest1">
                                            <option value="selected">---กรุณาเลือกตำแหน่งที่สนใจ3---</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg"> เงินเดือนที่ต้องการ (บาท)</div>
                                    </div>
                                    <div class="col-sm-10 iopp">
                                        <td>
                                            <input onkeypress="check_number();" id="salary" name="salary" size="15" maxlength="10"> </td>
                                    </div>
                                </div>
                                <div class="text-mok"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> เอกสารประกอบการสมัครงาน </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg"> แนบไฟล์รูปภาพของท่าน</div>
                                    </div>
                                    <div class="col-sm-10 iopp">
                                        <td width="80%">
                                            <input class="darkbluelink" type="file" name="applicant_files[]" id="applicant_picture" size="50"> </td>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg"> Transcript ผลการเรียน</div>
                                    </div>
                                    <div class="col-sm-10 iopp">
                                        <td width="80%">
                                            <input class="darkbluelink" type="file" name="applicant_files[]" id="applicant_picture" size="50"> </td>
                                    </div>
                                </div>
                                <div class="text-mok"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> ข้อมูลส่วนตัวของผู้สมัคร </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg"> ชื่อ-สกุล (ไทย)</div>
                                    </div>
                                    <div class="col-sm-10 iopp">
                                        <td width="80%">
                                            <select name="title_th">
                                                <option value="นาย" selected>นาย</option>
                                                <option value="นาง" selected>นาง</option>
                                            </select>
                                            <input type="text" name="firstname_th" size="20" maxlength="50"> -
                                            <input type="text" name="firstname_th" size="20" maxlength="50"> </td>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg"> ชื่อ-สกุล (อังกฤษ)</div>
                                    </div>
                                    <div class="col-sm-10 iopp">
                                        <td width="80%">
                                            <select name="title_th">
                                                <option value="นาย" selected>Mr.</option>
                                                <option value="นาง" selected>Mrs.</option>
                                                <option value="นาง" selected>Miss.</option>
                                            </select>
                                            <input type="text" name="firstname_th" size="20" maxlength="50"> -
                                            <input type="text" name="firstname_th" size="20" maxlength="50"> </td>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg"> เลขบัตรประจำตัวประชาชน</div>
                                    </div>
                                    <div class="col-sm-10 iopp">
                                        <td>
                                            <input onkeypress="check_number();" id="salary" name="salary" size="15" maxlength="10"> </td>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg"> เพศ</div>
                                    </div>
                                    <div class="col-sm-10 iopp">
                                        <td class="smalltxt">
                                            <input type="radio" value="ชาย" name="sex" checked>&nbsp;ชาย
                                            <input type="radio" value="หญิง" name="sex" checked>&nbsp;หญิง</td>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg"> วัน/เดือน/ปีเกิด</div>
                                    </div>
                                    <div class="col-sm-10 iopp">
                                        <td>
                                            <input onkeypress="check_number();" id="salary" name="salary" size="15" maxlength="10"> </td>
                                        <td class="smalltxt" width="25%"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;น้ำหนัก <font color="red">*</font>
                                            <input id="weight" maxlength="3" size="4" name="profiles[weight]">&nbsp;ก.ก </td>
                                        <td class="smalltxt" width="25%"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สูง <font color="red">*</font>
                                            <input id="weight" maxlength="3" size="4" name="profiles[weight]">&nbsp;ซ.ม </td>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg"> สัญชาติ</div>
                                    </div>
                                    <div class="col-sm-10 iopp">
                                        <td>
                                            <input onkeypress="check_number();" id="salary" name="salary" size="15" maxlength="10"> </td>
                                        <td class="smalltxt" width="25%"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;จำนวนพี่น้อง <font color="red">*</font>
                                            <input id="weight" maxlength="3" size="4" name="profiles[weight]">&nbsp;คน </td>
                                        <td class="smalltxt" width="25%"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ท่านเป็นคนที่ <font color="red">*</font>
                                            <input id="weight" maxlength="3" size="4" name="profiles[weight]">&nbsp; </td>
                                        <td class="smalltxt" width="25%"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ศาสนา <font color="red">*</font>
                                            <input id="weight" maxlength="3" size="4" name="profiles[weight]">&nbsp; </td>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg"> สถานภาพครอบครัว</div>
                                    </div>
                                    <div class="col-sm-10 iopp">
                                        <td class="smalltxt">
                                            <input type="radio" value="โสด" name="sex" checked>&nbsp;โสด
                                            <input type="radio" value="สมรส" name="sex" checked>&nbsp;สมรส
                                            <input type="radio" value="หม้าย" name="sex" checked>&nbsp;หม้าย
                                            <input type="radio" value="หย่า" name="sex" checked>&nbsp;หย่า</td>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg"> สถานภาพทางทหาร</div>
                                    </div>
                                    <div class="col-sm-10 iopp">
                                        <td class="smalltxt">
                                            <input type="radio" value=" พ้นภาระทางทหาร  " name="sex" checked>&nbsp; พ้นภาระทางทหาร
                                            <input type="radio" value="ยังไม่เกณฑ์ " name="sex" checked>&nbsp;ยังไม่เกณฑ์
                                            <input type="radio" value="ได้รับการยกเว้น" name="sex" checked>&nbsp;ได้รับการยกเว้น </td>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg"> โรคประจำตัว </div>
                                    </div>
                                    <div class="col-sm-10 iopp">
                                        <td class="smalltxt">
                                            <input type="radio" value=" ไม่มี  " name="sex" checked>&nbsp; ไม่มี
                                            <input type="radio" value="มี " name="sex" checked>&nbsp;มี </td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;โปรดระบุ
                                        <input onkeypress="check_number();" id="salary" name="salary" size="15" maxlength="10"> </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg"> ที่อยู่ปัจจุบัน (ที่ติดต่อได้) </div>
                                    </div>
                                    <div class="col-sm-10 iopp">
                                        <td class="smalltxt">
                                            <textarea name="address" rows="5" cols="111"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg"> เบอร์ติดต่อ</div>
                                    </div>
                                    <div class="col-sm-10 iopp">
                                        <td> โทรศัพท์ :
                                            <input onkeypress="check_number();" id="salary" name="salary" size="15" maxlength="10">&nbsp;&nbsp; มือถือ :
                                            <input onkeypress="check_number();" id="salary" name="salary" size="15" maxlength="10"> </td>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg"> อีเมล์</div>
                                    </div>
                                    <div class="col-sm-10 iopp">
                                        <td>
                                            <input onkeypress="check_number();" id="salary" name="salary" size="50" maxlength="10"> </td>
                                    </div>
                                </div>
                                <div class="text-mok"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> ข้อมูลทางการศึกษา </div>
                                <div class="row">
                                    <div class="col-sm-12 gfg">
                                        <td hright="30">
                                            <table bordercolor="#fb85b9" cellspacing="0" cellpadding="1" width="100%" broder="1">
                                                <tbody>
                                                    <tr align="middle" bgcolor="#f8acc8">
                                                        <td class="smalltxt" width="20%" height="20%"> ระดับการศึกษา</td>
                                                        <td class="smalltxt" width="20%"> สถาบันการศึกษา</td>
                                                        <td class="smalltxt" width="20%"> สาขา/วิชาเอก</td>
                                                        <td class="smalltxt" width="20%"> วุฒิการศึกษาที่ได้รับ</td>
                                                        <td class="smalltxt" width="7%"> GPA</td>
                                                        <td class="smalltxt" width="13%"> วันที่สำเร็จ
                                                            <br>การศึกษา
                                                            <br>(DD/MM/YYYY)</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" class="smalltxt"> &nbsp; มัธยมศึกษาตอนต้น</td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="2" name="study_profiles[collage_name3]"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="11" name="study_profiles[collage_name3]"> </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" class="smalltxt"> &nbsp; มัธยมศึกษาตอนปลาย</td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="2" name="study_profiles[collage_name3]"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="11" name="study_profiles[collage_name3]"> </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" class="smalltxt"> &nbsp; ประกาศนียบัตรวิชาชีพ</td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="2" name="study_profiles[collage_name3]"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="11" name="study_profiles[collage_name3]"> </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" class="smalltxt"> &nbsp; ประกาศนียบัตรวิชาชีพชั้นสูง</td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="2" name="study_profiles[collage_name3]"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="11" name="study_profiles[collage_name3]"> </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" class="smalltxt"> &nbsp; ปริญญาตรี</td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="2" name="study_profiles[collage_name3]"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="11" name="study_profiles[collage_name3]"> </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" class="smalltxt"> &nbsp; ปริญญาโท</td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="2" name="study_profiles[collage_name3]"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="11" name="study_profiles[collage_name3]"> </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" class="smalltxt"> &nbsp; ปริญญาเอก</td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="2" name="study_profiles[collage_name3]"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="11" name="study_profiles[collage_name3]"> </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </div>
                                </div>
                                <div class="text-mok"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> ประวัติการฝึกงาน </div>
                                <div class="row">
                                    <div class="col-sm-12 gfg">
                                        <td hright="30">
                                            <table bordercolor="#fb85b9" cellspacing="0" cellpadding="1" width="100%" broder="1">
                                                <tbody>
                                                    <tr align="middle" bgcolor="#f8acc8">
                                                        <td class="smalltxt" width="20%" height="20%"> ชื่อสถานที่ทำงาน/ฝึกงาน</td>
                                                        <td class="smalltxt" width="20%"> ระยะเวลาในการทำงาน / ฝึกงาน
                                                            <br>วันที่เริ่มงาน ถึง วันที่สิ้นสุด</td>
                                                        <td class="smalltxt" width="20%"> ตำแหน่ง</td>
                                                        <td class="smalltxt" width="20%">เงินเดือน (บาท)</td>
                                                        <td class="smalltxt" width="20%">ลักษณะงาน</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="9" name="work_profiles[start_date1]">-
                                                            <input type="text" size="9" name="work_profiles[start_date1]"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="9" name="work_profiles[start_date1]">-
                                                            <input type="text" size="9" name="work_profiles[start_date1]"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="9" name="work_profiles[start_date1]">-
                                                            <input type="text" size="9" name="work_profiles[start_date1]"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </div>
                                </div>
                                <div class="text-mok"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> รายละเอียดการปฎิบัติงาน </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="gfg"> ปฎิบัติงานเข้ากะได้หรือไม่</div>
                                    </div>
                                    <div class="col-sm-9 iopp">
                                        <td class="smalltxt">
                                            <input type="radio" value="ได้" name="sex" checked>&nbsp;ได้
                                            <input type="radio" value="ไม่ได้" name="sex" checked>&nbsp;ไม่ได้</td>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="gfg"> ปฎิบัติงานต่างจังหวัด ได้หรือไม่</div>
                                    </div>
                                    <div class="col-sm-9 iopp">
                                        <td class="smalltxt">
                                            <input type="radio" value="ได้" name="sex" checked>&nbsp;ได้
                                            <input type="radio" value="ไม่ได้" name="sex" checked>&nbsp;ไม่ได้</td>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="gfg"> ปฎิบัติงานต่างประเทศ ได้หรือไม่</div>
                                    </div>
                                    <div class="col-sm-9 iopp">
                                        <td class="smalltxt">
                                            <input type="radio" value="ได้" name="sex" checked>&nbsp;ได้
                                            <input type="radio" value="ไม่ได้" name="sex" checked>&nbsp;ไม่ได้</td>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="gfg"> ประเภทใบขับขี่ที่ท่านมี</div>
                                    </div>
                                    <div class="col-sm-9 iopp">
                                        <td class="smalltxt">
                                            <input type="radio" value="รถยนตร์ " name="sex" checked>&nbsp;รถยนตร์
                                            <input type="radio" value="จักรยานยนตร์ " name="sex" checked>&nbsp;จักรยานยนตร์
                                            <input type="radio" value=" มีทั้ง 2 อย่าง  " name="sex" checked>&nbsp; มีทั้ง 2 อย่าง
                                            <input type="radio" value="ไม่มีทั้ง 2 อย่าง" name="sex" checked>&nbsp;ไม่มีทั้ง 2 อย่าง</td>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="gfg"> หากผ่านการทดสอบท่าน สามารถเริ่มงาน</div>
                                    </div>
                                    <div class="col-sm-9 iopp">
                                        <td class="smalltxt">
                                            <select name="position_interest1">
                                                <option value="selected">---เลือก--- </option>
                                            </select>&nbsp;&nbsp;หลังทราบผล </td>
                                    </div>
                                </div>
                                <div class="text-mok tttt"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> ความรู้ความสามารถพิเศษ (Skill) </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <td hright="30">
                                            <table bordercolor="#fb85b9" cellspacing="0" cellpadding="1" width="97%" broder="1">
                                                <tbody>
                                                    <tr align="middle" bgcolor="#f8acc8">
                                                        <td class="smalltxt" width="20%" height="20%"> </td>
                                                        <td class="smalltxt" width="20%">ฟัง</td>
                                                        <td class="smalltxt" width="20%"> พูด</td>
                                                        <td class="smalltxt" width="20%">อ่าน</td>
                                                        <td class="smalltxt" width="20%">เขียน</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="middle" class="smalltxt"> ภาษาไทย </td>
                                                        <td align="middle" class="smalltxt">
                                                            <select name="position_interest1">
                                                                <option value="selected">---เลือก--- </option>
                                                            </select>
                                                        </td>
                                                        <td align="middle" class="smalltxt">
                                                            <select name="position_interest1">
                                                                <option value="selected">---เลือก--- </option>
                                                            </select>
                                                        </td>
                                                        <td align="middle" class="smalltxt">
                                                            <select name="position_interest1">
                                                                <option value="selected">---เลือก--- </option>
                                                            </select>
                                                        </td>
                                                        <td align="middle" class="smalltxt">
                                                            <select name="position_interest1">
                                                                <option value="selected">---เลือก--- </option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="middle" class="smalltxt"> ภาษาอังกฤษ </td>
                                                        <td align="middle" class="smalltxt">
                                                            <select name="position_interest1">
                                                                <option value="selected">---เลือก--- </option>
                                                            </select>
                                                        </td>
                                                        <td align="middle" class="smalltxt">
                                                            <select name="position_interest1">
                                                                <option value="selected">---เลือก--- </option>
                                                            </select>
                                                        </td>
                                                        <td align="middle" class="smalltxt">
                                                            <select name="position_interest1">
                                                                <option value="selected">---เลือก--- </option>
                                                            </select>
                                                        </td>
                                                        <td align="middle" class="smalltxt">
                                                            <select name="position_interest1">
                                                                <option value="selected">---เลือก--- </option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <select name="position_interest1">
                                                                <option value="selected">---เลือก--- </option>
                                                            </select>
                                                        </td>
                                                        <td align="middle" class="smalltxt">
                                                            <select name="position_interest1">
                                                                <option value="selected">---เลือก--- </option>
                                                            </select>
                                                        </td>
                                                        <td align="middle" class="smalltxt">
                                                            <select name="position_interest1">
                                                                <option value="selected">---เลือก--- </option>
                                                            </select>
                                                        </td>
                                                        <td align="middle" class="smalltxt">
                                                            <select name="position_interest1">
                                                                <option value="selected">---เลือก--- </option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <select name="position_interest1">
                                                                <option value="selected">---เลือก--- </option>
                                                            </select>
                                                        </td>
                                                        <td align="middle" class="smalltxt">
                                                            <select name="position_interest1">
                                                                <option value="selected">---เลือก--- </option>
                                                            </select>
                                                        </td>
                                                        <td align="middle" class="smalltxt">
                                                            <select name="position_interest1">
                                                                <option value="selected">---เลือก--- </option>
                                                            </select>
                                                        </td>
                                                        <td align="middle" class="smalltxt">
                                                            <select name="position_interest1">
                                                                <option value="selected">---เลือก--- </option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg">ความสามารถเพิ่มเติม </div>
                                    </div>
                                    <div class="col-sm-10 iopp">
                                        <td class="smalltxt">
                                            <textarea name="address" rows="5" cols="111"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg">รางวัลและความสำเร็จ </div>
                                    </div>
                                    <div class="col-sm-10 iopp">
                                        <td class="smalltxt">
                                            <textarea name="address" rows="5" cols="111"></textarea>
                                    </div>
                                </div>
                                <div class="text-mok"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> บุคคลอ้างอิง </div>
                                <div class="gfg">
                                    <td hright="30">
                                        <table bordercolor="#fb85b9" cellspacing="0" cellpadding="1" width="100%" broder="1">
                                            <tbody>
                                                <tr align="middle" bgcolor="#f8acc8">
                                                    <td class="smalltxt" width="25%" height="20%"> ชื่อ-สกุล</td>
                                                    <td class="smalltxt" width="25%">สถานที่ทำงาน / ตำแหน่ง</td>
                                                    <td class="smalltxt" width="25%"> เบอร์โทรศัพท์ติดต่อ</td>
                                                    <td class="smalltxt" width="25%">ความสัมพันธ์</td>
                                                </tr>
                                                <tr>
                                                    <td align="middle" class="smalltxt">
                                                        <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                    <td align="middle" class="smalltxt">
                                                        <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                    <td align="middle" class="smalltxt">
                                                        <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                    <td align="middle" class="smalltxt">
                                                        <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                </tr>
                                                <tr>
                                                    <td align="middle" class="smalltxt">
                                                        <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                    <td align="middle" class="smalltxt">
                                                        <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                    <td align="middle" class="smalltxt">
                                                        <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                    <td align="middle" class="smalltxt">
                                                        <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                </tr>
                                                <tr>
                                                    <td align="middle" class="smalltxt">
                                                        <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                    <td align="middle" class="smalltxt">
                                                        <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                    <td align="middle" class="smalltxt">
                                                        <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                    <td align="middle" class="smalltxt">
                                                        <input type="text" size="22" name="study_profiles[collage_name3]"> </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </div>
                                <div class="text-mok"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> อื่นๆ </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg"> ทราบข่าวการ สมัครงานจาก</div>
                                    </div>
                                    <div class="col-sm-10 iopp">
                                        <td class="smalltxt gfg">
                                            <input type="radio" value="นสพ. , นิตยสาร " name="sex" checked>&nbsp;นสพ. , นิตยสาร
                                            <input type="radio" value=" อินเทอร์เน็ต " name="sex" checked>&nbsp; อินเทอร์เน็ต
                                            <input type="radio" value="มีบุคคลแนะนำ " name="sex" checked>&nbsp;มีบุคคลแนะนำ
                                            <input type="radio" value=" อื่นๆ " name="sex" checked>&nbsp;อื่นๆ</td>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg">หมายเหตุเพิ่มเติม </div>
                                    </div>
                                    <div class="col-sm-10 iopp">
                                        <td class="smalltxt">
                                            <textarea name="address" rows="5" cols="111"></textarea>
                                    </div>
                                </div>
                                <tr>
                                    <div class="rtreterty gfg">
                                        <td class="rtreterty">
                                            <input style="FONT-WEIGHT: bold; FONT-SIZE: 14pt; WIDTH: 210px; CURSOR: pointer; COLOR: #43200c; FONT-FAMILY: 'Itim', cursive; HEIGHT: 32px" type="submit" value="ส่งข้อมูลการสมัครงาน" name="submit_bt">
                                            <input style="FONT-WEIGHT: bold; FONT-SIZE: 14pt; WIDTH: 210px; CURSOR: pointer; COLOR: #43200c; FONT-FAMILY: 'Itim', cursive; HEIGHT: 32px" type="submit" value="ยกเลิก" name="submit_bt"> </td>
                                    </div>
                                </tr>
                            </div>
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
        <script>
            $(document).ready(function () {
                $('#media').carousel({
                    pause: true
                    , interval: false
                , });
            });
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
        <script src="js/jquery-2.1.4.js">
        </script>
        <script src="js/jquery.mobile.custom.min.js"></script>
        <script src="js/main.js"></script>
</body>

</html>