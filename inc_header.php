<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
	if(empty($_title)) 			$_title ='';
	if(empty($_keywords)) 		$_keywords ='';
	if(empty($_description)) 	$_description ='';

  include("multilanguage.php");
  $host="localhost";
  $user="strawberry_admin";
  $pass="043522359";
  $db="strawberry_club";
  $connect = mysql_connect($host,$user,$pass);
  mysql_query("SET NAMES UTF8",$connect);
  mysql_select_db($db);

?>


    <meta name="robot" content="noindex, nofollow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link type="text/css" rel="stylesheet" href="css/reset.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="css/print.css" media="print" />
    <link type="text/css" rel="stylesheet" href="css/dark-hive/jquery-ui-1.8.18.custom.css" media="screen,projection" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/layout.css" media="screen,projection" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link type="image/ico" rel="shortcut icon" href="images/favicon.ico">
    <link rel="stylesheet" href="master/css/libs/animate.css">
    <link rel="stylesheet" href="master/css/site.css">
    <link type="image/ico" rel="shortcut icon" href="images/favicon.ico">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
  <link type="text/css" rel="stylesheet" href="css/font-awesome.css">


    <script type="text/javascript" language="javascript" src="script/init.js"></script>
    <script src="script/bootstrap.min.js"></script>
    <script src="master/dist/wow.js"></script>
    <script>
        wow = new WOW({
            animateClass: 'animated'
            , offset: 100
            , callback: function (box) {
                console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
            }
        });
        wow.init();
        document.getElementById('moar').onclick = function () {
            var section = document.createElement('section');
            section.className = 'section--purple wow fadeInDown';
            this.parentNode.insertBefore(section, this);
        };
    </script>
    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-106400185-1', 'auto');
      ga('send', 'pageview');

    </script>
