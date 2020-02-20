<!doctype html>
<html>
<head>
  <?php require('inc_header.php'); ?>
  <?php
  $sql="SELECT * FROM activity
  LEFT OUTER JOIN activity_tag
  ON activity.activity_tag=activity_tag.activity_tag_id
  WHERE activity_id={$_GET['activity']}";
  $q=mysql_query($sql);
  $rs=mysql_fetch_array($q);
   ?>
    <title><?php echo $rs['activity_topic'] ?></title>
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
 <style>


 * {
   box-sizing: border-box;
 }

 .row > .column {
   padding: 0 8px;
 }

 .row:after {
   content: "";
   display: table;
   clear: both;
 }

 .column {
   float: left;
   width: 25%;
 }

 /* The Modal (background) */
 .modal {
   display: none;
   position: fixed;
   z-index: 1;
   padding-top: 100px;
   left: 0;
   top: 0;
   width: 100%;
   height: 100%;
   overflow: auto;
   background-color: black;
 }

 /* Modal Content */
 .modal-content {
   position: relative;
   background-color: #fefefe;
   margin: auto;
   padding: 0;
   width: 90%;
   max-width: 1200px;
 }

 /* The Close Button */
 .close {
   color: white;
   position: absolute;
   top: 10px;
   right: 25px;
   font-size: 35px;
   font-weight: bold;
 }

 .close:hover,
 .close:focus {
   color: #999;
   text-decoration: none;
   cursor: pointer;
 }

 .mySlides {
   display: none;
 }

 .cursor {
   cursor: pointer
 }

 /* Next & previous buttons */
 .prev-light,
 .next-light {
   cursor: pointer;
   position: absolute;
   top: 50%;
   width: auto;
   padding: 16px;
   margin-top: -50px;
   color: white;
   font-weight: bold;
   font-size: 20px;
   transition: 0.6s ease;
   border-radius: 0 3px 3px 0;
   user-select: none;
   -webkit-user-select: none;
 }

 /* Position the "next button" to the right */
 .next-light {
   right: 0;
   border-radius: 3px 0 0 3px;
 }

 /* On hover, add a black background color with a little bit see-through */
 .prev-light:hover,
 .next-light:hover {
   background-color: rgba(0, 0, 0, 0.8);
 }

 /* Number text (1/3 etc) */
 .numbertext {
   color: #f2f2f2;
   font-size: 12px;
   padding: 8px 12px;
   position: absolute;
   top: 0;
 }

 img {
   margin-bottom: -4px;
 }

 .caption-container {
   text-align: center;
   background-color: black;
   padding: 2px 16px;
   color: white;
 }

 .demo {
   opacity: 0.6;
 }

 .active,
 .demo:hover {
   opacity: 1;
 }

 img.hover-shadow {
   transition: 0.3s
 }

 .hover-shadow:hover {
   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
 }
 </style>
<body class="bgabout">
    <div class="container-fluid">
        <div class="row">
            <div class="rol-sm-12">
                <?php require('inc_menu.php'); ?>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">

                              <?php
                              $sql="SELECT * FROM activity
                              LEFT OUTER JOIN activity_tag
                              ON activity.activity_tag=activity_tag.activity_tag_id
                              WHERE activity_id={$_GET['activity']}";
                              $q=mysql_query($sql);
                              $rs=mysql_fetch_array($q);
                               ?>
                              <div class="text-about wow fadeInDown"><?=$rs['activity_topic']?></div>
                              <br>
                              <font size="3"><a href="message.php" class="first-page">หน้าแรก</a> > <?=$rs['activity_topic']?></font>
                              <br>
                              <p>
                              <i class="fa fa-clock-o fa-2x" aria-hidden="true"></i>
                              <font size="5" style="padding-left:1em"><?="".DateThai($rs['activity_date'])?></font>
                              </p>
                              <div class="retr wow fadeInRight">

                                   <img src="backoffice/image/<?=$rs['activity_img_cover']?>" alt="" width="100%" height="500" class="img-responsive">

                          </div>
                            <p class="detail">
                              <?php echo $rs['activity_detail']; ?>
                            </p>
                            <div class="tag">
                              แท็กที่เกี่ยวข้อง
                            </div>
                            <div class="button-sss">
                              <a href="activities.php?tag=<?=$rs['activity_tag_id']?>" class="btn btn-franchis"><?=$rs['activity_tag_name_th']?></a>
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>

                              <?php
                              $sql="SELECT * FROM activity_img
                              LEFT OUTER JOIN activity
                              ON activity_img.activity_id=activity.activity_id
                              WHERE activity_img.activity_id={$_GET['activity']} AND activity_img_display_status='1'";
                              $q_topic=mysql_query($sql);
                              $rs_topic=mysql_fetch_array($q_topic);
                               ?>
                            <div class="row">
                            <?php
                            $q_img=mysql_query($sql);
                            $i=1;
                              while ($rs_img=mysql_fetch_array($q_img)) {?>
                                <div class="column">
                                  <img src="backoffice/photo_activity/<?=$rs_img['activity_img_name']?>" style="width:100%;" height="200"onclick="openModal();currentSlide(<?=$i?>)" class="hover-shadow cursor">
                                </div>
                                <?php
                                $i++;
                              }
                             ?>
                            </div>

                            <div id="myModal" class="modal">
                              <span class="close cursor" onclick="closeModal()">&times;</span>
                              <div class="modal-content">
                                <?php
                                $i=1;
                                $q_img2=mysql_query($sql);
                                  while ($rs_img2=mysql_fetch_array($q_img2)) {?>
                                    <div class="mySlides">
                                      <div class="numbertext"><?=$i?> / <?=mysql_num_rows($q_img2)?></div>
                                      <img src="backoffice/photo_activity/<?=$rs_img2['activity_img_name']?>" height="400"style="width:100%" >
                                    </div>
                                    <?php
                                    $i++;
                                  }
                                 ?>
                                 <a class="prev-light" onclick="plusSlides(-1)">&#10094;</a>
                                <a class="next-light" onclick="plusSlides(1)">&#10095;</a>

                                <div class="caption-container">
                                  <p id="caption"></p>
                                </div>

                                <?php
                                $q_img3=mysql_query($sql);
                                $i=1;
                                  while ($rs_img3=mysql_fetch_array($q_img3)) {?>
                                    <div class="column">
                                      <img class="demo cursor" src="backoffice/photo_activity/<?=$rs_img3['activity_img_name']?>" height="100" style="width:100%" onclick="currentSlide(<?=$i?>)" alt="<?=$rs_img3['activity_img_name']?>">
                                    </div>
                                    <?php
                                    $i++;
                                  }
                                 ?>


                              </div>
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
        <script>
        function openModal() {
          document.getElementById('myModal').style.display = "block";
        }

        function closeModal() {
          document.getElementById('myModal').style.display = "none";
        }

        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
          showSlides(slideIndex += n);
        }

        function currentSlide(n) {
          showSlides(slideIndex = n);
        }

        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("demo");
          var captionText = document.getElementById("caption");
          if (n > slides.length) {slideIndex = 1}
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";
          dots[slideIndex-1].className += " active";
          captionText.innerHTML = dots[slideIndex-1].alt;
        }
        </script>
</body>

</html>
