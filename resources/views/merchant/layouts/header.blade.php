<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Multikart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Multikart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{asset(settings()->logo)}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset(settings()->logo)}}" type="image/x-icon">
    <title>@yield('title', settings()->title)</title>

    <!-- Google font-->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,500;1,600;1,700;1,800;1,900&display=swap">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{asset("admin/assets/css/vendors/font-awesome.css")}}">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset("admin/assets/css/vendors/flag-icon.css")}}">

    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset("admin/assets/css/vendors/icofont.css")}}">

    <!-- Prism css-->
    <link rel="stylesheet" type="text/css" href="{{asset("admin/assets/css/vendors/prism.css")}}">

    <!-- Chartist css -->
    <link rel="stylesheet" type="text/css" href="{{asset("admin/assets/css/vendors/chartist.css")}}">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset("admin/assets/css/vendors/bootstrap.css")}}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" type="text/css"
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    
        <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4-dark.css" rel="stylesheet">
    
    
    <link rel="stylesheet" type="text/css" href="{{asset("admin/assets/css/style.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("admin/css/custom.css")}}">
        
  
</head>