@include('admin.layouts.header')

<body class="{{app()->getLocale()=="ar"?"rtl":"ltr"}}">

    @include('admin.components.success')
    @include('admin.components.errors')

    <!-- page-wrapper Start-->
    <div class="page-wrapper">

        @include('admin.components.mainHeader')

        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            @include('admin.components.sidebar')
            @yield('content')
        </div>

    </div>

    @include('admin.layouts.footer')
