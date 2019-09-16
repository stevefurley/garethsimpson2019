(function($){

	$(window).load(function() {
		//scroll on href click
		$('a[href*=#]:not([href=#])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					$('html,body').animate({
						scrollTop: target.offset().top - 80
					}, 1000);
					return false;
				}
			}
		});

		// Responsive embeds
		$('iframe').addClass('embed-responsive-item');
		$("iframe").wrap("<div class='embed-responsive embed-responsive-16by9'/>");


		// Changing the defaults
		// if ($( window ).width() > 768 ) {
		// 	ScrollReveal().reveal('.reveal');
		// }

		$('#mobile-menu a').on('click', function(){
			$('#mobile-menu').toggleClass('open');
			$('.hamburger').toggleClass('is-active');
			$('.hamburger-menu').toggleClass('active');
			$('.move').toggleClass('open');
		});

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
			fade: true,
			adaptiveHeight: true
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
			autoplay: false,
			autoplaySpeed: 2000,
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



		//hompage slider also used on about page
		$('#slider2').slick({
			slidesToShow: 1,
			arrows: false,
			fade: true,
			adaptiveHeight: true,
			dots: true,
		});

		//sliding function moves and resies orange line
		function slidingline() {
			var  paddingset = $('.slide-button-block[data-slide=3]').css('padding-left').replace(/[^-\d\.]/g, '');
			if($('.slide-button-block.active').attr('data-slide') == 1) {
				var leftPosition = $('.slide-button-block.active')["0"].offsetLeft;
			} else {
				var leftPosition = $('.slide-button-block.active')["0"].offsetLeft + parseInt(paddingset);
			}
			var imageWidth = $('.slide-button-block.active')["0"].childNodes[1].clientWidth;
			$('.sliding-box').css('left', leftPosition);
			$('.sliding-box').css('width', imageWidth);
		}


		//when a user swipes with mouse or fingers sorts classes
		$('#slider2').on('swipe', function(event, slick, direction){
			var current = $(this).find('.slick-active').children('button').html();
			$('.slider-nav2 .slide-button-block').removeClass('active');
			$('.slider-nav2 .slide-button-block[data-slide='+ current + ']').addClass('active');
			slidingline();
		});

		//when the dots are clicked
		$('#slider2 .slick-dots li').on('click', function(){
			var currentImage = $(this).text();
			$('.slider-nav2  .nav-block').removeClass('active');
			$('.slider-nav2  .nav-block[data-slide="' +  currentImage  + '"]').addClass('active');
			//console.log(currentImage);
		});

		//when the image blocks are clicked
		$('.slide-button-block').on('click', function(){

			var  paddingset = $('.slide-button-block[data-slide=3]').css('padding-left').replace(/[^-\d\.]/g, '');
			//	console.log(paddingset);
			$('#slider2').slick(
				'slickGoTo', $(this).attr('data-slide') - 1
			);
			$(this).addClass('active').siblings().removeClass('active');
			if($(this).context.dataset.slide == 1) {
				var leftPosition = $(this)["0"].offsetLeft;
			} else {
				var leftPosition = $(this)["0"].offsetLeft + parseInt(paddingset);
			}
			var imageWidth = $(this)["0"].childNodes[1].clientWidth;
			$('.sliding-box').css('left', leftPosition);
			$('.sliding-box').css('width', imageWidth);
		});

		//on window resize
		if($('.slide-button-block').length > 0){
			window.onresize = function() {
				slidingline();
			}
		}





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
	//	console.log(currentStep);
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



$('.main-form .next-button').on('click', function(){

	var formHeight = $('.questionnaire-form').outerHeight();
	$('.questionnaire-form').css('height', formHeight);

	var current = $(this).attr("attr-next");
	//console.log($('.block-step-' + current).find('textarea').val());
	if($('.block-step-' + current).find('textarea').val().length > 1){

		$('.block-step-' + current).removeClass('error');
		$('.block-step-' + current).removeClass('active').addClass('not-active');

		//get current box then add class to line
		var orig = parseInt(current);

		var newCurrent = parseInt(current) + 1;
		//line
		$('.number-block-' + orig + ' .line').addClass('active');
		//form step
		$('.block-step-' + newCurrent).addClass('active').removeClass('not-active');
		//number
		$('.number-block-' + newCurrent).addClass('active');
	//	console.log($('.main-form  #first_name1').val().length);
		if($('.main-form  #first_name1').val().length > 1) {
			$('.main-form .submit-wrapper').hide();
		} else {
			$('.main-form .submit-wrapper').show();
		}
	} else {
		//	console.log('less then 1');
		$('.block-step-' + current).addClass('error');
	}

});
$('.main-form .prev-button').on('click', function(){
	var current = $(this).attr("attr-prev");
	//form
	$('.block-step-' + current).removeClass('active').addClass('not-active');

	var newCurrent = parseInt(current) - 1;
	//form step
	$('.block-step-' + newCurrent).addClass('active').removeClass('not-active');
	//line
	$('.number-block-' + newCurrent + ' .line').removeClass('active');
	//number
	$('.number-block-' + current).removeClass('active');
});

});

})(jQuery);
