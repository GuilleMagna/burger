(function ($) {
	'use strict';

	function initProject11() {
		if (typeof $.fn.owlCarousel !== 'function') {
			return;
		}

		$('.project-11-carousel').each(function () {
			var $carousel = $(this);

			if ($carousel.hasClass('owl-loaded')) {
				return;
			}

			$carousel.owlCarousel({
				items: 4,
				margin: 24,
				loop: false,
				nav: false,
				dots: true,
				smartSpeed: 650,
				autoplay: false,
				autoHeight: false,
				responsive: {
					0: {
						items: 1,
						margin: 16
					},
					576: {
						items: 2,
						margin: 18
					},
					992: {
						items: 3,
						margin: 22
					},
					1200: {
						items: 4,
						margin: 24
					}
				}
			});
		});
	}

	$(document).ready(initProject11);

	if (window.acf) {
		window.acf.addAction('render_block_preview/type=project-11', initProject11);
	}
})(jQuery);
