@extends('layouts.login')
@section('content')
<style>
.reg-title{  
    width: 35%;
    border-radius: 20px;
    text-align: center;
    padding: 3px;
}   
    </style>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<div class="auth-wrapper auth-v2">
    <div class="auth-inner row m-0">

        <video class="d-flex bg-white  col-lg-7" autoplay muted loop>
            <source src="{{ asset('app-assets/videos/home.mp4') }}" type="video/mp4"/>
        </video>        
        <!-- Login style="overflow:scroll;height:100vh;padding-top: 50vh!important;" -->         
        <div  class="d-flex col-lg-5 align-items-center auth-bg px-2 p-lg-5">
            <div style="overflow: scroll;height: 90vh;" class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                <h2 class="card-title fw-bold mb-1"> 
                    Get Treble Clef Academy Account 👋  
                </h2>
                <p class="card-text mb-2">Please register your account and start the adventure</p>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form class="auth-login-form mt-2" method="POST" action="{{ route('register') }}">  
                    @csrf

                    <div class="">   
                            <h5 class="card-title  btn-primary text-white reg-title fw-bold mb-1"> 
                            Applicants' Details
                            </h5> 

                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="mb-1">
                                    <label class="form-label" for="login-email">First Name</label>
                                    <input id="firstname" class="form-control" type="text" name="firstname" :value="old('firstname')" required autofocus />
                                </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"> 
                                <div class="mb-1"> 
                                    <label class="form-label" for="login-email">Surname</label>
                                    <input id="lastname" class="form-control" type="text" name="lastname" :value="old('lastname')" required autofocus />
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="mb-1">
                                    <label class="form-label" for="login-email">Marital Status</label>
                                    <input id="marital_status" class="form-control" type="text" name="marital_status" :value="old('marital_status')" required autofocus />
                                </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="mb-1">  
                                    <label class="form-label" for="login-email">Age</label>  
                                    <input id="age" class="form-control" type="number" name="age" :value="old('age')" required autofocus />
                                </div>
                                </div>
                            </div>


                     </div>

                     <div class="mt-3 ">   
                            <h5 class="card-title  btn-primary text-white reg-title fw-bold mb-1"> 
                            Contact Particular
                            </h5> 

                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="mb-1">  
                                    <label class="form-label" for="login-email">Residential Address</label>
                                    <textarea class="form-control" name="residential_address" id="exampleFormControlTextarea1" rows="3"></textarea>
 
                                    <!-- <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus /> -->
                                </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="mb-1"> 
                                    <label class="form-label" for="login-email">Postal Address</label>
                                    <textarea class="form-control" name="postal_address" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                </div>
                            </div>   

                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="mb-1">
                                    <label class="form-label" for="login-email">Home</label>
                                    <input id="home" class="form-control" type="text" name="home" :value="old('home')" required autofocus />
                                </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="mb-1">  
                                    <label class="form-label" for="login-email">Email 1</label>
                                    <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="mb-1">
                                    <label class="form-label" for="login-email">Office</label>
                                    <input id="office" class="form-control" type="email" name="office" :value="old('office')" required autofocus />
                                </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="mb-1">  
                                    <label class="form-label" for="login-email">Email 2</label>
                                    <input id="email2" class="form-control" type="email" name="email2" :value="old('email2')" required autofocus />
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="mb-1">
                                    <label class="form-label" for="login-email">Cell 1</label>
                                    <input id="cell1" class="form-control" type="phone" name="cell1" :value="old('cell1')" required autofocus />
                                </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="mb-1">  
                                    <label class="form-label" for="login-email">Next of KIN</label>
                                    <input id="next_of_kin" class="form-control" type="text" name="next_of_kin" :value="old('next_of_kin')" required autofocus />
                                </div> 
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="mb-1">
                                    <label class="form-label" for="login-email">Cell 2 </label>
                                    <input id="cell2" class="form-control" type="text" name="cell2" :value="old('cell2')" required autofocus />
                                </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="mb-1">  
                                    <label class="form-label" for="login-email">Cell Phone </label>
                                    <input id="cell_phone" class="form-control" type="text" name="cell_phone" :value="old('cell_phone')" required autofocus />
                                </div>
                                </div>
                            </div>

                              <!-- Password -->  
                    <div class="mb-1">
                        @if (Route::has('password.request'))
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="login-password">Password</label>  
                            </div>
                        @endif

                        <div class="d-flex justify-content-between">
                            <label for="password" :value="__('Password')" />
                        </div>

                        <div class="input-group input-group-merge form-password-toggle">
                            <input id="password" class="form-control form-control-merge" type="password" name="password" required autocomplete="current-password" />
                        </div>

                        <div class="d-flex justify-content-between"> 
                                <label class="form-label" for="login-password">Confirm Password</label>  
                            </div> 

                        <div class="input-group input-group-merge form-password-toggle">
                            <input id="password_confirmation" class="form-control form-control-merge" type="password" name="password_confirmation" required autocomplete="current-password" />
                        </div>

                    </div>    
                     </div>


                     <div class="mt-5">   
                            <h5 class="card-title  btn-primary text-white reg-title fw-bold mb-1"> 
                            Activity
                            </h5>   
  
                            <div class="row">  
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="mb-1">     
                                    <label class="form-label" for="login-email">Student Level </label>
                                    <!-- <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus /> --> 
                                    <select name="student_level" class="form-control js-example-basic-single">
                                    <option disabled selected>Choose Student Level</option>      
                                    @foreach($studentLevels as $item)
                                    <option>{{$item['title']}}</option>  
                                    @endforeach 
                                    </select>            
                                </div>   
                                </div>   
                            </div>           
   
                           
                            <div class="row">  
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="mb-1">         
                                    <label class="form-label" for="login-email">Activity 1:</label>
                                    <!-- <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus /> --> 
                                    <select name="activity[]" class="form-control">
                                    <option disabled selected>Choose Student Level</option>  
                                    @foreach($studentLevels as $item)
                                    <option>{{$item['title']}}</option>  
                                    @endforeach 
                                    </select>
                                </div>
                                </div> 
                            </div>


                     </div>

                  
                   

                  

                    <button type="submit" class="btn btn-primary w-100" tabindex="4">Sign in</button>

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
    $(window).on('load',  function(){
      if (feather) {
        feather.replace({ width: 14, height: 14 });
      }
    })
    $(document).ready(function() {
    $('.js-example-basic-single').select2();
     });
</script>
@endpush 

