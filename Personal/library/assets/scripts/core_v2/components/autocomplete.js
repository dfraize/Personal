//--------------------------------------------------------------------------------------------------------
// Mercer UX/UI Library - Autocomplete JS Functions
// DATE - July 3, 2013
// AUTHOR - Doug Fraize, Matthew Holmes
//--------------------------------------------------------------------------------------------------------

// This is used to create the highlight for the auto suggest
$.ui.autocomplete.prototype._renderItem = function (ul, item) {
	var keywords = $.trim(this.term).split(' ').join('|');
	var output = item.label.replace(new RegExp("(" + keywords + ")", "gi"), '<span class="ui-menu-item-highlight">$1</span>');
	return $("<li>")
		.append($("<a>").html(output))
		.appendTo(ul);
};