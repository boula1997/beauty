<section class="container">

    <div class="swiper mySwiper">
        <div class="swiper-wrapper pb-4">
            <div class="row text-center">
                <div class="col-md-12 ">
                    <div class="title title-flex d-flex justify-content-center ">
                        <h2 class="text-center">{{ __('general.partners')}}</h2>
                    </div>
                </div>

                @foreach ($partners as $partner)
                    <div class="col-md-3">
                        <div class="item">
                            <div>
                                <img style="width: 50%; height: 50%; img-fluid" src="{{ asset($partner->image) }}"
                                    alt="img">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
