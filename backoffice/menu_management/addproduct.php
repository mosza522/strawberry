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
						<h4><a href="product.php?page=home">product</a> > Add product</a></h4>
			  </div>
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add product</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
        <form  class="form-horizontal form-label-left" method="post" action="product/add.php"  enctype="multipart/form-data">
				<!-- --------------------DropDown List Get Catagory Blade-------------------------------- -->
        <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_category"> product category <span class="required">*</span>
        </label>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                      <input type="hidden" name="add" value="add">
            <select name="product_category" id="product_category" class="form-control" required>
              <option value="">---plaese Select---</option>

              <?php
                $sql="SELECT * FROM product_category";
                $q=mysql_query($sql) or die (mysql_error());
                while ($rs=mysql_fetch_array($q)) {?>
                <option value="<?=$rs['product_category_id']?>"><?=$rs['product_category_name_th']?></option>
                <?php
              }
                ?>



            </select>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12">
          <button type="button" class="btn btn-info" onclick="location.href = 'product.php?page=addproduct_category'"><i class="fa fa-plus-square"></i> Add product category</button>
        </div>
      </div>
				<!-- --------------------End DropDown List Get Catagory Blade-------------------------------- -->
                <div class="form-group">
                   <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ID product<span class="required">*</span>
                   </label>
                   <div class="col-md-6 col-sm-6 col-xs-12">
                     <input type="text" name="id_product" required="required" class="form-control col-md-7 col-xs-12">
                   </div>
                 </div>
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name product<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="product_name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Price retail<span class="required">*</span>
                         </label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <input type="number" value="10" name="product_price_retail" required="required" class="form-control col-md-7 col-xs-12">
                         </div>
                       </div>
                       <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Price dozen<span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="number" value="70" name="product_price_dozen" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
					  <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Picture<span class="required">*</span>
              </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" name="product_file"  required="required" class="form-control col-md-7 col-xs-12">
						  <p>Picture 414 x 414 px</p>
                        </div>
                      </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						                    <button type="submit" class="btn btn-success">Submit</button>
                          <button type="reset" class="btn btn-primary" onclick="location.href='product.php?page=home'">Back</button>
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
