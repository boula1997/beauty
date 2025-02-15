<div class="swiper mySwiper">
    <div class="swiper-wrapper pb-4">
        @foreach ($partners as $partner)

        <div class="swiper-slide" data-aos="zoom-in">
            <div class="item">
                <div class="thumb text-center swiper-image-container">
                    <img src="{{ $partner->image }}" alt="img">
                </div>
            </div>
        </div>
            
        @endforeach
        
        {{-- <div class="swiper-slide" data-aos="zoom-in">
            <div class="item">
                <div class="thumb text-center swiper-image-container">
                    <img src="{{ asset('assets/img/client/2.webp') }}" alt="img">
                </div>
            </div>
        </div>
        <div class="swiper-slide" data-aos="zoom-in">
            <div class="item">
                <div class="thumb text-center swiper-image-container">
                    <img src="{{ asset('assets/img/client/2.webp') }}" alt="img">
                </div>
            </div>
        </div>
        <div class="swiper-slide" data-aos="zoom-in">
            <div class="item">
                <div class="thumb text-center swiper-image-container">
                    <img src="{{ asset('assets/img/client/3.webp') }}" alt="img">
                </div>
            </div>
        </div>
        <div class="swiper-slide" data-aos="zoom-in">
            <div class="item">
                <div class="thumb text-center swiper-image-container">
                    <img src="{{ asset('assets/img/client/4.webp') }}" alt="img">
                </div>
            </div>
        </div> --}}
    </div>
    <!-- <div class="swiper-pagination"></div> -->
</div>
