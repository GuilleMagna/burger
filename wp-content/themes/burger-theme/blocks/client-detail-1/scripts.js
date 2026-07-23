(function ($) {
	'use strict';

	function initClientDetail1() {
		if (typeof $.fn.owlCarousel !== 'function') {
			return;
		}

		$('.client-detail-1-carousel').each(function () {
			var $carousel = $(this);

			if ($carousel.hasClass('owl-loaded')) {
				return;
			}

			$carousel.owlCarousel({
				items: 3,
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
					768: {
						items: 2,
						margin: 20
					},
					1200: {
						items: 3,
						margin: 24
					}
				}
			});
		});
	}

	$(document).ready(initClientDetail1);

	if (window.acf) {
		window.acf.addAction('render_block_preview/type=client-detail-1', initClientDetail1);
	}
})(jQuery);
