<!DOCTYPE html>
<html>
<head>
    <title>Bill Report</title>
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
  border-top: 1px solid rgb(7, 4, 92);
  border-bottom: 1px solid rgb(7, 4, 92);

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

  <div class="upper_case" style=" font-size: 25px;color:rgb(58, 23, 219);font-weight: bold;">INVOICE</div>
    <strong class="upper_case" style="font-size: 16px;"><?php echo e($bill->invoice_no  ?? ''); ?></strong>
    <div class="upper_case"> <?php echo e(\Carbon\Carbon::parse($bill->billing_date)->format('d F Y')); ?></div>
    <div class="upper_case"><?php echo e(\Carbon\Carbon::parse($bill->billing_date)->format('l')); ?></div>
    <br class="">
    <div class="upper_case">Favour With</div>
    <div class="upper_case"><?php echo e($bill->challan->customer->company_name ?? ''); ?></div>
    <div class="upper_case"><?php echo e($bill->challan->customer->address ?? ''); ?></div>
    <div class="upper_case"><?php echo e($bill->challan->customer->email ?? ''); ?></div>

  </div>
  <div class="box1" style=""></div>
  <div class="box1" style="margin-top: 50px">
    <div class="row" >
      <div class="upper_case" style="">
          <table class="" style="width:100%;margin-left:15px;">
           
            <tr class="">
              <td class="" style="font-size: 16px;"><strong ><?php echo e($bill->challan->customer->customer_code ?? ''); ?></strong> | </td>
              <td class="">
                Honourable <?php echo e($bill->challan->customer->designation ?? ''); ?> <br>
               <strong> <?php echo e($bill->challan->customer->name ?? ''); ?></strong>
              </td>
            </tr>
         
         
          </table>
      </div>

    </div>
  </div>
</div>
<br>
<table class="product_table">
    <tr style=""> 
        <th class="upper_case " style="text-align: center"></th>
        <th class="upper_case product_tr_paddding" style="text-align: center">Cost</th>
        <th class="upper_case  text_center product_tr_paddding">Unit </th>
        <th class="upper_case  text_right product_tr_paddding">Amount </th>
    </tr>



    <?php
    $sub_total = 0;
    use NumberToWords\NumberToWords;
// create the number to words "manager" class
    $numberToWords = new NumberToWords();
    $numberTransformer = $numberToWords->getNumberTransformer('en');
?>
<?php $__currentLoopData = $billdetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$billdetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php
    $sub_total += ($billdetail->qty ?? 0)*($billdetail->per_qty_cost ?? ''); 
?>
<tr>
  <td class="upper_case " style="text-align: left;margin-left: 0%;padding-left: 0%">
     <?php echo e($billdetail->chadetails->challan_no); ?> | <?php echo e(\Carbon\Carbon::parse($bill->challan->shipping_date)->format('d M Y')); ?> <br>
      <?php echo e($billdetail->chadetails->item_details ?? ''); ?>

  </td>
    <td class="upper_case " style="text-align: center"><?php echo e($billdetail->per_qty_cost ?? ''); ?></td>
    <td class="upper_case  text_center"><?php echo e($billdetail->qty ?? 0); ?></td>
    <td class="upper_case  text_right"><?php echo e(number_format((float)($billdetail->qty ?? 0)*($billdetail->per_qty_cost ?? ''),2,'.','')); ?></td>
</tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <tfoot>
  	<tr>
      <td class=""></td>
      <td class=""></td>
      <td class="upper_case product_tr_th_td text_right product_tr_paddding">Sub Total</td>
  		<th class="upper_case product_tr_th_td text_right product_tr_paddding" ><?php echo e(number_format((float)($sub_total ?? 0),2,'.','')); ?></th>
  	</tr>
    <tr>
      <td class=""></td>
      <td class=""></td>
      <td class="upper_case  text_right product_tr_paddding">Vat @ <?php echo e($bill->vat ?? 0); ?> %</td>
  		<th class="upper_case  text_right product_tr_paddding" ><?php echo e($bill->vat_tk ?? 0); ?></th>
  	</tr>
    <tr>
      <td class=""></td>
      <td class=""></td>
      <td class="upper_case  text_right product_tr_paddding">AIT @ <?php echo e($bill->ait ?? 0); ?> %</td>
  		<th class="upper_case text_right product_tr_paddding" ><?php echo e($bill->ait_tk ?? 0); ?></th>
  	</tr>
    <tr>
      <td class=""></td>
      <td class=""></td>
      <td class="upper_case  text_right product_tr_paddding">Duty @ <?php echo e($bill->duty ?? 0); ?> %</td>
  		<th class="upper_case  text_right product_tr_paddding" ><?php echo e($bill->duty_tk ?? 0); ?></th>
  	</tr>
    <tr>
      <td class=""></td>
      <td class=""></td>
      <td class="upper_case product_tr_th_td  product_tr_paddding text_right">Charge @ <?php echo e($bill->charge ?? 0); ?>%</td>
  		<th class="upper_case product_tr_th_td product_tr_paddding  text_right" ><?php echo e($bill->charge_tk ?? 0); ?></th>
  	</tr>
    <tr>
      <td class=""></td>
      <td class=""></td>
      <th class="upper_case   text_right product_tr_paddding">Grand Total </th>
    
  		<th class="upper_case   text_right product_tr_paddding" ><?php echo e($bill->payable_amount ?? 0); ?></th>
  	</tr>

    
  </tfoot>
</table>
<?php
    $total = (ucfirst($numberTransformer->toWords($bill->payable_amount ?? 0)))
   
?>

  <div class="" style="">
    <?php echo '<img style="margin-top:15px;width:50%;margin-left:22.5%;height:50px" src="data:image/png;base64,' . DNS1D::getBarcodePNG($total, 'C128') . '" width="300" alt="barcode"   />';?>

    <?php 
    // echo '<img style="margin-top:10px;" src="data:image/png;base64,' . DNS2D::getBarcodePNG($total, 'QRCODE') . '" alt="barcode"   />';
    
    ?>  
  </div>
<div class="clearfix">

  <div class="box" style="text-align: left;margin-right: 40px">
    <br><br><br><br>
    <br><br>
    <br>
    <br>
   
    
    <p class="upper_case"><strong>Created By<br> Executive, Admin</strong></p>
  </div>
  <div class="box" style="text-align: left;margin-right: 40px">
    <br><br><br><br>
    <br><br>
    <br>
    <br>
   
    
    <p class="upper_case"><strong>Created By<br> Department Incharge</strong></p>
  </div>
  <div class="box" style="text-align: left;margin-right: 40px">
    <br><br><br><br>
    <br><br>
    <br>
    <br>
   
    
    <p class="upper_case"><strong>Authorized By<br> Director</strong></p>
  </div>


  <div class="box" style="background-color:#FFF;text-align:right;margin-left: 40px;">
    <br><br><br><br>
    <br><br>
    <br>
    <br>
  
    <p class="upper_case"><strong>Received By</strong></p>
  
  </div>


</div>
<div class="sealbox" style="">
  <br><br><br><br>

  <p class="upper_case"><strong>Official Seal</strong></p>

</div>



</body>

</html><?php /**PATH /home/acquqkkb/public_html/dawlatbd/resources/views/billinfo/bill_pdf_invoice.blade.php ENDPATH**/ ?>