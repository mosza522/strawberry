<!-- page content -->
<script type="text/javascript">
function change_content_th(){
  var editorTextth = CKEDITOR.instances.contentTH.getData();
  if(editorTextth==""){
  document.getElementById('content_preview_th').innerHTML="Content";
}else{
  document.getElementById('content_preview_th').innerHTML=editorTextth;
}
}
function change_content_en(){
  var editorTexten = CKEDITOR.instances.contentEN.getData();
  if(editorTexten==""){
  document.getElementById('content_preview_en').innerHTML="Content";
}else{
  document.getElementById('content_preview_en').innerHTML=editorTexten;
}
}
</script>
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3> </h3>
      </div>
    </div>
    <div class="clearfix"></div>
     <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
<div class="title_left">
    <h4>Content > Content About</h4>
</div>
        <div class="x_panel">
          <div class="x_title">
            <h2>Add Content About</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
          <form class="" action="content/add.php" method="post">
            <input type="hidden" name="content_page" value="2">
            <div class="form-group">
               <label class="control-label col-md-3 col-sm-3 col-xs-12" for="content1th">Content th<span class="required">*</span>
               </label>
               <div class="col-md-9 col-sm-9 col-xs-12">
                 <textarea name="content_th" rows="15" cols="80" class="form-control ckeditor" id="contentTH"></textarea>
               </div>
             </div>
             <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="content1th">Content en<span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <textarea name="content_en" rows="15" cols="80" class="form-control ckeditor" id="contentEN"></textarea>
                </div>
              </div>
             <br />
             <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
               <div class="form-group">
                 <div class="bordol-1">
                   <a href="" data-toggle="modal" data-target="#myModal1"><button type="button" class="btn btn-info" onclick="change_content_th()"><i class="fa fa-eye" aria-hidden="true"></i>Preview TH</button></a>
                   <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;">
                       <div class="modal-dialog" role="document" style="width:83%;margin-left:17%" >
                           <div class="modal-content">
                               <div class="modal-header">
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button> <span aria-hidden="true"></span>
                                   <div class="modal-body">
                                     <center><img src="../img/about_head.png" width="100%"  alt=""></center>


                                     <table background="../img/about_mid.png"  width="100%" align="center">
                                       <tr>
                                         <td></td>
                                       </tr>
                                       <tr>
                                         <td><p id="content_preview_th">
                                           Content
                                         </p></td>
                                       </tr>
                                       <tr>
                                         <td></td>
                                       </tr>
                                       </table>
                                       <center><img src="../img/about_foot.png" width="100%"  alt=""></center>
                                   </div>
                                   <div class="modal-footer">
                                       <button type="Success" class="btn btn-warning" data-dismiss="modal">Close</button>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>




                   <a href="" data-toggle="modal" data-target="#myModal2"><button type="button" class="btn btn-info" onclick="change_content_en()"><i class="fa fa-eye" aria-hidden="true"></i>Preview EN</button></a>
                   <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;">
                       <div class="modal-dialog" role="document" style="width:83%;margin-left:17%" >
                           <div class="modal-content">
                               <div class="modal-header">
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button> <span aria-hidden="true"></span>
                                   <div class="modal-body">
                                     <center><img src="../img/about_head.png" width="100%"  alt=""></center>


                                     <table background="../img/about_mid.png"  width="100%" align="center">
                                       <tr>
                                         <td></td>
                                       </tr>
                                       <tr>
                                         <td><p id="content_preview_en">
                                           Content
                                         </p></td>
                                       </tr>
                                       <tr>
                                         <td></td>
                                       </tr>
                                       </table>
                                       <center><img src="../img/about_foot.png" width="100%"  alt=""></center>

                                   </div>
                                   <div class="modal-footer">
                                       <button type="Success" class="btn btn-warning" data-dismiss="modal">Close</button>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <button type="button" class="btn btn-danger" onclick="del()"><i class="fa fa-trash" aria-hidden="true"></i></button>
                         </div>

                         <button type="submit" class="btn btn-success">Submit</button>
                   <button type="reset" class="btn btn-primary" onclick="location.href='content.php?page=home'">Back</button>
                 </div>

               </div>
               <br>
               <br>
               <br><br>
               <div class="col-md-12 col-sm-12 col-xs-12">


               <center><img src="../img/about_head.png"  alt=""></center>


               <table background="../img/about_mid.png"  width="800" align="center">
                 <tr>
                   <td></td>
                 </tr>
                 <tr>
                   <td><p>
                     <?php $sql="SELECT * FROM content WHERE content_page='2'";
                     $num=mysql_num_rows(mysql_query($sql));
                     $rs=mysql_fetch_array(mysql_query($sql));
                     ?>
                     <tr height="440">
                       <td><p id="content_preview_1_th">
                         <?php
                         if($num>0){
                           echo $rs['content_th'];
                         }else{
                           echo "จำหน่ายแฟรนไชส์ แบรนด์ strawbreey club สินค้าน่ารักทุกชิ้น 10 บาท<br />
สินค้า<br />
สินค้าเบ็ดเตล็ดทุกอย่าง 10 บาท<br />
ประวัติบริษัท<br />
ผู้ก่อตั้งบริษัท ไลฟ์เวย์อินเตอร์เทรด จำกัด (ร้าน Strawberry Club) คือคุณณัทกร ชัยพันธ์ และคุณปภาดา ชัยพันธ์ ซึ่งเราเป็นแบรนด์สินค้าน่ารักๆรายแรกของเมืองไทย จำหน่ายสินค้าน่ารักๆ ตาม concept &ldquo; สินค้าน่ารัก ราคาต้องรัก&rdquo; สินค้าทุกรายการเราคัดสรรค์และจำหน่ายเพียงราคาเดียวเท่านั้น เพียง 10 บาททุกๆรายการเราเลือกสินค้าน่ารักๆและคุณภาพดี ตลอดระยะเวลา 18 ปี ทำให้เราสร้างรอยยิ้มให้กับทุกๆคนได้กับสินค้าน่ารัก ราคาต้องรัก 10 บาททุกชิ้น เรามีสินค้ามากกว่า 3,000 รายการ สลับหมุนเวียงมาจำหน่ายและมีสินค้าใหม่ๆเพิ่มขึ้นตลอดเวลา เพราะเราสรรค์หา อย่างไม่หยุดนิ่ง จากเงินทุน 800 บาทและคำถามเคยตั้งกับชีวิตพนักงาน Part Time ที่มีว่า &ldquo;ร้าน 10 บาท ทำไมไม่ขาย 10 บาท จริงๆเวลาคิดเงินทำไมแม่ค้าต้องบอกว่าบางอย่างไม่ใช่ราคา 10 บาท&rdquo; ความรู้สึกที่ว่าทำไมจะขาย 10 บาทไม่ได้ กับชีวิตพนักงานที่มีเงินไม่เพียงกี่บาท แต่ก็อย่าใช้ของน่ารักๆ จึงผันตัวเองมาเป็นแม่ค้ากับหาคำตอบที่ว่า 10 บาททั้งร้านทำไมจะ ไม่ได้กำไร คำตอบเริ่มมาทีละน้อยๆกำไรได้ สินค้าคุณภาพดีแต่น้อยมาก น้อยจริงๆ แต่ที่มากกว่ากำไรคือรอยยิ้ม และหน้าตาสุขใจ อิ่มใจ ของลูกค้า ที่เราไม่หลอกลวงเรื่องราคา ทำให้เรามีลูกค้าน่ารักๆ เพิ่มขึ้นทุกๆวัน ทุกเพศ ทุกวัย ตลอดระยะเวลา 18 ปี เราสรรค์หา สินค้า น่ารักที่มากด้วยประสบการณ์ 18 ปี ว่า......แพงหน่อย แต่ดีกว่า กำไรน้อย แต่ขายนานๆ เราจึงเป็นกิ๊ฟซ็อปเจ้าแรกของเมืองไทย ที่ทุกๆคนก็ให้รอยยิ้ม ทุกคนมีความสุข เราก็มีความสุข คำถามที่เคยตั้งคำถามไว้เมื่อ 18 ปีกว่าๆ ทำให้เรารู้ว่ากำไรแม้จะน้อยแต่รอยยิ้มของลูกค้าได้มากกว่าความสุขที่หามาไม่ได้จริงๆ และทางร้าน Strawberry Club สัญญาว่าเราจะสรรหาผลิตภัณฑ์สินค้าน่ารักๆ เพิ่มขึ้นๆและคงคุณภาพดีๆไว้ แบบนี้ตลอดไป<br />
วิสัยทัศน์<br />
&nbsp;นำธุรกิจแฟนร์ไซร์ร้าน &ldquo;Strawberry Club&rdquo; สู่ความเป็นเลิศด้านค้าปลีก ทุกชิ้นในร้านราคา 10 บาท&nbsp;<br />
&nbsp;สร้างความเชื่อมั่นและความเชื่อถือให้กับสินค้าและบริการ&nbsp;<br />
&nbsp;ทำให้สินค้าอยู่ในใจของลูกค้า&nbsp;<br />
&nbsp;ให้ทุกคนได้สินค้า ดี ราคาถูกมีคุณภาพ<br />
พันธกิจ<br />
&nbsp;จัดจ้างพนักงานที่มีคุณภาพ และส่งเสริมพัฒนาทักษะและองค์ความรู้ให้กับพนักงาน&nbsp;<br />
&nbsp;สรรหาผลิตภัณฑ์ใหม่ๆทีมีคุณภาพ น่ารักๆ สามารถใช้งานได้จริง&nbsp;<br />
&nbsp;สื่อสาร และ ประชาสัมพันธ์ สินค้าและบริษัท";
                         }
                          ?>
                   </p></td>
                 </tr>
                 <tr>
                   <td></td>
                 </tr>
                 </table>
                 <center><img src="../img/about_foot.png"  alt=""></center>
                  </div>
      </div>
          </form>
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
function del()
{
  bootbox.confirm({
    title: "Confirm?",
    message: "You want to remove the content.",
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
        window.location.href="delcontent.php?content=2";
      }
    }
  });

}
  </script>
