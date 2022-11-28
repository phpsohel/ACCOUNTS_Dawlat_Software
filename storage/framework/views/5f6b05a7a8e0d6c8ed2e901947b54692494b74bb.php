<?php $__env->startSection('content'); ?>

<section class="forms">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4>Add Color</h4>
                    </div>
                    <div class="card-body">
                        <p class="italic"><small><?php echo e(trans('file.The field labels marked with * are required input fields')); ?>.</small></p>
                        <form id="product-form" action="<?php echo e(route('save-color')); ?>" method="POST">
                        	<?php echo csrf_field(); ?>
                            <div class="row">
                               
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Color Name *</strong> </label>
                                        <input type="text" name="color_name" class="form-control" id="name" aria-describedby="name" required>
                                        <span class="validation-msg" id="name-error"></span>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Description</strong> </label>
                                        
                                        <textarea name="color_description" class="form-control"></textarea>
                                        <span class="validation-msg" id="name-error"></span>
                                    </div>
                                </div>
                            <div class="form-group">
                                
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    
    <div class="table-responsive">
        <table id="product-data-table" class="table" style="width: 100%">
            <thead>
                <tr>
                    <th class="not-exported"></th>
                    <th>#</th>
                    <th>Name</th>
                    <th>Description</th>
                    
                    <th class="not-exported">Action</th>
                </tr>
            </thead>
            <tbody>
            	<?php ($i=1); ?>
            	<?php $__currentLoopData = $color; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            	<tr>
            		<td></td>
            		<td><?php echo e($i); ?></td>
            		<td><?php echo e($row->color_name); ?></td>
            		<td><?php echo e($row->color_description); ?></td>
            		<td>
            			<a type="button" class="btn btn-primary" href="<?php echo e(route('edit-color', $row->id)); ?>">Edit</a>
            			<a type="button" class="btn btn-primary" href="<?php echo e(route('delete-color', $row->id)); ?>">Delete</a>
            		</td>
            	</tr>
            	<?php ($i++); ?>
            	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            
        </table>
    </div>
</section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\salepropos\resources\views/color/add_color.blade.php ENDPATH**/ ?>