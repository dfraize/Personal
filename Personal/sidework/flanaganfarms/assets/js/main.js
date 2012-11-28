$(function() {
/*=== GLOBAL INITS ======================================================================*/

/*=== SITE JS ==========================================================================*/
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
});