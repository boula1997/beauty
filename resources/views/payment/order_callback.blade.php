<!doctype html>
<html lang="{{$lang}}" dir="{{ ($lang == 'ar') ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="card">
        <div class="card-body" style="text-align: center">
            @if ($status == "done")
                <div class="alert alert-success">
                    <strong>@lang('general.paid_successfully')</strong>
                </div>
            @else
                <div class="alert alert-danger">
                    <strong>@lang('general.paid_failed')</strong>
                </div>
            @endif
        </div>
    </div>
</body>
</html>
