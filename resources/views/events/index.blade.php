<!DOCTYPE html>
<!--
Template Name: Vuexy - Vuejs, HTML & Laravel Admin Dashboard Template
Author: PixInvent
Website: http://www.pixinvent.com/
Contact: hello@pixinvent.com
Follow: www.twitter.com/pixinvents
Like: www.facebook.com/pixinvents
Purchase: https://1.envato.market/vuexy_admin
Renew Support: https://1.envato.market/vuexy_admin
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.

-->
<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->

<!-- Mirrored from pixinvent.com/demo/vuexy-html-bootstrap-admin-template/html/ltr/vertical-menu-template-dark/dashboard-ecommerce.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Aug 2021 05:09:15 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard ecommerce - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.html">
    <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/toastr.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/components.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/bordered-layout.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/semi-dark-layout.min.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/dashboard-ecommerce.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/charts/chart-apex.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/extensions/ext-component-toastr.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">


@extends('layouts.home')
@section('content')
    <!-- BEGIN: Content-->

    <style>
        #dashboard-ecommerce > div > div > div > div.item-options.text-center > a{
            width: 100%;
        }
    </style>

    <div class="content-header">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-start mb-0">Events</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index-2.html">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">EVENTS</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="app-content content m-0">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">

            <div class="content-body">

                <!-- Dashboard Ecommerce Starts -->
                <section id="dashboard-ecommerce">


                    <div class="row match-height">


                        @foreach($events as $event)
                            <!-- Developer Meetup Card -->
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="card card-developer-meetup">
                                    <div class="meetup-img-wrapper rounded-top text-center">
                                        <img src="{{$event['event_banner']}}" alt="Meeting Pic" height="170" width="100%" />
                                    </div>
                                    <div class="card-body">
                                        <div class="meetup-header d-flex align-items-center">
                                            <div class="meetup-day">
                                                <h6 class="mb-0">{{substr(strtoupper(\Illuminate\Support\Carbon::parse($event['start_date'])->dayName), 0,3)}}</h6>
                                                <h3 class="mb-0">
                                                    {{\Illuminate\Support\Carbon::parse($event['start_date'])->day}}</h3>
                                            </div>
                                            <div class="my-auto">
                                                <h4 class="card-title mb-25">{{$event['title']}}</h4>
                                                <p class="card-text mb-0">{{$event['sub_title']}}</p>
                                            </div>
                                        </div>
                                        <sup>FROM</sup>

                                        <div class="mt-0">
                                            <div class="avatar float-start bg-light-primary rounded me-1">
                                                <div class="avatar-content">
                                                    <i data-feather="calendar" class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div class="more-info">
                                                <h6 class="mb-0"> {{\Illuminate\Support\Carbon::parse($event['start_date'])->isoFormat(' ddd  DD MMM YYYY')}}</h6>
                                                <small>{{\Illuminate\Support\Carbon::parse($event['start_date'])->isoFormat('HH:MM')}}</small>
                                            </div>
                                        </div>

                                        <br/>

                                        <sup>TO</sup>

                                        <div class="mt-0">
                                            <div class="avatar float-start bg-light-primary rounded me-1">
                                                <div class="avatar-content">
                                                    <i data-feather="calendar" class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div class="more-info">
                                                <h6 class="mb-0"> {{\Illuminate\Support\Carbon::parse($event['end_date'])->isoFormat(' ddd  DD MMM YYYY')}}</h6>
                                                <small>{{\Illuminate\Support\Carbon::parse($event['end_date'])->isoFormat('HH:MM')}}</small>
                                            </div>
                                        </div>

                                        <br/>
                                        <sup>VENUE</sup>
                                        <div class="">
                                            <div class="avatar float-start bg-light-primary rounded me-1">
                                                <div class="avatar-content">
                                                    <i data-feather="map-pin" class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div class="more-info">
                                                <h6 class="mb-0">{{$event['venue']}}</h6>
                                                <small>{{$event['venue_address']}}</small>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="item-options text-center">
{{--                                        <a  class="btn event-modal-button   btn-primary btn-cart" data-details="{{Js::from($event)}}"  data-bs-toggle="modal" data-bs-target="#viewEvent">--}}
                                        <a href="{{route('event', $event['id'])}}" class="btn event-modal-button btn-primary btn-cart">
                                            <i data-feather="bell"></i>
                                            <span class="add-to-cart">View {{$event['title']}}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--/ Developer Meetup Card -->
                        @endforeach

                    </div>

                        <!-- Modal -->
                        <div class="modal fade" id="viewEvent" tabindex="-1" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-fullscreen" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalFullTitle">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                            Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                            egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                        </p>
                                        <p>
                                            Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel
                                            augue laoreet rutrum faucibus dolor auctor.
                                        </p>
                                        <p>
                                            Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque
                                            nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
                                        </p>
                                        <p>
                                            Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                            egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                        </p>
                                        <p>
                                            Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel
                                            augue laoreet rutrum faucibus dolor auctor.
                                        </p>
                                        <p>
                                            Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque
                                            nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
                                        </p>
                                        <p>
                                            Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                            egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                        </p>
                                        <p>
                                            Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel
                                            augue laoreet rutrum faucibus dolor auctor.
                                        </p>
                                        <p>
                                            Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque
                                            nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
                                        </p>
                                        <p>
                                            Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                            egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                        </p>
                                        <p>
                                            Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel
                                            augue laoreet rutrum faucibus dolor auctor.
                                        </p>
                                        <p>
                                            Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque
                                            nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
                                        </p>
                                        <p>
                                            Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                            egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                        </p>
                                        <p>
                                            Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel
                                            augue laoreet rutrum faucibus dolor auctor.
                                        </p>
                                        <p>
                                            Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque
                                            nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
                                        </p>
                                        <p>
                                            Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                            egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                        </p>
                                        <p>
                                            Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel
                                            augue laoreet rutrum faucibus dolor auctor.
                                        </p>
                                        <p>
                                            Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque
                                            nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-label-secondary waves-effect waves-float waves-light" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary waves-effect waves-float waves-light">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </section>
                <!-- Dashboard Ecommerce ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
<script>

    $(".event-modal-button").on('click', function() {
       console.log( $(this).data('details'))
    });
</script>
@endsection

<!-- BEGIN: Vendor JS-->
<script src="../../../app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="../../../app-assets/vendors/js/charts/apexcharts.min.js"></script>
<script src="../../../app-assets/vendors/js/extensions/toastr.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="../../../app-assets/js/core/app-menu.min.js"></script>
<script src="../../../app-assets/js/core/app.min.js"></script>
<script src="../../../app-assets/js/scripts/customizer.min.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="../../../app-assets/js/scripts/pages/dashboard-ecommerce.min.js"></script>
<!-- END: Page JS-->

<script>
    $(window).on('load',  function(){
        if (feather) {
            feather.replace({ width: 14, height: 14 });
        }
    })



</script>
</body>
<!-- END: Body-->

<!-- Mirrored from pixinvent.com/demo/vuexy-html-bootstrap-admin-template/html/ltr/vertical-menu-template-dark/dashboard-ecommerce.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Aug 2021 05:09:15 GMT -->
</html>
