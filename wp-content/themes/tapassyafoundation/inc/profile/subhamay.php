<?php
//***************============= Self registration form =============****************/

add_action('wp_ajax_self_registration', 'self_registration');
add_action('wp_ajax_nopriv_self_registration', 'self_registration');

// function self_registration()
// {


function self_registration()
{
    // Check nonce
    if (!isset($_POST['self_register_nonce']) || !wp_verify_nonce($_POST['self_register_nonce'], 'self_register_action')) {
        wp_send_json_error('Nonce verification failed.');
        wp_die();
    }

    //**Collect form data */ 
    $org_name = $_POST['org_name'];
    $reg_type = $_POST['reg_type'];
    $reg_num = $_POST['reg_num'];
    $reg_auth = $_POST['reg_auth'];
    $purpose_org = $_POST['purpose_org'];
    $why_help = $_POST['why_help'];
    $phn = $_POST['phn'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $secretory_name = $_POST['secretory_name'];
    $secretory_cont = $_POST['secretory_cont'];
    $secretory_address = $_POST['secretory_address'];
    $bank_name = $_POST['bank_name'];
    $ifsc_code = $_POST['ifsc_code'];
    $branch_name = $_POST['branch_name'];
    $acc_no = $_POST['acc_no'];
    $member_ref = $_POST['member_ref'];
    $benficiary_id = $_POST['benficiary_id'];
    $password_inst = $_POST['password_inst'];
    $cnf_password_inst = $_POST['cnf_password_inst'];

    $user_role = $_POST['user_role'];

    //**Files */ 
    $reg_renew = $_FILES['reg_renew'];
    $pan_card = $_FILES['pan_card'];
    $app_copy = $_FILES['app_copy'];

    if (
        empty($org_name) || empty($reg_type) || empty($reg_num) || empty($reg_auth) ||
        empty($purpose_org) || empty($why_help) || empty($phn) ||
        empty($email) || empty($address) || empty($secretory_name) ||
        empty($secretory_cont) ||
        // || empty($secretory_address) 
        empty($bank_name)  || empty($ifsc_code) || empty($branch_name) || empty($acc_no) || empty($member_ref)
        || empty($benficiary_id) || empty($password_inst) || empty($reg_renew) || empty($pan_card) || empty($app_copy)
    ) {

        wp_send_json_error('All fields are required.');
    }


    $uploaded_files = array();

    foreach (array('reg_renew' => $reg_renew, 'pan_card' => $pan_card, 'app_copy' => $app_copy) as $key => $file) {
        if ($file['error'] === UPLOAD_ERR_OK) {
            $upload = wp_handle_upload($file, array('test_form' => false));
            if (isset($upload['file'])) {
                $uploaded_files[$key] = $upload['url'];
            } else {
                echo json_encode(array('status' => 'error', 'message' => 'File upload failed.'));
                wp_die();
            }
        } else {
            echo json_encode(array('status' => 'error', 'message' => 'File upload error.'));
            wp_die();
        }
    }

    if ($password_inst !== $cnf_password_inst) {
        echo json_encode(array('status' => 'error', 'message' => 'Passwords do not match.'));
        wp_die();
    }

    // *Insert user *//
    $userdata = array(
        'user_login' => $email,
        'user_email' => $email,
        'user_pass' => $password_inst,
        'role' => $user_role,
    );

    $user_id = wp_insert_user($userdata);

    if (is_wp_error($user_id)) {
        echo json_encode(array('status' => 'error', 'message' => $user_id->get_error_message()));
        wp_die();
    }

    //**Add user meta */ 
    update_user_meta($user_id, '_org_name', $org_name);
    update_user_meta($user_id, '_reg_type', $reg_type);
    update_user_meta($user_id, '_reg_num', $reg_num);
    update_user_meta($user_id, '_reg_auth', $reg_auth);
    update_user_meta($user_id, '_purpose_org', $purpose_org);
    update_user_meta($user_id, '_why_help', $why_help);
    update_user_meta($user_id, '_phn', $phn);
    update_user_meta($user_id, '_address', $address);
    update_user_meta($user_id, '_secretory_name', $secretory_name);
    update_user_meta($user_id, '_secretory_cont', $secretory_cont);
    update_user_meta($user_id, '_secretory_address', $secretory_address);
    update_user_meta($user_id, '_bank_name', $bank_name);
    update_user_meta($user_id, '_ifsc_code', $ifsc_code);
    update_user_meta($user_id, '_branch_name', $branch_name);
    update_user_meta($user_id, '_acc_no', $acc_no);
    update_user_meta($user_id, '_member_ref', $member_ref);
    update_user_meta($user_id, '_benficiary_id', $benficiary_id);
    update_user_meta($user_id, '_reg_renew_url', $uploaded_files['reg_renew']);
    update_user_meta($user_id, '_pan_card_url', $uploaded_files['pan_card']);
    update_user_meta($user_id, '_app_copy_url', $uploaded_files['app_copy']);

    // update_user_meta( $user_id, '_reg_renew_url', $reg_renew_url[0] );
    // update_user_meta( $user_id, '_pan_card_url', $pan_card_url[0] );
    // update_user_meta( $user_id, '_app_copy_url', $app_copy_url[0] );

    //*Send a success response*/ 

    echo json_encode(array('status' => 'success', 'message' => 'Registration successful!'));
    wp_die();
}



//***********************============ Profile edit ============**********************/

add_action('wp_ajax_profile_edit', 'profile_edit');
add_action('wp_ajax_nopriv_profile_edit', 'profile_edit');


function profile_edit()
{
    $user_id = get_current_user_id();

    $edit_username = $_POST['edit_username'];
    $edit_phone = $_POST['edit_phone'];
    $edit_address = $_POST['edit_address'];
    $reference_member_name = $_POST['edit_refmembername'];
    $edit_whywantjoin = $_POST['edit_whywantjoin'];
    $edit_aadhar = $_POST['edit_aadhar'];
    $edit_pan = $_POST['edit_pan'];
    $edit_whatsappgrp = $_POST['edit_whatsappgrp'];
    $contribution_type = $_POST['contribution_type'];
    $annual_contribution_amount = $_POST['edit_ammount'];
    $edit_password = $_POST['password_prof'];

    $image = $_FILES['profile_image'];

    // if (
    //     empty($edit_username) || empty($edit_phone) || empty($edit_address) || empty($reference_member_name) ||
    //     empty($edit_whywantjoin) || empty($edit_aadhar) || empty($edit_pan) ||
    //     empty($edit_whatsappgrp) || empty($contribution_type) || empty($annual_contribution_amount)

    // ) {

    //     wp_send_json_error('All fields are required.');
    // }

    //**Update user meta */
    $user_data = array(
        'ID' => $user_id,
        'display_name' => $edit_username,
    );
    // Update password if provided
    if (!empty($edit_password)) {
        $user_data['user_pass'] = $edit_password;
    }


    wp_update_user($user_data);
    wp_update_user($user_data);
    update_user_meta($user_id, 'phone_number', $edit_phone);
    update_user_meta($user_id, 'address', $edit_address);
    update_user_meta($user_id, 'reference_member_name', $reference_member_name);
    update_user_meta($user_id, 'why_want_to_join', $edit_whywantjoin);
    update_user_meta($user_id, 'adhaar_number', $edit_aadhar);
    update_user_meta($user_id, 'pan_number', $edit_pan);
    update_user_meta($user_id, 'tapssya_whatsapp_group_no', $edit_whatsappgrp);
    update_user_meta($user_id, 'contribution_type', $contribution_type);
    update_user_meta($user_id, 'annual_contribution_amount', $annual_contribution_amount);



    // // Handle image upload
    if (!empty($image['name'])) {
        require_once(ABSPATH . "wp-admin" . '/includes/image.php');
        require_once(ABSPATH . "wp-admin" . '/includes/file.php');
        require_once(ABSPATH . "wp-admin" . '/includes/media.php');


        $uploadedfile = $image;
        $upload_overrides = array('test_form' => false);
        $movefile = wp_handle_upload($uploadedfile, $upload_overrides);

        // echo json_encode($movefile);die;


        $filename = $movefile['file'];
        $attachment = array(
            'post_mime_type' => $movefile['type'],
            'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
            'post_content' => '',
            'post_status' => 'inherit',
            'guid' => $movefile['url']
        );
        $attachment_id = wp_insert_attachment($attachment, $movefile['url']);
        $attachment_data = wp_generate_attachment_metadata($attachment_id, $filename);
        wp_update_attachment_metadata($attachment_id, $attachment_data);
        if (!empty($attachment_id)) {
            update_user_meta($user_id, 'profile_image', $attachment_id);
        }
    }

    wp_send_json_success('Profile updated successfully.');
    wp_die();
    // echo "success";
    // die();

}
















//************************************For header Submenu class design ************************************//
class WP_Bootstrap_Navwalker extends Walker_Nav_Menu
{
    // Start Level
    function start_lvl(&$output, $depth = 0, $args = null)
    {
        $indent = str_repeat("\t", $depth);
        $classes = array('sub-menu', 'list-unstyled');
        $class_names = join(' ', apply_filters('nav_menu_submenu_css_class', $classes, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
        $output .= "\n$indent<ul$class_names>\n";
    }

    // Start Element
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $output .= $indent . '<li' . $class_names . '>';

        $atts = array();
        $atts['title']  = !empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = !empty($item->target) ? $item->target : '';
        $atts['rel']    = !empty($item->xfn)     ? $item->xfn    : '';
        $atts['href']   = !empty($item->url)     ? $item->url    : '';

        $atts['class'] = $depth > 0 ? 'sub-menu-item' : 'menu-item';

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $title = apply_filters('the_title', $item->title, $item->ID);
        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . $title . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args, $id);
    }
}
