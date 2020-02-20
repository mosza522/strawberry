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
                <h2><a href="news.php?page=home_album">News Photo Album</a> > Edit News Photo Album</h2>
                <div class="clearfix"></div>
              </div>
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel"><?php
            $sql="SELECT * FROM news_img
            LEFT OUTER JOIN news
            ON news_img.news_id=news.news_id
            WHERE news.news_id={$_GET['id']}
            ";
            $q_topic=mysql_query($sql);
            $rs_topic=mysql_fetch_array($q_topic);
             ?>
              <h2><?=$rs_topic['news_topic']?></h2>
              <div class="x_content">
       <table id="example" class="table">
       <thead>
         <tr>
           <th class="text-center" style="min-width: 40px;">No.</th>
<th class="text-center" style="min-width: 100px;">News Img</th>
<!-- <th class="text-center">Sort</th>-->
           <th class="text-center" style="min-width: 100px;">Action</th>
         </tr>
       </thead>

       <tbody>
         <?php
         $i=1;
         $q=mysql_query($sql);
         while ($rs=mysql_fetch_assoc($q)) {
          ?>
        <tr>
          <td><?php echo $i."."; ?></td>
          <td><div class="col-sm-3 col-lg-3 col-md-3">
              <div class="branch-1">
                  <div class="bordol-1">
                      <div class="row"> <a href="" data-toggle="modal" data-target="#myModal<?= $rs['news_img_id']?>"><img src="photo_news/<?php echo $rs['news_img_name']; ?>" width="200" height="200"><?php echo $rs['news_img_name']; ?></a> </div>
                      <div class="modal fade" id="myModal<?= $rs['news_img_id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;">
                          <div class="modal-dialog" role="document" style="z-index:50000;">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button> <span aria-hidden="true"></span>
                                      <div class="modal-body"> <img class="img-responsive" src="photo_news/<?php echo $rs['news_img_name']; ?>" style="width: 100%;">


                                      </div>
                                      <div class="modal-footer">
                                          <button type="Success" class="btn btn-warning" data-dismiss="modal">Close</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div></td>

          <td align="center">
<button type="button" class="btn btn-danger" onclick="del(<?php echo $rs['news_img_id']?>)"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</button>
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
      window.location.href="delnews.php?id_news_photo="+id+"";
    }
  }
});

}
</script>
