@extends('layouts.home')
@section('content')

    <style>
        #pricing-plan > div.row.pricing-card > div > div > div > div > div > div > div > span {
            color: #ede3e3 !important;
        }

        #pricing-plan > div.row.pricing-card > div > div > div > div > div > div > div > sup {
            color: #ede7e7 !important;
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
                        <h1 class="mt-5">Pricing Plans</h1>
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
                                                <a href="{{$pay_plan['payment_link']}}" class="btn w-100 btn-primary mt-2">Pay now</a>

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

                    <!-- pricing free trial -->
{{--                    <div class="pricing-free-trial">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-12 col-lg-10 col-lg-offset-3 mx-auto">--}}
{{--                                <div class="pricing-trial-content d-flex justify-content-between">--}}
{{--                                    <div class="text-center text-md-start mt-3">--}}
{{--                                        <h3 class="text-primary">Still not convinced? Start with a 14-day FREE--}}
{{--                                            trial!</h3>--}}
{{--                                        <h5>You will get full access to with all the features for 14 days.</h5>--}}
{{--                                        <button class="btn btn-primary mt-2 mt-lg-3">Start 14-day FREE trial</button>--}}
{{--                                    </div>--}}

{{--                                    <!-- image -->--}}
{{--                                    <img--}}
{{--                                        src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/illustration/pricing-Illustration.svg"--}}
{{--                                        class="pricing-trial-img img-fluid"--}}
{{--                                        alt="svg img"--}}
{{--                                    />--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <!--/ pricing free trial -->

                    <!-- pricing faq -->
{{--                    <div class="pricing-faq">--}}
{{--                        <h3 class="text-center">FAQ's</h3>--}}
{{--                        <p class="text-center">Let us help answer the most common questions.</p>--}}
{{--                        <div class="row my-2">--}}
{{--                            <div class="col-12 col-lg-10 col-lg-offset-2 mx-auto">--}}
{{--                                <!-- faq collapse -->--}}
{{--                                <div class="accordion accordion-margin" id="accordionExample">--}}
{{--                                    <div class="card accordion-item">--}}
{{--                                        <h2 class="accordion-header" id="headingOne">--}}
{{--                                            <button--}}
{{--                                                class="accordion-button collapsed"--}}
{{--                                                data-bs-toggle="collapse"--}}
{{--                                                role="button"--}}
{{--                                                data-bs-target="#collapseOne"--}}
{{--                                                aria-expanded="false"--}}
{{--                                                aria-controls="collapseOne"--}}
{{--                                            >--}}
{{--                                                Does my subscription automatically renew?--}}
{{--                                            </button>--}}
{{--                                        </h2>--}}

{{--                                        <div--}}
{{--                                            id="collapseOne"--}}
{{--                                            class="accordion-collapse collapse"--}}
{{--                                            aria-labelledby="headingOne"--}}
{{--                                            data-bs-parent="#accordionExample"--}}
{{--                                        >--}}
{{--                                            <div class="accordion-body">--}}
{{--                                                Pastry pudding cookie toffee bonbon jujubes jujubes powder topping.--}}
{{--                                                Jelly beans gummi bears sweet roll--}}
{{--                                                bonbon muffin liquorice. Wafer lollipop sesame snaps. Brownie macaroon--}}
{{--                                                cookie muffin cupcake candy--}}
{{--                                                caramels tiramisu. Oat cake chocolate cake sweet jelly-o brownie biscuit--}}
{{--                                                marzipan. Jujubes donut--}}
{{--                                                marzipan chocolate bar. Jujubes sugar plum jelly beans tiramisu icing--}}
{{--                                                cheesecake.--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="card accordion-item">--}}
{{--                                        <h2 class="accordion-header" id="headingTwo">--}}
{{--                                            <button--}}
{{--                                                class="accordion-button collapsed"--}}
{{--                                                data-bs-toggle="collapse"--}}
{{--                                                role="button"--}}
{{--                                                data-bs-target="#collapseTwo"--}}
{{--                                                aria-expanded="false"--}}
{{--                                                aria-controls="collapseTwo"--}}
{{--                                            >--}}
{{--                                                Can I store the item on an intranet so everyone has access?--}}
{{--                                            </button>--}}
{{--                                        </h2>--}}
{{--                                        <div--}}
{{--                                            id="collapseTwo"--}}
{{--                                            class="accordion-collapse collapse"--}}
{{--                                            aria-labelledby="headingTwo"--}}
{{--                                            data-bs-parent="#accordionExample"--}}
{{--                                        >--}}
{{--                                            <div class="accordion-body">--}}
{{--                                                Tiramisu marshmallow dessert halvah bonbon cake gingerbread. Jelly beans--}}
{{--                                                chocolate pie powder. Dessert--}}
{{--                                                pudding chocolate cake bonbon bear claw cotton candy cheesecake. Biscuit--}}
{{--                                                fruitcake macaroon carrot cake.--}}
{{--                                                Chocolate cake bear claw muffin chupa chups pudding.--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="card accordion-item">--}}
{{--                                        <h2 class="accordion-header" id="headingThree">--}}
{{--                                            <button--}}
{{--                                                class="accordion-button collapsed"--}}
{{--                                                data-bs-toggle="collapse"--}}
{{--                                                role="button"--}}
{{--                                                data-bs-target="#collapseThree"--}}
{{--                                                aria-expanded="false"--}}
{{--                                                aria-controls="collapseThree"--}}
{{--                                            >--}}
{{--                                                Am I allowed to modify the item that I purchased?--}}
{{--                                            </button>--}}
{{--                                        </h2>--}}
{{--                                        <div--}}
{{--                                            id="collapseThree"--}}
{{--                                            class="accordion-collapse collapse"--}}
{{--                                            aria-labelledby="headingThree"--}}
{{--                                            data-bs-parent="#accordionExample"--}}
{{--                                        >--}}
{{--                                            <div class="accordion-body">--}}
{{--                                                Tart gummies dragée lollipop fruitcake pastry oat cake. Cookie jelly--}}
{{--                                                jelly macaroon icing jelly beans--}}
{{--                                                soufflé cake sweet. Macaroon sesame snaps cheesecake tart cake sugar--}}
{{--                                                plum. Dessert jelly-o sweet muffin--}}
{{--                                                chocolate candy pie tootsie roll marzipan. Carrot cake marshmallow--}}
{{--                                                pastry. Bonbon biscuit pastry topping--}}
{{--                                                toffee dessert gummies. Topping apple pie pie croissant cotton candy--}}
{{--                                                dessert tiramisu.--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <!--/ pricing faq -->
                </section>

                <br />

            </div>
        </div>
    </div>
    <!-- END: Content-->

@endsection
