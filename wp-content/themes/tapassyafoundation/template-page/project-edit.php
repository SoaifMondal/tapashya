<?php 
//Template Name: Project Edit
get_header(); 

$post_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$project_name = get_the_title($post_id);
$purpose = get_post_field('post_content', $post_id);
$short_description = get_post_meta($post_id, 'short_description', true);
$short_code = get_post_meta($post_id, 'short_code', true);
$beneficiary_type = get_post_meta($post_id, 'beneficiary_type', true);
$beneficiaries_details = get_post_meta($post_id, 'beneficiaries_details', true);
$project_location = get_post_meta($post_id, 'project_location', true);
$project_duration = get_post_meta($post_id, 'project_duration', true);
$project_category = wp_get_post_terms($post_id, 'project_category', array("fields" => "names"));
$budget_monthly = get_post_meta($post_id, 'budget_monthly', true);
$budget_source = get_post_meta($post_id, 'budget_source', true);
$members_responsible = get_post_meta($post_id, 'members_responsible', true);
$local_contact_name = get_post_meta($post_id, 'local_contact_name', true);
$local_contact_phone = get_post_meta($post_id, 'local_contact_phone', true);
?>

<section class="dashboard-banner">
    <div class="dashboard-wrapper position-relative">
        <div class="dashboard-img">
            <img src="images/line-img-big.png" alt="">
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
                        <h3><span class="left-arrow me-2"><a href="#"><img src="images/left-arrow.svg" alt=""></a></span>Project Details</h3>                    
                    </div>
                    <div class="dashboard-home-desc">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Projects</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Update Project</li>
                            </ol>
                        </nav>
                        <div class="dashboard-home-details">
                        <form id="edit-project-form">
                                <div class="row form-info">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="project_name" placeholder="Name of Project*" value="<?php echo esc_attr($project_name); ?>">
                                        </div>
                                    </div>  
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea class="form-control donation-textarea" name="purpose" placeholder="Purpose*"><?php echo esc_textarea($purpose); ?></textarea>
                                        </div>
                                    </div>   
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="short_description" placeholder="Project Short Description*" value="<?php echo esc_attr($short_description); ?>">
                                        </div>
                                    </div> 
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="short_code" placeholder="Project Short Code*" value="<?php echo esc_attr($short_code); ?>">
                                        </div>
                                    </div>  
                                    
                                    <div class="col-lg-6">
                                        <div class="custom-select form-group w-100">
                                            <select class="select-box" name="beneficiary_type">
                                                <option value="Select Beneficiary Type*">Select Beneficiary Type*</option>
                                                <option value="Select-one" <?php selected($beneficiary_type, 'Select-one'); ?>>Select-one</option>
                                                <option value="Select-two" <?php selected($beneficiary_type, 'Select-two'); ?>>Select-two</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="beneficiaries_details" placeholder="Details of Beneficiaries*" value="<?php echo esc_attr($beneficiaries_details); ?>">
                                        </div>
                                    </div> 
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="project_location" placeholder="Location of the project / beneficiaries*" value="<?php echo esc_attr($project_location); ?>">
                                        </div>
                                    </div> 
                                    <div class="col-lg-6">
                                        <div class="custom-select form-group w-100">
                                            <select class="select-box" name="project_duration">
                                                <option value="Duration of the project in Months*">Duration of the project in Months*</option>
                                                <option value="Select-one" <?php selected($project_duration, 'Select-one'); ?>>Select-one</option>
                                                <option value="Select-two" <?php selected($project_duration, 'Select-two'); ?>>Select-two</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="custom-select form-group w-100">
                                            <select class="select-box" name="project_category">
                                                <option value="Select Project Type">Select Project Type</option>
                                                <option value="Select-one" <?php selected($project_category, 'Select-one'); ?>>Select-one</option>
                                                <option value="Select-two" <?php selected($project_category, 'Select-two'); ?>>Select-two</option>
                                            </select>
                                        </div>
                                    </div>                                
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="budget_monthly" placeholder="Budget Monthly*" value="<?php echo esc_attr($budget_monthly); ?>">
                                        </div>
                                    </div>                                 
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="budget_source" placeholder="Source Of Budget*" value="<?php echo esc_attr($budget_source); ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="members_responsible" placeholder="Name of the Members Responsible for the Project" value="<?php echo esc_attr($members_responsible); ?>">
                                        </div>
                                    </div>         
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="local_contact_name" placeholder="Local contact person Name of the project" value="<?php echo esc_attr($local_contact_name); ?>">
                                        </div>
                                    </div>                                      
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="local_contact_phone" placeholder="Local Contact Person Phone number" value="<?php echo esc_attr($local_contact_phone); ?>">
                                        </div>
                                    </div>          
                                    <div class="col-lg-12">
                                        <div class="form-group text-start p-0 m-0">
                                            <input type="submit" value="Update" class="btn"> 
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
jQuery(document).ready(function($){
    $('#edit-project-form').on('submit', function(e){
        e.preventDefault();

        var formData = $(this).serialize();

        $.ajax({
            url: ajaxurl, // WordPress AJAX handler
            type: 'POST',
            data: {
                action: 'update_project',
                form_data: formData
            },
            success: function(response) {
                if(response.success) {
                    alert('Project updated successfully!');
                } else {
                    alert('Failed to update the project!');
                }
            }
        });
    });
});
</script>
<?php  get_footer(); ?>