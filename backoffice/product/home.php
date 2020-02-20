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
			 <div class="x_panel">
                  <div class="x_title">
                    <h2>Product</h2>
                    <div class="clearfix"></div>
                  </div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
				   <a href="product.php?page=addproduct&active=product"><button type="button" class="btn btn-primary"><i class="fa fa-plus-square" aria-hidden="true"></i> Product</button></a>
           <table id="example" class="table">
           <thead>
             <tr>
               <th class="text-center" style="min-width: 5%;">No.</th>
   <th class="text-center" style="min-width: 10%;">Product ID</th>
   <th class="text-center" style="min-width: 15%;">Product Name</th>
   <th class="text-center" style="min-width: 10%;">Product Category</th>
   <th class="text-center" style="min-width: 10%;">Price Retail</th>
   <th class="text-center" style="min-width: 10%;">Price Dozen</th>
   <th class="text-center" style="min-width: 10%;">Price Crate</th>
   <th class="text-center" style="min-width: 20%;">Product Photo</th>
  <!-- <th class="text-center">Sort</th>-->
               <th class="text-center" style="min-width: 10%;">Action</th>
             </tr>
           </thead>
           <tbody>
             <?php
             $i=1;
             $sql="SELECT * FROM product
             LEFT OUTER JOIN product_category
             ON product.product_category=product_category.product_category_id";
             $q=mysql_query($sql);
            while ($rs=mysql_fetch_assoc($q)) {?>
            <tr>
              <td><?php echo $i."."; ?></td>
              <td><?php echo $rs['product_id_product']; ?></td>
              <td><?php echo $rs['product_name']; ?></td>
              <td><?php echo $rs['product_category_name_th']; ?></td>
              <td><?php echo $rs['product_price_retail']; ?></td>
              <td><?php echo $rs['product_price_dozen']; ?></td>
              <td><?php echo $rs['product_price_crate']; ?></td>
              <td><div class="col-sm-3 col-lg-3 col-md-3">
                  <div class="branch-1">
                      <div class="bordol-1">
                          <div class="row"> <a href="" data-toggle="modal" data-target="#myModal<?= $rs['product_id']?>"><img src="image/<?php echo $rs['product_img']; ?>" width="200" height="200"><?php echo $rs['product_img']; ?></a> </div>
                          <div class="modal fade" id="myModal<?= $rs['product_id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;">
                              <div class="modal-dialog" role="document" style="z-index:50000;">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button> <span aria-hidden="true"></span>
                                          <div class="modal-body"> <img class="img-responsive" src="image/<?php echo $rs['product_img']; ?>" style="width: 100%;">


                                          </div>
                                          <div class="modal-footer">
                                              <button type="Success" class="btn btn-warning" data-dismiss="modal">Close</button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div></td>
              <td align="center">
 <a href="editproduct.php?id=<?php echo $rs['product_id']?>&active=product"><button type="button" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>  Edit</button></a>
 <button type="button" class="btn btn-danger" onclick="del(<?php echo $rs['product_id']?>)"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</button>
 </td>
            </tr>
          <?php $i++; }?>





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

	function settext(text)
	{
		bootbox.dialog({
			message : '<div class="alert alert-success fade in m-b-15"><strong>Success!</strong> Insert Complete</div>',
			title: '&nbsp;',

		});
		setTimeout(function() {
			window.location.href="product.php?page=home";
		}, 1000);
	}

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
					window.location.href="delproduct.php?id="+id+"";
				}
			}
		});

	}
</script>
