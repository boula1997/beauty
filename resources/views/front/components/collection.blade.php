    <!-- collection banner -->
    <section class="pb-0 banner-section" id="collection">
        <div class="container">
            <div class="row partition2">
                <div class="col-md-6">
                    <a href="{{ route('front.banner.products', ['search' => 'men']) }}" class="collection-banner">
                        <img src="{{asset("images/banner1.png")}}" class="img-fluid blur-up lazyload" alt="">
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="{{ route('front.products', ['search' => 'women']) }}" class="collection-banner">
                        <img src="{{asset("images/banner2.png")}}" class="img-fluid blur-up lazyload" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- collection banner end -->