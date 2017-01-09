
$(function(){


// animate the exit 
	$('#nav-icon3').on('click touchstart',function(){
		$(this).toggleClass('open');
		if(!$(".logobar").hasClass("dark")){
			$('.logobar').toggleClass("dark");
		}
		$('.navigation').slideToggle( function(){
			$(this).toggleClass("none");
		});
	});

	// change of .logobar color on scroll 

	if($("body").hasClass("home")){
		$(window).scroll(function(){
		     var testScroll = $(window).scrollTop(); 

		     if(testScroll > $(".logobar").height()){
		       $(".logobar").addClass("dark"); 
		     } else{
		       $(".logobar").removeClass("dark");
		     }

		   });
	}

	// init flickity

	var $carousel = $('.carousel').flickity({
	  // options
	  contain: true,
	  prevNextButtons: false,
	  pageDots:false,
	  wrapAround: true
	});


	 var flkty = $carousel.data('flickity');
	 // elements
	 var $cellButtonGroup = $('.specialties');
	 var $cellButtons = $cellButtonGroup.find('.nav-for');

	 // update selected cellButtons
	 $carousel.on( 'cellSelect', function() {
	   $cellButtons.filter('.is-selected')
	     .removeClass('is-selected');
	   $cellButtons.eq( flkty.selectedIndex )
	     .addClass('is-selected');
	 });

	 $cellButtonGroup.on( 'click', '.nav-for', function() {
	   var index = $(this).index();
	   $carousel.flickity( 'select', index );
	 });

	// randomly choose a quote to display on homepage

	var quotes = $(".quote");

	var quote = quotes[Math.floor(Math.random()*quotes.length)];

	$(quote).removeClass("none");


// code for clock 
	moment.tz.add([
    'America/Los_Angeles|PST PDT|80 70|0101|1Lzm0 1zb0 Op0',
    'America/new_york|EST EDT|50 40|0101|1Lz50 1zb0 Op0',
    'Europe/Madrid|WET WEST WEMT CET CEST|0 -10 -20 -10 -20|01010101010101010101010121212121234343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343434343|-28dd0 11A0 1go0 19A0 1co0 1dA0 b1A0 18o0 3I00 17c0 1fA0 1a00 1io0 1a00 1io0 17c0 iyo0 Rc0 18o0 1hc0 1io0 1a00 14o0 5aL0 MM0 1vc0 17A0 1i00 1bc0 1eo0 17d0 1in0 17A0 6hA0 10N0 XIL0 1a10 1in0 17d0 19X0 1cN0 1fz0 1a10 1fX0 1cp0 1cO0 1cM0 1fA0 1a00 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1cM0 1fA0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00 11A0 1qM0 WM0 1qM0 WM0 1qM0 WM0 1qM0 11A0 1o00 11A0 1o00|62e5'
]); 

var analogclock = new analogClock();

window.setInterval(function(){ 

analogclock.run(); 

}, 1000);

var analogclock2 = new analogClock2();

window.setInterval(function(){ 

analogclock2.run(); 

}, 1000);

var analogclock3 = new analogClock3();

window.setInterval(function(){ 

analogclock3.run(); 

}, 1000);

function analogClock(){
}

function analogClock2(){
}

function analogClock3(){
}
analogClock.prototype.run = function() {
   var date = new Date();
    var second = moment.tz('America/new_york').format('ss')* 6;
    var minute = moment.tz('America/new_york').format('mm')* 6 + second / 60;
    var hour = (moment.tz('America/new_york').format('hh') % 12 / 12) * 360 + 90 + minute / 12;
    jQuery('#hour').css("transform", "rotate(" + hour + "deg)");
    jQuery('#minute').css("transform", "rotate(" + minute + "deg)");


};

analogClock2.prototype.run = function() {
    var date = new Date();
    var second = moment.tz('Europe/Madrid').format('ss')* 6;
    var minute = moment.tz('Europe/Madrid').format('mm')* 6 + second / 60;
    var hour = (moment.tz('Europe/Madrid').format('hh') % 12 / 12) * 360 + 90 + minute / 12;
    jQuery('#hour-spain').css("transform", "rotate(" + hour + "deg)");
    jQuery('#minute-spain').css("transform", "rotate(" + minute + "deg)");
  };

  analogClock3.prototype.run = function() {
    var date = new Date();
    var second = moment.tz('America/Los_Angeles').format('ss')* 6;
    var minute = moment.tz('America/Los_Angeles').format('mm')* 6 + second / 60;
    var hour = (moment.tz('America/Los_Angeles').format('hh') % 12 / 12) * 360 + 90 + minute / 12;
    jQuery('#hour-la').css("transform", "rotate(" + hour + "deg)");
    jQuery('#minute-la').css("transform", "rotate(" + minute + "deg)");
  };

  // typing effect of adjective in header

	$("#typed").typed({
				strings: ["happier", "healthier", "kinder", "better"],
				typeSpeed: 100,
				startDelay: 80,
				backDelay: 1000,
				loop: false,
				showCursor: true,
				callback: function(){
					// $(".typed-cursor").addClass("none");
				}
	});

// hover animation on boxes

	$(".study").on("mouseover focus", function(){
		$(this).find(".study-content-title").addClass("animated");
	})

	// services section toggle on large screen

	$(".service-desc:first-of-type").removeClass("none");

	var id = $(".service-desc:first-of-type").data("id"); 

	$("*[data-search='"+id+"']").addClass("active");

	$(".service-type").on('click', function(){
		 var search = $(this).data("search"); 
		 $(".service-desc").css("display", "none");
		 $(".service-type").removeClass("active");
		$("*[data-id='"+search+"']").fadeIn("fast", function(){
			$(this).removeClass("none");
		});
		$("*[data-search='"+search+"']").addClass("active");
	});

// services section toggle on small screen
$(".services-archive .mobile-only").change(function(){
	$('html, body').animate({
	                   scrollTop: $("#desc").offset().top
	               }, 500);
	var search = $(".mobile-only option:selected").data("search"); 
	$(".service-desc").css("display", "none");
	$(".service-type").removeClass("active");
	$("*[data-id='"+search+"']").fadeIn("fast", function(){
		$(this).removeClass("none");
	});
	$("*[data-search='"+search+"']").addClass("active");

});

// scroll magic for story telling page
	// var controller = new ScrollMagic.Controller({
	// 		globalSceneOptions: {
	// 			triggerHook: 'onLeave'
	// 		}
	// 	});

	// var slides = document.querySelectorAll(".storytelling-item-container");

	// 	// create scene for every slide
	// 	for (var i=0; i<slides.length; i++) {
	// 		new ScrollMagic.Scene({
	// 				triggerElement: slides[i]
	// 			})
	// 			.setPin(slides[i])
	// 			.addTo(controller);
	// 	}
	// scroll in things when scolling

	 // slide things in when scroll

		  $.fn.visible = function(partial) {

	      var $t            = $(this),
	          $w            = $(window),
	          viewTop       = $w.scrollTop(),
	          viewBottom    = viewTop + $w.height(),
	          _top          = $t.offset().top,
	          _bottom       = _top + $t.height(),
	          compareTop    = partial === true ? _bottom : _top,
	          compareBottom = partial === true ? _top : _bottom;

	    return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

	  };

	  function scrollIn(div) {
	  	$(div).each(function(i, el) {
	      var el = $(el);
	      if (el.visible(true)) {
	        el.addClass("come-in");
	      }
	    });
	  }

	  function scrollIn(div) {
	  	$(div).each(function(i, el) {
	      var el = $(el);
	      if (el.visible(true)) {
	        el.addClass("come-in");
	      }
	    });
	  }

	  function zoomIn(div){
	  	$(div).each(function(i, el){
	  		var el = $(el);
	  		 if (el.visible(true)) {
	        el.addClass("zoomIn animated");
	      }
	  	})
	  }

	  $(window).scroll(function(event) {
	    zoomIn(".storytelling-item");
	    zoomIn(".story-why-item");

	  });

	  var win = $(window);
	var allMods = $(".module");

	// Already visible modules
	allMods.each(function(i, el) {
	  var el = $(el);
	  if (el.visible(true)) {
	    el.addClass("already-visible");
	  }
	});

	win.scroll(function(event) {

	  allMods.each(function(i, el) {
	    var el = $(el);
	    if (el.visible(true)) {
	      el.addClass("come-in");
	    }
	  });

	});



});