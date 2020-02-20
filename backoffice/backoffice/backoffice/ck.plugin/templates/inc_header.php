

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

 <style>
 .navbar-brand{ width:auto;}
 @media (max-width: 480px) {
	.navbar-brand{ display:none !important;}
	.company_name{ margin:20px 0 0 10px !important;}
	}
 </style>
 <?php
	$where 	= array('menu_active'=>'Y');
	$row 	= $db->result(DB_PREFIX.'menu',$where,'ref_menu_id asc,menu_sort asc');
	if($row)
	{
		$memu 		= array();
		$active 	= array();
		foreach($row AS $r){
			$active[$r->ref_menu_id][$r->menu_link] = $r->menu_link;
			$menu_sort = $r->menu_sort;
			if($memu[$r->ref_menu_id][$r->menu_sort]){ $menu_sort++; }

			$memu[$r->ref_menu_id][$menu_sort] = array(
								'id' 		=>	$r->menu_id ,
								'name' 		=>	$r->menu_name,
								'component'	=>	$r->menu_component,
								'link' 		=>	$r->menu_link,
								'sort' 		=>	$r->menu_sort,
							);
			if( $r->menu_link  == '?'.$_SERVER['QUERY_STRING'])	$_menu = $r->menu_name;
		}
		unset($row);
	}
?>
	<!--<meta name="keywords" content="<?php echo $_title;?>" />
	<meta name="description" content="<?php echo $_title;?>" />
	<meta name="robot" content="noindex, nofollow" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9" />
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />


	<script type="text/javascript" language="javascript" src="../ck.plugin/templates/script/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" language="javascript" src="../ck.plugin/templates/script/jquery-ui-1.8.18.custom.min.js"></script>
	<script type="text/javascript" language="javascript" src="../ck.plugin/templates/script/inc_main.js"></script>
	<script type="text/javascript" language="javascript" src="ck.script.js"></script>

	<script type="text/javascript" language="javascript" src="../ck.plugin/media/js/jquery.dataTables.js"></script>
	<link rel="stylesheet" type="text/css" href="../ck.plugin/media/css/jquery.dataTables.css">



	<link type="text/css" media="screen,projection" rel="stylesheet" href="../ck.plugin/templates/css/inc_reset.css" />
	<link type="text/css" media="screen,projection" rel="stylesheet" href="../ck.plugin/templates/css/jquery-ui-1.8.15.custom.css" />
	<link type="text/css" media="screen,projection" rel="stylesheet" href="../ck.plugin/templates/css/inc_main.css" />
	<link type="text/css" media="screen,projection" rel="stylesheet" href="ck.sheet.css" />
	<link type="text/css" media="screen,projection" rel="stylesheet" href="../ck.plugin/templates/jquery-ui.css" />
<?php
	$where 	= array('menu_active'=>'Y');
	$row 	= $db->result(DB_PREFIX.'menu',$where,'ref_menu_id asc,menu_sort asc');
	if($row)
	{
		$memu 		= array();
		$active 	= array();
		foreach($row AS $r){
			$active[$r->ref_menu_id][$r->menu_link] = $r->menu_link;
			$menu_sort = $r->menu_sort;
			if($memu[$r->ref_menu_id][$r->menu_sort]){ $menu_sort++; }

			$memu[$r->ref_menu_id][$menu_sort] = array(
								'id' 		=>	$r->menu_id ,
								'name' 		=>	$r->menu_name,
								'component'	=>	$r->menu_component,
								'link' 		=>	$r->menu_link,
								'sort' 		=>	$r->menu_sort,
							);
			if( $r->menu_link  == '?'.$_SERVER['QUERY_STRING'])	$_menu = $r->menu_name;
		}
		unset($row);
	}
?>-->
