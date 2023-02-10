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

                <form class="auth-login-form mt-2" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="mb-1"><strong>Username</strong></label>
                        <label class="form-label" for="login-email">CAN BE YOUR FIRST NAME AND LAST NAME</label>
                        <input id="first_name" class="form-control" type="text" name="name"
                               :value="old('firstname')" required autofocus/>
                    </div>
                    <div class="form-group">
                        <label class="mb-1"><strong>Email</strong></label>
                        <input id="login-email" class="form-control" type="email" name="email"
                               :value="old('email')" required autofocus/>
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between">
                            <label class="form-label" for="login-password"> Password</label>
                        </div>

                        <div class="input-group input-group-merge form-password-toggle">
                            <input id="login-password" class="form-control form-control-merge" type="password"
                                   name="password" value="12345678"required autocomplete="current-password"/>
                        </div>

                        <br/>

                        <div class="d-flex justify-content-between">
                            <label class="form-label" for="login-password">Confirm Password</label>
                        </div>

                        <div class="input-group input-group-merge form-password-toggle">
                            <input id="password_confirmation" class="form-control form-control-merge"
                                   type="password" value="12345678" name="password_confirmation" required
                                   autocomplete="current-password"/>
                        </div>
                    </div>
                    <input type="text" hidden="" name="context" value="administration" />
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign me up</button>
                    </div>

                </form>
                <div class="new-account mt-3">
                    <p>Already have an account? <a class="text-primary" href="{{route('admin_login')}}">Sign In</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
