<?php
/*template name: Template Student Dashboard*/
global $current_user;
get_header(); ?>
<section class="exit-section about-section">
  <div class="container">
      <div class="section-heading">
          <h2>Welcome <?php echo $current_user->display_name; ?></h2>
          <p class="text-center mb-5"><b>Registration No. :</b> <?php echo get_user_meta($current_user->ID, 'stu_registration_number', true); ?></p>
      </div>
      <div class="row">
        <div class="col-md-12 profile-pic-wrap text-center mb-5">
            <?php echo get_avatar($current_user->ID, 200);?>
        </div>
  		<div class="col-md-4">
  			<div class="biography-wrap mb-3">
  				<h3>Biography</h3>
  				<ul>
  					<li><b>Name : </b><?php echo $current_user->display_name; ?></li>
  					<li><b>Address : </b><?php echo get_user_meta($current_user->ID, 'stu_address', true); ?></li>
  					<li><b>Phone Number : </b><?php echo get_user_meta($current_user->ID, 'stu_phone', true); ?></li>
  					<li><b>Email : </b><?php echo $current_user->user_email; ?></li>
  					<li><b>Father's Name : </b><?php echo get_user_meta($current_user->ID, 'stu_father_name', true); ?></li>
  					<li><b>Father's Contact No. : </b><?php echo get_user_meta($current_user->ID, 'stu_father_contact', true); ?></li>
  					<li><b>Mother's Name : </b><?php echo get_user_meta($current_user->ID, 'stu_mother_name', true); ?></li>
  					<li><b>Mother's Contact No. : </b><?php echo get_user_meta($current_user->ID, 'stu_mother_contact', true); ?></li>
  					<li><b>Father's Occupation : </b><?php echo get_user_meta($current_user->ID, 'stu_father_occupa', true); ?></li>
  					<li><b>Father's Income : </b><?php echo get_user_meta($current_user->ID, 'stu_father_income', true); ?></li>
  					<li><b>Mother's Occupation : </b><?php echo get_user_meta($current_user->ID, 'stu_mother_occupa', true); ?></li>
  					<li><b>Mother's Income : </b><?php echo get_user_meta($current_user->ID, 'stu_mother_income', true); ?></li>
  				</ul>
          <div class="mt-3">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateBio">Update Biography</button>

            <!-- Modal -->
            <div class="modal fade" id="updateBio" tabindex="-1" aria-labelledby="updateBioLabel" aria-hidden="true">
              <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">Update Biography</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form action="" method="post" id="student_bioupdate_form">
                      <div class="row">
                        <div class="col-lg-8 col-md-6 mb-4">
                            <div class="form-group">
                                <label for="stu_name" class=" col-form-label">Student Name <span>*</span>:</label>
                                <input type="text" class="form-control" name="stu_name" id="stu_name" value="<?php echo $current_user->display_name; ?>">
                                <div class="field_error" id="stu_name_error"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="form-group">
                                <label for="stu_contact" class=" col-form-label">contact <span>*</span>:</label>
                                <input type="text" class="form-control" name="stu_contact" id="stu_contact" value="<?php echo get_user_meta($current_user->ID, 'stu_phone', true); ?>">
                                <div class="field_error" id="stu_contact_error"></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 mb-4">
                            <div class="form-group">
                                <label for="stu_address" class=" col-form-label">Address <span>*</span>:</label>
                                <textarea class="form-control" name="stu_address" id="stu_address" cols="30" rows="5"><?php echo get_user_meta($current_user->ID, 'stu_address', true); ?></textarea>
                                <div class="field_error" id="stu_address_error"></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="form-group">
                                <label for="stu_father_name" class="col-form-label">Father's Name <span>*</span>: </label>
                                <input type="text" class="form-control" name="stu_father_name" id="stu_father_name" value="<?php echo get_user_meta($current_user->ID, 'stu_father_name', true); ?>">
                                <div class="field_error" id="stu_father_name_error"></div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="form-group">
                                <label for="stu_father_contact" class=" col-form-label">contact <span>*</span>:</label>
                                <input type="text" class="form-control" name="stu_father_contact" id="stu_father_contact" value="<?php echo get_user_meta($current_user->ID, 'stu_father_contact', true); ?>">
                                <div class="field_error" id="stu_father_contact_error"></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="form-group">
                                <label for="stu_mother_name" class=" col-form-label">Mother's Name <span>*</span>:</label>
                                <input type="text" class="form-control" name="stu_mother_name" id="stu_mother_name" value="<?php echo get_user_meta($current_user->ID, 'stu_mother_name', true); ?>">
                                <div class="field_error" id="stu_mother_name_error"></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="form-group">
                                <label for="stu_mother_contact" class=" col-form-label">contact <span>*</span>:</label>
                                <input type="text" class="form-control" name="stu_mother_contact" id="stu_mother_contact" value="<?php echo get_user_meta($current_user->ID, 'stu_mother_contact', true); ?>">
                                <div class="field_error" id="stu_mother_contact_error"></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="form-group">
                                <label for="stu_father_occupa" class=" col-form-label">Father's Occupation <span>*</span>:
                                </label>
                                <input type="text" class="form-control" name="stu_father_occupa" id="stu_father_occupa" value="<?php echo get_user_meta($current_user->ID, 'stu_father_occupa', true); ?>">
                                <div class="field_error" id="stu_father_occupa_error"></div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="form-group">
                                <label for="stu_father_income" class=" col-form-label">Monthly Income <span>*</span>:</label>
                                <input type="text" class="form-control" name="stu_father_income" id="stu_father_income" value="<?php echo get_user_meta($current_user->ID, 'stu_father_income', true); ?>">
                                <div class="field_error" id="stu_father_income_error"></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="form-group">
                                <label for="stu_mother_occupa" class=" col-form-label">Mother's Occupation
                                    :</label>
                                <input type="text" class="form-control" name="stu_mother_occupa" id="stu_mother_occupa" value="<?php echo get_user_meta($current_user->ID, 'stu_mother_occupa', true); ?>">
                                <div class="field_error" id="stu_mother_occupa_error"></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="form-group">
                                <label for="stu_mother_income" class=" col-form-label">Monthly Income :</label>
                                <input type="text" class="form-control" name="stu_mother_income" id="stu_mother_income" value="<?php echo get_user_meta($current_user->ID, 'stu_mother_income', true); ?>">
                                <div class="field_error" id="stu_mother_income_error"></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                          <input type="hidden" name="bio_student_id" id="bio_student_id" value="<?php echo $current_user->ID; ?>">
                          <div id="student-bioupdate-msg"></div>
                          <input type="submit" class="btn" id="student_bioupdate_btn" value="Update">
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
  			</div>
  		</div>
  		<div class="col-md-8">
            <div class="education-wrap">
                <h3>Education</h3>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">Std.</th>
                      <th scope="col">Status</th>
                      <th scope="col">Marks</th>
                      <th scope="col">%</th>
                      <th scope="col">Year of Passing</th>
                      <th scope="col">Subject</th>
                      <th scope="col">Institute Name</th>
                      <th scope="col">Board / Univ Name</th>
                    </tr>
                  </thead>
                  <tbody>
                        <?php if(!empty(get_user_meta($current_user->ID, 'std_secondary_status', true))){ ?>
                        <tr>
                          <th scope="row">10</th>
                          <td><?php echo get_user_meta($current_user->ID, 'std_secondary_status', true);?></td>
                          <td><?php echo get_user_meta($current_user->ID, 'std_secondary_marks', true);?></td>
                          <td><?php echo get_user_meta($current_user->ID, 'std_secondary_parcent', true);?></td>
                          <td><?php echo get_user_meta($current_user->ID, 'std_secondary_passyear', true);?></td>
                          <td><?php echo get_user_meta($current_user->ID, 'std_secondary_subject', true);?></td>
                          <td><?php echo get_user_meta($current_user->ID, 'std_secondary_insti', true);?></td>
                          <td><?php echo get_user_meta($current_user->ID, 'std_secondary_boardname', true);?></td>
                        </tr>
                        <?php }?>
                        <?php if(!empty(get_user_meta($current_user->ID, 'std_hs_status', true))){ ?>
                        <tr>
                          <th scope="row">10+2</th>
                          <td><?php echo get_user_meta($current_user->ID, 'std_hs_status', true);?></td>
                          <td><?php echo get_user_meta($current_user->ID, 'std_hs_marks', true);?></td>
                          <td><?php echo get_user_meta($current_user->ID, 'std_hs_parcent', true);?></td>
                          <td><?php echo get_user_meta($current_user->ID, 'std_hs_passyear', true);?></td>
                          <td><?php echo get_user_meta($current_user->ID, 'std_hs_subject', true);?></td>
                          <td><?php echo get_user_meta($current_user->ID, 'std_hs_insti', true);?></td>
                          <td><?php echo get_user_meta($current_user->ID, 'std_hs_boardname', true);?></td>
                        </tr>
                        <?php }?>
                        <?php if(!empty(get_user_meta($current_user->ID, 'std_iti_status', true))){ ?>
                        <tr>
                          <th scope="row">10+2+2</th>
                          <td><?php echo get_user_meta($current_user->ID, 'std_iti_status', true);?></td>
                          <td><?php echo get_user_meta($current_user->ID, 'std_iti_marks', true);?></td>
                          <td><?php echo get_user_meta($current_user->ID, 'std_iti_parcent', true);?></td>
                          <td><?php echo get_user_meta($current_user->ID, 'std_iti_passyear', true);?></td>
                          <td><?php echo get_user_meta($current_user->ID, 'std_iti_subject', true);?></td>
                          <td><?php echo get_user_meta($current_user->ID, 'std_iti_insti', true);?></td>
                          <td><?php echo get_user_meta($current_user->ID, 'std_iti_boardname', true);?></td>
                        </tr>
                        <?php }?>
                        <?php if(!empty(get_user_meta($current_user->ID, 'std_graduation_status', true))){ ?>
                        <tr>
                          <th scope="row">10+2+3</th>
                          <td><?php echo get_user_meta($current_user->ID, 'std_graduation_status', true);?></td>
                          <td><?php echo get_user_meta($current_user->ID, 'std_graduation_marks', true);?></td>
                          <td><?php echo get_user_meta($current_user->ID, 'std_graduation_parcent', true);?></td>
                          <td><?php echo get_user_meta($current_user->ID, 'std_graduation_passyear', true);?></td>
                          <td><?php echo get_user_meta($current_user->ID, 'std_graduation_subject', true);?></td>
                          <td><?php echo get_user_meta($current_user->ID, 'std_graduation_insti', true);?></td>
                          <td><?php echo get_user_meta($current_user->ID, 'std_graduation_boardname', true);?></td>
                        </tr>
                        <?php }?>
                        <?php if(!empty(get_user_meta($current_user->ID, 'std_master_status', true))){ ?>
                        <tr>
                          <th scope="row">Master</th>
                          <td><?php echo get_user_meta($current_user->ID, 'std_master_status', true);?></td>
                          <td><?php echo get_user_meta($current_user->ID, 'std_master_marks', true);?></td>
                          <td><?php echo get_user_meta($current_user->ID, 'std_master_parcent', true);?></td>
                          <td><?php echo get_user_meta($current_user->ID, 'std_master_passyear', true);?></td>
                          <td><?php echo get_user_meta($current_user->ID, 'std_master_subject', true);?></td>
                          <td><?php echo get_user_meta($current_user->ID, 'std_master_insti', true);?></td>
                          <td><?php echo get_user_meta($current_user->ID, 'std_master_boardname', true);?></td>
                        </tr>
                        <?php }?>
                  </tbody>
                </table>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateEducation">Update Education</button>
                <!-- Modal -->
                <div class="modal fade" id="updateEducation" tabindex="-1" aria-labelledby="updateEducationLabel" aria-hidden="true">
                  <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="modal-title" id="exampleModalLabel">Update Education Details</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <p>Details of the Course & Institution the student is studying or will be studying :</p>
                        <div class="row">
                          <div class="col-md-12 mb-4">
                            <form action="" method="post" id="student_edu_update">
                              <div class="form-group ">
                                <div class="row mb-3 de-list">
                                  <div class="col-lg-1 col-md-4 text-p mb-4">

                                      <p>10</p>
                                  </div>
                                  <div class="col-lg-2 col-md-4 mb-4">
                                      <label for="std_secondary_status" class=" col-form-label">Status</label>
                                      <select name="std_secondary_status" id="std_secondary_status" class="form-control">
                                          <option value="">Select Status</option>
                                          <?php
                                          $status = array('Passed');
                                          foreach($status as $sts){
                                            $sel = ($sts == get_user_meta($current_user->ID, 'std_secondary_status', true))? 'selected="selected"':'';
                                          ?>
                                            <option value="<?php echo $sts; ?>" <?php echo $sel; ?>><?php echo $sts; ?></option>
                                          <?php } ?>
                                      </select>
                                  </div>
                                  <div class="col-lg-1 col-md-4 mb-4">
                                      <label for="std_secondary_marks" class=" col-form-label">Marks</label>
                                      <input type="text" class="form-control" id="std_secondary_marks" name="std_secondary_marks" value="<?php echo get_user_meta($current_user->ID, 'std_secondary_marks', true); ?>">
                                  </div>
                                  <div class="col-lg-1 col-md-4 mb-4">
                                      <label for="std_secondary_parcent" class=" col-form-label">%</label>
                                      <input type="text" class="form-control" id="std_secondary_parcent" name="std_secondary_parcent" value="<?php echo get_user_meta($current_user->ID, 'std_secondary_parcent', true); ?>">
                                  </div>
                                  <div class="col-lg-1 col-md-4 mb-4">
                                      <label for="std_secondary_passyear" class=" col-form-label">Year of passing</label>
                                      <input type="text" class="form-control" id="std_secondary_passyear" name="std_secondary_passyear" value="<?php echo get_user_meta($current_user->ID, 'std_secondary_passyear', true); ?>">
                                  </div>
                                  <div class="col-lg-2 col-md-4 mb-4">
                                      <label for="std_secondary_subject" class=" col-form-label">Sub</label>
                                      <input type="text" class="form-control" id="std_secondary_subject" name="std_secondary_subject" value="<?php echo get_user_meta($current_user->ID, 'std_secondary_subject', true); ?>">
                                  </div>
                                  <div class="col-lg-2 col-md-4 mb-4">
                                      <label for="std_secondary_insti" class=" col-form-label">Institute Name
                                          </label>
                                      <input type="text" class="form-control" id="std_secondary_insti" name="std_secondary_insti" value="<?php echo get_user_meta($current_user->ID, 'std_secondary_insti', true); ?>">
                                  </div>
                                  <div class="col-lg-2 col-md-4 mb-4">
                                      <label for="std_secondary_boardname" class=" col-form-label">Board / Univ Name
                                          </label>
                                      <input type="text" class="form-control" id="std_secondary_boardname" name="std_secondary_boardname" value="<?php echo get_user_meta($current_user->ID, 'std_secondary_boardname', true); ?>">
                                  </div>
                                  <div class="col-lg-1 col-md-4 mb-4 text-p">

                                      <p>10+2</p>
                                  </div>
                                  <div class="col-lg-2 col-md-4 mb-4">
                                      <label for="std_hs_status" class=" col-form-label">Status</label>
                                      <select name="std_hs_status" id="std_hs_status" class="form-control">
                                          <option value="">Select Status</option>
                                          <?php
                                          $status = array('Passed');
                                          foreach($status as $sts){
                                            $sel = ($sts == get_user_meta($current_user->ID, 'std_hs_status', true))? 'selected="selected"':'';
                                          ?>
                                            <option value="<?php echo $sts; ?>" <?php echo $sel; ?>><?php echo $sts; ?></option>
                                          <?php } ?>
                                      </select>
                                  </div>
                                  <div class="col-lg-1 col-md-4 mb-4">
                                      <label for="std_hs_marks" class=" col-form-label">Marks</label>
                                      <input type="text" class="form-control" id="std_hs_marks" name="std_hs_marks" value="<?php echo get_user_meta($current_user->ID, 'std_hs_marks', true)?>">
                                  </div>
                                  <div class="col-lg-1 col-md-4 mb-4">
                                      <label for="std_hs_parcent" class=" col-form-label">%</label>
                                      <input type="text" class="form-control" id="std_hs_parcent" name="std_hs_parcent" value="<?php echo get_user_meta($current_user->ID, 'std_hs_parcent', true)?>">
                                  </div>
                                  <div class="col-lg-1 col-md-4 mb-4">
                                      <label for="std_hs_passyear" class=" col-form-label">Year of passing</label>
                                      <input type="text" class="form-control" id="std_hs_passyear" name="std_hs_passyear" value="<?php echo get_user_meta($current_user->ID, 'std_hs_passyear', true)?>">
                                  </div>
                                  <div class="col-lg-2 col-md-4 mb-4">
                                      <label for="std_hs_subject" class=" col-form-label">Sub</label>
                                      <input type="text" class="form-control" id="std_hs_subject" name="std_hs_subject" value="<?php echo get_user_meta($current_user->ID, 'std_hs_subject', true)?>">
                                  </div>
                                  <div class="col-lg-2 col-md-4 mb-4">
                                      <label for="std_hs_insti" class=" col-form-label">Institute Name
                                          </label>
                                      <input type="text" class="form-control" id="std_hs_insti" name="std_hs_insti" value="<?php echo get_user_meta($current_user->ID, 'std_hs_insti', true)?>">
                                  </div>
                                  <div class="col-lg-2 col-md-4 mb-4">
                                      <label for="std_hs_boardname" class=" col-form-label">Board / Univ Name
                                          </label>
                                      <input type="text" class="form-control" id="std_hs_boardname" name="std_hs_boardname" value="<?php echo get_user_meta($current_user->ID, 'std_hs_boardname', true)?>">
                                  </div>

                                  <div class="col-lg-1 col-md-4 mb-4 text-p">

                                      <p>10+2+2</p>
                                  </div>
                                  <div class="col-lg-2 col-md-4 mb-4">
                                      <label for="std_iti_status" class=" col-form-label">Status</label>
                                      <select name="std_iti_status" id="std_iti_status" class="form-control">
                                          <option value="">Select Status</option>
                                          <?php
                                          $status = array('Passed');
                                          foreach($status as $sts){
                                            $sel = ($sts == get_user_meta($current_user->ID, 'std_iti_status', true))? 'selected="selected"':'';
                                          ?>
                                            <option value="<?php echo $sts; ?>" <?php echo $sel; ?>><?php echo $sts; ?></option>
                                          <?php } ?>
                                      </select>
                                  </div>
                                  <div class="col-lg-1 col-md-4 mb-4">
                                      <label for="std_iti_marks" class=" col-form-label">Marks</label>
                                      <input type="text" class="form-control" id="std_iti_marks" name="std_iti_marks" value="<?php echo get_user_meta($current_user->ID, 'std_iti_marks', true)?>">
                                  </div>
                                  <div class="col-lg-1 col-md-4 mb-4">
                                      <label for="std_iti_parcent" class=" col-form-label">%</label>
                                      <input type="text" class="form-control" id="std_iti_parcent" name="std_iti_parcent" value="<?php echo get_user_meta($current_user->ID, 'std_iti_parcent', true)?>">
                                  </div>
                                  <div class="col-lg-1 col-md-4 mb-4">
                                      <label for="std_iti_passyear" class=" col-form-label">Year of passing</label>
                                      <input type="text" class="form-control" id="std_iti_passyear" name="std_iti_passyear" value="<?php echo get_user_meta($current_user->ID, 'std_iti_passyear', true)?>">
                                  </div>
                                  <div class="col-lg-2 col-md-4 mb-4">
                                      <label for="std_iti_subject" class=" col-form-label">Sub</label>
                                      <input type="text" class="form-control" id="std_iti_subject" name="std_iti_subject" value="<?php echo get_user_meta($current_user->ID, 'std_iti_subject', true)?>">
                                  </div>
                                  <div class="col-lg-2 col-md-4 mb-4">
                                      <label for="std_iti_insti" class=" col-form-label">Institute Name
                                          </label>
                                      <input type="text" class="form-control" id="std_iti_insti" name="std_iti_insti" value="<?php echo get_user_meta($current_user->ID, 'std_iti_insti', true)?>">
                                  </div>
                                  <div class="col-lg-2 col-md-4 mb-4">
                                      <label for="std_iti_boardname" class=" col-form-label">Board / Univ Name
                                          </label>
                                      <input type="text" class="form-control" id="std_iti_boardname" name="std_iti_boardname" value="<?php echo get_user_meta($current_user->ID, 'std_iti_boardname', true)?>">
                                  </div>
                                  <div class="col-lg-1 col-md-4 mb-4 text-p">

                                      <p>10+2+3</p>
                                  </div>
                                  <div class="col-lg-2 col-md-4 mb-4">
                                      <label for="std_graduation_status" class=" col-form-label">Status</label>
                                      <select name="std_graduation_status" id="std_graduation_status" class="form-control">
                                          <option value="">Select Status</option>
                                          <?php
                                          $status = array('Passed');
                                          foreach($status as $sts){
                                            $sel = ($sts == get_user_meta($current_user->ID, 'std_graduation_status', true))? 'selected="selected"':'';
                                          ?>
                                            <option value="<?php echo $sts; ?>" <?php echo $sel; ?>><?php echo $sts; ?></option>
                                          <?php } ?>
                                      </select>
                                  </div>
                                  <div class="col-lg-1 col-md-4 mb-4">
                                      <label for="std_graduation_marks" class=" col-form-label">Marks</label>
                                      <input type="text" class="form-control" id="std_graduation_marks" name="std_graduation_marks" value="<?php echo get_user_meta($current_user->ID, 'std_graduation_marks', true); ?>">
                                  </div>
                                  <div class="col-lg-1 col-md-4 mb-4">
                                      <label for="std_graduation_parcent" class=" col-form-label">%</label>
                                      <input type="text" class="form-control" id="std_graduation_parcent" name="std_graduation_parcent" value="<?php echo get_user_meta($current_user->ID, 'std_graduation_parcent', true); ?>">
                                  </div>
                                  <div class="col-lg-1 col-md-4 mb-4">
                                      <label for="std_graduation_passyear" class=" col-form-label">Year of passing</label>
                                      <input type="text" class="form-control" id="std_graduation_passyear" name="std_graduation_passyear" value="<?php echo get_user_meta($current_user->ID, 'std_graduation_passyear', true); ?>">
                                  </div>
                                  <div class="col-lg-2 col-md-4 mb-4">
                                      <label for="std_graduation_subject" class=" col-form-label">Sub</label>
                                      <input type="text" class="form-control" id="std_graduation_subject" name="std_graduation_subject" value="<?php echo get_user_meta($current_user->ID, 'std_graduation_subject', true); ?>">
                                  </div>
                                  <div class="col-lg-2 col-md-4 mb-4">
                                      <label for="std_graduation_insti" class=" col-form-label">Institute Name
                                          </label>
                                      <input type="text" class="form-control" id="std_graduation_insti" name="std_graduation_insti" value="<?php echo get_user_meta($current_user->ID, 'std_graduation_insti', true); ?>">
                                  </div>
                                  <div class="col-lg-2 col-md-4 mb-4">
                                      <label for="std_graduation_boardname" class=" col-form-label">Board / Univ Name
                                          </label>
                                      <input type="text" class="form-control" id="std_graduation_boardname" name="std_graduation_boardname" value="<?php echo get_user_meta($current_user->ID, 'std_graduation_boardname', true); ?>">
                                  </div>
                                  <div class="col-lg-1 col-md-4 mb-4 text-p">

                                      <p>Masters</p>
                                  </div>
                                  <div class="col-lg-2 col-md-4 mb-4">
                                      <label for="std_secondary_status" class=" col-form-label">Status</label>
                                      <select name="std_master_status" id="std_master_status" class="form-control">
                                          <option value="">Select Status</option>
                                          <?php
                                          $status = array('Passed');
                                          foreach($status as $sts){
                                            $sel = ($sts == get_user_meta($current_user->ID, 'std_master_status', true))? 'selected="selected"':'';
                                          ?>
                                            <option value="<?php echo $sts; ?>" <?php echo $sel; ?>><?php echo $sts; ?></option>
                                          <?php } ?>
                                      </select>
                                  </div>
                                  <div class="col-lg-1 col-md-4 mb-4">
                                      <label for="std_master_marks" class=" col-form-label">Marks</label>
                                      <input type="text" class="form-control" id="std_master_marks" name="std_master_marks" value="<?php echo get_user_meta($current_user->ID, 'std_master_marks', true); ?>">
                                  </div>
                                  <div class="col-lg-1 col-md-4 mb-4">
                                      <label for="std_master_parcent" class=" col-form-label">%</label>
                                      <input type="text" class="form-control" id="std_master_parcent" name="std_master_parcent" value="<?php echo get_user_meta($current_user->ID, 'std_master_parcent', true); ?>">
                                  </div>
                                  <div class="col-lg-1 col-md-4 mb-4">
                                      <label for="std_master_passyear" class=" col-form-label">Year of passing</label>
                                      <input type="text" class="form-control" id="std_master_passyear" name="std_master_passyear" value="<?php echo get_user_meta($current_user->ID, 'std_master_passyear', true); ?>">
                                  </div>
                                  <div class="col-lg-2 col-md-4 mb-4">
                                      <label for="std_master_subject" class=" col-form-label">Sub</label>
                                      <input type="text" class="form-control" id="std_master_subject" name="std_master_subject" value="<?php echo get_user_meta($current_user->ID, 'std_master_subject', true); ?>">
                                  </div>
                                  <div class="col-lg-2 col-md-4 mb-4">
                                      <label for="std_master_insti" class=" col-form-label">Institute Name
                                          </label>
                                      <input type="text" class="form-control" id="std_master_insti" name="std_master_insti" value="<?php echo get_user_meta($current_user->ID, 'std_master_insti', true); ?>">
                                  </div>
                                  <div class="col-lg-2 col-md-4 mb-4">
                                      <label for="std_master_boardname" class=" col-form-label">Board / Univ Name
                                          </label>
                                      <input type="text" class="form-control" id="std_master_boardname" name="std_master_boardname" value="<?php echo get_user_meta($current_user->ID, 'std_master_boardname', true); ?>">
                                  </div>
                              </div>
                              <input type="hidden" name="student_id" id="student_id" value="<?php echo $current_user->ID; ?>">
                              <div id="student-update-msg"></div>
                              <input type="submit" class="btn" id="student_edu_update_btn" value="Update">
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
  		</div>
      </div>
      <div class="row mt-5">
        <div class="col-md-6">
            <h3>Approved Scholarship Amount: <?php echo get_user_meta($current_user->ID, 'approved_total_scholarship_amount', true); ?>/-</h3>
        </div>
        <div class="col-md-6">
            <h3>Frequency: <?php echo get_user_meta($current_user->ID, 'approved_total_scholarship_frequency', true); ?></h3>
        </div>
      </div>
      <div class="row mt-5">
      	<div class="col-md-8">
      		<h3>Raise Scholarship Request :</h3>
      		<form action="" method="post" id="raise-request-form" enctype="multipart/form-data">
				<div class="form-group">
					<label for="request_for_payment">Request Type <span>*</span> : </label>
					<select class="form-control" id="request_for_payment" name="request_for_payment">
						<option value="">Select Request</option>
						<option value="School/College/University Fees">School/College/University Fees</option>
						<option value="Private Tuition Frees">Private Tuition Fees</option>
						<option value="Exam Frees">Exam Fees</option>
						<option value="Books / Accessories">Books / Accessories</option>
						<option value="Conveyance">Conveyance</option>
						<option value="Food">Food</option>
						<option value="Hostel / Lodging">Hostel / Lodging</option>
						<option value="Mobile Recharge">Mobile Recharge</option>
						<
					</select>
					<div class="field_error" id="request_for_payment_error"></div>
				</div>
				<div class="form-group mt-3 mb-3">
					<label for="scholar_amount">Amount <span>*</span> : </label>
					<input type="text" class="form-control" id="scholar_amount" name="scholar_amount" placeholder="Enter scholarship amount">
					<div class="field_error" id="scholar_amount_error"></div>
				</div>
                <div class="form-group mt-3 mb-3">
                    <label for="request_description">Request Description <span>*</span> : </label>
                    <textarea class="form-control" id="request_description" name="request_description" placeholder="Enter request description"></textarea>
                    <div class="field_error" id="request_description_error"></div>
                </div>
				<div class="form-group row mt-3 mb-3">
	                <label for="scholar_requestraise_bill" class="col-sm-4 col-form-label">Upload Receipt/Bill Copy <span>*</span> :</label>
                    <div class="file-field col-sm-4">
                        <div class=" choose-btn">
                          <span>Choose file</span>
                          <input class="form-control" type="file" name="scholar_requestraise_bill" id="scholar_requestraise_bill">
                        </div>	                        
                    </div>
	            </div>
				<div class="raise-request" id="raise-request"></div>
				<button type="submit" class="btn btn-primary" name="raise-request-btn" id="raise-request-btn">Submit</button>
			</form>
      	</div>
      	<div class="col-md-4">
      		<h3>Confirmation of Request Received/Served</h3>
      		<form action="" method="post" id="confirm-request-form">
				<div class="form-group">
					<label for="scholar_confirmed_amount">Amount Received<span>*</span> : </label>
					<input type="text" class="form-control" id="scholar_confirmed_amount" name="scholar_confirmed_amount" placeholder="Enter scholarship amount">
					<div class="field_error" id="scholar_confirmed_amount_error"></div>
				</div>
                <div class="form-group mt-3">
                    <label for="request_for_payment">Select your request <span>*</span> : </label>
                    <select class="form-control" id="confirmed_for_payment" name="confirmed_for_payment">
                        <option value="">Select Requested Scholarship</option>
                        <?php 
                        $args = array(
                            'post_type'     => 'scholar_request',
                            'posts_per_page'=> -1,
                            'meta_key'     => 'scholar_user_id',
                            'meta_value'   => $current_user->ID,
                            'meta_compare' => '='
                        );
                        query_posts($args);
                        if(have_posts()): while(have_posts()): the_post();
                        ?>
                            <option value="<?php echo get_the_ID(); ?>"><?php echo get_post_meta(get_the_ID(), 'request_for_payment', true );?> ( Status: <?php echo get_post_meta(get_the_ID(), 'approved_status', true ); ?> | Amt.: <?php echo get_post_meta(get_the_ID(), 'approved_amount', true ); ?> )</option>
                        <?php endwhile;
                        wp_reset_query();
                        endif; ?>
                    </select>
                    <div class="field_error" id="confirmed_for_payment_error"></div>
                </div>
				<div class="form-group mt-3 mb-3">
	                <label for="scholar_confirmed_bill" class="col-form-label">Upload Receipt/Bill Copy:</label>
                    <div class="file-field">
                        <div class=" choose-btn">
                          <span>Choose file</span>
                          <input class="form-control" type="file" name="scholar_confirmed_bill" id="scholar_confirmed_bill">
                        </div>	                        
                    </div>
	            </div>
				<div class="confirm-request" id="confirm-request"></div>
				<button type="submit" class="btn btn-primary" name="confirm-request-btn" id="confirm-request-btn">Submit</button>
			</form>
      	</div>

        <div class="col-md-12 mt-5">
            <?php 
            $args = array(
                'post_type' => 'scholar_request',
                'orderby'   => 'date',
                'order'     => 'DESC',
                'posts_per_page' => 20,
                'posts_status'  => 'publish',
                'meta_key'     => 'scholar_user_id',
                'meta_value'   => $current_user->ID,
                'meta_compare' => '='
            );
            query_posts($args);
            if(have_posts()):
            ?>
            <h3>Your Requests</h3>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">Request No.</th>
                  <th scope="col">Student Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Phone Number</th>
                  <th scope="col">Request For</th>
                  <th scope="col">Request Amount</th>
                  <th scope="col">Request Date</th>
                  <th scope="col">Approved Date</th>
                  <th scope="col">Approved Status</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                while(have_posts()): the_post();
                    $user_id = get_post_meta(get_the_ID(), 'scholar_user_id', true);
                    $user = get_user_by( 'ID', $user_id );
                    if(get_post_meta(get_the_ID(), 'approved_status', true) == 'Approved'){
                        $color = '#0f5411';
                    }else if(get_post_meta(get_the_ID(), 'approved_status', true) == 'Pending'){
                        $color = '#d6d934';
                    }else if(get_post_meta(get_the_ID(), 'approved_status', true) == 'Deny'){
                        $color = '#f00';
                    }
                ?>
                    <tr>
                      <th scope="row"><?php echo get_post_meta(get_the_ID(), 'scholar_request_number', true); ?></th>
                      <td><?php echo $user->display_name; ?></td>
                      <td><?php echo $user->user_email; ?></td>
                      <td><?php echo get_user_meta($user_id, 'stu_phone', true); ?></td>
                      <td><?php echo get_post_meta(get_the_ID(), 'request_for_payment', true); ?></td>
                      <td><?php echo get_post_meta(get_the_ID(), 'scholar_amount', true); ?></td>
                      <td><?php the_time('d-m-Y'); ?></td>
                      <td><?php echo get_post_meta(get_the_ID(), 'approved_date', true); ?></td>
                      <td style="color: <?php echo $color; ?>;"><?php echo get_post_meta(get_the_ID(), 'approved_status', true); ?> Amt.:<?php echo get_post_meta(get_the_ID(), 'approved_amount', true); ?></td>
                    </tr>
                <?php endwhile; ?>
              </tbody>
            </table>
            <div class="pagination-wrap text-right"><?php show_pagination(); ?></div> 
            <?php wp_reset_query();
                endif; 
            ?>
        </div>
      </div>
  </div>
</section>
<?php get_footer(); ?>