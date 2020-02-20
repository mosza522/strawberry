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
			 <div class="x_panel">
                  <div class="x_title">
                    <h2>News</h2>
                    <div class="clearfix"></div>
                  </div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
				   <a href="news.php?page=add_news"><button type="button" class="btn btn-primary"><i class="fa fa-plus-square" aria-hidden="true"></i> News </button></a>
           <table id="example" class="table">
           <thead>
             <tr>
               <th class="text-center" style="min-width: 40px;">No.</th>
   <th class="text-center" style="max-width: 100px;">News Topic</th>
   <th class="text-center" style="min-width: 100px;">News Title</th>
   <th class="text-center" style="min-width: 100px;">News Tage</th>
   <th class="text-center" style="min-width: 100px;">News Detail</th>
   <th class="text-center" style="min-width: 100px;">News Date</th>
   <th class="text-center" style="min-width: 100px;">News Img Cover</th>
   <th class="text-center" style="min-width: 100px;">Display Status</th>
  <!-- <th class="text-center">Sort</th>-->
               <th class="text-center" style="min-width: 100px;">Action</th>
             </tr>
           </thead>

           <tbody>
             <?php
             $i=1;
             $sql="SELECT * FROM news
             LEFT OUTER JOIN news_tag
             ON news.news_tag=news_tag.news_tag_id";
             $q=mysql_query($sql);
            while ($rs=mysql_fetch_assoc($q)) {?>
            <tr>
              <td><?php echo $i."."; ?></td>
              <td><?php echo $rs['news_topic']; ?></td>
              <td><?php echo $rs['news_title']; ?></td>
              <td><?php echo $rs['news_tag_name_th']; ?></td>
              <td>
                <a href="" data-toggle="modal" data-target="#myModal<?=$rs['news_id']?>" class="btn btn-primary">ดูทั้งหมด</a>
                <div class="modal fade" id="myModal<?=$rs['news_id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;">
                    <div class="modal-dialog" role="document" style="width : 60%" >
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button> <span aria-hidden="true"></span>
                                <div class="modal-body">
                                  <?=$rs['news_detail']?>

                                </div>
                                <div class="modal-footer">
                                    <button type="Success" class="btn btn-warning" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

              </td>
              <td><?php echo $rs['news_date']; ?></td>
              <td><img src="image/<?=$rs['news_img_cover']?>" alt="" width="200" height="200"></td>
              <td>
                <?php
                if($rs['news_display_status']==1){
                 ?><a href="change_show_status.php?news_disappear=<?php echo $rs['news_id']?>"><button type="button" class="btn btn-info btn-block"><i class="fa fa-eye-slash" aria-hidden="true"></i>  Disappear</button></a>
               <?php } else {
                 ?><a href="change_show_status.php?news_appear=<?php echo $rs['news_id']?>"><button type="button" class="btn btn-success btn-block"><i class="fa fa-eye" aria-hidden="true"></i>  Appear</button></a>
                 <?php
               } ?>
               </td>
              <td align="center">
 <a href="edit_news.php?id=<?php echo $rs['news_id']?>"><button type="button" class="btn btn-warning "><i class="fa fa-pencil-square-o" aria-hidden="true"></i>  Edit</button></a>
 <button type="button" class="btn btn-danger" onclick="del(<?php echo $rs['news_id']?>)"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</button>
 </td>
            </tr>
          <?php $i++; }?>





        </tbody>
         </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
		<script src="//code.jquery.com/jquery-1.12.3.js"></script>
		<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
		<link href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" rel="stylesheet">
<script>
	$(document).ready(function(){
		$('#example').DataTable({
        "order": [[ 0, "asc" ]]
    });
	});


	function del(id)
	{
		bootbox.confirm({
			title: "Confirm?",
			message: "You want to remove the selected data or not.",
			buttons: {
				cancel: {
					label: '<i class="fa fa-times"></i> Cancel',
					className: 'btn-danger'
				},
				confirm: {
					label: '<i class="fa fa-check"></i> Confirm',
					className: 'btn-success'
				}
			},
			callback: function (result) {
				if(result == true)
				{
					window.location.href="delnews.php?id_news="+id+"";
				}
			}
		});

	}
</script>
