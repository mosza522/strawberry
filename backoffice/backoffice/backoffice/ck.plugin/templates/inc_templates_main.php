<?php
	require TEMPLATES_PATH . DS . 'inc_function.php';
	$_title = 'Backoffice';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><?php require TEMPLATES_PATH . DS . 'inc_header.php'; ?>

</head>
<body>
	<!-- Header-top -->
	<!-- begin #header -->
	<div id="header" class="header navbar navbar-default navbar-fixed-top">
	<!-- begin container-fluid -->
		<div class="container-fluid top_header">
		
		<!-- begin mobile sidebar expand / collapse button -->
				<div class="navbar-header">
					<a href="#" class="navbar-brand"><img src="../ck.plugin/templates/images/logo.png" class="wlogo"/></a>
                    <div class="company_name">Orange Technology Solution</div>
					<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- end mobile sidebar expand / collapse button -->

				<!-- begin header navigation right -->
				<ul class="nav navbar-nav navbar-right top_right">
					<li>
						<form class="navbar-form full-width">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Enter keyword" />
								<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
							</div>
						</form>
					</li>
					<li class="dropdown navbar-user" style="margin-right:1cm;">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<img src="../ck.plugin/templates/assets/img/user-13.jpg" alt="" /> 
							<span class="hidden-xs"><?php echo ucfirst($_SESSION['LOGIN']['USER']);?></span> <b class="caret"></b>
						</a>
						<ul class="dropdown-menu dropdown-user">
                        <li><a><i class="fa fa-rss fa-fw"></i><b>UserIP : </b><?php echo $_SERVER['REMOTE_ADDR'];?></a></li>
						<li><a><i class="fa fa-user fa-fw"></i><b>User : </b><?php echo $_SESSION['LOGIN']['USER'];?></a></li>
                        <li><a><i class="fa fa-gear fa-fw"></i><b>Online : </b><span id="online" rel="<?php echo CURRENT_TIME-$_SESSION['LOGIN']['ONLINE'];?>">00:00:00</span></a></li>
						<li><a><i class="fa fa-sign-in fa-fw"></i><b>LastLogin : </b><?php echo date('d-m-Y H:i:s',$_SESSION['LOGIN']['LAST']);?></a></li>
						<li class="divider"></li>
						
                        <li><a href="../logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                    </ul>
					</li>
				</ul>
				<!-- end header navigation right -->
		</div>
		<!-- end container-fluid -->
	</div>
	<!-- end #header -->

	<hr class="noscreen" />
	<div class="menu-top"></div>
	<div class="breadcrumbs ui-state-default">
		
	</div> 	
	
	<!-- Header-top -->
	<hr class="noscreen" />
	
	<div class="wrapper-main">
<?php require 'inc_sidebar.php'; ?>
		<?php
			if(!empty($_GET['frm']))
				$_file 	= 'view' . DS . 'frm-'.$_GET['frm'] . EXT;
			else
				$_file 	= 'view' . DS . 'frm-index' . EXT;
				
			if(file_exists($_file )) require $_file ;
		?>
	</div>

<?php require 'inc_footer.php'; ?>
</body>
</html>