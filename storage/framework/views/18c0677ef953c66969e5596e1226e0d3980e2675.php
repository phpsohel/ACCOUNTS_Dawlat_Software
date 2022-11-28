<div id="voucher_<?php echo e($item->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
    <div role="document" class="modal-dialog" >
      <div class="modal-content">
        <div class="container mt-3 pb-2 border-bottom">
            <div class="row">
                <div class="col-md-3">
                
                </div>
                <div class="col-md-6">
                    <h3 id="exampleModalLabel" class="modal-title text-center container-fluid"><?php echo e($general_setting->site_title); ?></h3>
                </div>
                <div class="col-md-3">
                    <button type="button" id="close-btn" data-dismiss="modal" aria-label="Close" class="close d-print-none"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
                </div>
                <div class="col-md-12 text-center">
                    <i style="font-size: 15px;"><?php echo e(trans('Voucher Details')); ?></i>
                </div>
            </div>
        </div>
        <div class="" id="dvContainer">
            <div  class="modal-body">
                <div class="row">

                    <div class="col-md-6"> 
                        <div class="text-success"><h4 class="">Voucher No ( <?php echo e($item->voucher_no  ?? ''); ?> )</h4></div>
                       
                        <div class="upper_case"> <?php echo e(\Carbon\Carbon::parse($item->payment_date)->format('d F Y')); ?></div>
                        <div class="upper_case"><?php echo e(\Carbon\Carbon::parse($item->payment_date)->format('l')); ?></div>
                       <div class="">Vendor Name : <?php echo e(($item->customer->name ?? '').'('.($item->customer->customer_code ?? '').')'); ?></div>
                       <?php if($item->payment_type == 1): ?>
                            <div class="">Payment by : Cash</div>
                       <?php endif; ?>
                    
                    </div>
                    <div class="col-md-6">
                        <?php if($item->payment_type == 2): ?>
                            <div class="">Bank Name - <?php echo e($item->bank_name ?? ''); ?></div>
                            <div class="">Branch Name - <?php echo e($item->branch_name ?? ''); ?></div>
                            <div class="">Cheque Number - <?php echo e($item->cheque_number ?? ''); ?></div>
                        <?php else: ?>
                              
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <br>
            <div class="voucher_details">
                
            </div>
        
            <div id="item-footer" class="modal-body"></div>
        </div>
      </div>
    </div>
</div><?php /**PATH C:\laragon\www\dawlatbd\resources\views/voucherinfo/voucher_modal.blade.php ENDPATH**/ ?>