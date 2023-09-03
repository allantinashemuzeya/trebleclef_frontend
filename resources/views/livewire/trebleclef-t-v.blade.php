
<div class="section" id="section0">
    <!-- borders start -->
    <div class="borders-l"></div>
    <div class="borders-r"></div>
    <!-- borders end -->
    <!-- hero bg start -->
    <div class="hero-fullscreen">
        <div class="hero-fullscreen-FIX">
            <div class="hero-bg">
                <!-- hero slider wrapper start -->
                <div class="swiper-container-wrapper">
                    <!-- swiper container start -->
                    <div class="swiper-container-2">
                        <!-- swiper wrapper start -->
                        <div class="swiper-wrapper">
                            @foreach($tvc as $tv_item)
                                @if(str_contains($tv_item->type, 'video'))
                                    <!-- swiper slider item start -->
                                    <div class="swiper-slide">
                                        <div class="swiper-slide-inner" data-swiper-parallax="50%">
                                            <!-- swiper slider item IMG start -->
                                            <div class="swiper-slide-inner-bg bg-img-3">
                                                <!-- HTML5 video URL start -->
                                                <video playsinline data-autoplay muted loop controls>
                                                    <source src="{{$tv_item->item}}" type="video/mp4">
                                                </video>
                                                <!-- HTML5 video URL end -->
                                            </div>
                                            <!-- swiper slider item IMG end -->
                                            <!-- overlay start -->
                                            <div class="overlay overlay-dark-60"></div>
                                            <!-- overlay end -->
                                            <!-- swiper slider item txt start -->
                                            <div class="swiper-slide-inner-txt-2">
                                                <!-- intro wrapper start -->
                                                <div class="intro-wrapper">
                                                    <!-- intro start -->
                                                    <div class="intro">
                                                        <!-- intro subtitle start -->
                                                        <div class="intro-subtitle">
                                                            TCA ONLINE
                                                        </div>
                                                        <!-- intro subtitle end -->
                                                        <!-- divider start -->
                                                        <div class="inner-divider-half"></div>
                                                        <!-- divider end -->
                                                        <!-- intro title start -->
                                                        <div class="intro-title-lead">
                                                            PRESENTS
                                                        </div>
                                                        <!-- intro title end -->
                                                        <!-- divider start -->
                                                        <div class="inner-divider-half"></div>
                                                        <!-- divider end -->
                                                        <!-- intro title start -->
                                                        <div class="intro-title">
                                                            ENJOY
                                                        </div>
                                                        <!-- intro title end -->
                                                    </div>
                                                    <!-- intro end -->
                                                </div>
                                                <!-- intro wrapper end -->
                                            </div>
                                            <!-- swiper slider item txt end -->
                                        </div>
                                    </div>
                                    <!-- swiper slider item end -->
                                @else
                                    <!-- swiper slider item start -->
                                    <div class="swiper-slide">
                                        <div class="swiper-slide-inner" data-swiper-parallax="50%">
                                            <!-- swiper slider item IMG start -->
                                            <div class="swiper-slide-inner-bg" style="background-image:url('{{$tv_item->item}}')"></div>
                                            <!-- swiper slider item IMG end -->
                                            <!-- overlay start -->
                                            <div class="overlay overlay-dark-60"></div>
                                            <!-- overlay end -->
                                            <!-- swiper slider item txt start -->
                                            <div class="swiper-slide-inner-txt-2">
                                                <!-- intro wrapper start -->
                                                <div class="intro-wrapper">
                                                    <!-- intro start -->
                                                    <div class="intro">
                                                        <!-- intro subtitle start -->
                                                        <div class="intro-subtitle">
                                                            LA-based Company
                                                        </div>
                                                        <!-- intro subtitle end -->
                                                        <!-- divider start -->
                                                        <div class="inner-divider-half"></div>
                                                        <!-- divider end -->
                                                        <!-- intro title start -->
                                                        <div class="intro-title-lead">
                                                            A Folio
                                                        </div>
                                                        <!-- intro title end -->
                                                        <!-- divider start -->
                                                        <div class="inner-divider-half"></div>
                                                        <!-- divider end -->
                                                        <!-- intro title start -->
                                                        <div class="intro-title">
                                                            Grandex
                                                        </div>
                                                        <!-- intro title end -->
                                                    </div>
                                                    <!-- intro end -->
                                                </div>
                                                <!-- intro wrapper end -->
                                            </div>
                                            <!-- swiper slider item txt end -->
                                        </div>
                                    </div>
                                    <!-- swiper slider item end -->
                                @endif

                            @endforeach
                        </div>
                        <!-- swiper wrapper end -->
                    </div>
                    <!-- swiper container end -->
                </div>
                <!-- hero slider wrapper end -->
                <!-- swiper slider controls start -->
                <div class="hero-slider-bg-controls-2">
                    <div class="swiper-slide-controls-2 slide-prev-2">
                        <div class="ion-ios-arrow-left"></div>
                    </div>
                    <div class="swiper-slide-controls-2 slide-next-2">
                        <div class="ion-ios-arrow-right"></div>
                    </div>
                </div>
                <!-- swiper slider controls end -->
                <!-- swiper slider scrollbar start -->
                <div class="swiper-scrollbar"></div>
                <!-- swiper slider scrollbar end -->
                <!-- swiper slider play-pause start -->
                <div class="swiper-slide-controls-play-pause-wrapper swiper-slide-controls-play-pause slider-on-off">
                    <div class="slider-on-off-switch">
                        <i class="ion-ios-play"></i>
                    </div>
                    <!-- swiper slider progress start -->
                    <div class="slider-progress-bar">
                                    <span><svg class="circle-svg" height="50" width="50">
                                    <circle class="circle" cx="25" cy="25" fill="none" r="24" stroke="#e0e0e0" stroke-width="2"></circle></svg></span>
                    </div>
                    <!-- swiper slider progress end -->
                </div>
                <!-- swiper slider play-pause end -->
            </div>
        </div>
    </div>
    <!-- hero bg end -->
    <!-- bottom credits start -->
    <div class="bottom-credits">
        <a href="#">TCA ONLINE TV</a> &copy; All Rights Reserved.
    </div>
    <!-- bottom credits end -->
    <!-- social icons start
    <div class="social-icons-wrapper">
        <ul class="social-icons">
            <li>
                <a class="ion-social-twitter" href="#"></a>
            </li>
            <li>
                <a class="ion-social-facebook" href="#"></a>
            </li>
            <li>
                <a class="ion-social-linkedin" href="#"></a>
            </li>
            <li>
                <a class="ion-social-instagram" href="#"></a>
            </li>
            <li>
                <a class="ion-social-pinterest" href="#"></a>
            </li>
        </ul>
    </div>
     -->
    <!-- social icons end -->
    <!-- scroll indicator start -->
    <div class="scroll-indicator">
        <div class="scroll-indicator-wrapper">
            <div class="scroll-line"></div>
        </div>
    </div>
    <!-- scroll indicator end -->
</div>
