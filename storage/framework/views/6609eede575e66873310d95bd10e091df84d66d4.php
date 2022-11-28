<div id="challan_<?php echo e($quotation->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
    <div role="document" class="modal-dialog" >
      <div class="modal-content">
        <div class="container mt-3 pb-2 border-bottom">
            <div class="row">
                <div class="col-md-3">
                    
                    <?php echo e(Form::open(['route' => 'quotation.sendmail', 'method' => 'post', 'class' => 'sendmail-form'] )); ?>

                        <input type="hidden" name="quotation_id">
                        <button class="btn btn-default btn-sm d-print-none" disabled><i class="dripicons-mail"></i> <?php echo e(trans('file.Email')); ?></button>
                    <?php echo e(Form::close()); ?>

                </div>
                <div class="col-md-6">
                    <h3 id="exampleModalLabel" class="modal-title text-center container-fluid"><?php echo e($general_setting->site_title); ?></h3>
                </div>
                <div class="col-md-3">
                    <button type="button" id="close-btn" data-dismiss="modal" aria-label="Close" class="close d-print-none"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
                </div>
                <div class="col-md-12 text-center">
                    <i style="font-size: 15px;"><?php echo e(trans('file.challandetails')); ?></i>
                </div>
            </div>
        </div>
        <div class="" id="dvContainer">
            <div  class="modal-body">
                <div class="row">

                    <div class="col-md-6"> 
                        <div>Forwarded</div>
                        <strong class=""><?php echo e($quotation->customer->company_name  ?? ''); ?></strong>
                       <div class=""><?php echo e($quotation->customer->address  ?? ''); ?></div>
                       <div class="">Contact Person : <?php echo e($quotation->customer->name ?? ''); ?></div>
                       <div class="">Contact Number : <?php echo e($quotation->customer->phone_number ?? ''); ?></div>
                       <div class="">Delivery Place : <?php echo e($quotation->delivery_place ?? ''); ?></div>
                    </div>


                    <div class="col-md-6">
                        <div class="bg-dark text-white text-center">Shipping Challan</div>
                       
                        <div class="">Enlisted      : <?php echo e($quotation->customer->created_at  ?? ''); ?></div>
                       
                        <div class="">Shipping Item : <?php echo e($quotation->shipping_item  ?? ''); ?></div>
                       
                        <div class="">Shipping Date  : <?php echo e($quotation->shipping_date  ?? ''); ?></div>
                       
                        <div class="">Sales Person  : <?php echo e($quotation->sales_person  ?? ''); ?></div>
                    </div>
                </div>
            </div>
            <br>
            <div class="challan_details">
                
            </div>
        
            <div id="quotation-footer" class="modal-body"></div>
        </div>
      </div>
    </div>
</div><?php /**PATH C:\laragon\www\dawlatbd\resources\views/quotation/quotation_modal.blade.php ENDPATH**/ ?>