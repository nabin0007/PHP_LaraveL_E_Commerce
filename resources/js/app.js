// =====================================
// app.js - Laravel + Vite main entry
// =====================================

// Import Bootstrap (via npm)
import 'bootstrap/dist/js/bootstrap.bundle.min.js';

// Import vendor libraries from public folder
import '/public/assets/js/vendors/swiper-bundle.min.js';
import '/public/assets/js/vendors/tiny-slider.js';
import '/public/assets/js/vendors/simplebar.min.js';

// Optional: Import SimpleBar styles if needed
// import '/public/assets/css/vendors/simplebar.css';

// Initialize once DOM is loaded
document.addEventListener('DOMContentLoaded', () => {

    // ==============================
    // SimpleBar
    // ==============================
    if (typeof SimpleBar !== 'undefined') {
        document.querySelectorAll('[data-simplebar]').forEach(el => new SimpleBar(el));
    }

    // ==============================
    // Swiper Sliders
    // ==============================
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
                speed,
                spaceBetween,
                effect,
                loop: slides > 1,
                slidesPerView: 1,
                breakpoints,
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

    // ==============================
    // Tiny Slider
    // ==============================
    if (typeof tns !== 'undefined') {
        document.querySelectorAll('.tns-slider').forEach(sliderEl => {
            const items = parseInt(sliderEl.dataset.items) || 1;
            const autoplay = sliderEl.dataset.autoplay === 'true';
            const autoplayDelay = parseInt(sliderEl.dataset.autoplayDelay) || 3000;
            const controls = sliderEl.dataset.controls !== 'false';
            const nav = sliderEl.dataset.nav !== 'false';
            const gutter = parseInt(sliderEl.dataset.gutter) || 10;
            const speed = parseInt(sliderEl.dataset.speed) || 400;

            tns({
                container: sliderEl,
                items,
                slideBy: 'page',
                autoplay,
                autoplayTimeout: autoplayDelay,
                controls,
                nav,
                mouseDrag: true,
                gutter,
                loop: true,
                speed
            });
        });
    }

    // Zoom effect
    function zoom(event) {
        const zoomEl = event.currentTarget;
        const rect = zoomEl.getBoundingClientRect();
        const x = ((event.clientX - rect.left) / rect.width) * 100;
        const y = ((event.clientY - rect.top) / rect.height) * 100;
        zoomEl.style.backgroundPosition = `${x}% ${y}%`;
    }

    // Apply zoom and reset
    document.querySelectorAll('.zoom').forEach(el => {
        el.addEventListener('mousemove', zoom);
        el.addEventListener('mouseleave', () => {
            el.style.backgroundPosition = 'center';
        });
    });

    // Thumbnail click functionality
    const thumbnails = document.querySelectorAll('#productModalThumbnails .thumbnails-img img');
    const mainImages = document.querySelectorAll('#productModal .zoom');

    thumbnails.forEach((thumb, index) => {
        thumb.addEventListener('click', () => {
            // Hide all main images
            mainImages.forEach(img => (img.style.display = 'none'));
            // Show selected main image
            mainImages[index].style.display = 'block';
        });
    });

    // Initially show only the first main image
    mainImages.forEach((img, i) => (img.style.display = i === 0 ? 'block' : 'none'));


});
