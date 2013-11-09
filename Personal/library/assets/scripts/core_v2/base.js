//--------------------------------------------------------------------------------------------------------
// Mercer UX/UI Library - Base JS Functions
// DATE - July 3, 2013
// AUTHOR - Doug Fraize, Matthew Holmes
//--------------------------------------------------------------------------------------------------------

//========================================================================================================
// BASE FUNCTIONS
//========================================================================================================

// BUTTONS
//--------------------------------------------------------------------------------------------------------

	// MUL LOADING BUTTON
	var LoadingBtnClass = '.js-mul-btn-loading';
	var LoadingBtnResetText = jQuery(LoadingBtnClass).html();
	var d = 'disabled';
	jQuery(LoadingBtnClass).click(function(){
		jQuery(LoadingBtnClass).html('loading&hellip;').addClass(d).attr(d, d);
			setTimeout(function () {
			jQuery(LoadingBtnClass).html(LoadingBtnResetText).removeClass(d).removeAttr(d, d);
		}, 3000)
	});


// FORMS
//--------------------------------------------------------------------------------------------------------

	// NUMERIC MASK FOR INPUT - Text input only accepts numbers
	jQuery('.js-mul-numeric-mask').on('keypress', function(ev) {
		var keyCode = window.event ? ev.keyCode : ev.which;
		//codes for 0-9
		if (keyCode < 48 || keyCode > 57) {
		//codes for backspace, delete, enter
		if (keyCode != 0 && keyCode != 8 && keyCode != 13 && !ev.ctrlKey) {
			ev.preventDefault();
			}
		}
	});

	// FORM ELEMENT AUTOFOCUS
	if (!("autofocus" in document.createElement("input"))) {
		jQuery(".js-mul-autofocus").focus();
	}

	// TEXTAREA EXPANDER
	$.fn.textareaExpander = function( minHeight, maxHeight ){

		//initialize
		this.each( function(){

		if( this.nodeName.toLowerCase()!='textarea' )
			return;

		var $this = $(this);
		//set height restrictions
		if( $this.data('textexp-initialized')!==true )
		{
			minHeight = minHeight || 32;
			maxHeight = maxHeight || 300;
				
			$this.data('textexp-initialized', true );
			$this.data('textexp-min', minHeight || this.clientHeight );
			$this.data('textexp-max', maxHeight || this.clientHeight+300 );
			this.style.height = minHeight || this.clientHeight;
					
			this.style.overflow    = 'hidden';
			$(this).bind('keyup', resize).bind('input',resize).bind('focus',resize);
		}
		});
		
		function resize(e)
		{
			e = e.target || e;
			var $e = $(e);
		
			var h = Math.min( e.scrollHeight, $e.data('textexp-max') );
			h = Math.max( h, $e.data('textexp-min') );

			//if( $e.data('h')!=e.style.height )
			if( $e.data('h')!=h )
			{
				e.style.height = ""; // Reset the height
				e.style.height         =  h + "px";
				//e.style.overflow    = (e.scrollHeight > h ? "auto" : "hidden");

				$e.data('h',h);
			 }
			return true;
		 }
	}

	// SELECTED CHECKBOX
	jQuery(".js-mul-checkbox-highlight input[type='checkbox']").on('change', function() {
		jQuery(this).parent().toggleClass('mul-checkbox-checked', this.checked);
	});


// INTERACTIVE
//--------------------------------------------------------------------------------------------------------

	// TOGGLE CONTENT
	jQuery('.js-mul-toggle-content').click(function(){
		jQuery('.js-toggle-content-hide').hide(); // Hides all layers first
		var id = 'div' + $(this).attr('mul-data-toggle');
		jQuery('#' + id).toggle();
	});


// LAYOUT
//--------------------------------------------------------------------------------------------------------

	// SET EQUAL HEIGHTS ON COLUMNS
	function setEqualHeights(columns)
	{
		var tallestcolumn = 0;
		$.each(columns, function(index){
			var currentHeight = $(columns[index]).height();

			if(currentHeight > tallestcolumn)
			{
				tallestcolumn = currentHeight;
			}
		});

		$.each(columns, function(index){
			$(columns[index]).height(tallestcolumn);
		});
	};


// MESSAGE CONTAINERS
//--------------------------------------------------------------------------------------------------------

	// MESSAGE CONTAINER CLOSE EVENT
	jQuery('.js-mul-close-ctn').click(function(){
		jQuery(this).parent().parent().fadeOut(400);
	});


// TABLES
//--------------------------------------------------------------------------------------------------------

	// MUL FOOTABLES DATA TABLE
	function fooTables()
	{
		jQuery('.mul-footable').footable({
			addRowToggle: true
		}).trigger('.mul-footable-toggle');
	};


// HEADER
//--------------------------------------------------------------------------------------------------------

// TOGGLE MASTHEAD PROFILE MENU
jQuery('.mul-profile-menu-icon.mul-icon-down-dir').hide();
jQuery('.js-mul-profile-menu-display').click(function() {
	jQuery('.mul-profile-menu').slideToggle('fast');
	jQuery('.mul-icon-right-dir').toggle();
	jQuery('.mul-icon-down-dir').toggle();
});


//========================================================================================================
// BASE INITS
//========================================================================================================
