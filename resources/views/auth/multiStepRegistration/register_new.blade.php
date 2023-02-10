@extends('auth.multiStepRegistration.register-layout')
@section('content')
    <form action="#" id="wizard">
        <h2></h2>
        <section>
            <div class="inner">
                <div class="image-holder">
                    <img src="{{asset('multiStepRegistrationForm/images/WhatsApp-Image-2021-12-21-at-9.21.47-PM-300x458.jpeg')}}" alt="">
                </div>
                <div class="form-content">
                    <div class="form-header">
                        <h3>Registration</h3>
                    </div>
                    <p>Please fill with your details</p>
                    <div class="form-row">
                        <div class="form-holder">
                            <input type="text" placeholder="First Name" class="form-control">
                        </div>
                        <div class="form-holder">
                            <input type="text" placeholder="Last Name" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-holder">
                            <input type="text" placeholder="Your Email" class="form-control">
                        </div>
                        <div class="form-holder">
                            <input type="text" placeholder="Phone Number" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-holder">
                            <input type="text" placeholder="Age" class="form-control">
                        </div>
                        <div class="form-holder" style="align-self: flex-end; transform: translateY(4px);">
                            <div class="checkbox-tick">
                                <label class="male">
                                    <input type="radio" name="gender" value="male" checked> Male<br>
                                    <span class="checkmark"></span>
                                </label>
                                <label class="female">
                                    <input type="radio" name="gender" value="female"> Female<br>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="checkbox-circle">
                        <label>
                            <input type="checkbox" checked> Nor again is there anyone who loves or pursues or desires to
                            obtaini.
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
            </div>
        </section>

        <h2></h2>
        <section>
            <div class="inner">
                <div class="image-holder">
                    <img src="{{asset('multiStepRegistrationForm/images/form-wizard-2.jpg')}}" alt="">
                </div>
                <div class="form-content">
                    <div class="form-header">
                        <h3>Registration</h3>
                    </div>
                    <p>Please fill with additional info</p>
                    <div class="form-row">
                        <div class="form-holder w-100">
                            <input type="text" placeholder="Address" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-holder">
                            <input type="text" placeholder="City" class="form-control">
                        </div>
                        <div class="form-holder">
                            <input type="text" placeholder="Zip Code" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="select">
                            <div class="form-holder">
                                <div class="select-control">Your country</div>
                                <i class="zmdi zmdi-caret-down"></i>
                            </div>
                            <ul class="dropdown">
                                <li rel="United States">United States</li>
                                <li rel="United Kingdom">United Kingdom</li>
                                <li rel="Viet Nam">Viet Nam</li>
                            </ul>
                        </div>
                        <div class="form-holder"></div>
                    </div>
                </div>
            </div>
        </section>

        <h2></h2>
        <section>
            <div class="inner">
                <div class="image-holder">
                    <img src="{{asset('multiStepRegistrationForm/images/form-wizard-3.jpg')}}" alt="">
                </div>
                <div class="form-content">
                    <div class="form-header">
                        <h3>Registration</h3>
                    </div>
                    <p>Send an optional message</p>
                    <div class="form-row">
                        <div class="form-holder w-100">
                            <textarea name="" id="" placeholder="Your messagere here!" class="form-control"
                                      style="height: 99px;"></textarea>
                        </div>
                    </div>
                    <div class="checkbox-circle mt-24">
                        <label>
                            <input type="checkbox" checked> Please accept <a href="#">terms and conditions ?</a>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
            </div>
        </section>
    </form>

@endsection
