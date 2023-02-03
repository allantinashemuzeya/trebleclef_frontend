<?php $__env->startSection('content'); ?>

<div class="auth-wrapper auth-v2">
    <div class="auth-inner row m-0">

        <div class="d-none d-lg-flex col-lg-8 align-items-center first">

            <video class="d-flex col-lg-12 first" autoplay muted loop style="border-radius: 25px">
                <source src="<?php echo e(asset('app-assets/videos/home.mp4')); ?>" type="video/mp4"/>
            </video>
        </div>

        <!-- Login-->
        <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
            <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                <h2 class="card-title fw-bold mb-1">
                    Welcome to Trebleclef Music & Arts Academy
                </h2>
                <p class="card-text mb-2">Please sign-in to your account and start the adventure</p>

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

                <form class="auth-login-form mt-2" method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo csrf_field(); ?>

                    <!-- Email Address -->
                    <div class="mb-1">
                        <label class="form-label" for="login-email">Email</label>
                        <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                    </div>

                    <!-- Password -->
                    <div class="mb-1">
                        <?php if(Route::has('password.request')): ?>
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="login-password">Password</label>
                                <a href="<?php echo e(route('password.request')); ?>">
                                    <small> <?php echo e(__('Forgot your password?')); ?></small>
                                </a>
                            </div>
                        <?php endif; ?>

                        <div class="d-flex justify-content-between">
                            <label for="password" :value="__('Password')" />
                        </div>

                        <div class="input-group input-group-merge form-password-toggle">
                            <input id="password" class="form-control form-control-merge" type="password" name="password" required autocomplete="current-password" />
                        </div>

                    </div>

                    <!-- Remember Me -->
                    <div class="mb-1">
                         <div class="form-check">
                            <input class="form-check-input" value="1" id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                            <label class="form-check-label" for="remember-me"> Remember Me</label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary w-100" tabindex="4">Sign in</button>

                </form>

                <p class="text-center mt-2">
                    <span>New on our platform?</span>
                    <a href="<?php echo e(route('register')); ?>">
                        <span>&nbsp;Create an account</span>
                    </a>
                </p>
            </div>
        </div>
        <!-- /Login-->
    </div>
</div>


<?php $__env->stopSection(); ?>

<script>
    $(window).on('load',  function(){
      if (feather) {
        feather.replace({ width: 14, height: 14 });
      }
    })
</script>

<?php echo $__env->make('layouts.login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/dev/resources/views/auth/login.blade.php ENDPATH**/ ?>