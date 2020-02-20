<!-- page content -->
<?php
$sql="SELECT * FROM content WHERE content_page='11'";
$q=mysql_query($sql);
$rs=mysql_fetch_array($q);
$th=$rs['content_th'];
$en=$rs['content_en'];
 ?>
<script type="text/javascript">
function change_content_th(){
  var editorTextth = CKEDITOR.instances.contentTH.getData();
  if(editorTextth==""){
    document.getElementById('content_preview_th').innerHTML="ช่องทาการชำระ";
}else{
  document.getElementById('content_preview_th').innerHTML=editorTextth;
}
}
function change_content_en(){
  var editorTexten = CKEDITOR.instances.contentEN.getData();
  if(editorTexten==""){
    document.getElementById('content_preview_en').innerHTML="Payment";
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
    <h4>Content > Content Payment</h4>
</div>
        <div class="x_panel">
          <div class="x_title">
            <h2>Add Content Payment</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
          <form class="" action="content/add.php" method="post">
            <input type="hidden" name="content_page" value="11">
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
                                     <div id="content_preview_th">
                                           <?=$th ?>
                                         </div>
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
                                     <div id="content_preview_en">
                                           <?php echo $en ?>
                                         </div>
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
        window.location.href="delcontent.php?content=11";
      }
    }
  });

}
  </script>
