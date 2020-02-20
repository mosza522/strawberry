<!doctype html>
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
  WHERE page.page_name='promotion'";
  $rs_header=mysql_fetch_array(mysql_query($sql_header));

   ?>
    <title><?=$rs_header['title']?></title>
    <meta name="keywords" content="<?=$rs_header['keywords']?>" />
    <meta name="description" content="<?=$rs_header['description']?>" />
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">

        <link href="https://fonts.googleapis.com/css?family=Itim|Mitr" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/font-awesome.css"> </head>
<?php
  require('style_promotion.html');
 ?>

<body class="bgabout">
    <div class="container-fluid">
        <div class="row">
            <div class="rol-sm-12">
                <?php require('inc_menu.php'); ?>
                    <div class="container">
                        <div class="row pand">
                            <div class="col-sm-12">
                                <div class="text-about wow fadeInDown"><img src="img/gift.png" class="img-responsive">&nbsp;<?=$text[$_SESSION['lang']]['promotion']?></div>
                                <div class="retr wow fadeInRight">
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                      <?php
                                      $sql="SELECT *
                                      FROM banner
                                      LEFT OUTER JOIN banner_type
                                      ON banner.banner_type=banner_type.banner_type_id
                                      WHERE banner_type_name_th='โปรโมชั่น' AND banner_show_status='1'";
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
                                </div>
                            </div>
                        </div>

                        <div class="toi wow fadeInLeft">
                          <?php
                          $sql="SELECT * FROM promotion";
                          $q=mysql_query($sql);
                          $num=mysql_num_rows($q);
                          $check=3;
                          if(mysql_num_rows($q)>0){
                            while ($rs=mysql_fetch_array($q)) {
                              if($check==3){
                                echo "<div class=\"row matop \">";
                                echo "<div class=\"col-sm-12 imgpromotion2 nopan\">";
                                $check--;
                              }
                              else if ($check==0){
                                echo "</div> </div>";
                                $check=3;
                              }
                              else if($num==0){
                                echo "</div> </div>";
                              }
                              if ($num!=0) {
                                ?>
                                <div class="col-sm-4">
                                    <div class="matop"><img src="backoffice/image/<?=$rs['promotion_img']?>" class="img-responsive"></div>
                                    <div class="textpro-1"><?=$rs[$text[$_SESSION['lang']]['promotion_title']]?>
                                      <br />
                                      <br />

                                      <a href="" class="btn btn-franchis" data-toggle="modal" data-target="#myModal<?=$rs['promotion_id']?>">รายละเอียด </a> </div>
                                          <div class="modal fade" id="myModal<?=$rs['promotion_id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;">
                                              <div class="modal-dialog" role="document" style="z-index:50000;">
                                                  <div class="modal-content">
                                                      <div class="modal-header">
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button> <span aria-hidden="true"></span>
                                                          <div class="modal-body"> <img class="img-responsive" src="backoffice/image/<?=$rs['promotion_img']?>" style="width: 100%;">
                                                              <h2><p><?=$rs[$text[$_SESSION['lang']]['promotion_title']]?> </p></h2>
                                                              <div class="text-pro-1"> <font size="6"><?=$rs[$text[$_SESSION['lang']]['promotion_detail']]?></font>
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

                              <?php
                              $num--;
                            }

                            }
                          }else{
                           ?>
                           <div class="row matop ">
                                <div class="col-sm-12 imgpromotion2 nopan">
                                    <div class="col-sm-4">
                                        <div class="matop"><img src="img/sd5.png" class="img-responsive"></div>
                                        <div class="textpro-1">ช็อปปิ้งร้านทุกอย่าง 10 บาท
                                            <br>strawbreeyclub
                                            <br>
                                            <button type="Success" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-4"><img src="img/sd1.png" class="img-responsive">
                                        <div class="textpro-1">ช็อปปิ้งร้านทุกอย่าง 10 บาท
                                            <br>strawbreeyclub
                                            <br>
                                            <button type="Success" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-4"><img src="img/sd3.png" class="img-responsive">
                                        <div class="textpro-1">ช็อปปิ้งร้านทุกอย่าง 10 บาท
                                            <br>strawbreeyclub
                                            <br>
                                            <button type="Success" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row matop ">
                                <div class="col-sm-12 imgpromotion2 nopan">
                                    <div class="col-sm-4">
                                        <div class="matop"><img src="img/sd4.png" class="img-responsive"></div>
                                        <div class="textpro-1">ช็อปปิ้งร้านทุกอย่าง 10 บาท
                                            <br>strawbreeyclub
                                            <br>
                                            <button type="Success" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-4"><img src="img/sd5.png" class="img-responsive">
                                        <div class="textpro-1">ช็อปปิ้งร้านทุกอย่าง 10 บาท
                                            <br>strawbreeyclub
                                            <br>
                                            <button type="Success" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-4"><img src="img/sd1.png" class="img-responsive">
                                        <div class="textpro-1">ช็อปปิ้งร้านทุกอย่าง 10 บาท
                                            <br>strawbreeyclub
                                            <br>
                                            <button type="Success" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      <?php } ?>
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
    <?php require('inc_footer.php'); ?>
        <script>
            $(document).ready(function () {
                $(".dropdown").hover(function () {
                    $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideDown("400");
                    $(this).toggleClass('open');
                }, function () {
                    $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideUp("400");
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
        <script type="text/javascript">
            // Select all links with hashes
            $('a[href*="#"]')
                // Remove links that don't actually link to anything
                .not('[href="#"]').not('[href="#0"]').click(function (event) {
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
                                if ($target.is(":focus")) { // Checking if the target was focused
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
        <script src="js/jquery-2.1.4.js">
        </script>
        <script src="js/jquery.mobile.custom.min.js"></script>
        <script src="js/main.js"></script>
</body>

</html>
