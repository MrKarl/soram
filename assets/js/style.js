function addClassWhenScrollIsContactWith($el, className, differenceBetweenElementAndScroll) {
	var top = $el.offset().top;
	var scrollY = window.scrollY;
	
	if ((scrollY + differenceBetweenElementAndScroll - top) > 0) {
		$el.addClass(className);
	}
}

$(document).ready(function() {
	

	$('.fadein').each(function() {
		addClassWhenScrollIsContactWith($(this), 'animated fadeIn', $(window).height()+10);
	});

	$('.fadein-up').each(function() {
		addClassWhenScrollIsContactWith($(this), 'animated fadeInUp', $(window).height()+10);
	});

	$('.fadein-left').each(function() {
		addClassWhenScrollIsContactWith($(this), 'animated fadeInLeft', $(window).height()+10);
	});


	$(document).scroll(function(e) {
		$('.fadein').each(function() {
			addClassWhenScrollIsContactWith($(this), 'animated fadeIn', $(window).height()+10);
		});

		$('.fadein-up').each(function() {
			addClassWhenScrollIsContactWith($(this), 'animated fadeInUp', $(window).height()+10);
		});

		$('.fadein-left').each(function() {
			addClassWhenScrollIsContactWith($(this), 'animated fadeInLeft', $(window).height()+10);
		});
	});
});