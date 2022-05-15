@extends('layouts.home')
@section('content')


    <style>
        #component-swiper-progress > div > div.card-header > h1{
            /* margin-left:82%; */
        }
        #component-swiper-progress > div{
            /*min-height:597px;*/
        }
        @media (max-width: 568px) {

            #component-swiper-progress{
                /* position: absolute;
                top: -190vh;    */
                padding: 0;
                margin: auto;
                left: 0;
                right: 0;
            }
            #component-swiper-progress > div{
                min-height: 46px!important;
                height: auto!important;
            }
            #component-swiper-progress > div{
                padding: 0px;
            }
        }

        div.swiper-slide.swiper-slide-active{
            width: calc(50% + 89px);
        }

        #dashboard-analytics > div:nth-child(2) > div.col-lg-4.col-md-6.col-12{
            margin-top: 48px;
        }



    </style>

    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-start mb-0">Gallery</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index-2.html">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Gallery</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#"></a>
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



    @foreach($galleries as $gallery)
    <section id="component-swiper-responsive-breakpoints">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{$gallery['gallery_name']}}</h4>
            </div>
            <div class="card-body">
                <div class="swiper-responsive-breakpoints swiper-container autoplay swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                    <div class="swiper-wrapper" id="swiper-wrapper-ae36354c41dbf2f10" aria-live="polite" style="transform: translate3d(-359.5px, 0px, 0px); transition-duration: 0ms;">
                        @foreach($gallery['files'] as $file)
                        <div class="swiper-slide swiper-slide-prev" role="group" aria-label="1 / 9" style="width: 319.5px; margin-right: 40px;">
                            @if(str_contains($file['filemime'], 'video'))
                                <video controls muted autoplay>
                                    <source src="{{env('BACKEND_APP_ASSETS_URL').$file['uri']}}" type="video/mp4" style="max-height: 600px">
                                </video>
                            @else
                                <img class="img-fluid" src="{{env('BACKEND_APP_ASSETS_URL').$file['uri']}}" height="400px" alt="banner">

                            @endif
                        </div>
                        @endforeach
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 6"></span></div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            </div>
        </div>
    </section>
    @endforeach



@endsection
