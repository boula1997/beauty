<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Haddak Alfayrouz Dashboard">
    <meta name="keywords" content="Dashboard, Setting, Controls">
    <meta name="author" content="Medaht">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم @yield('title')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- IconPicker CSS -->
    <link href="{{ asset('css/fontawesome-iconpicker.min.css') }}" rel="stylesheet">

    <style>
        body {
            text-align: right;
        }

        h2 {
            text-align: center
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #9C27B0;
            color: white;
            text-align: center;
        }
    </style>
</head>

<body>
    @section('sidebar')
    @show

    <div class="container">
        @yield('content')
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>

    <!-- IconPicker JS -->
    <script src="{{ asset('js/fontawesome-iconpicker.min.js') }}"></script>

    @stack('scripts')
</body>

</html>
