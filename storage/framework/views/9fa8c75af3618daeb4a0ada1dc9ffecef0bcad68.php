
<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <p>Add New Post</p>
    </div>
    <div class="card-body">
        <form action="<?php echo e(route('postStore')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">body</label>
                <textarea name="body" id="body" class="form-control" required></textarea>
            </div>
            <div class="text-end mt-3">
                <button type="submit" class="btn  btn-primary">Save post</button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\praktikum_web2_sem7\resources\views/welcome.blade.php ENDPATH**/ ?>