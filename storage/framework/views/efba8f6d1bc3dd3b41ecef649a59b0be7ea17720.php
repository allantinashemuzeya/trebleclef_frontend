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

        @media screen and (min-width: 769px) {

            #dashboard-analytics > div:nth-child(2) > div.col-lg-4.col-md-6.col-12 > a > div {
                margin-top: -10%;
            }

            #dashboard-analytics > div:nth-child(2) > div.col-lg-4.col-md-6.col-12 > a > div > div > iframe {
                margin-top: -16%;
                margin-left: -10%;
                width: 120%;
                margin-bottom: -6%;
                box-shadow: black 9px -1px 3px 3px;
                opacity: 1.5;
            }
        }


    </style>

    <div class="content-body">

        <?php if(empty($currentUser->profile_picture)): ?>
            <div class="col-12 mt-75">

                <div class="alert alert-danger mb-50" role="alert">
                    <h4 class="alert-heading text-center">Please finish setting up your <a href="<?php echo e(route('profile')); ?>">account!</a>
                    </h4>
                </div>
            </div>

        <?php elseif(empty($currentUser->bio)): ?>
            <div class="col-12 mt-75">

                <div class="alert alert-warning mb-50" role="alert">
                    <h4 class="alert-heading text-center">Please update your Bio in <a href="<?php echo e(route('profile')); ?>">account
                            settings</a>
                    </h4>
                </div>
            </div>
        <?php endif; ?>


        <!-- Dashboard Analytics Start -->
        <section id="dashboard-analytics">


            <?php if($draggableSliderContent['sliderType'] === 'standard'): ?>

                <!-- Responsive Breakpoints swiper  #Not-Standard-->
                <section id="component-swiper-responsive-breakpoints">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"><?php echo e($draggableSliderContent['sliderTitle']); ?></h4>
                        </div>
                        <div class="card-body">
                            <div class="swiper-responsive-breakpoints swiper-container">
                                <div class="swiper-wrapper">

                                    <?php $__currentLoopData = $draggableSliderContent['content']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <div class="swiper-slide">
                                            <?php if($item['type'] === 'video/mp4'): ?>
                                                <video class="" autoplay controls muted loop style="border-radius:10px">
                                                    <source src="<?php echo e($item['file']); ?>" type="video/mp4"/>
                                                </video>
                                            <?php else: ?>
                                                <img class="img-fluid" src="<?php echo e($item['file']); ?>" alt=""/>
                                            <?php endif; ?>
                                        </div>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div>
                                <!-- Add Pagination -->
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Responsive Breakpoints swiper -->

                <?php elseif($draggableSliderContent['sliderType'] === 'autoplay'): ?>
                <section id="component-swiper-autoplay" >
                    <div class="card">



                        <div class="card-body">
                            <div class="swiper-autoplay swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events" style="max-height:400px">
                                <div class="swiper-wrapper" id="swiper-wrapper-3b3adefa5ac7ceb6" aria-live="off" style="transform: translate3d(-1446px, 0px, 0px); transition-duration: 0ms;">

                                    <?php $__currentLoopData = $draggableSliderContent['content']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="swiper-slide" aria-label="1 / 6">
                                            <?php if($item['type'] === 'video/mp4'): ?>
                                                <video class="img-fluid" autoplay controls muted loop
                                                       style="border-radius:10px; ">
                                                    <source src="<?php echo e($item['file']); ?>" type="video/mp4"/>
                                                </video>
                                            <?php else: ?>
                                                <img class="img-fluid" src="<?php echo e($item['file']); ?>" alt="" style="width: 100%"/>
                                            <?php endif; ?>
                                        </div>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div>
                                <!-- Add Pagination -->
                                <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 6"></span></div>
                                <!-- Add Arrows -->
                                <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-3b3adefa5ac7ceb6" aria-disabled="false"></div>
                                <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-3b3adefa5ac7ceb6" aria-disabled="false"></div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                        </div>
                    </div>
                </section>
            <?php else: ?>

                <!-- coverflow 3D effect swiper -->
                <section id="component-swiper-coverflow">
                    <div class="card" style="background: linear-gradient(45deg, black, #a5171738);">
                        <div class="card-header">
                            <h4 class="card-title"><?php echo e($draggableSliderContent['sliderTitle']); ?></h4>
                        </div>
                        <div class="card-body">
                            <div class="swiper-coverflow swiper-container autoplay" style="perspective: 1185px;">
                                <div class="swiper-wrapper">
                                    <?php $__currentLoopData = $draggableSliderContent['content']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <div class="swiper-slide">
                                            <?php if($item['type'] === 'video/mp4'): ?>
                                                <video class="img-fluid" autoplay controls muted loop
                                                       style="border-radius:10px">
                                                    <source src="<?php echo e($item['file']); ?>" type="video/mp4"/>
                                                </video>
                                            <?php else: ?>
                                                <img class="img-fluid" src="<?php echo e($item['file']); ?>" alt=""/>
                                            <?php endif; ?>
                                        </div>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <!-- Add Pagination -->
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ coverflow effect swiper -->
            <?php endif; ?>

            <!-- Swiper -->
            <div class="row match-height">
                <!-- Greetings Card starts -->
                <?php if(!empty($currentUser->profile_picture)): ?>
                    <div class="col-lg-4 col-md-6 col-12">
                        <a href="<?php echo e(route('profile')); ?>">

                            <div class="card card-profile">
                                <!-- <img src="<?php echo e(asset('storage/profilePictures/'.$currentUser->cover_image)); ?>" class="img-fluid card-img-top" alt="Profile Cover Photo"> -->
                                <div class="card-body">
                                    <iframe src="<?php echo e(env('APP_URL').'/chatify'); ?>" title="" width="100%" height="700px">
                                    </iframe>
                                    
                                    
                                    
                                    
                                    
                                    
                                    

                                    
                                    
                                    
                                    
                                    
                                    

                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    

                                    

                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    


                                </div>
                            </div>
                        </a>

                    </div>
                <?php endif; ?>



                <div
                    class="<?php echo e(!empty($currentUser->profile_picture) ? 'col-lg-8 col-md-12 col-sm-12' : 'col-lg-12 col-md-12 col-sm-12'); ?>">

                    <div class="card card-congratulations" style="background: linear-gradient(45deg, black, #1f0808);">

                        <div class="card-body text-center">
                            
                            <section id="component-swiper-gallery">
                                <div class="card">
                                    <div class="card-header">
                                        <h2 class="card-title text-center" style="left: 44%;
    position: absolute;">Treble Clef Tv</h2>

                                    </div>
                                    <div class="card-body">
                                        <div class="swiper-gallery swiper-container gallery-top swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                                            <div class="swiper-wrapper" id="swiper-wrapper-7fb93a4b8b948735"
                                                 aria-live="polite"
                                                 style="transform: translate3d(-4224px, 0px, 0px); transition-duration: 0ms;">

                                                <?php $__currentLoopData = $trebleClefTvContent['content']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                    <?php if($item['type'] === 'video/mp4' || $item['type'] === 'video/quicktime' ): ?>

                                                        <div class="swiper-slide" role="group"
                                                             aria-label="1 / 5"
                                                             style="width: 1398px; margin-right: 10px;">

                                                                <video class="img-fluid"
                                                                       controls muted loop autoplay
                                                                       style="padding-right:2px">
                                                                    <source src="<?php echo e($item['file']); ?>" type="video/mp4"/>
                                                                </video>
                                                        </div>

                                                    <?php else: ?>
                                                        <div class="swiper-slide" role="group"
                                                             aria-label="1 / 5">
                                                            <img class="img-fluid" src="<?php echo e($item['file']); ?>"
                                                                 alt="banner">
                                                        </div>
                                                    <?php endif; ?>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </div>

                                            <!-- Add Arrows -->
                                            <div class="swiper-button-next" tabindex="0" role="button"
                                                 aria-label="Next slide"
                                                 aria-controls="swiper-wrapper-7fb93a4b8b948735"
                                                 aria-disabled="false"></div>
                                            <div class="swiper-button-prev" tabindex="0" role="button"
                                                 aria-label="Previous slide"
                                                 aria-controls="swiper-wrapper-7fb93a4b8b948735"
                                                 aria-disabled="false"></div>
                                            <span class="swiper-notification" aria-live="assertive"
                                                  aria-atomic="true">

                                            </span>
                                        </div>
                                        <div
                                            class="swiper-container gallery-thumbs swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events swiper-container-free-mode swiper-container-thumbs">
                                            <div class="swiper-wrapper mt-25"
                                                 id="swiper-wrapper-10afee6a10d085e9c4" aria-live="polite"
                                                 style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">


                                                <?php $__currentLoopData = $trebleClefTvContent['content']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($item['type'] === 'video/mp4' || $item['type'] === 'video/quicktime' || $item['type'] === 'video/mov'  ): ?>

                                                        <div
                                                            class="swiper-slide swiper-slide-visible swiper-slide-active"
                                                            role="group" aria-label="1 / 5"
                                                            style="width: 342px; margin-right: 10px;">
                                                            <video class="img-fluid"
                                                                   controls muted loop
                                                                   style="padding-right:2px">
                                                                <source src="<?php echo e($item['file']); ?>"  type="video/mp4"/>
                                                            </video>
                                                        </div>

                                                    <?php else: ?>

                                                        <div
                                                            class="swiper-slide swiper-slide-visible swiper-slide-active"
                                                            role="group" aria-label="1 / 5"
                                                            style="width: 342px; margin-right: 10px;">
                                                            <img class="img-fluid" src="<?php echo e($item['file']); ?>"
                                                                 alt="banner">
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </div>
                                            <span class="swiper-notification" aria-live="assertive"
                                                  aria-atomic="true"></span></div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row match-height jhfhjfhf">
                <?php $__currentLoopData = $navigationCards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nav_card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <?php if($nav_card['type'] === 'communications'): ?>
                        <div class="col-lg-3 col-md-12 col-sm-12">
                            <a href="<?php echo e(route('communications')); ?>">
                                <div class="card card-congratulations"
                                     style="background-image:url('<?php echo e($nav_card['background']); ?>'); background-size: cover">
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
                                        <a href="<?php echo e(route('communications')); ?>" class="btn btn-primary btn-cart">
                                            <i data-feather="book-open"></i>
                                            <span class=""><?php echo e($nav_card['cardTitle']); ?></span>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php elseif($nav_card['type'] === 'student_of_the_week'): ?>
                        <div class="col-lg-3 col-md-12 col-sm-12">
                            <a href="<?php echo e(route('student-of-the-week')); ?>">
                                <div class="card card-congratulations"
                                     style="background-image:url('<?php echo e($nav_card['background']); ?>'); background-size: cover">
                                    <div class="card-body text-center">

                                        <div class="avatar avatar-xl bg-primary shadow">
                                            <div class="avatar-content">
                                                <i class="font-large-1" data-feather="award"></i>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                        </div>
                                    </div>
                                    <div class="item-options text-center">
                                        <a href="<?php echo e(route('student-of-the-week')); ?>" class="btn btn-primary btn-cart">
                                            <i data-feather="book-open"></i>
                                            <span class=""><?php echo e($nav_card['cardTitle']); ?></span>
                                        </a>
                                    </div>
                                </div>

                            </a>
                        </div>
                    <?php elseif($nav_card['type'] === 'events'): ?>
                        <div class="col-lg-3 col-md-12 col-sm-12">
                            <a href="<?php echo e(route('events')); ?>">
                                <div class="card card-congratulations"
                                     style="background-image:url('<?php echo e($nav_card['background']); ?>'); background-size: cover">
                                    <div class="card-body text-center">

                                        <div class="avatar avatar-xl bg-primary shadow">
                                            <div class="avatar-content">
                                                <i class="font-large-1" data-feather="cast"></i>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                        </div>
                                    </div>
                                    <div class="item-options text-center">
                                        <a href="<?php echo e(route('events')); ?>" class="btn btn-primary btn-cart">
                                            <i data-feather="book-open"></i>
                                            <span class=""><?php echo e($nav_card['cardTitle']); ?></span>
                                        </a>
                                    </div>
                                </div>

                            </a>
                        </div>
                    <?php elseif($nav_card['type'] === 'networks'): ?>
                        <div class="col-lg-3 col-md-12 col-sm-12">
                            <a href="<?php echo e(route('networks')); ?>">
                                <div class="card card-congratulations"
                                     style="background-image:url('<?php echo e($nav_card['background']); ?>'); background-size: cover">
                                    <div class="card-body text-center">

                                        <div class="avatar avatar-xl bg-primary shadow">
                                            <div class="avatar-content">
                                                <i class="font-large-1" data-feather="git-branch"></i>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                        </div>
                                    </div>
                                    <div class="item-options text-center">
                                        <a href="<?php echo e(route('networks')); ?>" class="btn btn-primary btn-cart">
                                            <i data-feather="book-open"></i>
                                            <span class=""><?php echo e($nav_card['cardTitle']); ?></span>
                                        </a>
                                    </div>
                                </div>

                            </a>
                        </div>
                    <?php elseif($nav_card['type'] === 'newsletters'): ?>
                        <div class="col-lg-3 col-md-12 col-sm-12">
                            <a href="<?php echo e(route('communication-by-type', 'NewsLetter')); ?>">
                                <div class="card card-congratulations"
                                     style="background-image:url('<?php echo e($nav_card['background']); ?>'); background-size: cover">
                                    <div class="card-body text-center">

                                        <div class="avatar avatar-xl bg-primary shadow">
                                            <div class="avatar-content">
                                                <i class="font-large-1" data-feather="cast"></i>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                        </div>
                                    </div>
                                    <div class="item-options text-center">
                                        <a href="<?php echo e(route('communication-by-type', 'NewsLetter')); ?>"
                                           class="btn btn-primary btn-cart">
                                            <i data-feather="book-open"></i>
                                            <span class=""><?php echo e($nav_card['cardTitle']); ?></span>
                                        </a>
                                    </div>
                                </div>

                            </a>
                        </div>
                    <?php elseif($nav_card['type'] === 'competitions'): ?>
                        <div class="col-lg-3 col-md-12 col-sm-12">
                            <a href="<?php echo e(route('communication-by-type', 'Competitions')); ?>"
                            >
                                <div class="card card-congratulations"
                                     style="background-image:url('<?php echo e($nav_card['background']); ?>'); background-size: cover">
                                    <div class="card-body text-center">

                                        <div class="avatar avatar-xl bg-primary shadow">
                                            <div class="avatar-content">
                                                <i class="font-large-1" data-feather="award"></i>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                        </div>
                                    </div>
                                    <div class="item-options text-center">
                                        <a href="<?php echo e(route('communication-by-type', 'Competitions')); ?>"
                                           class="btn btn-primary btn-cart">
                                            <i data-feather="book-open"></i>
                                            <span class=""><?php echo e($nav_card['cardTitle']); ?></span>
                                        </a>
                                    </div>
                                </div>

                            </a></div>
                    <?php elseif($nav_card['type'] === 'calendar'): ?>
                        <div class="col-lg-3 col-md-12 col-sm-12">
                            <a href="<?php echo e(route('calendar')); ?>">
                                <div class="card card-congratulations"
                                     style="background-image:url('<?php echo e($nav_card['background']); ?>'); background-size: cover">
                                    <div class="card-body text-center">

                                        <div class="avatar avatar-xl bg-primary shadow">
                                            <div class="avatar-content">
                                                <i class="font-large-1" data-feather="calendar"></i>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                        </div>
                                    </div>
                                    <div class="item-options text-center">
                                        <a href="<?php echo e(route('calendar')); ?>" class="btn btn-primary btn-cart">
                                            <i data-feather="book-open"></i>
                                            <span class=""><?php echo e($nav_card['cardTitle']); ?></span>
                                        </a>
                                    </div>
                                </div>

                            </a>
                        </div>
                    <?php elseif($nav_card['type'] === 'classroom'): ?>
                        <div class="col-lg-3 col-md-12 col-sm-12">
                            <a href="<?php echo e(route('classroom')); ?>">
                                <div class="card card-congratulations"
                                     style="background-image:url('<?php echo e($nav_card['background']); ?>'); background-size: cover">
                                    <div class="card-body text-center">

                                        <div class="avatar avatar-xl bg-primary shadow">
                                            <div class="avatar-content">
                                                <i class="font-large-1" data-feather="book-open"></i>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                        </div>
                                    </div>
                                    <div class="item-options text-center">
                                        <a href="<?php echo e(route('classroom')); ?>" class="btn btn-primary btn-cart">
                                            <i data-feather="book-open"></i>
                                            <span class=""><?php echo e($nav_card['cardTitle']); ?></span>
                                        </a>
                                    </div>
                                </div>

                            </a>
                        </div>
                    <?php elseif($nav_card['type'] === 'foundation'): ?>
                        <div class="col-lg-3 col-md-12 col-sm-12">
                            <a href="<?php echo e(route('foundations')); ?>">
                                <div class="card card-congratulations"
                                     style="background-image:url('<?php echo e($nav_card['background']); ?>'); background-size: cover">
                                    <div class="card-body text-center">

                                        <div class="avatar avatar-xl bg-primary shadow">
                                            <div class="avatar-content">
                                                <i class="font-large-1" data-feather="heart"></i>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                        </div>
                                    </div>
                                    <div class="item-options text-center">
                                        <a href="<?php echo e(route('foundations')); ?>" class="btn btn-primary btn-cart">
                                            <i data-feather="book-open"></i>
                                            <span class=""><?php echo e($nav_card['cardTitle']); ?></span>
                                        </a>
                                    </div>
                                </div>

                            </a>
                        </div>
                    <?php elseif($nav_card['type'] === 'office'): ?>
                        <div class="col-lg-3 col-md-12 col-sm-12">
                            <a href="<?php echo e(route('office')); ?>">
                                <div class="card card-congratulations"
                                     style="background-image:url('<?php echo e($nav_card['background']); ?>'); background-size: cover">
                                    <div class="card-body text-center">

                                        <div class="avatar avatar-xl bg-primary shadow">
                                            <div class="avatar-content">
                                                <i class="font-large-1" data-feather="file-text"></i>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                        </div>
                                    </div>
                                    <div class="item-options text-center">
                                        <a href="<?php echo e(route('office')); ?>" class="btn btn-primary btn-cart">
                                            <i data-feather="book-open"></i>
                                            <span class=""><?php echo e($nav_card['cardTitle']); ?></span>
                                        </a>
                                    </div>
                                </div>

                            </a>
                        </div>
                    <?php elseif($nav_card['type'] === 'gallery'): ?>
                        <div class="col-lg-3 col-md-12 col-sm-12">

                            <a href="<?php echo e(route('gallery')); ?>">
                                <div class="card card-congratulations"
                                     style="background-image:url('<?php echo e($nav_card['background']); ?>'); background-size: cover">
                                    <div class="card-body text-center">

                                        <div class="avatar avatar-xl bg-primary shadow">
                                            <div class="avatar-content">
                                                <i class="font-large-1" data-feather="image"></i>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                        </div>
                                    </div>
                                    <div class="item-options text-center">
                                        <a href="<?php echo e(route('gallery')); ?>" class="btn btn-primary btn-cart">
                                            <i data-feather="image"></i>
                                            <span class=""><?php echo e($nav_card['cardTitle']); ?></span>
                                        </a>
                                    </div>
                                </div>

                            </a>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                <!-- Greetings Card ends -->

            </div>
        </section>


        <!-- Dashboard Analytics end -->
    </div>

    <?php $__env->startPush('scripts'); ?>
        <script>
            var times_next_clicked = -1;

            function Scrolldown() {
                window.scroll(0, 800);
            }

            function myFunction(x) { 
                if (x.matches) { // If media query matches
                    window.onload = Scrolldown;

                }
            }

            var x = window.matchMedia("(max-width: 500px)")
            myFunction(x)
            x.addListener(myFunction)

            //    console.log('---===>',);
            setTimeout(() => {

                const all_elements = document.querySelectorAll('.swiper-wrapper');


                console.log(all_elements[1].children)
                Array.prototype.slice.call(all_elements[1].children).forEach(x => {

                    x.style.width = '100%';
                })

                const nxt_btn = document.querySelector('.swiper-button-next')
                const prev_btn = document.querySelector('.swiper-button-prev')

                nxt_btn.addEventListener('click', (e) => {
                    const video = e.target.parentElement.getElementsByTagName('video')[times_next_clicked];

                    video.pause();
                    const first_parent_div = video.parentElement 
                    first_parent_div.style.width = '100%'
                    first_parent_div.parentElement.style.transform = 'translate3d(-100%, 0px, 0px)';

   
                    times_next_clicked++; 
                    e.target.parentElement.getElementsByTagName('video')[times_next_clicked].play();
                    
                })

                prev_btn.addEventListener('click', (e) => {
                    const video = e.target.parentElement.getElementsByTagName('video')[times_next_clicked];

                    video.pause();
                    video.parentElement.style.width = '100%'

                    times_next_clicked--;
                    e.target.parentElement.getElementsByTagName('video')[times_next_clicked].play();
                })

                $('#swiper-wrapper-7fb93a4b8b948735').css('transform','translate3d(24px, 0px, 0px)')

            }, 1000);
        </script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/dev/resources/views/home/home.blade.php ENDPATH**/ ?>