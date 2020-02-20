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
  WHERE page.page_name='apply job'";
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
    .wiad{
        width: 100px;
    }
</style>
<script type="text/javascript">
function check_email(){
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if (!(document.getElementById("email").value.match(mailformat)))
{
  alert("รูปแบบ E-mail ไม่ถูกต้อง");
  return false;
}
}
function congenital(){
  if(document.getElementById('congenital_disease_yes').checked==true){
    document.getElementById('congenital_disease_etc').disabled=false;
    document.getElementById('congenital_disease_etc').required=true;
  }
  else{
    document.getElementById('congenital_disease_etc').disabled=true;
  }
}
function check_all(){
if(document.getElementById('position_interest1').value=="" &&
document.getElementById('position_interest2').value=="" &&
document.getElementById('position_interest3').value==""){
    alert("กรุณาเลือกตำแหน่งที่สนใจ");
    return false;
  }
}
function language2(data){
  if(data==0){
    document.getElementById('listen_etc2').style.display='none'
    document.getElementById('speak_etc2').style.display='none'
    document.getElementById('read_etc2').style.display='none'
    document.getElementById('write_etc2').style.display='none'
    document.getElementById('listen_etc2').required=false;
    document.getElementById('speak_etc2').required=false;
    document.getElementById('read_etc2').required=false;
    document.getElementById('write_etc2').required=false;
  }else{
    document.getElementById('listen_etc2').style.display=''
    document.getElementById('speak_etc2').style.display=''
    document.getElementById('read_etc2').style.display=''
    document.getElementById('write_etc2').style.display=''
    document.getElementById('listen_etc2').required=true;
    document.getElementById('speak_etc2').required=true;
    document.getElementById('read_etc2').required=true;
    document.getElementById('write_etc2').required=true;
  }

}
function language1(data){
    if(data==0){
  document.getElementById('listen_etc1').style.display='none'
  document.getElementById('listen_etc1').required=false;
  document.getElementById('speak_etc1').style.display='none'
  document.getElementById('speak_etc1').required=false;
  document.getElementById('read_etc1').style.display='none'
  document.getElementById('read_etc1').required=false;
  document.getElementById('write_etc1').style.display='none'
  document.getElementById('write_etc1').required=false;
}else{
  document.getElementById('listen_etc1').style.display=''
  document.getElementById('speak_etc1').style.display=''
  document.getElementById('read_etc1').style.display=''
  document.getElementById('write_etc1').style.display=''
  document.getElementById('listen_etc1').required=true;
  document.getElementById('speak_etc1').required=true;
  document.getElementById('read_etc1').required=true;
  document.getElementById('write_etc1').required=true;
}
}
function show_language1(data){
  if(data>0){
    language1(1);
  }else{
    language1(0);
  }
}
function show_language2(data){
  if(data>0){
    language2(1);
  }else{
    language2(0);
  }
}
  /*
  else if(document.getElementById('salary').value==""){
    alert("กรุณากรอกเงินเดือนที่ต้องการ");
    return false;
  }
  else if(document.getElementById('picture').files.length ==0){
    alert("กรุณาแนบไฟล์รูปของท่าน");
    return false;
  }
  else if(document.getElementById('transcript').files.length ==0){
    alert("กรุณาแนบไฟล์ Transcript ของท่าน");
    return false;
  }
  else if(document.getElementById('title_th').value==""){
    alert("กรุณาเลือกคำนำหน้าชื่อภาษาไทย");
    return false;
  }
  else if(document.getElementById('firstname_th').value==""){
    alert("กรุณากรอกชื่อภาษาไทย");
    return false;
  }
  else if(document.getElementById('lastname_th').value==""){
    alert("กรุณากรอกนามสกุลภาษาไทย");
    return false;
  }
  else if(document.getElementById('title_en').value==""){
    alert("กรุณาเลือกคำนำหน้าชื่อภาษาอังกฤษ");
    return false;
  }
  else if(document.getElementById('firstname_en').value==""){
    alert("กรุณากรอกชื่อภาษาอังกฤษ");
    return false;
  }
  else if(document.getElementById('lastname_en').value==""){
    alert("กรุณากรอกนามสกุลภาษาอังกฤษ");
    return false;
  }
  else if(document.getElementById('identity').value==""){
    alert("กรุณากรอกเลขบัตรประจำตัวประชาชน");
    return false;
  }
  else if(document.getElementById('male').checked==false && document.getElementById('female').checked==false){
    alert("กรุณาเลือกเพศ");
    return false;
  }
  else if(document.getElementById('bday').value==""){
    alert("กรุณากรอกวัน/เดือน/ปี เกิด");
    return false;
  }
  else if(document.getElementById('weight').value==""){
    alert("กรุณากรอกน้ำหนัก");
    return false;
  }
  else if(document.getElementById('nationality').value==""){
    alert("กรุณากรอกสัญชาติ");
    return false;
  }
  else if(document.getElementById('brethren').value==""){
    alert("จำนวนพี่น้อง");
    return false;
  }
  else if(document.getElementById('num_of_brethren').value==""){
    alert("กรุณากรอกท่านเป็นคนที่");
    return false;
  }
  else if(document.getElementById('Religion').value==""){
    alert("กรุณากรอกศาสนา");
    return false;
  }
  else if(document.getElementById('single').checked==false &&
  document.getElementById('marry').checked==false &&
document.getElementById('widow').checked==false &&
document.getElementById('divorce').checked==false){
    alert("กรุณากรอกศาสนา");
    return false;
  }




military_end
not_military
except
congenital_disease_yes
congenital_disease_no




*/

</script>

<body class="bgabout" onload="language2('0');language1('0')">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <?php require('inc_menu.php'); ?>
                    <div class="container">
                        <div class="row pand">
                            <div class="col-sm-12">
                                <div class="text-about  wow fadeInDown"><img src="img/security.png" class="img-responsive"> <?=$text[$_SESSION['lang']]['job']?></div>
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
                                            <br> 5/7 ซ.พหลโยธิน 52 แยก 11(เดชศิริ) แขวงคลองถนน
                                            <br>เขตสายไหม กรุงเทพมหานคร 10220 </div>
                                    </div>
                                </div>
                            </div>
                            <form target="_blank" class="" action="apply_job.php" method="post" enctype="multipart/form-data">

                            <div class="rpool wow fadeInLeft">
                                <div class="text-jobk"> กรุณากรอกใบสมัครทุกส่วนที่เกี่ยวข้องกับท่าน </div>
                                <div class="text-mok"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> ตำแหน่งข้อมูลที่ต้องการสมัคร </div>
                              <!--  <div class="row">
                                    <div class="col-sm-3 col-md-2 gfg"> ตำแหน่งที่ว่าง </div>
                                    <div class="col-sm-7 col-md-5 iopp">
                                        <select name="position_interest1" id="" class="select2 form-control">
                                            <option value="">---ตำแหน่งที่ว่าง---</option>
                                            <option value="1">---งาน1---</option>
                                            <option value="2">---งาน2---</option>
                                            <option value="3">---งาน3---</option>
                                            <option value="4">---งาน4---</option>
                                        </select>
                                    </div>
                                </div>-->
                                <div class="row">
                                    <div class="col-sm-3 col-md-2 gfg"> ตำแหน่งที่สนใจสมัคร </div>
                                    <div class="col-sm-7 col-md-5 iopp">
                                      <?php
                                      $sql="SELECT * FROM job_position";
                                      $q=mysql_query($sql);
                                      while($rs=mysql_fetch_array($q)){?>
                                        <input class="cb" type="checkbox" name="job_interest[]" value="<?=$rs['job_position_name']?>"><?=$rs['job_position_name']?> หน้าที่ : <?=$rs['job_position_detail']?><br>
                                      <?php
                                    }
                                       ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-md-2">
                                        <div class="gfg"> เงินเดือนที่ต้องการ (บาท) </div>
                                    </div>
                                    <div class="col-sm-4 col-md-3 iopp">
                                            <input onkeypress="return check_number(document.getElementById(this.id).value,this.id)"id="salary" required name="salary" size="15" maxlength="10" class="form-control">
                                    </div>
                                </div>
                                <div class="text-mok"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> เอกสารประกอบการสมัครงาน </div>
                                <div class="row">
                                    <div class="col-sm-3 col-md-2">
                                        <div class="gfg"> แนบไฟล์รูปภาพของท่าน</div>
                                    </div>
                                    <div class="col-sm-9 col-md-5 iopp">
                                        <td width="80%">
                                            <input class="darkbluelink form-control" type="file" name="picture" id="picture" required size="50"> </td>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-md-2">
                                        <div class="gfg"> Transcript ผลการเรียน</div>
                                    </div>
                                    <div class="col-sm-9 col-md-5 iopp">
                                        <td width="80%">
                                            <input class="darkbluelink form-control" type="file" name="transcript" id="transcript" size="50" required> </td>
                                    </div>
                                </div>
                                <div class="text-mok"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> ข้อมูลส่วนตัวของผู้สมัคร </div>
                                <div class="row">
                                    <div class="col-sm-3 col-md-2">
                                        <div class="gfg"> ชื่อ-สกุล (ไทย)</div>
                                    </div>
                                    <div class="col-sm-2 col-md-1 iopp">
                                        <select name="title_th" id="title_th" class="form-control" required>
                                            <option value="นาย">นาย</option>
                                            <option value="นาง" >นาง</option>
                                            <option value="นางสาว" >นางสาว</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3 col-md-4 iopp">
                                        <input type="text" id="firstname_th" name="firstname_th" size="20" maxlength="50" class="form-control" required>
                                    </div>
                                    <div class="col-sm-1 col-md-1 iopp text_center">-</div>
                                    <div class="col-sm-3 col-md-4 iopp">
                                        <input type="text" id="lastname_th" name="lastname_th" size="20" maxlength="50" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg"> ชื่อ-สกุล (อังกฤษ)</div>
                                    </div>
                                    <div class="col-sm-1 iopp">
                                        <td width="80%">
                                            <select name="title_en" id="title_en" class="form-control" required>
                                                <option value="Mr." >Mr.</option>
                                                <option value="Mrs." >Mrs.</option>
                                                <option value="Miss." >Miss.</option>
                                            </select>
                                          </div>
                                          <div class="col-sm-3 col-md-4 iopp">
                                              <input type="text" id="firstname_en" required name="firstname_en" size="20" maxlength="50" class="form-control">
                                          </div>
                                          <div class="col-sm-1 col-md-1 iopp text_center">-</div>
                                          <div class="col-sm-3 col-md-4 iopp">
                                              <input type="text" id="lastname_en" required name="lastname_en" size="20" maxlength="50" class="form-control">
                                          </div>
                                          </td>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg"> เลขบัตรประจำตัวประชาชน</div>
                                    </div>
                                    <div class="col-sm-3 iopp">
                                        <td>
                                            <input required onkeypress="return check_number(document.getElementById(this.id).value,this.id)" id="identity" name="identity" size="15" maxlength="13" class="form-control"> </td>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg"> เพศ</div>
                                    </div>
                                    <div class="col-sm-10 iopp">
                                        <td class="smalltxt">
                                            <input type="radio" value="ชาย" name="sex" id="male" required >&nbsp;ชาย
                                            <input type="radio" value="หญิง" name="sex" id="female">&nbsp;หญิง</td>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg"> วัน/เดือน/ปีเกิด</div>
                                    </div>
                                    <div class="col-sm-2 iopp">
                                      <input type="text" id="bday" name="bday" placeholder="yyyy-mm-dd" class="form-control" required>
                                    </div>
                                    <div class="col-sm-1 iopp">
                                        น้ำหนัก <font color="red">*</font>
                                      </div>
                                      <div class="col-sm-1 iopp">
                                        <input type="text" required size="10" onkeypress="return check_number(document.getElementById(this.id).value,this.id)" id="weight" name="weight" class="form-control">
                                      </div>
                                      <div class="col-sm-1 iopp">
                                        กก.
                                      </div>
                                      <div class="col-sm-1 iopp">
                                            สูง <font color="red">*</font>
                                          </div>
                                          <div class="col-sm-1 iopp">
                                            <input type="text" required onkeypress="return check_number(document.getElementById(this.id).value,this.id)" id="height" name="height" class="form-control">
                                          </div>
                                          <div class="col-sm-1 iopp">
                                            ซ.ม.
                                          </div>
                                        </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg"> สัญชาติ</div>
                                    </div>
                                    <div class="col-sm-2 iopp">
                                        <input type="text" required name="nationality" id="nationality" class="form-control">
                                      </div>
                                      <div class="col-sm-1 iopp">
                                    จำนวนพี่น้อง <font color="red">*</font>
                                    </div>
                                    <div class="col-sm-1 iopp">
                                          <input required onkeypress="return check_number(document.getElementById(this.id).value,this.id)" type="text" name="brethren" id="brethren" class="form-control">
                                    </div>
                                    <div class="col-sm-1 iopp">
                                      คน
                                    </div>
                                    <div class="col-sm-1 iopp">
                                  ท่านเป็นคนที่ <font color="red">*</font>
                                  </div>
                                  <div class="col-sm-1 iopp">
                                        <input required onkeypress="return check_number(document.getElementById(this.id).value,this.id)" type="text" name="num_of_brethren" id="num_of_brethren" class="form-control">
                                  </div>
                                  <div class="col-sm-1 iopp">
                                    ศาสนา <font color="red">*</font>
                                  </div>
                                  <div class="col-sm-2 iopp">
                                    <input type="text" required name="religion" id="religion" class="form-control">
                                  </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg"> สถานภาพครอบครัว</div>
                                    </div>
                                    <div class="col-sm-10 iopp">

                                            <input type="radio" value="โสด" name="relationship" required id="single">&nbsp;โสด
                                            <input type="radio" value="สมรส" name="relationship"id="marry">&nbsp;สมรส
                                            <input type="radio" value="หม้าย" name="relationship" id="widow">&nbsp;หม้าย
                                            <input type="radio" value="หย่า" name="relationship" id="divorce">&nbsp;หย่า
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg"> สถานภาพทางทหาร</div>
                                    </div>
                                    <div class="col-sm-10 iopp">

                                            <input type="radio" required value="พ้นภาระทางทหาร" name="militar_status" id="military_end">&nbsp; พ้นภาระทางทหาร
                                            <input type="radio" value="ยังไม่เกณฑ์" name="militar_status" id="not_military">&nbsp;ยังไม่เกณฑ์
                                            <input type="radio" value="ได้รับการยกเว้น" name="militar_status" id="except" >&nbsp;ได้รับการยกเว้น
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg"> โรคประจำตัว </div>
                                    </div>
                                    <div class="col-sm-2 iopp">
                                        <td class="smalltxt">
                                            <input type="radio" value="ไม่มี" required name="congenital_disease" id="congenital_disease_no" onclick="congenital()">&nbsp; ไม่มี
                                            <input type="radio" value="มี" name="congenital_disease" id="congenital_disease_yes" onclick="congenital()" >&nbsp;มี </td>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;โปรดระบุ :
                                    </div>
                                    <div class="col-sm-3 iopp" >
                                    <input type="text" disabled id="congenital_disease_etc"  name="congenital_disease_etc" class="form-control">
                                    </div>
                                  </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg"> ที่อยู่ปัจจุบัน (ที่ติดต่อได้) </div>
                                    </div>

                                    <div class="col-lg-10 lo10">
                                        <textarea required class="form-control" rows="3" id="address" name="address"></textarea> <span class="help-block"></span> </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg"> เบอร์ติดต่อ</div>
                                    </div>
                                    <div class="col-sm-1 iopp">
                                        โทรศัพท์ :
                                      </div>
                                      <div class="col-sm-2 iopp">
                                            <input required class="form-control" onkeypress="return check_number(document.getElementById(this.id).value,this.id)" id="tell" name="tell">
                                        </div>
                                        <div class="col-sm-1 iopp">
                                            มือถือ :
                                          </div>
                                          <div class="col-sm-2 iopp">
                                                <input required class="form-control" onkeypress="return check_number(document.getElementById(this.id).value,this.id)" id="cell_phone" name="cell_phone">
                                            </div>
                                    </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg"> อีเมล์</div>
                                    </div>
                                    <div class="col-sm-4 col-md-4 iopp">
                                            <input required type="text" onchange="check_email()" id="email" name="email" class="form-control">
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
                                                        <td class="smalltxt" width="20%"> วุฒิการศึกษาที่ได้รับ</td>
                                                        <td class="smalltxt" width="7%"> GPA</td>
                                                        <td class="smalltxt" width="13%"> วันที่สำเร็จ
                                                            <br>การศึกษา
                                                            <br>(DD/MM/YYYY)</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" class="smalltxt"> &nbsp; มัธยมศึกษาตอนต้น</td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="junior_school_name"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="junior_major"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="junior_education_background"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="2" name="junior_gpa" onkeypress="return check_number(document.getElementById(this.id).value)" id="junior_gpa"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="11" name="junior_graduate_date" id="junior_graduate_date" placeholder="yyyy-mm-dd"> </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" class="smalltxt"> &nbsp; มัธยมศึกษาตอนปลาย</td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="high_school_name"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="high_major"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="high_education_background"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="2" name="high_gpa" onkeypress="return check_number(this)"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="11" name="high_graduate_date" id="high_graduate_date" placeholder="yyyy-mm-dd"> </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" class="smalltxt"> &nbsp; ประกาศนียบัตรวิชาชีพ</td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="vocational_school_name"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="vocational_major"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="vocational_education_background"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="2" name="vocational_gpa"  onkeypress="return check_number(this)"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="11" name="vocational_graduate_date" id="vocational_graduate_date" placeholder="yyyy-mm-dd"> </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" class="smalltxt"> &nbsp; ประกาศนียบัตรวิชาชีพชั้นสูง</td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="diploma_school_name"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="diploma_major"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="diploma_education_background" > </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="2" name="diploma_gpa"  onkeypress="return check_number(this)"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="11" name="diploma_graduate_date" id="diploma_graduate_date" placeholder="yyyy-mm-dd"> </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" class="smalltxt"> &nbsp; ปริญญาตรี</td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="bachelor_school_name"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="bachelor_major"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="bachelor_education_background"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="2" name="bachelor_gpa" onkeypress="return check_number(this)"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="11" name="bachelor_graduate_date" id="bachelor_graduate_date" placeholder="yyyy-mm-dd"> </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" class="smalltxt"> &nbsp; ปริญญาโท</td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="master_school_name"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="master_major"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="master_education_background"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="2" name="master_gpa" onkeypress="return check_number(this)"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="11" name="master_graduate_date" id="master_graduate_date" placeholder="yyyy-mm-dd"> </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" class="smalltxt"> &nbsp; ปริญญาเอก</td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="doctor_school_name"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="doctor_major"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="doctor_education_background"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="2" name="doctor_gpa" onkeypress="return check_number(this)"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="11" name="doctor_graduate_date" id="doctor_graduate_date" placeholder="yyyy-mm-dd"> </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-mok"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> ประวัติการฝึกงาน </div>
                                <div class="row">
                                    <div class="col-sm-12 gfg">
                                       <div class="table-responsive">
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
                                                            <input type="text" size="22" name="office_name"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="9" name="date_start" id="date_start" placeholder="yyyy-mm-dd">-
                                                            <input type="text" size="9" name="date_end" id="date_end" placeholder="yyyy-mm-dd"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="position"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="ex_salary"  onkeypress="return check_number(this)"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="job_detail"> </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="office_name2"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="9" name="date_start2" id="date_start2" placeholder="yyyy-mm-dd">-
                                                            <input type="text" size="9" name="date_end2" id="date_end2" placeholder="yyyy-mm-dd"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="position2"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="ex_salary2" onkeypress="return check_number(this)"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="job_detail2"> </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="office_name3"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="9" name="date_start3" id="date_start3" placeholder="yyyy-mm-dd">-
                                                            <input type="text" size="9" name="date_end3" id="date_end3" placeholder="yyyy-mm-dd"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="position3"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="ex_salary3" onkeypress="return check_number(this)"> </td>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="job_detail3"> </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-mok"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> รายละเอียดการปฎิบัติงาน </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="gfg"> ปฎิบัติงานเข้ากะได้หรือไม่</div>
                                    </div>
                                    <div class="col-sm-9 iopp">
                                        <td class="smalltxt">
                                            <input type="radio" value="ได้" name="work_shift" required >&nbsp;ได้
                                            <input type="radio" value="ไม่ได้" name="work_shift" >&nbsp;ไม่ได้</td>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="gfg"> ปฎิบัติงานต่างจังหวัด ได้หรือไม่</div>
                                    </div>
                                    <div class="col-sm-9 iopp">
                                        <td class="smalltxt">
                                            <input type="radio" value="ได้" name="work_another_province" required >&nbsp;ได้
                                            <input type="radio" value="ไม่ได้" name="work_another_province" >&nbsp;ไม่ได้</td>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="gfg"> ปฎิบัติงานต่างประเทศ ได้หรือไม่</div>
                                    </div>
                                    <div class="col-sm-9 iopp">
                                        <td class="smalltxt">
                                            <input type="radio" value="ได้" name="work_another_country" required>&nbsp;ได้
                                            <input type="radio" value="ไม่ได้" name="work_another_country" >&nbsp;ไม่ได้</td>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="gfg"> ประเภทใบขับขี่ที่ท่านมี</div>
                                    </div>
                                    <div class="col-sm-9 iopp">
                                        <td class="smalltxt">
                                            <input type="radio" value="รถยนตร์"  name="driver_licence" required >&nbsp;รถยนตร์
                                            <input type="radio" value="จักรยานยนตร์" name="driver_licence">&nbsp;จักรยานยนตร์
                                            <input type="radio" value="มีทั้ง รถยนตร์ และ จักรยานยนตร์" name="driver_licence" >&nbsp; มีทั้ง 2 อย่าง
                                            <input type="radio" value="ไม่มีมีทั้ง รถยนตร์ และ จักรยานยนตร์" name="driver_licence" >&nbsp;ไม่มีทั้ง 2 อย่าง</td>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="gfg"> หากผ่านการทดสอบท่าน สามารถเริ่มงาน</div>
                                    </div>
                                    <div class="col-sm-3 iopp">
                                        <td class="smalltxt">
                                            <select name="can_work_after_test" class="form-control" required>
                                                <option value="">---เลือก--- </option>
                                                <option value="ทันที"> ทันที </option>
                                                <option value="ภายใน 1 สัปดาห์"> ภายใน 1 สัปดาห์ </option>
                                                <option value="ภายใน 15 วัน"> ภายใน 15 วัน </option>
                                                <option value="ภายใน 1 เดือน"> ภายใน 1 เดือน </option>
                                                <option value="ภายใน 2 เดือน"> ภายใน 2 เดือน </option>
                                            </select></td>
                                    </div>
                                    <div class="col-sm-6 iopp">
                                      &nbsp;&nbsp;หลังทราบผล
                                    </div>
                                </div>
                                <div class="text-mok tttt"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> ความรู้ความสามารถพิเศษ (Skill) </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                       <div class="table-responsive">
                                        <td hright="30">
                                            <table bordercolor="#fb85b9" cellspacing="0" cellpadding="1" width="97%" broder="1">
                                                <tbody>
                                                    <tr align="middle" bgcolor="#f8acc8">
                                                        <td class="smalltxt" width="20%" height="20%"> </td>
                                                        <td class="smalltxt" width="20%">ฟัง</td>
                                                        <td class="smalltxt" width="20%">พูด</td>
                                                        <td class="smalltxt" width="20%">อ่าน</td>
                                                        <td class="smalltxt" width="20%">เขียน</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="middle" class="smalltxt"> ภาษาไทย </td>
                                                        <td align="middle" class="smalltxt">
                                                            <select name="listen_thai" required>
                                                                <option value="">---เลือก--- </option>
                                                                <option value="พอใช้"> พอใช้ </option>
                                                                <option value="ดี"> ดี </option>
                                                                <option value="ดีมาก"> ดีมาก </option>
                                                            </select>
                                                        </td>
                                                        <td align="middle" class="smalltxt">
                                                            <select name="speak_thai" required>
                                                              <option value="">---เลือก--- </option>
                                                              <option value="พอใช้"> พอใช้ </option>
                                                              <option value="ดี"> ดี </option>
                                                              <option value="ดีมาก"> ดีมาก </option>
                                                            </select>
                                                        </td>
                                                        <td align="middle" class="smalltxt">
                                                            <select name="read_thai" required>
                                                              <option value="">---เลือก--- </option>
                                                              <option value="พอใช้"> พอใช้ </option>
                                                              <option value="ดี"> ดี </option>
                                                              <option value="ดีมาก"> ดีมาก </option>
                                                            </select>
                                                        </td>
                                                        <td align="middle" class="smalltxt">
                                                            <select name="write_thai" required>
                                                              <option value="">---เลือก--- </option>
                                                              <option value="พอใช้"> พอใช้ </option>
                                                              <option value="ดี"> ดี </option>
                                                              <option value="ดีมาก"> ดีมาก </option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="middle" class="smalltxt"> ภาษาอังกฤษ </td>
                                                        <td align="middle" class="smalltxt">
                                                            <select name="listen_en" required>
                                                              <option value="">---เลือก--- </option>
                                                              <option value="พอใช้"> พอใช้ </option>
                                                              <option value="ดี"> ดี </option>
                                                              <option value="ดีมาก"> ดีมาก </option>
                                                            </select>
                                                        </td>
                                                        <td align="middle" class="smalltxt">
                                                            <select name="speak_en" required>
                                                              <option value="">---เลือก--- </option>
                                                              <option value="พอใช้"> พอใช้ </option>
                                                              <option value="ดี"> ดี </option>
                                                              <option value="ดีมาก"> ดีมาก </option>
                                                            </select>
                                                        </td>
                                                        <td align="middle" class="smalltxt">
                                                            <select name="read_en" required>
                                                              <option value="">---เลือก--- </option>
                                                              <option value="พอใช้"> พอใช้ </option>
                                                              <option value="ดี"> ดี </option>
                                                              <option value="ดีมาก"> ดีมาก </option>
                                                            </select>
                                                        </td>
                                                        <td align="middle" class="smalltxt">
                                                            <select name="write_en" required>
                                                              <option value="">---เลือก--- </option>
                                                              <option value="พอใช้"> พอใช้ </option>
                                                              <option value="ดี"> ดี </option>
                                                              <option value="ดีมาก"> ดีมาก </option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="language_etc1" id="language_etc1" onkeydown="show_language1(document.getElementById('language_etc1').value.length,1)"> </td>
                                                            <td align="middle" class="smalltxt">
                                                                <select name="listen_etc1" id="listen_etc1" required>
                                                                  <option value="">---เลือก--- </option>
                                                                  <option value="พอใช้"> พอใช้ </option>
                                                                  <option value="ดี"> ดี </option>
                                                                  <option value="ดีมาก"> ดีมาก </option>
                                                                </select>
                                                            </td>
                                                            <td align="middle" class="smalltxt">
                                                                <select name="speak_etc1" id="speak_etc1" required>
                                                                  <option value="">---เลือก--- </option>
                                                                  <option value="พอใช้"> พอใช้ </option>
                                                                  <option value="ดี"> ดี </option>
                                                                  <option value="ดีมาก"> ดีมาก </option>
                                                                </select>
                                                            </td>
                                                            <td align="middle" class="smalltxt">
                                                                <select name="read_etc1"id="read_etc1" required>
                                                                  <option value="">---เลือก--- </option>
                                                                  <option value="พอใช้"> พอใช้ </option>
                                                                  <option value="ดี"> ดี </option>
                                                                  <option value="ดีมาก"> ดีมาก </option>
                                                                </select>
                                                            </td>
                                                            <td align="middle" class="smalltxt">
                                                                <select name="write_etc1" id="write_etc1" required>
                                                                  <option value="">---เลือก--- </option>
                                                                  <option value="พอใช้"> พอใช้ </option>
                                                                  <option value="ดี"> ดี </option>
                                                                  <option value="ดีมาก"> ดีมาก </option>
                                                                </select>
                                                            </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="middle" class="smalltxt">
                                                            <input type="text" size="22" name="language_etc2" id="language_etc2" onkeydown="show_language2(document.getElementById('language_etc2').value.length,2)"> </td>
                                                            <td align="middle" class="smalltxt">
                                                                <select name="listen_etc2" id="listen_etc2" required>
                                                                  <option value="">---เลือก--- </option>
                                                                  <option value="พอใช้"> พอใช้ </option>
                                                                  <option value="ดี"> ดี </option>
                                                                  <option value="ดีมาก"> ดีมาก </option>
                                                                </select>
                                                            </td>
                                                            <td align="middle" class="smalltxt">
                                                                <select name="speak_etc2" id="speak_etc2" required>
                                                                  <option value="">---เลือก--- </option>
                                                                  <option value="พอใช้"> พอใช้ </option>
                                                                  <option value="ดี"> ดี </option>
                                                                  <option value="ดีมาก"> ดีมาก </option>
                                                                </select>
                                                            </td>
                                                            <td align="middle" class="smalltxt">
                                                                <select name="read_etc2" id="read_etc2" required>
                                                                  <option value="">---เลือก--- </option>
                                                                  <option value="พอใช้"> พอใช้ </option>
                                                                  <option value="ดี"> ดี </option>
                                                                  <option value="ดีมาก"> ดีมาก </option>
                                                                </select>
                                                            </td>
                                                            <td align="middle" class="smalltxt">
                                                                <select name="write_etc2" id="write_etc2" required>
                                                                  <option value="">---เลือก--- </option>
                                                                  <option value="พอใช้"> พอใช้ </option>
                                                                  <option value="ดี"> ดี </option>
                                                                  <option value="ดีมาก"> ดีมาก </option>
                                                                </select>
                                                            </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg">ความสามารถเพิ่มเติม </div>
                                    </div>
                                    <div class="col-lg-10 lo10">
                                        <textarea class="form-control" name="talent" rows="3" id="textArea"></textarea> <span class="help-block"></span> </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg">รางวัลและความสำเร็จ </div>
                                    </div>
                                    <div class="col-lg-10 lo10">
                                        <textarea class="form-control" name="award" rows="3" id="textArea"></textarea> <span class="help-block"></span> </div>
                                </div>
                                <div class="text-mok"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> บุคคลอ้างอิง </div>
                                <div class="gfg">
                                   <div class="table-responsive">
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
                                                        <input type="text" size="22" name="reference_name"> </td>
                                                    <td align="middle" class="smalltxt">
                                                        <input type="text" size="22" name="reference_office_or_position"> </td>
                                                    <td align="middle" class="smalltxt">
                                                        <input type="text" size="22" name="reference_tell" onkeypress="return check_number(this)"> </td>
                                                    <td align="middle" class="smalltxt">
                                                        <input type="text" size="22" name="reference_relation"> </td>
                                                </tr>
                                                <tr>
                                                    <td align="middle" class="smalltxt">
                                                        <input type="text" size="22" name="reference_name2"> </td>
                                                    <td align="middle" class="smalltxt">
                                                        <input type="text" size="22" name="reference_office_or_position2" onkeypress="return check_number(this)"> </td>
                                                    <td align="middle" class="smalltxt">
                                                        <input type="text" size="22" name="reference_tell2"> </td>
                                                    <td align="middle" class="smalltxt">
                                                        <input type="text" size="22" name="reference_relation2"> </td>
                                                </tr><tr>
                                                    <td align="middle" class="smalltxt">
                                                        <input type="text" size="22" name="reference_name3"> </td>
                                                    <td align="middle" class="smalltxt">
                                                        <input type="text" size="22" name="reference_office_or_position3"> </td>
                                                    <td align="middle" class="smalltxt">
                                                        <input type="text" size="22" name="reference_tell3" onkeypress="return check_number(this)"> </td>
                                                    <td align="middle" class="smalltxt">
                                                        <input type="text" size="22" name="reference_relation3"> </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    </div>
                                </div>
                                <div class="text-mok"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> อื่นๆ </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg"> ทราบข่าวการ สมัครงานจาก</div>
                                    </div>
                                    <div class="col-sm-10 iopp">
                                        <td class="smalltxt gfg">
                                            <input type="radio" value="นสพ. , นิตยสาร" name="source" required>&nbsp;นสพ. , นิตยสาร
                                            <input type="radio" value="อินเทอร์เน็ต" name="source" >&nbsp; อินเทอร์เน็ต
                                            <input type="radio" value="มีบุคคลแนะนำ" name="source" >&nbsp;มีบุคคลแนะนำ
                                            <input type="radio" value="อื่นๆ" name="source" >&nbsp;อื่นๆ</td>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="gfg">หมายเหตุเพิ่มเติม </div>
                                    </div>
                                    <div class="col-lg-10 lo10">
                                        <textarea class="form-control" name="note" rows="3" id="textArea"></textarea> <span class="help-block"></span> </div>
                                </div>
                                <tr>
                                    <div class="rtreterty gfg">
                                        <td class="rtreterty">
                                            <input style="FONT-WEIGHT: bold; FONT-SIZE: 14pt; WIDTH: 210px; CURSOR: pointer; COLOR: #43200c; FONT-FAMILY: 'Itim', cursive; HEIGHT: 32px" onclick="" type="submit" value="ส่งข้อมูลการสมัครงาน" name="submit_bt">
                                            <input style="FONT-WEIGHT: bold; FONT-SIZE: 14pt; WIDTH: 210px; CURSOR: pointer; COLOR: #43200c; FONT-FAMILY: 'Itim', cursive; HEIGHT: 32px" type="submit" value="ยกเลิก" name="submit_bt"> </td>
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

</html>
<script type="text/javascript">
$('#firstname_en').keypress(function (e) {
			var regex =/^[a-zA-Z0-9@!#\$\^%&*()+=\-\[\]\\\';,\.\/\{\}\|\":<>\? ]+$/;
			var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
			if (regex.test(str)) {
				return true;
			}
			else {
				e.preventDefault();
				return false;
			}
		});
$('#lastname_en').keypress(function (e) {
    			var regex =/^[a-zA-Z0-9@!#\$\^%&*()+=\-\[\]\\\';,\.\/\{\}\|\":<>\? ]+$/;
    			var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
    			if (regex.test(str)) {
    				return true;
    			}
    			else {
    				e.preventDefault();
    				return false;
    			}
    		});
$('#firstname_th').keypress(function (e) {
        			var regex =/^[a-zA-Z0-9@!#\$\^%&*()+=\-\[\]\\\';,\.\/\{\}\|\":<>\? ]+$/;
        			var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        			if (!regex.test(str)) {
        				return true;
        			}
        			else {
        				e.preventDefault();
        				return false;
        			}
        		});
$('#lastname_th').keypress(function (e) {
            			var regex =/^[a-zA-Z0-9@!#\$\^%&*()+=\-\[\]\\\';,\.\/\{\}\|\":<>\? ]+$/;
            			var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
            			if (!regex.test(str)) {
            				return true;
            			}
            			else {
            				e.preventDefault();
            				return false;
            			}
            		});
  $('select2').select2();
  function check_number(salary){
    {
	var vchar = String.fromCharCode(event.keyCode);
	if ((vchar<'0' || vchar>'9') && (vchar != '.')) return false;
	salary.onKeyPress=vchar;
	}
}
$( function() {
    $( "#bday" ).datepicker({dateFormat: 'yy-mm-dd'});
    $( "#date_start" ).datepicker({dateFormat: 'yy-mm-dd'});
    $( "#date_end" ).datepicker({dateFormat: 'yy-mm-dd'});
    $( "#date_start2" ).datepicker({dateFormat: 'yy-mm-dd'});
    $( "#date_end2" ).datepicker({dateFormat: 'yy-mm-dd'});
    $( "#date_start3" ).datepicker({dateFormat: 'yy-mm-dd'});
    $( "#date_end3" ).datepicker({dateFormat: 'yy-mm-dd'});
    $( "#junior_graduate_date" ).datepicker({dateFormat: 'yy-mm-dd'});
    $( "#high_graduate_date" ).datepicker({dateFormat: 'yy-mm-dd'});
    $( "#vocational_graduate_date" ).datepicker({dateFormat: 'yy-mm-dd'});
    $( "#diploma_graduate_date" ).datepicker({dateFormat: 'yy-mm-dd'});
    $( "#bachelor_graduate_date" ).datepicker({dateFormat: 'yy-mm-dd'});
    $( "#master_graduate_date" ).datepicker({dateFormat: 'yy-mm-dd'});
    $( "#doctor_graduate_date" ).datepicker({dateFormat: 'yy-mm-dd'});
} );
var limit = 3;
$('input.cb').on('change', function(evt) {
   if($(this).siblings(':checked').length >= limit) {
       this.checked = false;
   }
});
/*
//mail
  if (document.getElementById("email").value=="") {
        alert("กรุณากรอก E-mail");
        return false;
      }
      var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (!(document.getElementById("email").value.match(mailformat))){
        alert("รูปแบบ E-mail ไม่ถูกต้อง");
        return false;
      }*/
</script>
