<!DOCTYPE html>
<!--
=========================================================
* TREBLECLEF ONLINE  - VERSION 2.0
=========================================================

-->
<!-- beautify ignore:start -->

<html lang="en" class="dark-style  customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="/WebApplication/assets/" data-template="horizontal-menu-template-dark">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>{{$page['title']}}</title>

    <meta name="description" content="{{$page['meta']['description']}}" />
    <meta name="keywords" content="{{$page['meta']['keywords']}}">
    <!-- Canonical SEO -->
    <link rel="canonical" href="{{$page['meta']['canonical_url']}}">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="WebApplication/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="/WebApplication/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="/WebApplication/assets/vendor/fonts/tabler-icons.css"/>
    <link rel="stylesheet" href="/WebApplication/assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="/WebApplication/assets/vendor/css/rtl/core-dark.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/WebApplication/assets/vendor/css/rtl/theme-default-dark.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/WebApplication/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/WebApplication/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="/WebApplication/assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="/WebApplication/assets/vendor/libs/typeahead-js/typeahead.css" />
    <!-- Vendor -->
    <link rel="stylesheet" href="/WebApplication/assets/vendor/libs/bs-stepper/bs-stepper.css" />
    <link rel="stylesheet" href="/WebApplication/assets/vendor/libs/bootstrap-select/bootstrap-select.css" />
    <link rel="stylesheet" href="/WebApplication/assets/vendor/libs/select2/select2.css" />
    <link rel="stylesheet" href="/WebApplication/assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" />

    <!-- START PAGE LEVEL STYLES -->
    @if(isset($page->resources->css))
        @foreach($page->resources->css as $style )
            {!! $style !!}
        @endforeach
    @endif
    <!-- END PAGE LEVEL STYLES -->

    <!-- Helpers -->
    <script src="/WebApplication/assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="/WebApplication/assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="/WebApplication/assets/js/config.js"></script>

    @livewireStyles
</head>

<body>


<!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Content -->

<div class="authentication-wrapper authentication-cover authentication-bg">
    <div class="authentication-inner row">
        @yield('content')
    </div>
</div>

<script>
    // Check selected custom option
    window.Helpers.initCustomOptionCheck();
</script>

<!-- / Content -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="/WebApplication/assets/vendor/libs/jquery/jquery.js"></script>
<script src="/WebApplication/assets/vendor/libs/popper/popper.js"></script>
<script src="/WebApplication/assets/vendor/js/bootstrap.js"></script>
<script src="/WebApplication/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="/WebApplication/assets/vendor/libs/node-waves/node-waves.js"></script>

<script src="/WebApplication/assets/vendor/libs/hammer/hammer.js"></script>
<script src="/WebApplication/assets/vendor/libs/i18n/i18n.js"></script>
<script src="/WebApplication/assets/vendor/libs/typeahead-js/typeahead.js"></script>

<script src="/WebApplication/assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="/WebApplication/assets/vendor/libs/cleavejs/cleave.js"></script>
<script src="/WebApplication/assets/vendor/libs/cleavejs/cleave-phone.js"></script>
<script src="/WebApplication/assets/vendor/libs/bs-stepper/bs-stepper.js"></script>
<script src="/WebApplication/assets/vendor/libs/select2/select2.js"></script>
<script src="/WebApplication/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
<script src="/WebApplication/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
<script src="/WebApplication/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>

<!-- Main JS -->
<script src="/WebApplication/assets/js/main.js"></script>

<!-- Page JS -->
<script src="/WebApplication/assets/js/pages-auth-multisteps.js"></script>

@livewireScripts

</body>


<!-- Mirrored from demos.pixinvent.com/vuexy-html-admin-template/html/horizontal-menu-template-dark/auth-register-multisteps.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Apr 2023 13:36:21 GMT -->
</html>

<!-- beautify ignore:end -->
