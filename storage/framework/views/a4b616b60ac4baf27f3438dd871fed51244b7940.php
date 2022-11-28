    <table class="table table-bordered product-quotation-list">
                <thead>
                  <tr class="">
                    <th>#</th>
                    <th><?php echo e(trans('file.product')); ?></th>
                    <th>Qty</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                        $i = 0;
                        $totalqty = 0;
                    ?>
                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $totalqty += $item->qty ?? 0;
                    ?>
                    <tr class="">
                        <td class=""><?php echo e(++$i); ?></td>
                        <td class=""><?php echo e($item->product->code ?? ''); ?> , <?php echo e($item->product->name ?? ''); ?> ,
                            <?php echo e($item->product->product_dimension ?? ''); ?>

                          </td>
                        <td class=""><?php echo e($item->qty ?? ''); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                <tfoot>
                    <tr class="">
                        <td class="text-right" colspan="2">Total Qty</td>
                        <td class=""><?php echo e($totalqty ?? 0); ?></td>
                    </tr>
                </tfoot>
            </table><?php /**PATH C:\laragon\www\dawlatbd\resources\views/quotation/modal_challan_details.blade.php ENDPATH**/ ?>