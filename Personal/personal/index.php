
<!-- TEST FOR GITHUB -->


<!doctype html>
<html class="no-js" lang="en">

<head>

	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame Remove this if you use the .htaccess -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Doug Fraize | Front-end Developer</title>
	<meta name="keywords" content="web designer, developer, website, css3, html5, user interface, web developer, sass, jquery, user interface developer">
	<meta name="robots" content="index, follow" />
	<meta name="description" content="Doug Fraize is a professional web designer and front-end developer based in Lincoln, Rhode Island." />

	<!-- Mobile viewport optimization http://goo.gl/b9SaQ -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
	<link rel="shortcut icon" href="http://dfraize-designs/favicon.ico">
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">

	<!-- Mobile Internet Explorer allows us to activate ClearType technology for smoothing fonts for easy reading -->
	<meta http-equiv="cleartype" content="on">

	<script type="text/javascript" src="//use.typekit.net/lwt5hsw.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

	<!-- Modernizr - Used to check HTML & CSS3 support in browsers -->
	<script src="assets/js/modernizr_2.5.3.js"></script>

	<link media="screen,print" rel="stylesheet" href="assets/css/theme_v6.css">
</head>

<?php
function curPageURL() {
	$s = empty($_SERVER["HTTPS"]) ? '' : ($_SERVER["HTTPS"] == "on") ? "s" : "";
	$protocol = substr(strtolower($_SERVER["SERVER_PROTOCOL"]), 0, strpos(strtolower($_SERVER["SERVER_PROTOCOL"]), "/")) . $s;
	$port = ($_SERVER["SERVER_PORT"] == "80") ? "" : (":".$_SERVER["SERVER_PORT"]);
	$uri = $protocol . "://" . $_SERVER['SERVER_NAME'] . $port . $_SERVER['REQUEST_URI'];
	$segments = explode('=', $uri, 2);
	$url = $segments[1];
	return $url;
	}
?>

<body class="<?php echo curPageURL(); ?>">
	<!-- MASTHEAD -->
	<header role="banner" class="masthead"><? include "include/navbar.php";?></header>
	
	<!-- GRID SETUP -->
	<section role="main" class="grid">
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
