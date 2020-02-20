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
    <title>NEWS |</title>
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
                <h4><a href="helpcenter.php?page=home">News</a> > Edit News</h4>
               </div>
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit News</h2>
                    <div class="clearfix"></div>
                  </div>

                    <br />
										<?php
										$sql="SELECT * FROM news WHERE news_id={$_GET['id']}";
										$q=mysql_query($sql);
										$rs=mysql_fetch_array($q);
										 ?>
        <form  class="form-horizontal form-label-left" method="post" action="news/update.php"  enctype="multipart/form-data">
				<!-- --------------------DropDown List Get Catagory Blade-------------------------------- -->
				<div class="form-group">
				    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="news_topic">News Topic<span class="required">*</span>
				    </label>
				    <div class="col-md-6 col-sm-6 col-xs-12">
				      <input type="text" maxlength="100" value="<?=$rs['news_topic']?>" name="news_topic" id="news_topic" required="required" class="form-control col-md-7 col-xs-12">
				    </div>
				  </div>
				<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="news_title"> News Title <span class="required">*</span>
				</label>
				            <div class="col-md-6 col-sm-6 col-xs-12">
				              <input type="hidden" name="update_news_id" value="<?=$rs['news_id']?>">
				              <input type="text" value="<?=$rs['news_title']?>" name="news_title" id="news_title" required="required" class="form-control col-md-7 col-xs-12">
</div>

				</div>
				<!-- --------------------End DropDown List Get Catagory Blade-------------------------------- -->
				  <div class="form-group">
				            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="news_tag">News Tag<span class="required">*</span>
				            </label>
				            <div class="col-md-6 col-sm-6 col-xs-12">
				              <select class="form-control" name="news_tag" required>

				                <?php
				                $sql_tag="SELECT * FROM news_tag";
				                $q_tag=mysql_query($sql_tag);
				                while ($rs_tag=mysql_fetch_array($q_tag)) {
													if($rs['news_tag']==$rs_tag['news_tag_id']){?>
													<option selected value="<?=$rs_tag['news_tag_id']?>"><?=$rs_tag['news_tag_name_th']?></option>
													<?php
													}else{
													?>
				                  <option value="<?=$rs_tag['news_tag_id']?>"><?=$rs_tag['news_tag_name_th']?></option>
				                  <?php
												}
				                }
				                ?>

				              </select>
				            </div>
				          </div>

				          <div class="form-group">
				              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="news_detail">News Detail<span class="required">*</span>
				              </label>
				              <div class="col-md-9 col-sm-9 col-xs-12">
				                <textarea name="news_detail" rows="15" cols="80" class="form-control ckeditor" id="news_detail">
				                	<?=$rs['news_detail']?>
				                </textarea>
				              </div>
				            </div>
				          <div class="form-group">
				             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="news_img_cover">News Img Cover<span class="required">*</span>
				             </label>
				             <div class="col-md-6 col-sm-6 col-xs-12">
											 <p><img id="new_img_cover" src="image/<?=$rs['news_img_cover']?>" width="300" height="300" alt=""></p>
				               <input type="file" onchange="change_img()" name="news_img_cover" id="news_img_cover"  class="form-control col-md-7 col-xs-12">
				               <p>ไฟล์ jpg , png และ gif เท่านั้น</p>
				             </div>
				           </div>


				              </div>
				              <div class="ln_solid"></div>
				              <div class="form-group">
				                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
				                        <button type="submit" class="btn btn-success">Submit</button>
				                  <button type="reset" class="btn btn-primary" onclick="location.href='news.php?page=home'">Back</button>
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
	function change_img(){
		src=document.getElementById('news_img_cover').value;
		src_num=src.indexOf(".");
		src_new=src.substring(src_num);
		src_new=src_new.toLowerCase();
		if(!(src_new=='.jpg' || src_new=='.gif' || src_new=='.png')){
			alert('กรุณาใช้ไฟล์ .jpg .gif และ .png')
			document.getElementById('news_img_cover').value="";
		}
		//document.getElementById('new_img_cover').src='image/xxx.png';
	}
</script>
