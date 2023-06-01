@extends('layouts.v2.auth')
@section('content')
    <!-- Left Text -->
    <!--suppress XmlUnboundNsPrefix -->
    <div class="d-none d-lg-flex col-lg-6 align-items-center justify-content-center p-5 auth-cover-bg-color position-relative auth-multisteps-bg-height">
        <video class="d-flex col-lg-12 first" autoplay muted loop style="border-radius: 25px">
            <source src="{{ asset('app-assets/videos/home.mp4') }}" type="video/mp4"/>
        </video>
        <img src="/WebApplication/assets/img/illustrations/bg-shape-image-dark.png" alt="auth-register-multisteps" class="platform-bg" data-app-light-img="illustrations/bg-shape-image-light.png" data-app-dark-img="illustrations/bg-shape-image-dark.png">
    </div>
    <!-- /Left Text -->

    <!--  Multi Steps Registration -->
    <div class="d-flex col-lg-6 align-items-center justify-content-center p-sm-5 p-3">
        <div class="w-px-700">
           <livewire:registration :page="$page"/>
        </div>
    </div>
    <!-- / Multi Steps Registration -->

    <style>
        body > div.authentication-wrapper.authentication-cover.authentication-bg > div > div.d-none.d-lg-flex.col-lg-6.align-items-center.justify-content-center.p-5.auth-cover-bg-color.position-relative.auth-multisteps-bg-height > img{
            position:absolute;
            width: 700px;
            height: 80vh;
            top: 1rem;
        }
        body > div.authentication-wrapper.authentication-cover.authentication-bg > div > div.d-none.d-lg-flex.col-lg-6.align-items-center.justify-content-center.p-5.auth-cover-bg-color.position-relative.auth-multisteps-bg-height > video{
            width: 628px;
            left: 5rem;
            position: absolute;
            top: 28%;
        }
    </style>
@endsection
