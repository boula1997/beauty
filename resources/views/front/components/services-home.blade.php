    <!-- service area start -->
    <div class="service-area bg-overlay pd-top-120 pd-bottom-90"
        style="background-image: url({{ asset('images/3.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-4" data-aos="fade-up">
                    <div class="section-title border-radius-5 p-35 bg-base style-white mb-lg-0" >
                        <h2 class="title mt-4 text-limit" style='--lines: 1;'>{{page('service-section')->title}}</h2>
                             <div class="text-white text-limit" style='--lines: 6;'>{!! page('service-section')->description !!}</div>
                             
                        <div class="btn-wrap mt-4 pt-1 mb-4">
                            <a class="btn btn-small btn-border-white mt-2 text-decoration-none" href="message.html">{{__('general.message')}}</a>
                            <a class="btn btn-small btn-black mt-2" href="service.html">{{__('general.all_services')}}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8" data-aos="fade-up">
                    <div class="row">
                        @foreach ($services as $service)
                            
                        <div class="col-md-6">
                            <div class="single-service-inner style-white text-center">
                                <div class="icon-box">
                                    <i class="{{ $service->icon }}"></i>
                                </div>
                                <div class="details">
                                    <a href="{{route('front.show.service',$service->id)}}" class="text-limit text-decoration-none" style='--lines: 2;' title="{{$service->title}}"><h3 class="text-decoration-none">{{$service->title}}</h3></a>
                                      <div class="text-limit description" style="--lines:5;">{!! $service->description !!}</div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service area end -->