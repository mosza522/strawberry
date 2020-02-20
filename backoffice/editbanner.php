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
    <title>BANNER |</title>
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
                <h4><a href="helpcenter.php?page=home">Banner</a> > Edit Banner</h4>
               </div>
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Banner</h2>
                    <div class="clearfix"></div>
                  </div>
									<div class="x_content">
                    <br />
        <form name="form1" onsubmit="return OnUploadCheck()"  class="form-horizontal form-label-left" method="post" action="banner/update.php"  enctype="multipart/form-data">
				<!-- --------------------DropDown List Get Catagory Blade-------------------------------- -->
        <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Banner type <span class="required">*</span>
        </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
											<?php
											$id=$_GET['id'];
										 	$sql="SELECT * FROM banner WHERE banner_id=$id";
											$rs=mysql_fetch_array(mysql_query($sql));
											$type_id=$rs['banner_type'];
										  ?>
											<input type="hidden" name="id" value="<?=$id?>">
							<select name="banner_type" id="banner_type" class="form-control">
              <?php $sql_type="SELECT * FROM banner_type";
							$q_type=mysql_query($sql_type);
							while ($rs_type=mysql_fetch_array($q_type)) {
							if($rs_type['banner_type_id']==$type_id){
								echo "<option value='$rs_type[banner_type_id]'selected>$rs_type[banner_type_name_th]</option>";
							}else {?>

							<option value="<?=$rs_type['banner_type_id']?>"><?=$rs_type['banner_type_name_th']?></option>
							<?php
							}
							}
							?>
            </select>
        </div>
      </div>
				<!-- --------------------End DropDown List Get Catagory Blade-------------------------------- -->
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name Banner<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?= $rs['banner_name']; ?>" type="text" id="banner_name" name="banner_name" required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Detail<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea  name="banner_detail" id="banner_detail" class="form-control col-md-7 col-xs-12" style="margin: 0px; width: 500px; height: 130px;"><?=$rs['banner_detail']?></textarea>
                        </div>
                      </div>
											<div class="form-group">
					              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"></span>
					              </label>
					                        <div class="col-md-6 col-sm-6 col-xs-12">

																		<img src="image/<?=$rs['banner_file']?>"width="200" height="200" >

					                        </div>
					                      </div>

					  <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Picture<span class="required">*</span>
              </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="banner_file"name="banner_file" class="form-control col-md-7 col-xs-12">
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

			file = document.form1.banner_file.value;
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
