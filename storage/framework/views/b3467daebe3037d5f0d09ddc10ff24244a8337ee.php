<style type="text/css">
        @media  print{
            #p {
                display: none;
            }
        }
</style>

<style type="text/css">
    table {
            border-collapse: collapse;
          }
    .title {text-align: center;}
    .report{text-align: center; color: black; height: 3%; padding: 10px; font-weight: bold;
            text-decoration: underline; font-family: Arial, Helvetica, sans-serif;}
    .a{text-align: center; color: black; font-family: Arial, Helvetica, sans-serif;}
    .year{text-align: center; color: black;}
    .b{text-align: center; background-color: #FFF8DC;}
    .c{text-align: center; background-color: #FFFAF0; font-weight: bold;}


    p {text-align: right;}
    .date {text-align: center;
             padding: 0px 0px 0px 0px;}
    /*.x{ display: inline-block; font-size: small; }*/

    /*.image{
          margin: auto;
          width: 10%;
          padding: 25px 0px 20px 450px;
    }*/
</style>

               <?php if($setting->logo_position > 0): ?>
					<style type="text/css">
						.image{
						  margin: auto;
						  width: 10%;
						  /*height: 1%;*/
						  padding: 0px 0px 0px 0px;
							text-align: center;}
					</style>
				<?php else: ?>
					<style type="text/css">
						.image{
						  margin: auto;
						  width: 10%;
						  /*height: 1%;*/
						  padding: 0px 700px 0px 100px;
						  text-align: center;
					</style>
				<?php endif; ?>

                <?php if($setting->text_font == 0): ?>
                <style type="text/css">
                    .x{ display: inline-block; font-size: small; }
                </style>
                <?php elseif($setting->text_font == 1): ?>
                <style type="text/css">
                    .x{ display: inline-block; font-size: medium; }
                </style>
                <?php else: ?>
                <style type="text/css">
                    .x{ display: inline-block; font-size: large; }
                </style>
                <?php endif; ?>


                <!-- TEXT FORNT -->
				<?php if($setting->text_format == 0): ?>
				<style type="text/css">
					.x{ font-family: Arial, Helvetica, sans-serif; }
					.a{text-align: center; color: black; font-family: Arial, Helvetica, sans-serif;}
					.report{text-align: center; color: black; height: 3%; padding: 10px; font-weight: bold; text-decoration: underline; font-family: Arial, Helvetica, sans-serif;}
				</style>
				<?php elseif($setting->text_format == 1): ?>
				<style type="text/css">
					.x{ font-family: "Times New Roman", Times, serif; }
					.a{text-align: center; color: black; font-family: "Times New Roman", Times, serif;}
					.report{text-align: center; color: black; height: 3%; padding: 10px; font-weight: bold; text-decoration: underline; font-family: "Times New Roman", Times, serif;}
				</style>
				<?php else: ?>
				<style type="text/css">
					.x{ font-family: "Lucida Console", "Courier New", monospace; }
					.a{text-align: center; color: black; font-family: "Lucida Console", "Courier New", monospace;}
					.report{text-align: center; color: black; height: 3%; padding: 10px; font-weight: bold; text-decoration: underline; font-family: "Lucida Console", "Courier New", monospace;}
				</style>
				<?php endif; ?>

<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css'>
					<input type="button" id="p" value="print" onclick="printPage();" class="btn btn-label-success btn-sm btn-upper">

                    <div align="center" class="x">
                        <img src="http://localhost/salepropos/public/<?php echo e($setting->site_logo); ?>" class="image" /><br><br>
                        <h1 class="title" style="margin: 12px;"><?php echo e($setting->company_name); ?></h1>
                        <p class="title" style="margin: -10px;"><?php echo e($setting->address); ?></p>
                        <p class="title"><strong>Phone:</strong> <?php echo e($setting->phone); ?>  <strong> Email:</strong> <?php echo e($setting->email); ?></p>  
                        <p class="date"><strong>Date:</strong> <?php echo e($date); ?></p>
                    </div>
                    <p class="report">Summary Report</p>

<div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 padding">
     <div class="card">
        
         <!-- purchase -->
         <div class="card-body">
            <h3 class="mb-0" align="center">Purchases</h3>
             <div class="table-responsive-sm">
                 <table class="table table-striped" width="100%" border="1px" style="text-align: center;">
                     <thead >
                         <tr>
                             
                             <th>Amount</th>
                             <th>Purchase</th>
                             <th class="right">Paid</th>
                             <th class="center">Tax</th>
                             
                         </tr>
                     </thead>
                     <tbody>
                         <tr>
                             
                             <td class="left strong"><?php echo e(number_format((float)$purchase[0]->grand_total, 2, '.', '')); ?></td>
                             <td class="left"><?php echo e($total_purchase); ?></td>
                             <td class="right"><?php echo e(number_format((float)$purchase[0]->paid_amount, 2, '.', '')); ?></td>
                             <td class="center"><?php echo e(number_format((float)$purchase[0]->tax, 2, '.', '')); ?></td>
                            
                         </tr>
                        
                        
                         
                     </tbody>
                 </table>
                 <br>
                
             </div>
             
         </div>

         <!-- sale -->
         <div class="card-body">
            <h3 class="mb-0" align="center">Sale</h3>
             <div class="table-responsive-sm">
                 <table class="table table-striped" width="100%" border="1px" style="text-align: center;">
                     <thead>
                         <tr>
                             
                             <th>Amount</th>
                             <th>Sale</th>
                             <th class="right">Paid</th>
                             <th class="center">Tax</th>
                             
                         </tr>
                     </thead>
                     <tbody>
                         <tr>
                             
                             <td class="left strong"><?php echo e(number_format((float)$sale[0]->grand_total, 2, '.', '')); ?></td>
                             <td class="left"><?php echo e($total_sale); ?></td>
                             <td class="right"><?php echo e(number_format((float)$sale[0]->paid_amount, 2, '.', '')); ?></td>
                             <td class="center"><?php echo e(number_format((float)$sale[0]->tax, 2, '.', '')); ?></td>
                            
                         </tr>
                        
                        
                         
                     </tbody>
                 </table>
                 <br>
                
             </div>
             
         </div>

          <!-- sale Return -->
         <div class="card-body">
            <h3 class="mb-0" align="center">Sale Return</h3>
             <div class="table-responsive-sm">
                 <table class="table table-striped" width="100%" border="1px" style="text-align: center;">
                     <thead>
                         <tr>
                             
                             <th>Amount</th>
                             <th>Return</th>
                   
                             <th class="center">Tax</th>
                             
                         </tr>
                     </thead>
                     <tbody>
                         <tr>
                             
                             <td class="left strong"><?php echo e(number_format((float)$return[0]->grand_total, 2, '.', '')); ?></td>
                             <td class="left"><?php echo e($total_return); ?></td>
                           
                             <td class="center"><?php echo e(number_format((float)$return[0]->tax, 2, '.', '')); ?></td>
                            
                         </tr>
                        
                        
                         
                     </tbody>
                 </table>
                 <br>
                
             </div>
             
         </div>
         <!-- sale return end -->

          <!-- Purchase Return -->
         <div class="card-body">
            <h3 class="mb-0" align="center">Purchase Return</h3>
             <div class="table-responsive-sm">
                 <table class="table table-striped" width="100%" border="1px" style="text-align: center;">
                     <thead>
                         <tr>
                             
                             <th>Amount</th>
                             <th>Return</th>
                   
                             <th class="center">Tax</th>
                             
                         </tr>
                     </thead>
                     <tbody>
                         <tr>
                             
                             <td class="left strong"><?php echo e(number_format((float)$purchase_return[0]->grand_total, 2, '.', '')); ?></td>
                             <td class="left"><?php echo e($total_purchase_return); ?></td>
                           
                             <td class="center"><?php echo e(number_format((float)$purchase_return[0]->tax, 2, '.', '')); ?></td>
                            
                         </tr>
                        
                        
                         
                     </tbody>
                 </table>
                 <br>
                
             </div>
             
         </div>
         <!-- Purchase return end -->

         <!-- Profit/loss -->
         <div class="card-body">
            <h3 class="mb-0" align="center">Profit/Loss</h3>
             <div class="table-responsive-sm">
                 <table class="table table-striped" width="100%" border="1px" style="text-align: center;">
                     <thead>
                         <tr>
                             
                             <th>Sale</th>
                             <th>Purchase</th>
                   
                             <th class="center">Profit</th>
                             
                         </tr>
                     </thead>
                     <tbody>
                         <tr>
                             
                             <td class="left strong"><?php echo e(number_format((float)$sale[0]->grand_total, 2, '.', '')); ?></td>
                             <td class="left"><?php echo e(number_format((float)$purchase[0]->grand_total, 2, '.', '')); ?></td>
                           
                             <td class="center"><?php echo e(number_format((float)$purchase_return[0]->tax, 2, '.', '')); ?></td>
                            
                         </tr>
                        
                        
                         
                     </tbody>
                 </table>
                 <br>
                
             </div>
             
         </div>
         <!-- Profit/loss end -->

          <!-- Profit/loss -->
         <div class="card-body">
            <h3 class="mb-0" align="center">Profit/Loss</h3>
             <div class="table-responsive-sm">
                 <table class="table table-striped" width="100%" border="1px" style="text-align: center;">
                     <thead>
                         <tr>
                             
                             <th>Sale</th>
                             <th>Purchase</th>
                             <th>Sale Return</th>
                             <th>Purchase Return</th>
                   
                             <th class="center">Profit</th>
                             
                         </tr>
                     </thead>
                     <tbody>
                         <tr>
                             
                             <td class="left strong"><?php echo e(number_format((float)$sale[0]->grand_total, 2, '.', '')); ?></td>
                             <td class="left"><?php echo e(number_format((float)$purchase[0]->grand_total, 2, '.', '')); ?></td>
                           
                             <td class="center"><?php echo e(number_format((float)$return[0]->grand_total, 2, '.', '')); ?></td>
                             <td class="center"><?php echo e(number_format((float)$purchase_return[0]->grand_total, 2, '.', '')); ?></td>
                             <td class="center"><?php echo e(number_format((float)($sale[0]->grand_total - $purchase[0]->grand_total - $return[0]->grand_total + $purchase_return[0]->grand_total), 2, '.', '')); ?></td>
                            
                         </tr>
                        
                        
                         
                     </tbody>
                 </table>
                 <br>
                
             </div>
             
         </div>
         <!-- Profit/loss end -->

<br>
<br>
<br>
<br>
<br>
<br>
         <!-- Net Profit/ Net loss -->
         <div class="card-body">
            <h3 class="mb-0" align="center">Net Profit/ Net loss</h3>
             <div class="table-responsive-sm">
                 <h4><?php echo e(number_format((float)(($sale[0]->grand_total-$sale[0]->tax) - ($purchase[0]->grand_total-$purchase[0]->tax) - ($return[0]->grand_total-$return[0]->tax) + ($purchase_return[0]->grand_total-$purchase_return[0]->tax)), 2, '.', '')); ?></h4>

                 <p>(<?php echo e(trans('file.Sale')); ?> <?php echo e(number_format((float)($sale[0]->grand_total), 2, '.', '')); ?> - <?php echo e(trans('file.Tax')); ?> <?php echo e(number_format((float)($sale[0]->tax), 2, '.', '')); ?>) - (<?php echo e(trans('file.Purchase')); ?> <?php echo e(number_format((float)($purchase[0]->grand_total), 2, '.', '')); ?> - <?php echo e(trans('file.Tax')); ?> <?php echo e(number_format((float)($purchase[0]->tax), 2, '.', '')); ?>) - (<?php echo e(trans('file.Return')); ?> <?php echo e(number_format((float)($return[0]->grand_total), 2, '.', '')); ?> - <?php echo e(trans('file.Tax')); ?> <?php echo e(number_format((float)($return[0]->tax), 2, '.', '')); ?>) + (<?php echo e(trans('file.Purchase Return')); ?> <?php echo e(number_format((float)($purchase_return[0]->grand_total), 2, '.', '')); ?> - <?php echo e(trans('file.Tax')); ?> <?php echo e(number_format((float)($purchase_return[0]->tax), 2, '.', '')); ?>)</p>
                
             </div>
             
         </div>
         <!-- Net Profit/ Net loss end -->

          <!-- Payment received -->
         <div class="card-body">
            <h3 class="mb-0" align="center">Payment Received</h3>
             <div class="table-responsive-sm">
                 <table class="table table-striped" width="100%" border="1px" style="text-align: center;">
                     <thead>
                         <tr>
                             
                             <th>Amount</th>
                             <th>Received</th>
                             <th>Cash</th>
                             <th>Cheque</th>
                             <th>Credit Card</th>
                             <th>Gift Card</th>
                             <th>Paypal</th>
                             <th>Deposit</th>
                   
                             
                         </tr>
                     </thead>
                     <tbody>
                         <tr>
                             
                             <td class="left strong"><?php echo e(number_format((float)$payment_recieved, 2, '.', '')); ?></td>
                             <td class="left"><?php echo e($payment_recieved_number); ?></td>
                           
                             <td class="center"><?php echo e(number_format((float)$cash_payment_sale, 2, '.', '')); ?></td>
                             <td class="center"><?php echo e(number_format((float)$cheque_payment_sale, 2, '.', '')); ?></td>
                             <td class="center"><?php echo e(number_format((float)$credit_card_payment_sale, 2, '.', '')); ?></td>
                             <td class="center"><?php echo e(number_format((float)$gift_card_payment_sale, 2, '.', '')); ?></td>
                             <td class="center"><?php echo e(number_format((float)$paypal_payment_sale, 2, '.', '')); ?></td>
                             <td class="center"><?php echo e(number_format((float)$deposit_payment_sale, 2, '.', '')); ?></td>
                            
                         </tr>
                        
                        
                         
                     </tbody>
                 </table>
                 <br>
                
             </div>
             
         </div>
         <!-- Payment Recieved end -->

           <!-- Payment Sent -->
         <div class="card-body">
            <h3 class="mb-0" align="center">Payment Sent</h3>
             <div class="table-responsive-sm">
                 <table class="table table-striped" width="100%" border="1px" style="text-align: center;">
                     <thead>
                         <tr>
                             
                             <th>Amount</th>
                             <th>Received</th>
                             <th>Cash</th>
                             <th>Cheque</th>
                             <th>Credit Card</th>
                             
                   
                             
                         </tr>
                     </thead>
                     <tbody>
                         <tr>
                             
                             <td class="left strong"><?php echo e(number_format((float)$payment_sent, 2, '.', '')); ?></td>
                             <td class="left"><?php echo e($payment_sent_number); ?></td>
                           
                             <td class="center"><?php echo e(number_format((float)$cash_payment_purchase, 2, '.', '')); ?></td>
                             <td class="center"><?php echo e(number_format((float)$cheque_payment_purchase, 2, '.', '')); ?></td>
                             <td class="center"><?php echo e(number_format((float)$credit_card_payment_purchase, 2, '.', '')); ?></td>
                            
                            
                         </tr>
                        
                        
                         
                     </tbody>
                 </table>
                 <br>
                
             </div>
             
         </div>
         <!-- Payment Sent end -->

            <!-- Expense -->
         <div class="card-body">
            <h3 class="mb-0" align="center">Expense</h3>
             <div class="table-responsive-sm">
                 <table class="table table-striped" width="100%" border="1px" style="text-align: center;">
                     <thead>
                         <tr>
                             
                             <th>Amount</th>
                             <th>Expense</th>
      
                         </tr>
                     </thead>
                     <tbody>
                         <tr>
                             
                             <td class="left strong"><?php echo e(number_format((float)$expense, 2, '.', '')); ?></td>
                             <td class="left"><?php echo e($total_expense); ?></td>
    
                         </tr>
      
                     </tbody>
                 </table>
                 <br>
                
             </div>
             
         </div>
         <!-- Expense end -->

            <!-- Payroll -->
         <div class="card-body">
            <h3 class="mb-0" align="center">Payroll</h3>
             <div class="table-responsive-sm">
                 <table class="table table-striped" width="100%" border="1px" style="text-align: center;">
                     <thead>
                         <tr>
                             
                             <th>Amount</th>
                             <th>Payroll</th>
      
                         </tr>
                     </thead>
                     <tbody>
                         <tr>
                             
                             <td class="left strong"><?php echo e(number_format((float)$payroll, 2, '.', '')); ?></td>
                             <td class="left"><?php echo e($total_payroll); ?></td>
    
                         </tr>
      
                     </tbody>
                 </table>
                 <br>
                
             </div>
             
         </div>
         <!-- Payroll end -->

      <!-- Cash in Hand-->
         <div class="card-body">
            <h3 class="mb-0" align="center">Cash in Hand</h3>
             <div class="table-responsive-sm">
                 <table class="table table-striped" width="100%" border="1px" style="text-align: center;">
                     <thead>
                         <tr>
                             
                             <th>Received</th>
                             <th>Sent</th>
                             <th>Sale Return</th>
                             <th>Purchase Return</th>
                             <th>Expense</th>
                             <th>Payroll</th>
                             <th>In Hand</th>
      
                         </tr>
                     </thead>
                     <tbody>
                         <tr>
                             
                             <td class="left strong"><?php echo e(number_format((float)($payment_recieved), 2, '.', '')); ?></td>
                             <td class="left"><?php echo e(number_format((float)($payment_sent), 2, '.', '')); ?></td>
                             <td class="left"><?php echo e(number_format((float)$return[0]->grand_total, 2, '.', '')); ?></td>
                             <td class="left"><?php echo e(number_format((float)$purchase_return[0]->grand_total, 2, '.', '')); ?></td>
                             <td class="left"><?php echo e(number_format((float)$expense, 2, '.', '')); ?></td>
                             <td class="left"><?php echo e(number_format((float)$payroll, 2, '.', '')); ?></td>
                             <td class="left"><?php echo e(number_format((float)($payment_recieved - $payment_sent - $return[0]->grand_total + $purchase_return[0]->grand_total - $expense - $payroll), 2, '.', '')); ?></td>
    
                         </tr>
      
                     </tbody>
                 </table>
                 <br>
                
             </div>
             
         </div>
         <!-- Cash in Hand end -->
<br>
<br>
<br>
<br>
         <!-- Warehouse-->
         <?php $__currentLoopData = $warehouse_name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <div class="card-body">
            <h3 class="mb-0" align="center"><?php echo e($name); ?></h3>
             <div class="table-responsive-sm">
                 
                 <h4 class="text-center mt-3"><?php echo e(number_format((float)($warehouse_sale[$key][0]->grand_total - $warehouse_purchase[$key][0]->grand_total - $warehouse_return[$key][0]->grand_total + $warehouse_purchase_return[$key][0]->grand_total), 2, '.', '')); ?></h4>
						<p class="text-center">
							<?php echo e(trans('file.Sale')); ?> <?php echo e(number_format((float)($warehouse_sale[$key][0]->grand_total), 2, '.', '')); ?> - <?php echo e(trans('file.Purchase')); ?> <?php echo e(number_format((float)($warehouse_purchase[$key][0]->grand_total), 2, '.', '')); ?> - <?php echo e(trans('file.Sale Return')); ?> <?php echo e(number_format((float)($warehouse_return[$key][0]->grand_total), 2, '.', '')); ?> + <?php echo e(trans('file.Purchase Return')); ?> <?php echo e(number_format((float)($warehouse_purchase_return[$key][0]->grand_total), 2, '.', '')); ?>

						</p>

				<h4 class="text-center"><?php echo e(number_format((float)(($warehouse_sale[$key][0]->grand_total - $warehouse_sale[$key][0]->tax) - ($warehouse_purchase[$key][0]->grand_total - $warehouse_purchase[$key][0]->tax) - ($warehouse_return[$key][0]->grand_total - $warehouse_return[$key][0]->tax) + ($warehouse_purchase_return[$key][0]->grand_total - $warehouse_purchase_return[$key][0]->tax) ), 2, '.', '')); ?></h4>
						<p class="text-center">
							 <?php echo e(trans('file.Net Sale')); ?> <?php echo e(number_format((float)($warehouse_sale[$key][0]->grand_total - $warehouse_sale[$key][0]->tax), 2, '.', '')); ?> -  <?php echo e(trans('file.Net Purchase')); ?> <?php echo e(number_format((float)($warehouse_purchase[$key][0]->grand_total - $warehouse_purchase[$key][0]->tax), 2, '.', '')); ?> - <?php echo e(trans('file.Net Sale Return')); ?> <?php echo e(number_format((float)($warehouse_return[$key][0]->grand_total - $warehouse_return[$key][0]->tax), 2, '.', '')); ?> + <?php echo e(trans('file.Net Purchase Return')); ?> <?php echo e(number_format((float)($warehouse_purchase_return[$key][0]->grand_total - $warehouse_purchase_return[$key][0]->tax), 2, '.', '')); ?>

						</p>
				<h4 class="text-center"><?php echo e(number_format((float)$warehouse_expense[$key], 2, '.', '')); ?></h4>
						<p class="text-center"><?php echo e(trans('file.Expense')); ?></p>
                
             </div>
             
         </div>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         <!-- Warehouse end -->
        
     </div>
 </div>
<br>
<p>Developed By <?php echo e($setting->developed_by); ?></p>


 <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js'></script>
 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
 <script type="text/javascript">
        function printPage() {
            window.print();
        }
</script><?php /**PATH C:\xampp\htdocs\salepropos\resources\views/print/summary_report_print.blade.php ENDPATH**/ ?>