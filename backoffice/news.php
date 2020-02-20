<?php require 'backoffice/init.php';?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NEWS |</title>

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <?php include 'inc_head.php';?>
            <?php include 'inc_sidebar.php';?>

			<?php include 'inc_sidebar_footer.php';?>
          </div>
        </div>

			<?php include 'inc_header.php';?>

				<?php
					$p = $_GET['page'];

						$page = "news/".$p.".php";
						if(file_exists($page))
						{
							include($page);
						}

						else if($p =="")
						{
							echo '<script>window.location.href="main.php"</script>';
						}

				?>

        <?php include 'inc_footer.php';?>
      </div>
    </div>
  </body>
</html>
