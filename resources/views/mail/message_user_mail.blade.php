<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <title>{{ settings()->title }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&display=swap"
        rel="stylesheet">

    <style type="text/css">
        body {
            text-align: center;
            margin: 0 auto;
            /* width: 650px; */
            font-family: 'Public Sans', sans-serif;
            background-color: #e2e2e2;
            display: block;
        }

        .mb-3 {
            margin-bottom: 30px;
        }

        ul {
            margin: 0;
            padding: 0;
        }

        li {
            display: inline-block;
            text-decoration: unset;
        }

        a {
            text-decoration: none;
        }

        h5 {
            margin: 10px;
            color: #777;
        }

        .text-center {
            text-align: center
        }

        .header-menu ul li+li {
            margin-right: 20px;
        }

        .header-menu ul li a {
            font-size: 14px;
            color: #252525;
            font-weight: 500;
        }

        .password-button {
            background-color: #293f91;
            border: none;
            color: #fff;
            padding: 14px 26px;
            font-size: 18px;
            border-radius: 6px;
            font-weight: 700;
            font-family: 'Nunito Sans', sans-serif;
        }

        .footer-table {
            position: relative;
        }

        .footer-table::before {
            position: absolute;
            content: "";
            background-image: url(images/footer-right.svg);
            background-position: top right;
            top: 0;
            right: -71%;
            width: 100%;
            height: 100%;
            background-repeat: no-repeat;
            z-index: -1;
            background-size: contain;
            opacity: 0.3;
        }

        .footer-table::after {
            position: absolute;
            content: "";
            background-image: url(images/footer-right.svg);
            background-position: top right;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background-repeat: no-repeat;
            z-index: -1;
            background-size: contain;
            opacity: 0.3;
        }

        .theme-color {
            color: #293f91;
        }

        .main-logo{
            height: 150px;
        }
    </style>
</head>

<body style="margin: 20px auto;">
    <table align="center" border="0" cellpadding="0" cellspacing="0"
        style="background-color: white; width: 100%; box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);-webkit-box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);">
        <tbody>
            <tr>
                <td>
                    <table class="header-table" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="display: flex; justify-content: center; align-items: center;">
                        <tr class="header"
                            style="background-color: #f7f7f7;display: flex;align-items: center;justify-content: space-between;width: 100%;">
                         
                            <td class="header-menu d-flex justify-content-center align-items-center" style="display: block; padding: 10px 32px;text-align: center;">
                                <ul>
                                    <li>
                                        <a href="{{ route('front.home') }}">{{ __('general.home')}}</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('front.shopping_now') }}">{{ __('general.shop_now')}}</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('front.about') }}">{{ __('general.about')}}</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('front.message') }}">{{ __('general.contact')}}</a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                    <table style="display: flex; justify-content: center; align-items: center;">
                        <tr>
                            <td>
                                <a href="{{ route('front.home') }}">
                                    <img src="{{ settings()->logo }}" class=" img-fluid main-logo" alt="logo">
                                </a>
                            </td>
                        </tr>
                    </table>

                    <table class="contant-table" style="margin-bottom: -6px;" align="center" border="0" cellpadding="0"
                        cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <td>
                                    <img src="{{ asset('template/images/welcome-poster.jpg') }}" alt="">
                                </td>
                            </tr>
                        </thead>
                    </table>

                    <table class="contant-table" style="margin-top: 40px; display: flex; justify-content: center; align-items: center; margin-botton:50px;"   align="center" border="0" cellpadding="0"
                        cellspacing="0" width="100%">
                        <thead>
                            <tr style="display: block;">
                                <td style="display: block;">
                                    <h3
                                        style="font-weight: 700; font-size: 20px; margin: 0; text-transform: uppercase;">
                                        {{ __('general.hi')}}{{ $data->name }} </h3>
                                        
                                      
                                </td>

                                <td>
                                    <p
                                        style="font-size: 14px;font-weight: 600;margin: 8px auto 0;line-height: 1.5;color: #000000;font-family: 'Nunito Sans', sans-serif; margin-bottom:50px;">
                                        {{ __('general.message_user')}}
                                    </p>
                                </td>
                            </tr>
                        </thead>
                    </table>

 

                    <table class="contant-table" align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                        <thead>
                            <tr style="display: block;">
                                <td style="display: block;">
                                    <p
                                        style="font-size: 14px; font-weight: 600; width: 82%; margin: 0 auto; line-height: 1.5; color: #939393; font-family: 'Nunito Sans', sans-serif;">
                                        {{ __('general.weic_mail_desc2')}} <span
                                            class="theme-color">{{ contacts('email')[0]->contact }}</span>  {{ __('general.weic_mail_desc3')}}<span
                                            class="theme-color" href="{{ route('front.home') }}">{{ settings()->title }}.</span> {{ __('general.weic_mail_desc4')}}</p>
                                </td>
                            </tr>
                        </thead>
                    </table>

                    <table class="text-center footer-table" align="center" border="0" cellpadding="0" cellspacing="0"
                        width="100%"
                        style="background-color: #282834; color: white; padding: 24px; overflow: hidden; z-index: 0; margin-top: 30px;">
                        <tr>
                            <td>
                                <table border="0" cellpadding="0" cellspacing="0" class="footer-social-icon text-center"
                                    align="center" style="margin: 8px auto 11px;">
                                    <tr>
                                        <td>
                                            <h4 style="font-size: 19px; font-weight: 700; margin: 0;">{{ __('general.shop_for')}}<span
                                                    class="theme-color">{{ settings()->title }}</span></h4>
                                        </td>
                                    </tr>
                                </table>
                                
                           
                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tr>
                                        <td>
                                            <h5 style="font-size: 13px; text-transform: uppercase; margin: 0; color:#ddd;
                                letter-spacing:1px; font-weight: 500;">
                                            </h5>
                                            <h5 style="font-size: 13px; text-transform: uppercase; margin: 10px 0 0; color:#ddd;
                                letter-spacing:1px; font-weight: 500;">{{ settings()->copyright }}</h5>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>