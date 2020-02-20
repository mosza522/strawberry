<?php session_start();

if($_SESSION['userid']==''){
	echo '<script type="text/javascript">alert("Please Login...");</script>';
	echo '<script>window.location.href="login.php"</script>';
}else if($_SESSION['userid']!=''){
$id=$_GET['id'];
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
                <h4><a href="helpcenter.php?page=home">User</a> > Confirm User > Check and Confirm</h4>
               </div>
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Check and Confirm</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <div class="form-group">
											<form class="form-horizontal"  action="adduser.php" >




							<!-- Text input-->
							<!--
							<div class="form-group">
							  <label class=" col-md-12 control-label" for="textinput">* ชื่อ - นามสกุล :</label>
							  <div class="col-md-6">
							  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">

							        <label class="col-md-12 control-label" for="textinput">กรอกชื่อ-นามสกุลจริง</label>
							  </div>
							</div>
							-->
							<fieldset>


							<!-- Text input-->
							<?php
							$sql="SELECT * FROM tb_user WHERE user_id=$id";
							$q=mysql_query($sql);
							$res=mysql_fetch_array($q);
							?>
							<div class="form-group">
							  <label class="col-md-3 control-label" for="textinput">ชื่อ - นามสกุล :</label>

							  <div class="col-md-4">
							  <input id="user_fullname" value="<?=$res['user_fullname']?>" name="user_fullname" type="text" placeholder="" class="form-control input-md" disabled>
							  </div>
							</div>


							<fieldset>

							<!-- Multiple Checkboxes (inline) -->
							<div class="form-group">
							  <label class="col-md-3 control-label" for="sex-0"> เพศ</label>
							  <div class="col-md-2">
									<input id="user_sex" value="<?=$res['user_sex']?>" name="user_sex" type="text" placeholder="" class="form-control input-md" disabled>

							  </div>
							</div>



							</fieldset>


							</fieldset>

							    <fieldset>
							<!--
							<script>
							var day;
							function changeMonth() {

							if(document.getElementById("month").value == "1" || document.getElementById("month").value == "3" || document.getElementById("month").value == "5" || document.getElementById("month").value == "7" || document.getElementById("month").value == "8"
							|| document.getElementById("month").value == "10" || document.getElementById("month").value == "12"){
							day=31;
							alert(day);
							}
							else if(document.getElementById("month").value == "4" || document.getElementById("month").value == "6"
							|| document.getElementById("month").value == "9" || document.getElementById("month").value == "11"){
							day=30;
							alert(day);
							}
							}

							</script>
							-->
							<!-- Select Basic -->
							<div class="form-group">
							  <label class="col-md-3 control-label" for="selectbasic"> วัน  เดือน  ปีเกิด :</label>
							  <div class="col-md-2">
									<input id="user_birthdate" value="<?=$res['user_birthdate']?>" name="user_birthdate" type="text" placeholder="" class="form-control input-md" disabled>

							  </div>

							</div>
							        <div class="form-group">
							  <label class="col-md-3 control-label" for="textinput"> เลขที่บัตรประชาชน :</label>

							  <div class="col-md-4">
									<input id="user_identity" value="<?=$res['user_identity']?>" name="user_identity" type="text" placeholder="" class="form-control input-md" disabled>
 							</div>
							</div>


							<fieldset>


							<fieldset>

							<!-- Textarea -->
							<div class="form-group">
				<label class="col-md-3 control-label" for="textinput"> รูปบัตรประชาชน :</label>

				<div class="col-md-4">
					<img src="image/<?=$res['user_img_identity']?>"width="500" height="300">
				</div>
			</div>


							</fieldset>
							<fieldset>

							<!-- Textarea -->
							<div class="form-group">
				<label class="col-md-3 control-label" for="textinput"> รูปสำเนาทะเบียนบ้าน :</label>

				<div class="col-md-4">
					<img src="image/<?=$res['user_img_account_home']?>"width="500" height="300">

				</div>
			</div>


							</fieldset>














							</fieldset>
							          <!-- Text input-->
							<div class="form-group">
							  <label class="col-md-3 control-label" for="textinput"> ที่อยู่ :</label>
							  <div class="col-md-4">
									<input id="user_address" value="<?=$res['user_address']?>" name="user_address" type="text" placeholder="" class="form-control input-md" disabled>
</div>
							</div>
							          <div class="form-group">
							  <label class="col-md-3 control-label" for="textinput"> จังหวัด :</label>
							  <div class="col-md-4">
									<input id="user_province" value="<?=$res['user_province']?>" name="user_province" type="text" placeholder="" class="form-control input-md" disabled>
							  </div>
							</div>
							          <div class="form-group">
							  <label class="col-md-3 control-label" for="textinput"> รหัสไปรษณีย์ :</label>
							  <div class="col-md-4">
									<input id="user_zipcode" value="<?=$res['user_zipcode']?>" name="user_zipcode" type="text" placeholder="" class="form-control input-md" disabled>
							  </div>
							</div>
							       <!-- Text input-->
							<div class="form-group">
							  <label class="col-md-3 control-label" for="textinput"> เบอร์โทรติดต่อ :</label>

							  <div class="col-md-4">
									<input id="user_tell" value="<?=$res['user_tell']?>" name="user_tell" type="text" placeholder="" class="form-control input-md" disabled>
							  </div>
							</div>

							<fieldset>
							<!-- Select Basic -->
							<div class="form-group">
							  <label class="col-md-3 control-label" for="selectbasic"> ชื่อธนาคาร :</label>
							  <div class="col-md-4">
									<input id="user_bank_name" value="<?=$res['user_bank_name']?>" name="user_bank_name" type="text" placeholder="" class="form-control input-md" disabled>

							  </div>
							</div>
							</fieldset>

							          <div class="form-group">
							  <label class="col-md-3 control-label" for="textinput"> หมายเลขบัญชี :</label>
							  <div class="col-md-4">
									<input id="user_account" value="<?=$res['user_account']?>" name="user_account" type="text" placeholder="" class="form-control input-md" disabled>
							  </div>
							</div>
							          <div class="form-group">
							  <label class="col-md-3 control-label" for="textinput"> ชื่อบัญชี :</label>

							  <div class="col-md-4">
									<input id="user_account_name" value="<?=$res['user_account_name']?>" name="user_account_name" type="text" placeholder="" class="form-control input-md" disabled>
							  </div>
							</div>

							<fieldset>
							<!-- Select Basic -->
							<div class="form-group">
							  <label class="col-md-3 control-label" for="selectbasic"> ประเภทบัญชี :</label>

							  <div class="col-md-4">
									<input id="user_account_type" value="<?=$res['user_account_type']?>" name="user_account_type" type="text" placeholder="" class="form-control input-md" disabled>

							  </div>
							</div>
							</fieldset>

							        <div class="form-group">
							  <label class="col-md-3 control-label" for="textinput"> สาขา :</label>
							  <div class="col-md-4">
									<input id="user_account_branch" value="<?=$res['user_account_branch']?>" name="user_account_branch" type="text" placeholder="" class="form-control input-md" disabled>
							  </div>
							</div>
							          <fieldset>
							<!-- Select Basic -->
							<div class="form-group">
							  <label class="col-md-3 control-label" for="selectbasic"> จังหวัด :</label>
							  <div class="col-md-4">
									<input id="user_account_province" value="<?=$res['user_account_province']?>" name="user_account_province" type="text" placeholder="" class="form-control input-md" disabled>
							  </div>
							</div>
							</fieldset>

							<div class="form-group">
							  <label class="col-md-3 control-label" for="textinput"> อีเมล์ :</label>
							  <div class="col-md-4">
									<input id="user_email" value="<?=$res['user_email']?>" name="user_email" type="text" placeholder="" class="form-control input-md" disabled>
							  </div>
							</div>

							          <!-- Text input-->
							<div class="form-group">
							  <label class="col-md-3 control-label" for="textinput"> Username :</label>

							  <div class="col-md-4">
									<input id="user_username" value="<?=$res['user_username']?>" name="user_username" type="text" placeholder="" class="form-control input-md" disabled>
							  </div>
							</div>
							<!-- Button (Double) -->

							<fieldset>
							<!-- Button -->
							<div class="form-group">
							  <label class="col-md-3 control-label" ></label>
							    <button  class="btn btn-info">Back</button>
							  <div class="col-md-3">

							    <button type="submit"  class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i> Confirm</button>
							  </div>
							</div>
							</fieldset>







								</div>
							  </div>
							</div>

							</fieldset>
							</form>
					</div>
		    </div>
        <?php include 'inc_footer.php';?>

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
