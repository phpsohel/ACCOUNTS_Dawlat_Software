
<style type="text/css">
	table {
       		border-collapse: collapse;
		  }
	.title {text-align: center; }
	/*.report{text-align: center; color: black; height: 3%; padding: 10px; font-weight: bold;
			text-decoration: underline; font-family: Arial, Helvetica, sans-serif;}*/
	/*.a{text-align: center; color: black; font-family: Arial, Helvetica, sans-serif;}*/
	.year{text-align: center; color: black;}
	.b{text-align: center; background-color: #FFF8DC;}
	.c{text-align: center; background-color: #FFFAF0; font-weight: bold;}


	p {text-align: right;}
	.date {text-align: center;
			 padding: 0px 0px 0px 0px;}
	.grand_total{
		font-weight: bold;
	}
	/*.x{ display: inline-block; font-size: small; }*/

	/*.image{
		  margin: auto;
		  width: 10%;
		  padding: 25px 0px 20px 450px;
	}*/
</style>			
				<!-- IMAGE POSITION -->
				<?php if($setting->logo_position > 0): ?>
					<style type="text/css">
						.image{
						  margin: auto;
						  width: 10%;
						  /*height: 1%;*/
						  padding: 25px 0px 20px 450px;}
					</style>
				<?php else: ?>
					<style type="text/css">
						.image{
						  margin: auto;
						  width: 10%;
						  /*height: 1%;*/
						  padding: 70px 0px 2px 180px;}
					</style>
				<?php endif; ?>

				<!-- TEXT SIZE -->
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
					
					<div class="x">
						<img src="<?php echo e($setting->site_logo); ?>" class="image" /><br><br>
						<h1 class="title" style="margin: 12px;"><?php echo e($setting->company_name); ?></h1>
						<p class="title" style="margin: -10px;"><?php echo e($setting->address); ?></p>
						<p class="title"><strong>Phone:</strong> <?php echo e($setting->phone); ?>  <strong> Email:</strong> <?php echo e($setting->email); ?></p>	
						<p class="date"><strong>Date:</strong> <?php echo e($date); ?></p>
					</div>
					<p class="report">Monthly Purchase Report</p>
					<table class="table table-bordered body" style="border-top: 1px solid #dee2e6; border-bottom: 1px solid #dee2e6;" border="1px" width="100%">
						<thead>
							<tr>
								
						    	<th colspan="14" class="text-center year a"><?php echo e($year); ?></th>
						    	
						    </tr>
						</thead>
					    <tbody>
					    	
						    <tr>
						      <td class="a"></td>
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
						      <td class="a"><strong>Total</strong></td>
						    </tr>
						    <tr>
						    	<td class="a"><strong>Product Discount</strong></td>
						    	<?php ($sum=0); ?>
						    	<?php $__currentLoopData = $total_discount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $discount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						        <td>
						        	<?php if($discount > 0): ?>
							      	<span><?php echo e($discount); ?></span><br><br>
							      	<?php else: ?>
							      	<span class="a"></span><br><br>
							      	<?php endif; ?>	
						        </td>
						        <?php echo e($sum = $sum + $discount); ?>

						        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						        <td class="a"><span><strong><?php echo e($sum); ?></strong></span></td>
						    </tr>
						    <tr>
						    	<td class="a">
						    		<strong>Order Discount</strong>
						    	</td>
						    	<?php ($sum=0); ?>
						    	<?php $__currentLoopData = $total_discount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $discount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						    	<td>
						    		<?php if($order_discount[$key] > 0): ?>
							      	<span class="a"><?php echo e($order_discount[$key]); ?></span><br><br>
							    	<?php endif; ?>
							    </td>
							     <?php echo e($sum = $sum + $order_discount[$key]); ?>

							    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							    <td class="a"><span><strong><?php echo e($sum); ?></strong></span></td>
						    </tr>
						    <tr>
						    	<td class="a">
						    		<strong>Product Tax</strong>
						    	</td>
						    	<?php ($sum=0); ?>
						    	<?php $__currentLoopData = $total_discount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $discount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						    	<td>
						    		<?php if($total_tax[$key] > 0): ?>
							      	<span class="a"><?php echo e($total_tax[$key]); ?></span><br><br>
							    	<?php endif; ?>
							    </td>
							      <?php echo e($sum = $sum + $total_tax[$key]); ?>

							    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							    <td class="a"><span><strong><?php echo e($sum); ?></strong></span></td>
						    </tr>
						    <tr>
						    	<td class="a">
						    		<strong>Order Tax</strong>
						    	</td>
						    	<?php ($sum=0); ?>
						    	<?php $__currentLoopData = $total_discount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $discount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						    	<td>
						    		<?php if($order_tax[$key] > 0): ?>
							      	<span class="a"><?php echo e($order_tax[$key]); ?></span><br><br>
							    	<?php endif; ?>
							    </td>
							     <?php echo e($sum = $sum + $order_tax[$key]); ?>

							    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							    <td class="a"><span><strong><?php echo e($sum); ?></strong></span></td>
						    </tr>
						    <tr>
						    	<td class="a">
						    		<strong>Shipping Cost</strong>
						    	</td>
						    	<?php ($sum=0); ?>
						    	<?php $__currentLoopData = $total_discount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $discount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						    	<td>
						    		<?php if($shipping_cost[$key] > 0): ?>
							      	<span class="a"><?php echo e($shipping_cost[$key]); ?></span><br><br>
							    	<?php endif; ?>
							    </td>
							     <?php echo e($sum = $sum + $shipping_cost[$key]); ?>

							    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							    <td class="a"><span><strong><?php echo e($sum); ?></strong></span></td>
						    </tr>
						    <tr>
						    	<td class="a">
						    		<strong>grand total</strong>
						    	</td>
						    	<?php ($sum=0); ?>
						    	<?php $__currentLoopData = $total_discount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $discount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						    	<td class="grand_total">
						    		<?php if($grand_total[$key] > 0): ?>
							      	<span class="a"><?php echo e($grand_total[$key]); ?></span><br><br>
							    	<?php endif; ?>

							    </td>
							    <?php echo e($sum = $sum + $grand_total[$key]); ?>

							    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							    <td class="a"><span><strong><?php echo e($sum); ?></strong></span></td>
						    </tr>
					    </tbody>
					</table>
<br>
<br>
<br>
<br>
<p>Developed By <?php echo e($setting->developed_by); ?></p><?php /**PATH C:\xampp\htdocs\salepropos\resources\views/pdf/report_monthly_purchase.blade.php ENDPATH**/ ?>