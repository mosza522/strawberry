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
    <h4><a href="activity.php?page=home">Activity</a> > Add Activity</a></h4>
</div>
        <div class="x_panel">
          <div class="x_title">
            <h2>Add Activity </h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
<form name="form1" onsubmit="return OnUploadCheck()" class="form-horizontal form-label-left" method="post" action="activity/add.php" enctype="multipart/form-data">
<!-- --------------------DropDown List Get Catagory Blade-------------------------------- -->

<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="activity_topic">Activity Topic<span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" maxlength="100" name="activity_topic" id="activity_topic" required="required" class="form-control col-md-7 col-xs-12">
    </div>
  </div>
<div class="form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="activity_title"> Activity Title <span class="required">*</span>
</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="hidden" name="add_activity" value="add">
              <textarea name="activity_title" rows="15" cols="80" class="form-control ckeditor" id="activity_title"></textarea>


</div>

</div>
<!-- --------------------End DropDown List Get Catagory Blade-------------------------------- -->
  <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="activity_tag">Activity Tag<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select class="form-control" name="activity_tag" required>
                <option value="">- - - - - - - - - - - - เลือก - - - - - - - - - - - - </option>
                <?php
                $sql="SELECT * FROM activity_tag";
                $q=mysql_query($sql);
                while ($rs=mysql_fetch_array($q)) {?>
                  <option value="<?=$rs['activity_tag_id']?>"><?=$rs['activity_tag_name_th']?></option>
                  <?php
                }
                ?>

              </select>
            </div>
          </div>

          <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="activity_detail">Activity Detail<span class="required">*</span>
              </label>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <textarea name="activity_detail" rows="15" cols="80" class="form-control ckeditor" id="activity_detail"></textarea>
              </div>
            </div>
          <div class="form-group">
             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="activity_img_cover">Activity Img Cover<span class="required">*</span>
             </label>
             <div class="col-md-6 col-sm-6 col-xs-12">
               <input type="file" name="activity_img_cover" id="activity_img_cover" required="required" class="form-control col-md-7 col-xs-12">
               <p>ไฟล์ jpg , png และ gif เท่านั้น</p>
             </div>
           </div>


              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-success">Submit</button>
                  <button type="reset" class="btn btn-primary" onclick="location.href='activity.php?page=home'">Back</button>
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

    file = document.form1.activity_img_cover.value;
    ext = file.split('.').pop().toLowerCase();
    if(parseInt(extall.indexOf(ext)) < 0)
    {
      alert('สามารถใช้ได้เฉพาะไฟล์ : ' + extall);
      return false;
    }
    return true;
  }
</script>
