<?php
/*Template Name: Template Member Dashboard*/
global $current_user, $paged;
get_header(); ?>
<section class="exit-section about-section">
  	<div class="container">
      	<div class="section-heading">
          	<h2>Welcome <?php echo $current_user->display_name; ?></h2>
      	</div>
      	<?php if(!current_user_can('student') && current_user_can('administrator') || current_user_can('member')){ ?>
      		<h2 class="text-center">Your Donation Details</h2>
	      	<div class="credit-list-wrapper mb-5">
	            <table class="table table-striped">
	              <thead>
	                <tr>
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
	                </tr>
	              </thead>
	              <tbody>
	              		<?php 
	              		$table = $wpdb->prefix.'account_credit';
						$results = $wpdb->get_results( "SELECT * FROM `".$table."` WHERE `email` = '".$current_user->user_email."'" );
						if($wpdb->num_rows > 0){
							foreach($results as $result){
	              		?>
	                        <tr>
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
	                        </tr>
	                    <?php } 
	                    } else { ?>
	                    	<tr><td colspan="17">Nothing found</td></tr>
	                    <?php } ?>
	              </tbody>
	            </table>
	        </div>


		<?php } ?>
    </div>
</section> 


<?php if(current_user_can('member') || current_user_can('subscriber')){ ?>
<section class="raise-request-section about-section mb-5">
	<div class="container" style="max-width: 767px;">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center mb-5">Raise Your Requests</h2>
				<form action="" method="post" id="member-raise-request-form">
					<div class="form-group mt-3 mb-3">
						<label for="member_raise_request_name">Name <span>*</span> : </label>
						<input type="text" class="form-control" id="member_raise_request_name" name="member_raise_request_name" value="<?php echo $current_user->display_name; ?>" readonly>
						<div class="field_error" id="member_raise_request_name_error"></div>
					</div>
					<div class="form-group">
						<label for="member_request_for_payment">Request for Payment <span>*</span> : </label>
						<select class="form-control" id="member_request_for_payment" name="member_request_for_payment">
							<option value="">Select Request</option>
							<option value="Tapassya Jyoti - Kishalaya VidyaNiketan (Dattapukur)">Tapassya Jyoti - Kishalaya VidyaNiketan (Dattapukur)</option>
							<option value="Tapassya Jyoti - Tapassya Bhaban ( HVSN, Jayanagar )">Tapassya Jyoti - Tapassya Bhaban ( HVSN, Jayanagar )</option>
							<option value="Tapassya Jyoti - Tapassya Bhaban ( MKRS, Tollygunge )">Tapassya Jyoti - Tapassya Bhaban ( MKRS, Tollygunge )</option>
							<option value="Dattapukur Matri Ashram (Dattapukur)">Dattapukur Matri Ashram (Dattapukur)</option>
							<option value="Aalo - Higher Education Scholarship">Aalo - Higher Education Scholarship</option>
							<option value="AHEAD - A Holistic Education System Aided Digitally">AHEAD - A Holistic Education System Aided Digitally</option>
							<option value="Astha – Community Development">Astha – Community Development</option>
							<option value="Arogya – Medical Support">Arogya – Medical Support</option>
							<option value="Asha – Disaster Relief">Asha – Disaster Relief</option>
							<option value="General Admin Expense">General Admin Expense</option>
						</select>
						<div class="field_error" id="member_request_for_payment_error"></div>
					</div>
	                <div class="form-group mt-3 mb-3">
	                    <label for="request_date">Request Date<span>*</span> : </label>
	                    <input type="date" class="form-control" id="request_date" name="request_date" placeholder="Request Date">
	                    <div class="field_error" id="request_date_error"></div>
	                </div>
					<div class="form-group mt-3 mb-3">
						<label for="member_request_purpose">Purpose <span>*</span> : </label>
						<input type="text" class="form-control" id="member_request_purpose" name="member_request_purpose" placeholder="Enter request purpose">
						<div class="field_error" id="member_request_purpose_error"></div>
					</div>
					<div class="form-group mt-3 mb-3">
						<label for="member_request_amount">Amount <span>*</span> : </label>
						<input type="text" class="form-control" id="member_request_amount" name="member_request_amount" placeholder="Enter scholarship amount">
						<div class="field_error" id="member_request_amount_error"></div>
					</div>
					<div class="form-group">
						<label for="member_request_frequency">Frequency <span>*</span> : </label>
						<select class="form-control" id="member_request_frequency" name="member_request_frequency">
							<option value="">Select Frequency</option>
							<option value="Monthly">Monthly</option>
							<option value="Quarterly">Quarterly</option>
							<option value="One time">One time</option>
						</select>
						<div class="field_error" id="member_request_frequency_error"></div>
					</div>
	                <div class="form-group mt-3 mb-3">
	                    <label for="details_beneficiary">Details of Beneficiary <span>*</span> : </label>
	                    <textarea class="form-control" id="details_beneficiary" name="details_beneficiary" placeholder="Enter request description"></textarea>
	                    <div class="field_error" id="details_beneficiary_error"></div>
	                </div>
	                <div class="form-group mt-3 mb-3">
	                    <label for="disbursed_date">To be disbursed by (date ) <span>*</span> : </label>
	                    <input type="date" class="form-control" id="disbursed_date" name="disbursed_date" placeholder="Enter To be disbursed by (date )">
	                    <div class="field_error" id="disbursed_date_error"></div>
	                </div>
	                <div class="form-group mt-3 mb-3">
	                    <label for="request_remark">Remarks <span>*</span> : </label>
	                    <textarea class="form-control" id="request_remark" name="request_remark" placeholder="Enter request remark"></textarea>
	                    <div class="field_error" id="request_remark_error"></div>
	                </div>
	                <input type="hidden" name="other_request_id" id="other_request_id" value="">
					<div class="member-raise-request" id="member-raise-request"></div>
					<button type="submit" class="btn btn-primary" name="member-raise-request-btn" id="member-raise-request-btn">Submit</button>
				</form>
			</div>
		</div>
	</div>
</section>
<?php } ?>
<?php get_footer(); ?>