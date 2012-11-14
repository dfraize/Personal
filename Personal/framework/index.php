<!DOCTYPE HTML>
<!--[if IE 8]><html class="no-js ie8"><![endif]-->
<!--[if IE 9]><html class="no-js ie9"><![endif]-->
<!--[if gt IE 9]><!--><html class="no-js ie-gt-9" lang="en"><!--<![endif]-->
<head>

	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame Remove this if you use the .htaccess -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Baseline framework</title>
	<meta name="keywords" content="<?php echo $metas; ?>">
	<meta name="description" content="<?php echo $description; ?>" />

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
	<script src="assets/js/plugins/modernizr_2.5.3.js"></script>

	<!-- SYNTAX HIGHLIGHTER CSS -->
	<style>
		.syntaxhighlighter,
		.syntaxhighlighter div,
		.syntaxhighlighter code,
		.syntaxhighlighter table,
		.syntaxhighlighter table td,
		.syntaxhighlighter table tr,
		.syntaxhighlighter table tbody
		{
			height:auto !important;
			min-height:18px !important;
		}
	</style>
	<link href="assets/css/plugins/code_snippet/shCore.css" rel="stylesheet" type="text/css" media="screen">
	<link href="assets/css/plugins/code_snippet/shThemeEmacs.css" rel="stylesheet" type="text/css" media="screen">

	<link media="screen,print" rel="stylesheet" href="assets/css/styles.css">
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
	<!-- BACK TO TOP ANCHOR -->
	<span id="top" class="bookmark"></span>

	<header role="banner" class="ui-box-shadow masthead"><? include "include/navbar.php";?></header>
	<section class="grid">
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

	<!-- TOOLS FOR THE UI GUIDELINES SITE -->
	<? include "include/tools.php";?>

	<!-- JQUERY INCLUDES -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js"></script>

	<!-- HIGHLIGHTER -->
	<script src="assets/js/plugins/code_snippet/shCore.js"></script>
	<script src="assets/js/plugins/code_snippet/shBrushCss.js"></script>
	<script src="assets/js/plugins/code_snippet/shBrushXml.js"></script>
	<script src="assets/js/plugins/code_snippet/shBrushJScript.js"></script>
	<script type="text/javascript">
		SyntaxHighlighter.config.clipboardSwf = 'assets/js/plugins/code_snippet/clipboard.swf';
		SyntaxHighlighter.all();
	</script>

	<!-- JAVASCRIPT PLUGINS -->
	<script src="assets/js/plugins/jquery.alphanumeric.pack.js"></script>
	<script src="assets/js/plugins/fieldhints.js"></script>
	<script src="assets/js/plugins/iphone_button.js"></script>
	<script src="assets/js/plugins/carousel.js"></script>
<!--	<script src="js/plugins/tooltip.js"></script> -->


	<!-- MAIN JS FILES -->
	<script src="assets/js/core.js"></script>
	<script src="assets/js/framework.js"></script>

</body>
</html>