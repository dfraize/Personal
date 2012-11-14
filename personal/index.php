<!doctype html>
<html class="no-js" lang="en">

<head>

	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame Remove this if you use the .htaccess -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Welcome</title>
	<meta name="keywords" content="">
	<meta name="description" content="" />

	<!-- Mobile viewport optimization http://goo.gl/b9SaQ -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
	<link rel="shortcut icon" href="http://dfraize-designs/favicon.ico">
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">

	<!-- Mobile Internet Explorer allows us to activate ClearType technology for smoothing fonts for easy reading -->
	<meta http-equiv="cleartype" content="on">

<!--
	<script src="http://use.typekit.com/lwt5hsw.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
-->

	<!-- Modernizr - Used to check HTML & CSS3 support in browsers -->
	<script src="assets/js/modernizr_2.5.3.js"></script>

	<link media="screen,print" rel="stylesheet" href="assets/css/theme_v6.css">
</head>

<body>
	<!-- MASTHEAD -->
	<header role="banner" class="masthead"><? include "include/navbar.php";?></header>
	
	<!-- GRID SETUP -->
	<section role="main" class="grid min-height grid-adjust">
		<?php
			$pages_dir = 'include';
			if (!empty($_GET['p'])) {
				$pages = scandir($pages_dir, 0);
				unset($pages[0], $pages[1]);

				$p = $_GET['p'];
				if (in_array($p.'.inc.php', $pages)) {
					include($pages_dir.'/'.$p.'.inc.php');
				} else {
					include($pages_dir.'/not_found.inc.php');
				}
			} else {
				include($pages_dir.'/home.inc.php');
			}
		?>
	</section>
	
	<!-- FOOTER -->
	<footer class="footer"><? include "include/footer.php";?></footer>

	<!-- ALL JAVASCRIPT INCLUDES GO HERE -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="assets/js/main.js"></script>

</body>
</html>
