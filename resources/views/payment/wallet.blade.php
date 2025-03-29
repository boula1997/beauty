<!doctype html>
<html lang="{{$lang}}" dir="{{ ($lang == 'ar') ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .wpwl-label{
            direction: rtl !important;
        }
    </style>
    <script>
        var wpwlOptions = {
            style: "plain",
            locale: "{{$lang}}",
            iframeStyles: {
                'wpwl-group-submit': {
                    'color': '#000000',
                    'font-size': '16px',
                },
                'wpwl-button-pay': {
                    'color': '#000000',
                    'font-size': '16px',
                }
            }
        }
    </script>
    <script src="{{ $form_url }}/v1/paymentWidgets.js?checkoutId={{$checkoutId ?? ''}}"></script>
</head>
<body>
    <div class="card">
        <div class="card-body">
            <form action="{{ url(route('wallet.callback', ["user_id" => $userId, 'lang' => $lang, 'platform' => $platform, 'amount' => $amount]))}}" class="paymentWidgets" data-brands=" @if($payment_name == 'stc_pay') STC_PAY @else VISA MASTER MADA @endif "></form>
        </div>
    </div>
</body>
</html>
