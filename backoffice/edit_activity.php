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
    <title>ACTIVITY |</title>
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
                <h4><a href="helpcenter.php?page=home">Activity</a> > Edit Activity</h4>
               </div>
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Activity</h2>
                    <div class="clearfix"></div>
                  </div>

                    <br />
										<?php
										$sql="SELECT * FROM activity WHERE activity_id={$_GET['id']}";
										$q=mysql_query($sql);
										$rs=mysql_fetch_array($q);
										 ?>
        <form name="form1" onsubmit="return OnUploadCheck()"  class="form-horizontal form-label-left" method="post" action="activity/update.php"  enctype="multipart/form-data">
				<!-- --------------------DropDown List Get Catagory Blade-------------------------------- -->
				<div class="form-group">
				    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="activity_topic">Activity Topic<span class="required">*</span>
				    </label>
				    <div class="col-md-6 col-sm-6 col-xs-12">
				      <input type="text" maxlength="100" value="<?=$rs['activity_topic']?>" name="activity_topic" id="activity_topic" required="required" class="form-control col-md-7 col-xs-12">
				    </div>
				  </div>
				<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="activity_title"> Activity Title <span class="required">*</span>
				</label>
				            <div class="col-md-6 col-sm-6 col-xs-12">
				              <input type="hidden" name="update_activity_id" value="<?=$rs['activity_id']?>">
				              <input type="text" value="<?=$rs['activity_title']?>" name="activity_title" id="activity_title" required="required" class="form-control col-md-7 col-xs-12">
</div>

				</div>
				<!-- --------------------End DropDown List Get Catagory Blade-------------------------------- -->
				  <div class="form-group">
				            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="activity_tag">Activity Tag<span class="required">*</span>
				            </label>
				            <div class="col-md-6 col-sm-6 col-xs-12">
				              <select class="form-control" name="activity_tag" required>

				                <?php
				                $sql_tag="SELECT * FROM activity_tag";
				                $q_tag=mysql_query($sql_tag);
				                while ($rs_tag=mysql_fetch_array($q_tag)) {
													if($rs['activity_tag']==$rs_tag['activity_tag_id']){?>
													<option selected value="<?=$rs_tag['activity_tag_id']?>"><?=$rs_tag['activity_tag_name_th']?></option>
													<?php
													}else{
													?>
				                  <option value="<?=$rs_tag['activity_tag_id']?>"><?=$rs_tag['activity_tag_name_th']?></option>
				                  <?php
												}
				                }
				                ?>

				              </select>
				            </div>
				          </div>

				          <div class="form-group">
				              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="activity_detail">Activity Detail<span class="required">*</span>
				              </label>
				              <div class="col-md-9 col-sm-9 col-xs-12">
				                <textarea name="activity_detail" rows="15" cols="80" class="form-control ckeditor" id="activity_detail">
				                	<?=$rs['activity_detail']?>
				                </textarea>
				              </div>
				            </div>
				          <div class="form-group">
				             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="activity_img_cover">Activity Img Cover<span class="required">*</span>
				             </label>
				             <div class="col-md-6 col-sm-6 col-xs-12">
											 <p><img id="new_img_cover" src="image/<?=$rs['activity_img_cover']?>" width="300" height="300" alt=""></p>
				               <input type="file"  name="activity_img_cover" id="activity_img_cover"  class="form-control col-md-7 col-xs-12">
				               <p>ไฟล์ jpg , png และ gif เท่านั้น</p>
				             </div>
				           </div>


				              </div>
				              <div class="ln_solid"></div>
				              <div class="form-group">
				                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
				                        <button type="submit" class="btn btn-success">Submit</button>
				                  <button type="reset" class="btn btn-primary" onclick="location.href='activity.php?page=home'">Back</button>
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
<script type="text/javascript">
	/*function change_img(){
		src=document.getElementById('activity_img_cover').value;
		src_num=src.indexOf(".");
		src_new=src.substring(src_num);
		src_new=src_new.toLowerCase();
		if(!(src_new=='.jpg' || src_new=='.gif' || src_new=='.png')){
			alert('กรุณาใช้ไฟล์ .jpg .gif และ .png')
			document.getElementById('activity_img_cover').value="";
		}
		//document.getElementById('new_img_cover').src='image/xxx.png';
	}*/
	function OnUploadCheck()
	{
		var extall="jpg,gif,png";

		file = document.form1.activity_img_cover.value;
		ext = file.split('.').pop().toLowerCase();
		if(parseInt(extall.indexOf(ext)) < 0)
		{
			alert('สามารถใช้ได้เฉพาะไฟล์ : ' + extall);
			return false;
		}
		return true;
	}
</script>
