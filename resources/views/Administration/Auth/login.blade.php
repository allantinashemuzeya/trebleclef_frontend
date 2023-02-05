@extends('Administration.layouts.auth')
@section('content')
    <div class="row no-gutters">
        <div class="col-xl-12">
            <div class="auth-form">
                <div class="text-center mb-3">
                    <img src="{{asset('app-assets/images/logo/treble Clef_logo original.png')}}" alt="">
                </div>
                <h4 class="text-center mb-4">TREBLECLEF MUSIC AND ARTS ACADEMY <br/> SYSTEM ADMINISTRATION INTERFACE</h4>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label class="mb-1"><strong>Email</strong></label>
                        <input type="email" name="email" class="form-control" :value="old('email')">
                    </div>
                    <div class="form-group">
                        @if (Route::has('password.request'))
                            <div class="d-flex justify-content-between">
                                <label class="mb-1"><strong>Password</strong></label>
                                <a href="{{ route('password.request') }}">
                                    <small> {{ __('Forgot your password?')}}</small>
                                </a>
                            </div>
                        @endif
                            <div class="d-flex justify-content-between">
                                <label for="password" :value="__('Password')" />
                            </div>
                            <input id="password" class="form-control form-control-merge" type="password" name="password" required autocomplete="current-password" />
                    </div>
                    <div class="form-row d-flex justify-content-between mt-4 mb-2">
                        <div class="form-group">
                            <div class="custom-control custom-checkbox ms-1">
                                <input value="1" id="remember_me" type="checkbox" class="form-check-input rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                <label class="form-check-label" for="basic_checkbox_1">Remember my preference</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <a href="">Forgot Password?</a>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-block">Sign Me In</button>
                    </div>
                </form>
                <div class="new-account mt-3">
                    <p>Don't have an account? <a class="text-primary" href="{{route('admin_register')}}">Sign up</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
