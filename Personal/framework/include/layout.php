$!res.setContentType("text/html")
<!DOCTYPE HTML>
<!--[if IE 8]><html class="no-js ie8"><![endif]-->
<!--[if IE 9]><html class="no-js ie9"><![endif]-->
<!--[if gt IE 9]><!--><html class="no-js ie-gt-9" lang="en"><!--<![endif]-->
<head>
	<title>$!page_title</title>

	## CHARACTER ENCODING
	<meta charset="utf-8">

	## CONTROL LAYOUT ON MOBILE DEVICES
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	## META DATA
	<meta name="description" content="$!meta_description" />
	<meta name="keywords" content="$!meta_keywords" />

	## Mobile IE allows us to activate ClearType technology for smoothing fonts for easy reading
	<meta http-equiv="cleartype" content="on">


	## HOME SCREEN ICONS
		## - REFERENCE -Home screen icon  Mathias Bynens mathiasbynens.be/notes/touch-icons
		<link rel="apple-touch-icon-precomposed" href="/images/core/st_iphone_icon_512x512.png" />

	## FAVICON
	<link rel="shortcut icon" href="/images/$req.webSite.name/favicon.ico" />

	## PASS VARIABLES TO THE PAGE
	#parse("core/header_js.vm")

	## JAVASCRIPT FILES
	#standard_js($req.webSite.name $min_js $header_scripts)

	## TYPEKIT JS
	<script type="text/javascript" src="http://use.typekit.com/qop4fci.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

	## SYNTAX HIGHLIGHTER JS
	<script type="text/javascript" src="/scripts/plugins/code_snippet/shCore.js"></script>
	<script type="text/javascript" src="/scripts/plugins/code_snippet/shBrushCss.js"></script>
	<script type="text/javascript" src="/scripts/plugins/code_snippet/shBrushXml.js"></script>
	<script type="text/javascript" src="/scripts/plugins/code_snippet/shBrushJScript.js"></script>
	<script type="text/javascript">
		SyntaxHighlighter.config.clipboardSwf = '/scripts/plugins/code_snippet/clipboard.swf';
		SyntaxHighlighter.all();
	</script>

	## USED FOR THE JAVASCRIPT CAROUSEL
	<script src="/scripts/plugins/swipe.js"></script>

	## CSS FILES
	<link media="screen,print" type="text/css" rel="stylesheet" href="/css/websites/$!{req.webSite.name}/styles.css" />

	## CSS IE CONDITIONAL
	<!--[if IE]><link media="screen,print" type="text/css" rel="stylesheet" href="/css/websites/$!{req.webSite.name}/ie.css" /><![endif]-->

	## SYNTAX HIGHLIGHTER CSS
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
	<link href="/css/websites/code_snippet/shCore.css" rel="stylesheet" type="text/css" media="screen">
	<link href="/css/websites/code_snippet/shThemeEmacs.css" rel="stylesheet" type="text/css" media="screen">

</head>
<body class="$req.webSite.name $req.target" target="$!req.target" data-ga-id="$!google_tracker_id">
	
	## BACK TO TOP ANCHOR
	<span id="top" class="bookmark"></span>

	## MASTHEAD
	<header role="banner" class="ui-box-shadow masthead">#parse($navbar)</header>

	## MASTHEAD - DEMO
	<header class="ui-box-shadow masthead masthead-demo" style="display:none;">#parse("websites/ui_guidelines/masthead_demo.vm")</header>
	
	## GRID SETUP
	<section role="main" class="grid min-height grid-adjust">
		## PAGE PARSE
		#parse($page)
	</section>
	
	## FOOTER
	<footer class="ui-box-rnd-shadow footer">#parse($footer)</footer>

	## TOOLS FOR THE UI GUIDELINES SITE
	#parse('/websites/ui_guidelines/tools.vm')
	
	## PAGE MISC PARSES
	#parse("core/session_timeout.vm")
	#bot_check("/" $check_bot)
	#parse("core/google_tracker.vm")
	
	## PAGE STATS
	## <div style="clear:both; background-color:#FFF; margin:0 auto; width:980px;">#parse("stats.vm")</div>

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