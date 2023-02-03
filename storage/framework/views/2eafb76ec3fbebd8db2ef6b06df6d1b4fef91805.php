<?php $__env->startSection('content'); ?>
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
            <div class="d-none d-lg-flex col-lg-7 align-items-center first">

                <video class="d-flex col-lg-12 first" autoplay muted loop style="border-radius: 25px">
                    <source src="<?php echo e(asset('app-assets/videos/home.mp4')); ?>" type="video/mp4"/>
                </video>
            </div>
            <!-- Login style="overflow:scroll;height:100vh;padding-top: 50vh!important;" -->
            <div class="d-flex col-lg-5 align-items-center auth-bg px-2 p-lg-5">
                <div style="overflow-y: scroll;height: 90vh;" class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                    <h2 class="card-title fw-bold mb-1">
                        Get A Treble Clef Academy Account Now👋
                    </h2>
                    <p class="card-text mb-2">Please register your account and start the adventure</p>

                    <!-- Session Status -->
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.auth-session-status','data' => ['class' => 'mb-4','status' => session('status')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('auth-session-status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mb-4','status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(session('status'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                    <!-- Validation Errors -->
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.auth-validation-errors','data' => ['class' => 'mb-4','errors' => $errors]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('auth-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mb-4','errors' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                    <form class="auth-login-form mt-2" method="POST" action="<?php echo e(route('register')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>

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
                                            <?php $__currentLoopData = $instruments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $instrument): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($instrument->value); ?>">
                                                    <?php echo e($instrument->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="login-school">School</label>
                                        <select id="login-school" class="form-control" type="text" name="school" required autofocus>
                                            <?php $__currentLoopData = $schools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $school): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($school->uuid); ?>">
                                                    <?php echo e($school->name); ?>


                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="login-school">Grade</label>
                                        <select id="login-school" class="form-control" type="text" name="grade" required autofocus>
                                                <?php $__currentLoopData = $grades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($grade->value); ?>">
                                                        <?php echo e($grade->name); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                Account Details
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
                        <a href="<?php echo e(route('login')); ?>">
                            <span>&nbsp;Login</span>
                        </a>
                    </p>


                </div>
            </div>
            <!-- /Login-->
        </div>
    </div>

<?php $__env->stopSection(); ?>
<!-- <?php $__env->startPush('scripts'); ?>
    This will be second...
<?php $__env->stopPush(); ?> -->
<?php $__env->startPush('select2'); ?>
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
<?php $__env->stopPush(); ?>



<?php echo $__env->make('layouts.login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/dev/resources/views/auth/register.blade.php ENDPATH**/ ?>