<?php 
/*Template Name: Template Account Debit*/
get_header();
global $wpdb;
$debit_id = $_REQUEST['debit-id'];
$table = $wpdb->prefix.'account_debit';
$debit_details = $wpdb->get_row( "SELECT * FROM ".$table." WHERE ID = ".$debit_id );
?>
<section class="inner-default-wrap mt-5 mb-5">
	<div class="container">
		<div class="row">
			<?php if(current_user_can('accountant_admin') || current_user_can('accountant_member') || current_user_can('administrator')){?>
				<div class="col-md-12">
					<div class="section-heading">
						<h2>Account Debit Form</h2>
					</div>
					<div class="row">
					<div class="col-12">
							<div class="credit-list-wrap">
				                <h3>Debit List</h3>
				                <table class="table table-striped" id="credit-list-wrap">
				                  <thead>
				                    <tr>
				                      <th scope="col">Option</th>
				                      <th scope="col">Date</th>
				                      <th scope="col">Amount Spent</th>
				                      <th scope="col">Purpose</th>
				                      <th scope="col">Paid to</th>
				                      <th scope="col">Address</th>
				                      <th scope="col">Contact Number</th>
				                      <th scope="col">Transaction Type</th>
				                      <th scope="col">Receipt Number</th>
				                      <th scope="col">Account Head</th>
				                      <th scope="col">Beneficiary Name</th>
				                      <th scope="col">Beneficiary/Student ID</th>
				                      <th scope="col">Beneficiary Contact No</th>
				                      <th scope="col">Beneficiary Email</th>
				                      <th scope="col">Beneficiary Address</th>
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
				                  		$table = $wpdb->prefix.'account_debit';
		        						$results = $wpdb->get_results( "SELECT * FROM ".$table." ORDER BY ID DESC" );
		        						if($wpdb->num_rows > 0){
		        							foreach($results as $result){
				                  		?>
					                        <tr>
					                       	  <th><a href="<?php echo get_permalink(); ?>/?debit-id=<?php echo $result->ID; ?>" title="Edit"><i class="fas fa-edit"></i></a></th>
					                          <th scope="row"><?php echo $result->debit_date; ?></th>
					                          <td><?php echo $result->amount_spent; ?></td>
					                          <td><?php echo $result->purpose; ?></td>
					                          <td><?php echo $result->paid_to; ?></td>
					                          <td><?php echo $result->address; ?></td>
					                          <td><?php echo $result->contact; ?></td>
					                          <td><?php echo $result->transaction_type; ?></td>
					                          <td><?php echo $result->receipt_vouchar; ?></td>
					                          <td><?php echo $result->account_head; ?></td>
					                          <td><?php echo $result->beneficiary_name; ?></td>
					                          <td><?php echo $result->benef_stu_id; ?></td>
					                          <td><?php echo $result->benef_contact_no; ?></td>
					                          <td><?php echo $result->benef_email; ?></td>
					                          <td><?php echo $result->benef_address; ?></td>
					                          <td><?php echo $result->bank_narration; ?></td>
					                          <td><?php echo $result->trans_ref_no; ?></td>
					                          <td><?php echo $result->value_dt; ?></td>
					                          <td><?php echo $result->bank_name; ?></td>
					                          <td><?php echo $result->remark; ?></td>
					                          <td><?php echo $result->recon_ID; ?></td>
					                          <td><a href="javascript:void(0)" data-id="<?php echo $result->ID; ?>" class="del-debit-record">Delete</a></td>
					                        </tr>
					                    <?php } 
					                    } else { ?>
					                    	<tr><td colspan="21">Nothing found</td></tr>
					                    <?php } ?>
				                  </tbody>
				                </table>
				            </div>
				        </div>
						<div class="col-12">
							<div class="registration-form-section">
								<h3>Insert Debit Details</h3>
								<form action="" method="post" id="account-debit-form">
									<div class="form-group mt-3">
										<label for="dr_date">Debit Date<span>*</span> : </label>
										<input type="date" class="form-control" id="dr_date" name="dr_date" placeholder="Enter debit date" value="<?php echo $debit_details->debit_date; ?>">
										<div class="field_error" id="dr_date_error"></div>
									</div>
									<div class="form-group mt-3">
										<label for="dr_amount_received">Amount Spent <span>*</span> : </label>
										<input type="text" class="form-control" id="dr_amount_spent" name="dr_amount_spent" placeholder="Enter spent amount" value="<?php echo $debit_details->amount_spent; ?>">
										<div class="field_error" id="dr_amount_spent_error"></div>
									</div>
									<div class="form-group mt-3">
										<label for="dr_purpose">Purpose <span>*</span> : </label>
										<input type="text" class="form-control" id="dr_purpose" name="dr_purpose" placeholder="Enter spent amount" value="<?php echo $debit_details->purpose; ?>">
										<div class="field_error" id="dr_purpose_error"></div>
									</div>
									<div class="form-group mt-3">
										<label for="dr_paid_to">Paid To<span>*</span> : </label>
										<input type="text" class="form-control" id="dr_paid_to" name="dr_paid_to" placeholder="Enter paid to" value="<?php echo $debit_details->paid_to; ?>">
										<div class="field_error" id="dr_paid_to_error"></div>
									</div>
									<div class="form-group mt-3">
										<label for="dr_address">Address: </label>
										<input type="text" class="form-control" id="dr_address" name="dr_address" placeholder="Enter address" value="<?php echo $debit_details->address; ?>">
										<div class="field_error" id="dr_address_error"></div>
									</div>
									<div class="form-group mt-3">
										<label for="dr_contact_no">Contact Number: </label>
										<input type="text" class="form-control" id="dr_contact_no" name="dr_contact_no" placeholder="Enter contact no" value="<?php echo $debit_details->contact; ?>">
										<div class="field_error" id="dr_contact_no_error"></div>
									</div>
									<div class="form-group mt-3">
										<label for="dr_transaction_type">Transaction Type<span>*</span> : </label>
										<select id="dr_transaction_type" name="dr_transaction_type" class="form-control">
											<option value="">Select Type</option>
											<?php 
												$type_array = array('Cash', 'CHQ', 'Net Banking');
												foreach($type_array as $type){
													$sel_type = ($type == $debit_details->transaction_type) ? 'selected="selected"' : '';
											?>
												<option value="<?php echo $type; ?>" <?php echo $sel_type; ?>><?php echo $type; ?></option>
											<?php } ?>
										</select>
										<div class="field_error" id="dr_transaction_type_error"></div>
									</div>
									<div class="form-group mt-3">
										<label for="dr_receipt_no">Receipt Number: </label>
										<input type="text" class="form-control" id="dr_receipt_no" name="dr_receipt_no" placeholder="Enter Receipt Number" value="<?php echo $debit_details->receipt_vouchar; ?>">
										<div class="field_error" id="dr_receipt_no_error"></div>
									</div>
									<div class="form-group mt-3">
										<label for="dr_account_head">Account Head<span>*</span> : </label>
										<select id="dr_account_head" name="dr_account_head" class="form-control">
											<option value="">Select Account Head</option>
											<?php 
												$head_array = array('DR - Agomoni', 'DR - AHEAD', 'DR - GF - Staff & Admin Rem', 'DR - GF - Bank Charges', 'DR - GF - Utility Bills', 'DR - Kishalay - OPEX', 'DR - GF-OPEX DMA', 'DR - GF-OPEX HVSN', 'DR - GF-OPEX MKRS', 'DR - Kishalay CAPEX', 'DR - GF-CAPEX DMA', 'DR - GF-CAPEX HVSN', 'DR - GF-CAPEX MKRS', 'DR - HES', 'DR - JCD - OPEX', 'DR - JCDSNG', 'DR - MS', 'DR - Relief Work', 'DR - TMAC', 'DR - MH', 'DR - OWN AC Transfer', 'DR - Incorrect Transfer');
												foreach($head_array as $head){
													$sel_head = ($head == $debit_details->account_head) ? 'selected="selected"' : '';
											?>
												<option value="<?php echo $head; ?>" <?php echo $sel_head; ?>><?php echo $head; ?></option>
											<?php } ?>
										</select>
										<div class="field_error" id="dr_account_head_error"></div>
									</div>
									<div class="form-group mt-3">
										<label for="dr_beneficiary_name">Beneficiary Name: </label>
										<input type="text" class="form-control" id="dr_beneficiary_name" name="dr_beneficiary_name" placeholder="Enter beneficiary name" value="<?php echo $debit_details->beneficiary_name; ?>">
										<div class="field_error" id="dr_beneficiary_name_error"></div>
									</div>
									<div class="form-group mt-3">
										<label for="dr_beneficiary_id">Beneficiary/Student ID: </label>
										<input type="text" class="form-control" id="dr_beneficiary_id" name="dr_beneficiary_id" placeholder="Enter beneficiary/student ID" value="<?php echo $debit_details->benef_stu_id; ?>">
										<div class="field_error" id="dr_beneficiary_id_error"></div>
									</div>
									<div class="form-group mt-3">
										<label for="dr_beneficiary_contactno">Beneficiary Contact No: </label>
										<input type="text" class="form-control" id="dr_beneficiary_contactno" name="dr_beneficiary_contactno" placeholder="Enter beneficiary contact no" value="<?php echo $debit_details->benef_contact_no; ?>">
										<div class="field_error" id="dr_beneficiary_contactno_error"></div>
									</div>
									<div class="form-group mt-3">
										<label for="dr_beneficiary_email">Beneficiary Email: </label>
										<input type="text" class="form-control" id="dr_beneficiary_email" name="dr_beneficiary_email" placeholder="Enter beneficiary email" value="<?php echo $debit_details->benef_email; ?>">
										<div class="field_error" id="dr_beneficiary_email_error"></div>
									</div>
									<div class="form-group mt-3">
										<label for="dr_beneficiary_address">Beneficiary Address: </label>
										<input type="text" class="form-control" id="dr_beneficiary_address" name="dr_beneficiary_address" placeholder="Enter beneficiary address" value="<?php echo $debit_details->benef_address; ?>">
										<div class="field_error" id="dr_beneficiary_address_error"></div>
									</div>
									<?php $display_none = (current_user_can('accountant_admin'))? '':'display:none'; ?>
									<div style="<?php echo $display_none; ?>">
										<div class="form-group mt-3">
											<label for="dr_bank_narration">Bank Narration: </label>
											<input type="text" class="form-control" id="dr_bank_narration" name="dr_bank_narration" placeholder="Enter Bank Narration" value="<?php echo $debit_details->bank_narration; ?>">
											<div class="field_error" id="dr_bank_narration_error"></div>
										</div>
										<div class="form-group mt-3">
											<label for="dr_trans_ref_no">Transaction Reference Number: </label>
											<input type="text" class="form-control" id="dr_trans_ref_no" name="dr_trans_ref_no" placeholder="Enter Transaction Referance Number" value="<?php echo $debit_details->trans_ref_no; ?>">
											<div class="field_error" id="dr_trans_ref_no_error"></div>
										</div>
										<div class="form-group mt-3">
											<label for="dr_value_date">Value Date: </label>
											<input type="date" class="form-control" id="dr_value_date" name="dr_value_date" placeholder="Enter Value Date" value="<?php echo $debit_details->value_dt; ?>">
											<div class="field_error" id="dr_value_date_error"></div>
										</div>
										<div class="form-group mt-3">
											<label for="dr_bank_name">Bank Name: </label>
											<select id="dr_bank_name" name="dr_bank_name" class="form-control">
												<option value="">Select Bank Name</option>
												<?php 
													$bank_array = array('HDFC', 'ICICI', 'UBI');
													foreach($bank_array as $bank){
														$sel_bank = ($bank == $debit_details->bank_name) ? 'selected="selected"' : '';
												?>
													<option value="<?php echo $bank; ?>" <?php echo $sel_bank; ?>><?php echo $bank; ?></option>
												<?php } ?>
											</select>
											<div class="field_error" id="dr_bank_name_error"></div>
										</div>
										<div class="form-group mt-3">
											<label for="dr_remark">Remark: </label>
											<input type="text" class="form-control" id="dr_remark" name="dr_remark" placeholder="Enter remark" value="<?php echo $debit_details->remark; ?>">
											<div class="field_error" id="dr_remark_error"></div>
										</div>
									</div>
									<div class="account-debit-msg mt-3" id="account-debit-msg"></div>
									<input type="hidden" name="debit_ID" id="debit_ID" value="<?php echo $debit_details->ID; ?>">
									<input type="hidden" name="recon_ID" id="recon_ID" value="<?php echo $debit_details->recon_ID; ?>">
									<button type="submit" class="btn btn-primary" name="account-debit-btn" id="account-debit-btn">Submit</button>
									<a href="<?php echo get_permalink()?>" class="btn btn-primary" style="color:#fff">Add New</a>
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