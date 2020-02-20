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
    <title>FRANCHISE |</title>
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
                <h4><a href="franchise.php?page=home&active=franchise">Franchise</a> > Edit Franchise</h4>
               </div>
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Franchise</h2>
                    <div class="clearfix"></div>
                  </div>

                    <br />
        <form name="form1" onsubmit="return OnUploadCheck()" class="form-horizontal form-label-left" method="post" action="franchise/update.php"  enctype="multipart/form-data">
				<!-- --------------------DropDown List Get Catagory Blade-------------------------------- -->
				<input type="hidden" name="update" value="update">
				<input type="hidden" name="id" value="<?=$_GET['id']?>">
				<?php
				$sql="SELECT * FROM franchise WHERE franchise_id={$_GET['id']}";
				$q=mysql_query($sql);
				$rs=mysql_fetch_array($q);
				?>
				<!-- --------------------End DropDown List Get Catagory Blade-------------------------------- -->
                <div class="form-group">
                   <label class="control-label col-md-3 col-sm-3 col-xs-12" for="franchise_name_th">franchise name TH<span class="required">*</span>
                   </label>
                   <div class="col-md-6 col-sm-6 col-xs-12">
                     <input type="text" value="<?=$rs['franchise_name_th']?>" name="franchise_name_th" id="franchise_name_th" required="required" class="form-control col-md-7 col-xs-12">
                   </div>
                 </div>
								 <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="franchise_name_en">franchise name EN<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" value="<?=$rs['franchise_name_en']?>" name="franchise_name_en" id="franchise_name_en" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                  </div>
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="franchise_detail_th">franchise detail TH<span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea name="franchise_detail_th" id="editor" rows="8" cols="80" class="form-control ckeditor" required><?=$rs['franchise_detail_th']?></textarea>
                        </div>
                      </div>
											<div class="form-group">
                         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="franchise_detail_en">franchise detail EN<span class="required">*</span>
                         </label>
                         <div class="col-md-9 col-sm-9 col-xs-12">
                           <textarea name="franchise_detail_en" id="editor" rows="8" cols="80"  class="form-control ckeditor" required><?=$rs['franchise_detail_en']?> <br /></textarea>
                         </div>
                       </div>
											<div class="form-group">
																	<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"></span>
																	</label>
																						<div class="col-md-6 col-sm-6 col-xs-12">

																							<img src="image/<?=$rs['franchise_img']?>"width="200" height="200" >

																						</div>
																					</div>
					  <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="franchise_img">Picture<span class="required">*</span>
              </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file"  name="franchise_img" id="franchise_img"  class="form-control col-md-7 col-xs-12">
						  <p>Picture 414 x 414 px</p>
                        </div>
                      </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
						                    <button type="submit" class="btn btn-success">Submit</button>
                          <button type="reset" class="btn btn-primary" onclick="location.href='franchise.php?page=home&active=franchise'">Back</button>
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
					window.location.href="admin.php?page=home&active=franchise";
				}, 1000);
			}
	</script>



  </body>
</html>
<script type="text/javascript">
	/*function change_img(){
		src=document.getElementById('franchise_img').value;
		src_num=src.indexOf(".");
		src_new=src.substring(src_num);
		src_new=src_new.toLowerCase();
		if(!(src_new=='.jpg' || src_new=='.gif' || src_new=='.png')){
			alert('กรุณาใช้ไฟล์ .jpg .gif และ .png')
			document.getElementById('franchise_img').value="";
		}
		//document.getElementById('new_img_cover').src='image/xxx.png';
	}*/
</script>
<script language="JavaScript">
	function OnUploadCheck()
	{
		var extall="jpg,gif,png";

		file = document.form1.franchise_img.value;
		ext = file.split('.').pop().toLowerCase();
		if(parseInt(extall.indexOf(ext)) < 0)
		{
			alert('สามารถใช้ได้เฉพาะไฟล์ : ' + extall);
			return false;
		}
		return true;
	}
</script>
<?php }?>
