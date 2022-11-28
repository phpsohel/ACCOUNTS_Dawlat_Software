 <?php $__env->startSection('content'); ?>
<section class="forms">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4><?php echo e(trans('file.Update Biller')); ?></h4>
                    </div>
                    <div class="card-body">
                        <p class="italic"><small class="text-danger"><?php echo e(trans('file.The field labels marked with * are required input fields')); ?>.</small></p>
                        <?php echo Form::open(['route' => ['biller.update', $lims_biller_data->id], 'method' => 'put', 'files' => true]); ?>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><?php echo e(trans('file.biller')); ?> <sup class="text-danger">*</sup></strong> </label>
                                    <input type="text" name="name" value="<?php echo e($lims_biller_data->name); ?>" required class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><?php echo e(trans('Biller logo')); ?></label>
                                    <input type="file" name="image" class="form-control">
                                    <?php if($errors->has('image')): ?>
                                   <span>
                                       <strong><?php echo e($errors->first('image')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                       
                        
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><?php echo e(trans('file.Email')); ?> <sup class="text-danger">*</sup></label>
                                    <input type="email" name="email" value="<?php echo e($lims_biller_data->email); ?>" required class="form-control">
                                    <?php if($errors->has('email')): ?>
                                   <span>
                                       <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><?php echo e(trans('Designation')); ?> <sup class="text-danger">*</sup></label>
                                    <input type="text" name="designation" value="<?php echo e(old('designation',$lims_biller_data->designation)); ?>" required class="form-control">
                                    <?php if($errors->has('designation')): ?>
                                    <span>
                                        <strong><?php echo e($errors->first('designation')); ?></strong>
                                     </span>
                                     <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><?php echo e(trans('file.Phone Number')); ?> <sup class="text-danger">*</sup></label>
                                    <input type="text" name="phone_number" value="<?php echo e($lims_biller_data->phone_number); ?>" required class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><?php echo e(trans('file.Address')); ?> <sup class="text-danger">*</sup></label>
                                    <input type="text" name="address" value="<?php echo e($lims_biller_data->address); ?>" required class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">   
                                <div class="form-group">
                                    <label><?php echo e(trans('Website Link')); ?></label>
                                    <input type="text" name="website_link" value="<?php echo e(old('website_link',$lims_biller_data->website_link ?? '')); ?>"  placeholder="www.example@example.com" class="form-control">
                                    <?php if($errors->has('website_link')): ?>
                                   <span>
                                       <strong><?php echo e($errors->first('website_link')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            
                            <div class="col-md-12">
                                <div class="form-group mt-3">
                                    <a href="<?php echo e(route('biller.index')); ?>" class="btn btn-info"><i class="fa fa-undo px-2"></i> <?php echo e(trans('Back')); ?></a> 
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
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\dawlatbd\resources\views/biller/edit.blade.php ENDPATH**/ ?>