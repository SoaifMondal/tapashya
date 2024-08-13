<?php 
/*Template Name: Template Account Credit Insert Form*/
get_header();
global $wpdb;
$credit_id = $_REQUEST['credit-id'];
$table = $wpdb->prefix.'account_credit';
$credit_details = $wpdb->get_row( "SELECT * FROM ".$table." WHERE ID = ".$credit_id );
?>
<section class="inner-default-wrap mt-5 mb-5">
	<div class="container">
		<div class="row">
			<?php if(current_user_can('accountant_admin') || current_user_can('accountant_member') || current_user_can('administrator')){?>
				<div class="col-md-12">
					<div class="section-heading">
						<h2>Account Credit Form</h2>
					</div>
					<div class="row">
						
						<!-- <div class="col-12"> -->
							<!-- <div class="credit-search-wrap mb-3">
								<h3>Credit Search</h3>
								<form action="" method="post" id="credit-search-form">
									<div class="row">
										<div class="col-md-4"> -->
											<!-- <div class="form-group mt-3"> -->
												<!-- <label for="search_name">Search by Name<span>*</span> : </label> -->
												<!-- <input type="text" class="form-control" id="search_name" name="search_name" placeholder="Search by Name">
												<div class="field_error" id="search_name_error"></div> -->
											<!-- </div> -->
											<!-- <div class="search-credit-msg mt-3" id="search-credit-msg"></div>
										</div>
									</div>
									<button type="submit" class="btn btn-primary" name="search-btn" id="search-btn">Search</button>
								</form> -->
							<!-- </div> -->
							<!-- <div class="credit-list-wrap">
				                <h3>Credit List</h3>
				                <table class="table table-striped" id="credit-list-wrap">
				                  <thead>
				                    <tr>
				                      <th scope="col">Option</th>
				                      <th scope="col">Date</th>
				                      <th scope="col">Amount Received</th>
				                      <th scope="col">Source</th>
				                      <th scope="col">Received From</th>
				                      <th scope="col">Purpose</th>
				                      <th scope="col">Address</th>
				                      <th scope="col">Contact Number</th>
				                      <th scope="col">Email</th>
				                      <th scope="col">PAN Number</th>
				                      <th scope="col">Transaction Type</th>
				                      <th scope="col">Account Head</th>
				                      <th scope="col">Receipt Number</th>
				                      <th scope="col">Bank Narration</th>
				                      <th scope="col">Transaction Ref. No.</th>
				                      <th scope="col">Value Date</th>
				                      <th scope="col">Bank Name</th>
				                      <th scope="col">Remark</th>
				                      <th scope="col">Recon ID</th>
				                      <th scope="col">Option</th>
				                    </tr>
				                  </thead>
				                  <tbody>
				                  		<?php 
				                  		$table = $wpdb->prefix.'account_credit';
		        						$results = $wpdb->get_results( "SELECT * FROM ".$table." ORDER BY ID DESC" );
		        						if($wpdb->num_rows > 0){
		        							foreach($results as $result){
				                  		?>
					                        <tr>
					                          <th><a href="<?php echo get_permalink(); ?>/?credit-id=<?php echo $result->ID; ?>" title="Edit"><i class="fas fa-edit"></i></a></th>
					                          <th scope="row"><?php echo $result->credit_date; ?></th>
					                          <td><?php echo $result->amount_received; ?></td>
					                          <td><?php echo $result->source; ?></td>
					                          <td><?php echo $result->received_from; ?></td>
					                          <td><?php echo $result->purpose; ?></td>
					                          <td><?php echo $result->address; ?></td>
					                          <td><?php echo $result->contact; ?></td>
					                          <td><?php echo $result->email; ?></td>
					                          <td><?php echo $result->pan_number; ?></td>
					                          <td><?php echo $result->transaction_type; ?></td>
					                          <td><?php echo $result->account_head; ?></td>
					                          <td><?php echo $result->receipt_vouchar; ?></td>
					                          <td><?php echo $result->bank_narration; ?></td>
					                          <td><?php echo $result->trans_ref_no; ?></td>
					                          <td><?php echo $result->value_dt; ?></td>
					                          <td><?php echo $result->bank_name; ?></td>
					                          <td><?php echo $result->remark; ?></td>
					                          <td><?php echo $result->recon_ID; ?></td>
					                          <td><a href="javascript:void(0)" data-id="<?php echo $result->ID; ?>" class="del-credit-record">Delete</a></td>
					                        </tr>
					                    <?php } 
					                    } else { ?>
					                    	<tr><td colspan="19">Nothing found</td></tr>
					                    <?php } ?>
				                  </tbody>
				                </table>
				            </div>
				        </div> -->
						<div class="col-12">
							<div class="registration-form-section">
								<h3>Insert Credit Details</h3>
								<form action="" method="post" id="account-credit-form">
									<div class="form-group mt-3">
										<label for="cr_date">Credit Date<span>*</span> : </label>
										<input type="date" class="form-control" id="cr_date" name="cr_date" placeholder="Enter credit date" value="<?php echo $credit_details->credit_date; ?>">
										<div class="field_error" id="cr_date_error"></div>
									</div>
									<div class="form-group mt-3">
										<label for="cr_amount_received">Amount Received <span>*</span> : </label>
										<input type="text" class="form-control" id="cr_amount_received" name="cr_amount_received" placeholder="Enter received amount" value="<?php echo $credit_details->amount_received; ?>">
										<div class="field_error" id="cr_amount_received_error"></div>
									</div>
									<div class="form-group mt-3">
										<label for="cr_source">Source <span>*</span> : </label>
										<select id="cr_source" name="cr_source" class="form-control">
											<option value="">Select Source</option>
											<?php 
												$source_array = array('Donation', 'Donation on Kind', 'Fees Collection', 'Sell of Goods & Services', 'Salvage Old Assets');
												foreach($source_array as $source){
													$sel_source = ($source == $credit_details->source) ? 'selected="selected"' : '';
											?>
												<option value="<?php echo $source; ?>" <?php echo $sel_source; ?>><?php echo $source; ?></option>
											<?php } ?>
										</select>
										<div class="field_error" id="cr_source_error"></div>
									</div>
									<div class="form-group mt-3">
										<label for="cr_received_from">Received From<span>*</span> : </label>
										<input type="text" class="form-control" id="cr_received_from" name="cr_received_from" placeholder="Enter received from" value="<?php echo $credit_details->received_from; ?>">
										<div class="field_error" id="cr_received_from_error"></div>
									</div>
									<div class="form-group mt-3">
										<label for="cr_purpose">Purpose<span>*</span> : </label>
										<input type="text" class="form-control" id="cr_purpose" name="cr_purpose" placeholder="Enter purpose" value="<?php echo $credit_details->purpose; ?>">
										<div class="field_error" id="cr_purpose_error"></div>
									</div>
									<div class="form-group mt-3">
										<label for="cr_address">Address: </label>
										<input type="text" class="form-control" id="cr_address" name="cr_address" placeholder="Enter address" value="<?php echo $credit_details->address; ?>">
										<div class="field_error" id="cr_address_error"></div>
									</div>
									<div class="form-group mt-3">
										<label for="cr_contact_no">Contact Number: </label>
										<input type="text" class="form-control" id="cr_contact_no" name="cr_contact_no" placeholder="Enter contact no" value="<?php echo $credit_details->contact; ?>">
										<div class="field_error" id="cr_contact_no_error"></div>
									</div>
									<div class="form-group mt-3">
										<label for="cr_contact_email">Email: </label>
										<input type="text" class="form-control" id="cr_contact_email" name="cr_contact_email" placeholder="Enter email" value="<?php echo $credit_details->email; ?>">
										<div class="field_error" id="cr_contact_email_error"></div>
									</div>
									<div class="form-group mt-3">
										<label for="cr_pan_number">PAN Number<span>*</span> : </label>
										<input type="text" class="form-control" id="cr_pan_number" name="cr_pan_number" placeholder="Enter PAN Number" value="<?php echo $credit_details->pan_number; ?>">
										<div class="field_error" id="cr_pan_number_error"></div>
									</div>
									<div class="form-group mt-3">
										<label for="cr_transaction_type">Transaction Type<span>*</span> : </label>
										<select id="cr_transaction_type" name="cr_transaction_type" class="form-control">
											<option value="">Select Type</option>
											<?php 
												$type_array = array('Cash', 'CHQ', 'Net Banking' , 'ICIC_EazyPay');
												foreach($type_array as $type){
													$sel_type = ($type == $credit_details->transaction_type) ? 'selected="selected"' : '';
											?>
												<option value="<?php echo $type; ?>" <?php echo $sel_type; ?>><?php echo $type; ?></option>
											<?php } ?>
										</select>
										<div class="field_error" id="cr_transaction_type_error"></div>
									</div>
									<div class="form-group mt-3">
										<label for="cr_account_head">Account Head<span>*</span> : </label>
										<select id="cr_account_head" name="cr_account_head" class="form-control">
											<option value="">Select Account Head</option>
											<?php 
												$head_array = array('CR - Agomoni - Donation', 'CR - AHEAD - Donation', 'CR - MS - Donation', 'CR - GF - Donation', 'CR - GF - Membership Contribution', 'CR - HES - Donation', 'CR - HES - Members Contribution', 'CR - JCD - Donation', 'CR - JCD - Members Contribution', 'CR - JCDSNG - Donation', 'CR - JCDSNG - Members Contribution', 'CR - Kishalay - Donation', 'CR - Kishalay - Members Contribution', 'CR - Relief - Donation', 'CR - GF-CAPEX - Donation', 'CR - Kishalay-CAPEX - Donation', 'CR - TMAC - Donation', 'CR - MH - Donation', 'CR - OWN AC Transfer', 'CR - Incorrect Transfer');
												foreach($head_array as $head){
													$sel_head = ($head == $credit_details->account_head) ? 'selected="selected"' : '';
											?>
												<option value="<?php echo $head; ?>" <?php echo $sel_head; ?>><?php echo $head; ?></option>
											<?php } ?>
										</select>
										<div class="field_error" id="cr_account_head_error"></div>
									</div>
									<div class="form-group mt-3">
										<label for="cr_receipt_no">Receipt Number: </label>
										<input type="text" class="form-control" id="cr_receipt_no" name="cr_receipt_no" placeholder="Enter Receipt Number" value="<?php echo $credit_details->receipt_vouchar; ?>">
										<div class="field_error" id="cr_receipt_no_error"></div>
									</div>
									<?php $display_none = (current_user_can('accountant_admin'))? '':'display:none'; ?>
									<div style="<?php echo $display_none; ?>">
										<div class="form-group mt-3">
											<label for="cr_bank_narration">Bank Narration: </label>
											<input type="text" class="form-control" id="cr_bank_narration" name="cr_bank_narration" placeholder="Enter Bank Narration" value="<?php echo $credit_details->bank_narration; ?>">
											<div class="field_error" id="cr_bank_narration_error"></div>
										</div>
										<div class="form-group mt-3">
											<label for="cr_trans_ref_no">Transaction Reference Number: </label>
											<input type="text" class="form-control" id="cr_trans_ref_no" name="cr_trans_ref_no" placeholder="Enter Transaction Referance Number" value="<?php echo $credit_details->trans_ref_no; ?>">
											<div class="field_error" id="cr_trans_ref_no_error"></div>
										</div>
										<div class="form-group mt-3">
											<label for="cr_value_date">Value Date: </label>
											<input type="date" class="form-control" id="cr_value_date" name="cr_value_date" placeholder="Enter Value Date" value="<?php echo $credit_details->value_dt; ?>">
											<div class="field_error" id="cr_value_date_error"></div>
										</div>
										<div class="form-group mt-3">
											<label for="cr_bank_name">Bank Name: </label>
											<select id="cr_bank_name" name="cr_bank_name" class="form-control">
												<option value="">Select Bank Name</option>
												<?php 
													$bank_array = array('HDFC', 'ICICI', 'UBI');
													foreach($bank_array as $bank){
														$sel_bank = ($bank == $credit_details->bank_name) ? 'selected="selected"' : '';
												?>
													<option value="<?php echo $bank; ?>" <?php echo $sel_bank; ?>><?php echo $bank; ?></option>
												<?php } ?>
											</select>
											<div class="field_error" id="cr_bank_name_error"></div>
										</div>
										<div class="form-group mt-3">
											<label for="cr_remark">Remark: </label>
											<input type="text" class="form-control" id="cr_remark" name="cr_remark" placeholder="Enter remark" value="<?php echo $credit_details->remark; ?>">
											<div class="field_error" id="cr_remark_error"></div>
										</div>
									</div>
									<div class="account-credit-msg mt-3" id="account-credit-msg"></div>
									<input type="hidden" name="credit_ID" id="credit_ID" value="<?php echo $credit_details->ID; ?>">
									<input type="hidden" name="recon_ID" id="recon_ID" value="<?php echo $credit_details->recon_ID; ?>">
									<button type="submit" class="btn btn-primary" name="account-credit-btn" id="account-credit-btn">Submit</button>
									<a href="<?php echo get_permalink()?>" class="btn btn-primary" style="color:#fff">Add New / Reset</a>
                                    <a href="<?php echo home_url('account-credit')?>" class="btn btn-primary" style="color:#fff">Back</a>
									<?php if(current_user_can('accountant_admin')){?>
									<a href="javascript:void(0)" class="btn btn-primary" id="generate-donation-receipt" data-rid="<?php echo get_theme_value('weaversweb_donation_receipt');?>" style="color:#fff">Generate Donation Receipt No</a>
									<?php } ?>
								</form>
							</div>
						</div>
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