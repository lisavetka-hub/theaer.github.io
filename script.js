$(function() {
	$('.toggles button').click(function() {
		var get_id = this.id;
		var get_current = $('.posts .' + get_id);
		
		$('.post').not(get_current).hide(500);
		get_current.show(500);
	});
	
	$('#showall').click(function() {
		$('.post').show(500);
	});
	
});


$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
	  items:4
  });
});

if($(window).width() < 420) {
	 $(".owl-carousel").owlCarousel({
	  items:2
  });
}


// Модальное окно

// открыть по кнопке
$('.js-button-campaign').click(function() { 
	
	$('.js-overlay-campaign').fadeIn();
	$('.js-overlay-campaign').addClass('disabled');
});

// закрыть на крестик
$('.js-close-campaign').click(function() { 
	$('.js-overlay-campaign').fadeOut();
	
});

// закрыть по клику вне окна
$(document).mouseup(function (e) { 
	var popup = $('.js-popup-campaign');
	if (e.target!=popup[0]&&popup.has(e.target).length === 0){
		$('.js-overlay-campaign').fadeOut();
		
	}
});

