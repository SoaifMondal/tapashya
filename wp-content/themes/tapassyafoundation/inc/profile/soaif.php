<?php

//*******Self Individual Registration Form ********/

add_action('wp_ajax_self_individual_registration', 'self_individual_registration');
add_action('wp_ajax_nopriv_self_individual_registration', 'self_individual_registration');

function self_individual_registration(){

    if ( isset( $_POST['_wpnonce'] ) &&
        wp_verify_nonce( $_POST['_wpnonce'], 'self_individual_registration' ) ) {

        $relationship_status = isset($_POST['relationship_status']) ? sanitize_text_field($_POST['relationship_status']) : '';
        $name = isset($_POST['name']) ? sanitize_text_field($_POST['name']) : '';
        $email = isset($_POST['email_address']) ? sanitize_email($_POST['email_address']) : '';
        $phone_number = isset($_POST['phone_number']) ? sanitize_text_field($_POST['phone_number']) : '';
        $address = isset($_POST['register_address']) ? sanitize_textarea_field($_POST['register_address']) : '';
        $reference_member_name = isset($_POST['reference_member_name']) ? sanitize_text_field($_POST['reference_member_name']) : '';
        $why_want_to_join = isset($_POST['why_want_to_join']) ? sanitize_textarea_field($_POST['why_want_to_join']) : '';
        $adhaar_number = isset($_POST['adhaar_number']) ? sanitize_text_field($_POST['adhaar_number']) : '';
        $pan_number = isset($_POST['pan_number']) ? sanitize_text_field($_POST['pan_number']) : '';
        $tapssya_whatsapp_group_no = isset($_POST['tapssya_whatsapp_groub_no']) ? sanitize_text_field($_POST['tapssya_whatsapp_groub_no']) : '';
        $contribution_type = isset($_POST['contribution_type']) ? sanitize_text_field($_POST['contribution_type']) : '';
        $annual_contribution_amount = isset($_POST['annual_contribution_amount']) ? sanitize_text_field($_POST['annual_contribution_amount']) : '';
        $password = isset($_POST['password']) ? sanitize_text_field($_POST['password']) : '';
        $involve_social_project = isset($_POST['involve_social_project']) ? sanitize_text_field($_POST['involve_social_project']) : '';

        // Corporate fields
        $organizationName = isset($_POST['organization_name']) ? sanitize_text_field($_POST['organization_name']) : '';
        $organizationPanNumber = isset($_POST['organization_pan_number']) ? sanitize_text_field($_POST['organization_pan_number']) : '';
        $organizationTanNumber = isset($_POST['organization_tan_number']) ? sanitize_text_field($_POST['organization_tan_number']) : '';
        $organizationAddress = isset($_POST['organization_address']) ? sanitize_text_field($_POST['organization_address']) : '';
        $companyProfile = isset($_POST['company_profile']) ? sanitize_text_field($_POST['company_profile']) : '';
        $organizationCeoName = isset($_POST['organization_ceo_name']) ? sanitize_text_field($_POST['organization_ceo_name']) : '';
        $CSR_Manager = isset($_POST['csr_manager']) ? sanitize_text_field($_POST['csr_manager']) : '';
        $organizationContactNumber = isset($_POST['organization_contact_number']) ? sanitize_text_field($_POST['organization_contact_number']) : '';
        $organizationContactEmail = isset($_POST['organization_contact_email']) ? sanitize_text_field($_POST['organization_contact_email']) : '';


        $valid_nonCorporate = true;
        $valid_Corporate = true;

        if (empty($relationship_status) || empty($name) || empty($email) || empty($phone_number) ||
            empty($address) || empty($reference_member_name) || empty($why_want_to_join) ||
            empty($adhaar_number) || empty($pan_number) || empty($tapssya_whatsapp_group_no) ||
            empty($contribution_type) || empty($password) ||
            empty($involve_social_project)
            ) {
            $valid_nonCorporate = false;
        }

        if($valid_nonCorporate === false and $relationship_status != "subscriber" ){
            wp_send_json_error('All fields are required.');
        }

        if (empty($relationship_status) || empty($name) || empty($email) || empty($phone_number) ||
            empty($address) || empty($reference_member_name) || empty($why_want_to_join) ||
            empty($adhaar_number) || empty($pan_number) || empty($tapssya_whatsapp_group_no) ||
            empty($contribution_type) || empty($password) ||empty($involve_social_project) ||
            empty($organizationName) || empty($organizationAddress) || empty($companyProfile) 
            || empty($organizationContactNumber) || empty($organizationContactEmail) 
            // || empty($organizationPanNumber) || empty($organizationTanNumber) || empty($organizationCeoName) || empty($CSR_Manager)
            ) {
            $valid_Corporate = false;
        }

        if($valid_Corporate === false and $relationship_status === "subscriber"){
            wp_send_json_error('All fields are required.');
        }

        $response_data = array(
            'relationship_status' => $relationship_status,
            'phone_number' => $phone_number,
            'address' => $address,
            'reference_member_name' => $reference_member_name,
            'why_want_to_join' => $why_want_to_join,
            'adhaar_number' => $adhaar_number,
            'pan_number' => $pan_number,
            'tapssya_whatsapp_group_no' => $tapssya_whatsapp_group_no,
            'contribution_type' => $contribution_type,
            'annual_contribution_amount' => $annual_contribution_amount,
            'password' => $password,
            'involve_social_project' => $involve_social_project,
            'organization_name' => $organizationName,
            'organization_pan_number' => $organizationPanNumber,
            'organization_tan_number' => $organizationTanNumber,
            'organization_address' => $organizationAddress,
            'company_profile' => $companyProfile,
            'organization_ceo_name' => $organizationCeoName,
            'CSR_manager' => $CSR_Manager,
            'organization_contact_number' => $organizationContactNumber,
            'organization_contact_email' => $organizationContactEmail
        );

        // Check if the email is already registered
        if (email_exists($email)) {
            wp_send_json_error('Email is already registered.');
        }
        
        // Create the user
        $user_id = wp_create_user($name, $password, $email);

        if (is_wp_error($user_id)) {
            wp_send_json_error('User registration failed.');
        }

        // Set the user role 
        $user = new WP_User($user_id);
        $user->set_role($relationship_status);


        // Store Others Value In Meta Field
        foreach($response_data as $meta_key => $meta_value){

            if(!empty($meta_value)){
                update_user_meta($user_id, $meta_key, $meta_value);
            }
        }
        wp_send_json_success($response_data);


    }
    wp_die();
}
