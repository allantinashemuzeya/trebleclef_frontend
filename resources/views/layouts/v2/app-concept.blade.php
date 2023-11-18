<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>{{$title}}</title>
    <link rel="icon" type="image/x-icon"
          href="/tca_online/main_application/assets/img/favicon.ico"/>
    <link href="/tca_online/main_application//tca_online/main_application/assets/css/loader.css"
        rel="stylesheet" type="text/css"/>
        
    <link href="/css/coolLoader.css" rel="stylesheet" type="text/css"/>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link
        href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap"
        rel="stylesheet">
    <link href="/tca_online/main_application/bootstrap/css/bootstrap.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="/tca_online/main_application/assets/css/plugins.css"
          rel="stylesheet" type="text/css"/>


    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL /tca_online/main_application/plugins/CUSTOM STYLES -->
    <link href="/tca_online/main_application/plugins/apex/apexcharts.css"
          rel="stylesheet" type="text/css">
    <link href="/tca_online/main_application/assets/css/dashboard/dash_2.css"
          rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL /tca_online/main_application/plugins/CUSTOM STYLES -->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src='unitegallery/js/unitegallery.min.js'></script>

</head>
<body class="alt-menu sidebar-noneoverflow">

    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <x-v2.app-concept.navbar/>
    <!--  END NAVBAR  -->

<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">

    <div class="overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN TOPBAR  -->

    <x-v2.app-concept.topbar :menu="$navbar" />

    <!--  END TOPBAR  -->

    <!--  BEGIN CONTENT PART  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

           @yield('content')
            <x-v2.app-concept.footer/>
        </div>
    </div>
    <!--  END CONTENT PART  -->

</div>
<!-- END MAIN CONTAINER -->

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script>
    // JavaScript code to hide the loader when the page is fully loaded
    window.addEventListener('load', function() {
        var loader = document.getElementById('load_screen');
        loader.style.display = 'none';
    });
</script>
<script src="/tca_online/main_application/assets/js/libs/jquery-3.1.1.min.js"></script>
<script src="/tca_online/main_application/bootstrap/js/popper.min.js"></script>
<script src="/tca_online/main_application/bootstrap/js/bootstrap.min.js"></script>
<script src="/tca_online/main_application/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script><script src="/tca_online/main_application/plugins/blockui/jquery.blockUI.min.js"></script>
<script src="/tca_online/main_application/assets/js/app.js"></script>
<script>
    $(document).ready(function () {
        App.init();
    });
</script>
<script src="/tca_online/main_application/assets/js/custom.js"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL /tca_online/main_application/plugins/CUSTOM SCRIPTS -->
<script src="/tca_online/main_application/plugins/apex/apexcharts.min.js"></script>
<script src="/tca_online/main_application/assets/js/dashboard/dash_2.js"></script>
<!-- BEGIN PAGE LEVEL /tca_online/main_application/plugins/CUSTOM SCRIPTS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
