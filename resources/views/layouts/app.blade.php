{{-- ========================================
FILE: resources/views/layouts/app.blade.php
DESCRIPTION: Optimized Main Layout (Fast & SEO Friendly)
======================================== --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    {{-- SEO Title --}}
    <title>@yield('title', 'Freshcart - Grocery Ecommerce')</title>

    {{-- SEO Meta --}}
    <meta name="description" content="@yield('meta_description', 'Buy fresh grocery, best offers, home delivery')" />
    <meta name="keywords" content="grocery, ecommerce, fresh food, online shop, delivery" />
    <meta name="author" content="Freshcart" />

    {{-- Security --}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Cache-Control" content="public, max-age=31536000" />

    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon/favicon.ico') }}" type="image/x-icon" />

    {{-- Preconnect for Faster Loading --}}
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">

    {{-- Vite CSS & JS (defer for speed) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Swiper JS (defer = faster page load) --}}
    <script defer src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    {{-- Tabler Icons (non-blocking async) --}}
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.46.0/tabler-icons.min.css" as="style" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.46.0/tabler-icons.min.css" />


    <script src="//unpkg.com/alpinejs" defer></script>

</head>

<body class="bg-gray-50 text-gray-800"  x-data="{ openLogin: false, openRegister: false }">



    {{-- Auth --}}
    @include('auth.auth-modals')

    {{-- Cart --}}
    @include('partials.shop-cart')

    {{-- Location --}}
    @include('partials.location-modal')

    {{-- Header --}}
    <header>
        <div class="border-b">
            @include('partials.header-top')

            {{-- Pass menus & categories safely --}}
            @include('partials.navbar', [
                'menus' => $menus ?? [],
                'categories' => $categories ?? []
            ])
        </div>
    </header>

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    {{-- Product Modal --}}
    @include('partials.modal-product')

    {{-- Page Specific Scripts --}}
    @stack('scripts')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>
