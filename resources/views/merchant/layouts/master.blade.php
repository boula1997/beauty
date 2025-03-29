@include('merchant.layouts.header')

<body class="{{app()->getLocale()=="ar"?"rtl":"ltr"}}">

    @include('merchant.components.success')
    @include('merchant.components.errors')

    <!-- page-wrapper Start-->
    <div class="page-wrapper">

        @include('merchant.components.mainHeader')

        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            @include('merchant.components.sidebar')
            @yield('content')
        </div>

    </div>

    @include('merchant.layouts.footer')
