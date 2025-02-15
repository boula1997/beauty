    <!-- faq area start -->
    <div class="faq-area pd-top-100 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 order-lg-last mb-4 mb-lg-0" data-aos="fade-left"data-aos="fade-up"
                    data-aos-duration="3000">
                    <div class="faq-image-wrap">
                        <div class="thumb">

                            {{-- <img src="{{ asset( page('faq')->images[0]) }}" alt="img"> --}}

                            <img src="{{ asset(isset(page('faq-section')->images[0]->url) ? page('faq-section')->images[0]->url : asset('default.jpg')) }}"
                                alt="img">
                            {{-- <img class="img-position-1" src="{{asset('assets/img/about/f2.webp')}}" alt="img"> --}}
                            {{-- <img class="img-position-2 top_image_bounce" src="{{asset('assets/img/about/f3.webp')}}" alt="img"> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-xl-5 order-lg-first align-self-center">
                    <div class="section-title mb-0" data-aos="fade-up" data-aos-duration="3000">
                        <h5 class="sub-title right-line">{{ page('faq-section')->title }}</h5>
                        <h2 class="title">{{ page('faq-section')->subtitle }}</h2>
                        {!! page('faq-section')->description !!}
                    </div>


                    <div class="accordion mt-4" id="accordionExample">

                        @foreach ($faqs as $faq)
                            <div class="accordion-item single-accordion-inner aos-init aos-animate {{ $loop->iteration > 3 ? 'd-none showMore' : '' }}"
                                data-aos="fade-right">
                                <h2 class="accordion-header" id="headingOne{{ $loop->index }}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne{{ $loop->index }}" aria-expanded="false"
                                        aria-controls="collapseOne{{ $loop->index }}">
                                        {{ $faq->title }}
                                    </button>
                                </h2>
                                <div id="collapseOne{{ $loop->index }}" class="accordion-collapse collapse"
                                    aria-labelledby="headingOne{{ $loop->index }}" data-bs-parent="#accordionExample"
                                    style="">
                                    <div class="accordion-body">
                                        {!! $faq->description !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="text-center">
                            <a class="btn btn-base me-2 w-100" id="showMore">{{ __('general.show_more') }}</a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- faq area end -->

    @push('js')
        <script>
            $(document).ready(function() {
                $(document).on('click','#showMore', function() {
                    $('.showMore').removeClass('d-none');
                    $('#showMore').text("{{ __('general.show_less') }}");
                    $('#showMore').attr('id', 'showLess');
                });

                $(document).on('click','#showLess', function() {
                    $('.showMore').addClass('d-none');
                    $('#showLess').text("{{ __('general.show_more') }}");
                    $('#showLess').attr('id', 'showMore');
                });
            })
        </script>
    @endpush
