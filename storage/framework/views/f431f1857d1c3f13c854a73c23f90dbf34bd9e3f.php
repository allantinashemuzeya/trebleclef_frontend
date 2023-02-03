<?php $__env->startSection('content'); ?>

    <style>
        #pricing-plan > div.row.pricing-card > div > div > div > div > div > div > div > span {
            color: #ede3e3 !important;
        }

        #pricing-plan > div.row.pricing-card > div > div > div > div > div > div > div > sup {
            color: #ede7e7 !important;
        }


    </style>

    <!-- BEGIN: Content-->
    <div class="app-content content ecommerce-application m-0">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Registration Payment</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Subscription</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="">Registration Fee</a>
                                    </li>
                                    <li class="breadcrumb-item active">Details
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body"><!-- app e-commerce details start -->
                <section class="app-ecommerce-details">
                    <div class="card">
                        <!-- Product Details starts -->
                        <div class="card-body">
                            <div class="row my-2">
                                <div class="col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="col-12 col-md-12">
                                            <div class="card standard-pricing popular text-center">
                                                <div class="card-body">
                                                    <div class="pricing-badge text-end">
                                                    </div>
                                                    <img src="<?php echo e(asset('app-assets/images/pay_plan_icon.png')); ?>"
                                                            class="mb-1" alt="svg img" height="220px" width="220px"/>
                                                    <h3><?php echo e($pay_plan['title']); ?></h3>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-7">
                                    <h2><?php echo e($pay_plan['title']); ?></h2>
                                    <div class="ecommerce-details-price d-flex flex-wrap mt-1">
                                        <h4 class="item-price me-1">R<?php echo e($pay_plan['price']); ?></h4>
                                    </div>
                                    <p class="card-text">
                                        <?php echo e($pay_plan['description']); ?>

                                    </p>
                                    <ul class="product-features list-unstyled">

                                    </ul>
                                    <hr />
                                    <div class="d-flex flex-column flex-sm-row pt-1">
                                        <button id="checkout-button" onclick="pay(<?php echo e(json_encode($pay_plan)); ?>)" class="btn btn-primary me-0 me-sm-1 mb-1 mb-sm-0">
                                            <i data-feather="shopping-cart" class="me-50"></i>
                                            <span  class="">Double tap to pay</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product Details ends -->

                    </div>
                </section>
                <!-- app e-commerce details end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <!-- Include the Yoco SDK in your web page -->
    <script src="https://js.yoco.com/sdk/v1/yoco-sdk-web.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="<?php echo e(asset('js/notiflix/dist/notiflix-3.2.5.min.js')); ?>"></script>

    <!-- Create a pay button that will open the popup-->
    
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script>
        function pay(pay_plan){
            

            let yoco = new window.YocoSDK({
                publicKey: "<?php echo env('YOCO_TEST_PUBLIC_KEY'); ?>",
            });
            let checkoutButton = document.querySelector('#checkout-button');
            checkoutButton.addEventListener('click', function () {
                yoco.showPopup({
                    amountInCents: pay_plan['price'] * 100 ,
                    currency: 'ZAR',
                    name: '',
                    description: '',
                    callback: async  (result) =>{
                        // This function returns a token that your server can use to capture a payment
                        if (result.error) {
                            const errorMessage = result.error.message;
                            alert("error occured: " + errorMessage);
                        } else {

                            Notiflix.Notify.info('Please wait while we process your payment...',
                                {
                                    timeout: 2000,
                                    position: 'center-center',
                                    cssAnimationStyle: 'from-right',
                                    cssAnimationDuration: 500,
                                    useGoogleFont: true,
                                    fontFamily: 'Roboto',
                                    fontSize: '16px',
                                },
                            )
                            const results = await axios.post('/payfees/process-payment',
                                {'payplan': pay_plan, '_token': '<?php echo e(csrf_token()); ?>','cardToken':result.id},
                            );

                            // e.g. Message with the new options
                            if(results.data === 'successful'){
                                Notiflix.Notify.success(
                                    'Payment Successful, Awesome, well Done!!',
                                    {
                                        timeout: 10000,
                                        position: 'center-center',
                                        cssAnimationStyle: 'from-left',
                                        cssAnimationDuration: 1000,
                                        useGoogleFont: true,
                                        fontFamily: 'comfortaa',
                                        fontSize: '18px',
                                    },
                                )
                                window.location.href = '/dashboard';
                            }else{
                                Notiflix.Notify.failure('Something went wrong. We are working on it!');
                            }
                        }
                    }
                })
            });
        }
    </script>


<?php $__env->stopSection(); ?>














<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/dev/resources/views/auth/subscription.blade.php ENDPATH**/ ?>