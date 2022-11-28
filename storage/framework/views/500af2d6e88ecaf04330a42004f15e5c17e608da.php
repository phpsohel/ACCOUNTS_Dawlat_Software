 <?php $__env->startSection('content'); ?>
<section>
    <div class="card-header d-flex align-items-center">
        <h4>Customers Message</h4>
    </div>
    <div class="table-responsive">
        <table id="product-data-table" class="table" style="width: 100%">
            <thead>
                <tr>
                    <th class="not-exported"></th>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Message</th>
                    
                    <!-- <th class="not-exported">Action</th> -->
                </tr>
            </thead>
            <tbody>
            	<?php ($i=1); ?>
            	<?php $__currentLoopData = $contact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            	<tr>
            		<td></td>
            		<td><?php echo e($i); ?></td>
            		<td><?php echo e($row->name); ?></td>
            		<td><?php echo e($row->email); ?></td>
            		<td><?php echo e($row->phone_number); ?></td>
            		<td><?php echo e($row->message); ?></td>
            		<!-- <td>
            			<a type="button" class="btn btn-primary" href="">Delete</a>
            		</td> -->
            	</tr>
            	<?php ($i++); ?>
            	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            
        </table>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\salepropos\resources\views/report/customers_message.blade.php ENDPATH**/ ?>