   
      <!-- Client Section Start -->
      <section class="client-section section-lg-space">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="about-us-title text-center">
                        <h4>{{ __('general.what_we_do')}}</h4>
                        <h2 class="center">{{ __('general.we_are_trusted')}}</h2>
                    </div>

                    <div class="slider-3_1 product-wrapper">
                        @foreach($units as $unit)
                            <div>
                                <div class="clint-contain">
                                    <div class="client-icon">
                                        <img src="{{ asset($unit->image) }}"
                                            class="blur-up lazyload" alt="">
                                    </div>
                                    <h4>{{$unit->title}}</h4>
                                </div>
                            </div>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Client Section End -->