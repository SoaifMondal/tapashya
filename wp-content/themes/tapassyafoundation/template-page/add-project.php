<?php 
//Template Name: add project
get_header(); ?>

<section class="dashboard-banner">
    <div class="dashboard-wrapper position-relative">
        <div class="dashboard-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/line-img-big.png" alt="">
        </div>
        <div class="container dashboard-content-container">
            <div class="dashboard-content text-center text-white">
                <h1>My Account</h1>
            </div>                    
        </div>
    </div>
</section>

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
            <?php get_sidebar('membermenu'); ?>
            <div class="dashboard-desc">
                <div class="dashboard-desc-main">
                    <div class="board-title">
                        <h3><span class="left-arrow me-2"><a href="#"><img src="images/left-arrow.svg" alt=""></a></span>Add New Project</h3>                    
                    </div>
                    <div class="dashboard-home-desc">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">My Projects</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add New Project</li>
                            </ol>
                        </nav>
                        <div class="dashboard-home-details">
                            <form id="projectForm">
                                <div class="row form-info">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="project_name" placeholder="Name of Project*">
                                            <span class="error" id='error-project_name'></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea class="form-control donation-textarea" id="purpose" placeholder="Purpose*"></textarea>
                                            <span class="error" id='error-purpose'></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="short_description" placeholder="Project Short Description*">
                                            <span class="error" id='error-short_description'></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="short_code" placeholder="Project Short Code*">
                                            <span class="error" id='error-short_code'></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="beneficiary_type" placeholder="Beneficiary Type*">
                                            <span class="error" id='error-beneficiary_type'></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="beneficiaries_details" placeholder="Details of Beneficiaries*">
                                            <span class="error" id='error-beneficiaries_details'></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="project_location" placeholder="Location of the project / beneficiaries*">
                                            <span class="error" id= 'error-project_location'></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="custom-select form-group w-100">
                                            <select class="select-box" id="project_duration">
                                                <option value="">Duration of the project in Months*</option>
                                                <option value="short_term">Short Term < 1 yr </option>
                                                <option value="medium_term">Medium Term < 5 yr (MT) </option>
                                                <option value="long_term">Long Term > 5yrs(LT) </option>
                                            </select>
                                            <span class="error" id= 'error-project_duration'></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="custom-select form-group w-100">
                                            <select class="select-box" id="project_category">
                                                <option value="">Select Project Type</option>
                                                <?php
                                                $terms = get_terms(array(
                                                    'taxonomy' => 'project_category',
                                                    'hide_empty' => false,
                                                ));
                                                if (!empty($terms) && !is_wp_error($terms)) {
                                                    foreach ($terms as $term) {
                                                        echo '<option value="' . esc_attr($term->slug) . '">' . esc_html($term->name) . '</option>';
                                                    }
                                                }
                                                ?>
                                            </select>
                                            <span class="error" id= 'error-project_category'></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="budget_monthly" placeholder="Budget Monthly*">
                                            <span class="error" id= 'error-budget_monthly'></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="budget_source" placeholder="Source Of Budget*">
                                            <span class="error" id= 'error-budget_source'></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="members_responsible" placeholder="Name of the Members Responsible for the Project">
                                            <span class="error" id= 'error-members_responsible'></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="local_contact_name" placeholder="Local contact person Name of the project">
                                            <span class="error" id= 'error-local_contact_name'></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="local_contact_phone" placeholder="Local Contact Person Phone number">
                                            <span class="error" id= 'error-local_contact_phone'></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group text-start p-0 m-0">
                                            <button type="submit" id="submit-button" class="btn">Add Project</button>
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
    $('#projectForm').submit(function(e) {
        e.preventDefault(); 
        $('.error').text('');

        var constraints = {
            project_name: {
                presence: {
                    allowEmpty: false,
                    message: "^Name is required"
                },
                length: {
                    minimum: 2,
                    message: "^Name must be at least 2 characters long"
                },
                format: {
                    pattern: /^[A-Za-z\s]+$/,
                    message: "^Name must contain only alphabetic characters"
                }
            },
            purpose: {
                presence: {
                    allowEmpty: false,
                    message: "^Purpose is required"
                }
            },
            short_description: {
                presence: {
                    allowEmpty: false,
                    message: "^Short description is required"
                },
                length: {
                    maximum: 10,
                    message: "^maximum 10 characters long"
                }
            },
            short_code: {
                presence: {
                    allowEmpty: false,
                    message: "^Short code is required"
                },
                length: {
                    maximum: 4,
                    message: "^maximum 4 characters long"
                }
            },
            beneficiary_type: {
                presence: {
                    allowEmpty: false,
                    message: "^Beneficiary type is required"
                }
            },
            beneficiaries_details: {
                presence: {
                    allowEmpty: false,
                    message: "^Details of beneficiaries are required"
                }
            },
            project_location: {
                presence: {
                    allowEmpty: false,
                    message: "^Project location is required"
                }
            },
            project_duration: {
                presence: {
                    allowEmpty: false,
                    message: "^Project duration is required"
                }
            },
            project_category: {
                presence: {
                    allowEmpty: false,
                    message: "^Project category is required"
                }
            },
            budget_monthly: {
                presence: {
                    allowEmpty: false,
                    message: "^Monthly budget is required"
                }
            },

            budget_monthly: {
                presence: {
                    allowEmpty: false,
                    message: "^Monthly budget is required"
                },
                numericality: {
                        onlyInteger: true,
                        message: "^No must be numeric"
                    },
            },
            members_responsible: {
                presence: {
                    allowEmpty: false,
                    message: "^Monthly budget is required"
                }
            },

            local_contact_name: {
                presence: {
                    allowEmpty: false,
                    message: "^Local contact person Name is required"
                }
            },
            budget_source: {
                presence: {
                    allowEmpty: false,
                    message: "^Source of budget is required"
                }
            },
            local_contact_phone: {
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
            }
        };

        var formValues = {
            project_name: $('#project_name').val(),
            purpose: $('#purpose').val(),
            short_description: $('#short_description').val(),
            short_code: $('#short_code').val(),
            beneficiary_type: $('#beneficiary_type').val(),
            beneficiaries_details: $('#beneficiaries_details').val(),
            project_location: $('#project_location').val(),
            project_duration: $('#project_duration').val(),
            project_category: $('#project_category').val(),
            budget_monthly: $('#budget_monthly').val(),
            budget_source: $('#budget_source').val(),
            members_responsible: $('#members_responsible').val(),
            local_contact_name: $('#local_contact_name').val(),
            local_contact_phone: $('#local_contact_phone').val(),
            action: 'add_project' // Add the action here
        };

        var errors = validate(formValues, constraints);
        $('.error-field').removeClass('error-field');

        if (errors) {
            for (var field in errors) {
                $('#error-' + field).text(errors[field][0]);
                $('#' + field).addClass('error-field');
                $('#' + field).focus();
            }
           console.log(errors)
        } else {
            jQuery.ajax({
                url: ajaxurl,
                type: 'POST',
                data: formValues,
                success: function(response) {
                    Swal.fire({
                                        title: "success!",
                                        text: "Project added successfully!",
                                        icon: "success"
                                        }).then((result) => {
                                        if (result.isConfirmed) {
                                            $('.error-field').each(function() {
                                                $(this).removeClass('error-field');
                                            });
                                         document.getElementById('projectForm').reset(); 
                                        }
                                    });
                },
                error: function(error) {
                    Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: response.data || 'An unknown error occurred. Please try again.'
                            });
                }
            });
        }
    });
});
</script>

<?php  get_footer(); ?>