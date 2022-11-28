 <?php $__env->startSection('content'); ?>
<section class="forms">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header mt-2">
                <h3 class="text-center">Expire Report</h3>
            </div>
            <form method="POST" action="<?php echo e(route('expire-date-filter')); ?>">
            	<?php echo csrf_field(); ?>
            <div class="col-md-6 offset-md-3 mt-3 mb-3">
                <div class="form-group row">
                    <label class="d-tc mt-2"><strong><?php echo e(trans('Choose Date Range')); ?></strong> &nbsp;</label>
                    <div class="d-tc">
                        <div class="input-group">
                            <input type="date" class="form-control" name="start_date" required value="<?php echo e($start_date); ?>" />TO
                            <input type="date" class="form-control" name="end_date" required=""  value="<?php echo e($end_date); ?>" />
                            
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit"><?php echo e(trans('file.submit')); ?></button>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            </form>
        </div>
    </div>
    <div class="table-responsive mb-4">
        <table id="example" class="table table-hover">
            <thead>
                <tr>
                    
                    <th><?php echo e(trans('Purchase Date')); ?></th>
                    <th><?php echo e(trans('Purchase Reference')); ?> </th>
                    <th><?php echo e(trans('Product')); ?> </th>
                    <th><?php echo e(trans('Expire Date')); ?></th>
                    <th><?php echo e(trans('Quantity')); ?></th>
                    <!-- <th><?php echo e(trans('file.Paid By')); ?></th> -->
                    <!-- <th><?php echo e(trans('file.Amount')); ?></th> -->
                    <!-- <th><?php echo e(trans('file.Created By')); ?></th> -->
                </tr>
            </thead>
            <tbody>
                
                <?php $__currentLoopData = $purchase; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                	
                    <td><?php echo e(date('d-m-Y', strtotime($row->created_at))); ?></td>
                    <td><?php echo e($row->reference_no); ?></td>
                    <td><?php echo e($row->name); ?></td>
                    <td><?php echo e(date('d-m-Y', strtotime($row->expire_date))); ?></td>
                    <td><?php echo e($row->qty); ?></td>
                    
                    <!-- <td></td> -->
                    <!-- <td></td> -->
                    <!-- <td></td> -->
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</section>
<script type="text/javascript">
 $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\salepropos\resources\views/report/expire_report.blade.php ENDPATH**/ ?>