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
                    
                        
                        
                        
                        
                        
                        
                        
                        
                    </div>
                    <!--/ title text and switch button -->

                    <!-- pricing plan cards -->
                    <div class="row pricing-card">
                        <div class="col-12 col-sm-offset-2 col-sm-10 col-md-12 col-lg-offset-2 col-lg-10 mx-auto">
                            <div class="row">

                                <!-- standard plan -->
                             <?php $__currentLoopData = $pay_plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pay_plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <div class="col-12 col-md-4">
                                        <div class="card standard-pricing popular text-center">
                                            <div class="card-body">
                                                <div class="pricing-badge text-end">

                                                </div>
                                                <img
                                                    src="<?php echo e(asset('app-assets/images/pay_plan_icon.png')); ?>"
                                                    class="mb-1" alt="svg img" height="220px" width="220px"/>
                                                <h3><?php echo e($pay_plan['title']); ?></h3>
                                                
                                                <div class="annual-plan">
                                                    <div class="plan-price mt-2">
                                                        <sup class="font-medium-1 fw-bold text-primary">R</sup>
                                                        <span
                                                            class="pricing-standard-value fw-bolder text-primary"><?php echo e($pay_plan['price']); ?></span>
                                                        
                                                    </div>
                                                    <small class="annual-pricing d-none text-muted"><?php echo e($pay_plan['description']); ?></small>
                                                </div>
                                                <ul class="list-group list-group-circle text-start">
                                                    
                                                    
                                                    
                                                    
                                                    
                                                </ul>

                                                <a  href="<?php echo e(route('pay-fees',$pay_plan['id'] )); ?>" class="btn w-100 btn-primary mt-2">View</a>

                                                <br/>
                                                <br/>
                                                <div class="alert alert-danger" role="alert">
                                                    <h4 class="alert-heading">Please make sure to use your<br/> Treble Clef App email address as<br/> reference on checkout page.</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/dev/resources/views/fees.blade.php ENDPATH**/ ?>