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
  WHERE page.page_name='index'";
  $rs_header=mysql_fetch_array(mysql_query($sql_header));

   ?>
    <title><?=$rs_header['title']?></title>
    <meta name="keywords" content="<?=$rs_header['keywords']?>" />
    <meta name="description" content="<?=$rs_header['description']?>" />
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">

        <link href="https://fonts.googleapis.com/css?family=Itim|Mitr" rel="stylesheet"> </head>

<body class="bg-background ff ">
    <div class="container-fluid bground ff ">
        <div class="row">
            <div class="col-sm-12 pd">
                <?php require('inc_menu.php'); ?>
                    <style>
                        .wrap_top.sticky {
                            position: static;
                        }
                    </style>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                      <?php
                      $sql_content1="SELECT * FROM content
                      LEFT OUTER JOIN content_page
                      ON content.content_page=content_page.content_page_id
                      WHERE content_page='1' AND content_note='content1'";
                      $q_content1=mysql_query($sql_content1);
                      $rs=mysql_fetch_array($q_content1);
                      $num_check=mysql_num_rows($q_content1);
                       ?>
                      <div class="text-top wow fadeInDown"><center><?php if($num_check>0){
                        echo $rs[$text[$_SESSION['lang']]['content']];
                      }else{
                        echo "นำธุรกิจแฟรนไชส์ร้าน \"Strawberry Club\"";
                      }?> </center></div>
                    </div>
                </div>
                <div class="ffd wow fadeInRight">
                    <div class="row ">
                        <div class="col-md-8 ">
                            <div class="carousel slide media-carousel" data-ride="carousel" id="media">
                                <div class="carousel-inner">

                                  <?php
                                  $sql="SELECT *
                                  FROM banner
                                  LEFT OUTER JOIN banner_type
                                  ON banner.banner_type=banner_type.banner_type_id
                                  WHERE banner_type_name_th='หน้าแรก' AND banner_show_status='1'";
                                  $q=mysql_query($sql);



                                  $num=mysql_num_rows($q);
                                  $check=3;
                                    if(mysql_num_rows($q)>0){
                                    while ($rs=mysql_fetch_array($q)) {
                                    if($num==mysql_num_rows($q)){
                                      echo "<div class='item active'>
                                          <div class='row'>
                                          <div class='col-md-4'>
                                              <a href='#'><img alt='' src='backoffice/image/$rs[banner_file]' class='img-responsive'> </a>
                                          </div>";
                                          $num--;
                                          $check--;

                                    }
                                  else if($check!=0 and $num!=0){
                                      echo "<div class='col-md-4'>
                                          <a href='#'><img alt='' src='backoffice/image/$rs[banner_file]' class='img-responsive'> </a>
                                      </div>
                                      ";
                                      $num--;
                                      $check--;
                                    }
                                    else if($check==0 and $num!=0){
                                      echo "
                                  </div>
                                  </div>
                                      <div class='item'>
                                          <div class='row'>
                                          <div class='col-md-4'>
                                              <a href='#'><img alt='' src='backoffice/image/$rs[banner_file]' class='img-responsive'> </a>
                                          </div>";
                                  $check=3;
                                  $num--;
                                    }
                                   if($num==0){
                                      echo "</div>
                                  </div>";
                                    }
                                  }
                                }else {?>
                                  <div class="item active">
                                      <div class="row">
                                          <div class="col-md-4">
                                              <a href="#"><img alt="" src="img/014.png" class="img-responsive"> </a>
                                          </div>
                                          <div class="col-md-4">
                                              <a href="#"><img alt="" src="img/02-01.png" class="img-responsive"> </a>
                                          </div>
                                          <div class="col-md-4">
                                              <a href="#"><img alt="" src="img/03-01.png" class="img-responsive"> </a>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="item">
                                      <div class="row">
                                          <div class="col-md-4">
                                              <a href="#"><img alt="" src="img/04-01-01.png" class="img-responsive"> </a>
                                          </div>
                                          <div class="col-md-4">
                                              <a href="#"><img alt="" src="img/05.png" class="img-responsive"> </a>
                                          </div>
                                          <div class="col-md-4">
                                              <a href="#"><img alt="" src="img/06.png" class="img-responsive"> </a>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="item">
                                      <div class="row">
                                          <div class="col-md-4">
                                              <a href="#"><img alt="" src="img/010.png" class="img-responsive"> </a>
                                          </div>
                                          <div class="col-md-4">
                                              <a href="#"><img alt="" src="img/08.png" class="img-responsive"> </a>
                                          </div>
                                          <div class="col-md-4">
                                              <a href="#"><img alt="" src="img/09.png" class="img-responsive"> </a>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="item">
                                      <div class="row">
                                          <div class="col-md-4">
                                              <a href="#"><img alt="" src="img/07.png" class="img-responsive"> </a>
                                          </div>
                                          <div class="col-md-4">
                                              <a href="#"><img alt="" src="img/011.png" class="img-responsive"> </a>
                                          </div>
                                          <div class="col-md-4">
                                              <a href="#"><img alt="" src="img/012.png" class="img-responsive"> </a>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="item">
                                      <div class="row">
                                          <div class="col-md-4">
                                              <a href="#"><img alt="" src="img/013.png" class="img-responsive"> </a>
                                          </div>
                                          <div class="col-md-4">
                                              <a href="#"><img alt="" src="img/01-01.png" class="img-responsive"> </a>
                                          </div>
                                          <div class="col-md-4">
                                              <a href="#"><img alt="" src="img/015.png" class="img-responsive"> </a>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="item">
                                      <div class="row">
                                          <div class="col-md-4">
                                              <a href="#"><img alt="" src="img/016.png" class="img-responsive"> </a>
                                          </div>
                                      </div>
                                  </div>
                              <?php  }
                                   ?>
                                   <?php
                                   $sql_content1="SELECT * FROM content
                                   LEFT OUTER JOIN content_page
                                   ON content.content_page=content_page.content_page_id
                                   WHERE content_page='1' AND content_note='content2'";
                                   $q_content1=mysql_query($sql_content1);
                                   $rs=mysql_fetch_array($q_content1);
                                   $num_check=mysql_num_rows($q_content1);
                                    ?>

                                    <div class="textt-2 wow fadeInRight"><?php if($num_check>0){
                                      echo $rs[$text[$_SESSION['lang']]['content_index']];
                                    }else{
                                      echo "สู่ความเป็นเลิศด้านค้าปลีก ทุกชิ้นในราคา 10 บาท";
                                    }?>
                                    </div>
                                </div>
                                <a data-slide="prev" href="#media" class="left carousel-control"><img alt="" src="img/p1.png" class="img-responsive"></a>
                                <a data-slide="next" href="#media" class="right carousel-control"><img alt="" src="img/p2.png" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="imgk"><img alt="" src="img/tip.png" class="img-responsive"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bgfoo "><img alt="" src="img/sd.png">
                <div class="container">
                    <div class="text-footerindex wow fadeInLeft"><?php echo $text[$_SESSION['lang']]['footer_index'] ?></div>
                </div>
            </div>
        </div>
    </div>
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
            $('#media').carousel({});
        });
    </script>
    <script src="js/jquery-2.1.4.js">
    </script>
    <script src="js/jquery.mobile.custom.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
