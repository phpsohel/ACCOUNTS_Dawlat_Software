 <?php $__env->startSection('content'); ?>
<?php if(session()->has('create_message')): ?>
    <div class="alert alert-success alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><?php echo session()->get('create_message'); ?></div> 
<?php endif; ?>
<?php if(session()->has('edit_message')): ?>
    <div class="alert alert-success alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><?php echo e(session()->get('edit_message')); ?></div> 
<?php endif; ?>
<?php if(session()->has('import_message')): ?>
    <div class="alert alert-success alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><?php echo session()->get('import_message'); ?></div> 
<?php endif; ?>
<?php if(session()->has('not_permitted')): ?>
  <div class="alert alert-danger alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><?php echo e(session()->get('not_permitted')); ?></div> 
<?php endif; ?>

<section>
    <div class="container">
    <div class="card">
        <div class="card-header">

            <div class="row">
                <div class="col-lg-4 col-md-4 offset-md-4">
                    <h4 class="text-center p-2">Bill List</h4>
                    <select required name="invoice_no" class="selectpicker form-control invoice_no" data-live-search="true" id="" data-live-search-style="begins" title="Select Invoice Number">
                        <?php $__currentLoopData = $bills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($bill->id); ?>"><?php echo e($bill->invoice_no ?? ''); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>

        </div>
        <div class="card-body invoice_details">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="table-responsive">
                        <table  class="table table-bordered table-sm table-striped text-nowrap">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Date</th>
                                    <th>Voucher No</th>
                                    <th>Vendor Name</th>
                                    <th class="text-success text-right">Paid Amount</th>
                                    <th class="not-exported"><?php echo e(trans('file.action')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>  
                               
                                <tr>
                                    <td><?php echo e(++$i); ?></td>
                                    <td><?php echo e($item->payment_date ?? ''); ?></td>
                                    <td><a href="<?php echo e(route('voucherPdfInvoice',$item->id)); ?>" class="" target="_blank"><?php echo e($item->voucher_no ?? ''); ?></a></td>
                                  
                                    <td><?php echo e(($item->customer->name ?? '').'('.($item->customer->customer_code ?? '').')'); ?></td>
                                    <td class="text-success text-right"><?php echo e($item->paid_amount ?? ''); ?></td>
                                    <td>
                                        <div class="btn-group" >
                                            <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo e(trans('file.action')); ?>

                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu edit-options dropdown-menu-right dropdown-default" user="menu" style="scroll:auto">
                                                <li>
                                                    <a class="btn btn-link voucher_data "   data-toggle="modal" data-target="#voucher_<?php echo e($item->id); ?>" data-detailid="<?php echo e($item->id); ?>"><i class="fa fa-eye"></i>  <?php echo e(trans('file.View')); ?></a>
                                                </li>
                                              <li> 
                                                    <a href="<?php echo e(route('voucherinfo.edit', $item->id)); ?>" class="btn btn-link"><i class="dripicons-document-edit"></i> <?php echo e(trans('file.edit')); ?></a>
                                                </li>
                                          
                                            
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                
                                <?php echo $__env->make('voucherinfo.voucher_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="14" class="text-center text-danger"><h5>No data available in table.</h5></td>
                                    
                                   </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                    <?php echo e($items->links()); ?>

                </div>
            </div>
        </div>
     </div>
    </div>
  
  
</section>
<script type="text/javascript">
    $("ul#sale").siblings('a').attr('aria-expanded','true');
    $("ul#sale").addClass("show");
    $("ul#sale #challan-list-menu").addClass("active");



            $(document).on('click', '.voucher_data', function() {
                var id = $(this).attr('data-detailid');
            console.log(id);
            $.ajax({
                type: 'get',
                url: "<?php echo e(route('voucherDetailsShow')); ?>",
                dataType: 'HTML',
                data: {
                    id: id
                },
                'global': false,
                asyn: true,
                success: function(data) {
                    $(".voucher_details").html(data)
                    console.log(data)
                },
                error: function(response) {
                    console.log(response);
                }
            });
        });

        $(document).on('click', '.payment_type', function() {

            var payment_type = $(".payment_type option:selected").val();
            if(payment_type == 2)
            {
                $(".bank_name").show();
                $(".branch_name").show();
                $(".cheque_number").show();
            }
            if(payment_type == 1){
                $(".bank_name").hide();
                $(".branch_name").hide();
                $(".cheque_number").hide(); 
            }
        });


            $(document).on('click', '.invoice_no', function() {
                
                var invoice_no = $(".invoice_no option:selected").val();
            console.log(invoice_no);
            $.ajax({
                type: 'get',
                url: "<?php echo e(route('getInvoiceByAjax')); ?>",
                dataType: 'HTML',
                data: {
                    invoice_no:invoice_no
                },
                'global': false,
                asyn: true,
                success: function(data) {
                    $(".invoice_details").html(data)
                    console.log(data)
                },
                error: function(response) {
                    console.log(response);
                }
            });
            });

          






</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\dawlatbd\resources\views/voucherinfo/index.blade.php ENDPATH**/ ?>