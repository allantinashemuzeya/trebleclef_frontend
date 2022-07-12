@extends('layouts.home')
@section('content')

    <style>
        .ecommerce-application .grid-view:not(.wishlist-items), .ecommerce-application .list-view:not(.wishlist-items) {
            margin-top: 2rem;
            margin-left: -402px!important;
        }
        .img-fluid, .img-thumbnail {
            max-width: 100%;
            height: 100%;
            width: 100%;
        }
    </style>
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-start mb-0">{{$pageTitle}}</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a>
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
    <!-- BEGIN: Content-->
    <div style="margin: 0;" class="app-content content ecommerce-application m-0">

        <div class="content-wrapper container-xxl p-0">

            <div class="content-detached content-right">
                <div style="margin-left: 0;" class="content-body">
                    <!-- E-commerce Content Section Starts -->
                    <section id="ecommerce-header">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="ecommerce-header-items">
                                    <div class="result-toggler">
                                        <button class="navbar-toggler shop-sidebar-toggler" type="button"
                                                data-bs-toggle="collapse">
                                            <span class="navbar-toggler-icon d-block d-lg-none"><i
                                                    data-feather="menu"></i></span>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>

                    <div class="body-content-overlay"></div>


                    <section style="margin-left: 0!important" id="ecommerce-products" class="grid-view">

                        @foreach($communications as $communication)
                            <div class="card ecommerce-card">

                                    @if($communication['banner'] !== null)
                                        @if($communication['banner']['type'] === 'video/mp4' )
                                        <div style="max-height: 80%;height: 80%;" class="item-img text-center pt-0 ">

                                            <video style="    max-height: 279px; width: 115%;" autoplay loop controls muted>
                                                <source src="{{$communication['banner']['file']}}" type="{{$communication['banner']['type']}}"/>
                                            </video>
                                            </div>

                                        @else
                                        <div style="height: 80%;max-height: 80%;" class="item-img text-center pt-0 ">

                                            <img class="img-fluid" src="{{$communication['banner']['file']}}" alt="comm banner"/>
                                            </div>

                                            @endif
                                    @endif
                                <!-- <div class="card-body">
                                    <div class="item-wrapper">
                                        <div>
                                        </div>
                                    </div>
                                    <h6 class="item-name">
                                        <a class="text-body" href=""></a>
                                    </h6>

                                </div>   -->
                                <div style="height: 20%;" class="item-options text-center ">
                                        <a href="{{route('communication', $communication['id'])}}" class="btn btn-primary btn-cart">
                                        <i data-feather="bell"></i>
                                        <span >{{$communication['title']}}</span>
                                    </a>
                                </div>
                            </div>
                        @endforeach

                    </section>
                    <!-- E-commerce Products Ends -->

                    @if(count($communications) > 20)
                        <!-- E-commerce Pagination Starts -->

                            <section id="ecommerce-pagination">
                            <div class="row">
                                <div class="col-sm-12">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-center mt-2">
                                            <li class="page-item prev-item"><a class="page-link" href="#"></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item" aria-current="page"><a class="page-link" href="#">4</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                                            <li class="page-item"><a class="page-link" href="#">7</a></li>
                                            <li class="page-item next-item"><a class="page-link" href="#"></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </section>
                        <!-- E-commerce Pagination Ends -->
                    @endif


                </div>
            </div>

        </div>
    </div>
    <!-- END: Content-->
@endsection
