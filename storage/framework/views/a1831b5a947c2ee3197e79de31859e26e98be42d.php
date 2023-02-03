<?php $__env->startSection('content'); ?>

    <style>
        #page-account-settings > div > div.col-12.mt-75 > div > h4{
            text-align:center;
        }
    </style>
    <!-- account setting page -->
    <section id="page-account-settings">
        <div class="row">
            <?php if(Session::has('response')): ?>
                <div class="col-12 mt-75">
                    <?php if(Session::get('response') === 'Saved Successfully'): ?>
                        <div class="alert alert-success mb-50" role="alert">
                            <h4 class="alert-heading"><?php echo e(Session::get('response')); ?></h4>
                        </div>
                    <?php elseif(Session::get('response') === 'error'): ?>
                        <div class="alert alert-danger mb-50" role="alert">
                            <h4 class="alert-heading">Oops! Something went wrong, please contact the site administrator!
                            </h4>
                        </div>
                    <?php endif; ?>

                </div>
            <?php endif; ?>


                <?php if(empty($currentUser->profile_picture)): ?>
                    <div class="col-12 mt-75">

                        <div class="alert alert-danger mb-50" role="alert">
                            <h4 class="alert-heading text-center">Please upload a profile picture in <a href="<?php echo e(route('profile')); ?>">General account settings!</a>
                            </h4>
                        </div>
                    </div>

                <?php elseif(empty($currentUser->bio)): ?>
                    <div class="col-12 mt-75">

                        <div class="alert alert-warning mb-50" role="alert">
                            <h4 class="alert-heading text-center">Please update your Bio in <a class="text-success" onclick=" document.getElementById('account-pill-info').click();">Personal Details settings</a>
                            </h4>
                        </div>
                    </div>
                <?php endif; ?>


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

                    <!-- create tutor -->

                    <li class="nav-item">
                        <a class="nav-link"
                            id="account-pill-info"
                            data-bs-toggle="pill"
                            href="#invite-tutor"
                            aria-expanded="false">
                            <i data-feather="user" class="font-medium-3 me-1"></i>
                            <span class="fw-bold">Invite Tutor</span>
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

                                <form action="<?php echo e(route('updateProfile')); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>

                                    <input type="text" hidden name="formType" value="general"/>
                                    <!-- header section -->
                                    <div class="d-flex">
                                        <a href="#" class="me-25">
                                            <img

                                                src="<?php echo e(asset('storage/profilePictures/'.$currentUser->profile_picture)); ?>"
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
                                                <label class="form-label" for="account-username">Full Name</label>
                                                <input type="text"
                                                       class="form-control"
                                                       id="account-username"
                                                       style="background:transparent; border-color: grey; color:white"
                                                       name="name"
                                                       value="<?php echo e(Auth::user()->name); ?>"
                                                       placeholder="Full Name"
                                                />
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
                                                    value="<?php echo e(Auth::user()->email); ?>"
                                                />
                                            </div>
                                        </div>

















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
                                <form action="<?php echo e(route('updateProfile')); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <input type="text" hidden name="formType" value="changePassword"/>
                                    <input type="email" hidden name="email" value="<?php echo e(Auth::user()->email); ?>"/>
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
                                <form action="<?php echo e(route('updateProfile')); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
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
                                                ><?php echo e($currentUser->bio); ?></textarea>
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
                                                    value="<?php echo e($currentUser->cellphoneNumber); ?>"
                                                    name="cellphone_number"
                                                />
                                            </div>

                                            <?php if(Auth::user()->userType !== 2): ?>
                                                <div class="col-12 col-sm-6">
                                                    <div class="mb-1">
                                                        <label class="form-label" for="account-birth-date">Birth date</label>
                                                        <input
                                                            type="date"
                                                            class="form-control flatpickr"
                                                            placeholder="Birth date"
                                                            id="account-birth-date"
                                                            name="dob"
                                                            value="<?php echo e($currentUser->date_of_birth); ?>"
                                                        />
                                                    </div>
                                                </div>

                                                <div class="col-12 col-sm-6">
                                                    <div class="mb-1">
                                                        <label class="form-label" for="accountSelect">School</label>
                                                        <select class="form-select" id="accountSelect" name="school">
                                                            <?php $__currentLoopData = $schools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $school): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if($school['id'] === $currentUser->school): ?>
                                                                    <option selected value="<?php echo e($school['id']); ?>"><?php echo e($school['name']); ?></option>
                                                                <?php else: ?>
                                                                    <option value="<?php echo e($school['id']); ?>"><?php echo e($school['name']); ?></option>
                                                                <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-1">
                                                    <label class="form-label" for="account-phone">Next of Kin Full Name</label>
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        id="account-phone"
                                                        placeholder="Next of Kin Full Name"
                                                        name="next_of_kin_fullName"
                                                        value="<?php echo e($currentUser->next_of_kin_fullName); ?>"
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
                                                        value="<?php echo e($currentUser->next_of_kin_cellphoneNumber); ?>"
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
                                                    ><?php echo e($currentUser->residential_address); ?></textarea>
                                                </div>
                                                    <div class="mb-1">
                                                        <label class="form-label" for="accountTextarea">Postal Address</label>
                                                        <textarea
                                                            class="form-control"
                                                            id="accountTextarea"
                                                            rows="4"
                                                            name="postal_address"
                                                            placeholder="Your postal address here..."
                                                        ><?php echo e($currentUser->postal_address); ?></textarea>
                                                    </div>
                                            </div>
                                        <?php endif; ?>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mt-1 me-1">Save changes</button>
                                            <button type="reset" class="btn btn-outline-secondary mt-1">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                                <!--/ form -->
                            </div>
                            <!--/information -->



                            <!-- invite tutor -->
                            <div
                                role="tabpanel"
                                class="tab-pane"
                                id="invite-tutor"
                                aria-labelledby="account-pill-general"
                                aria-expanded="true">

                                <form action="<?php echo e(route('updateProfile')); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <input type="text" hidden name="formType" value="inviteTutor"/>

                                    <div class="row">

                                        <div class="col-12 col-sm-6">
                                            <div class="mb-1">
                                                <label class="form-label" for="account-e-mail">Email Address of Tutor to invite<br/></label>
                                                <input
                                                    type="email"
                                                    class="form-control"
                                                    id="account-e-mail"
                                                    style="background:transparent; border-color: grey; color:white"
                                                    name="tutorEmail"
                                                    placeholder="Email Address"
                                                />
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mt-2 me-1">Save changes</button>
                                            <button type="reset" class="btn btn-outline-secondary mt-2">Cancel</button>
                                        </div>
                                    </div>
                                </form>

                                <!--/ form -->
                            </div>
                            <!--/ invite tutor-->

                        </div>
                    </div>
                </div>
            </div>
            <!--/ right content section -->


        </div>
    </section>
    <!-- / account setting page -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/dev/resources/views/profile/profile.blade.php ENDPATH**/ ?>