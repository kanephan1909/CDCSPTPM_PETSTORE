<?php $__env->startSection('content'); ?>
    <!--Main-->
    <div class="login-form">
        <div class="height360">
            <div class="main">

                <?php if(Session::has('error')): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo e(Session::get('error')); ?>

                    </div>
                <?php endif; ?>

                <?php if(Session::has('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo e(Session::get('success')); ?>

                    </div>
                <?php endif; ?>

                <form action="<?php echo e(route('password.email')); ?>" method="POST" class="form" id="form-2">
                    <?php echo csrf_field(); ?>
                    <h3 class="heading">Quên mật khẩu</h3>

                    <div class="form-group">
                        <label for="email" class="form-label">Nhập email của bạn</label>
                        <input type="email" name="email" class="form-control" required>
                        <span class="form-message"></span>
                    </div>

                    <button type="submit" class="form-submit" name="submit">Gửi yêu cầu</button>

                    <div class="dont-have-account">
                        Bạn đã nhớ mật khẩu? <a class="account-register" href="<?php echo e(URL::to('login')); ?>">Đăng nhập ngay</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pkhan\OneDrive\Desktop\shopthucung_laravel\shopthucung_laravel\resources\views/pages/forget.blade.php ENDPATH**/ ?>