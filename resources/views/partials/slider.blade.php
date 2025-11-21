{{-- ========================================
    FILE: resources/views/partials/slider.blade.php
    DESCRIPTION: Homepage slider section
======================================== --}}


@php
    $slides = $slides ?? []; 
@endphp

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
    @foreach($slides as $slide)
    <div class="swiper-slide"
         style="background: url('{{asset($slide->image)}}') center center / cover no-repeat; border-radius: 0.5rem;" loading="lazy">

        <div class="lg:py-32 p-12 lg:pl-12 xl:w-2/5 md:w-3/5">



                {{-- Tagline --}}
                @if(!empty($slide->tagline))
            <span class="inline-block p-2 text-sm align-baseline leading-none rounded-lg bg-yellow-500 text-gray-900 font-semibold">
                {!! $slide->tagline !!}
            </span>

                @endif

                {{-- Title & Subtitle --}}
            <div class="my-7 flex flex-col gap-2">

                    @if(!empty($slide->title))
                <h1 class="text-gray-900 text-xl lg:text-5xl font-bold leading-tight">
                    {!! $slide->title !!}
                </h1>

                    @endif

                    @if(!empty($slide->subtitle))
                <p class="text-md font-light">
                    {!! $slide->subtitle !!}
                </p>

                    @endif
            </div>



                {{-- Button --}}
                @if(!empty($slide->link))
            <a href="{{ $slide->link }}"
               class="btn inline-flex items-center gap-x-2 bg-gray-800 text-white border-gray-800 hover:bg-gray-900 hover:border-gray-900 focus:ring-4 focus:ring-gray-300">
                Shop Now
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right inline-block" width="14" height="14" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M5 12h14"></path>
                    <path d="M13 18l6-6"></path>
                    <path d="M13 6l6 6"></path>
                </svg>
            </a>

                @endif

        </div>
    </div>
    @endforeach
</div>


            {{-- Swiper navigation & pagination --}}
            <div class="swiper-pagination !bottom-14"></div>
            <div class="swiper-navigation">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</section>
