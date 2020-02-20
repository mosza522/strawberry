<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>STRAWBERRY | </title>

   <?php include 'inc_head.php';?>
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post" id="login-form" name="login-form" action="">
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" name="username" id="username" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="" />
              </div>
              <div>
                <button class="btn btn-default submit" type="submit" id="btn-login">Log in</button>
                
              </div>

              <div class="clearfix"></div>

              <div class="separator">

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i>Gentelella Alela</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
	<script src="js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$("#login-form").submit(function(){
				$.post("login_process.php",$("#login-form").serialize(),function(data){
					if(data==1){
						window.location='main.php';
					}else{
						$("#login-form")[0].reset();
						alert("Username or password incorrect. Please try agian..")
					}
				});
				return false;
			});
		});
	</script>
  </body>
</html>
