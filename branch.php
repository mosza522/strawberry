<!doctype html>
<style media="screen">
.forum { color: white; }
.forum:hover { background-color: #F5A9F2 !important; }
</style>
<html>

<head>
  <?php
  require('inc_header.php');
  $sql_header="SELECT * FROM page
  LEFT OUTER JOIN title
  ON page.page_id=title.page_id
  LEFT OUTER JOIN keywords
  ON page.page_id=keywords.page_id
  LEFT OUTER JOIN description
  ON page.page_id=description.page_id
  WHERE page.page_name='branch'";
  $rs_header=mysql_fetch_array(mysql_query($sql_header));

   ?>
    <title><?=$rs_header['title']?></title>
    <meta name="keywords" content="<?=$rs_header['keywords']?>" />
    <meta name="description" content="<?=$rs_header['description']?>" />
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Itim|Mitr" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/font-awesome.css"> </head>
<style>
    body.modal-open {
        padding-right: 0 !important;
        overflow-y: scroll;
    }

    .pand {
        padding: 12px;
    }

    .ertety {
        font-size: 25px;
        text-align: left;
        font-family: 'Itim', cursive;
        background-color: #f8acc8;
        color: #43200c;
        width: 100%;
        margin-top: 15px;
    }

    .left-text {
        text-align: left;
        margin-top: 15px;
        font-size: 18px;
    }

    .branch-1 {
        padding: 0px 15px;
        font-size: 16px;
    }

    .branch-1 a {
        color: #43200c;
        text-decoration: none;
    }
</style>

<body class="bgabout">
    <div class="container-fluid">
        <div class="row">
            <div class="rol-sm-12">
                <?php require('inc_menu.php'); ?>
                    <div class="container">
                        <div class="row pand">
                            <div class="col-sm-12">
                                <div class="text-about wow fadeInDown"><img src="img/tent.png" class="img-responsive">&nbsp;<?=$text[$_SESSION['lang']]['branch']?></div>
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                  <ol class="carousel-indicators">
                                        <?php
                                        $sql="SELECT *
                                        FROM banner
                                        LEFT OUTER JOIN banner_type
                                        ON banner.banner_type=banner_type.banner_type_id
                                        WHERE banner_type_name_th='สาขา' AND banner_show_status='1'";
                                        $q=mysql_query($sql);
                                        $dot=mysql_num_rows($q);
                                        for ($i=0; $i < $dot; $i++) {
                                          if($i==0){?>
                                            <li data-target="#carousel-example-generic" data-slide-to="<?=$i?>" class="active"></li>
                                        <?php  }else{?>
                                            <li data-target="#carousel-example-generic" data-slide-to="<?=$i?>"></li>
                                          <?php
                                        }
                                        }
                                         ?>
                                         <!-- ปุ่มของ Banner
                                          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                          <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                        -->
                                      </ol>
                                      <div class="carousel-inner" role="listbox">
                                        <?php

                                        $i=1;
                                        while ($rs=mysql_fetch_array($q)){
                                          if($i==1){
                                            echo "<div class='item active'>";
                                            $i++;
                                          }
                                          else {
                                            echo "<div class='item'>";
                                          }
                                         ?>

                                             <img src="backoffice/image/<?=$rs['banner_file']?>" alt="..." width="100%" height="500px">
                                          </div>
                                         <?php } ?>
                                         <!-- Banner
                                         <div class="item active">
                                             <img src="img/sdf1.png" alt="..." width="100%" height="500px">
                                          </div>
                                          <div class="item">
                                            <img src="img/sdf2.png" alt="..." width="100%" height="500px">
                                          </div>
                                          <div class="item">
                                            <img src="img/sdf3.png" width="100%" height="500px">
                                          </div>
                                        -->
                                      </div>
                                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                                </div>
                                <div class="ertety"><?=$text[$_SESSION['lang']]['branch_local']?> </div>
                                <div class="row left-text">

                                  <?php

                                  $sql_region="SELECT DISTINCT {$text[$_SESSION['lang']]['branch_region_name']} FROM branch
                                  LEFT OUTER JOIN branch_region
                                  ON branch.branch_region=branch_region.branch_region_id
                                  WHERE branch_location='Local'
                                  ORDER BY branch_region_id";
                                  $q_region=mysql_query($sql_region);
                                  while($rs_region=mysql_fetch_array($q_region)){?>
                                    <div class="col-sm-2"><?=$rs_region[$text[$_SESSION['lang']]['branch_region_name']]?></div>

                                  <?php
                                }
                                ?>
                                </div>
                                <div class="row">
                                <div class="col-sm-2 col-lg-2 col-md-2">
                                <?php
                                $branch="";
                                $sql_branch="SELECT * FROM branch
                                WHERE branch_location='Local'
                                ORDER BY branch_region";
                                $q_branch=mysql_query($sql_branch);
                                $num=mysql_num_rows($q_branch);
                                $check_start=0;
                                while($rs=mysql_fetch_array($q_branch)){
                                  if($num==0){
                                    echo "</div> </div>";
                                  }
                                  if($branch!=$rs['branch_region'] and $check_start==1){?>
                                    </div>
                                    <div class="col-sm-2 col-lg-2 col-md-2">
                                    <?php $branch=$rs['branch_region']; $check_start=0;
                                  }
                                // else if($branch!=$rs['branch_region']){
                                //   echo "</div>";
                                // }
                                $branch=$rs['branch_region'];
                                $check_start=1;
                                  if($num!=0){?>
                                  <div class="branch-1">
                                      <div class="bordol-1">
                                          <div class="row"> <a href="" class="forum" data-toggle="modal" data-target="#myModal<?=$rs['branch_id']?>"><?=$rs[$text[$_SESSION['lang']]['branch_name']]?> </a> </div>
                                          <div class="modal fade" id="myModal<?=$rs['branch_id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;">
                                              <div class="modal-dialog" role="document" style="z-index:50000;">
                                                  <div class="modal-content">
                                                      <div class="modal-header">
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button> <span aria-hidden="true"></span>
                                                          <div class="modal-body"> <img class="img-responsive" src="backoffice/image/<?=$rs['branch_img']?>" style="width: 100%;">
                                                              <p><?=$rs[$text[$_SESSION['lang']]['branch_name']]?> </p>
                                                              <div class="text-pro-1"> <?=$rs[$text[$_SESSION['lang']]['branch_detail']]?>
                                                                </div>
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
                                <?php $num--;
                              }
                               }
                                 ?>
<!--
                                <div class="row">
                                    <div class="col-sm-3 col-lg-3 col-md-3">
                                        <div class="branch-1">
                                            <div class="bordol-1">
                                                <div class="row"> <a href="" data-toggle="modal" data-target="#myModal1">สาขาเชียงใหม่ กาดรวมโชค  ล็อค E7 </a> </div>
                                                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;">
                                                    <div class="modal-dialog" role="document" style="z-index:50000;">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button> <span aria-hidden="true"></span>
                                                                <div class="modal-body"> <img class="img-responsive" src="img/mab-1.png" style="width: 100%;">
                                                                    <p>สาขาเชียงใหม่ กาดรวมโชค ล็อค E7 </p>
                                                                    <div class="text-pro-1"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> ชื่อ : คุณสุกานดา เอื้อสว่างพร
                                                                        <br> <i class="fa fa-hand-o-right" aria-hidden="true"></i> ที่อยู่ : กาดรวมโชค ล็อค E7 204 ม.6 ต.ฟ้าฮ่าม อ.เมืองเชียงใหม่ จังหวัดเชียงใหม่
                                                                        <br> <i class="fa fa-hand-o-right" aria-hidden="true"></i> เบอร์โทรศัพท์ : 092-2729118 </div>
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
                                    </div>
                                    <div class="col-sm-3 col-lg-3 col-md-3">
                                        <div class="branch-1">
                                            <div class="bordol-1">
                                                <div class="row"> <a href="" data-toggle="modal" data-target="#myModal2">สาขามหาสารคาม </a> </div>
                                                <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;">
                                                    <div class="modal-dialog" role="document" style="z-index:50000;">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button> <span aria-hidden="true"></span>
                                                                <div class="modal-body"> <img class="img-responsive" src="img/mab-1.png" style="width: 100%;">
                                                                    <p>สาขามหาสารคาม </p>
                                                                    <div class="text-pro-1"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> ชื่อ : คุณอ้อย
                                                                        <br> <i class="fa fa-hand-o-right" aria-hidden="true"></i> ที่อยู่ : ถนน หน้าราชภัฏ จ.มหาสารคาม( เศรษฐีอีสาน )
                                                                        <br> <i class="fa fa-hand-o-right" aria-hidden="true"></i> เบอร์โทรศัพท์ : 087-9683310 </div>
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
                                        <div class="branch-1">
                                            <div class="bordol-1">
                                                <div class="row"> <a href="" data-toggle="modal" data-target="#myModal5">สาขาสกลนคร </a> </div>
                                                <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;">
                                                    <div class="modal-dialog" role="document" style="z-index:50000;">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button> <span aria-hidden="true"></span>
                                                                <div class="modal-body"> <img class="img-responsive" src="img/mab-1.png" style="width: 100%;">
                                                                    <p>สาขาสกลนคร </p>
                                                                    <div class="text-pro-1"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> ชื่อ : คุณน้อย
                                                                        <br> <i class="fa fa-hand-o-right" aria-hidden="true"></i> ที่อยู่ : 308/1 ถ.นิตโย อ. เมือง จ. สกลนคร 4700
                                                                        <br> <i class="fa fa-hand-o-right" aria-hidden="true"></i> เบอร์โทรศัพท์ : 080-4202838 </div>
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
                                    </div>
                                    <div class="col-sm-3 col-lg-3 col-md-3">
                                        <div class="branch-1">
                                            <div class="bordol-1">
                                                <div class="row"> <a href="" data-toggle="modal" data-target="#myModal3">สาขากาญจนบุรี </a> </div>
                                                <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;">
                                                    <div class="modal-dialog" role="document" style="z-index:50000;">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button> <span aria-hidden="true"></span>
                                                                <div class="modal-body"> <img class="img-responsive" src="img/mab-1.png" style="width: 100%;">
                                                                    <p>สาขากาญจนบุรี </p>
                                                                    <div class="text-pro-1"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> ชื่อ : คุณนกหวีด
                                                                        <br> <i class="fa fa-hand-o-right" aria-hidden="true"></i> ที่อยู่ : 160/178 ถนนแสงชูโต อำเภอเมือง จังหวัดกาญจนบุรี
                                                                        <br> <i class="fa fa-hand-o-right" aria-hidden="true"></i> เบอร์โทรศัพท์ : 089-4588880 </div>
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
                                        <div class="branch-1">
                                            <div class="bordol-1">
                                                <div class="row"> <a href="" data-toggle="modal" data-target="#myModal4">สาขาหนองจอก </a> </div>
                                                <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;">
                                                    <div class="modal-dialog" role="document" style="z-index:50000;">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button> <span aria-hidden="true"></span>
                                                                <div class="modal-body"> <img class="img-responsive" src="img/mab-1.png" style="width: 100%;">
                                                                    <p>สาขาหนองจอก</p>
                                                                    <div class="text-pro-1"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> ชื่อ : คุณฮาวา
                                                                        <br> <i class="fa fa-hand-o-right" aria-hidden="true"></i> ที่อยู่ : 62 ถ.เลียบวารี แขวงโคกแปด กรุงเทพฯ 10530
                                                                        <br> <i class="fa fa-hand-o-right" aria-hidden="true"></i> เบอร์โทรศัพท์ : 083-2539916 </div>
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
                                    </div>
                                    <div class="col-sm-3 col-lg-3 col-md-3">
                                        <div class="branch-1">
                                            <div class="bordol-1">
                                                <div class="row"> <a href="" data-toggle="modal" data-target="#myModal6">สาขา อ.หาดใหญ่ จ.สงขลา </a> </div>
                                                <div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;">
                                                    <div class="modal-dialog" role="document" style="z-index:50000;">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button> <span aria-hidden="true"></span>
                                                                <div class="modal-body"> <img class="img-responsive" src="img/mab-1.png" style="width: 100%;">
                                                                    <p>สาขา อ.หาดใหญ่ จ.สงขลา </p>
                                                                    <div class="text-pro-1"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> ชื่อ : คุณฐิติมา ไทยประสบ
                                                                        <br> <i class="fa fa-hand-o-right" aria-hidden="true"></i> ที่อยู่ : 22 ถนนชีอุทิศ (ใกล้แยกโรงแรมราโด้) ต.หาดใหญ่ อ.หาดใหญ่ จ.สงขลา
                                                                        <br> <i class="fa fa-hand-o-right" aria-hidden="true"></i> เบอร์โทรศัพท์ : 089-7351055 </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="Success" class="btn btn-warning" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->
                                    </div>
                                </div>

                                <div class="ertety"> <?=$text[$_SESSION['lang']]['branch_foreign']?> </div>
                                <div class="row ma-top">
                                  <?php
                                  $num_foreign=6;
                                  $sql_branch_foreign="SELECT * FROM branch
                                  WHERE branch_location='Foreign'
                                  ORDER BY branch_region";
                                  $q_branch_foreign=mysql_query($sql_branch_foreign);
                                  $rows=mysql_num_rows($q_branch_foreign);
                                  while($rs_foreign=mysql_fetch_array($q_branch_foreign)){
                                    if($num_foreign!=0){
                                    ?>
                                    <div class="col-sm-2 col-lg-2 col-md-2">
                                      <div class="branch-1">
                                          <div class="bordol-1">
                                              <div class="row"> <a href="" class="forum" data-toggle="modal" data-target="#myModal<?=$rs_foreign['branch_id']?>"><?=$rs_foreign[$text[$_SESSION['lang']]['branch_name']]?> </a> </div>
                                              <div class="modal fade" id="myModal<?=$rs_foreign['branch_id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;">
                                                  <div class="modal-dialog" role="document" style="z-index:50000;">
                                                      <div class="modal-content">
                                                          <div class="modal-header">
                                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button> <span aria-hidden="true"></span>
                                                              <div class="modal-body"> <img class="img-responsive" src="backoffice/image/<?=$rs_foreign['branch_img']?>" style="width: 100%;">
                                                                  <p><?=$rs_foreign[$text[$_SESSION['lang']]['branch_name']]?> </p>
                                                                  <div class="text-pro-1"> <?=$rs_foreign[$text[$_SESSION['lang']]['branch_detail']]?>
                                                                    </div>
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
                                    </div>
                                  <?php
                                $num_foreign--; $rows--;
                              }else {?>
                                </div>
                                  <div class="row ma-top">
                              <?php
                            } if($rows==0){
                              echo "</div>";
                            }
                                  }
                                  ?>
                                  <!--  <div class="col-sm-3 col-lg-3 col-md-3">
                                        <div class="branch-1">
                                            <div class="bordol-1">
                                                <div class="row"> <a href="" data-toggle="modal" data-target="#myModal7">สาขาสปป.ลาว-เวียงจันทร์ </a> </div>
                                                <div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;">
                                                    <div class="modal-dialog" role="document" style="z-index:50000;">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button> <span aria-hidden="true"></span>
                                                                <div class="modal-body"> <img class="img-responsive" src="img/mab-1.png" style="width: 100%;">
                                                                    <p>สาขาสปป.ลาว-เวียงจันทร์ </p>
                                                                    <div class="text-pro-1"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> ชื่อ : คุณ อุเทน มูลลุน
                                                                        <br> <i class="fa fa-hand-o-right" aria-hidden="true"></i> ที่อยู่ : สปป.ลาว
                                                                        <br> <i class="fa fa-hand-o-right" aria-hidden="true"></i> เบอร์โทรศัพท์ : 082-3236544,+8562022999232 </div>
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
                                    </div>
                                  </div>-->
                                <div class="col-sm-3 col-lg-3 col-md-3"></div>
                                <div class="col-sm-3 col-lg-3 col-md-3"></div>
                                <div class="col-sm-3 col-lg-3 col-md-3"></div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php require('inc_footer.php'); ?>
        <script>
            $(document).ready(function () {
                $(".dropdown ").hover(function () {
                    $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideDown("400 ");
                    $(this).toggleClass('open');
                }, function () {
                    $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideUp("400 ");
                    $(this).toggleClass('open');
                });
            });
        </script>
        <script>
            $(document).ready(function () {
                $('#media').carousel({
                    pause: true
                    , interval: false
                , });
            });
        </script>
        <script type="text/javascript ">
            // Select all links with hashes
            $('a[href*="# "]')
                // Remove links that don't actually link to anything
                .not('[href="# "]').not('[href="#0 "]').click(function (event) {
                    // On-page links
                    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                        // Figure out element to scroll to
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                        // Does a scroll target exist?
                        if (target.length) {
                            // Only prevent default if animation is actually gonna happen
                            event.preventDefault();
                            $('html, body').animate({
                                scrollTop: target.offset().top
                            }, 0.1, function () {
                                // Callback after animation
                                // Must change focus!
                                var $target = $(target);
                                $target.focus();
                                if ($target.is(":focus ")) { // Checking if the target was focused
                                    return false;
                                }
                                else {
                                    $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                                    $target.focus(); // Set focus again
                                };
                            });
                        }
                    }
                });
        </script>
        <script src="js/jquery-2.1.4.js ">
        </script>
        <script src="js/jquery.mobile.custom.min.js "></script>
        <script src="js/main.js "></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjfnshB95ty4-Zv80yfFO9neCUj4l374E"></script>
</body>

</html>
