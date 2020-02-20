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
  WHERE page.page_name='news'";
  $rs_header=mysql_fetch_array(mysql_query($sql_header));

   ?>
    <title><?=$rs_header['title']?></title>
    <meta name="keywords" content="<?=$rs_header['keywords']?>" />
    <meta name="description" content="<?=$rs_header['description']?>" />
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">

        <link href="https://fonts.googleapis.com/css?family=Itim|Mitr" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/font-awesome.css"> </head>
<?php require('style_message.html'); ?>
<?php
date_default_timezone_set('Asia/Bangkok');
function DateThai($strDate)
{
  $strYear = date("Y",strtotime($strDate))+543;
  $strMonth= date("n",strtotime($strDate));
  $strDay= date("j",strtotime($strDate));
  $strHour= date("H",strtotime($strDate));
  $strMinute= date("i",strtotime($strDate));
  $strSeconds= date("s",strtotime($strDate));
  $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
  $strMonthThai=$strMonthCut[$strMonth];

  if($strDay==date("d") and number_format($strMonth)==number_format(date("m")) and $strYear==date("Y")+543 ){
    return "วันนี้  $strHour:$strMinute น.";
  }
  else if($strDay==(date("d")-1) and number_format($strMonth)==number_format(date("m")) and $strYear==date("Y")+543 ){
    return "เมื่อวาน  $strHour:$strMinute น.";

  }else{
  return "$strDay $strMonthThai $strYear $strHour:$strMinute น.";
  //return "$strDay $strMonthThai $strYear, $strHour:$strMinute";
       }
}

 ?>
<body class="bgabout">
    <div class="container-fluid">
        <div class="row">
            <div class="rol-sm-12">
                <?php require('inc_menu.php'); ?>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="text-about wow fadeInDown"><img src="img/magnifying-glass.png" class="img-responsive">&nbsp;<?=$text[$_SESSION['lang']]['news']?></div>
                                <div class="retr wow fadeInRight">
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                      <?php
                                      $sql="SELECT *
                                      FROM banner
                                      LEFT OUTER JOIN banner_type
                                      ON banner.banner_type=banner_type.banner_type_id
                                      WHERE banner_type_name_th='ข่าวสาร' AND banner_show_status='1'";
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
                          if(isset($_GET['tag'])){
                            $sql="SELECT * FROM news
                            LEFT OUTER JOIN news_tag
                            ON news.news_tag=news_tag.news_tag_id
                            WHERE news_tag_id={$_GET['tag']} and news_display_status='1'
                            ORDER BY news_date DESC";
                            $rs_head=mysql_fetch_array(mysql_query($sql));
                            echo "<font size=\"8\">".$text[$_SESSION['lang']]['last news']."</font>
                            <br />
                            <a class=\"head\"href=\"message.php\"><font size=\"4\">".$text[$_SESSION['lang']]['last news']."</font></a> >
                            ". $rs_head['news_tag_name_th']."</font>";
                          }else{
                            $sql="SELECT * FROM news
                            LEFT OUTER JOIN news_tag
                            ON news.news_tag=news_tag.news_tag_id
                            WHERE news_display_status='1'
                            ORDER BY news_date DESC";
                            echo "<font size=\"8\">".$text[$_SESSION['lang']]['last news']."</font>";
                          }
                           ?>

                          <hr>
                          <?php


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
                                    <div class="matop"><a href="readnews.php?news=<?=$rs['news_id']?>"><img src="backoffice/image/<?=$rs['news_img_cover']?>" class="img-responsive"></a></div>
                                    <div class="text-topic"><a class="topic" href="readnews.php?news=<?=$rs['news_id']?>"><?=$rs['news_topic']?></a></font></div>
                                      <div class="text-title">
                                        <br><?=$rs['news_title']?>
                                        <br>

                                        <a href="message.php?tag=<?=$rs['news_tag']?>" class="tag"><font color="#f8acc8" size="5" >ข่าว<?=$rs['news_tag_name_th']?></font></a>
                                          <font style="padding-left:1em" ><?=DateThai($rs['news_date'])?></font>


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
                                    <div class="col-sm-4"></a>
                                        <div class="matop"><img src="img/sd5.png" class="img-responsive"></div>
                                        <div class="textpro-1">ช็อปปิ้งร้านทุกอย่าง 10 บาท
                                            <br>strawbreeyclub
                                            <br>
                                            <button type="Success" class="btn btn-franchis">Submit</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-4"><img src="img/sd1.png" class="img-responsive">
                                        <div class="textpro-1">ช็อปปิ้งร้านทุกอย่าง 10 บาท
                                            <br>strawbreeyclub
                                            <br>
                                            <button type="Success" class="btn btn-franchis">Submit</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-4"><img src="img/sd3.png" class="img-responsive">
                                        <div class="textpro-1">ช็อปปิ้งร้านทุกอย่าง 10 บาท
                                            <br>strawbreeyclub
                                            <br>
                                            <button type="Success" class="btn btn-franchis">Submit</button>
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
                                            <button type="Success" class="btn btn-franchis">Submit</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-4"><img src="img/sd5.png" class="img-responsive">
                                        <div class="textpro-1">ช็อปปิ้งร้านทุกอย่าง 10 บาท
                                            <br>strawbreeyclub
                                            <br>
                                            <button type="Success" class="btn btn-franchis">Submit</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-4"><img src="img/sd1.png" class="img-responsive">
                                        <div class="textpro-1">ช็อปปิ้งร้านทุกอย่าง 10 บาท
                                            <br>strawbreeyclub
                                            <br>
                                            <button type="Success" class="btn btn-franchis">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          <?php } ?>
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
