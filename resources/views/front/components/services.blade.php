    <!-- service area start -->
    <div class="service-area pd-top-120 pd-bottom-90">
        <div class="container">
            <div class="row">
                @foreach ($services as $service)
                <div class="col-lg-3 col-md-6">
                    <div class="single-team-inner text-center">
                        <div class="thumb">
                            <img src="{{ $service->image }}" style="height: 300px" alt="img">
                        </div>
                        <div class="details-wrap" style="height: 100px"> 
                            <div class="details-inner">
                                <h4><a href="{{ route('front.show.service',$service->id) }}">{{ $service->title }}</a></h4>
                                <p>{{ $service->subtitle }}</p>
                            </div>
                        </div>
                        <div class="hover-details-wrap">
                            <div class="hover-details-inner">
                                <div class="text-white text-justify text-limit" style='--lines: 6;'>{!! $service->description !!}</div>
                                <a href="{{ route('front.show.service',$service->id) }}">

                                    <button class="btn btn-secondary mt-3">{{ __('general.show') }}</button>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                    
                @endforeach
            
            </div>
        </div>
    </div>
    <!-- service area end -->