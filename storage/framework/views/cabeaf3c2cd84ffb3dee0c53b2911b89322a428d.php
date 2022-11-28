<?php $__env->startSection('content'); ?>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js">
<style type="text/css">
  .a{
    font-size: 16px;
    font-weight: 700;
  }
</style><br>
<h1 style="text-align: center;"><?php echo e($detail->name); ?> (<?php echo e($detail->code); ?>) </h1>

<div class="col-md-15">
              <div class="card col-md-25">
               <br>
                <ul class="nav nav-tabs a" role="tablist">

                  <li class="nav-item" >
                    <a class="nav-link active" href="#product-detail" role="tab" data-toggle="tab">Product Detail</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#sales-detail" role="tab" data-toggle="tab">Sales</a>
                  </li>
                  <li class="nav-item" >
                    <a class="nav-link" href="#purchase-detail" role="tab" data-toggle="tab">Purchase</a>
                  </li>
                  <li class="nav-item" >
                    <a class="nav-link" href="#transfer-detail" role="tab" data-toggle="tab">Transfer</a>
                  </li>
                   <li class="nav-item" >
                    <a class="nav-link" href="#adjustment-detail" role="tab" data-toggle="tab">Adjustment</a>
                  </li>
                  <li class="nav-item" >
                    <a class="nav-link" href="#return-detail" role="tab" data-toggle="tab">Return</a>
                  </li>
   
                </ul>

                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane fade show active" id="product-detail">
                   
                       <div style="padding: 10px 20px;">
                        
                         
                           <?php $images = explode(",", $lims_product_data->image)?>
                                <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                                   
                                         <td>
                                              <img src="<?php echo e(url('public/images/product', $image)); ?>" height="100" width="100">
                                                       
                                          </td>
                                                   
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       </div>
                       <div style="padding: 10px 20px;"> 
                       		<strong>Type:</strong>  <?php echo e($detail->type); ?>	
                       </div>
                       <?php if($detail->name): ?>
                       <div style="padding: 10px 20px;">
                        	<strong>Name:</strong>  <?php echo e($detail->name); ?>

                       
                       </div>
                       <?php endif; ?>
                       <?php if($detail->code): ?>
                       <div style="padding: 10px 20px;">
                       		<strong>Code:</strong>  <?php echo e($detail->code); ?>

                       </div>
                       <?php endif; ?>
                       <?php if($detail->brand): ?>
                       <div style="padding: 10px 20px;">
                       		<strong>Brand:</strong>  <?php echo e($detail->brand->title); ?>

                       </div>
                       <?php endif; ?>
                       <?php if($detail->category): ?>
                        <div style="padding: 10px 20px;">
                       		<strong>Category:</strong>  <?php echo e($detail->category->name); ?>

                       </div>
                       <?php endif; ?>
                       <?php if($detail->qty): ?>
                        <div style="padding: 10px 20px;">
                       		<strong>Quantity:</strong>  <?php echo e($detail->qty); ?>

                       </div>
                       <?php endif; ?>
                       <?php if($detail->unit): ?>
                       <div style="padding: 10px 20px;">
                       		<strong>Unit:</strong>  <?php echo e($detail->unit->unit_name); ?>

                       </div>
                       <?php endif; ?>
                       <?php if($detail->cost): ?>
                        <div style="padding: 10px 20px;">
                       		<strong>cost:</strong>  <?php echo e($detail->cost); ?>

                       </div>
                       <?php endif; ?>
                       <?php if($detail->price): ?>
                        <div style="padding: 10px 20px;">
                       		<strong>price:</strong>  <?php echo e($detail->price); ?>

                       </div>
                       <?php endif; ?>

                       <?php if($detail->tax_id): ?>
                       <div style="padding: 10px 20px;">
                       		<strong>Tax:</strong>  <?php echo e($detail->tax->name); ?> 	
                       </div>
                       <?php else: ?>
                       <div style="padding: 10px 20px;">
                         <strong>Tax:</strong>  N/A
                       </div>
                       <?php endif; ?>

                       <div style="padding: 10px 20px;">
                        <?php if($detail->tax_method): ?>
                       	<?php if($detail->tax_method == 1): ?>
                       		<strong>Tax Method:</strong>  Exclusive
                       	<?php else: ?>
                       		<strong>Tax Method:</strong>  Inclusive
                        <?php endif; ?>
                        <?php endif; ?>
                       </div>

                       <div style="padding: 10px 20px;">
                       		<strong>Alert Quantity:</strong>  <?php echo e($detail->alert_quantity); ?>

                       </div>
                       <div style="padding: 10px 20px;">
                       		<strong>Product Detail:</strong>
                          <textarea style="display: none;" id="editorCopy" name="body"><?php echo e($lims_product_data->product_details); ?></textarea>

                          <div id="editor">
                          </div>
                       </div>
                      
                    
                  </div>


                  <div role="tabpanel" class="tab-pane fade" id="sales-detail">
                      <div class="table-responsive"><br>
                        <table class="table" id="example">
                          <thead>
                            <tr>
                             
                              <th><?php echo e(trans('file.Date')); ?></th>
                              <th><?php echo e(trans('file.reference')); ?></th>
                              <th><?php echo e(trans('file.Biller')); ?></th>
                              <th><?php echo e(trans('file.customer')); ?></th>
                              <th><?php echo e(trans('file.Sale Status')); ?></th>
                              <th><?php echo e(trans('file.Payment Status')); ?></th>
                              <th><?php echo e(trans('file.grand total')); ?></th>
                              <th><?php echo e(trans('file.Paid')); ?></th>
                              <th><?php echo e(trans('file.Due')); ?></th>
                              
                            </tr>
                          </thead>
                          <tbody>
                            <?php $__currentLoopData = $sale; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                
                                <td><?php echo e(date('d-m-Y', strtotime($row->created_at))); ?></td>
                                <td><?php echo e($row->reference_no); ?></td>
                                <td><?php echo e($row->biller->name); ?></td>
                                <td><?php echo e($row->customer->name); ?></td>
                                <?php if($row->sale_status == 1): ?>
                                <td>Completed</td>
                                <?php else: ?>
                                <td>Draft</td>
                                <?php endif; ?>

                                <?php if($row->payment_status == 1): ?>
                                <td>Pending</td>
                                <?php elseif($row->payment_status == 2): ?>
                                <td>Due</td>
                                <?php elseif($row->payment_status == 3): ?>
                                <td>Partial</td>
                                <?php else: ?>
                                <td>Paid</td>
                                <?php endif; ?>
                                <td><?php echo e($row->grand_total); ?></td>
                                <td><?php echo e($row->paid_amount); ?></td>
                                <td><?php echo e($row->grand_total - $row->paid_amount); ?></td>
                              </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </tbody>
                        </table>
                      </div>
                  </div>


                  <div role="tabpanel" class="tab-pane fade" id="purchase-detail">
                      <div class="table-responsive"><br>
                         <table class="table" id="example1">
                          <thead>
                            <tr>
                              <th><?php echo e(trans('file.Date')); ?></th>
                             
                              <th><?php echo e(trans('file.reference')); ?></th>
                              <th>Expire Warranty</th>
                              <th>Quantity</th>
                              <th><?php echo e(trans('file.Supplier')); ?></th>
                              <th><?php echo e(trans('file.Purchase Status')); ?></th>
                              <th>Grand Total</th>
                              <th><?php echo e(trans('file.Paid')); ?></th>
                              <th><?php echo e(trans('file.Due')); ?></th>
                              <th><?php echo e(trans('file.Payment Status')); ?></th>
                              
            
                            </tr>
                          </thead>
                          <tbody>
                            <?php $__currentLoopData = $purchase; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                
                                <td><?php echo e(date('d-m-Y', strtotime($row->created_at))); ?></td>
                                
                                <td><?php echo e($row->reference_no); ?></td>
                                <td><?php echo e(date('d-m-Y', strtotime($row->expire_date))); ?></td>
                                <td><?php echo e($row->qty); ?></td>
                                <?php if($row->supplier): ?>
                                <td><?php echo e($row->supplier->name); ?></td>
                                <?php else: ?>
                                <td></td>
                                <?php endif; ?>
                                <?php if($row->status == 1): ?>
                                 <td>Received</td>
                                 <?php else: ?>
                                 <td>Ordered</td>
                                 <?php endif; ?>
                                <td><?php echo e($row->grand_total); ?></td>
                                
                                <td><?php echo e($row->paid_amount); ?></td>
                               

                               
                                <td><?php echo e($row->grand_total - $row->paid_amount); ?></td>
                              
                                <?php if($row->payment_status == 2): ?>
                                <td>Paid</td>
                                <?php else: ?>
                                <td>Due</td>
                                <?php endif; ?>
                                
                              </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </tbody>
                        </table>
                      </div>
                  </div>



                   <div role="tabpanel" class="tab-pane fade" id="transfer-detail">
                      <div class="table-responsive"><br>
                         <table class="table" id="example2">
                          <thead>
                            <tr>
                              
                              <th><?php echo e(trans('file.Date')); ?></th>
                              <th><?php echo e(trans('file.reference')); ?></th>
                              <th>Warehouse(From)</th>
                              <th>Warehouse(To)</th>
                              
                              <th>Product Cost</th>
                              <th>Product Tax</th>
                              <th>Grand Total</th>
                              <th>Status</th>
                              
                              
                            </tr>
                          </thead>
                          <tbody>
                            <?php $__currentLoopData = $transfer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                
                                <td><?php echo e(date('d-m-Y', strtotime($row->created_at))); ?></td>
                                <td><?php echo e($row->reference_no); ?></td>
                                
                                <td><?php echo e($row->fromWarehouse->name); ?></td>
                              
                              
                                 <td><?php echo e($row->toWarehouse->name); ?></td>
                                
                                <td><?php echo e($row->total_cost); ?></td>
                                
                                <td><?php echo e($row->total_tax); ?></td>
                               

                               
                                <td><?php echo e($row->grand_total); ?></td>
                              
                               <?php if($row->status == 1): ?>
                               <td>Completed</td>
                               <?php elseif($row->status == 2): ?>
                               <td>Pending</td>
                               <?php else: ?>
                               <td>Sent</td>
                               <?php endif; ?>
                               
                                
                              </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </tbody>
                        </table>
                      </div>
                  </div>


                  <div role="tabpanel" class="tab-pane fade" id="adjustment-detail">
                      <div class="table-responsive"><br>
                         <table class="table" id="example3">
                          <thead>
                            <tr>
                              
                              <th><?php echo e(trans('file.Date')); ?></th>
                              <th><?php echo e(trans('file.reference')); ?></th>
                              <th>Warehouse</th>  
                              
                              <th>Note</th>
                              
                              
                            </tr>
                          </thead>
                          <tbody>
                            <?php $__currentLoopData = $adjustment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                
                                <td><?php echo e(date('d-m-Y', strtotime($row->created_at))); ?></td>
                                <td><?php echo e($row->reference_no); ?></td>
                                
                                <td><?php echo e($row->name); ?></td>

                                <td><?php echo e($row->note); ?></td>
    
                              </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </tbody>
                        </table>
                      </div>
                  </div>


                  <div role="tabpanel" class="tab-pane fade" id="return-detail">
                      <div class="table-responsive"><br>
                        <label style="font-weight: 700;">Sales Return</label>
                         <table class="table" id="example4">
                          <thead>
                            <tr>
                              
                              <th><?php echo e(trans('file.Date')); ?></th>
                              <th><?php echo e(trans('file.reference')); ?></th>
                              <th>Biller</th>  
                              
                              <th>Customer</th>
                              <th>Warehouse</th>
                              <th>Grand Total</th>
                              
                              
                            </tr>
                          </thead>
                          <tbody>
                            <?php $__currentLoopData = $return; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                
                                <td><?php echo e(date('d-m-Y', strtotime($row->created_at))); ?></td>
                                <td><?php echo e($row->reference_no); ?></td>
                                
                                <td><?php echo e($row->biller->name); ?></td>

                                <td><?php echo e($row->customer->name); ?></td>
                                <td><?php echo e($row->warehouse->name); ?></td>
                                <td><?php echo e($row->grand_total); ?></td>
    
                              </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </tbody>
                        </table><br><br>

                         <label style="font-weight: 700;">Purchase Return</label>
                         <table class="table" id="example5">
                          <thead>
                            <tr>
                              
                              <th><?php echo e(trans('file.Date')); ?></th>
                              <th><?php echo e(trans('file.reference')); ?></th>
                           
                              <th>Warehouse</th>
                              <th>Supplier</th>
                              <th>Account</th>
                              <th>Grand Total</th>
                              
                              
                            </tr>
                          </thead>
                          <tbody>
                            <?php $__currentLoopData = $return_purchase; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                
                                <td><?php echo e(date('d-m-Y', strtotime($row->created_at))); ?></td>
                                <td><?php echo e($row->reference_no); ?></td>
                                
                                <td><?php echo e($row->warehouse->name); ?></td>

                                <td><?php echo e($row->supplier->name); ?></td>
                                <td><?php echo e($row->account->name); ?></td>
                                <td><?php echo e($row->grand_total); ?></td>
    
                              </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </tbody>
                        </table>



                      </div>
                  </div>

               
                  
                </div>
              </div>
            </div>

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
<script type="text/javascript">
  $(document).ready(function() {
    $('#example1').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#example2').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#example3').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#example4').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#example5').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>
<script type="text/javascript">
  $('#editor').html($('#editorCopy').val());

    $('#postSubmit').click(function () {
         $('#editorCopy').val($('#editor').html());
    });
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\salepropos\resources\views/product/detail.blade.php ENDPATH**/ ?>