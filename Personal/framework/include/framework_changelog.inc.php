<h1>CSS framework changelog</h1>
<div class="notice-ctn">
	<strong>Last updated:</strong> 11/28/2012
</div>
<div class="col-24">
	<article class="col-12 first">
		<h2>Core CSS</h2>
		<section class="ui-box-rnd-adv">
			<div class="box-hdr">
				<h6>Core v4</h6>
			</div>
			<div class="box-bdy">
				<ol>
					<li>Removed the pipe from the link list</li>
					<li>Added a variable now to put a border on the link list</li>
					<li>Update the snippet to no longer include the HTML pipe for link list</li>
				</ol>
			</div>
			<div class="box-ftr"></div>
		</section>

		<section class="ui-box-rnd-adv">
			<div class="box-hdr">
				<h6>Core v4</h6>
			</div>
			<div class="box-bdy">
				<ol>
					<li>Support for SASS 3.2</li>
					<li>IE filter gradient colors now can be shorthanded without errors</li>
					<li>Restructured site SASS library to only use Styles and IE SASS site files (deleted Theme) but added site vars, functions, responsive_320, responsive_768, and responsive_980 SASS partials</li>
					<li>Moved all mixins into core mixins partial</li>
					<li>Moved all SASS functions into core functions partial</li>
					<li>Created a core SASS variables partial for all core vars</li>
					<li>New grid layouts using math mixins</li>
					<li>Removal of last class on grid cols, addition of first class on first grid col</li>
					<li>Addition of offsets to grid layouts</li>
					<li>Buttons can now use grid col classes, is so desired</li>
					<li>Buttons can now use offset classes, is so desired</li>
					<li>Buttons now have less code and more options: Width, Offset, Font size, Color, No margin</li>
					<li>Buttons now have 9 font sizes xxx-small to xxx-large</li>
					<li>Buttons now have 3 predefined gradient colors: orange, green, and blue</li>
					<li>Button groups are now more responsive</li>
					<li>Form elements can now use grid col classes, is so desired</li>
					<li>UI elements are now mobile ready</li>
					<li>Media queries now reduced to 3 breakpoints</li>
					<li>Added mobile/responsive friendly carousel to UI component library</li>
				</ol>
			</div>
			<div class="box-ftr"></div>
		</section>

		<section class="ui-box-rnd-adv">
			<div class="box-hdr">
				<h6>Core v3.5</h6>
			</div>
			<div class="box-bdy">
				<ol>
					<li>Updated ui box partial styles.</li>
					<li>Changed name of _ui_overlay.scss component to _ui_dialog.scss.</li>
					<li>Updated ui datepicker component scss to include call to core icon sprite plus next and prev icons for the datepicker header.</li>
					<li>Removed iPhone checkboxes component scss partial from core 3.5 components along with core images that were tied to it.</li>
					<li>Renamed _iphone_button.scss to _ui_iphone_button.scss.</li>
					<li>
						UPDATED: RESET CSS FILE
						<ul>
							<li>Removed the font tag from the core group set</li>
							<li>Removed the background transparent call on group set, this is not really needed and doesn't help with things</li>
							<li>Added in the HTML5 tags to the core reset group</li>
							<li>Also added a seperate HTML5 group call to make them display block</li>
							<li>Added font: inherit to the declaration block of the first rule. There are still older versions of IE that don’t understand inherit, but support is now widespread enough.</li>
						</ul>
					</li>
					<li>Updated grid partial with call for col-24 which can be used as a clearfix container and also fixes problem with collapsing margins at bottom of col-24 containers, col-24 containers also do not have margin-right by default so no last class is needed.</li>
					<li>Added styles to page partial for keylines, left or right.</li>
					<li>Added styles to page partial for horizontal centering</li>
					<li>Updated styles of blockquote in type partial.</li>
					<li>Added styles to page partial for back to top links.</li>
					<li>Moved masthead and footer styles to page partial, left masthead and footer adjusts in grid partial.</li>
					<li>Added new masthead styles for ui-masthead-util-nav and ui-masthead-nav for core page partial. This provides styles for a masthead utilty nav and a masthead main nav.</li>
				</ol>
			</div>
			<div class="box-ftr"></div>
		</section>
		
		<section class="ui-box-rnd-adv">
			<div class="box-hdr">
				<h6>Core v3.4</h6>
			</div>
			<div class="box-bdy">
				<ol>
					<li>Updated grid partial to make grid-nomargin columns stretch 100% when media query of iPhone is called.</li>
					<li>Updated grid partial with $grid-max-width:980px and added $grid-min-width:320px.</li>
					<li>Updated responsive partial for better media query breakpoints for city, state and zip microformat.</li>
					<li>Updated IE partial to turn off border radius for ui-box iterations.</li>
					<li>Updated all core files with new context size of 15px (up from 13px)</li>
					<li>Updated typography partial with new body text size of .9375em (15px) up from 13px</li>
					<li>Updated typography partial with new vertical alignment of sup (top)</li>
					<li>Updated typography partial with new line-height var with value of 22px</li>
					<li>Updated typography partial with new bosy text color (#494949) and h1-h5 text color (#000)</li>
					<li>Updated typography partial with new dt text color of #000</li>
					<li>Updated reset partial to hide tracking pixel at end of layout.</li>
					<li>Updated ui overlay component css to fix display jqui dialog, positon:absolute on .ui-dialog.</li>
					<li>Updated ui overlay component css to display ui-dialog-ctn none by default.</li>
					<li>Updated ui overlay component css with default styling.</li>
					<li>Updated form partial to make the size of email optin text smaller.</li>
					<li>Update typography partial to fix left margin of ul and ol in Chrome.</li>
					<li>Added list style types to type partial: lower-alpha, upper-alpha, lower-roman, upper-roman.</li>
					<li>Added default styling to ui slider component partial as seen in tpc.</li>
					<li>Added default styling to ui datepicker component partial as seen in tpc.</li>
					<li>Updated ui overlay component css to clearfix dialog content.</li>
					<li>Removed #fff background color from ui-boxes of ui box partial.</li>
					<li>Updated ui tooltip component css to use new styles to correspond with new js implementation.</li>
					<li>Added .ui-form-inline-element class to form partial to inline-block form elements in a standard form setup.</li>
					<li>Removed grad-year css from form partial and microformat from guidelines.</li>
					<li>Removed !important from z-index:10000 of autocomplete menu in ui autocomplete component partial.</li>
					<li>Updated ui autocomplete component styles.</li>
					<li>Added non-responsive partial to core to lock down website layouts to 980px wide. Import in website styles.scss to use.</li>
				</ol>
			</div>
			<div class="box-ftr"></div>
		</section>
		
		<section class="ui-box-rnd-adv">
			<div class="box-hdr">
				<h6>Core v3.3</h6>
			</div>
			<div class="box-bdy">
				<ol>
					<li>Removed core mobile parrtial and resplaced with core responsive partial</li>
					<li>Created new media queries with breaks points in responsive partial</li>
					<li>Updated SASS boilerplates with new responsive design media queries</li>
					<li>Updated core grid partial to create a 100% width page with 100% width header and footer. Grid adjust is a width of 100%, is centered on the page, and has a max-width of 980px. Page container sass variables have been removed and two new grid sass vars have been added: $grid-adjust-width, $grid-max-width.</li>
					<li>Removed $grid-margin from core grid partial, no longer needed.</li>
					<li>Padding added to masthead and footer from core grid partial.</li>
					<li>masthead-adjust and footer-adjust added to core grid partial for centering the masthead and footer content within 100% width masthead and footer, this also required a HTML update to navbar.vm and footer.vm with new div.</li>
					<li>Removed IE7 css fixes fro IE core partial since we are no longer supporting this browser.</li>
					<li>Grid partial now uses 30px gutters which results in a 920px content area.</li>
				</ol>
			</div>
			<div class="box-ftr"></div>
		</section>
		
		<section class="ui-box-rnd-adv">
			<div class="box-hdr">
				<h6>Core v3.2</h6>
			</div>
			<div class="box-bdy">
				<ol>
					<li>Added in the reset.css file a <strong>box-sizing: border-box;</strong> that fixes the box model to not include padding in the width or height of a box. This gives you the box model you want. Applies it to all elements. Turns out many browsers already use border-box for a lot of form elements (which is why inputs and textareas look different at width:100%;)</li>
					<li>Created an override for the grid layout that removes the margin call between columns.</li>
					<li>Fixed ui_tabs component CSS to use 6 character background gradient color values so they do not compile to shorthand in sass.  This causes a bug with IE filters.</li>
					<li>Updated core mobile partial: iPad body text size now takes the font size from core typograophy partial with a size of 13px or .813em.</li>
				</ol>
			</div>
			<div class="box-ftr"></div>
		</section>
		
		<section class="ui-box-rnd-adv">
			<div class="box-hdr">
				<h6>Core v3.1</h6>
			</div>
			<div class="box-bdy">
				<ol>
					<li>Created mobile partial with media query based css for core, removed media query blocks from other core partial files</li>
					<li>For smartphone media query: increased body font size to 1em to mobile partial, added grid col display block to mobile partial from grid partial, created mb-link-list-vert - a vertical link list navigation class based on list-link-horz class, webkit-appearence to remove shadow from inputs added to mobile partial under new media query section for smartphones through ipad, page container width set to 92% to create more 'padding' around site on mobile</li>
					<li>Customized UI guidelines styles.css to make site works on iPhone, fluid size logo implemented is good example of image getting smaller for smart phone media query</li>
					<li>Increased line-height of paragraphs to 18px from 16.38px in core type css partial</li>
					<li>For iPad media query: increased body font size to 1.125em (18px)  to mobile partial</li>
					<li>Added button group to form page of ui guidelines (horizontal and vertical versions) and added corresponding css to ui_btn core partial css file. Add button group html to snippet library.</li>
					<li>Added new button icon positions: top and bottom</li>
					<li>Tightened up button styles, shorter shadow, darker text color on hover</li>
					<li>Added HTML5 input types to form layout page of ui guidelines along with corresponding core form partial css</li>
				</ol>
			</div>
			<div class="box-ftr"></div>
		</section>
		
		<section class="ui-box-rnd-adv">
			<div class="box-hdr">
				<h6>Core v3.0</h6>
			</div>
			<div class="box-bdy">
				<ol>
					<li>Grid has been created to be fluid</li>
					<li>Buttons are set to have a min width</li>
				</ol>
			</div>
			<div class="box-ftr"></div>
		</section>
	</article>
		
	<article class="col-12">
		<h2>Core layout</h2>

		<section class="ui-box-rnd-adv">
			<div class="box-hdr">
				<h6>Core v3.5</h6>
			</div>
			<div class="box-bdy">
				<ol>
					<li>Added in IE conditional calls to add class tags to the HTML tag, this will remove the need to use IE hacks, you should be able to use classes now.</li>
					<li>Added a no-js class tag to the HTML tag, this would help if we want to do something in the case that Javascript it off.</li>
					<li>Added in modernizr 2.5.3 to help with feature detection for CSS3 support</li>
					<li>Also modernizr comes with and HTML5 shim for older browsers.</li>
					<li>Updated UI Guidelines layout to use HTML5
						<ul>
							<li>body</li>
							<li>header</li>
							<li>section</li>
							<li>footer</li>
						</ul>
					</li>
					<li>Added roles attribute to the following tags in layout:
						<ul>
							<li>header: role="banner"</li>
							<li>section: role="main"</li>
						</ul>
					</li>
					<li>Added roles attribute to the following tags for ui boxes:
						<ul>
							<li>aside: role="complementary"</li>
						</ul>
					</li>
				</ol>
			</div>
			<div class="box-ftr"></div>
		</section>
		
		<section class="ui-box-rnd-adv">
			<div class="box-hdr">
				<h6>Core v3.3</h6>
			</div>
			<div class="box-bdy">
				<ol>
					<li>updated mobile viewport tag to NOT include maximum-scale=1.0. This disables user zoom on iPad and should not be used. Using this: meta name="viewport" content="width=device-width, initial-scale=1.0", along with a new core script: /scripts/core/ios-orientationchange-fix.js fixes the iPad orientation bug when users go from portrait to landscape mode and iOS autozooms happens. This would cause the page in landscape mode to display too big."</li>
					<li>removed ui-box-rnd-shadow class from masthead</li>
				</ol>
			</div>
			<div class="box-ftr"></div>
		</section>
	</article>
</div>
