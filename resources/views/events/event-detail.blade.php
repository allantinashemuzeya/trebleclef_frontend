@extends('layouts.home')
@section('content')

    <style>
        body > div.app-content.content > div.content-wrapper.container-xxl.p-0 > main > div.content-detached.content-left > div > div > div > div > div > div > div > div.author-info > small.text-muted.text-body-heading.text-white.text-success{
            color: #28c76f!important;
            font-weight: 700;
        }
        body > div.app-content.content > div.content-wrapper.container-xxl.p-0 > main > div.content-detached.content-left > div > div > div > div > div > div > small > p{
            font-size: 1.2em!important;
            color: #d4cccc;
        }
    </style>
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">{{$event['title']}}</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index-2.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Events</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">{{$event['title']}}</a>
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
                                @if($event['event_banner'] !== NULL)
                                    <img
                                        src="{{$event['event_banner']}}"
                                        class="img-fluid card-img-top"
                                        style="max-height:600px;max-width:100%"
                                        alt="Communication Detail Pic"
                                    />
                                @endif

                                <div class="card-body">
                                    <h4 class="card-title">{{$event['title']}}</h4>
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
                                            <small class="text-muted text-body-heading text-white text-success"><sup>FROM </sup>&nbsp;{{ \Carbon\Carbon::parse($event['start_date'])->isoFormat('DD ddd MMM YYYY')}} - <stup>TO</stup>&nbsp;{{ \Carbon\Carbon::parse($event['start_date'])->isoFormat('DD ddd MMM YYYY')}}
                                        </div>
                                    </div>
{{--                                    <div class="my-1 py-25">--}}
{{--                                        @foreach($event['type'] as $type)--}}
{{--                                            <a href="#">--}}
{{--                                                <span--}}
{{--                                                    class="badge rounded-pill badge-light-success me-50">{{$type}}</span>--}}
{{--                                            </a>--}}
{{--                                        @endforeach--}}
{{--                                    </div>--}}
                                    {!! str_replace('<p', '<p class="card-text mb-2"', $event['event_description']) !!}


                                    <div class="d-flex align-items-start">

                                    </div>

                                    <hr class="my-2"/>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-outline-success waves-effect" data-bs-toggle="modal" data-bs-target="#registerForEvent">
                                        REGISTER FOR EVENT
                                    </button>
                                    <!-- Modal -->
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
                                                        @foreach($event['media']  as $item)

                                                            @if($item['type'] === 'video/mp4' || $item['type'] === 'video/mov' )

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


                                                        @foreach($event['media']  as $item)
                                                            @if($item['type'] === 'video/mp4' || $item['type'] === 'video/quicktime' || $item['type'] === 'video/mov'  )

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
                        <h6 class="section-label">Recent Events</h6>
                        <div class="mt-75">
                            @foreach($events as $item)

                                <div class="d-flex mb-2">
                                    <a href="{{route('event', $item['id'])}}" class="me-2">
                                        @if($item['event_banner']!==NULL)
                                            <img
                                                class="rounded"
                                                src="{{$item['event_banner']}}"
                                                width="100"
                                                height="70"
                                                alt="Recent Post Pic"
                                            />
                                        @endif

                                    </a>
                                    <div class="blog-info">
                                        <h6 class="blog-recent-post-title">
                                            <a href="{{route('event', $item['id'])}}"
                                               class="text-body-heading">{{$item['title']}}</a>
                                        </h6>
                                        <div class=" text-success mb-0">DATE: {{strtoupper( \Carbon\Carbon::parse($item['start_date'])->isoFormat('DD ddd MMM YYYY'))}}</div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <!--/ Recent Posts -->
                </div>

            </div>
        </div>
        <!-- END: Content-->


    <div class="form-modal-ex">

        <div class="modal fade text-start" id="registerForEvent" tabindex="-1" aria-labelledby="myModalLabel33" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel33">Register for {{$event['title']}}</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="#">
                        <div class="modal-body">
                            <label>First Name:  </label>
                            <div class="mb-1">
                                <input type="text" value="{{Auth::user()->firstname}}" placeholder="Email Address" class="form-control">
                            </div>

                            <label>Last Name:  </label>
                            <div class="mb-1">
                                <input type="text" value="{{Auth::user()->lastname}}" placeholder="Email Address" class="form-control">
                            </div>
                            <label>Contact Email:  </label>
                            <div class="mb-1">
                                <input type="text" value="{{Auth::user()->email}}" placeholder="Email Address" class="form-control">
                            </div>

                            <label>Contact Cell:  </label>
                            <div class="mb-1">
                                <input type="text" value="{{$currentUser->cellphoneNumber}}" placeholder="Email Address" class="form-control">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary waves-effect waves-float waves-light" data-bs-dismiss="modal">REGISTER</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('app-assets/js/scripts/extensions/ext-component-swiper.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/extensions/swiper.min.js')}}"></script>

@endsection
