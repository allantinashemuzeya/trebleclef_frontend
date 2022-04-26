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
                    <h2 class="content-header-title float-start mb-0">{{$pageTitle}}</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index-2.html">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">{{$pageTitle}}</a>
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

    <div class="row match-height">

        @foreach($schools as $school)
            <div class="col-lg-3 col-md-12 col-sm-12">

                <a href="">
                    <div class="card card-congratulations" style="background-image:url({{asset('app-assets/images/banner/spark_schools_banner.png')}}); background-size: cover">
                        <div class="card-body text-center">

                            <div class="avatar avatar-xl bg-primary shadow">
                                <div class="avatar-content">
                                    <i class="font-large-1" data-feather="bell"></i>
                                </div>
                            </div>
                            <div class="mt-10">
                            </div>
                        </div>
                        <div class="item-options ">
                            <a  data-bs-toggle="modal" data-bs-target="#spark-site-{{$school['id']}}" href="" class="btn btn-primary btn-cart">
                                <i data-feather="book-open"></i>
                                <span class="add-to-cart">{{$school['name']}}</span>
                            </a>
                        </div>
                    </div>
                </a>

            </div>

        @endforeach

    </div>


    @foreach($schools as $school)
        <div class="d-inline-block">
            <!-- Modal -->
            <div class="modal fade text-start modal-success" id="spark-site-{{$school['id']}}" tabindex="-1" aria-labelledby="myModalLabel110" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-fullscreen" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel110">{{$school['name']}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <iframe src="https://sparkschools.co.za/schools/spark-{{$school['location']}}" height="900px" width="100%" title="Iframe Example"></iframe>
                        </div>
                        <div class="modal-footer">
                            <a target="_blank" href="https://sparkschools.co.za/schools/spark-{{$school['location']}}" type="button" class="btn btn-primary waves-effect waves-float waves-light" >Open on Spark's Website</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endforeach



@endsection
