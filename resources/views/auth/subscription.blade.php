@extends('layouts.login')
@section('content')
    <style>
        .reg-title {
            width: 35%;
            border-radius: 20px;
            text-align: center;
            padding: 3px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>

    <div class="auth-wrapper auth-v2">
        <div class="auth-inner row m-0">

            <div class="d-flex col-lg-12 align-items-center auth-bg px-2 p-lg-12">
                <div style="overflow-y: scroll;height: 90vh;" class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">

                    <style>
                        #pricing-plan > div.row.pricing-card > div > div > div > div > div > div > div > span {
                            color: #5e5773 !important;
                        }

                        #pricing-plan > div.row.pricing-card > div > div > div > div > div > div > div > sup {
                            color: #5e5773 !important;
                        }

                        #pricing-plan > div.row.pricing-card > div > div > div > div > div > div.annual-plan > div{
                            font-size: 3rem;
                        }


                    </style>

                    <!-- BEGIN: Content-->
                    <div class="app-content content m-0">
                        <div class="content-overlay"></div>
                        <div class="header-navbar-shadow"></div>
                        <div class="content-wrapper container-xxl p-0">
                            <div class="content-header row">
                            </div>
                            <div class="content-body">
                                <section id="pricing-plan">
                                    <!-- title text and switch button -->
                                    <div class="text-center">
                                        <h1 class="mt-5">Please choose a subscription package to complete registration</h1>
                                        <p class="mb-2 pb-75">
                                            All plans include 40+ advanced tools and features to boost your product. Choose the best
                                            plan to fit your needs.
                                        </p>
                                        {{--                        <div class="d-flex align-items-center justify-content-center mb-5 pb-50">--}}
                                        {{--                            <h6 class="me-1 mb-0">Monthly</h6>--}}
                                        {{--                            <div class="form-check form-switch">--}}
                                        {{--                                <input type="checkbox" class="form-check-input" id="priceSwitch" />--}}
                                        {{--                                <label class="form-check-label" for="priceSwitch"></label>--}}
                                        {{--                            </div>--}}
                                        {{--                            <h6 class="ms-50 mb-0">Annually</h6>--}}
                                        {{--                        </div>--}}
                                    </div>
                                    <!--/ title text and switch button -->

                                    <!-- pricing plan cards -->
                                    <div class="row pricing-card">
                                        <div class="col-12 col-sm-offset-2 col-sm-10 col-md-12 col-lg-offset-2 col-lg-10 mx-auto">
                                            <div class="row">

                                                <!-- standard plan -->
                                                @foreach($pay_plans as $pay_plan)

                                                    <div class="col-12 col-md-4">
                                                        <div class="card standard-pricing popular text-center">
                                                            <div class="card-body">
                                                                <div class="pricing-badge text-end">
                                                                    {{--                                                    <span class="badge rounded-pill badge-light-primary">Popular</span>--}}
                                                                </div>
                                                                <img
                                                                        src="{{asset('app-assets/images/pay_plan_icon.png')}}"
                                                                        class="mb-1" alt="svg img" height="220px" width="220px"/>
                                                                <h3>{{$pay_plan['title']}}</h3>
                                                                {{--                                            <p class="card-text">For small to medium businesses</p>--}}
                                                                <div class="annual-plan">
                                                                    <div class="plan-price mt-2">
                                                                        <sup class="font-medium-1 fw-bold text-primary">R</sup>
                                                                        <span
                                                                                class="pricing-standard-value fw-bolder text-primary">{{$pay_plan['price']}}</span>
                                                                        {{--<sub class="pricing-duration text-body font-medium-1 fw-bold">/month</sub>--}}
                                                                    </div>
                                                                    <small class="annual-pricing d-none text-muted">{{$pay_plan['description']}}</small>
                                                                </div>
                                                                <ul class="list-group list-group-circle text-start">
                                                                    {{--  <li class="list-group-item">Unlimited responses</li>--}}
                                                                    {{--  <li class="list-group-item">Unlimited forms and surveys</li>--}}
                                                                    {{--  <li class="list-group-item">Instagram profile page</li>--}}
                                                                    {{--  <li class="list-group-item">Google Docs integration</li>--}}
                                                                    {{--  <li class="list-group-item">Custom “Thank you” page</li>--}}
                                                                </ul>
                                                                {{--                                                <a href="{{$pay_plan['payment_link']}}" id="checkout-button" class="btn w-100 btn-primary mt-2">Pay now</a>--}}
                                                                <a  href="{{route('pay-fees',$pay_plan['id'] )}}" class="btn w-100 btn-primary mt-2">View</a>

                                                                <br/>
                                                                <br/>
                                                                <div class="alert alert-danger" role="alert">
                                                                    <h4 class="alert-heading">Please make sure to use your<br/> Treble Clef App email address as<br/> reference on checkout page.</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                @endforeach
                                                <!--/ standard plan -->


                                            </div>
                                        </div>
                                    </div>
                                    <!--/ pricing plan cards -->
                                </section>

                                <br />

                            </div>
                        </div>
                    </div>
                    <!-- END: Content-->


                </div>
            </div>
            <!-- /Login-->
        </div>
    </div>

@endsection
<!-- @push('scripts')
    This will be second...
@endpush -->
@push('select2')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(window).on('load', function () {
            if (feather) {
                feather.replace({width: 14, height: 14});
            }
        })
        $(document).ready(function () {
            $('.js-example-basic-single').select2();
        });
    </script>
@endpush


