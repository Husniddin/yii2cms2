// jquery ready start
$(document).ready(function() {
	// jQuery code
	
	$(".btn-close").click(function (e) {
		e.preventDefault();
		$(this).parent().fadeOut("normal");
	});
	
	
	// fancybox
	$('.fancybox').fancybox();
	
	$("#order").fancybox({
		'width'				: 500,
		'overlayShow'		: true,
		'autoScale'			: false,
		'type'				: 'iframe',
		openEffect	: 'elastic',
    	closeEffect	: 'elastic',
		helpers : {
			title	: { type : 'inside' },
			overlay : {	css : {'background' : 'rgba(0,0,0,.5)'}	}
		}
	});	
	
	// jcarousel
	$(".slide-clients").jCarouselLite({
    btnNext: ".slide-next",
    btnPrev: ".slide-prev",
    scroll: 2,
	visible: 4,
	auto: 3000,
	speed: 1500
	});
});
