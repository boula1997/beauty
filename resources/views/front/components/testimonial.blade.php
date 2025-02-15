<!-- testimonial-slider start -->
<div class="testimonial-slider bg-sky bg-relative" dir="ltr">
    <div class="bg-relative">
        <div class="slider testimonial-thumb testimonial-thumb-2">
            @foreach ($testimonials as $testimonial)
                <div class="item" dir="ltr">
                    <div class="row">
                        <div class="col-lg-5 col-md-6" data-aos="fade-right" >
                            <div class="thumb mb-4 mb-md-0" style="background-image: url({{ $testimonial->image }});">
                                <div class="quote-wrap">
                                    <div class="quote">
                                        <img src="{{ $testimonial->image }}" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-md-6 align-self-center" dir="ltr" data-aos="fade-left">
                            <div class="single-testimonial-inner text-md-center px-lg-5 px-md-4" >
                                <div class="details">
                                    <div class="thumb">
                                        <img src="{{ $testimonial->image }}" alt="img">
                                    </div>
                                    <h2>{{$testimonial->title}}</h2>
                                    <span>{{$testimonial->subttitle}}</span>
                                        <div class="description">{!! $testimonial->description !!}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="slider testimonial-nav-slider testimonial-nav-slider-2" dir="ltr">
            @foreach ($testimonials as $testimonial)
                <div class="item" dir="ltr">
                    <div class="thumb">
                        <img src="{{ asset($testimonial->image) }}" alt="img">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- testimonial-slider end -->
