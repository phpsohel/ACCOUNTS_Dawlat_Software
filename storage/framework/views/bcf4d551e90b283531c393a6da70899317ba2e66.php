    <table class="table table-bordered product-quotation-list">
                <thead>
                  <tr class="">
                    <th>#</th>
                    <th>Notes </th>
                    <th> Unit</th>
                    <th class="text-right">Amount </th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                        $i = 0;
                        $total = 0;
                    ?>
                    <?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $total +=  ($detail->paid_amount ?? 0);
                      
                    ?>
                    <tr class="">
                        <td class=""><?php echo e(++$i); ?></td>
                        <td class="">
                            <?php echo e($detail->notes_values ?? ''); ?>

                          </td>
                        <td class=""><?php echo e($detail->no_of_notes ?? ''); ?></td>
                        <td class="text-right"><?php echo e(($detail->paid_amount ?? 0)); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                <tfoot>
                    <tr class="text-success">
                        <td class="text-right" colspan="3">Total </td>
                        <td class="text-right"><?php echo e(number_format((float)($total ?? 0),2,'.','')); ?></td>
                      
                    </tr>
                </tfoot>
 </table><?php /**PATH C:\laragon\www\dawlatbd\resources\views/voucherinfo/modal_voucher_details.blade.php ENDPATH**/ ?>