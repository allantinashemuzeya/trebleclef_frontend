<!DOCTYPE html>
<!-- =========================================================
* Vuexy - Bootstrap Admin Template | v9.0.0
==============================================================

* Product Page: https://1.envato.market/vuexy_admin
* Created by: Pixinvent
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright Pixinvent (https://pixinvent.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html class="dark-style layout-menu-fixed " data-assets-path="/WebApplication/assets/" data-template="horizontal-menu-template-dark"
      data-theme="theme-default" dir="ltr"
      lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
          name="viewport"/>
    <title>Dashboard - Home</title>
    <meta content="Start your development with a Dashboard for Bootstrap 5"
          name="description"/>
    <meta content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5"
          name="keywords">
    <!-- Canonical SEO -->
    <link href="https://1.envato.market/vuexy_admin" rel="canonical">
    <!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '../../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5J3LMKC');</script>
    <!-- End Google Tag Manager -->
    <!-- Favicon -->
    <link href="https://demos.pixinvent.com/vuexy-html-admin-template/assets/img/favicon/favicon.ico" rel="icon"
          type="image/x-icon"/>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/" rel="preconnect">
    <link crossorigin href="https://fonts.gstatic.com/" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet">
    <!-- Icons -->
    <link href="/WebApplication/assets/vendor/fonts/fontawesome.css" rel="stylesheet"/>
    <link href="/WebApplication/assets/vendor/fonts/tabler-icons.css" rel="stylesheet"/>
    <link href="/WebApplication/assets/vendor/fonts/flag-icons.css" rel="stylesheet"/>
    <!-- Core CSS -->
    <link class="template-customizer-core-css" href="/WebApplication/assets/vendor/css/rtl/core-dark.css"
          rel="stylesheet"/>
    <link class="template-customizer-theme-css"
          href="/WebApplication/assets/vendor/css/rtl/theme-default-dark.css"
          rel="stylesheet"/>
    <link href="/WebApplication/assets/css/demo.css" rel="stylesheet"/>
    <!-- Vendors CSS -->
    <link href="/WebApplication/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css"
          rel="stylesheet"/>
    <link href="/WebApplication/assets/vendor/libs/node-waves/node-waves.css"
          rel="stylesheet"/>
    <link href="/WebApplication/assets/vendor/libs/typeahead-js/typeahead.css"
          rel="stylesheet"/>
    <link href="/WebApplication/assets/vendor/libs/apex-charts/apex-charts.css"
          rel="stylesheet"/>
    <link href="/WebApplication/assets/vendor/libs/swiper/swiper.css" rel="stylesheet"/>
    <link href="/WebApplication/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css"
          rel="stylesheet">
    <link href="/WebApplication/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css"
          rel="stylesheet">
    <link href="/WebApplication/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css"
          rel="stylesheet">
    <!-- Page CSS -->
    <link href="/WebApplication/assets/vendor/css/pages/cards-advance.css"
          rel="stylesheet"/>
    <!-- Helpers -->
    <script src="/WebApplication/assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="/WebApplication/assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="/WebApplication/assets/js/config.js"></script>
</head>
<body>
<!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
<noscript>
    <iframe height="0"
            src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" style="display: none; visibility: hidden"
            width="0"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- Layout wrapper -->
<div
    class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
    <div class="layout-container">

        <x-v2.app.navbar :navbar="$navbar"/>

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Content wrapper -->
            <div class="content-wrapper">

                <x-v2.app.menu :menu="$menu"/>

                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">

                    <div class="row">
                        @yield('content')
                    </div>

                </div>
                <!--/ Content -->

                <x-v2.app.footer/>

                <div class="content-backdrop fade"></div>
            </div>
            <!--/ Content wrapper -->
        </div>
        <!--/ Layout container -->
    </div>
</div>
<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
<!-- Drag Target Area To SlideIn Menu On Small Screens -->
<div class="drag-target"></div>
<!--/ Layout wrapper -->
<div class="buy-now">
    <a class="btn btn-danger btn-buy-now" href="https://1.envato.market/vuexy_admin"
       target="_blank">Buy Now</a>
</div>
<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="/WebApplication/assets/vendor/libs/jquery/jquery.js"></script>
<script src="/WebApplication/assets/vendor/libs/popper/popper.js"></script>
<script src="/WebApplication/assets/vendor/js/bootstrap.js"></script>
<script
    src="/WebApplication/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="/WebApplication/assets/vendor/libs/node-waves/node-waves.js"></script>
<script src="/WebApplication/assets/vendor/libs/hammer/hammer.js"></script>
<script src="/WebApplication/assets/vendor/libs/i18n/i18n.js"></script>
<script src="/WebApplication/assets/vendor/libs/typeahead-js/typeahead.js"></script>
<script src="/WebApplication/assets/vendor/js/menu.js"></script>
<!-- endbuild -->
<!-- Vendors JS -->
<script src="/WebApplication/assets/vendor/libs/apex-charts/apexcharts.js"></script>
<script src="/WebApplication/assets/vendor/libs/swiper/swiper.js"></script>
<script
    src="/WebApplication/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
<!-- Main JS -->
<script src="/WebApplication/assets/js/main.js"></script>
<!-- Page JS -->
<script src="/WebApplication/assets/js/dashboards-analytics.js"></script>
</body>
<!-- Mirrored from demos.pixinvent.com/vuexy-html-admin-template/html/horizontal-menu-template-dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Apr 2023 13:35:24 GMT -->
</html>
<!-- beautify ignore:end -->
