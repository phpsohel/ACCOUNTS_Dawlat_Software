 <?php $__env->startSection('content'); ?>
<?php if(session()->has('not_permitted')): ?>
  <div class="alert alert-danger alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><?php echo e(session()->get('not_permitted')); ?></div> 
<?php endif; ?>
<section class="forms">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4><?php echo e(trans('file.updatevendor')); ?></h4>
                    </div>
                    <div class="card-body">
                        <p class="italic"><small class="text-danger"><?php echo e(trans('file.The field labels marked with * are required input fields')); ?>.</small></p>
                        <?php echo Form::open(['route' => ['customer.update',$lims_customer_data->id], 'method' => 'put', 'files' => true]); ?>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><?php echo e(trans('file.Code')); ?> <sup class="text-danger">*</sup></strong> </label>
                                    <input type="text" id="customer_code" name="customer_code" value="<?php echo e(old('customer_code',$lims_customer_data->customer_code ?? '')); ?>" required class="form-control" onkeyup='saveValue(this);'>
                                    <?php if($errors->has('customer_code')): ?>
                                    <span>
                                        <span  class="text-danger"><?php echo e($errors->first('customer_code')); ?></span  >
                                     </span>
                                     <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><?php echo e(trans('file.vendorname')); ?> <sup class="text-danger">*</sup></strong> </label>
                                    <input type="text" name="company_name" value="<?php echo e($lims_customer_data->company_name ?? ''); ?>" required class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><?php echo e(trans('Vendor Contact Person')); ?> <sup class="text-danger">*</sup></label>
                                    <input type="text" name="name" value="<?php echo e($lims_customer_data->name ?? ''); ?>" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><?php echo e(trans('Contact Person Designation')); ?> <sup class="text-danger">*</sup></label>
                                    <input type="text" name="designation" value="<?php echo e(old('designation',$lims_customer_data->designation)); ?>" class="form-control" required>
                                </div>
                                <?php if($errors->has('designation')): ?>
                                <span>
                                    <span  class="text-danger"><?php echo e($errors->first('designation')); ?></span  >
                                 </span>
                                 <?php endif; ?>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Brand Name</label>
                                    <input type="text" name="brand_name" value="<?php echo e(old('brand_name',$lims_customer_data->brand_name ?? '')); ?>" placeholder="Brand Name" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><?php echo e(trans('file.Email')); ?></label>
                                    <input type="email" name="email" value="<?php echo e($lims_customer_data->email); ?>" class="form-control">
                                    <?php if($errors->has('email')): ?>
                                    <span>
                                        <span  class="text-danger"><?php echo e($errors->first('email')); ?></span  >
                                     </span>
                                     <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><?php echo e(trans('file.Phone Number')); ?> <sup class="text-danger">*</sup></label>
                                    <input type="text" name="phone_number" required value="<?php echo e($lims_customer_data->phone_number); ?>" class="form-control">
                                    <?php if($errors->has('phone_number')): ?>
                                   <span>
                                    <span  class="text-danger"><?php echo e($errors->first('phone_number')); ?></span  >
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                          
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><?php echo e(trans('file.Address')); ?> <sup class="text-danger">*</sup></label>
                                    <input type="text" name="address" required value="<?php echo e($lims_customer_data->address); ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><?php echo e(trans('Sales Person')); ?></label>
                                    <input type="text" name="sales_person" value="<?php echo e(old('sales_person',$lims_customer_data->sales_person)); ?>" class="form-control">
                                </div>
                            </div>
                            
                            
                            <div class="col-md-12">
                                <div class="form-group mt-3">
                                    <a href="<?php echo e(route('customer.index')); ?>" class="btn btn-info"><i class="fa fa-undo px-2"></i> Back</a>

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

    $(".user-input").hide();

    $('input[name="user"]').on('change', function() {
        if ($(this).is(':checked')) {
            $('.user-input').show(300);
            $('input[name="name"]').prop('required',true);
            $('input[name="password"]').prop('required',true);
        }
        else{
            $('.user-input').hide(300);
            $('input[name="name"]').prop('required',false);
            $('input[name="password"]').prop('required',false);
        }
    });
        
    var customer_group = $("input[name='customer_group']").val();
    $('select[name=customer_group_id]').val(customer_group);
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\dawlatbd\resources\views/customer/edit.blade.php ENDPATH**/ ?>