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
    
    <style>
    .fade-in {
        transition: border-color 0.5s ease-out,
        background-color 0.5s ease-out,
        color 0.5s ease-out;
    }
</style>

<!-- Scripts -->
<script>
    const parentInput = $('#parentAccountTypeInput');
    const studentInput = $('#studentAccountTypeInput');

    parentInput.on('change', function() {
        const parentContainer = $('.custom-option-icon.parent-container');
        const color = parentInput.prop('checked') ? '#ea5455' : 'black';

        // Add the 'fade-in' class to trigger the CSS transition
        parentContainer.addClass('fade-in');

        setTimeout(function() {
            parentContainer.css('border', '1px solid ' + color);
            parentContainer.find('i').css('color', color);
            parentContainer.removeClass('fade-in');
        }, 50);
    });

    studentInput.on('change', function() {
        const studentContainer = $('.custom-option-icon.student-container');
        const color = studentInput.prop('checked') ? '#ea5455' : 'black';

        // Add the 'fade-in' class to trigger the CSS transition
        studentContainer.addClass('fade-in');

        setTimeout(function() {
            studentContainer.css('border', '1px solid ' + color);
            studentContainer.find('i').css('color', color);
            studentContainer.removeClass('fade-in');
        },50);
    });
</script>

@endsection
