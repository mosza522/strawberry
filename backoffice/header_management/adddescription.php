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
						<h4><a href="header_management.php?page=home_description">Description</a> > Add Description</a></h4>
			  </div>
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add Description</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
        <form  class="form-horizontal form-label-left" method="post" action="header_management/add.php">
				<!-- --------------------DropDown List Get Catagory Blade-------------------------------- -->
        <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Page <span class="required">*</span>
        </label>
                    <div class="col-md-3 col-sm-3 col-xs-12">

            <select name="page_id_description" id="" class="form-control" required>
              <option value="">---plaese Select---</option>
              <?php
                $sql="SELECT * FROM page";
                $q=mysql_query($sql) or die (mysql_error());
                while ($rs=mysql_fetch_array($q)) {
                  $sql_check="SELECT page_id FROM description WHERE page_id='$rs[page_id]'";
                  $check=mysql_num_rows(mysql_query($sql_check));
                  if($check==0){
                  ?>
                <option value="<?=$rs['page_id']?>"><?=$rs['page_name']?></option>

                <?php
                  }
              }
                ?>



            </select>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12">
        </div>
      </div>
				<!-- --------------------End DropDown List Get Catagory Blade-------------------------------- -->

					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Description<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea name="description" class="form-control col-md-7 col-xs-12" style="margin: 0px; width: 500px; height: 130px;"></textarea>
                        </div>
                      </div>


                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						                    <button type="submit" class="btn btn-success">Submit</button>
                          <button type="reset" class="btn btn-primary" onclick="location.href='header_management.php?page=home_description'">Back</button>
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
