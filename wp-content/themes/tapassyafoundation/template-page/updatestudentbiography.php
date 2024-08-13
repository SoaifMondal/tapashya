<?php
// Template Name:Layout:Update Student Biography
$user_id = $_SESSION['loginid'];
$home_url = site_url();
if (empty($user_id)) {
    wp_redirect($home_url);
}
get_header();
get_template_part('template-parts/student/studentbanner');
// get_user_meta($user_id, 'stu_dob', true);
// get_user_meta($user_id, 'stu_age', true);
// get_user_meta($user_id, 'stu_phone', true);
// get_user_meta($user_id, 'stu_address', true);
// get_user_meta($user_id, 'stu_father_name', true);
// get_user_meta($user_id, 'stu_father_contact', true);
// get_user_meta($user_id, 'stu_mother_name', true);
// get_user_meta($user_id, 'stu_mother_contact', true);
// get_user_meta($user_id, 'stu_father_occupa', true);
// get_user_meta($user_id, 'stu_father_income', true);
// get_user_meta($user_id, 'stu_mother_occupa', true);
// get_user_meta($user_id, 'stu_mother_income', true);
// get_user_meta($user_id, 'stu_other_parent', true);
// get_user_meta($user_id, 'stu_otherparent_contact', true);
// get_user_meta($user_id, 'stu_otherparent_relation', true);
// get_user_meta($user_id, 'stu_otherparent_income', true);
// get_user_meta($user_id, 'stu_otherparent_address', true);
// get_user_meta($user_id, 'challengeFacing', true);
$image_id=get_user_meta($user_id, 'sk_user_avatar', true);
$imge_profile=wp_get_attachment_image_url( $image_id, '' ); //use default image size
$user_email = $current_user->user_email;
$first_name = get_user_meta($user_id, 'first_name', true);
$last_name = get_user_meta($user_id, 'last_name', true);
?>
<section class="dashboard-sec common-padding">
    <div class="container">
        <div class="dashboard-main-wrap d-flex justify-content-between">
            <!-- student sidebar -->
            <?php echo get_template_part('template-parts/student/studentsidebar'); ?>
            <div class="dashboard-desc">
                <div class="dashboard-desc-main">
                    <div class="board-title">
                        <h3><span class="left-arrow me-2"><a href="#"><img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/left-arrow.svg"
                                        alt=""></a></span>Update Biography</h3>
                    </div>
                    <div class="dashboard-home-desc">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php the_permalink(111); ?>">Student Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Update Biography</li>
                            </ol>
                        </nav>
                        <div class="dashboard-home-details">
                            <form id="bioupdate" method="post" enctype="multipart/form-data">
                                <div class="row form-info">
                                    <div class="col-lg-12">
                                        <div class="documents-attached profile-up-ingo d-flex justify-content-center">
                                            <div class="documents-item">
                                                <label class="file-label " for="">Upload Profile
                                                    Picture *</label>
                                                <div class="form-group">
                                                    <input type="file"  id="student_profile" name="student_profile"
                                                        class="file-input-input image_file_set"
                                                        accept="image/*,application/pdf" />
                                                    <label class="file-input-label image_file_upload"
                                                        for="student_profile"><span>Choose
                                                            File</span></label>

                                  
                                                    <img id="student_profile_upload" class="image_upload" src="<?php echo $imge_profile; ?>"
                                                        alt="Image preview"
                                                        style=" max-width: 200px; max-height: 200px;" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input type="text" name="student_name" class="form-control"
                                                placeholder="Student Name *" id="student_name"
                                                value="<?php echo $first_name; ?> <?php echo $last_name; ?>">
                                            <div class="col-sm-5 messages"></div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input type="date" name="student_dob" class="form-control"
                                                placeholder="DOB*" id="student_dob"
                                                value="<?php echo get_user_meta($user_id, 'stu_dob', true); ?>">
                                            <div class="col-sm-5 messages"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input type="number" name="student_age" class="form-control"
                                                placeholder="Age" id="student_age"
                                                value="<?php echo get_user_meta($user_id, 'stu_age', true); ?>"
                                                readonly="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group has-success">
                                            <input type="email" name="student_email" placeholder="Email*"
                                                class="form-control" id="student_email" value="<?php echo
                                                    $user_email ?>">
                                            <div class="col-sm-5 messages"></div>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" placeholder="Contact*" name="student_contact"
                                                class="form-control" id="student_contact"
                                                value="<?php echo get_user_meta($user_id, 'stu_phone', true); ?>">
                                            <div class="col-sm-5 messages"></div>

                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea class="form-control donation-textarea" name="student_address"
                                                placeholder="Address*"
                                                id="student_address"><?php echo get_user_meta($user_id, 'stu_address', true); ?></textarea>
                                            <div class="col-sm-5 messages"></div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="student_father_name"
                                                placeholder="Father's Name*" id="student_father_name"
                                                value="<?php echo get_user_meta($user_id, 'stu_father_name', true); ?>">
                                            <div class="col-sm-5 messages"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input type="text" name="student_father_contact" class="form-control"
                                                placeholder="Contact*" id="student_father_contact"
                                                value="<?php echo get_user_meta($user_id, 'stu_father_contact', true); ?>">
                                            <div class="col-sm-5 messages"></div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input type="text" name="student_mother_name" class="form-control"
                                                placeholder="Mother's Name*" id="student_mother_name"
                                                value="<?php echo get_user_meta($user_id, 'stu_mother_name', true); ?>">
                                            <div class="col-sm-5 messages"></div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input type="text" name="student_mother_contact" class="form-control"
                                                placeholder="Contact&nbsp;*" id="student_mother_contact"
                                                value="<?php echo get_user_meta($user_id, 'stu_mother_contact', true); ?>">
                                            <div class="col-sm-5 messages"></div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input type="text" name="student_father_occupation" class="form-control"
                                                placeholder="Father's Occupation*" id="student_father_occupation"
                                                value="<?php echo get_user_meta($user_id, 'stu_father_occupa', true); ?>">
                                            <div class="col-sm-5 messages"></div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input type="number" name="student_father_income" class="form-control"
                                                placeholder="Monthly Income*" id="student_father_income"
                                                value="<?php echo get_user_meta($user_id, 'stu_father_income', true); ?>">
                                            <div class="col-sm-5 messages"></div>

                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input type="text" name="student_mother_occupation" class="form-control"
                                                placeholder="Mother's Occupation*" id="student_mother_occupation"
                                                value="<?php echo get_user_meta($user_id, 'stu_mother_occupa', true); ?>">
                                            <div class="col-sm-5 messages"></div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input type="number" name="student_mother_income" class="form-control"
                                                placeholder="Monthly Income*" id="student_mother_income"
                                                value="<?php echo get_user_meta($user_id, 'stu_mother_income', true); ?>">
                                            <div class="col-sm-5 messages"></div>


                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input type="text" name="student_guardian_name" class="form-control"
                                                placeholder="Guardian's Name other than Parents"
                                                id="student_guardian_name"
                                                value="<?php echo get_user_meta($user_id, 'stu_other_parent', true); ?>">
                                            <div class="col-sm-5 messages"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input type="text" name="student_guardian_contact" class="form-control"
                                                placeholder="Contact*" id="student_guardian_contact"
                                                value="<?php echo get_user_meta($user_id, 'stu_otherparent_contact', true); ?>">

                                            <div class="col-sm-5 messages"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input type="text" name="student_guardian_relation" class="form-control"
                                                placeholder="Relation with Student*" id="student_guardian_relation"
                                                value="<?php echo get_user_meta($user_id, 'stu_otherparent_relation', true); ?>">
                                            <div class="col-sm-5 messages"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input type="number" name="student_guardian_income" class="form-control"
                                                placeholder="Monthly Income*" id="student_guardian_income"
                                                value="<?php echo get_user_meta($user_id, 'stu_otherparent_income', true); ?>">
                                            <div class="col-sm-5 messages"></div>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <textarea name="student_guardian_address"
                                                class="form-control registration-textarea" placeholder="Address*"
                                                id="student_guardian_address"><?php echo get_user_meta($user_id, 'stu_otherparent_address', true); ?></textarea>
                                            <div class="col-sm-5 messages"></div>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <textarea name="student_challanges"
                                                class="form-control registration-textarea"
                                                placeholder="What Challanges you are facing for pursuing higher Studies*(200 Words only)"
                                                id="student_challanges"><?php echo get_user_meta($user_id, 'challengeFacing', true); ?>
                                            </textarea>
                                            <div class="col-sm-5 messages"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group text-start p-0 m-0">
                                            <input type="submit" value="Update" class="btn">

                                            <div class="loader_button">

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
    jQuery(document).ready(function () {
        validate.extend(validate.validators.datetime, {
            parse: function (value, options) {
                return +moment.utc(value);
            },
            format: function (value, options) {
                var format = options.dateOnly ? "YYYY-MM-DD" : "YYYY-MM-DD hh:mm:ss";
                return moment.utc(value).format(format);
            }
        });
        var constraints = {
            student_name: {
                presence: true,
                length: {
                    minimum: 3,
                    maximum: 20
                },
                format: {
                    pattern: "[a-zA-Z0-9 ]+",
                    flags: "i",
                    message: "can only contain a-z and 0-9"
                }
            },

            student_dob: {
                presence: true,
                date: {
                    latest: moment().subtract(18, "years"),
                    message: "^You must be at least 18 years old to use this service"
                }
            },


            student_email: {
                presence: true,
                email: true
            },


            student_contact: {
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



            student_address: {
                presence: true,
            },


            student_father_name: {
                presence: true,
                length: {
                    minimum: 3,
                    maximum: 20
                },
                format: {
                    pattern: "[a-zA-Z0-9 ]+",
                    flags: "i",
                    message: "can only contain a-z and 0-9"
                }
            },

            student_father_contact: {
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


            student_mother_name: {
                presence: true,
                length: {
                    minimum: 3,
                    maximum: 20
                },
                format: {
                    pattern: "[a-zA-Z0-9 ]+",
                    flags: "i",
                    message: "can only contain a-z and 0-9"
                }
            },


            student_mother_contact: {
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

            student_father_occupation: {
                presence: true,
                length: {
                    minimum: 3,
                    maximum: 200
                },
                format: {
                    pattern: "[a-zA-Z0-9 ]+",
                    flags: "i",
                    message: "can only contain a-z and 0-9"
                }
            },

            student_father_income: {
                presence: true,
            },

            student_mother_occupation: {
                presence: true,
                length: {
                    minimum: 3,
                    maximum: 200
                },
                format: {
                    pattern: "[a-zA-Z0-9 ]+",
                    flags: "i",
                    message: "can only contain a-z and 0-9"
                }
            },


            student_mother_income: {
                presence: true,
            },


            student_guardian_name: {
                presence: true,
                length: {
                    minimum: 3,
                    maximum: 20
                },
                format: {
                    pattern: "[a-zA-Z0-9 ]+",
                    flags: "i",
                    message: "can only contain a-z and 0-9"
                }
            },


            student_guardian_contact: {
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


            student_guardian_relation: {
                presence: true,
                length: {
                    minimum: 3,
                    maximum: 20
                },
                format: {
                    pattern: "[a-zA-Z0-9 ]+",
                    flags: "i",
                    message: "can only contain a-z and 0-9"
                }
            },

            student_guardian_income: {
                presence: true,

            },



            student_guardian_address: {
                presence: true,
                format: {
                    pattern: "[a-zA-Z0-9 ]+",
                    flags: "i",
                    message: "can only contain a-z and 0-9"
                }
            },
        };


        // Hook up the form so we can prevent it from being posted
        var form = document.querySelector("form#bioupdate");
        form.addEventListener("submit", function (ev) {
            ev.preventDefault();
            handleFormSubmit(form);
        });

        // Hook up the inputs to validate on the fly
        var inputs = document.querySelectorAll("input, textarea, select")
        for (var i = 0; i < inputs.length; ++i) {
            inputs.item(i).addEventListener("change", function (ev) {
                var errors = validate(form, constraints) || {};
                showErrorsForInput(this, errors[this.name])
            });
        }

        function handleFormSubmit(form, input) {
            // validate the form against the constraints
            var errors = validate(form, constraints);
            // then we update the form to reflect the results
            showErrors(form, errors || {});
            if (!errors) {
                showSuccess();
            }
        }

        // Updates the inputs with the validation errors
        function showErrors(form, errors) {
            // We loop through all the inputs and show the errors for that input
            _.each(form.querySelectorAll("input[name], select[name],textarea[name]"), function (input) {
                // Since the errors can be null if no errors were found we need to handle
                // that
                showErrorsForInput(input, errors && errors[input.name]);
            });
        }

        // Shows the errors for a specific input
        function showErrorsForInput(input, errors) {
            var formGroup = closestParent(input.parentNode, "form-group")
                // Find where the error messages will be insert into
                , messages = formGroup.querySelector(".messages");
            // First we remove any old messages and resets the classes
            resetFormGroup(formGroup);
            // If we have errors
            if (errors) {
                // we first mark the group has having errors
                formGroup.classList.add("has-error");
                // then we append all the errors
                _.each(errors, function (error) {
                    addError(messages, error);
                });
            } else {
                // otherwise we simply mark it as success
                formGroup.classList.add("has-success");
            }
        }

        // Recusively finds the closest parent that has the specified class
        function closestParent(child, className) {
            if (!child || child == document) {
                return null;
            }
            if (child.classList.contains(className)) {
                return child;
            } else {
                return closestParent(child.parentNode, className);
            }
        }

        function resetFormGroup(formGroup) {
            // Remove the success and error classes
            formGroup.classList.remove("has-error");
            formGroup.classList.remove("has-success");
            // and remove any old messages
            _.each(formGroup.querySelectorAll(".help-block.error"), function (el) {
                el.parentNode.removeChild(el);
            });
        }

        // Adds the specified error with the following markup
        function addError(messages, error) {
            var block = document.createElement("p");
            block.classList.add("help-block");
            block.classList.add("error");
            block.innerText = error;
            messages.appendChild(block);
        }

        function showSuccess() {
            // alert('success');
            var form = document.getElementById('bioupdate');
            var formData = new FormData(form);
            formData.append('action', 'update_student_bio');
            formData.append('user_id', '<?php echo $user_id; ?>');
            jQuery('.loader_button').html('<img src="<?php echo get_template_directory_uri(); ?>/assets/images/studentloader.svg" >');
            jQuery.ajax({
                url: ajaxurl,
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    console.log(response);
                    const jsonObject = jQuery.parseJSON(response);
                    const msg = jsonObject.msg;
                    if (msg) {
                        Swal.fire({
                            title: "Good job!",
                            text: msg,
                            icon: "success"
                        });
                    }
                    const msg_err = jsonObject.msg_err;
                    if (msg_err) {
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: msg_err,
                        });
                    }
                    jQuery('.loader_button').html('');
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.error('AJAX Error: ' + textStatus + ': ' + errorThrown);
                }
            });
        }



        jQuery('.image_file_upload').click(function () {
            const data = jQuery(this).parent().parent();
            const imageFile = data.find('.image_file_set')[0];
            const imageFileSet = data.find('.image_upload')[0].id;
            const pdfImage = "https://tapassya-foundation.weavers-web.com/wp-content/themes/tapassyafoundation/assets/images/pdf.jpg";
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
                const interval = setInterval(function () {
                    if (currentValue < 100) {
                        currentValue += 10;
                        progressBar.setAttribute('aria-valuenow', currentValue);
                        progressBar.style.width = currentValue + '%';
                    } else {
                        clearInterval(interval);
                        const [file] = studentParentsIncome.files;

                        if (file) {
                            console.log(file.type);
                            console.log(file.size);
                            // Check file type
                            const allowedTypes = ['application/pdf', 'image/jpeg', 'image/png']; // Add other allowed MIME types as needed
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
                                    alert('File size exceeds 5 MB. Please upload a smaller file.');
                                    studentParentsIncomeUpload.style.display = 'none';
                                }
                            } else {
                                alert('Invalid file type. Please upload a PDF, JPEG, or PNG file.');
                                studentParentsIncomeUpload.style.display = 'none';
                            }
                        } else {
                            studentParentsIncomeUpload.style.display = 'none';
                        }

                        jQuery(".progress").hide();
                    }
                }, 500);

            }

        })
    })

</script>
<?php get_footer(); ?>