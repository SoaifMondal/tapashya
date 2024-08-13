<?php
//Template name:Self Individual Registration
get_header();
?>
<!-- Banner Section -->
<?php echo get_template_part('template-parts/bannersection') ?>
<!-- Banner Section -->

<section class="contact-form-sec self-reg-form common-padding">
    <div class="container">
        <div class="contact-form-info">
            <div class="section-title text-center pb-3">
                <h2><?php the_field('form_heading', get_the_id());?></h2>
            </div>
            <form id="self_individual_registration">
                <?php wp_nonce_field( 'self_individual_registration', '_wpnonce' );?>
                <div class="form-info relationship-row">
                    <div class="form-title">
                        <h4>Relationship Status with Nabadiganta Tapassya Foundation : "We need you as a member to serve the community" * </h4>
                    </div>
                    <div class="form-group small-check-label">
                        <div class="form-check">
                            <input class="form-check-input role_select" type="radio" name="relationship_status" id="relationship-status-member-Volunteer" checked value="member">
                            <label class="form-check-label" for="relationship-status-member-Volunteer">
                                Member & Volunteer : Participation & Financial commitment (Min: 6000, Desirable: 15000 Yearly - Mainly used for General Opex)
                            </label>
                        </div>
                    </div>
                    <div class="form-group small-check-label">
                        <div class="form-check">
                            <input class="form-check-input role_select" type="radio" name="relationship_status" id="relationship-status-donor-wishers" value="hmem">
                            <label class="form-check-label" for="relationship-status-donor-wishers">
                                Donor / Well-Wishers : Guidance & Participation ,Project specific financial support occasionally
                            </label>
                        </div>
                    </div>
                    <div class="form-group small-check-label">
                        <div class="form-check">
                            <input class="form-check-input role_select" type="radio" name="relationship_status" id="relationship-status-corporate-partner" value="subscriber">
                            <label class="form-check-label" for="relationship-status-corporate-partner">
                                Corporate Partner : Engage Corporates through CSR
                            </label>
                        </div>
                    </div>
                    <span class="error " id="error-relationship_status"></span>
                </div>

                <div class="row form-info">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" class="form-control"  name="name" id="name" placeholder="Name*">
                            <span class="error " id="error-name"></span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="email" class="form-control" id="email_address" name="email_address" placeholder="Email Address*">
                            <span class="error " id="error-email_address"></span>
                        </div>
                    </div>    
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="number" class="form-control number-only" id="phone_number" name="phone_number" placeholder="Phone Number*">
                            <span class="error " id="error-phone_number"></span>
                        </div>
                    </div>     
                    <div class="col-lg-12">
                        <div class="form-group">
                            <textarea class="form-control donation-textarea" id="register_address" name="register_address" placeholder="Address*"></textarea>
                            <span class="error " id="error-register_address"></span>
                        </div>
                    </div>                                      
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input type="text" class="form-control" id="reference_member_name" name="reference_member_name" placeholder="Tapassya Reference Members Name*">
                            <span class="error " id="error-reference_member_name"></span>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <textarea class="form-control donation-textarea" id="why_want_to_join" name="why_want_to_join" placeholder="Why you want to join Tapassya?*"></textarea>
                            <span class="error " id="error-why_want_to_join"></span>
                        </div>
                    </div>                                       
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" class="form-control number-only" id="adhaar_number" name="adhaar_number" placeholder="Adhaar Number*">
                            <span class="error " id="error-adhaar_number"></span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" class="form-control" id="pan_number" name="pan_number" placeholder="PAN Number*">
                            <span class="error " id="error-pan_number"></span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="number" class="form-control" id="tapssya_whatsapp_groub_no" name="tapssya_whatsapp_groub_no" placeholder="Your Tapassya WA group number*">
                            <span class="error " id="error-tapssya_whatsapp_groub_no"></span>
                        </div>
                    </div>    
                </div>
                <!--- For Corporate Partner Extra Field End--->
                <div class="for_corporate row form-info" style="display:none !important">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" class="form-control" id="organization_name" name="organization_name" placeholder="Name of the Organization*">
                            <span class="error " id="error-organization_name"></span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" class="form-control" id="organization_pan_number" name="organization_pan_number" placeholder="Organization PAN Number">
                            <span class="error " id="error-organization_pan_number"></span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" class="form-control" id="organization_tan_number" name="organization_tan_number" placeholder="Organization TAN Number">
                            <span class="error " id="error-organization_tan_number"></span>
                        </div>
                    </div>                                      
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" class="form-control" id="organization_address" name="organization_address" placeholder="Organization Address*">
                            <span class="error " id="error-organization_address"></span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" class="form-control" id="company_profile" name="company_profile" placeholder="Profile of the Company*">
                            <span class="error " id="error-company_profile"></span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" class="form-control" id="organization_ceo_name" name="organization_ceo_name" placeholder="Name of CEO/MD/Unit Head">
                            <span class="error " id="error-organization_ceo_name"></span>
                        </div>
                    </div>    
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" class="form-control" id="csr_manager" name="csr_manager" placeholder="Name of CSR Manager">
                            <span class="error " id="error-csr_manager"></span>
                        </div>
                    </div>  
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="Number" class="form-control" id="organization_contact_number" name="organization_contact_number" placeholder="Organization Contact Number*">
                            <span class="error " id="error-organization_contact_number"></span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input type="text" class="form-control" id="organization_contact_email" name="organization_contact_email" placeholder="Organization Contact Email*">
                            <span class="error " id="error-organization_contact_email"></span>
                        </div>
                    </div>
                </div>
                <!--- For Corporate Partner Extra Field End--->
                <div class="form-info relationship-row">
                    <div class="form-title">
                        <h4>How You Want to Contribute * </h4>
                    </div>
                    <div class="form-group small-check-label">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="contribution_type" id="contribution-type-monthly" value="monthly">
                            <label class="form-check-label" for="contribution-type-monthly">
                                Monthly SI
                            </label>
                        </div>
                    </div>
                    <div class="form-group small-check-label">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="contribution_type" id="contribution-type-quarterly" value="quarterly">
                            <label class="form-check-label" for="contribution-type-quarterly">
                                Quarterly
                            </label>
                        </div>
                    </div>
                    <div class="form-group small-check-label">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="contribution_type" id="contribution-type-half-yearly" value="half_yearly">
                            <label class="form-check-label" for="contribution-type-half-yearly">
                                Half yearly
                            </label>
                        </div>
                    </div>
                    <div class="form-group small-check-label">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="contribution_type" id="contribution-type-yearly" value="yearly">
                            <label class="form-check-label" for="contribution-type-yearly">
                                Yearly one Time
                            </label>
                        </div>
                    </div>
                    <div class="form-group small-check-label">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="contribution_type" id="contribution-type-no-financial" value="no_financial">
                            <label class="form-check-label" for="contribution-type-no-financial">
                                No Financial Commitment [ Tapassya Welcomes students,retired persons as a Non-Payee Member-Volunteer]
                            </label>
                        </div>
                    </div>     
                    <span class="error " id="error-contribution_type"></span>               
                </div>
                
                <div class="row form-info mb-3">                                                     
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input type="number" class="form-control number-only" name="annual_contribution_amount" id="annual_contribution_amount" placeholder="Annual Contribution Amount (INR)*">
                            <span class="error " id="error-annual_contribution_amount"></span>
                        </div>
                    </div>                                     
                </div>
                <div class="social-projects">
                    <div class="form-title pb-2">
                        <p>Get involved in any of the Social Projects (Not related with financial contribution)*</p>
                    </div>
                    <div class="social-projects-row-main">
                        <div class="social-projects-row d-flex">                                                     
                            <div class="social-projects-col">
                                <div class="item">
                                    <p>Tapassya Jyoti</p>
                                    <div class="form-group small-check-label">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="involve_social_project" id="donation-radio-a" value="kishalaya_vidyaNiketan">
                                            <label class="form-check-label" for="donation-radio-a">
                                                Kishalaya VidyaNiketan
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group small-check-label">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="involve_social_project" id="donation-radio-b" value="tapassya_bhaban_HVSN">
                                            <label class="form-check-label" for="donation-radio-b">
                                                Tapassya Bhaban ( Hatpara Vivek Sevaniketan - HVSN )
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group small-check-label">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="involve_social_project" id="donation-radio-c" value="tapassya_bhaban_MKRS">
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
                                            <input class="form-check-input" type="radio" name="involve_social_project" id="donation-radio-0a" value="aalo">
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
                                            <input class="form-check-input" type="radio" name="involve_social_project" id="donation-radio-0b" value="agornoni">
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
                                            <input class="form-check-input" type="radio" name="involve_social_project" id="donation-radio-aa" value="astha">
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
                                            <input class="form-check-input" type="radio" name="involve_social_project" id="donation-radio-bb" value="arogya">
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
                                            <input class="form-check-input" type="radio" name="involve_social_project" id="donation-radio-ab" value="asha">
                                            <label class="form-check-label" for="donation-radio-ab">
                                                Asha - Disaster Relief
                                            </label>
                                        </div>
                                    </div>
                                </div>                            
                            </div>    
                        </div>
                        <span class="error " id="error-involve_social_project"></span>                                    
                    </div>
                <div class="row form-info mt-4">                                                     
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password*">
                            <span class="error " id="error-password"></span>
                        </div>
                    </div>      
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password*">
                            <span class="error " id="error-confirm_password"></span>
                        </div>
                    </div>      
                    <div class="col-lg-12">
                        <div class="form-group text-center pt-2 m-0">
                            <button id="self-individual-registration" class="btn register_btn" >Register Now</button>
                        </div>
                        <span class="error " id="error-submit"></span>
                    </div>                                        
                </div>
                </div>
                
            </form> 
        </div> 
    </div>
</section>


<script>
    const constraints = {
        "relationship_status": {
            presence: true,
        },
        "name": {
            presence: { allowEmpty: false },
            length: { minimum: 3 }
        },
        "email_address": {
            email: true, presence: true
        },
        "phone_number": {
            presence: true, format: { pattern: /^\d{10,}$/, message: "must be at least 10 digits" },
        },
        "register_address": {
            presence: { allowEmpty: false },
        },
        "reference_member_name": {
            presence: { allowEmpty: false },
        },
        "why_want_to_join": {
            presence: { allowEmpty: false },
        },
        "adhaar_number": { 
            presence: true, format: { pattern: /^\d{12}$/, message: "must be 12 digits" } 
        },
        "pan_number": {
            presence: { allowEmpty: false },
            format: {
                pattern: "[A-Z]{5}[0-9]{4}[A-Z]{1}",
                message: "must be a valid PAN number"
            }
        },
        "tapssya_whatsapp_groub_no": {
            presence: true, format: { pattern: /^\d{10,}$/, message: "must be at least 10 digits" }
        },
        "contribution_type": {
            presence: { allowEmpty: false },
        },
        "annual_contribution_amount": {
            presence: { allowEmpty: false },
            numericality: true
        },
        "involve_social_project": {
            presence: { allowEmpty: false },
        },
        "password": {
            presence: { allowEmpty: false },
            length: { minimum: 6 }
        },
        "confirm_password": {
            presence: { allowEmpty: false },
            equality: "password"
        },
        // Corporate fields
        "organization_name": { presence: { allowEmpty: false } },
        "organization_pan_number": { 
            presence: { allowEmpty: true }, 
            format: { pattern: /^[A-Z]{5}[0-9]{4}[A-Z]{1}$/, message: "must be a valid PAN number" }
        },
        "organization_tan_number": { 
            presence: { allowEmpty: true }, 
            format: { pattern: /^[A-Z]{4}[0-9]{5}[A-Z]{1}$/, message: "must be a valid TAN number" }
        },
        "organization_address": { presence: { allowEmpty: false } },
        "company_profile": { presence: { allowEmpty: false } },
        "organization_ceo_name": { presence: { allowEmpty: true } },
        "csr_manager": { presence: { allowEmpty: true } },
        "organization_contact_number": { 
            format: { pattern: /^\d{10,}$/, message: "must be at least 10 digits" }
        },
        "organization_contact_email": { email: true }
    };

    jQuery(document).ready(function() {
        // Show or hide corporate fields based on selected relationship status
        jQuery(".role_select").on("click", function() {
            var relationshipStatus = jQuery('input[name="relationship_status"]:checked').val();
            if (relationshipStatus === "subscriber") {
                jQuery(".for_corporate").show();
            } else {
                jQuery(".for_corporate").hide();
            }
        });

        jQuery('#self_individual_registration').on('submit', function(e) {
            e.preventDefault();

            // Button Loader
            jQuery('#self-individual-registration').prop('disabled', true);
            jQuery('#self-individual-registration').html('Register Now <i class="fa fa-spinner fa-spin"></i>'); 

            // Button Loader Remover
            const removeDisable =()=>{
                jQuery('#self-individual-registration').prop('disabled', false);
                jQuery('#self-individual-registration').html('Register Now');
            }

            const formData = new FormData(this);
            let formObject = {};
            formData.forEach((value, key) => { formObject[key] = value });
            formObject = {...formObject, 'action': 'self_individual_registration'};

            var newformData = new FormData(this);
            newformData.append('action', 'self_individual_registration');
            // console.log(newformData);

            // Some extra validation
            const organization_pan_number = formObject.organization_pan_number;
            const organization_tan_number = formObject.organization_tan_number;
            const contributionType = formObject.contribution_type;
            const relationshipStatus = formObject.relationship_status;
            const dynamicConstraints = { ...constraints };


            if(organization_pan_number === ''){
                delete dynamicConstraints["organization_pan_number"];
            }

            if(organization_tan_number === ''){
                delete dynamicConstraints["organization_tan_number"];
            }

            if(contributionType === 'no_financial'){
                delete dynamicConstraints["annual_contribution_amount"];
            }

            if (relationshipStatus !== 'subscriber') {
                // Remove corporate fields from constraints if not 'subscriber'
                delete dynamicConstraints["organization_name"];
                delete dynamicConstraints["organization_pan_number"];
                delete dynamicConstraints["organization_tan_number"];
                delete dynamicConstraints["organization_address"];
                delete dynamicConstraints["company_profile"];
                delete dynamicConstraints["organization_ceo_name"];
                delete dynamicConstraints["csr_manager"];
                delete dynamicConstraints["organization_contact_number"];
                delete dynamicConstraints["organization_contact_email"];
            }

            // Validate the form data
            const errors = validate(formObject, dynamicConstraints);

            // Clear previous error messages
            jQuery('.error').text('');

            if (errors) {
                // Show errors
                for (const key in errors) {
                    jQuery(`#error-${key}`).text(errors[key][0]);
                }
                removeDisable();
                Swal.fire({
                    icon: 'error',
                    text: 'Unable to submit. Some fields are missing or not valid.'
                });
            } else {
                jQuery.ajax({
                    url: ajaxurl, 
                    method: 'POST',
                    data: newformData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        // console.log(response);
                        if(response.success == true){
                            removeDisable();
                            Swal.fire({
                                icon: 'success',
                                text: 'Registration successful!'
                            });
                            jQuery('#self_individual_registration')[0].reset();
                        } else if(response.success == false){
                            removeDisable();
                            Swal.fire({
                                icon: 'error',
                                text: response.data
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        Swal.fire({
                            icon: 'error',
                            text: 'An error occurred during registration. Please try again.'
                        });
                        removeDisable();
                    }
                });
            }
        });
    });
</script>


<?php get_footer(); ?>