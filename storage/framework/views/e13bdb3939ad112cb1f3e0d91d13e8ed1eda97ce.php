 <?php $__env->startSection('content'); ?>
<section class="forms">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4><?php echo e(trans('Sales Person')); ?></h4>
                    </div>
                    <div class="card-body">

                        <p class="italic"><small class="text-danger"><?php echo e(trans('file.The field labels marked with * are required input fields')); ?>.</small></p>
                        <?php if(($item->id)): ?>
                        <?php echo Form::open(['route' => ['salesperson.update',$item->id], 'method' => 'put', 'files' => true]); ?>

                        <?php else: ?>
                        <?php echo Form::open(['route' => 'salesperson.store', 'method' => 'post', 'files' => true]); ?>


                        <?php endif; ?>
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><?php echo e(trans('Name')); ?> <sup class="text-danger">*</sup></strong> </label>
                                    <input type="text" name="name" value="<?php echo e(old('name',$item->name)); ?>" required class="form-control">
                                </div>
                            </div>
                       
                        
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><?php echo e(trans('file.Phone Number')); ?> <sup class="text-danger">*</sup></label>
                                    <input type="text" name="phone_number" value="<?php echo e(old('phone_number',$item->phone_number)); ?>" required class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><?php echo e(trans('file.Address')); ?> <sup class="text-danger">*</sup></label>
                                    <input type="text" name="address" value="<?php echo e(old('address',$item->address)); ?>" required class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mt-4">
                                    <a href="<?php echo e(route('salesperson.index')); ?>" class="btn btn-info"><i class="fa fa-undo px-2"></i> <?php echo e(trans('Back')); ?></a> 
                                    <input type="submit" value="<?php echo e(trans('file.submit')); ?>" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    $("ul#people").siblings('a').attr('aria-expanded','true');
    $("ul#people").addClass("show");
    $("ul#people #biller-create-menu").addClass("active");
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\dawlatbd\resources\views/salesperson/create_update.blade.php ENDPATH**/ ?>