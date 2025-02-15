<!DOCTYPE html>
<html lang="{{app()->getLocale()}}" dir="{{app()->getLocale()=="ar"?"rtl":"ltr"}}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="{{settings()->description}}">
    <meta name="keywords"
        content="{{settings()->keywords}}">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset("admin/assets/images/favicon.png")}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset("admin/assets/images/favicon.png")}}" type="image/x-icon">
    <title>{{settings()->title}}</title>

    <!-- Google font-->
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset("admin/assets/css/vendors/bootstrap.css")}}">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="{{asset("admin/assets/css/style.css")}}">
</head>

<body class="{{app()->getLocale()=="ar"?"rtl":"ltr"}}">

    <!-- login section start -->
    <section class="log-in-section section-b-space">
        <a href="" class="logo-login"><img src="{{asset("admin/assets/images/logo/1.png")}}" class="img-fluid"></a>
        <div class="container w-100">
            <div class="row">

                <div class="col-xl-5 col-lg-6 me-auto">
                    <div class="log-in-box">
                        <div class="log-in-title">
                            <h3>Welcome To Fastkart</h3>
                            <h4>Log In Your Account</h4>
                        </div>

                        <div class="input-box">
                        @isset($route)
                            <form class="row g-4" method="POST" action="{{ route($route) }}">
                        @else
                            <form class="row g-4" method="POST" action="{{ route('login') }}">
                        @endisset
                        @csrf
                                <div class="col-12">
                                    <div class="form-floating theme-form-floating log-in-form">
                                        <input type="email" class="form-control" id="email" placeholder="Email Address" name="email">
                                        <label for="email">Email Address</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating theme-form-floating log-in-form">
                                        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                                        <label for="password">Password</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="forgot-box">
                                        <div class="form-check ps-0 m-0 remember-box">
                                            <input class="checkbox_animated check-box" type="checkbox" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">Remember me</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <!-- Replace <a> with <button> for proper form submission -->
                                    <button type="submit" class="btn btn-animation w-100 justify-content-center">
                                        Log In
                                    </button>
                                </div>
                            </form>

                        </div>



                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login section end -->

</body>

</html>
