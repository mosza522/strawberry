<style>
    .box_flag img {
        float: right;
        padding-left: 10px;
    }
    
    .box_menu_topbar {
        position: absolute;
        z-index: 9999;
        left: 569px;
        top: 11px;
        padding: 0px 10px;
    }
    
    .gtyh {
        padding: 0px;
    }
    
    .box_menu_topbar a {
        color: #43200c;
        font-size: 13px;
        font-family: 'Mitr', sans-serif;
    }
    
    .menu_topbar a {
        display: inline-block;
        margin: 0 10px;
    }
    
    .wrap_toper {
        position: absolute;
        z-index: 9999999999999999;
    }
    
    .bg_pop_menutop {
        display: none;
        position: absolute;
        background-color: white;
        width: 320px;
        z-index: 9999;
        top: 145%;
        left: -80px;
        border: 1px solid transparant;
        box-shadow: 2px 2px 2px rgba(162, 162, 162, 0.2);
        padding: 15px;
    }
    
    .registertoptop {
        position: relative;
        display: inline-block;
    }
    
    .formlogin h1 {
        font-size: 18px;
        color: #f12e6a;
        font-family: 'robotobold', 'kanitregular';
        text-transform: uppercase;
        padding-bottom: 3px;
    }
    
    .formlogin label {
        padding-bottom: 5px;
        font-size: 15px;
        padding-top: 5px;
        text-transform: uppercase;
        font-family: 'robotobold', 'kanitregular';
    }
    
    .bordertwotone6 {
        margin: 0px 15px;
        position: relative;
    }
    
    .bordertwotone6:before {
        position: absolute;
        background: linear-gradient(to right, #000 80px, #f12e6a 20px);
        height: 3px;
        content: '';
        bottom: 0;
        right: 0px;
        width: 280px;
    }
    
    .orlog {
        font-family: 'kanitregular';
        font-size: 14px;
        text-align: center;
        padding-top: 15px;
    }
    
    .forgetpass a {
        font-size: 9px;
        line-height: 30px;
        color: #828282;
        text-decoration: underline;
    }
    
    .forgetpass-main {
        float: right;
    }
    
    .forgetpass-main a {
        font-size: 12px;
        line-height: 40px;
        color: #828282;
        text-decoration: underline;
    }
    
    .notmember {
        font-size: 16px;
        font-family: 'kanitregular';
    }
    
    .registertoptop {
        position: absolute;
        z-index: 999999999;
    }
    
    .lonig {
        position: absolute;
        z-index: 9999999999;
    }
</style>
<script>
    < script > $(document).ready(function () {
        $('.link_menutop').click(function () {
            if ($(this).parent().find(".bg_pop_menutop").is(":hidden")) {
                $(".bg_pop_menutop").slideUp();
                $(this).parent().find(".bg_pop_menutop").slideDown();
            }
            else {
                $(this).parent().find(".bg_pop_menutop").slideUp();
            }
        });
    });
</script>
<div class="wrap_toper">
    <div class="container">
        <div class="row">
            <div class="rol-sm-12">
                <nav class="navbar  navbar-inverse navbar-fixed-top">
                    <div class="container">
                        <div class="col-sm-12">
                            <div class="row gttyty">
                                <div class="col-sm-2 gttyty"> </div>
                                <div class="col-sm-10">
                                    <div class="collapse navbar-collapse js-navbar-collapse lonig ">
                                        <ul class="nav navbar-nav">
                                            <li class="dropdown mega-dropdown">
                                                <a href="product.php" class="dropdown-toggle" data-toggle="dropdown"><img src="img/rule.png" class="img-responsive">เข้าสู่ระบบ <span class="caret"></span></a>
                                                <ul class="dropdown-menu mega-dropdown-menu">
                                                    <li class="col-sm-12">
                                                        <div class="registertoptop"> <a class="link_menutop" href="#"> เข้าสู่ระบบ</a>
                                                            <div class="bg_pop_menutop">
                                                                <div class="formlogin">
                                                                    <h1>เข้าสู่ระบบ</h1>
                                                                    <div class="bordertwotone6"></div>
                                                                    <br>
                                                                    <div class="sociallogin">
                                                                        <div class="row">
                                                                            <div class="col-sm-6">
                                                                                <a href="#"><img src="images/images/fb-login.png" class="img-responsive"></a>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <a href="#"><img src="images/images/gg-login.png" class="img-responsive"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="orlog"> หรือเข้าสู่ระบบด้วย </div>
                                                                    <label>รหัสสมาชิก/ชื่อบัญชี : </label>
                                                                    <input id="textinput" name="textinput" placeholder="กรุณากรอกรหัสสมาชิกหรือชื่อบัญชี" type="text" class="form-control input-md">
                                                                    <label>รหัสผ่าน : </label>
                                                                    <input id="textinput" name="textinput" placeholder="กรอกรหัสผ่าน" type="text" class="form-control input-md">
                                                                    <div class="forgetpass"> <a href="#">ลืมรหัสผ่าน?</a> </div>
                                                                    <div class="btncontact">
                                                                        <button name="singlebutton" class="btn btn-primary">ยกเลิก</button>
                                                                        <a href="member-1.php">
                                                                            <button name="singlebutton" class="btn btn-success">เข้าสู่ระบบ</button>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<!--<div class="container">
    <div class="row">
        <div class="share-it">
            <div class="facebook">
                <a href="https://www.facebook.com/tony.hoa.3154?fref=ts"></a>
            </div>
            <div class="twitter">
                <a href="" data-toggle="modal" data-target="#tel"> </a>
            </div>
            <div class="google hidden-xs">
                <a href=""></a>
            </div>
            <div class="rss">
                <a href="" data-toggle="modal" data-target="#mail"></a>
            </div>
        </div>
    </div>
</div>-->
<div id="mail" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title">Email</h5> </div>
            <div class="modal-body">
                <h5>sawang@interspecgroup.com</h5> </div>
        </div>
    </div>
</div>
<div id="tel" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title">Tel</h5> </div>
            <div class="modal-body">
                <h5>0-81834-7088 , 0-2370-2635 </h5> </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row gtyh">
        <div class="col-sm-12 gtyh">
            <div class="col-sm-3"></div>
            <div class="col-sm-9  gtyh">
                <!--
                <div class="box_menu_topbar gtyh">
                    <div class="box_flag">
                    </div> &nbsp; /&nbsp; <a href="#">RESISTER</a> &nbsp; / &nbsp;
                    <a href=""><img src="img/en.jpg" class="img-responsive">CART (0)</a>
                    <a href=""><img src="img/th.jpg" class="img-responsive"></a>
                    <a href=""><img src="img/shopping-cart-of-checkered-design.png" class="img-responsive"></a>
                </div>
            </div>
--></div>
        </div>
    </div>
</div>