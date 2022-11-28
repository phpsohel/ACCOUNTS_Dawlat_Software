<?php $__env->startSection('content'); ?>
 <div class="card-header d-flex align-items-center">
         <h4>Blog List</h4>

		<hr>
		<a href="<?php echo e(route('add-blog')); ?>" class="btn btn-info" style="float: right"><i class="dripicons-plus"></i>Create Blog</a>
</div>
<section>
    
    <div class="table-responsive">
        <table id="product-data-table" class="table" style="width: 100%">
            <thead>
                <tr>
                    <th class="not-exported"></th>
                    <th>#</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Blog</th>
                    
                    <th class="not-exported">Action</th>
                </tr>
            </thead>
            <tbody>
            	<?php ($i=1); ?>
            	<?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            	<tr>
            		<td></td>
            		<td><?php echo e($i); ?></td>
            		<td><?php echo e($row->blog_title); ?></td>
            		<td><img src="<?php echo e($row->blog_image); ?>" style="height: 50px; width: 100px;"></td>
            		<td><?php echo e($row->blog); ?></td>
            		<td>
            			<a type="button" class="btn btn-primary" href="<?php echo e(route('edit-blog', $row->id)); ?>">Edit</a>
            			<a type="button" class="btn btn-primary" href="<?php echo e(route('delete-blog', $row->id)); ?>">Delete</a>
            		</td>
            	</tr>
            	<?php ($i++); ?>
            	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            
        </table>
    </div>
</section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\salepropos\resources\views/blog/blog_list.blade.php ENDPATH**/ ?>