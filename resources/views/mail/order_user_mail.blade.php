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
            width: fit-content;
            font-family: 'Public Sans', sans-serif;
            background-color: #e2e2e2;
            display: block;
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

        .main-bg-light {
            background-color: #fafafa;
        }

        .header-menu ul li a {
            font-size: 14px;
            color: #252525;
            font-weight: 500;
        }

        .product-table tbody tr td img {
            /* width: 86%; */
            margin-right: 26px;
        }

        .product-table tbody tr td .product-detail {
            text-align: right;
            display: flex;
            flex-wrap: wrap;
            gap: 7px;
        }

        .product-table tbody tr td .product-detail li {
            display: block;
            width: 100%;
            font-size: 16px;
            font-weight: 600;
            white-space: nowrap;
        }

        .product-table tbody tr td .product-detail li span {
            color: #939393;
        }

        .order-table {
            background-image: url(images/order-poster.jpg);
            background-position: center;
            background-repeat: no-repeat;
            border-radius: 5px;
            overflow: hidden;
            padding: 18px 27px;
            margin-top: 40px;
        }

        .footer-table {
            position: relative;
            margin-top: 34px;
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

        .email-image {
            height: 70px;
            padding-left: 10px
        }
    </style>
</head>

<body style="margin: 20px auto;">
    <table align="center" border="0" cellpadding="0" cellspacing="0"
        style="background-color: #fff; box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);-webkit-box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);">
        <tbody>
            <tr>
                <td>
                    <table class="header-table" align="center" border="0" cellpadding="0" cellspacing="0"
                        width="100%">
                        <tr class="header"
                            style="background-color: #f7f7f7;display: flex;align-items: center;justify-content: center;width: 100%;">
                            <td class="header-logo" style="padding: 10px 32px;">
                                <a href="{{ route('front.home') }}" style="display: block; text-align: right;">
                                    <img src="{{ settings()->logo }}" class=" img-fluid main-logo" alt="logo">
                                </a>
                            </td>
                        </tr>
                    </table>

                    {{-- <table style="padding: 27px;" align="center" border="0" cellpadding="0" cellspacing="0"
                        width="100%">
                        <tr>
                            <td>
                                <img src="images/order-success-poster.png" alt=""
                                    style="width: 100%; height: 100%;">
                            </td>
                        </tr>
                    </table> --}}

                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%"
                        style="padding: 0 27px;">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="title title-2 text-center">
                                        <h2 style="font-size: 20px;font-weight: 700;margin: 24px 0 0;">
                                            {{ __('general.order_mail1') }}
                                        </h2>
                                        <p
                                            style="font-size: 14px;margin: 5px auto 0;line-height: 1.5;color: #939393;font-weight: 500;width: 70%;">
                                            {{ __('general.order_number') }} {{ $order->id }} </p>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="dilivery-table" align="center" border="0" cellpadding="0" cellspacing="0"
                        width="100%"
                        style="margin: 25px 27px;padding: 20px 32px;width: fit-content; background-color:
                        #f7f7f7;">
                        <tbody>
                            <tr>
                                <td style="    text-align: right;padding-right: 32px;">
                                    <div class="title title-2" style="text-align: right;">
                                        <h2 style="font-size: 16px;font-weight: 700;margin: 0 0 12px;">
                                            {{ __('general.order_mail1') }} </h2>
                                        <p
                                            style="font-size: 14px;margin: 0;line-height: 1.5;color:#939393;font-weight: 500;">
                                            {{ __('general.order_mail2') }} {{ contacts('phone')[0]->contact }}.
                                        </p>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="shipping-table" align="center" border="0" cellpadding="0" cellspacing="0"
                        width="100%" style="padding: 0 27px;">
                        <thead>
                            <tr>
                                <th
                                    style="font-size: 17px;font-weight: 700;padding-bottom: 8px;border-bottom: 1px solid rgba(217, 217, 217, 0.5);text-align: right;">
                                    {{ __('general.shipped_items') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr
                                style="column-count: 2;column-rule-style: dashed;column-rule-color: rgba(82, 82, 108, 0.7);column-gap: 22px;column-rule-width: 1px;display: flex;align-items: center;">
                                <td style="width: 100%;">
                                    <table class="product-table" align="center" border="0" cellpadding="0"
                                        cellspacing="0" width="100%">
                                        <tbody>
                                            @foreach ($order->orderproducts as $orderproduct)
                                                <tr>
                                                    <td
                                                        style="padding: 28px 0;border-bottom: 1px solid rgba(217, 217, 217, 0.5);">
                                                        <img class=" img-fluid W-50 email-image" src="{{ $orderproduct->product->image }}"
                                                            alt="">
                                                    </td>
                                                    <td
                                                        style="padding: 28px 0;border-bottom: 1px solid rgba(217, 217, 217, 0.5);">
                                                        <ul class="product-detail">
                                                            <li>{{ $orderproduct->product->title }}</li>
                                                            <li>{{ __('general.qty') }}:
                                                                <span>{{ $orderproduct->count }} </span></li>
                                                            <li>{{ __('general.price') }}:
                                                                <span>{{ $orderproduct->total }} ج.م</span></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </td>

                                <td style="width: 70%;">
                                    <table class="dilivery-table" align="center" border="0" cellpadding="0"
                                        style="background-color: #F7F7F7;padding: 14px;" cellspacing="0" width="100%">
                                        <tbody>
                                            <tr>
                                                <td style="font-weight: 700;font-size: 17px;padding-bottom: 15px;border-bottom: 1px solid rgba(217, 217, 217, 0.5);"
                                                    colspan="2">{{ __('general.order_summary') }}</td>
                                            </tr>
                                            <tr>
                                                <td
                                                    style="text-align: right;font-size: 15px;font-weight: 400;padding: 15px 0;border-bottom: 1px solid rgba(217, 217, 217, 0.5);">
                                                    {{ __('general.subtotal') }}</td>
                                                <td
                                                    style="text-align: right;font-size: 15px;font-weight: 400;padding: 15px 0;border-bottom: 1px solid rgba(217, 217, 217, 0.5);">
                                                    {{ $order->total -  $order->shipping->fee }} ج.م</td>
                                            </tr>
                                            <tr>
                                                <td
                                                    style="text-align: right;font-size: 15px;font-weight: 400;padding: 15px 0;border-bottom: 1px solid rgba(217, 217, 217, 0.5);">
                                                    {{ __('general.discount') }}</td>
                                                <td
                                                    style="text-align: right;font-size: 15px;font-weight: 400;padding: 15px 0;border-bottom: 1px solid rgba(217, 217, 217, 0.5);">
                                                    00,00 ج.م</td>
                                            </tr>
                                            <tr>
                                                <td
                                                    style="text-align: right;font-size: 15px;font-weight: 400;padding: 15px 0;border-bottom: 1px solid rgba(217, 217, 217, 0.5);">
                                                    {{ __('general.shipping_value') }}</td>
                                                <td
                                                    style="text-align: right;font-size: 15px;font-weight: 400;padding: 15px 0;border-bottom: 1px solid rgba(217, 217, 217, 0.5);">
                                                    {{ $order->shipping->fee}} ج.م</td>
                                            </tr>
                                            <tr>
                                                <td
                                                    style="text-align: right;font-size: 15px;font-weight: 600;padding-top: 15px;">
                                                    {{ __('general.total') }}</td>
                                                <td
                                                    style="text-align: right;font-size: 15px;font-weight: 600;padding-top: 15px;">
                                                    {{ $order->total }} ج.م </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>


                    <table class="text-center footer-table" align="center" border="0" cellpadding="0"
                        cellspacing="0" width="100%"
                        style="background-color: #282834; color: white; padding: 24px; overflow: hidden; z-index: 0;">
                        <tr>
                            <td>
                                <table border="0" cellpadding="0" cellspacing="0"
                                    class="footer-social-icon text-center" align="center"
                                    style="margin: 8px auto 20px;">
                                    <tr>
                                        <td style="font-size: 19px; font-weight: 700;">{{ __('general.shop_for') }}
                                            <span class="theme-color">{{ settings()->title }}</span></td>
                                    </tr>
                                </table>


                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tr>
                                        <td>
                                            <h5
                                                style="font-size: 13px; text-transform: uppercase; margin: 0; color:#ddd;
                                              letter-spacing:1px; font-weight: 500;">
                                            </h5>
                                            <h5
                                                style="font-size: 13px; text-transform: uppercase; margin: 10px 0 0; color:#ddd;
                                             letter-spacing:1px; font-weight: 500;">
                                                {{ settings()->copyright }}</h5>
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
