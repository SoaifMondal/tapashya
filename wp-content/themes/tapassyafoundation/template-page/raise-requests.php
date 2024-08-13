<?php
//Template name:Raise Requests
get_header();
?>

<!-- Banner Section -->
<?php echo get_template_part('template-parts/members/memberbanner') ?>
<!-- Banner Section -->


<section class="dashboard-sec common-padding">
    <div class="container">

        <!-- volunteer Banner Section -->
        <?php echo get_template_part('template-parts/members/volunteer') ?>
        <!-- volunteer Banner Section -->

        <div class="dashboard-main-wrap d-flex justify-content-between">

            <!-- Sidebar Dashboard Menu -->
            <?php echo get_template_part('sidebar-membermenu') ?>

            <div class="dashboard-desc">
                <div class="dashboard-desc-main">
                    <div class="board-title">
                        <h3>Member Dashboard</h3>                    
                    </div>
                    <div class="dashboard-home-desc">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Member Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Raise Requests</li>
                            </ol>
                        </nav>
                        <div class="dashboard-home-details">
                            <form id="raise_payment_request">
                            <?php wp_nonce_field( 'raise_payment_request', '_wpnonce' );?>
                                <div class="row form-info">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Name*">
                                            <span class="error " id="error-name"></span>
                                        </div>
                                    </div>                                     
                                    <div class="col-lg-6">
                                        <div class="custom-select form-group w-100">
                                            <select class="select-box" name="initiative" id="initiative">
                                                <option value="Select Project / Initiative*">Select Project / Initiative*</option>
                                                <option value="Kishalaya VidyaNiketan">Kishalaya VidyaNiketan</option>
                                                <option value="Aalo - Higher Education Scholarship">Aalo - Higher Education Scholarship</option>
                                                <option value="Astha - Community Development">Astha - Community Development</option>
                                                <option value="Asha - Disaster Relief">Asha - Disaster Relief</option>
                                                <option value="Tapassya Bhaban ( Hatpara Vivek Sevaniketan - HVSN )">Tapassya Bhaban ( Hatpara Vivek Sevaniketan - HVSN )</option>
                                                <option value="Tapassya Bhaban ( Maa Karunamoyee Ramkrishna Sevashram - MKRS)">Tapassya Bhaban ( Maa Karunamoyee Ramkrishna Sevashram - MKRS)</option>
                                                <option value="Agornoni - Annual Dress Distribution">Agornoni - Annual Dress Distribution</option>
                                                <option value="Arogya - Medical Support">Arogya - Medical Support</option>
                                            </select>
                                            <span class="error " id="error-initiative"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input placeholder="Request Date*" class="textbox-n form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="request_date" name="request_date"/>
                                            <span class="error " id="error-request_date"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="purpose" id="purpose" placeholder="purpose*">
                                            <span class="error " id="error-purpose"></span>
                                        </div>
                                    </div> 
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="number" class="form-control" name="amount" id="amount" placeholder="Amount*">
                                            <span class="error " id="error-amount"></span>
                                        </div>
                                    </div> 
                                    <div class="col-lg-6">
                                        <div class="custom-select form-group w-100">
                                            <select class="select-box" name="frequency" id="frequency">
                                                <option value="Select Project / Initiative*">Select Frequency*</option>
                                                <option value="Monthly">Monthly</option>
                                                <option value="Quaterly">Quaterly</option>
                                                <option value="One time">One time</option>
                                            </select>
                                            <span class="error " id="error-frequency"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                    <div class="form-group">
                                            <input type="text" class="form-control" name="beneficiary_name" id="beneficiary_name" placeholder="Beneficiary Name*">
                                            <span class="error " id="error-beneficiary_name"></span>
                                        </div>
                                    </div>   
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control"id="bank_name" name="bank_name" placeholder="Bank Name*">
                                            <span class="error " id="error-bank_name"></span>
                                        </div>
                                    </div>                                    
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="ifsc_code" name="ifsc_code" placeholder="IFSC code*">
                                            <span class="error " id="error-ifsc_code"></span>
                                        </div>
                                    </div>                                      
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="account_holder_name" name="account_holder_name" placeholder="Account Holder Name*">
                                            <span class="error " id="error-account_holder_name"></span>
                                        </div>
                                    </div>    
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="number" class="form-control" id="account_number" name="account_number" placeholder="Account Number*">
                                            <span class="error " id="error-account_number"></span>
                                        </div>
                                    </div>                                        
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input placeholder="To be To be disbursed by (date)*" class="textbox-n form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="disbursed_date" name="disbursed_date"/>
                                            <span class="error " id="error-disbursed_date"></span>
                                        </div>
                                    </div>                                                                         
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea class="form-control donation-textarea" id="remarks" name="remarks" placeholder="Remarks"></textarea>
                                            <span class="error " id="error-remarks"></span>
                                        </div>
                                    </div>                                     
    
                                </div>
                                <div class="scholarship-form">                     
                                    <div class="assistance-form pb-0">
                                        <div class="form-title d-flex align-items-center mb-4">
                                            <h4 class="me-2 mb-0">Upload Documents </h4>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/failed-icon.svg" alt="">
                                        </div>  
                                        <div class="documents-attached d-flex">
                                            <div class="documents-item">
                                                <label class="file-label" for="">Upload Bills / Invoice / Supporting doc*</label>
                                                <div class="form-group">
                                                    <input type="file" name="supporting_doc" id="file-input" class="file-input-input" />
                                                    <label class="file-input-label" for="file-input"><span>Choose File</span></label>
                                                    <span class="error" id="error-supporting_doc" ></span>
                                                </div>
                                            </div>                   
                                        </div>
                
                                        <div class="form-group text-start p-0 m-0">
                                            <input type="submit" value="Register Now" id="raise_payment_request_form_button" class="btn">
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

(function() {
    // Before using it we must add the parse and format functions
    // Here is a sample implementation using moment.js
    validate.extend(validate.validators.datetime, {
        // The value is guaranteed not to be null or undefined but otherwise it
        // could be anything.
        parse: function(value, options) {
            return +moment.utc(value);
        },
        // Input is a unix timestamp
        format: function(value, options) {
            var format = options.dateOnly ? "YYYY-MM-DD" : "YYYY-MM-DD hh:mm:ss";
            return moment.utc(value).format(format);
        }
    });
})();

const raisePaymentRequestConstraints = {
    name: {
        presence: { allowEmpty: false, message: "is required" }
    },
    initiative: {
        presence: { allowEmpty: false, message: "is required" },
        exclusion: {
            within: ["Select Project / Initiative*"],
            message: "must be selected"
        }
    },
    request_date: {
        presence: { allowEmpty: false, message: "is required" },
        datetime: {
            dateOnly: true,
            message: "must be a valid date"
        },
        dateIsAfterToday: true // Custom validation
    },
    purpose: {
        presence: { allowEmpty: false, message: "is required" }
    },
    amount: {
        presence: { allowEmpty: false, message: "is required" },
        numericality: {
            greaterThan: 0,
            message: "must be a positive number"
        }
    },
    frequency: {
        presence: { allowEmpty: false, message: "is required" },
        exclusion: {
            within: ["Select Project / Initiative*"],
            message: "must be selected"
        }
    },
    beneficiary_name: {
        presence: { allowEmpty: false, message: "is required" }
    },
    bank_name: {
        presence: { allowEmpty: false, message: "is required" }
    },
    ifsc_code: {
        presence: { allowEmpty: false, message: "is required" },
        format: {
            pattern: /^[A-Z]{4}0[A-Z0-9]{6}$/,
            message: "must be a valid IFSC code"
        }
    },
    account_holder_name: {
        presence: { allowEmpty: false, message: "is required" }
    },
    account_number: {
        presence: { allowEmpty: false, message: "is required" },
        numericality: {
            onlyInteger: true,
            greaterThan: 0,
            message: "must be a valid account number"
        }
    },
    disbursed_date: {
        presence: { allowEmpty: false, message: "is required" },
        datetime: {
            dateOnly: true,
            message: "must be a valid date"
        },
        dateIsAfterToday: true // Custom validation
    },
    supporting_doc: {
        presence: { allowEmpty: false, message: "is required" }
    }
};

// Custom validator to check if the date is after today
validate.validators.dateIsAfterToday = function(value, options, key, attributes) {
    const today = moment.utc().startOf('day');
    const inputDate = moment.utc(value);
    if (inputDate < today) {
        return "must be greater than today's date";
    }
};

// Example of how to validate the form on submit
jQuery('#raise_payment_request_form_button').click(function(event) {
    event.preventDefault();
    
    // Get form values
    const formValues = validate.collectFormValues(document.getElementById('raise_payment_request'));

    // Validate the form
    const errors = validate(formValues, raisePaymentRequestConstraints);
    jQuery(".error").text("");

    if (errors) {
        // Show errors
        console.log(errors);
        for (const key in errors) {
            jQuery(`#error-${key}`).text(errors[key]);
        }
    } else {
        // Clear previous errors
        jQuery(".error").text("");
        // Submit the form via AJAX or proceed further
        alert("Form is valid!");
    }
});


    // jQuery(document).ready(function() {

    //     jQuery('#raise_payment_request').on('submit', function(e) {
    //         e.preventDefault();

    //         // Button Loader
    //         jQuery('#raise_payment_request_form_button').prop('disabled', true);
    //         jQuery('#raise_payment_request_form_button').html('Register Now <i class="fa fa-spinner fa-spin"></i>'); 

    //         // Button Loader Remover
    //         const removeDisable =()=>{
    //             jQuery('#raise_payment_request_form_button').prop('disabled', false);
    //             jQuery('#raise_payment_request_form_button').html('Register Now');
    //         }

    //         const formData = new FormData(this);
    //         let formObject = {};
    //         formData.forEach((value, key) => { formObject[key] = value });
    //         formObject = {...formObject, 'action': 'self_individual_registration'};

    //         var newformData = new FormData(this);
    //         newformData.append('action', 'self_individual_registration');
    //         // console.log(newformData);

        

    //         // Validate the form data
    //         const errors = validate(formObject, raisePaymentRequestConstraints);

    //         // Clear previous error messages
    //         jQuery('.error').text('');

    //         if (errors) {
    //             // Show errors
    //             for (const key in errors) {
    //                 jQuery(`#error-${key}`).text(errors[key][0]);
    //             }
    //             removeDisable();
    //             Swal.fire({
    //                 icon: 'error',
    //                 text: 'Unable to submit. Some fields are missing or not valid.'
    //             });
    //         }
    //     });
    // });
</script>



<?php get_footer(); ?>