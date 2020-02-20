  <script type="text/javascript">
    function change_content_th(){
      var editorTextth1 = CKEDITOR.instances.content1th.getData();
      if(editorTextth1==""){
      document.getElementById('content_preview_1_th').innerHTML="Content 1";
    }else{
      document.getElementById('content_preview_1_th').innerHTML=editorTextth1;
    }
      var editorTextth2 = CKEDITOR.instances.content2th.getData();
      if(editorTextth2==""){
        document.getElementById('content_preview_2_th').innerHTML="Content 2";
      }else{
      document.getElementById('content_preview_2_th').innerHTML=editorTextth2;
    }
    }

    function change_content_en(){
      var editorTexten1 = CKEDITOR.instances.content1en.getData();
      if(editorTexten1==""){
        document.getElementById('content_preview_1_en').innerHTML="Content 1";
      }else{
        document.getElementById('content_preview_1_en').innerHTML=editorTexten1;
      }
      var editorTexten2 = CKEDITOR.instances.content2en.getData();
      if(editorTexten2==""){
        document.getElementById('content_preview_2_en').innerHTML="Content 2";
      }else{
        document.getElementById('content_preview_2_en').innerHTML=editorTexten2;
      }

    }
  </script>
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
						<h4>Content > Content Index</a></h4>
			  </div>
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Content Index</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form  class="" method="post" action="content/add.php">
                      <input type="hidden" name="content_page" value="1">
                                 <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="content1th">Content 1 th<span class="required">*</span>
                                    </label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                      <textarea name="content_th1" rows="8" cols="80" class="form-control ckeditor" id="content1th"></textarea>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="content2th">Content 2 th<span class="required">*</span>
                                     </label>
                                     <div class="col-md-9 col-sm-9 col-xs-12">
                                       <textarea name="content_th2" rows="8" cols="80" class="form-control ckeditor" id="content2th"></textarea>
                                     </div>
                                   </div>
                                  <div class="form-group">
                                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="content1en">Content 1 en<span class="required">*</span>
                                     </label>
                                     <div class="col-md-9 col-sm-9 col-xs-12">
                                       <textarea name="content_en1" rows="8" cols="80" class="form-control ckeditor" id="content1en"></textarea>
                                     </div>
                                   </div>

                                    <div class="form-group">
                                       <label class="control-label col-md-3 col-sm-3 col-xs-12" for="content2en">Content 2 en<span class="required">*</span>
                                       </label>
                                       <div class="col-md-9 col-sm-9 col-xs-12">
                                         <textarea name="content_en2" rows="8" cols="80" class="form-control ckeditor" id="content2en"></textarea>
                                       </div>
                                     </div>
                                  </div>
                                  <div class="ln_solid"></div>
                                  <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                                          <div class="bordol-1">
                                              <a href="" data-toggle="modal" data-target="#myModal1"><button type="button" class="btn btn-info" onclick="change_content_th()"><i class="fa fa-eye" aria-hidden="true"></i>Preview TH</button></a>
                                              <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;">
                                                  <div class="modal-dialog" role="document" style="width:83%;margin-left:17%" >
                                                      <div class="modal-content">
                                                          <div class="modal-header">
                                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button> <span aria-hidden="true"></span>
                                                              <div class="modal-body">
                                                                <table background="../img/firstpage.png"  height="850" width="100%" align="center">

                                                                  <tr height="440" align="center">
                                                                    <td> <h1><p id="content_preview_1_th">
                                                                      content1
                                                                    </p></h1></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td height="40" ></td>
                                                                  </tr>
                                                                  <tr align="center">
                                                                    <td><h2><p id="content_preview_2_th">
                                                                      content2
                                                                    </p></h2></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td></td>
                                                                  </tr>
                                                                </table>

                                                              </div>
                                                              <div class="modal-footer">
                                                                  <button type="Success" class="btn btn-warning" data-dismiss="modal">Close</button>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>




                                              <a href="" data-toggle="modal" data-target="#myModal2"><button type="button" class="btn btn-info" onclick="change_content_en()"><i class="fa fa-eye" aria-hidden="true"></i>Preview EN</button></a>
                                              <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;">
                                                  <div class="modal-dialog" role="document" style="width:83%;margin-left:17%" >
                                                      <div class="modal-content">
                                                          <div class="modal-header">
                                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button> <span aria-hidden="true"></span>
                                                              <div class="modal-body">
                                                                <table background="../img/firstpage.png"  height="850" width="100%" align="center">

                                                                  <tr height="440" align="center">
                                                                    <td> <h1><p id="content_preview_1_en">
                                                                      content1
                                                                    </p></h1></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td height="40" ></td>
                                                                  </tr>
                                                                  <tr align="center">
                                                                    <td><h2><p id="content_preview_2_en">
                                                                      content2
                                                                    </p></h2></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td></td>
                                                                  </tr>
                                                                </table>

                                                              </div>
                                                              <div class="modal-footer">
                                                                  <button type="Success" class="btn btn-warning" data-dismiss="modal">Close</button>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <button type="button" onclick="del()" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true" ></i></button>

                                              </div>

            						                    <button type="submit" class="btn btn-success">Submit</button>
                                      <button type="reset" class="btn btn-primary" onclick="location.href='content.php?page=home'">Back</button>
                                    </div>
                                  </div>
                                </form>

					<iframe name="up_iframe" width="0" height="0" frameborder="0"></iframe>
          <table background="../img/firstpage.png"  height="850" width="1300" align="center">
            <?php $sql="SELECT * FROM content WHERE content_page='1'";
            $num=mysql_num_rows(mysql_query($sql));
            $rs=mysql_fetch_array(mysql_query($sql));

            $sql_2="SELECT * FROM content WHERE content_page='1' AND content_note='content2'";
            $rs_2=mysql_fetch_array(mysql_query($sql_2));
            ?>
            <tr height="440" align="center">
              <td> <h1><p id="content_preview_1_th">
                <?php
                if($num>0){
                  echo $rs['content_th'];
                }else{
                  echo "นำธุรกิจแฟรนไชส์ร้าน \"Strawberry Club\"";
                }
                 ?>
                </p></h1></td>
            </tr>
            <tr>
              <td height="40" ></td>
            </tr>
            <tr align="center">
              <td><h2><p id="content_preview_2_th">
                <?php
                if($num>0){
                  echo $rs_2['content_th'];
                }else{
                  echo "สู่ความเป็นเลิศด้านค้าปลีก ทุกชิ้นในราคา 10 บาท";
                }
                 ?>
              </p></h2></td>
            </tr>
            <tr>
              <td></td>
            </tr>
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
                window.location.href="delcontent.php?content=1";
              }
            }
          });

        }
          </script>
