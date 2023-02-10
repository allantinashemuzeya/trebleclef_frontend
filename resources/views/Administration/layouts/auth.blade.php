<!DOCTYPE html>
<html lang="en" class="h-100">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta property="og:title" content="Zenix - Crypto Admin Dashboard" />
    <meta property="og:description" content="Zenix - Crypto Admin Dashboard" />
    <meta property="og:image" content="https://zenix.dexignzone.com/xhtml/page-error-404.html" />
    <meta name="format-detection" content="telephone=no">
    <title>TCA Admin | Login </title>
    <meta name="description" content="Some description for the page"/>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('Administration/images/favicon.png')}}">
    <link href="{{asset('Administration/css/style.css')}}" rel="stylesheet">

</head>

<body class="vh-100">
<div class="authincation h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authentication-content">
                  @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('Administration/vendor/global/global.min.js')}}" type="text/javascript"></script>
<script src="{{asset('Administration/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}" type="text/javascript"></script>
<script src="{{asset('Administration/js/custom.js')}}" type="text/javascript"></script>
<script src="{{asset('Administration/js/deznav-init.js')}}" type="text/javascript"></script>
</body>
</html>
