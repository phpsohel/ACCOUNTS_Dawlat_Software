<?php $__env->startSection('content'); ?>


<section class="forms">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4>Edit Color</h4>
                    </div>
                    <div class="card-body">
                        <p class="italic"><small><?php echo e(trans('file.The field labels marked with * are required input fields')); ?>.</small></p>
                        <form id="product-form" action="<?php echo e(route('update-color')); ?>" method="POST">
                        	<?php echo csrf_field(); ?>
                        	<input type="hidden" name="id" value="<?php echo e($row->id); ?>">
                            <div class="row">
                               
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Color Name *</strong> </label>
                                        <input type="text" name="color_name" class="form-control" id="name" aria-describedby="name" required value="<?php echo e($row->color_name); ?>">
                                        <span class="validation-msg" id="name-error"></span>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Description</strong> </label>
                                        
                                        <textarea name="color_description" class="form-control"><?php echo e($row->color_description); ?></textarea>
                                        <span class="validation-msg" id="name-error"></span>
                                    </div>
                                </div>
                            <div class="form-group">
                                
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\salepropos\resources\views/color/edit_color.blade.php ENDPATH**/ ?>