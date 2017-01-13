$(function(){

// animate the exit and open / close menu
	$('#nav-icon3').on('click touchstart',function(){
		$(this).toggleClass('open');
		if(!$(".logobar").hasClass("dark")){
			$('.logobar').toggleClass("dark");
		}
		close()
	});

	$("#menu-item-52").on('click touchstart',function(){
		close();
		$("#nav-icon3").toggleClass('open');
	});

	$("#menu-item-171").on('click touchstart',function(){
		close();
		$("#nav-icon3").toggleClass('open');
	});

	var close = function(){
		$('.navigation').slideToggle( function(){
			$(this).addClass("none");
		}, function(){
			$('.navigation .container').toggleClass("flexed animated")
		});
	}

// open menus
	var openMenu = function(button, menu){
		$(button).on("click touchstart", function(){
				$(menu).removeClass("none").animate({
					"top":0
				}, 100);
			})
	}

	// close menus
	var closeMenu = function(button, menu){
		$(button).on("click touchstart", function(){
						$(menu).animate({
							"top":-100 + "vh"
						}, 100)
				})
	}

	openMenu(".contact-button", ".contact-form");
	openMenu(".signup", ".newsletter");

	closeMenu(".exit" ,".newsletter");
	closeMenu(".exit", ".contact-form")



	// change of .logobar color on scroll 
	if($("body").hasClass("home")){
		$(window).scroll(function(){
		     var testScroll = $(window).scrollTop(); 

		     if(testScroll > $(".logobar").height()){
		       $(".logobar").addClass("dark"); 
		     }
		     else if($('#nav-icon3').hasClass('open')){
		     $(".logobar").addClass("dark"); 	
		     }
		     else{
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
    "America/Vancouver|PST PDT PWT PPT|80 70 70 70|0102301010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010101010|-25TO0 1in0 UGp0 8x10 iy0 1o10 17b0 1ip0 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1o10 11z0 1qN0 WL0 1qN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 1cN0 1fz0 1a10 1fz0 1cN0 1cL0 1cN0 1cL0 1cN0 1cL0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 14p0 1lb0 14p0 1lb0 14p0 1nX0 11B0 1nX0 11B0 1nX0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Rd0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0 Op0 1zb0|23e5",
    'America/new_york|EST EDT|50 40|0101|1Lz50 1zb0 Op0'
]); 

var analogclock = new analogClock();

window.setInterval(function(){ 

analogclock.run(); 

}, 1000);

var analogclock2 = new analogClock2();

window.setInterval(function(){ 

analogclock2.run(); 

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
    var second = moment.tz('America/Vancouver').format('ss')* 6;
    var minute = moment.tz('America/Vancouver').format('mm')* 6 + second / 60;
    var hour = (moment.tz('America/Vancouver').format('hh') % 12 / 12) * 360 + 90 + minute / 12;
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

  // scroll in effect 

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

	// toggle on services page

	$(".service-type").on('click', function(){
	 var search = $(this).data("search"); 
	 $(".service-desc").css("display", "none");
	 $(".service-type").removeClass("active");
	$("*[data-id='"+search+"']").css("display","block").addClass("animated");
	$("*[data-search='"+search+"']").addClass("active");
	});

// validate newsletter sign up form
function validateForm(){
  var chk = 0;
  var fname = trim(document.getElementById("cons_first_name").value);
  var lname = trim(document.getElementById("cons_last_name").value);
  var email = trim(document.getElementById("cons_email").value);
  var city = trim(document.getElementById("cons_city").value);
  var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
  
  if(fname=="" || fname==null){
    document.getElementById("error-log").style.display = "block";
    document.getElementById("fnameError").style.display = "block";
    chk = chk + 1;
  } 
  if(lname=="" || lname==null){
    document.getElementById("error-log").style.display = "block";
    document.getElementById("lnameError").style.display = "block";
    chk = chk + 1;
  }
  if(email == "" || email == null){
    document.getElementById("error-log").style.display = "block";
    document.getElementById("emailError").style.display = "block";
    chk = chk + 1;
  } 
  if(email !="" && !emailPattern.test(email)){
    document.getElementById("error-log").style.display = "block";
    document.getElementById("emailValidError").style.display = "block";
    chk = chk + 1;
  }
  if(city=="" || city==null){
    document.getElementById("error-log").style.display = "block";
    document.getElementById("cityError").style.display = "block";
    chk = chk + 1;
  }  
  if(chk >= 1){
    return false;
  }
  if(chk == 0){
    return true;
  }
}

});