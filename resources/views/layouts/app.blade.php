<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
        <title>TCA Online | {{$pageData->title}}</title>
        <link rel="icon" type="image/x-icon" href="/tca_online/main_application/assets/img/favicon.ico"/>

        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
        <link href="/tca_online/main_application/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/tca_online/main_application/assets/css/plugins.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->

        {!! $pageData->headContent !!}

    </head>
    <body class="sidebar-noneoverflow" {{$pageData->mainContainerAttributes}}>

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <!--  END CUSTOM STYLE FILE  -->

    <!--  BEGIN NAVBAR  -->
        <x-tca_online.main_application.navbar/>
        <!--  END NAVBAR  -->

        <!--  BEGIN MAIN CONTAINER  -->
        <div class="main-container" id="container">

            <div class="overlay"></div>
            <div class="search-overlay"></div>

            <!--  BEGIN TOP BAR  -->
            <x-tca_online.main_application.topbar/>
            <!--  END TOP BAR  -->

            <!--  BEGIN CONTENT AREA  -->
            <div id="content" class="main-content">
                @yield('content')
            </div>
            <!--  END CONTENT AREA  -->
        </div>

        <!-- END MAIN CONTAINER -->

        <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
        <script src="/tca_online/main_application/assets/js/libs/jquery-3.1.1.min.js"></script>
        <script src="/tca_online/main_application/bootstrap/js/popper.min.js"></script>
        <script src="/tca_online/main_application/bootstrap/js/bootstrap.min.js"></script>
        <script src="/tca_online/main_application/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="/tca_online/main_application/assets/js/app.js"></script>

        <script>
            $(document).ready(function() {
                App.init();
            });
        </script>
        <script src="tca_online/main_application/plugins/highlight/highlight.pack.js"></script>
        <script src="tca_online/main_application/assets/js/custom.js"></script>
        <!-- END GLOBAL MANDATORY SCRIPTS -->

        <!-- BEGIN PAGE LEVEL SCRIPTS -->
    {!! $pageData->bodyContent !!}
        <!-- END PAGE LEVEL SCRIPTS -->

    </body>

</html>
