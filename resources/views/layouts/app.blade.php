{{-- ========================================
FILE: resources/views/layouts/app.blade.php
DESCRIPTION: Main application layout
======================================== --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Freshcart - Grocery Ecommerce')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon/favicon.ico') }}" type="image/x-icon" />

    <!-- Tailwind & App CSS/JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- Optional: Tabler Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.46.0/tabler-icons.min.css" />

</head>


<body class="bg-gray-50 text-gray-800">


    @include('auth.auth-modals')
    @include('partials.shop-cart')
    @include('partials.location-modal')

    

<header>
    <div class="border-b">
        @include('partials.header-top')  {{-- Logo, search bar, user/cart --}}
        @include('partials.navbar', ['menus' => $menus, 'categories' => $categories])   {{-- Menus & categories --}}
    </div>
</header>

    <!-- Navbar -->
    <!--@include('partials.navbar')-->


    <!-- Main Content -->
    <main>
        @yield('content')
    </main>


    <!-- Footer -->
    @include('partials.footer')
    <!-- Modals -->
    @include('partials.modal-product')
    <!-- Optional: Buy Template -->
    {{-- @include('partials.buy-template') --}}
    <!-- Page-specific Scripts -->
    @stack('scripts')

 


</body>

</html>
