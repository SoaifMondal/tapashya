<?php 
/*Template Name: Template Account Summery*/
get_header(); 
global $wpdb;
$head_array = array('CR - Agomoni - Donation', 'CR - AHEAD - Donation', 'CR - MS - Donation', 'CR - GF - Donation', 'CR - GF - Membership Contribution', 'CR - HES - Donation', 'CR - HES - Members Contribution', 'CR - JCD - Donation', 'CR - JCD - Members Contribution', 'CR - JCDSNG - Donation', 'CR - JCDSNG - Members Contribution', 'CR - Kishalay - Donation', 'CR - Kishalay - Members Contribution', 'CR - Relief - Donation', 'CR - GF-CAPEX - Donation', 'CR - Kishalay-CAPEX - Donation', 'CR - TMAC - Donation', 'CR - MH - Donation', 'CR - OWN AC Transfer', 'CR - Incorrect Transfer');
?>
<section class="inner-default-wrap mt-5 mb-5">
	<div class="container">
		<div class="row">
			<?php if(current_user_can('accountant_admin') || current_user_can('accountant_member') || current_user_can('administrator')){?>
				<div class="col-md-3">
				  	<div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				  		<?php 
				    		foreach($head_array as $key => $head){ 
				    		$active = ($key == 0)?'active': '';
				    	?>
							<button class="nav-link <?php echo $active; ?>" id="head-tab<?php echo $key; ?>" data-bs-toggle="pill" data-bs-target="#head-content-tab<?php echo $key; ?>" type="button" role="tab" aria-controls="head-tab<?php echo $key; ?>" aria-selected="true" style="text-align: left;"><?php echo $head; ?></button>
						<?php } ?>
					</div>
				</div>
				<div class="col-md-9">
					<div class="tab-content" id="v-pills-tabContent">
						<?php 
				    		foreach($head_array as $key => $head){ 
				    		$active = ($key == 0)?'show active': '';
				    		$table_name = $wpdb->prefix.'account_credit';
				    		$total_credit = $wpdb->get_results("SELECT * FROM `".$table_name."` WHERE `account_head` = '".$head."'");
				    		if($wpdb->num_rows > 0){
				    			$c_total = array();
		        				foreach($total_credit as $credit){
		        					$c_total[] = $credit->amount_received;
		        				}
		        				$c_total_amount = 'Rs. '. array_sum($c_total);
		        			}else{
		        				$c_total_amount = 'Nothing Found';
		        			}	

		        			$d_table_name = $wpdb->prefix.'account_debit';
		        			$total_debit = $wpdb->get_results("SELECT * FROM `".$d_table_name."` WHERE `account_head` = '".$head."'");
				    		if($wpdb->num_rows > 0){
				    			$d_total = array();
		        				foreach($total_debit as $debit){
		        					$d_total[] = $debit->amount_spent;
		        				}
		        				$d_total_amount = 'Rs. '. array_sum($d_total);
		        			}else{
		        				$d_total_amount = 'Nothing Found';
		        			}
				    	?>
					    	<div class="tab-pane fade <?php echo $active; ?>" id="head-content-tab<?php echo $key; ?>" role="tabpanel" aria-labelledby="head-tab<?php echo $key; ?>">
					    		<div class="row">
					    			<div class="col-md-6">
					    				<h2>Total Received Amount</h2>
					    				<hr>
					    				<h3 style="color: #2d8d06;"> <?php echo $c_total_amount; ?></h3> 
					    				<?php 
					    				$results = $wpdb->get_results( "SELECT * FROM ".$table_name." WHERE `account_head` = '".$head."'" );
					    				if($wpdb->num_rows > 0){
					    				?>
					    					<a href="javascript:void(0)" class="btn donate-from-btn">Donate From</a>
					    				<?php } ?>
					    				<div class="donate-from-wrap mt-5" style="display: none;">
					    					<h4>Credit List</h5>
					    					<table class="table table-striped">
							                  <thead>
							                    <tr>
							                      <th scope="col">Date</th>
							                      <th scope="col">Received</th>
							                      <th scope="col">Source</th>
							                      <th scope="col">From</th>
							                      <th scope="col">Contact Number</th>
							                      <th scope="col">Email</th>
							                    </tr>
							                  </thead>
							                  <tbody>
							                  		<?php 
					        						if($wpdb->num_rows > 0){
					        							foreach($results as $result){
							                  		?>
								                        <tr>
								                          <th scope="row"><?php echo $result->credit_date; ?></th>
								                          <td><?php echo $result->amount_received; ?></td>
								                          <td><?php echo $result->source; ?></td>
								                          <td><?php echo $result->received_from; ?></td>
								                          <td><?php echo $result->contact; ?></td>
								                          <td><?php echo $result->email; ?></td>
								                        </tr>
								                    <?php } 
								                    } else { ?>
								                    	<tr><td colspan="19">Nothing found</td></tr>
								                    <?php } ?>
							                  </tbody>
							                </table>
					    				</div>
					    			</div>
					    			<div class="col-md-6">
					    				<h2>Total Spent Amount</h2>
					    				<hr>
					    				<h3 style="color: #f00;"><?php echo $d_total_amount; ?></h3> 
					    				<?php 
					    				$results = $wpdb->get_results( "SELECT * FROM ".$d_table_name." WHERE `account_head` = '".$head."'" );
					    				if($wpdb->num_rows > 0){
					    				?>
						    				<a href="javascript:void(0)" class="btn spent-to-btn">Spent To</a>
						    			<?php } ?>
					    				<div class="spent-to-wrap mt-5" style="display: none;">
					    					<h4>Debit List</h4>
					    					<table class="table table-striped">
							                  <thead>
							                    <tr>
							                      <th scope="col">Date</th>
							                      <th scope="col">Received</th>
							                      <th scope="col">Source</th>
							                      <th scope="col">From</th>
							                      <th scope="col">Contact Number</th>
							                      <th scope="col">Email</th>
							                    </tr>
							                  </thead>
							                  <tbody>
							                  		<?php 
					        						if($wpdb->num_rows > 0){
					        							foreach($results as $result){
							                  		?>
								                        <tr>
								                          <th scope="row"><?php echo $result->credit_date; ?></th>
								                          <td><?php echo $result->amount_received; ?></td>
								                          <td><?php echo $result->source; ?></td>
								                          <td><?php echo $result->received_from; ?></td>
								                          <td><?php echo $result->contact; ?></td>
								                          <td><?php echo $result->email; ?></td>
								                        </tr>
								                    <?php } 
								                    } else { ?>
								                    	<tr><td colspan="19">Nothing found</td></tr>
								                    <?php } ?>
							                  </tbody>
							                </table>
					    				</div>
					    			</div>
					    		</div>
					    	</div>
					    <?php } ?>
				  	</div>
				</div>
			<?php }else{ ?>
				<div class="col-md-12">
					<div class="section-heading">
						<h2>Sorry! Only accountant can access this page</h2>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>