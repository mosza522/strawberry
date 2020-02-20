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
    <h4>Description</h4>
</div>
        <div class="x_panel">
         <?php
         $sql="SELECT description_id FROM description";
         $num=mysql_num_rows(mysql_query($sql));
         $sql_2="SELECT page_id FROM page";
         $num2=mysql_num_rows(mysql_query($sql_2));
         if($num<$num2){
          ?>
          <a href="header_management.php?page=adddescription"><button type="button" class="btn btn-primary"><i class="fa fa-plus-square" aria-hidden="true"></i> Add Description</button></a>
          <?php
        }
           ?>


          <div class="x_content">


  <iframe name="up_iframe" width="0" height="0" frameborder="0"></iframe>
  <table id="example" class="table">
  <thead>
    <tr>
      <th class="text-center" style="min-width: 40px;">No.</th>
<th class="text-center" style="min-width: 100px;">Page Name</th>
<th class="text-center" style="min-width: 100px;">Description</th>
<th class="text-center" style="min-width: 100px;">Action</th>
</tr>
  </thead>
  <tbody><?php
  $i=1;
  $sql="SELECT * FROM description
  LEFT OUTER JOIN page
  ON description.page_id=page.page_id ORDER BY page.page_id ASC";
  $q=mysql_query($sql);
  while ($rs=mysql_fetch_array($q)) {?>
    <tr>
      <td><?=$i; $i++; ?></td>
      <td><?=$rs['page_name']?></td>
      <td><?=$rs['description']?></td>
      <td align="center"><a href="edit_description.php?id=<?php echo $rs['description_id']?>"><button type="button" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>  Edit</button></a>
      <button type="button" class="btn btn-danger" onclick="del(<?php echo $rs['description_id']?>)"><i class="fa fa-trash-o" aria-hidden="true"></i>Delete</button>
      </td>

    </tr>

<?php  }
   ?>

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
        window.location.href="delpage.php?id_description="+id+"";
      }
    }
  });

}
  </script>
