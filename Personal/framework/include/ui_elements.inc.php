<h1>Common UI Elements</h1>
<p>Below is a group of common ways that we layout UI elements in our site. All of the items below come with and HTML snippet and a base css styling.</p>

<hr />

<div class="col-24">
	<div class="col-12 first">

		<article>
			<h2>jQuery UI Dialog</h2>
			
			<p>
				<a class="ui-btn large first js-ui-dialog-example-btn" href="javascript:;" title="Click for dialog">Click for dialog</a>
			</p>

			<a class="ui-btn xx-small first get-code" id="cp1" href="javascript:;" name="get_code" tabindex="" title="Get HTML Code">Get HTML Code</a>

			<a class="ui-btn xx-small get-code" id="cp2" href="javascript:;" name="get_code" tabindex="" title="Get JS Code">Get JS Code</a>

			<div class="code-panel" id="cp_cp1">
				<script type="syntaxhighlighter" class="brush: xml"><![CDATA[

					<div id="js-ui-dialog-example" class="js-dialog ui-dialog-ctn">
						<div id="js-ui-dialog-example_title" class="never">This is a jQuery UI dialog titlebar</div>
						<p>This is content for a jQuery UI dialog.</p>	
					</div>

				]]></script>
			</div>

			<div class="code-panel" id="cp_cp2">
				<script type="syntaxhighlighter" class="brush: js"><![CDATA[

					Put in the p.init (on domready) section of the js file:

					jQuery('.js-ui-dialog-example-btn').click(function(){
						notify.idDialog('js-ui-dialog-example',{draggable:false,resizable:false});
					});

				]]></script>
			</div>
		</article>

		<hr />

		<article>
			<h2>jQuery UI Tabs</h2>

			<div class="js-tabs-example ui-tabs">
				<ul>
					<li><a href="#tabs-1">Tab 1</a></li>
					<li><a href="#tabs-2">Tab 2</a></li>
					<li><a href="#tabs-3">Tab 3</a></li>
				</ul>
				<div id="tabs-1">
					Tab 1 content.
				</div>
				<div id="tabs-2">
					Tab 2 content.
				</div>
				<div id="tabs-3">
					Tab 3 content.
				</div>
			</div>

			<a class="ui-btn xx-small first get-code" id="cp3" href="javascript:;" name="get_code" tabindex="" title="Get HTML Code">Get HTML Code</a>

			<a class="ui-btn xx-small get-code" id="cp4" href="javascript:;" name="get_code" tabindex="" title="Get JS Code">Get JS Code</a>

			<div class="code-panel" id="cp_cp3">
				<script type="syntaxhighlighter" class="brush: xml"><![CDATA[

					<div class="js-tabs-example ui-tabs">
						<ul>
							<li><a href="#tabs-1">Tab 1</a></li>
							<li><a href="#tabs-2">Tab 2</a></li>
							<li><a href="#tabs-3">Tab 3</a></li>
						</ul>
						<div id="tabs-1">
							Tab 1 content.
						</div>
						<div id="tabs-2">
							Tab 2 content.
						</div>
						<div id="tabs-3">
							Tab 3 content.
						</div>
					</div>

				]]></script>
			</div>

			<div class="code-panel" id="cp_cp4">
				<script type="syntaxhighlighter" class="brush: js"><![CDATA[

					Put in the p.init (on domready) section of the js file:

					jQuery( ".js-tabs-example" ).tabs();

				]]></script>
			</div>
		</article>

		<hr />

		<article>
			<h2>jQuery UI Slider</h2>

			<div class="ui-slider js-ui-slider-example"></div>

			<a class="ui-btn xx-small first get-code" id="cp5" href="javascript:;" name="get_code" tabindex="" title="Get HTML Code">Get HTML Code</a>
			<a class="ui-btn xx-small get-code" id="cp6" href="javascript:;" name="get_code" tabindex="" title="Get JS Code">Get JS Code</a>

			<div class="code-panel" id="cp_cp5">
				<script type="syntaxhighlighter" class="brush: xml"><![CDATA[

					<div class="ui-slider js-ui-slider-example"></div>

				]]></script>
			</div>

			<div class="code-panel" id="cp_cp6">
				<script type="syntaxhighlighter" class="brush: js"><![CDATA[

					Put in the p.init (on domready) section of the js file:

					jQuery('.js-ui-slider-example').slider();

				]]></script>
			</div>
		</article>

		<hr />

		<article>
			<h2>jQuery UI Datepicker</h2>

			<p><input class="js-ui-datepicker-example" fieldhint="Pick a date" type="text" readonly="readonly" title="Pick a date" /></p>

			<a class="ui-btn xx-small first get-code" id="cp7" href="javascript:;" name="get_code" tabindex="" title="Get HTML Code">Get HTML Code</a>

			<a class="ui-btn xx-small get-code" id="cp8" href="javascript:;" name="get_code" tabindex="" title="Get JS Code">Get JS Code</a>

			<div class="code-panel" id="cp_cp7">
				<script type="syntaxhighlighter" class="brush: xml"><![CDATA[

					<input class="js-ui-datepicker-example" fieldhint="Pick a date" type="text" readonly="readonly" title="Pick a date" />

				]]></script>
			</div>

			<div class="code-panel" id="cp_cp8">
				<script type="syntaxhighlighter" class="brush: js"><![CDATA[

					Put in the p.init (on domready) section of the js file:

					jQuery('.js-ui-datepicker-example').datepicker();

				]]></script>
			</div>
		</article>

		<hr />

		<article>
			<h2>jQuery UI Accordian</h2>

			<div class="js-ui-accordian-example">
				<h5><a href="javascript:;">Section 1</a></h5>
				<div>
					<p>
					Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
					ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
					amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
					odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
					</p>
				</div>
				<h5><a href="javascript:;">Section 2</a></h5>
				<div>
					<p>
					Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
					purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
					velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
					suscipit faucibus urna.
					</p>
				</div>
				<h5><a href="javascript:;">Section 3</a></h5>
				<div>
					<p>
					Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
					Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
					ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
					lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
					</p>
				</div>
				<h5><a href="javascript:;">Section 4</a></h5>
				<div>
					<p>
					Cras dictum. Pellentesque habitant morbi tristique senectus et netus
					et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
					faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
					mauris vel est.
					</p>
				</div>
			</div>

			<a class="ui-btn xx-small first get-code" id="cp9" href="javascript:;" name="get_code" tabindex="" title="Get HTML Code">Get HTML Code</a>

			<a class="ui-btn xx-small get-code" id="cp10" href="javascript:;" name="get_code" tabindex="" title="Get JS Code">Get JS Code</a>

			<div class="code-panel" id="cp_cp9">
				<script type="syntaxhighlighter" class="brush: xml"><![CDATA[

				<div class="js-ui-accordian-example">
					<h5><a href="javascript:;">Section 1</a></h5>
					<div>
						<p>
						Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
						ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
						amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
						odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
						</p>
					</div>
					<h5><a href="javascript:;">Section 2</a></h5>
					<div>
						<p>
						Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
						purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
						velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
						suscipit faucibus urna.
						</p>
					</div>
					<h5><a href="javascript:;">Section 3</a></h5>
					<div>
						<p>
						Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
						Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
						ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
						lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
						</p>
						<ul>
							<li>List item one</li>
							<li>List item two</li>
							<li>List item three</li>
						</ul>
					</div>
					<h5><a href="javascript:;">Section 4</a></h5>
					<div>
						<p>
						Cras dictum. Pellentesque habitant morbi tristique senectus et netus
						et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
						faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
						mauris vel est.
						</p>
						<p>
						Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
						Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
						inceptos himenaeos.
						</p>
					</div>
				</div>

				]]></script>
			</div>

			<div class="code-panel" id="cp_cp10">
				<script type="syntaxhighlighter" class="brush: js"><![CDATA[

					Put in the p.init (on domready) section of the js file:

					jQuery('.js-ui-accordian-example').accordion();

				]]></script>
			</div>
		</article>

	</div>

	<div class="col-12">

		<article>
			<h2>UI Tooltip</h2>

			<section>
				<h4>Default</h4>
				
				<label><a href="javascript:;" id="js_baseline_test" class="js-tt ui-icn-sprite ui-tooltip" alt="Tooltip label"></a>Label</label>

				<p>
					<a class="ui-btn xx-small first get-code" id="cp14" href="javascript:;" name="get_code" tabindex="" title="Get HTML Code">Get HTML Code</a>
					<a class="ui-btn xx-small get-code" id="cp15" href="javascript:;" name="get_code" tabindex="" title="Get JS Code">Get JS Code</a>
				</p>

				<div class="code-panel" id="cp_cp14">
					<script type="syntaxhighlighter" class="brush: xml"><![CDATA[

						<a href="javascript:;" id="js_baseline_test" class="js-tt ui-icn-sprite ui-tooltip" alt="Tooltip label"></a>Label

					]]></script>
				</div>

				<div class="code-panel" id="cp_cp15">
					<script type="syntaxhighlighter" class="brush: js"><![CDATA[

						Put in the p.init (on domready) section of the js file:

						$T.tooltip.registerTips({

							js_baseline_test:"This is the tooltip content for the page, so excited to see how it will look on this wonderful tooltip. Lorem ipsum dolor sit amet&hellip;",
							js_baseline_test2:"This is the tooltip content for the page, so excited to see how it will look on this wonderful tooltip. Lorem ipsum dolor sit amet&hellip;"

						});

					]]></script>
				</div>
			</section>

			<section>
				<h4>With "Read more" link</h4>

				<label><a href="/" id="js_baseline_test2" class="js-tt ui-icn-sprite ui-tooltip" alt="Tooltip label"></a>Label</label>

				<p>
					<a class="ui-btn xx-small first get-code" id="cp16" href="javascript:;" name="get_code" tabindex="" title="Get HTML Code">Get HTML Code</a>
					<a class="ui-btn xx-small get-code" id="cp17" href="javascript:;" name="get_code" tabindex="" title="Get JS Code">Get JS Code</a>
				</p>

				<div class="code-panel" id="cp_cp16">
					<script type="syntaxhighlighter" class="brush: xml"><![CDATA[

						<a href="/" id="js_baseline_test2" class="js-tt ui-icn-sprite ui-tooltip" alt="Tooltip label"></a>Label

					]]></script>
				</div>

				<div class="code-panel" id="cp_cp17">
					<script type="syntaxhighlighter" class="brush: js"><![CDATA[

						Put in the p.init (on domready) section of the js file:

						$T.tooltip.registerTips({

							js_baseline_test:"This is the tooltip content for the page, so excited to see how it will look on this wonderful tooltip. Lorem ipsum dolor sit amet&hellip;",
							js_baseline_test2:"This is the tooltip content for the page, so excited to see how it will look on this wonderful tooltip. Lorem ipsum dolor sit amet&hellip;"
							
						});

					]]></script>
				</div>
			</section>
		</article>

		<hr />

		<article>
			<h2>Navbar</h2>

			<dl class="link-list-horz mb-link-list-vert">
				<dd><a href="#">Link one</a><span class="pipe">|</span></dd>
				<dd><a href="#">Link two</a><span class="pipe">|</span></dd>
				<dd><a href="#">Link three</a><span class="pipe">|</span></dd>
				<dd class="last-child"><a href="#">Link four</a></dd>
			</dl>

			<a class="ui-btn xx-small first get-code" id="cp18" href="javascript:;" name="get_code" tabindex="" title="Get HTML Code">Get HTML Code</a>

			<div class="code-panel" id="cp_cp18">
				<script type="syntaxhighlighter" class="brush: xml"><![CDATA[
					<dl class="link-list-horz mb-link-list-vert">
						<dd><a href="#">Link one</a><span class="pipe">|</span></dd>
						<dd><a href="#">Link two</a><span class="pipe">|</span></dd>
						<dd><a href="#">Link three</a><span class="pipe">|</span></dd>
						<dd class="last-child"><a href="#">Link four</a></dd>
					</dl>
				]]></script>
			</div>
		</article>

		<hr />

		<article>
			<h2>City, state &amp; ZIP code standard layout</h2>
			<form class="ui-form" id="" name="" method="" action="" title="">
				<fieldset>
					<ol>
						<li class="col-10 first">
							<label for="city">City</label>
							<input id="city" name="city" value="" tabindex="" type="text" title="City" />
						</li>

						<li class="col-8">
							<label for="state">State</label>
							<select tabindex="" id="state">
								<option>Select</option>
								<option></option>
							</select>
						</li>

						<li class="col-6">
							<label for="zip_code">ZIP</label>
							<input class="zip js-numeric" id="zip_code" name="zip_code" value="" tabindex="" type="text" title="ZIP code" maxlength="5" pattern="[0-9]*" />
						</li>
					</ol>
				</fieldset>
			</form>
			<a class="ui-btn xx-small first get-code" id="cp19" href="javascript:;" name="get_code" tabindex="" title="Get HTML Code">Get HTML Code</a>
			<a class="ui-btn xx-small get-code" id="cp20" href="javascript:;" name="get_code" tabindex="" title="Get JS Code">Get JS Code</a>

			<div class="code-panel" id="cp_cp19">
				<script type="syntaxhighlighter" class="brush: xml"><![CDATA[
					<form class="ui-form" id="" name="" method="" action="" title="">
						<fieldset>
							<ol>
								<li class="col-5">
									<label for="city">City</label>
									<input id="city" name="city" value="" tabindex="" type="text" title="City" />
								</li>

								<li class="col-8">
									<label for="state">State</label>
									<select tabindex="" id="state">
										<option>Select</option>
										<option></option>
									</select>
								</li>

								<li class="col-6">
									<label for="zip_code">ZIP</label>
									<input class="zip js-numeric" id="zip_code" name="zip_code" value="" tabindex="" type="text" title="ZIP code" maxlength="5" pattern="[0-9]*" />
								</li>
							</ol>
						</fieldset>
					</form>
				]]></script>
			</div>

			<div class="code-panel" id="cp_cp20">
				<script type="syntaxhighlighter" class="brush: js"><![CDATA[

					Put in the p.init (on domready) section of the js file:

					jQuery(".js-numeric").numeric();

				]]></script>
			</div>
		</article>

		<hr />

		<article>
			<h2>Standard email with opt in layout</h2>
			<form class="ui-form" id="" name="" method="" action="" title="">
				<fieldset>
					<ol>
						<li class="email">
							<label for="email_address">Email address</label>
							<input id="email_address" name="email_address" value="" tabindex="" type="email" title="Enter your email address" fieldhint="Enter your email address" />
						</li>
						<li class="email-optin">
							<label for="optin">
								<input id="optin" name="optin" type="checkbox" checked="checked">Please send me information about your company
							</label>
						</li>
					</ol>
				</fieldset>
			</form>
			<a class="ui-btn xx-small first get-code" id="cp21" href="javascript:;" name="get_code" tabindex="" title="Get HTML Code">Get HTML Code</a>

			<div class="code-panel" id="cp_cp21">
				<script type="syntaxhighlighter" class="brush: xml"><![CDATA[
					<form class="ui-form" id="" name="" method="" action="" title="">
						<fieldset>
							<ol>
								<li class="email">
									<label for="email_address">Email address</label>
									<input id="email_address" name="email_address" value="" tabindex="" type="email" title="Enter your email address" fieldhint="Enter your email address" />
								</li>
								<li class="email-optin">
									<label for="optin">
										<input id="optin" name="optin" type="checkbox" checked="checked">Please send me information about your company
									</label>
								</li>
							</ol>
						</fieldset>
					</form>
				]]></script>
			</div>
		</article>

		<hr />

		<article>
			<h2>iPhone Toggle Button</h2>
			<div class="switch">
				<input type="radio" id="radio1" name="" checked="checked" />
				<input type="radio" id="radio2" name="" />
				<label for="radio1" class="cb-enable selected"><span>Yes</span></label>
				<label for="radio2" class="cb-disable"><span>No</span></label>
			</div>
			
			<a class="ui-btn xx-small first get-code" id="cp22" href="javascript:;" name="get_code" tabindex="" title="Get HTML Code">Get HTML Code</a>

			<div class="code-panel" id="cp_cp22">
				<script type="syntaxhighlighter" class="brush: xml"><![CDATA[

				<div class="switch">
					<input type="radio" id="radio1" name="" checked="checked" />
					<input type="radio" id="radio2" name="" />
					<label for="radio1" class="cb-enable selected"><span>Yes</span></label>
					<label for="radio2" class="cb-disable"><span>No</span></label>
				</div>
					
				]]></script>
			</div>
		</article>
	</div>
</div>

<? include "include/back_to_top.php";?>
<hr />

<div class="col-24">
	<article>
		<h2>Box layouts</h2>

		<aside role="complementary" class="ui-box-rnd">
			<h5>UI box with round corners</h5>
			<p>
				Using the <strong>"ui-box-rnd"</strong> class will get you this display.<br />
				In Sublime editor use <strong>uibox</strong> to trigger snippet
			</p>
		</aside>

		<aside role="complementary" class="ui-box-shadow">
			<h5>UI box with a shadow</h5>
			<p>
				Using the <strong>"ui-box-shadow"</strong> class will get you this display.<br />
				In Sublime editor use <strong>uibox</strong> to trigger snippet
			</p>
		</aside>

		<aside role="complementary" class="ui-box-rnd-shadow">
			<h5>UI box with round corners and shadow</h5>
			<p>
				Using the <strong>"ui-box-rnd-shadow"</strong> class will get you this display.<br />
				In Sublime editor use <strong>uibox</strong> to trigger snippet
			</p>
		</aside>

		<aside role="complementary" class="ui-box">
			<header class="box-hdr">
				<h6>Advanced UI box</h6>
			</header>
			<section class="box-bdy">
				<p>
					Using the <strong>"ui-box"</strong> class will get you this display.<br />
					In Sublime editor use <strong>uibox-adv</strong> to trigger snippet
				</p>
			</section>
			<footer class="box-ftr"></footer>
		</aside>

		<aside role="complementary" class="ui-box-rnd-adv">
			<header class="box-hdr">
				<h6>Advanced UI box with round corners</h6>
			</header>
			<section class="box-bdy">
				<p>
					Using the <strong>"ui-box-rnd-adv"</strong> will result in this display.<br />
					In Sublime editor use <strong>uibox-adv</strong> to trigger snippet
				</p>
			</section>
			<footer class="box-ftr"></footer>
		</aside>

		<aside role="complementary" class="ui-box-shadow-adv">
			<header class="box-hdr">
				<h6>Advanced UI box with a shadow</h6>
			</header>
			<section class="box-bdy">
				<p>
					Using the <strong>"ui-box-shadow-adv"</strong> will result in this display.<br />
					In Sublime editor use <strong>uibox-adv</strong> to trigger snippet
				</p>
			</section>
			<footer class="box-ftr"></footer>
		</aside>

		<aside role="complementary" class="ui-box-rnd-shadow-adv">
			<header class="box-hdr">
				<h6>Advanced UI box with round corners and shadow</h6>
			</header>
			<section class="box-bdy">
				<p>
					Using the <strong>"ui-box-rnd-shadow"</strong> will result in this display.<br />
					In Sublime editor use <strong>uibox-adv</strong> to trigger snippet
				</p>
			</section>
			<footer class="box-ftr"></footer>
		</aside>
	</article>

	<hr />

	<article>
		<h2>UI Responsive Carousel</h2>

		<div class="carousel">
			<ul class="slides">
				<li><img src="assets/images/carousel_img_a.jpg" /></li>
				<li><img src="assets/images/carousel_img_b.jpg" /></li>
				<li><img src="assets/images/carousel_img_c.jpg" /></li>
				<li><img src="assets/images/carousel_img_d.jpg" /></li>
				<li>
					<div class="col-11 offset-2">
						<h1>This is a title</h1>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur.</p>
						<a class="ui-btn  xx-large" id="" href="#" name="" tabindex="" title="Sign up!">Sign up!</a>
					</div>
					<div class="col-1">&nbsp;</div>	
					<div class="col-10"><img src="assets/images/carousel_img_d.jpg" /></div>
				</li>
			</ul>
		</div>
		
		<br />

		<div class="col-24">
			<a class="ui-btn xx-small first get-code" id="cp23" href="javascript:;" name="get_code" tabindex="" title="Get HTML Code">Get HTML Code</a>
			<a class="ui-btn xx-small get-code" id="cp24" href="javascript:;" name="get_code" tabindex="" title="Get JS Code">Get JS Code</a>
			<div class="code-panel" id="cp_cp23">
				<script type="syntaxhighlighter" class="brush: xml"><![CDATA[

					<div class="carousel">
						<ul class="slides">
							<li>
								<img src="assets/images/carousel_img_a.jpg" />
							</li>
							<li>
								<img src="assets/images/carousel_img_b.jpg" />
							</li>
							<li>
								<img src="assets/images/carousel_img_c.jpg" />
							</li>
							<li>
								<img src="assets/images/carousel_img_d.jpg" />
							</li>
							<li>
								<div class="col-11 offset-2">
									<h1>This is a title</h1>
									<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur.</p>
									<a class="ui-btn  xx-large" id="" href="#" name="" tabindex="" title="Sign up!">Sign up!</a>
								</div>
								<div class="col-1">
									&nbsp;
								</div>	
								<div class="col-10">
									<img src="assets/images/carousel_img_d.jpg" />
								</div>
							</li>
						</ul>
					</div>

				]]></script>
			</div>
			<div class="code-panel" id="cp_cp24">
				<script type="syntaxhighlighter" class="brush: js"><![CDATA[

					Put in the p.init (on domready) section of the js file and add as many parameters as you wish:

					// JQUERY FLEXSLIDER CAROUSEL
					jQuery('.carousel').flexslider({
		        		animation: "slide",
		        		//Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
		        		pauseOnHover: true,
		        		 //Integer: Set the speed of the slideshow cycling, in milliseconds
		        		slideshowSpeed: 7000,
		        		start: function(slider){
		          			jQuery('body').removeClass('loading');
		        		}
		      		});

				]]></script>
			</div>
		</div>

	</article>
	
</div>