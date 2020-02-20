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
                    <h2>Menu management</h2>
                    <div class="clearfix"></div>
                  </div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
				   <a href="menu_management.php?page=addmenu_child"><button type="button" class="btn btn-primary"><i class="fa fa-plus-square" aria-hidden="true"></i> Child Menu</button></a>

           <table id="example" class="table">
           <thead>
             <tr>
               <th class="text-center" style="min-width: 40px;">No.</th>
  <th class="text-center" style="min-width: 100px;">Menu</th>
   <th class="text-center" style="min-width: 100px;">Menu Child Name TH</th>
   <th class="text-center" style="min-width: 100px;">Menu Child Name EN</th>
   <th class="text-center" style="min-width: 100px;">Menu Child Link</th>
   <th class="text-center" style="min-width: 100px;">Menu Child Display Status</th>

  <!-- <th class="text-center">Sort</th>-->
               <th class="text-center" style="min-width: 100px;">Action</th>
             </tr>
           </thead>

           <tbody>
             <?php
             $i=1;
             $sql="SELECT * FROM menu_child
             LEFT OUTER JOIN menu
             ON menu_child.menu_id=menu.menu_id
             ORDER BY menu.menu_name_th ASC";
             $q=mysql_query($sql);
            while ($rs=mysql_fetch_assoc($q)) {?>
            <tr>
              <td><?php echo $i."."; ?></td>
              <td><?php echo $rs['menu_name_th']; ?></td>
              <td><?php echo $rs['menu_child_name_th']; ?></td>
              <td><?php echo $rs['menu_child_name_en']; ?></td>
              <td><a href="../<?php echo $rs['menu_child_link']; ?>" target="_blank"><?php echo $rs['menu_child_link']; ?></a></td>
              <td>
                <?php
                if($rs['menu_child_display_status']==1){
                 ?><a href="change_show_status.php?menu_child_disappear=<?php echo $rs['menu_child_id']?>"><button type="button" class="btn btn-info btn-block"><i class="fa fa-eye-slash" aria-hidden="true"></i>  Disappear</button></a>
               <?php } else {
                 ?><a href="change_show_status.php?menu_child_appear=<?php echo $rs['menu_child_id']?>"><button type="button" class="btn btn-success btn-block"><i class="fa fa-eye" aria-hidden="true"></i>  Appear</button></a>
                 <?php
               } ?>
               </td>
              <td align="center">
 <a href="edit_menu_child.php?id=<?php echo $rs['menu_child_id']?>"><button type="button" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>  Edit</button></a>
 <button type="button" class="btn btn-danger" onclick="del(<?php echo $rs['menu_child_id']?>)"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</button>
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
        "order": [[ 1, "asc" ]]
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
					window.location.href="delmenu_management.php?id_child="+id+"";
				}
			}
		});

	}
</script>
