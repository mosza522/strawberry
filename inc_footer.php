<style>
    .iip {
        padding: 0px;
        padding-left: none;
    }

    .modal-content {
        position: relative;
        background-color: #fff;
        -webkit-background-clip: padding-box;
        background-clip: padding-box;
        border: 1px solid #999;
        border: 1px solid rgba(0, 0, 0, .2);
        border-radius: 6px;
        outline: 0;
        -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
        box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
    }

    .modal-open .modal {
        overflow-x: hidden;
        overflow-y: auto;
    }

    .modal {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1040;
        display: none;
        overflow: hidden;
        -webkit-overflow-scrolling: touch;
        outline: 0;
    }

    bootstrap.min.css:5 .fade {
        opacity: 0;
        -webkit-transition: opacity .15s linear;
        -o-transition: opacity .15s linear;
        transition: opacity .15s linear;
    }

    .modal-open .modal {
        overflow-x: hidden;
        overflow-y: auto;
    }

    bootstrap.min.css:5 .fade.in {
        opacity: 1;
    }
</style>
<div class="container-fluid ">
    <div class="row">
        <div class="col-sm-12 iip">
            <div class="imgfooter"><img src="img/sd.png" class="img-responsive">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-9">
                            <div class="text-footer" style="text-decoration: none;"><?php echo $text[$_SESSION['lang']]['footer_index'] ?></div>
                        </div>
                        <div class="col-xs-12">
                            <div class="socialmider">
                                <a href="https://www.facebook.com/tony.hoa.3154?fref=ts"><img src="img/456facebook.png"> </a>
                                <a href="" data-toggle="modal" data-target="#maps"><img src="img/20197005_1522386897827100_567042949_n.png"> </a>
                                <a href="" data-toggle="modal" data-target="#mail"><img src="img/20182915_1522386891160434_235909008_n.png"> </a>
                                <a href="" data-toggle="modal" data-target="#tel"><img src="img/20206266_1522386887827101_1546009179_n.png"> </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div id="maps" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="modal-title">Email</div> </div>
            <div class="modal-body">
                sawang@interspecgroup.com </div>
        </div>
    </div>
</div>
<div id="mail" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h1 class="modal-title">Email</h1> </div>
            <div class="modal-body">
                <h1>sawang@interspecgroup.com</h1> </div>
        </div>
    </div>
</div>
<div id="tel" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h1 class="modal-title">Tel</h1> </div>
            <div class="modal-body">
                <h1>0-81834-7088 , 0-2370-2635 </h1> </div>
        </div>
    </div>
</div>
