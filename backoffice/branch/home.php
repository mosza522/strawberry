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
                    <h2>Branch</h2>
                    <div class="clearfix"></div>
                  </div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
				   <a href="branch.php?page=addbranch&active=branch"><button type="button" class="btn btn-primary"><i class="fa fa-plus-square" aria-hidden="true"></i> Branch</button></a>
           <table id="example" class="table">
           <thead>
             <tr>
               <th class="text-center" style="min-width: 5%;">No.</th>
   <th class="text-center" style="min-width: 10%;">Name TH</th>

   <th class="text-center" style="min-width: 10%;">Name EN</th>

   <th class="text-center" style="min-width: 10%;">Location</th>
   <th class="text-center" style="min-width: 10%;">Region</th>
   <th class="text-center" style="min-width: 15%;">Detail TH</th>
   <th class="text-center" style="min-width: 15%;">Detail EN</th>
   <th class="text-center" style="min-width: 20%;">Photo</th>
  <!-- <th class="text-center">Sort</th>-->
               <th class="text-center" >Action</th>
             </tr>
           </thead>
          <tbody>
            <?php
             $i=1;
             $sql="SELECT * FROM branch
             LEFT OUTER JOIN branch_region
             ON branch.branch_region=branch_region.branch_region_id";
             $q=mysql_query($sql);
            while ($rs=mysql_fetch_assoc($q)) {?>
              <tr>
                <td><?php echo $i;$i++; ?></td>
                <td><?=$rs['branch_name_th'] ?></td>
                <td><?=$rs['branch_name_en'] ?></td>
                <td><?=$rs['branch_location'] ?> </td>
                <td><?=$rs['branch_region_name_th'] ?> </td>
                <td><?=$rs['branch_detail_th'] ?> </td>
                <td><?=$rs['branch_detail_en'] ?> </td>
                <td align="center"><div class="col-sm-3 col-lg-3 col-md-3">
                    <div class="branch-1">
                        <div class="bordol-1">
                            <div class="row"> <a href="" data-toggle="modal" data-target="#myModal<?= $rs['branch_id']?>"><img src="image/<?php echo $rs['branch_img']; ?>" width="200" height="200"><?php echo $rs['branch_img']; ?></a> </div>
                            <div class="modal fade" id="myModal<?= $rs['branch_id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;">
                                <div class="modal-dialog" role="document" style="z-index:50000;">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button> <span aria-hidden="true"></span>
                                            <div class="modal-body"> <img class="img-responsive" src="image/<?php echo $rs['branch_img']; ?>" style="width: 100%;">


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
   <a href="editbranch.php?id=<?php echo $rs['branch_id']?>&active=branch"><button type="button" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>  Edit</button></a>
   <button type="button" class="btn btn-danger" onclick="del(<?php echo $rs['branch_id']?>)"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</button>
   </td>
              </tr>
            <?php } ?>






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
			window.location.href="branch.php?page=home&active=branch";
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
					window.location.href="delbranch.php?id="+id+"";
				}
			}
		});

	}
</script>
