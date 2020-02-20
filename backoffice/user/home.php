		<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>User</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <a href="user.php?page=adduser&active=user"><button type="button" class="btn btn-primary"><i class="fa fa-plus-square" aria-hidden="true"></i> User</button></a>


                     <table id="example" class="table">
                      <thead>
                        <tr>
                          <th class="text-center" style="width: 40px;">No.</th>
						  <th class="text-center" style="width: 100px;">User Fullname</th>
                          <th class="text-center" style="width: 100px;">User Name</th>
                          <th class="text-center" style="width: 100px;">User Password</th>
                          <th class="text-center" style="width: 100px;">Password Origin</th>
                          <th class="text-center" style="width: 100px;">User Branch</th>
                          <th class="text-center" style="width: 100px;">User Email</th>
                          <th class="text-center" style="width: 100px;">User Tell</th>
                          <th class="text-center" style="width: 100px;">Date Create</th>
						  <th class="text-center">Action</th>
                        </tr>
                      </thead>
                      <tbody>
						  <?php
							$sql = "SELECT * FROM user";
							$res = mysql_query($sql) or die("Error Select");
							$num = 1;
							while($rs = mysql_fetch_array($res))
							{

						  ?>
                        <tr>
                          <td><?=$num?></td>
						<td><?=$rs['user_fullname']?></td>
            <td><?=$rs['user_username']?></td>
            <td><?=$rs['user_password']?></td>
            <td><?=$rs['user_password_origin']?></td>
            <td><?=$rs['user_branch']?></td>
            <td><?=$rs['user_email']?></td>
            <td><?=$rs['user_tell']?></td>
            <td><?=$rs['date_create']?></td>
            <td align="center">
							<a href="edituser.php?id=<?php echo $rs['user_id']?>"><button type="button" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>  Edit</button></a>
							<button type="button" class="btn btn-danger" onclick="del(<?php echo $rs['user_id']?>)"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</button>
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
					window.location.href="deluser.php?id="+id+"";
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
			window.location.href="user.php?page=home";
		}, 1000);
	}
</script>
