

@php
    $categories = $categories ?? []; 
@endphp

<section class="mt-8">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full">
                <h2 class="text-lg absolute z-10">Featured Categories</h2>
            </div>
        </div>

        <div class="swiper-container swiper" id="swiper-1"
            data-speed="400"
            data-space-between="20"
            data-pagination="false"
            data-navigation="true"
            data-autoplay="true"
            data-autoplay-delay="3000"
            data-effect="slide"
            data-breakpoints='{"480": {"slidesPerView": 2}, "768": {"slidesPerView": 3}, "1024": {"slidesPerView": 6}}'>
            
            <div class="swiper-wrapper py-12">
                @foreach($categories as $category)
                    <div class="swiper-slide">
                        <a href="{{ $category->link ?? '#' }}">
                            <div
                                class="relative rounded-lg border bg-white border-gray-300 transition hover:border-green-600 hover:shadow-md">
                                <div class="py-8 text-center">
                                    @if($category->image)
                                        <img src="{{ asset($category->image) }}"
                                            alt="{{ $category->name }}"
                                            class="mb-3 m-auto" />
                                    @endif
                                    <div class="text-base">{{ $category->name }}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="swiper-pagination"></div>

            <div class="swiper-navigation">
                <div class="swiper-button-next top-[28px]"></div>
                <div class="swiper-button-prev top-[28px] !right-0 !left-auto mx-10"></div>
            </div>
        </div>
    </div>
</section>
