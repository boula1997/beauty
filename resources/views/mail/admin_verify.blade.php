<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <title>{{ settings()->title }} </title>

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
            width: 650px;
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
                            style="display: flex;align-items: center;justify-content: space-between;width: 100%;">
                            <td class="header-logo" style="padding: 10px 32px;">
                                <a href="{{ route('front.home') }}" style="display: block; text-align: right;">
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

                    <table class="contant-table" style="margin-top: 40px;" align="center" border="0" cellpadding="0"
                        cellspacing="0" width="100%">
                        <thead>
                            <tr style="display: block;">
                                <td style="display: block;">
                                    <h3
                                        style="font-weight: 700; font-size: 20px; margin: 0; text-transform: uppercase;">
                                        {{ __('general.hi')}}{{ $data->name }} </h3>
                                </td>
                                <td style="display: block;">
                                    <h3
                                        style="font-weight: 700; font-size: 20px; margin: 0; text-transform: uppercase;">
                                        {{ __('general.welcome_to')}}  {{ settings()->title }} </h3>
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
                                        <span> {{ __('general.admin_verify1')}} </span>
                                           </p>
                                </td>
                            </tr>
                        </thead>
                    </table>
                  

                        <table class="shipping-table" align="center" border="0" cellpadding="0" cellspacing="0"
                            width="100%" style="padding: 0 27px;">
                            <tr
                                style="column-count: 2;column-rule-style: dashed;column-rule-color: rgba(82, 82, 108, 0.7);column-gap: 22px;column-rule-width: 1px;display: flex;align-items: center;">
                                <td style="width: 100%;">
                                    <table class="dilivery-table" align="center" border="0" cellpadding="0"
                                        style="background-color: #F7F7F7;padding: 14px;" cellspacing="0" width="100%">
                                        <tbody>
                                          
                                            <tr>
                                                <td
                                                    style="text-align: right;font-size: 15px;font-weight: 400;padding: 15px 0;border-bottom: 1px solid rgba(217, 217, 217, 0.5);">
                                                    {{ __('general.name')}}</td>
                                                <td
                                                    style="text-align: right;font-size: 15px;font-weight: 400;padding: 15px 0;border-bottom: 1px solid rgba(217, 217, 217, 0.5);">
                                                    {{ $data->name}}
                                                 </td>
                                            </tr>
                                            <tr>
                                                <td
                                                    style="text-align: right;font-size: 15px;font-weight: 400;padding: 15px 0;border-bottom: 1px solid rgba(217, 217, 217, 0.5);">
                                                    {{ __('general.email')}}</td>
                                                <td
                                                    style="text-align: right;font-size: 15px;font-weight: 400;padding: 15px 0;border-bottom: 1px solid rgba(217, 217, 217, 0.5);">
                                                    {{ $data->email}} 
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </table>



                    <table class="button-table" style="margin: 34px 0;" align="center" border="0" cellpadding="0"
                        cellspacing="0" width="100%">
                        <thead>
                            <tr style="display: block;">
                                <td style="display: block;">
                                    <button class="password-button">{{ __('general.confirm')}}</button>
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