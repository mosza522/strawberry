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
    <title>PAGE |</title>
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

               </div>
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Title</h2>
                    <div class="clearfix"></div>
                  </div>
									<div class="x_content">
                    <br />
        <form  class="form-horizontal form-label-left" method="post" action="header_management/update.php"  enctype="multipart/form-data">
				<!-- --------------------End DropDown List Get Catagory Blade-------------------------------- -->
				<?php $sql_edit="SELECT * FROM title WHERE title_id='{$_GET['id']}'" ;
				$rs_edit=mysql_fetch_array(mysql_query($sql_edit));
				?>
				<input type="hidden" name="id_title" value="<?=$_GET['id']?>">
				<div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Page <span class="required">*</span>
        </label>
                    <div class="col-md-3 col-sm-3 col-xs-12">

            <select name="page_id_title" id="" class="form-control" required>
              <option value="">---plaese Select---</option>
              <?php
                $sql="SELECT * FROM page";
                $q=mysql_query($sql) or die (mysql_error());
                while ($rs=mysql_fetch_array($q)) {
									if($rs_edit['page_id']==$rs['page_id']){?>
										<option value="<?=$rs['page_id']?>" selected><?=$rs['page_name']?></option>
										<?php
									}
                  $sql_check="SELECT page_id FROM title WHERE page_id='$rs[page_id]'";
                  $check=mysql_num_rows(mysql_query($sql_check));
                  if($check==0){
                  ?>
                <option value="<?=$rs['page_id']?>"><?=$rs['page_name']?></option>
								<?php
                  }
              }
                ?>



            </select>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12">
        </div>
      </div>
				<!-- --------------------End DropDown List Get Catagory Blade-------------------------------- -->

					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Title<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea name="title" class="form-control col-md-7 col-xs-12" style="margin: 0px; width: 500px; height: 130px;"><?=$rs_edit['title']?></textarea>
                        </div>
                      </div>

											<div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						                    <button type="submit" class="btn btn-success">Submit</button>
                          <button type="reset" class="btn btn-primary" onclick="location.href='header_management.php?page=home_title'">Back</button>
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
					window.location.href="admin.php?page=home";
				}, 1000);
			}
	</script>
	<script language="javascript">

	</script>
  </body>
</html>
<?php }?>
