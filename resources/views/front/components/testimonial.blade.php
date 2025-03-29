            <!-- Review Section Start -->
    <section class="review-section section-lg-space {{ settings()->show_testimonial == 1 ? '' : 'd-none' }}">
        <div class="container-fluid">
            <div class="about-us-title text-center">
                <h4 class="text-content">{{ page('testimonial')->title }}</h4>
                <h2 class="center">{{ page('testimonial')->subtitle }}</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="slider-4-half product-wrapper">
                        @foreach ($testimonials as $testimonial )
                            <div>
                                <div class="reviewer-box">
                                    <i class="fa-solid fa-quote-right"></i>
                                    <div class="product-rating">
                                        <ul class="rating">
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star"></i>
                                            </li>
                                        </ul>
                                    </div>

                                    {{-- <h3>Top Quality, Beautiful Location</h3> --}}

                                    <p>{!! $testimonial->description !!}</p>

                                    <div class="reviewer-profile">
                                        <div class="reviewer-image">
                                            <img src="{{asset( $testimonial->image )}}" class=" img-fluid blur-up lazyload"
                                                alt="">
                                        </div>

                                        <div class="reviewer-name">
                                            <h4>{{ $testimonial->title }}</h4>
                                            <h6>{{ $testimonial->subtitle }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        

                        {{-- <div>

                        </div>


                        <div>
                            <div class="reviewer-box">
                                <i class="fa-solid fa-quote-right"></i>
                                <div class="product-rating">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                </div>

                                <h3>Top Quality, Beautiful Location</h3>

                                <p>"After being forced to move twice within five years, our customers had a hard time
                                    finding us and our sales plummeted. The Lorem Ipsum Co. not only revitalized our
                                    brand."</p>
                                <div class="reviewer-profile">
                                    <div class="reviewer-image">
                                        <img src="{{asset('template/assets/images/inner-page/user/4.jpg')}}" class=" img-fluid blur-up lazyload"
                                            alt="">
                                    </div>

                                    <div class="reviewer-name">
                                        <h4>Terry G. Fain</h4>
                                        <h6>{{ __('general.Photographer') }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="reviewer-box">
                                <i class="fa-solid fa-quote-right"></i>
                                <div class="product-rating">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                </div>

                                <h3>Top Quality, Beautiful Location</h3>

                                <p>"I was skeptical of SEO and content marketing at first, but the Lorem Ipsum Company
                                    not only proved itself financially speaking, but the response I have received from
                                    customers is incredible."</p>
                                <div class="reviewer-profile">
                                    <div class="reviewer-image">
                                        <img src="{{asset('template/assets/images/inner-page/user/1.jpg')}}" class=" img-fluid blur-up lazyload"
                                            alt="">
                                    </div>

                                    <div class="reviewer-name">
                                        <h4>Gwen J. Geiger</h4>
                                        <h6>{{ __('general.Designer') }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="reviewer-box">
                                <i class="fa-solid fa-quote-right"></i>
                                <div class="product-rating">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                </div>

                                <h3>Top Quality, Beautiful Location</h3>

                                <p>"Jeramy and his team at the Lorem Ipsum Company whipped my website into shape just in
                                    time for tax season. I was excited by the results and am proud to direct clients to
                                    my website once again."</p>

                                <div class="reviewer-profile">
                                    <div class="reviewer-image">
                                        <img src="{{asset('template/assets/images/inner-page/user/2.jpg')}}" class=" img-fluid blur-up lazyload"
                                            alt="">
                                    </div>

                                    <div class="reviewer-name">
                                        <h4>Constance K. Whang</h4>
                                        <h6>CEO, Company</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="reviewer-box">
                                <i class="fa-solid fa-quote-right"></i>
                                <div class="product-rating">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                </div>

                                <h3>Top Quality, Beautiful Location</h3>

                                <p>"Yeah, and if you were the pope they'd be all, "Straighten your pope hat." And "Put
                                    on your good vestments." What are their names? Yep, I remember. They came in last at
                                    the Olympics!"</p>
                                <div class="reviewer-profile">
                                    <div class="reviewer-image">
                                        <img src="{{asset('template/assets/images/inner-page/user/3.jpg')}}" class=" img-fluid blur-up lazyload"
                                            alt="">
                                    </div>

                                    <div class="reviewer-name">
                                        <h4>Christopher R. Lee</h4>
                                        <h6>Managing Director</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="reviewer-box">
                                <i class="fa-solid fa-quote-right"></i>
                                <div class="product-rating">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                </div>

                                <h3>Top Quality, Beautiful Location</h3>

                                <p>"Good man. Nixon's pro-war and pro-family. Hey, tell me something. You've got all
                                    this money. How come you always dress like you're doing your laundry? So, how 'bout
                                    them Knicks? What kind of a father would I be if I said no?."</p>
                                <div class="reviewer-profile">
                                    <div class="reviewer-image">
                                        <img src="{{asset('template/assets/images/inner-page/user/4.jpg')}}" class=" img-fluid blur-up lazyload"
                                            alt="">
                                    </div>

                                    <div class="reviewer-name">
                                        <h4>Eileen R. Chu</h4>
                                        <h6>Marketing Director</h6>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Review Section End -->

 <!-- Testimonial Start -->
{{-- <div class="container-fluid p-0 my-5">
            <div class="row g-0">
                <div class="col-lg-6" style="min-height: 500px;" data-aos="fade-{{ app()->getLocale()=='ar'?'left':'right'}}">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{ asset(isset(page('testimonial')->images[0]->url) ? page('testimonial')->images[0]->url : asset('default.jpg')) }}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 bg-dark p-5" data-aos="fade-{{ app()->getLocale()=='ar'?'right':'left'}}">
                    <div class="mb-5">
                        <h5 class="text-primary text-uppercase">{{ page('testimonial')->title }}</h5>
                        <h1 class="display-5 text-uppercase text-light mb-0">{{ page('testimonial')->subtitle }}</h1>
                    </div>
                    <div class="owl-carousel testimonial-carousel">
                        @foreach ($testimonials as $testimonial)
                        <div class="testimonial-item">
                            <div class="fs-4 fw-normal text-light mb-4 text-secondary description" dir="{{ app()->getLocale()=='ar'?'rtl':'' }}"><i class="fa fa-quote-left text-primary me-3"></i>{!! $testimonial->description !!}</div>
                            <div class="d-flex align-items-center">
                                <img class=" img-fluid img-fluid rounded-circle" dir="{{ app()->getLocale()=='ar'?'rtl':'' }}" src="{{ asset($testimonial->image) }}" alt="">
                         `       <div class="ps-4">
                                    <h5 class="text-uppercase text-light" dir="{{ app()->getLocale()=='ar'?'rtl':'' }}">{{ $testimonial->title }}</h5>
                                    <span class="text-uppercase text-secondary" dir="{{ app()->getLocale()=='ar'?'rtl':'' }}">{{ $testimonial->subtitle }}</span>
                                </div>
                            </div>
                        </div> 
                        @endforeach
                    </div>
                </div>
            </div>
</div> --}}
<!-- Testimonial End -->

