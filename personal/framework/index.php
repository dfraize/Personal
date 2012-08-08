<!doctype html>
<html class="no-js" lang="en">

<head>

	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame Remove this if you use the .htaccess -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<?php 
if ($_GET['page'] == 'home' ){
	$title = "Home";
}else if ($_GET['page'] == 'work' ){
	$title = "Work";
}else if ($_GET['page'] == 'portfolio' ){
	$title = "Life";
}
?>


	<title><?php echo $title; ?></title>
	<meta name="keywords" content="<?php echo $metas; ?>">
	<meta name="description" content="<?php echo $description; ?>" />


<!--
<?php
	$title = "Doug Fraize - Home";
	$description = "Your Meta Description";
	$keywords = "Your Keywords";
?>

	<title><?php echo $title; ?></title>
	<meta name="author" content="">
	<meta name="description" content="<?php echo $description; ?>" />
	<meta name="keywords" content="<?php echo $keywords; ?>" />
-->

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

	<link media="screen,print" rel="stylesheet" href="/framework/css/styles.css">
</head>

<body>
	<!-- BACK TO TOP ANCHOR -->
	<span id="top" class="bookmark"></span>

	<header role="banner" class="ui-box-shadow masthead"><? include "include/navbar.php";?></header>
	<section class="grid min-height grid-adjust">

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
	<footer class="ui-box-rnd-shadow footer"><? include "include/footer.php";?></footer>

	<!-- ALL JAVASCRIPT INCLUDES GO HERE -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js"></script>
	<script src="/js/framework.js"></script>

</body>
</html>
