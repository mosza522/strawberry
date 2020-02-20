 <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="../img/unnamed.png" alt=""><?php echo $_SESSION["user"];?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i>Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->


        	<title><?php echo $_title;?></title>
        	<meta charset="utf-8" />
        	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
        	<meta content="" name="description" />
        	<meta content="" name="author" />
        	<script type="text/javascript" language="javascript" src="../ck.plugin/templates/script/jquery-1.7.1.min.js"></script>
        	<script type="text/javascript" language="javascript" src="../ck.plugin/templates/script/jquery-ui-1.8.18.custom.min.js"></script>
        	<script type="text/javascript" language="javascript" src="../ck.plugin/templates/script/inc_main.js"></script>
        	<script type="text/javascript" language="javascript" src="ck.script.js"></script>
        	<script type="text/javascript" language="javascript" src="../ck.plugin/media/js/jquery.dataTables.js"></script>
        	<link type="text/css" media="screen,projection" rel="stylesheet" href="../ck.plugin/templates/css/jquery-ui-1.8.15.custom.css" />
        	<link type="text/css" media="screen,projection" rel="stylesheet" href="../ck.plugin/templates/css/inc_reset.css" />
        	<link type="text/css" media="screen,projection" rel="stylesheet" href="../ck.plugin/templates/css/jquery-ui-1.8.15.custom.css" />
        	<link type="text/css" media="screen,projection" rel="stylesheet" href="../ck.plugin/templates/css/inc_main.css" />
        	<link type="text/css" media="screen,projection" rel="stylesheet" href="../ck.plugin/templates/jquery-ui.css" />
          
        	<!-- ================== BEGIN BASE CSS STYLE ================== -->
        	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        	<link href="../ck.plugin/templates/assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
        	<link href="../ck.plugin/templates/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        	<link href="../ck.plugin/templates/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        	<link href="../ck.plugin/templates/assets/css/animate.min.css" rel="stylesheet" />
        	<link href="../ck.plugin/templates/assets/css/style.css" rel="stylesheet" />
        	<link href="../ck.plugin/templates/assets/css/style-responsive.min.css" rel="stylesheet" />
        	<link href="../ck.plugin/templates/assets/css/theme/default.css" rel="stylesheet" id="theme" />
        	<link href="../ck.plugin/templates/assets/plugins/DataTables/css/data-table.css" rel="stylesheet" />
        	<!-- ================== END BASE CSS STYLE ================== -->


        	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
        	<link href="../ck.plugin/templates/assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
        	<link href="../ck.plugin/templates/assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" />
        	<link href="../ck.plugin/templates/assets/plugins/ionRangeSlider/css/ion.rangeSlider.css" rel="stylesheet" />
        	<link href="../ck.plugin/templates/assets/plugins/ionRangeSlider/css/ion.rangeSlider.skinNice.css" rel="stylesheet" />
        	<link href="../ck.plugin/templates/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet" />
        	<link href="../ck.plugin/templates/assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" />
        	<link href="../ck.plugin/templates/assets/plugins/password-indicator/css/password-indicator.css" rel="stylesheet" />
        	<link href="../ck.plugin/templates/assets/plugins/bootstrap-combobox/css/bootstrap-combobox.css" rel="stylesheet" />
        	<link href="../ck.plugin/templates/assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
        	<link href="../ck.plugin/templates/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" />
        	<link href="../ck.plugin/templates/assets/plugins/jquery-tag-it/css/jquery.tagit.css" rel="stylesheet" />
        	<link href="../ck.plugin/templates/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" />
        	<link href="../ck.plugin/templates/assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />
        	<link href="../ck.plugin/templates/assets/plugins/bootstrap-eonasdan-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
        	<!-- ================== END PAGE LEVEL STYLE ================== -->


        	<!--- ckeditor--->
        	<link href="../ck.plugin/templates/assets/plugins/ckeditor/ckeditor.js" rel="stylesheet" />
        	<link href="../ck.plugin/templates/assets/plugins/ckeditor/styles.js" rel="stylesheet" />
        	<!--- ecn ckeditor--->
        	<!-- ================== BEGIN BASE JS ================== -->
        	<script src="../ck.plugin/templates/assets/plugins/pace/pace.min.js"></script>

        	<!-- ================== END BASE JS ================== -->
