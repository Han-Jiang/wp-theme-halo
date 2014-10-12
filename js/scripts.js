(function($) {
	// Isotope
	var items = $('#portfolio-items');
	items.isotope({
		 itemSelector : '.portfolio-item'	 
	});
	
	// Isotope filtering
	$('#portfolio-filters a').click(function(){
	  var selector = $(this).attr('data-filter');
	  items.isotope({ filter: selector });
	  return false;
	});
	
	// // Fancybox
	// $("a[rel^='fancybox[']").fancybox({
	// 	fitToView: true
	// });


	/*** Back to top ***/
	// Smooth Scroll
	$('.main-nav a').click(function() {
		$target = $(this).attr('class');
		$.smoothScroll({
			scrollTarget: 'h4#' + $target,
			 speed: 1000
		});
		return false;
	});
	
	// Scroll back to top
	$('#btop').click(function(){
		$.smoothScroll({
			scrollTarget: '.top',
			 speed: 1000
		});
		return false;
	});
	
	// Conditional display	
	$(window).scroll(function () {
		if ($(this).scrollTop() > 400) {
			$('#btop').fadeIn('slow');
		} else {
			$('#btop').fadeOut('slow');
		}
	});
	

})( jQuery );

