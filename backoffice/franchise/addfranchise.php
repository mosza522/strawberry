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
						<h4><a href="franchise.php?page=home&active=franchise">Franchise</a> > Add Franchise</a></h4>
			  </div>
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add Franchise</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
        <form  class="form-horizontal form-label-left" method="post" action="franchise/add.php"  enctype="multipart/form-data">
				<!-- --------------------DropDown List Get Catagory Blade-------------------------------- -->
        <input type="hidden" name="add" value="add">
				<!-- --------------------End DropDown List Get Catagory Blade-------------------------------- -->
        <div class="form-group">
           <label class="control-label col-md-3 col-sm-3 col-xs-12" for="franchise_name_th">franchise name TH<span class="required">*</span>
           </label>
           <div class="col-md-6 col-sm-6 col-xs-12">
             <input type="text"  name="franchise_name_th" id="franchise_name_th" required="required" class="form-control col-md-7 col-xs-12">
           </div>
         </div>
         <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="franchise_name_en">franchise name EN<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text"  name="franchise_name_en" id="franchise_name_en" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
             <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="franchise_detail_th">franchise detail TH<span class="required">*</span>
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <textarea name="franchise_detail_th" id="editor" rows="8" cols="80" class="form-control ckeditor" required></textarea>
                </div>
              </div>
              <div class="form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="franchise_detail_en">franchise detail EN<span class="required">*</span>
                 </label>
                 <div class="col-md-9 col-sm-9 col-xs-12">
                   <textarea name="franchise_detail_en" id="editor" rows="8" cols="80"  class="form-control ckeditor" required> <br /></textarea>
                 </div>
               </div>

    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="franchise_img">Picture<span class="required">*</span>
      </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="file" name="franchise_img" id="franchise_img"  class="form-control col-md-7 col-xs-12" required>
      <p>Picture 414 x 414 px</p>
                </div>
              </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-success">Submit</button>
                  <button type="reset" class="btn btn-primary" onclick="location.href='franchise.php?page=home&active=franchise'">Back</button>
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
