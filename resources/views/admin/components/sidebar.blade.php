               <!-- Page Sidebar Start-->
               <div class="sidebar-wrapper">
                <div id="sidebarEffect"></div>
                <div>
                    <div class="logo-wrapper logo-wrapper-center">
                        <a href="{{route('dashboard')}}" data-bs-original-title="" title="">
                            <img
                                class="img-fluid for-white logo-circle"
                                src="{{asset(settings()->logo)}}"
                                alt="logo"
                            >
                        </a>

                        <div class="back-btn">
                            <i class="fa fa-angle-left"></i>
                        </div>
                        <div class="toggle-sidebar">
                            <i class="ri-apps-line status_toggle middle sidebar-toggle"></i>
                        </div>
                    </div>
                    <div class="logo-icon-wrapper">
                        <a href="{{route('dashboard')}}">
                            <img class="img-fluid main-logo main-white" src="{{asset(settings()->logo)}}" alt="logo">
                            <img class="img-fluid main-logo main-dark" src="{{asset(settings()->logo)}}"
                                alt="logo">
                        </a>
                    </div>
                    <nav class="sidebar-main">
                        <div class="left-arrow" id="left-arrow">
                            <i data-feather="arrow-left"></i>
                        </div>

                        <div id="sidebar-menu">
                            <ul class="sidebar-links" id="simple-bar">
                                <li class="back-btn"></li>

                                <li class="sidebar-list mt-4">
                                    <a class="sidebar-link sidebar-title link-nav" href="{{route('dashboard')}}">
                                        <i class="ri-home-line"></i>
                                        <span>{{__('general.dashboard')}}</span>
                                    </a>
                                </li>

                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-user-3-line"></i>
                                        <span>{{__('general.admins')}}</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{route('admins.index')}}">{{__('general.All admins')}}</a>
                                        </li>

                                        <li>
                                            <a href="{{route('admins.create')}}">{{__('general.Add a new admin')}}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-user-3-line"></i>
                                        <span>{{__('general.roles')}}</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{route('roles.index')}}">{{__('general.All roles')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{route('roles.create')}}">{{__('general.Create Role')}}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-user-3-line"></i>
                                        <span>{{__('general.users')}}</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{route('users.index')}}">{{__('general.All users')}}</a>
                                        </li>
                                        <li>
                                            <a href="{{route('users.create')}}">{{__('general.Add a new  user')}}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-list-check-2"></i>
                                        <span>{{__('general.partners')}}</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{route('partners.index')}}">{{__('general.All partners')}}</a>
                                        </li>

                                        <li>
                                            <a href="{{route('partners.create')}}">{{__('general.Add a new partner')}}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-list-check-2"></i>
                                        <span>{{__('general.projects')}}</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{route('projects.index')}}">{{__('general.All projects')}}</a>
                                        </li>

                                        <li>
                                            <a href="{{route('projects.create')}}">{{__('general.Add a new project')}}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-list-check-2"></i>
                                        <span>{{__('general.teams')}}</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{route('teams.index')}}">{{__('general.list')}}</a>
                                        </li>

                                        <li>
                                            <a href="{{route('teams.create')}}">{{__('general.create')}}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-list-check-2"></i>
                                        <span>{{__('general.services')}}</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{route('services.index')}}">{{__('general.list')}}</a>
                                        </li>

                                        <li>
                                            <a href="{{route('services.create')}}">{{__('general.create')}}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-store-3-line"></i>
                                        <span>{{__('general.products')}}</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{route('products.index')}}">{{__('general.list')}}</a>
                                        </li>

                                        <li>
                                            <a href="{{route('products.create')}}">{{__('general.create')}}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-list-check-2"></i>
                                        <span>{{__('general.catgeories')}}</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{route('categories.index')}}">{{__('general.list')}}</a>
                                        </li>

                                        <li>
                                            <a href="{{route('categories.create')}}">{{__('general.create')}}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-list-check-2"></i>
                                        <span>{{__('general.testimonials')}}</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{route('testimonials.index')}}">{{__('general.list')}}</a>
                                        </li>

                                        <li>
                                            <a href="{{route('testimonials.create')}}">{{__('general.create')}}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-list-check-2"></i>
                                        <span>{{__('general.processes')}}</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{route('processes.index')}}">{{__('general.list')}}</a>
                                        </li>

                                        <li>
                                            <a href="{{route('processes.create')}}">{{__('general.create')}}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-list-check-2"></i>
                                        <span>{{__('general.portfolios')}}</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{route('portfolios.index')}}">{{__('general.list')}}</a>
                                        </li>

                                        <li>
                                            <a href="{{route('portfolios.create')}}">{{__('general.create')}}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-list-check-2"></i>
                                        <span>{{__('general.pages')}}</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{route('pages.index')}}">{{__('general.list')}}</a>
                                        </li>

                                        <li>
                                            <a href="{{route('pages.create')}}">{{__('general.create')}}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-list-check-2"></i>
                                        <span>{{__('general.faqs')}}</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{route('faqs.index')}}">{{__('general.list')}}</a>
                                        </li>

                                        <li>
                                            <a href="{{route('faqs.create')}}">{{__('general.create')}}</a>
                                        </li>
                                    </ul>
                                </li>

                                {{-- <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-list-check-2"></i>
                                        <span>{{__('general.complains')}}</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{route('complains.index')}}">{{__('general.list')}}</a>
                                        </li>

                                        <li>
                                            <a href="{{route('complains.create')}}">{{__('general.create')}}</a>
                                        </li>
                                    </ul>
                                </li> --}}

                                {{-- <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-list-check-2"></i>
                                        <span>{{__('general.vaccancies')}}</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{route('vaccancies.index')}}">{{__('general.list')}}</a>
                                        </li>

                                        <li>
                                            <a href="{{route('vaccancies.create')}}">{{__('general.create')}}</a>
                                        </li>
                                    </ul>
                                </li> --}}

                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-list-check-2"></i>
                                        <span>{{__('general.counters')}}</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{route('counters.index')}}">{{__('general.list')}}</a>
                                        </li>

                                        <li>
                                            <a href="{{route('counters.create')}}">{{__('general.create')}}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-list-check-2"></i>
                                        <span>{{__('general.contacts')}}</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{route('contacts.index')}}">{{__('general.list')}}</a>
                                        </li>

                                        <li>
                                            <a href="{{route('contacts.create')}}">{{__('general.create')}}</a>
                                        </li>
                                    </ul>
                                </li>

                                {{-- <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-list-check-2"></i>
                                        <span>{{__('general.videos')}}</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{route('videos.index')}}">{{__('general.list')}}</a>
                                        </li>

                                        <li>
                                            <a href="{{route('videos.create')}}">{{__('general.create')}}</a>
                                        </li>
                                    </ul>
                                </li> --}}

                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-list-check-2"></i>
                                        <span>{{__('general.messages')}}</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{route('messages.index')}}">{{__('general.list')}}</a>
                                        </li>

                                        <li>
                                            <a href="{{route('messages.create')}}">{{__('general.create')}}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-list-check-2"></i>
                                        <span>{{__('general.newsletters')}}</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{route('newsletters.index')}}">{{__('general.list')}}</a>
                                        </li>

                                        <li>
                                            <a href="{{route('newsletters.create')}}">{{__('general.create')}}</a>
                                        </li>
                                    </ul>
                                </li>


                                {{-- <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-list-settings-line"></i>
                                        <span>Attributes</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="attributes.html">Attributes</a>
                                        </li>

                                        <li>
                                            <a href="add-new-attributes.html">Add Attributes</a>
                                        </li>
                                    </ul>
                                </li> --}}





                                {{-- <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="media.html">
                                        <i class="ri-price-tag-3-line"></i>
                                        <span>Media</span>
                                    </a>
                                </li> --}}

                                {{-- <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-archive-line"></i>
                                        <span>Orders</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="order-list.html">Order List</a>
                                        </li>
                                        <li>
                                            <a href="order-detail.html">Order Detail</a>
                                        </li>
                                        <li>
                                            <a href="order-tracking.html">Order Tracking</a>
                                        </li>
                                    </ul>
                                </li> --}}

                                {{-- <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-focus-3-line"></i>
                                        <span>Localization</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="translation.html">Translation</a>
                                        </li>

                                        <li>
                                            <a href="currency-rates.html">Currency Rates</a>
                                        </li>
                                    </ul>
                                </li> --}}

                                {{-- <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-price-tag-3-line"></i>
                                        <span>Coupons</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="coupon-list.html">Coupon List</a>
                                        </li>

                                        <li>
                                            <a href="create-coupon.html">Create Coupon</a>
                                        </li>
                                    </ul>
                                </li> --}}

                                {{-- <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="taxes.html">
                                        <i class="ri-price-tag-3-line"></i>
                                        <span>Tax</span>
                                    </a>
                                </li> --}}
{{-- 
                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="product-review.html">
                                        <i class="ri-star-line"></i>
                                        <span>Product Review</span>
                                    </a>
                                </li> --}}

                                {{-- <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="support-ticket.html">
                                        <i class="ri-phone-line"></i>
                                        <span>Support Ticket</span>
                                    </a>
                                </li> --}}

                                {{-- <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class=""></i>
                                        <span>{{__('general.settings')}}</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{route('edit.setting')}}">{{__('general.Profile Setting')}}</a>
                                        </li>
                                    </ul>
                                </li> --}}

                                {{-- <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="reports.html">
                                        <i class="ri-file-chart-line"></i>
                                        <span>Reports</span>
                                    </a>
                                </li> --}}

                                <li class="sidebar-list">
                                    <a class="sidebar-link sidebar-title link-nav" href="list-page.html">
                                        <i class="ri-list-check"></i>
                                        <span>List Page</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="right-arrow" id="right-arrow">
                            <i data-feather="arrow-right"></i>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Page Sidebar Ends-->




