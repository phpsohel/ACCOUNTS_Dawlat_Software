 <?php if(Session('success')): ?>
      <div class="form-group col-sm-4">
            <div class="alert alert-primary" role="alert">
                     <?php echo e(Session('success')); ?>

                </div>
           </div>
  <?php endif; ?>

   <?php if(Session('alert')): ?>
      <div class="form-group col-sm-4">
            <div class="alert alert-danger" role="alert">
                     <?php echo e(Session('alert')); ?>

                </div>
           </div>
  <?php endif; ?>


<?php if($errors->any()): ?>
	<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="form-group col-sm-4">
            <div class="alert alert-danger" role="alert">
                     <?php echo e($error); ?>

                </div>
           </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 <?php endif; ?><?php /**PATH C:\xampp\htdocs\salepropos\resources\views/includes/message.blade.php ENDPATH**/ ?>