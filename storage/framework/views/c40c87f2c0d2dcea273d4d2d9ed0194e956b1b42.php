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
	/*.report{text-align: center; color: black; height: 3%; padding: 10px; font-weight: bold;
			text-decoration: underline;}*/
	/*.a{text-align: center; color: black;}*/
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

					<input type="button" id="p" value="print" onclick="printPage();" class="btn btn-label-success btn-sm btn-upper">

					<div align="center" class="x">
						<img src="http://localhost/salepropos/public/<?php echo e($setting->site_logo); ?>" class="image" /><br><br>
						<h1 class="title" style="margin: 12px;"><?php echo e($setting->company_name); ?></h1>
						<p class="title" style="margin: -10px;"><?php echo e($setting->address); ?></p>
						<p class="title"><strong>Phone:</strong> <?php echo e($setting->phone); ?>  <strong> Email:</strong> <?php echo e($setting->email); ?></p>	
						<p class="date"><strong>Date:</strong> <?php echo e($date); ?></p>
					</div>
					<p class="report">Daily Purchase Report</p>
<table class="table table-bordered" style="border-top: 1px solid #dee2e6; border-bottom: 1px solid #dee2e6; border: 1px solid black;" border="1px" width="100%">
						<thead>
							<tr>
								
						    	<th colspan="7" class="text-center"><?php echo e(date("F", strtotime($year.'-'.$month.'-01')).' ' .$year); ?></th>
						    	
						    </tr>
						</thead>
					    <tbody>
						    <tr>
							    <td><strong>Sunday</strong></td>
							    <td><strong>Monday</strong></td>
							    <td><strong>Tuesday</strong></td>
							    <td><strong>Wednesday</strong></td>
							    <td><strong>Thrusday</strong></td>
							    <td><strong>Friday</strong></td>
							    <td><strong>Saturday</strong></td>
						    </tr>
						    <?php 
						    	$i = 1;
						    	$flag = 0;
						    	while ($i <= $number_of_day) {
						    		echo '<tr>';
						    		for($j=1 ; $j<=7 ; $j++){
						    			if($i > $number_of_day)
						    				break;

						    			if($flag){
						    				if($year.'-'.$month.'-'.$i == date('Y').'-'.date('m').'-'.(int)date('d'))
						    					echo '<td><p style="color:red"><strong>'.$i.'</strong></p>';
						    				else
						    					echo '<td><p><strong>'.$i.'</strong></p>';

						    				if($total_discount[$i]){
						    					echo '<strong>'.trans("file.Product Discount").'</strong><br><span>'.$total_discount[$i].'</span><br><br>';
						    				}
						    				if($order_discount[$i]){
						    					echo '<strong>'.trans("file.Order Discount").'</strong><br><span>'.$order_discount[$i].'</span><br><br>';
						    				}
						    				if($total_tax[$i]){
						    					echo '<strong>'.trans("file.Product Tax").'</strong><br><span>'.$total_tax[$i].'</span><br><br>';
						    				}
						    				if($order_tax[$i]){
						    					echo '<strong>'.trans("file.Order Tax").'</strong><br><span>'.$order_tax[$i].'</span><br><br>';
						    				}
						    				if($shipping_cost[$i]){
						    					echo '<strong>'.trans("file.Shipping Cost").'</strong><br><span>'.$shipping_cost[$i].'</span><br><br>';
						    				}
						    				if($grand_total[$i]){
						    					echo '<strong>'.trans("file.grand total").'</strong><br><span>'.$grand_total[$i].'</span><br><br>';
						    				}
						    				echo '</td>';
						    				$i++;
						    			}
						    			elseif($j == $start_day){
						    				if($year.'-'.$month.'-'.$i == date('Y').'-'.date('m').'-'.(int)date('d'))
						    					echo '<td><p style="color:red"><strong>'.$i.'</strong></p>';
						    				else
						    					echo '<td><p><strong>'.$i.'</strong></p>';

						    				if($total_discount[$i]){
						    					echo '<strong>'.trans("file.Product Discount").'</strong><br><span>'.$total_discount[$i].'</span><br><br>';
						    				}
						    				if($order_discount[$i]){
						    					echo '<strong>'.trans("file.Order Discount").'</strong><br><span>'.$order_discount[$i].'</span><br><br>';
						    				}
						    				if($total_tax[$i]){
						    					echo '<strong>'.trans("file.Product Tax").'</strong><br><span>'.$total_tax[$i].'</span><br><br>';
						    				}
						    				if($order_tax[$i]){
						    					echo '<strong>'.trans("file.Order Tax").'</strong><br><span>'.$order_tax[$i].'</span><br><br>';
						    				}
						    				if($shipping_cost[$i]){
						    					echo '<strong>'.trans("file.Shipping Cost").'</strong><br><span>'.$shipping_cost[$i].'</span><br><br>';
						    				}
						    				if($grand_total[$i]){
						    					echo '<strong>'.trans("file.grand total").'</strong><br><span>'.$grand_total[$i].'</span><br><br>';
						    				}
						    				echo '</td>';
						    				$flag = 1;
						    				$i++;
						    				continue;
						    			}
						    			else {
						    				echo '<td></td>';
						    			}
						    		}
						    	    echo '</tr>';
						    	}
						    ?>
					    </tbody>
					</table>




<br>
<br>
<p>Developed By <?php echo e($setting->developed_by); ?></p>	
<script type="text/javascript">
        function printPage() {
            window.print();
        }
</script><?php /**PATH C:\xampp\htdocs\salepropos\resources\views/print/daily_purchase_print.blade.php ENDPATH**/ ?>