    <!-- how it work area start -->
    <div class="how-it-work-area bg-blue pd-top-110 pd-top-110" id="process">
        <div class="container">
            <div class="row justify-content-center" data-aos="fade-up">
                <div class="col-lg-6" >
                    <div class="section-title style-white text-center">
                        <h5 class="sub-title double-line">{{ page('process-section')->subtitle }}</h5>
                        <h2 class="title">{{ page('process-section')->title }}</h2>
                        <div class="content text-white">{!! page('process-section')->description !!}</div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($processes as $process)
                    <div class="col-lg-3 col-md-6" data-aos="zoom-in">
                        <div class="single-work-inner style-two">
                            <div class="count-wrap text-center">
                                <div class="count-inner">
                                    <h2>0{{ $loop->iteration }}</h2>
                                </div>
                            </div>
                            <div class="details-wrap">
                                <div class="details-inner">
                                    <h4 class="text-limit" style="--lines:1;" title="{{ $process->title }}">{{ $process->title }}</h4>
                                    <div class="text-limit description" style="--lines:5;">{!! $process->description !!}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @include('front.components.partners')
        </div>
    </div>
    <!-- how it work area end -->
