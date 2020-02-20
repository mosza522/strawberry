<!doctype html>
<html>

<head>
    <title>Page Title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <?php require('inc_header.php'); ?>
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
                        <div class="text-top wow fadeInDown">นำธุรกิจแฟรนไชส์ร้าน "Strawberry Club"</div>
                    </div>
                </div>
                <div class="ffd wow fadeInRight">
                    <div class="row ">
                        <div class="col-md-8 ">
                            <div class="carousel slide media-carousel" data-ride="carousel" id="media">
                                <div class="carousel-inner">
                                    <div class="item  active">
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
                                    <div class="textt-2 wow fadeInRight">สู่ความเป็นเลิศด้านค้าปลีก ทุกชิ้นในราคา 10 บาท</div>
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
                    <div class="text-footerindex wow fadeInLeft"> บริษัท ไลฟ์เวย์อินเตอร์เทรด จำกัด
                        <br>ที่อยู่ : 5/7 ซ.พหลโยธิน 52 แยก 11(เดชศิรี) แขวงครองถนน เขตสายไหม กรุงเทพมหานคร 10220
                        <br>โทร : 02-937 8798 แฟกซ์ : 02-0396757 อีเมล์ : strawbreeyclub.gm@gmai.com </div>
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