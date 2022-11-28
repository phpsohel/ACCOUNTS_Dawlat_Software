<!DOCTYPE html>
<html>
<head>
    <title>Receipt</title>
<style>
body{
    font-family: sans-serif;
}
.shipping_table{
 
  border-collapse;
  
}

.shipping_tr_th_td {
  
}


.product_table {
 
  width: 100%;

  border-collapse:collapse;
  /* border-top: 1px solid rgb(7, 4, 92); */
  /* border-bottom: 1px solid rgb(7, 4, 92); */

}

.product_tr_th_td {
 
  border-bottom: 1px solid rgb(20, 3, 76);
  padding: 0px;
  margin: 0%;
 
  /* border-color: rgb(20, 24, 20); */
  /* padding: 8px; */
}
.product_tr_paddding{
  padding: 3px 0px 3px 0px;
}



</style>
</head>
<body>
<div style="text-align: center;">


 <br>

</div>
<style>
* {
  box-sizing: border-box;
}

.box {
  float: left;
  width: 20%;
}

.sealbox {
  float: left;
  width: 20%;
}
.box1 {
  float: left;
  width: 33.33%;
  padding: 0px;

}
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
.text_center{
  text-align: center;
}
.text_right{
  text-align: right;
  padding-right: 4px;
}
.text_left{
  text-align: left;
}
.upper_case{
    text-transform: uppercase;
    font-size: 10px;
}
</style>


<div class="clearfix">
  <div class="box1" style="background-color:#FFF">

  <div class="upper_case" style=" font-size: 25px;color:rgb(10, 10, 10);font-weight: bold;">RECEIPT</div>
 
    <br class="">
    <div class="upper_case"><?php echo e($item->customer->company_name ?? ''); ?></div>
    <div class="upper_case"><?php echo e($item->customer->address ?? ''); ?></div>
    <div class="upper_case"><?php echo e($item->customer->email ?? ''); ?></div>
    <div class="upper_case">
        <?php if($item->payment_type == 2): ?>
            <?php if($item->bank_name): ?> <?php echo e($item->bank_name); ?> , <?php endif; ?>
            <?php if($item->branch_name): ?> <?php echo e($item->branch_name); ?>, <?php endif; ?>
            <?php if($item->cheque_number): ?> <?php echo e($item->cheque_number); ?>. <?php endif; ?>
        <?php else: ?>
            Cash Paid    
        <?php endif; ?>
    </div>

  </div>
  <div class="box1" style="margin-top: 50px">
    <div class="" style="text-align: center">
        <strong ><?php echo e($item->customer->customer_code ?? ''); ?></strong>
    </div>
  </div>
  <div class="box1" style="margin-top: 50px">
    <div class="" style="text-align: right">
        <strong class="upper_case" style="font-size: 16px;"><?php echo e($item->voucher_no  ?? ''); ?></strong>
        <div class="upper_case"> <?php echo e(\Carbon\Carbon::parse($item->payment_date)->format('d F Y')); ?>/<?php echo e(\Carbon\Carbon::parse($item->payment_date)->format('l')); ?></div>
        <div class="upper_case">
            <?php echo $item->remarks ?? ''; ?>

        </div>
       
    </div>
  </div>
</div>
<br>
<table class="product_table">
    <tr style="" style="background-color: rgb(228, 225, 225);padding: 6px">
        <th class="upper_case product_tr_paddding" style="text-align: center">Note</th>
        <th class="upper_case  text_center product_tr_paddding">Unit</th>
        <th class="upper_case  text_right product_tr_paddding">Amount </th>
    </tr>

    <?php
    $sub_total = 0;
    use NumberToWords\NumberToWords;
// create the number to words "manager" class
    $numberToWords = new NumberToWords();
    $numberTransformer = $numberToWords->getNumberTransformer('en');
?>
<?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php
    $sub_total += ($detail->paid_amount ?? ''); 
?>
<tr>
    <?php
        $row_pand = $details->count();
    ?>
 
    <td class="upper_case " style="text-align: center"><?php echo e($detail->notes_values ?? ''); ?></td>
    <td class="upper_case  text_center"><?php echo e($detail->no_of_notes ?? 0); ?></td>
    <td class="upper_case  text_right"><?php echo e($detail->paid_amount ?? 0); ?></td>
</tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <tfoot>
  	<tr>
      <td class=""></td>
      <td class=""></td>
  	  <th class="upper_case  text_right "  style="background-color: rgb(228, 225, 225);"><?php echo e(number_format((float)($sub_total ?? 0),2,'.','')); ?></th>
    
  </tfoot>
</table>
<?php
    $total = numberToWord($item->paid_amount ?? 0);
?>

  <div class="" style="">
    <?php echo '<img style="margin-top:15px;width:50%;margin-left:22.5%;height:50px" src="data:image/png;base64,' . DNS1D::getBarcodePNG($total, 'C128') . '" width="300" alt="barcode"   />';?>

    <?php 

    ?>  
  </div>
<div class="clearfix">

  <div class="box" style="text-align: left;margin-right: 40px">
    <br><br><br><br>
    <br><br>
  
   
    
    <p class="upper_case"><strong>Received By<br> Cash/Account Department</strong></p>
  </div>
  <div class="box" style="text-align: left;margin-right: 40px">
    <br><br><br><br>
    <br><br>
  
   
    
    <p class="upper_case"><strong></strong></p>
  </div>
  <div class="box" style="text-align: left;margin-right: 40px">
    <br><br><br><br>
    <br><br>
   
   
    
    <p class="upper_case"><strong></strong></p>
  </div>


  <div class="box" style="background-color:#FFF;text-align:right;margin-left: 40px;">
    <br><br><br><br>
    <br><br>
  
  
    <p class="upper_case"><strong>Official Seal</strong></p>
  
  </div>


</div>

</body>

</html><?php /**PATH C:\laragon\www\dawlatbd\resources\views/voucherinfo/voucher_pdf_receipt.blade.php ENDPATH**/ ?>