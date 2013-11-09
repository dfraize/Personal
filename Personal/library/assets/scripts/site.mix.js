//--------------------------------------------------------------------------------------------------------
// Mercer UX/UI Library - Site Mixture "Mix" JS Configuration
// INFO: http://docs.mixture.io/preprocessors#mix, compresses specified imported files into one JS file
// DATE - July 3, 2013
// AUTHOR - Doug Fraize, Matthew Holmes
//--------------------------------------------------------------------------------------------------------

// JQUERY/JQUERY UI LIBRARIES
@import "core_v2/lib/jquery/jquery_1.10.2.js";
@import "core_v2/lib/jquery/jquery_ui_1.10.3.js";

// JQUERY PLUGIN LIBRARIES
@import "core_v2/lib/jquery/plugins/jquery.maskedinput.js";
@import "core_v2/lib/jquery/plugins/jquery.mousewheel.js";
@import "core_v2/lib/jquery/plugins/jquery.jscrollpane.js";
@import "core_v2/lib/jquery/plugins/jquery.footables.core.js";
@import "core_v2/lib/jquery/plugins/jquery.footables.filter.js";
@import "core_v2/lib/jquery/plugins/jquery.footables.sorting.js";
@import "core_v2/lib/jquery/plugins/jquery.footables.paginate.js";
@import "core_v2/lib/jquery/plugins/jquery.tooltipster.js";

// POLYFILL LIBRARIES
@import "core_v2/lib/polyfills/placeholder/jquery.placeholder.js"; // HTML5 placeholder polyfill for IE8+, depends on jQuery, https://github.com/matoilic/jquery.placeholder

// CORE JS
@import "core_v2/base.js";
@import "core_v2/components/autocomplete.js";
@import "core_v2/components/datepicker.js";
@import "core_v2/components/dialog.js";
@import "core_v2/components/scroll_pane.js";
@import "core_v2/components/tooltip.js";

// JAVASCRIPT LIBRARIES
@import "lib/prettify/prettify.js";

// SITE INITS JS
@import "site_main.js";