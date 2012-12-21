<h1>Form layouts</h1>
<p>This is the basic core level of style for form elements. Most of the items below come with a HTML snippet and core css styling.</p>

<hr />

<div class="col-24">
	<div class="col-12 first">

		<article>
			<h2>Sample form &ndash; labels on top</h2>

			<form class="ui-form" id="" name="" method="" action="" title="">
				<fieldset>
					<ol>
						<li class="col-13 first">
							<label for="dummy1">
								<a href="javascript:;" id="js_outline_test" class="js-tt ui-icn-sprite ui-tooltip" alt="First Test Tip"></a>First name
							</label>
							<input id="dummy1" name="dummy1" value="" tabindex="" type="text" title="Text input title" fieldhint="First name" placeholder="First name" />
						</li>

						<li class="col-13 first">
							<label for="dummy2">Last name</label>
							<input id="dummy2" name="dummy2" value="" tabindex="" type="text" title="Text input title" fieldhint="Last name" placeholder="Last name" />
						</li>

						<li class="col-15 first">
							<label for="selectdummy1">Select label</label>
							<select id="selectdummy1" fieldhint="Select an item" tabindex="">
								<option selected="selected" value="Select an item">Select an item</option>
								<option>One</option>
								<option>Two</option>
								<option>Three</option>
							</select>
							<small class="ui-help-text">Hello helpful information container how are you.</small>
						</li>

						<li class="col-13 first">
							<label for="dummy3">Another field</label>
							<input id="dummy3" name="dummy3" value="" tabindex="" type="text" title="Another field" fieldhint="Field hint" placeholder="Field hint" />
						</li>
			
						<li class="col-18 first">
							<label for="dummy4">Textarea</label>
							<textarea cols="20" rows="5" id="dummy4" name="dummy4" tabindex="" fieldhint="Type your comments here&hellip;" placeholder="Type your comments here&hellip;"></textarea>
						</li>
			
						<li class="col-13 first">
							<label for="dummy5">Password field</label>
							<input id="dummy5" name="dummy5" value="" tabindex="" type="password" title="title" />
						</li>
					</ol>
				</fieldset>
				<fieldset>
					<ol>
						<li class="ui-form-action">
							<button class="ui-btn medium col-5 first" id="" name="" value="" tabindex="" type="submit" title="Submit">Submit</button>
						</li>
					</ol>
				</fieldset>
			</form>

			<a class="ui-btn xx-small first get-code" id="cp1" href="javascript:;" name="get_code" tabindex="" title="Get HTML Code">Get HTML Code</a>

			<div class="code-panel" id="cp_cp1">
				<script type="syntaxhighlighter" class="brush: xml"><![CDATA[

				<form class="ui-form" id="" name="" method="" action="" title="">
					<fieldset>
						<ol>
							<li class="col-13 first">
								<label for="">
									<a href="javascript:;" id="" class="js-tt ui-icn-sprite ui-tooltip" alt=""></a>First name
								</label>
								<input id="" name="" value="" tabindex="" type="text" title="" fieldhint="First name" placeholder="First name" />
							</li>

							<li class="col-13 first">
								<label for="">Last name</label>
								<input id="" name="" value="" tabindex="" type="text" title="" fieldhint="Last name" placeholder="Last name" />
							</li>

							<li class="col-14 first">
								<label for="">Select label</label>
								<select id="" class="col-22 first" fieldhint="Select an item" tabindex="">
									<option selected="selected" value="Select an item">Select an item</option>
									<option>One</option>
									<option>Two</option>
									<option>Three</option>
								</select>
								<small class="ui-help-text">Hello helpful information container how are you.</small>
							</li>

							<li class="col-13 first">
								<label for="">Another field</label>
								<input id="" name="" value="" tabindex="" type="text" title="" fieldhint="Field hint" placeholder="Field hint" />
							</li>
				
							<li class="col-18 first">
								<label for="">Textarea</label>
								<textarea cols="20" rows="5" id="" name="" tabindex="" fieldhint="Type your comments here&hellip;" placeholder="Type your comments here&hellip;"></textarea>
							</li>
				
							<li class="col-13 first">
								<label for="">Password field</label>
								<input id="" name="" value="" tabindex="" type="password" title="" />
							</li>
						</ol>
					</fieldset>
					<fieldset>
						<ol>
							<li class="ui-form-action">
								<button class="ui-btn medium col-5 first" id="" name="" value="" tabindex="" type="submit" title="Submit">Submit</button>
							</li>
						</ol>
					</fieldset>
				</form>

				]]></script>
			</div>
		</article>

		<hr />
		
		<article>
			<h2>Sample form &ndash; validation</h2>

			<p>Submit form to see validation styles.</p>

			<form class="ui-form" id="" name="" method="" action="" title="">
				<fieldset>
					<ol>
						<li>
							<label for="dummy6">
								<a href="javascript:;" id="js_outline_test" class="js-tt ui-icn-sprite ui-tooltip" alt="First Test Tip"></a>First name
							</label>
							<input class="js-required-field" id="dummy6" name="dummy6" value="" tabindex="" type="text" title="Text input title" fieldhint="First name" placeholder="First name" />
						</li>

						<li>
							<label for="dummy7">Last name</label>
							<input class="js-required-field" id="dummy7" name="dummy7" value="" tabindex="" type="text" title="Text input title" fieldhint="Last name" placeholder="Last name" />
						</li>

						<li>
							<label for="dummy8">Email address</label>
							<input class="validate-email" id="dummy8" name="dummy8" value="" tabindex="" type="email" title="Enter your email address." fieldhint="example@address.com" placeholder="example@address.com" />
						</li>

						<li>
							<label for="selectdummy2">Select label</label>
							<select id="selectdummy2" class="js-required-field" fieldhint="Select an item" tabindex="">
								<option selected="selected" value="Select an item">Select an item</option>
								<option>One</option>
								<option>Two</option>
								<option>Three</option>
							</select>
							<small class="ui-help-text">Hello helpful information container how are you.</small>
						</li>

						<li>
							<label for="dummy9">Another field</label>
							<input class="js-required-field" id="dummy9" name="dummy9" value="" tabindex="" type="text" title="Another field" fieldhint="Field hint" placeholder="Field hint" />
						</li>
			
						<li>
							<label for="dummy10">Textarea</label>
							<textarea class="js-required-field" cols="20" rows="5" id="dummy10" name="dummy10" tabindex="" fieldhint="Type your comments here&hellip;" placeholder="Type your comments here&hellip;"></textarea>
						</li>
			
						<li>
							<label for="dummy11">Password field</label>
							<input class="js-required-field" id="dummy11" name="dummy11" value="" tabindex="" type="password" title="title" />
						</li>
					</ol>
				</fieldset>
				<fieldset>
					<ol>
						<li class="ui-form-action">
							<button class="ui-btn medium col-5 first js-form-validation-example-btn" id="" name="" value="" tabindex="" type="button" title="Submit">Submit</button>
						</li>
					</ol>
				</fieldset>
			</form>

			<a class="ui-btn xx-small first get-code" id="cp3" href="javascript:;" name="get_code" tabindex="" title="Get HTML Code">Get HTML Code</a>

			<a class="ui-btn xx-small get-code" id="cp4" href="javascript:;" name="get_code" tabindex="" title="Get JS Code">Get JS Code</a>

			<div class="code-panel" id="cp_cp3">
				<script type="syntaxhighlighter" class="brush: xml"><![CDATA[

				<form class="ui-form" id="" name="" method="" action="" title="">
					<fieldset>
						<ol>
							<li>
								<label for="">
									<a href="javascript:;" id="" class="js-tt ui-icn-sprite ui-tooltip" alt=""></a>First name
								</label>
								<input class="js-required-field" id="" name="" value="" tabindex="" type="text" title="" fieldhint="First name" placeholder="First name" />
							</li>

							<li>
								<label for="">Last name</label>
								<input class="js-required-field" id="" name="" value="" tabindex="" type="text" title="" fieldhint="Last name" placeholder="Last name" />
							</li>

							<li>
								<label for="dummy3">Email address</label>
								<input class="validate-email" id="dummy3" name="dummy3" value="" tabindex="" type="email" title="Enter your email address." fieldhint="example@address.com" placeholder="example@address.com" />
							</li>

							<li>
								<label for="">Select label</label>
								<select id="" class="js-required-field" fieldhint="Select an item" tabindex="">
									<option selected="selected" value="Select an item">Select an item</option>
									<option>One</option>
									<option>Two</option>
									<option>Three</option>
								</select>
								<small class="ui-help-text">Hello helpful information container how are you.</small>
							</li>

							<li>
								<label for="">Another field</label>
								<input class="js-required-field" id="" name="" value="" tabindex="" type="text" title="" fieldhint="Field hint" placeholder="Field hint" />
							</li>
				
							<li>
								<label for="">Textarea</label>
								<textarea class="js-required-field" cols="20" rows="5" id="" name="" tabindex="" fieldhint="Type your comments here&hellip;" placeholder="Type your comments here&hellip;"></textarea>
							</li>
				
							<li>
								<label for="">Password field</label>
								<input class="js-required-field" id="" name="" value="" tabindex="" type="password" title="" />
							</li>
						</ol>
					</fieldset>
					<fieldset>
						<ol>
							<li class="ui-form-action">
								<button class="ui-btn medium col-5 first js-form-validation-example-btn" id="" name="" value="" tabindex="" type="button" title="Submit">Submit</button>
							</li>
						</ol>
					</fieldset>
				</form>

				]]></script>
			</div>

			<div class="code-panel" id="cp_cp4">
				<script type="syntaxhighlighter" class="brush: js"><![CDATA[

				Put in function section of js file after var p = f.prototype;:

				// FORM VALIDATION
				p.validate = function(option){
					var valid = true;
					
					// REQUIRED FIELD VALIDATION
					if(option == 'js-required-field'){
						jQuery('.js-required-field').each(function(){
						var ${ds}this = jQuery(this);
						${ds}this.removeClass('error');
						if(jQuery.trim(${ds}this.val())=="" || jQuery.trim(${ds}this.val())==jQuery.trim(${ds}this.attr("fieldhint"))){
							${ds}this.addClass("error");
							valid = false;
							};
						});	
					}
					
					// EMAIL ADDRESS VALIDATION
					if(option == 'validate-email'){
						jQuery('.validate-email').each(function(){
							var ${ds}this = jQuery(this);
							${ds}this.removeClass('error');
							var email = jQuery.trim(${ds}this.val());
							if (email=="" || email==jQuery.trim($this.attr("fieldhint")) || !p.isValidEmailAddress(email)) {
									${ds}this.addClass('error');
									valid = false;
							}
						});			
					}
					
					return valid;
				}
				
				//REG EX FOR ON KEY UP EMAIL VALIDATION
				p.isValidEmailAddress = function (emailAddress) {
					var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
					return pattern.test(emailAddress);
				}

				Put in the p.init (on domready) section of the js file:

				jQuery('.js-form-validation-example-btn').click(function(){
					p.validate('js-required-field');
					p.validate('validate-email');
				});

				]]></script>
			</div>
		</article>
		
		<hr />

		<article>
			<h2>Form input types (including HTML5 types)</h2>
			<form class="ui-form" id="" name="" method="" action="" title="Form input types (including HTML5 types)">
				<fieldset>
					<ol>
						<li>
							<label for="dummy12">Text input type</label>
							<input class="" id="dummy12" name="dummy12" value="" tabindex="" type="text" title="Text" fieldhint="Enter text" placeholder="Enter text" autocomplete="off" />
						</li>
						<li>
							<label for="dummy13">Text input type, numbers 0-9 only accepted</label>
							<input class="" id="dummy13" name="dummy13" value="" tabindex="" type="text" title="Text" fieldhint="" placeholder="" pattern="[0-9]" autocomplete="off" />
						</li>
						<li>
							<label for="dummy14">Text input type, numbers 0-9 only accepted, required</label>
							<input class="" id="dummy14" name="dummy14" value="" tabindex="" type="text" title="Text" fieldhint="" placeholder="" pattern="[0-9]" autocomplete="off" required="required" />
						</li>
						<li>
							<label for="password">Password input type</label>
							<input class="" id="password" name="password" value="" tabindex="" type="password" title="Password" fieldhint="" placeholder="" autocomplete="off" />
						</li>
						<li>
							<label for="number">Number input type</label>
							<input class="" id="number" name="number" value="" tabindex="" type="number" min="" max="" step="" value="" title="Number" fieldhint="Enter a number" placeholder="Enter a number" />
						</li>
						<li>
							<label for="email">Email input type</label>
							<input class="" id="email" name="email" value="" tabindex="" type="email" title="Email" fieldhint="Enter your email address" placeholder="Enter your email address" autocomplete="on" required="required" />
						</li>
						<li>
							<label for="url">URL input type</label>
							<input class="" id="url" name="url" value="" tabindex="" type="url" title="URL" fieldhint="Enter a URL" placeholder="Enter a URL" autocomplete="on" />
						</li>
						<li>
							<label for="tel">Telephone input type</label>
							<input class="" id="tel" name="tel" value="" tabindex="" type="tel" title="Telephone" fieldhint="Enter a telephone #" placeholder="Enter a telephone #" autocomplete="on" />
						</li>
						<li>
							<label for="time">Time input type</label>
							<input class="" id="time" name="time" value="" tabindex="" type="time" title="Time" fieldhint="Enter a time" placeholder="Enter a time" autocomplete="off" />
						</li>
						<li>
							<label for="date">Date input type</label>
							<input class="" id="date" name="date" value="" tabindex="" type="date" title="Date" fieldhint="Enter a date" placeholder="Enter a date" autocomplete="off" />
						</li>
						<li>
							<label for="month">Month input type</label>
							<input class="" id="month" name="month" value="" tabindex="" type="month" title="Month" fieldhint="Enter a month" placeholder="Enter a month" autocomplete="off" />
						</li>
						<li>
							<label for="week">Week input type</label>
							<input class="" id="week" name="week" value="" tabindex="" type="week" title="Week" fieldhint="Enter a week" placeholder="Enter a week" autocomplete="off" />
						</li>
						<li>
							<label for="datetime">Datetime input type</label>
							<input class="" id="datetime" name="datetime" value="" tabindex="" type="datetime" title="Datetime" fieldhint="Enter a datetime" placeholder="Enter a datetime" autocomplete="off" />
						</li>
						<li>
							<label for="datetime-local">Datetime local input type</label>
							<input class="" id="datetime-local" name="datetime-local" value="" tabindex="" type="datetime-local" title="Datetime local" fieldhint="Enter a datetime local" placeholder="Enter a datetime local" autocomplete="off" />
						</li>
						<li>
							<label for="color">Color input type</label>
							<input class="" id="color" name="color" value="" tabindex="" type="color" title="color" fieldhint="Choose a color" placeholder="Choose a color" autocomplete="off" />
						</li>
						<li>
							<label for="range">Range input type</label>
							<input class="" id="range" name="range" value="" tabindex="" type="range" min="1" max="10" step="" value="5" title="Range" autocomplete="off" />
						</li>
						<li>
							<label for="search">Search input type</label>
							<input class="" id="search" name="search" value="" tabindex="" type="search" title="Search" fieldhint="Enter search term" placeholder="Enter search term" autocomplete="on" />
						</li>
					</ol>
				</fieldset>
			</form>
		</article>
		
	</div>

	<div class="col-12">

		<article>
			<h2>Sample form &ndash; labels on side</h2>
			<form class="ui-form" id="" name="" method="" action="" title="">
				<fieldset>
					<ol>
						<li>
							<label class="col-7 first" for="dummy15">
								<a href="javascript:;" id="js_outline_test" class="js-tt ui-icn-sprite ui-tooltip" alt="First Test Tip"></a>First name
							</label>
							<input class="col-17" id="dummy15" name="dummy15" value="" tabindex="" type="text" title="Text input title" fieldhint="First name" placeholder="First name" />
						</li>

						<li>
							<label class="col-7 first" for="dummy16">Last name</label>
							<input class="col-17" id="dummy16" name="dummy16" value="" tabindex="" type="text" title="Text input title" fieldhint="Last name" placeholder="Last name" />
						</li>

						<li>
							<label for="selectdummy3" class="col-7 first">Select label</label>
							<select id="selectdummy3" class="col-17" fieldhint="Select an item" tabindex="">
								<option selected="selected" value="Select an item">Select an item</option>
								<option>One</option>
								<option>Two</option>
								<option>Three</option>
							</select>
							<small class="col-17 offset-7 ui-help-text">Hello helpful information container how are you.</small>
						</li>

						<li>
							<label class="col-7 first" for="dummy17">Another field</label>
							<input class="col-17" id="dummy17" name="dummy17" value="" tabindex="" type="text" title="Another field" fieldhint="Field hint" placeholder="Field hint" />
						</li>
			
						<li>
							<label class="col-7 first" for="dummy18">Textarea</label>
							<textarea class="col-17" cols="20" rows="5" id="dummy18" name="dummy18" tabindex="" fieldhint="Type your comments here&hellip;" placeholder="Type your comments here&hellip;"></textarea>
						</li>
			
						<li>
							<label class="col-7 first" for="dummy19">Password field</label>
							<input class="col-17" id="dummy19" name="dummy19" value="" tabindex="" type="password" title="title" />
						</li>
					</ol>
				</fieldset>
				<fieldset>
					<ol>
						<li class="ui-form-action">
							<button class="ui-btn medium col-5 offset-19" id="" name="" value="" tabindex="" type="submit" title="Submit">Submit</button>
						</li>
					</ol>
				</fieldset>
			</form>

			<a class="ui-btn xx-small first get-code" id="cp2" href="javascript:;" name="get_code" tabindex="" title="Get HTML Code">Get HTML Code</a>

			<div class="code-panel" id="cp_cp2">
				<script type="syntaxhighlighter" class="brush: xml"><![CDATA[

				<form class="ui-form" id="" name="" method="" action="" title="">
					<fieldset>
						<ol>
							<li>
								<label class="col-7 first" for="">
									<a href="javascript:;" id="" class="js-tt ui-icn-sprite ui-tooltip" alt=""></a>First name
								</label>
								<input class="col-17" id="" name="" value="" tabindex="" type="text" title="" fieldhint="First name" placeholder="First name" />
							</li>

							<li>
								<label class="col-7 first" for="">Last name</label>
								<input class="col-17" id="" name="" value="" tabindex="" type="text" title="" fieldhint="Last name" placeholder="Last name" />
							</li>

							<li>
								<label for="" class="col-7 first">Select label</label>
								<select id="" class="col-17" fieldhint="Select an item" tabindex="">
									<option selected="selected" value="Select an item">Select an item</option>
									<option>One</option>
									<option>Two</option>
									<option>Three</option>
								</select>
								<small class="offset-7 ui-help-text">Hello helpful information container how are you.</small>
							</li>

							<li>
								<label class="col-7 first" for="">Another field</label>
								<input class="col-17" id="" name="" value="" tabindex="" type="text" title="" fieldhint="Field hint" placeholder="Field hint" />
							</li>
				
							<li>
								<label class="col-7 first" for="">Textarea</label>
								<textarea class="col-17" cols="20" rows="5" id="" name="" tabindex="" fieldhint="Type your comments here&hellip;" placeholder="Type your comments here&hellip;"></textarea>
							</li>
				
							<li>
								<label class="col-7 first" for="">Password field</label>
								<input class="col-17" id="" name="" value="" tabindex="" type="password" title="" />
							</li>
						</ol>
					</fieldset>
					<fieldset>
						<ol>
							<li class="ui-form-action">
								<button class="ui-btn medium col-5 offset-18 first" id="" name="" value="" tabindex="" type="submit" title="Submit">Submit</button>
							</li>
						</ol>
					</fieldset>
				</form>

				]]></script>
			</div>
		</article>

		<hr />

		<article>
			<h2>Select, checkboxes and lists</h2>
			<form class="ui-form" id="" name="" method="" action="" title="Select, checkboxes and lists">
				<fieldset>
					<ol>
						<li>
							<label for="selectdummy4">Select field</label>
							<select name="selectdummy4" id="selectdummy4">
								<option value="1">Ottawa</option>
								<option value="2">Calgary</option>
								<option value="3">Moosejaw</option>
							</select>
						</li>

						<li>
							<label for="selectdummy5">Select with groups</label>
							<select id="selectdummy5" name="selectdummy5">
								<option>Favorite pet</option>
								<optgroup label="mammals">
									<option>dog</option>
									<option>cat</option>
									<option>rabbit</option>
									<option>horse</option>
								</optgroup>
								<optgroup label="reptiles">
									<option>iguana</option>
									<option>snake</option>
								</optgroup>
							</select>
						</li>
					</ol>
				</fieldset>

				<br />

				<p>For the radio button and checkbox layouts use the HTML setup you see below with the following class/classes: for a radio button setup use class "chx-radio" and for the checkbox layout use classes "chx-radio checkbox".</p>
				
				<fieldset>
					<div>Pick your favorite flavor</div>
					<ol>
						<li class="chx-radio">
							<label class="col-24" for="radiodummy1">
								<input name="example" type="radio" id="radiodummy1">
								Vanilla
							</label>

							<label class="col-24" for="radiodummy2">
								<input name="example" type="radio" id="radiodummy2">
								Chocolate
							</label>

							<label class="col-24" for="radiodummy3">
								<input name="example" type="radio" id="radiodummy3">
								Strawberry
							</label>
						</li>
					</ol>	
				</fieldset>

				<a class="ui-btn xx-small first get-code" id="cp5" href="javascript:;" name="get_code" tabindex="" title="Get HTML Code">Get HTML Code</a>

				<div class="code-panel" id="cp_cp5">
					<script type="syntaxhighlighter" class="brush: xml"><![CDATA[

						<ol>
							<li class="chx-radio">
								<label class="col-24" for="radiodummy1">
									<input name="example" type="radio" id="radiodummy1">
									Vanilla
								</label>

								<label class="col-24" for="radiodummy2">
									<input name="example" type="radio" id="radiodummy2">
									Chocolate
								</label>

								<label class="col-24" for="radiodummy3">
									<input name="example" type="radio" id="radiodummy3">
									Strawberry
								</label>
							</li>
						</ol>

					]]></script>
				</div>

				<br />
				<br />
				<br />

				<fieldset>
					<div>Pick another flavor</div>
					<ol>
						<li class="chx-radio checkbox">
							<label class="col-24" for="checkdummy1">
								<input name="example" type="checkbox" id="checkdummy1">
								Checkbox one
							</label>

							<label class="col-24" for="checkdummy2">
								<input name="example" type="checkbox" id="checkdummy2">
								Checkbox two
							</label>

							<label class="col-24" for="checkdummy3">
								<input name="example" type="checkbox" id="checkdummy3">
								Checkbox three
							</label>
						</li>
					</ol>
				</fieldset>

				<a class="ui-btn xx-small first get-code" id="cp6" href="javascript:;" name="get_code" tabindex="" title="Get HTML Code">Get HTML Code</a>

				<div class="code-panel" id="cp_cp6">
					<script type="syntaxhighlighter" class="brush: xml"><![CDATA[

						<ol>
							<li class="chx-radio checkbox">
								<label class="col-24" for="checkdummy1">
									<input name="example" type="checkbox" id="checkdummy1">
									Checkbox one
								</label>

								<label class="col-24" for="checkdummy2">
									<input name="example" type="checkbox" id="checkdummy2">
									Checkbox two
								</label>

								<label class="col-24" for="checkdummy3">
									<input name="example" type="checkbox" id="checkdummy3">
									Checkbox three
								</label>
							</li>
						</ol>

					]]></script>
				</div>

			</form>
		</article>
		
		<hr />
		
		<article>
			<h2>Select, checkboxes and lists &ndash; inline</h2>
			<form class="ui-form" id="" name="" method="" action="" title="Select, checkboxes and lists">
				<fieldset>
					<ol>
						<li>
							<label class="col-8 first" for="selectdummy6">Select field</label>
							<select class="col-16" name="selectdummy6" id="selectdummy6">
								<option value="1">Ottawa</option>
								<option value="2">Calgary</option>
								<option value="3">Moosejaw</option>
							</select>
						</li>

						<li>
							<label class="col-8 first" for="selectdummy7">Select with groups</label>
							<select class="col-16" id="selectdummy7" name="selectdummy7">
								<option>Favorite pet</option>
								<optgroup label="mammals">
									<option>dog</option>
									<option>cat</option>
									<option>rabbit</option>
									<option>horse</option>
								</optgroup>
								<optgroup label="reptiles">
									<option>iguana</option>
									<option>snake</option>
								</optgroup>
							</select>
						</li>
					</ol>
				</fieldset>
				<fieldset>
					<label>Pick your favorite flavor</label>
					<ol>
						<li class="chx-radio">
							<label class="col-8 first" for="radiodummy4">
								<input name="example" type="radio" id="radiodummy4">
								Vanilla
							</label>

							<label class="col-8" for="radiodummy5">
								<input name="example" type="radio" id="radiodummy5">
								Chocolate
							</label>

							<label class="col-8" for="radiodummy6">
								<input name="example" type="radio" id="radiodummy6">
								Strawberry
							</label>
						</li>
					</ol>	
				</fieldset>

				<fieldset>
					<label>Pick another flavor</label>
					<ol>
						<li class="chx-radio checkbox">
							<label class="col-8 first" for="checkdummy4">
								<input name="example" type="checkbox" id="checkdummy4">
								Checkbox one
							</label>

							<label class="col-8" for="checkdummy5">
								<input name="example" type="checkbox" id="checkdummy5">
								Checkbox two
							</label>

							<label class="col-8" for="checkdummy6">
								<input name="example" type="checkbox" id="checkdummy6">
								Checkbox three
							</label>
						</li>
					</ol>
				</fieldset>
			</form>
		</article>
		
		<hr />

		<article>
			<h2>Message boxes</h2>
			<div class="error-ctn">This is a &lt;div&gt; with the class <strong>.error-ctn/.alert-ctn</strong>. <a href="#">Link</a>.</div>
			<div class="notice-ctn">This is a &lt;div&gt; with the class <strong>.notice-ctn</strong>. <a href="#">Link</a>.</div>
			<div class="info-ctn">This is a &lt;div&gt; with the class <strong>.info-ctn</strong>. <a href="#">Link</a>.</div>
			<div class="success-ctn">This is a &lt;div&gt; with the class <strong>.success-ctn</strong>. <a href="#">Link</a>.</div>

			<a class="ui-btn xx-small first get-code" id="cp7" href="javascript:;" name="get_code" tabindex="" title="Get HTML Code">Get HTML Code</a>

			<div class="code-panel" id="cp_cp7">
				<script type="syntaxhighlighter" class="brush: xml"><![CDATA[

					<div class="error-ctn">This is a &lt;div&gt; with the class <strong>.error-ctn/.alert-ctn</strong>. <a href="#">Link</a>.</div>
					<div class="notice-ctn">This is a &lt;div&gt; with the class <strong>.notice-ctn</strong>. <a href="#">Link</a>.</div>
					<div class="info-ctn">This is a &lt;div&gt; with the class <strong>.info-ctn</strong>. <a href="#">Link</a>.</div>
					<div class="success-ctn">This is a &lt;div&gt; with the class <strong>.success-ctn</strong>. <a href="#">Link</a>.</div>

				]]></script>
			</div>
		</article>

	</div>
</div>
