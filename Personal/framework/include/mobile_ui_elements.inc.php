<h1>Mobile UI Elements</h1>
<p>Below is a group of common ways that we layout mobile UI elements in our site. All of the items below come with and HTML snippet and a base css styling.</p>

<nav>
	<h5>Sections</h5>
	<dl class="link-list-horz">
		<dd><a href="#phone-ui-elements">Phone</a><span class="pipe">|</span></dd>
		<dd><a href="#tablet-ui-elements">Tablet</a></dd>
	</dl>
</nav>

<hr />

<article>
	<h2><span class="bookmark" id="phone-ui-elements"></span>Phone: UI Elements</h2>
	<section class="col-24">
		<hr />
		<h4>320x480 (iPhone 4/4S - portrait)</h4>
		<iframe src="$mobile_url" width="320" height="480" marginheight="0" marginwidth="0" frameborder="0"></iframe>
		<hr />
		<h4>480x320 (iPhone 4/4S - landscape)</h4>
		<iframe src="$mobile_url" width="480" height="320" marginheight="0" marginwidth="0" frameborder="0"></iframe>
		<hr />
		<h4>320x568 (iPhone 5 - portrait)</h4>
		<iframe src="$mobile_url" width="320" height="568" marginheight="0" marginwidth="0" frameborder="0"></iframe>
		<hr />
		<h4>568x320 (iPhone 5 - landscape)</h4>
		<iframe src="$mobile_url" width="568" height="320" marginheight="0" marginwidth="0" frameborder="0"></iframe>
	</section>
	<section class="col-24">
		<hr />
		<h4>480x854 (SonyEricsson LT15i Xperia Arc - portrait)</h4>
		<iframe src="$mobile_url" width="480" height="854" marginheight="0" marginwidth="0" frameborder="0"></iframe>
		<hr />
		<h4>854x480 (SonyEricsson LT15i Xperia Arc - landscape)</h4>
		<iframe src="$mobile_url" width="854" height="480" marginheight="0" marginwidth="0" frameborder="0"></iframe>
	</section>
</article>

<? include "include/back_to_top.php";?>
<hr />

<article>
	<h2><span class="bookmark" id="tablet-ui-elements"></span>Tablet: UI Elements</h2>
	<section class="col-24">
		<hr />
		<h4>768x1024 (iPad - portrait)</h4>
		<iframe src="$mobile_url" width="768" height="1024" marginheight="0" marginwidth="0" frameborder="0"></iframe>
		<hr />
		<h4>1024x768 (iPad - landscape)</h4>
		<iframe src="$mobile_url" width="1024" height="768" marginheight="0" marginwidth="0" frameborder="0"></iframe>
	</section>
	<section class="col-24">
		<hr />
		<h4>800x1280 (Asus Eee Pad Transformer - portrait)</h4>
		<iframe src="$mobile_url" width="800" height="1280" marginheight="0" marginwidth="0" frameborder="0"></iframe>
		<hr />
		<h4>1280x800 (Asus Eee Pad Transformer - landscape)</h4>
		<iframe src="$mobile_url" width="1280" height="800" marginheight="0" marginwidth="0" frameborder="0"></iframe>
	</section>
</article>

<br />

<? include "include/back_to_top.php";?>
<!-- #set($mobile_url = "/ui_elements") -->