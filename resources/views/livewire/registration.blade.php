<div id="multiStepsValidation" class="bs-stepper shadow-none" >
    <div class="bs-stepper-header border-bottom-0">
        <div class="step" data-target="#accountDetailsValidation">
            <button type="button" class="step-trigger">
                <span class="bs-stepper-circle bg-danger">
                    <i class="ti ti-smart-home ti-sm"></i>
                </span>
                <span class="bs-stepper-label">
                  <span class="bs-stepper-title">Account</span>
                  <span class="bs-stepper-subtitle">Account Details</span>
                </span>
            </button>
        </div>
        <div class="line">
            <i class="ti ti-chevron-right"></i>
        </div>
        <div class="step " data-target="#personalInfoValidation">
            <button type="button" class="step-trigger">
                <span class="bs-stepper-circle"><i class="ti ti-users ti-sm"></i></span>
                <span class="bs-stepper-label">
                  <span class="bs-stepper-title">Personal</span>
                  <span class="bs-stepper-subtitle">Enter Information</span>
                </span>
            </button>
        </div>
        <div class="line">
            <i class="ti ti-chevron-right"></i>
        </div>
        <div class="step" data-target="#billingLinksValidation">
            <button type="button" class="step-trigger">
                <span class="bs-stepper-circle"><i
                        class="ti ti-file-text ti-sm"></i></span>
                <span class="bs-stepper-label">
                  <span class="bs-stepper-title">Finish</span>
                  <span class="bs-stepper-subtitle">Complete Account Creation</span>
                </span>
            </button>
        </div>
    </div>

    <div class="bs-stepper-content">
        <form id="multiStepsForm" wire:submit.prevent wire:ignore>
            <!-- Account Details -->
            <div id="accountDetailsValidation" class="content">
                <div class="content-header mb-4">
                    <h3 class="mb-1">Account Information</h3>
                    <p>Enter Your Account Details</p>
                </div>
                <div class="row g-3">
                    <div class="col-sm-12">
                        <div class="row gy-3">
                            <div class="col-md">
                                <div class="form-check custom-option custom-option-icon parent-container checked" >
                                    <label
                                        class="form-check-label custom-option-content checked"
                                        title="I am a parent or guardian registering on behalf of my children."
                                        for="parentAccountTypeInput">
                                        <span class="custom-option-body">
                                            <i class="fa-solid fa-users"></i>
                                            <span class="custom-option-title"> Parent </span>
                                          <small> I am a Parent / Guardian </small>
                                        </span>
                                        <input class="form-check-input"
                                               type="radio"
                                               value="parent"
                                               id="parentAccountTypeInput"
                                               wire:model="accountType">
                                    </label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div
                                    class="form-check custom-option custom-option-icon student-container">
                                    <label
                                        class="form-check-label custom-option-content"
                                        title="I am a student older than 16 years registering on behalf of myself."
                                        for="studentAccountTypeInput">
                                        <span class="custom-option-body">
                                            <i class="fa-solid fa-graduation-cap"></i>
                                            <span class="custom-option-title">Student </span>
                                          <small>I am an independent Student</small>
                                        </span>
                                        <input  class="form-check-input"
                                               type="radio" value="student"
                                               id="studentAccountTypeInput"
                                               wire:model="accountType">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label" for="multiStepsUsername">Username</label>
                        <input type="text" name="multiStepsUsername"
                               id="multiStepsUsername" class="form-control"
                               wire:model="username"
                               placeholder="johndoe"/>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label"
                               for="multiStepsEmail">Email</label>

                        <input type="email" name="multiStepsEmail"
                               id="multiStepsEmail" class="form-control"
                               placeholder="john.doe@email.com"
                               wire:model="email"
                               aria-label="john.doe"/>
                    </div>
                    <div class="col-sm-6 form-password-toggle">
                        <label class="form-label"
                               for="multiStepsPass">Password</label>
                        <div class="input-group input-group-merge">
                            <input type="password" id="multiStepsPass"
                                   name="multiStepsPass" class="form-control"
                                   placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                   wire:model="password"
                                   aria-describedby="multiStepsPass2"/>
                            <span class="input-group-text cursor-pointer"
                                  id="multiStepsPass2"><i
                                    class="ti ti-eye-off"></i></span>
                        </div>
                    </div>
                    <div class="col-sm-6 form-password-toggle">
                        <label class="form-label" for="multiStepsConfirmPass">Confirm
                            Password</label>
                        <div class="input-group input-group-merge">
                            <input type="password" id="multiStepsConfirmPass"
                                   name="multiStepsConfirmPass"
                                   class="form-control"
                                   minlength="8"
                                   placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                   wire:model="passwordConfirmation"
                                   aria-describedby="multiStepsConfirmPass2"/>
                            <span class="input-group-text cursor-pointer"
                                  id="multiStepsConfirmPass2"><i class="ti ti-eye-off"></i>
                            </span>
                        </div>
                    </div>

                    <div class="col-12 d-flex justify-content-between mt-4">
                        <button class="btn btn-label-secondary btn-prev"
                                disabled><i class="ti ti-arrow-left ti-xs me-sm-1 me-0">
                            </i>
                            <span class="align-middle d-sm-inline-block d-none">
                                Previous
                            </span>
                        </button>

                        <button class="btn btn-primary btn-next">
                            <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">
                                Next
                            </span>
                            <i class="ti ti-arrow-right ti-xs"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Personal Info -->
            <div id="personalInfoValidation" class="content">
                <div class="content-header mb-4">
                    <h3 class="mb-1">Personal Information</h3>
                    <p>Enter Your Personal Information</p>
                </div>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label class="form-label" for="multiStepsFirstName">First
                            Name</label>
                        <input type="text" id="multiStepsFirstName"
                                class="form-control"
                                 required
                                 wire:model="firstName"
                               placeholder="John"/>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="multiStepsLastName">Last
                            Name</label>
                        <input type="text" id="multiStepsLastName"
                               class="form-control"
                               required
                               wire:model="lastName"
                               placeholder="Doe"/>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label"
                               for="multiStepsMobile">Mobile</label>
                        <div class="input-group">
                            <span class="input-group-text">ZA (+27)</span>
                            <input type="text" id="multiStepsMobile"
                                   name="multiStepsMobile"
                                   class="form-control multi-steps-mobile"
                                   required
                                      wire:model="phoneNumber"
                                   placeholder="101 102 103"/>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="multiStepsPincode">Postal Code</label>
                        <input type="text" id="multiStepsPincode"
                               wire:model="postalCode"
                               class="form-control multi-steps-pincode"
                               required
                               placeholder="Postal Code" maxlength="6"/>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="multiStepsAddress">Address</label>
                        <input type="text" id="multiStepsAddress"
                               name="multiStepsAddress" class="form-control"
                               wire:model="address"
                               required
                               placeholder="Address"/>
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label" for="multiStepsCity">City</label>
                        <input
                            type="text"
                            id="multiStepsCity"
                            wire:model="city"
                            required
                            class="form-control"
                            placeholder="Midrand"/>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label"
                               for="multiStepsState">Province</label>
                        <select id="multiStepsState" class="select2 form-select"
                                data-allow-clear="true" type="text"
                                wire:model="province">
                            <option value="">Select</option>
                            @foreach($page['provinces'] as $province)
                                <option value="{{$province['id']}}">
                                    {{$province['name']}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 d-flex justify-content-between mt-4">
                        <button class="btn btn-label-secondary btn-prev"><i
                                class="ti ti-arrow-left ti-xs me-sm-1 me-0"></i>
                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                        </button>

                        <button class="btn btn-primary btn-next"
                                wire:click.prevent="submit">
                            <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">
                                Create Account
                            </span>
                            <i class="ti ti-arrow-right ti-xs"></i>
                        </button>

                    </div>
                </div>
            </div>

            <!-- Billing Links -->
            <div id="billingLinksValidation" class="content">
                <div class="content-header">
                    <h3 class="mb-1 text-success" >Welcome to Trebleclef Online</h3>
                    @if(Auth::check())
                        <p>{{ $message }}</p>
                    @endif
                </div>
                <!-- Credit Card Details -->
                <div class="row g-3">
                    <div class="col-12 d-flex justify-content-between mt-4">
                        <button class="btn btn-label-secondary btn-prev"><i
                                class="ti ti-arrow-left ti-xs me-sm-1 me-0"></i>
                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                        </button>
                        <button type="submit" class="btn btn-success btn-next btn-submit">
                            Got to Dashboard
                        </button>
                    </div>
                </div>
                <!--/ Credit Card Details -->
            </div>
        </form>
    </div>
</div>

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
