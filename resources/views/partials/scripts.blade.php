{{-- ========================================
    FILE: resources/views/partials/scripts.blade.php
    DESCRIPTION: JavaScript libraries and initialization
======================================== --}}

<!-- Vendor JS via CDN -->
<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5/dist/js/bootstrap.bundle.min.js"></script>-->

<!--<script src="https://cdn.jsdelivr.net/npm/simplebar@6/dist/simplebar.min.js"></script>-->
<!--<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>-->
<!--<script src="https://cdn.jsdelivr.net/npm/tiny-slider@2/dist/min/tiny-slider.js"></script>-->

<!-- Theme JS -->
<!--<script src="{{ asset('assets/js/main.js') }}"></script>-->

<!-- Initialize after DOM loaded -->
<!--<script>
document.addEventListener('DOMContentLoaded', () => {
    // SimpleBar
    if (typeof SimpleBar !== 'undefined') {
        document.querySelectorAll('[data-simplebar]').forEach(el => new SimpleBar(el));
    }

    // Swiper (dynamic based on data-attributes)
    if (typeof Swiper !== 'undefined') {
        document.querySelectorAll('.swiper').forEach(sliderEl => {
            const slides = sliderEl.querySelectorAll('.swiper-slide').length;
            const speed = parseInt(sliderEl.dataset.speed) || 400;
            const spaceBetween = parseInt(sliderEl.dataset.spaceBetween) || 20;
            const paginationEnabled = sliderEl.dataset.pagination === 'true';
            const navigationEnabled = sliderEl.dataset.navigation === 'true';
            const autoplayEnabled = sliderEl.dataset.autoplay === 'true';
            const autoplayDelay = parseInt(sliderEl.dataset.autoplayDelay) || 3000;
            const effect = sliderEl.dataset.effect || 'slide';
            const breakpoints = sliderEl.dataset.breakpoints ? JSON.parse(sliderEl.dataset.breakpoints) : {};

            new Swiper(sliderEl, {
                speed: speed,
                spaceBetween: spaceBetween,
                effect: effect,
                loop: slides > 1,
                slidesPerView: 1,
                breakpoints: breakpoints,
                autoplay: autoplayEnabled ? { delay: autoplayDelay, disableOnInteraction: false } : false,
                pagination: paginationEnabled ? {
                    el: sliderEl.querySelector('.swiper-pagination'),
                    clickable: true
                } : false,
                navigation: navigationEnabled ? {
                    nextEl: sliderEl.querySelector('.swiper-button-next'),
                    prevEl: sliderEl.querySelector('.swiper-button-prev')
                } : false
            });
        });
    }

    // Tiny Slider
 if (typeof tns !== 'undefined') {
        document.querySelectorAll('.tns-slider').forEach(sliderEl => {
            const items = parseInt(sliderEl.dataset.items) || 1; // slides per view
            const autoplay = sliderEl.dataset.autoplay === 'true';
            const autoplayDelay = parseInt(sliderEl.dataset.autoplayDelay) || 3000;
            const controls = sliderEl.dataset.controls !== 'false'; // default true
            const nav = sliderEl.dataset.nav !== 'false'; // default true

            tns({
                container: sliderEl,
                items: items,
                slideBy: 'page',
                autoplay: autoplay,
                autoplayTimeout: autoplayDelay,
                controls: controls,
                nav: nav,
                mouseDrag: true,
                gutter: parseInt(sliderEl.dataset.gutter) || 10,
                loop: true,
                speed: parseInt(sliderEl.dataset.speed) || 400,
            });
        });
    }
});
</script>-->
