{{-- ========================================
    FILE: resources/views/pages/index.blade.php
    DESCRIPTION: Homepage content
======================================== --}}
@extends('layouts.app')

@section('title', 'Home - Freshcart Grocery Ecommerce')

@section('content')
    {{-- Hero Slider Section --}}
    <section class="mt-8">
        <div class="container">
            <div class="swiper-container swiper" id="swiper-1" 
                data-pagination-type="" 
                data-speed="400"
                data-space-between="100" 
                data-pagination="true" 
                data-navigation="false" 
                data-autoplay="true"
                data-autoplay-delay="3000" 
                data-effect="fade"
                data-breakpoints='{"480": {"slidesPerView": 1}, "768": {"slidesPerView": 1}, "1024": {"slidesPerView": 1}}'>
                <div class="swiper-wrapper pb-8">
                    {{-- Slide 1 --}}
                    <div class="swiper-slide"
                        style="background: url({{ asset('assets/images/slider/slide-1.jpg') }}) no-repeat; background-size: cover; border-radius: 0.5rem; background-position: center">
                        <div class="lg:py-32 p-12 lg:pl-12 xl:w-2/5 md:w-3/5">
                            <span class="inline-block p-2 text-sm align-baseline leading-none rounded-lg bg-yellow-500 text-gray-900 font-semibold">
                                Opening Sale Discount 50%
                            </span>
                            <div class="my-7 flex flex-col gap-2">
                                <h1 class="text-gray-900 text-xl lg:text-5xl font-bold leading-tight">
                                    SuperMarket For Fresh Grocery
                                </h1>
                                <p class="text-md font-light">
                                    Introduced a new model for online grocery shopping and convenient home delivery.
                                </p>
                            </div>
                            <a href="#!" class="btn inline-flex items-center gap-x-2 bg-gray-800 text-white border-gray-800 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-900 hover:border-gray-900 active:bg-gray-900 active:border-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300">
                                Shop Now
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right inline-block" width="14" height="14" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M5 12l14 0" />
                                    <path d="M13 18l6 -6" />
                                    <path d="M13 6l6 6" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    
                    {{-- Slide 2 --}}
                    <div class="swiper-slide"
                        style="background: url({{ asset('assets/images/slider/slider-2.jpg') }}) no-repeat; background-size: cover; border-radius: 0.5rem; background-position: center">
                        <div class="lg:py-32 lg:pl-12 lg:pr-6 px-12 py-12 xl:w-2/5 md:w-3/5">
                            <span class="inline-block p-2 text-sm align-baseline leading-none rounded-lg bg-yellow-500 text-gray-900 font-semibold">
                                Free Shipping - orders over $100
                            </span>
                            <div class="my-7 flex flex-col gap-2">
                                <h2 class="text-gray-900 text-xl lg:text-5xl font-bold leading-tight">
                                    Free Shipping on<br />orders over <span class="text-green-600">$100</span>
                                </h2>
                                <p class="text-md font-light">
                                    Free Shipping to First-Time Customers Only, After promotions and discounts are applied.
                                </p>
                            </div>
                            <a href="#!" class="btn inline-flex items-center gap-x-2 bg-gray-800 text-white border-gray-800 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-900 hover:border-gray-900 active:bg-gray-900 active:border-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300">
                                Shop Now
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right inline-block" width="14" height="14" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M5 12l14 0" />
                                    <path d="M13 18l6 -6" />
                                    <path d="M13 6l6 6" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- Pagination --}}
                <div class="swiper-pagination !bottom-14"></div>
            </div>
        </div>
    </section>

    {{-- Features Section --}}
    <section class="lg:my-14 my-8">
        <div class="container">
            <div class="flex flex-wrap gap-y-6">
                <div class="md:w-1/2 lg:w-1/4 px-3">
                    <div class="flex flex-col gap-4">
                        <div class="inline-block">
                            <img src="{{ asset('assets/images/icons/clock.svg') }}" alt="Fast Delivery" />
                        </div>
                        <div class="flex flex-col gap-2">
                            <h3 class="text-md">10 minute grocery now</h3>
                            <p>Get your order delivered to your doorstep at the earliest from FreshCart pickup stores near you.</p>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2 lg:w-1/4 px-3">
                    <div class="flex flex-col gap-4">
                        <div class="inline-block">
                            <img src="{{ asset('assets/images/icons/gift.svg') }}" alt="Best Prices" />
                        </div>
                        <div class="flex flex-col gap-2">
                            <h3 class="text-md">Best Prices & Offers</h3>
                            <p>Cheaper prices than your local supermarket, great cashback offers to top it off. Get best prices & offers.</p>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2 lg:w-1/4 px-3">
                    <div class="flex flex-col gap-4">
                        <div class="inline-block">
                            <img src="{{ asset('assets/images/icons/package.svg') }}" alt="Wide Assortment" />
                        </div>
                        <div class="flex flex-col gap-2">
                            <h3 class="text-md">Wide Assortment</h3>
                            <p>Choose from 5000+ products across food, personal care, household, bakery, veg and non-veg & other categories.</p>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2 lg:w-1/4 px-3">
                    <div class="flex flex-col gap-4">
                        <div class="inline-block">
                            <img src="{{ asset('assets/images/icons/refresh-cw.svg') }}" alt="Easy Returns" />
                        </div>
                        <div class="flex flex-col gap-2">
                            <h3 class="text-md">Easy Returns</h3>
                            <p>Not satisfied with a product? Return it at the doorstep & get a refund within hours. No questions asked <a href="#!" class="text-green-600">policy</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    {{-- Page-specific JavaScript --}}
    <script src="{{ asset('assets/js/vendors/countdown.js') }}"></script>
@endpush
