    <table class="table table-bordered product-quotation-list">
                <thead>
                  <tr class="">
                    <th>#</th>
                    <th>PO Number</th>
                    <th>Description 
                        <br>
                        (Product Details)
                    </th>
                    <th>Unit
                        <br class="">
                        ( Single Count)
                    </th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                        $i = 0;
                        $totalqty = 0;
                    ?>
                    <?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $totalqty += $detail->qty ?? 0;
                    ?>
                    <tr class="">
                        <td class=""><?php echo e(++$i); ?></td>
                        <td class=""><?php echo e($detail->po_number ?? ''); ?></td>
                        <td class="">
                            <?php echo $detail->item_details ?? ''; ?>

                          </td>
                        <td class=""><?php echo e($detail->qty ?? ''); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                <tfoot>
                    <tr class="">
                        <td class="text-right" colspan="3">Total Qty</td>
                        <td class=""><?php echo e($totalqty ?? 0); ?></td>
                    </tr>
                </tfoot>
            </table><?php /**PATH C:\laragon\www\dawlatbd\resources\views/challaninfo/modal_challan_details.blade.php ENDPATH**/ ?>