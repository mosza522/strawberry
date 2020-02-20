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
                <h2>News Photo Album</h2>
                <div class="clearfix"></div>
              </div>
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_content">
       <a href="news.php?page=add_news_album"><button type="button" class="btn btn-primary"><i class="fa fa-plus-square" aria-hidden="true"></i> News Photo album </button></a>
       <table id="example" class="table">
       <thead>
         <tr>
           <th class="text-center" style="min-width: 40px;">No.</th>
<th class="text-center" style="max-width: 100px;">News Topic</th>
<th class="text-center" style="min-width: 100px;">News Img</th>
<th class="text-center" style="min-width: 100px;">Display Status</th>
<!-- <th class="text-center">Sort</th>-->
           <th class="text-center" style="min-width: 100px;">Action</th>
         </tr>
       </thead>

       <tbody>
         <?php
         $i=1;
         $sql_topic="SELECT * FROM news_img
         LEFT OUTER JOIN news
         ON news_img.news_id=news.news_id
         GROUP BY news_img.news_id
         ";
         $q_topic=mysql_query($sql_topic);
        while ($rs_topic=mysql_fetch_assoc($q_topic)) {
          $sql="SELECT * FROM news_img
          LEFT OUTER JOIN news
          ON news_img.news_id=news.news_id
          WHERE news_img.news_id={$rs_topic['news_id']}";
          if(!$q=mysql_query($sql))echo mysql_error();

          ?>
        <tr>
          <td><?php echo $i."."; ?></td>
          <td><?php echo $rs_topic['news_topic']; ?></td>
          <td>
            <a href="news/light_box.php?id=<?=$rs_topic['news_id']?>" class="btn btn-primary">ดูทั้งหมด</a>
          </td>
          <td>
            <?php
            if($rs_topic['news_img_display_status']==1){
             ?><a href="change_show_status.php?news_album_disappear=<?php echo $rs_topic['news_id']?>"><button type="button" class="btn btn-info btn-block"><i class="fa fa-eye-slash" aria-hidden="true"></i>  Disappear</button></a>
           <?php } else {
             ?><a href="change_show_status.php?news_album_appear=<?php echo $rs_topic['news_id']?>"><button type="button" class="btn btn-success btn-block"><i class="fa fa-eye" aria-hidden="true"></i>  Appear</button></a>
             <?php
           } ?>
           </td>
          <td align="center">
<a href="news.php?page=edit_news_album&id=<?=$rs_topic['news_id']?>"><button type="button" class="btn btn-warning "><i class="fa fa-pencil-square-o" aria-hidden="true"></i>  Edit</button></a>
<button type="button" class="btn btn-danger" onclick="del(<?php echo $rs_topic['news_id']?>)"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</button>
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
      window.location.href="delnews.php?id_news_album="+id+"";
    }
  }
});

}
</script>
