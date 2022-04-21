@extends('layouts.home')
@section('content')

    <style>
        video{
            max-height: 600px;
            max-width: 100%;

            width: 100%;

            background: linear-gradient(45deg, black,#161d31);
        }
        .blog-info{
    margin-left: 30px;
}
    </style>


        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">{{$lesson['name']}}</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index-2.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Lessons</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">{{$lesson['name']}}</a>
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
                                @if($lesson['tutorial'] !== NULL)
                                    <iframe
                                        width="100%"
                                        height="600px"
                                        src="{{ $lesson['tutorial']['link'] }}"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen>

                                    </iframe>
                                @endif

                                <div class="card-body">
                                    <h4 class="card-title">{{$lesson['name']}} - {{$lesson['tutorial']['title']}}</h4>
                                    <div class="d-flex">
                                        <div class="avatar me-50">
                                            <img src="{{$lesson['author']['profilePicture']}}"
                                                 alt="Avatar"
                                                 width="24" height="24"/>
                                        </div>
                                        <div class="author-info">
                                            <small class="text-muted me-25">By</small>
                                            <small><a href="#" class="text-body">{{$lesson['author']['name']}}</a></small>
                                            <span class="text-muted ms-50 me-25">|</span>
                                            <small class="text-muted">{{$lesson['date']}}</small>
                                        </div>
                                    </div>
                                    <div class="my-1 py-25">
                                        <h4 class="mr-1 text-align-right">Skills Covered</h4>
                                    @foreach($lesson['skillsCovered'] as $type)
                                            <a href="#">
                                                <span
                                                    class="badge rounded-pill badge-light-success me-50">{{$type}}</span>
                                            </a>
                                        @endforeach
                                    </div>
                                    <h4 class="mr-1 text-align-right">Overview</h4>


                                    {!! str_replace('<p', '<p class="card-text mb-2"', $lesson['overview']) !!}

                                    <div class="d-flex align-items-start">

                                    </div>

                                    <hr class="my-2"/>

                                    <br/>
                                    <h4 class="mr-1 text-align-right">Lesson Files</h4>
                                    <div class="my-1 py-25">
                                        @foreach($lesson['supportingDocuments'] as $item)
                                            <a href="{{$item['url']}}" target="_blank">
                                                <span
                                                    class="badge rounded-pill badge-light-success me-50">{{$item['name']}}</span>
                                            </a>
                                        @endforeach
                                    </div>

                                    <br/><br/>
                                    <h4 class="mr-1 text-align-right">Share</h4>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center justify-content-between">

                                            <div class="d-flex align-items-center">
                                                <a id="whatsapp-url" class="dropdown-item py-50 px-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1.3em" height="1.3em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="gray" d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967c-.273-.099-.471-.148-.67.15c-.197.297-.767.966-.94 1.164c-.173.199-.347.223-.644.075c-.297-.15-1.255-.463-2.39-1.475c-.883-.788-1.48-1.761-1.653-2.059c-.173-.297-.018-.458.13-.606c.134-.133.298-.347.446-.52c.149-.174.198-.298.298-.497c.099-.198.05-.371-.025-.52c-.075-.149-.669-1.612-.916-2.207c-.242-.579-.487-.5-.669-.51a12.8 12.8 0 0 0-.57-.01c-.198 0-.52.074-.792.372c-.272.297-1.04 1.016-1.04 2.479c0 1.462 1.065 2.875 1.213 3.074c.149.198 2.096 3.2 5.077 4.487c.709.306 1.262.489 1.694.625c.712.227 1.36.195 1.871.118c.571-.085 1.758-.719 2.006-1.413c.248-.694.248-1.289.173-1.413c-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214l-3.741.982l.998-3.648l-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884c2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413Z"/></svg>
                                                </a>
                                            </div>


{{--                                            <div class="d-flex align-items-center">--}}
{{--                                                <a href="#" class="dropdown-item py-50 px-1">--}}
{{--                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"--}}
{{--                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"--}}
{{--                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                                         class="feather feather-facebook font-medium-3">--}}
{{--                                                        <path--}}
{{--                                                            d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>--}}
{{--                                                    </svg>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}

{{--                                            <div class="d-flex align-items-center">--}}
{{--                                                <a href="#" class="dropdown-item py-50 px-1">--}}
{{--                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"--}}
{{--                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"--}}
{{--                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                                         class="feather feather-twitter font-medium-3">--}}
{{--                                                        <path--}}
{{--                                                            d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>--}}
{{--                                                    </svg>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="d-flex align-items-center">--}}
{{--                                                <a href="#" class="dropdown-item py-50 px-1">--}}
{{--                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"--}}
{{--                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"--}}
{{--                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                                         class="feather feather-linkedin font-medium-3">--}}
{{--                                                        <path--}}
{{--                                                            d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>--}}
{{--                                                        <rect x="2" y="9" width="4" height="12"></rect>--}}
{{--                                                        <circle cx="4" cy="4" r="2"></circle>--}}
{{--                                                    </svg>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
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
                        <h6 class="section-label">Recent {{$lesson['subject']['name']}} Lessons </h6>
                        <div class="mt-75">
                            @foreach($lessons as $item)
                                @if($item !== null)

                                    <div class="d-flex mb-2">
                                        <a href="{{route('lesson', [$item['id'], $lesson['subject']['id']])}}">
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
                                        <div class="mr-5"></div>
                                        <div class="blog-info">
                                            <h6 class="blog-recent-post-title">
                                                <a href="{{route('communication', $item['id'])}}"
                                                   class="text-body-heading">{{$item['name']}}</a>
                                            </h6>
                                            <div class="text-muted mb-0">{{$item['date']}}</div>
                                        </div>
                                    </div>
                                @endif

                            @endforeach

                        </div>
                    </div>
                    <!--/ Recent Posts -->

                    <!-- Categories -->
                    <div class="blog-categories mt-3">
                        <h6 class="section-label">Categories</h6>
                        <div class="mt-1">
                            @foreach($lesson['skillsCovered'] as $type)
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


    <script src="{{asset('app-assets/js/scripts/extensions/ext-component-swiper.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/js/extensions/swiper.min.js')}}"></script>
    @push('scripts')
    <script>
        $(document).ready(function() {
            $('#whatsapp-url').attr('href',`https://wa.me/?text=${location}`)
        })
    </script>
    @endpush
@endsection
