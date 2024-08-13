<?php 
get_header();
if(have_posts()): while(have_posts()): the_post(); 
$user_id = get_post_meta(get_the_ID(), 'request_member_id', true);
$user = get_user_by( 'ID', $user_id );
?>
<section class="exit-section about-section">
	<div class="container" style="max-width: 767px;">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center mb-5">Request Details - For Approval / Rejection</h2>
				<?php if(current_user_can('gbmem') || current_user_can('treasure')){ ?>
					<form action="" method="post" id="member-raise-request-form">
						<div class="form-group mt-3 mb-3">
							<label for="member_raise_request_name">Name <span>*</span> : </label>
							<input type="hidden" class="form-control" id="member_raise_request_name" name="member_raise_request_name" value="<?php echo $user->display_name; ?>" readonly>
							<b><?php echo $user->display_name; ?></b>
							<div class="field_error" id="member_raise_request_name_error"></div>
						</div>
						<div class="form-group">
							<label for="member_request_for_payment">Request for Payment <span>*</span> : </label>
							<input type="hidden" name="member_request_for_payment" id="member_request_for_payment" value="<?php echo get_post_meta(get_the_ID(), 'other_request_for_payment', true); ?>">
							<b><?php echo get_post_meta(get_the_ID(), 'other_request_for_payment', true); ?></b>
							<!-- <select class="form-control" id="member_request_for_payment" name="member_request_for_payment">
								<option value="">Select Request</option>
								<?php $requests = array('Tapassya Jyoti - Kishalaya VidyaNiketan (Dattapukur)', 'Tapassya Jyoti - Tapassya Bhaban ( HVSN, Jayanagar )', 'Tapassya Jyoti - Tapassya Bhaban ( MKRS, Tollygunge )', 'Aalo - Higher Education Scholarship', 'Astha – Community Development', 'Arogya – Medical Support', 'Asha – Disaster Relief'); 
									foreach($requests as $request){
										$sel = (get_post_meta(get_the_ID(), 'other_request_for_payment', true) == $request)? 'selected="selected"': '';
								?>
									<option value="<?php echo $request; ?>" <?php echo $sel; ?>><?php echo $request; ?></option>
								<?php } ?>
							</select> -->
							<div class="field_error" id="member_request_for_payment_error"></div>
						</div>
						<?php $other_request_date = get_post_meta(get_the_ID(), 'other_request_date', true); ?>
						<div class="form-group mt-3 mb-3">
		                    <label for="request_date">Request Date<span>*</span> : </label>
		                    <input type="hidden" class="form-control" id="request_date" name="request_date" value="<?php echo $other_request_date; ?>">
		                    <b><?php echo $other_request_date; ?></b>
		                    <div class="field_error" id="request_date_error"></div>
		                </div>
						<div class="form-group mt-3 mb-3">
							<label for="member_request_purpose">Purpose <span>*</span> : </label>
							<input type="hidden" class="form-control" id="member_request_purpose" name="member_request_purpose" value="<?php echo get_post_meta(get_the_ID(), 'other_request_purpose', true)?>">
							<b><?php echo get_post_meta(get_the_ID(), 'other_request_purpose', true); ?></b>
							<div class="field_error" id="member_request_purpose_error"></div>
						</div>
						<div class="form-group">
							<label for="member_request_frequency">Frequency <span>*</span> : </label>
							<input type="hidden" name="member_request_frequency" id="member_request_frequency" value="<?php echo get_post_meta(get_the_ID(), 'other_request_frequency', true); ?>">
							<b><?php echo get_post_meta(get_the_ID(), 'other_request_frequency', true); ?></b>
							<!-- <select class="form-control" id="member_request_frequency" name="member_request_frequency">
								<option value="">Select Frequency</option>
								<?php $frequencies = array('Monthly', 'Quarterly', 'One time'); 
									foreach($frequencies as $frequency){
										$fre_sel = (get_post_meta(get_the_ID(), 'other_request_frequency', true) == $frequency)? 'selected="selected"': '';
								?>
									<option value="<?php echo $frequency; ?>" <?php echo $fre_sel; ?>><?php echo $frequency; ?></option>
								<?php } ?>
							</select> -->
							<div class="field_error" id="member_request_frequency_error"></div>
						</div>
		                <div class="form-group mt-3 mb-3">
		                    <label for="disbursed_date">To be disbursed by (date ) <span>*</span> : </label>
		                    <input type="hidden" class="form-control" id="disbursed_date" name="disbursed_date" value="<?php echo get_post_meta(get_the_ID(), 'other_request_disbursed_date', true)?>">
		                    <b><?php echo get_post_meta(get_the_ID(), 'other_request_disbursed_date', true)?></b>
		                    <div class="field_error" id="disbursed_date_error"></div>
		                </div>
						<div class="form-group mt-3 mb-3">
							<label for="member_request_amount">Request Amount <span>*</span> : </label>
							<input type="hidden" class="form-control" id="member_request_amount" name="member_request_amount" value="<?php echo get_post_meta(get_the_ID(), 'other_request_amount', true)?>">
							<b><?php echo get_post_meta(get_the_ID(), 'other_request_amount', true)?></b>
							<div class="field_error" id="member_request_amount_error"></div>
						</div>
						<div class="form-group mt-3 mb-3">
		                    <label for="details_beneficiary">Details of Beneficiary <span>*</span> : </label>
		                    <input type="hidden" class="form-control" id="details_beneficiary" name="details_beneficiary" value="<?php echo get_post_meta(get_the_ID(), 'other_request_details_beneficiary', true)?>">
		                    <b><?php echo get_post_meta(get_the_ID(), 'other_request_details_beneficiary', true)?></b>
		                    <div class="field_error" id="details_beneficiary_error"></div>
		                </div>
						<div class="form-group mt-3 mb-3">
							<label for="member_request_approve_amount">Approve Amount <span>*</span> : </label>
							<input type="text" class="form-control" id="member_request_approve_amount" name="member_request_approve_amount" value="<?php echo get_post_meta(get_the_ID(), 'other_request_approved_amount', true)?>">
							<div class="field_error" id="member_request_approve_amount_error"></div>
						</div>
		                <div class="form-group mt-3 mb-3">
		                    <label for="request_remark">Remark <span>*</span> : </label>
		                    <textarea class="form-control" id="request_remark" name="request_remark" placeholder="Enter request remark"><?php echo strip_tags(get_the_content()); ?></textarea>
		                    <div class="field_error" id="request_remark_error"></div>
		                </div>
		                <div class="form-group mt-3 mb-3">
							<label for="member_request_status">Request Status : </label>
							<select class="form-control" id="member_request_status" name="member_request_status">
								<option value="">Select Status</option>
								<?php $status = array('Pending', 'Approved', 'Rejected'); 
									foreach($status as $sts){
										$status_sel = (get_post_meta(get_the_ID(), 'other_request_approved_status', true) == $sts)? 'selected="selected"': '';
								?>
									<option value="<?php echo $sts; ?>" <?php echo $status_sel; ?>><?php echo $sts; ?></option>
								<?php } ?>
							</select>
							<div class="field_error" id="member_request_status_error"></div>
						</div>

		                <input type="hidden" name="other_request_id" id="other_request_id" value="<?php echo get_the_ID(); ?>">
						<div class="member-raise-request" id="member-raise-request"></div>
						<div class="formBtn">
							<button type="submit" class="btn btn-primary" name="member-raise-request-btn" id="member-raise-request-btn">Submit</button>
							<button class="btn btn-primary" onclick="window.location.href = 'https://tapassya.org/tapassya-new/other-request-dashboard/';">Back</button>
						</div>
					</form>
						
				<?php }else{ ?>
			    	<div class="row">
			    		<div class="col-md-12 text-center">
			    			<h3>users with Governing Body Member and Treasurer role can access this page</h3>
			    		</div>
			    	</div>
			    <?php } ?>
			</div>
		</div>
	</div>
</section>
<?php endwhile; endif;
get_footer(); ?>