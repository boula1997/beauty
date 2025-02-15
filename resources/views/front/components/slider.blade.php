    <!-- banner area start -->
    <div class="banner-area banner-area-1 bg-black bg-relative" >
        <div class="banner-bg-img" style="background-image: url({{ asset('assets/img/banner/2.webp')}}); "></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-7 text-center text-lg-end order-lg-last" data-aos="fade-up">
                    <div class="banner-mask-bg-wrap mb-5 mb-lg-0">
                        <img class="shape-image" src="{{asset('assets/img/banner/6.webp')}}" alt="img">
                        <div class="thumb">
                            <img src="{{ asset(isset(page('home-banner')->images[0]->url) ? page('home-banner')->images[0]->url : asset('default.jpg')) }}" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-9 order-lg-first align-self-center" data-aos="fade-up">
                    <div class="banner-inner style-white  text-center text-lg-start">
                        <h4 class="sub-title">{{page('home-banner')->subtitle}}</h4>
                        <h2 class="title fs-1">{{page('home-banner')->title}}</h2>
                        <p class="content">{!! page('home-banner')->description !!}</p>
                        <div class="btn-wrap">
                            <a class="btn btn-base me-2" href="{{ request()->routeIs('front.home')?'#process':route('front.home').'#process'}}" >{{__('general.get_started')}}</a>
                            <a class="btn btn-border-white" href="{{ route('front.message') }}">{{__('general.message')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner area end -->