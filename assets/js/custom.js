(function($) {
	'use strict';
	// Navbar Menu JS
	$('.scroll-btn, .navbar .navbar-nav li a').on('click', function(e){
		var anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: $(anchor.attr('href')).offset().top - 65
		}, 1000);
		e.preventDefault();
	});
	$('.navbar .navbar-nav li a').on('click', function(){
		$('.navbar-collapse').collapse('hide');
	});

	// Menu Icon JS
	$(".menu-icon").on('click', function(){
		$(".menu-icon").toggleClass("active")
	})
	$(".menu-icon").on('click', function(){
		$(".header").toggleClass("active")
	})
	
	// Preloader JS
	$(window).on('load', function() {
		$('.preloader').fadeOut();
	});

	// WOW Animation JS
	if($('.wow').length){
		var wow = new WOW({
			mobile: false
		});
		wow.init();
	};

	$('.work-carousel').owlCarousel({
		margin:10,
		loop:true,
		dots:false,
        autoplay: true,
		nav: true,
		navText: [
			'<img src="https://chilliandlime.biz/wordpress/wp-content/uploads/2024/01/slider-arrow-left.png" alt="" />',
			'<img src="https://chilliandlime.biz/wordpress/wp-content/uploads/2024/01/slider-arrow-right.png" alt="" /> ',
				],
		responsive : {
	 		0 : {
	 			items : 1
	 		},
			768 : {
	 			items : 2
	 		},
	 		992 : {
	 			items : 2
	 		}
	 	},
		 navContainer: '.latest-work .custom-nav'
	})

	  
})(jQuery);
