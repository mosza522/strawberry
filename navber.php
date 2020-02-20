<style>
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
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="col-sm-3"> </div>
            <div class="col-sm-9">
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
            </div>
        </div>
    </div>