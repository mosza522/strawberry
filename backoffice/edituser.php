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
    <title>USER |</title>
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
					 <h4><a href="user.php?page=home&active=user">User</a> >  Edit User</h4>
               </div>
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit User</h2>
                    <div class="clearfix"></div>
                  </div>
									<div class="x_content">
                    <br />
        <form name="edit" onsubmit="return fncSubmit()" class="form-horizontal form-label-left" method="post" action="user/update.php"  enctype="multipart/form-data">
				<!-- --------------------End DropDown List Get Catagory Blade-------------------------------- -->
				<?php $sql="SELECT * FROM user WHERE user_id='{$_GET['id']}'" ;
				$rs=mysql_fetch_array(mysql_query($sql));
				?>
				<input type="hidden" name="id_user" value="<?=$_GET['id']?>">
				<div class="form-group">
				 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Full Name <span class="required">*</span>
				 </label>
											<div class="col-md-6 col-sm-6 col-xs-12">
					 <input type="text" class="form-control" value="<?=$rs['user_fullname']?>" name="user_fullname" id="user_fullname"  required="" />
				 </div>
			 </div>
			 <div class="form-group">
				 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Username <span class="required">*</span>
				 </label>
											<div class="col-md-6 col-sm-6 col-xs-12">
					 <input type="text" class="form-control" value="<?=$rs['user_username']?>" name="user_username" id="user_username" 	placeholder="Username" required="" />
				 </div>
			 </div>
			 <div class="form-group">
				 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Password <span class="required">*</span>
				 </label>
											<div class="col-md-6 col-sm-6 col-xs-12">
					 <input type="password" class="form-control" value="<?=$rs['user_password_origin']?>" name="user_password" id="user_password" placeholder="Password" required="" />
				 </div>
			 </div>
			 <div class="form-group">
				 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Confirm Password <span class="required">*</span>
				 </label>
											<div class="col-md-6 col-sm-6 col-xs-12">
					 <input type="password" class="form-control" value="<?=$rs['user_password_origin']?>" name="conpassword" id="conpassword" placeholder="Confirm Password" value="" required="" />
				 </div>
			 </div>
				<div class="form-group">
				 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Branch <span class="required">*</span>
				 </label>
											<div class="col-md-6 col-sm-6 col-xs-12">
					 <input type="text" class="form-control" value="<?=$rs['user_branch']?>" name="user_branch" id="user_branch" 	placeholder="Branch" required="" />
				 </div>
			 </div>
				<div class="form-group">
				 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Email <span class="required">*</span>
				 </label>
											<div class="col-md-6 col-sm-6 col-xs-12">
					 <input type="text" class="form-control" value="<?=$rs['user_email']?>" name="user_email" id="user_email" 	placeholder="Email" required="" />
				 </div>
			 </div>
				<div class="form-group">
				 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Tell <span class="required">*</span>
				 </label>
											<div class="col-md-6 col-sm-6 col-xs-12">
					 <input type="text" class="form-control" value="<?=$rs['user_tell']?>" name="user_tell" id="user_tell" 	placeholder="Tell" required="" />
				 </div>
			 </div>
											<div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						                    <button type="submit" class="btn btn-success">Submit</button>
                          <button type="reset" class="btn btn-primary" onclick="location.href='user.php?page=adduser_type&active=user'">Back</button>
                        </div>
                      </div>
										</form>
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
					window.location.href="admin.php?page=home&active=user";
				}, 1000);
			}
	</script>
	<script language="javascript">
		function fncSubmit()
		{
			if(document.edit.user_password.value != document.edit.conpassword.value)
			{
				alert('ยืนยันรหัสผ่านไม่ตรงกัน กรุณากรอกใหม่อีกครั้ง');
				document.edit.user_password.focus();
				return false;
			}


			document.edit.submit();
		}

			$(document).ready(function(){
				$('#example').DataTable({
						"order": [[ 0, "asc" ]]
				});
			});
	</script>
  </body>
</html>
<?php }?>
