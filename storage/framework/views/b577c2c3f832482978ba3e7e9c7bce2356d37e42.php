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
                        <h4><?php echo e(trans('file.Addvendor')); ?></h4>
                    </div>
                    <div class="card-body">
                        <p class="italic"><small class="text-danger"><?php echo e(trans('file.The field labels marked with * are required input fields')); ?>.</small></p>
                        <?php echo Form::open(['route' => 'customer.store', 'method' => 'post', 'files' => true]); ?>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><?php echo e(trans('file.Code')); ?> <sup class="text-danger">*</sup></strong> </label>
                                    <input type="text" id="customer_code" name="customer_code" value="<?php echo e(old('customer_code')); ?>" required class="form-control" onkeyup='saveValue(this);'>
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
                                    <input type="text" id="company_name" name="company_name" value="<?php echo e(old('company_name')); ?>" required class="form-control" onkeyup='saveValue(this);'>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><?php echo e(trans('Vendor Contact Person')); ?> <sup class="text-danger">*</sup></label>
                                    <input type="text" name="name" value="<?php echo e(old('name')); ?>" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><?php echo e(trans('Contact Person Designation')); ?> <sup class="text-danger">*</sup></label>
                                    <input type="text" name="designation" value="<?php echo e(old('designation')); ?>" class="form-control" required>
                                </div>
                                <?php if($errors->has('designation')): ?>
                                <span>
                                    <span  class="text-danger"><?php echo e($errors->first('designation')); ?></span  >
                                 </span>
                                 <?php endif; ?>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Brand Name <sup class="text-danger">*</sup></label>
                                    <input type="text" name="brand_name" value="<?php echo e(old('brand_name')); ?>" placeholder="" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><?php echo e(trans('file.Email')); ?> <sup class="text-danger">*</sup></label>
                                    <input type="email" name="email" value="<?php echo e(old('email')); ?>" placeholder="" class="form-control" required>
                                    <?php if($errors->has('email')): ?>
                                   <span>
                                       <span  class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><?php echo e(trans('file.Phone Number')); ?> <sup class="text-danger">*</sup></label>
                                    <input type="text" name="phone_number" value="<?php echo e(old('phone_number')); ?>" required class="form-control">
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
                                    <input type="text" name="address" value="<?php echo e(old('address')); ?>" required class="form-control">
                                </div>
                            </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label><?php echo e(trans('Sales Person')); ?></label>
                                    <input type="text" name="sales_person" value="<?php echo e(old('sales_person')); ?>" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-md-6 user-input">
                                <div class="form-group">
                                    <label><?php echo e(trans('file.Password')); ?> <sup class="text-danger">*</sup></label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="pos" value="0">
                            <a href="<?php echo e(route('customer.index')); ?>" class="btn btn-info"><i class="fa fa-undo px-2"></i> Back</a>
                            <input type="submit" value="<?php echo e(trans('file.submit')); ?>" class="btn btn-primary">
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
    $("ul#people #customer-create-menu").addClass("active");

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

    //$("#name").val(getSavedValue("name"));
    //$("#customer-group-id").val(getSavedValue("customer-group-id"));

    function saveValue(e) {
        var id = e.id;  // get the sender's id to save it.
        var val = e.value; // get the value.
        localStorage.setItem(id, val);// Every time user writing something, the localStorage's value will override.
    }
    //get the saved value function - return the value of "v" from localStorage. 
    function getSavedValue  (v){
        if (!localStorage.getItem(v)) {
            return "";// You can change this to your defualt value. 
        }
        return localStorage.getItem(v);
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\dawlatbd\resources\views/customer/create.blade.php ENDPATH**/ ?>