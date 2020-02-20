 <div class="right_col" role="main">
    <div class="">
    <div class="clearfix"></div>
	<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="title_left">
			<h4><a href="user.php?page=home&active=user">User</a>
				> Add Use</h4>
		</div>
        <div class="x_panel">
            <div><h2></br>Add User</h2></div>
            <div class="x_content"><br />
              <form name="adduser" onsubmit="return fncSubmit()" class="form-horizontal form-label-left" method="post" action="user/add.php">
      					<div class="form-group">
      						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Full Name <span class="required">*</span>
      						</label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
      							<input type="text" class="form-control" name="user_fullname" id="user_fullname" placeholder="Full name" required="" />
      						</div>
      					</div>
      					<div class="form-group">
      						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Username <span class="required">*</span>
      						</label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
      							<input type="text" class="form-control" name="user_username" id="user_username" 	placeholder="Username" required="" />
      						</div>
      					</div>
      					<div class="form-group">
      						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Password <span class="required">*</span>
      						</label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
      							<input type="password" class="form-control" name="user_password" id="user_password" placeholder="Password" required="" />
      						</div>
      					</div>
      					<div class="form-group">
      						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Confirm Password <span class="required">*</span>
      						</label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
      							<input type="password" class="form-control" name="conpassword" id="conpassword" placeholder="Confirm Password" value="" required="" />
      						</div>
      					</div>
                <div class="form-group">
      						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Branch <span class="required">*</span>
      						</label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
      							<input type="text" class="form-control" name="user_branch" id="user_branch" 	placeholder="Branch" required="" />
      						</div>
      					</div>
                <div class="form-group">
      						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Email <span class="required">*</span>
      						</label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
      							<input type="text" class="form-control" name="user_email" id="user_email" 	placeholder="Email" required="" />
      						</div>
      					</div>
                <div class="form-group">
      						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Tell <span class="required">*</span>
      						</label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
      							<input type="text" class="form-control" name="user_tell" id="user_tell" 	placeholder="Tell" required="" />
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
  <script src="//code.jquery.com/jquery-1.12.3.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
  <link href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" rel="stylesheet">
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
			if(document.adduser.user_password.value != document.adduser.conpassword.value)
			{
				alert('ยืนยันรหัสผ่านไม่ตรงกัน กรุณากรอกใหม่อีกครั้ง');
				document.adduser.user_password.focus();
				return false;
			}


			document.adduser.submit();
		}

    	$(document).ready(function(){
    		$('#example').DataTable({
            "order": [[ 0, "asc" ]]
        });
    	});
	</script>
