<!doctype html>
<html class="no-js" lang="en">

<head>

	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame Remove this if you use the .htaccess -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Framework</title>
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
	<script src="js/plugins/modernizr_2.5.3.js"></script>

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
	<link href="css/plugins/code_snippet/shCore.css" rel="stylesheet" type="text/css" media="screen">
	<link href="css/plugins/code_snippet/shThemeEmacs.css" rel="stylesheet" type="text/css" media="screen">

	<link media="screen,print" rel="stylesheet" href="css/styles.css">
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

	<!-- TOOLS FOR THE UI GUIDELINES SITE -->
	<? include "include/tools.php";?>

	<!-- JQUERY INCLUDES -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js"></script>

	<!-- HIGHLIGHTER -->
	<script type="text/javascript" src="js/plugins/code_snippet/shCore.js"></script>
	<script type="text/javascript" src="js/plugins/code_snippet/shBrushCss.js"></script>
	<script type="text/javascript" src="js/plugins/code_snippet/shBrushXml.js"></script>
	<script type="text/javascript" src="js/plugins/code_snippet/shBrushJScript.js"></script>
	<script type="text/javascript">
		SyntaxHighlighter.config.clipboardSwf = 'js/plugins/code_snippet/clipboard.swf';
		SyntaxHighlighter.all();
	</script>

	<!-- JAVASCRIPT SWIPE -->
	<script src="js/plugins/swipe.js"></script>

	<!-- MAIN JS FILES -->
	<script src="js/core.js"></script>
	<script src="js/framework.js"></script>

	<script type="text/javascript">
		var slider = new Swipe(document.getElementById('slider'), {
			startSlide:0,
			speed:800,
//			auto:300,
			callback: function(event, index, elem) {
				jQuery('.indicator span').removeClass('on');
				jQuery('.js-swipe-' + index).addClass('on');
			}
		});
	</script>

</body>
</html>
