 <?php $__env->startSection('content'); ?>
<?php if(session()->has('not_permitted')): ?>
<div class="alert alert-danger alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><?php echo e(session()->get('not_permitted')); ?></div>
<?php endif; ?>

<section class="forms">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"><?php echo e(trans('file.addchalan')); ?></h4>
                        <div class="card-tools">
                            <a href="<?php echo e(URL::Previous()); ?>" class="btn btn-info pull-right"><i class="fa fa-undo px-2"></i> Back</a>
                        </div>

                    </div>
                    <div class="card-body">
                        <p class="italic"><small class="text-danger"><?php echo e(trans('file.The field labels marked with * are required input fields')); ?>.</small></p>
                        <?php echo Form::open(['route' => 'challaninfo.store', 'method' => 'post', 'files' => true, 'id' => 'quotation-form']); ?>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <label><?php echo e(trans('Challan Number')); ?> <sup class="text-danger">*</sup></label>
                                            <input type="text" class="form-control" name="challan_no" value="<?php echo e($autochallan_num ?? ''); ?>" readonly>
                                            <?php if($errors->has('challan_no')): ?>
                                            <span>
                                                <span class="text-danger"><?php echo e($errors->first('challan_no')); ?></span>
                                            </span>
                                            <?php endif; ?>

                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <label><?php echo e(trans('Vendor Name')); ?> <sup class="text-danger">*</sup></label>
                                            <select id="vendor_customer_id" name="vendor_customer_id" required class="selectpicker form-control vendor_customer_id" data-live-search="true" id="customer-id" data-live-search-style="begins" title="Select Vendor...">
                                                <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($customer->id); ?>"><?php echo e($customer->company_name ?? ''); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php if($errors->has('vendor_customer_id')): ?>
                                            <span>
                                                <span class="text-danger"><?php echo e($errors->first('vendor_customer_id')); ?></span>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <label><?php echo e(trans('Biller Name')); ?> <sup class="text-danger">*</sup></label>
                                            <select required name="biller_id" class="selectpicker form-control" data-live-search="true" id="biller-id" data-live-search-style="begins" title="Select Biller...">
                                                <?php $__currentLoopData = $billars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $biller): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($biller->id); ?>"><?php echo e($biller->name ?? ''); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php if($errors->has('biller_id')): ?>
                                            <span>
                                                <span class="text-danger"><?php echo e($errors->first('biller_id')); ?></span>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><?php echo e(trans('file.salesperson')); ?> <sup class="text-danger">*</sup></label>
                                            <input type="text" class="form-control sales_person" name="sales_person" value="<?php echo e(old('sales_person')); ?>" required>
                                         
                                            <?php if($errors->has('sales_person')): ?>
                                            <span>
                                                <span class="text-danger"><?php echo e($errors->first('sales_person')); ?></span>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><?php echo e(trans('Deliver Person')); ?> <sup class="text-danger">*</sup></label>
                                            <input type="text" class="form-control delivery_person" name="delivery_person" value="<?php echo e(old('delivery_person')); ?>" required>
                                            <?php if($errors->has('delivery_person')): ?>
                                            <span>
                                                <span class="text-danger"><?php echo e($errors->first('delivery_person')); ?></span>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><?php echo e(trans('file.deliveryplace')); ?> <sup class="text-danger">*</sup></label>
                                            <input type="text" name="delivery_place" value="<?php echo e(old('delivery_place')); ?>" class="form-control" placeholder="<?php echo e(trans('file.deliveryplace')); ?>" required>
                                            <?php if($errors->has('delivery_place')): ?>
                                            <span>
                                                <span class="text-danger"><?php echo e($errors->first('delivery_place')); ?></span>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><?php echo e(trans('file.shippingdate')); ?> <sup class="text-danger">*</sup></label>
                                            <input type="date" name="shipping_date" value="<?php echo e(date('Y-m-d')); ?>" class="form-control" required>
                                            <?php if($errors->has('shipping_date')): ?>
                                            <span>
                                                <span class="text-danger"><?php echo e($errors->first('shipping_date')); ?></span>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><?php echo e(trans('file.shippingitem')); ?> <sup class="text-danger">*</sup></label>
                                            <input type="text" name="shipping_item" value="1" class="form-control shipping_item" placeholder="<?php echo e(trans('file.shippingitem')); ?>" required readonly>

                                            <?php if($errors->has('shipping_item')): ?>
                                            <span>
                                                <span class="text-danger"><?php echo e($errors->first('shipping_item')); ?></span>
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>



                                </div>

                                <div class="row mt-5">
                                    <div class="col-md-12">

                                        <div class="table-responsive mt-3">
                                            <table id="myTable" class="table table-hover order-list">
                                                <thead>
                                                    <tr>
                                                        <th>PO Number</th>
                                                        <th width="280px">Description
                                                            
                                                            (Product Details)</th>
                                                        <th>Unit
                                                            ( Single Count)</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="addtbody ">
                                                    <tr class="">
                                                        <td><input type="text" class="form-control" name="po_number[]" value="<?php echo e(old('po_number')); ?>" placeholder="" required></td>
                                                        <td>

                                                            <textarea name="item_details[]" class="form-control summernote" rows="3" placeholder=""></textarea>
                                                        </td>
                                                        <td><input type="text" class="form-control qty" style="border:1px solid rgb(243, 220, 220)" onkeyup="qtycal(this)" name="qty[]" required></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                                <tfoot class="tfoot active">
                                                    <td colspan="2"><?php echo e(trans('file.Total')); ?></td>
                                                    <td id="total-qty" class="">
                                                        <input type="text" name="total_qty"  class="form-control total_qty" readonly>
                                                    </td>
                                                    <th><a class="btn btn-info new_add text-white" onclick="addRowNum()">+</a></th>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>


                                
                    <div class="form-group">
                        <input type="submit" value="<?php echo e(trans('file.submit')); ?>" class="btn btn-primary" id="submit-button">
                    </div>
                </div>
            </div>
            <?php echo Form::close(); ?>

        </div>
    </div>
    </div>
    </div>
    </div>



</section>

<script type="text/javascript">
    $("ul#sale").siblings('a').attr('aria-expanded', 'true');
    $("ul#sale").addClass("show");
    $("ul#sale #challan-list-menu").addClass("active");

  

    $(document).ready(function() {
        var addBtn = $('.new_add');
        $(addBtn).click(function() {
            var maxField = 40;
            var wrapper = $('.addtbody');
            var x = 1;
            var fieldHtml = '<tr class=""><th><input type="text" class="form-control" name="po_number[]" value="<?php echo e(old('
            po_number ')); ?>" ></th><th width="280px"><textarea name="item_details[]" class="form-control summernote" rows="3"></textarea></th><th><input type="text" class="form-control qty" name="qty[]" onkeyup="qtycal(this)"></th><th><button type="button" class="btn btn-danger btn-sm delete_class remove" onclick="SubRowNum()">X</button></th></tr>';
            if (x < maxField) {
                x++;
                $(wrapper).append(fieldHtml);
            }
        })
    });
    
    // $(function() {
    //         // Summernote
    //         $('.summernote').summernote()
    //         $('#summernote1').summernote()
    //         // CodeMirror
    //         CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
    //             mode: "htmlmixed",
    //             theme: "monokai"
    //         });
    //     });


    $('tbody').on('click', '.remove', function() {
        $(this).parent().parent().remove();
        totalqty();
       
    });

    function qtycal(element) {
        $(element).parents('tr').find('.qty').val(element.value)
        totalqty()
    }

    function totalqty() {
        let amount = 0;
        let rows = $('.qty');
        $.each(rows, (i, row) => {
            let value = $(row).val();
            if (!value) value = 0;
            amount += parseFloat(value)
        })
        $('.total_qty').val(amount)
    };


    $(document).on('click', '.vendor_customer_id', function() {
                
        var vendor_customer = $(".vendor_customer_id option:selected").val();
            console.log(vendor_customer);
            $.ajax({
                type: 'get',
                url: "<?php echo e(route('getVendorSalesPerson')); ?>",
                dataType: 'HTML',
                data: {
                    vendor_customer:vendor_customer
                },
                'global': false,
                asyn: true,
                success: function(data) {
                    $(".sales_person").val(data)
                    console.log(data)
                },
                error: function(response) {
                    console.log(response);
                }
            });
            });

       function addRowNum() {
          
            var shipitem = $(".shipping_item").val();
            var total = (parseFloat(shipitem) + 1);
            $(".shipping_item").val(total);
            console.log(total);

        };

        function SubRowNum() {
         
            var shipitem = $(".shipping_item").val();
            var total = (parseFloat(shipitem) - 1);
            $(".shipping_item").val(total);
            console.log(total);

        };

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\dawlatbd\resources\views/challaninfo/create.blade.php ENDPATH**/ ?>