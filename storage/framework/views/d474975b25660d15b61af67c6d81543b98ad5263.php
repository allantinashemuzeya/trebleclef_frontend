<?php $__env->startSection('content'); ?>


    <style>
        #component-swiper-progress > div > div.card-header > h1 {
            /* margin-left:82%; */
        }

        #component-swiper-progress > div {
            /*min-height:597px;*/
        }

        @media (max-width: 568px) {

            #component-swiper-progress {
                /* position: absolute;
                top: -190vh;    */
                padding: 0;
                margin: auto;
                left: 0;
                right: 0;
            }

            #component-swiper-progress > div {
                min-height: 46px !important;
                height: auto !important;
            }

            #component-swiper-progress > div {
                padding: 0px;
            }
        }

        div.swiper-slide.swiper-slide-active {
            width: calc(50% + 89px);
        }

        #dashboard-analytics > div:nth-child(2) > div.col-lg-4.col-md-6.col-12 {
            margin-top: 48px;
        }

        #dashboard-analytics > div > div > div > div > a.btn.btn-primary.btn-cart.waves-effect.waves-float.waves-light {
            width: 100%;
        }
    </style>


    <!-- Dashboard Analytics Start -->
    <section id="dashboard-analytics">

        <div class="row match-height">

            <div class="col-lg-3 col-md-12 col-sm-12">
                <a href="<?php echo e(route('office-fees')); ?>">
                    <div class="card card-congratulations" style="background-size: cover">
                        <div class="card-body text-center">

                            <div class="avatar avatar-xl bg-primary shadow">
                                <div class="avatar-content">
                                    <i class="font-large-1" data-feather="bell"></i>
                                </div>
                            </div>
                            <div class="text-center">
                            </div>
                        </div>
                        <div class="item-options text-center">
                            <a href="<?php echo e(route('office-fees')); ?>" class="btn btn-primary btn-cart">
                                <i data-feather="book-open"></i>
                                <span class="">Pay School Fees </span>
                            </a>
                        </div>
                    </div>
                </a>
            </div>




            <!-- Greetings Card ends -->

        </div>
    </section>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/dev/resources/views/office.blade.php ENDPATH**/ ?>