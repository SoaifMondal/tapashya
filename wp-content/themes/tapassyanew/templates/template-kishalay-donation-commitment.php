<?php 
page_only_visible("before-login");
/*Template Name: Template Kishalay Donation Commitment*/
get_header(); ?>
  <section class="inner-default-wrap inner-form mt-5 mb-5">
        <div class="container">
            <form action="template-kishalay-donation.php" method="post" id="student_reg_form" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h2>Donation Commitment For Kishalay Vidyaniketan</h2>
                        </div>
                        <div class="stu-registration-form-section">                        
                            <div class="student-form">
                                    <div class="row mb-4">
                                        <div class="col-lg-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="stu_apply_for"
                                                    id="stu_scholarship" value="Scholarship" checked>
                                                <label class="form-check-label" for="stu_scholarship">
                                                    Member
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="stu_apply_for"
                                                    id="stu_career_counselling" value="Career Counselling">
                                                <label class="form-check-label" for="stu_career_counselling">
                                                    Well-wisher
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="stu_apply_for"
                                                    id="stu_career_counselling" value="Career Counselling">
                                                <label class="form-check-label" for="stu_career_counselling">
                                                    Corporate Donor
                                                </label>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="stu_name" class=" col-form-label">Name of individual Donor / Corporate <span>*</span>:</label>
                                                <input type="text" class="form-control" name="stu_name" id="stu_name">
                                                <div class="field_error" id="stu_name_error"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="stu_dob" class=" col-form-label">Month of Donation <span>*</span>:</label>
                                                <input type="date" class="form-control" name="stu_dob" id="stu_dob">
                                                <div class="field_error" id="stu_dob_error"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="stu_name" class=" col-form-label">Designated Person In case Corporate Donation :</label>
                                                <input type="text" class="form-control" name="stu_name" id="stu_name">
                                                <div class="field_error" id="stu_name_error"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="stu_email" class=" col-form-label">Email <span>*</span>:</label>
                                                <input type="text" class="form-control" name="stu_email" id="stu_email">
                                                <div class="field_error" id="stu_email_error"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="stu_contact" class=" col-form-label">contact <span>*</span>:</label>
                                                <input type="text" class="form-control" name="stu_contact" id="stu_contact">
                                                <div class="field_error" id="stu_contact_error"></div>
                                            </div>

                                        </div>
                                        <div class="col-lg-12 col-md-12 mb-4">
                                            <div class="form-group">
                                                <label for="stu_address" class=" col-form-label">Address <span>*</span>:</label>
                                                <textarea class="form-control" name="stu_address" id="stu_address" cols="20" rows="2"></textarea>
                                                <div class="field_error" id="stu_address_error"></div>
                                            </div>

                                        </div>
                                        <div class="col-lg-3 col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="stu_father_name" class="col-form-label">Ref Tapassya Member Name <span>*</span>: </label>
                                                <input type="text" class="form-control" name="stu_father_name" id="stu_father_name">
                                                <div class="field_error" id="stu_father_name_error"></div>
                                            </div>

                                        </div>

                                        <div class="col-lg-3 col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="stu_father_contact" class=" col-form-label">Committed Amount (Yly) <span>*</span>:</label>
                                                <input type="text" class="form-control" name="stu_father_contact" id="stu_father_contact">
                                                <div class="field_error" id="stu_father_contact_error"></div>
                                            </div>

                                        </div>
                                        <div class="col-lg-3 col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="stu_mother_name" class=" col-form-label">Yrs of Commitment <span>*</span>:</label>
                                                <input type="text" class="form-control" name="stu_mother_name" id="stu_mother_name">
                                                <div class="field_error" id="stu_mother_name_error"></div>
                                            </div>
                                        </div>
                            </div>
                                    
                        </div>
                    </div>
                </div>
    			<div class="form-button">
                    <div class="student-sign-up" id="student-sign-up"></div>
                 <button type="submit" name="stu_reg_btn" id="stu_reg_btn">Submit</button>
                </div>
            </form>
        </div>
    </section>
<?php get_footer(); ?>