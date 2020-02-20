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
						<h4><a href="product.php?page=home&active=product">Product</a> > <a href="product.php?page=addproduct&active=product">Add Product</a> > Add Product Category</a></h4>
			  </div>
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add Product Category</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
        <form  class="form-horizontal form-label-left" method="post" action="product/add.php" enctype="multipart/form-data">

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name product category TH<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="product_category_name_th" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name product category EN<span class="required">*</span>
                         </label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <input type="text" name="product_category_name_en" required="required" class="form-control col-md-7 col-xs-12">
                         </div>
                       </div>
                       <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Picture product category<span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="file" name="product_category_img" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>

                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						                    <button type="submit" class="btn btn-success">Submit</button>
                          <button type="reset" class="btn btn-primary" onclick="location.href='product.php?page=addproduct&active=product'">Back</button>
                        </div>
                      </div>
                    </form>
					<iframe name="up_iframe" width="0" height="0" frameborder="0"></iframe>
          <table id="example" class="table">
          <thead>
            <tr>
              <th class="text-center" style="min-width: 40px;">No.</th>
  <th class="text-center" style="min-width: 100px;">product category name th</th>
  <th class="text-center" style="min-width: 100px;">product category name en</th>
  <th class="text-center" style="min-width: 100px;">product category img</th>
  <th class="text-center" style="min-width: 100px;">Action</th>
  </tr>
          </thead>
          <tbody><?php
          $i=1;
          $sql="SELECT * FROM product_category";
          $q=mysql_query($sql);
          while ($rs=mysql_fetch_array($q)) {?>
            <tr>
              <td><?=$i; $i++; ?></td>
              <td><?=$rs['product_category_name_th']?></td>
              <td><?=$rs['product_category_name_en']?></td>
              <td><img src="image/<?=$rs['product_category_img']?>" alt="" width="50" height="50"></td>
              <td><a href="editproduct_category.php?id=<?php echo $rs['product_category_id']?>&active=product"><button type="button" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>  Edit</button></a>
 							<button type="button" class="btn btn-danger" onclick="del(<?php echo $rs['product_category_id']?>)"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</button>
              </td>

            </tr>

        <?php  }
           ?>

          </tbody>
        </table>
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
        function del(id)
        {
          bootbox.confirm({
            title: "Confirm?",
            message: "You want to remove the selected data or not.",
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
                window.location.href="delproduct.php?id_category="+id+"";
              }
            }
          });

        }
          </script>
