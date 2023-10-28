@extends('layouts.login')
@section('content')
    <style>
        .reg-title {
            width: 45%;
            border-radius: 20px;
            text-align: center;
            padding: 3px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>

    <div class="auth-wrapper auth-v2">
        <div class="auth-inner row m-0">
            <div class="d-none d-lg-flex col-lg-6 align-items-center first">

                <video class="d-flex col-lg-12 first" autoplay muted loop style="border-radius: 25px">
                    <source src="{{ asset('app-assets/videos/home.mp4') }}" type="video/mp4"/>
                </video>
            </div>
            <!-- Login style="overflow:scroll;height:100vh;padding-top: 50vh!important;" -->
            <div class="d-flex col-lg-6 align-items-center auth-bg px-2 p-lg-5">
                <div style="overflow-y: scroll;height: 90vh;" class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                    <h2 class="card-title fw-bold mb-1">
                        Get A Treble Clef Academy Account Now👋
                    </h2>
                    <p class="card-text mb-2">Please register your account and start the adventure</p>

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')"/>

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors"/>

                    <form class="auth-login-form mt-2" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="d-flex">
                            <a href="#" class="me-25">

                            </a>

                            <!--/ upload and reset button -->
                        </div>

                        <div class="">
                            <h5 class="card-title  btn-primary text-white reg-title fw-bold mb-1">
                                Student Details
                            </h5>

                            <p class="text-warning">Please note all fields are required...</p>

                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="login-email">Username</label>
                                        <input id="username" class="form-control" type="text" name="username"
                                               :value="old('username')" required autofocus/>
                                    </div>

                                    <div class="mb-1">
                                        <label class="form-label" for="login-email">First name and Last name</label>
                                        <input id="first_name" class="form-control" type="text" name="name" :value="old('firstname')" required autofocus/>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="login-email">Date of Birth</label>
                                        <input id="age" class="form-control" type="date" name="dob" :value="23" required autofocus/>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="login-gender">Gender</label>
                                        <select id="login-gender" class="form-control" type="text" name="gender" required autofocus>
                                            <option value="male">
                                                Male
                                            </option>
                                            <option value="female">
                                                Female
                                            </option>
                                            <option value="other">
                                                Other
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="login-email">Instrument/Activity</label>
                                        <select id="login-school" class="form-control" type="text" name="instrument" required autofocus>
                                            @foreach($instruments as $instrument)
                                                <option value="{{$instrument->value}}">
                                                    {{$instrument->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="login-school">School</label>
                                        <select id="login-school" class="form-control" type="text" name="school" required autofocus>
                                            @foreach($schools as $school)
                                                <option value="{{$school->id}}">
                                                    {{$school->name}}

                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="login-school">Grade</label>
                                        <select id="login-school" class="form-control" type="text" name="grade" required autofocus>
                                                @foreach($grades as $grade)
                                                    <option value="{{$grade->value}}">
                                                        {{$grade->name}}
                                                    </option>
                                                @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-1 ">
                            <h5 class="card-title  btn-primary text-white reg-title fw-bold mb-1">
                                Contact Details
                            </h5>

                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="login-email">Cellphone Number</label>
                                        <input id="cell1" class="form-control" type="tel" name="cellphoneNumber"
                                              placeholder="(+27)...." required autofocus/>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="login-email">Email Address</label>
                                        <input id="login-email" class="form-control" type="email" name="email"
                                               :value="old('email')" required autofocus/>
                                    </div>
                                </div>
                            </div>

                            <!-- Password -->
                            <hr/>
                            <h5 class="card-title  btn-primary text-white reg-title fw-bold mb-1">
                                Create a password
                            </h5>


                            <div class="mb-1">

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
                        </div>

                        <!-- upload and reset button -->
                        <div class="mt-3 ">
                            <h5 class="card-title  btn-primary text-white reg-title fw-bold mb-1">
                                Add a profile picture
                            </h5>

                            <div class="mt-75 ms-1">
                            <input class="btn btn-sm btn-secondary mb-75 me-75" name="profilePicture"  type="file" id="account-upload"  accept="image/*"/>
                            <p>Allowed JPG, GIF or PNG.</p>
                            </div>
                        </div>

                        <input type="text" hidden="" name="context" value="student" />
                        <button type="submit" class="btn btn-primary w-100" tabindex="4">Sign Up</button>

                    </form>

                    <p class="text-center mt-2">
                        <span>Already have a platform?</span>
                        <a href="{{ route('login') }}">
                            <span>&nbsp;Login</span>
                        </a>
                    </p>


                </div>
            </div>
            <!-- /Login-->
        </div>
    </div>

@endsection
<!-- @push('scripts')
    This will be second...
@endpush -->
@push('select2')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(window).on('load', function () {
            if (feather) {
                feather.replace({width: 14, height: 14});
            }
        })
        $(document).ready(function () {
            $('.js-example-basic-single').select2();
        });
    </script>
@endpush


