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
    <h4><a href="news.php?page=home_album">News Photo Album</a> > Add News Photo Album</a></h4>
</div>
        <div class="x_panel">
          <div class="x_title">
            <h2>Add News Photo Albums </h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
<form name="form1" onsubmit="return OnUploadCheck()"  class="form-horizontal form-label-left" method="post" action="news/add.php" enctype="multipart/form-data">
<!-- --------------------DropDown List Get Catagory Blade-------------------------------- -->

<!-- --------------------End DropDown List Get Catagory Blade-------------------------------- -->
    <input type="hidden" name="news_photo_album" value="news_photo_album">
  <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="news_tag">News Topic<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select class="form-control select2" name="news_id" required>
                <option value="">- - - - - - - - - - - - เลือก - - - - - - - - - - - - </option>
                <?php
                $sql="SELECT * FROM news";
                $q=mysql_query($sql);
                while ($rs=mysql_fetch_array($q)) {?>
                  <option value="<?=$rs['news_id']?>"><?=$rs['news_topic']?></option>
                  <?php
                }
                ?>

              </select>
            </div>
          </div>
          <div class="form-group">
             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="news_img_cover">News Img Cover<span class="required">*</span>
             </label>
             <div class="col-md-6 col-sm-6 col-xs-12">
               <input type="file"  name="news_img_name[]" id="news_img_name" required="required" multiple class="form-control col-md-7 col-xs-12">
               <p>ไฟล์ jpg , png และ gif เท่านั้น</p>
             </div>
           </div>


              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-success">Submit</button>
                  <button type="reset" class="btn btn-primary" onclick="location.href='news.php?page=home_album'">Back</button>
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
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $(".select2").select2();
});
</script>
<script language="JavaScript">
  function OnUploadCheck()
  {

    var selection = document.getElementById('news_img_name');
    for (var i=0; i<selection.files.length; i++) {
        var ext = selection.files[i].name.substr(-3);
        if(ext.toLowerCase()!== "png" && ext!== "gif" && ext!== "jpg")  {
            alert('สามารถใช้ได้เฉพาะไฟล์ : jpg,gif,png');
            return false;
        }
    }


}
</script>
<!-- /page content -->
