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
            <a href="<?php echo e(route('deliveryperson.create')); ?>" class="btn btn-info"><i class="dripicons-plus"></i> <?php echo e(trans('Add Delivery Person')); ?></a>&nbsp;
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="table-responsive">
                        <table  class="table table-bordered table-sm table-striped text-nowrap">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th><?php echo e(trans('file.name')); ?></th>
                                    <th><?php echo e(trans('file.Phone Number')); ?></th>
                                    <th><?php echo e(trans('file.Address')); ?></th>
                                    <th class="not-exported"><?php echo e(trans('file.action')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $deliveries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$delivery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e(++$i); ?></td>
                                    <td><?php echo e($delivery->name ?? ''); ?></td>
                                    <td><?php echo e($delivery->phone_number ?? ''); ?></td>
                                    <td><?php echo e($delivery->address ?? ''); ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo e(trans('file.action')); ?>

                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu edit-options dropdown-menu-right dropdown-default" user="menu">
                                             
                                                <li> 
                                                    <a href="<?php echo e(route('deliveryperson.edit', $delivery->id)); ?>" class="btn btn-link"><i class="dripicons-document-edit"></i> <?php echo e(trans('file.edit')); ?></a>
                                                </li>
                                              
                                                <li>
                                                    <a class="btn btn-link" data-toggle="modal" data-target="#myModal<?php echo e($delivery->id); ?>"> <i class="fa fa-trash"></i>Delete
                                                    </a>
                                                </li>
                                            
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <?php echo $__env->make('deliveryperson.deleted_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <?php echo e($deliveries->links()); ?>

                </div>
            </div>
        </div>
     </div>
    </div>
  
  
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\dawlatbd\resources\views/deliveryperson/index.blade.php ENDPATH**/ ?>