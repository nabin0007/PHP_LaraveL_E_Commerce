@extends('layouts.app')
@section('title', 'Home')
@section('content')



{{-- Pass slides from controller --}}
{{-- Slider --}}
@include('partials.slider', ['slides' => $slides])
{{-- Categories --}}
@include('partials.categories', ['categories' => $categories])
{{-- Featured Sections --}}





<section>
    <div class="container">
        <div class="flex md:space-x-2 lg:space-x-6 flex-wrap md:flex-nowrap">
            @foreach($bannerSectionsHorizontal as $section)
            <div class="w-full md:w-1/2 mb-3">
                <div class="py-10 px-8 rounded-lg"
                    style="background: url('{{asset($section->banner_image)}}') no-repeat; background-size: cover; background-position: center;" loading="lazy">

                    <div class="flex flex-col gap-5">
                        <div class="flex flex-col gap-1">
                            <h2 class="font-bold text-xl">{{ $section->title }}</h2>
                            @if($section->subtitle)
                            <p>{{ $section->subtitle }}</p>
                            @endif
                        </div>

                        <div class="flex flex-wrap">
                            <a href="{{ $section->link ?? '#' }}"
                                class="btn inline-flex items-center gap-x-2 bg-gray-800 text-white border-gray-800 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-gray-900 hover:border-gray-900 active:bg-gray-900 active:border-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300"> Shop Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>






<!-- Popular Products Start-->
<section class="lg:my-14 my-8">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full mb-6">
                <h2 class="text-lg">Popular Products</h2>
            </div>
        </div>

        <div class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:gap-4 xl:grid-cols-5">
            @forelse($popularProducts as $product)
            <div class="relative flex flex-col min-w-0 rounded-lg break-words border bg-white border-gray-300 card-product">
                <div class="flex-auto p-4">
                    <div class="text-center relative flex justify-center">
                        <div class="absolute top-0 left-0">
                            <span
                                class="inline-block p-1 text-center font-semibold text-sm align-baseline leading-none rounded bg-red-600 text-white">{{ $product->label }}</span>
                        </div>
                        <a href="#">
                            <img src="{{ asset($product->image) }}"
                                alt="{{ $product->name }}"
                                class="mb-3 m-auto max-w-full h-auto" />
                        </a>

                        <div class="absolute w-full bottom-[15%] opacity-0 invisible card-product-action">
                            <a href="#!"
                                class="h-[34px] w-[34px] leading-[34px] bg-white shadow inline-flex items-center justify-center rounded-lg hover:bg-green-600 hover:text-white"
                                data-bs-toggle="tooltip" data-bs-html="true" title="Quick View">
                                <span data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-eye" width="16" height="16"
                                        viewbox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                        <path
                                            d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"></path>
                                    </svg>
                                </span>
                            </a>
                            <a href="#!"
                                class="h-[34px] w-[34px] leading-[34px] bg-white shadow inline-flex items-center justify-center rounded-lg hover:bg-green-600 hover:text-white"
                                data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-heart" width="16" height="16"
                                    viewbox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
                                </svg>
                            </a>
                            <a href="#!"
                                class="h-[34px] w-[34px] leading-[34px] bg-white shadow inline-flex items-center justify-center rounded-lg hover:bg-green-600 hover:text-white"
                                data-bs-toggle="tooltip" data-bs-html="true" title="Compare">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-arrows-exchange" width="16" height="16"
                                    viewbox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M7 10h14l-4 -4"></path>
                                    <path d="M17 14h-14l4 4"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="flex flex-col gap-3">
                        <a href="#!" class="text-decoration-none text-gray-500">
                            <small>{{ $product->category->name }}</small>
                        </a>
                        <div class="flex flex-col gap-2">
                            <h3 class="text-base truncate"><a href="#!">{{ $product->name }}</a></h3>


@php
        $fullStars = floor($product->rating);
        $halfStar = ($product->rating - $fullStars) >= 0.5;
        $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);
    @endphp


<div class="flex items-center">
    <div class="flex flex-row gap-3">
        <small class="text-yellow-500 flex items-center">
            {{-- Full Stars --}}
            @for ($i = 0; $i < $fullStars; $i++)
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="icon icon-tabler icon-tabler-star-filled" width="14" height="14"
                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M8.243 7.34l-6.38 .925a1 1 0 0 0-.44 1.684l4.622 4.499-1.09 6.355a1 1 0 0 0 1.464.944l5.706-3 5.693 3a1 1 0 0 0 1.352-1.1l-1.091-6.355 4.624-4.5a1 1 0 0 0-.633-1.62l-6.38-.926-2.852-5.78a1 1 0 0 0-1.794 0l-2.853 5.78z"
                          stroke-width="0" fill="currentColor"/>
                </svg>
            @endfor

            {{-- Half Star --}}
            @if ($halfStar)
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="icon icon-tabler icon-tabler-star-half-filled" width="14" height="14"
                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M12 1a.993.993 0 0 1 .823.443l.067.116l2.852 5.781l6.38.925a1 1 0 0 1 .633 1.62l-.078.086l-4.624 4.499l1.09 6.355a1 1 0 0 1-1.352 1.1l-5.693-3l-5.706 3a1 1 0 0 1-1.464-.944l1.09-6.355l-4.622-4.499a1 1 0 0 1 .44-1.684l6.38-.925l2.853-5.78a1 1 0 0 1 .904-.56z"
                          stroke-width="0" fill="currentColor"/>
                </svg>
            @endif

            {{-- Empty Stars --}}
            @for ($i = 0; $i < $emptyStars; $i++)
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="icon icon-tabler icon-tabler-star" width="14" height="14"
                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M12 17.75l-6.172 3.245l1.179-6.873l-5-4.867l6.9-1l3.093-6.253l3.093 6.253l6.9 1l-5 4.867l1.179 6.873z"/>
                </svg>
            @endfor
        </small>

        <div class="flex flex-row gap-1">
            <span class="text-gray-500 text-sm">{{ number_format($product->rating, 1) }}</span>
            <span class="text-gray-500 text-sm">({{ $product->rating_count }})</span>
        </div>
    </div>
</div>

                        </div>
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-gray-900 font-semibold">${{ $product->price }}</span>
                                @if($product->discount_price)
                                <span class="line-through text-gray-500">${{ $product->discount_price }}</span>
                                @endif
                            </div>
                            <div>
                                <button type="button"
                                    class="btn inline-flex items-center gap-x-1 bg-green-600 text-white border-green-600 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-green-700 hover:border-green-700 active:bg-green-700 active:border-green-700 focus:outline-none focus:ring-4 focus:ring-green-300 btn-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-plus" width="14" height="14"
                                        viewbox="0 0 24 24" stroke-width="3" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 5l0 14"></path>
                                        <path d="M5 12l14 0"></path>
                                    </svg>
                                    <span>Add</span>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @empty
            <p>No popular products found.</p>
            @endforelse
        </div>
    </div>
</section>
<!-- Popular Products End-->










<section>
    <div class="container">
        <div class="flex flex-wrap">
            <div class="md:w-full mb-6">
                <h2 class="text-lg">Daily Best Sells</h2>
            </div>
        </div>



        <div class="block w-full overflow-x-auto scrolling-touch pb-6">
            <div class="xl:grid gap-4 grid-cols-1 md:grid-cols-2 xl:grid-cols-4">
                {{-- Vertical Banners --}}
                @foreach($bannerSectionsVertical as $section)
                <div class="flex-0 block w-full md:w-auto">
                    <div class="pt-8 px-6 rounded-lg" style="background-image: url('{{ asset($section->banner_image) }}'); background-size: cover; height: 480px">
                        <div class="flex flex-col gap-5">
                            <div class="flex flex-col gap-2">
                                <h3 class="text-lg text-white">{{ $section->title }}</h3>
                                @if($section->subtitle)
                                <p class="text-white text-base">{{ $section->subtitle }}</p>
                                @endif
                            </div>
                            <div>
                                <a href="{{ $section->link ?? '#' }}"
                                    class="btn inline-flex items-center gap-x-2 bg-green-600 text-white border-green-600 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-green-700 hover:border-green-700 active:bg-green-700 active:border-green-700 focus:outline-none focus:ring-4 focus:ring-green-300">
                                    <span>Shop Now</span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-arrow-right" width="14"
                                            height="14" viewbox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M5 12l14 0"></path>
                                            <path d="M13 18l6 -6"></path>
                                            <path d="M13 6l6 6"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @foreach($dailyBestSells as $product)
                <div class="flex-0 block w-full md:w-auto">
                    <div class="relative flex flex-col min-w-0 rounded-lg break-words border bg-white border-gray-300 card-product">
                        <div class="flex-auto p-4">
                            <div class="text-center relative flex justify-center">
                                <a href="#!">
                                    <img src="{{ asset($product->image) }}"
                                        alt="{{ $product->name }}"
                                        class="mb-3 m-auto max-w-full h-auto" />
                                </a>

                                <div class="absolute w-full bottom-[15%] opacity-0 invisible card-product-action">
                                    <a href="#!"
                                        class="h-[34px] w-[34px] leading-[34px] bg-white shadow inline-flex items-center justify-center rounded-lg hover:bg-green-600 hover:text-white"
                                        data-bs-toggle="tooltip" data-bs-html="true" title="Quick View">
                                        <span data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-eye" width="16" height="16"
                                                viewbox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                                <path
                                                    d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"></path>
                                            </svg>
                                        </span>
                                    </a>
                                    <a href="#!"
                                        class="h-[34px] w-[34px] leading-[34px] bg-white shadow inline-flex items-center justify-center rounded-lg hover:bg-green-600 hover:text-white"
                                        data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-heart" width="16" height="16"
                                            viewbox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
                                        </svg>
                                    </a>
                                    <a href="#!"
                                        class="h-[34px] w-[34px] leading-[34px] bg-white shadow inline-flex items-center justify-center rounded-lg hover:bg-green-600 hover:text-white"
                                        data-bs-toggle="tooltip" data-bs-html="true" title="Compare">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-arrows-exchange" width="16" height="16"
                                            viewbox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M7 10h14l-4 -4"></path>
                                            <path d="M17 14h-14l4 4"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <div class="flex flex-col gap-3">
                                @if($product->category)
                                <small>{{ $product->category->name }}</small>
                                @endif
                                <!--<a href="#!" class="text-gray-500">
                                    <small>{{ $product->category->name ?? '' }}</small>
                                </a>-->


                                <div class="flex flex-col gap-2">
                                    <h3 class="text-base truncate"><a href="#!">{{ $product->name }}</a></h3>

                                    <div class="flex justify-between items-center">
                                        <div>
                                            <span class="text-gray-900 font-semibold">${{ $product->price }}</span>
                                            @if($product->old_price)
                                            <span class="line-through text-gray-500">${{ $product->old_price }}</span>
                                            @endif
                                        </div>
                                        <div>
                                            <div class="flex items-center">
                                                <small class="text-yellow-500 flex items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-star-filled"
                                                        width="14" height="14" viewbox="0 0 24 24"
                                                        stroke-width="2" stroke="currentColor" fill="none"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                                            stroke-width="0" fill="currentColor"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-star-filled"
                                                        width="14" height="14" viewbox="0 0 24 24"
                                                        stroke-width="2" stroke="currentColor" fill="none"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                                            stroke-width="0" fill="currentColor"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-star-filled"
                                                        width="14" height="14" viewbox="0 0 24 24"
                                                        stroke-width="2" stroke="currentColor" fill="none"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                                            stroke-width="0" fill="currentColor"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-star-filled"
                                                        width="14" height="14" viewbox="0 0 24 24"
                                                        stroke-width="2" stroke="currentColor" fill="none"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z"
                                                            stroke-width="0" fill="currentColor"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-star-half-filled"
                                                        width="14" height="14" viewbox="0 0 24 24"
                                                        stroke-width="2" stroke="currentColor" fill="none"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M12 1a.993 .993 0 0 1 .823 .443l.067 .116l2.852 5.781l6.38 .925c.741 .108 1.08 .94 .703 1.526l-.07 .095l-.078 .086l-4.624 4.499l1.09 6.355a1.001 1.001 0 0 1 -1.249 1.135l-.101 -.035l-.101 -.046l-5.693 -3l-5.706 3c-.105 .055 -.212 .09 -.32 .106l-.106 .01a1.003 1.003 0 0 1 -1.038 -1.06l.013 -.11l1.09 -6.355l-4.623 -4.5a1.001 1.001 0 0 1 .328 -1.647l.113 -.036l.114 -.023l6.379 -.925l2.853 -5.78a.968 .968 0 0 1 .904 -.56zm0 3.274v12.476a1 1 0 0 1 .239 .029l.115 .036l.112 .05l4.363 2.299l-.836 -4.873a1 1 0 0 1 .136 -.696l.07 -.099l.082 -.09l3.546 -3.453l-4.891 -.708a1 1 0 0 1 -.62 -.344l-.073 -.097l-.06 -.106l-2.183 -4.424z"
                                                            stroke-width="0" fill="currentColor"></path>
                                                    </svg>
                                                </small>
                                                <span class="text-gray-700 text-sm ml-2">4.5</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="grid">
                                    <button type="button"
                                        class="btn bg-green-600 text-white border-green-600 disabled:opacity-50 disabled:pointer-events-none hover:text-white hover:bg-green-700 hover:border-green-700 active:bg-green-700 active:border-green-700 focus:outline-none focus:ring-4 focus:ring-green-300">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-plus" width="14" height="14"
                                            viewbox="0 0 24 24" stroke-width="3" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M12 5l0 14"></path>
                                            <path d="M5 12l14 0"></path>
                                        </svg>
                                        <span class="ml-1">Add to Cart</span>
                                    </button>
                                </div>

                                <div class="flex justify-start text-center">
                                    <div class="deals-countdown w-full" data-countdown="2028/10/10 00:00:00">
                                        <span class="countdown-section">
                                            <span class="countdown-amount hover-up">0</span><span class="countdown-period"> days </span>
                                        </span>
                                        <span class="countdown-section">
                                            <span class="countdown-amount hover-up">0</span><span class="countdown-period"> hours </span>
                                        </span>
                                        <span class="countdown-section">
                                            <span class="countdown-amount hover-up">0</span><span class="countdown-period"> mins </span>
                                        </span>
                                        <span class="countdown-section">
                                            <span class="countdown-amount hover-up">0</span><span class="countdown-period"> sec </span>
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>



<section class="lg:my-14 my-8">
    <div class="container">
        <div class="flex flex-wrap gap-y-6">
            <div class="md:w-1/2 lg:w-1/4 px-3">
                <div class="flex flex-col gap-4">
                    <div class="inline-block"><img src="assets/images/icons/clock.svg" alt="" /></div>
                    <div class="flex flex-col gap-2">
                        <h3 class="text-md">10 minute grocery now</h3>
                        <p>Get your order delivered to your doorstep at the earliest from FreshCart pickup
                            stores near you.</p>
                    </div>
                </div>
            </div>
            <div class="md:w-1/2 lg:w-1/4 px-3">
                <div class="flex flex-col gap-4">
                    <div class="inline-block"><img src="assets/images/icons/gift.svg" alt="" /></div>
                    <div class="flex flex-col gap-2">
                        <h3 class="text-md">Best Prices & Offers</h3>
                        <p>Cheaper prices than your local supermarket, great cashback offers to top it off. Get
                            best pricess &
                            offers.</p>
                    </div>
                </div>
            </div>
            <div class="md:w-1/2 lg:w-1/4 px-3">
                <div class="flex flex-col gap-4">
                    <div class="inline-block"><img src="assets/images/icons/package.svg" alt="" /></div>
                    <div class="flex flex-col gap-2">
                        <h3 class="text-md">Wide Assortment</h3>
                        <p>Choose from 5000+ products across food, personal care, household, bakery, veg and
                            non-veg & other
                            categories.</p>
                    </div>
                </div>
            </div>
            <div class="md:w-1/2 lg:w-1/4 px-3">
                <div class="flex flex-col gap-4">
                    <div class="inline-block"><img src="assets/images/icons/refresh-cw.svg" alt="" /></div>
                    <div class="flex flex-col gap-2">
                        <h3 class="text-md">Easy Returns</h3>
                        <p>
                            Not satisfied with a product? Return it at the doorstep & get a refund within hours.
                            No questions
                            asked
                            <a href="#!" class="text-green-600">policy</a>
                            .
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
