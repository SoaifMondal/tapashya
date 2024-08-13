<?php
//Template Name: self-registration-individual
get_header();
get_template_part('template-parts/bannersection');
?>


<section class="contact-form-sec self-reg-form common-padding">
    <div class="container">
        <div class="contact-form-info">
            <div class="section-title text-center pb-3">
                <h2>Beneficiary Registration</h2>
            </div>

            <div class="row form-info">
                <div class="col-xl-3 col-lg-4">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flex-donation-radio" id="ind_donation-radio-02">
                            <label class="form-check-label" for="ind_donation-radio-02">
                                NGO, Institution Registration
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flex-donation-radio" id="ind_donation-radio-03" checked="checked">
                            <label class="form-check-label" for="ind_donation-radio-03">
                                Individual Registration
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <form id="self_register" method="post" enctype="multipart/form-data">
                <?php wp_nonce_field('self_register_action', 'self_register_nonce'); ?>
                <h3>NGO, Institution Registration</h3>
                <input type="hidden" name="user_role" id="user_role" value="organization">
                <div class="row form-info">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name Of the Body / Organization*" id="org_name" name="org_name">
                            <span class="error" id="error-org_name"></span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="custom-select form-group">
                            <select class="select-box" name="reg_type" id="reg_type">
                                <option value="Name Of the Body / Organization*">Select Registration Type*</option>
                                <option value="Trust">Trust</option>
                                <option value="Societies">Societies</option>
                                <option value="Privately owned">Privately owned</option>
                            </select>
                            <span class="error" id="error-reg_type"></span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Registration Number*" id="reg_num" name="reg_num">
                            <span class="error" id="error-reg_num"></span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Registering Authority*" id="reg_auth" name="reg_auth">
                            <span class="error" id="error-reg_auth"></span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Purpose of the Organization*" id="purpose_org" name="purpose_org">
                            <span class="error" id="error-purpose_org"></span>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <textarea class="form-control donation-textarea" placeholder="Why thy need Tapassya Help*" id="why_help" name="why_help"></textarea>
                            <span class="error" id="error-why_help"></span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Phone Number*" id="phn" name="phn">
                            <span class="error" id="error-phn"></span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email Address*" id="email" name="email">
                            <span class="error" id="error-email"></span>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <textarea class="form-control donation-textarea" placeholder="Address*" id="address" name="address"></textarea>
                            <span class="error" id="error-address"></span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name of Secretory / President*" id="secretory_name" name="secretory_name">
                            <span class="error" id="error-secretory_name"></span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Contact Number*" id="secretory_cont" name="secretory_cont">
                            <span class="error" id="error-secretory_cont"></span>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <textarea class="form-control donation-textarea" placeholder="Address" id="secretory_address" name="secretory_address"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Bank Name*" id="bank_name" name="bank_name">
                            <span class="error" id="error-bank_name"></span>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="IFSC Code*" id="ifsc_code" name="ifsc_code">
                            <span class="error" id="error-ifsc_code"></span>
                        </div>           
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Branch Name*" id="branch_name" name="branch_name">
                            <span class="error" id="error-branch_name"></span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Account Number*" id="acc_no" name="acc_no">
                            <span class="error" id="error-acc_no"></span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Tapassya Member Name (Ref)*" id="member_ref" name="member_ref">
                            <span class="error" id="error-member_ref"></span>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Beneficiary Bank ID*" id="benficiary_id" name="benficiary_id">
                            <span class="error" id="error-benficiary_id"></span>
                        </div>
                    </div>


                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password*" id="password_inst" name="password_inst">
                            <span class="show_pass register_show_pass1"> <i id="eye_icon" class="eye_icon fa fa-eye" aria-hidden="true"></i></span>
                            <span class="error" id="error-password_inst"></span>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Confirm Password*" id="cnf_password_inst" name="cnf_password_inst">
                            <span class="show_pass register_show_pass2"><i id="eye_icon" class="eye_icon fa fa-eye" aria-hidden="true"></i></span>
                            <span class="error" id="error-cnf_password_inst"></span>
                        </div>
                    </div>

                </div>

                <div class="scholarship-form">
                    <div class="assistance-form pb-0">
                        <div class="form-title d-flex align-items-center mb-4">
                            <h4 class="me-2">Upload Documents </h4>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/assets/failed-icon.svg" alt="">
                        </div>
                        <div class="documents-attached documents-attached-bottom d-flex">
                            <div class="documents-item">
                                <label class="file-label" for="reg_renew">latest Registration Renewal Certificate:</label>
                                <div class="form-group">
                                    <input type="file" name="reg_renew" id="reg_renew" class="file-input-input image_file_set" />
                                    <label class="file-input-label image_file_upload" for="reg_renew"><span>Choose File</span></label>
                                </div>
                                <div class="documents-upload">
                                    <img id="profile_upload1" class="image_upload" src="" alt="Image preview" style="display:none; max-width: 200px; max-height: 200px;" />
                                </div>
                                <span class="error" id="error-reg_renew"></span>
                            </div>
                            <div class="documents-item">
                                <label class="file-label" for="pan_card">PAN Card:</label>
                                <div class="form-group">
                                    <input type="file" name="pan_card" id="pan_card" class="file-input-input image_file_set" />
                                    <label class="file-input-label image_file_upload" for="pan_card"><span>Choose File</span></label>
                                </div>
                                <span class="error" id="error-pan_card"></span>
                                <div class="documents-upload">
                                    <img id="profile_upload2" class="image_upload" src="" alt="Image preview" style="display:none; max-width: 200px; max-height: 200px;" />

                                </div>
                            </div>
                            <div class="documents-item">
                                <label class="file-label" for="app_copy">Application Copy:</label>
                                <div class="form-group">
                                    <input type="file" name="app_copy" id="app_copy" class="file-input-input image_file_set" />
                                    <label class="file-input-label image_file_upload" for="app_copy"><span>Choose File</span></label>
                                </div>
                                <div class="documents-upload">
                                    <img id="profile_upload3" class="image_upload" src="" alt="Image preview" style="display:none; max-width: 200px; max-height: 200px;" />
                                </div>
                                <span class="error" id="error-app_copy"></span>
                            </div>

                        </div>

                        <div class="form-group text-center p-0 m-0">
                            <input type="submit" value="Register Now" class="btn">
                        </div>
                    </div>

                </div>

            </form>
            <form id="registration-form">
                <div class="row form-info">
                    <h3>Individual Registration</h3>
                    <div class="col-lg-12">
                        <div class="documents-attached profile-up-ingo d-flex justify-content-center">
                            <div class="documents-item">
                                <label class="file-label" for="file-input">Upload Profile Picture *</label>
                                <div class="form-group">
                                    <input type="file" name="profile_image" class="file-input-input image_file_set" id="profile_image" accept="image/*,application/pdf" />
                                    <label class="file-input-label image_file_upload" for="profile_image"><span>Choose File</span></label>
                                    <div class="upload-image-div">
                                        <img id="profile-img_upload" class="image_upload" src="" alt="Image preview" style="display:none;" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name*" id="ind_name">
                            <span class="error" id="error-ind_name"></span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="Contact No*" id="ind_contact_no">
                            <span class="error" id="error-ind_contact_no"></span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email Address*" id="ind_email">
                            <span class="error" id="error-ind_email"></span>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <textarea class="form-control donation-textarea" placeholder="Address*" id="ind_address"></textarea>
                            <span class="error" id="error-ind_address"></span>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="date" class="form-control" placeholder="DOB*" id="ind_dob">
                            <span class="error" id="error-ind_dob"></span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="Age*" id="ind_age">
                            <span class="error" id="error-ind_age"></span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Aadhar Number*" id="ind_aadhar">
                            <span class="error" id="error-ind_aadhar"></span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Profession*" id="ind_profession">
                            <span class="error" id="error-ind_profession"></span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Highest Educational Qualification*" id="ind_education">
                            <span class="error" id="error-ind_education"></span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <textarea class="form-control donation-textarea" placeholder="Why He/She should be beneficiary*" id="ind_reason"></textarea>
                            <span class="error" id="error-ind_reason"></span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <textarea class="form-control donation-textarea" placeholder="What type of support needed*" id="ind_support"></textarea>
                            <span class="error" id="error-ind_support"></span>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="custom-select form-group">
                            <select class="select-box" name="" id="ind_father_select">
                                <option value="Father*">Father</option>
                                <option value="Mother">Mother</option>
                                <option value="Husband">Husband</option>
                                <option value="Wife">Wife</option>
                                <option value="Guardian’s Name">Guardian’s Name</option>
                            </select>
                            <span class="error" id="error-ind_father-select"></span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name*" id="ind_father_name">
                            <span class="error" id="error-ind_father-name"></span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Contact Number*" id="ind_father_contact">
                            <span class="error" id="error-ind_father-contact"></span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Relationship with the beneficiary*" id="ind_relationship">
                            <span class="error" id="error-ind_relationship"></span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Local Reference Contact Person*" id="ind_local_reference">
                            <span class="error" id="error-ind_local-reference"></span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Contact Number*" id="ind_local_contact">
                            <span class="error" id="error-ind_local-contact"></span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Tapassya Member Name (Ref)*" id="ind_tapassya_member">
                            <span class="error" id="error-ind_tapassya-member"></span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Beneficiary Bank ID*" id="ind_bank_id">
                            <span class="error" id="error-ind_bank-id"></span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password *" id="ind_password">
                            <span class="show_pass register_show_pass1"> <i id="eye_icon" class="eye_icon fa fa-eye" aria-hidden="true"></i></span>
                            <span class="error" id="error-ind_password"></span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Confirm Password *" id="ind_confirm_password">
                            <span class="show_pass register_show_pass2"><i id="eye_icon" class="eye_icon fa fa-eye" aria-hidden="true"></i></span>
                            <span class="error" id="error-ind_confirm_password"></span>
                        </div>
                    </div>
                </div>
                <div class="scholarship-form">
                    <div class="assistance-form pb-0">
                        <div class="form-title d-flex align-items-center mb-4">
                            <h4 class="me-2 mb-0">Upload Documents </h4>
                            <img src="" alt="">
                        </div>
                        <div class="documents-attached d-flex">
                            <div class="documents-item">
                                <label class="file-label" for="ind_registration-certificate">latest Registration Renewal Certificate:</label>
                                <div class="form-group">
                                    <input type="file" name="ind_registration_certificate" id="ind_registration_certificate" class="file-input-input image_file_set" />
                                    <label class="file-input-label image_file_upload" for="ind_registration_certificate"><span>Choose File</span></label>
                                    <div class="documents-upload">
                                        <img id="profileimg_upload" class="image_upload" src="" alt="Image preview" style="display:none; max-width: 200px; max-height: 200px;" />
                                    </div>
                                    <div class="icon">
                                        <span class="error" id="error-ind_registration-certificate"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="documents-item">
                                <label class="file-label" for="ind_pan-card">PAN Card:</label>
                                <div class="form-group">
                                    <input type="file" name="ind_pan_card" id="ind_pan_card" class="file-input-input image_file_set" />
                                    <label class="file-input-label image_file_upload" for="ind_pan_card"><span>Choose File</span></label>
                                    <div class="documents-upload">
                                        <img id="profile-upload" class="image_upload" src="" alt="Image preview" style="display:none; max-width: 200px; max-height: 200px;" />
                                    </div>
                                    <div class="icon">
                                        <span class="error" id="error-ind_pan-card"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="documents-item">
                                <label class="file-label" for="ind_application-copy">Application Copy:</label>
                                <div class="form-group">
                                    <input type="file" name="ind_application_copy" id="ind_application_copy" class="file-input-input image_file_set" />
                                    <label class="file-input-label image_file_upload" for="ind_application_copy"><span>Choose File</span></label>
                                    <div class="documents-upload">
                                        <img id="profile_upload" class="image_upload" src="" alt="Image preview" style="display:none; max-width: 200px; max-height: 200px;" />
                                    </div>
                                    <div class="icon">
                                        <span class="error" id="error-ind_application-copy"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php //wp_nonce_field( 'contact_form_submit', 'cform_generate_nonce' );
                        ?>
                        <input type="hidden" name="security" id="security" value="<?php echo wp_create_nonce('ajax-registration-nonce'); ?>">
                        <div class="form-group text-center p-0 m-0">
                            <button type="submit" id="submit-button" class="btn">Register Now</button>
                        </div>
                    </div>
                </div>
        </div>
        </form>

    </div>
    </div>
</section>

<script>
    jQuery(document).ready(function($) {
        $('#registration-form').submit(function(e) {
            e.preventDefault();
            $('.error').text('');

            // Define the constraints
            var constraints = {
                ind_name: {
                    presence: {
                        allowEmpty: false,
                        message: "^Name is required"
                    },
                    length: {
                        minimum: 2,
                        message: "^Name must be at least 2 characters long"
                    },
                    format: {
                        pattern: /^[A-Za-z]+$/,
                        message: "^Name must contain only alphabetic characters"
                    }
                },
                ind_contact_no: {
                    presence: {
                        allowEmpty: false,
                        message: "^Contact No is required"
                    },
                    length: {
                        minimum: 5,
                        maximum: 10,
                        message: "^Contact No must be between 5 and 10 characters long"
                    },
                    numericality: {
                        onlyInteger: true,
                        message: "^Contact No must be numeric"
                    },
                    format: {
                        pattern: /^[0-9]{5,10}$/,
                        message: "^Contact No must be a valid phone number (5 to 10 digits)"
                    }
                },

                ind_email: {
                    presence: {
                        allowEmpty: false,
                        message: "^Email is required"
                    },
                    email: {
                        message: "^must be a valid email address"
                    }
                },
                ind_address: {
                    presence: {
                        allowEmpty: false,
                        message: "^Address is required"
                    },
                    //length: { minimum: 10, message: "^must be at least 1 character long" } 
                },
                ind_dob: {
                    presence: {
                        allowEmpty: false,
                        message: "^Date of birth is required"
                    }
                },

                ind_aadhar: {
                    presence: {
                        allowEmpty: false,
                        message: "^Aadhar is required"
                    },
                    length: {
                        is: 14,
                        message: "^must be exactly 12 digits"
                    }
                },
                ind_father_contact: {
                    presence: {
                        allowEmpty: false,
                        message: "^Contact No is required"
                    },
                    length: {
                        minimum: 5,
                        maximum: 10,
                        message: "^Contact No must be between 5 and 10 characters long"
                    },
                    numericality: {
                        onlyInteger: true,
                        message: "^Contact No must be numeric"
                    },
                    format: {
                        pattern: /^[0-9]{5,10}$/,
                        message: "^Contact No must be a valid phone number (5 to 10 digits)"
                    }
                },
                ind_local_contact: {
                    presence: {
                        allowEmpty: false,
                        message: "^Contact No is required"
                    },
                    length: {
                        minimum: 5,
                        maximum: 10,
                        message: "^Contact No must be between 5 and 10 characters long"
                    },
                    numericality: {
                        onlyInteger: true,
                        message: "^Contact No must be numeric"
                    },
                    format: {
                        pattern: /^[0-9]{5,10}$/,
                        message: "^Contact No must be a valid phone number (5 to 10 digits)"
                    }
                },
                ind_relationship: {
                    presence: {
                        allowEmpty: false,
                        message: "^Relationship is required"
                    }
                },
                ind_reason: {
                    presence: {
                        allowEmpty: false,
                        message: "^Reason is required"
                    }
                },
                ind_support: {
                    presence: {
                        allowEmpty: false,
                        message: "^Support is required"
                    }
                },
                ind_password: {
                    presence: {
                        allowEmpty: false,
                        message: "^Password is required"
                    },
                    length: {
                        minimum: 6,
                        message: "^must be at least 6 characters long"
                    }
                },
                ind_confirm_password: {
                    presence: {
                        allowEmpty: false,
                        message: "^Confirm Password is required"
                    },
                    equality: "ind_password"
                },

            };

            // Get the form data
            var formData = {
                ind_name: $('#ind_name').val(),
                ind_contact_no: $('#ind_contact_no').val(),
                ind_email: $('#ind_email').val(),
                ind_address: $('#ind_address').val(),
                ind_dob: $('#ind_dob').val(),
                ind_age: $('#ind_age').val(),
                ind_aadhar: $('#ind_aadhar').val(),
                ind_profession: $('#ind_profession').val(),
                ind_education: $('#ind_education').val(),
                ind_father_select: $('#ind_father_select').val(),
                ind_father_name: $('#ind_father_name').val(),
                ind_father_contact: $('#ind_father_contact').val(),
                ind_local_reference: $('#ind_local_reference').val(),
                ind_local_contact: $('#ind_local_contact').val(),
                ind_relationship: $('#ind_relationship').val(),
                ind_reason: $('#ind_reason').val(),
                ind_support: $('#ind_support').val(),
                ind_tapassya_member: $('#ind_tapassya_member').val(),
                ind_bank_id: $('#ind_bank_id').val(),
                ind_password: $('#ind_password').val(),
                ind_confirm_password: $('#ind_confirm_password').val()
            };

            // Validate the form data
            var errors = validate(formData, constraints);

            // Clear previous error classes
            $('.error-field').removeClass('error-field');

            if (errors) {
                // Show errors and add error class
                for (var field in errors) {
                    $('#error-' + field).text(errors[field][0]);
                    $('#' + field).addClass('error-field');
                    $('#' + field).focus();
                }
            } else {

                let ajaxData = new FormData($('#registration-form')[0]);
                for (var field in formData) {
                    ajaxData.append(field, formData[field]);
                }

                ajaxData.append('action', 'custom_registration_action');
                ajaxData.append('security', $('#security').val());

                $.ajax({
                    url: ajaxurl,
                    type: 'POST',
                    data: ajaxData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.success) {
                            Swal.fire({
                                        title: "success!",
                                        text: "Form submitted successfully!",
                                        icon: "success"
                                        }).then((result) => {
                                        if (result.isConfirmed) {
                                            document.getElementById('registration-form').reset(); 
                                        }
                                    });
                        } else {
                            // Improved error handling
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: response.data || 'An unknown error occurred. Please try again.'
                            });
                        }
                    },
                    error: function(error) {
                        Swal.fire({
                            icon: 'error',
                            title: 'AJAX Error',
                            text: "An error occurred while processing your request. Please try again."
                        });
                    }
                });
            }
        });
    });
</script>
<script>
    jQuery(document).ready(function($) {
        jQuery('#ind_age').attr('readonly', true);

        jQuery('#ind_dob').on('change', function() {
            var dob = jQuery(this).val();
            console.log(dob);
            // Ensure a date is selected
            if (dob) {
                var dobDate = new Date(dob);
                var today = new Date();

                // Calculate age
                var age = today.getFullYear() - dobDate.getFullYear();
                var monthDifference = today.getMonth() - dobDate.getMonth();

                // Adjust age if the birthday hasn't occurred yet this year
                if (monthDifference < 0 || (monthDifference === 0 && today.getDate() < dobDate.getDate())) {
                    age--;
                }

                jQuery('#ind_age').val(age);
            }
        });

        function toggleForms() {
            if ($('#ind_donation-radio-02').is(':checked')) {
                $('#self_register').show();
                $('#registration-form').hide();
            } else if ($('#ind_donation-radio-03').is(':checked')) {
                $('#registration-form').show();
                $('#self_register').hide();
            }
        }

        toggleForms();
        $('input[name="flex-donation-radio"]').change(function() {
            toggleForms();
        });



        // Aadhar format
        $('#ind_aadhar').on('keyup', function() {
            let input = $(this).val().replace(/\D/g, ''); // Remove all non-digit characters
            if (input.length > 12) {
                input = input.substring(0, 12);
                Swal.fire({
                    icon: 'info',
                    title: 'Info',
                    text: 'Please enter a valid 12-digit Aadhar number.'
                });
            }

            // Format input as 1111 1111 1111
            let formattedInput = input.replace(/(\d{4})(?=\d)/g, '$1 ');
            $(this).val(formattedInput);

            // Validate length and format
            if (input.length === 12) {
                $('#error-ind_aadhar').text('');
                $(this).removeClass('error-field').addClass('success-field');
            } else {
                $('#error-ind_aadhar').text('Please enter a valid 12-digit Aadhar number.');
                $(this).removeClass('success-field').addClass('error-field');
            }
        });
    });
</script>


<script>
   jQuery(document).ready(function($) {
    jQuery('.image_file_upload').click(function() {
        const data = jQuery(this).parent().parent();
        const imageFile = data.find('.image_file_set')[0];
        const imageFileSet = data.find('.image_upload')[0].id;
        const pdfImage = "<?php echo get_template_directory_uri() . '/assets/images/pdfimg.png'; ?>";
        const studentParentsIncome = document.getElementById(imageFile.id);
        const studentParentsIncomeUpload = document.getElementById(imageFileSet);
        const uniqueId = studentParentsIncome.id + '_progress';
        const isProfileImage = studentParentsIncome.id === "profile_image"; // Check if the current input is the profile image

        studentParentsIncome.onchange = evt => {
            // Insert the HTML with the dynamically generated ID
            studentParentsIncomeUpload.insertAdjacentHTML('beforebegin',
                '<div class="progress">' +
                '<div class="progress-bar" id="' + uniqueId + '" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>' +
                '</div>'
            );
            const progress_bar = data.find('.progress-bar')[0].id;
            const progressBar = document.getElementById(progress_bar);
            let currentValue = parseInt(progressBar.getAttribute('aria-valuenow'));
            const interval = setInterval(function() {
                if (currentValue < 100) {
                    currentValue += 10;
                    progressBar.setAttribute('aria-valuenow', currentValue);
                    progressBar.style.width = currentValue + '%';
                } else {
                    clearInterval(interval);
                    const [file] = studentParentsIncome.files;

                    if (file) {
                        const allowedTypes = isProfileImage
                            ? ['image/jpeg', 'image/png'] // Allow only JPG and PNG for profile image
                            : ['application/pdf', 'image/jpeg', 'image/png']; // Allow PDF, JPG, and PNG for other files

                        const maxSizeInBytes = 5 * 1024 * 1024; // 5 MB in bytes

                        if (allowedTypes.includes(file.type)) {
                            if (file.size <= maxSizeInBytes) {
                                if (file.type === 'application/pdf' && !isProfileImage) {
                                    studentParentsIncomeUpload.src = pdfImage;
                                    studentParentsIncomeUpload.style.display = 'block';
                                } else {
                                    studentParentsIncomeUpload.src = URL.createObjectURL(file);
                                    studentParentsIncomeUpload.style.display = 'block';
                                }
                            } else {
                                Swal.fire({
                                    icon: 'info',
                                    title: 'Info',
                                    text: 'File size exceeds 5 MB. Please upload a smaller file.'
                                });
                                studentParentsIncomeUpload.style.display = 'none';
                            }
                        } else {
                            Swal.fire({
                                icon: 'info',
                                title: 'Info',
                                text: isProfileImage ? 'Invalid file type. Please upload a JPG or PNG file.' : 'Invalid file type. Please upload a PDF, JPEG, or PNG file.'
                            });
                            studentParentsIncomeUpload.style.display = 'none';
                        }
                    } else {
                        studentParentsIncomeUpload.style.display = 'none';
                    }

                    jQuery(".progress").hide();
                }
            }, 100);
        };
    });
});

</script>


<!-- //////// subhamay with validate.js-->

<script>
    jQuery(document).ready(function($) {
        // Show/Hide password functionality
        jQuery(document).ready(function($) {
            jQuery(".register_show_pass1, .register_show_pass2").on('click', function() {
                var passwordField = jQuery(this).siblings('.form-control');
                var fieldType = passwordField.attr('type');

                if (fieldType === 'password') {
                    passwordField.attr('type', 'text');

                    jQuery(this).find('.eye_icon').removeClass('fa-eye').addClass('fa-eye-slash');
                } else {

                    passwordField.attr('type', 'password');
                    jQuery(this).find('.eye_icon').removeClass('fa-eye-slash').addClass('fa-eye');
                }
            });
        });

        // Form submission and validation
        $("#self_register").submit(function(e) {
            e.preventDefault();

            var constraints = {
                org_name: {
                    presence: {
                        allowEmpty: false,
                        message: "^This field is required"
                    }
                },
                reg_type: {
                    presence: {
                        allowEmpty: false,
                        message: "^This field is required"
                    }
                },
                reg_num: {
                    presence: {
                        allowEmpty: false,
                        message: "^This field is required"
                    }
                },
                reg_auth: {
                    presence: {
                        allowEmpty: false,
                        message: "^This field is required"
                    }
                },
                purpose_org: {
                    presence: {
                        allowEmpty: false,
                        message: "^This field is required"
                    }
                },
                why_help: {
                    presence: {
                        allowEmpty: false,
                        message: "^This field is required"
                    },
                    length: {
                        maximum: 1000,
                        message: "must be less than 1000 words"
                    }
                },
                phn: {
                    presence: {
                        allowEmpty: false,
                        message: "^This field is required"
                    },
                    format: {
                        pattern: "^[0-9]{10}$",
                        message: "must be exactly 10 digits and only contain numbers"
                    }
                },
                email: {
                    presence: {
                        allowEmpty: false,
                        message: "^This field is required"
                    },
                    email: true
                },
                address: {
                    presence: {
                        allowEmpty: false,
                        message: "^This field is required"
                    }
                },
                secretory_name: {
                    presence: {
                        allowEmpty: false,
                        message: "^This field is required"
                    }
                },
                secretory_cont: {
                    presence: {
                        allowEmpty: false,
                        message: "^This field is required"
                    },
                    format: {
                        pattern: "\\d{10}",
                        message: "must be 10 digits"
                    }
                },
                // secretory_address: { presence: { allowEmpty: false, message: "^This field is required" } },
                bank_name: {
                    presence: {
                        allowEmpty: false,
                        message: "^This field is required"
                    }
                },
                ifsc_code: {
                    presence: {
                        allowEmpty: false,
                        message: "^This field is required"
                    }
                },
                branch_name: {
                    presence: {
                        allowEmpty: false,
                        message: "^This field is required"
                    }
                },
                acc_no: {
                    presence: {
                        allowEmpty: false,
                        message: "^This field is required"
                    }
                },
                member_ref: {
                    presence: {
                        allowEmpty: false,
                        message: "^This field is required"
                    }
                },
                benficiary_id: {
                    presence: {
                        allowEmpty: false,
                        message: "^This field is required"
                    }
                },
                password_inst: {
                    presence: {
                        allowEmpty: false,
                        message: "^This field is required"
                    },
                    length: {
                        minimum: 8,
                        message: "must be at least 8 characters"
                    }
                },
                cnf_password_inst: {
                    presence: {
                        allowEmpty: false,
                        message: "^This field is required"
                    },
                    equality: {
                        attribute: "password_inst",
                        message: "does not match"
                    }
                },
                reg_renew: {
                    presence: {
                        allowEmpty: false,
                        message: "^This field is required"
                    }
                },
                pan_card: {
                    presence: {
                        allowEmpty: false,
                        message: "^This field is required"
                    }
                },
                app_copy: {
                    presence: {
                        allowEmpty: false,
                        message: "^This field is required"
                    }
                }
            };

            var form = document.getElementById('self_register');
            var formValues = validate.collectFormValues(form);
            var errors = validate(formValues, constraints);

            if (errors) {
                showErrors(errors);
            } else {
                var formData = new FormData(this);
                formData.append('action', 'self_registration');

                // Disable submit button to prevent multiple submissions
                $("#self_register button[type='submit']").attr('disabled', true);

                jQuery.ajax({
                    type: "POST",
                    url: ajaxurl,
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Registration Successful!',
                            // text: response
                        });
                        document.getElementById("self_register").reset();
                        // location.reload();
                    },
                    complete: function() {
                        // Re-enable submit button after request is complete
                        $("#self_register button[type='submit']").attr('disabled', false);
                    }
                });
            }
        });

        function showErrors(errors) {
            // Clear all existing error messages
            $('.error').text('');

            for (var key in errors) {
                if (errors.hasOwnProperty(key)) {
                    var errorElement = document.getElementById('error-' + key);
                    if (errorElement) {
                        errorElement.innerText = errors[key][0];
                    } else {
                        // Show SweetAlert error for the form as a whole if no specific element
                        Swal.fire({
                            icon: 'error',
                            title: 'Validation Error',
                            // text: errors[key][0]
                        });
                    }
                }
            }
        }
    });
</script>

<?php get_footer(); ?>