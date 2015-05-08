/* **************Init JS*********************
	
    TABLE OF CONTENTS
	---------------------------
	1. Preloader
	2. Ready Function
	   a) Auto height for the home page
	   b) Smooth Scroll
	   c) 3d gallery
	   d) Vimeo Video
	   e) Schedule Accordian
	   f) Speaker Slider
	   g) Animation
	   h) Registration Form
	   i) Subscribe
	   j) Nice Scroll
	   h) Placeholder for ie9

*/

"use strict";

//Theme Options
var themeElements = {
	submitButton: '.submit-button',
	ajaxForm: '.ajax-form',
};
/* ************************************/
/* Preloader */
/* *************************************/
jQuery(window).load(function() {
    // will first fade out the loading animation
	jQuery(".status").fadeOut();
    // will fade out the whole DIV that covers the website.
	jQuery(".preloader").delay(100).fadeOut("slow");
	jQuery("body").css('overflow-y','visible');
});

/* ************************************/
/* Ready Function */
/* *************************************/
	
jQuery( document ).ready(function( $ ) {
	$.noConflict();
	 	 
    /*Carousel Slider*/
    $('.carousel').carousel({
        interval: 450000 //changes the speed
    });
	
	/*Toggle*/
	$(".togglec").hide();
	$(".togglet").click(function(){
		$(this).toggleClass("toggleta").next(".togglec").slideToggle(300);
		return true;
	});
	
	/* Event features height */
	if($(".event-features").length>0)
	{
		var fHeight=$(".event-features").height();
		$(".slide_gallery").height(fHeight);
	}
	/* Event features height */
	/*Accordion*/
	 var $accordionEl = $('.accordion');
		if( $accordionEl.length > 0 ){
			$accordionEl.each( function(){
				var $accElement = $(this);
				var accElementState = $accElement.attr('data-state');

				$accElement.find('.acc_content').hide();

				if( accElementState != 'closed' ) {
					$accElement.find('.acctitle:first').addClass('acctitlec').next().show();
				}

				$accElement.find('.acctitle').click(function(){
					if( $(this).next().is(':hidden') ) {
						$accElement.find('.acctitle').removeClass('acctitlec').next().slideUp("normal");
						$(this).toggleClass('acctitlec').next().slideDown("normal");
					}
					return false;
				});
			});
		}
	/*AJAX Form*/
	$(themeElements.ajaxForm).each(function() {
		var form=$(this);
		
		form.submit(function() {
			var message=form.find('.message'),
				loader=form.find('.form-loader'),
				button=form.find(themeElements.submitButton);
				
			var data={
					action: form.find('.action').val(),
					nonce: form.find('.nonce').val(),
					data: form.serialize(),
				}
			
			button.addClass('disabled');
			loader.show();
			message.slideUp(300);
			
			$.post(form.attr('action'), data, function(response) {
				if($('.redirect', response).length) {
					if($('.redirect', response).attr('href')) {
						window.location.href=$('.redirect',response).attr('href');
					} else {
						window.location.reload();
					}
				} else {
					loader.hide();
					button.removeClass('disabled');
					message.html(response).slideDown(300);
				}
			});
			$(form)[0].reset();
			return false;
		});
	});
	
	/* ** Auto height function ***/
	var setElementHeight = function () {
		var height = $(window).height();
		$('.autoheight').css('height', (height));
		
	};

	$(window).on("resize", function () {
		setElementHeight();
	}).resize();
	
	/* ******tabs***********/
	$( ".side-tabs" ).tabs({ show: { effect: "fade", duration: 400 } });
	/* ******Smooth scroll***********/
	var height=$(".navbar.navbar-default").height();
	var scroll = $(window).scrollTop();
	if (scroll > height) {
		$(".header-hide").addClass("scroll-header");
	}
	smoothScroll.init({
		speed: 1000,
		easing: 'easeInOutCubic',
		offset: height,
		updateURL: false,
		callbackBefore: function ( toggle, anchor ) {},
		callbackAfter: function ( toggle, anchor ) {},
	});
	
	$(window).scroll(function() {
		var height = $(window).height();
		var scroll = $(window).scrollTop();
		if (scroll) {
			$(".header-hide").addClass("scroll-header");
		} else {
			 $(".header-hide").removeClass("scroll-header");
		}		
	});
	
	/* ** 3D Gallery *********/
	/*new CBPGridGallery( document.getElementById( 'grid-gallery' ) );*/
	
	/* *******Vimeo Video**************** */
	$('.venobox').venobox({
		numeratio: true,
		infinigall: true,
		border: '20px'
	});
	$('.venoboxvid').venobox({
		bgcolor: '#000'
	});
	$('.venoboxframe').venobox({
		border: '6px'
	});
	$('.venoboxinline').venobox({
		framewidth: '300px',
		frameheight: '250px',
		border: '6px',
		bgcolor: '#f46f00'
	});
	$('.venoboxajax').venobox({
		border: '30px;',
		frameheight: '220px'
	});	
		
		
	/* ******Schedule Accordion ************ */
	$('.accordion .item .heading').click(function() {		
	var a = $(this).closest('.item');
	var b = $(a).hasClass('open');
	var c = $(a).closest('.accordion').find('.open');
		
	if(b != true) {
		$(c).find('.content').slideUp(500);
		$(c).removeClass('open');
	}

	$(a).toggleClass('open');
		$(a).find('.content').slideToggle(500);
	});

	$('.nav_slide_button').click(function() {
		$('.pull').slideToggle();
	});	
	/* Overlay */
	if (Modernizr.touch) {
	// show the close overlay button
		$(".close-overlay").removeClass("hidden");
		// handle the adding of hover class when clicked
		$(".img").click(function(e){
			if (!$(this).hasClass("hover")) {
				$(this).addClass("hover");
			}
		});
		// handle the closing of the overlay
		$(".close-overlay").click(function(e){
			e.preventDefault();
			e.stopPropagation();
			if ($(this).closest(".img").hasClass("hover")) {
				$(this).closest(".img").removeClass("hover");
			}
		});
	} else {
		// handle the mouseenter functionality
		$(".img").mouseenter(function(){
			$(this).addClass("hover");
		})
		// handle the mouseleave functionality
		.mouseleave(function(){
			$(this).removeClass("hover");
		});
	}
	
	/* **************** Animation ***************** */
	var wow = new WOW( {
		boxClass: 'wow', // animated element css class (default is wow)
		animateClass: 'animated', // animation css class (default is animated)
		offset: 0, // distance to the element when triggering the animation (default is 0)
		mobile: false, // trigger animations on mobile devices (default is true)
		live: true // act on asynchronously loaded content (default is true)
	});	
	wow.init();		
	/* *Subscribe JS **/

	/* *********Menu Close Logic***************/
	$('.navbar-collapse.in').niceScroll({cursorcolor:"#c8bd9f"});
		$('.nav li a').click(function(){
			$('.navbar-collapse.collapse').toggleClass('in');
	});		
	 /* ****** Nice Scroll ****** */
	 $("html").niceScroll();
	 
	 /* *Placeholder JS call **/
	$('input[type=text], textarea').placeholder();	
		
	/* **************** Multilevel Menu ***************** */
	$(".navbar-nav > li").mouseover(function(e){
		if ( $(this).has('ul.dropdown-menu').length > 0 ) 
		{
			$(this).addClass('dropdown active open');
			$(this).children('ul.dropdown-menu').addClass('show');
		}		
		/*alert('mouseover');*/
	});
	$(".navbar-nav > li").mouseout(function(e){
		if ( $(this).has('ul.dropdown-menu').length > 0 ) 
		{
			$(this).removeClass('dropdown active open');
			$(this).children('ul.dropdown-menu').removeClass('show');
		}		
		/*alert('mouseout');*/
	});
	$(".dropdown-menu > li").mouseover(function(e){
		
		if ( $(this).has('ul.dropdown-menu').length > 0 ) 
		{
			$(this).addClass('dropdown active open');
			$(this).children('ul.dropdown-menu').addClass('show');
		}
		/*alert('mouseover');*/
	});
	$(".dropdown-menu > li").mouseout(function(e){
		if ( $(this).has('ul.dropdown-menu').length > 0 ) 
		{
			$(this).removeClass('dropdown active open');
			$(this).children('ul.dropdown-menu').removeClass('show');
		}
	});
	
	/* **************** Multilevel Menu ***************** */
		
	/***********************************/
	/*Counter JS*/
	/**********************************/	
	$(function () {	  
		if (window.globalDateVar) {
			var austDay = new Date();
			austDay =  new Date(window.globalDateVar);
			$('#defaultCountdown').countdown({
			until: austDay, padZeroes: true,format: 'DHMS'});
			$('#year').text(austDay.getFullYear());
		}
	});
	/***********************************/
	/*Dynamic CSS*/
	/**********************************/	
	if (window.header_transparent && window.header_transparent=='yes') {
		$('.header').css("background-color","transparent");
	}
	if (window.threeDImage_hover_active && window.threeDImage_hover_active=='yes') {
		$(".threeDImage_hover").hover(function() {
			$(this).css("background",window.threeDImage_hover_color+" repeat scroll 0 0");
		},function() {
			$(this).css("background",window.threeDImage_hover_out+" no-repeat scroll 0 0");
			$(this).css("background-size","cover");
		});
	}
	if (window.event_video_hover_active && window.event_video_hover_active=='yes') {
		$(".event_video_hover").hover(function() {
			$(this).css("background",window.event_video_hover_color+" repeat scroll 0 0");
		},function() {
			$(this).css("background",window.event_video_hover_out+" no-repeat scroll 0 0");
			$(this).css("background-size","cover");
		});
	}
	if (window.tabs && window.tabs=='yes') {
		$('.tabs nav ul li').css("width","calc(100% /"+(window.total_tabs)+")");
	}
	if (window.globalSlidesActive && window.globalSlidesActive=='yes') {
		var homeSlides = jQuery(window.globalSlides);
		homeSlides.superslides({hashchange: false});
	}
	if (window.globalNLFormActive && window.globalNLFormActive=='yes') {
		new NLForm( document.getElementById( window.globalNLForm ) );
	}
	if (window.globalGridGalleryActive && window.globalGridGalleryActive=='yes') {
		new CBPGridGallery( document.getElementById( window.globalGridGallery ) );
	}
	if (window.globalcbpFWTabsActive && window.globalcbpFWTabsActive=='yes') {
		new CBPFWTabs( document.getElementById( window.globalcbpFWTabs ) );
	}
	if (window.globalSpeakersSliderActive && window.globalSpeakersSliderActive=='yes') {
		$(window.globalSpeakersSlider).flexslider({ animation: "slide", directionNav: false, controlNav: true, touch: true, pauseOnHover: true, });
	}
	if (window.globalTriangleActive && window.globalTriangleActive=='yes') {
		$("body").append('<div class="animate-canvas"><canvas id="demo-canvas"></canvas></div>');
	}
	if (window.globalTriangleActive && window.globalTriangleActive=='yes') {
		$("body").append('<div class="animate-canvas"><canvas id="demo-canvas"></canvas></div>');
	}
	if (window.globalYoutubeActive && window.globalYoutubeActive=='yes') {
		var options = { videoId:window.globalYoutubeMedia,repeat: true };
		$(window.globalYoutubeId).tubular(options);
	}
	/***********************************/
	/*Dynamic CSS*/
	/**********************************/
});

