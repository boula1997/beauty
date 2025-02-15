<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google-site-verification" content="sNrOHZ-giaG9HQWzThmVOantLqe2P6zsQJRO9-exWtA" />
    <title>{{ settings()->website_title }}</title>
    {{-- <link rel=icon href="admin/assets/img/favicon.webp" sizes="20x20" type="image/png"> --}}
    <link rel="icon" type="image/x-icon" href="{{ settings()->tab }}">
    <!-- Stylesheet -->

    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('lightbox-dist/css/lightbox.min.css') }}">

    <!-- Swiper JS - V10.2.0 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.min.css"
        integrity="sha512-pJrGHWDVOeiy4UkMtHu0fpD8oLLssFcaW0fsVXUkA1/jDLopa554Z1AZo5SKtekHnnmyat0ipiP0snKDrt0GNg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/general.css') }}">
    @if (app()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{ asset('bootstrap-5.3.1-dist/css/bootstrap.rtl.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style_ar.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('bootstrap-5.3.1-dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @endif
</head>

<body class='sc5'>

    @include('front.components.preloader')
    @include('front.components.nav')

