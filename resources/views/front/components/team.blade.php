   <!-- Team Section Start -->
<section class="team-section section-lg-space {{ settings()->show_team == 1 ? '' : 'd-none' }}">
        <div class="container-fluid-lg">
            <div class="about-us-title text-center">
                <h4 class="text-content">{{ __('general.our_team')}}</h4>
                <h2 class="center">{{ __('general.asleltawfeer_team')}}</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="slider-user product-wrapper">
                        @foreach ( $teams as $team )
                            <div>
                                <div class="team-box">
                                    <div class="team-iamge">
                                        <img src="{{ asset( $team->image )}}" class=" img-fluid img-fluid blur-up lazyload"
                                            alt="">
                                    </div>

                                    <div class="team-name">
                                        <h3>{{ $team->title  }}</h3>
                                        <h5>{{ $team->subtitle  }}</h5>
                                        <p>{!! $team->description  !!}</p>
                                        <ul class="team-media">
                                            <li>
                                                <a href="{{$team->facebook}}" class="fb-bg">
                                                    <i class="fa-brands fa-facebook-f"></i>
                                                </a>
                                            </li>

                                            {{-- <li>
                                                <a href="https://in.pinterest.com/" class="pint-bg">
                                                    <i class="fa-brands fa-pinterest-p"></i>
                                                </a>
                                            </li> --}}

                                            <li>
                                                <a href="{{$team->twitter}}" class="twitter-bg">
                                                    <i class="fa-brands fa-twitter"></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{$team->linkedin}}" class="pint-bg">
                                                    <i class="fa-brands fa-linkedin"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{$team->instagram}}" class="insta-bg">
                                                    <i class="fa-brands fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                       

                        {{-- <div>
                            <div class="team-box">
                                <div class="team-iamge">
                                    <img src="{{asset('template/assets/images/inner-page/user/2.jpg')}}" class=" img-fluid img-fluid blur-up lazyload"
                                        alt="">
                                </div>

                                <div class="team-name">
                                    <h3>Anna Baranov</h3>
                                    <h5>{{ __('general.Marketing') }}</h5>
                                    <p>cheese on toast mozzarella bavarian bergkase smelly cheese cheesy feet.</p>
                                    <ul class="team-media">
                                        <li>
                                            <a href="https://www.facebook.com/" class="fb-bg">
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="https://in.pinterest.com/" class="pint-bg">
                                                <i class="fa-brands fa-pinterest-p"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="https://twitter.com/" class="twitter-bg">
                                                <i class="fa-brands fa-twitter"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="https://www.instagram.com/" class="insta-bg">
                                                <i class="fa-brands fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="team-box">
                                <div class="team-iamge">
                                    <img src="{{asset('template/assets/images/inner-page/user/3.jpg')}}" class=" img-fluid img-fluid blur-up lazyload"
                                        alt="">
                                </div>

                                <div class="team-name">
                                    <h3>Anna Baranov</h3>
                                    <h5>{{ __('general.Marketing') }}</h5>
                                    <p>camembert de normandie. Bocconcini rubber cheese fromage frais port-salut.</p>
                                    <ul class="team-media">
                                        <li>
                                            <a href="https://www.facebook.com/" class="fb-bg">
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="https://in.pinterest.com/" class="pint-bg">
                                                <i class="fa-brands fa-pinterest-p"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="https://twitter.com/" class="twitter-bg">
                                                <i class="fa-brands fa-twitter"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="https://www.instagram.com/" class="insta-bg">
                                                <i class="fa-brands fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="team-box">
                                <div class="team-iamge">
                                    <img src="{{asset('template/assets/images/inner-page/user/4.jpg')}}" class=" img-fluid img-fluid blur-up lazyload"
                                        alt="">
                                </div>

                                <div class="team-name">
                                    <h3>Anna Baranov</h3>
                                    <h5>{{ __('general.Marketing') }}</h5>
                                    <p>Fondue stinking bishop goat. Macaroni cheese croque monsieur cottage cheese.</p>
                                    <ul class="team-media">
                                        <li>
                                            <a href="https://www.facebook.com/" class="fb-bg">
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="https://in.pinterest.com/" class="pint-bg">
                                                <i class="fa-brands fa-pinterest-p"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="https://twitter.com/" class="twitter-bg">
                                                <i class="fa-brands fa-twitter"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="https://www.instagram.com/" class="insta-bg">
                                                <i class="fa-brands fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="team-box">
                                <div class="team-iamge">
                                    <img src="{{asset('template/assets/images/inner-page/user/1.jpg')}}" class=" img-fluid img-fluid blur-up lazyload"
                                        alt="">
                                </div>

                                <div class="team-name">
                                    <h3>Anna Baranov</h3>
                                    <h5>{{ __('general.Marketing') }}</h5>
                                    <p>squirty cheese cheddar macaroni cheese airedale cheese triangles.</p>
                                    <ul class="team-media">
                                        <li>
                                            <a href="https://www.facebook.com/" class="fb-bg">
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="https://in.pinterest.com/" class="pint-bg">
                                                <i class="fa-brands fa-pinterest-p"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="https://twitter.com/" class="twitter-bg">
                                                <i class="fa-brands fa-twitter"></i>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="https://www.instagram.com/" class="insta-bg">
                                                <i class="fa-brands fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->
<!-- Team Start -->
   {{-- <div class="container-fluid p-5" data-aos="zoom-in">
        <div class="mb-5 text-center">
            <h5 class="text-primary text-uppercase">{{ page('team')->title }}</h5>
            <h1 class="display-5 text-uppercase mb-0">{{ page('team')->subtitle }}</h1>
        </div>
        <div class="row g-5">
            @foreach ($teams as $team)
            <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                <div class="team-item position-relative">
                    <div class="position-relative overflow-hidden rounded">
                        <img class=" img-fluid img-fluid team-image" src="{{ asset( $team->image )}}" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square rounded-circle mx-1" target="__blank" href="{{$team->twitter}}"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-light btn-square rounded-circle mx-1" target="__blank" href="{{$team->facebook}}"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-light btn-square rounded-circle mx-1" target="__blank" href="{{$team->linkedin}}"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute start-0 bottom-0 w-100 rounded-bottom text-center p-4" style="background: rgba(34, 36, 41, .9);">
                        <h5 class="text-uppercase text-light">{{ $team->title }}</h5>
                        <p class="text-uppercase text-secondary m-0">{{ $team->subtitle }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
   </div> --}}
<!-- Team End -->

