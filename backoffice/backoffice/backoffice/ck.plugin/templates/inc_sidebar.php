
		<div class="sidebar">
			
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<div class="image">
							<a href="javascript:;"><img src="../ck.plugin/templates/assets/img/user-13.jpg" alt=""/></a>
						</div>
						<div class="info">
							<?php echo $_SESSION['LOGIN']['USER'];?>
							
						</div>
					</li>
				</ul>
				<ul class="nav">
					<li class="nav-header">Navigation</li>
					<?php require 'inc_menu.php';  ?>
				</ul>
				<!-- end sidebar user -->
			</div>
			<!-- end sidebar scrollbar -->
			<!--<div class="sidebar-header ui-state-active">MAIN MENU</div>
			<div class="menu-sidebar"><?php require 'inc_menu.php';  ?></div>-->
		</div>
