<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>USA Karate</title>

	<!-- CHARACTER ENCODING -->
	<meta charset="utf-8">

	<!-- CONTROL LAYOUT ON MOBILE DEVICES -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- META DATA -->
	<meta http-equiv="keywords" content="" />
	<meta http-equiv="description" content="" />

	<meta name="description" content="<?php echo $pgDesc ?>" />
	<meta name="keywords" content="<?php echo $pgKeywords ?>" />

	<!-- GOOGLE ANALYTICS -->
	<meta name="google-site-verification" content="" />

	<!-- HOME SCREEN ICONS -->
		<!-- - REFERENCE -Home screen icon  Mathias Bynens mathiasbynens.be/notes/touch-icons -->

		<!-- <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/h/apple-touch-icon.png"> -->
		<link rel="apple-touch-icon-precomposed" href="/images/core/st_iphone_icon_512x512.png" />

		<!-- - For first-generation iPad: -->
		<!-- <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/m/apple-touch-icon.png"> -->

		<!-- - For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
		<!-- <link rel="apple-touch-icon-precomposed" href="img/l/apple-touch-icon-precomposed.png"> -->

		<!-- - For nokia devices: -->
		<!-- <link rel="shortcut icon" href="img/l/apple-touch-icon.png"> -->

	<!-- FAVICON -->
	<link rel="shortcut icon" href="/images/favicon.ico" />

	<!-- TYPEKIT JS
	<script type="text/javascript" src="http://use.typekit.com/qop4fci.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	 -->

	<!-- Mobile IE allows us to activate ClearType technology for smoothing fonts for easy reading -->
	<meta http-equiv="cleartype" content="on">

	<!-- CSS FILES -->
	<!-- for development <link media="screen,print" rel="stylesheet" href="assets/css/theme_v1.css"> -->
	<link media="screen,print" rel="stylesheet" href="assets/css/theme_v1_min.css">
</head>

<body>

	<div class="page">
		<div class="page-container page-adjust">
			<div class="masthead"><? include "include/navbar.php";?></div>
			<div class="grid min-height grid-adjust">

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

				<!-- clearing div to fix IE6+7 layout bug -->
				<div class="clear print_never"></div>
			</div>
			<div class="footer clearfix"><? include "include/footer.php";?></div>
		</div>
	</div>

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.1.min.js"></script>
	<script type="text/javascript" src="assets/js/main.js"></script>

	<!-- THIS IS FOR LIGHTBOX -->
	<script type="text/javascript" src="assets/js/lightbox/js/lightbox.js"></script>


</body>
</html>