    <!-- header start -->
    <header>
        <div class="top-header">
            <div class="mobile-fix-option"></div>
            <div class="container ">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-contact">
                            <ul>
                                <li>{{ __('general.welcomemessage') }}</li>
                                {{-- <li><i class="ri-phone-fill"></i>{{__('general.call_us')}}: 123 - 456 - 7890</li> --}}
                            </ul>
                        </div>
                    </div>
                    @if (auth('web')->user())
                    <div class="col-lg-6 text-end">
                    <a href="{{ route('show_profile','info') }}">
                        
                        <ul class="header-dropdown">
                                    <li class="onhover-dropdown mobile-account"> <i class="ri-user-fill"></i>
                                        {{ auth('web')->user()->fullname }}
                                    </li>
                                </ul>
                            </a>
                        </div>
                        @else
                        <div class="col-lg-6 text-end">
                            <a href="{{ route('merchant.register') }}" class="text-decoration-none text-primary">  
                                <ul class="header-dropdown d-inline-block">
                                    <li class="onhover-dropdown mobile-account">
                                        <i class="fa-solid fa-house"></i>  
                                        {{ __('general.becomeAMerchant') }}
                                    </li>
                                </ul>
                            </a>

                            <a href="{{ route('user.login-view') }}" class="me-3"> 
                                <ul class="header-dropdown d-inline-block">  
                                    <li class="onhover-dropdown mobile-account">
                                        <i class="ri-user-fill"></i>
                                        {{ __('general.loginRegister') }}
                                    </li>
                                </ul>
                            </a>

                           
                        
                        </div>
                        @endif
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center" style="
            height: 80px !important;">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="main-menu">
                            <div class="menu-left">
                                <div class="navbar">
                                    <a href="#!" onclick="openNav()">
                                        <div class="bar-style">
                                        </div>
                                    </a>
                                </div>
                                <div class="brand-logo">
                                    <a href="{{ route('front.home') }}">
                                        <img src="{{ asset('images/ADClogo1.png') }}" class="img-fluid blur-up lazyload logo" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="menu-right pull-right">
                                <div>
                                    <nav id="main-nav">
                                        <div class="toggle-nav"><i class="ri-bar-chart-horizontal-line sidebar-bar"></i>
                                        </div>
                                        <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                            <li class="mobile-box">
                                                <div class="mobile-back text-end">{{ __('general.Menu') }}<i
                                                        class="ri-close-line"></i></div>
                                            </li>
                                            <li><a class="{{ request()->routeIs('front.home') ? 'activeNav' : '' }}"
                                                    href="{{ route('front.home') }}">{{ __('general.home') }}</a></li>
                                            <li><a class="{{ request()->routeIs('front.products') ? 'activeNav' : '' }}"
                                                    href="{{ route('front.products') }}">{{ __('general.products') }}</a>
                                            </li>
                                            <li><a class="{{ request()->routeIs('front.search') ? 'activeNav' : '' }}"
                                                    href="{{ route('front.search') }}">{{ __('general.search') }}</a></li>
                                            <li><a class="{{ request()->routeIs('front.about') ? 'activeNav' : '' }}"
                                                    href="{{ app()->getLocale() == 'en' ? 'https://aloodot.com/' : "https://aloodot.com/index-" . app()->getLocale() . ".html" }}"
                                                    target="__blank">{{ __('general.about') }}</a></li>
                                            {{-- <li><a class="{{request()->routeIs('front.vendor')?'activeNav':''}}" href="{{route('front.vendor')}}">{{__('general.become_vendor')}}</a></li> --}}
                                           <style>
                                            li ul {
    display: none;
    position: absolute;
    background: white;
    list-style: none;
    padding: 0;
    border: 1px solid #ccc;
}

li:hover > ul {
    display: block;
}

                                           </style>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                                    {{ app()->getLocale() == 'ar' ? 'العربية' : (app()->getLocale() == 'en' ? 'EN' : 'FR') }}
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="{{ app()->getLocale() == 'en' ? 'd-none' : '' }}">
                                                        <a class="dropdown-item" href="{{ LaravelLocalization::getLocalizedURL('en') }}">English</a>
                                                    </li>
                                                    <li class="{{ app()->getLocale() == 'ar' ? 'd-none' : '' }}">
                                                        <a class="dropdown-item" href="{{ LaravelLocalization::getLocalizedURL('ar') }}">Arabic</a>
                                                    </li>
                                                    <li class="{{ app()->getLocale() == 'fr' ? 'd-none' : '' }}">
                                                        <a class="dropdown-item" href="{{ LaravelLocalization::getLocalizedURL('fr') }}">French</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
    
    
                                        </ul>
                                    </nav>
                                </div>
                                <div>
                                    <div class="icon-nav">
                                        <ul>
                                            <li class="onhover-div mobile-search">
                                                <div data-bs-toggle="modal" data-bs-target="#searchModal">
                                                    <i class="ri-search-line"></i>
                                                </div>
                                            </li>
    
                                             @if (!request()->routeIs('front.checkout') && !request()->routeIs('front.shopping'))                                                 
                                             <li class="onhover-div mobile-cart">
                                                 <div data-bs-toggle="offcanvas" data-bs-target="#cartOffcanvas">
                                                     <i class="ri-shopping-cart-line"></i>
                                                 </div>
                                                 <span
                                                     class="cart_qty_cls cart-count">{{ auth()->user() ? count(cart()->getItems()) : 0 }}</span>
                                             </li>
                                             @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

    @include('front.components.offCanvas')
