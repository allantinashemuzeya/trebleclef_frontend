@extends('layouts.home')
@section('content')

    @if($mode === 'communication')
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">{{$communication['title']}}</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index-2.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Communications</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">{{$communication['title']}}</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                <div class="mb-1 breadcrumb-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                data-feather="grid"></i></button>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><i
                                    class="me-1" data-feather="check-square"></i><span
                                    class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i
                                    class="me-1" data-feather="message-square"></i><span
                                    class="align-middle">Chat</span></a><a class="dropdown-item"
                                                                           href="app-email.html"><i
                                    class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a
                                class="dropdown-item" href="app-calendar.html"><i class="me-1"
                                                                                  data-feather="calendar"></i><span
                                    class="align-middle">Calendar</span></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-detached content-left">
            <div class="content-body"><!-- Blog Detail -->
                <div class="blog-detail-wrapper">
                    <div class="row">
                        <!-- Communication -->
                        <div class="col-12">
                            <div class="card">
                                @if($communication['banner'] !== NULL)
                                    <img
                                        src="{{$communication['banner']}}"
                                        class="img-fluid card-img-top"
                                        style="max-height:600px;max-width:100%"
                                        alt="Communication Detail Pic"
                                    />
                                @endif

                                <div class="card-body">
                                    <h4 class="card-title">{{$communication['title']}}</h4>
                                    <div class="d-flex">
                                        <div class="avatar me-50">
                                            <img src="../../../app-assets/images/portrait/small/avatar-s-7.jpg"
                                                 alt="Avatar"
                                                 width="24" height="24"/>
                                        </div>
                                        <div class="author-info">
                                            <small class="text-muted me-25">From</small>
                                            <small><a href="#" class="text-body">Treble Clef Academy</a></small>
                                            <span class="text-muted ms-50 me-25">|</span>
                                            <small class="text-muted">{{$communication['date']}}</small>
                                        </div>
                                    </div>
                                    <div class="my-1 py-25">
                                            <a href="#">
                                                <span
                                                    class="badge rounded-pill badge-light-success me-50">{{$communication['type']}}</span>
                                            </a>
                                    </div>
                                    {!! str_replace('<p', '<p class="card-text mb-2"', $communication['body']) !!}



                                    {{--                                <h4 class="mb-75">Unprecedented Challenge</h4>--}}
                                    {{--                                <ul class="p-0 mb-2">--}}
                                    {{--                                    <li class="d-block">--}}
                                    {{--                                        <span class="me-25">-</span>--}}
                                    {{--                                        <span>Preliminary thinking systems</span>--}}
                                    {{--                                    </li>--}}
                                    {{--                                    <li class="d-block">--}}
                                    {{--                                        <span class="me-25">-</span>--}}
                                    {{--                                        <span>Bandwidth efficient</span>--}}
                                    {{--                                    </li>--}}
                                    {{--                                    <li class="d-block">--}}
                                    {{--                                        <span class="me-25">-</span>--}}
                                    {{--                                        <span>Green space</span>--}}
                                    {{--                                    </li>--}}
                                    {{--                                    <li class="d-block">--}}
                                    {{--                                        <span class="me-25">-</span>--}}
                                    {{--                                        <span>Social impact</span>--}}
                                    {{--                                    </li>--}}
                                    {{--                                    <li class="d-block">--}}
                                    {{--                                        <span class="me-25">-</span>--}}
                                    {{--                                        <span>Thought partnership</span>--}}
                                    {{--                                    </li>--}}
                                    {{--                                    <li class="d-block">--}}
                                    {{--                                        <span class="me-25">-</span>--}}
                                    {{--                                        <span>Fully ethical life</span>--}}
                                    {{--                                    </li>--}}
                                    {{--                                </ul>--}}
                                    <div class="d-flex align-items-start">
                                        {{--                                    <div class="avatar me-2">--}}
                                        {{--                                        <img src="../../../app-assets/images/portrait/small/avatar-s-6.jpg" width="60"--}}
                                        {{--                                             height="60" alt="Avatar"/>--}}
                                        {{--                                    </div>--}}
                                        {{--                                    <div class="author-info">--}}
                                        {{--                                        <h6 class="fw-bolder">Willie Clark</h6>--}}
                                        {{--                                        <p class="card-text mb-0">--}}
                                        {{--                                            Based in London, Uncode is a blog by Willie Clark. His posts explore modern--}}
                                        {{--                                            design trends through photos--}}
                                        {{--                                            and quotes by influential creatives and web designer around the world.--}}
                                        {{--                                        </p>--}}
                                        {{--                                    </div>--}}
                                    </div>

                                    <hr class="my-2"/>

                                    <section id="component-swiper-gallery">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Media</h4>
                                            </div>
                                            <div class="card-body">
                                                <div
                                                    class="swiper-gallery swiper-container gallery-top swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                                                    <div class="swiper-wrapper" id="swiper-wrapper-7fb93a4b8b948735"
                                                         aria-live="polite"
                                                         style="transform: translate3d(-4224px, 0px, 0px); transition-duration: 0ms;">
                                                        @foreach($communication['media']  as $item)
                                                            @if($item['type'] === 'video/mp4')

                                                                <div class="swiper-slide" role="group"
                                                                     aria-label="1 / 5"
                                                                     style="width: 1398px; margin-right: 10px;">
                                                                    <video class="img-fluid" class="img-fluid" autoplay
                                                                           controls muted loop
                                                                           style="padding-right:2px">
                                                                        <source src="{{$item['file']}}"
                                                                                type="video/mp4"/>
                                                                    </video>
                                                                </div>


                                                            @else

                                                                <div class="swiper-slide" role="group"
                                                                     aria-label="1 / 5">
                                                                    <img class="img-fluid" src="{{$item['file']}}"
                                                                         alt="banner">
                                                                </div>

                                                            @endif


                                                        @endforeach

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
                                                          aria-atomic="true"></span></div>
                                                <div
                                                    class="swiper-container gallery-thumbs swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events swiper-container-free-mode swiper-container-thumbs">
                                                    <div class="swiper-wrapper mt-25"
                                                         id="swiper-wrapper-10afee6a10d085e9c4" aria-live="polite"
                                                         style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">


                                                        @foreach($communication['media']  as $item)
                                                            @if($item['type'] === 'video/mp4')

                                                                <div
                                                                    class="swiper-slide swiper-slide-visible swiper-slide-active"
                                                                    role="group" aria-label="1 / 5"
                                                                    style="width: 342px; margin-right: 10px;">
                                                                    <video class="img-fluid" class="img-fluid" autoplay
                                                                           controls muted loop
                                                                           style="padding-right:2px">
                                                                        <source src="{{$item['file']}}"
                                                                                type="video/mp4"/>
                                                                    </video>
                                                                </div>

                                                            @else

                                                                <div
                                                                    class="swiper-slide swiper-slide-visible swiper-slide-active"
                                                                    role="group" aria-label="1 / 5"
                                                                    style="width: 342px; margin-right: 10px;">
                                                                    <img class="img-fluid" src="{{$item['file']}}"
                                                                         alt="banner">
                                                                </div>
                                                            @endif


                                                        @endforeach

                                                    </div>
                                                    <span class="swiper-notification" aria-live="assertive"
                                                          aria-atomic="true"></span></div>
                                            </div>
                                        </div>
                                    </section>
                                    <h4 class="mr-1 text-align-right">Share</h4>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center justify-content-between">

                                            <div class="d-flex align-items-center">
                                                <a href="#" class="dropdown-item py-50 px-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="feather feather-github font-medium-3">
                                                        <path
                                                            d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-center">

                                                <a href="#" class="dropdown-item py-50 px-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="feather feather-gitlab font-medium-3">
                                                        <path
                                                            d="M22.65 14.39L12 22.13 1.35 14.39a.84.84 0 0 1-.3-.94l1.22-3.78 2.44-7.51A.42.42 0 0 1 4.82 2a.43.43 0 0 1 .58 0 .42.42 0 0 1 .11.18l2.44 7.49h8.1l2.44-7.51A.42.42 0 0 1 18.6 2a.43.43 0 0 1 .58 0 .42.42 0 0 1 .11.18l2.44 7.51L23 13.45a.84.84 0 0 1-.35.94z"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="dropdown-item py-50 px-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="feather feather-facebook font-medium-3">
                                                        <path
                                                            d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                                    </svg>
                                                </a>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <a href="#" class="dropdown-item py-50 px-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="feather feather-twitter font-medium-3">
                                                        <path
                                                            d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="dropdown-item py-50 px-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="feather feather-linkedin font-medium-3">
                                                        <path
                                                            d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                                        <rect x="2" y="9" width="4" height="12"></rect>
                                                        <circle cx="4" cy="4" r="2"></circle>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Blog -->


                    </div>
                </div>
                <!--/ Blog Detail -->

            </div>
        </div>
        <div class="sidebar-detached sidebar-right">
            <div class="sidebar">
                <div class="blog-sidebar my-2 my-lg-0">

                    <!--/ Search bar -->

                    <!-- Recent Posts -->
                    <div class="blog-recent-posts mt-3">
                        <h6 class="section-label">Recent Communications</h6>
                        <div class="mt-75">
                            @foreach($communications as $item)

                                <div class="d-flex mb-2">
                                    <a href="{{route('communication', $item['id'])}}" class="me-2">
                                        @if($item['banner']!==NULL)
                                            <img
                                                class="rounded"
                                                src="{{$item['banner']}}"
                                                width="100"
                                                height="70"
                                                alt="Recent Post Pic"
                                            />
                                        @endif

                                    </a>
                                    <div class="blog-info">
                                        <h6 class="blog-recent-post-title">
                                            <a href="{{route('communication', $item['id'])}}"
                                               class="text-body-heading">{{$item['title']}}</a>
                                        </h6>
                                        <div class="text-muted mb-0">{{$item['date']}}</div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <!--/ Recent Posts -->

                    <!-- Categories -->
                    <div class="blog-categories mt-3">
                        <h6 class="section-label">Categories</h6>
                        <div class="mt-1">
                                <div class="d-flex justify-content-start align-items-center mb-75">
                                    <a href="#" class="me-75">
                                        <div class="avatar bg-light-danger rounded">
                                            <div class="avatar-content">
                                                <i data-feather="command" class="avatar-icon font-medium-1"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="blog-category-title text-body">{{$item['type']}}</div>
                                    </a>
                                </div>

                            {{--                        <div class="d-flex justify-content-start align-items-center">--}}
                            {{--                            <a href="#" class="me-75">--}}
                            {{--                                <div class="avatar bg-light-warning rounded">--}}
                            {{--                                    <div class="avatar-content">--}}
                            {{--                                        <i data-feather="video" class="avatar-icon font-medium-1"></i>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </a>--}}
                            {{--                            <a href="#">--}}
                            {{--                                <div class="blog-category-title text-body">Video</div>--}}
                            {{--                            </a>--}}
                            {{--                        </div>--}}
                        </div>
                    </div>
                    <!--/ Categories -->
                </div>

            </div>
        </div>
        <!-- END: Content-->

    @elseif($mode === 'subject')
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">{{$communication['name']}}</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index-2.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Communications</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">{{$communication['name']}}</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                <div class="mb-1 breadcrumb-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                data-feather="grid"></i></button>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><i
                                    class="me-1" data-feather="check-square"></i><span
                                    class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i
                                    class="me-1" data-feather="message-square"></i><span
                                    class="align-middle">Chat</span></a><a class="dropdown-item"
                                                                           href="app-email.html"><i
                                    class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a
                                class="dropdown-item" href="app-calendar.html"><i class="me-1"
                                                                                  data-feather="calendar"></i><span
                                    class="align-middle">Calendar</span></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-detached content-left">
            <div class="content-body"><!-- Blog Detail -->
                <div class="blog-detail-wrapper">
                    <div class="row">
                        <!-- Communication -->
                        <div class="col-12">
                            <div class="card">
                                @if($communication['cover'] !== NULL)
                                    <img
                                        src="{{$communication['cover']}}"
                                        class="img-fluid card-img-top"
                                        style="max-height:600px;max-width:100%"
                                        alt="Communication Detail Pic"
                                    />
                                @endif

                                <div class="card-body">
                                    <h4 class="card-title">{{$communication['name']}}</h4>
                                    <div class="d-flex">
                                        <div class="avatar me-50">
                                            <img src="../../../app-assets/images/portrait/small/avatar-s-7.jpg"
                                                 alt="Avatar"
                                                 width="24" height="24"/>
                                        </div>
                                        <div class="author-info">
                                            <small class="text-muted me-25">From</small>
                                            <small><a href="#" class="text-body">Treble Clef Academy</a></small>
                                            <span class="text-muted ms-50 me-25">|</span>
{{--                                            <small class="text-muted">{{$communication['date']}}</small>--}}
                                        </div>
                                    </div>
{{--                                    <div class="my-1 py-25">--}}
{{--                                        @foreach($communication['type'] as $type)--}}
{{--                                            <a href="#">--}}
{{--                                                <span--}}
{{--                                                    class="badge rounded-pill badge-light-success me-50">{{$type}}</span>--}}
{{--                                            </a>--}}
{{--                                        @endforeach--}}
{{--                                    </div>--}}
                                    {!! str_replace('<p', '<p class="card-text mb-2"', $communication['overview']) !!}



                                    {{--                                <h4 class="mb-75">Unprecedented Challenge</h4>--}}
                                    {{--                                <ul class="p-0 mb-2">--}}
                                    {{--                                    <li class="d-block">--}}
                                    {{--                                        <span class="me-25">-</span>--}}
                                    {{--                                        <span>Preliminary thinking systems</span>--}}
                                    {{--                                    </li>--}}
                                    {{--                                    <li class="d-block">--}}
                                    {{--                                        <span class="me-25">-</span>--}}
                                    {{--                                        <span>Bandwidth efficient</span>--}}
                                    {{--                                    </li>--}}
                                    {{--                                    <li class="d-block">--}}
                                    {{--                                        <span class="me-25">-</span>--}}
                                    {{--                                        <span>Green space</span>--}}
                                    {{--                                    </li>--}}
                                    {{--                                    <li class="d-block">--}}
                                    {{--                                        <span class="me-25">-</span>--}}
                                    {{--                                        <span>Social impact</span>--}}
                                    {{--                                    </li>--}}
                                    {{--                                    <li class="d-block">--}}
                                    {{--                                        <span class="me-25">-</span>--}}
                                    {{--                                        <span>Thought partnership</span>--}}
                                    {{--                                    </li>--}}
                                    {{--                                    <li class="d-block">--}}
                                    {{--                                        <span class="me-25">-</span>--}}
                                    {{--                                        <span>Fully ethical life</span>--}}
                                    {{--                                    </li>--}}
                                    {{--                                </ul>--}}
                                    <div class="d-flex align-items-start">
                                        {{--                                    <div class="avatar me-2">--}}
                                        {{--                                        <img src="../../../app-assets/images/portrait/small/avatar-s-6.jpg" width="60"--}}
                                        {{--                                             height="60" alt="Avatar"/>--}}
                                        {{--                                    </div>--}}
                                        {{--                                    <div class="author-info">--}}
                                        {{--                                        <h6 class="fw-bolder">Willie Clark</h6>--}}
                                        {{--                                        <p class="card-text mb-0">--}}
                                        {{--                                            Based in London, Uncode is a blog by Willie Clark. His posts explore modern--}}
                                        {{--                                            design trends through photos--}}
                                        {{--                                            and quotes by influential creatives and web designer around the world.--}}
                                        {{--                                        </p>--}}
                                        {{--                                    </div>--}}
                                    </div>

                                    <hr class="my-2"/>


                                    <h4 class="mr-1 text-align-right">Share</h4>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center justify-content-between">

                                            <div class="d-flex align-items-center">
                                                <a href="#" class="dropdown-item py-50 px-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="feather feather-github font-medium-3">
                                                        <path
                                                            d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-center">

                                                <a href="#" class="dropdown-item py-50 px-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="feather feather-gitlab font-medium-3">
                                                        <path
                                                            d="M22.65 14.39L12 22.13 1.35 14.39a.84.84 0 0 1-.3-.94l1.22-3.78 2.44-7.51A.42.42 0 0 1 4.82 2a.43.43 0 0 1 .58 0 .42.42 0 0 1 .11.18l2.44 7.49h8.1l2.44-7.51A.42.42 0 0 1 18.6 2a.43.43 0 0 1 .58 0 .42.42 0 0 1 .11.18l2.44 7.51L23 13.45a.84.84 0 0 1-.35.94z"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="dropdown-item py-50 px-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="feather feather-facebook font-medium-3">
                                                        <path
                                                            d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                                    </svg>
                                                </a>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <a href="#" class="dropdown-item py-50 px-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="feather feather-twitter font-medium-3">
                                                        <path
                                                            d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="dropdown-item py-50 px-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="feather feather-linkedin font-medium-3">
                                                        <path
                                                            d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                                        <rect x="2" y="9" width="4" height="12"></rect>
                                                        <circle cx="4" cy="4" r="2"></circle>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Blog -->


                    </div>
                </div>
                <!--/ Blog Detail -->

            </div>
        </div>
        <div class="sidebar-detached sidebar-right">
            <div class="sidebar">
                <div class="blog-sidebar my-2 my-lg-0">

                    <!--/ Search bar -->

                    <!-- Recent Posts -->
                    <div class="blog-recent-posts mt-3">
                        <h6 class="section-label">Recent Subjects</h6>
                        <div class="mt-75">
                            @foreach($communications as $item)

                                <div class="d-flex mb-2">
                                    <a href="{{route('communication', $item['id'])}}" class="me-2">
                                        @if($item['banner']!==NULL)
                                            <img
                                                class="rounded"
                                                src="{{$item['banner']}}"
                                                width="100"
                                                height="70"
                                                alt="Recent Post Pic"
                                            />
                                        @endif

                                    </a>
                                    <div class="blog-info">
                                        <h6 class="blog-recent-post-title">
                                            <a href="{{route('communication', $item['id'])}}"
                                               class="text-body-heading">{{$item['title']}}</a>
                                        </h6>
                                        <div class="text-muted mb-0">{{$item['date']}}</div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <!--/ Recent Posts -->

                    <!-- Categories -->
                    <div class="blog-categories mt-3">
                        <h6 class="section-label">Categories</h6>
                        <div class="mt-1">
                            @foreach($item['type'] as $type)
                                <div class="d-flex justify-content-start align-items-center mb-75">
                                    <a href="#" class="me-75">
                                        <div class="avatar bg-light-danger rounded">
                                            <div class="avatar-content">
                                                <i data-feather="command" class="avatar-icon font-medium-1"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="blog-category-title text-body">{{$type}}</div>
                                    </a>
                                </div>

                            @endforeach

                            {{--                        <div class="d-flex justify-content-start align-items-center">--}}
                            {{--                            <a href="#" class="me-75">--}}
                            {{--                                <div class="avatar bg-light-warning rounded">--}}
                            {{--                                    <div class="avatar-content">--}}
                            {{--                                        <i data-feather="video" class="avatar-icon font-medium-1"></i>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </a>--}}
                            {{--                            <a href="#">--}}
                            {{--                                <div class="blog-category-title text-body">Video</div>--}}
                            {{--                            </a>--}}
                            {{--                        </div>--}}
                        </div>
                    </div>
                    <!--/ Categories -->
                </div>

            </div>
        </div>
        <!-- END: Content-->

    @endif

    <script src="{{asset('app-assets/js/scripts/extensions/ext-component-swiper.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/extensions/swiper.min.js')}}"></script>

@endsection
