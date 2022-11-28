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

                

            </div>
            <div class="card-body ">
                <h3 class="p-4 text-success text-center">Update Bill Information</h3>

                <br class="">
                <?php echo Form::open(['route' => ['billinfo.update',$item->id], 'method' => 'put', 'files' => true]); ?>

                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <h3 class="text-primary">INVOICE</h3>
                                    <input type="text" class="form-control" name="invoice_no" value="<?php echo e($item->invoice_no ?? 0); ?>" readonly>
                                    <input type="hidden" class="form-control" name="challan_no" value="<?php echo e($item->challan_no ?? ''); ?>">
                                    <input type="hidden" class="form-control" name="challan_id" value="<?php echo e($item->challan_id ?? 0); ?>">
                                    <input type="hidden" class="form-control" name="vendor_id" value="<?php echo e($item->vendor_customer_id ?? 0); ?>">
                                    <?php if($errors->has('invoice_no')): ?>
                                    <span>
                                        <span class="text-danger"><?php echo e($errors->first('invoice_no')); ?></span>
                                    </span>
                                    <?php endif; ?>
                                    <br class="">
                                    <h5>Favour With</h5>
                                    <strong class="upper_case"><?php echo e(($item->customer->name  ?? '').'( '.($item->customer->customer_code ?? '').' )'); ?></strong>
                                    <div class="upper_case"><?php echo e($item->customer->address  ?? ''); ?></div>
                                    <div class="upper_case"><?php echo e($item->customer->email  ?? ''); ?></div>



                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <h3 class="text-primary">Billing Date</h3>
                                    <div class="">
                                        <input type="date" class="form-control" value="<?php echo e($item->billing_date ?? ''); ?>" name="billing_date" required>
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
                                                <th class="text-right">Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody class="addtbody ">
                                            <?php
                                                $sub_total = 0;
                                            ?>
                                            <?php $__currentLoopData = $billdetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $billdetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                                $sub_total += ($billdetail->amount ?? 0);
                                            ?>

                                            <tr class="">
                                                <td>
                                                    <input type="hidden" class="" name="bill_details_id[]" value="<?php echo e($billdetail->id); ?>">
                                                    <textarea name="item_details[]" class="form-control " rows="5" placeholder="" readonly><?php echo e($item->challan_no.' | '. \Carbon\Carbon::parse($item->challan->shipping_date)->format('d M Y').' | '.$billdetail->chadetails->item_details ?? ''); ?></textarea>
                                                </td>
                                                <td><input type="text" class="form-control qty" name="qty[]" value="<?php echo e($billdetail->qty ?? ''); ?>" readonly></td>
                                                <td><input type="text" class="form-control cost" value="<?php echo e($billdetail->per_qty_cost ?? ''); ?>" name="per_qty_cost[]" onkeyup="cost(this)"></td>
                                                <td class="text-right"><input type="text" class="form-control amount text-right" value="<?php echo e($billdetail->amount ?? ''); ?>" name="amount[]" readonly></td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </tbody>
                                        <tfoot class="tfoot active">
                                            <tr class="">
                                                <td colspan="2"></td>
                                                <td colspan="" class="text-right"><?php echo e(trans('Sub Total')); ?></td>
                                                <td id="sub_total" class="">
                                                   
                                                    <input type="text" name="sub_total" value=" <?php echo e(number_format((float)($sub_total ?? 0),2,'.','')); ?>" class="form-control sub_total text-right" readonly>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td colspan="2"></td>
                                                <td colspan="" class="text-right"><?php echo e(trans('Vat ( %)')); ?></td>
                                                <td id="vat" class="d-flex"> 
                                                    <input type="text" name="vat" value="<?php echo e($item->vat ?? ''); ?>" class="form-control vat">
                                                    <input type="text" name="vat_tk" value="<?php echo e($item->vat_tk ?? ''); ?>" class="form-control vat_tk text-right" readonly>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td colspan="2"></td>
                                                <td colspan="" class="text-right"><?php echo e(trans('AIT (%)')); ?></td>
                                                <td id="ait" class="d-flex">
                                                    <input type="text" name="ait" value="<?php echo e($item->ait ?? ''); ?>" class="form-control ait">
                                                    <input type="text" name="ait_tk" value="<?php echo e($item->ait_tk ?? ''); ?>" class="form-control ait_tk text-right" readonly>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td colspan="2"></td>
                                                <td colspan="" class="text-right"><?php echo e(trans('Duty (%)')); ?></td>
                                                <td id="duty" class="d-flex">
                                                    <input type="text" name="duty" value="<?php echo e($item->duty ?? ''); ?>" class="form-control duty">
                                                    <input type="text" name="duty_tk" value="<?php echo e($item->duty_tk ?? ""); ?>" class="form-control duty_tk text-right" readonly>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td colspan="2"></td>
                                                <td colspan="" class="text-right"><?php echo e(trans('Charge (%)')); ?></td>
                                                <td id="charge" class="d-flex">
                                                    <input type="text" name="charge" value="<?php echo e($item->charge ?? ''); ?>" class="form-control charge">
                                                    <input type="text" name="charge_tk" value="<?php echo e($item->charge_tk ?? ''); ?>" class="form-control charge_th text-right" readonly>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td colspan="2"></td>
                                                <td colspan="" class="text-right"><?php echo e(trans('Grand Total')); ?></td>
                                                <td id="grand_total" class="">
                                                    <input type="text" name="payable_amount" value="<?php echo e($item->payable_amount ?? ''); ?>" class="form-control grand_total text-right" readonly>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                  
            <div class="form-group">
                <input type="submit" value="<?php echo e(trans('Update')); ?>" class="btn btn-primary" id="submit-button">
            </div>
            <?php echo Form::close(); ?>


        </div>
    </div>
    </div>


</section>
<script type="text/javascript">
    $("ul#sale").siblings('a').attr('aria-expanded', 'true');
    $("ul#sale").addClass("show");
    $("ul#sale #challan-list-menu").addClass("active");

    $(document).on('click', '.challan_data', function() {
        var id = $(this).attr('data-detailid');
        console.log(id);
        $.ajax({
            type: 'get'
            , url: "<?php echo e(route('billDetailsShow')); ?>"
            , dataType: 'HTML'
            , data: {
                id: id
            }
            , 'global': false
            , asyn: true
            , success: function(data) {
                $(".challan_details").html(data)
                console.log(data)
            }
            , error: function(response) {
                console.log(response);
            }
        });
    });


    $(document).on('click', '.challan_no', function() {

        var challan_id = $(".challan_no option:selected").val();
        console.log(challan_id);
        $.ajax({
            type: 'get'
            , url: "<?php echo e(route('getApprovedChallanDetails')); ?>"
            , dataType: 'HTML'
            , data: {
                challan_id: challan_id
            }
            , 'global': false
            , asyn: true
            , success: function(data) {
                $(".approveal_challan_details").html(data)
                console.log(data)
            }
            , error: function(response) {
                console.log(response);
            }
        });
    });



    function calculateSubtotl() {

        let rows = $('.addtbody').find('tr');
        var subtotal = 0;
        if (rows.length && rows[0].innerHTML.match('qty')) {
            $(rows).each(function(i, row) {
                let cost = $(row).find('.cost').val();
                let qty = $(row).find('.qty').val();
                subtotal += (cost * qty);
                $(row).find('.amount').val(cost * qty)
            })
            $('.sub_total').val(subtotal);

        }
    };



    function grandtotal() {
        let subtotalamount = $('.sub_total').val();
        let vat = 0;
        vat = $('.vat').val();
        let total_vat = parseFloat(subtotalamount * vat / 100);
        let ait = 0;
        ait = $('.ait').val();
        let total_ait = parseFloat(subtotalamount * ait / 100);
        let duty = 0;
        duty = $('.duty').val();
        let total_duty = parseFloat(subtotalamount * duty / 100);
        let charge = 0;
        charge = $('.charge').val();
        let total_charge = parseFloat(subtotalamount * charge / 100);
        $('.vat_tk').val(total_vat);
        $('.ait_tk').val(total_ait);
        $('.duty_tk').val(total_duty);
        $('.charge_th').val(total_charge);

        let grandtotal = (parseFloat(subtotalamount) + parseFloat(total_vat) + parseFloat(total_ait) + parseFloat(total_duty) + parseFloat(total_charge));
        console.log(grandtotal);
        $('.grand_total').val(grandtotal);
    }

    $(document).on('keyup', '.cost', function() {
        calculateSubtotl();
        grandtotal();
    });

    $(document).on('keyup', '.vat,.ait,.duty,.charge', function() {


        grandtotal();
        calculateSubtotl();

    });

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\dawlatbd\resources\views/billinfo/edit.blade.php ENDPATH**/ ?>