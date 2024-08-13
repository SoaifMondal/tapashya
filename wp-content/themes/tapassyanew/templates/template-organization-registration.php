<?php 
//page_only_visible("before-login");
/*Template Name: Template Organization Registration*/
get_header(); ?>
<section class="inner-default-wrap mt-5 mb-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-heading">
					<h2>Organization Registration</h2>
				</div>
				<div class="registration-form-section">
					<form action="" method="post" id="organization-reg-form">
						<div class="form-group mb-3">
							<label for="org_name">Organization Name <span>*</span> : </label>
							<input type="text" class="form-control" id="org_name" name="org_name" placeholder="Enter organization name">
							<div class="field_error" id="org_name_error"></div>
						</div>
						<div class="form-group mb-3">
							<label for="org_registration_type">Registration Type <span>*</span> : </label>
							<select class="form-control" id="org_registration_type" name="org_registration_type">
								<option value="">Select Type</option>
								<option value="Trust">Trust</option>
								<option value="Societies">Societies</option>
							</select>
							<div class="field_error" id="org_registration_type_error"></div>
						</div>
						<div class="form-group mb-3">
							<label for="org_reg_number">Organization Registration Number <span>*</span> : </label>
							<input type="text" class="form-control" id="org_reg_number" name="org_reg_number" placeholder="Enter organization registration number">
							<div class="field_error" id="org_reg_number_error"></div>
						</div>
						<div class="form-group mb-3">
							<label for="org_reg_authority">Organization Registering Authority <span>*</span> : </label>
							<input type="text" class="form-control" id="org_reg_authority" name="org_reg_authority" placeholder="Enter organization registering authority">
							<div class="field_error" id="org_reg_authority_error"></div>
						</div>
						<div class="form-group mb-3">
							<label for="org_purpose">Purpose of the Organization <span>*</span> : </label>
							<textarea class="form-control" id="org_purpose" name="org_purpose" placeholder="Enter purpose of the organization"></textarea>
							<div class="field_error" id="org_purpose_error"></div>
						</div>
						<div class="form-group mb-3">
							<label for="org_need_tapassya_help">Why need Tapassya help <span>*</span> : </label>
							<textarea class="form-control" id="org_need_tapassya_help" name="org_need_tapassya_help" placeholder="Enter why need Tapassya help"></textarea>
							<div class="field_error" id="org_need_tapassya_help_error"></div>
						</div>
						<div class="form-group mb-3">
							<label for="org_phone_no">Organization Phone Number <span>*</span> : </label>
							<input type="text" class="form-control" id="org_phone_no" name="org_phone_no" placeholder="Enter organization phone number">
							<div class="field_error" id="org_phone_no_error"></div>
						</div>
						<div class="form-group mb-3">
							<label for="org_email">Organization Email <span>*</span> : </label>
							<input type="text" class="form-control" id="org_email" name="org_email" placeholder="Enter organization email">
							<div class="field_error" id="org_email_error"></div>
						</div>
						<div class="form-group mb-3">
							<label for="org_website">Organization Website : </label>
							<input type="text" class="form-control" id="org_website" name="org_website" placeholder="Enter organization website">
							<div class="field_error" id="org_website_error"></div>
						</div>
						<div class="form-group mb-3">
							<div class="form-group row mb-4">
								<label for="org_supporting_doc" class="col-sm-3 col-form-label">Supporting Document if any <span>*</span>:</label>
								<div class="col-sm-3">
									<div class="file-field">
										<div class=" choose-btn">
											<span>Choose file</span>
											<input class="form-control" type="file" id="org_supporting_doc" name="org_supporting_doc">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group mt-3">
							<label for="org_password">Password <span>*</span> : </label>
							<input type="password" class="form-control" id="org_password" name="org_password" placeholder="Enter your password">
							<div class="field_error" id="org_password_error"></div>
						</div>

						<div class="form-group mt-3 mb-3">
							<label for="org_confirm_password">Confirm Password <span>*</span> : </label>
							<input type="password" class="form-control" id="org_confirm_password" name="org_confirm_password" placeholder="Enter your confirm password">
							<div class="field_error" id="org_confirm_password_error"></div>
						</div>
						<div class="org-sign-up" id="org-sign-up"></div>
						<button type="submit" class="btn btn-primary" name="org-reg-btn" id="org-reg-btn">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>