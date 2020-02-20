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
				    <h4><a href="menu_management.php?page=home_child_menu">Menu Child</a> > Edit Child Menu</a></h4>
				</div>
				        <div class="x_panel">
				          <div class="x_title">
				            <h2>Edit Menu Management</h2>
				            <div class="clearfix"></div>
				          </div>
				          <div class="x_content">
				            <br />
										<?php
										$sql="SELECT * FROM menu_child WHERE menu_child_id={$_GET['id']}";
										$rs=mysql_fetch_array(mysql_query($sql));
										 ?>
										 <form  class="form-horizontal form-label-left" method="post" action="menu_management/update.php" >
						 				<!-- --------------------DropDown List Get Catagory Blade-------------------------------- -->
						 				<div class="form-group">
						 				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="menu_id"> Main Menu <span class="required">*</span>
						 				</label>
											<input type="hidden" name="menu_child" value="update">
											<input type="hidden" name="menu_child_id" value="<?=$_GET['id']?>">
						 				            <div class="col-md-6 col-sm-6 col-xs-12">
						 				              <select class="form-control" name="menu_id" id="menu_id">
						 				                <?php
						 				                $sql_menu="SELECT * FROM menu ";
						 				                $q_menu=mysql_query($sql_menu);
						 				                while($rs_menu=mysql_fetch_array($q_menu)){?>
						 				                  <option value="<?=$rs_menu['menu_id']?>" <?php
																			if($rs_menu['menu_id']==$rs['menu_id'])echo "selected"; ?>><?=$rs_menu['menu_name_th']?></option>

						 				                <?php
						 				                }
						 				                 ?>
						 				              </select>

						 				</div>

						 				</div>
						 				<div class="form-group">
						 				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="menu_child_name_th"> Menu Child Name TH <span class="required">*</span>
						 				</label>
						 				            <div class="col-md-6 col-sm-6 col-xs-12">
						 				              <input type="text" name="menu_child_name_th" value="<?=$rs['menu_child_name_th']?>" id="menu_child_name_th" required="required" class="form-control col-md-7 col-xs-12">


						 				</div>

						 				</div>
						 				<!-- --------------------End DropDown List Get Catagory Blade-------------------------------- -->
						 				        <div class="form-group">
						 				           <label class="control-label col-md-3 col-sm-3 col-xs-12" for="menu_child_name_en">Menu Child Name EN<span class="required">*</span>
						 				           </label>
						 				           <div class="col-md-6 col-sm-6 col-xs-12">
						 				             <input type="text" name="menu_child_name_en" value="<?=$rs['menu_child_name_en']?>" id="menu_child_name_en" required="required" class="form-control col-md-7 col-xs-12">
						 				           </div>
						 				         </div>
						 				         <div class="form-group">
						 				            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="menu_child_link">Menu Link<span class="required">*</span>
						 				            </label>
						 				            <div class="col-md-6 col-sm-6 col-xs-12">
						 				              <input type="text" name="menu_child_link" value="<?=$rs['menu_child_link']?>" id="menu_child_link" required="required" class="form-control col-md-7 col-xs-12">
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
