<!doctype html>
<html>

<head>
    <title>Page Title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <?php require('inc_header.php'); ?>
        <link href="https://fonts.googleapis.com/css?family=Itim|Mitr" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/font-awesome.css"> </head>
<style>
        body.modal-open {
        padding-right: 0 !important;
        overflow-y: scroll;
    }
    
    .bor {
        padding: 5px;
        margin-top: 30px;
    }
    
    .dis p {
        text-align: center;
        margin-top: 15px;
        font-weight: 600;
        font-family: 'Itim', cursive;
        font-size: 22px;
        color: #43200c;
    }
    
    .modal-header {
        padding: 15px;
    }
    
    .modal-body p {
        font-size: 19px;
        font-weight: 600;
        text-align: center;
        margin-top: -18px;
        z-index: 999;
        color: #000;
    }
    
    .modal-footer {
        padding: 15px;
        text-align: right;
    }
    
    .modal-body {
        position: relative;
        padding: 15px;
    }
    
    .modal-header .close {
        margin-top: -2px;
    }
    
    .modal {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1050;
        display: none;
        overflow: hidden;
        outline: 0;
    }
    
    .modal-header {
        padding: 15px;
    }
    
    .modal-header .close {
        margin-top: -2px;
    }
    
    .modal-body p {
        font-size: 23px;
        font-weight: 600;
        text-align: center;
        margin-top: -18px;
        z-index: 999;
        color: #000;
    }
    
    .modal-body {
        position: relative;
        padding: 15px;
    }
    
    .text-pro {
        text-align: left;
        font-size: 15px;
        text-decoration: underline;
        margin-top: -3px;
    }
    
    .text-pro-1 i {
        text-align: center;
        text-indent: 5px;
        margin-bottom: 10px;
        font-size: 15px;
    }
    
    .text-pro-1 {
        text-align: center;
        font-size: 18px;
    }
    
    .pum {
        margin-top: 15px;
        text-align: center;
    }
    
    .pand {
        padding: 12px;
    }
    
    .ing-fan img {
        width: 30%;
        margin: 24px auto;
    }
    
    .top-franchise-1 {
        margin-top: -20px;
    }
    
    .text-fan-text1 {
        text-align: center;
        font-size: 20px;
        color: #43200c;
        font-family: 'Mitr', sans-serif;
        border-radius: 5px 5px 5px 5px;
        background-color: #fff;
        width: 64%;
        margin: 0 auto;
        padding: 5px;
        border: 1px solid #fd83b4;
        box-shadow: 3px 3px 3px #bcb9bc;
    }
    
    .text-fan-text2 {
        text-align: center;
        font-size: 20px;
        color: #43200c;
        font-family: 'Mitr', sans-serif;
        border-radius: 5px 5px 5px 5px;
        background-color: #fff;
        width: 71%;
        margin: 0 auto;
        padding: 5px;
        border: 1px solid #fd83b4;
        box-shadow: 3px 3px 3px #bcb9bc;
        margin-top: 20px;
    }
    
    .text-fan-text3 {
        text-align: center;
        font-size: 20px;
        color: #43200c;
        font-family: 'Mitr', sans-serif;
        border-radius: 5px 5px 5px 5px;
        background-color: #fff;
        width: 56%;
        margin: 0 auto;
        padding: 5px;
        border: 1px solid #fd83b4;
        box-shadow: 3px 3px 3px #bcb9bc;
        margin-top: 20px;
    }
    
    .text-fan-text4 {
        text-align: center;
        font-size: 20px;
        color: #43200c;
        font-family: 'Mitr', sans-serif;
        border-radius: 5px 5px 5px 5px;
        background-color: #fff;
        width: 15%;
        margin: 0 auto;
        padding: 5px;
        border: 1px solid #fd83b4;
        box-shadow: 3px 3px 3px #bcb9bc;
        margin-top: 20px;
    }
    
    .text-fan-text5 {
        text-align: center;
        font-size: 20px;
        color: #43200c;
        font-family: 'Mitr', sans-serif;
        border-radius: 5px 5px 5px 5px;
        background-color: #fff;
        width: 15%;
        margin: 0 auto;
        padding: 5px;
        border: 1px solid #fd83b4;
        box-shadow: 3px 3px 3px #bcb9bc;
        margin-top: 20px;
        animation: efek linear 0.2s infinite alternate;
        display: block;
        text-decoration: none;
        animation: efek linear 0.2s infinite alternate;
        font-weight: bold;
    }
    
    @keyframes efek {
        0% {
            color: red;
        }
        100% {
            color: #fd83b4;
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
                                <div class="text-about wow fadeInDown"><img src="img/bar-chart.png" class="img-responsive">&nbsp;สมัครธุรกิจแฟนร์ไซร์</div>
                                <div class="po wow fadeInRight">
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner" role="listbox">
                                            <div class="item active"> <img src="img/san1.png" alt="..." width="100%" height="500px">
                                                <div class="carousel-caption"> </div>
                                            </div>
                                            <div class="item"> <img src="img/san2.png" alt="..." width="100%" height="500px">
                                                <div class="carousel-caption"> </div>
                                            </div>
                                            <div class="item"> <img src="img/san3.png"> </div>
                                        </div>
                                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                                    </div>
                                </div>
                                <div class="eui wow fadeInLeft">
                                    <div class="ing-fan"><img class="img-responsive" src="img/20371203_1527737533958703_679091967_n.png"></div>
                                    <div class="text-fan-text1"><i class="fa fa-hand-o-right" aria-hidden="true"></i> หาทำเลไว้ 2-3 จุด แจ้งงบที่ต้องการลงทุนทางบริษัทพิจารณาคุณสมบัติเบี้ยงต้น</div>
                                    <div class="text-fan-text2"><i class="fa fa-hand-o-right" aria-hidden="true"></i> โอนเงินจองพื้นที่ 5,000 บาท กสิกรไทย 586256256 บริษัทไลฟ์เวย์อินเตอร์เทรด จำกัด</div>
                                    <div class="text-fan-text3"><i class="fa fa-hand-o-right" aria-hidden="true"></i> ทีมงานนัดจัดวางแผนธุรกิจ ให้คำปรึกษานัดหมายเปิดร้าน + ทำสัญญา</div>
                                    <div class="text-fan-text4"><i class="fa fa-hand-o-right" aria-hidden="true"></i> เลือกแพ็คเกจ</div>
                                    <div class="row top-franchise-1">
                                        <div class="col-sm-4 col-lg-4 col-md-4">
                                            <div class="bor"> <img class="img-responsive" src="img/pk1.png" style="width: 100%;">
                                                <div class="dis">
                                                    <p>รูปแบบเซตตลาดนัด
                                                        <br>(สำหรับเปิดตลาดนัดเท่านั้น) </p>
                                                    <div class="row" style="text-align: center;">
                                                        <button type="Success" class="btn btn-success" data-toggle="modal" data-target="#myModal1">รายละเอียด</button>
                                                    </div>
                                                    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;">
                                                        <div class="modal-dialog" role="document" style="z-index:50000;">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button> <span aria-hidden="true"></span>
                                                                    <div class="modal-body"> <img class="img-responsive" src="img/20292225_1527740027291787_550542762_n.png" style="width: 100%;">
                                                                        <p>รูปแบบเซตตลาดนัด (สำหรับเปิดตลาดนัดเท่านั้น) </p>
                                                                        <div class="text-pro-1"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> ค่าประกันสัญญา 50,000 บาท
                                                                            <br> <i class="fa fa-hand-o-right" aria-hidden="true"></i> ค่าสินค้า/อุปกรณ์ขึ้นแผง 150,000 บาท
                                                                            <br> <i class="fa fa-hand-o-right" aria-hidden="true"></i> ค่าแฟรน์ไซน์รายปี (อายุสัญญา 3 ปี) ปีละ 45,000 บาท/ปี
                                                                            <br> <i class="fa fa-hand-o-right" aria-hidden="true"></i> ยังไม่รวมค่าขนส่งสินค้า ทางผู้ซื้อแฟรน์ไซน์ต้องดำเนินการเองทั้งหมด </div>
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
                                        <div class="col-sm-4 col-lg-4 col-md-4">
                                            <div class="bor"> <img class="img-responsive" src="img/pk2.png" style="width: 100%;">
                                                <div class="dis">
                                                    <p>รูปแบบร้านประจำขนาดพื้น
                                                        <br>ตั้งแต่ 30 ตารางเมตร ไม่เกิน
                                                        <br>40 ตารางเมตร </p>
                                                    <div class="row" style="text-align: center;">
                                                        <button type="Success" class="btn btn-success" data-toggle="modal" data-target="#myModal2">รายละเอียด</button>
                                                    </div>
                                                    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;">
                                                        <div class="modal-dialog" role="document" style="z-index:50000;">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button> <span aria-hidden="true"></span>
                                                                    <div class="modal-body"> <img class="img-responsive" src="img/pk2.png" style="width: 100%;">
                                                                        <p>รูปแบบร้านประจำขนาดพื้นตั้งแต่
                                                                            <br> 30 ตารางเมตร ไม่เกิน 40 ตารางเมตร </p>
                                                                        <div class="text-pro-1"><i class="fa fa-hand-o-right" aria-hidden="true"></i> ค่าประกันสัญญา 100,000 บาท
                                                                            <br><i class="fa fa-hand-o-right" aria-hidden="true"></i> ค่าแฟรน์ไซน์รายปี (อายุสัญญา 3 ปี) ปีละ 45,000 บาท/ปี
                                                                            <br><i class="fa fa-hand-o-right" aria-hidden="true"></i> ค่าสินค้า/อุปกรณ์ขึ้นแผง,ตู้,ชั้น,เคาร์เตอร์คิดเงิน /ค่าบริการขึ้นแผง
                                                                            <br>/ค่าเดินทางขึ้นแผงหน้าร้าน 460,000 บาท
                                                                            <br><i class="fa fa-hand-o-right" aria-hidden="true"></i> ยังไม่รวมค่าขนส่งสินค้า ทางผู้ซื้อแฟรน์ไซน์ต้องดำเนินการเองทั้งหมด </div>
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
                                        <div class="col-sm-4 col-lg-4 col-md-4">
                                            <div class="bor"> <img class="img-responsive" src="img/pk3.png" style="width: 100%;">
                                                <div class="dis ">
                                                    <p>รูปแบบร้านประจำขนาดพื้นตั้งแต่
                                                        <br>60 ตารางเมตร ไม่เกิน
                                                        <br>80 ตารางเมตร </p>
                                                    <div class="row" style="text-align: center;">
                                                        <button type="Success" class="btn btn-success" data-toggle="modal" data-target="#myModal3">รายละเอียด</button>
                                                    </div>
                                                    <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;">
                                                        <div class="modal-dialog" role="document" style="z-index:50000;">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button> <span aria-hidden="true"></span>
                                                                    <div class="modal-body"> <img class="img-responsive" src="img/pk3.png" style="width: 100%;">
                                                                        <p>รูปแบบร้านประจำขนาดพื้นตั้งแต่ 60
                                                                            <br>ตารางเมตร ไม่เกิน 80 ตารางเมตร</p>
                                                                        <div class="text-pro-1"><i class="fa fa-hand-o-right" aria-hidden="true"></i> ค่าประกันสัญญา 100,000 บาท
                                                                            <br><i class="fa fa-hand-o-right" aria-hidden="true"></i> ค่าแฟรน์ไซน์รายปี (อายุสัญญา 3 ปี) ปีละ 65,000 บาท/ปี
                                                                            <br><i class="fa fa-hand-o-right" aria-hidden="true"></i> ค่าสินค้า/อุปกรณ์ขึ้นแผง,ตู้,ชั้น,เคาร์เตอร์คิดเงิน
                                                                            <br>/ค่าบริการขึ้นแผง/ค่าเดินทางขึ้นแผงหน้าร้าน 650,000 บาท
                                                                            <br><i class="fa fa-hand-o-right" aria-hidden="true"></i> ยังไม่รวมค่าขนส่งสินค้า ทางผู้ซื้อแฟรน์ไซน์ต้องดำเนินการเองทั้งหมด </div>
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
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-4 col-lg-4 col-md-4">
                                        <div class="bor"> <img class="img-responsive" src="img/pk4.png" style="width: 100%;">
                                            <div class="dis">
                                                <p>รูปแบบร้านประจำขนาดพื้น
                                                    <br>ตั้งแต่ 100 ตารางเมตร ไม่เกิน
                                                    <br>250 ตารางเมตร </p>
                                                <div class="row" style="text-align: center;">
                                                    <button type="Success" class="btn btn-success" data-toggle="modal" data-target="#myModal4">รายละเอียด</button>
                                                </div>
                                                <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;">
                                                    <div class="modal-dialog" role="document" style="z-index:50000;">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button> <span aria-hidden="true"></span>
                                                                <div class="modal-body"> <img class="img-responsive" src="img/pk4.png" style="width: 100%;">
                                                                    <p>รูปแบบร้านประจำขนาดพื้น ตั้งแต่
                                                                        <br>100 ตารางเมตร ไม่เกิน 250 ตารางเมตร </p>
                                                                    <div class="text-pro-1"><i class="fa fa-hand-o-right" aria-hidden="true"></i> ค่าประกันสัญญา 100,000 บาท
                                                                        <br><i class="fa fa-hand-o-right" aria-hidden="true"></i> ค่าแฟรน์ไซน์รายปี (อายุสัญญา 3 ปี) ปีละ 85,000 บาท/ปี
                                                                        <br><i class="fa fa-hand-o-right" aria-hidden="true"></i> ค่าสินค้า/อุปกรณ์ขึ้นแผง,ตู้,ชั้น,เคาร์เตอร์คิดเงิน
                                                                        <br>/ค่าบริการขึ้นแผง/ค่าเดินทางขึ้นแผงหน้าร้าน 750,000 บาท
                                                                        <br><i class="fa fa-hand-o-right" aria-hidden="true"></i> ยังไม่รวมค่าขนส่งสินค้า ทางผู้ซื้อแฟรน์ไซน์ต้องดำเนินการเองทั้งหมด </div>
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
                                    <div class="col-sm-4 col-lg-4 col-md-4">
                                        <div class="bor"> <img class="img-responsive" src="img/pk5.png" style="width: 100%;">
                                            <div class="dis">
                                                <p>รูปแบบร้านประจำ
                                                    <br>ในห้างสรรพสินค้า </p>
                                                <div class="row" style="text-align: center;">
                                                    <button type="Success" class="btn btn-success" data-toggle="modal" data-target="#myModal5">รายละเอียด</button>
                                                </div>
                                                <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;">
                                                    <div class="modal-dialog" role="document" style="z-index:50000;">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button> <span aria-hidden="true"></span>
                                                                <div class="modal-body"> <img class="img-responsive" src="img/pk5.png" style="width: 100%;">
                                                                    <p>รูปแบบร้านประจำในห้างสรรพสินค้า </p>
                                                                    <div class="text-pro-1"><i class="fa fa-hand-o-right" aria-hidden="true"></i> ค่าประกันสัญญา 200,000 บาท
                                                                        <br><i class="fa fa-hand-o-right" aria-hidden="true"></i> ค่าแฟรน์ไซน์รายปี ตารางเมตรละ 1,800 บาท/ตารางเมตร/ปี
                                                                        <br><i class="fa fa-hand-o-right" aria-hidden="true"></i> ค่าออกแบบยืนเสนอราคาห้างสรรพสินค้า ราคาตั้งแต่ 45,000 – 100,000 บาท
                                                                        <br><i class="fa fa-hand-o-right" aria-hidden="true"></i> ค่าตกแต่งร้านและอุปกรณ์ตกแต่งร้านคิดตามจริง
                                                                        <br><i class="fa fa-hand-o-right" aria-hidden="true"></i> ค่าสินค้าขึ้นแผงและสต๊อกสินค้า คิดตามจริง
                                                                        <br><i class="fa fa-hand-o-right" aria-hidden="true"></i> ยังไม่รวมค่าขนส่งสินค้า ทางผู้ซื้อแฟรน์ไซน์ต้องดำเนินการเองทั้งหมด </div>
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
                                    <div class="col-sm-2"></div>
                                </div>
                                <div class="text-fan-text5"><i class="fa fa-hand-o-right" aria-hidden="true"></i> <a href="fansite.php">เปิดร้านได้เลย</a> </div>
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
</body>

</html>