<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Trebleclef Music & Arts Academy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('multiStepRegistrationForm/fonts/material-design-iconic-font/css/material-design-iconic-font.css')}}">
    <link rel="stylesheet" href="{{asset('multiStepRegistrationForm/css/style.css')}}">
    <meta name="robots" content="noindex, follow">
</head>
<body>
<div class="wrapper">
        @yield('content')
</div>

<script src="{{asset('multiStepRegistrationForm/js/jquery-3.3.1.min.js')}}"></script>

<script src="{{asset('multiStepRegistrationForm/js/jquery.steps.js')}}"></script>
<script src="{{asset('multiStepRegistrationForm/js/main.js')}}"></script>


<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
        integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
        data-cf-beacon='{"rayId":"793e4491c8d93ce6","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.3","si":100}'
        crossorigin="anonymous"></script>
</body>
</html>



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

            <p class="text-warning">Please note all fields are required..</p>

            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="mb-1">
                        <label class="form-label" for="login-email">First Name and Last Name</label>
                        <input id="first_name" class="form-control" type="text" name="name"
                               :value="old('firstname')" required autofocus/>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="mb-1">
                        <label class="form-label" for="login-email">Date of Birth</label>
                        <input id="age" class="form-control" type="date" name="dob"
                               :value="23" required autofocus/>
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
                                <option value="{{$school->uuid}}">
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


        <button type="submit" class="btn btn-primary w-100" tabindex="4">Sign Up</button>

    </form>

    <p class="text-center mt-2">
        <span>Already have a platform?</span>
        <a href="{{ route('login') }}">
            <span>&nbsp;Login</span>
        </a>
    </p>


</div>
