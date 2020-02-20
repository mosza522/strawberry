<!-- page content -->
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
    <h4><a href="promotion.php?page=home&active=promotion">Promotion</a> > Add Promotion</a></h4>
</div>
        <div class="x_panel">
          <div class="x_title">
            <h2>Add Promotion</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
<form name="form1" onsubmit="return OnUploadCheck()"  class="form-horizontal form-label-left" method="post" action="promotion/add.php"  enctype="multipart/form-data">
<!-- --------------------DropDown List Get Catagory Blade-------------------------------- -->
<input type="hidden" name="add" value="add">
<!-- --------------------End DropDown List Get Catagory Blade-------------------------------- -->
<div class="form-group">
   <label class="control-label col-md-3 col-sm-3 col-xs-12" for="promotion_title_th">Promotion name TH<span class="required">*</span>
   </label>
   <div class="col-md-6 col-sm-6 col-xs-12">
     <input type="text"  name="promotion_title_th" id="promotion_title_th" required="required" class="form-control col-md-7 col-xs-12">
   </div>
 </div>
 <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="promotion_title_en">Promotion name EN<span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text"  name="promotion_title_en" id="promotion_title_en" required="required" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
     <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="promotion_detail_th">Promotion detail TH<span class="required">*</span>
        </label>
        <div class="col-md-9 col-sm-9 col-xs-12">
          <textarea name="promotion_detail_th" id="editor" rows="8" cols="80" class="form-control ckeditor" required></textarea>
        </div>
      </div>
      <div class="form-group">
         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="promotion_detail_en">Promotion detail EN<span class="required">*</span>
         </label>
         <div class="col-md-9 col-sm-9 col-xs-12">
           <textarea name="promotion_detail_en" id="editor" rows="8" cols="80"  class="form-control ckeditor" required> <br /></textarea>
         </div>
       </div>

<div class="form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="promotion_img">Picture<span class="required">*</span>
</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="file" name="promotion_img" id="promotion_img"  class="form-control col-md-7 col-xs-12" required>
<p>Picture 414 x 414 px</p>
        </div>
      </div>
      </div>
      <div class="ln_solid"></div>
      <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="submit" class="btn btn-success">Submit</button>
          <button type="reset" class="btn btn-primary" onclick="location.href='promotion.php?page=home&active=promotion'">Back</button>
        </div>
      </div>
              </div>
            </form>
  <iframe name="up_iframe" width="0" height="0" frameborder="0"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
<script language="JavaScript">
  function OnUploadCheck()
  {
    var extall="jpg,gif,png";

    file = document.form1.promotion_img.value;
    ext = file.split('.').pop().toLowerCase();
    if(parseInt(extall.indexOf(ext)) < 0)
    {
      alert('สามารถใช้ได้เฉพาะไฟล์ : ' + extall);
      return false;
    }
    return true;
  }
</script>
