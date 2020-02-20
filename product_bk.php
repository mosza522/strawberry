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

</style>

<body class="bgabout">
    <div class="container-fluid">
        <div class="row">
            <div class="rol-sm-12">
                <?php require('inc_menu.php'); ?>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="text-about"><img src="img/bar-chart.png" class="img-responsive">&nbsp;สินค้า</div>
                                <div class="col-sm-2 iconproduct nopan">
                                    <a href="franchise.php"><img src="img/shopping-bag.png" class="img-responsive"> สินค้าแนะนะ/ใหม่</a>
                                    <br>
                                    <a href="franchise.php"><img src="img/holiday.png" class="img-responsive"> สินค้าขายดี</a>
                                    <br>
                                    <a href="franchise.php"><img src="img/19578388_1501704033228720_1505233108_n.png" class="img-responsive"> สินค้ากิ๊ฟช็อป</a>
                                    <br>
                                    <a href="franchise.php"><img src="img/cosmetics.png" class="img-responsive"> สินค้าบิวตี้</a>
                                    <br>
                                    <a href="franchise.php"><img src="img/list.png" class="img-responsive"> สินค้าเครื่องเขียน</a>
                                    <br>
                                    <a href="franchise.php"><img src="img/karaoke.png" class="img-responsive"> สินค้าของเด็กเล่น</a>
                                    <br>
                                    <a href="franchise.php"><img src="img/cooking.png" class="img-responsive"> สินค้าเครื่องครัว</a>
                                    <br>
                                    <a href="franchise.php"><img src="img/improvement.png" class="img-responsive"> สินค้าเครื่องมือช่าง</a>
                                    <br>
                                    <a href="franchise.php"><img src="img/shower.png" class="img-responsive"> สินค้าของใช้ในห้องน้ำ</a>
                                    <br>
                                    <a href="franchise.php"><img src="img/teeth-cleaning.png" class="img-responsive"> สินค้าของใช้ในบ้าน</a>
                                    <br>
                                    <a href="franchise.php"><img src="img/mobile-phone.png" class="img-responsive"> สินค้าไอที</a>
                                    <br>
                                    <a href="franchise.php"><img src="img/flower.png" class="img-responsive"> สินค้าดอกไม้ปลอม</a>
                                    <br>
                                    <a href="franchise.php"><img src="img/wallet.png" class="img-responsive"> สินค้าสินค้าพลาสติก</a>
                                    <br>
                                    <a href="franchise.php"><img src="img/ice-cream.png" class="img-responsive"> สินค้าขายดี</a>
                                    <br>
                                    <a href="franchise.php"><img src="img/birthday.png" class="img-responsive"> สินค้าขายดี</a>
                                </div>
                                <div class="col-sm-10">
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner" role="listbox">
                                            <div class="item active"> <img src="img/sdf1.png" alt="..." width="100%" height="500px">
                                                <div class="carousel-caption"> </div>
                                            </div>
                                            <div class="item"> <img src="img/sdf2.png" alt="..." width="100%" height="500px">
                                                <div class="carousel-caption"> </div>
                                            </div>
                                            <div class="item"> <img src="img/sdf3.png"> </div>
                                        </div>
                                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                                    </div>
                                    
                                    <div class="col-xs-12" style="margin-bottom:200px;">
                                     <div class="item col-sm-3">
                                            <img src="http://img.tjskl.org.cn/pic/z2577d9d-200x200-1/pinarello_lungavita_2010_single_speed_bike.jpg" alt="item" />
                                             <h2>Item 1</h2>
                                
                                            <p>Price: <em>$449</em>
                                            </p>
                                            <button class="add-to-cart" type="button">Add to cart</button>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
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

        </script>
        <script src="js/jquery.mobile.custom.min.js"></script>
        <script src="js/main.js"></script>
        
<script>
$('.add-to-cart').on('click', function () {
	var cart = $('.shopping-cart');
	var imgtodrag = $(this).parent('.item').find("img").eq(0);
	if (imgtodrag) {
		var imgclone = imgtodrag.clone()
			.offset({
			top: imgtodrag.offset().top,
			left: imgtodrag.offset().left
		})
			.css({
			'opacity': '0.5',
				'position': 'absolute',
				'height': '150px',
				'width': '150px',
				'z-index': '99999'
		})
			.appendTo($('body'))
			.animate({
			'top': cart.offset().top + 10,
				'left': cart.offset().left + 10,
				'width': 75,
				'height': 75
		}, 1000, 'easeInOutExpo');
		
		setTimeout(function () {
			cart.effect("shake", {
				times: 2
			}, 200);
		}, 1500);

		imgclone.animate({
			'width': 0,
				'height': 0
		}, function () {
			$(this).detach()
		});
	}
});
</script>
        
</body>

</html>