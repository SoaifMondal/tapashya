<?php
/*****************************************
* Weaver's Web Functions & Definitions *
*****************************************/
$functions_path = get_template_directory().'/functions/';
$post_type_path = get_template_directory().'/inc/post-types/';
$post_meta_path = get_template_directory().'/inc/post-metabox/';
$theme_function_path = get_template_directory().'/inc/theme-functions/';
/*--------------------------------------*/
/* Multipost Thumbnail Functions
/*--------------------------------------*/
require_once($functions_path.'multipost-thumbnail/multi-post-thumbnails.php');
if(class_exists('MultiPostThumbnails')){
	$types = array('page');
	foreach($types as $type){
		new MultiPostThumbnails(array(
			'label' => 'Top Banner Image',
			'id' => 'top-banner-image',
			'post_type' => $type
			));
		}		
	}
add_image_size('top-banner-size-image', 1920, 700,true);
/*--------------------------------------*/
/* Optional Panel Helper Functions
/*--------------------------------------*/
require_once($functions_path.'admin-functions.php');
require_once($functions_path.'admin-interface.php');
require_once($functions_path.'theme-options.php');
function weaversweb_ftn_wp_enqueue_scripts(){
    if(!is_admin()){
        wp_enqueue_script('jquery');
        if(is_singular()and get_site_option('thread_comments')){
            wp_print_scripts('comment-reply');
			}
		}
	}
add_action('wp_enqueue_scripts','weaversweb_ftn_wp_enqueue_scripts');
function weaversweb_ftn_get_option($name){
    $options = get_option('weaversweb_ftn_options');
    if(isset($options[$name]))
        return $options[$name];
	}
function weaversweb_ftn_update_option($name, $value){
    $options = get_option('weaversweb_ftn_options');
    $options[$name] = $value;
    return update_option('weaversweb_ftn_options', $options);
	}
function weaversweb_ftn_delete_option($name){
    $options = get_option('weaversweb_ftn_options');
    unset($options[$name]);
    return update_option('weaversweb_ftn_options', $options);
	}
function get_theme_value($field){
	$field1 = weaversweb_ftn_get_option($field);
	if(!empty($field1)){
		$field_val = $field1;
		}
	return	$field_val;
	}
/*--------------------------------------*/
/* Post Type Helper Functions
/*--------------------------------------*/
require_once($post_type_path.'request-raise.php');
require_once($post_type_path.'other-request.php');
// require_once($post_type_path.'jobs.php');
// require_once($post_type_path.'services.php');
// require_once($post_type_path.'team_member.php');
// require_once($post_type_path.'testimonials.php');
/*--------------------------------------*/
/* Post Meta Helper Functions
/*--------------------------------------*/
require_once($post_meta_path.'hompage-metabox.php');
require_once($post_meta_path.'innerpage-metabox.php');
require_once($post_meta_path.'custompost-metabox.php');
/*--------------------------------------*/
/* Theme Functions
/*--------------------------------------*/
// require_once($theme_function_path.'extra-functions.php');
/*--------------------------------------*/
/* Theme Helper Functions
/*--------------------------------------*/
if(!function_exists('weaversweb_theme_setup')):
	function weaversweb_theme_setup(){
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');
		register_nav_menus(array(
			'primary' => __('Primary Menu','weaversweb'),
			'primary-after-login-member' => __('Primary Menu After Login Member','weaversweb'),
			'primary-after-login-student' => __('Primary Menu After Login Student','weaversweb'),
			'primary-after-login-account' => __('Primary Menu After Login Account','weaversweb'),
			'secondary'  => __('Secondary Menu','weaversweb'),
			));
		add_theme_support('html5',array('search-form','comment-form','comment-list','gallery','caption'));
		}
	endif;
add_action('after_setup_theme','weaversweb_theme_setup');
function weaversweb_widgets_init(){
	register_sidebar(array(
		'name'          => __('Widget Area','weaversweb'),
		'id'            => 'sidebar-1',
		'description'   => __('Add widgets here to appear in your sidebar.','weaversweb'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
		));
	}
add_action('widgets_init','weaversweb_widgets_init');
function weaversweb_scripts(){

	wp_enqueue_style('weaversweb-bootstrap',get_template_directory_uri().'/css/bootstrap.min.css',array());
	wp_enqueue_style('weaversweb-font-awesome',get_template_directory_uri().'/css/font-awesome-all.min.css',array());
	wp_enqueue_style('weaversweb-animate',get_template_directory_uri().'/css/animate.min.css',array());
	wp_enqueue_style('weaversweb-slick',get_template_directory_uri().'/css/slick.css',array());
	wp_enqueue_style('weaversweb-slick-theme',get_template_directory_uri().'/css/slick-theme.css',array());
	wp_enqueue_style('weaversweb-owlcarousel',get_template_directory_uri().'/css/owl.carousel.min.css',array());
	wp_enqueue_style('weaversweb-owl-theme',get_template_directory_uri().'/css/owl.theme.default.min.css',array());
	wp_enqueue_style('weaversweb-fancybox',get_template_directory_uri().'/fancybox/source/jquery.fancybox.css',array());
	wp_enqueue_style('weaversweb-multi-select-css',get_template_directory_uri().'/css/example-styles.css',array());
	wp_enqueue_style('weaversweb-main',get_template_directory_uri().'/css/custom.css',array());
	wp_enqueue_style('weaversweb-style',get_stylesheet_uri());

	wp_enqueue_script('weaversweb-bootstrap-script',get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),time(),true);
	wp_enqueue_script('weaversweb-bootstrap-bundle-script',get_template_directory_uri().'/js/bootstrap.bundle.min.js',array('jquery'),time(),true);
	wp_enqueue_script('weaversweb-font-awesome-script',get_template_directory_uri().'/js/font-awesome-all.min.js',array('jquery'),time(),true);
	wp_enqueue_script('weaversweb-slick-script',get_template_directory_uri().'/js/slick.js',array('jquery'),time(),true);
	wp_enqueue_script('weaversweb-owl-script',get_template_directory_uri().'/js/owl.carousel.min.js',array('jquery'),time(),true);
	wp_enqueue_script('weaversweb-fancybox-script',get_template_directory_uri().'/fancybox/source/jquery.fancybox.js',array('jquery'),time(),true);
	wp_enqueue_script('weaversweb-fancyboxlib-script',get_template_directory_uri().'/fancybox/lib/jquery.mousewheel.pack.js',array('jquery'),time(),true);
	wp_enqueue_script('weaversweb-multi-select',get_template_directory_uri().'/js/jquery.multi-select.js',array('jquery'),time(),true);
	wp_enqueue_script('weaversweb-script',get_template_directory_uri().'/js/custom.js',array('jquery'),time(),true);
	wp_localize_script( 'weaversweb-script', 'weaversAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
	}
add_action('wp_enqueue_scripts','weaversweb_scripts');
//sourav
function enqueue_datatables_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('datatables', get_template_directory_uri().'/js/jquery.dataTables.min.js', array('jquery'), time(), true);
    wp_enqueue_style('datatables-css', get_template_directory_uri().'/css/jquery.dataTables.min.css', array(), time());
}
add_action('wp_enqueue_scripts', 'enqueue_datatables_scripts');

//
add_filter('comments_template','legacy_comments');
function legacy_comments($file){
	if(!function_exists('wp_list_comments'))	$file = TEMPLATEPATH .'/legacy.comments.php';
	return $file;
	}


function weavers_insert_attachment($remotefile,$from_url=false){
	if (!function_exists( 'handle_upload' )) { 
		require_once(ABSPATH . "wp-admin" . '/includes/image.php');
		require_once(ABSPATH . "wp-admin" . '/includes/file.php');
		require_once(ABSPATH . "wp-admin" . '/includes/media.php');
	} 	
	$time = current_time('mysql');
	if($from_url){
		$remotefilepath=parse_url($remotefile,PHP_URL_PATH);
		$filename=end(explode("/",$remotefilepath));
		$src=$remotefile;
	}else{
		$filename=$remotefile['name'];
		$src=$remotefile['tmp_name'];
	}
		
	$uploaddir = wp_upload_dir();		
	$filename = wp_unique_filename( $uploaddir['path'], $filename, null );
	$uploadfile=$uploaddir['url'] . '/' .$filename;		
	if($fcont=@file_get_contents($src)){
		$file = wp_upload_bits($filename, null, $fcont);			
		//list($width, $height) = getimagesize($uploadfile);
		if(!getimagesize($uploadfile)){			
			return false;
		}
	}else{
		return false;
	}

	if ( $file['error'])
		return  false;		
		
	$file_type = wp_check_filetype(basename($filename), null );
	$file['type']=$file_type['type'];
	$name_parts = pathinfo($name);
	$name = trim( substr( $name, 0, -(1 + strlen($name_parts['extension'])) ) );

	$url = $file['url'];
	$type = $file['type'];
	$file = $file['file'];
	$title = $name;
	$content = '';	
	
	if ( $image_meta = @wp_read_image_metadata($file) ) {
		if ( trim( $image_meta['title'] ) && ! is_numeric( sanitize_title( $image_meta['title'] ) ) )
			$title = $image_meta['title'];
		else{
			$name=explode(".",$filename);
			$title = $name[0];
		}
		if ( trim( $image_meta['caption'] ) )
			$content = $image_meta['caption'];
	}
	
	// Construct the attachment array
	$attachment =array(
		'post_mime_type' => $type,
		'guid' => $url,
		'post_title' => $title,
		'post_content' => $content,
	);

	// This should never be set as it would then overwrite an existing attachment.
	if ( isset( $attachment['ID'] ) )
		unset( $attachment['ID'] );

	// Save the data		
	$id = wp_insert_attachment($attachment, $file);
	if ( !is_wp_error($id) ) {
		wp_update_attachment_metadata( $id, wp_generate_attachment_metadata( $id, $file ) );
		return $id;
	}else{
		return false;
	}
}

add_role(
    'student',
    __( 'Student', 'testdomain' ),
    array(
        'read'         => true,  // true allows this capability
        'edit_posts'   => true,
        'delete_posts' => false, // Use false to explicitly deny
    )
);

add_role(
    'member',
    __( 'Member', 'testdomain' ),
    array(
        'read'         => true,  // true allows this capability
        'edit_posts'   => true,
        'delete_posts' => false, // Use false to explicitly deny
    )
);

add_role(
    'Non-Member',
    __( 'Non-Member', 'testdomain' ),
    array(
        'read'         => true,  // true allows this capability
        'edit_posts'   => false,
        'delete_posts' => false, // Use false to explicitly deny
    )
);

add_role(
    'accountant_member',
    __( 'Accountant Member', 'testdomain' ),
    array(
        'read'         => true,  // true allows this capability
        'edit_posts'   => true,
        'delete_posts' => false, // Use false to explicitly deny
    )
);

add_role(
    'accountant_admin',
    __( 'Accountant Admin', 'testdomain' ),
    array(
        'read'         => true,  // true allows this capability
        'edit_posts'   => true,
        'delete_posts' => false, // Use false to explicitly deny
    )
);

add_role(
    'organization',
    __( 'Organization', 'testdomain' ),
    array(
        'read'         => true,  // true allows this capability
        'edit_posts'   => true,
        'delete_posts' => false, // Use false to explicitly deny
    )
);

add_role(
    'gbmem',
    __( 'GBMem', 'testdomain' ),
    array(
        'read'         => true,  // true allows this capability
        'edit_posts'   => true,
        'delete_posts' => false, // Use false to explicitly deny
    )
);

add_role(
    'treasure',
    __( 'Treasure', 'testdomain' ),
    array(
        'read'         => true,  // true allows this capability
        'edit_posts'   => true,
        'delete_posts' => false, // Use false to explicitly deny
    )
);

// $role_object = get_role( 'member' );
// $role_object->add_cap( 'list_users', false );

function after_registration_mail( $user_id ){
	$user = get_user_by( 'id', $user_id );
	//$to = $email;
	//$to = 'committee.tapassya@gmail.com';
	$to       ='tapassya-workingcommittee@googlegroups.com';
	//$to 	  ='sourav.sarkar@weavers-web.com'; 
	//$admin    = get_option('admin_email');              
	$headers  = "MIME-Version: 1.0\r\n";
	$headers .= "From: ".get_bloginfo('name')."<no-reply@tapassya.org> \r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
	$headers .= "Reply-To: ".get_bloginfo('name'). "<no-reply@tapassya.org> \r\n";
	$subject = 'New Member Registration';
	$message = 'Hi,' . "<br><br>";
	$message .= 'New user successfully registered to your website' . "<br>";
	$message .= 'User Details: ' . "<br>";
	$message .= 'User Name: '. $user->first_name.' '.$user->last_name . "<br>";
	$message .= 'User Email: '. $user->user_email ."<br><br>";
	$message .= 'Thank You..';

	wp_mail($to, $subject, $message, $headers);	
}
// wp_mail('simanta.karmakar@weavers-web.com', 'New Member Registration', 'text');

function random_string( $length ) {
	$key  = '';
	$keys = array_merge( range( 0, 9 ), range( 'a', 'z' ) );
	for ( $i = 0; $i < $length; $i++ ) {
		$key .= $keys[array_rand( $keys )];
	}
	return $key;
}

function send_rp_mail( $resetpasspage, $email, $user_name ){
	$to = $email; 
    $headers  = "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	$headers .= 'From: '.get_bloginfo('name') . "<noreply@tapassya.org>\r\n";
	$subject = "Forget Password";
	$message = 'Hi '.$user_name . "<br><br>";
	$message .= 'You have requested to reset your Dealsgig password. To do so, follow the link below:' . "<br>";
	$message .= '<a href='.$resetpasspage.'>'.$resetpasspage.'</a>'."<br>";
	$message .= 'You can click on the above link or just copy and paste it into your browser.'."<br>";
	$message .= 'If you need further assistance, just reply to this email.'."<br><br>";
	$message .= 'Thank You..';
	wp_mail($to, $subject, $message, $headers);	
}

/* ajax request handle */
add_action( 'wp_ajax_weaversAjax', 'handle_ajax_request' );
add_action( 'wp_ajax_nopriv_weaversAjax', 'handle_ajax_request' );

function handle_ajax_request(){
	$action = $_POST['weaversAction'];
	global $current_user, $wpdb;
	$result = array('error'=>1,'msg'=>'Sorry! we are unable process your Request','field'=>'');
	$data = json_decode(stripslashes($_POST['data']));
	
	switch($action){
		case 'MemberRegister':	
			$dt = date("Y-m-d H:i:s");	
			$fullname = $wpdb -> escape( urldecode( $data->member_name ) );
			$first_last_name = explode( ' ', $fullname );
			$first_name = $first_last_name[0];
			$last_name = $first_last_name[1];
			$email_id = $wpdb -> escape( $data->member_email );	
			$phone = $wpdb -> escape( $data->member_phone );
			$address = $wpdb -> escape( $data->member_address );
			$member_adhaar_number = $wpdb -> escape( $data->member_adhaar_number );
			$member_pan_number = $wpdb -> escape( $data->member_pan_number );
			$relationship_status = $wpdb -> escape( $data->relationship_status );
			$how_you_contribute = $wpdb -> escape( $data->how_you_contribute );	
			$contribution_amount = $wpdb -> escape( $data->contribution_amount );
			$organization_name = $wpdb -> escape( $data->organization_name );
			$pan_number = $wpdb -> escape( $data->pan_number );
			$tan_number = $wpdb -> escape( $data->tan_number );	
			$organization_address = $wpdb -> escape( $data->organization_address );	
			$company_profile = $wpdb -> escape( $data->company_profile );
			$unit_head_name = $wpdb -> escape( $data->unit_head_name );	
			$csr_manager_name = $wpdb -> escape( $data->csr_manager_name );
			$organization_contact = $wpdb -> escape( $data->organization_contact );
			$organization_contactemail = $wpdb -> escape( $data->organization_contactemail );
			$interest_project_area = $wpdb -> escape( $data->interest_project_area );	
			$register_pass = $wpdb -> escape( $data->member_password );
			$confirm_password = $wpdb -> escape( $data->member_confirm_password );			
			if(empty($fullname)){
				$result['field'] = "member_name";
				$result['msg'] = "Please enter your full name.";	
			}elseif(empty($email_id)){
				$result['field'] = "member_email";
				$result['msg'] = "Please enter your email.";	
			}elseif(!is_email($email_id)){
				$result['field'] = "member_email";
				$result['msg'] = "Please enter a valid email id.";	
			}elseif(empty($phone)){
				$result['field'] = "member_phone";
				$result['msg'] = "Please enter your phone number.";	
			}elseif(empty($address)){
				$result['field'] = "member_address";
				$result['msg'] = "Please enter your address.";	
			}elseif(empty($register_pass)){
				$result['field'] = "member_password";
				$result['msg'] = "Please enter your password.";	
			}elseif(empty($confirm_password)){
				$result['field'] = "member_confirm_password";
				$result['msg'] = "Please enter your confirm password.";	
			}elseif( $register_pass != $confirm_password ){
				$result['msg'] = "Password and confirm password does not match.";	
			}else{
				$user = email_exists( $email_id );	
				if( $user ){
					$result['field'] = "user_email";			
					$result['msg'] = "Email ID already exists !! Please try with a different one or Request for passowrd reset if you have already registered earlier.";		
				}else{						
					$userdata = array(
						'user_login'  	=> $email_id,
						'user_email'  	=> $email_id,
						'user_pass'   	=> $register_pass,
						'first_name' 	=> $first_name,
						'last_name'		=> $last_name,
						'display_name'	=> $fullname,
						'role' 			=> 'member'
					);
					$user_id = wp_insert_user( $userdata);
					
					if( !is_wp_error($user_id) ){	
						update_user_meta($user_id, 'phone_number', $phone);
						update_user_meta($user_id, 'address', $address);
						update_user_meta($user_id, 'member_adhaar_number', $member_adhaar_number);
						update_user_meta($user_id, 'member_pan_number', $member_pan_number);
						update_user_meta($user_id, 'relationship_status', $relationship_status);
						update_user_meta($user_id, 'how_you_contribute', $how_you_contribute);
						update_user_meta($user_id, 'contribution_amount', $contribution_amount);
						update_user_meta($user_id, 'organization_name', $organization_name);
						update_user_meta($user_id, 'pan_number', $pan_number);
						update_user_meta($user_id, 'tan_number', $tan_number);
						update_user_meta($user_id, 'organization_address', $organization_address);
						update_user_meta($user_id, 'company_profile', $company_profile);
						update_user_meta($user_id, 'unit_head_name', $unit_head_name);
						update_user_meta($user_id, 'csr_manager_name', $csr_manager_name);
						update_user_meta($user_id, 'organization_contact', $organization_contact);
						update_user_meta($user_id, 'organization_contactemail', $organization_contactemail);
						update_user_meta($user_id, 'interest_project_area', $interest_project_area);

						after_registration_mail($user_id);

						$result['error'] = 0;			
						$result['msg'] = 'Thanks for filling out the registration form, you will receive a confirmation mail once your details are verified & account gets activated .. Pranam !!';	
						//$result['url'] = get_page_url( 'home' );
					}else{
						$result['field'] = "register_error";	
						$result['msg'] = "Could not create account.Try Later.";					
					}			
				}
			}					
		break;

		case 'StudentRegister':	
			$dt = date("Y-m-d H:i:s");	
			$apply_for = $wpdb -> escape( urldecode( $data->stu_apply_for ) );
			$assistance_apply_for =$wpdb -> escape( urldecode( $data->assistance_apply_for ) );
			$fullname = $wpdb -> escape( urldecode( $data->stu_name ) );
			$first_last_name = explode( ' ', $fullname );
			$first_name = $first_last_name[0];
			$last_name = $first_last_name[1];
			$stu_dob = $wpdb -> escape( urldecode( $data->stu_dob ) );
			$stu_age = $wpdb -> escape( urldecode( $data->stu_age ) );
			$email_id = $wpdb -> escape( $data->stu_email );	
			$phone = $wpdb -> escape( $data->stu_contact );
			$address = $wpdb -> escape( $data->stu_address );
			$stu_father_name = $wpdb -> escape( $data->stu_father_name );
			$stu_father_contact = $wpdb -> escape( $data->stu_father_contact );	
			$stu_mother_name = $wpdb -> escape( $data->stu_mother_name );
			$stu_mother_contact = $wpdb -> escape( $data->stu_mother_contact );	
			$stu_father_occupa = $wpdb -> escape( $data->stu_father_occupa );
			$stu_father_income = $wpdb -> escape( $data->stu_father_income );
			$stu_mother_occupa = $wpdb -> escape( $data->stu_mother_occupa );
			$stu_mother_income = $wpdb -> escape( $data->stu_mother_income );
			$stu_other_parent = $wpdb -> escape( $data->stu_other_parent );	
			$stu_otherparent_contact = $wpdb -> escape( $data->stu_otherparent_contact );
			$stu_otherparent_relation = $wpdb -> escape( $data->stu_otherparent_relation );	
			$stu_otherparent_income = $wpdb -> escape( $data->stu_otherparent_income );	
			$stu_otherparent_address = $wpdb -> escape( $data->stu_otherparent_address );
			// $stu_course_type = $wpdb -> escape( $data->stu_course_type );
			// $stu_secondary_remark = $wpdb -> escape( $data->stu_secondary_remark );	
			// $stu_highsecondary_remark = $wpdb -> escape( $data->stu_highsecondary_remark );
			// $stu_diploma_remark = $wpdb -> escape( $data->stu_diploma_remark );	
			// $stu_iti_remark = $wpdb -> escape( $data->stu_iti_remark );	
			// $stu_graduation_remark = $wpdb -> escape( $data->stu_graduation_remark );
			// $stu_masterdegree_remark = $wpdb -> escape( $data->stu_masterdegree_remark );
			// $stu_other_remark = $wpdb -> escape( $data->stu_other_remark );
			$std_challengeFacing  = $wpdb -> escape( $data->challengeFacing );
			$std_secondary_status = $wpdb -> escape( $data->std_secondary_status );
			$std_secondary_marks = $wpdb -> escape( $data->std_secondary_marks );
			$std_secondary_parcent = $wpdb -> escape( $data->std_secondary_parcent );
			$std_secondary_passyear = $wpdb -> escape( $data->std_secondary_passyear );
			$std_secondary_subject = $wpdb -> escape( $data->std_secondary_subject );
			$std_secondary_insti = $wpdb -> escape( $data->std_secondary_insti );
			$std_secondary_boardname = $wpdb -> escape( $data->std_secondary_boardname );

			$std_hs_status = $wpdb -> escape( $data->std_hs_status );
			$std_hs_marks = $wpdb -> escape( $data->std_hs_marks );
			$std_hs_parcent = $wpdb -> escape( $data->std_hs_parcent );
			$std_hs_passyear = $wpdb -> escape( $data->std_hs_passyear );
			$std_hs_subject = $wpdb -> escape( $data->std_hs_subject );
			$std_hs_insti = $wpdb -> escape( $data->std_hs_insti );
			$std_hs_boardname = $wpdb -> escape( $data->std_hs_boardname );

			$std_iti_status = $wpdb -> escape( $data->std_iti_status );
			$std_iti_marks = $wpdb -> escape( $data->std_iti_marks );
			$std_iti_parcent = $wpdb -> escape( $data->std_iti_parcent );
			$std_iti_passyear = $wpdb -> escape( $data->std_iti_passyear );
			$std_iti_subject = $wpdb -> escape( $data->std_iti_subject );
			$std_iti_insti = $wpdb -> escape( $data->std_iti_insti );
			$std_iti_boardname = $wpdb -> escape( $data->std_iti_boardname );

			$std_graduation_status = $wpdb -> escape( $data->std_graduation_status );
			$std_graduation_marks = $wpdb -> escape( $data->std_graduation_marks );
			$std_graduation_parcent = $wpdb -> escape( $data->std_graduation_parcent );
			$std_graduation_passyear = $wpdb -> escape( $data->std_graduation_passyear );
			$std_graduation_subject = $wpdb -> escape( $data->std_graduation_subject );
			$std_graduation_insti = $wpdb -> escape( $data->std_graduation_insti );
			$std_graduation_boardname = $wpdb -> escape( $data->std_graduation_boardname );

			$std_master_status = $wpdb -> escape( $data->std_master_status );
			$std_master_marks = $wpdb -> escape( $data->std_master_marks );
			$std_master_parcent = $wpdb -> escape( $data->std_master_parcent );
			$std_master_passyear = $wpdb -> escape( $data->std_master_passyear );
			$std_master_subject = $wpdb -> escape( $data->std_master_subject );
			$std_master_insti = $wpdb -> escape( $data->std_master_insti );
			$std_master_boardname = $wpdb -> escape( $data->std_master_boardname );

			$stu_course_name = $wpdb -> escape( $data->stu_course_name );
			// $stu_institution_name = $wpdb -> escape( $data->stu_institution_name );	
			$stu_teacher_name = $wpdb -> escape( $data->stu_teacher_name );	
			$stu_teacher_contact_no = $wpdb -> escape( $data->stu_teacher_contact_no );
			$stu_teacher_contact_email = $wpdb -> escape( $data->stu_teacher_contact_email );
			// $stu_completed_course_name = $wpdb -> escape( $data->stu_completed_course_name );
			// $stu_completed_passyear = $wpdb -> escape( $data->stu_completed_passyear );	
			// $stu_completed_coursegrade = $wpdb -> escape( $data->stu_completed_coursegrade );
			$stu_college_fees = $wpdb -> escape( $data->stu_college_fees );	
			$stu_tuition_fees = $wpdb -> escape( $data->stu_tuition_fees );
			$stu_books_fees = $wpdb -> escape( $data->stu_books_fees );
			$stu_conveyance_fees = $wpdb -> escape( $data->stu_conveyance_fees );
			$stu_food_fees = $wpdb -> escape( $data->stu_food_fees );
			$stu_hostel_fees = $wpdb -> escape( $data->stu_hostel_fees );	
			$stu_other_fees = $wpdb -> escape( $data->stu_other_fees );	
			$stu_scholarship_college = $wpdb -> escape( $data->stu_scholarship_college );
			$stu_scholarship_tuition = $wpdb -> escape( $data->stu_scholarship_tuition );
			$stu_scholarship_books = $wpdb -> escape( $data->stu_scholarship_books );
			$stu_scholarship_conveyance = $wpdb -> escape( $data->stu_scholarship_conveyance );
			$stu_scholarship_food = $wpdb -> escape( $data->stu_scholarship_food );
			$stu_scholarship_hostel = $wpdb -> escape( $data->stu_scholarship_hostel );	
			$stu_scholarship_other = $wpdb -> escape( $data->stu_scholarship_other );	
			$stu_bank_name = $wpdb -> escape( $data->stu_bank_name );
			$stu_account_number = $wpdb -> escape( $data->stu_account_number );	
			$stu_account_ifsc = $wpdb -> escape( $data->stu_account_ifsc );
			$stu_other_scholarship = $wpdb -> escape( $data->stu_other_scholarship );
			$stu_otherscholarship_auth = $wpdb -> escape( $data->stu_otherscholarship_auth );
			$stu_otherscholarship_frequency = $wpdb -> escape( $data->stu_otherscholarship_frequency );	
			$register_pass = $wpdb -> escape( $data->student_password );
			$confirm_password = $wpdb -> escape( $data->student_confirm_password );

			$profile_pic = $_FILES['stu_profile_picture'];
			$adhaar_file = $_FILES['stu_adhaar_doc'];
			$hs_file = $_FILES['stu_hs_doc'];
			$parentincome_file = $_FILES['stu_parent_income_doc'];
			$secondary_file = $_FILES['stu_secondary_doc'];
			$graduation_file = $_FILES['stu_graduation_doc'];

			if(empty($fullname)){
				$result['field'] = "stu_name";
				$result['msg'] = "Please enter your full name.";	
			}elseif(empty($stu_dob)){
				$result['field'] = "stu_dob";
				$result['msg'] = "Please enter your date of birth.";	
			}elseif(empty($stu_age)){
				$result['field'] = "stu_age";
				$result['msg'] = "Please enter your age.";	
			}elseif(empty($email_id)){
				$result['field'] = "stu_email";
				$result['msg'] = "Please enter your email.";	
			}elseif(!is_email($email_id)){
				$result['field'] = "stu_email";
				$result['msg'] = "Please enter a valid email id.";	
			}elseif(empty($phone)){
				$result['field'] = "stu_contact";
				$result['msg'] = "Please enter your phone number.";	
			}elseif(empty($address)){
				$result['field'] = "stu_address";
				$result['msg'] = "Please enter your address.";	
			}elseif(empty($stu_father_name)){
				$result['field'] = "stu_father_name";
				$result['msg'] = "Please enter your father's name.";	
			}elseif(empty($stu_father_contact)){
				$result['field'] = "stu_father_contact";
				$result['msg'] = "Please enter your father's phone number.";	
			}elseif(empty($stu_mother_name)){
				$result['field'] = "stu_mother_name";
				$result['msg'] = "Please enter your mother's name.";	
			}elseif(empty($stu_mother_contact)){
				$result['field'] = "stu_mother_contact";
				$result['msg'] = "Please enter your mother's phone number.";	
			}elseif(empty($stu_father_occupa)){
				$result['field'] = "stu_father_occupa";
				$result['msg'] = "Please enter your father's occupation.";	
			}elseif(empty($stu_father_income)){
				$result['field'] = "stu_father_income";
				$result['msg'] = "Please enter your father's income.";	
			}elseif(empty($register_pass)){
				$result['field'] = "student_password";
				$result['msg'] = "Please enter your password.";	
			}elseif(empty($confirm_password)){
				$result['field'] = "student_confirm_password";
				$result['msg'] = "Please enter your confirm password.";	
			}elseif( $register_pass != $confirm_password ){
				$result['msg'] = "Password and confirm password does not match.";	
			}else{
				$user = email_exists( $email_id );	
				if( $user ){
					$result['field'] = "user_email";			
					$result['msg'] = "Email ID already registered.";		
				}else{						
					$userdata = array(
						'user_login'	=> $email_id,
						'user_email'  	=> $email_id,
						'user_pass'   	=> $register_pass,
						'first_name' 	=> $first_name,
						'last_name'		=> $last_name,
						'display_name'	=> $fullname,
						'role'			=> 'student',
					);
					$user_id = wp_insert_user( $userdata );
					
					if( !is_wp_error($user_id) ){	
						update_user_meta($user_id, 'stu_registration_number', 'NTFHES'.date('Y').'S00'.$user_id);
						update_user_meta($user_id, 'assistance_apply_for', $assistance_apply_for);
						update_user_meta($user_id, 'apply_for', $apply_for);
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
						// update_user_meta($user_id, 'stu_course_type', $stu_course_type);
						// update_user_meta($user_id, 'stu_secondary_remark', $stu_secondary_remark);
						// update_user_meta($user_id, 'stu_highsecondary_remark', $stu_highsecondary_remark);
						// update_user_meta($user_id, 'stu_diploma_remark', $stu_diploma_remark);
						// update_user_meta($user_id, 'stu_iti_remark', $stu_iti_remark);
						// update_user_meta($user_id, 'stu_graduation_remark', $stu_graduation_remark);
						// update_user_meta($user_id, 'stu_masterdegree_remark', $stu_masterdegree_remark);
						// update_user_meta($user_id, 'stu_other_remark', $stu_other_remark);
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
						// update_user_meta($user_id, 'stu_institution_name', $stu_institution_name);
						update_user_meta($user_id, 'stu_teacher_name', $stu_teacher_name);
						update_user_meta($user_id, 'stu_teacher_contact_no', $stu_teacher_contact_no);
						update_user_meta($user_id, 'stu_teacher_contact_email', $stu_teacher_contact_email);
						// update_user_meta($user_id, 'stu_completed_course_name', $stu_completed_course_name);
						// update_user_meta($user_id, 'stu_completed_passyear', $stu_completed_passyear);
						// update_user_meta($user_id, 'stu_completed_coursegrade', $stu_completed_coursegrade);
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

						$profilepic_media_id = weavers_insert_attachment($profile_pic);
						$profilepic_url = wp_get_attachment_image_src( $profilepic_media_id, array( '170', '170' ) );

						$adhaar_media_id = weavers_insert_attachment($adhaar_file);
						$adhaar_url = wp_get_attachment_image_src( $adhaar_media_id, 'full' );

						$hs_media_id = weavers_insert_attachment($hs_file);	
						$hs_url = wp_get_attachment_image_src( $hs_media_id, 'full' );

						$parentincome_media_id = weavers_insert_attachment($parentincome_file);
						$parentincome_url = wp_get_attachment_image_src( $parentincome_media_id, 'full' );

						$secondary_media_id = weavers_insert_attachment($secondary_file);
						$secondary_url = wp_get_attachment_image_src( $secondary_media_id, 'full' );

						$graduation_media_id = weavers_insert_attachment($graduation_file);	
						$graduation_url = wp_get_attachment_image_src( $graduation_media_id, 'full' );

						update_user_meta( $user_id, $wpdb->prefix.'user_avatar', $profilepic_media_id );
						update_user_meta( $user_id, 'stu_adhaar_doc', $adhaar_url );
						update_user_meta( $user_id, 'stu_hs_doc', $hs_url );
						update_user_meta( $user_id, 'stu_parent_income_doc', $parentincome_url );
						update_user_meta( $user_id, 'stu_secondary_doc', $secondary_url );
						update_user_meta( $user_id, 'stu_graduation_doc', $graduation_url );

						$result['error'] = 0;			
						$result['msg'] = 'Thanks for filling out the registration form, you will receive a confirmation mail once your details are verified & account gets activated .. Pranam !!';	
						//$result['url'] = get_page_url( 'home' );
					}else{
						$result['field'] = "register_error";	
						$result['msg'] = "Could not create account.Please Try Later.";					
					}			
				}
			}					
		break;

		case 'StudentBioUpdate':	
			$fullname = $wpdb -> escape( urldecode( $data->stu_name ) );
			$first_last_name = explode( ' ', $fullname );
			$first_name = $first_last_name[0];
			$last_name = $first_last_name[1];	
			$phone = $wpdb -> escape( $data->stu_contact );
			$address = $wpdb -> escape( $data->stu_address );
			$stu_father_name = $wpdb -> escape( $data->stu_father_name );
			$stu_father_contact = $wpdb -> escape( $data->stu_father_contact );	
			$stu_mother_name = $wpdb -> escape( $data->stu_mother_name );
			$stu_mother_contact = $wpdb -> escape( $data->stu_mother_contact );	
			$stu_father_occupa = $wpdb -> escape( $data->stu_father_occupa );
			$stu_father_income = $wpdb -> escape( $data->stu_father_income );
			$stu_mother_occupa = $wpdb -> escape( $data->stu_mother_occupa );
			$stu_mother_income = $wpdb -> escape( $data->stu_mother_income );

			$studentid = $wpdb -> escape( $data->bio_student_id );

			if(empty($fullname)){
				$result['field'] = "stu_name";
				$result['msg'] = "Please enter your full name.";	
			}elseif(empty($phone)){
				$result['field'] = "stu_contact";
				$result['msg'] = "Please enter your phone number.";	
			}elseif(empty($address)){
				$result['field'] = "stu_address";
				$result['msg'] = "Please enter your address.";	
			}elseif(empty($stu_father_name)){
				$result['field'] = "stu_father_name";
				$result['msg'] = "Please enter your father's name.";	
			}elseif(empty($stu_father_contact)){
				$result['field'] = "stu_father_contact";
				$result['msg'] = "Please enter your father's phone number.";	
			}elseif(empty($stu_mother_name)){
				$result['field'] = "stu_mother_name";
				$result['msg'] = "Please enter your mother's name.";	
			}elseif(empty($stu_mother_contact)){
				$result['field'] = "stu_mother_contact";
				$result['msg'] = "Please enter your mother's phone number.";	
			}elseif(empty($stu_father_occupa)){
				$result['field'] = "stu_father_occupa";
				$result['msg'] = "Please enter your father's occupation.";	
			}elseif(empty($stu_father_income)){
				$result['field'] = "stu_father_income";
				$result['msg'] = "Please enter your father's income.";	
			}else{
				$userdata = array(
					'ID' 			=> $studentid,
					'first_name' 	=> $first_name,
					'last_name'		=> $last_name,
					'display_name'	=> $fullname,
				);
				$user_id = wp_update_user( $userdata );
				if($user_id){
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

					$result['error'] = 0;			
					$result['msg'] = 'Student biography successfully updated.';
				}
			}
		break;

		case 'StudentEduUpdate':
			$std_challengeFacing = $wpdb -> escape( $data->challengeFacing );;
			$std_secondary_status = $wpdb -> escape( $data->std_secondary_status );
			$std_secondary_marks = $wpdb -> escape( $data->std_secondary_marks );
			$std_secondary_parcent = $wpdb -> escape( $data->std_secondary_parcent );
			$std_secondary_passyear = $wpdb -> escape( $data->std_secondary_passyear );
			$std_secondary_subject = $wpdb -> escape( $data->std_secondary_subject );
			$std_secondary_insti = $wpdb -> escape( $data->std_secondary_insti );
			$std_secondary_boardname = $wpdb -> escape( $data->std_secondary_boardname );

			$std_hs_status = $wpdb -> escape( $data->std_hs_status );
			$std_hs_marks = $wpdb -> escape( $data->std_hs_marks );
			$std_hs_parcent = $wpdb -> escape( $data->std_hs_parcent );
			$std_hs_passyear = $wpdb -> escape( $data->std_hs_passyear );
			$std_hs_subject = $wpdb -> escape( $data->std_hs_subject );
			$std_hs_insti = $wpdb -> escape( $data->std_hs_insti );
			$std_hs_boardname = $wpdb -> escape( $data->std_hs_boardname );

			$std_iti_status = $wpdb -> escape( $data->std_iti_status );
			$std_iti_marks = $wpdb -> escape( $data->std_iti_marks );
			$std_iti_parcent = $wpdb -> escape( $data->std_iti_parcent );
			$std_iti_passyear = $wpdb -> escape( $data->std_iti_passyear );
			$std_iti_subject = $wpdb -> escape( $data->std_iti_subject );
			$std_iti_insti = $wpdb -> escape( $data->std_iti_insti );
			$std_iti_boardname = $wpdb -> escape( $data->std_iti_boardname );

			$std_graduation_status = $wpdb -> escape( $data->std_graduation_status );
			$std_graduation_marks = $wpdb -> escape( $data->std_graduation_marks );
			$std_graduation_parcent = $wpdb -> escape( $data->std_graduation_parcent );
			$std_graduation_passyear = $wpdb -> escape( $data->std_graduation_passyear );
			$std_graduation_subject = $wpdb -> escape( $data->std_graduation_subject );
			$std_graduation_insti = $wpdb -> escape( $data->std_graduation_insti );
			$std_graduation_boardname = $wpdb -> escape( $data->std_graduation_boardname );

			$std_master_status = $wpdb -> escape( $data->std_master_status );
			$std_master_marks = $wpdb -> escape( $data->std_master_marks );
			$std_master_parcent = $wpdb -> escape( $data->std_master_parcent );
			$std_master_passyear = $wpdb -> escape( $data->std_master_passyear );
			$std_master_subject = $wpdb -> escape( $data->std_master_subject );
			$std_master_insti = $wpdb -> escape( $data->std_master_insti );
			$std_master_boardname = $wpdb -> escape( $data->std_master_boardname );

			$studentid = $wpdb -> escape( $data->student_id );

			if(!empty($studentid)){
				update_user_meta($studentid, 'challengeFacing', $std_challengeFacing);
				update_user_meta($studentid, 'std_secondary_status', $std_secondary_status);
				update_user_meta($studentid, 'std_secondary_marks', $std_secondary_marks);
				update_user_meta($studentid, 'std_secondary_parcent', $std_secondary_parcent);
				update_user_meta($studentid, 'std_secondary_passyear', $std_secondary_passyear);
				update_user_meta($studentid, 'std_secondary_subject', $std_secondary_subject);
				update_user_meta($studentid, 'std_secondary_insti', $std_secondary_insti);
				update_user_meta($studentid, 'std_secondary_boardname', $std_secondary_boardname);

				update_user_meta($studentid, 'std_hs_status', $std_hs_status);
				update_user_meta($studentid, 'std_hs_marks', $std_hs_marks);
				update_user_meta($studentid, 'std_hs_parcent', $std_hs_parcent);
				update_user_meta($studentid, 'std_hs_passyear', $std_hs_passyear);
				update_user_meta($studentid, 'std_hs_subject', $std_hs_subject);
				update_user_meta($studentid, 'std_hs_insti', $std_hs_insti);
				update_user_meta($studentid, 'std_hs_boardname', $std_hs_boardname);

				update_user_meta($studentid, 'std_iti_status', $std_iti_status);
				update_user_meta($studentid, 'std_iti_marks', $std_iti_marks);
				update_user_meta($studentid, 'std_iti_parcent', $std_iti_parcent);
				update_user_meta($studentid, 'std_iti_passyear', $std_iti_passyear);
				update_user_meta($studentid, 'std_iti_subject', $std_iti_subject);
				update_user_meta($studentid, 'std_iti_insti', $std_iti_insti);
				update_user_meta($studentid, 'std_iti_boardname', $std_iti_boardname);

				update_user_meta($studentid, 'std_graduation_status', $std_graduation_status);
				update_user_meta($studentid, 'std_graduation_marks', $std_graduation_marks);
				update_user_meta($studentid, 'std_graduation_parcent', $std_graduation_parcent);
				update_user_meta($studentid, 'std_graduation_passyear', $std_graduation_passyear);
				update_user_meta($studentid, 'std_graduation_subject', $std_graduation_subject);
				update_user_meta($studentid, 'std_graduation_insti', $std_graduation_insti);
				update_user_meta($studentid, 'std_graduation_boardname', $std_graduation_boardname);

				update_user_meta($studentid, 'std_master_status', $std_master_status);
				update_user_meta($studentid, 'std_master_marks', $std_master_marks);
				update_user_meta($studentid, 'std_master_parcent', $std_master_parcent);
				update_user_meta($studentid, 'std_master_passyear', $std_master_passyear);
				update_user_meta($studentid, 'std_master_subject', $std_master_subject);
				update_user_meta($studentid, 'std_master_insti', $std_master_insti);
				update_user_meta($studentid, 'std_master_boardname', $std_master_boardname);

				$result['error'] = 0;			
				$result['msg'] = 'Education details successfully updated.';
			}else{
				$result['field'] = "student-update-msg";	
				$result['msg'] = "Something wrong. Please Try Later.";	
			}
		break;

		case 'OrganizationRegister':	
			$dt = date("Y-m-d H:i:s");	
			$org_name = $wpdb -> escape( urldecode( $data->org_name ) );
			$org_registration_type = $wpdb -> escape( urldecode( $data->org_registration_type ) );	
			$org_reg_number = $wpdb -> escape( urldecode( $data->org_reg_number ) );	
			$org_reg_authority = $wpdb -> escape( urldecode( $data->org_reg_authority ) );	
			$org_purpose = $wpdb -> escape( urldecode( $data->org_purpose ) );	
			$org_need_tapassya_help = $wpdb -> escape( urldecode( $data->org_need_tapassya_help ) );	
			$org_phone_no = $wpdb -> escape( urldecode( $data->org_phone_no ) );	
			$org_email = $wpdb -> escape( urldecode( $data->org_email ) );
			$org_website = $wpdb -> escape( urldecode( $data->org_website ) );
			$register_pass = $wpdb -> escape( $data->org_password );
			$confirm_password = $wpdb -> escape( $data->org_confirm_password );

			$supporting_doc = $_FILES['org_supporting_doc'];

			if(empty($org_name)){
				$result['field'] = "org_name";
				$result['msg'] = "Please enter organization name.";	
			}elseif(empty($org_registration_type)){
				$result['field'] = "org_registration_type";
				$result['msg'] = "Please choose registration type.";	
			}elseif(empty($org_reg_number)){
				$result['field'] = "org_reg_number";
				$result['msg'] = "Please enter organization registration number.";	
			}elseif(empty($org_reg_authority)){
				$result['field'] = "org_reg_authority";
				$result['msg'] = "Please enter organization registering authority.";	
			}elseif(empty($org_purpose)){
				$result['field'] = "org_purpose";
				$result['msg'] = "Please enter organization registration purpose.";	
			}elseif(empty($org_need_tapassya_help)){
				$result['field'] = "org_need_tapassya_help";
				$result['msg'] = "Please enter why need tapassya help.";	
			}elseif(empty($org_phone_no)){
				$result['field'] = "org_phone_no";
				$result['msg'] = "Please enter organization phone number.";	
			}elseif(empty($org_email)){
				$result['field'] = "org_email";
				$result['msg'] = "Please enter organization Email.";	
			}elseif(empty($register_pass)){
				$result['field'] = "org_password";
				$result['msg'] = "Please enter your password.";	
			}elseif(empty($confirm_password)){
				$result['field'] = "org_confirm_password";
				$result['msg'] = "Please enter your confirm password.";	
			}elseif( $register_pass != $confirm_password ){
				$result['msg'] = "Password and confirm password does not match.";	
			}else{
				$user = email_exists( $org_email );	
				if( $user ){
					$result['field'] = "user_email";			
					$result['msg'] = "Email ID already registered.";		
				}else{						
					$userdata = array(
						'user_login'	=> $org_email,
						'user_email'  	=> $org_email,
						'user_pass'   	=> $register_pass,
						'first_name' 	=> $org_name,
						'display_name'	=> $org_name,
						'role'			=> 'organization',
					);
					$user_id = wp_insert_user( $userdata );
					
					if( !is_wp_error($user_id) ){	
						update_user_meta($user_id, 'stu_registration_number', 'NTFORG'.date('Y').'B00'.$user_id);
						update_user_meta($user_id, 'org_registration_type', $org_registration_type);
						update_user_meta($user_id, 'org_reg_number', $org_reg_number);
						update_user_meta($user_id, 'org_reg_authority', $org_reg_authority);
						update_user_meta($user_id, 'org_purpose', $org_purpose);
						update_user_meta($user_id, 'org_need_tapassya_help', $org_need_tapassya_help);
						update_user_meta($user_id, 'org_phone_no', $org_phone_no);
						update_user_meta($user_id, 'org_website', $org_website);

						$supportingdoc_media_id = weavers_insert_attachment($supporting_doc);
						$supportingdoc_url = wp_get_attachment_image_src( $supportingdoc_media_id, 'full' );

						update_user_meta( $user_id, 'org_supporting_doc', $supportingdoc_url );

						$result['error'] = 0;			
						$result['msg'] = 'Thanks for filling out the registration form, you will receive a confirmation mail once your details are verified & account gets activated .. Pranam !!';	
						//$result['url'] = get_page_url( 'home' );
					}else{
						$result['field'] = "register_error";	
						$result['msg'] = "Could not create account.Try Later.";					
					}			
				}
			}					
		break;

		case 'Login':
			if ( empty ( $data->user_email ) ) {
				$result['field'] = "user_email";
				$result['msg'] = "Please enter your email or username.";		
			} elseif ( empty( $data->user_password ) ) {
				$result['field'] = "user_password";
				$result['msg'] = "Please enter your password.";	
			}else{
				$username = $wpdb -> escape( $data->user_email );
				if( is_email( $username ) ){
					$u = get_user_by( 'email', $username );
					$username = $u->user_login;
				}				
				$password = $wpdb -> escape( $data->user_password );
				$remember = ( $data->rememberme ) ? true : false;	
				$user = username_exists( $username );
				$redirect_url= $wpdb -> escape( $data->rurl );
				$homeUrl=get_permalink(137);
				$login_url=($redirect_url != "")?urldecode($redirect_url):$homeUrl;	
				if( $user ){
					$user_info = get_userdata( $user );
					$login_data = array();
					$login_data['user_login'] = $username;
					$login_data['user_password'] = $password;
					$login_data['remember'] = $remember;
					$uact = get_userdatabylogin( $username );	
					$secure_cookie = true;
					if( empty( $_SERVER["HTTPS"] ) ){
						$secure_cookie = false;
					}
					$user_verify = wp_signon( $login_data, $secure_cookie ); 
					if( is_wp_error( $user_verify ) ){ 
						$result['field'] = "sign_in";
						$result['msg'] = "Ah! You have entered wrong password.";
					}
					else{							
						$result['error'] = 0;
						$result['msg'] = 'OK';
						$result['url'] = $login_url;	
					}
				}else{	
					$result['field'] = "sign_in";
					$result['msg'] = "Ah! User does not exists.";	
				}
			}
		break;

		case 'ForgetPassword':
			$email = $wpdb->escape($data->user_email);
			if(empty($email)){
				$result['field']="user_email";
				$result['msg']="Please enter your email.";		
			}elseif(!is_email($email)){
				$result['field']="user_email";
				$result['msg']="Please enter a valid email id.";	
			}else{
				if(email_exists($email)){
					$user = get_user_by('email',$email);
					$key = random_string(6);
					update_user_meta( $user->ID, 'reset_pass_code',$key);
					$user_name = $user->first_name;
					// $page_reset = get_page_by_path('reset-password');
					$resetpasspage = get_permalink(688).'?k='.$key.'&uid='.$user->ID;	
					send_rp_mail( $resetpasspage, $email, $user_name );
					/*$user_details = array('forget_url' => $resetpasspage, 'email' => $email, 'name' => $user->first_name.' '.$user->last_name);
					do_action( 'forget_password', $user_details );*/
					$result['error']=0;	
					$result['msg']='A mail has been sent to your registered email address please check your mail.';
				}else{
					$result['field']="register_error";	
					$result['msg']='No user registered with this email.';	
				}
			}
		break;
		
		case 'ResetPassword':
			global $wpdb;
			$table = $wpdb->prefix."users";
			$user_key = $wpdb->escape($data->user_key);
			$user_id = $wpdb->escape($data->user_id);				
			$new_pass = $wpdb->escape($data->new_password);
			$con_new_pass = $wpdb->escape($data->new_password_confirm);
			if( $new_pass != $con_new_pass){
				$result['field'] = "reset_pass";
				$result['msg']="Password not match.";	
			}else{
				$key_check = get_user_meta( $user_id, 'reset_pass_code', true );
				if($key_check != $user_key){
					$result['msg']='No user registered with this Email.';
				}else{
					wp_update_user( array ('ID' => $user_id, 'user_pass' => $new_pass ) );
					$result['error']=0;	
					$result['msg']='Your password has been updated successfully.';
					$result['url']=get_permalink(18);
				}
			}
		break;

		case 'RaiseRequest':
			global $current_user;
			$request_for_payment = $wpdb->escape(urldecode($data->request_for_payment));
			$scholar_amount = $wpdb->escape($data->scholar_amount);
			$request_description = $wpdb->escape($data->request_description);
			$file_name = $_FILES['scholar_requestraise_bill'];
			
			if(empty($request_for_payment)){
				$result['field'] = 'request_for_payment';
				$result['msg'] = 'Please select request type';
			}elseif(empty($scholar_amount)){
				$result['field'] = 'scholar_amount';
				$result['msg'] = 'Enter scholarship amount';
			}elseif(empty($request_description)){
				$result['field'] = 'request_description';
				$result['msg'] = 'Enter request description';
			}else{
				$post =array(
					'post_title'	=> $current_user->display_name,
					'post_type'		=> 'scholar_request',
					'post_status'	=> 'publish',
					'post_author'	=> $current_user->ID,
					'post_content'	=> $request_description,
				);
				$post_id = wp_insert_post( $post, $wp_error );
				if($post_id){						
					update_post_meta($post_id, 'request_for_payment', $request_for_payment );
					update_post_meta($post_id, 'scholar_amount', $scholar_amount );
					update_post_meta($post_id, 'scholar_user_id', $current_user->ID );
					update_post_meta($post_id, 'approved_status', 'Pending' );
					update_post_meta($post_id, 'scholar_request_number', 'NTFHES'.date('Y').'RR'.$post_id );
					
					$media_id = weavers_insert_attachment($file_name);
					set_post_thumbnail( $post_id, $media_id );
											
					$result['error'] = 0;
					$result['msg'] = 'Your request submitted successfully, One of our Tapassay member will verify the deatils and will do the needful. Thank you!';
				}
			}
		break;

		case 'ConfirmedRequest':
			global $current_user;
			$con_scholar_amount = $wpdb->escape($data->scholar_confirmed_amount);
			$confirmed_for_payment = $wpdb->escape($data->confirmed_for_payment);
			$file_name = $_FILES['scholar_confirmed_bill'];
			
			if(empty($con_scholar_amount)){
				$result['field'] = 'scholar_confirmed_amount';
				$result['msg'] = 'Enter scholarship amount';
			}elseif(empty($confirmed_for_payment)){
				$result['field'] = 'confirmed_for_payment';
				$result['msg'] = 'Select your confirmed scholarship';
			}else{					
				update_post_meta($confirmed_for_payment, 'con_scholar_amount', $con_scholar_amount );
				
				$media_id = weavers_insert_attachment($file_name);
				$bill_url = wp_get_attachment_image_src( $media_id, 'full' );
				update_post_meta($confirmed_for_payment, 'con_scholar_bill', $bill_url[0] );
										
				$result['error'] = 0;
				$result['msg'] = 'Scholarship confirm request successfully submitted. Thank you!';
			}
		break;

		case 'ApproveRequest':
			global $current_user;
			$approve_request_payment = $wpdb->escape(urldecode($data->approve_request_payment));
			$approve_amount = $wpdb->escape($data->approve_amount);
			$approve_status = $wpdb->escape($data->approve_status);
			$request_id = $wpdb->escape($data->request_id);
			
			if(empty($approve_request_payment)){
				$result['field'] = 'approve_request_payment';
				$result['msg'] = 'Please select request for payment';
			}elseif(empty($approve_amount)){
				$result['field'] = 'approve_amount';
				$result['msg'] = 'Enter scholarship amount';
			}else{
				$date = date('d-m-Y');
				update_post_meta($request_id, 'approved_amount', $approve_amount );
				update_post_meta($request_id, 'approved_status', $approve_status );
				update_post_meta($request_id, 'approved_date', $date );
										
				$result['error'] = 0;
				$result['msg'] = 'Scholarship request successfully approved.';
			}
		break;

		case 'AccountCredit':
			global $current_user;
			// print_r($data);
			// die();
			$cr_date = $wpdb->escape(urldecode($data->cr_date));
			$cr_amount_received = $wpdb->escape($data->cr_amount_received);
			$cr_source = $wpdb->escape($data->cr_source);
			$cr_received_from = $wpdb->escape($data->cr_received_from);
			$cr_purpose = $wpdb->escape($data->cr_purpose);
			$cr_address = $wpdb->escape($data->cr_address);
			$cr_contact_no = $wpdb->escape($data->cr_contact_no);
			$cr_contact_email = $wpdb->escape($data->cr_contact_email);
			$cr_pan_number = $wpdb->escape($data->cr_pan_number);
			$cr_transaction_type = $wpdb->escape($data->cr_transaction_type);
			$cr_account_head = $wpdb->escape($data->cr_account_head);
			$cr_receipt_no = $wpdb->escape($data->cr_receipt_no);
			$cr_bank_narration = $wpdb->escape($data->cr_bank_narration);
			$cr_trans_ref_no = $wpdb->escape($data->cr_trans_ref_no);
			$cr_value_date = $wpdb->escape($data->cr_value_date);
			$cr_bank_name = $wpdb->escape($data->cr_bank_name);
			$cr_remark = $wpdb->escape($data->cr_remark);

			$cr_ID = $wpdb->escape($data->credit_ID);
			$reconid = $wpdb->escape($data->recon_ID);
			
			if(!empty($reconid)){
				$recon_ID = $reconid;
			}else{
				$recon_ID = 'RID'.date('Y').'00'.$cr_ID;
			}
			
			if(empty($cr_date)){
				$result['field'] = 'cr_date';
				$result['msg'] = 'Please enter credit date';
			}elseif(empty($cr_amount_received)){
				$result['field'] = 'cr_amount_received';
				$result['msg'] = 'Enter received amount';
			}elseif(empty($cr_source)){
				$result['field'] = 'cr_source';
				$result['msg'] = 'Enter credit source';
			}elseif(empty($cr_received_from)){
				$result['field'] = 'cr_received_from';
				$result['msg'] = 'Enter received from';
			}elseif(empty($cr_purpose)){
				$result['field'] = 'cr_purpose';
				$result['msg'] = 'Enter credit purpose';
			}else{
				$table = $wpdb->prefix.'account_credit';
				
				if($cr_ID){
					$updata = array('amount_received' => $cr_amount_received, 'source' => $cr_source, 'received_from' => $cr_received_from, 'purpose' => $cr_purpose, 'address' => $cr_address, 'contact' => $cr_contact_no, 'email' => $cr_contact_email, 'pan_number' => $cr_pan_number, 'transaction_type' => $cr_transaction_type, 'account_head' => $cr_account_head, 'receipt_vouchar' => $cr_receipt_no, 'bank_narration' => $cr_bank_narration, 'trans_ref_no' => $cr_trans_ref_no, 'value_dt' => $cr_value_date, 'bank_name' => $cr_bank_name, 'remark' => $cr_remark, 'credit_date' => $cr_date);

					if($cr_ID && current_user_can('accountant_admin')){
						$updata['recon_ID'] = $recon_ID;
					}
					$wpdb->update( $table, $updata, array('ID' => $cr_ID) );					
					$result['error'] = 0;
					$result['msg'] = 'Account credit table successfully updated';
				}else{
					$indata = array('amount_received' => $cr_amount_received, 'source' => $cr_source, 'received_from' => $cr_received_from, 'purpose' => $cr_purpose, 'address' => $cr_address, 'contact' => $cr_contact_no, 'email' => $cr_contact_email, 'pan_number' => $cr_pan_number, 'transaction_type' => $cr_transaction_type, 'account_head' => $cr_account_head, 'receipt_vouchar' => $cr_receipt_no, 'credit_date' => $cr_date);
					$wpdb->insert( $table, $indata );
					$id = $wpdb->insert_id;
						
					if($id){					
						$result['error'] = 0;
						$result['msg'] = 'Account credit table successfully saved';
					}else{
						$result['error'] = 1;
						$result['msg'] = 'Account credit table does not saved';
					}
				}
			}
		break;

		case 'SearchCredit':
			global $wpdb;
			$search_name = $wpdb->escape(urldecode($data->search_name));
			$table = $wpdb->prefix.'account_credit';
			if(empty($search_name)){
				$result['field'] = 'search_name';
				$result['msg'] = 'Please enter search for';
			}else{ 
				$html = '';
				$html .= '<h3>Credit List</h3>
	                <table class="table table-striped">
	                  <thead>
	                    <tr>
	                      <th scope="col">Date</th>
	                      <th scope="col">Amount Received</th>
	                      <th scope="col">Source</th>
	                      <th scope="col">Received From</th>
	                      <th scope="col">Purpose</th>
	                      <th scope="col">Address</th>
	                      <th scope="col">Contact Number</th>
	                      <th scope="col">Email</th>
	                      <th scope="col">PAN Number</th>
	                      <th scope="col">Transaction Type</th>
	                      <th scope="col">Account Head</th>
	                      <th scope="col">Receipt Number</th>
	                      <th scope="col">Bank Narration</th>
	                      <th scope="col">Transaction Ref. No.</th>
	                      <th scope="col">Value Date</th>
	                      <th scope="col">Bank Name</th>
	                      <th scope="col">Remark</th>
	                      <th scope="col">Recon ID</th>
	                      <th scope="col">Options</th>
	                    </tr>
	                  </thead>
	                  <tbody>'; 
							$cr_results = $wpdb->get_results('SELECT * FROM `'.$table.'` WHERE `received_from` LIKE "%'.$search_name.'%"');
							if($wpdb->num_rows > 0){
								foreach($cr_results as $cr_result){
		                        $html .= '<tr>
		                        	<td><a href="'.get_permalink(223).'/?credit-id='.$cr_result->ID.'" title="Edit"><i class="fas fa-edit"></i></a></td>
									<th scope="row">'.$cr_result->credit_date.'</th>
									<td>'.$cr_result->amount_received.'</td>
									<td>'.$cr_result->source.'</td>
									<td>'.$cr_result->received_from.'</td>
									<td>'.$cr_result->purpose.'</td>
									<td>'.$cr_result->address.'</td>
									<td>'.$cr_result->contact.'</td>
									<td>'.$cr_result->email.'</td>
									<td>'.$cr_result->pan_number.'</td>
									<td>'.$cr_result->transaction_type.'</td>
									<td>'.$cr_result->account_head.'</td>
									<td>'.$cr_result->receipt_vouchar.'</td>
									<td>'.$cr_result->bank_narration.'</td>
									<td>'.$cr_result->trans_ref_no.'</td>
									<td>'.$cr_result->value_dt.'</td>
									<td>'.$cr_result->bank_name.'</td>
									<td>'.$cr_result->remark.'</td>
									<td>'.$cr_result->recon_ID.'</td>
									<td><a href="javascript:void(0)" data-id="'.$cr_result->ID.'" class="del-credit-record">Delete</a></td>
		                        </tr>';
		                    	} 
		                    } else {
		                    	$html .= '<tr><td colspan="19">Nothing found</td></tr>';
		                    }
	                  	$html .= '</tbody>
	                </table>';

	            $result['error'] = 0;
				$result['html'] = $html;
			}
		break;

		case 'DelCredit':
			$credit_id = $data;

			$table = $wpdb->prefix.'account_credit';
			$wpdb->delete( $table, array('ID' => $credit_id) );

			$result['error'] = 0;
			$result['msg'] = 'Record successfully deleted';
		break;

		case 'GenReceipt':
			$receipt_id = $data;
			$id = $receipt_id + 1;

			$r_id = 'NTFSR-'.date('Y').'-00'.$id;
			weaversweb_ftn_update_option('weaversweb_donation_receipt', $id);
			$result['error'] = 0;
			$result['value'] = $r_id;
			$result['msg'] = 'Record successfully added';
		break;

		case 'AccountDebit':
			global $current_user;
			$dr_date = $wpdb->escape(urldecode($data->dr_date));
			$dr_amount_spent = $wpdb->escape($data->dr_amount_spent);
			$dr_purpose = $wpdb->escape($data->dr_purpose);
			$dr_paid_to = $wpdb->escape($data->dr_paid_to);
			$dr_address = $wpdb->escape($data->dr_address);
			$dr_contact_no = $wpdb->escape($data->dr_contact_no);
			$dr_transaction_type = $wpdb->escape($data->dr_transaction_type);
			$dr_receipt_no = $wpdb->escape($data->dr_receipt_no);
			$dr_account_head = $wpdb->escape($data->dr_account_head);
			$dr_beneficiary_name = $wpdb->escape($data->dr_beneficiary_name);
			$dr_beneficiary_id = $wpdb->escape($data->dr_beneficiary_id);
			$dr_beneficiary_contactno = $wpdb->escape($data->dr_beneficiary_contactno);
			$dr_beneficiary_email = $wpdb->escape($data->dr_beneficiary_email);
			$dr_beneficiary_address = $wpdb->escape($data->dr_beneficiary_address);
			$dr_bank_narration = $wpdb->escape($data->dr_bank_narration);
			$dr_trans_ref_no = $wpdb->escape($data->dr_trans_ref_no);
			$dr_value_date = $wpdb->escape($data->dr_value_date);
			$dr_bank_name = $wpdb->escape($data->dr_bank_name);
			$dr_remark = $wpdb->escape($data->dr_remark);

			$dr_ID = $wpdb->escape($data->debit_ID);
			$reconid = $wpdb->escape($data->recon_ID);
			
			if(!empty($reconid)){
				$recon_ID = $reconid;
			}else{
				$recon_ID = 'RID'.date('Y').'00'.$dr_ID;
			}
			
			if(empty($dr_date)){
				$result['field'] = 'dr_date';
				$result['msg'] = 'Please enter debit date';
			}elseif(empty($dr_amount_spent)){
				$result['field'] = 'dr_amount_spent';
				$result['msg'] = 'Enter spent amount';
			}elseif(empty($dr_purpose)){
				$result['field'] = 'dr_purpose';
				$result['msg'] = 'Enter debit purpose';
			}elseif(empty($dr_paid_to)){
				$result['field'] = 'dr_paid_to';
				$result['msg'] = 'Enter paid to';
			}elseif(empty($dr_account_head)){
				$result['field'] = 'dr_account_head';
				$result['msg'] = 'Select account head';
			}elseif(empty($dr_transaction_type)){
				$result['field'] = 'dr_transaction_type';
				$result['msg'] = 'Select transaction type';
			}else{
				$table = $wpdb->prefix.'account_debit';
				
				if($dr_ID){
					$updata = array('amount_spent' => $dr_amount_spent, 'purpose' => $dr_purpose, 'paid_to' => $dr_paid_to, 'address' => $dr_address, 'contact' => $dr_contact_no, 'transaction_type' => $dr_transaction_type, 'receipt_vouchar' => $dr_receipt_no, 'account_head' => $dr_account_head, 'beneficiary_name' => $dr_beneficiary_name, 'benef_stu_id' => $dr_beneficiary_id, 'benef_contact_no' => $dr_beneficiary_contactno, 'benef_email' => $dr_beneficiary_email, 'benef_address' => $dr_beneficiary_address, 'bank_narration' => $dr_bank_narration, 'trans_ref_no' => $dr_trans_ref_no, 'value_dt' => $dr_value_date, 'bank_name' => $dr_bank_name, 'remark' => $dr_remark, 'debit_date' => $dr_date);
					if($dr_ID && current_user_can('accountant_admin')){
						$updata['recon_ID'] = $recon_ID;
					}
					$wpdb->update( $table, $updata, array('ID' => $dr_ID) );					
					$result['error'] = 0;
					$result['msg'] = 'Account debit table successfully updated';
				}else{
					$indata = array('amount_spent' => $dr_amount_spent, 'purpose' => $dr_purpose, 'paid_to' => $dr_paid_to, 'address' => $dr_address, 'contact' => $dr_contact_no, 'transaction_type' => $dr_transaction_type, 'receipt_vouchar' => $dr_receipt_no, 'account_head' => $dr_account_head, 'beneficiary_name' => $dr_beneficiary_name, 'benef_stu_id' => $dr_beneficiary_id, 'benef_contact_no' => $dr_beneficiary_contactno, 'benef_email' => $dr_beneficiary_email, 'benef_address' => $dr_beneficiary_address, 'debit_date' => $dr_date);
					$wpdb->insert( $table, $indata );
					$id = $wpdb->insert_id;
						
					if($id){					
						$result['error'] = 0;
						$result['msg'] = 'Account debit table successfully saved';
					}else{
						$result['error'] = 1;
						$result['msg'] = 'Account debit table does not saved';
					}
				}
			}
		break;

		case 'DelDebit':
			$debit_id = $data;

			$table = $wpdb->prefix.'account_debit';
			$wpdb->delete( $table, array('ID' => $debit_id) );

			$result['error'] = 0;
			$result['msg'] = 'Record successfully deleted';
		break;

		case 'OrgDetailsUpdate':	
			$dt = date("Y-m-d H:i:s");	
			$org_last_renewal_date = $wpdb -> escape( urldecode( $data->org_last_renewal_date ) );
			$member_designation = $wpdb -> escape( $data->member_designation );
			// $member_name = $wpdb -> escape( urldecode( $data->member_name ) );
			// $member_email = $wpdb -> escape( urldecode( $data->member_email ) );
			// $member_phone = $wpdb -> escape( urldecode( $data->member_phone ) );
			// $member_address = $wpdb -> escape( urldecode( $data->member_address ) );
			$org_income_other_donation = $wpdb -> escape( urldecode( $data->org_income_other_donation ) );

			$randNo = date("dmyhis");
			$org_12a_doc = $_FILES['org_12a_doc'];
			$ext_12a = end(explode(".",$org_12a_doc['name']));
			$org_12a_doc_name = '12A_'.$current_user->ID.'_'.$randNo.'.'.$ext_12a;
			$org_12a_doc_tmp =$_FILES['org_12a_doc']['tmp_name'];

			$org_moa_doc = $_FILES['org_moa_doc'];
			$ext_moa = end(explode(".",$org_moa_doc['name']));
			$org_moa_doc_name = 'moa_'.$current_user->ID.'_'.$randNo.'.'.$ext_moa;
			$org_moa_doc_tmp =$_FILES['org_moa_doc']['tmp_name'];

			$org_renewalcert_doc = $_FILES['org_renewalcert_doc'];
			$ext_renewalcert = end(explode(".",$org_renewalcert_doc['name']));
			$org_renewalcert_doc_name = 'renewalcert_'.$current_user->ID.'_'.$randNo.'.'.$ext_renewalcert;
			$org_renewalcert_doc_tmp =$_FILES['org_renewalcert_doc']['tmp_name'];

			$org_itr7_doc = $_FILES['org_itr7_doc'];
			$ext_itr7 = end(explode(".",$org_itr7_doc['name']));
			$org_itr7_doc_name = 'itr7_'.$current_user->ID.'_'.$randNo.'.'.$ext_itr7;
			$org_itr7_doc_tmp =$_FILES['org_itr7_doc']['tmp_name'];

			$memberdetails = array();
			for( $i = 0; $i < count($member_designation); $i++){
				if(!empty($member_designation[$i]) ){
					$member_name = $data->{'member_name_'.$i}? $data->{'member_name_'.$i}:'NA';
					$member_email = $data->{'member_email_'.$i}? $data->{'member_email_'.$i}:'NA';
					$member_phone = $data->{'member_phone_'.$i}? $data->{'member_phone_'.$i}:'NA';
					$member_address = $data->{'member_address_'.$i}? $data->{'member_address_'.$i}:'NA';

					$memberdetail = array( 'designation' => urldecode( $member_designation[$i] ), 'name' => urldecode( $member_name ), 'email' => urldecode( $member_email ), 'phone' => urldecode( $member_phone ), 'address' => urldecode( $member_address ) );
					$memberdetails[] = $memberdetail;
				}
			}
			// echo '<pre>';
			// print_r($memberdetails);
			// echo '</pre>';
			// exit();
			if(empty($org_last_renewal_date)){
				$result['field'] = "org_last_renewal_date";
				$result['msg'] = "Please enter last renewal date";	
			}else{
				update_user_meta($current_user->ID, 'org_last_renewal_date', $org_last_renewal_date);

				update_user_meta( $current_user->ID, 'governing_member_details', serialize( $memberdetails ) );	

				// $org_12a_doc_media_id = weavers_insert_attachment($org_12a_doc);
				// $org_12a_doc_url = wp_get_attachment_image_src( $org_12a_doc_media_id );
				$uploads = wp_upload_dir();	
				$upload_path = $uploads['basedir'].'/member-files/'.$org_12a_doc_name;
				$uploaded = move_uploaded_file( $org_12a_doc_tmp, $upload_path );

				if(!empty(get_user_meta( $current_user->ID, 'org_12a_doc', true ))){
					unlink(get_user_meta( $current_user->ID, 'org_12a_doc', true ));
					update_user_meta( $current_user->ID, 'org_12a_doc', $org_12a_doc_name );
				}else{
					update_user_meta( $current_user->ID, 'org_12a_doc', $org_12a_doc_name );
				}

				// $org_moa_doc_media_id = weavers_insert_attachment($org_moa_doc);	
				// $org_moa_doc_url = wp_get_attachment_image_src( $org_moa_doc_media_id );
				$moa_upload_path = $uploads['basedir'].'/member-files/'.$org_moa_doc_name;
				$moa_uploaded = move_uploaded_file( $org_moa_doc_tmp, $moa_upload_path );

				if(!empty(get_user_meta( $current_user->ID, 'org_moa_doc', true ))){
					unlink(get_user_meta( $current_user->ID, 'org_moa_doc', true ));
					update_user_meta( $current_user->ID, 'org_moa_doc', $org_moa_doc_name );
				}else{
					update_user_meta( $current_user->ID, 'org_moa_doc', $org_moa_doc_name );
				}

				// $org_renewalcert_doc_media_id = weavers_insert_attachment($org_renewalcert_doc);
				// $org_renewalcert_doc_url = wp_get_attachment_image_src( $org_renewalcert_doc_media_id );
				$renewalcert_upload_path = $uploads['basedir'].'/member-files/'.$org_renewalcert_doc_name;
				$renewalcert_uploaded = move_uploaded_file( $org_renewalcert_doc_tmp, $renewalcert_upload_path );

				if(!empty(get_user_meta( $current_user->ID, 'org_renewalcert_doc', true ))){
					unlink(get_user_meta( $current_user->ID, 'org_renewalcert_doc', true ));
					update_user_meta( $current_user->ID, 'org_renewalcert_doc', $org_renewalcert_doc_name );
				}else{
					update_user_meta( $current_user->ID, 'org_renewalcert_doc', $org_renewalcert_doc_name );
				}

				// $org_itr7_doc_media_id = weavers_insert_attachment($org_itr7_doc);
				// $org_itr7_doc_url = wp_get_attachment_image_src( $org_itr7_doc_media_id );
				$itr7_upload_path = $uploads['basedir'].'/member-files/'.$org_itr7_doc_name;
				$itr7_uploaded = move_uploaded_file( $org_itr7_doc_tmp, $itr7_upload_path );

				if(!empty(get_user_meta( $current_user->ID, 'org_itr7_doc', true ))){
					unlink(get_user_meta( $current_user->ID, 'org_itr7_doc', true ));
					update_user_meta( $current_user->ID, 'org_itr7_doc', $org_itr7_doc_name );
				}else{
					update_user_meta( $current_user->ID, 'org_itr7_doc', $org_itr7_doc_name );
				}

				// update_user_meta( $current_user->ID, 'org_12a_doc', $org_12a_doc_media_id );
				// update_user_meta( $current_user->ID, 'org_moa_doc', $org_moa_doc_url );
				// update_user_meta( $current_user->ID, 'org_renewalcert_doc', $org_renewalcert_doc_url );
				// update_user_meta( $current_user->ID, 'org_itr7_doc', $org_itr7_doc_url );

				update_user_meta($current_user->ID, 'org_income_other_donation', $org_income_other_donation);

				$result['error'] = 0;			
				$result['msg'] = 'Details successfully updated. Thank you!';
			}					
		break;

		case 'MemberRaiseRequest':
			global $current_user;
			$member_raise_request_name = $wpdb->escape(urldecode($data->member_raise_request_name));
			$member_request_for_payment = $wpdb->escape(urldecode($data->member_request_for_payment));
			$request_date = $wpdb->escape($data->request_date);
			$member_request_purpose = $wpdb->escape(urldecode($data->member_request_purpose));
			$member_request_amount = $wpdb->escape($data->member_request_amount);
			$member_request_frequency = $wpdb->escape($data->member_request_frequency);
			$details_beneficiary = $wpdb->escape($data->details_beneficiary);
			$disbursed_date = $wpdb->escape($data->disbursed_date);
			$request_remark = $wpdb->escape($data->request_remark);

			$member_request_id = $wpdb->escape($data->other_request_id);
			$request_status = $wpdb->escape($data->member_request_status);
			$approved_amount =$wpdb->escape($data->member_request_approve_amount);
			
			if(empty($member_raise_request_name)){
				$result['field'] = 'member_raise_request_name';
				$result['msg'] = 'Please enter your name';
			}elseif(empty($member_request_for_payment)){
				$result['field'] = 'member_request_for_payment';
				$result['msg'] = 'Please select request for payment';
			}elseif(empty($request_date)){
				$result['field'] = 'request_date';
				$result['msg'] = 'Choose request date';
			}elseif(empty($member_request_purpose)){
				$result['field'] = 'member_request_purpose';
				$result['msg'] = 'Please enter request purpose';
			}elseif(empty($member_request_amount)){
				$result['field'] = 'member_request_amount';
				$result['msg'] = 'Enter request amount';
			}elseif(empty($member_request_frequency)){
				$result['field'] = 'member_request_frequency';
				$result['msg'] = 'Enter request frequency';
			}elseif(empty($details_beneficiary)){
				$result['field'] = 'details_beneficiary';
				$result['msg'] = 'Enter beneficiary details';
			}elseif(empty($disbursed_date)){
				$result['field'] = 'disbursed_date';
				$result['msg'] = 'Choose disbursed date';
			}elseif(empty($request_remark)){
				$result['field'] = 'request_remark';
				$result['msg'] = 'Enter request remark';
			}else{
				if(!empty($member_request_id )){
					$post_title = get_post_meta($member_request_id, 'member_request_number', true );
				}else{
					$post_title = 'NTFM'.time().'RR'.$current_user->ID;
				}
				$post =array(
					'post_title'	=> $post_title,
					'post_type'		=> 'other_request',
					'post_status'	=> 'publish',
					'post_author'	=> $current_user->ID,
					'post_content'	=> $request_remark,
				);
				if( $member_request_id ){
					$post['ID'] = $member_request_id;
					$status = $request_status;
				}else{
					$status = 'Pending';
				}
				$post_id = wp_insert_post( $post, $wp_error );
				if($post_id){						
					update_post_meta($post_id, 'other_request_for_payment', $member_request_for_payment );
					update_post_meta($post_id, 'other_request_date', $request_date );
					update_post_meta($post_id, 'other_request_purpose', $member_request_purpose );
					update_post_meta($post_id, 'other_request_amount', $member_request_amount );
					update_post_meta($post_id, 'other_request_frequency', $member_request_frequency );
					update_post_meta($post_id, 'other_request_details_beneficiary', $details_beneficiary );
					update_post_meta($post_id, 'other_request_disbursed_date', $disbursed_date );
					if( empty($member_request_id )){
						update_post_meta($post_id, 'request_member_id', $current_user->ID );
						update_post_meta($post_id, 'member_request_number', 'NTFM'.time().'RR'.$current_user->ID );
					}
					update_post_meta($post_id, 'other_request_approved_status', $status );
					update_post_meta($post_id, 'other_request_approved_amount', $approved_amount );
											
					$result['error'] = 0;
					$result['msg'] = 'Your request successfully submitted. Our Tapassay member will verify you details and contact you soon. Thank you!';
				}
			}
		break;

		case 'PaymentDone':
			global $wpdb;
			$request_id = $data;
			update_post_meta($request_id, 'payment_status', 1);
			$dr_paid_to = get_post_meta($request_id, 'other_request_for_payment', true );
			$dr_purpose = get_post_meta($request_id, 'other_request_purpose', true );
			$dr_amount_spent = get_post_meta($request_id, 'other_request_approved_amount', true );
			$content_post = get_post($request_id);
			$dr_remark = $content_post->post_content;

			$user_id = get_post_meta($request_id, 'request_member_id', true);
			$dr_contact_no = get_user_meta($user_id, 'phone_number', true );

			$dr_date = date("Y-m-d");

			$table = $wpdb->prefix.'account_debit';
			$indata = array('amount_spent' => $dr_amount_spent, 'purpose' => $dr_purpose, 'paid_to' => $dr_paid_to, 'contact' => $dr_contact_no, 'remark' => $dr_remark, 'debit_date' => $dr_date);
			$wpdb->insert( $table, $indata );
			$id = $wpdb->insert_id;
				
			if($id){					
				$result['error'] = 0;
				$result['msg'] = 'Account debit table successfully updated';
			}else{
				$result['error'] = 1;
				$result['msg'] = 'Account debit table does not saved';
			}
		break;

		case 'StuPaymentDone':
			global $wpdb;
			$request_id = $data;
			update_post_meta($request_id, 'payment_status', 1);
			$dr_paid_to = get_the_title($request_id);
			$dr_purpose = get_post_meta($request_id, 'request_for_payment', true );
			$dr_amount_spent = get_post_meta($request_id, 'approved_amount', true );
			$content_post = get_post($request_id);
			$dr_remark = $content_post->post_content;

			$user_id = get_post_meta($request_id, 'scholar_user_id', true);
			$dr_contact_no = get_user_meta($user_id, 'phone_number', true );

			$dr_date = date("Y-m-d");

			$table = $wpdb->prefix.'account_debit';
			$indata = array('amount_spent' => $dr_amount_spent, 'purpose' => $dr_purpose, 'paid_to' => $dr_paid_to, 'contact' => $dr_contact_no, 'remark' => $dr_remark, 'debit_date' => $dr_date);
			$wpdb->insert( $table, $indata );
			$id = $wpdb->insert_id;
				
			if($id){					
				$result['error'] = 0;
				$result['msg'] = 'Account debit table successfully updated';
			}else{
				$result['error'] = 1;
				$result['msg'] = 'Account debit table does not saved';
			}
		break;
	}
echo json_encode($result);	
exit;
}

////////////////////////////////////
// Pagination
////////////////////////////////////


function show_pagination(){
	global $wp_query;
	if ($wp_query->max_num_pages> 1 ) :
	global $wp_rewrite;
	$pagination_args = array(
		'base' => @add_query_arg('paged','%#%'),
		'format' => '',
		'current' => max( 1, get_query_var('paged') ),
		'total' => $wp_query->max_num_pages,
		'prev_next'    => true,
    	'prev_text'    => __('&laquo; '),
    	'next_text'    => __('&raquo;')
	);
	if( $wp_rewrite->using_permalinks())
	 $pagination_args['base'] = user_trailingslashit( trailingslashit( remove_query_arg('s',get_pagenum_link(1) ) ) . 'page/%#%/', 'paged');
	 	if( !empty($wp_query->query_vars['s']) )
	 $pagination_args['add_args'] = array('s'=>get_query_var('s'));
	   echo paginate_links( $pagination_args );
	endif;

}

add_action( 'show_user_profile', 'add_extra_fields' );

add_action( 'edit_user_profile', 'add_extra_fields' );

function add_extra_fields( $user ){
	$user_id = $_REQUEST['user_id'];
	$user_meta = get_userdata($user_id);
	$role = $user_meta->roles;
// 	echo '<pre>';
// 	print_r($user_meta);
// 	echo '</pre>';
	if(in_array( 'member', $role, true ) ) {
    ?>
    	<h3>Member Details</h3><hr>
    	<table class="form-table">
            <tr>
                <th>Phone Number :</th>
                <td><?php echo get_user_meta($user->ID, 'phone_number', true);?></td>
                <th>Address :</th>
                <td><?php echo get_user_meta($user->ID, 'address', true);?></td>
            </tr>
            <tr>
                <th>Adhaar No. :</th>
                <td><?php echo get_user_meta($user->ID, 'member_adhaar_number', true);?></td>
                <th>PAN Number :</th>
                <td><?php echo get_user_meta($user->ID, 'member_pan_number', true);?></td>
            </tr>
            <tr>
                <th colspan="2">Relationship Status with Nabadiganta Tapassya Foundation : "We need you as a member to serve the community" :</th>
                <td colspan="2"><?php echo get_user_meta($user->ID, 'relationship_status', true);?></td>
            </tr>
            <tr>
                <th>How You Want to Contribute :</th>
                <td><?php echo get_user_meta($user->ID, 'how_you_contribute', true);?></td>
                <th>Contribution Amount :</th>
                <td><?php echo get_user_meta($user->ID, 'contribution_amount', true);?></td>
            </tr>
            <tr>
                <th colspan="2">Interest Area to Work Together on a Social Projects :</th>
                <?php 
                $interest = get_user_meta($user->ID, 'interest_project_area', true);
                $str_interest = implode(', ', $interest);
                ?>
                <td colspan="2"><?php echo urldecode($str_interest);?></td>
            </tr>
        </table>
        <h3>Corporate Member Details</h3><hr>
        <table class="form-table">
            <tr>
                <th>Organization Name :</th>
                <td><?php echo get_user_meta($user->ID, 'organization_name', true);?></td>
                <th>Organization PAN No. :</th>
                <td><?php echo get_user_meta($user->ID, 'pan_number', true);?></td>
                <th>Organization TAN No. :</th>
                <td><?php echo get_user_meta($user->ID, 'tan_number', true);?></td>
            </tr>
            <tr>
                <th>Organization Address :</th>
                <td><?php echo get_user_meta($user->ID, 'organization_address', true);?></td>
                <th>Organization Profile :</th>
                <td><?php echo get_user_meta($user->ID, 'company_profile', true);?></td>
            </tr>
            <tr>
                <th>Unit Head Name :</th>
                <td><?php echo get_user_meta($user->ID, 'unit_head_name', true);?></td>
                <th>CSR Manager Name :</th>
                <td><?php echo get_user_meta($user->ID, 'csr_manager_name', true);?></td>
            </tr>
            <tr>
                <th>Organization Contact :</th>
                <td><?php echo get_user_meta($user->ID, 'organization_contact', true);?></td>
                <th>Organization Contact Email :</th>
                <td><?php echo get_user_meta($user->ID, 'organization_contactemail', true);?></td>
            </tr>
        </table>
        <h3> User Custom fields</h3><hr>
        <table class="form-table">
            <tr>
                <th><label for="member_responsibility">Choose Member Responsibility</label></th>
                <!-- <td><input type="text" name="mobile" value="<?php //echo esc_attr(get_the_author_meta( 'mobile_number', $user->ID )); ?>" class="regular-text" /></td> -->
                <td>
                	<select name="member_responsibility">
                		<option value="">Choose Member Responsibility</option>
                		<?php 
                			$reponsibilities = array('hes-admin' => 'HES Admin', 'medical-admin' => 'Medical Admin', 'partner-center-admin' => 'Partner Center Admin', 'project-admin' => 'Project Admin', 'own-center-admin' => 'Own Center Admin'); 
                			foreach($reponsibilities as $key => $responsibility){
                			$sel = (get_the_author_meta( 'member_responsibility', $user->ID ) == $key)? 'selected="selected"': '';
                		?>
                		<option value="<?php echo $key; ?>" <?php echo $sel; ?>><?php echo $responsibility; ?></option>
                		<?php } ?>
                	</select>
                </td>
            </tr>
        </table>
    <?php
	}
}

add_action( 'personal_options_update', 'save_fields' );
add_action( 'edit_user_profile_update', 'save_fields' );

function save_fields( $user_id )
{
    update_user_meta( $user_id,'member_responsibility', sanitize_text_field( $_POST['member_responsibility'] ) );
}

add_action( 'show_user_profile', 'student_extra_fields' );

add_action( 'edit_user_profile', 'student_extra_fields' );

function student_extra_fields( $user ){
	$user_id = $user->ID;
	$user_meta = get_userdata($user_id);
	$role = $user_meta->roles;
// 	echo '<pre>';
// 	print_r($user_meta);
// 	echo '</pre>';
	if(in_array( 'student', $role, true ) ) {
    ?>
        <h3> Student's Details</h3>
        <table class="form-table">
            <tr>
                <th>Registration No.:</th>
                <td><?php echo get_user_meta($user->ID, 'stu_registration_number', true);?></td>
                <th>Apply For:</th>
                <td><?php echo get_user_meta($user->ID, 'apply_for', true);?></td>
                <th>Date of Birth:</th>
                <td><?php echo get_user_meta($user->ID, 'stu_dob', true);?></td>
            </tr>
            <tr>
                <th>Age:</th>
                <td><?php echo get_user_meta($user->ID, 'stu_age', true);?></td>
                <th>Phone No.:</th>
                <td><?php echo get_user_meta($user->ID, 'stu_phone', true);?></td>
                <th>Address:</th>
                <td><?php echo get_user_meta($user->ID, 'stu_address', true);?></td>
            </tr>
            <tr>
                <th>Father's Name:</th>
                <td><?php echo get_user_meta($user->ID, 'stu_father_name', true);?></td>
                <th>Father's Contact No.:</th>
                <td><?php echo get_user_meta($user->ID, 'stu_father_contact', true);?></td>
            </tr>
            <tr>
                <th>Mother's Name:</th>
                <td><?php echo get_user_meta($user->ID, 'stu_mother_name', true);?></td>
                <th>Mother's Contact No.:</th>
                <td><?php echo get_user_meta($user->ID, 'stu_mother_contact', true);?></td>
            </tr>
            <tr>
                <th>Father's Occupation:</th>
                <td><?php echo get_user_meta($user->ID, 'stu_father_occupa', true);?></td>
                <th>Father's Income:</th>
                <td><?php echo get_user_meta($user->ID, 'stu_father_income', true);?></td>
            </tr>
            <tr>
                <th>Mother's Occupation:</th>
                <td><?php echo get_user_meta($user->ID, 'stu_mother_occupa', true);?></td>
                <th>Mother's Income:</th>
                <td><?php echo get_user_meta($user->ID, 'stu_mother_income', true);?></td>
            </tr>
            <tr>
                <th>Other Parent Name:</th>
                <td><?php echo get_user_meta($user->ID, 'stu_other_parent', true);?></td>
                <th>Other Parent Contact No.:</th>
                <td><?php echo get_user_meta($user->ID, 'stu_otherparent_contact', true);?></td>
                <th>Other Parent Relation:</th>
                <td><?php echo get_user_meta($user->ID, 'stu_otherparent_relation', true);?></td>
            </tr>
            <tr>
                <th>Other Parent Income:</th>
                <td><?php echo get_user_meta($user->ID, 'stu_otherparent_income', true);?></td>
                <th>Other Parent Address:</th>
                <td><?php echo get_user_meta($user->ID, 'stu_otherparent_address', true);?></td>
            </tr>
        </table>
		<table class ="form-table">
			<tr>
				<th>Challanges you are facing pursuing higher Studines:</th>
                <td><?php echo get_user_meta($user->ID, 'challengeFacing', true);?></td>
			</tr>
		<table>
        <table class="form-table">
        	<tr>
        		<th>Std</th>
        		<th>Status</th>
        		<th>Marks</th>
        		<th>Percentage</th>
        		<th>Passing Year</th>
        		<th>Subjects</th>
        		<th>Institute</th>
        		<th>Board</th>
        	</tr>
        	<tr>
        		<th>10</th>
        		<td><?php echo get_user_meta($user->ID, 'std_secondary_status', true);?></td>
        		<td><?php echo get_user_meta($user->ID, 'std_secondary_marks', true);?></td>
        		<td><?php echo get_user_meta($user->ID, 'std_secondary_parcent', true);?></td>
        		<td><?php echo get_user_meta($user->ID, 'std_secondary_passyear', true);?></td>
        		<td><?php echo get_user_meta($user->ID, 'std_secondary_subject', true);?></td>
        		<td><?php echo get_user_meta($user->ID, 'std_secondary_insti', true);?></td>
        		<td><?php echo get_user_meta($user->ID, 'std_secondary_boardname', true);?></td>
        	</tr> 
        	<tr>
        		<th>10+2</th>
        		<td><?php echo get_user_meta($user->ID, 'std_hs_status', true);?></td>
        		<td><?php echo get_user_meta($user->ID, 'std_hs_marks', true);?></td>
        		<td><?php echo get_user_meta($user->ID, 'std_hs_parcent', true);?></td>
        		<td><?php echo get_user_meta($user->ID, 'std_hs_passyear', true);?></td>
        		<td><?php echo get_user_meta($user->ID, 'std_hs_subject', true);?></td>
        		<td><?php echo get_user_meta($user->ID, 'std_hs_insti', true);?></td>
        		<td><?php echo get_user_meta($user->ID, 'std_hs_boardname', true);?></td>
        	</tr>
        	<tr>
        		<th>10+2+2</th>
        		<td><?php echo get_user_meta($user->ID, 'std_iti_status', true);?></td>
        		<td><?php echo get_user_meta($user->ID, 'std_iti_marks', true);?></td>
        		<td><?php echo get_user_meta($user->ID, 'std_iti_parcent', true);?></td>
        		<td><?php echo get_user_meta($user->ID, 'std_iti_passyear', true);?></td>
        		<td><?php echo get_user_meta($user->ID, 'std_iti_subject', true);?></td>
        		<td><?php echo get_user_meta($user->ID, 'std_iti_insti', true);?></td>
        		<td><?php echo get_user_meta($user->ID, 'std_iti_boardname', true);?></td>
        	</tr> 
        	<tr>
        		<th>10+2+3</th>
        		<td><?php echo get_user_meta($user->ID, 'std_graduation_status', true);?></td>
        		<td><?php echo get_user_meta($user->ID, 'std_graduation_marks', true);?></td>
        		<td><?php echo get_user_meta($user->ID, 'std_graduation_parcent', true);?></td>
        		<td><?php echo get_user_meta($user->ID, 'std_graduation_passyear', true);?></td>
        		<td><?php echo get_user_meta($user->ID, 'std_graduation_subject', true);?></td>
        		<td><?php echo get_user_meta($user->ID, 'std_graduation_insti', true);?></td>
        		<td><?php echo get_user_meta($user->ID, 'std_graduation_boardname', true);?></td>
        	</tr>
        	<tr>
        		<th>Masters</th>
        		<td><?php echo get_user_meta($user->ID, 'std_master_status', true);?></td>
        		<td><?php echo get_user_meta($user->ID, 'std_master_marks', true);?></td>
        		<td><?php echo get_user_meta($user->ID, 'std_master_parcent', true);?></td>
        		<td><?php echo get_user_meta($user->ID, 'std_master_passyear', true);?></td>
        		<td><?php echo get_user_meta($user->ID, 'std_master_subject', true);?></td>
        		<td><?php echo get_user_meta($user->ID, 'std_master_insti', true);?></td>
        		<td><?php echo get_user_meta($user->ID, 'std_master_boardname', true);?></td>
        	</tr>       	
        </table>
        <table class="form-table">
			<tr>
                <th>Assistance You except:</th>
                <td><?php echo get_user_meta($user->ID, 'assistance_apply_for', true);?></td>
            </tr>
            <tr>
                <th>Course Name:</th>
                <td><?php echo get_user_meta($user->ID, 'stu_course_name', true);?></td>
                <th>Principal/HOD Name:</th>
                <td><?php echo get_user_meta($user->ID, 'stu_teacher_name', true);?></td>
            </tr>
            <tr>
                <th>Principal/HOD Contact No.:</th>
                <td><?php echo get_user_meta($user->ID, 'stu_teacher_contact_no', true);?></td>
                <th>Principal/HOD Contact Email:</th>
                <td><?php echo get_user_meta($user->ID, 'stu_teacher_contact_email', true);?></td>
            </tr>
            <tr>
                <th>College Fees:</th>
                <td><?php echo get_user_meta($user->ID, 'stu_college_fees', true);?></td>
                <th>Frequency:</th>
                <td><?php echo get_user_meta($user->ID, 'stu_scholarship_college', true);?></td>
            </tr>
            <tr>
                <th>Tuition Fees:</th>
                <td><?php echo get_user_meta($user->ID, 'stu_tuition_fees', true);?></td>
                <th>Frequency:</th>
                <td><?php echo get_user_meta($user->ID, 'stu_scholarship_tuition', true);?></td>
            </tr>
            <tr>
                <th>Books/Accessories:</th>
                <td><?php echo get_user_meta($user->ID, 'stu_books_fees', true);?></td>
                <th>Frequency:</th>
                <td><?php echo get_user_meta($user->ID, 'stu_scholarship_books', true);?></td>
            </tr>
            <tr>
                <th>Conveyance:</th>
                <td><?php echo get_user_meta($user->ID, 'stu_conveyance_fees', true);?></td>
                <th>Frequency:</th>
                <td><?php echo get_user_meta($user->ID, 'stu_scholarship_conveyance', true);?></td>
            </tr>
            <tr>
                <th>Food:</th>
                <td><?php echo get_user_meta($user->ID, 'stu_food_fees', true);?></td>
                <th>Frequency:</th>
                <td><?php echo get_user_meta($user->ID, 'stu_scholarship_food', true);?></td>
            </tr>
            <tr>
                <th>Hostel/Lodging:</th>
                <td><?php echo get_user_meta($user->ID, 'stu_hostel_fees', true);?></td>
                <th>Frequency:</th>
                <td><?php echo get_user_meta($user->ID, 'stu_scholarship_hostel', true);?></td>
            </tr>
            <tr>
                <th>Other Fees:</th>
                <td><?php echo get_user_meta($user->ID, 'stu_other_fees', true);?></td>
                <th>Frequency:</th>
                <td><?php echo get_user_meta($user->ID, 'stu_scholarship_other', true);?></td>
            </tr>
            <tr>
                <th><label for="approved_total_scholarship_amount">Approved Scholarship Amount</label></th>
                <td><input type="text" name="approved_total_scholarship_amount" value="<?php echo esc_attr(get_the_author_meta( 'approved_total_scholarship_amount', $user->ID )); ?>" class="regular-text" /></td>
            </tr>
            <tr>
                <th><label for="approved_total_scholarship_frequency">Frequency</label></th>
                <?php 
                	if(get_user_meta($user->ID, 'approved_total_scholarship_frequency', true) === 'Monthly'){
                		$monthly = 'checked="checked"';
                	}else{
                		$monthly = '';
                	}
                	if(get_user_meta($user->ID, 'approved_total_scholarship_frequency', true) === 'Quaterly'){
                		$quaterly = 'checked="checked"';
                	}else{
                		$quaterly = '';
                	}
                	if(get_user_meta($user->ID, 'approved_total_scholarship_frequency', true) === 'Yearly'){
                		$yearly = 'checked="checked"';
                	}else{
                		$yearly = '';
                	}

                ?>
                <td>
                	<input type="radio" name="approved_total_scholarship_frequency" value="Monthly" <?php echo $monthly; ?>> Monthly
                	<input type="radio" name="approved_total_scholarship_frequency" value="Quaterly" <?php echo $quaterly; ?>> Quaterly
                	<input type="radio" name="approved_total_scholarship_frequency" value="Yearly" <?php echo $yearly; ?>> Yearly
                </td>
            </tr>
        </table>
        <table class="form-table">
            <tr>
                <th>Bank Name:</th>
                <td><?php echo get_user_meta($user->ID, 'stu_bank_name', true);?></td>
                <th>Account No.:</th>
                <td><?php echo get_user_meta($user->ID, 'stu_account_number', true);?></td>
                <th>Account IFSC:</th>
                <td><?php echo get_user_meta($user->ID, 'stu_account_ifsc', true);?></td>
            </tr>
            <tr>
                <th>Other Scholarship:</th>
                <td><?php echo get_user_meta($user->ID, 'stu_other_scholarship', true);?></td>
                <th>Scholarship Authority:</th>
                <td><?php echo get_user_meta($user->ID, 'stu_otherscholarship_auth', true);?></td>
                <th>Scholarship Frequency:</th>
                <td><?php echo get_user_meta($user->ID, 'stu_otherscholarship_frequency', true);?></td>
            </tr>
            <?php 
            $adhaar = get_user_meta($user->ID, 'stu_adhaar_doc', true);
            $secondary = get_user_meta($user->ID, 'stu_secondary_doc', true);
            $hs = get_user_meta($user->ID, 'stu_hs_doc', true);
            $graduation = get_user_meta($user->ID, 'stu_graduation_doc', true);
            $parent_income = get_user_meta($user->ID, 'stu_parent_income_doc', true);
            ?>
            <tr>
				
                	<th>Adhaar Card:</th>
                	<?php if(!empty($adhaar[0])){ ?>
                		<td><a href="<?php echo $adhaar[0];?>" target="_blank">See Adhaar Card</a></td>
                	<?php } else { ?>
                		<td>File Not Uploaded</td>
                	<?php } ?>
				
					<th>10 Result:</th>
					<?php if(!empty($secondary[0])){ ?>
						<td><a href="<?php echo $secondary[0];?>" target="_blank">See 10 Result</a></td>
					<?php } else { ?>
                		<td>File Not Uploaded</td>
                	<?php } ?>
				
					<th>10+2 Result:</th>
					<?php if(!empty($hs[0])){ ?>
						<td><a href="<?php echo $hs[0];?>" target="_blank">See 10+2 Result</a></td>
					<?php } else { ?>
                		<td>File Not Uploaded</td>
					<?php } ?>
            </tr>
            <tr>
				
					<th>10+2+3 Result:</th>
					<?php if(!empty($graduation[0])){ ?>
						<td><a href="<?php echo $graduation[0];?>" target="_blank">See 10+2+3 Result</a></td>
					<?php } else { ?>
                		<td>File Not Uploaded</td>
					<?php } ?>
				
					<th>Parent Income Proof:</th>
					<?php if(!empty($parent_income[0])){ ?>
						<td><a href="<?php echo $parent_income[0];?>" target="_blank">See Parent Income</a></td>
					<?php } else { ?>
                		<td>File Not Uploaded</td>
					<?php } ?>
            </tr>
        </table>
    <?php
	}
}

add_action( 'personal_options_update', 'student_save_fields' );
add_action( 'edit_user_profile_update', 'student_save_fields' );

function student_save_fields( $user_id )
{
    update_user_meta( $user_id,'approved_total_scholarship_amount', sanitize_text_field( $_POST['approved_total_scholarship_amount'] ) );
    update_user_meta( $user_id,'approved_total_scholarship_frequency', sanitize_text_field( $_POST['approved_total_scholarship_frequency'] ) );
}

function page_only_visible($when){
	if($when=="before-login"){
		if(is_user_logged_in())
			wp_redirect(get_bloginfo("url"));
	}elseif($when=="after-login"){
		if(!is_user_logged_in()){
			$rurl=end(explode("?",$_SERVER['REQUEST_URI']));
			$rurl=urlencode(get_permalink());
			wp_redirect(get_permalink(18));
		}
	}
}

add_action('template_redirect','member_logged_in');
function member_logged_in(){
	if(is_user_logged_in() && current_user_can('member') && is_page(137)){
		wp_redirect(get_permalink(86));
        exit;
	}
}

add_action('template_redirect','student_logged_in');
function student_logged_in(){
	if(is_user_logged_in() && current_user_can('student') && is_page(137)){
		wp_redirect(get_permalink(111));
        exit;
	}
}

add_action('template_redirect','organization_logged_in');
function organization_logged_in(){
	if(is_user_logged_in() && current_user_can('organization') && is_page(137)){
		wp_redirect(get_permalink(380));
        exit;
	}
}

add_action('template_redirect','accountant_logged_in');
function accountant_logged_in(){
	if(is_user_logged_in() && (current_user_can('accountant_admin') || current_user_can('accountant_member')) && is_page(137)){
		wp_redirect(get_permalink(223));
        exit;
	}
}

add_action('template_redirect','gbmem_logged_in');
function gbmem_logged_in(){
	if(is_user_logged_in() && (current_user_can('gbmem') || current_user_can('treasure')) && is_page(137)){
		wp_redirect(get_permalink(494));
        exit;
	}
}

add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
  if (!current_user_can('administrator') && !current_user_can('member') && !is_admin()) {
    show_admin_bar(false);
  }
}



/****SHOUVIK's Code ****/

//Account Credit details edit ajax function
add_action( 'wp_ajax_account_credit_edit_ajax', 'account_credit_edit_ajax' );
add_action( 'wp_ajax_nopriv_account_credit_edit_ajax', 'account_credit_edit_ajax' );

function  account_credit_edit_ajax(){

	$credit_id = $_POST['creditID'];
	//echo $credit_id;
	global $wpdb;
	$table = $wpdb->prefix.'account_credit';
	$credit_details = $wpdb->get_results( "SELECT * FROM {$table} WHERE ID = {$credit_id}" );
	//print_r($credit_details);

	if($credit_details){
	
	?>
		<div class="col-12">
			<div class="registration-form-section">
				<h3>Edit Credit Details</h3>
				<form action="" method="post" id="account-credit-form">
					<div class="form-group mt-3">
						<label for="cr_date">Credit Date<span>*</span> : </label>
						<input type="date" class="form-control" id="cr_date" name="cr_date" placeholder="Enter credit date" value="<?php echo $credit_details[0]->credit_date; ?>">
						<div class="field_error" id="cr_date_error"></div>
					</div>
					<div class="form-group mt-3">
						<label for="cr_amount_received">Amount Received <span>*</span> : </label>
						<input type="text" class="form-control" id="cr_amount_received" name="cr_amount_received" placeholder="Enter received amount" value="<?php echo $credit_details[0]->amount_received; ?>">
						<div class="field_error" id="cr_amount_received_error"></div>
					</div>
					<div class="form-group mt-3">
						<label for="cr_source">Source <span>*</span> : </label>
						<select id="cr_source" name="cr_source" class="form-control">
							<option value="">Select Source</option>
							<?php 
								$source_array = array('Donation', 'Donation on Kind', 'Fees Collection', 'Sell of Goods & Services', 'Salvage Old Assets');
								foreach($source_array as $source){
									$sel_source = ($source == $credit_details[0]->source) ? 'selected="selected"' : '';
							?>
								<option value="<?php echo $source; ?>" <?php echo $sel_source; ?>><?php echo $source; ?></option>
							<?php } ?>
						</select>
						<div class="field_error" id="cr_source_error"></div>
					</div>
					<div class="form-group mt-3">
						<label for="cr_received_from">Received From<span>*</span> : </label>
						<input type="text" class="form-control" id="cr_received_from" name="cr_received_from" placeholder="Enter received from" value="<?php echo $credit_details[0]->received_from; ?>">
						<div class="field_error" id="cr_received_from_error"></div>
					</div>
					<div class="form-group mt-3">
						<label for="cr_purpose">Purpose<span>*</span> : </label>
						<input type="text" class="form-control" id="cr_purpose" name="cr_purpose" placeholder="Enter purpose" value="<?php echo $credit_details[0]->purpose; ?>">
						<div class="field_error" id="cr_purpose_error"></div>
					</div>
					<div class="form-group mt-3">
						<label for="cr_address">Address: </label>
						<input type="text" class="form-control" id="cr_address" name="cr_address" placeholder="Enter address" value="<?php echo $credit_details[0]->address; ?>">
						<div class="field_error" id="cr_address_error"></div>
					</div>
					<div class="form-group mt-3">
						<label for="cr_contact_no">Contact Number: </label>
						<input type="text" class="form-control" id="cr_contact_no" name="cr_contact_no" placeholder="Enter contact no" value="<?php echo $credit_details[0]->contact; ?>">
						<div class="field_error" id="cr_contact_no_error"></div>
					</div>
					<div class="form-group mt-3">
						<label for="cr_contact_email">Email: </label>
						<input type="text" class="form-control" id="cr_contact_email" name="cr_contact_email" placeholder="Enter email" value="<?php echo $credit_details[0]->email; ?>">
						<div class="field_error" id="cr_contact_email_error"></div>
					</div>
					<div class="form-group mt-3">
						<label for="cr_pan_number">PAN Number<span>*</span> : </label>
						<input type="text" class="form-control" id="cr_pan_number" name="cr_pan_number" placeholder="Enter PAN Number" value="<?php echo $credit_details[0]->pan_number; ?>">
						<div class="field_error" id="cr_pan_number_error"></div>
					</div>
					<div class="form-group mt-3">
						<label for="cr_transaction_type">Transaction Type<span>*</span> : </label>
						<select id="cr_transaction_type" name="cr_transaction_type" class="form-control">
							<option value="">Select Type</option>
							<?php 
								$type_array = array('Cash', 'CHQ', 'Net Banking' , 'ICIC_EazyPay');
								foreach($type_array as $type){
									$sel_type = ($type == $credit_details[0]->transaction_type) ? 'selected="selected"' : '';
							?>
								<option value="<?php echo $type; ?>" <?php echo $sel_type; ?>><?php echo $type; ?></option>
							<?php } ?>
						</select>
						<div class="field_error" id="cr_transaction_type_error"></div>
					</div>
					<div class="form-group mt-3">
						<label for="cr_account_head">Account Head<span>*</span> : </label>
						<select id="cr_account_head" name="cr_account_head" class="form-control">
							<option value="">Select Account Head</option>
							<?php 
								$head_array = array('CR - Agomoni - Donation', 'CR - AHEAD - Donation', 'CR - MS - Donation', 'CR - GF - Donation', 'CR - GF - Membership Contribution', 'CR - HES - Donation', 'CR - HES - Members Contribution', 'CR - JCD - Donation', 'CR - JCD - Members Contribution', 'CR - JCDSNG - Donation', 'CR - JCDSNG - Members Contribution', 'CR - Kishalay - Donation', 'CR - Kishalay - Members Contribution', 'CR - Relief - Donation', 'CR - GF-CAPEX - Donation', 'CR - Kishalay-CAPEX - Donation', 'CR - TMAC - Donation', 'CR - MH - Donation', 'CR - OWN AC Transfer', 'CR - Incorrect Transfer');
								foreach($head_array as $head){
									$sel_head = ($head == $credit_details[0]->account_head) ? 'selected="selected"' : '';
							?>
								<option value="<?php echo $head; ?>" <?php echo $sel_head; ?>><?php echo $head; ?></option>
							<?php } ?>
						</select>
						<div class="field_error" id="cr_account_head_error"></div>
					</div>
					<div class="form-group mt-3">
						<label for="cr_receipt_no">Receipt Number: </label>
						<input type="text" class="form-control" id="cr_receipt_no" name="cr_receipt_no" placeholder="Enter Receipt Number" value="<?php echo $credit_details[0]->receipt_vouchar; ?>">
						<div class="field_error" id="cr_receipt_no_error"></div>
					</div>
					<?php $display_none = (current_user_can('accountant_admin'))? '':'display:none'; ?>
					<div style="<?php echo $display_none; ?>">
						<div class="form-group mt-3">
							<label for="cr_bank_narration">Bank Narration: </label>
							<input type="text" class="form-control" id="cr_bank_narration" name="cr_bank_narration" placeholder="Enter Bank Narration" value="<?php echo $credit_details[0]->bank_narration; ?>">
							<div class="field_error" id="cr_bank_narration_error"></div>
						</div>
						<div class="form-group mt-3">
							<label for="cr_trans_ref_no">Transaction Reference Number: </label>
							<input type="text" class="form-control" id="cr_trans_ref_no" name="cr_trans_ref_no" placeholder="Enter Transaction Referance Number" value="<?php echo $credit_details[0]->trans_ref_no; ?>">
							<div class="field_error" id="cr_trans_ref_no_error"></div>
						</div>
						<div class="form-group mt-3">
							<label for="cr_value_date">Value Date: </label>
							<input type="date" class="form-control" id="cr_value_date" name="cr_value_date" placeholder="Enter Value Date" value="<?php echo $credit_details[0]->value_dt; ?>">
							<div class="field_error" id="cr_value_date_error"></div>
						</div>
						<div class="form-group mt-3">
							<label for="cr_bank_name">Bank Name: </label>
							<select id="cr_bank_name" name="cr_bank_name" class="form-control">
								<option value="">Select Bank Name</option>
								<?php 
									$bank_array = array('HDFC', 'ICICI', 'UBI');
									foreach($bank_array as $bank){
										$sel_bank = ($bank == $credit_details[0]->bank_name) ? 'selected="selected"' : '';
								?>
									<option value="<?php echo $bank; ?>" <?php echo $sel_bank; ?>><?php echo $bank; ?></option>
								<?php } ?>
							</select>
							<div class="field_error" id="cr_bank_name_error"></div>
						</div>
						<div class="form-group mt-3">
							<label for="cr_remark">Remark: </label>
							<input type="text" class="form-control" id="cr_remark" name="cr_remark" placeholder="Enter remark" value="<?php echo $credit_details[0]->remark; ?>">
							<div class="field_error" id="cr_remark_error"></div>
						</div>
					</div>
					<div class="account-credit-msg mt-3" id="account-credit-msg"></div>
					<input type="hidden" name="credit_ID" id="credit_ID" value="<?php echo $credit_details[0]->ID; ?>">
					<input type="hidden" name="recon_ID" id="recon_ID" value="<?php echo $credit_details[0]->recon_ID; ?>">
					<button type="submit" class="btn btn-primary" name="account-credit-btn" id="account-credit-btn">Submit</button>
					<a href="<?php echo get_permalink()?>" class="btn btn-primary" style="color:#fff">Add New / Reset</a>
					<?php if(current_user_can('accountant_admin')){?>
					<a href="javascript:void(0)" class="btn btn-primary" id="generate-donation-receipt" data-rid="<?php echo get_theme_value('weaversweb_donation_receipt');?>" style="color:#fff">Generate Donation Receipt No</a>
					<?php } ?>
				</form>
			</div>
		</div>
	<?php
	}

	
}
