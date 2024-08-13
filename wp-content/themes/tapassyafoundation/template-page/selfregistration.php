<?php
//Template name:Self Registration
get_header();
?>


<!-- Banner Section -->
<?php echo get_template_part('template-parts/bannersection') ?>
<!-- Banner Section -->

<section class="contact-form-sec self-reg-form common-padding">
    <div class="container">
        <div class="contact-form-info">
            <div class="section-title text-center pb-3">
                <?php the_content(); ?>
            </div>
            <div class="row form-info">
                <div class="col-lg-3">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flex-donation-radio" id="donation-radio-1" value="organization" checked>
                            <label class="form-check-label" for="donation-radio-1">
                                NGO, Institution Registration
                            </label>
                        </div>
                    </div>
                </div>

                <!-- hidden field -->

                <div class="col-lg-3">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flex-donation-radio" id="donation-radio-01">
                            <label class="form-check-label" for="donation-radio-01">
                                Individual Registration
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <form id="self_register" method="post" enctype="multipart/form-data">

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
                        <div class="bank-details d-flex align-items-center">
                            <div class="form-group mb-0">
                                <input type="text" class="form-control" placeholder="Bank Name*" id="bank_name" name="bank_name">
                                <span class="error" id="error-bank_name"></span>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="bank-details d-flex align-items-center">
                            <div class="form-group mb-0">
                                <input type="text" class="form-control" placeholder="IFSC Code*" id="ifsc_code" name="ifsc_code">
                                <span class="error" id="error-ifsc_code"></span>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="bank-details d-flex align-items-center">
                            <div class="form-group mb-0">
                                <input type="text" class="form-control" placeholder="Branch Name*" id="branch_name" name="branch_name">
                                <span class="error" id="error-branch_name"></span>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="bank-details d-flex align-items-center">
                            <div class="form-group mb-0">
                                <input type="text" class="form-control" placeholder="Account Number*" id="acc_no" name="acc_no">
                                <span class="error" id="error-acc_no"></span>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="bank-details d-flex align-items-center">
                            <div class="form-group mb-0">
                                <input type="text" class="form-control" placeholder="Tapassya Member Name (Ref)*" id="member_ref" name="member_ref">
                                <span class="error" id="error-member_ref"></span>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="bank-details d-flex align-items-center">
                            <div class="form-group mb-0">
                                <input type="text" class="form-control" placeholder="Beneficiary Bank ID*" id="benficiary_id" name="benficiary_id">
                                <span class="error" id="error-benficiary_id"></span>
                            </div>

                        </div>
                    </div>


                    <div class="col-lg-6">
                        <div class="bank-details d-flex align-items-center">
                            <div class="form-group mb-0">
                                <div class="password-wrap position-relative">
                                    <input type="password" class="form-control" placeholder="Password*" id="password_inst" name="password_inst">
                                    <span class="show_pass register_show_pass1"> <i id="eye_icon" class="eye_icon fa fa-eye" aria-hidden="true"></i></span>
                                    <span class="error" id="error-password_inst"></span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="bank-details d-flex align-items-center">
                            <div class="form-group mb-0">
                                <div class="password-wrap position-relative">
                                    <input type="password" class="form-control" placeholder="Confirm Password*" id="cnf_password_inst" name="cnf_password_inst">
                                    <span class="show_pass register_show_pass2"><i id="eye_icon" class="eye_icon fa fa-eye" aria-hidden="true"></i></span>
                                </div>
                                <span class="error" id="error-cnf_password_inst"></span>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="scholarship-form">
                    <div class="assistance-form pb-0">
                        <div class="form-title d-flex align-items-center mb-4">
                            <h4 class="me-2 mb-0">Upload Documents </h4>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/assets/failed-icon.svg" alt="">
                        </div>
                        <div class="documents-attached d-flex">
                            <div class="documents-item">
                                <label class="file-label" for="reg_renew">latest Registration Renewal Certificate:</label>
                                <div class="form-group">
                                    <input type="file" name="reg_renew" id="reg_renew" class="file-input-input" />
                                    <label class="file-input-label" for="reg_renew"><span>Choose File</span></label>
                                </div>
                                <span class="error" id="error-reg_renew"></span>
                            </div>
                            <div class="documents-item">
                                <label class="file-label" for="pan_card">PAN Card:</label>
                                <div class="form-group">
                                    <input type="file" name="pan_card" id="pan_card" class="file-input-input" />
                                    <label class="file-input-label" for="pan_card"><span>Choose File</span></label>
                                </div>
                                <span class="error" id="error-pan_card"></span>
                            </div>
                            <div class="documents-item">
                                <label class="file-label" for="app_copy">Application Copy:</label>
                                <div class="form-group">
                                    <input type="file" name="app_copy" id="app_copy" class="file-input-input" />
                                    <label class="file-input-label" for="app_copy"><span>Choose File</span></label>
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
        </div>
    </div>
</section>


<!-- //////// with validate.js-->

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
                org_name: { presence: { allowEmpty: false, message: "^This field is required" } },
                reg_type: { presence: { allowEmpty: false, message: "^This field is required" } },
                reg_num: { presence: { allowEmpty: false, message: "^This field is required" } },
                reg_auth: { presence: { allowEmpty: false, message: "^This field is required" } },
                purpose_org: { presence: { allowEmpty: false, message: "^This field is required" } },
                why_help: { 
                    presence: { allowEmpty: false, message: "^This field is required" },
                    length: {
                        maximum: 1000,
                        message: "must be less than 1000 words"
                    }
                },
                phn: { presence: { allowEmpty: false, message: "^This field is required" }, format: { pattern: "^[0-9]{10}$", message: "must be exactly 10 digits and only contain numbers" } },
                email: { presence: { allowEmpty: false, message: "^This field is required" }, email: true },
                address: { presence: { allowEmpty: false, message: "^This field is required" } },
                secretory_name: { presence: { allowEmpty: false, message: "^This field is required" } },
                secretory_cont: { presence: { allowEmpty: false, message: "^This field is required" }, format: { pattern: "\\d{10}", message: "must be 10 digits" } },
                secretory_address: { presence: { allowEmpty: false, message: "^This field is required" } },
                bank_name: { presence: { allowEmpty: false, message: "^This field is required" } },
                ifsc_code: { presence: { allowEmpty: false, message: "^This field is required" } },
                branch_name: { presence: { allowEmpty: false, message: "^This field is required" } },
                acc_no: { presence: { allowEmpty: false, message: "^This field is required" } },
                member_ref: { presence: { allowEmpty: false, message: "^This field is required" } },
                benficiary_id: { presence: { allowEmpty: false, message: "^This field is required" } },
                password_inst: { presence: { allowEmpty: false, message: "^This field is required" }, length: { minimum: 8, message: "must be at least 8 characters" }},
                cnf_password_inst: { presence: { allowEmpty: false, message: "^This field is required" }, equality: { attribute: "password_inst", message: "does not match" } },
                reg_renew: { presence: { allowEmpty: false, message: "^This field is required" } },
                pan_card: { presence: { allowEmpty: false, message: "^This field is required" } },
                app_copy: { presence: { allowEmpty: false, message: "^This field is required" } }
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




<!-- ************************ without validate.js ************************-->
<!-- <script>
    // Show/Hide password functionality
    jQuery(document).ready(function($) {
        jQuery(".register_show_pass1, .register_show_pass2").on('click', function() {
            var passwordField = jQuery(this).siblings('.form-control');
            var fieldType = passwordField.attr('type');

            if (fieldType === 'password') {
                passwordField.attr('type', 'text');

                jQuery(this).find('#svg').removeClass('fa-eye').addClass('fa-eye-slash');
            } else {
                
                passwordField.attr('type', 'password');
                jQuery(this).find('#svg').removeClass('fa-eye-slash').addClass('fa-eye');
            }
        });
    });

    //Form submit
    jQuery("#self_register").submit(function(e) {
        e.preventDefault();

        // Clear previous error messages
        jQuery('.error').text('');

        // Form validation
        let isValid = true;

        let fields = [
            'org_name', 'reg_num', 'reg_type', 'reg_auth', 'purpose_org', 'why_help', 'email',
            'address', 'secretory_address', 'bank_name', 'phn', 'secretory_cont',
            'ifsc_code', 'branch_name', 'acc_no', 'member_ref', 'benficiary_id', 'password_inst',
            'cnf_password_inst', 'reg_renew', 'pan_card', 'app_copy'
        ];


        fields.forEach(function(field) {
            if (jQuery('#' + field).val() === '') {
                isValid = false;
                jQuery('#error-' + field).text('This field is required').css('color', 'red');
            }
        });


        // Validate 'secretory_name'

        let secretory_name = jQuery('#secretory_name').val();
        let namePattern = /^[A-Za-z\s\-]+$/;
        if (secretory_name === '') {
            isValid = false;
            jQuery('#error-secretory_name').text('This field is required').css('color', 'red');
        } else if (secretory_name.length > 100) {
            isValid = false;
            jQuery('#error-secretory_name').text('Name cannot exceed 100 characters').css('color', 'red');
        } else if (!namePattern.test(secretory_name)) {
            isValid = false;
            jQuery('#error-secretory_name').text('Please enter valid name').css('color', 'red');
        }


        //Password check

        let password_inst = jQuery('#password_inst').val();
        let cnf_password_inst = jQuery('#cnf_password_inst').val();

        const passwordPattern = /^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

        if (password_inst === '') {
            isValid = false;
            jQuery('#error-password_inst').text('This field is required').css('color', 'red');
        } else if (!passwordPattern.test(password_inst)) {
            isValid = false;
            jQuery('#error-password_inst').text('Password must be at least 8 characters, include one uppercase letter, one number, and one special character').css('color', 'red');
        }

        if (cnf_password_inst === '') {
            isValid = false;
            jQuery('#error-cnf_password_inst').text('This field is required').css('color', 'red');
        } else if (!passwordPattern.test(cnf_password_inst)) {
            isValid = false;
            jQuery('#error-cnf_password_inst').text('Password must be at least 8 characters, include one uppercase letter, one number, and one special character').css('color', 'red');
        }

        if (password_inst !== '' && cnf_password_inst !== '' && password_inst !== cnf_password_inst) {
            isValid = false;
            jQuery('#error-password_inst').text('Passwords do not match').css('color', 'red');
            jQuery('#error-cnf_password_inst').text('Passwords do not match').css('color', 'red');
        }


        // Validate phone numbers

        let numberFields = ['phn', 'secretory_cont'];
        numberFields.forEach(function(field) {
            if (jQuery('#' + field).val() !== '' && isNaN(jQuery('#' + field).val())) {
                isValid = false;
                jQuery('#error-' + field).text('Number only').css('color', 'red');
            }
        });



        // Validate 'why_help' character limit
        let why_help = jQuery('#why_help').val();
        if (why_help.length > 1000) {
            isValid = false;
            jQuery('#error-why_help').text('This field cannot exceed 1000 characters').css('color', 'red');
        }

        // Validate email
        let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        let email = jQuery('#email').val();

        if (!emailPattern.test(email)) {
            isValid = false;
            jQuery('#error-email').text('Invalid email address').css('color', 'red');
        }

        // Validate file inputs


        // Validate file inputs
        let fileFields = ['reg_renew', 'pan_card', 'app_copy'];
        fileFields.forEach(function(field) {
            let fileInput = jQuery('#' + field).get(0);
            if (fileInput.files.length === 0) {
                isValid = false;
                jQuery('#error-' + field).text('This field is required').css('color', 'red');
            } else {
                let file = fileInput.files[0];
                let ext = file.name.split('.').pop().toLowerCase();
                if (ext !== 'jpg' && ext !== 'pdf') {
                    isValid = false;
                    jQuery('#error-' + field).text('Please upload jpg or pdf files only').css('color', 'red');
                } else {
                    jQuery('#error-' + field).text(file.name).css('color', 'green');
                }
            }
        });


        // let fileFields = ['reg_renew', 'pan_card', 'app_copy'];
        // fileFields.forEach(function(field) {
        //     if (jQuery('#' + field).get(0).files.length === 0) {
        //         isValid = false;
        //         jQuery('#error-' + field).text('This field is required').css('color', 'red');;
        //     }
        // });






        if (isValid) {
            //*AJAX request *
            var formData = new FormData(this);
            formData.append('action', 'self_registration');

            jQuery.ajax({
                type: "POST",
                url: ajaxurl,
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    var data = JSON.parse(response);
                    if (data.status === "success") {
                        // alert("Registration successful!");
                        Swal.fire({
                            icon: 'success',
                            title: 'Registration Successful!',
                        });
                        document.getElementById("self_register").reset();
                    } else {
                        // alert("Error: " + data.message);
                        // alert("Error");
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                        });
                    }
                },
                error: function() {
                    // alert("An error occurred during registration. Please try again.");
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'An error occurred during registration. Please try again.'
                    });
                }
            });
        }
    });
</script> -->


<?php get_footer(); ?>