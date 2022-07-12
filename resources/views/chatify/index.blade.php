@extends('layouts.home')
@section('content')

    <style>
        .ecommerce-application .grid-view:not(.wishlist-items), .ecommerce-application .list-view:not(.wishlist-items) {
            margin-top: -5rem;
            /* margin-left:-456px!important */
        }
        body .content-detached.content-right .content-body {
             margin-left: 0!important;
        }
        div.item-img.text-center > img{
            object-fit: cover;
            height: 100%;
        }
        div.item-img.text-center{
            height: 100%;
            padding: 0!important;
        }
        div.card-body,  #ecommerce-header{
            display: none;
        }

        body > div.app-content.content > div.content-wrapper.container-xxl.p-0 > main > div.app-content.content.ecommerce-application.m-0 > div > iframe{
            position: absolute;
            top: -2%;
            left: 0%;
        }

    </style>
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-start mb-0">Subjects</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#"></a>
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
    <div class="app-content content ecommerce-application m-0">

        <div class="content-wrapper container-xxl p-0">


            <iframe src="{{env('APP_URL').'/chatify'}}" title="" width="100%" height="850px">
            </iframe>
        </div>
    </div>
    <!-- END: Content-->
@endsection
