;(function($){

	var f = function(){};
	var p = f.prototype;
		 	
	// FORM VALIDATION
	p.validate = function(option){
		var valid = true;
		
		// REQUIRED FIELD VALIDATION
		if(option == 'js-required-field'){
			jQuery('.js-required-field').each(function(){
			var $this = jQuery(this);
			$this.removeClass('error');
			if(jQuery.trim($this.val())=="" || jQuery.trim($this.val())==jQuery.trim($this.attr("fieldhint"))){
				$this.addClass("error");
				valid = false;
				};
			});	
		}
		
		// EMAIL ADDRESS VALIDATION
		if(option == 'validate-email'){
			jQuery('.validate-email').each(function(){
				var $this = jQuery(this);
				$this.removeClass('error');
				var email = jQuery.trim($this.val());
				if (email=="" || email==jQuery.trim($this.attr("fieldhint")) || !p.isValidEmailAddress(email)) {
						$this.addClass('error');
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
		$T.json.send({
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
	
	/**
 	 * Initialize whatever is needed on domready here
 	 */
 	p.init = function(){
 	
 		/*=== GLOBAL INITS ======================================================================*/

			// DIALOGS
			
				// Destroy Dialog
				jQuery('.js-dialog-destroy-action').click(function(){
					jQuery('.js-dialog').dialog('destroy');
				});

	 		// FIELDHINTS INIT
			fieldHintInit();

			// AUTOCOMPLETE INIT
			p.initAutoComplete();

			// GET CODE SLIDE OUT
			jQuery(".get-code").click(function(){
				jQuery('#cp_' + (this).id).slideToggle();
			});
			
		/*=== MOBILE INITS ======================================================================*/
			
			// ADD TOUCH TO SLIDERS FOR MOBILE
			jQuery('.ui-slider').addTouch();


		/*=== UI EXAMPLES ======================================================================*/
		
		// FORM VALIDATION
		jQuery('.js-form-validation-example-btn').click(function(){
			p.validate('js-required-field');
			p.validate('validate-email');
		});

		// FORM INPUTS ONLY ACCEPT NUMBERS
		jQuery(".js-numeric").numeric();

		// JQUERY UI DIALOG
	 	jQuery('.js-ui-dialog-example-btn').click(function(){
			notify.idDialog('js-ui-dialog-example',{draggable:false,resizable:false});
		});

		// JQUERY UI TABS
		jQuery( ".js-tabs-example" ).tabs();

		// JQUERY UI SLIDER
		jQuery('.js-ui-slider-example').slider();

		// JQUERY UI DATEPICKER
		jQuery('.js-ui-datepicker-example').datepicker();

		// JQUERY UI ACCORDIAN
		jQuery('.js-ui-accordian-example').accordion();

		/*=== SITE JS ==========================================================================*/

		// NAVBAR
		jQuery(".ui-navbar-menu-btn").click(function() {
			jQuery('.ui-navbar-menu').slideToggle();
		});

		// HOMEPAGE QR CODE
		jQuery('.qr-code-link').click(function(){
			jQuery('.qr-code').toggle();
		});

		// GRID DEBUGGER TOGGLE
		// This is used in to show the gridelines on the page
		jQuery('#debug-btn').click(function(){
			jQuery('.gutters').toggle();
			jQuery('#debug-grid').toggle();
		});

		// MASTHEAD DEMO TOGGLE
		// This is used to toggle the masthead demo
		jQuery('.masthead-demo-btn').click(function(){
			jQuery('.masthead-demo').toggle();
		});

		// MASTHEAD DEMO - LOGIN EXAMPLE
		// This is used to toggle the masthead demo login example
		jQuery('.js-login-btn').click(function(){
			jQuery('.js-login').toggle();
			jQuery('.js-logout').toggle();
		});
	}
	
	$T.ui_guidelines = new f();
 	$T.registerInit($T.ui_guidelines.init);

})(jQuery);