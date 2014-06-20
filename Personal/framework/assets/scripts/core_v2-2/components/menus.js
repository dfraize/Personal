//--------------------------------------------------------------------------------------------------------
// Mercer Evolution - Core v2.2 - Menus JS
// DATE - January 27, 2014
// AUTHOR - Doug Fraize, Matthew Holmes
//--------------------------------------------------------------------------------------------------------

// HEADER MENUS

	// HEADER PROFILE MENU TOGGLE
	var mulHeaderProfileMenuToggle = function(){
		jQuery('.mul-profile-menu-icon.mul-icon-arrow-down2').hide();
		jQuery('.js-mul-profile-menu-display').click(function() {
			jQuery('.mul-profile-menu').slideToggle('fast');
			jQuery('.mul-profile-menu-icon.mul-icon-arrow-right2').toggle();
			jQuery('.mul-profile-menu-icon.mul-icon-arrow-down2').toggle();
		});
	}

	// Header Profile Menu Init
	mulHeaderProfileMenuToggle();

	// HEADER MEGA MENU - MENU AND SEARCH TOGGLE
	var mulHeaderMegaMenu = function(){
		jQuery('.js-mul-mega-menu').click(function(){
			if(jQuery(".js-mul-mega-menu-search-ctn").is(":visible")) {
				jQuery('.js-mul-mega-menu-search').removeClass('mul-mega-menu-item-expand');
				jQuery('.js-mul-mega-menu-search-ctn').slideUp(function(){
					jQuery('.js-mul-mega-menu').addClass('mul-mega-menu-item-expand');
					jQuery('.js-mul-mega-menu-ctn').slideToggle('fast');
				});
			} else {
				jQuery(this).toggleClass('mul-mega-menu-item-expand');
				jQuery('.js-mul-mega-menu-ctn').slideToggle('fast');
			}
		});

		jQuery('.js-mul-mega-menu-search').click(function(){
			if(jQuery(".js-mul-mega-menu-ctn").is(":visible")) {
				jQuery('.js-mul-mega-menu').removeClass('mul-mega-menu-item-expand');
				jQuery('.js-mul-mega-menu-ctn').slideUp(function(){
					jQuery('.js-mul-mega-menu-search').addClass('mul-mega-menu-item-expand');
					jQuery('.js-mul-mega-menu-search-ctn').slideToggle('fast');
				});
			} else {
				jQuery(this).toggleClass('mul-mega-menu-item-expand');
				jQuery('.js-mul-mega-menu-search-ctn').slideToggle('fast');
			}
		});
	}

	// Header Mega Menu Init
	mulHeaderMegaMenu();

	// HEADER UTILITY MENU - LANGUAGE AND PROFILE TOGGLE
	var mulHeaderUtilityMenu = function(){
		jQuery('body').click(function(){ 
			jQuery('.js-mul-language-ctn').hide();
		});

		jQuery('body').click(function(){ 
			jQuery('.js-mul-profile-ctn').hide();
		});

		jQuery('.js-mul-language').click(function(e){
			if(jQuery(".js-mul-profile-ctn").is(":visible")) {
				jQuery('.js-mul-profile-ctn').slideUp(100, function(){
					jQuery('.js-mul-language-ctn').slideToggle('fast');
				});
			} else {
				jQuery('.js-mul-language-ctn').slideToggle('fast');
			}
			e.stopPropagation();
		});

		jQuery('.js-mul-profile').click(function(e){
			if(jQuery(".js-mul-language-ctn").is(":visible")) {
				jQuery('.js-mul-language-ctn').slideUp(100, function(){
					jQuery('.js-mul-profile-ctn').slideToggle('fast');
				});
			} else {
				jQuery('.js-mul-profile-ctn').slideToggle('fast');
			}
			e.stopPropagation();
		});
	}

	// Header Utility Menu Init
	mulHeaderUtilityMenu();
