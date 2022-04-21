@extends('layouts.home')
@section('content')

    <style>
        #page-account-settings > div > div.col-12.mt-75 > div > h4{
            text-align:center;
        }
    </style>
    <!-- account setting page -->
    <section id="page-account-settings">
        <div class="row">
            @if(Session::has('response'))
                <div class="col-12 mt-75">
                    @if(Session::get('response') === 'Saved Successfully')
                        <div class="alert alert-success mb-50" role="alert">
                            <h4 class="alert-heading">{{Session::get('response')}}</h4>
                        </div>
                    @elseif(Session::get('response') === 'error')
                        <div class="alert alert-danger mb-50" role="alert">
                            <h4 class="alert-heading">Oops! Something went wrong, please contact the site administrator!
                            </h4>
                        </div>
                    @endif

                </div>
            @endif


                @if(empty($currentStudent->profile_picture))
                    <div class="col-12 mt-75">

                        <div class="alert alert-danger mb-50" role="alert">
                            <h4 class="alert-heading text-center">Please upload a profile picture in <a href="{{route('profile')}}">General account settings!</a>
                            </h4>
                        </div>
                    </div>

                @elseif(empty($currentStudent->bio))
                    <div class="col-12 mt-75">

                        <div class="alert alert-warning mb-50" role="alert">
                            <h4 class="alert-heading text-center">Please update your Bio in <a class="text-success" onclick=" document.getElementById('account-pill-info').click();">Personal Details settings</a>
                            </h4>
                        </div>
                    </div>
                @endif


            <!-- left menu section -->
            <div class="col-md-3 mb-2 mb-md-0">
                <ul class="nav nav-pills flex-column nav-left">
                    <!-- general -->
                    <li class="nav-item">
                        <a
                            class="nav-link active"
                            id="account-pill-general"
                            data-bs-toggle="pill"
                            href="#account-vertical-general"
                            aria-expanded="true"
                        >
                            <i data-feather="user" class="font-medium-3 me-1"></i>
                            <span class="fw-bold">General</span>
                        </a>
                    </li>

                    <!-- change password -->
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            id="account-pill-password"
                            data-bs-toggle="pill"
                            href="#account-vertical-password"
                            aria-expanded="false"
                        >
                            <i data-feather="lock" class="font-medium-3 me-1"></i>
                            <span class="fw-bold">Change Password</span>
                        </a>
                    </li>

                    <!-- information -->
                    <li class="nav-item">
                        <a class="nav-link"
                            id="account-pill-info"
                            data-bs-toggle="pill"
                            href="#account-vertical-info"
                            aria-expanded="false">
                            <i data-feather="info" class="font-medium-3 me-1"></i>
                            <span class="fw-bold">Personal Details</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!--/ left menu section -->
            <!-- right content section -->

            <div class="col-md-9" >
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content">

                            <!-- general tab -->
                            <div
                                role="tabpanel"
                                class="tab-pane active"
                                id="account-vertical-general"
                                aria-labelledby="account-pill-general"
                                aria-expanded="true">

                                <form action="{{route('updateProfile')}}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <input type="text" hidden name="formType" value="general"/>
                                    <!-- header section -->
                                    <div class="d-flex">
                                        <a href="#" class="me-25">
                                            <img
                                                src="{{asset('storage/profilePictures/'.$currentStudent->profile_picture)}}"
                                                id="account-upload-img"
                                                class="rounded me-50"
                                                alt="profile image"
                                                height="80"
                                                width="80" />
                                        </a>

                                        <!-- upload and reset button -->
                                        <div class="mt-75 ms-1">
                                            <label for="account-upload" class="btn btn-sm btn-primary mb-75 me-75">Upload Profile Picture</label>
                                            <input name="profilePicture" hidden type="file" id="account-upload"  accept="image/*"/>
                                            <button class="btn btn-sm btn-outline-secondary mb-75">Reset</button>
                                            <p>Allowed JPG, GIF or PNG.</p>
                                        </div>

                                        <!--/ upload and reset button -->
                                    </div>
                                    <!--/ header section -->

                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <div class="mb-1">
                                                <label class="form-label" for="account-username">First Name</label>
                                                <input type="text"
                                                       class="form-control"
                                                       id="account-username"
                                                       style="background:transparent; border-color: grey; color:white"
                                                       name="firstName"
                                                       value="{{Auth::user()->firstname}}"
                                                       placeholder="First Name"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="mb-1">
                                                <label class="form-label" for="account-name">Last Name</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="account-name"
                                                    name="lastName"
                                                    style="background:transparent; border-color: grey; color:white"
                                                    placeholder="Last Name"
                                                    value="{{Auth::user()->lastname}}"/>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="mb-1">
                                                <label class="form-label" for="account-e-mail">E-mail <br/> <a href="#" title="Support Coming Soon">Contact support to change email address</a> </label>
                                                <input
                                                    type="email"
                                                    class="form-control"
                                                    id="account-e-mail"
                                                    style="background:transparent; border-color: grey; color:white"
                                                    name="email"
                                                    disabled
                                                    placeholder="Email"
                                                    value="{{Auth::user()->email}}"
                                                />
                                            </div>
                                        </div>

{{--                                        @if(Session::has('response'))--}}
{{--                                            <div class="col-12 mt-75">--}}
{{--                                                @if(Session::get('response') === 'Saved Successfully')--}}
{{--                                                    <div class="alert alert-success mb-50" role="alert">--}}
{{--                                                        <h4 class="alert-heading">{{Session::get('response')}}</h4>--}}
{{--                                                    </div>--}}
{{--                                                @elseif(Session::get('response') === 'error')--}}
{{--                                                    <div class="alert alert-danger mb-50" role="alert">--}}
{{--                                                        <h4 class="alert-heading">Oops! Something went wrong, please contact the site administrator!--}}
{{--                                                        </h4>--}}
{{--                                                    </div>--}}
{{--                                                @endif--}}

{{--                                            </div>--}}
{{--                                        @endif--}}

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mt-2 me-1">Save changes</button>
                                            <button type="reset" class="btn btn-outline-secondary mt-2">Cancel</button>
                                        </div>
                                    </div>
                                </form>

                                <!--/ form -->
                            </div>
                            <!--/ general tab -->

                            <!-- change password -->
                            <div
                                class="tab-pane fade"
                                id="account-vertical-password"
                                role="tabpanel"
                                aria-labelledby="account-pill-password"
                                aria-expanded="false"
                            >
                                <!-- form -->
                                <form action="{{route('updateProfile')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="text" hidden name="formType" value="changePassword"/>
                                    <input type="email" hidden name="email" value="{{Auth::user()->email}}"/>
                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <div class="mb-1">
                                                <label class="form-label" for="account-old-password">Old Password</label>
                                                <div class="input-group form-password-toggle input-group-merge">
                                                    <input
                                                        type="password"
                                                        class="form-control"
                                                        id="account-old-password"
                                                        name="current_password"
                                                        placeholder="Old Password"
                                                    />
                                                    <div class="input-group-text cursor-pointer">
                                                        <i data-feather="eye"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <div class="mb-1">
                                                <label class="form-label" for="account-new-password">New Password</label>
                                                <div class="input-group form-password-toggle input-group-merge">
                                                    <input
                                                        type="password"
                                                        id="account-new-password"
                                                        name="new_password"
                                                        class="form-control"
                                                        placeholder="New Password"
                                                        minlength="8"
                                                    />
                                                    <div class="input-group-text cursor-pointer">
                                                        <i data-feather="eye"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="mb-1">
                                                <label class="form-label" for="account-retype-new-password">Retype New Password</label>
                                                <div class="input-group form-password-toggle input-group-merge">
                                                    <input
                                                        type="password"
                                                        class="form-control"
                                                        id="account-retype-new-password"
                                                        name="confirm_new_password"
                                                        placeholder="New Password"
                                                        minlength="8"
                                                    />
                                                    <div class="input-group-text cursor-pointer"><i data-feather="eye"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary me-1 mt-1">Save changes</button>
                                            <button type="reset" class="btn btn-outline-secondary mt-1">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                                <!--/ form -->
                            </div>
                            <!--/ change password -->

                            <!-- information -->
                            <div
                                class="tab-pane fade"
                                id="account-vertical-info"
                                role="tabpanel"
                                aria-labelledby="account-pill-info"
                                aria-expanded="false">
                                <!-- form -->
                                <form action="{{route('updateProfile')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <label>
                                        <input type="text" hidden name="formType" value="details"/>
                                    </label>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="accountTextarea">Bio</label>
                                                <textarea
                                                    class="form-control"
                                                    id="accountTextarea"
                                                    rows="4"
                                                    name="bio"
                                                    placeholder="Your Bio  here..."
                                                >{{$currentStudent->bio}}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="mb-1">
                                                <label class="form-label" for="account-birth-date">Birth date</label>
                                                <input
                                                    type="date"
                                                    class="form-control flatpickr"
                                                    placeholder="Birth date"
                                                    id="account-birth-date"
                                                    name="dob"
                                                    value="{{$currentStudent->date_of_birth}}"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="mb-1">
                                                <label class="form-label" for="accountSelect">School</label>
                                                <select class="form-select" id="accountSelect" name="school">
                                                        @foreach($schools as $school)
                                                            @if($school['id'] === $currentStudent->school)
                                                                 <option selected value="{{$school['id']}}">{{$school['name']}}</option>
                                                            @else
                                                            <option value="{{$school['id']}}">{{$school['name']}}</option>
                                                            @endif
                                                        @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="mb-1">
                                                <label class="form-label" for="account-phone">Cell Phone Number</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="account-phone"
                                                    placeholder="(+27) 254 2568"
                                                    value="{{$currentStudent->cellphoneNumber}}"
                                                    name="cellphone_number"
                                                />
                                            </div>

                                            <div class="mb-1">
                                                <label class="form-label" for="account-phone">Next of Kin Full Name</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="account-phone"
                                                    placeholder="Next of Kin Full Name"
                                                    name="next_of_kin_fullName"
                                                    value="{{$currentStudent->next_of_kin_fullName}}"
                                                />
                                            </div>

                                            <div class="mb-1">
                                                <label class="form-label" for="account-phone">Next Of Kin Cell Phone Number</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="account-phone"
                                                    placeholder="Next of Kin Phone number"
                                                    name="next_of_kin_cellphoneNumber"
                                                    value="{{$currentStudent->next_of_kin_cellphoneNumber}}"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="mb-1">
                                                <label class="form-label" for="accountTextarea">Residential Address</label>
                                                <textarea
                                                    class="form-control"
                                                    id="accountTextarea"
                                                    rows="4"
                                                    name="residential_address"
                                                    placeholder="Your residential address here..."
                                                >{{$currentStudent->residential_address}}</textarea>
                                            </div>
                                            <div class="mb-1">
                                                <label class="form-label" for="accountTextarea">Postal Address</label>
                                                <textarea
                                                    class="form-control"
                                                    id="accountTextarea"
                                                    rows="4"
                                                    name="postal_address"
                                                    placeholder="Your postal address here..."
                                                >{{$currentStudent->postal_address}}</textarea>
                                            </div>

                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mt-1 me-1">Save changes</button>
                                            <button type="reset" class="btn btn-outline-secondary mt-1">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                                <!--/ form -->
                            </div>
                            <!--/ information -->

                        </div>
                    </div>
                </div>
            </div>
            <!--/ right content section -->






































        </div>
    </section>
    <!-- / account setting page -->
@endsection
