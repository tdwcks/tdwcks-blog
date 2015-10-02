(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';

		// Switch To Info 

		$("#js-replace-about").on( "click", function( event ) {
			event.preventDefault();
  			$('body').addClass('info-active');
  			$('.header-simple-navigation ul li').removeClass('header-navigation-active');
  			$('.header-info').addClass('header-navigation-active');
		});

		// Switch To Feed 

		$("#js-replace-feed").on( "click", function( event ) {
			event.preventDefault();
  			$('body').removeClass('info-active');
  			$('.header-simple-navigation ul li').removeClass('header-navigation-active');
  			$('.header-feed').addClass('header-navigation-active');
		});

	});
	
})(jQuery, this);
