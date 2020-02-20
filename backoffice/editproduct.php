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
    <title>PRODUCT |</title>
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
                <h4><a href="helpcenter.php?page=home">Product</a> > Edit Product</h4>
               </div>
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Product</h2>
                    <div class="clearfix"></div>
                  </div>

                    <br />
        <form name="form1" onsubmit="return  OnUploadCheck()"  class="form-horizontal form-label-left" method="post" action="product/update.php"  enctype="multipart/form-data">
				<!-- --------------------DropDown List Get Catagory Blade-------------------------------- -->
        <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_category"> product category <span class="required">*</span>
        </label>
        <input type="hidden" name="id" value="<?=$id?>">
        <input type="hidden" name="update" value="update">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                      <?php $sql="SELECT * FROM product WHERE product_id=$id";
                      $q=mysql_query($sql);
                      $rs=mysql_fetch_array($q);
                      ?>
            <select name="product_category" id="product_category" class="form-control" required>
              <?php
                $sql_category="SELECT * FROM product_category";
                $q_category=mysql_query($sql_category) or die (mysql_error());
                while ($rs_category=mysql_fetch_array($q_category)) {
                  ?>
                  <option value="<?=$rs_category['product_category_id']?>"
                    <?php if($rs['product_category']==$rs_category['product_category_id']) {echo "selected";}?>
                    ><?=$rs_category['product_category_name_th']?></option>
                <?php

              }
                ?>



            </select>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12">
        </div>
      </div>
				<!-- --------------------End DropDown List Get Catagory Blade-------------------------------- -->
                <div class="form-group">
                   <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ID product<span class="required">*</span>
                   </label>
                   <div class="col-md-6 col-sm-6 col-xs-12">
                     <input type="text" value="<?=$rs['product_id_product']?>" name="product_id_product" required="required" class="form-control col-md-7 col-xs-12">
                   </div>
                 </div>
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name product<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" value="<?=$rs['product_name']?>" name="product_name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Price retail<span class="required">*</span>
                         </label>
                         <div class="col-md-6 col-sm-6 col-xs-12">
                           <input type="text" value="<?=$rs['product_price_retail']?>"name="product_price_retail" required="required" class="form-control col-md-7 col-xs-12">
                         </div>
                       </div>
                       <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Price dozen<span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" value="<?=$rs['product_price_dozen']?>" name="product_price_dozen" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
												<div class="form-group">
                           <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Price crate<span class="required">*</span>
                           </label>
                           <div class="col-md-6 col-sm-6 col-xs-12">
                             <input type="text" value="<?=$rs['product_price_crate']?>" name="product_price_crate" required="required" class="form-control col-md-7 col-xs-12">
                           </div>
                         </div>
                        <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"></span>
                                    </label>
                                              <div class="col-md-6 col-sm-6 col-xs-12">

                                                <img src="image/<?=$rs['product_img']?>"width="200" height="200" >

                                              </div>
                                            </div>

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Picture<span class="required">*</span>
                          </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <input type="file" id="product_img"name="product_img" class="form-control col-md-7 col-xs-12">
                          <p>Picture 414 x 414 px</p>
                          <button type="submit" class="btn btn-success">Submit</button>
                      <button type="button" onclick="javascript:window.history.go(-1);" class="btn btn-primary">Cancel</button>
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
	<script language="JavaScript">
		function OnUploadCheck()
		{
			var extall="jpg,gif,png";

			file = document.form1.product_img.value;
			ext = file.split('.').pop().toLowerCase();
			if(parseInt(extall.indexOf(ext)) < 0)
			{
				alert('สามารถใช้ได้เฉพาะไฟล์ : ' + extall);
				return false;
			}
			return true;
		}
	</script>
  </body>
</html>
<?php }?>
