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
    <h4><a href="menu_management.php?page=home">Menu Management</a> > Add Menu</a></h4>
</div>
        <div class="x_panel">
          <div class="x_title">
            <h2>Add Menu </h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
<form  class="form-horizontal form-label-left" method="post" action="menu_management/add.php" >
<!-- --------------------DropDown List Get Catagory Blade-------------------------------- -->
<div class="form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="menu_name_th"> Menu Name TH <span class="required">*</span>
</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="hidden" name="add" value="add">
              <input type="text" name="menu_name_th" id="menu_name_th" required="required" class="form-control col-md-7 col-xs-12">


</div>

</div>
<!-- --------------------End DropDown List Get Catagory Blade-------------------------------- -->
        <div class="form-group">
           <label class="control-label col-md-3 col-sm-3 col-xs-12" for="menu_name_en">Menu Name EN<span class="required">*</span>
           </label>
           <div class="col-md-6 col-sm-6 col-xs-12">
             <input type="text" name="menu_name_en" id="menu_name_en" required="required" class="form-control col-md-7 col-xs-12">
           </div>
         </div>
         <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="menu_link">Menu Link<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="menu_link" id="menu_link" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>


              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-success">Submit</button>
                  <button type="reset" class="btn btn-primary" onclick="location.href='menu_management.php?page=home'">Back</button>
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
