<?php $__env->startSection('content'); ?>
        <div class="card">
            <div class="card-header">
                <h3><?php echo e($product->name); ?>

                    <a href="<?php echo e(route('admin.products.index')); ?>" class="btn btn-primary float-right">
                        Go Back
                    </a>
                </h3>     
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>Images</th>
                                <td colspan="6"></td>
                            </tr>
                            <tr>
                                <?php $__empty_1 = true; $__currentLoopData = $product->getMedia('gallery'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <th class="col-lg-3 col-md-4 col-sm-6">
                                        <a href="<?php echo e($gallery->getFullUrl()); ?>">
                                            <img src="<?php echo e($gallery->getFullUrl()); ?>" alt="<?php echo e($product->name); ?>" class="img-fluid">
                                        </a>
                                    </th>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <th>
                                        <span class="badge badge-warning">no image</span>
                                    </th>
                                <?php endif; ?>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td colspan="6"><?php echo e($product->description); ?></td>
                            </tr>
                            <tr>
                                <th>Details</th>
                                <td colspan="6"><?php echo e($product->details); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel\eco\resources\views/admin/products/show.blade.php ENDPATH**/ ?>