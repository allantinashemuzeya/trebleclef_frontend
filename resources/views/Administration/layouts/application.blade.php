<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="keywords" content=""/>
    <meta name="author" content=""/>
    <meta name="robots" content=""/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="ApZhG3TTj1VbDDu42EldX1DRdadaKTIUHB7wGqpX">
    <meta name="description" content="Some description for the page"/>
    <meta property="og:title" content="Zenix - Crypto Laravel Admin Dashboard"/>
    <meta property="og:description" content="Zenix | Widget"/>
    <meta property="og:image" content="../social-image.png')}}"/>
    <meta name="format-detection" content="telephone=no">
    <title>TCA | Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('Administration/images/favicon.png')}}">
    <link href="{{asset('Administration/vendor/chartist/css/chartist.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('Administration/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('Administration/css/style.css')}}" rel="stylesheet" type="text/css"/>
@livewireStyles
</head>

<body>

<!--*******************
        Preloader start
    ********************-->
<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<!--*******************
        Preloader end
    ********************-->


<!--**********************************
        Main wrapper start
    ***********************************-->
<div id="main-wrapper">
<x-nav-header/>

<!--**********************************
            Header start
***********************************-->
    <x-chat-box/>
    <x-header/>
<!--**********************************
            Sidebar start
***********************************-->
    <x-sidebar/>
<!--**********************************
            Sidebar end
 ***********************************-->


<!--**********************************
    Content body start
***********************************-->
    <div class="content-body">
        @yield('content')
    </div>
</div>
<!--**********************************
        Content body end
    ***********************************-->


<!--**********************************
        Footer start
    ***********************************-->

<!--**********************************
Footer start
***********************************-->
<div class="footer">
    <div class="copyright">
        <p>Copyright © Designed &amp; Developed by <a href="" target="_blank">Allan T Muzeya</a>
            2022</p>
    </div>
</div>
<!--**********************************
Footer end
***********************************-->
<!--**********************************
        Footer end
    ***********************************-->

<!--**********************************
       Support ticket button start
    ***********************************-->

<!--**********************************
       Support ticket button end
    ***********************************-->


</div>
<!--**********************************
        Main wrapper end
    ***********************************-->

<!--**********************************
        Scripts
    ***********************************-->
<script src="{{asset('Administration/vendor/global/global.min.js')}}" type="text/javascript"></script>
<script src="{{asset('Administration/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}" type="text/javascript"></script>
<script src="{{asset('Administration/vendor/chart.js/Chart.bundle.min.js')}}" type="text/javascript"></script>
<script src="{{asset('Administration/vendor/apexchart/apexchart.js')}}" type="text/javascript"></script>
<script src="{{asset('Administration/vendor/chartist/js/chartist.min.js')}}" type="text/javascript"></script>
<script src="{{asset('Administration/vendor/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js')}}" type="text/javascript"></script>
<script src="{{asset('Administration/vendor/flot/jquery.flot.js')}}" type="text/javascript"></script>
<script src="{{asset('Administration/vendor/flot/jquery.flot.pie.js')}}" type="text/javascript"></script>
<script src="{{asset('Administration/vendor/flot/jquery.flot.resize.js')}}" type="text/javascript"></script>
<script src="{{asset('Administration/vendor/flot-spline/jquery.flot.spline.min.js')}}" type="text/javascript"></script>
<script src="{{asset('Administration/vendor/jquery-sparkline/jquery.sparkline.min.js')}}" type="text/javascript"></script>
<script src="{{asset('Administration/js/plugins-init/sparkline-init.js')}}" type="text/javascript"></script>
<script src="{{asset('Administration/vendor/peity/jquery.peity.min.js')}}" type="text/javascript"></script>
<script src="{{asset('Administration/js/plugins-init/piety-init.js')}}" type="text/javascript"></script>
<script src="{{asset('Administration/js/plugins-init/widgets-script-init.js')}}" type="text/javascript"></script>
<script src="{{asset('Administration/js/custom.js')}}" type="text/javascript"></script>
@livewireScripts
<script>
    window.onload = function (){
        document.querySelector('#main-wrapper > div.header > div > nav > div > ul > li:nth-child(1) > a').click();
    }
</script>
</body>

</html>
