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
    <title>MENU MANAGEMENT |</title>
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
				    <div class="page-title">
				      <div class="title_left">
				        <h3> </h3>
				      </div>
				    </div>
				    <div class="clearfix"></div>
				     <div class="row">
				      <div class="col-md-12 col-sm-12 col-xs-12">
				<div class="title_left">
				    <h4><a href="menu_management.php?page=home">Menu Management</a> > Edit Menu Management</a></h4>
				</div>
				        <div class="x_panel">
				          <div class="x_title">
				            <h2>Edit Menu Management</h2>
				            <div class="clearfix"></div>
				          </div>
				          <div class="x_content">
				            <br />
										<?php
										$sql="SELECT * FROM menu WHERE menu_id={$_GET['id']}";
										$rs=mysql_fetch_array(mysql_query($sql));
										 ?>
				<form  class="form-horizontal form-label-left" method="post" action="menu_management/update.php" >
				<!-- --------------------DropDown List Get Catagory Blade-------------------------------- -->
				<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="menu_name_th"> Menu Name TH <span class="required">*</span>
				</label>
				            <div class="col-md-6 col-sm-6 col-xs-12">
				              <input type="hidden" name="id_menu" value="<?=$rs['menu_id']?>">
				              <input type="text" value="<?=$rs['menu_name_th']?>" name="menu_name_th" id="menu_name_th" required="required" class="form-control col-md-7 col-xs-12">


				</div>

				</div>
				<!-- --------------------End DropDown List Get Catagory Blade-------------------------------- -->

								<div class="form-group">
				           <label class="control-label col-md-3 col-sm-3 col-xs-12" for="menu_name_en">Menu Name EN<span class="required">*</span>
				           </label>
				           <div class="col-md-6 col-sm-6 col-xs-12">
				             <input type="text" name="menu_name_en" id="menu_name_en" required="required" value="<?=$rs['menu_name_en']?>" class="form-control col-md-7 col-xs-12">
				           </div>
				         </div>
				         <div class="form-group">
				            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="menu_link">Menu Link<span class="required">*</span>
				            </label>
				            <div class="col-md-6 col-sm-6 col-xs-12">
				              <input type="text" value="<?=$rs['menu_link']?>" name="menu_link" id="menu_link" required="required" class="form-control col-md-7 col-xs-12">
				            </div>
				          </div>


				              </div>
				              <div class="ln_solid"></div>
				              <div class="form-group">
				                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
				                        <button type="submit" class="btn btn-success">Submit</button>
				                  <button type="reset" class="btn btn-primary" onclick="location.href='menu_management.php?page=home'">Back</button>
				                </div>
				              </div>
				            </form>
				  <iframe name="up_iframe" width="0" height="0" frameborder="0"></iframe>
				          </div>
				        </div>
				      </div>
				    </div>
				  </div>
        <!-- /page content -->

        <?php include 'inc_footer.php';?>
      </div>
    </div>

	<script language="javascript">

	</script>
  </body>
</html>
<?php }?>
