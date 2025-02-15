    <!-- page title start -->
    <div class="breadcrumb-area bg-black bg-relative">
        <div class="banner-bg-img" style="background-image: url({{ asset('assets/img/bg/1.webp') }});"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="breadcrumb-inner text-center">
                        <h2 class="page-title">{{ $name }}</h2>
                        <ul class="page-list">
                            <li><a href="{{ route('front.home') }}">{{ __('general.home') }}</a></li>
                            @if (isset($mid) && isset($route_mid))
                                <li><a href="{{ route($route_mid) }}">{{ $mid }}</a></li>
                            @endif
                            <li><a>{{ $name }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page title end -->
