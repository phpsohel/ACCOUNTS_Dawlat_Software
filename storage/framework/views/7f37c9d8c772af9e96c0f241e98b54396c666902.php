    <table class="table table-bordered product-quotation-list">
                <thead>
                  <tr class="">
                    <th>#</th>
                    <th>Description </th>
                    <th>
                        Unit ( Single Count)
                    </th>
                    <th>Cost</th>
                    <th>Amount </th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                        $i = 0;
                        $subtotal = 0;
                    ?>
                    <?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $subtotal +=  ($detail->qty ?? 0)*($detail->per_qty_cost ?? 0);
                      
                    ?>
                    <tr class="">
                        <td class=""><?php echo e(++$i); ?></td>
                        <td class="">
                            <textarea name="" class="form-control " rows="5" placeholder="" readonly><?php echo e($detail->chadetails->challan_no.' | '.$detail->chadetails->shipping_date.' | '.$detail->chadetails->item_details ?? ''); ?></textarea>
                        </td>
                        <td class="">
                            <?php echo e($detail->qty ?? ''); ?>

                          </td>
                        <td class=""><?php echo e($detail->per_qty_cost ?? ''); ?></td>
                        <td class=""><?php echo e(($detail->qty ?? 0)*($detail->per_qty_cost ?? 0)); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                <tfoot>
                    <tr class="">
                        <td class="text-right" colspan="4">Sub Total </td>
                        <td class=""><?php echo e($subtotal ?? 0); ?></td>
                    </tr>
                    <tr class="">
                        <td class="text-right" colspan="4">Vat (<?php echo e($item->vat ?? 0); ?> %)</td>
                        <td class=""><?php echo e($item->vat_tk ?? 0); ?></td>
                    </tr>
                    <tr class="">
                        <td class="text-right" colspan="4">AIT (<?php echo e($item->ait ?? 0); ?> %)</td>
                        <td class=""><?php echo e($item->ait_tk ?? 0); ?></td>
                    </tr>
                    <tr class="">
                        <td class="text-right" colspan="4">Duty (<?php echo e($item->duty ?? 0); ?> %)</td>
                        <td class=""><?php echo e($item->duty_tk ?? 0); ?></td>
                    </tr>
                    <tr class="">
                        <td class="text-right" colspan="4">Charge (<?php echo e($item->charge ?? 0); ?> %)</td>
                        <td class=""><?php echo e($item->charge_tk ?? 0); ?></td>
                    </tr>
                    <tr class="text-info">
                        <td class="text-right" colspan="4">Grandtotal </td>
                        <td class=""><?php echo e($item->payable_amount ?? 0); ?></td>
                    </tr>
                    <tr class="text-success">
                        <td class="text-right" colspan="4">Paid Amount</td>
                        <td class=""><?php echo e($item->paid_amount ?? 0); ?></td>
                    </tr>
                    <tr class="text-danger">
                        <td class="text-right" colspan="4">Due Amount </td>
                        <td class=""><?php echo e($item->due_amount ?? 0); ?></td>
                    </tr>
                </tfoot>
 </table><?php /**PATH C:\laragon\www\dawlatbd\resources\views/billinfo/modal_bill_details.blade.php ENDPATH**/ ?>