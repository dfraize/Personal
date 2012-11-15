;(function($){

	var f = function(){};
	var p = f.prototype;

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

			// GET CODE SLIDE OUT
			jQuery(".get-code").click(function(){
				jQuery('#cp_' + (this).id).slideToggle();
			});
			
		/*=== MOBILE INITS ======================================================================*/

			// ADD TOUCH TO SLIDERS FOR MOBILE
//			jQuery('.ui-slider').addTouch();


		/*=== UI EXAMPLES ======================================================================*/
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

		// FORM FIELD HINTS
		function fieldHintInit(){
			var checkInput = function(){
				var $this = jQuery(this);
				if($this.val()=="")$this.val($this.attr("fieldhint")).addClass('fieldhint-color');
			};
			jQuery("[fieldhint]").bind("focus", function(){
				var $this = jQuery(this);
				if($this.val()==$this.attr("fieldhint"))$this.val("").removeClass('fieldhint-color');
			}).bind("blur",checkInput).each(checkInput);
		};

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