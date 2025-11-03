{{-- ========================================
    FILE: resources/views/layouts/app.blade.php
    DESCRIPTION: Main application layout
======================================== --}}


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Freshcart - Grocery Ecommerce')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon/favicon.ico') }}" />

 


    {{-- Include head partials --}} 
    @vite(['resources/css/app.css', 'resources/js/app.js'])

   <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />-->


    <!-- Optional: Tabler Icons via CDN (if not included in app.css) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.46.0/tabler-icons.min.css" />

</head>
<body>
    {{-- Navbar --}}
    @include('partials.navbar')
    
    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>
    
    {{-- Footer --}}
    @include('partials.footer')
    
    {{-- Modals --}}
    @include('partials.modal-product')
    
    {{-- Buy Template Button (Optional) --}}
    {{-- @include('partials.buy-template') --}}
    


    {{-- Page-specific scripts --}}
    @stack('scripts')

    <!--<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>-->
<!--<script>
    new Swiper('#swiper-1', {
        loop: true,
        autoplay: { delay: 3000 },
        pagination: { el: '.swiper-pagination', clickable: true },
        navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
        effect: 'fade',
    });
</script>-->

</body>
</html>
