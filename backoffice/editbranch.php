<?php session_start();

if($_SESSION['userid']==''){
	echo '<script type="text/javascript">alert("Please Login...");</script>';
	echo '<script>window.location.href="login.php"</script>';
}else if($_SESSION['userid']!=''){
$id=$_GET['id'];
?>
<script type="text/javascript">
function location_check(){
	if(document.getElementById("Local").selected){
		hidden_region('1');
	}else {
		hidden_region('0');
	}
}
function hidden_region(data){
if(data==0){
	document.getElementById('branch_region_label').style.display = 'none';
	document.getElementById('branch_region').style.display = 'none';
	document.getElementById('branch_region').value = '';
}else{
	document.getElementById('branch_region_label').style.display = '';
	document.getElementById('branch_region').style.display = '';
}

}
</script>
<?php require 'backoffice/init.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BRANCH |</title>
  </head>

  <body class="nav-md"
	<?php $sql_check="SELECT * FROM branch WHERE branch_id={$_GET['id']}";
	$rs_check=mysql_fetch_array(mysql_query($sql_check));
	if($rs_check['branch_location']=="Foreign"){
		echo "onload='hidden_region(0)'";
	}else{
		echo "onload='hidden_region(1)'";
	}
	?>
	>
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
                <h4><a href="branch.php?page=home&active=branch">Branch</a> > Edit Branch</h4>
               </div>
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Branch</h2>
                    <div class="clearfix"></div>
                  </div>

                    <br />
        <form  class="form-horizontal form-label-left" method="post" action="branch/update.php"  enctype="multipart/form-data">
				<!-- --------------------DropDown List Get Catagory Blade-------------------------------- -->
				<input type="hidden" name="update" value="update">
				<input type="hidden" name="id" value="<?=$_GET['id']?>">
				<?php
				$sql="SELECT * FROM branch WHERE branch_id={$_GET['id']}";
				$q=mysql_query($sql);
				$rs=mysql_fetch_array($q);
				?>
				<!-- --------------------End DropDown List Get Catagory Blade-------------------------------- -->
				<div class="form-group">
					 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="branch_name_th">branch name th<span class="required">*</span>
					 </label>
					 <div class="col-md-6 col-sm-6 col-xs-12">
						 <input type="text" value="<?=$rs['branch_name_th']?>" name="branch_name_th" id="branch_name_th" required="required" class="form-control col-md-7 col-xs-12">
					 </div>
				 </div>
				 <div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="branch_name_en">branch name en<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" value="<?=$rs['branch_name_en']?>" name="branch_name_en" id="branch_name_en" required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="form-group">
						 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="branch_location">branch location<span class="required">*</span>
						 </label>
						 <div class="col-md-6 col-sm-6 col-xs-12">
							 <select class="form-control" name="branch_location" id="branch_location" onchange="location_check()"  required>
								 <?php
								 	if($rs['branch_location']=="Local"){
										 echo "<option id='Local' value='Local' selected>สาขาในประเทศ</option>";
										 echo "<option id='Foreign' value='Foreign'>สาขาต่างประเทศ</option>";
									 }else{
										 echo "<option id='Local' value='Local'>สาขาในประเทศ</option>";
										 echo "<option id='Foreign' value='Foreign' selected>สาขาต่างประเทศ</option>";
									 }

								  ?>
								 </select>
						 </div>
					 </div>
					 <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="branch_region" id="branch_region_label">branch region</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<select class="form-control" name="branch_region" id="branch_region" >

									<?php
									$sql_region="SELECT * FROM branch_region";
									$q_region=mysql_query($sql_region);
									while ($rs_region=mysql_fetch_array($q_region)) {
										if($rs['branch_region']==$rs_region['branch_region_id']){?>
										<option value="<?=$rs_region['branch_region_id']?>" selected><?=$rs_region['branch_region_name_th']?></option>
										<?php
									}else{ ?>
										<option value="<?=$rs_region['branch_region_id']?>"><?=$rs_region['branch_region_name_th']?></option>
									<?php
									}
								}
									 ?>
								</select>
							</div>
						</div>
						 <div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="branch_detail_th">branch detail th<span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">

									<textarea name="branch_detail_th" rows="8" id="branch_detail_th" cols="80" class="form-control ckeditor"><?=$rs['branch_detail_th'] ?></textarea>

								</div>
							</div>
							<div class="form-group">
								 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="branch_detail_en">branch detail en<span class="required">*</span>
								 </label>
								 <div class="col-md-6 col-sm-6 col-xs-12">

									 <textarea name="branch_detail_en" rows="8" cols="80" class="form-control ckeditor"><?=$rs['branch_detail_en'] ?></textarea>

								 </div>
							 </div>
							 <div class="form-group">
													 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"></span>
													 </label>
																		 <div class="col-md-6 col-sm-6 col-xs-12">

																			 <img src="image/<?=$rs['branch_img']?>"width="200" height="200" >

																		 </div>
																	 </div>
		<div class="form-group">
			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="branch_img">Picture<span class="required">*</span>
			</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="file" name="branch_img" id="branch_img"  class="form-control col-md-7 col-xs-12">
			<p>Picture 414 x 414 px</p>
								</div>
							</div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						                    <button type="submit" class="btn btn-success">Submit</button>
                          <button type="reset" class="btn btn-primary" onclick="location.href='branch.php?page=home&active=branch'">Back</button>
                        </div>
                      </div>
                    </form>
                                    </div>
                                  </div>
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

	</script>
  </body>
</html>
<?php }?>
