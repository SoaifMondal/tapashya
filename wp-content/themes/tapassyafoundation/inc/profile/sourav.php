<?php
function start_session()
{
    if (!session_id()) {
        session_start();
    }
}
add_action('init', 'start_session', 1);
function sourav_insert_attachment($remotefile, $from_url = false)
{
    if (!function_exists('handle_upload')) {
        require_once(ABSPATH . "wp-admin" . '/includes/image.php');
        require_once(ABSPATH . "wp-admin" . '/includes/file.php');
        require_once(ABSPATH . "wp-admin" . '/includes/media.php');
    }
    $time = current_time('mysql');
    if ($from_url) {
        $remotefilepath = parse_url($remotefile, PHP_URL_PATH);
        $filename = end(explode("/", $remotefilepath));
        $src = $remotefile;
    } else {
        $filename = $remotefile['name'];
        $src = $remotefile['tmp_name'];
    }

    $uploaddir = wp_upload_dir();
    $filename = wp_unique_filename($uploaddir['path'], $filename, null);
    $uploadfile = $uploaddir['url'] . '/' . $filename;
    if ($fcont = @file_get_contents($src)) {
        $file = wp_upload_bits($filename, null, $fcont);
        if (!getimagesize($uploadfile)) {
            return false;
        }
    } else {
        return false;
    }

    if ($file['error']) {
        return false;
    }

    $file_type = wp_check_filetype(basename($filename), null);
    $file['type'] = $file_type['type'];

    // Prevent PDF files from being uploaded
    if ($file['type'] === 'application/pdf') {
        return false;
    }

    $name_parts = pathinfo($filename); // Fixed variable name from $name to $filename
    $name = trim(substr($filename, 0, - (1 + strlen($name_parts['extension']))));

    $url = $file['url'];
    $type = $file['type'];
    $file = $file['file'];
    $title = $name;
    $content = '';

    if ($image_meta = @wp_read_image_metadata($file)) {
        if (trim($image_meta['title']) && !is_numeric(sanitize_title($image_meta['title']))) {
            $title = $image_meta['title'];
        } else {
            $name = explode(".", $filename);
            $title = $name[0];
        }
        if (trim($image_meta['caption'])) {
            $content = $image_meta['caption'];
        }
    }

    // Construct the attachment array
    $attachment = array(
        'post_mime_type' => $type,
        'guid' => $url,
        'post_title' => $title,
        'post_content' => $content,
    );

    // This should never be set as it would then overwrite an existing attachment.
    if (isset($attachment['ID'])) {
        unset($attachment['ID']);
    }

    // Save the data        
    $id = wp_insert_attachment($attachment, $file);
    if (!is_wp_error($id)) {
        wp_update_attachment_metadata($id, wp_generate_attachment_metadata($id, $file));
        return $id;
    } else {
        return false;
    }
}


function handle_student_file_upload()
{
    //  print_r($_POST);die();

    $student_name = $_POST['student_name'];
    $student_dob = $_POST['student_dob'];
    $student_age = $_POST['student_age'];
    $student_email = $_POST['student_email'];
    $student_contact = $_POST['student_contact'];
    $student_address = $_POST['student_address'];
    $student_father_name = $_POST['student_father_name'];
    $student_father_contact = $_POST['student_father_contact'];
    $student_mother_name = $_POST['student_mother_name'];
    $student_mother_contact = $_POST['student_mother_contact'];
    $student_father_occupation = $_POST['student_father_occupation'];
    // print_r($student_father_occupation);die();
    $student_father_income = $_POST['student_father_income'];
    $student_mother_occupation = $_POST['student_mother_occupation'];
    $student_mother_income = $_POST['student_mother_income'];
    $student_guardian_name = $_POST['student_guardian_name'];
    $student_guardian_contact = $_POST['student_guardian_contact'];
    $student_guardian_relation = $_POST['student_guardian_relation'];
    $student_guardian_income = $_POST['student_guardian_income'];
    $student_guardian_address = $_POST['student_guardian_address'];
    $student_challanges = $_POST['student_challanges'];
    //  Details of the Course & Institution the student is studying or will be studying 
    // class 10
    $class_ten_details = $_POST['class_ten_details'];
    $student_ten_mark = $_POST['student_ten_mark'];
    $student_ten_percentage = $_POST['student_ten_percentage'];
    $student_ten_passing_year = $_POST['student_ten_passing_year'];
    $student_ten_Sub = $_POST['student_ten_Sub'];
    $student_ten_institute_name = $_POST['student_ten_institute_name'];
    $student_ten_board_name = $_POST['student_ten_board_name'];
    //  class 12
    $class_twelve_details = $_POST['class_twelve_details'];
    $student_twelve_mark = $_POST['student_twelve_mark'];
    $student_twelve_percentage = $_POST['student_twelve_percentage'];
    $student_twelve_passing_year = $_POST['student_twelve_passing_year'];
    $student_twelve_Sub = $_POST['student_twelve_Sub'];
    $student_twelve_institute_name = $_POST['student_twelve_institute_name'];
    $student_twelve_board_name = $_POST['student_twelve_board_name'];
    // class 12+2
    $class_diploma_details = $_POST['class_diploma_details'];
    $student_diploma_mark = $_POST['student_diploma_mark'];
    $student_diploma_percentage = $_POST['student_diploma_percentage'];
    $student_diploma_passing_year = $_POST['student_diploma_passing_year'];
    $student_diploma_Sub = $_POST['student_diploma_Sub'];
    $student_diploma_institute_name = $_POST['student_diploma_institute_name'];
    $student_diploma_board_name = $_POST['student_diploma_board_name'];
    // class 10+2+3
    $class_graduation_details = $_POST['class_graduation_details'];
    $student_graduation_mark = $_POST['student_graduation_mark'];
    $student_graduation_percentage = $_POST['student_graduation_percentage'];
    $student_graduation_passing_year = $_POST['student_graduation_passing_year'];
    $student_graduation_Sub = $_POST['student_graduation_Sub'];
    $student_graduation_institute_name = $_POST['student_graduation_institute_name'];
    $student_graduation_board_name = $_POST['student_graduation_board_name'];
    // class Masters
    $class_masters_details = $_POST['class_masters_details'];
    $student_masters_mark = $_POST['student_masters_mark'];
    $student_masters_percentage = $_POST['student_masters_percentage'];
    $student_masters_passing_year = $_POST['student_masters_passing_year'];
    $student_masters_Sub = $_POST['student_masters_Sub'];
    $student_masters_institute_name = $_POST['student_masters_institute_name'];
    $student_masters_board_name = $_POST['student_masters_board_name'];
    // What Assistance You except
    // $student_Assistance=$_POST['student_Assistance'];
    $student_course_name = $_POST['student_course_name'];
    $student_teacher_name = $_POST['student_teacher_name'];
    $student_teacher_contact_no = $_POST['student_teacher_contact_no'];
    $student_teacher_contact_email = $_POST['student_teacher_contact_email'];
    // Scholarship Requirements
    $student_fees = $_POST['student_fees'];
    $stu_scholarship_college = $_POST['student_fees_monthly'];
    $student_fees_private = $_POST['student_fees_private'];
    $student_fees_private_monthly = $_POST['student_fees_private_monthly'];
    $student_fees_books = $_POST['student_fees_books'];
    $student_fees_books_monthly = $_POST['student_fees_books_monthly'];
    $student_fees_conveyance = $_POST['student_fees_conveyance'];
    $student_fees_conveyance_monthly = $_POST['student_fees_conveyance_monthly'];
    $student_fees_food = $_POST['student_fees_food'];
    $student_fees_food_monthly = $_POST['student_fees_food_monthly'];
    $student_fees_hostel = $_POST['student_fees_hostel'];
    $student_fees_hostel_monthly = $_POST['student_fees_hostel_monthly'];
    $student_fees_others = $_POST['student_fees_others'];
    $student_fees_others_monthly = $_POST['student_fees_others_monthly'];
    //student bank information
    $student_bank_name = $_POST['student_bank_name'];
    $student_bank_account_no = $_POST['student_bank_account_no'];
    $student_bank_ifsc_code = $_POST['student_bank_ifsc_code'];
    $student_scholarhip_amount = $_POST['student_scholarhip_amount'];
    $student_scholarhip_authority = $_POST['student_scholarhip_authority'];
    $student_Frequency = $_POST['student_Frequency'];
    $student_password = $_POST['password'];
    $student_password_confirm = $_POST['confirm-password'];

    //File data
    $student_adhaar = $_FILES['student_adhaar'];
    $student_ten_marksheet = $_FILES['student_ten_marksheet'];
    $student_twelve_marksheet = $_FILES['student_twelve_marksheet'];
    $student_diploma_marksheet = $_FILES['student_diploma_marksheet'];
    $student_parents_income = $_FILES['student_parents_income'];

    global $wpdb;
    $dt = date("Y-m-d H:i:s");
    // $apply_for = $wpdb -> escape( urldecode( $data->stu_apply_for ) );
    // $assistance_apply_for =$wpdb -> escape( urldecode( $data->assistance_apply_for ) );
    $fullname = $wpdb->escape(urldecode($student_name));
    $first_last_name = explode(' ', $fullname);
    $first_name = $first_last_name[0];
    $last_name = $first_last_name[1];
    $stu_dob = $wpdb->escape(urldecode($student_dob));
    $stu_age = $wpdb->escape(urldecode($student_age));

    $email_id = $wpdb->escape($student_email);
    $phone = $wpdb->escape($student_contact);
    $address = $wpdb->escape($student_address);
    $stu_father_name = $wpdb->escape($student_father_name);
    $stu_father_contact = $wpdb->escape($student_father_contact);
    $stu_mother_name = $wpdb->escape($student_mother_name);
    $stu_mother_contact = $wpdb->escape($student_mother_contact);
    $stu_father_occupa = $wpdb->escape($student_father_occupation);
    $stu_father_income = $wpdb->escape($student_father_income);
    $stu_mother_occupa = $wpdb->escape($student_mother_occupation);
    $stu_mother_income = $wpdb->escape($student_mother_income);
    $stu_other_parent = $wpdb->escape($student_guardian_name);
    $stu_otherparent_contact = $wpdb->escape($student_guardian_contact);
    $stu_otherparent_relation = $wpdb->escape($student_guardian_relation);
    $stu_otherparent_income = $wpdb->escape($student_guardian_income);
    $stu_otherparent_address = $wpdb->escape($student_guardian_address);

    $std_challengeFacing = $wpdb->escape($student_challanges);
    $std_secondary_status = $wpdb->escape($class_ten_details);
    $std_secondary_marks = $wpdb->escape($student_ten_mark);
    $std_secondary_parcent = $wpdb->escape($student_ten_percentage);
    $std_secondary_passyear = $wpdb->escape($student_ten_passing_year);
    $std_secondary_subject = $wpdb->escape($student_ten_Sub);
    $std_secondary_insti = $wpdb->escape($student_ten_institute_name);
    $std_secondary_boardname = $wpdb->escape($student_ten_board_name);


    $std_hs_status = $wpdb->escape($class_twelve_details);
    $std_hs_marks = $wpdb->escape($student_twelve_mark);
    $std_hs_parcent = $wpdb->escape($student_twelve_percentage);
    $std_hs_passyear = $wpdb->escape($student_twelve_passing_year);
    $std_hs_subject = $wpdb->escape($student_twelve_Sub);
    $std_hs_insti = $wpdb->escape($student_twelve_institute_name);
    $std_hs_boardname = $wpdb->escape($student_twelve_board_name);

    $std_iti_status = $wpdb->escape($class_diploma_details);
    $std_iti_marks = $wpdb->escape($student_diploma_mark);
    $std_iti_parcent = $wpdb->escape($student_diploma_percentage);
    $std_iti_passyear = $wpdb->escape($student_diploma_passing_year);
    $std_iti_subject = $wpdb->escape($student_diploma_Sub);
    $std_iti_insti = $wpdb->escape($student_diploma_institute_name);
    $std_iti_boardname = $wpdb->escape($student_diploma_board_name);

    $std_graduation_status = $wpdb->escape($class_graduation_details);
    $std_graduation_marks = $wpdb->escape($student_graduation_mark);
    $std_graduation_parcent = $wpdb->escape($student_graduation_percentage);
    $std_graduation_passyear = $wpdb->escape($student_graduation_passing_year);
    $std_graduation_subject = $wpdb->escape($student_graduation_Sub);
    $std_graduation_insti = $wpdb->escape($student_graduation_institute_name);
    $std_graduation_boardname = $wpdb->escape($student_graduation_board_name);

    $std_master_status = $wpdb->escape($class_masters_details);
    $std_master_marks = $wpdb->escape($student_masters_mark);
    $std_master_parcent = $wpdb->escape($student_masters_percentage);
    $std_master_passyear = $wpdb->escape($student_masters_passing_year);
    $std_master_subject = $wpdb->escape($student_masters_Sub);
    $std_master_insti = $wpdb->escape($student_masters_institute_name);
    $std_master_boardname = $wpdb->escape($student_masters_board_name);

    $stu_course_name = $wpdb->escape($student_course_name);
    $stu_teacher_name = $wpdb->escape($student_teacher_name);
    $stu_teacher_contact_no = $wpdb->escape($student_teacher_contact_no);
    $stu_teacher_contact_email = $wpdb->escape($student_teacher_contact_email);


    $stu_college_fees = $wpdb->escape($student_fees);
    $stu_tuition_fees = $wpdb->escape($student_fees_private);
    $stu_books_fees = $wpdb->escape($student_fees_books);
    $stu_conveyance_fees = $wpdb->escape($student_fees_conveyance);
    $stu_food_fees = $wpdb->escape($student_fees_food);
    $stu_hostel_fees = $wpdb->escape($student_fees_hostel);
    $stu_other_fees = $wpdb->escape($student_fees_others);

    $stu_scholarship_college = $wpdb->escape($stu_scholarship_college);
    $stu_scholarship_tuition = $wpdb->escape($student_fees_private_monthly);
    $stu_scholarship_books = $wpdb->escape($student_fees_books_monthly);
    $stu_scholarship_conveyance = $wpdb->escape($student_fees_conveyance_monthly);
    $stu_scholarship_food = $wpdb->escape($student_fees_food_monthly);
    $stu_scholarship_hostel = $wpdb->escape($student_fees_hostel_monthly);
    $stu_scholarship_other = $wpdb->escape($student_fees_others_monthly);

    $stu_bank_name = $wpdb->escape($student_bank_name);
    $stu_account_number = $wpdb->escape($student_bank_account_no);
    $stu_account_ifsc = $wpdb->escape($student_bank_ifsc_code);
    $stu_other_scholarship = $wpdb->escape($student_scholarhip_amount);
    $stu_otherscholarship_auth = $wpdb->escape($student_scholarhip_authority);
    $stu_otherscholarship_frequency = $wpdb->escape($student_Frequency);
    $register_pass = $wpdb->escape($student_password);
    $confirm_password = $wpdb->escape($student_password_confirm);


    $adhaar_file = $_FILES['student_adhaar'];

    $secondary_file = $_FILES['student_ten_marksheet'];

    $hs_file = $_FILES['student_twelve_marksheet'];

    $parentincome_file = $_FILES['student_parents_income'];

    $graduation_file = $_FILES['student_diploma_marksheet'];


    //    die();
    if (empty($fullname)) {
        $result['field'] = "student_name";
        $result['msg_err'] = "Please enter your full name.";
    } elseif (empty($stu_dob)) {
        $result['field'] = "student_dob";
        $result['msg_err'] = "Please enter your date of birth.";
    } elseif (empty($stu_age)) {
        $result['field'] = "student_age";
        $result['msg_err'] = "Please enter your age.";
    } elseif (empty($email_id)) {
        $result['field'] = "student_email";
        $result['msg_err'] = "Please enter your email.";
    } elseif (!is_email($email_id)) {
        $result['field'] = "student_email";
        $result['msg_err'] = "Please enter a valid email id.";
    } elseif (empty($phone)) {
        $result['field'] = "student_contact";
        $result['msg_err'] = "Please enter your phone number.";
    } elseif (empty($address)) {
        $result['field'] = "student_address";
        $result['msg_err'] = "Please enter your address.";
    } elseif (empty($stu_father_name)) {
        $result['field'] = "student_father_name";
        $result['msg_err'] = "Please enter your father's name.";
    } elseif (empty($stu_father_contact)) {
        $result['field'] = "student_father_contact";
        $result['msg_err'] = "Please enter your father's phone number.";
    } elseif (empty($stu_mother_name)) {
        $result['field'] = "student_mother_name";
        $result['msg_err'] = "Please enter your mother's name.";
    } elseif (empty($stu_mother_contact)) {
        $result['field'] = "student_mother_contact";
        $result['msg_err'] = "Please enter your mother's phone number.";
    } elseif (empty($stu_father_occupa)) {
        $result['field'] = "student_father_occupation ";
        $result['msg_err'] = "Please enter your father's occupation.";
    } elseif (empty($stu_father_income)) {
        $result['field'] = "student_father_income ";
        $result['msg'] = "Please enter your father's income.";
    } elseif (empty($register_pass)) {
        $result['field'] = "student_password";
        $result['msg_err'] = "Please enter your password.";
    } elseif (empty($confirm_password)) {
        $result['field'] = "student_password_confirm";
        $result['msg_err'] = "Please enter your confirm password.";
    } elseif ($register_pass != $confirm_password) {
        $result['msg_err'] = "Password and confirm password does not match.";
    } else {
        $user = email_exists($email_id);
        if ($user) {
            $result['field'] = "user_email";
            $result['msg_err'] = "Email ID already registered.";
        } else {
            $userdata = array(
                'user_login' => $email_id,
                'user_email' => $email_id,
                'user_pass' => $register_pass,
                'first_name' => $first_name,
                'last_name' => $last_name,
                'display_name' => $fullname,
                'role' => 'student',
            );
            $user_id = wp_insert_user($userdata);

            if (!is_wp_error($user_id)) {
                update_user_meta($user_id, 'stu_registration_number', 'NTFHES' . date('Y') . 'S00' . $user_id);
                // update_user_meta($user_id, 'assistance_apply_for', $assistance_apply_for);
                // update_user_meta($user_id, 'apply_for', $apply_for);
                update_user_meta($user_id, 'stu_dob', $stu_dob);
                update_user_meta($user_id, 'stu_age', $stu_age);
                update_user_meta($user_id, 'stu_phone', $phone);
                update_user_meta($user_id, 'stu_address', $address);
                update_user_meta($user_id, 'stu_father_name', $stu_father_name);
                update_user_meta($user_id, 'stu_father_contact', $stu_father_contact);
                update_user_meta($user_id, 'stu_mother_name', $stu_mother_name);
                update_user_meta($user_id, 'stu_mother_contact', $stu_mother_contact);
                update_user_meta($user_id, 'stu_father_occupa', $stu_father_occupa);
                update_user_meta($user_id, 'stu_father_income', $stu_father_income);
                update_user_meta($user_id, 'stu_mother_occupa', $stu_mother_occupa);
                update_user_meta($user_id, 'stu_mother_income', $stu_mother_income);
                update_user_meta($user_id, 'stu_other_parent', $stu_other_parent);
                update_user_meta($user_id, 'stu_otherparent_contact', $stu_otherparent_contact);
                update_user_meta($user_id, 'stu_otherparent_relation', $stu_otherparent_relation);
                update_user_meta($user_id, 'stu_otherparent_income', $stu_otherparent_income);
                update_user_meta($user_id, 'stu_otherparent_address', $stu_otherparent_address);



                update_user_meta($user_id, 'challengeFacing', $std_challengeFacing);
                update_user_meta($user_id, 'std_secondary_status', $std_secondary_status);
                update_user_meta($user_id, 'std_secondary_marks', $std_secondary_marks);
                update_user_meta($user_id, 'std_secondary_parcent', $std_secondary_parcent);
                update_user_meta($user_id, 'std_secondary_passyear', $std_secondary_passyear);
                update_user_meta($user_id, 'std_secondary_subject', $std_secondary_subject);
                update_user_meta($user_id, 'std_secondary_insti', $std_secondary_insti);
                update_user_meta($user_id, 'std_secondary_boardname', $std_secondary_boardname);

                update_user_meta($user_id, 'std_hs_status', $std_hs_status);
                update_user_meta($user_id, 'std_hs_marks', $std_hs_marks);
                update_user_meta($user_id, 'std_hs_parcent', $std_hs_parcent);
                update_user_meta($user_id, 'std_hs_passyear', $std_hs_passyear);
                update_user_meta($user_id, 'std_hs_subject', $std_hs_subject);
                update_user_meta($user_id, 'std_hs_insti', $std_hs_insti);
                update_user_meta($user_id, 'std_hs_boardname', $std_hs_boardname);

                update_user_meta($user_id, 'std_iti_status', $std_iti_status);
                update_user_meta($user_id, 'std_iti_marks', $std_iti_marks);
                update_user_meta($user_id, 'std_iti_parcent', $std_iti_parcent);
                update_user_meta($user_id, 'std_iti_passyear', $std_iti_passyear);
                update_user_meta($user_id, 'std_iti_subject', $std_iti_subject);
                update_user_meta($user_id, 'std_iti_insti', $std_iti_insti);
                update_user_meta($user_id, 'std_iti_boardname', $std_iti_boardname);

                update_user_meta($user_id, 'std_graduation_status', $std_graduation_status);
                update_user_meta($user_id, 'std_graduation_marks', $std_graduation_marks);
                update_user_meta($user_id, 'std_graduation_parcent', $std_graduation_parcent);
                update_user_meta($user_id, 'std_graduation_passyear', $std_graduation_passyear);
                update_user_meta($user_id, 'std_graduation_subject', $std_graduation_subject);
                update_user_meta($user_id, 'std_graduation_insti', $std_graduation_insti);
                update_user_meta($user_id, 'std_graduation_boardname', $std_graduation_boardname);

                update_user_meta($user_id, 'std_master_status', $std_master_status);
                update_user_meta($user_id, 'std_master_marks', $std_master_marks);
                update_user_meta($user_id, 'std_master_parcent', $std_master_parcent);
                update_user_meta($user_id, 'std_master_passyear', $std_master_passyear);
                update_user_meta($user_id, 'std_master_subject', $std_master_subject);
                update_user_meta($user_id, 'std_master_insti', $std_master_insti);
                update_user_meta($user_id, 'std_master_boardname', $std_master_boardname);

                update_user_meta($user_id, 'stu_course_name', $stu_course_name);

                update_user_meta($user_id, 'stu_teacher_name', $stu_teacher_name);
                update_user_meta($user_id, 'stu_teacher_contact_no', $stu_teacher_contact_no);
                update_user_meta($user_id, 'stu_teacher_contact_email', $stu_teacher_contact_email);

                update_user_meta($user_id, 'stu_college_fees', $stu_college_fees);
                update_user_meta($user_id, 'stu_tuition_fees', $stu_tuition_fees);
                update_user_meta($user_id, 'stu_books_fees', $stu_books_fees);
                update_user_meta($user_id, 'stu_conveyance_fees', $stu_conveyance_fees);
                update_user_meta($user_id, 'stu_food_fees', $stu_food_fees);
                update_user_meta($user_id, 'stu_hostel_fees', $stu_hostel_fees);
                update_user_meta($user_id, 'stu_other_fees', $stu_other_fees);
                update_user_meta($user_id, 'stu_scholarship_college', $stu_scholarship_college);
                update_user_meta($user_id, 'stu_scholarship_tuition', $stu_scholarship_tuition);
                update_user_meta($user_id, 'stu_scholarship_books', $stu_scholarship_books);
                update_user_meta($user_id, 'stu_scholarship_conveyance', $stu_scholarship_conveyance);
                update_user_meta($user_id, 'stu_scholarship_food', $stu_scholarship_food);
                update_user_meta($user_id, 'stu_scholarship_hostel', $stu_scholarship_hostel);
                update_user_meta($user_id, 'stu_scholarship_other', $stu_scholarship_other);
                update_user_meta($user_id, 'stu_bank_name', $stu_bank_name);
                update_user_meta($user_id, 'stu_account_number', $stu_account_number);
                update_user_meta($user_id, 'stu_account_ifsc', $stu_account_ifsc);
                update_user_meta($user_id, 'stu_other_scholarship', $stu_other_scholarship);
                update_user_meta($user_id, 'stu_otherscholarship_auth', $stu_otherscholarship_auth);
                update_user_meta($user_id, 'stu_otherscholarship_frequency', $stu_otherscholarship_frequency);


                if (empty($adhaar_file['name'] == '')) {

                    $adhaar_media_id = sourav_insert_attachment($adhaar_file);
                    $adhaar_url = wp_get_attachment_image_src($adhaar_media_id, 'full');
                    update_user_meta($user_id, 'stu_adhaar_doc', $adhaar_url);
                }

                if (empty($secondary_file['name'] == '')) {

                    $secondary_media_id = sourav_insert_attachment($secondary_file);
                    $secondary_url = wp_get_attachment_image_src($secondary_media_id, 'full');
                    update_user_meta($user_id, 'stu_secondary_doc', $secondary_url);
                }

                if (empty($hs_file['name'] == '')) {

                    $hs_media_id = sourav_insert_attachment($hs_file);
                    $hs_url = wp_get_attachment_image_src($hs_media_id, 'full');
                    update_user_meta($user_id, 'stu_hs_doc', $hs_url);
                }

                if (empty($parentincome_file['name'] == '')) {

                    $parentincome_media_id = sourav_insert_attachment($parentincome_file);
                    $parentincome_url = wp_get_attachment_image_src($parentincome_media_id, 'full');
                    update_user_meta($user_id, 'stu_parent_income_doc', $parentincome_url);
                }
                if (empty($graduation_file['name'] == '')) {

                    $graduation_media_id = sourav_insert_attachment($graduation_file);
                    $graduation_url = wp_get_attachment_image_src($graduation_media_id, 'full');
                    update_user_meta($user_id, 'stu_graduation_doc', $graduation_url);
                }
                $result['error'] = 0;
                $result['msg'] = 'Thanks for filling out the registration form, you will receive a confirmation mail once your details are verified & account gets activated .. Pranam !!';
                //$result['url'] = get_page_url( 'home' );
            } else {
                $result['field'] = "register_error";
                $result['msg_err'] = "Could not create account.Please Try Later.";
            }
        }
    }

    echo json_encode($result);
    exit;
}
add_action('wp_ajax_handle_student_file_upload', 'handle_student_file_upload');
add_action('wp_ajax_nopriv_handle_student_file_upload', 'handle_student_file_upload');






// ====================User Signup Function============================
function handle_user_signup()
{

    if (isset($_POST['user_email']) && isset($_POST['user_password'])) {
        $user_email = sanitize_email($_POST['user_email']);
        $user_password = $_POST['user_password'];
        //  die();

        $creds = array(
            'user_login' => $user_email,
            'user_password' => $user_password,
            'remember' => true
        );

        $user = wp_signon($creds, false);

        // print_r($user);
        // die();

        if (is_wp_error($user)) {
            $result['msg_err'] = "The username or password you entered is incorrect. Please try again.";
            // return false;
        } else {
            $user_id = $user->ID;
            $serializedData = get_user_meta($user_id, 'sk_capabilities', true);
            $keys = array_keys($serializedData);
            $key_value = $keys[0];
            $values = $serializedData[$key_value];
            $login_type = $key_value;
            switch ($login_type) {
                case "administrator":
                    $result['url'] = "/administrator";
                    break;
                case "student":
                    $_SESSION['loginid'] = $user_id;
                    $result['url'] = '/student-account/';
                    break;
                case "member":
                    $_SESSION['loginid'] = $user_id;
                    $result['url'] = '/member-dashboard';
                    break;
                case "gbmem":
                    $_SESSION['loginid'] = $user_id;
                    $result['url'] = '/gb-member-dashboard';
                    break;
                case "organization":
                    $_SESSION['loginid'] = $user_id;
                    $result['url'] = '/benificiary-member-dashboard';
                    break;
                default:
                    $result['msg_err'] = "Login Type is Wrong.";
            }

            // if (!empty($get_login_type)) {
            //     $login_type = unserialize($get_login_type);
            //     print_r($login_type);
            //     die();
            // }
            // echo "Login success";
            // $serializedData = 'a:1:{s:13:"administrator";b:1;}';
            //   $data = unserialize($serializedData);
            $result['msg'] = "Welcome! You've successfully logged in.";
            // return true;
        }
    } else {
        $result['msg_err'] = "Both email and password fields are required.";
        // return false;
    }
    echo json_encode($result);
    exit;
}

add_action('wp_ajax_handle_user_signup', 'handle_user_signup');
add_action('wp_ajax_nopriv_handle_user_signup', 'handle_user_signup');




// ========================user forgot password=============================
function handle_user_forgot_password()
{
    $forgot_user_email = $_POST['forgot_user_email'];
    if (!empty($forgot_user_email)) {
        if (email_exists($forgot_user_email)) {
            $user = get_user_by('email', $forgot_user_email);
            $user_id = $user->ID;
            $user_status = get_metadata('user', $user_id, 'pw_user_status', false);
            // print_r($user_status);
            if (!empty($user_id) && !empty($user_status)) {
                $data_id = $user_id;
                $hash_id = base64_encode($data_id);
                $reset_token = wp_generate_password(20, false);
                $resetpasswordurl = get_the_permalink(688) . "?token=$reset_token&id=$hash_id";
                update_user_meta($data_id, 'user_reset_token', $reset_token);
                $to = $forgot_user_email;
                $subject = 'Reset Password message';
                $body = '<div class="container">
        <h1>Password Reset Request</h1>
        <p>We received a request to reset your password. If you did not make this request, please ignore this email.</p>
        <p>To reset your password, please click the Link below:</p>
        <p>"' . $resetpasswordurl . '"</p>
        <p>If you have any questions or need further assistance, feel free to contact our support team.</p>
        <p>Thank you!</p>
        <p>Best regards,<br>[Your Company’s Name]</p>
        </div>';
                $headers = array('Content-Type: text/html; charset=UTF-8');
                $data = wp_mail($to, $subject, $body, $headers);
                if ($data) {
                    $result['msg'] = "Email sent successfully. Please check your registered email.";
                } else {
                    $result['msg_err'] = "The email was not sent. Please try again.";
                }
            }
        } else {
            $result['msg_err'] = "Unregistered email ID. Please verify your email and try again.";
        }
    } else {
        $result['msg_err'] = "Please enter your email ID to continue.";
    }
    echo json_encode($result);
    exit;
}

add_action('wp_ajax_handle_user_forgot_password', 'handle_user_forgot_password');
add_action('wp_ajax_nopriv_handle_user_forgot_password', 'handle_user_forgot_password');



// ==============================user rest password=============================================
function handle_user_reset_password()
{
    $user_id = $_POST['user_id'];
    $user_token = $_POST['user_token'];
    $reset_user_password = $_POST['reset_user_password'];
    //   die();
    //   echo $decrypt=hash_hmac("sha256",$user_id , false);

    if (!empty($user_token) && !empty($user_id)) {
        $decrypt_user_id = base64_decode($user_id);
        $token_data_get = get_user_meta($decrypt_user_id, 'user_reset_token', true);
        if ($token_data_get === $user_token) {
            wp_set_password($reset_user_password, $decrypt_user_id);
            $delete_token = delete_user_meta($decrypt_user_id, 'user_reset_token');
            // print_r($delete_token); die('yes');
            if ($delete_token) {
                $result['msg'] = "Your password has been updated successfully!";
            }
        } else {
            $result['msg_err'] = "Your token has expired. Please request a new one.";
        }
    } else {
        $result['msg_err'] = "Token and user ID are not set. Please click the email reset button again.";
    }
    echo json_encode($result);
    exit;
}
add_action('wp_ajax_handle_user_reset_password', 'handle_user_reset_password');
add_action('wp_ajax_nopriv_handle_user_reset_password', 'handle_user_reset_password');

/// ==============================Update Student Eduction=============================================

function update_student_education()
{
    // print_r($_POST);
    // class 10
    if (isset($_POST)) {
        global $wpdb;
        $user_id = $_POST['studentid'];
        $std_secondary_status = $wpdb->escape($_POST['class_ten_details']);
        $std_secondary_marks = $wpdb->escape($_POST['student_ten_mark']);
        $std_secondary_parcent = $wpdb->escape($_POST['student_ten_percentage']);
        $std_secondary_passyear = $wpdb->escape($_POST['student_ten_passing_year']);
        $std_secondary_subject = $wpdb->escape($_POST['student_ten_Sub']);
        $std_secondary_insti = $wpdb->escape($_POST['student_ten_institute_name']);
        $std_secondary_boardname = $wpdb->escape($_POST['student_ten_board_name']);

        if (!empty($std_secondary_status) || !empty($std_secondary_marks) || !empty($std_secondary_parcent) || !empty($std_secondary_passyear) || !empty($std_secondary_subject) || !empty($std_secondary_insti) || !empty($std_secondary_boardname)) {
            if (empty($std_secondary_status)) {
                $result['msg_err'] = "Please enter your Ten status.";
                echo json_encode($result);
                exit;
            } elseif (empty($std_secondary_marks)) {
                $result['msg_err'] = "Please enter your 10 marks.";
                echo json_encode($result);
                exit;
            } elseif (empty($std_secondary_parcent)) {
                $result['msg_err'] = "Please enter your student 10 parcent.";
                echo json_encode($result);
                exit;
            } elseif (empty($std_secondary_passyear)) {
                $result['msg_err'] = "Please enter your 10 pass year.";
                echo json_encode($result);
                exit;
            } elseif (empty($std_secondary_subject)) {
                $result['msg_err'] = "Please enter your 10 subject.";
                echo json_encode($result);
                exit;
            } elseif (empty($std_secondary_insti)) {
                $result['msg_err'] = "Please enter your 10 institution.";
                echo json_encode($result);
                exit;
            } elseif (empty($std_secondary_boardname)) {
                $result['msg_err'] = "Please enter your 10 boardname.";
                echo json_encode($result);
                exit;
            } else {
                update_user_meta($user_id, 'std_secondary_status', $std_secondary_status);
                update_user_meta($user_id, 'std_secondary_marks', $std_secondary_marks);
                update_user_meta($user_id, 'std_secondary_parcent', $std_secondary_parcent);
                update_user_meta($user_id, 'std_secondary_passyear', $std_secondary_passyear);
                update_user_meta($user_id, 'std_secondary_subject', $std_secondary_subject);
                update_user_meta($user_id, 'std_secondary_insti', $std_secondary_insti);
                update_user_meta($user_id, 'std_secondary_boardname', $std_secondary_boardname);
                //  $result['msg'] = "class 10  education status update successfully."; 
            }
            // echo json_encode($result);
            // exit;
        }

        $std_hs_status = $wpdb->escape($_POST['class_twelve_details']);
        $std_hs_marks = $wpdb->escape($_POST['student_twelve_mark']);
        $std_hs_parcent = $wpdb->escape($_POST['student_twelve_percentage']);
        $std_hs_passyear = $wpdb->escape($_POST['student_twelve_passing_year']);
        $std_hs_subject = $wpdb->escape($_POST['student_twelve_Sub']);
        $std_hs_insti = $wpdb->escape($_POST['student_twelve_institute_name']);
        $std_hs_boardname = $wpdb->escape($_POST['student_twelve_board_name']);



        if (!empty($std_hs_status) || !empty($std_hs_marks) || !empty($std_hs_parcent) || !empty($std_hs_passyear) || !empty($std_hs_subject) || !empty($std_hs_insti) || !empty($std_hs_boardname)) {
            if (empty($std_hs_status)) {
                $result['msg_err'] = "Please enter your 12 status.";
                echo json_encode($result);
                exit;
            } elseif (empty($std_hs_marks)) {
                $result['msg_err'] = "Please enter your 10 marks.";
                echo json_encode($result);
                exit;
            } elseif (empty($std_hs_parcent)) {
                $result['msg_err'] = "Please enter your student 10 parcent.";
                echo json_encode($result);
                exit;
            } elseif (empty($std_hs_passyear)) {
                $result['msg_err'] = "Please enter your 10 pass year.";
                echo json_encode($result);
                exit;
            } elseif (empty($std_hs_subject)) {
                $result['msg_err'] = "Please enter your 10 subject.";
                echo json_encode($result);
                exit;
            } elseif (empty($std_hs_insti)) {
                $result['msg_err'] = "Please enter your 10 institution.";
                echo json_encode($result);
                exit;
            } elseif (empty($std_hs_boardname)) {
                $result['msg_err'] = "Please enter your 10 boardname.";
                echo json_encode($result);
                exit;
            } else {

                update_user_meta($user_id, 'std_hs_status', $std_hs_status);
                update_user_meta($user_id, 'std_hs_marks', $std_hs_marks);
                update_user_meta($user_id, 'std_hs_parcent', $std_hs_parcent);
                update_user_meta($user_id, 'std_hs_passyear', $std_hs_passyear);
                update_user_meta($user_id, 'std_hs_subject', $std_hs_subject);
                update_user_meta($user_id, 'std_hs_insti', $std_hs_insti);
                update_user_meta($user_id, 'std_hs_boardname', $std_hs_boardname);
            }
        }
        $std_iti_status = $wpdb->escape($_POST['class_diploma_details']);
        $std_iti_marks = $wpdb->escape($_POST['student_diploma_mark']);
        $std_iti_parcent = $wpdb->escape($_POST['student_diploma_percentage']);
        $std_iti_passyear = $wpdb->escape($_POST['student_diploma_passing_year']);
        $std_iti_subject = $wpdb->escape($_POST['student_diploma_Sub']);
        $std_iti_insti = $wpdb->escape($_POST['student_diploma_institute_name']);
        $std_iti_boardname = $wpdb->escape($_POST['student_diploma_board_name']);


        if (!empty($std_iti_status) || !empty($std_iti_marks) || !empty($std_iti_parcent) || !empty($std_iti_passyear) || !empty($std_iti_subject) || !empty($std_iti_insti) || !empty($std_iti_boardname)) {
            if (empty($std_iti_status)) {
                $result['msg_err'] = "Please enter your Diploma status.";
                echo json_encode($result);
                exit;
            } elseif (empty($std_iti_marks)) {
                $result['msg_err'] = "Please enter your Diploma marks.";
                echo json_encode($result);
                exit;
            } elseif (empty($std_iti_parcent)) {
                $result['msg_err'] = "Please enter your student Diploma parcent.";
                echo json_encode($result);
                exit;
            } elseif (empty($std_iti_passyear)) {
                $result['msg_err'] = "Please enter your Diploma pass year.";
                echo json_encode($result);
                exit;
            } elseif (empty($std_iti_subject)) {
                $result['msg_err'] = "Please enter your Diploma subject.";
                echo json_encode($result);
                exit;
            } elseif (empty($std_iti_insti)) {
                $result['msg_err'] = "Please enter your Diploma institution.";
                echo json_encode($result);
                exit;
            } elseif (empty($std_iti_boardname)) {
                $result['msg_err'] = "Please enter your Diploma boardname.";
                echo json_encode($result);
                exit;
            } else {
                update_user_meta($user_id, 'std_iti_status', $std_iti_status);
                update_user_meta($user_id, 'std_iti_marks', $std_iti_marks);
                update_user_meta($user_id, 'std_iti_parcent', $std_iti_parcent);
                update_user_meta($user_id, 'std_iti_passyear', $std_iti_passyear);
                update_user_meta($user_id, 'std_iti_subject', $std_iti_subject);
                update_user_meta($user_id, 'std_iti_insti', $std_iti_insti);
                update_user_meta($user_id, 'std_iti_boardname', $std_iti_boardname);
            }
        }
        $std_graduation_status = $wpdb->escape($_POST['class_graduation_details']);
        $std_graduation_marks = $wpdb->escape($_POST['student_graduation_mark']);
        $std_graduation_parcent = $wpdb->escape($_POST['student_graduation_percentage']);
        $std_graduation_passyear = $wpdb->escape($_POST['student_graduation_passing_year']);
        $std_graduation_subject = $wpdb->escape($_POST['student_graduation_Sub']);
        $std_graduation_insti = $wpdb->escape($_POST['student_graduation_institute_name']);
        $std_graduation_boardname = $wpdb->escape($_POST['student_graduation_board_name']);
        if (!empty($std_graduation_status) || !empty($std_graduation_marks) || !empty($std_graduation_parcent) || !empty($std_graduation_passyear) || !empty($std_graduation_subject) || !empty($std_graduation_insti) || !empty($std_graduation_boardname)) {
            if (empty($std_graduation_status)) {
                $result['msg_err'] = "Please enter your graduation status.";
                echo json_encode($result);
                exit;
            } elseif (empty($std_graduation_marks)) {
                $result['msg_err'] = "Please enter your graduation marks.";
                echo json_encode($result);
                exit;
            } elseif (empty($std_graduation_parcent)) {
                $result['msg_err'] = "Please enter your student graduation parcent.";
                echo json_encode($result);
                exit;
            } elseif (empty($std_graduation_passyear)) {
                $result['msg_err'] = "Please enter your graduation pass year.";
                echo json_encode($result);
                exit;
            } elseif (empty($std_graduation_subject)) {
                $result['msg_err'] = "Please enter your graduation subject.";
                echo json_encode($result);
                exit;
            } elseif (empty($std_graduation_insti)) {
                $result['msg_err'] = "Please enter your graduation institution.";
                echo json_encode($result);
                exit;
            } elseif (empty($std_graduation_boardname)) {
                $result['msg_err'] = "Please enter your graduation boardname.";
                echo json_encode($result);
                exit;
            } else {
                update_user_meta($user_id, 'std_graduation_status', $std_graduation_status);
                update_user_meta($user_id, 'std_graduation_marks', $std_graduation_marks);
                update_user_meta($user_id, 'std_graduation_parcent', $std_graduation_parcent);
                update_user_meta($user_id, 'std_graduation_passyear', $std_graduation_passyear);
                update_user_meta($user_id, 'std_graduation_subject', $std_graduation_subject);
                update_user_meta($user_id, 'std_graduation_insti', $std_graduation_insti);
                update_user_meta($user_id, 'std_graduation_boardname', $std_graduation_boardname);
            }
        }

        $std_master_status = $wpdb->escape($_POST['class_masters_details']);
        $std_master_marks = $wpdb->escape($_POST['student_masters_mark']);
        $std_master_parcent = $wpdb->escape($_POST['student_masters_percentage']);
        $std_master_passyear = $wpdb->escape($_POST['student_masters_passing_year']);
        $std_master_subject = $wpdb->escape($_POST['student_masters_Sub']);
        $std_master_insti = $wpdb->escape($_POST['student_masters_institute_name']);
        $std_master_boardname = $wpdb->escape($_POST['student_masters_board_name']);

        if (!empty($std_master_status) || !empty($std_master_marks) || !empty($std_master_parcent) || !empty($std_master_passyear) || !empty($std_master_subject) || !empty($std_master_insti) || !empty($std_master_boardname)) {
            if (empty($std_master_status)) {
                $result['msg_err'] = "Please enter your graduation status.";
                echo json_encode($result);
                exit;
            } elseif (empty($std_master_marks)) {
                $result['msg_err'] = "Please enter your graduation marks.";
                echo json_encode($result);
                exit;
            } elseif (empty($std_master_parcent)) {
                $result['msg_err'] = "Please enter your student graduation parcent.";
                echo json_encode($result);
                exit;
            } elseif (empty($std_master_passyear)) {
                $result['msg_err'] = "Please enter your graduation pass year.";
                echo json_encode($result);
                exit;
            } elseif (empty($std_master_subject)) {
                $result['msg_err'] = "Please enter your graduation subject.";
                echo json_encode($result);
                exit;
            } elseif (empty($std_master_insti)) {
                $result['msg_err'] = "Please enter your graduation institution.";
                echo json_encode($result);
                exit;
            } elseif (empty($std_master_boardname)) {
                $result['msg_err'] = "Please enter your graduation boardname.";
                echo json_encode($result);
                exit;
            } else {
                update_user_meta($user_id, 'std_master_status', $std_master_status);
                update_user_meta($user_id, 'std_master_marks', $std_master_marks);
                update_user_meta($user_id, 'std_master_parcent', $std_master_parcent);
                update_user_meta($user_id, 'std_master_passyear', $std_master_passyear);
                update_user_meta($user_id, 'std_master_subject', $std_master_subject);
                update_user_meta($user_id, 'std_master_insti', $std_master_insti);
                update_user_meta($user_id, 'std_master_boardname', $std_master_boardname);
            }
        }

        $result['msg'] = "class education status update successfully.";
        echo json_encode($result);
        exit;
    }
}

add_action('wp_ajax_update_student_education', 'update_student_education');
add_action('wp_ajax_nopriv_update_student_education', 'update_student_education');


/// ==============================Update Student Bio=============================================
function update_student_bio()
{
    // print_r($_FILES);die();
    global $wpdb;
    $user_id = $_POST['user_id'];
    $fullname = $wpdb->escape(urldecode($_POST['student_name']));
    $first_last_name = explode(' ', $fullname);
    $first_name = $first_last_name[0];
    $last_name = $first_last_name[1];
    $stu_dob = $wpdb->escape(urldecode($_POST['student_dob']));
    $stu_age = $wpdb->escape(urldecode($_POST['student_age']));
    $email_id = $wpdb->escape($_POST['student_email']);
    $phone = $wpdb->escape($_POST['student_contact']);
    $address = $wpdb->escape($_POST['student_address']);
    $stu_father_name = $wpdb->escape($_POST['student_father_name']);
    $stu_father_contact = $wpdb->escape($_POST['student_father_contact']);
    $stu_mother_name = $wpdb->escape($_POST['student_mother_name']);
    $stu_mother_contact = $wpdb->escape($_POST['student_mother_contact']);
    $stu_father_occupa = $wpdb->escape($_POST['student_father_occupation']);
    $stu_father_income = $wpdb->escape($_POST['student_father_income']);
    $stu_mother_occupa = $wpdb->escape($_POST['student_mother_occupation']);
    $stu_mother_income = $wpdb->escape($_POST['student_mother_income']);
    $stu_other_parent = $wpdb->escape($_POST['student_guardian_name']);
    $stu_otherparent_contact = $wpdb->escape($_POST['student_guardian_contact']);
    $stu_otherparent_relation = $wpdb->escape($_POST['student_guardian_relation']);
    $stu_otherparent_income = $wpdb->escape($_POST['student_guardian_income']);
    $stu_otherparent_address = $wpdb->escape($_POST['student_guardian_address']);
    $std_challengeFacing = $wpdb->escape($_POST['student_challanges']);
    // Student profile image
    // $student_profile=$_FILES['student_profile'];
    $profile_pic = $_FILES['student_profile'];
    // print_r($profile_pic); die();
    if (empty($fullname)) {
        $result['field'] = "student_name";
        $result['msg_err'] = "Please enter your full name.";
    } elseif (empty($stu_dob)) {
        $result['field'] = "student_dob";
        $result['msg_err'] = "Please enter your date of birth.";
    } elseif (empty($stu_age)) {
        $result['field'] = "student_age";
        $result['msg_err'] = "Please enter your age.";
    } elseif (empty($email_id)) {
        $result['field'] = "student_email";
        $result['msg_err'] = "Please enter your email.";
    } elseif (!is_email($email_id)) {
        $result['field'] = "student_email";
        $result['msg_err'] = "Please enter a valid email id.";
    } elseif (empty($phone)) {
        $result['field'] = "student_contact";
        $result['msg_err'] = "Please enter your phone number.";
    } elseif (empty($address)) {
        $result['field'] = "student_address";
        $result['msg_err'] = "Please enter your address.";
    } elseif (empty($stu_father_name)) {
        $result['field'] = "student_father_name";
        $result['msg_err'] = "Please enter your father's name.";
    } elseif (empty($stu_father_contact)) {
        $result['field'] = "student_father_contact";
        $result['msg_err'] = "Please enter your father's phone number.";
    } elseif (empty($stu_mother_name)) {
        $result['field'] = "student_mother_name";
        $result['msg_err'] = "Please enter your mother's name.";
    } elseif (empty($stu_mother_contact)) {
        $result['field'] = "student_mother_contact";
        $result['msg_err'] = "Please enter your mother's phone number.";
    } elseif (empty($stu_father_occupa)) {
        $result['field'] = "student_father_occupation ";
        $result['msg_err'] = "Please enter your father's occupation.";
    } elseif (empty($stu_father_income)) {
        $result['field'] = "student_father_income ";
        $result['msg_err'] = "Please enter your father's income.";
    } else {
        wp_update_user(array('ID' => $user_id, 'user_email' => $email_id));
        wp_update_user([
            'ID' => $user_id,
            'first_name' => $first_name,
            'last_name' => $last_name,
        ]);

        $profilepic_media_id = sourav_insert_attachment($profile_pic);
        update_user_meta($user_id, $wpdb->prefix . 'user_avatar', $profilepic_media_id);
        //  print_r($profilepic_media_id);die();
        $profilepic_url = wp_get_attachment_image_src($profilepic_media_id, array('170', '170'));
        // print_r($profilepic_url);die();


        update_user_meta($user_id, 'stu_dob', $stu_dob);
        update_user_meta($user_id, 'stu_age', $stu_age);
        update_user_meta($user_id, 'stu_phone', $phone);
        update_user_meta($user_id, 'stu_address', $address);
        update_user_meta($user_id, 'stu_father_name', $stu_father_name);
        update_user_meta($user_id, 'stu_father_contact', $stu_father_contact);
        update_user_meta($user_id, 'stu_mother_name', $stu_mother_name);
        update_user_meta($user_id, 'stu_mother_contact', $stu_mother_contact);
        update_user_meta($user_id, 'stu_father_occupa', $stu_father_occupa);
        update_user_meta($user_id, 'stu_father_income', $stu_father_income);
        update_user_meta($user_id, 'stu_mother_occupa', $stu_mother_occupa);
        update_user_meta($user_id, 'stu_mother_income', $stu_mother_income);
        update_user_meta($user_id, 'stu_other_parent', $stu_other_parent);
        update_user_meta($user_id, 'stu_otherparent_contact', $stu_otherparent_contact);
        update_user_meta($user_id, 'stu_otherparent_relation', $stu_otherparent_relation);
        update_user_meta($user_id, 'stu_otherparent_income', $stu_otherparent_income);
        update_user_meta($user_id, 'stu_otherparent_address', $stu_otherparent_address);
        update_user_meta($user_id, 'challengeFacing', $std_challengeFacing);
        $result['msg'] = "data update successfully.";
    }
    echo json_encode($result);
    exit;
}
add_action('wp_ajax_update_student_bio', 'update_student_bio');
add_action('wp_ajax_nopriv_update_student_bio', 'update_student_bio');
