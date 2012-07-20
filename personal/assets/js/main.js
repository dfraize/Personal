jQuery(document).ready(function(){
	jQuery('.js-scroll-sections a').bind('click',function(event){
		var $anchor = jQuery(this);

		jQuery('html, body').stop().animate({
			scrollTop: jQuery($anchor.attr('href')).offset().top
		}, 1200,'easeInOutExpo');

/*
		jQuery('html, body').stop().animate({
			scrollTop: $($anchor.attr('href')).offset().top
		}, 1000);
*/
		event.preventDefault();
	});
});