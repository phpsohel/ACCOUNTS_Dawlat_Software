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
            <a href="<?php echo e(route('challaninfo.create')); ?>" class="btn btn-info"><i class="dripicons-plus"></i> <?php echo e(trans('Add Challan')); ?></a>&nbsp;
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="table-responsive">
                        <table  class="table table-bordered table-sm table-striped text-nowrap">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Date</th>
                                    <th>Challan No</th>
                                    <th>Vendor Name</th>
                                    <th>Billar</th>
                                    <th>Challan</th>
                                    <th>Status</th>
                                    <th class="not-exported"><?php echo e(trans('file.action')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>  
                               
                                <tr>
                                    <td><?php echo e(++$i); ?></td>
                                    <td><?php echo e($item->created_at ?? ''); ?></td>
                                    <td><?php echo e($item->challan_no ?? ''); ?></td>
                                    <td><?php echo e($item->customer->name ?? ''); ?></td>
                                    <td><?php echo e($item->biller->name ?? ''); ?></td>
                                    <td><a href="<?php echo e(route('Challanpdf',$item->id)); ?>" class="" target="_blank"> Challan</a>
                                    </td>
                                    <td>
                                        <?php if($item->admin_approval_status == 1): ?>
                                        <span class="text-primary">Pending</span>
                                        <?php else: ?>
                                        <span class="text-success">Approved</span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo e(trans('file.action')); ?>

                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu edit-options dropdown-menu-right dropdown-default" user="menu">
                                                <li>
                                                    <a class="btn btn-link challan_data "   data-toggle="modal" data-target="#challan_<?php echo e($item->id); ?>" data-detailid="<?php echo e($item->id); ?>"><i class="fa fa-eye"></i>  <?php echo e(trans('file.View')); ?></a>
                                                </li>
                                                <li> 
                                                    <a href="<?php echo e(route('challaninfo.edit', $item->id)); ?>" class="btn btn-link"><i class="dripicons-document-edit"></i> <?php echo e(trans('file.edit')); ?></a>
                                                </li>
                                              
                                                <li>
                                                    <a class="btn btn-link" data-toggle="modal" data-target="#myModal<?php echo e($item->id); ?>"> <i class="fa fa-trash"></i>Delete
                                                    </a>
                                                </li>
                                            
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <?php echo $__env->make('challaninfo.deleted_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php echo $__env->make('challaninfo.challan_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="8" class="text-center text-danger"><h5>No data available in table.</h5></td>
                                    
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

    $(document).on('click', '.challan_data', function() {
        var id = $(this).attr('data-detailid');
       console.log(id);
       $.ajax({
           type: 'get',
           url: "<?php echo e(route('challanDetailsShow')); ?>",
           dataType: 'HTML',
           data: {
               id: id
           },
           'global': false,
           asyn: true,
           success: function(data) {
               $(".challan_details").html(data)
               console.log(data)
           },
           error: function(response) {
               console.log(response);
           }
       });
   });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\dawlatbd\resources\views/challaninfo/index.blade.php ENDPATH**/ ?>