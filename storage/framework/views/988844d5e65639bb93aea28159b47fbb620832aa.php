<?php $__env->startSection('content'); ?>
        <div class="card">
            <div class="card-header">
                <h3>Edit tag
                    <a href="<?php echo e(route('admin.tags.index')); ?>" class="btn btn-primary float-right">
                        Go Back
                    </a>
                </h3>     
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('admin.tags.update', $tag->id)); ?>" method="post">
                    <?php echo csrf_field(); ?> 
                    <?php echo method_field('put'); ?>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" value="<?php echo e(old('name', $tag->name)); ?>">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel\eco\resources\views/admin/tags/edit.blade.php ENDPATH**/ ?>