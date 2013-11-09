//--------------------------------------------------------------------------------------------------------
// Mercer UX/UI Library - Dialog JS Functions
// DATE - July 3, 2013
// AUTHOR - Doug Fraize, Matthew Holmes
//--------------------------------------------------------------------------------------------------------

// MODAL
//--------------------------------------------------------------------------------------------------------

	// Define modal dialog defaults
	var mulDialogModalDefaults = {
		autoOpen:false, // Control if dialog auto opens
		closeOnEscape:false, // Control if user can close dialog with escape key, default is false
		closeText:'', // Dialog close text, set to nothing if using close button
		dialogClass:'mul-dialog', // Additional classes added to dialog. Classes must be seperated by a space. Add class of "no-close-button" to turn off the dialog's close button. Add additional custom classes for styling.
		draggable: true, // Control if dialog is draggable, default is true
		height:'auto', // Control height of the dialog, we set to 'auto' and allow the content to set the height
		modal:true, // Control if dialog is a modal type, default is true
		resizable:false, // Control if dialog is resizable, default is false
		position:'top', // Control the position of the dialog
		title:null, // Dialog title text, we set the title to null and get the dialog title from the title attribute of the dialog source element
		width:500, // Control the width of the dialog, default is 500, can be overridden as an option passed into mulDialogModal function
		open: function() { // Events for when dialog opens
			
			// Check height of dialog content container
			var dialogContentHeight = jQuery(this).height();
			
			// Set max height of dialog content container
			var dialogMaxContentHeight = 530;

			// If dialog content container height is greater than dialog content container max height then add functionality for scrolling and invoke function to replace scrollbars
			if(dialogContentHeight > dialogMaxContentHeight) {
				var dialogScrollFooter=document.createElement('div'); // create auto-scroll footer gutter div
				jQuery(dialogScrollFooter).attr('class','mul-dialog-scrolling-footer'); // Add class to auto-scroll footer gutter div
				jQuery(this).addClass('mul-dialog-content-scrolling mul-scroll-pane'); // Add classes required for auto-scroll and replacement of scrollbars
				jQuery(this).parent().append(dialogScrollFooter); // Add auto-scroll footer to bottom of modal
				jsMulScrollBars(); // Invoke function to replace scrollbars using jScrollPane
			}
		},
		close: function () { // Events for when dialog closes
			jQuery(this).removeClass('mul-scroll-pane'); // Remove auto-scroll class
		}
	};

	// Modal dialog function, pass id of modal dialog and any modal dialog options you want to add/override
	var mulDialogModal = function(id, options) {
		
		// Variable to define id of dialog
		var dialogModalId = jQuery("#"+id);
		
		// Make specific dialog resource div into a dialog and add modal dialog default options and then pass in any additional or overriding options
		dialogModalId.dialog(jQuery.extend({},mulDialogModalDefaults,options));

		// Close dialog click event used by dialog buttons or links, closes only specific dialog with id passed in
		jQuery('.js-mul-dialog-close').click(function(){
			jQuery('#'+id).dialog('close');
		});
	};