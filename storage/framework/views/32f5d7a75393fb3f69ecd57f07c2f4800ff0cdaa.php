<div id="challan_<?php echo e($item->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
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
                    <i style="font-size: 15px;"><?php echo e(trans('file.challandetails')); ?></i>
                </div>
            </div>
        </div>
        <div class="" id="dvContainer">
            <div  class="modal-body">
                <div class="row">

                    <div class="col-md-6"> 
                        <div>Forwarded</div>
                        <strong class=""><?php echo e($item->customer->company_name  ?? ''); ?></strong>
                       <div class=""><?php echo e($item->customer->address  ?? ''); ?></div>
                       <div class="">Contact Person : <?php echo e($item->customer->name ?? ''); ?></div>
                       <div class="">Contact Number : <?php echo e($item->customer->phone_number ?? ''); ?></div>
                       <div class="">Delivery Place : <?php echo e($item->delivery_place ?? ''); ?></div>
                    </div>


                    <div class="col-md-6">
                        <div class="bg-dark text-white text-center">Shipping Challan</div>
                       
                        <div class="">Enlisted      : <?php echo e($item->customer->created_at  ?? ''); ?></div>
                       
                        <div class="">Shipping Item : <?php echo e($item->shipping_item  ?? ''); ?></div>
                       
                        <div class="">Shipping Date  : <?php echo e($item->shipping_date  ?? ''); ?></div>
                       
                        <div class="">Sales Person  : <?php echo e($item->sales->name  ?? ''); ?></div>
                        <div class="">Delivery Person  : <?php echo e($item->delivery->name  ?? ''); ?></div>
                    </div>
                </div>
            </div>
            <br>
            <div class="challan_details">
                
            </div>
        
            <div id="item-footer" class="modal-body"></div>
        </div>
      </div>
    </div>
</div><?php /**PATH /home/acquqkkb/public_html/dawlatbd/resources/views/challaninfo/challan_modal.blade.php ENDPATH**/ ?>