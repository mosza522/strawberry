
			<center>
			<div class="navbar nav_title" style="border: 0;" >
			<a href="main.php" class="site_title"><img src="../img/unnamed.png"width="50" height="50"> Strawberry </a>
            </div>
			</center>
			<div class="clearfix"></div>
			<!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="../img/unnamed.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome</span>
                <h2><?php if(isset($_SESSION["user"])){
									echo $_SESSION["user"];
								}else{
									echo "<script>
										alert('กรุณา Login');
										window.location.href=\"login.php\";
									</script>";
								}
									?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->
			<br />
            <!-- sidebar menu -->

            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>&nbsp;</h3>
                <ul class="nav side-menu">
									<?php
									$admin="";
									$user="";
									$banner="";
									$product="";
									$franchise="";
									$branch="";
									$menu_management="";
									$apply_job="";
									$promotion="";
									$map="";
									if(isset($_GET['active'])){
										if($_GET['active']=="admin"){
											$admin="class='active'";
										}else if($_GET['active']=="user"){
											$user="class='active'";
										}else if($_GET['active']=="product"){
											$product="class='active'";
										}else if($_GET['active']=="franchise"){
											$franchise="class='active'";
										}else if($_GET['active']=="branch"){
											$branch="class='active'";
										}else if($_GET['active']=="banner"){
											$banner="class='active'";
										}else if($_GET['active']=="menu_management"){
											$menu_management="class='active'";
										}else if($_GET['active']=="promotion"){
											$promotion="class='active'";
										}else if($_GET['active']=="apply_job"){
											$apply_job="class='active'";
										}else if($_GET['active']=="map"){
											$map="class='active'";
										}
									} ?>
					<li <?php echo $admin ?>><a href="admin.php?page=home&active=admin"><i class="fa fa-user-circle" aria-hidden="true"></i> Admin </a></li>
					<li <?php echo $user ?>><a href="user.php?page=home&active=user"><i class="fa fa-id-badge" aria-hidden="true"></i></i> User </a></li>
					<li><a><i class="fa fa-key" aria-hidden="true"></i></i>Header Management <span class="fa fa-chevron-down"></span></a>
					<ul class="nav child_menu" >
						<li><a href="header_management.php?page=home_page"><i class="fa fa-key" aria-hidden="true"></i> Page </a></li>
					<li><a href="header_management.php?page=home_title"><i class="fa fa-key" aria-hidden="true"></i> Title </a></li>
					<li><a href="header_management.php?page=home_keywords"><i class="fa fa-key" aria-hidden="true"></i> Keywords</a></li>

					<li><a href="header_management.php?page=home_description"><i class="fa fa-key" aria-hidden="true"></i> Description </a></li>

				</ul>
			</li>
					<li><a><i class="fa fa-bars" aria-hidden="true"></i>Menu Management <span class="fa fa-chevron-down"></span></a>
					<ul class="nav child_menu" >
					<li><a href="menu_management.php?page=home"><i class="fa fa-bars" aria-hidden="true"></i></i></i></i> Main Menu </a></li>
					<li><a href="menu_management.php?page=home_child_menu"><i class="fa fa-bars" aria-hidden="true"></i></i></i></i> Child Menu </a></li>

				</ul>
			</li>
					<!--<li <?php echo $user ?>><a href="user.php?page=home&active=user"><i class="fa fa-address-book" aria-hidden="true"></i> User </a></li>-->
					<li><a><i class="fa fa-pencil" aria-hidden="true"></i>Content <span class="fa fa-chevron-down"></span></a>
					<ul class="nav child_menu" >
						<li><a href="content.php?page=home"><i class="fa fa-pencil" aria-hidden="true"></i>Page content </a></li>

						<?php
						$sql="SELECT * FROM content_page";
						$q=mysql_query($sql);
						while($rs=mysql_fetch_array($q)){?>
							<li><a href="content.php?page=<?=$rs['content_page_name_en']?>"><i class="fa fa-pencil" aria-hidden="true"></i> <?=$rs['content_page_name_en']?> </a></li>
						<?php
						} ?>
					</ul>
				</li>
					<li <?php echo $banner ?>><a href="banner.php?page=home&active=banner"><i class="fa fa-picture-o" aria-hidden="true"></i> Banner </a></li>
					<li <?php echo $product ?>><a href="product.php?page=home&active=product"><i class="fa fa-cart-plus" aria-hidden="true"></i></i> Product </a></li>
					<li <?php echo $promotion ?>><a href="promotion.php?page=home&active=promotion"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Promotion </a></li>
					<li <?php echo $franchise ?>><a href="franchise.php?page=home&active=franchise"><i class="fa fa-handshake-o" aria-hidden="true"></i></i></i> franchise </a></li>
					<li <?php echo $branch ?>><a href="branch.php?page=home&active=branch"><i class="fa fa-home" aria-hidden="true"></i></i></i> Branch </a></li>

					<li><a><i class="fa fa-newspaper-o" aria-hidden="true"></i>News <span class="fa fa-chevron-down"></span></a>
					<ul class="nav child_menu" >
					<li><a href="news.php?page=home"><i class="fa fa-newspaper-o" aria-hidden="true"></i></i></i></i> News </a></li>
					<li><a href="news.php?page=home_tag"><i class="fa fa-newspaper-o" aria-hidden="true"></i></i></i></i> News Tag</a></li>

					<li><a href="news.php?page=home_album"><i class="fa fa-newspaper-o" aria-hidden="true"></i></i></i></i> News Photo album </a></li>

				</ul>
			</li>
			<li><a><i class="fa fa-calendar-check-o" aria-hidden="true"></i></i>Activity <span class="fa fa-chevron-down"></span></a>
			<ul class="nav child_menu" >
			<li><a href="activity.php?page=home"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Activity </a></li>
			<li><a href="activity.php?page=home_tag"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Activity Tag</a></li>

			<li><a href="activity.php?page=home_album"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Activity Photo album </a></li>

		</ul>
	</li>
	<li <?=$map?>><a href="map.php?page=home&active=map"><i class="fa fa-map-marker" aria-hidden="true"></i></i> Map</a></li>
	<li <?php echo $apply_job ?>><a href="apply_job.php?page=home&active=apply_job"><i class="fa fa-users" aria-hidden="true"></i> Apply Job </a></li>
	<li><a href="https://analytics.google.com/analytics/web/?authuser=0#standard/" target="_blank"><i class="fa fa-bar-chart" aria-hidden="true"></i> สถิติผู้เข้าใช้</a></li>
	</ul>

						</div>


            </div>
            <!-- /sidebar menu -->
