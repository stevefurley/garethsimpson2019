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
			centerMode: true,
			arrows: false,
			focusOnSelect: true,
			centerPadding: '0',
			responsive: [
				{
					breakpoint: 1200,
					settings: {
						slidesToShow: 3,
						centerMode: true,
						centerPadding: '0',
					}
				},
				{
					breakpoint: 767,
					settings: {
						slidesToShow: 1,
						centerMode: true,
						centerPadding: '40px',
						dots: true,
					}
				}
			]
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

$('.steps .step').on('click', function(){
		var currentStep = $(this).attr('attr-step');
		console.log(currentStep);
		if($(this).hasClass('active')){
			if(currentStep == 'step-1'){
				$('.steps-form-wrapper .inner').removeClass('left1');
				$('.steps-form-wrapper .inner').removeClass('left2');
				$('.steps .dots').removeClass('step-1');
				$('.steps .dots').removeClass('step-2');
				$('#step-2, #step-3').removeClass('active');
			} else if(currentStep == 'step-2'){
				$('.steps-form-wrapper .inner').addClass('left1').removeClass('left2');
				$('.steps .dots').addClass('step-1').removeClass('step-2');
				$('#step-3').removeClass('active');
			} else if(currentStep == 'step-3'){
				$('.steps-form-wrapper .inner').addClass('left1 left2');
				$('.steps-form-wrapper .inner').removeClass('left3');
				$('.steps .dots').addClass('step-1, step-2');
				$('#step-3').addClass('active');
			}

		}

});
//custom form with validation
$('.custom-form .next').on('click', function(){
	//get id of current next button
	var id = $(this).parent().attr('id');
	//console.log(id);
	if(id == 'step-1') {
		var currentVal = $('#' + id).find('input').val();
		if(currentVal == '') {
			$('#' + id).addClass('failed');
		} else {
			//add active class to text steps
			$('.steps .step-2').addClass('active');
			//extends the dotted line
			$('.steps .dots').addClass(id);
			$('#' + id).removeClass('failed');
			$('.steps-form-wrapper .inner').addClass('left1');
		}
	} else if(id == 'step-2') {
		var currentVal = $('#' + id).find('input').val();
		if(currentVal == '') {
			$('#' + id).addClass('failed');
		} else {
			//add active class to text steps
			$('.steps .step-3').addClass('active');
			//extends the dotted line
			$('.steps .dots').addClass(id);
			$('#' + id).removeClass('failed');
			$('.steps-form-wrapper .inner').addClass('left2');
		}
	} else if(id == 'step-3') {
		var emailaddress = $('#' + id).find('input').val();

		function validateEmail($email) {
			var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
			return emailReg.test( $email );
		}
		if(emailaddress == '') {
			$('#step-3 .failed').text('Please add an email address');
			$('#' + id).addClass('failed');
		}	else if(!validateEmail(emailaddress)) {
			$('#' + id).addClass('failed');
			$('#step-3 .failed').text('Please check your email address');
		} else {
			$('#' + id).removeClass('failed');
			$('.steps-form-wrapper .inner').addClass('left3');
		}
	}
});
});

})(jQuery);
