<?php 
/*template Name: Template Organization Dashboard*/
global $current_user;
get_header(); ?>
<section class="inner-default-wrap mt-5 mb-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-heading">
					<h2>Update Organization Details</h2>
				</div>
				<div class="registration-form-section">
					<form action="" method="post" id="update-organization-details-form">
						<div class="form-group mb-3">
							<label for="org_last_renewal_date">Last Renewal Date<span>*</span> : </label>
							<input type="date" class="form-control" id="org_last_renewal_date" name="org_last_renewal_date" placeholder="Enter Last Renewal Date" value="<?php echo get_user_meta($current_user->ID, 'org_last_renewal_date', true); ?>">
							<div class="field_error" id="org_last_renewal_date_error"></div>
						</div>
						<div class="form-group mb-3">
							<label for="org_last_renewal_date">Details of Governing Body Members: </label>
							<div id="governing_mem_details_wrap">
								<div class="row overning_mem_details mt-3">
									<div class="col">
										<div class="form-group mb-3">
											<!-- <label for="member_designation">Designation : </label> -->
											<input type="text" class="form-control" id="member_designation_0" name="member_designation[]" placeholder="Designation">
											<div class="field_error" id="member_designation_0_error"></div>
										</div>
									</div>
									<div class="col">
										<div class="form-group mb-3">
											<!-- <label for="member_name">Name : </label> -->
											<input type="text" class="form-control" id="member_name_0" name="member_name_0" placeholder="Name">
											<div class="field_error" id="member_name_0_error"></div>
										</div>
									</div>
									<div class="col">
										<div class="form-group mb-3">
											<!-- <label for="member_email">Email : </label> -->
											<input type="email" class="form-control" id="member_email_0" name="member_email_0" placeholder="Email">
											<div class="field_error" id="member_email_0_error"></div>
										</div>
									</div>
									<div class="col">
										<div class="form-group mb-3">
											<!-- <label for="member_phone">Phone Number : </label> -->
											<input type="tel" class="form-control" id="member_phone_0" name="member_phone_0" placeholder="Phone number">
											<div class="field_error" id="member_phone_0_error"></div>
										</div>
									</div>
									<div class="col">
										<div class="form-group mb-3">
											<!-- <label for="member_address">Address : </label> -->
											<input type="text" class="form-control" id="member_address_0" name="member_address_0" placeholder="Address">
											<div class="field_error" id="member_address_0_error"></div>
										</div>
									</div>
									<div class="col">
										<a href="javascript:void(0)" class="member_delete_btn" style="color:#f00;"><i class="fas fa-trash-alt"></i></a>
									</div>
								</div>
							</div>
							<a href="javascript:void(0)" class="add_more_member_btn btn mt-3" style="color:#fff;">Add Member</a>
						</div>
						<div class="form-group mb-3">
							<div class="form-group row mb-4">
								<label for="org_12a_doc" class="col-sm-3 col-form-label">12A Doc <span>*</span>:</label>
								<div class="col-sm-3">
									<div class="file-field">
										<div class=" choose-btn">
											<span>Choose file</span>
											<input class="form-control" type="file" id="org_12a_doc" name="org_12a_doc">
										</div>
									</div>
								</div>
								<?php if(!empty(get_user_meta($current_user->ID, 'org_12a_doc', true))){ ?>
									<div class="col-sm-3">
										<a href="<?php echo site_url(); ?>/wp-content/uploads/member-files/<?php echo get_user_meta($current_user->ID, 'org_12a_doc', true); ?>" target="_blank">See 12A Doc</a>
									</div>
								<?php } ?>
							</div>
							<div class="form-group row mb-4">
								<label for="org_moa_doc" class="col-sm-3 col-form-label">MOA Doc <span>*</span>:</label>
								<div class="col-sm-3">
									<div class="file-field">
										<div class=" choose-btn">
											<span>Choose file</span>
											<input class="form-control" type="file" id="org_moa_doc" name="org_moa_doc">
										</div>
									</div>
								</div>
								<?php if(!empty(get_user_meta($current_user->ID, 'org_moa_doc', true))){ ?>
									<div class="col-sm-3">
										<a href="<?php echo site_url(); ?>/wp-content/uploads/member-files/<?php echo get_user_meta($current_user->ID, 'org_moa_doc', true); ?>" target="_blank">See MOA Doc</a>
									</div>
								<?php } ?>
							</div>

							<div class="form-group row mb-4">
								<label for="org_renewalcert_doc" class="col-sm-3 col-form-label">Renewal Cert Doc <span>*</span>:</label>
								<div class="col-sm-3">
									<div class="file-field">
										<div class=" choose-btn">
											<span>Choose file</span>
											<input class="form-control" type="file" id="org_renewalcert_doc" name="org_renewalcert_doc">
										</div>
									</div>
								</div>
								<?php if(!empty(get_user_meta($current_user->ID, 'org_renewalcert_doc', true))){ ?>
									<div class="col-sm-3">
										<a href="<?php echo site_url(); ?>/wp-content/uploads/member-files/<?php echo get_user_meta($current_user->ID, 'org_renewalcert_doc', true); ?>" target="_blank">See Renew Cert Doc</a>
									</div>
								<?php } ?>
							</div>
							<div class="form-group row mb-4">
								<label for="org_itr7_doc" class="col-sm-3 col-form-label">ITR7 Doc <span>*</span>:</label>
								<div class="col-sm-3">
									<div class="file-field">
										<div class=" choose-btn">
											<span>Choose file</span>
											<input class="form-control" type="file" id="org_itr7_doc" name="org_itr7_doc">
										</div>
									</div>
								</div>
								<?php if(!empty(get_user_meta($current_user->ID, 'org_itr7_doc', true))){ ?>
									<div class="col-sm-3">
										<a href="<?php echo site_url(); ?>/wp-content/uploads/member-files/<?php echo get_user_meta($current_user->ID, 'org_itr7_doc', true); ?>" target="_blank">See ITR7 Doc</a>
									</div>
								<?php } ?>
							</div>
						</div>
						<div class="form-group mb-3">
							<label for="org_income_other_donation">Income Other Than Donation If any (Yearly amount & details): </label>
							<textarea class="form-control" id="org_income_other_donation" name="org_income_other_donation" placeholder="Enter income other than donation if any"><?php echo get_user_meta($current_user->ID, 'org_income_other_donation', true); ?></textarea>
							<div class="field_error" id="org_income_other_donation_error"></div>
						</div>
						<div class="org-details-up" id="org-details-up"></div>
						<button type="submit" class="btn btn-primary" name="org-details-btn" id="org-details-btn">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>