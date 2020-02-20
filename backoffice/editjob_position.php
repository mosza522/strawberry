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
    <title>Apply Job |</title>
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
					 <h4><a href="apply_job.php?page=home&active=apply_job">Apply Job</a> > <a href="apply_job.php?page=job_position&active=apply_job">Add Job Position</a> > Edit Job Position</h4>
               </div>
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Job Position</h2>
                    <div class="clearfix"></div>
                  </div>
									<div class="x_content">
                    <br />
        <form  class="form-horizontal form-label-left" method="post" action="apply_job/update.php"  enctype="multipart/form-data">
				<!-- --------------------End DropDown List Get Catagory Blade-------------------------------- -->
				<?php $sql="SELECT * FROM job_position WHERE job_position_id='{$_GET['id']}'" ;
				$rs=mysql_fetch_array(mysql_query($sql));
				?>
				<input type="hidden" name="id" value="<?=$_GET['id']?>">
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Job Position Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?= $rs['job_position_name']; ?>" type="text" id="" name="job_position_name" required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Job Position Detail<span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<textarea class="form-control col-md-7 col-xs-12" rows="4" required="required" name="job_position_detail"><?= $rs['job_position_detail']; ?></textarea>

												</div>
                      </div>
											<div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						                    <button type="submit" class="btn btn-success">Submit</button>
                          <button type="reset" class="btn btn-primary" onclick="location.href='apply_job.php?page=job_position&active=apply_job'">Back</button>
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
					window.location.href="admin.php?page=home&active=apply_job";
				}, 1000);
			}
	</script>
	<script language="javascript">

	</script>
  </body>
</html>
<?php }?>
