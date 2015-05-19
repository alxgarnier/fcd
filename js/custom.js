var topSpace = 37;

$(document).ready(function(){
	resizeTop();
	// PARALLAX
	if(!(/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera)){
		$('#top-page').parallax("50%", 0.1);
	};
	// FIX PARALLAX ON MOBILE
	if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)) || (navigator.userAgent.match(/iPad/i))){
		$('#top-page').addClass("ios-bg-fix");
	};
	// SCROLLTO EFFECT
	$('.scrollTo').click( function() { // Au clic sur un Ã©lÃ©ment
		var page = $(this).attr('href'); // Page cible
		var speed = 500; // DurÃ©e de l'animation (en ms)
		$('html, body').animate( { scrollTop: $(page).offset().top - topSpace}, speed ); // Go
		return false;
	});
	// BURGER ANIMATION
	$('.burger').click( function(){
		navToggle();
	});
	$('.nav').click( function(){
		closeNav();
	});
	$('#down').click( function(){
		closeNav();
	});
	// SLICK CARROUSEL
	$('.portfolio').slick();

});

window.onresize = resizeTop();

function resizeTop(){
	vph = $(window).height();
	$('#top-page').css({'height': vph + 'px'});
	/*punchH = $('.punchline').height()/2-topSpace;
	console.log(punchH);
	$('.punchline').css({'margin-top': '-' + punchH + 'px'});*/
	console.log('ok resize');
}

function openNav(){
	$('.burger').css('transform','rotate(90deg)').addClass("opened");
	$('#nav').addClass("navOpen");
}
function closeNav(){
	$('.burger').css('transform','rotate(0)').removeClass("opened");
	$('#nav').removeClass("navOpen");
}

function navToggle(){
	if ($('.burger').hasClass("opened")) {
			closeNav();
		}else{
			openNav();
		}
}