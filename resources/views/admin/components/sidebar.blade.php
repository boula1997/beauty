    <!-- Page Sidebar Start-->
    <div class="page-sidebar">
        <div class="main-header-left d-none d-lg-block">
            <div class="logo-wrapper">
                <a href="{{ route('dashboard') }}">
                    <img class="d-none d-lg-block blur-up lazyloaded" src="{{asset("assets/images/dashboard/multikart-logo.png")}}"
                        alt="">
                </a>
            </div>
        </div>
        <div class="sidebar custom-scrollbar">
            <a href="javascript:void(0)" class="sidebar-back d-lg-none d-block"><i class="fa fa-times"
                    aria-hidden="true"></i></a>
            <ul class="sidebar-menu">
                <li>
                    <a class="sidebar-header" href="{{ route('dashboard') }}">
                        <i data-feather="home"></i>
                        <span>{{ __('general.dashboard') }}</span>
                    </a>
                </li>

                    {{-- General setting --}}
                @canany(['setting-edit','role-list'])  
                    <li>
                        <a class="sidebar-header" href="javascript:void(0)"><i
                                data-feather="settings"></i><span>{{ __('general.general_setting') }}</span><i
                                class="fa fa-angle-right pull-right {{ app()->getLocale()=="ar"?"rotate":"" }}"></i></a>
                        <ul class="sidebar-submenu">
                            @can('setting-edit')  
                                <li>
                                    <a href="{{ route('edit.setting') }}"><i class="fa fa-circle"></i>{{ __('general.setting') }}
                                    </a>
                                </li>
                            @endcan

                            @can('role-list')   
                                <li>
                                    <a href="{{ route('roles.index') }}">
                                        <i class="fa fa-circle"></i>{{ __('general.roles') }}
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                
                @endcan
                {{-- admins --}}
                @can('admin-list') 
                    <li>
                        <a class="sidebar-header" href="javascript:void(0)">
                            <i data-feather="user-plus" ></i>
                            <span>{{ __('general.admins') }}</span>
                            <i class="fa fa-angle-right pull-right {{ app()->getLocale()=="ar"?"rotate":"" }}"></i>
                        </a>
                        <ul class="sidebar-submenu">
                            
                            <li>
                                <a href="{{ route('admins.index') }}">
                                    <i class="fa fa-circle"></i>{{ __('general.admin_list') }}
                                </a>
                            </li>
                        
                            @can('admin-create')   
                                <li>
                                    <a href="{{ route('admins.create') }}">
                                        <i class="fa fa-circle"></i>{{ __('general.create_admin') }}
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan

                {{-- itemRequests --}}
                @canany('itemRequest-list')  
                    <li>
                        <a class="sidebar-header" href="javascript:void(0)"><i
                                data-feather="settings"></i><span>{{ __('general.itemRequest') }}</span><i
                                class="fa fa-angle-right pull-right {{ app()->getLocale()=="ar"?"rotate":"" }}"></i></a>
                        <ul class="sidebar-submenu">
                            @can('itemRequest-list')   
                                <li>
                                    <a href="{{ route('itemRequests.index') }}">
                                        <i class="fa fa-circle"></i>{{ __('general.itemRequests') }}
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan

                {{-- categories, subcategories --}}
                @canany(['category-list','subcategory-list']) 
                    <li>
                        <a class="sidebar-header" href="javascript:void(0)">
                            <i data-feather="user-plus"></i>
                            <span>{{ __('general.categories') }}</span>
                            <i class="fa fa-angle-right pull-right {{ app()->getLocale()=="ar"?"rotate":"" }}"></i>
                        </a>
                        <ul class="sidebar-submenu">  
                            @can('category-list')    
                                <li>
                                    <a href="{{ route('categories.index') }}">
                                        <i class="fa fa-circle"></i>{{ __('general.category') }}
                                    </a>
                                </li>
                            @endcan
                        
                            @can('subcategory-list')   
                                <li>
                                    <a href="{{ route('subcategories.index') }}">
                                        <i class="fa fa-circle"></i>{{ __('general.subcategory') }}
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan


                {{-- products --}}
                @canany(['product-list','product-create']) 
                    <li>
                        <a class="sidebar-header" href="javascript:void(0)">
                            <i data-feather="box"></i>
                            <span>{{ __('general.products') }}</span>
                            <i class="fa fa-angle-right pull-right {{ app()->getLocale()=="ar"?"rotate":"" }}"></i>
                        </a>
                        <ul class="sidebar-submenu">
                            
                            <li>
                                <a href="{{ route('products.index') }}">
                                    <i class="fa fa-circle"></i>{{ __('general.product_list') }}
                                </a>
                            </li>
                        
                            @can('product-create')   
                                <li>
                                    <a href="{{ route('products.create') }}">
                                        <i class="fa fa-circle"></i>{{ __('general.create_product') }}
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan


                {{-- sliders --}}
                @can('slider-list') 
                    <li>
                        <a class="sidebar-header" href="javascript:void(0)">
                            <i data-feather="box"></i>
                            <span>{{ __('general.sliders') }}</span>
                            <i class="fa fa-angle-right pull-right {{ app()->getLocale()=="ar"?"rotate":"" }}"></i>
                        </a>
                        <ul class="sidebar-submenu">
                            
                            <li>
                                <a href="{{ route('sliders.index') }}">
                                    <i class="fa fa-circle"></i>{{ __('general.slider_list') }}
                                </a>
                            </li>

                        </ul>
                    </li>
                @endcan

                {{-- services --}}
                @can('service-list') 
                    <li>
                        <a class="sidebar-header" href="javascript:void(0)">
                            <i data-feather="box"></i>
                            <span>{{ __('general.services') }}</span>
                            <i class="fa fa-angle-right pull-right {{ app()->getLocale()=="ar"?"rotate":"" }}"></i>
                        </a>
                        <ul class="sidebar-submenu">
                            
                            <li>
                                <a href="{{ route('services.index') }}">
                                    <i class="fa fa-circle"></i>{{ __('general.service_list') }}
                                </a>
                            </li>

                        </ul>
                    </li>
                @endcan

                {{-- pages --}}
                @can('page-list') 
                    <li>
                        <a class="sidebar-header" href="javascript:void(0)">
                            <i data-feather="box"></i>
                            <span>{{ __('general.pages') }}</span>
                            <i class="fa fa-angle-right pull-right {{ app()->getLocale()=="ar"?"rotate":"" }}"></i>
                        </a>
                        <ul class="sidebar-submenu">
                            
                            <li>
                                <a href="{{ route('pages.index') }}">
                                    <i class="fa fa-circle"></i>{{ __('general.page_list') }}
                                </a>
                            </li>

                        </ul>
                    </li>
                @endcan

                {{-- chooseUss --}}
                @can('chooseUs-list') 
                    <li>
                        <a class="sidebar-header" href="javascript:void(0)">
                            <i data-feather="box"></i>
                            <span>{{ __('general.chooseUss') }}</span>
                            <i class="fa fa-angle-right pull-right {{ app()->getLocale()=="ar"?"rotate":"" }}"></i>
                        </a>
                        <ul class="sidebar-submenu">
                            
                            <li>
                                <a href="{{ route('chooseUss.index') }}">
                                    <i class="fa fa-circle"></i>{{ __('general.chooseUs_list') }}
                                </a>
                            </li>

                        </ul>
                    </li>
                @endcan

                @can('order-list')
                    <li>
                        <a class="sidebar-header" href="javascript:void(0)">
                            <i data-feather="archive"></i>
                            <span>Orders</span>
                            <i class="fa fa-angle-right pull-right {{ app()->getLocale()=="ar"?"rotate":"" }}"></i>
                        </a>

                        <ul class="sidebar-submenu">
                            <li>
                                <a href="{{ route('orders.index') }}">
                                    <i class="fa fa-circle"></i>
                                    <span>Order List</span>
                                </a>
                            </li>

                            {{-- <li>
                                <a href="order-tracking.html">
                                    <i class="fa fa-circle"></i>
                                    <span>Order Tracking</span>
                                </a>
                            </li>

                            <li>
                                <a href="order-detail.html">
                                    <i class="fa fa-circle"></i>
                                    <span>Order Details</span>
                                </a>
                            </li> --}}
                        </ul>
                    </li>   
                @endcan

                {{-- newsletters --}}
                @can('newsletter-list') 
                    <li>
                        <a class="sidebar-header" href="javascript:void(0)">
                            <i data-feather="box"></i>
                            <span>{{ __('general.newsletters') }}</span>
                            <i class="fa fa-angle-right pull-right {{ app()->getLocale()=="ar"?"rotate":"" }}"></i>
                        </a>
                        <ul class="sidebar-submenu">
                            
                            <li>
                                <a href="{{ route('newsletters.index') }}">
                                    <i class="fa fa-circle"></i>{{ __('general.newsletter_list') }}
                                </a>
                            </li>

                        </ul>
                    </li>
                @endcan

                {{-- messages --}}
                @can('message-list') 
                    <li>
                        <a class="sidebar-header" href="javascript:void(0)">
                            <i data-feather="box"></i>
                            <span>{{ __('general.messages') }}</span>
                            <i class="fa fa-angle-right pull-right {{ app()->getLocale()=="ar"?"rotate":"" }}"></i>
                        </a>
                        <ul class="sidebar-submenu">
                            
                            <li>
                                <a href="{{ route('messages.index') }}">
                                    <i class="fa fa-circle"></i>{{ __('general.message_list') }}
                                </a>
                            </li>

                        </ul>
                    </li>
                @endcan

                {{-- logout --}}
                <li class="mb-5">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="sidebar-header logout mb-5 " type="submit" >
                            <i data-feather="log-out"></i>
                            <span>{{__('general.logout')}}</span>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
    <!-- Page Sidebar Ends-->

    <!-- Right sidebar Start-->
    <div class="right-sidebar" id="right_side_bar">
        <div>
            <div class="container p-0">
                <div class="modal-header p-l-20 p-r-20">
                    <div class="col-sm-8 p-0">
                        <h6 class="modal-title font-weight-bold">FRIEND LIST</h6>
                    </div>
                    <div class="col-sm-4 text-end p-0">
                        <i class="me-2" data-feather="settings"></i>
                    </div>
                </div>
            </div>
            <div class="friend-list-search mt-0">
                <input type="text" placeholder="search friend">
                <i class="fa fa-search"></i>
            </div>
            <div class="p-l-30 p-r-30 friend-list-name">
                <div class="chat-box">
                    <div class="people-list friend-list">
                        <ul class="list">
                            <li class="clearfix">
                                <img class="rounded-circle user-image blur-up lazyloaded"
                                    src="{{asset("admin/assets/images/dashboard/user.jpg")}}" alt="">
                                <div class="status-circle online"></div>
                                <div class="about">
                                    <div class="name">Vincent Porter</div>
                                    <div class="status">Online</div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <img class="rounded-circle user-image blur-up lazyloaded"
                                    src="{{asset("admin/assets/images/dashboard/user1.jpg")}}" alt="">
                                <div class="status-circle away"></div>
                                <div class="about">
                                    <div class="name">Ain Chavez</div>
                                    <div class="status">28 minutes ago</div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <img class="rounded-circle user-image blur-up lazyloaded"
                                    src="{{asset("admin/assets/images/dashboard/user2.jpg")}}" alt="">
                                <div class="status-circle online"></div>
                                <div class="about">
                                    <div class="name">Kori Thomas</div>
                                    <div class="status">Online</div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <img class="rounded-circle user-image blur-up lazyloaded"
                                    src="{{asset("admin/assets/images/dashboard/user3.jpg")}}" alt="">
                                <div class="status-circle online"></div>
                                <div class="about">
                                    <div class="name">Erica Hughes</div>
                                    <div class="status">Online</div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <img class="rounded-circle user-image blur-up lazyloaded"
                                    src="{{asset("admin/assets/images/dashboard/user3.jpg")}}" alt="">
                                <div class="status-circle offline"></div>
                                <div class="about">
                                    <div class="name">Ginger Johnston</div>
                                    <div class="status">2 minutes ago</div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <img class="rounded-circle user-image blur-up lazyloaded"
                                    src="{{asset("admin/assets/images/dashboard/user5.jpg")}}" alt="">
                                <div class="status-circle away"></div>
                                <div class="about">
                                    <div class="name">Prasanth Anand</div>
                                    <div class="status">2 hour ago</div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <img class="rounded-circle user-image blur-up lazyloaded"
                                    src="{{asset("admin/assets/images/dashboard/designer.jpg")}}" alt="">
                                <div class="status-circle online"></div>
                                <div class="about">
                                    <div class="name">Hileri Jecno</div>
                                    <div class="status">Online</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Right sidebar Ends-->