(function($){

	$(window).load(function() {

		// Fixed Header
		// $(window).scroll(function() {
		// 	var scroll = $(window).scrollTop();
		//
		// 	if (scroll >= $(window).height()) {
		// 		$("#header-menu").addClass("active");
		// 	} else {
		// 		$("#header-menu").removeClass("active");
		// 	}
		// });

		// if($('body').hasClass('home')) {
		// 	$('.owl-carousel').owlCarousel({
		// 		loop:true,
		// 		margin:10,
		// 		nav:false,
		// 		items:1,
		// 		smartSpeed: 600,
		// 		// autoplaySpeed: 600,
		// 		// autoplay: true,
		// 		// autoplayTimeout: 5000
		// 	});
		// }


		// Responsive embeds
		$('iframe').addClass('embed-responsive-item');
		$("iframe").wrap("<div class='embed-responsive embed-responsive-16by9'/>");


		// Changing the defaults
		// if ($( window ).width() > 768 ) {
		// 	ScrollReveal().reveal('.reveal');
		// }

		$('.hamburger').on('click', function(){
			$('#mobile-menu').toggleClass('open');
			$('.hamburger').toggleClass('is-active');
			$('.hamburger-menu').toggleClass('active');
			$('.move').toggleClass('open');
		});

		$('.drop-button-wrapper').click(function(){
			$('.hamburger2').toggleClass('is-active');
			$('.slide-drop-down').slideToggle();

		});



		$("#menu-mobile-menu > li.menu-item-has-children > a").click(function(e) {

			$("#menu-mobile-menu ul.sub-menu").hide();
			$(this).siblings("ul.sub-menu").show();

			e.preventDefault();
			$(this).unbind(e);

		});


		$('#slider').slick({
			slidesToShow: 1,
			asNavFor: '.slider-nav',
			arrows: false,
			fade: true
		});

		$('.slider-nav').slick({
			slidesToShow: 5,
			slidesToScroll: 1,
			asNavFor: '#slider',
			dots: false,
			focusOnSelect: true
		});


		// Lightbox
		/*$('.popup-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
		enabled: true,
		navigateByImgClick: true,
		preload: [0,1] // Will preload 0 - before current, and 1 after the current image
	},
	image: {
	tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
	titleSrc: function(item) {
	return item.el.attr('title');
}
}
});*/
});

})(jQuery);
