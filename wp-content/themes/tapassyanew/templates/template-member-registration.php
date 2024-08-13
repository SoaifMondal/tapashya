<?php 
page_only_visible("before-login");
/*Template Name: Template Member Registration*/
get_header(); ?>
<section class="inner-default-wrap mt-5 mb-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-heading">
					<h2>Registration Form - Member,Volunteer,Donor/Well-Wisher)</h2>
				</div>
				<div class="registration-form-section">
					<form action="" method="post" id="member-reg-form">
						<div class="form-group">
						    <h4>All wileds with * are mandatory</h4>
							<label for="member_name">Name <span>*</span> : </label>
							<input type="text" class="form-control" id="member_name" name="member_name" placeholder="Enter your name">
							<div class="field_error" id="member_name_error"></div>
						</div>

						<div class="form-group mt-3">
							<label for="member_email">Email <span>*</span> : </label>
							<input type="email" class="form-control" id="member_email" name="member_email" placeholder="Enter your email">
							<div class="field_error" id="member_email_error"></div>
						</div>

						<div class="form-group mt-3">
							<label for="member_phone">Phone Number <span>*</span> : </label>
							<input type="text" class="form-control" id="member_phone" name="member_phone" placeholder="Enter your phone number">
							<div class="field_error" id="member_phone_error"></div>
						</div>

						<div class="form-group mt-3">
							<label for="member_address">Address <span>*</span> : </label>
							<input type="text" class="form-control" id="member_address" name="member_address" placeholder="Enter your address">
							<small class="form-text text-muted">Current Address/ City/Country/PIN Code</small>
							<div class="field_error" id="member_address_error"></div>
						</div>

						<div class="form-group mt-3">
							<label for="member_adhaar_number">Adhaar Number : </label>
							<input type="text" class="form-control" id="member_adhaar_number" name="member_adhaar_number" placeholder="Enter your adhaar number">
							<div class="field_error" id="member_adhaar_number_error"></div>
						</div>

						<div class="form-group mt-3">
							<label for="member_pan_number">PAN Number <span>*</span> : </label>
							<input type="text" class="form-control" id="member_pan_number" name="member_pan_number" placeholder="Enter your PAN number">
							<div class="field_error" id="member_pan_number_error"></div>
						</div>

						<div class="form-group mt-3">
							<label for="relationship_status">Relationship Status with Nabadiganta Tapassya Foundation :
 "We need you as a member to serve the community" <span>*</span> : </label>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="relationship_status" id="financial-commitment" value="Member : Participation & Financial commitment (Min: 6000, Desirable: 15000 Yearly)" checked>
								<label class="form-check-label" for="financial-commitment">
								Member & Volunteer : Participation & Financial commitment (Min: 6000, Desirable: 15000 Yearly - Mainly used for General Opex)
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="relationship_status" id="financial-support-occasional" value="Well-Wishers & Volunteer : Well-Wishers & Volunteer : Guidance & Participation , Financial support occasionally">
								<label class="form-check-label" for="financial-support-occasional">
								Donor / Well-Wishers : Guidance & Participation ,Project specific financial support occasionally
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="relationship_status" id="financial-support-corporate" value="Corporate">
								<label class="form-check-label" for="financial-support-corporate">
								Corporate Partner : Engage Corporates through CSR 
								</label>
							</div>
							<div class="field_error" id="relationship-status_error"></div>
						</div>

						<div class="form-group mt-3">
							<label for="how_you_contribute">How You Want to Contribute  <span>*</span> : </label>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="how_you_contribute" id="monthly-si" value="Monthly SI" checked>
								<label class="form-check-label" for="monthly-si">
								Monthly SI
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="how_you_contribute" id="quarterly" value="Quarterly">
								<label class="form-check-label" for="quarterly">
								Quarterly
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="how_you_contribute" id="half-yearly" value="Half yearly">
								<label class="form-check-label" for="half-yearly">
								Half yearly
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="how_you_contribute" id="yearly" value="Yearly one Time">
								<label class="form-check-label" for="yearly">
								Yearly one Time
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="how_you_contribute" id="no-financial-commitment" value="No Financial Commitment">
								<label class="form-check-label" for="no-financial-commitment">
								No Financial Commitment [ Tapassya Welcomes students,retired persons as a Non-Payee Member-Volunteer]
								</label>
							</div>
							<div class="field_error" id="how-you-contribute_error"></div>
						</div>

						<div class="mt-3" id="member-welwisher">
							<div class="form-group mt-3">
								<label for="contribution_amount">Approximate Annual Contribution Amount (INR) Other than membership fees <span>*</span> : </label>
								<input type="text" class="form-control" id="contribution_amount" name="contribution_amount" placeholder="Enter Contribution Amount">
								<div class="field_error" id="contribution_amount_error"></div>
							</div>
						</div>

						<div class="mt-3" id="corporate" style="display: none;">
							<div class="form-group mt-3">
								<label for="organization_name">Name of the organization <span>*</span> : </label>
								<input type="text" class="form-control" id="organization_name" name="organization_name" placeholder="Enter Name of the organization">
								<div class="field_error" id="organization_name_error"></div>
							</div>
							<div class="form-group mt-3">
								<label for="pan_number">PAN Number : </label>
								<input type="text" class="form-control" id="pan_number" name="pan_number" placeholder="Enter PAN Number">
								<div class="field_error" id="pan_number_error"></div>
							</div>
							<div class="form-group mt-3">
								<label for="tan_number">TAN Number : </label>
								<input type="text" class="form-control" id="tan_number" name="tan_number" placeholder="Enter TAN Number">
								<div class="field_error" id="tan_number_error"></div>
							</div>
							<div class="form-group mt-3">
								<label for="organization_address">Organization Address <span>*</span> : </label>
								<input type="text" class="form-control" id="organization_address" name="organization_address" placeholder="Enter Organization Address">
								<div class="field_error" id="organization_address_error"></div>
							</div>
							<div class="form-group mt-3">
								<label for="company_profile">Profile of The Company <span>*</span> : </label>
								<textarea class="form-control" id="company_profile" name="company_profile" placeholder="Enter Profile of The Company"></textarea>
								<div class="field_error" id="company_profile_error"></div>
							</div>
							<div class="form-group mt-3">
								<label for="unit_head_name">Name of CEO/MD/ Unit Head : </label>
								<input type="text" class="form-control" id="unit_head_name" name="unit_head_name" placeholder="Enter Name of CEO/MD/ Unit Head">
								<div class="field_error" id="unit_head_name_error"></div>
							</div>
							<div class="form-group mt-3">
								<label for="csr_manager_name">Name of CSR Manager : </label>
								<input type="text" class="form-control" id="csr_manager_name" name="csr_manager_name" placeholder="Enter Name of CSR Manager">
								<div class="field_error" id="csr_manager_name_error"></div>
							</div>
							<div class="form-group mt-3">
								<label for="organization_contact">Contact Number <span>*</span> : </label>
								<input type="text" class="form-control" id="organization_contact" name="organization_contact" placeholder="Enter Contact Number">
								<div class="field_error" id="organization_contact_error"></div>
							</div>
							<div class="form-group mt-3">
								<label for="organization_contactemail">Contact Email <span>*</span> : </label>
								<input type="text" class="form-control" id="organization_contactemail" name="organization_contactemail" placeholder="Enter Contact Email">
								<div class="field_error" id="organization_contactemail_error"></div>
							</div>
						</div>

						<div class="form-group mt-3">
							<label for="interest_project_area">Get involved in any of the Social Projects (Not related with financial contribution) <span>*</span> : </label>
							<select id="interest_project_area" name="interest_project_area[]" class="form-control" multiple>
								<option value="">Select Project</option>
								<optgroup label="Tapassya Jyoti">
							      	<option value="Kishalaya VidyaNiketan">Kishalaya VidyaNiketan</option>
									<option value="Tapassya Bhaban ( Hatpara Vivek Sevaniketan )">Tapassya Bhaban ( Hatpara Vivek Sevaniketan - HVSN )</option>
									<option value="Tapassya Bhaban ( Maa Karunamoyee Ramkrishna Sevashram )">Tapassya Bhaban ( Maa Karunamoyee Ramkrishna Sevashram - MKRS )</option>
							    </optgroup>
							    <optgroup label="Aalo">
									<option value="Aalo - Higher Education Scholarship">Aalo - Higher Education Scholarship</option>
								</optgroup>
								<optgroup label="Agomoni">
									<option value="Agomoni - Annual Dress Distribution">Agomoni - Annual Dress Distribution</option>
								</optgroup>
								<optgroup label="Astha">
									<option value="Astha - Community Development">Astha - Community Development</option>
								</optgroup>
								<optgroup label="Arogya">
									<option value="Arogya - Medical Support">Arogya - Medical Support</option>
								</optgroup>
								<optgroup label="Asha">
									<option value="Asha - Disaster Relief">Asha - Disaster Relief</option>
								</optgroup>
							</select>
							<div class="field_error" id="interest_project_area_error"></div>
						</div>

						<div class="form-group mt-3">
							<label for="member_password">Password <span>*</span> : </label>
							<input type="password" class="form-control" id="member_password" name="member_password" placeholder="Enter your password">
							<div class="field_error" id="member_password_error"></div>
						</div>

						<div class="form-group mt-3 mb-3">
							<label for="member_confirm_password">Confirm Password <span>*</span> : </label>
							<input type="password" class="form-control" id="member_confirm_password" name="member_confirm_password" placeholder="Enter your confirm password">
							<div class="field_error" id="member_confirm_password_error"></div>
						</div>
						<br></br>
						<div class="member-sign-up" id="member-sign-up"></div>
						<button type="submit" class="btn btn-primary" name="member-reg-btn" id="member-reg-btn">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>