<!-- page content -->
<script type="text/javascript">
    function location_check(){
      if(document.getElementById("Local").selected){
        hidden_region('1');
      }else {
        hidden_region('0');
      }
    }
  function hidden_region(data){
    if(data==0){
      document.getElementById('branch_region_label').style.display = 'none';
      document.getElementById('branch_region').style.display = 'none';
    }else{
      document.getElementById('branch_region_label').style.display = '';
      document.getElementById('branch_region').style.display = '';
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
    <h4><a href="branch.php?page=home&active=branch">Branch</a> > Add Branch</a></h4>
</div>
        <div class="x_panel">
          <div class="x_title">
            <h2>Add Branch</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
<form  class="form-horizontal form-label-left" method="post" action="branch/add.php"  enctype="multipart/form-data">
<!-- --------------------DropDown List Get Catagory Blade-------------------------------- -->
<input type="hidden" name="add" value="add">
<!-- --------------------End DropDown List Get Catagory Blade-------------------------------- -->
        <div class="form-group">
           <label class="control-label col-md-3 col-sm-3 col-xs-12" for="branch_name_th">branch name th<span class="required">*</span>
           </label>
           <div class="col-md-6 col-sm-6 col-xs-12">
             <input type="text" name="branch_name_th" id="branch_name_th" required="required" class="form-control col-md-7 col-xs-12">
           </div>
         </div>
         <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="branch_name_en">branch name en<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="branch_name_en" id="branch_name_en" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="branch_location">branch location<span class="required">*</span>
             </label>
             <div class="col-md-6 col-sm-6 col-xs-12">
               <select class="form-control" name="branch_location" id="branch_location" onchange="location_check()"  required>
                 <option value="">------------------ เลือก ------------------</option>
                 <option id="Local" value="Local">สาขาในประเทศ</option>
                 <option id="Foreign"value="Foreign">สาขาต่างประเทศ</option>
               </select>
             </div>
           </div>
           <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="branch_region" id="branch_region_label">branch region</span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select class="form-control" name="branch_region" id="branch_region" >
                  <option value="">------------------ เลือกภูมิภาค ------------------</option>
                  <?php
                  $sql="SELECT * FROM branch_region";
                  $q=mysql_query($sql);
                  while ($rs=mysql_fetch_array($q)) {?>
                    <option value="<?=$rs['branch_region_id']?>"><?=$rs['branch_region_name_th']?></option>
                  <?php
                  }
                   ?>
                </select>
              </div>
            </div>
             <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="branch_detail_th">branch detail th<span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">

                  <textarea name="branch_detail_th" rows="8" id="branch_detail_th" cols="80" class="form-control ckeditor"></textarea>

                </div>
              </div>
              <div class="form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="branch_detail_en">branch detail en<span class="required">*</span>
                 </label>
                 <div class="col-md-9 col-sm-9 col-xs-12">

                   <textarea name="branch_detail_en" rows="8" cols="80" class="form-control ckeditor"></textarea>

                 </div>
               </div>

    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="branch_img">Picture<span class="required">*</span>
      </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="file" name="branch_img" id="branch_img" required="required" class="form-control col-md-7 col-xs-12">
      <p>Picture 414 x 414 px</p>
                </div>
              </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-success">Submit</button>
                  <button type="reset" class="btn btn-primary" onclick="location.href='branch.php?page=home&active=branch'">Back</button>
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
