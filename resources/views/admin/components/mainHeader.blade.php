        <!-- Page Header Start-->
        <div class="page-main-header"  >
            <div class="main-header-right row">
                <div class="main-header-left d-lg-none w-auto">
                    <div class="logo-wrapper">
                        <a href="{{route('front.home')}}">
                            <img class="blur-up lazyloaded d-block d-lg-none"
                                src="{{settings()->logo}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="mobile-sidebar w-auto">
                    <div class="media-body text-end switch-sm">
                        <label class="switch">
                            <a href="javascript:void(0)">
                                <i id="sidebar-toggle" data-feather="align-left"></i>
                            </a>
                        </label>
                    </div>
                </div>
                <div class="nav-right col">
                    <ul class="nav-menus">
                        <li>
                            <a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()">
                                <i data-feather="maximize-2"></i>
                            </a>
                        </li>
                        <li class="onhover-dropdown">
                            <a class="txt-dark" href="javascript:void(0)">
                                <h6>{{app()->getLocale()=="ar"?"العربية":(app()->getLocale()=="en"?"EN":"FR")}}</h6>
                            </a>
                            <ul class="language-dropdown onhover-show-div p-20"  class="m-5">
                                <li class="{{ app()->getLocale() == "en" ? 'd-none' : '' }}">
                                    <a href="{{ LaravelLocalization::getLocalizedURL("en", null, [], true) }}" data-lng="en">
                                        <i class="flag-icon flag-icon-is m-5"></i>English</a>
                                </li>
                                <li class="{{ app()->getLocale() == "ar" ? 'd-none' : '' }}">
                                    <a href="{{ LaravelLocalization::getLocalizedURL("ar", null, [], true) }}" data-lng="ar">
                                        <i class="flag-icon flag-icon-um m-5"></i>Arabic</a>
                                </li>
       
                                <li class="{{ app()->getLocale() == "fr" ? 'd-none' : '' }}">
                                    <a href="{{ LaravelLocalization::getLocalizedURL("fr", null, [], true) }}" data-lng="fr">
                                        <i class="flag-icon flag-icon-nz m-5"></i>French</a>
                                </li>
                            </ul>
                        </li>
                        @can('message-list')
                            <li>
                                <a class="text-dark" href="{{ route('messages.index') }}" title="{{ __('general.messages') }}">
                                    <i data-feather="message-square"></i>
                                </a>
                            </li>
                        @endcan
                        <li class="onhover-dropdown">
                            <div class="media align-items-center">
                                <img class="align-self-center pull-right img-50 blur-up lazyloaded rounded-circle"
                                    src="{{ auth('admin')->user()?->image ?? asset('default.jpg') }}" alt="{{ auth('admin')->user()?->name }}">
                            </div>
                            <ul class="profile-dropdown onhover-show-div p-20 profile-dropdown-hover">
                                <li>
                                    <a href="{{ route('edit.profile') }}">
                                        <i data-feather="user" class="m-5"></i>{{ __('general.profile') }}
                                    </a>
                                </li>
                                @can('message-list')
                                    <li>
                                        <a href="{{ route('messages.index') }}">
                                            <i data-feather="mail" class="m-5"></i>{{ __('general.messages') }}
                                        </a>
                                    </li>
                                @endcan
                                @can('setting-edit')
                                    <li>
                                        <a href="{{ route('edit.setting') }}">
                                            <i data-feather="settings" class="m-5"></i>{{ __('general.setting') }}
                                        </a>
                                    </li>
                                @endcan
                                <li>
                                    <form action="{{ route('logout') }}" method="POST" class="m-0">
                                        @csrf
                                        <button type="submit" class="btn btn-link p-0 text-reset text-decoration-none">
                                            <i data-feather="log-out" class="m-5"></i>{{ __('general.logout') }}
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="d-lg-none mobile-toggle pull-right">
                        <i data-feather="more-horizontal" class="m-5"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header Ends -->