<?php session_start();

if($_SESSION['userid']==''){
	echo '<script type="text/javascript">alert("Please Login...");</script>';
	echo '<script>window.location.href="login.php"</script>';
}else if($_SESSION['userid']!=''){

?>
<?php require 'backoffice/init.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMIN |</title>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <?php include 'inc_head.php';?>
            <?php include 'inc_sidebar.php';?>
			<?php include 'inc_sidebar_footer.php';?>
          </div>
        </div>
			<?php include 'inc_header.php';?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
             <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
			   <div class="title_left">
                <h4><a href="helpcenter.php?page=home">Admin</a> > Edit Admin</h4>
               </div>
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Admin</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" name="editadmin"class="form-horizontal form-label-left" method="post" action="admin/update.php" target="up_iframe" enctype="multipart/form-data"OnSubmit="return fncSubmit();">
					<div class="form-group">
					<?php
							$id 	= $_GET['id'];
							$sql 	= "Select * from tb_admin where admin_id = '".$id."'";
							$result = mysql_query($sql) or die ("Not get data");
							$x 		= 1;
							$row 	= mysql_fetch_array($result);
					?>
						<input type="hidden"name="id" id="id"  value="<?php echo $row['admin_id'];?>">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Permission <span class="required">*</span>
						</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
							<select class="form-control" id="permission" name="permission">
								<?php
								 if($row['admin_permission']=="admin"){
									echo '<option value="">----Please Select----</option>';
									echo '<option value="admin"selected>Admin</option>';
									}
								else if($row['admin_permission']=="admin"){
									echo '<option value=""selected>----Please Select----</option>';
									echo '<option value="admin">Admin</option>';
								}
								?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Full Name <span class="required">*</span>
						</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" class="form-control" name="admin_fullname" id="admin_fullname" value="<?php echo $row['admin_fullname'];?>"required="" />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Username <span class="required">*</span>
						</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" class="form-control" name="username" id="username" 	value="<?php echo $row['admin_username'];?>" required="" />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Password <span class="required">*</span>
						</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
							<input type="password" class="form-control" name="password" id="password"  value="<?php echo $row['admin_password_origin'];?>" required="" />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Confirm Password <span class="required">*</span>
						</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
							<input type="password" class="form-control" name="conpassword" id="conpassword" placeholder="Confirm Password" value="" required="" />
						</div>
					</div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						  <button type="submit" class="btn btn-success">Submit</button>
                          <button type="reset" class="btn btn-primary" ><a href="admin.php?page=home">Cancel</a></button>
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

        <?php include 'inc_footer.php';?>
      </div>
    </div>
	<script>
		function settext(text)
			{
				bootbox.dialog({
					message : '<div class="alert alert-success fade in m-b-15"><strong>Success!</strong> Update Complete</div>',
					title: '&nbsp;',

				});
				setTimeout(function() {
					window.location.href="admin.php?page=home";
				}, 1000);
			}
	</script>
	<script language="javascript">
		function fncSubmit()
		{
			if(document.editadmin.password.value != document.editadmin.conpassword.value)
			{
				alert('ยืนยันรหัสผ่านไม่ตรงกัน กรุณากรอกใหม่อีกครั้ง');
				document.editadmin.conpassword.focus();
				return false;
			}


			document.editadmin.submit();
		}
	</script>
  </body>
</html>
<?php }?>
