<?php

/*****************************************
 * Weaver's Web Functions & Definitions *

/* Optional Panel Helper Functions
/*--------------------------------------*/
foreach (glob(get_template_directory() . '/functions/*.php') as $files) {
	include_once $files;
}


/* Post Type Helper Functions
/*--------------------------------------*/

foreach (glob(get_template_directory() . '/inc/post-types/*.php') as $file) {
	include_once $file;
}

/*profile Helper Functions
/*--------------------------------------*/

foreach (glob(get_template_directory() . '/inc/profile/*.php') as $file) {
	include_once $file;
}


function weaversweb_ftn_wp_enqueue_scripts()
{
	if (!is_admin()) {
		wp_enqueue_script('jquery');
		if (is_singular() and get_site_option('thread_comments')) {
			wp_print_scripts('comment-reply');
		}
	}
}
add_action('wp_enqueue_scripts', 'weaversweb_ftn_wp_enqueue_scripts');
function weaversweb_ftn_get_option($name)
{
	$options = get_option('weaversweb_ftn_options');
	if (isset($options[$name]))
		return $options[$name];
}
function weaversweb_ftn_update_option($name, $value)
{
	$options = get_option('weaversweb_ftn_options');
	$options[$name] = $value;
	return update_option('weaversweb_ftn_options', $options);
}
function weaversweb_ftn_delete_option($name)
{
	$options = get_option('weaversweb_ftn_options');
	unset($options[$name]);
	return update_option('weaversweb_ftn_options', $options);
}
function get_theme_value($field)
{
	$field1 = weaversweb_ftn_get_option($field);
	if (!empty($field1)) {
		$field_val = $field1;
	}
	return $field_val;
}


/*--------------------------------------*/
/* Theme Helper Functions
/*--------------------------------------*/
if (!function_exists('weaversweb_theme_setup')) :
	function weaversweb_theme_setup()
	{
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');
		register_nav_menus(
			array(
				'primary' => __('Primary Menu', 'weaversweb'),
				'secondary' => __('Secondary Menu', 'weaversweb'),
				'mobile' => __('Mobile Menu', 'weaversweb'),	
				'our_programs' => __('Our Programs Menu', 'weaversweb'),	
				'other_links' => __('Other Links Menu', 'weaversweb'),	
				// 'donation_menu' => __('Donation Menu', 'weaversweb'),	
			)
		);

		add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
	}
endif;
add_action('after_setup_theme', 'weaversweb_theme_setup');




function weaversweb_scripts()
{    

	wp_enqueue_style('bootstrap.min', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array());
	wp_enqueue_style('font-awesome-all-min', get_template_directory_uri() . '/assets/css/font-awesome-all.min.css', array());
	wp_enqueue_style('datatables-min-css', 'https://cdn.datatables.net/v/dt/dt-2.1.2/datatables.min.css', array());
	wp_enqueue_style('slick-css', get_template_directory_uri() . '/assets/css/slick.css', array());
	wp_enqueue_style('slick-theme-css', get_template_directory_uri() . '/assets/css/slick-theme.css', array());
	wp_enqueue_style('lightbox-css', get_template_directory_uri() . '/assets/css/lightbox.css', array());
	wp_enqueue_style('sweetalert-css', 'https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css', array());
	wp_enqueue_style('custom.css', get_template_directory_uri() . '/assets/css/custom.css', array());

	// Load the Internet Explorer specific script.

	global $wp_scripts;
	wp_enqueue_script('jquery-ui-core');
	wp_enqueue_script('bootstrap-bundle-min-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), false);
	wp_enqueue_script('font-awesome-all-min-js', get_template_directory_uri() . '/assets/js/font-awesome-all.min.js', array('jquery'), false);
	wp_enqueue_script('slick-js', get_template_directory_uri() . '/assets/js/slick.js', array('jquery'), false);
	wp_enqueue_script('lightbox-js', get_template_directory_uri() . '/assets/js/lightbox.js', array('jquery'), false);
	wp_enqueue_script('sweetalert-js', 'https://cdn.jsdelivr.net/npm/sweetalert2@11', array('jquery'), false);
	wp_enqueue_script('underscore-min', 'https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js', array('jquery'), false);
	wp_enqueue_script('moment.min', 'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js', array('jquery'), false);
	wp_enqueue_script('validt-js', '//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js', array('jquery'), false);
	wp_enqueue_script('datatables-min-js', 'https://cdn.datatables.net/v/dt/dt-2.1.2/datatables.min.js', array('jquery'), false);
	

	wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', array(), 1, 1, 1);
}
add_action('wp_enqueue_scripts', 'weaversweb_scripts');



/*-----------------ajax url ---------------------*/

add_action('wp_head', 'hook_javascript');
function hook_javascript()
{
?>
	<script type="text/javascript">
		var ajaxurl = "<?php echo admin_url('admin-ajax.php') ?>";
	</script>
<?php
}



//** SVG format supporter

add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {
	$filetype = wp_check_filetype($filename, $mimes);
	return [
		'ext' => $filetype['ext'],
		'type' => $filetype['type'],
		'proper_filename' => $data['proper_filename']
	];
}, 10, 4);

function cc_mime_types($mimes)
{
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function fix_svg()
{
	echo '<style type="text/css">
		  .attachment-266x266, .thumbnail img {
			   width: 100% !important;
			   height: auto !important;
		  }
		  </style>';
}
add_action('admin_head', 'fix_svg');

///acf theme function
if (function_exists('acf_add_options_page')) {

	acf_add_options_page(
		array(
			'page_title' => 'Theme General Settings',
			'menu_title' => 'Theme Settings',
			'menu_slug' => 'theme-general-settings',
			'capability' => 'edit_posts',
			'redirect' => false
		)
	);
}


///first name validation///
add_filter('wpcf7_validate_text*', 'custom_firstname_validation_filter', 20, 2);

function custom_firstname_validation_filter($result, $tag)
{
	if ('FirstName' == $tag->name) {
		// matches any utf words with the first not starting with a number
		$re = '/^[A-Za-z]+$/';

		if (!preg_match($re, $_POST['FirstName'], $matches)) {
			$result->invalidate($tag, "This is not a valid First name!");
		}
	}

	return $result;
}

///Last name validation///

add_filter('wpcf7_validate_text*', 'custom_Lastname_validation_filter', 20, 2);

function custom_Lastname_validation_filter($result, $tag)
{
	if ('Lastname' == $tag->name) {
		// matches any utf words with the first not starting with a number
		$re = '/^[A-Za-z]+$/';

		if (!preg_match($re, $_POST['Lastname'], $matches)) {
			$result->invalidate($tag, "This is not a valid Last name!");
		}
	}

	return $result;
}


// Our Centers Associations Page Load more
function load_more_gallery() {
   $offset = intval($_POST['offset']);
  $initial_load = intval($_POST['initial_load']);
  $page_id=intval($_POST['page_id']);
  $section_two_gallery = get_field('section_two_gallery',$page_id);

    if ($section_two_gallery) {
        $images_to_load = array_slice($section_two_gallery, $offset, $initial_load);
        foreach ($images_to_load as $image) {
            echo '<div class="item">
                    <div class="item-inner">
                        <a class="position-relative" href="' . esc_url($image['url']) . '" data-lightbox="gallery">
                            <div class="image-holder">
                                <img src="' . esc_url($image['url']) . '" alt="">
                            </div>
                            <div class="overlay-icon">
                                <img src="' . get_template_directory_uri() . '/assets/images/eye-icon.svg" alt="">
                            </div>
                        </a>
                    </div>
                </div>';
        }
    }
    wp_die();
}
add_action('wp_ajax_load_more_gallery', 'load_more_gallery');
add_action('wp_ajax_nopriv_load_more_gallery', 'load_more_gallery');





