<!DOCTYPE html>
<html lang="en" dir="{{app()->getLocale()=="ar"?"rtl":"ltr"}}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <link rel="icon" href="{{settings()->logo}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{settings()->logo}}" type="image/x-icon">
    <title>{{settings()->website_title}}</title>

    <!--Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{asset("front/assets/css/vendors/font-awesome.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("front/assets/css/vendors/remixicon.css")}}">

    <!-- Slick slider css -->
    <link rel="stylesheet" type="text/css" href="{{asset("front/assets/css/vendors/slick.css")}}">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="{{asset("front/assets/css/vendors/animate.css")}}">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset("front/assets/css/vendors/themify-icons.css")}}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset("front/assets/css/vendors/bootstrap.css")}}">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{asset("front/assets/css/style.css")}}">
    <!-- Theme css -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" type="text/css"
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
     
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

     <!-- Slick CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css"/>


<link rel="stylesheet" type="text/css" href="{{asset("front/assets/css/custom.css")}}">


</head>

<body class="theme-color-1 {{app()->getLocale()=="ar"?"rtl":"ltr"}}">
    @if (auth('web')->user())
        
    @php
    cart()->clearItems();
    loadUserCart(auth('web')->user()->id);
    @endphp
    @endif
    @include('front.components.preloader')

    @include('front.components.searchModal')
    @include('front.components.nav')
