@extends('layouts.login')
@section('content')

<div class="auth-wrapper auth-v2">
    <div class="auth-inner row m-0">

        <div class="d-none d-lg-flex col-lg-8 align-items-center first">

            <video class="d-flex col-lg-12 first" autoplay muted loop style="border-radius: 25px">
                <source src="{{ asset('app-assets/videos/home.mp4') }}" type="video/mp4"/>
            </video>
        </div>

        <!-- Login-->
        <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
            <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                <h2 class="card-title fw-bold mb-1">
                    Welcome to Trebleclef Music & Arts Academy
                </h2>
                <p class="card-text mb-2">Please sign-in to your account and start the adventure</p>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form class="auth-login-form mt-2" method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="mb-1">
                        <label class="form-label" for="login-email">Email</label>
                        <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                    </div>

                    <!-- Password -->
                    <div class="mb-1">
                        @if (Route::has('password.request'))
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="login-password">Password</label>
                                <a href="{{ route('password.request') }}">
                                    <small> {{ __('Forgot your password?')}}</small>
                                </a>
                            </div>
                        @endif

                        <div class="d-flex justify-content-between">
                            <label for="password" :value="__('Password')" />
                        </div>

                        <div class="input-group input-group-merge form-password-toggle">
                            <input id="password" class="form-control form-control-merge" type="password" name="password" required autocomplete="current-password" />
                        </div>

                    </div>

                    <!-- Remember Me -->
                    <div class="mb-1">
                         <div class="form-check">
                            <input value="1" id="remember_me" type="checkbox" class="form-check-input rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                            <label class="form-check-label" for="remember-me"> Remember Me</label>
                        </div>
                    </div>

                    <input type="text" hidden="" name="context" value="student" />
                    <button type="submit" class="btn btn-primary w-100" tabindex="4">Sign in</button>

                </form>

                <p class="text-center mt-2">
                    <span>New on our platform?</span>
                    <a href="{{ route('register') }}">
                        <span>&nbsp;Create an account</span>
                    </a>
                </p>
            </div>
        </div>
        <!-- /Login-->
    </div>
</div>


@endsection

<script>
    $(window).on('load',  function(){
      if (feather) {
        feather.replace({ width: 14, height: 14 });
      }
    })
</script>
