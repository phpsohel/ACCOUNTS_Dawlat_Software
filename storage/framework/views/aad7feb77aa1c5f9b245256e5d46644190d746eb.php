

<?php echo Form::open(['route' => 'billinfo.store', 'method' => 'post', 'files' => true]); ?>

<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="form-group">
                    <h3 class="text-primary">INVOICE</h3>
                    <input type="text" class="form-control" name="invoice_no" value="<?php echo e($auto_invoice ?? 0); ?>"  readonly>
                    <input type="hidden" class="form-control" name="challan_no" value="<?php echo e($challan->challan_no ?? ''); ?>" >
                    <input type="hidden" class="form-control" name="challan_id"  value="<?php echo e($challan->id ?? 0); ?>">
                    <input type="hidden" class="form-control" name="vendor_id"  value="<?php echo e($challan->vendor_customer_id ?? 0); ?>">
                    <?php if($errors->has('invoice_no')): ?>
                    <span>
                        <span class="text-danger"><?php echo e($errors->first('invoice_no')); ?></span>
                    </span>
                    <?php endif; ?>
                    <br class="">
                    <h5>Favour With</h5>
                    <strong class="upper_case"><?php echo e(($challan->customer->name  ?? '').'( '.($challan->customer->customer_code ?? '').' )'); ?></strong>
                    <div class="upper_case"><?php echo e($challan->customer->address  ?? ''); ?></div>
                    <div class="upper_case"><?php echo e($challan->customer->email  ?? ''); ?></div>
                
                    

                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="form-group">
                     <h3 class="text-primary">Billing Date</h3>
                    <div class="">
                        <input type="date" class="form-control" value="<?php echo e(date('Y-m-d')); ?>" name="billing_date" required>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">

                <div class="table-responsive mt-3">
                    <table id="myTable" class="table table-hover order-list">
                        <thead>
                            <tr>
                                <th width="280px">Description
                                    
                                    (Product Details)</th>
                                <th>Unit
                                    ( Single Count)</th>
                                <th class="">Cost</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody class="addtbody ">
                            <?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="">
                                <td>
                                    <input type="hidden" class="" name="details_challan_id[]" value="<?php echo e($detail->id); ?>">
                                    <textarea name="item_details[]" class="form-control " rows="5" placeholder="" readonly><?php echo e($challan->challan_no.' | '.$challan->shipping_date.' | '.$detail->item_details ?? ''); ?></textarea>
                                </td>
                                <td><input type="text" class="form-control qty"  name="qty[]" value="<?php echo e($detail->qty ?? ''); ?>" readonly></td>
                                <td><input type="text" class="form-control cost" name="per_qty_cost[]"  onkeyup="cost(this)"></td>
                                <td class=""><input type="text" class="form-control amount" name="amount[]" readonly></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          
                        </tbody>
                        <tfoot class="tfoot active">
                           <tr class="">
                            <td colspan="2"></td>
                            <td colspan="" class="text-right"><?php echo e(trans('Sub Total')); ?></td>
                            <td id="sub_total" class="">
                                <input type="text" name="sub_total" class="form-control sub_total text-right" readonly>
                            </td>
                           </tr>
                           <tr class="">
                            <td colspan="2"></td>
                            <td colspan="" class="text-right"><?php echo e(trans('Vat (%)')); ?></td>
                            <td id="vat" class="d-flex">
                                <input type="text" name="vat" class="form-control vat">
                                <input type="text" name="vat_tk" class="form-control vat_tk text-right" readonly>
                            </td>
                           </tr>
                           <tr class="">
                            <td colspan="2"></td>
                            <td colspan="" class="text-right"><?php echo e(trans('AIT (%)')); ?></td>
                            <td id="ait" class="d-flex">
                                <input type="text" name="ait" class="form-control ait" >
                                <input type="text" name="ait_tk" class="form-control ait_tk text-right" readonly>
                            </td>
                           </tr>
                           <tr class="">
                            <td colspan="2"></td>
                            <td colspan="" class="text-right"><?php echo e(trans('Duty (%)')); ?></td>
                            <td id="duty" class="d-flex">
                                <input type="text" name="duty" class="form-control duty" >
                                <input type="text" name="duty_tk" class="form-control duty_tk text-right" readonly>
                            </td>
                           </tr>
                           <tr class="">
                            <td colspan="2"></td>
                            <td colspan="" class="text-right"><?php echo e(trans('Charge (%)')); ?></td>
                            <td id="charge" class="d-flex">
                                <input type="text" name="charge" class="form-control charge" >
                                <input type="text" name="charge_tk" class="form-control charge_th text-right" readonly>
                            </td>
                           </tr>
                           <tr class="">
                            <td colspan="2"></td>
                            <td colspan="" class="text-right"><?php echo e(trans('Grand Total')); ?></td>
                            <td id="grand_total" class="">
                                <input type="text" name="payable_amount" class="form-control grand_total text-right" readonly>
                            </td>
                           </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>


        
<div class="form-group">
<input type="submit" value="<?php echo e(trans('file.submit')); ?>" class="btn btn-primary" id="submit-button">
</div>
<?php echo Form::close(); ?><?php /**PATH /home/acquqkkb/public_html/dawlatbd/resources/views/billinfo/get_approval_challan_for_bill.blade.php ENDPATH**/ ?>