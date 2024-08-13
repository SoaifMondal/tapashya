<?php
//Template name: Edit Profile
get_header();

$current_user = wp_get_current_user();
$id = $current_user->ID;
$user_name = $current_user->display_name;
$user_email = $current_user->user_email;
$phone_number = get_user_meta($id, 'phone_number', true);
$address = get_user_meta($id, 'address', true);
$reference_member_name = get_user_meta($id, 'reference_member_name', true);
$why_want_to_join = get_user_meta($id, 'why_want_to_join', true);
$adhaar_number = get_user_meta($id, 'adhaar_number', true);
$pan_number = get_user_meta($id, 'pan_number', true);
$tapssya_whatsapp_group_no = get_user_meta($id, 'tapssya_whatsapp_group_no', true);
$annual_contribution_amount = get_user_meta($id, 'annual_contribution_amount', true);
$contribution_type = get_user_meta($id, 'contribution_type', true);
$involve_social_project = get_user_meta($id, 'involve_social_project', true);

?>
<!-- Member Banner Section -->
<?php echo get_template_part('template-parts/members/memberbanner'); ?>

<section class="dashboard-sec common-padding">
    <div class="container">
        <!-- volunteer part -->
        <?php echo get_template_part('template-parts/members/volunteer'); ?>

        <div class="dashboard-main-wrap d-flex justify-content-between">
            <!-- Member menu side bar -->
            <?php echo get_sidebar('membermenu'); ?>

            <div class="dashboard-desc">
                <div class="dashboard-desc-main">
                    <div class="board-title">
                        <h3><span class="left-arrow me-2"><a href="<?php echo site_url('/my-profile'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/left-arrow.svg" alt=""></a></span>Edit Profile</h3>
                    </div>
                    <div class="dashboard-home-desc">
                        <div class="dashboard-home-details">
                            <form method="post" id="edit_form" enctype="multipart/form-data">
                                <div class="row form-info">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name" value="<?php echo $user_name; ?>" id="edit_username" name="edit_username">
                                            <span class="error" id="error-edit_username"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email" value="<?php echo $user_email; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input type="number" class="form-control" placeholder="Phone number" value="<?php echo $phone_number; ?>" id="edit_phone" name="edit_phone">
                                            <span class="error" id="error-edit_phone"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea class="form-control donation-textarea" placeholder="Address" value="" id="edit_address" name="edit_address"><?php echo $address; ?></textarea>
                                            <span class="error" id="error-edit_address"></span>
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-6">
                                        <div class="custom-select form-group w-100">
                                            <select class="select-box" name="" id="">
                                                <option value="Self-register">Self-register</option>
                                                <option value="Select-one">Select-one</option>
                                                <option value="Select-two">Select-two</option>
                                            </select>
                                        </div>
                                    </div> -->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Referance member name" value="<?php echo $reference_member_name; ?>" id="edit_refmembername" name="edit_refmembername">
                                            <span class="error" id="error-edit_refmembername"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea class="form-control donation-textarea" placeholder="Why want to join" value="" id="edit_whywantjoin" name="edit_whywantjoin"><?php echo $why_want_to_join; ?></textarea>
                                            <span class="error" id="error-edit_whywantjoin"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input type="number" class="form-control" placeholder="AADHAR number" value="<?php echo $adhaar_number; ?>" id="edit_aadhar" name="edit_aadhar">
                                            <span class="error" id="error-edit_aadhar"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="PAN number"
                                                value="<?php echo $pan_number; ?>" id="edit_pan" name="edit_pan">
                                            <span class="error" id="error-edit_pan"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input type="number" class="form-control" placeholder="Tapassya whatsapp group number" value="<?php echo $tapssya_whatsapp_group_no; ?>" id="edit_whatsappgrp" name="edit_whatsappgrp">
                                            <span class="error" id="error-edit_whatsappgrp"></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="form-info relationship-row">
                                    <div class="form-title">
                                        <h5>Relationship Status with Nabadiganta Tapassya Foundation : "We need you as a member to serve the community"*</h5>
                                    </div>
                                    <div class="form-group small-check-label">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flex-donation-radio" id="donation-radio-20">
                                            <label class="form-check-label" for="donation-radio-20">
                                                Member & Volunteer : Participation & Financial commitment (Min: 6000, Desirable: 15000 Yearly - Mainly used for General Opex)
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group small-check-label">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flex-donation-radio" id="donation-radio-21">
                                            <label class="form-check-label" for="donation-radio-21">
                                                Donor / Well-Wishers : Guidance & Participation ,Project specific financial support occasionally
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group small-check-label">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flex-donation-radio" id="donation-radio-22">
                                            <label class="form-check-label" for="donation-radio-22">
                                                Corporate Partner : Engage Corporates through CSR
                                            </label>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="form-info relationship-row">
                                    <div class="form-title">
                                        <h5>How You Want to Contribute * </h5>
                                    </div>
                                    <div class="form-group small-check-label">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="contribution_type" id="donation-radio-011" value="monthly" <?php if ($contribution_type == 'monthly') echo 'checked'; ?>>

                                            <label class="form-check-label" for="donation-radio-011">
                                                Monthly SI
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group small-check-label">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="contribution_type" id="donation-radio-022" value="quarterly" <?php if ($contribution_type == 'quarterly') echo 'checked'; ?>>
                                            <label class="form-check-label" for="donation-radio-022">
                                                Quarterly
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group small-check-label">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="contribution_type" id="donation-radio-033" value="half_yearly" <?php if ($contribution_type == 'half_yearly') echo 'checked'; ?>>
                                            <label class="form-check-label" for="donation-radio-033">
                                                Half yearly
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group small-check-label">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="contribution_type" id="donation-radio-044" value="yearly" <?php if ($contribution_type == 'yearly') echo 'checked'; ?>>
                                            <label class="form-check-label" for="donation-radio-044">
                                                Yearly one Time
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group small-check-label">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="contribution_type" id="donation-radio-055" value="no_financial" <?php if ($contribution_type == 'no_financial') echo 'checked'; ?>>

                                            <label class="form-check-label" for="donation-radio-055">
                                                No Financial Commitment [ Tapassya Welcomes students,retired persons as a Non-Payee Member-Volunteer]
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-info mb-3">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="number" class="form-control" placeholder="Ammount"
                                                value="<?php echo $annual_contribution_amount; ?>" id="edit_ammount" name="edit_ammount">
                                            <span class="error" id="error-edit_ammount"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="social-projects">
                                    <div class="form-title pb-2">
                                        <p>Get involved in any of the Social Projects (Not related with financial contribution)*</p>
                                    </div>
                                    <div class="social-projects-row d-flex">
                                        <div class="social-projects-col">
                                            <div class="item">
                                                <p>Tapassya Jyoti</p>
                                                <div class="form-group small-check-label">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="involve_social_project" id="donation-radio-a" <?php if ($involve_social_project == 'kishalaya_vidyaNiketan') echo 'checked'; ?>>
                                                        <label class="form-check-label" for="donation-radio-a">
                                                            Kishalaya VidyaNiketan
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group small-check-label">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="involve_social_project" id="donation-radio-b" <?php if ($involve_social_project == 'tapassya_bhaban_HVSN') echo 'checked'; ?>>
                                                        <label class="form-check-label" for="donation-radio-b">
                                                            Tapassya Bhaban ( Hatpara Vivek Sevaniketan - HVSN )
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group small-check-label">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="involve_social_project" id="donation-radio-c" <?php if ($involve_social_project == 'tapassya_bhaban_MKRS') echo 'checked'; ?>>
                                                        <label class="form-check-label" for="donation-radio-c">
                                                            Tapassya Bhaban ( Maa Karunamoyee Ramkrishna Sevashram - MKRS)
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="social-projects-col">
                                            <div class="item">
                                                <p>Aalo</p>
                                                <div class="form-group small-check-label">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="involve_social_project" id="donation-radio-0a" <?php if ($involve_social_project == 'aalo') echo 'checked'; ?>>
                                                        <label class="form-check-label" for="donation-radio-0a">
                                                            Aalo - Higher Education Scholarship
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <p>Agomoni</p>
                                                <div class="form-group small-check-label">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="involve_social_project" id="donation-radio-0b" <?php if ($involve_social_project == 'agornoni') echo 'checked'; ?>>
                                                        <label class="form-check-label" for="donation-radio-0b">
                                                            Agornoni - Annual Dress Distribution
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="social-projects-col">
                                            <div class="item">
                                                <p>Astha</p>
                                                <div class="form-group small-check-label">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="involve_social_project" id="donation-radio-aa" <?php if ($involve_social_project == 'astha') echo 'checked'; ?>>
                                                        <label class="form-check-label" for="donation-radio-aa">
                                                            Astha - Community Development
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <p>Arogya</p>
                                                <div class="form-group small-check-label">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="involve_social_project" id="donation-radio-bb" <?php if ($involve_social_project == 'arogya') echo 'checked'; ?>>
                                                        <label class="form-check-label" for="donation-radio-bb">
                                                            Arogya - Medical Support
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="social-projects-col">
                                            <div class="item">
                                                <p>Asha</p>
                                                <div class="form-group small-check-label">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="involve_social_project" id="donation-radio-ab" <?php if ($involve_social_project == 'asha') echo 'checked'; ?>>
                                                        <label class="form-check-label" for="donation-radio-ab">
                                                            Asha - Disaster Relief
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-info mt-4">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <!-- <input type="password" class="form-control" placeholder="***********"> -->
                                                <input type="password" class="form-control" placeholder="Password*" id="password_prof" name="password_prof">
                                                <span class="show_pass pass_show"> <i id="eye_icon" class="eye_icon fa fa-eye" aria-hidden="true"></i></span>
                                                <span class="error" id="error-password_prof"></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <!-- <input type="password" class="form-control" placeholder="**********"> -->
                                                <input type="password" class="form-control" placeholder="Confirm Password*" id="cnfpassword_prof" name="cnfpassword_prof">
                                                <span class="show_pass cnfpass_show"><i id="eye_icon" class="eye_icon fa fa-eye" aria-hidden="true"></i></span>
                                                <span class="error" id="error-cnfpassword_prof"></span>

                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="documents-attached profile-up-ingo d-flex justify-content-center">
                                                <div class="documents-item">
                                                    <label class="file-label" for="">Upload Picture</label>
                                                    <div class="form-group">
                                                        <input type="file" name="profile_image" id="profile_image" class="file-input-input image_file_set" accept="image/*,application/pdf" />
                                                        <label class="file-input-label image_file_upload" for="profile_image"><span>Choose File</span></label>

                                                        <img id="profile-img_upload" class="image_upload" src="" alt="Image preview" style="display:none; max-width: 200px; max-height: 200px;" />
                                                        <span class="error" id="error-profile_image"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group text-start pt-2 m-0">
                                                <input type="submit" value="Update" class="btn">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<script>
    jQuery(document).ready(function($) {
        $(".pass_show, .cnfpass_show").on('click', function() {
            var passwordField = $(this).siblings('.form-control');
            var fieldType = passwordField.attr('type');

            if (fieldType === 'password') {
                passwordField.attr('type', 'text');
                $(this).find('.eye_icon').removeClass('fa-eye').addClass('fa-eye-slash');
            } else {
                passwordField.attr('type', 'password');
                $(this).find('.eye_icon').removeClass('fa-eye-slash').addClass('fa-eye');
            }
        });

        $('#edit_form').submit(function(e) {
            e.preventDefault();

            // Define validation constraints
            var constraints = {
                edit_username: {
                    presence: {
                        allowEmpty: false,
                        message: "^This field is required"
                    }
                },
                edit_phone: {
                    presence: {
                        allowEmpty: false,
                        message: "^This field is required"
                    }
                },
                edit_address: {
                    presence: {
                        allowEmpty: false,
                        message: "^This field is required"
                    }
                },
                edit_refmembername: {
                    presence: {
                        allowEmpty: false,
                        message: "^This field is required"
                    }
                },
                edit_whywantjoin: {
                    presence: {
                        allowEmpty: false,
                        message: "^This field is required"
                    }
                },
                edit_aadhar: {
                    presence: {
                        allowEmpty: false,
                        message: "^This field is required"
                    }
                },
                edit_pan: {
                    presence: {
                        allowEmpty: false,
                        message: "^This field is required"
                    }
                },
                edit_whatsappgrp: {
                    presence: {
                        allowEmpty: false,
                        message: "^This field is required"
                    }
                },
                edit_ammount: {
                    presence: {
                        allowEmpty: false,
                        message: "^This field is required"
                    }
                },
                password_prof: {
                    presence: {
                        allowEmpty: false,
                        message: "^Password is required"
                    },
                    length: {
                        minimum: 6,
                        message: "^must be at least 6 characters long"
                    }
                },
                cnfpassword_prof: {
                    presence: {
                        allowEmpty: false,
                        message: "^Confirm Password is required"
                    },
                    equality: "password_prof"
                },
            };

            var form = document.getElementById('edit_form');
            var formValues = validate.collectFormValues(form);
            var errors = validate(formValues, constraints);

            if (errors) {
                showErrors(errors);
            } else {
                var formData = new FormData(this);
                formData.append('action', 'profile_edit');

                $.ajax({
                    type: 'POST',
                    url: ajaxurl,
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        // Assuming response.success is a boolean indicating success or failure
                        if (response.success) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Successfully Updated!',
                            });
                            // $("#edit_form")[0].reset(); // Reset the form only on success
                            location.reload();
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: response.data || 'An error occurred'
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Server Error',
                            text: 'An unexpected error occurred. Please try again later.'
                        });
                    },
                    complete: function() {
                        $("#edit_form button[type='submit']").attr('disabled', false);
                    }
                });
            }

            function showErrors(errors) {
                // Clear all existing error messages
                $('.error').text('');

                for (var key in errors) {
                    if (errors.hasOwnProperty(key)) {
                        var errorElement = document.getElementById('error-' + key);
                        if (errorElement) {
                            errorElement.innerText = errors[key][0];
                        } else {
                            // Optional: Show a SweetAlert error for the form as a whole if no specific element
                            Swal.fire({
                                icon: 'error',
                                title: 'Validation Error',
                                text: errors[key][0]
                            });
                        }
                    }
                }
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
                        //       console.log('time end');
                        //   console.log('File input changed');
                        //    [file] = studentParentsIncome.files;
                        const [file] = studentParentsIncome.files;

                        if (file) {
                            console.log(file.type);
                            console.log(file.size);
                            // Check file type
                            const allowedTypes = ['image/jpeg', 'image/png']; // Add other allowed MIME types as needed
                            const maxSizeInBytes = 5 * 1024 * 1024; // 5 MB in bytes

                            if (allowedTypes.includes(file.type)) {
                                if (file.size <= maxSizeInBytes) {
                                    if (file.type === 'application/pdf') {
                                        console.log('pdf');

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
                                    icon: 'error',
                                    title: 'Info',
                                    text: 'Invalid file type. Please upload a JPEG, or PNG file.'
                                });
                                studentParentsIncomeUpload.style.display = 'none';
                            }
                        } else {
                            studentParentsIncomeUpload.style.display = 'none';
                        }

                        jQuery(".progress").hide();
                    }
                }, 100);

            }

        })
    })
</script>
<?php get_footer(); ?>