		<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Admin</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
				   <a href="admin.php?page=addadminform"><button type="button" class="btn btn-primary"><i class="fa fa-plus-square" aria-hidden="true"></i>Add Admin</button></a>
                      <table id="example" class="table">
                      <thead>
                        <tr>
						  <th class="text-center" style="width: 100px;">Date Create</th>
                          <th class="text-center" style="width: 100px;">Name Admin</th>
                          <th class="text-center" style="width: 100px;">Password</th>
                          <th class="text-center" style="width: 120px;">Last Login</th>
                          <th class="text-center" style="width: 100px;">Permission</th>
						  <th class="text-center">Action</th>
                        </tr>
                      </thead>
                      <tbody>
						  <?php
							$sql = "Select * from tb_admin where admin_id";
							$res = mysql_query($sql) or die("Error Select");
							$num = 1;
							while($row = mysql_fetch_array($res))
							{
							$day		= substr($row['admin_create'], 8, 2);
							$daylast	= substr($row['admin_create'], 8, 2);
							//$monthfirst	= substr($row['news_create'], 6, 2);
							$month	= substr($row['admin_create'], 6, 2);
							$year		= substr($row['admin_create'], 0, 4);
							$yearth 	= $year+543;
								if($month==1){
									$monthcreate = "ม.ค.";
								}else if($month==2){
									$monthcreate = "ก.พ.";
								}else if($month==3){
									$monthcreate = "มี.ค.";
								}else if($month==4){
									$monthcreate = "เม.ย.";
								}else if($month==5){
									$monthcreate = "พ.ค.";
								}else if($month==6){
									$monthcreate = "มิ.ย.";
								}else if($month==7){
									$monthcreate = "ก.ค.";
								}else if($month==8){
									$monthcreate = "ส.ค.";
								}else if($month==9){
									$monthcreate = "ก.ย.";
								}else if($month==10){
									$monthcreate = "ต.ค.";
								}else if($month==11){
									$monthcreate = "พ.ย.";
								}else if($month==12){
									$monthcreate = "ธ.ค.";
								}
								
							$day1		= substr($row['admin_lastlogin'], 8, 2);
							$daylast1	= substr($row['admin_lastlogin'], 8, 2);
							//$month1first	= substr($row['news_create'], 6, 2);
							$month1	= substr($row['admin_lastlogin'], 6, 2);
							$year1		= substr($row['admin_lastlogin'], 0, 4);
							$yearth1 	= $year1+543;
							$time 		= substr($row['admin_lastlogin'], 11,8);
								if($month1==1){
									$month1create = "ม.ค.";
								}else if($month1==2){
									$month1create = "ก.พ.";
								}else if($month1==3){
									$month1create = "มี.ค.";
								}else if($month1==4){
									$month1create = "เม.ย.";
								}else if($month1==5){
									$month1create = "พ.ค.";
								}else if($month1==6){
									$month1create = "มิ.ย.";
								}else if($month1==7){
									$month1create = "ก.ค.";
								}else if($month1==8){
									$month1create = "ส.ค.";
								}else if($month1==9){
									$month1create = "ก.ย.";
								}else if($month1==10){
									$month1create = "ต.ค.";
								}else if($month1==11){
									$month1create = "พ.ย.";
								}else if($month1==12){
									$month1create = "ธ.ค.";
								}
								if($row['admin_lastlogin']==''){
									 $day1= "-";
									 $month1create ="";
									 $yearth1 = "";
								}
						  ?>
                        <tr>
						<td align="center"><?php echo $day."-".$monthcreate."-".$yearth ;?></td>
						<td align="center"><?php echo $row['admin_username'];?></td>
						<td align="center"><?php echo $row['admin_password_origin'];?></td>
						<td align="center"><?php echo $day1."-".$month1create."-".$yearth1." ".$time ;?></td>
						<td align="center"><?php echo $row['admin_permission'];?></td>
                          <td align="center">
							<a href="editadmin.php?id=<?php echo $row['admin_id']?>"><button type="button" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>  Edit</button></a>
							<button type="button" class="btn btn-danger" onclick="del(<?php echo $row['admin_id']?>)"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</button>
						  </td>
                        </tr>
						<?php  $num++; } ?>
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
					window.location.href="deladmin.php?id="+id+"";
				}
			}
		});
	}
	function settext(text)
	{
		bootbox.dialog({
			message : '<div class="alert alert-success fade in m-b-15"><strong>Success!</strong> Insert Complete</div>',
			title: '&nbsp;',
		});
		setTimeout(function() {
			window.location.href="admin.php?page=home";
		}, 1000);
	}
</script>
  