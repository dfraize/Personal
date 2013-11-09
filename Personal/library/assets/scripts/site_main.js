//--------------------------------------------------------------------------------------------------------
// Mercer UX/UI Library - Site Functions & Intializations JS
// DATE - July 3, 2013
// AUTHOR - Doug Fraize, Matthew Holmes
//--------------------------------------------------------------------------------------------------------

//========================================================================================================
// SITE FUNCTIONS & INITS
//========================================================================================================

$(function() {

// FUNCTIONS
//--------------------------------------------------------------------------------------------------------


// INITS
//--------------------------------------------------------------------------------------------------------

	// LAYOUT INITS

		// Set equal heights to columns on library home page       
		setEqualHeights(['.js-mul-hp-column-1', '.js-mul-hp-column-2']);
		

	// JS LIBRARY INITS

		// PRETTIFY INITS
		prettyPrint();


// LIBRARY EXAMPLES
//--------------------------------------------------------------------------------------------------------

// FORMS

	// Textarea expander example init
	jQuery('.js-mul-textarea-expand').textareaExpander();

// AUTO SUGGESTION

	var availableTags = [
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

	jQuery('.js-mul-auto-suggest').autocomplete({
		source: availableTags,
		delay: 0,
		minLength: 3
	});


// CALENDAR

	// Default example
	mulDatepicker("js-mul-datepicker-example-default");
	
	// Calendar with message
	mulDatepicker("js-mul-datepicker-example-message");
	
	// Masked date input
	mulDatepicker("js-mul-datepicker-example-masked");
	
	// Read only input
	mulDatepicker("js-mul-datepicker-example-readonly");


// CALENDAR - DATE RANGE
 
	// Multi-column stacked
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

	// Multi-column stacked with sub labels
	// From date datepicker
	mulDatepickerRange("js-mul-datepicker-range-stacked-labels-from",{
		onClose: function(selectedDate) {
			jQuery( "#js-mul-datepicker-range-stacked-labels-to" ).datepicker( "option", "minDate", selectedDate ); // On calendar close, set the min date of the "To" calendar to the date picked in the "From" calendar
		}
	});

	// To date datepicker
	mulDatepicker("js-mul-datepicker-range-stacked-labels-to",{
		onClose: function(selectedDate) {
			jQuery( "#js-mul-datepicker-range-stacked-labels-from" ).datepicker( "option", "maxDate", selectedDate ); // On calendar close, set the max date of the "From" calendar to the date picked in the "To" calendar
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

	//----

	// Left Aligned With Sub Labels
	// From date datepicker
	mulDatepickerRange("js-mul-datepicker-range-left-aligned-labels-from",{
		onClose: function(selectedDate) {
			jQuery( "#js-mul-datepicker-range-left-aligned-labels-to" ).datepicker( "option", "minDate", selectedDate ); // On calendar close, set the min date of the "To" calendar to the date picked in the "From" calendar
		}
	});

	// To date datepicker
	mulDatepicker("js-mul-datepicker-range-left-aligned-labels-to",{
		onClose: function(selectedDate) {
			jQuery( "#js-mul-datepicker-range-left-aligned-labels-from" ).datepicker( "option", "maxDate", selectedDate ); // On calendar close, set the max date of the "From" calendar to the date picked in the "To" calendar
		}
	});

	//----

	// Right Aligned With Sub Labels
	// From date datepicker
	mulDatepickerRange("js-mul-datepicker-range-right-aligned-labels-from",{
		onClose: function(selectedDate) {
			jQuery( "#js-mul-datepicker-range-right-aligned-labels-to" ).datepicker( "option", "minDate", selectedDate ); // On calendar close, set the min date of the "To" calendar to the date picked in the "From" calendar
		}
	});

	// To date datepicker
	mulDatepicker("js-mul-datepicker-range-right-aligned-labels-to",{
		onClose: function(selectedDate) {
			jQuery( "#js-mul-datepicker-range-right-aligned-labels-from" ).datepicker( "option", "maxDate", selectedDate ); // On calendar close, set the max date of the "From" calendar to the date picked in the "To" calendar
		}
	});

	//----

	// Compact Inline
	// From date datepicker
	mulDatepickerRange("js-mul-datepicker-range-compact-inline-from",{
		onClose: function(selectedDate) {
			jQuery( "#js-mul-datepicker-range-compact-inline-to" ).datepicker( "option", "minDate", selectedDate ); // On calendar close, set the min date of the "To" calendar to the date picked in the "From" calendar
		}
	});

	// To date datepicker
	mulDatepicker("js-mul-datepicker-range-compact-inline-to",{
		onClose: function(selectedDate) {
			jQuery( "#js-mul-datepicker-range-compact-inline-from" ).datepicker( "option", "maxDate", selectedDate ); // On calendar close, set the max date of the "From" calendar to the date picked in the "To" calendar
		}
	});
	

// DIALOG/MODAL

	// MODAL

		// Modal dialog with short content example
		mulDialogModal("js-mul-dialog-modal-example");

		// Modal dialog with short content click event example
		jQuery('#js-mul-dialog-modal-example-btn').click(function() {
			jQuery('#js-mul-dialog-modal-example').dialog('open');
		});

		//----

		// Modal dialog with long content example
		mulDialogModal("js-mul-dialog-modal-long-example");

		// Modal dialog with long content click event example
		jQuery('#js-mul-dialog-modal-long-example-btn').click(function() {
			jQuery('#js-mul-dialog-modal-long-example').dialog('open');
		});

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
				'cancel_disabled' : {
					text: 'Disabled',
					priority: 'secondary',
					disabled: 'disabled' // Disabled button option
				},
				'html_example' : {
					html: '<strong>HTML</strong> example', // HTML inside button option, use in place of "text:"
					priority: 'secondary',
					click: function() {
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

		// Modal dialog with long content and fixed buttons (jQuery UI generated) click event example
		jQuery('#js-mul-dialog-modal-long-fixed-buttons-example-btn').click(function() {
			jQuery('#js-mul-dialog-modal-long-fixed-buttons-example').dialog('open');
		});

	// LOADING ANIMATION MODAL

		// Loading animation modal
		mulDialogModal("js-mul-dialog-loading",{
			dialogClass:'mul-dialog mul-dialog-modal mul-dialog-loading no-close-button',
			width: 350
		});

		// Loading animation modal click event example
		jQuery('#js-mul-dialog-loading-example-btn').click(function() {
			jQuery('#js-mul-dialog-loading').dialog('open');
		});

	// CONTENT MODAL

		// Content modal
		mulDialogModal("js-mul-content-modal-example",{
			dialogClass:'mul-dialog mul-dialog-modal mul-content-modal',
			width: 1200,
			height: $(window).height()
		});

		// Content modal click event example
		jQuery('#js-mul-content-modal-example-btn').click(function() {
			jQuery('#js-mul-content-modal-example').dialog('open');
		});

		// GET STARTED MODAL
		mulDialogModal("js-mul-dialog-get-started",{
			dialogClass:'mul-dialog mul-dialog-modal',
			autoOpen: true,
			width: 980,
			open: function() { // Events for when dialog opens
				// Set max height of dialog content container
				var dialogMaxContentHeight = 600;
			}
		});


// SCROLL PANE

	jQuery('.js-mul-scroll-pane-example').ready(function(){
		jsMulScrollBars();
	});


// TABS

	// Tabs setup and options
	jQuery('.js-mul-tabs-example').tabs();


//TABLES
	
	// THIS IS THE FOOTABLE INIT
	fooTables();


	// FOOTABLE SORTING
	// THIS HANDLSE THE ONLOAD DEFAULT SORT
	var colIndexReady = $('.js-mul-footable-sorted').index();

	$('.js-mul-footable-sorted').ready(function() {
		$('.mul-footable tbody tr').each(function() {
			$(this).find('td').each(function(i) {
				if (i == colIndexReady) {
					$(this).addClass('mul-highlight');
				} else {
					$(this).removeClass('mul-highlight');
				}
			});
		});
	});

	//THIS HANDLES THE CLICK EVENT FOR SORTING
	$('.mul-footable thead th').click(function() {
		var colIndex = $(this).index();
		$('.mul-footable tbody tr').each(function() {
			$(this).find('td').each(function(i) {
				if (i == colIndex) {
					$(this).addClass('mul-highlight');
				} else {
					$(this).removeClass('mul-highlight');
				}
			});
		});
	});

});