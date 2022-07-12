@extends('layouts.home')
@section('content')


    <style>
        body > div.app-content.content > div.content-wrapper.container-xxl.p-0 > main > div.content-detached.content-left > div > div > div > div > div > div > div.row.match-height > div > div > div > a.btn.btn-primary.btn-cart.waves-effect.waves-float.waves-light {
            width: 100%;
        }
    </style>

    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-start mb-0">{{$subject['name']}}</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Communications</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">{{$subject['name']}}</a>
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
                                class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i
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
                            @if($subject['sub_intro'] !== NULL)
                                <video controls autoplay muted class="img-fluid card-img-top"
                                       style="max-height:600px;max-width:100%; width:100%">
                                    <source src="{{$subject['sub_intro']}}" type="video/mp4"/>
                                </video>
                            @endif

                            <div class="card-body">
                                <h4 class="card-title">{{$subject['name']}}</h4>
                                <div class="d-flex">
                                    <div class="avatar me-50">
                                        <img src="../../../app-assets/images/portrait/small/avatar-s-7.jpg" alt="Avatar"
                                             width="24" height="24"/>
                                    </div>
                                    <div class="author-info">
                                        <small class="text-muted me-25">From</small>
                                        <small><a href="#" class="text-body">Treble Clef Academy</a></small>
                                        <span class="text-muted ms-50 me-25">|</span>
                                        {{--                                        <small class="text-muted">{{$subject['date']}}</small>--}}
                                    </div>
                                </div>
                                <div class="my-1 py-25">
                                    {{--                                    @foreach($subject['type'] as $type)--}}
                                    {{--                                        <a href="#">--}}
                                    {{--                                            <span class="badge rounded-pill badge-light-success me-50">{{$type}}</span>--}}
                                    {{--                                        </a>--}}
                                    {{--                                    @endforeach--}}
                                </div>
                                {!! str_replace('<p', '<p class="card-text mb-2"', $subject['overview']) !!}


                                <div class="d-flex align-items-start">
                                </div>

                                <br/>
                                <br/>

                                <h4 class="mr-1 text-align-right">{{count($lessons) != 0 ? 'Top Lessons In this Subject': 'There are no lessons in this Subject Yet'}}</h4>
                                <hr class="my-2"/>

                                <div class="row match-height">
                                    @foreach($lessons as $lesson)
                                        <div class="col-lg-3 col-md-12 col-sm-12">
                                            <a href="{{route('lesson', [$lesson['id'], $subject['id']])}}">
                                                <div class="card card-congratulations"
                                                     style="background-image:url({{$lesson['banner']}}); background-size:cover">
                                                    <div class="card-body text-center">

                                                        <div class="avatar avatar-xl bg-primary shadow">
                                                            <div class="avatar-content">
                                                                <i class="font-large-1" data-feather="play"></i>
                                                            </div>
                                                        </div>
                                                        <div class="text-center">
                                                            {{--                                                                <h1 class="mb-1 text-white">{{$lesson['name']}}</h1>--}}
                                                        </div>
                                                    </div>
                                                    <div class="item-options text-center">
                                                        <a href="{{route('lesson', [$lesson['id'], $subject['id']])}}"
                                                           class="btn btn-primary btn-cart">
                                                            <i data-feather="book-open"></i>
                                                            <span >{{$lesson['name']}}</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                @endforeach


                                <!-- Greetings Card ends -->

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
            {{--                <div class="blog-recent-posts mt-3">--}}
            {{--                    <h6 class="section-label">Recent Communications</h6>--}}
            {{--                    <div class="mt-75">--}}
            {{--                        @foreach($subject as $item)--}}

            {{--                            <div class="d-flex mb-2">--}}
            {{--                                <a href="{{route('communication', $item[''])}}" class="me-2">--}}
            {{--                                    @if($item['banner']!==null)--}}
            {{--                                        <img--}}
            {{--                                            class="rounded"--}}
            {{--                                            src="{{$item['banner']}}"--}}
            {{--                                            width="100"--}}
            {{--                                            height="70"--}}
            {{--                                            alt="Recent Post Pic"--}}
            {{--                                        />--}}
            {{--                                    @endif--}}

            {{--                                </a>--}}
            {{--                                <div class="blog-info">--}}
            {{--                                    <h6 class="blog-recent-post-title">--}}
            {{--                                        <a href="{{route('communication', $item['id'])}}" class="text-body-heading">{{$item['title']}}</a>--}}
            {{--                                    </h6>--}}
            {{--                                    <div class="text-muted mb-0">{{$item['date']}}</div>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        @endforeach--}}

            {{--                    </div>--}}
            {{--                </div>--}}
            <!--/ Recent Posts -->

                <!-- Categories -->
                <div class="blog-categories mt-3">
                    <h6 class="section-label">Categories</h6>
                    <div class="mt-1">
                        {{--                       @foreach($item['type'] as $type)--}}
                        {{--                            <div class="d-flex justify-content-start align-items-center mb-75">--}}
                        {{--                                <a href="#" class="me-75">--}}
                        {{--                                    <div class="avatar bg-light-danger rounded">--}}
                        {{--                                        <div class="avatar-content">--}}
                        {{--                                            <i data-feather="command" class="avatar-icon font-medium-1"></i>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                </a>--}}
                        {{--                                <a href="#">--}}
                        {{--                                    <div class="blog-category-title text-body">{{$type}}</div>--}}
                        {{--                                </a>--}}
                        {{--                            </div>--}}

                        {{--                        @endforeach--}}

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

    <script src="{{asset('app-assets/js/scripts/extensions/ext-component-swiper.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/extensions/swiper.min.js')}}"></script>

@endsection
