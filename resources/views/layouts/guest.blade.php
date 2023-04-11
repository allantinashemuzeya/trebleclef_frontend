<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
        <link href="/tca_online/main_application/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/tca_online/main_application/assets/css/plugins.css" rel="stylesheet" type="text/css" />
        <link href="/tca_online/main_application/assets/css/authentication/form-1.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->

        <link rel="stylesheet" type="text/css" href="/tca_online/main_application/assets/css/forms/theme-checkbox-radio.css">
        <link rel="stylesheet" type="text/css" href="/tca_online/main_application/assets/css/forms/switches.css">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <style>
            .heading{
                font-size: 1.5rem;
                font-weight: 700;
                color: #fff;
                margin-bottom: 1rem;
            }
        </style>

    </head>
    <body id="app">

    <div class="form row col-12 main-content">
        <div class="form-container col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="form-form">
                <div class="form-form-wrap">
                    <div class="form-container">
                        <div class="form-content">
                           @yield('content')
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-image col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="l-image">
                    <video class="d-flex col-lg-12 first" autoplay muted loop style="border-radius: 25px">
                        <source src="{{ asset('app-assets/videos/home.mp4') }}" type="video/mp4"/>
                    </video>
                </div>
            </div>
        </div>
    </div>


    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="/tca_online/main_application/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="/tca_online/main_application/bootstrap/js/popper.min.js"></script>
    <script src="/tca_online/main_application/bootstrap/js/bootstrap.min.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="/tca_online/main_application/assets/js/authentication/form-1.js"></script>

    </body>
</html>
