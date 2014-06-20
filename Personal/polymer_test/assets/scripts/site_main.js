// FUNCTIONS
//--------------------------------------------------------------------------------------------------------

	// FIXES FLASH OF UNSTYLED CONTENT BUG - WHERE PAGE LOADS FASTER THAN JS AND MODERNIZR
	// HIDE PAGE WITH CSS CLASS PROVIDED BY MODERNIZR AND WHEN DOCUMENT IS READY, SHOW PAGE WITH JS
	var mulFixFOUC = function() {
		jQuery('html.mul-mod-js').show();
	}


	// LIBRARY EXAMPLES
	//----------------------------------------------------------------------------------------------------

		// CONTENT MODAL

			// Content modal example click event
			var contentModalExampleClickEvent = function(){
				jQuery('#js-mul-content-modal-example-btn').click(function() {
					jQuery('#js-mul-content-modal-example').dialog('open');
				});
			}

		
		// DIALOG/MODAL

			// MODAL

				// Modal dialog with short content example click event
				var modalDialogShortExampleClickEvent = function(){
					jQuery('#js-mul-dialog-modal-example-btn').click(function() {
						jQuery('#js-mul-dialog-modal-example').dialog('open');
					});
				}

				// Modal dialog with long content example click event
				var modalDialogLongExampleClickEvent = function(){
					jQuery('#js-mul-dialog-modal-long-example-btn').click(function() {
						jQuery('#js-mul-dialog-modal-long-example').dialog('open');
					});
				}

				// Modal dialog with long content and fixed buttons (jQuery UI generated) example click event
				var modalDialogLongFixedExampleClickEvent = function(){
					jQuery('#js-mul-dialog-modal-long-fixed-buttons-example-btn').click(function() {
						jQuery('#js-mul-dialog-modal-long-fixed-buttons-example').dialog('open');
					});
				}

				// Modal dialog with click outside example click event
				var modalDialogClickOutsideExampleClickEvent = function(){
					jQuery('#js-mul-dialog-modal-clickoutside-example-btn').click(function() {
						jQuery('#js-mul-dialog-modal-clickoutside-example').dialog('open');
					});
				}

			// LOADING ANIMATION MODAL

				// Loading animation image modal example click event
				var modalDialogLoadingImageExampleClickEvent = function(){
					jQuery('#js-mul-dialog-loading-example-btn').click(function() {
						jQuery('#js-mul-dialog-loading').dialog('open');
					});
				}

				// Loading animation icon modal example click event
				var modalDialogLoadingIconExampleClickEvent = function(){
					jQuery('#js-mul-dialog-loading-icon-example-btn').click(function() {
						jQuery('#js-mul-dialog-loading-icon').dialog('open');
					});
				}


// DOCUMENT READY
//--------------------------------------------------------------------------------------------------------
$(function() {


	// INITIALIZATIONS
	//----------------------------------------------------------------------------------------------------

		// HORIZONTAL SLIDER
		jQuery('.mul-slider-horizontal-example').slider({
			value: 10,
			orientation: "horizontal",
			range: "min",
			animate: true
		});

		// HORIZONTAL SLIDER RANGE
		jQuery('.mul-slider-horizontal-range-example').slider({
			range: true,
			min: 0, // Min value to show on slider
			max: 500, // Max value to show on slider
			values: [ 0, 300 ], // Start values for the sliders handles
			slide: function( event, ui ) {
				jQuery(".mul-horizontal-range-amount").val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
			}
		});

		// JS LIBRARY INITS

			// GOOGLE PRETTIFY INIT (for code snippet coloring/formating)
			prettyPrint();


		// FIXES FLASH OF UNSTYLED CONTENT BUG - WHERE PAGE LOADS FASTER THAN JS AND MODERNIZR
		// HIDE PAGE WITH CSS CLASS PROVIDED BY MODERNIZR AND WHEN DOCUMENT IS READY, SHOW PAGE WITH JS
		mulFixFOUC();


	// LIBRARY EXAMPLES
	//----------------------------------------------------------------------------------------------------

		// AUTO COMPLETE
			
			var autoCompleteExampleData = [
				"Agresta, Jewel (Dallas) - Marsh",
				"Agricola, Dwain (Norwood) - Mercer",
				"Alexy, Dorthy (Chichester) - Mercer",
				"Altonen, Colin (Hartford) - Marsh",
				"Amaral, Ramon (Auckland) - Marsh",
				"Amrich, Darrell (Iowa City) - Mercer",
				"Araiza, Chad (Houston) - Mercer",
				"Arenburg, Margot (Dusseldorf) - Mercer",
				"Argenti, Kathie (Croydon) - Mercer",
				"Arostegui, Marcelo (Norwood) - Mercer",
				"Asberry, Kurtis (Dallas) - Marsh",
				"Assad, Jess (Louisville) - Marsh",
				"Backus, Neil (Dallas) - Marsh",
				"Bagnoli, Luciusv (Croydon) - Marsh",
				"Backus, Neil (Dallas) - Marsh",
				"Bagnoli, Luciusv (Croydon) - Marsh",
				"Assad, Jess (Louisville) - Marsh",
				"Backus, Neil (Dallas) - Marsh",
				"Bagnoli, Luciusv (Croydon) - Marsh",
				"Backus, Neil (Dallas) - Marsh",
				"Bagnoli, Luciusv (Croydon) - Marsh",
				"Assad, Jess (Louisville) - Marsh",
				"Backus, Neil (Dallas) - Marsh",
				"Bagnoli, Luciusv (Croydon) - Marsh",
				"Backus, Neil (Dallas) - Marsh",
				"Bagnoli, Luciusv (Croydon) - Marsh",
				"Bagnli, Luusv (Crydon) - Mercer",
				"Bgnoli, Luciusv (Croon) - Marsh",
				"Bagnol, Lucisv (Crodon) - Mercer",
				"Bagnoli, uciusv (Croyn) - Mercer",
				"gnoli, Lucisv (Cdon) - Mercer",
			];

			//  Auto Suggest init
			mulAutocomplete('js-mul-autocomplete-example',{
				source: autoCompleteExampleData
			});


		// CALENDAR

			// Read only input
			mulDatepicker("js-mul-datepicker-example-readonly");
		 
			// Default example
			mulDatepicker("js-mul-datepicker-example-default");
			
			// Calendar with message
			mulDatepicker("js-mul-datepicker-example-message");
			
			// Masked date input
			mulDatepicker("js-mul-datepicker-example-masked");


		// CALENDAR - DATE RANGE
		 
			// Stacked

			// From date datepicker
			mulDatepickerRange("js-mul-datepicker-range-stacked-from",{
				onClose: function(selectedDate) {
					jQuery( "#js-mul-datepicker-range-stacked-to" ).datepicker( "option", "minDate", selectedDate ); // On calendar close, set the min date of the "To" calendar to the date picked in the "From" calendar
				}
			});

			// To date datepicker
			mulDatepicker("js-mul-datepicker-range-stacked-to",{
				onClose: function(selectedDate) {
					jQuery( "#js-mul-datepicker-range-stacked-from" ).datepicker( "option", "maxDate", selectedDate ); // On calendar close, set the max date of the "From" calendar to the date picked in the "To" calendar
				}
			});

			//----

			// Left Aligned

			// From date datepicker
			mulDatepickerRange("js-mul-datepicker-range-left-aligned-from",{
				onClose: function(selectedDate) {
					jQuery( "#js-mul-datepicker-range-left-aligned-to" ).datepicker( "option", "minDate", selectedDate ); // On calendar close, set the min date of the "To" calendar to the date picked in the "From" calendar
				}
			});

			// To date datepicker
			mulDatepicker("js-mul-datepicker-range-left-aligned-to",{
				onClose: function(selectedDate) {
					jQuery( "#js-mul-datepicker-range-left-aligned-from" ).datepicker( "option", "maxDate", selectedDate ); // On calendar close, set the max date of the "From" calendar to the date picked in the "To" calendar
				}
			});

			//----

			// Right Aligned
			
			// From date datepicker
			mulDatepickerRange("js-mul-datepicker-range-right-aligned-from",{
				onClose: function(selectedDate) {
					jQuery( "#js-mul-datepicker-range-right-aligned-to" ).datepicker( "option", "minDate", selectedDate ); // On calendar close, set the min date of the "To" calendar to the date picked in the "From" calendar
				}
			});

			// To date datepicker
			mulDatepicker("js-mul-datepicker-range-right-aligned-to",{
				onClose: function(selectedDate) {
					jQuery( "#js-mul-datepicker-range-right-aligned-from" ).datepicker( "option", "maxDate", selectedDate ); // On calendar close, set the max date of the "From" calendar to the date picked in the "To" calendar
				}
			});


		// CONTENT MODAL

			// Content modal example
			mulContentModal("js-mul-content-modal-example",{
				clickOutside: true, // Clicking outside content modal closes content modal, false turns off this option
				clickOutsideTrigger: "#js-mul-content-modal-example-btn"
			});

			// Content modal example click event init
			contentModalExampleClickEvent();

		
		// DIALOG/MODAL

			// MODAL

				// Modal dialog with short content example
				mulDialogModal("js-mul-dialog-modal-example");

				// Modal dialog with short content example click event init
				modalDialogShortExampleClickEvent();

				//----

				// Modal dialog with long content example
				mulDialogModal("js-mul-dialog-modal-long-example");

				// Modal dialog with long content example click event init
				modalDialogLongExampleClickEvent();

				//----

				// Modal dialog with long content and fixed buttons (jQuery UI generated) example
				mulDialogModal("js-mul-dialog-modal-long-fixed-buttons-example",{
					buttons: { // Define buttons at bottom of dialog, buttons stay fixed to bottom on dialog with scrolling content div
						'cancel' : { // Define name of button
							text: 'Cancel', // Text of the button
							priority: 'secondary', // Priority level of the button. Values available: primary, secondary
							click: function() { // Click event of the button, this click event adds a close function
								jQuery(this).dialog("close");
							}
						},
						'save' : {
							text: 'Save',
							priority: 'primary',
							"class": 'mul-btn-primary', // Add class to button option. Add class of "mul-btn-primary" for primary button styles
							click: function() {
								jQuery(this).dialog("close");
							}
						}
					}
				});

				// Modal dialog with long content and fixed buttons (jQuery UI generated) example click event init
				modalDialogLongFixedExampleClickEvent();

				//----

				// Modal dialog click outside to close example
				mulDialogModal("js-mul-dialog-modal-clickoutside-example",{

					// Click outside option: click outside modal to close it
					clickOutside: true, // clicking outside the dialog will close it
					clickOutsideTrigger: "#js-mul-dialog-modal-clickoutside-example-btn" // Element (id or class) that triggers the dialog opening 

				});

				// Modal dialog with click outside example click event init
				modalDialogClickOutsideExampleClickEvent();

			// LOADING ANIMATION MODAL

				// Loading animation image modal
				mulDialogModal("js-mul-dialog-loading",{
					dialogClass:'mul-dialog mul-dialog-modal mul-dialog-loading no-close-button'
				});

				// Loading animation image modal click example event init
				modalDialogLoadingImageExampleClickEvent();

				// Loading animation icon modal
				mulDialogModal("js-mul-dialog-loading-icon",{
					dialogClass:'mul-dialog mul-dialog-modal mul-dialog-loading no-close-button'
				});

				// Loading animation icon modal example click event init
				modalDialogLoadingIconExampleClickEvent();


		// SCROLL PANE

			// Custom scroll pane example init
			mulScrollPaneCustom('js-mul-scroll-pane-custom-example',{
				theme: "dark"
			});

		
		// TABS

			// Tabs setup and options
			mulTabs('js-mul-tabs-example');

		
		// ADVANCED FILTER

			// Advanced filter example
			mulAdvancedFilter("js-mul-advanced-filter-example");

});