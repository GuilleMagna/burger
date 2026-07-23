jQuery(function($){

    const STORAGE_KEY = 'slider_products_favorites';

    function getFavorites()
    {
        try {
            return JSON.parse(localStorage.getItem(STORAGE_KEY)) || [];
        } catch(e) {
            return [];
        }
    }

    function saveFavorites(items)
    {
        localStorage.setItem(STORAGE_KEY, JSON.stringify(items));
    }

    function updateFavoriteButtons()
    {
        const favorites = getFavorites();

        $('.slider-product-favorite').each(function(){
            const $button = $(this);
            const id = String($button.data('favorite-id'));

            if (favorites.includes(id)) {
                $button.addClass('is-active').attr('aria-label', 'Quitar de favoritos');
            } else {
                $button.removeClass('is-active').attr('aria-label', 'Agregar a favoritos');
            }
        });
    }

    function toggleNavState($block, event)
    {
        const current = event.item.index;
        const visible = event.page.size;
        const total = event.item.count;

        const $prev = $block.find('.slider-products-prev');
        const $next = $block.find('.slider-products-next');

        $prev.toggleClass('disabled', current <= 0).prop('disabled', current <= 0);
        $next.toggleClass('disabled', current + visible >= total).prop('disabled', current + visible >= total);
    }

    $('.slider-products-block').each(function(){
        const $block = $(this);
        const $carousel = $block.find('.slider-products-carousel');

        if (!$carousel.length || typeof $.fn.owlCarousel === 'undefined') {
            return;
        }

        $carousel.owlCarousel({
            loop: false,
            nav: false,
            dots: false,
            margin: 20,
            smartSpeed: 450,
            responsive: {
                0: { items: 1.15, margin: 12 },
                576: { items: 2, margin: 16 },
                768: { items: 2.5, margin: 20 },
                992: { items: 3, margin: 20 },
                1200: { items: 4, margin: 24 }
            },
            onInitialized: function(event) {
                toggleNavState($block, event);
            },
            onChanged: function(event) {
                toggleNavState($block, event);
            }
        });

        $block.find('.slider-products-next').on('click', function(){
            $carousel.trigger('next.owl.carousel');
        });

        $block.find('.slider-products-prev').on('click', function(){
            $carousel.trigger('prev.owl.carousel');
        });
    });

    $(document).on('click', '.slider-product-favorite', function(e){
        e.preventDefault();
        e.stopPropagation();

        const id = String($(this).data('favorite-id'));
        if (!id) return;

        let favorites = getFavorites();

        if (favorites.includes(id)) {
            favorites = favorites.filter(item => item !== id);
        } else {
            favorites.push(id);
        }

        saveFavorites(favorites);
        updateFavoriteButtons();
    });

    updateFavoriteButtons();

});
