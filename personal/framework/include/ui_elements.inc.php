<h1>Common UI Elements</h1>
<p>Below is a group of common ways that we layout UI elements in our site. All of the items below come with and HTML snippet and a base css styling.</p>

<hr />

<div class="col-24">
	<div class="col-12">

		<article>
			<h2>jQuery UI Dialog</h2>
			
			<p>
				<a class="ui-btn js-ui-dialog-example-btn" href="javascript:;" title="Click for dialog">
					<span class="large">
						<span class="ui-btn-icn"></span>Click for dialog
					</span>
				</a>
			</p>

			<div id="js-ui-dialog-example" class="js-dialog ui-dialog-ctn">
				<div id="js-ui-dialog-example_title" class="never">This is a jQuery UI dialog titlebar</div>
				<p>This is content for a jQuery UI dialog.</p>	
			</div>

			<a class="ui-btn get-code" id="cp1" href="javascript:;" name="get_code" tabindex="" title="Get HTML Code">
				<span class="small">
					<span class="ui-btn-icn ui-btn-icn- ui-icn-sprite"></span>Get HTML Code
				</span>
			</a>

			<a class="ui-btn get-code" id="cp2" href="javascript:;" name="get_code" tabindex="" title="Get JS Code">
				<span class="small">
					<span class="ui-btn-icn ui-btn-icn- ui-icn-sprite"></span>Get JS Code
				</span>
			</a>

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

			<a class="ui-btn get-code" id="cp3" href="javascript:;" name="get_code" tabindex="" title="Get HTML Code">
				<span class="small">
					<span class="ui-btn-icn ui-btn-icn- ui-icn-sprite"></span>Get HTML Code
				</span>
			</a>

			<a class="ui-btn get-code" id="cp4" href="javascript:;" name="get_code" tabindex="" title="Get JS Code">
				<span class="small">
					<span class="ui-btn-icn ui-btn-icn- ui-icn-sprite"></span>Get JS Code
				</span>
			</a>

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

			<a class="ui-btn get-code" id="cp5" href="javascript:;" name="get_code" tabindex="" title="Get HTML Code">
				<span class="small">
					<span class="ui-btn-icn ui-btn-icn- ui-icn-sprite"></span>Get HTML Code
				</span>
			</a>

			<a class="ui-btn get-code" id="cp6" href="javascript:;" name="get_code" tabindex="" title="Get JS Code">
				<span class="small">
					<span class="ui-btn-icn ui-btn-icn- ui-icn-sprite"></span>Get JS Code
				</span>
			</a>

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

			<a class="ui-btn get-code" id="cp7" href="javascript:;" name="get_code" tabindex="" title="Get HTML Code">
				<span class="small">
					<span class="ui-btn-icn ui-btn-icn- ui-icn-sprite"></span>Get HTML Code
				</span>
			</a>

			<a class="ui-btn get-code" id="cp8" href="javascript:;" name="get_code" tabindex="" title="Get JS Code">
				<span class="small">
					<span class="ui-btn-icn ui-btn-icn- ui-icn-sprite"></span>Get JS Code
				</span>
			</a>

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
				<h3><a href="javascript:;">Section 1</a></h3>
				<div>
					<p>
					Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
					ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
					amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
					odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
					</p>
				</div>
				<h3><a href="javascript:;">Section 2</a></h3>
				<div>
					<p>
					Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
					purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
					velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
					suscipit faucibus urna.
					</p>
				</div>
				<h3><a href="javascript:;">Section 3</a></h3>
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
				<h3><a href="javascript:;">Section 4</a></h3>
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

			<a class="ui-btn get-code" id="cp9" href="javascript:;" name="get_code" tabindex="" title="Get HTML Code">
				<span class="small">
					<span class="ui-btn-icn ui-btn-icn- ui-icn-sprite"></span>Get HTML Code
				</span>
			</a>

			<a class="ui-btn get-code" id="cp10" href="javascript:;" name="get_code" tabindex="" title="Get JS Code">
				<span class="small">
					<span class="ui-btn-icn ui-btn-icn- ui-icn-sprite"></span>Get JS Code
				</span>
			</a>

			<div class="code-panel" id="cp_cp9">
				<script type="syntaxhighlighter" class="brush: xml"><![CDATA[

				<div class="js-ui-accordian-example">
					<h3><a href="javascript:;">Section 1</a></h3>
					<div>
						<p>
						Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
						ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
						amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
						odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
						</p>
					</div>
					<h3><a href="javascript:;">Section 2</a></h3>
					<div>
						<p>
						Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
						purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
						velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
						suscipit faucibus urna.
						</p>
					</div>
					<h3><a href="javascript:;">Section 3</a></h3>
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
					<h3><a href="javascript:;">Section 4</a></h3>
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

		<hr />

		<article>
			<h2>jQuery UI Autocomplete</h2>

			<input id="stInput" name="school" value="$!school" class="js-autocomplete js-input-focus ui-autocomplete-input" tabindex="" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true" maxlength="100" fieldhint="Enter College/University name">

			<p>
				<a class="ui-btn get-code" id="cp11" href="javascript:;" name="get_code" tabindex="" title="Get HTML Code">
					<span class="small">
						<span class="ui-btn-icn ui-btn-icn- ui-icn-sprite"></span>Get HTML Code
					</span>
				</a>

				<a class="ui-btn get-code" id="cp12" href="javascript:;" name="get_code" tabindex="" title="Get JS Code">
					<span class="small">
						<span class="ui-btn-icn ui-btn-icn- ui-icn-sprite"></span>Get JS Code
					</span>
				</a>

				<a class="ui-btn get-code" id="cp13" href="javascript:;" name="get_code" tabindex="" title="Get MVC Properties code">
					<span class="small">
						<span class="ui-btn-icn ui-btn-icn- ui-icn-sprite"></span>Get MVC Properties code
					</span>
				</a>
			</p>

			<div class="code-panel" id="cp_cp11">
				<script type="syntaxhighlighter" class="brush: xml"><![CDATA[

					<input id="stInput" name="school" value="$!school" class="js-autocomplete js-input-focus ui-autocomplete-input" tabindex="" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true" maxlength="100" fieldhint="Enter College/University name">

				]]></script>
			</div>

			<div class="code-panel" id="cp_cp12">
				<script type="syntaxhighlighter" class="brush: js"><![CDATA[

					Put in function section of js file after var p = f.prototype;:

					/**
					 * autocomplete render item function  
					 * @param {Object} ul
					 * @param {Object} item
					 */
					
					//a holder for autocomplete data
					p.initAutoComplete = function(){
						var ac_in = jQuery(".js-autocomplete");
						if(ac_in !== undefined && ac_in.length > 0)
							jQuery(ac_in).autocomplete(p.acdata).data( "autocomplete" )._renderItem = p.rif;
					}
					p.acData = {}
					
					p.rif = function( ul, item ) {
						return $( "<li></li>" )
							.data( "item.autocomplete", item )
							.append( "<a>" + item.label + "<span class='ui-menu-secondary'>" + item.state + "</span></a>" )
							.appendTo( ul );
					}
					
					/**
					 * autocomplete call
					 */
					p.acDo = function(req, add){
						${ds}T.json.send({
							url:"/ac_json?callback=?",
							data:req,
							success:function(xhr){
								var sug = [];
								for(i in xhr.ac){
									var s = i.split("|");
									var r = {};
									r.label = s[0];
									r.state = s[1];
									r.doe = xhr.ac[i];
									if(r.state == undefined)r.state = "";
									sug.push(r);
								}
								add(sug);
							}
						});
					}

					/**
					 * autocomplete selection made
					 * @param {Object} e
					 * @param {Object} ui
					 */
					p.acSelect = function(e, ui){
						jQuery("#js_doe_school").attr("value",ui.item.doe);
					}

					/**
					 * data for setting up autocomplete
					 */
					p.acdata = {
						source: p.acDo,
						select: p.acSelect,
						minLength: 2,
				   		open: function() {jQuery('.js-autocomplete').addClass('ui-autocomplete-input-open');},
						close: function() {jQuery('.js-autocomplete').removeClass('ui-autocomplete-input-open');}
					}


					Put in the p.init (on domready) section of the js file:

					// AUTOCOMPLETE INIT
					p.initAutoComplete();

				]]></script>
			</div>

			<div class="code-panel" id="cp_cp13">
				<script type="syntaxhighlighter" class="brush: js"><![CDATA[

					Put in the mvc.properties file:

					## school autocomplete
		ac_json.action=com.simpletuition.websites.st.school.AutoComplete

				]]></script>
			</div>
		</article>

	</div>

	<div class="col-12 last">

		<article>
			<h2>UI Tooltip</h2>

			<section>
				<h4>Default</h4>
				
				<a href="javascript:;" id="js_ui_guidelines_test" class="js-tt ui-icn-sprite ui-tooltip" alt="Tooltip label"></a>Label

				<p>
					<a class="ui-btn get-code" id="cp14" href="javascript:;" name="get_code" tabindex="" title="Get HTML Code">
						<span class="small">
							<span class="ui-btn-icn ui-btn-icn- ui-icn-sprite"></span>Get HTML Code
						</span>
					</a>
					<a class="ui-btn get-code" id="cp15" href="javascript:;" name="get_code" tabindex="" title="Get JS Code">
						<span class="small">
							<span class="ui-btn-icn ui-btn-icn- ui-icn-sprite"></span>Get JS Code
						</span>
					</a>
				</p>

				<div class="code-panel" id="cp_cp14">
					<script type="syntaxhighlighter" class="brush: xml"><![CDATA[

						<a href="javascript:;" id="js_ui_guidelines_test" class="js-tt ui-icn-sprite ui-tooltip" alt="Tooltip label"></a>Label

					]]></script>
				</div>

				<div class="code-panel" id="cp_cp15">
					<script type="syntaxhighlighter" class="brush: js"><![CDATA[

						Put in the p.init (on domready) section of the js file:

						$T.tooltip.registerTips({

							js_ui_guidelines_test:"This is the tooltip content for the page, so excited to see how it will look on this wonderful tooltip. Lorem ipsum dolor sit amet&hellip;",
							js_ui_guidelines_test2:"This is the tooltip content for the page, so excited to see how it will look on this wonderful tooltip. Lorem ipsum dolor sit amet&hellip;"

						});

					]]></script>
				</div>
			</section>

			<section>
				<h4>With "Read more" link</h4>

				<a href="/" id="js_ui_guidelines_test2" class="js-tt ui-icn-sprite ui-tooltip" alt="Tooltip label"></a>Label

				<p>
					<a class="ui-btn get-code" id="cp16" href="javascript:;" name="get_code" tabindex="" title="Get HTML Code">
						<span class="small">
							<span class="ui-btn-icn ui-btn-icn- ui-icn-sprite"></span>Get HTML Code
						</span>
					</a>
					<a class="ui-btn get-code" id="cp17" href="javascript:;" name="get_code" tabindex="" title="Get JS Code">
						<span class="small">
							<span class="ui-btn-icn ui-btn-icn- ui-icn-sprite"></span>Get JS Code
						</span>
					</a>
				</p>

				<div class="code-panel" id="cp_cp16">
					<script type="syntaxhighlighter" class="brush: xml"><![CDATA[

						<a href="/" id="js_ui_guidelines_test2" class="js-tt ui-icn-sprite ui-tooltip" alt="Tooltip label"></a>Label

					]]></script>
				</div>

				<div class="code-panel" id="cp_cp17">
					<script type="syntaxhighlighter" class="brush: js"><![CDATA[

						Put in the p.init (on domready) section of the js file:

						$T.tooltip.registerTips({

							js_ui_guidelines_test:"This is the tooltip content for the page, so excited to see how it will look on this wonderful tooltip. Lorem ipsum dolor sit amet&hellip;",
							js_ui_guidelines_test2:"This is the tooltip content for the page, so excited to see how it will look on this wonderful tooltip. Lorem ipsum dolor sit amet&hellip;"
							
						});

					]]></script>
				</div>
			</section>
		</article>

		<hr />

		<article>
			<h2>Navbar (horizontal)</h2>

			<dl class="link-list-horz">
				<dd><a href="#">Link one</a><span class="pipe">|</span></dd>
				<dd><a href="#">Link two</a><span class="pipe">|</span></dd>
				<dd><a href="#">Link three</a><span class="pipe">|</span></dd>
				<dd><a href="#">Link four</a></dd>
			</dl>

			<a class="ui-btn get-code" id="cp18" href="javascript:;" name="get_code" tabindex="" title="Get HTML Code">
				<span class="small">
					<span class="ui-btn-icn ui-btn-icn- ui-icn-sprite"></span>Get HTML Code
				</span>
			</a>

			<div class="code-panel" id="cp_cp18">
				<script type="syntaxhighlighter" class="brush: xml"><![CDATA[
					<dl class="link-list-horz">
						<dd><a href="#">Link one</a><span class="pipe">|</span></dd>
						<dd><a href="#">Link two</a><span class="pipe">|</span></dd>
						<dd><a href="#">Link three</a><span class="pipe">|</span></dd>
						<dd><a href="#">Link four</a></dd>
					</dl>
				]]></script>
			</div>
		</article>

		<hr />

		<article>
			<h2>City, state &amp; ZIP code standard layout</h2>
			<form class="ui-form ui-form-inline" id="" name="" method="" action="" title="">
				<fieldset>
					<ol>
						<li class="city-zip-lyt">
							<label class="city-label" for="city">
								City
								<input class="city" id="city" name="city" value="" tabindex="" type="text" title="City" />
							</label>

							<label class="state-label" for="state">
								State
								<select tabindex="" id="state">
									<option>Select</option>
									<option></option>
								</select>
							</label>

							<label class="zip-label" for="zip_code">
								ZIP
								<input class="zip js-numeric" id="zip_code" name="zip_code" value="" tabindex="" type="text" title="ZIP code" maxlength="5" pattern="[0-9]*" />
							</label>

						</li>
					</ol>
				</fieldset>
			</form>
			<a class="ui-btn get-code" id="cp19" href="javascript:;" name="get_code" tabindex="" title="Get HTML Code">
				<span class="small">
					<span class="ui-btn-icn ui-btn-icn- ui-icn-sprite"></span>Get HTML Code
				</span>
			</a>

			<a class="ui-btn get-code" id="cp20" href="javascript:;" name="get_code" tabindex="" title="Get JS Code">
				<span class="small">
					<span class="ui-btn-icn ui-btn-icn- ui-icn-sprite"></span>Get JS Code
				</span>
			</a>

			<div class="code-panel" id="cp_cp19">
				<script type="syntaxhighlighter" class="brush: xml"><![CDATA[
					<fieldset>
						<ol>
							<li class="city-zip-lyt">
								<label class="city-label" for="city">
									City
									<input class="city" id="city" name="city" value="" tabindex="" type="text" title="City" />
								</label>
			
								<label class="state-label" for="state">
									State
									<select tabindex="" id="state">
										<option>Select</option>
										<option></option>
									</select>
								</label>
			
								<label class="zip-label" for="zip_code">
									Zip
									<input class="zip js-numeric" id="zip_code" name="zip_code" value="" tabindex="" type="text" title="Zip code" maxlength="5" pattern="[0-9]*" />
								</label>
			
							</li>
						</ol>
					</fieldset>
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
						<li class="chx-radio checkbox email-opt-in">
							<label class="email-label" for="email_address">Email address</label>
							<input class="email" id="email_address" name="email_address" value="" tabindex="" type="text" title="email address" fieldhint="Enter your email address" />
							<label class="email-optin-label" for="optin">
								<input id="optin" name="optin" type="checkbox" checked="checked">Please send me information about your company
							</label>
						</li>
					</ol>
				</fieldset>
			</form>
			<a class="ui-btn get-code" id="cp21" href="javascript:;" name="get_code" tabindex="" title="Get HTML Code">
				<span class="small">
					<span class="ui-btn-icn ui-btn-icn- ui-icn-sprite"></span>Get HTML Code
				</span>
			</a>

			<div class="code-panel" id="cp_cp21">
				<script type="syntaxhighlighter" class="brush: xml"><![CDATA[
					<fieldset>
						<ol>
							<li class="chx-radio checkbox email-opt-in">
								<label class="email-label" for="email_address">Email address</label>
								<input class="email" id="email_address" name="email_address" value="" tabindex="" type="text" title="email address" fieldhint="Enter your email address" />
								<label class="email-optin-label" for="optin">
									<input id="optin" name="optin" type="checkbox" checked="checked">Please send me information about your company
								</label>
							</li>
						</ol>
					</fieldset>
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
			
			<a class="ui-btn get-code" id="cp22" href="javascript:;" name="get_code" tabindex="" title="Get HTML Code">
				<span class="small">
					<span class="ui-btn-icn ui-btn-icn- ui-icn-sprite"></span>Get HTML Code
				</span>
			</a>

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

#parse("websites/ui_guidelines/back_to_top.vm")
<hr />

<div class="col-24 last">
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
	
</div>
