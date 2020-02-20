<!doctype html>
<html>
<style>
  #map {
    height: 400px;
    width: 100%;
   }
</style>
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
  WHERE page.page_name='contact'";
  $rs_header=mysql_fetch_array(mysql_query($sql_header));

   ?>
    <title><?=$rs_header['title']?></title>
    <meta name="keywords" content="<?=$rs_header['keywords']?>" />
    <meta name="description" content="<?=$rs_header['description']?>" />
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">

        <link href="https://fonts.googleapis.com/css?family=Itim|Mitr" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/font-awesome.css"> </head>

<body class="bgabout">
    <div class="container-fluid">
        <div class="row">
            <div class="rol-sm-12">
                <?php require('inc_menu.php'); ?>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="text-about wow fadeInDown"><img src="img/information.png" class="img-responsive"> <?=$text[$_SESSION['lang']]['contact']?></div>
                            </div>
                        </div>
                        <div class="opu wow fadeInRight">
                            <div class="tiop"> แผนที่ </div>
                            <div class="row">
                                <div class="col-sm-6 kuio">
                                    <div id="map"></div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="rty"> <img src="img/Map.png"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="ouj wow fadeInLeft">
                            <div class="row">
                              <?php
                              $sql="SELECT * FROM content WHERE content_page='12'";
                              $q=mysql_query($sql);
                              $rs=mysql_fetch_array($q);
                              $num=mysql_num_rows($q);
                              if($num<=0){
                               ?>
                                <div class="col-sm-6">
                                    <div class="tiop"> ติดต่อ </div>
                                    <div class="text-contact-taxt">
                                        <div class="yuiuyit">บริษัท ไลฟ์เวย์อินเตอร์เทรด จำกัด</div>
                                        <p><img src="img/20197005_1522386897827100_567042949_n.png" class="img-responsive  ">: เลขที่ 5/7 ซอย พหลโยธิน 52 แยก 11(เดชศิริ) แขวงคลองถนน เขตสายไหม กรุงเทพมหานคร 10220 เลขที่ผู้เสียภาษี 0105557172091</p>
                                        <p><img src="img/20206266_1522386887827101_1546009179_n.png" class="img-responsive  " style="text-decoration: none;">: 02-9738797</p>
                                        <p><img src="img/20183024_1522386894493767_600595345_n.png" class="img-responsive  " style="text-decoration: none;">: 02-0396757</p>
                                        <p><img src="img/20182915_1522386891160434_235909008_n.png" class="img-responsive  ">: strawberryclub.gm@gmail.com</p>
                                        <p><img src="img/456facebook.png" class="img-responsive  ">: Bear Store クマショップ สินค้าสไตล์ญี่ปุ่น 20 บาททุกชิ้น </p>
                                        <p><img src="img/456facebook.png" class="img-responsive  ">: Strawberry club สินค้าน่ารักๆ ทุกชิ้น 10 บาท </p>
                                        <p><img src="img/lin90.png" class="img-responsive  " style="text-decoration: none;">: ID : 0876811857
                                            <p><img src="img/lin90.png" class="img-responsive  ">: สแกนคิวอาร์โค้ด
                                                <div class="ffgg"><img src="img/line.jpg" class="img-responsive  "> </div>
                                    </div>
                                </div>
                              <?php }else{?>
                                <div class="col-sm-6">
                                    <div class="tiop"> ติดต่อ </div>
                                    <div class="text-contact-taxt">
                                        <?=$rs[$text[$_SESSION['lang']]['content']] ?>
                                    </div>
                                </div>
                                <?php
                              } ?>

                                <div class="col-sm-6">
                                    <div class="tiop">แบบฟอร์มติดต่อ </div>
                                    <form class="form-horizontal" action="send_contact.php" method="post" enctype="multipart/form-data">
                                        <fieldset>
                                            <div class="form-group">
                                                <label for="inputEmail" class="col-lg-2 control-label">Name</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required> </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" required> </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail" class="col-lg-2 control-label">address</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" id="address" name="address" placeholder="address" required> </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword" class="col-lg-2 control-label">Tel</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" id="tell" name="tell" placeholder="Tel">
                                                    <div class="checkbox"> </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="textArea" class="col-lg-2 control-label">Message</label>
                                                <div class="col-lg-10">
                                                    <textarea class="form-control" rows="3" id="message" name="message" required></textarea> <span class="help-block"></span> </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <div class="gfg"></div>
                                                </div>
                                                <div class="col-sm-10 lop">
                                                    <td width="80%">
                                                        <input class="darkbluelink" type="file" name="file_nab" id="applicant_picture" size="50"> </td>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-10 col-lg-offset-2">
                                                    <button type="Success" class="btn btn-franchis">Submit</button>
                                                    <button type="Success" class="btn btn-warning">Reset</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
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
        <?php
        $sql="SELECT * FROM maps";
        $rs=mysql_fetch_array(mysql_query($sql));
        if(mysql_num_rows(mysql_query($sql))>0){
          $lat=$rs['map_lat'];
          $lng=$rs['map_lng'];
        }else{
          $lat="13.894514";
          $lng="100.620252";
        }
         ?>
        <script>
      function initMap() {
    var mapOptions = {
      center: {lat: <?=$lat?>, lng: <?=$lng?>},
      zoom: 15,
    }

    var maps = new google.maps.Map(document.getElementById("map"),mapOptions);

    var marker = new google.maps.Marker({
       position: new google.maps.LatLng(<?=$lat?>, <?=$lng?>),
       map: maps,
       title : "Stawberry"
    });
    }
    </script>
        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBNaQBbbUjMEKDzJ-j7O3Iw6erM4ApDOb4&callback=initMap">
        </script>
</body>

</html>
