    <!-- Home slider -->
    <section class="p-0">
        <div class="slide-1 home-slider">
            @foreach ($sliders as $slider)
                
                <div>
                    <a href="{{ route('front.products') }}" class="home">
                        <img src="{{asset($slider->image)}}" alt="" class="bg-img blur-up lazyload">
                    </a>
                </div>
            @endforeach
            
        </div>
    </section>
    <!-- Home slider end -->