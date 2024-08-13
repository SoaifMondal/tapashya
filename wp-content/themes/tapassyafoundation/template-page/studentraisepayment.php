<?php
// Template Name:Layout:Student Raise Payment 
$user_id = $_SESSION['loginid'];
$home_url = site_url();
if (empty($user_id)) {
    wp_redirect($home_url);
}
get_header();
get_template_part('template-parts/student/studentbanner');
?>
<section class="dashboard-sec common-padding">
    <div class="container">
        <div class="volunteer-div d-flex align-items-center justify-content-between">
            <div class="left-text">
                <h4>Do you want to become a volunteer?</h4>
            </div>
            <div class="right-text">
                <a class="btn" href="#">Become a Volunteer</a>
            </div>
        </div>
        <div class="dashboard-main-wrap d-flex justify-content-between">
            <!-- student sidebar -->
            <?php echo get_template_part('template-parts/student/studentsidebar'); ?>
            <div class="dashboard-desc">
                <div class="dashboard-desc-main student-dashboard">

                    <div class="student-dashboard-info">
                        <div class="board-title">
                            <h3>Member Dashboard</h3>
                        </div>
                        <div class="scholarship-amount-info scholarship-main">
                            <div class="row amount-info-row">
                                <div class="col-lg-6">
                                    <div class="scholarship-amount-item d-flex align-items-center">
                                        <div class="icon">
                                            <img src="images/amount-icon.svg" alt="">
                                        </div>
                                        <div class="icon-desc">
                                            <p>Approved Scholarship Amount</p>
                                            <h3><?php echo get_user_meta($current_user->ID, 'approved_total_scholarship_amount', true); ?></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="scholarship-amount-item d-flex align-items-center">
                                        <div class="icon">
                                            <img src="images/amount-icon.svg" alt="">
                                        </div>
                                        <div class="icon-desc">
                                            <p>Frequency</p>
                                            <h3><?php echo get_user_meta($current_user->ID, 'approved_total_scholarship_frequency', true); ?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="amount-form">
                                <form method="post" id="raise-request-form"  enctype="multipart/form-data">
                                    <div class="row form-info">
                                        <div class="col-lg-12">
                                            <div class="form-title">
                                                <h4>Raise Scholarship Request</h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="custom-select form-group w-100">
                                                <select class="form-control" id="request_for_payment"
                                                    name="request_for_payment">
                                                    <option class="" name="" id="">Select Request</option>
                                                    <option value="School/College/University Fees">
                                                        School/College/University Fees</option>
                                                    <option value="Private Tuition Frees">Private Tuition Fees</option>
                                                    <option value="Exam Frees">Exam Fees</option>
                                                    <option value="Books / Accessories">Books / Accessories</option>
                                                    <option value="Conveyance">Conveyance</option>
                                                    <option value="Food">Food</option>
                                                    <option value="Hostel / Lodging">Hostel / Lodging</option>
                                                    <option value="Mobile Recharge">Mobile Recharge</option>

                                                </select>
                                                <div class="col-sm-5 messages"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name="scholarship_amount"  id="scholarship_amount" class="form-control"
                                                    placeholder="Scholarship Amount*">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <textarea class="form-control donation-textarea" name="request_description"
                                                    placeholder="Request Description*"></textarea>
                                                    <div class="col-sm-5 messages"></div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="scholarship-form">
                                        <div class="assistance-form pb-0">
                                            <div class="form-title d-flex align-items-center mb-4">
                                                <h4 class="me-2 mb-0">Upload Documents </h4>
                                                <img src="images/failed-icon.svg" alt="">
                                            </div>
                                            <div class="documents-attached d-flex">
                                                <div class="documents-item">
                                                    <label class="file-label" for="">Upload Receipt/ Bill Copy*</label>
                                                    <div class="form-group">
                                                        <input type="file"  name="upload_receipt" id="upload_receipt"
                                                            class="file-input-input" />
                                                        <label class="file-input-label" for="upload_receipt"><span>Choose
                                                                File</span></label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group text-start p-0 m-0">
                                                <input type="submit" value="Submit Request" class="btn">
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>

                        </div>


                    </div>
                    <div class="student-dashboard-info">
                        <div class="scholarship-amount-info scholarship-main">
                            <div class="amount-form">
                                <form>
                                    <div class="row form-info">
                                        <div class="col-lg-12">
                                            <div class="form-title">
                                                <h4>Confirmation of Request Received/Served</h4>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Amount Received*">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="custom-select form-group w-100">
                                                <select class="select-box" name="" id="">
                                                    <option value="Select Request Type*">Select Your Request*</option>
                                                    <option value="Select-one">Select-one</option>
                                                    <option value="Select-two">Select-two</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="scholarship-form">
                                        <div class="assistance-form pb-0">
                                            <div class="form-title d-flex align-items-center mb-4">
                                                <h4 class="me-2 mb-0">Upload Documents </h4>
                                                <img src="images/failed-icon.svg" alt="">
                                            </div>
                                            <div class="documents-attached d-flex">
                                                <div class="documents-item">
                                                    <label class="file-label" for="">Upload Receipt/ Bill Copy*</label>
                                                    <div class="form-group">
                                                        <input type="file" name="file-input" id="file-input"
                                                            class="file-input-input" />
                                                        <label class="file-input-label" for="file-input"><span>Choose
                                                                File</span></label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group text-start p-0 m-0">
                                                <input type="submit" value="Submit Request" class="btn">
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>

                        </div>


                    </div>
                    <div class="student-dashboard-info">
                        <div class="board-title">
                            <h3>Your Requests</h3>
                        </div>
                        <div class="dashboard-home-desc table-dashboard-home-desc">
                            <div class="dashboard-home-details">
                                <div class="table-responsive">
                                    <table id="example" class="display member-dashboard nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Request No.</th>
                                                <th>Student Name</th>
                                                <th>Email</th>
                                                <th>Phone Number</th>
                                                <th>Request For</th>
                                                <th>Request Amount</th>
                                                <th>Request Date</th>
                                                <th>Contact</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>20 May, 2024</td>
                                                <td>5000</td>
                                                <td>Donation</td>
                                                <td>Jones Duo</td>
                                                <td>Jharkhand Development</td>
                                                <td>FLAT 309 Utkarshini Apt Arjunpur Baguiati Kolkata 59</td>
                                                <td>9830172447</td>
                                                <td>9830172447</td>
                                            </tr>
                                            <tr>
                                                <td>20 May, 2024</td>
                                                <td>5000</td>
                                                <td>Donation</td>
                                                <td>Jones Duo</td>
                                                <td>Jharkhand Development</td>
                                                <td>FLAT 309 Utkarshini Apt Arjunpur Baguiati Kolkata 59</td>
                                                <td>9830172447</td>
                                                <td>9830172447</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<script>
    jQuery(document).ready(function(){
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
            request_for_payment: {
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

            scholarship_amount: {
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


            request_description: {
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

          
        };


        // Hook up the form so we can prevent it from being posted
        var form = document.querySelector("form#raise-request-form");
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

    })
</script>
<?php get_footer(); ?>