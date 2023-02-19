<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}
        <link href="https://fonts.googleapis.com/css?family=Montserrat:700,900" rel="stylesheet">

    <!-- Font Awesome Icon -->
        <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" />
        
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />

        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>Ministère des Finances de la République Démocratique du Congo</title>
        <meta name="description" content="Bienvenue sur le site officiel du Ministère des Finances de la République Démocratique du Congo" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/logo_white.png" />
        <!-- Place favicon.ico in the root directory -->

        <!-- ========================= CSS here ========================= -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:700,900" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/bootstrap-5.0.5-alpha.min.css" />
        <link rel="stylesheet" href="assets/css/LineIcons.2.0.css" />
        <link rel="stylesheet" href="assets/css/animate.css" />
        <link rel="stylesheet" href="assets/css/tiny-slider.css" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="{{ asset('pageerrors/css/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('pageerrors/css/font-awesome.min.css') }}" />
        <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>


        <!-- Styles -->
        {{-- <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .code {
                border-right: 2px solid;
                font-size: 26px;
                padding: 0 15px 0 15px;
                text-align: center;
            }

            .message {
                font-size: 18px;
                text-align: center;
            }
        </style> --}}
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="code">
                @yield('code')
            </div>

            <div class="message" {{-- style="padding: 10px;" --}}>
                @yield('message')
            </div>
        </div>
    </body>
</html>
