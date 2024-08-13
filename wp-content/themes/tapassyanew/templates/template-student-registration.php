<?php 
page_only_visible("before-login");
/*Template Name: Template Student Registration*/
get_header(); ?>
  <section class="inner-default-wrap inner-form mt-5 mb-5">
        <div class="container">
            <form action="" method="post" id="student_reg_form" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h2>Students Registration</h2>
                        </div>
                        <div class="stu-registration-form-section">                        
                            <div class="student-form">
                                    <div class="row mb-4">
                <!--//sourav            <div class="col-lg-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="stu_apply_for"
                                                    id="stu_scholarship" value="Scholarship" checked>
                                                <label class="form-check-label" for="stu_scholarship">
                                                    Scholarship
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="stu_apply_for"
                                                    id="stu_career_counselling" value="Career Counselling">
                                                <label class="form-check-label" for="stu_career_counselling">
                                                    Career Counselling
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="stu_apply_for"
                                                    id="stu_both" value="Both">
                                                <label class="form-check-label" for="stu_both">
                                                    Both
                                                </label>
                                            </div>
                                        </div>              //sourav-->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="inputPassword" class="col-sm-4 col-form-label">Upload Profile Picture *:</label>
                                                <div class="col-sm-6">
                                                    <div class="file-field">
                                                        <div class=" choose-btn">
                                                          <span>Choose file</span>
                                                          <input class="form-control" type="file" name="stu_profile_picture" id="stu_profile_picture">
                                                        </div>                                                        
                                                      </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="stu_name" class=" col-form-label">Student Name <span>*</span>:</label>
                                                <input type="text" class="form-control" name="stu_name" id="stu_name">
                                                <div class="field_error" id="stu_name_error"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="stu_dob" class=" col-form-label">DOB <span>*</span>:</label>
                                                <input type="date" class="form-control" name="stu_dob" id="stu_dob">
                                                <div class="field_error" id="stu_dob_error"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="stu_age" class=" col-form-label">Age <span>*</span>:</label>
                                                <input type="text" class="form-control" name="stu_age" id="stu_age" readonly>
                                                <div class="field_error" id="stu_age_error"></div>
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
													 <input type="text" class="form-control" name="stu_address" id="stu_address">
<!--                                                 <textarea class="form-control" name="stu_address" id="stu_address" cols="30" rows="5"></textarea> -->
                                                <div class="field_error" id="stu_address_error"></div>
                                            </div>

                                        </div>
                                        <div class="col-lg-3 col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="stu_father_name" class="col-form-label">Father's Name <span>*</span>: </label>
                                                <input type="text" class="form-control" name="stu_father_name" id="stu_father_name">
                                                <div class="field_error" id="stu_father_name_error"></div>
                                            </div>

                                        </div>

                                        <div class="col-lg-3 col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="stu_father_contact" class=" col-form-label">contact <span>*</span>:</label>
                                                <input type="text" class="form-control" name="stu_father_contact" id="stu_father_contact">
                                                <div class="field_error" id="stu_father_contact_error"></div>
                                            </div>

                                        </div>
                                        <div class="col-lg-3 col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="stu_mother_name" class=" col-form-label">Mother's Name <span>*</span>:</label>
                                                <input type="text" class="form-control" name="stu_mother_name" id="stu_mother_name">
                                                <div class="field_error" id="stu_mother_name_error"></div>
                                            </div>

                                        </div>
                                        <div class="col-lg-3 col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="stu_mother_contact" class=" col-form-label">contact <span>*</span>:</label>
                                                <input type="text" class="form-control" name="stu_mother_contact" id="stu_mother_contact">
                                                <div class="field_error" id="stu_mother_contact_error"></div>
                                            </div>

                                        </div>
                                        <div class="col-lg-3 col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="stu_father_occupa" class=" col-form-label">Father's Occupation <span>*</span>:
                                                </label>
                                                <input type="text" class="form-control" name="stu_father_occupa" id="stu_father_occupa">
                                                <div class="field_error" id="stu_father_occupa_error"></div>
                                            </div>

                                        </div>

                                        <div class="col-lg-3 col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="stu_father_income" class=" col-form-label">Monthly Income <span>*</span>:</label>
                                                <input type="text" class="form-control" name="stu_father_income" id="stu_father_income">
                                                <div class="field_error" id="stu_father_income_error"></div>
                                            </div>

                                        </div>
                                        <div class="col-lg-3 col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="stu_mother_occupa" class=" col-form-label">Mother's Occupation
                                                    :</label>
                                                <input type="text" class="form-control" name="stu_mother_occupa" id="stu_mother_occupa">
                                                <div class="field_error" id="stu_mother_occupa_error"></div>
                                            </div>

                                        </div>
                                        <div class="col-lg-3 col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="stu_mother_income" class=" col-form-label">Monthly Income :</label>
                                                <input type="text" class="form-control" name="stu_mother_income" id="stu_mother_income">
                                                <div class="field_error" id="stu_mother_income_error"></div>
                                            </div>

                                        </div>
                                        <div class="col-lg-3 col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="stu_other_parent" class=" col-form-label">Guardian's Name other
                                                    than Parents</label>
                                                <input type="text" class="form-control" name="stu_other_parent" id="stu_other_parent">
                                                <div class="field_error" id="stu_other_parent_error"></div>
                                            </div>

                                        </div>

                                        <div class="col-lg-3 col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="stu_otherparent_contact" class=" col-form-label">contact :</label>
                                                <input type="text" class="form-control" name="stu_otherparent_contact" id="stu_otherparent_contact">
                                                <div class="field_error" id="stu_otherparent_contact_error"></div>
                                            </div>

                                        </div>
                                        <div class="col-lg-3 col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="stu_otherparent_relation" class=" col-form-label">Relation with Student
                                                    :</label>
                                                <input type="text" class="form-control" name="stu_otherparent_relation" id="stu_otherparent_relation">
                                                <div class="field_error" id="stu_otherparent_relation_error"></div>
                                            </div>

                                        </div>
                                        <div class="col-lg-3 col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="stu_otherparent_income" class=" col-form-label">Monthly Income :</label>
                                                <input type="text" class="form-control" name="stu_otherparent_income" id="stu_otherparent_income">
                                                <div class="field_error" id="stu_otherparent_income_error"></div>
                                            </div>

                                        </div>
                                        <div class="col-lg-12 col-md-12 mb-4">
                                            <div class="form-group">
                                                <label for="stu_otherparent_address" class=" col-form-label">Address :</label>
                                                <textarea class="form-control" name="stu_otherparent_address" id="stu_otherparent_address" cols="20" rows="2"
                                                   ></textarea>
                                                <div class="field_error" id="stu_otherparent_address_error"></div>
                                            </div>

                                        </div>
										<!--23-08-23//sourav-->
										 <div class="col-lg-12 col-md-12 mb-4">
                                            <div class="form-group">
                                                <label for="challengeFacing" class=" col-form-label">What Challanges you are facing for pursuing higher Studies<span>*</span>(200 Words only):</label>
                                                <textarea class="form-control" name="challengeFacing" id="challengeFacing" maxlength="200" cols="30" rows="5"
                                                   ></textarea>
                                                <div class="field_error" id="challengeFacing"></div>
                                            </div>

                                        </div>
                                        <!--23-08-23//sourav-->
                                        <p>Details of the Course & Institution the student is studying or will be
                                                studying :</p>
                                        <div class="col-md-12 mb-4">
                                        <div class="form-group ">
                                            <div class="row mb-3 de-list">
                                                <div class="col-lg-1 col-md-4 text-p mb-4">

                                                    <p>10</p>
                                                </div>
                                                <div class="col-lg-2 col-md-4 mb-4">
                                                    <label for="std_secondary_status" class=" col-form-label">Status</label>
                                                    <select name="std_secondary_status" id="std_secondary_status" class="form-control">
                                                        <option value="">Select Status</option>
                                                        <option value="Passed">Passed</option>
                                                        <option value="Pursuing">Pursuing</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-1 col-md-4 mb-4">
                                                    <label for="std_secondary_marks" class=" col-form-label">Marks</label>
                                                    <input type="text" class="form-control" id="std_secondary_marks" name="std_secondary_marks">
                                                </div>
                                                <div class="col-lg-1 col-md-4 mb-4">
                                                    <label for="std_secondary_parcent" class=" col-form-label">%</label>
                                                    <input type="text" class="form-control" id="std_secondary_parcent" name="std_secondary_parcent">
                                                </div>
                                                <div class="col-lg-1 col-md-4 mb-4">
                                                    <label for="std_secondary_passyear" class=" col-form-label">Year of passing</label>
                                                    <input type="text" class="form-control" id="std_secondary_passyear" name="std_secondary_passyear">
                                                </div>
                                                <div class="col-lg-2 col-md-4 mb-4">
                                                    <label for="std_secondary_subject" class=" col-form-label">Sub</label>
                                                    <input type="text" class="form-control" id="std_secondary_subject" name="std_secondary_subject">
                                                </div>
                                                <div class="col-lg-2 col-md-4 mb-4">
                                                    <label for="std_secondary_insti" class=" col-form-label">Institute Name
                                                        </label>
                                                    <input type="text" class="form-control" id="std_secondary_insti" name="std_secondary_insti">
                                                </div>
                                                <div class="col-lg-2 col-md-4 mb-4">
                                                    <label for="std_secondary_boardname" class=" col-form-label">Board / Univ Name
                                                        </label>
                                                    <input type="text" class="form-control" id="std_secondary_boardname" name="std_secondary_boardname">
                                                </div>
                                                <div class="col-lg-1 col-md-4 mb-4 text-p">

                                                    <p>10+2</p>
                                                </div>
                                                <div class="col-lg-2 col-md-4 mb-4">
                                                    <label for="std_hs_status" class=" col-form-label">Status</label>
                                                    <select name="std_hs_status" id="std_hs_status" class="form-control">
                                                        <option value="">Select Status</option>
                                                        <option value="Passed">Passed</option>
                                                        <option value="Pursuing">Pursuing</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-1 col-md-4 mb-4">
                                                    <label for="std_hs_marks" class=" col-form-label">Marks</label>
                                                    <input type="text" class="form-control" id="std_hs_marks" name="std_hs_marks">
                                                </div>
                                                <div class="col-lg-1 col-md-4 mb-4">
                                                    <label for="std_hs_parcent" class=" col-form-label">%</label>
                                                    <input type="text" class="form-control" id="std_hs_parcent" name="std_hs_parcent">
                                                </div>
                                                <div class="col-lg-1 col-md-4 mb-4">
                                                    <label for="std_hs_passyear" class=" col-form-label">Year of passing</label>
                                                    <input type="text" class="form-control" id="std_hs_passyear" name="std_hs_passyear">
                                                </div>
                                                <div class="col-lg-2 col-md-4 mb-4">
                                                    <label for="std_hs_subject" class=" col-form-label">Sub</label>
                                                    <input type="text" class="form-control" id="std_hs_subject" name="std_hs_subject">
                                                </div>
                                                <div class="col-lg-2 col-md-4 mb-4">
                                                    <label for="std_hs_insti" class=" col-form-label">Institute Name
                                                        </label>
                                                    <input type="text" class="form-control" id="std_hs_insti" name="std_hs_insti">
                                                </div>
                                                <div class="col-lg-2 col-md-4 mb-4">
                                                    <label for="std_hs_boardname" class=" col-form-label">Board / Univ Name
                                                        </label>
                                                    <input type="text" class="form-control" id="std_hs_boardname" name="std_hs_boardname">
                                                </div>

                                                <div class="col-lg-1 col-md-4 mb-4 text-p">

                                                    <p>10+2+2</p>
                                                </div>
                                                <div class="col-lg-2 col-md-4 mb-4">
                                                    <label for="std_iti_status" class=" col-form-label">Status</label>
                                                    <select name="std_iti_status" id="std_iti_status" class="form-control">
                                                        <option value="">Select Status</option>
                                                        <option value="Passed">Passed</option>
                                                        <option value="Pursuing">Pursuing</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-1 col-md-4 mb-4">
                                                    <label for="std_iti_marks" class=" col-form-label">Marks</label>
                                                    <input type="text" class="form-control" id="std_iti_marks" name="std_iti_marks">
                                                </div>
                                                <div class="col-lg-1 col-md-4 mb-4">
                                                    <label for="std_iti_parcent" class=" col-form-label">%</label>
                                                    <input type="text" class="form-control" id="std_iti_parcent" name="std_iti_parcent">
                                                </div>
                                                <div class="col-lg-1 col-md-4 mb-4">
                                                    <label for="std_iti_passyear" class=" col-form-label">Year of passing</label>
                                                    <input type="text" class="form-control" id="std_iti_passyear" name="std_iti_passyear">
                                                </div>
                                                <div class="col-lg-2 col-md-4 mb-4">
                                                    <label for="std_iti_subject" class=" col-form-label">Sub</label>
                                                    <input type="text" class="form-control" id="std_iti_subject" name="std_iti_subject">
                                                </div>
                                                <div class="col-lg-2 col-md-4 mb-4">
                                                    <label for="std_iti_insti" class=" col-form-label">Institute Name
                                                        </label>
                                                    <input type="text" class="form-control" id="std_iti_insti" name="std_iti_insti">
                                                </div>
                                                <div class="col-lg-2 col-md-4 mb-4">
                                                    <label for="std_iti_boardname" class=" col-form-label">Board / Univ Name
                                                        </label>
                                                    <input type="text" class="form-control" id="std_iti_boardname" name="std_iti_boardname">
                                                </div>
                                                <div class="col-lg-1 col-md-4 mb-4 text-p">

                                                    <p>10+2+3</p>
                                                </div>
                                                <div class="col-lg-2 col-md-4 mb-4">
                                                    <label for="std_graduation_status" class=" col-form-label">Status</label>
                                                    <select name="std_graduation_status" id="std_graduation_status" class="form-control">
                                                        <option value="">Select Status</option>
                                                        <option value="Passed">Passed</option>
                                                        <option value="Pursuing">Pursuing</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-1 col-md-4 mb-4">
                                                    <label for="std_graduation_marks" class=" col-form-label">Marks</label>
                                                    <input type="text" class="form-control" id="std_graduation_marks" name="std_graduation_marks">
                                                </div>
                                                <div class="col-lg-1 col-md-4 mb-4">
                                                    <label for="std_graduation_parcent" class=" col-form-label">%</label>
                                                    <input type="text" class="form-control" id="std_graduation_parcent" name="std_graduation_parcent">
                                                </div>
                                                <div class="col-lg-1 col-md-4 mb-4">
                                                    <label for="std_graduation_passyear" class=" col-form-label">Year of passing</label>
                                                    <input type="text" class="form-control" id="std_graduation_passyear" name="std_graduation_passyear">
                                                </div>
                                                <div class="col-lg-2 col-md-4 mb-4">
                                                    <label for="std_graduation_subject" class=" col-form-label">Sub</label>
                                                    <input type="text" class="form-control" id="std_graduation_subject" name="std_graduation_subject">
                                                </div>
                                                <div class="col-lg-2 col-md-4 mb-4">
                                                    <label for="std_graduation_insti" class=" col-form-label">Institute Name
                                                        </label>
                                                    <input type="text" class="form-control" id="std_graduation_insti" name="std_graduation_insti">
                                                </div>
                                                <div class="col-lg-2 col-md-4 mb-4">
                                                    <label for="std_graduation_boardname" class=" col-form-label">Board / Univ Name
                                                        </label>
                                                    <input type="text" class="form-control" id="std_graduation_boardname" name="std_graduation_boardname">
                                                </div>
                                                <div class="col-lg-1 col-md-4 mb-4 text-p">

                                                    <p>Masters</p>
                                                </div>
                                                <div class="col-lg-2 col-md-4 mb-4">
                                                    <label for="std_secondary_status" class=" col-form-label">Status</label>
                                                    <select name="std_master_status" id="std_master_status" class="form-control">
                                                        <option value="">Select Status</option>
                                                        <option value="Passed">Passed</option>
                                                        <option value="Pursuing">Pursuing</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-1 col-md-4 mb-4">
                                                    <label for="std_master_marks" class=" col-form-label">Marks</label>
                                                    <input type="text" class="form-control" id="std_master_marks" name="std_master_marks">
                                                </div>
                                                <div class="col-lg-1 col-md-4 mb-4">
                                                    <label for="std_master_parcent" class=" col-form-label">%</label>
                                                    <input type="text" class="form-control" id="std_master_parcent" name="std_master_parcent">
                                                </div>
                                                <div class="col-lg-1 col-md-4 mb-4">
                                                    <label for="std_master_passyear" class=" col-form-label">Year of passing</label>
                                                    <input type="text" class="form-control" id="std_master_passyear" name="std_master_passyear">
                                                </div>
                                                <div class="col-lg-2 col-md-4 mb-4">
                                                    <label for="std_master_subject" class=" col-form-label">Sub</label>
                                                    <input type="text" class="form-control" id="std_master_subject" name="std_master_subject">
                                                </div>
                                                <div class="col-lg-2 col-md-4 mb-4">
                                                    <label for="std_master_insti" class=" col-form-label">Institute Name
                                                        </label>
                                                    <input type="text" class="form-control" id="std_master_insti" name="std_master_insti">
                                                </div>
                                                <div class="col-lg-2 col-md-4 mb-4">
                                                    <label for="std_master_boardname" class=" col-form-label">Board / Univ Name
                                                        </label>
                                                    <input type="text" class="form-control" id="std_master_boardname" name="std_master_boardname">
                                                </div>
                                            </div>
                                            <div class="row">

                                            </div>

                                        </div>
                                    </div>
<!-- 										 28-08-23-->
									<div class="row mb-4">
										<p>What Assistance You except ?</p>
										<div class="col-lg-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="assistance_apply_for"
                                                    id="stu_scholarship" value="Scholarship" checked>
                                                <label class="form-check-label" for="stu_scholarship">
                                                    Financial
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="assistance_apply_for"
                                                    id="stu_career_counselling" value="Career Counselling">
                                                <label class="form-check-label" for="stu_career_counselling">
                                                    Computer or Laptop
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="assistance_apply_for"
                                                    id="stu_both" value="Both">
                                                <label class="form-check-label" for="stu_both">
                                                    Career Counselling
                                                </label>
                                            </div>
                                        </div>
									</div>
<!-- 										 28-08-23-->
                                        <div class="col-lg-3 col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="stu_course_name" class=" col-form-label">Course Name :</label>
                                                <input type="text" class="form-control" name="stu_course_name" id="stu_course_name">
                                            </div>

                                        </div>

                                        <div class="col-lg-3 col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="stu_teacher_name" class=" col-form-label">Name of Inst./HOD/Teacher :</label>
                                                <input type="text" class="form-control" name="stu_teacher_name" id="stu_teacher_name">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="stu_teacher_contact" class=" col-form-label">Contact No :</label>
                                                <input type="text" class="form-control" name="stu_teacher_contact_no" id="stu_teacher_contact_no">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="stu_teacher_contact" class=" col-form-label">Email :</label>
                                                <input type="text" class="form-control" name="stu_teacher_contact_email" id="stu_teacher_contact_email">
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-4">
                                            <div class="form-group row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label">Scholarship Requirements :</label>
                                                <div class="col-md-6">
                                                
                                                    <div class="form-group row mb-4">
                                                        <label for="inputPassword" class="col-sm-6 col-form-label">School/College/University Fees :</label>
                                                        <div class="col-sm-6">
                                                          <input type="text" class="form-control" name="stu_college_fees" id="stu_college_fees">
                                                        </div>
                                                      </div>
                                                   
                                                      <div class="form-group row mb-4">
                                                        <label for="inputPassword" class="col-sm-6 col-form-label">Private Tuition Frees :</label>
                                                        <div class="col-sm-6">
                                                          <input type="text" class="form-control" name="stu_tuition_fees" id="stu_tuition_fees">
                                                        </div>
                                                      </div>
                                                      <div class="form-group row mb-4">
                                                        <label for="inputPassword" class="col-sm-6 col-form-label">Books / Accessories :</label>
                                                        <div class="col-sm-6">
                                                          <input type="text" class="form-control" name="stu_books_fees" id="stu_books_fees">
                                                        </div>
                                                      </div>
                                                      <div class="form-group row mb-4">
                                                        <label for="inputPassword" class="col-sm-6 col-form-label">Conveyance :</label>
                                                        <div class="col-sm-6">
                                                          <input type="text" class="form-control" name="stu_conveyance_fees" id="stu_conveyance_fees">
                                                        </div>
                                                      </div>
                                                      <div class="form-group row mb-4">
                                                        <label for="inputPassword" class="col-sm-6 col-form-label">Food :</label>
                                                        <div class="col-sm-6">
                                                          <input type="text" class="form-control" name="stu_food_fees" id="stu_food_fees">
                                                        </div>
                                                      </div>
                                                      <div class="form-group row mb-4">
                                                        <label for="inputPassword" class="col-sm-6 col-form-label">Hostel / Lodging</label>
                                                        <div class="col-sm-6">
                                                          <input type="text" class="form-control" name="stu_hostel_fees" id="stu_hostel_fees">
                                                        </div>
                                                      </div>
                                                      <div class="form-group row mb-4">
                                                        <label for="inputPassword" class="col-sm-6 col-form-label">Others :</label>
                                                        <div class="col-sm-6">
                                                          <input type="text" class="form-control" name="stu_other_fees" id="stu_other_fees">
                                                        </div>
                                                      </div>
                                                </div>
                                              
                                                <div class="col-sm-3">
                                                    <div class="form-group row align-items-center mb-4">
                                                        <label for="inputPassword" class="col-sm-4 col-form-label">Frequency:</label>
                                                        <div class="col-sm-8">
                                                            <div class="form-check form-check-inline">
                                                                <label class="form-check-label" for="stu_college_mfrequency">M</label>
                                                                <input class="form-check-input" type="radio" name="stu_scholarship_college" id="stu_college_mfrequency" value="College Fees Monthly">
                                                              
                                                              </div>
                                                              <div class="form-check form-check-inline">
                                                                <label class="form-check-label" for="stu_college_qfrequency">Q</label>
                                                                <input class="form-check-input" type="radio" name="stu_scholarship_college" id="stu_college_qfrequency" value="College Fees Quaterly">
                                                              
                                                              </div>
                                                              <div class="form-check form-check-inline">
                                                                <label class="form-check-label" for="stu_college_yfrequency">Y</label>
                                                                <input class="form-check-input" type="radio" name="stu_scholarship_college" id="stu_college_yfrequency" value="College Fees Yearly">
                                                               
                                                              </div>
                                                        </div>
                                                      </div>
                                                      <div class="form-group row align-items-center mb-4">
                                                        <label for="inputPassword" class="col-sm-4 col-form-label">Frequency:</label>
                                                        <div class="col-sm-8">
                                                            <div class="form-check form-check-inline">
                                                                <label class="form-check-label" for="stu_tuition_mfrequency">M</label>
                                                                <input class="form-check-input" type="radio" name="stu_scholarship_tuition" id="stu_tuition_mfrequency" value="Tuition Fees Monthly">
                                                              
                                                              </div>
                                                              <div class="form-check form-check-inline">
                                                                <label class="form-check-label" for="stu_tuition_qfrequency">Q</label>
                                                                <input class="form-check-input" type="radio" name="stu_scholarship_tuition" id="stu_tuition_qfrequency" value="Tuition Fees Quaterly">
                                                              
                                                              </div>
                                                              <div class="form-check form-check-inline">
                                                                <label class="form-check-label" for="stu_tuition_yfrequency">Y</label>
                                                                <input class="form-check-input" type="radio" name="stu_scholarship_tuition" id="stu_tuition_yfrequency" value="Tuition Fees Yearly">
                                                               
                                                              </div>
                                                        </div>
                                                      </div>
                                                      <div class="form-group row align-items-center mb-4">
                                                        <label for="inputPassword" class="col-sm-4 col-form-label">Frequency:</label>
                                                        <div class="col-sm-8">
                                                            <div class="form-check form-check-inline">
                                                                <label class="form-check-label" for="stu_books_mfrequency">M</label>
                                                                <input class="form-check-input" type="radio" name="stu_scholarship_books" id="stu_books_mfrequency" value="Books Fees Monthly">
                                                              
                                                              </div>
                                                              <div class="form-check form-check-inline">
                                                                <label class="form-check-label" for="stu_books_qfrequency">Q</label>
                                                                <input class="form-check-input" type="radio" name="stu_scholarship_books" id="stu_books_qfrequency" value="Books Fees Quaterly">
                                                              
                                                              </div>
                                                              <div class="form-check form-check-inline">
                                                                <label class="form-check-label" for="stu_books_yfrequency">Y</label>
                                                                <input class="form-check-input" type="radio" name="stu_scholarship_books" id="stu_books_yfrequency" value="Books Fees Yearly">
                                                               
                                                              </div>
                                                        </div>
                                                      </div>
                                                      <div class="form-group row align-items-center mb-4">
                                                        <label for="inputPassword" class="col-sm-4 col-form-label">Frequency:</label>
                                                        <div class="col-sm-8">
                                                            <div class="form-check form-check-inline">
                                                                <label class="form-check-label" for="stu_conveyance_mfrequency">M</label>
                                                                <input class="form-check-input" type="radio" name="stu_scholarship_conveyance" id="stu_conveyance_mfrequency" value="Conveyance Fees Monthly">
                                                              
                                                              </div>
                                                              <div class="form-check form-check-inline">
                                                                <label class="form-check-label" for="stu_conveyance_qfrequency">Q</label>
                                                                <input class="form-check-input" type="radio" name="stu_scholarship_conveyance" id="stu_conveyance_qfrequency" value="Conveyance Fees Quaterly">
                                                              
                                                              </div>
                                                              <div class="form-check form-check-inline">
                                                                <label class="form-check-label" for="stu_conveyance_yfrequency">Y</label>
                                                                <input class="form-check-input" type="radio" name="stu_scholarship_conveyance" id="stu_conveyance_yfrequency" value="Conveyance Fees Yearly">
                                                               
                                                              </div>
                                                        </div>
                                                      </div>
                                                      <div class="form-group row align-items-center mb-4">
                                                        <label for="inputPassword" class="col-sm-4 col-form-label">Frequency:</label>
                                                        <div class="col-sm-8">
                                                            <div class="form-check form-check-inline">
                                                                <label class="form-check-label" for="stu_food_mfrequency">M</label>
                                                                <input class="form-check-input" type="radio" name="stu_scholarship_food" id="stu_food_mfrequency" value="Food Fees Monthly">
                                                              
                                                              </div>
                                                              <div class="form-check form-check-inline">
                                                                <label class="form-check-label" for="stu_food_qfrequency">Q</label>
                                                                <input class="form-check-input" type="radio" name="stu_scholarship_food" id="stu_food_qfrequency" value="Food Fees Quaterly">
                                                              
                                                              </div>
                                                              <div class="form-check form-check-inline">
                                                                <label class="form-check-label" for="stu_food_yfrequency">Y</label>
                                                                <input class="form-check-input" type="radio" name="stu_scholarship_food" id="stu_food_yfrequency" value="Food Fees Yearly">
                                                               
                                                              </div>
                                                        </div>
                                                      </div>
                                                      <div class="form-group row align-items-center mb-4">
                                                        <label for="inputPassword" class="col-sm-4 col-form-label">Frequency:</label>
                                                        <div class="col-sm-8">
                                                            <div class="form-check form-check-inline">
                                                                <label class="form-check-label" for="stu_hostel_mfrequency">M</label>
                                                                <input class="form-check-input" type="radio" name="stu_scholarship_hostel" id="stu_hostel_mfrequency" value="Hostel Fees Monthly">
                                                              
                                                              </div>
                                                              <div class="form-check form-check-inline">
                                                                <label class="form-check-label" for="stu_hostel_qfrequency">Q</label>
                                                                <input class="form-check-input" type="radio" name="stu_scholarship_hostel" id="stu_hostel_qfrequency" value="Hostel Fees Quaterly">
                                                              
                                                              </div>
                                                              <div class="form-check form-check-inline">
                                                                <label class="form-check-label" for="stu_hostel_yfrequency">Y</label>
                                                                <input class="form-check-input" type="radio" name="stu_scholarship_hostel" id="stu_hostel_yfrequency" value="Hostel Fees Yearly">
                                                               
                                                              </div>
                                                        </div>
                                                      </div>
                                                      <div class="form-group row align-items-center mb-4">
                                                        <label for="inputPassword" class="col-sm-4 col-form-label">Frequency:</label>
                                                        <div class="col-sm-8">
                                                            <div class="form-check form-check-inline">
                                                                <label class="form-check-label" for="stu_other_mfrequency">M</label>
                                                                <input class="form-check-input" type="radio" name="stu_scholarship_other" id="stu_other_mfrequency" value="Other Fees Monthly">
                                                              
                                                              </div>
                                                              <div class="form-check form-check-inline">
                                                                <label class="form-check-label" for="stu_other_qfrequency">Q</label>
                                                                <input class="form-check-input" type="radio" name="stu_scholarship_other" id="stu_other_qfrequency" value="Other Fees Quaterly">
                                                              
                                                              </div>
                                                              <div class="form-check form-check-inline">
                                                                <label class="form-check-label" for="stu_other_yfrequency">Y</label>
                                                                <input class="form-check-input" type="radio" name="stu_scholarship_other" id="stu_other_yfrequency" value="Other Fees Yearly">
                                                               
                                                              </div>
                                                        </div>
                                                      </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="stu_bank_name" class=" col-form-label">Applicant's Bank Name :</label>
                                                <input type="text" class="form-control" name="stu_bank_name" id="stu_bank_name">
                                                <div class="field_error" id="stu_bank_name_error"></div>
                                            </div>

                                        </div>
                                        <div class="col-lg-4 col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="stu_account_number" class=" col-form-label">Account No</label>
                                                <input type="text" class="form-control" name="stu_account_number" id="stu_account_number">
                                                <div class="field_error" id="stu_account_number_error"></div>
                                            </div>

                                        </div>
                                        <div class="col-lg-4 col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="stu_account_ifsc" class=" col-form-label">IFSC Code</label>
                                                <input type="text" class="form-control" name="stu_account_ifsc" id="stu_account_ifsc">
                                                <div class="field_error" id="stu_account_ifsc_error"></div>
                                            </div>

                                        </div>
                                        <div class="col-lg-4 col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="stu_other_scholarship" class=" col-form-label">Any Other Scholarhip amount :</label>
                                                <input type="text" class="form-control" name="stu_other_scholarship" id="stu_other_scholarship">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="stu_otherscholarship_auth" class=" col-form-label">Authority/ Body :</label>
                                                <input type="text" class="form-control" name="stu_otherscholarship_auth" id="stu_otherscholarship_auth">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="stu_otherscholarship_frequency" class=" col-form-label">Frequency</label>
                                                <input type="text" class="form-control" name="stu_otherscholarship_frequency" id="stu_otherscholarship_frequency">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="student_password">Password <span>*</span> : </label>
                                                <input type="password" class="form-control" id="student_password" name="student_password">
                                                <div class="field_error" id="student_password_error"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="student_confirm_password">Confirm Password <span>*</span> : </label>
                                                <input type="password" class="form-control" id="student_confirm_password" name="student_confirm_password">
                                                <div class="field_error" id="student_confirm_password_error"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-4">
                                            <div class="form-group row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label">Documents Attached :</label>
                                                <div class="col-md-5">
                                                
                                                    <div class="form-group row mb-4">
                                                        <label for="inputPassword" class="col-sm-6 col-form-label">Adhaar Card:</label>
                                                        <div class="col-sm-6">
                                                            <div class="file-field">
                                                                <div class=" choose-btn">
                                                                  <span>Choose file</span>
                                                                  <input class="form-control" type="file" name="stu_adhaar_doc" id="stu_adhaar_doc">
                                                                </div>
                                                                
                                                              </div>
                                                        </div>
                                                      </div>
                                                   
                                                     
                                                      <div class="form-group row mb-4">
                                                        <label for="inputPassword" class="col-sm-6 col-form-label">10+2 Marksheet:</label>
                                                        <div class="col-sm-6">
                                                            <div class="file-field">
                                                                <div class=" choose-btn">
                                                                  <span>Choose file</span>
                                                                  <input class="form-control" type="file" name="stu_hs_doc" id="stu_hs_doc">
                                                                </div>
                                                                
                                                              </div>
                                                        </div>
                                                      </div>
                                                      <div class="form-group row mb-4">
                                                        <label for="inputPassword" class="col-sm-6 col-form-label">Parents Income Certificate :</label>
                                                        <div class="col-sm-6">
                                                            <div class="file-field">
                                                                <div class=" choose-btn">
                                                                  <span>Choose file</span>
                                                                  <input class="form-control" type="file" name="stu_parent_income_doc" id="stu_parent_income_doc">
                                                                </div>
                                                                
                                                              </div>
                                                        </div>
                                                      </div>
                                                     
                                                     
                                                </div>
                                                <div class="col-md-5">                                           
                                                      <div class="form-group row mb-4">
                                                        <label for="inputPassword" class="col-sm-6 col-form-label">10th Marksheet :</label>
                                                        <div class="col-sm-6">
                                                            <div class="file-field">
                                                                <div class=" choose-btn">
                                                                  <span>Choose file</span>
                                                                  <input class="form-control" type="file" name="stu_secondary_doc" id="stu_secondary_doc">
                                                                </div>
                                                                
                                                              </div>
                                                        </div>
                                                      </div>
                                                     
                                                      <div class="form-group row mb-4">
                                                        <label for="inputPassword" class="col-sm-6 col-form-label">10+2+2/3 Marksheet:</label>
                                                        <div class="col-sm-6">
                                                            <div class="file-field">
                                                                <div class=" choose-btn">
                                                                  <span>Choose file</span>
                                                                  <input class="form-control" type="file" name="stu_graduation_doc" id="stu_graduation_doc">
                                                                </div>
                                                                
                                                              </div>
                                                        </div>
                                                      </div>
                                                     
                                                </div>
                                              
                                               
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="stu_terms_conditions" id="stu_terms_conditions" value="1">
                                        <label class="form-check-label" for="stu_terms_conditions">
                                            I commit that I will use the scholarship amount only for the said purpose . I will update Tapassya members about progress of my studies on regular basis . The approved scholarship amount is only for the said period and will be revised or discontinued based on my conduct ,results,regular evaluation and feedback from teachers
                                        </label>
                                        <div class="field_error" id="stu_terms_conditions_error"></div>
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