<?php
function custom_registration_handler() {
    if (!isset($_POST['action']) || $_POST['action'] != 'custom_registration_action') {
        return;
    }

    check_ajax_referer('ajax-registration-nonce', 'security');

    $ind_name = sanitize_text_field($_POST['ind_name']);
    $ind_contact_no = sanitize_text_field($_POST['ind_contact_no']);
    $ind_email = sanitize_email($_POST['ind_email']);
    $ind_address = sanitize_text_field($_POST['ind_address']);
    $ind_age = intval($_POST['ind_age']);
    $ind_dob = sanitize_text_field($_POST['ind_dob']);
    $ind_aadhar = sanitize_text_field($_POST['ind_aadhar']);
    $ind_profession = sanitize_text_field($_POST['ind_profession']);
    $ind_education = sanitize_text_field($_POST['ind_education']);
    $ind_reason = sanitize_text_field($_POST['ind_reason']);
    $ind_support = sanitize_text_field($_POST['ind_support']);
    $ind_father_select = sanitize_text_field($_POST['ind_father_select']);
    $ind_father_name = sanitize_text_field($_POST['ind_father_name']);
    $ind_father_contact = sanitize_text_field($_POST['ind_father_contact']);
    $ind_relationship = sanitize_text_field($_POST['ind_relationship']);
    $ind_local_reference = sanitize_text_field($_POST['ind_local_reference']);
    $ind_local_contact = sanitize_text_field($_POST['ind_local_contact']);
    $ind_tapassya_member = sanitize_text_field($_POST['ind_tapassya_member']);
    $ind_bank_id = sanitize_text_field($_POST['ind_bank_id']);
    $ind_password = $_POST['ind_password'];

    $files = ['profile_image', 'ind_registration_certificate', 'ind_pan_card', 'ind_application_copy'];
    $uploaded_files = [];

    foreach ($files as $file) {
        if (isset($_FILES[$file]) && $_FILES[$file]['error'] == 0) {
            $upload = wp_handle_upload($_FILES[$file], ['test_form' => false]);
            if ($upload && !isset($upload['error'])) {
                $uploaded_files[$file] = $upload['url'];
            } else {
                wp_send_json_error('File upload failed: ' . $upload['error']);
                return; // Stop execution
            }
        }
    }

    if (email_exists($ind_email)) {
        wp_send_json_error('User already exists.');
        return; // Stop execution
    }

    $user_id = wp_create_user($ind_email, $ind_password, $ind_email);
    if (is_wp_error($user_id)) {
        echo $user_id->get_error_message();
        wp_send_json_error('User creation failed.');
        return; // Stop execution
    }

    $user = new WP_User($user_id);
    $user->set_role('Member');

    if (isset($uploaded_files['profile_image'])) {
        update_user_meta($user_id, 'user_profile_picture', $uploaded_files['profile_image']);
    }
    if (isset($uploaded_files['ind_registration_certificate'])) {
        update_user_meta($user_id, 'ind_registration_certificate', $uploaded_files['ind_registration_certificate']);
    }
    if (isset($uploaded_files['ind_pan_card'])) {
        update_user_meta($user_id, 'ind_pan_card', $uploaded_files['ind_pan_card']);
    }
    if (isset($uploaded_files['ind_application_copy'])) {
        update_user_meta($user_id, 'ind_application_copy', $uploaded_files['ind_application_copy']);
    }

    // Store other user meta data
    if(!empty($ind_name)){
    update_user_meta($user_id, 'ind_name', $ind_name);}
    if(!empty($ind_contact_no)){
    update_user_meta($user_id, 'ind_contact_no', $ind_contact_no);}
    if(!empty($ind_address)){
    update_user_meta($user_id, 'ind_address', $ind_address);}
    if(!empty($ind_age)){
    update_user_meta($user_id, 'ind_age', $ind_age);}
    if(!empty($ind_dob)){
    update_user_meta($user_id, 'ind_dob', $ind_dob);}
    if(!empty($ind_aadhar)){
    update_user_meta($user_id, 'ind_aadhar', $ind_aadhar);}
    if(!empty($ind_profession)){
    update_user_meta($user_id, 'ind_profession', $ind_profession);}
    if(!empty($ind_education)){
    update_user_meta($user_id, 'ind_education', $ind_education);}
    if(!empty($ind_reason)){
    update_user_meta($user_id, 'ind_reason', $ind_reason);}
    if(!empty($ind_support)){
    update_user_meta($user_id, 'ind_support', $ind_support);}
    if(!empty($ind_father_select)){
    update_user_meta($user_id, 'ind_father_select', $ind_father_select);}
    if(!empty($ind_father_name)){
    update_user_meta($user_id, 'ind_father_name', $ind_father_name);}
    if(!empty($ind_father_contact)){
    update_user_meta($user_id, 'ind_father_contact', $ind_father_contact);}
    if(!empty($ind_relationship)){
    update_user_meta($user_id, 'ind_relationship', $ind_relationship);}
    if(!empty($ind_local_reference)){
    update_user_meta($user_id, 'ind_local_reference', $ind_local_reference);}
    if(!empty($ind_local_contact)){
    update_user_meta($user_id, 'ind_local_contact', $ind_local_contact);}
    if(!empty($ind_tapassya_member)){
    update_user_meta($user_id, 'ind_tapassya_member', $ind_tapassya_member);}
    if(!empty($ind_bank_id)){
    update_user_meta($user_id, 'ind_bank_id', $ind_bank_id);}

    wp_send_json_success('User registered successfully.');
    return; // Ensure the function exits after sending response
}

add_action('wp_ajax_custom_registration_action', 'custom_registration_handler');
add_action('wp_ajax_nopriv_custom_registration_action', 'custom_registration_handler');


//post update add project
function add_project() {
  
    $project_name = sanitize_text_field($_POST['project_name']);
    $purpose = sanitize_textarea_field($_POST['purpose']);
    $short_description = sanitize_text_field($_POST['short_description']);
    $short_code = sanitize_text_field($_POST['short_code']);
    $beneficiary_type = sanitize_text_field($_POST['beneficiary_type']);
    $beneficiaries_details = sanitize_text_field($_POST['beneficiaries_details']);
    $project_location = sanitize_text_field($_POST['project_location']);
    $project_duration = sanitize_text_field($_POST['project_duration']);
    $project_category = sanitize_text_field($_POST['project_category']);
    $budget_monthly = sanitize_text_field($_POST['budget_monthly']);
    $budget_source = sanitize_text_field($_POST['budget_source']);
    $members_responsible = sanitize_text_field($_POST['members_responsible']);
    $local_contact_name = sanitize_text_field($_POST['local_contact_name']);
    $local_contact_phone = sanitize_text_field($_POST['local_contact_phone']);
    $date = date("Y");
    $no =  rand(100,999);
    $projectId = "NTFPRJ.$short_code.$date.$no";
    $post_id = wp_insert_post(array(
        'post_title' => $project_name,
        'post_content' => $purpose,
        'post_status' => 'pending',
        'post_type' => 'project',
        'tax_input' => array('project_category' => $project_category)
    ));

    if (!is_wp_error($post_id)) {
        update_post_meta($post_id, 'project_id', $projectId);
        update_post_meta($post_id, 'short_description', $short_description);
        update_post_meta($post_id, 'short_code', $short_code);
        update_post_meta($post_id, 'beneficiary_type', $beneficiary_type);
        update_post_meta($post_id, 'beneficiaries_details', $beneficiaries_details);
        update_post_meta($post_id, 'project_location', $project_location);
        update_post_meta($post_id, 'project_duration', $project_duration);
        update_post_meta($post_id, 'budget_monthly', $budget_monthly);
        update_post_meta($post_id, 'budget_source', $budget_source);
        update_post_meta($post_id, 'members_responsible', $members_responsible);
        update_post_meta($post_id, 'local_contact_name', $local_contact_name);
        update_post_meta($post_id, 'local_contact_phone', $local_contact_phone);
    

            $args = array( 'role' => 'gb-member', 'orderby' => 'user_nicename','order' => 'ASC');

            $users = get_users( $args );
            $subject = 'Check New Project';
            $message = '<p>This is a custom email message sent from WordPress.
            Need aprovel  
            url: https://tapassya-foundation.weavers-web.com/project-list/</p>';
            $headers = array('Content-Type: text/html; charset=UTF-8');
           
            foreach ( $users as $user ) {
                $to = $user->user_email;
                wp_mail( $to, $subject, $message, $headers );
            }
            echo 'Emails have been sent successfully.';


    } else {
        wp_send_json_error('error field');
    }

    wp_die();
}

add_action('wp_ajax_nopriv_add_project', 'add_project');
add_action('wp_ajax_add_project', 'add_project');





/* ==================Delete Project========================== */
function project_delete() {
    $dltval = sanitize_text_field($_POST['delval']);
        if (!empty($dltval)) {
            $deleted = wp_delete_post($dltval);

            if ($deleted) {
                // Redirect after deletion to avoid resubmission
                wp_send_json_success('Delete successfully.');
                exit;
            } else {
                echo '<div class="error">Error: Unable to delete the project.</div>';
            }
        } else {
            echo 'Not Delete';
        }
    
}
add_action('wp_ajax_nopriv_project_delete', 'project_delete');
add_action('wp_ajax_project_delete', 'project_delete');

/* ==================Update Project========================== */

function update_project() {
    parse_str($_POST['form_data'], $form_data);

    $post_id = sanitize_text_field($form_data['post_id']);
    $project_name = sanitize_text_field($form_data['project_name']);
    $purpose = sanitize_textarea_field($form_data['purpose']);
    $short_description = sanitize_text_field($form_data['short_description']);
    $short_code = sanitize_text_field($form_data['short_code']);
    $beneficiary_type = sanitize_text_field($form_data['beneficiary_type']);
    $beneficiaries_details = sanitize_text_field($form_data['beneficiaries_details']);
    $project_location = sanitize_text_field($form_data['project_location']);
    $project_duration = sanitize_text_field($form_data['project_duration']);
    $project_category = sanitize_text_field($form_data['project_category']);
    $budget_monthly = sanitize_text_field($form_data['budget_monthly']);
    $budget_source = sanitize_text_field($form_data['budget_source']);
    $members_responsible = sanitize_text_field($form_data['members_responsible']);
    $local_contact_name = sanitize_text_field($form_data['local_contact_name']);
    $local_contact_phone = sanitize_text_field($form_data['local_contact_phone']);
    $update_args = array(
        'ID' => $post_id,
        'post_title' => $project_name,
        'post_content' => $purpose,
        'post_status' => 'pending',
        'post_type' => 'project',
        'tax_input' => array('project_category' => $project_category)
    );

    $updated_post_id = wp_update_post($update_args);

    if (!is_wp_error($updated_post_id)) {
        update_post_meta($updated_post_id, 'short_description', $short_description);
        update_post_meta($updated_post_id, 'short_code', $short_code);
        update_post_meta($updated_post_id, 'beneficiary_type', $beneficiary_type);
        update_post_meta($updated_post_id, 'beneficiaries_details', $beneficiaries_details);
        update_post_meta($updated_post_id, 'project_location', $project_location);
        update_post_meta($updated_post_id, 'project_duration', $project_duration);
        update_post_meta($updated_post_id, 'budget_monthly', $budget_monthly);
        update_post_meta($updated_post_id, 'budget_source', $budget_source);
        update_post_meta($updated_post_id, 'members_responsible', $members_responsible);
        update_post_meta($updated_post_id, 'local_contact_name', $local_contact_name);
        update_post_meta($updated_post_id, 'local_contact_phone', $local_contact_phone);

        wp_send_json_success('Project updated successfully!');
    } else {
        wp_send_json_error('Failed to update project.');
    }

    wp_die();
}

add_action('wp_ajax_update_project', 'update_project');
