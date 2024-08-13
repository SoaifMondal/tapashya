<?php 
//menu support
add_theme_support( 'menus' );
add_action( 'init', 'register_my_menus' );
function register_my_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __( 'Primary Menu' ),
            'secondary-menu' => __( 'Secondary Menu' )
        )
    );
}

//post thumbnail support
add_theme_support( 'post-thumbnails' );

//Add script and style
function add_theme_stylesheet_value($styleType){
if($styleType == "style"){
$dir       = get_template_directory_uri() . '/assets/css/';
$styletArr = array(
                   "bootstrap-min-css"=> $dir.'bootstrap.min.css',
                   "font-awesome"=>      $dir.'font-awesome-all.min.css',
                   "owl-carousel"=>      $dir.'owl.carousel.min.css',
                   "owl-theme"=>         $dir.'owl.theme.default.min.css',
                   "animate"=>           $dir.'animate.min.css',
                   "custom-css"=>        $dir.'custom.css',
                   );
return $styletArr;
} else {
$dir       = get_template_directory_uri() . '/assets/js/';
$scriptArr = array(
                   "bootstrap-js"=>     $dir."bootstrap.min.js",
                   "bootstrap-bundle"=> $dir."bootstrap.bundle.min.js",
                   "font-awesome-js"=>  $dir."font-awesome-all.min.js",
                   "owl-carousel-js"=>  $dir."owl.carousel.min.js",
                   "wow-js"=>           $dir."wow.min.js",
                   "animateTyping"=>    $dir."jquery.animateTyping.js",
                   "custom-js"=>        $dir."custom.js",
                   );
return $scriptArr;
}

}
//Remove default editor of admin
global $pagenow;
$removePageEditor = [7,9,11,13,15,17,19,21];
foreach($removePageEditor as $pageIds){
if ($_GET['post'] == $pageIds) {
     add_action('admin_init', 'remove_editor');
     function remove_editor() {
      remove_post_type_support('page', 'editor');
    }
    }
}

//get image by url
function get_imag_by_url($postid,$metakey){
    $imageId = get_post_meta($postid, $metakey, true);
    $attachment_image = wp_get_attachment_url( $imageId );
    return $attachment_image;
} 
//Allow svg image

add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

  global $wp_version;
  if ( $wp_version !== '4.7.1' ) {
     return $data;
  }

  $filetype = wp_check_filetype( $filename, $mimes );

  return [
      'ext'             => $filetype['ext'],
      'type'            => $filetype['type'],
      'proper_filename' => $data['proper_filename']
  ];

}, 10, 4 );

function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function fix_svg() {
  echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'fix_svg' ); 

//pagination 
function pagination_bar( $custom_query ) {

    $total_pages = $custom_query->max_num_pages;
    $big = 999999999; // need an unlikely integer

    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));

        echo paginate_links(array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
    }
}

