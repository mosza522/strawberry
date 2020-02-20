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
                <h2>Activity Photo Album</h2>
                <div class="clearfix"></div>
              </div>
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_content">
       <a href="activity.php?page=add_activity_album"><button type="button" class="btn btn-primary"><i class="fa fa-plus-square" aria-hidden="true"></i> Activity Photo album </button></a>
       <table id="example" class="table">
       <thead>
         <tr>
           <th class="text-center" style="min-width: 40px;">No.</th>
<th class="text-center" style="max-width: 100px;">Activity Topic</th>
<th class="text-center" style="min-width: 100px;">Activity Img</th>
<th class="text-center" style="min-width: 100px;">Display Status</th>
<!-- <th class="text-center">Sort</th>-->
           <th class="text-center" style="min-width: 100px;">Action</th>
         </tr>
       </thead>

       <tbody>
         <?php
         $i=1;
         $sql_topic="SELECT * FROM activity_img
         LEFT OUTER JOIN activity
         ON activity_img.activity_id=activity.activity_id
         GROUP BY activity_img.activity_id
         ";
         $q_topic=mysql_query($sql_topic);
        while ($rs_topic=mysql_fetch_assoc($q_topic)) {
          $sql="SELECT * FROM activity_img
          LEFT OUTER JOIN activity
          ON activity_img.activity_id=activity.activity_id
          WHERE activity_img.activity_id={$rs_topic['activity_id']}";
          if(!$q=mysql_query($sql))echo mysql_error();

          ?>
        <tr>
          <td><?php echo $i."."; ?></td>
          <td><?php echo $rs_topic['activity_topic']; ?></td>
          <td>
            <a href="activity/light_box.php?id_activity=<?=$rs_topic['activity_id']?>" class="btn btn-primary">ดูทั้งหมด</a>
          </td>
          <td>
            <?php
            if($rs_topic['activity_img_display_status']==1){
             ?><a href="change_show_status.php?activity_album_disappear=<?php echo $rs_topic['activity_id']?>"><button type="button" class="btn btn-info btn-block"><i class="fa fa-eye-slash" aria-hidden="true"></i>  Disappear</button></a>
           <?php } else {
             ?><a href="change_show_status.php?activity_album_appear=<?php echo $rs_topic['activity_id']?>"><button type="button" class="btn btn-success btn-block"><i class="fa fa-eye" aria-hidden="true"></i>  Appear</button></a>
             <?php
           } ?>
           </td>
          <td align="center">
<a href="activity.php?page=edit_activity_album&id=<?=$rs_topic['activity_id']?>"><button type="button" class="btn btn-warning "><i class="fa fa-pencil-square-o" aria-hidden="true"></i>  Edit</button></a>
<button type="button" class="btn btn-danger" onclick="del(<?php echo $rs_topic['activity_id']?>)"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</button>
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
      window.location.href="delactivity.php?id_activity_album="+id+"";
    }
  }
});

}
</script>
