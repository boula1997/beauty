<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token --> 
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Aloo') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="icon" type="image/x-icon" href="{{settings()->tab}}">

    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}
    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">     --}}

              <!-- Google font-->
            <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,500;1,600;1,700;1,800;1,900&display=swap">

            <link rel="stylesheet"
                href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">


            <!-- Font Awesome-->
            <link rel="stylesheet" type="text/css" href="{{ asset("admin/assets/css/vendors/font-awesome.css") }}">

            <!-- Flag icon-->
            <link rel="stylesheet" type="text/css" href="{{ asset("admin/assets/css/vendors/themify-icons.css") }}">

            <!-- slick icon-->
            <link rel="stylesheet" type="text/css" href="{{ asset("admin/assets/css/vendors/slick.css") }}">
            <link rel="stylesheet" type="text/css" href="{{ asset("admin/assets/css/vendors/slick-theme.css") }}">

            <!-- Bootstrap css-->
            <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/bootstrap.css') }}">

            <!-- App css-->
            <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/style.css') }}">
</head>
<body>
    <div id="app" >
        <main class="py-4">
            @include('admin.components.success')
            @include('admin.components.errors')
            @yield('content')
        </main>
    </div>
</body>
</html>
