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
                                        <span>{{__('general.newss')}}</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <a href="{{route('newss.index')}}">{{__('general.All newss')}}</a>
                                        </li>

                                        <li>
                                            <a href="{{route('newss.create')}}">{{__('general.Add a new news')}}</a>
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

                                <li class="sidebar-list">
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
                                </li>

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

                                <li class="sidebar-list">
                                    <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                        <i class="ri-list-check-2"></i>
                                        <span>{{__('general.logout')}}</span>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li>
                                            <form action="{{ route('logout') }}" method="POST">
                                                @csrf
                                                <i class=" px-1 nav-icon  fa fa-sign-out text-white" aria-hidden="true"></i>
                                                <button class="btn text-white" type="submit">{{__('general.logout')}}</button>
                        
                                            </form>
                                        </li>
                                    </ul>
                                </li>

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




