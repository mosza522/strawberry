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
  WHERE page.page_name='aboutme'";
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
    .img-asd img {
        position: absolute;
        z-index: 99;
        right: 22px;
        width: 29%;
        margin-top: -215px;
    }

    .pand {
        padding: 12px;
    }

     @media (max-width: 767px) {
        .img-asd img {
            margin-top: 50px;
            right: 0;
         }
    }
    @media (min-width: 768px) and (max-width: 991px) {
         .img-asd img {
            margin-top: -123px;
            right: 0;
         }
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
                                <div class="text-about wow fadeInDown"><img src="img/books.png" class="img-responsive">&nbsp;<?=$text[$_SESSION['lang']]['about']?></div>
                                <div class="retr wow fadeInRight">
                                    <div id="carousel-example-generic " class="carousel slide" data-ride="carousel">
                                      <ol class="carousel-indicators">
                                        <?php
                                        $sql="SELECT *
                                        FROM banner
                                        LEFT OUTER JOIN banner_type
                                        ON banner.banner_type=banner_type.banner_type_id
                                        WHERE banner_type_name_th='เกี่ยวกับเรา' AND banner_show_status='1'";
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
                                <div class="toi wow fadeInLeft">
                                  <div class="text-1">
                                <?php
                                $sql="SELECT * FROM content WHERE content_page='2'";
                                $rs=mysql_fetch_array(mysql_query($sql));
                                $num_content=mysql_num_rows(mysql_query($sql));
                                if($num_content>0){?>

                                    <?=$rs[$text[$_SESSION['lang']]['content']];?>
                                  </div>
                                  </div>
                                <?php
                              }
                                else{
                                ?>

                                    <div class="text-1"> จำหน่ายแฟรนไชส์ แบรนด์ strawbreey club สินค้าน่ารักทุกชิ้น 10 บาท </div>
                                    <div class="text-2">สินค้า</div>
                                    <div class="text-3"> สินค้าเบ็ดเตล็ดทุกอย่าง 10 บาท </div>
                                    <div class="text-4"> ประวัติบริษัท </div>
                                    <div class="text-5"> ผู้ก่อตั้งบริษัท ไลฟ์เวย์อินเตอร์เทรด จำกัด (ร้าน Strawberry Club) คือคุณณัทกร ชัยพันธ์ และคุณปภาดา ชัยพันธ์ ซึ่งเราเป็นแบรนด์สินค้าน่ารักๆรายแรกของเมืองไทย จำหน่ายสินค้าน่ารักๆ ตาม concept “ สินค้าน่ารัก ราคาต้องรัก” สินค้าทุกรายการเราคัดสรรและจำหน่ายเพียงราคาเดียวเท่านั้น เพียง 10 บาททุกๆรายการเราเลือกสินค้าน่ารักๆและคุณภาพดี ตลอดระยะเวลา 18 ปี ทำให้เราสร้างรอยยิ้มให้กับทุกๆคนได้กับสินค้าน่ารัก ราคาต้องรัก 10 บาททุกชิ้น เรามีสินค้ามากกว่า 3,000 รายการ สลับหมุนเวียนมาจำหน่ายและมีสินค้าใหม่ๆเพิ่มขึ้นตลอดเวลา เพราะเราสรรหา อย่างไม่หยุดนิ่ง จากเงินทุน 800 บาทและคำถามเคยตั้งกับชีวิตพนักงาน Part Time ที่มีว่า “ร้าน 10 บาท ทำไมไม่ขาย 10 บาท จริงๆเวลาคิดเงินทำไมแม่ค้าต้องบอกว่าบางอย่างไม่ใช่ราคา 10 บาท” ความรู้สึกที่ว่าทำไมจะขาย 10 บาทไม่ได้ กับชีวิตพนักงานที่มีเงินไม่เพียงกี่บาท แต่ก็อย่าใช้ของน่ารักๆ จึงผันตัวเองมาเป็นแม่ค้ากับหาคำตอบที่ว่า 10 บาททั้งร้านทำไมจะ ไม่ได้กำไร คำตอบเริ่มมาทีละน้อยๆกำไรได้ สินค้าคุณภาพดีแต่น้อยมาก น้อยจริงๆ แต่ที่มากกว่ากำไรคือรอยยิ้ม และหน้าตาสุขใจ อิ่มใจ ของลูกค้า ที่เราไม่หลอกลวงเรื่องราคา ทำให้เรามีลูกค้าน่ารักๆ เพิ่มขึ้นทุกๆวัน ทุกเพศ ทุกวัย ตลอดระยะเวลา 18 ปี เราสรรหา สินค้า น่ารักที่มากด้วยประสบการณ์ 18 ปีกว่า......แพงหน่อย แต่ดีกว่า กำไรน้อย แต่ขายนานๆ เราจึงเป็นกิ๊ฟซ็อปเจ้าแรกของเมืองไทย ที่ทุกๆคนก็ให้รอยยิ้ม ทุกคนมีความสุข เราก็มีความสุข คำถามที่เคยตั้งคำถามไว้เมื่อ 18 ปีกว่าๆ ทำให้เรารู้ว่ากำไรแม้จะน้อยแต่รอยยิ้มของลูกค้าได้มากกว่าความสุขที่หามาไม่ได้จริงๆ และทางร้าน Strawberry Club สัญญาว่าเราจะสรรหาผลิตภัณฑ์สินค้าน่ารักๆ เพิ่มขึ้นๆและคงคุณภาพดีๆไว้ แบบนี้ตลอดไป </div>
                                    <div class="text-6"> วิสัยทัศน์ </div>
                                    <div class="text-7"> <i class="fa fa-hand-pointer-o" aria-hidden="true"></i> นำธุรกิจแฟนร์ไซร์ร้าน “Strawberry Club” สู่ความเป็นเลิศด้านค้าปลีก ทุกชิ้นในร้านราคา 10 บาท
                                        <br><i class="fa fa-hand-pointer-o" aria-hidden="true"></i> สร้างความเชื่อมั่นและความเชื่อถือให้กับสินค้าและบริการ
                                        <br><i class="fa fa-hand-pointer-o" aria-hidden="true"></i> ทำให้สินค้าอยู่ในใจของลูกค้า
                                        <br><i class="fa fa-hand-pointer-o" aria-hidden="true"></i> ให้ทุกคนได้สินค้า ดี ราคาถูกมีคุณภาพ</div>
                                    <div class="text-8"> พันธกิจ </div>
                                    <div class="text-9"> <i class="fa fa-hand-pointer-o" aria-hidden="true"></i> จัดจ้างพนักงานที่มีคุณภาพ และส่งเสริมพัฒนาทักษะและองค์ความรู้ให้กับพนักงาน
                                        <br><i class="fa fa-hand-pointer-o" aria-hidden="true"></i> สรรหาผลิตภัณฑ์ใหม่ๆทีมีคุณภาพ น่ารักๆ สามารถใช้งานได้จริง
                                        <br><i class="fa fa-hand-pointer-o" aria-hidden="true"></i> สื่อสาร และ ประชาสัมพันธ์ สินค้าและบริษัท </div>
                                    <div class="img-asd"> <img src="img/tip.png" class="img-responsive"> </div>
                                </div>
                              <?php } ?>
                            </div>
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
