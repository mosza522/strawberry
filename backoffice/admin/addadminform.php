 <div class="right_col" role="main">
    <div class="">
    <div class="clearfix"></div>
	<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="title_left">
			<h4><a href="admin.php?page=home">Admin</a>
				> Add Admin</h4>
		</div>
        <div class="x_panel">
            <div><h2></br>Add Admin</h2></div>
            <div class="x_content"><br />
				<form id="demo-form2"name="addadmin" class="form-horizontal form-label-left" method="post" action="admin/addadmin.php" target="up_iframe" enctype="multipart/form-data"OnSubmit="return fncSubmit();">
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Permission <span class="required">*</span>
						</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
							<select class="form-control" id="permission" name="permission" required>
								<option value="">----Please Select----</option>
								<!--<option value="superadmin">Super Admin</option>-->
								<option value="admin" selected>Admin</option>
							</select>

						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Full Name <span class="required">*</span>
						</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" class="form-control" name="admin_fullname" id="admin_fullname" placeholder="Full name" required="" />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Username <span class="required">*</span>
						</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" class="form-control" name="username" id="username" 	placeholder="Username" required="" />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Password <span class="required">*</span>
						</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
							<input type="password" class="form-control" name="password" id="password" placeholder="Password" required="" />
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
					  <button type="reset" class="btn btn-primary">Cancel</button>
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
			if(document.addadmin.password.value != document.addadmin.conpassword.value)
			{
				alert('ยืนยันรหัสผ่านไม่ตรงกัน กรุณากรอกใหม่อีกครั้ง');
				document.addadmin.conpassword.focus();
				return false;
			}


			document.addadmin.submit();
		}
	</script>
