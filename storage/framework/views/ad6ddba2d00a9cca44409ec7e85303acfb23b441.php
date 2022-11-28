<!DOCTYPE html>
<html>
<head>
    <title>Challan Report</title>
<style>
body{
    font-family: sans-serif;
}
.shipping_table{
 
  border-collapse;
  
  
}


.shipping_tr_th_td {
  border-bottom: 1px solid rgb(20, 3, 76);

  
}


.product_table {
 
  width: 100%;
  border-collapse:collapse;
  border-top: 1px solid rgb(7, 4, 92);

}

.product_tr_th_td {
 
  border-bottom: 1px solid rgb(20, 3, 76);
  padding-top: 10px;
  padding-bottom: 10px;
  margin: ;
 
  /* border-color: rgb(20, 24, 20); */
  /* padding: 8px; */
}








</style>
</head>
<body>
<div style="text-align: center;">
  <?php if(!empty($challan->biller->image)): ?>
  <img src="<?php echo e(url('public/images/biller',$challan->biller->image)); ?>" style="width: 70px;height:50px;padding:0%;margin:0%;">
  <?php else: ?>
 <img src="<?php echo e(asset('public/logo/tradeco.png')); ?>" style="width: 70px;height:50px;padding:0%;margin:0%;">
 <?php endif; ?>

 <br>
 <strong><?php echo e($challan->challan_no ?? ''); ?></strong>
<div class="upper_case"><?php echo e($challan->biller->name ?? ''); ?>.</div>
</div>
<style>
* {
  box-sizing: border-box;
}

.box {
  float: left;
  width: 30%;


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
.upper_case{
    text-transform: uppercase;
    font-size: 10px;
}
</style>


<div class="clearfix">
  <div class="box1" style="background-color:#FFF">

    <div class="upper_case">Forwarded</div>
    <div class="upper_case" style="font-weight: bold"><?php echo e($challan->customer->company_name  ?? ''); ?></div>
    <div class="upper_case">Brand - <?php echo e($challan->customer->brand_name ?? ''); ?></div>
    <div class="upper_case"><?php echo e($challan->customer->address  ?? ''); ?></div>
    <br class="">
    <div class="upper_case">Contact Person - <?php echo e($challan->customer->name ?? ''); ?></div>
    <div class="upper_case">Contact Number - <?php echo e($challan->customer->phone_number ?? ''); ?></div>
    <div class="upper_case">Delivery Place - <?php echo e($challan->delivery_place ?? ''); ?></div>

  </div>
  <div class="box1" style=""></div>
  <div class="box1" style="">
    <div class="row" >
      <div class="upper_case" style="">
          <table class="shipping_table" style="width:100%;margin-left:15px;">
            <tr class="">
              <td class="" colspan="2" style="text-align: center;background-color: black;color:white;padding: 3px 0 3px 0">Shipping Challan</td>
            </tr>
            <tr class="">
              <td class="shipping_tr_th_td">Client Code</td>
              <td class="shipping_tr_th_td"><?php echo e($challan->customer->customer_code  ?? ''); ?></td>
            </tr>
            <tr class="">
              <td class="shipping_tr_th_td"> Enlisted</td>
              <td class="shipping_tr_th_td">
                <?php echo e(\Carbon\Carbon::parse($challan->created_at)->format('d M Y')); ?>

              </td>
            </tr>
            <tr class="">
              <td class="shipping_tr_th_td">Shipping Date</td>
              <td class="shipping_tr_th_td">
                <?php echo e(\Carbon\Carbon::parse($challan->shipping_date)->format('d M Y')); ?>

              </td>
            </tr>
            <tr class="">
              <td class="shipping_tr_th_td">Shipping Item</td>
              <td class="shipping_tr_th_td"><?php echo e($challan->shipping_item   ?? ''); ?></td>
            </tr>
            <tr class="">
              <td class="shipping_tr_th_td">Sales Person</td>
              <td class="shipping_tr_th_td"><?php echo e($challan->sales_person   ?? ''); ?></td>
            </tr>
            <tr class="">
              <td class="shipping_tr_th_td">Delivery Person</td>
              <td class="shipping_tr_th_td"><?php echo e($challan->delivery_person   ?? ''); ?></td>
            </tr>
          </table>
      </div>

    </div>
  </div>
</div>
<br>
<table class="product_table">
    <tr style=""> 
        <th class="upper_case product_tr_th_td" style="text-align: center">PO <br> Number</th>
        <th class="upper_case product_tr_th_td" style="text-align: center">Description<br> (Product Details)</th>
        <th class="upper_case product_tr_th_td text_center">Unit <br> ( Single Count)</th>
       
    </tr>



    <?php
    $total_qty = 0;
?>
<?php $__currentLoopData = $challandetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$challandetails): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php
    $total_qty += $challandetails->qty ?? ''; 
?>
<tr>
   
    <td class="upper_case product_tr_th_td" style="text-align: center"><?php echo e($challandetails->po_number ?? ''); ?></td>
    <td class="upper_case product_tr_th_td" style="text-align: left;">
      <div class=""><?php echo $challandetails->item_details ?? ''; ?></div>
    </td>
  
    <td class="upper_case product_tr_th_td text_center"><?php echo e($challandetails->qty ?? '-'); ?></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <tfoot>
  	<tr>
      <td class=""></td>
      <td class=""></td>
  	
  		<th class="upper_case product_tr_th_td text_center" style="border-bottom: 1px solid black"><?php echo e($total_qty ?? '0'); ?></th>
     
  	</tr>
     
  </tfoot>
</table>

<div class="clearfix">

  <div class="box" style=";text-align: left;margin-right: 40px">
    <br><br><br><br>
    <br><br>
   
   
   
    <span class="upper_case" style="padding:0%;margin:0%"><?php echo e($challan->delivery_person ?? ''); ?></span>
    <p class="upper_case" style="text-decoration: overline">Shipped By </p>
  </div>
  <div class=" box" style="background-color:;text-align:center;margin-inline: 4px">
   
   
    <?php
      
     $total_data  =$challan->biller->name.' , '.$challan->biller->address.' , '.$challan->biller->phone_number.' ,'.$challan->biller->email;

    ?>
   
    <br>
    <br>
  
  
    <?php echo '<img style="margin-top:10px; width:90px" src="data:image/png;base64,' . DNS2D::getBarcodePNG($total_data, 'QRCODE') . '" alt="barcode"   />';?><br>
    <span class="upper_case" style="font-size: 10px;"><?php echo e($challan->biller->website_link ?? ''); ?></span> 
    </div>
  <div class="box" style="background-color:;text-align:right;margin-left: 40px;">
    <br><br><br><br>
    <br><br>
  
  
    <p class="upper_case">Sign , Seal & Date <br> By Receiver</p>
  
  </div>
</div>



</body>

</html><?php /**PATH C:\laragon\www\dawlatbd\resources\views/challaninfo/challan_pdf_report.blade.php ENDPATH**/ ?>