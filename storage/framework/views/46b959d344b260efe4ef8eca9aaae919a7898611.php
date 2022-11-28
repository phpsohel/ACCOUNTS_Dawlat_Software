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
	.a{text-align: center;  color: black; font-family: Arial, Helvetica, sans-serif;}
	.year{text-align: center; background-color: grey; color: white;}
	.b{text-align: center; background-color: #FFF8DC;}
	.c{text-align: center; background-color: #FFFAF0; font-weight: bold;}
	.grand_total{
		font-weight: bold;
	}

	p {text-align: right;}
	.date {text-align: center;
			 padding: 0px 0px 0px 0px;}
	/*.x{ display: inline-block;  font-size: small;}*/

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


				<input type="button" id="p" value="print" onclick="printPage();" class="btn btn-label-success btn-sm btn-upper">

					<div align="center" class="x">
						<img src="http://localhost/salepropos/public/<?php echo e($setting->site_logo); ?>" class="image" /><br><br>
						<h1 class="title" style="margin: 12px;"><?php echo e($setting->company_name); ?></h1>
						<p class="title" style="margin: -10px;"><?php echo e($setting->address); ?></p>
						<p class="title"><strong>Phone:</strong> <?php echo e($setting->phone); ?>  <strong> Email:</strong> <?php echo e($setting->email); ?></p>	
						<p class="date"><strong>Date:</strong> <?php echo e($date); ?></p>
					</div>
					<p class="report">Monthly Sales Report</p>


<table class="table table-bordered" style="border-top: 1px solid #dee2e6; border-bottom: 1px solid #dee2e6; border: 1px solid black;" border="1px" width="100%">
						<thead>
							<tr>
								
						    	<th colspan="14" class="text-center"><?php echo e($year); ?></th>
						    	
						    </tr>
						</thead>
					    <tbody>
						    <tr>
						      <td class="a"><strong></strong></td>
						      <td class="a"><strong>January</strong></td>
						      <td class="a"><strong>February</strong></td>
						      <td class="a"><strong>March</strong></td>
						      <td class="a"><strong>April</strong></td>
						      <td class="a"><strong>May</strong></td>
						      <td class="a"><strong>June</strong></td>
						      <td class="a"><strong>July</strong></td>
						      <td class="a"><strong>August</strong></td>
						      <td class="a"><strong>September</strong></td>
						      <td class="a"><strong>October</strong></td>
						      <td class="a"><strong>November</strong></td>
						      <td class="a"><strong>December</strong></td>
						      
						      
						    </tr>
						    <tr>	
						        <td class="a">
						        	<strong>Product Discount</strong>						       
						        </td>
						        <?php ($sum=0); ?>
						        <?php $__currentLoopData = $total_discount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $discount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						        <?php if($discount > 0): ?>
						        <td>
						        <?php echo e($discount); ?>

						    	</td>
						    	<?php endif; ?>
						    	<?php if($discount <= 0): ?>
						    	<td></td>
						    	<?php endif; ?>
						    	
						        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
						            
						    </tr>
						     <tr>						    	
						        <td class="a">						        	
						        	<strong>Order Discount</strong>						        	
						        </td>
						         <?php ($sum=0); ?>
						         <?php $__currentLoopData = $total_discount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $discount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						         <?php if($order_discount[$key] > 0): ?>
						        	<td><?php echo e($order_discount[$key]); ?></td>
						         <?php endif; ?>
						         <?php if($order_discount[$key] <= 0): ?>
						        	<td></td>
						         <?php endif; ?>
						        
						         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
						         
						    </tr>
						     <tr>						    	
						        <td class="a">						        	
						        	<strong>Product Tax</strong>						        	
						        </td>
						        <?php ($sum=0); ?>
						        <?php $__currentLoopData = $total_discount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $discount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						        <?php if($total_tax[$key] > 0): ?>
						        	<td><?php echo e($total_tax[$key]); ?></td>
						        <?php endif; ?>
						        <?php if($total_tax[$key] <= 0): ?>
						        	<td></td>
						        <?php endif; ?>
						        
						        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
						        			        
						    </tr>
						     <tr>						    	
						        <td class="a">						        	
						        	<strong>Order Tax</strong>						        	
						        </td>
						        <?php ($sum=0); ?>
						        <?php $__currentLoopData = $total_discount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $discount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						        <?php if($order_tax[$key] > 0): ?>
						        	<td><?php echo e($order_tax[$key]); ?></td>
						        <?php endif; ?>
						        <?php if($order_tax[$key] <= 0): ?>
						        	<td></td>
						        <?php endif; ?>
						         
						        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						         
						        
						    </tr>
						     <tr>						    	
						        <td class="a">						        	
						        	<strong>Shipping Cost</strong>						        	
						        </td>
						        <?php ($sum=0); ?>
						        <?php $__currentLoopData = $total_discount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $discount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						        <?php if($shipping_cost[$key] > 0): ?>
						        	<td><?php echo e($shipping_cost[$key]); ?></td>
						        <?php endif; ?>
						        <?php if($shipping_cost[$key] <= 0): ?>
						        	<td></td>
						        <?php endif; ?>
						          
						        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						         
						    </tr>
						     <tr>						    	
						        <td class="a">					        	
						        	<strong>Grand total</strong>	
						        </td>
						        <?php ($sum=0); ?>
						       	<?php $__currentLoopData = $total_discount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $discount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						       	<?php if($total[$key] > 0): ?>
						        	<td class="grand_total"><?php echo e($total[$key]); ?></td>
						        <?php endif; ?>
						        <?php if($total[$key] <= 0): ?>
						        	<td></td>
						        <?php endif; ?>
						         
						        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
						         				        
						    </tr>
	  
					    </tbody>
					</table>
<br>
<br>
<br>
<br>
<p>Developed By <?php echo e($setting->developed_by); ?></p>

<script type="text/javascript">
        function printPage() {
            window.print();
        }
</script><?php /**PATH C:\xampp\htdocs\salepropos\resources\views/print/monthly_sale_print.blade.php ENDPATH**/ ?>