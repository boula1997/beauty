    <div class="col-lg-3">
        <div class="dashboard-sidebar">
            <button class="btn back-btn">
                <i class="ri-close-line"></i><span>{{ __('general.Close') }}</span>
            </button>
            <div class="profile-top">
                <div class="profile-top-box">
                    <div class="profile-image">
                        <div class="position-relative">
                            <div class="user-round">
                               <img src="{{auth()->user()->image}}" alt="">
                            </div>
                            <div class="user-icon"><input type="file" accept="image/*"><i
                                    class="ri-image-edit-line d-lg-block d-none"></i><i
                                    class="ri-pencil-fill edit-icon d-lg-none"></i></div>
                        </div>
                    </div>
                </div>
                <div class="profile-detail">
                    <h5>{{ auth()->user()->fullname }}</h5>
                    <h6>{{ auth()->user()->email }}</h6>
                </div>
            </div>
            <div class="faq-tab">
                <ul id="pills-tab" role="tablist" class="nav nav-tabs">
                    <li role="presentation" class="nav-item">
                        <a href="{{route('show_profile','info')}}">
                            <button class="nav-link {{$type=='info'?'active':''}}" id="info-tab" data-bs-toggle="tab"
                                data-bs-target="#info-tab-pane" type="button" role="tab">
                                <i class="ri-home-line"></i> {{ __('general.dashboard') }}
                            </button>
                        </a>
                    </li>
            
                    <li role="presentation" class="nav-item">
                        <a href="{{route('show_profile','orders')}}">
                            <button class="nav-link {{$type=='orders'?'active':''}}" id="order-tab" data-bs-toggle="tab"
                                data-bs-target="#order-tab-pane" type="button" role="tab">
                                <i class="ri-file-text-line"></i> {{ __('general.my_orders') }}
                            </button>
                        </a>
                    </li>

                    <li role="presentation" class="nav-item">
                        <a href="{{route('show_profile','transactions')}}">
                            <button class="nav-link {{$type=='transactions'?'active':''}}" id="transaction-tab" data-bs-toggle="tab"
                                data-bs-target="#transaction-tab-pane" type="button" role="tab">
                                <i class="ri-money-dollar-circle-line"></i> {{ __('general.transactions') }}
                            </button>
                        </a>
                    </li>


                    <li role="presentation" class="nav-item">
                        <a href="{{route('show_profile','addresses')}}">
                            <button class="nav-link {{$type=='addresses'?'active':''}}" id="address" data-bs-toggle="tab"
                                data-bs-target="#address-tab-pane" type="button" role="tab">
                                <i class="ri-map-pin-line"></i> {{ __('general.saved_address') }}
                            </button>
                        </a>
                    </li>

                    <li role="presentation" class="nav-item logout-cls">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn loagout-btn">
                                <i class="ri-logout-box-r-line"></i> {{ __('general.logout') }}
                            </button>
                        </form>
                    </li>
                </ul>
            </div>

        </div>
    </div>
 
