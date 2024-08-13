<?php
function yourprefix_show_if_front_page( $cmb ) {
	// Don't show this metabox if it's not the front page template.
	if ( get_option( 'page_on_front' ) !== $cmb->object_id ) {
		return false;
	}
	return true;
}

/*Home Banner Metabox*/
add_action( 'cmb2_admin_init', 'cmb2_homebanner_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_homebanner_metaboxes() {


	/**
	 * Initiate the metabox
	 */
	$cmb_homebanner_page = new_cmb2_box(
 	array(
		'id'            => 'homebanner_details',
		'title'         => __( 'Banner Section', 'cmb2' ),
		'object_types'  => array( 'page', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true,
		'show_on_cb' 	=> 'yourprefix_show_if_front_page',
	) );

	$group_home_banner = $cmb_homebanner_page->add_field( array(
		'id'          => 'home_banner_details',
		'type'        => 'group',
		'description' => esc_html__( 'Create Banner', 'cmb2' ),
		'options'     => array(
			'group_title'   => esc_html__( 'Banner {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => esc_html__( 'Add Another Banner', 'cmb2' ),
			'remove_button' => esc_html__( 'Remove Banner', 'cmb2' ),
			'closed'     => true, // true to have the groups closed by default
		),
	) );

	$cmb_homebanner_page->add_group_field( $group_home_banner, array(
		'name'       => esc_html__( 'Banner Image', 'cmb2' ),
		'id'         => 'home_banner_image',
		'type'       => 'file',
	) );

	$cmb_homebanner_page->add_group_field( $group_home_banner, array(
		'name'       => esc_html__( 'Banner Heading', 'cmb2' ),
		'id'         => 'home_banner_heading',
		'type'       => 'text',
	) );

	$cmb_homebanner_page->add_group_field( $group_home_banner, array(
		'name'       => esc_html__( 'Banner Sub Heading', 'cmb2' ),
		'id'         => 'home_banner_subheading',
		'type'       => 'textarea_small',
	) );

	$cmb_homebanner_page->add_group_field( $group_home_banner, array(
		'name'       => esc_html__( 'Banner Button Text', 'cmb2' ),
		'id'         => 'home_banner_btntxt',
		'type'       => 'text',
	) );

	$cmb_homebanner_page->add_group_field( $group_home_banner, array(
		'name'       => esc_html__( 'Banner Button Link', 'cmb2' ),
		'id'         => 'home_banner_btnlink',
		'type'       => 'text',
	) );
}


/*Home Details Metabox*/
add_action( 'cmb2_admin_init', 'cmb2_home_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_home_metaboxes() {


	/**
	 * Initiate the metabox
	 */
	$cmb_home_page = new_cmb2_box(
 	array(
		'id'            => 'home_details',
		'title'         => __( 'Banner Section', 'cmb2' ),
		'object_types'  => array( 'page' ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true,
		'show_on_cb' 	=> 'yourprefix_show_if_front_page',
	) );

	$cmb_home_page->add_field( array(
		'name' => esc_html__( 'Why We Exists Heading', 'cmb2' ),
		'id'   => 'home_whyweexists_heading',
		'type' => 'text',
	) );

	$group_home = $cmb_home_page->add_field( array(
		'id'          => 'home_whyweexists_details',
		'type'        => 'group',
		'description' => esc_html__( 'Create Why We Exists', 'cmb2' ),
		'options'     => array(
			'group_title'   => esc_html__( 'Why We Exists {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => esc_html__( 'Add Another Why We Exists', 'cmb2' ),
			'remove_button' => esc_html__( 'Remove Why We Exists', 'cmb2' ),
			'closed'     => true, // true to have the groups closed by default
		),
	) );

	$cmb_home_page->add_group_field( $group_home, array(
		'name'       => esc_html__( 'Why We Exists Image', 'cmb2' ),
		'id'         => 'home_whyweexists_image',
		'type'       => 'file',
	) );

	$cmb_home_page->add_group_field( $group_home, array(
		'name'       => esc_html__( 'Why We Exists Heading', 'cmb2' ),
		'id'         => 'home_whyweexists_heading',
		'type'       => 'text',
	) );

	$cmb_home_page->add_group_field( $group_home, array(
		'name'       => esc_html__( 'Why We Exists Details', 'cmb2' ),
		'id'         => 'home_whyweexists_detail',
		'type'       => 'textarea_small',
	) );

	$cmb_home_page->add_group_field( $group_home, array(
		'name'       => esc_html__( 'Why We Exists Button Text', 'cmb2' ),
		'id'         => 'home_whyweexists_btntxt',
		'type'       => 'text',
	) );

	$cmb_home_page->add_group_field( $group_home, array(
		'name'       => esc_html__( 'Why We Exists Button Link', 'cmb2' ),
		'id'         => 'home_whyweexists_btnlink',
		'type'       => 'text',
	) );

	$cmb_home_page->add_field( array(
		'name' => esc_html__( 'Join With Us Background Image', 'cmb2' ),
		'id'   => 'home_joinwithus_bgimg',
		'type' => 'file',
	) );

	$cmb_home_page->add_field( array(
		'name' => esc_html__( 'Join With Us Text', 'cmb2' ),
		'id'   => 'home_joinwithus_text',
		'type' => 'text',
	) );

	$cmb_home_page->add_field( array(
		'name' => esc_html__( 'Join With Us Heading', 'cmb2' ),
		'id'   => 'home_joinwithus_heading',
		'type' => 'textarea_small',
	) );

	$cmb_home_page->add_field( array(
		'name' => esc_html__( 'Join With Us Details', 'cmb2' ),
		'id'   => 'home_joinwithus_details',
		'type' => 'textarea_small',
	) );

	$cmb_home_page->add_field( array(
		'name' => esc_html__( 'Join With Us Button Text', 'cmb2' ),
		'id'   => 'home_joinwithus_btntxt',
		'type' => 'text',
	) );

	$cmb_home_page->add_field( array(
		'name' => esc_html__( 'Join With Us Button Link', 'cmb2' ),
		'id'   => 'home_joinwithus_btnlink',
		'type' => 'text',
	) );

	$cmb_home_page->add_field( array(
		'name' => esc_html__( 'Join With Us Right Image', 'cmb2' ),
		'id'   => 'home_joinwithus_rightimg',
		'type' => 'file',
	) );

	$cmb_home_page->add_field( array(
		'name' => esc_html__( 'What We Do Heading', 'cmb2' ),
		'id'   => 'home_whatwedo_heading',
		'type' => 'text',
	) );

	$group_home = $cmb_home_page->add_field( array(
		'id'          => 'home_whatwedo_details',
		'type'        => 'group',
		'description' => esc_html__( 'Create What We Do', 'cmb2' ),
		'options'     => array(
			'group_title'   => esc_html__( 'What We Do {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => esc_html__( 'Add Another What We Do', 'cmb2' ),
			'remove_button' => esc_html__( 'Remove What We Do', 'cmb2' ),
			'closed'     => true, // true to have the groups closed by default
		),
	) );

	$cmb_home_page->add_group_field( $group_home, array(
		'name'       => esc_html__( 'What We Do Image', 'cmb2' ),
		'id'         => 'home_whatwedo_image',
		'type'       => 'file',
	) );

	$cmb_home_page->add_group_field( $group_home, array(
		'name'       => esc_html__( 'What We Do Heading', 'cmb2' ),
		'id'         => 'home_whatwedo_heading',
		'type'       => 'text',
	) );

	$cmb_home_page->add_group_field( $group_home, array(
		'name'       => esc_html__( 'What We Do Button Text', 'cmb2' ),
		'id'         => 'home_whatwedo_btntxt',
		'type'       => 'text',
	) );

	$cmb_home_page->add_group_field( $group_home, array(
		'name'       => esc_html__( 'What We Do Button Link', 'cmb2' ),
		'id'         => 'home_whatwedo_btnlink',
		'type'       => 'text',
	) );

	$cmb_home_page->add_field( array(
		'name' => esc_html__( 'Contact with us Heading', 'cmb2' ),
		'id'   => 'home_contactus_heading',
		'type' => 'text',
	) );

	$cmb_home_page->add_field( array(
		'name' => esc_html__( 'Map Address', 'cmb2' ),
		'id'   => 'home_map_address',
		'type' => 'text',
	) );

	$cmb_home_page->add_field( array(
		'name' => esc_html__( 'Contact Address Heading', 'cmb2' ),
		'id'   => 'home_contactaddress_heading',
		'type' => 'text',
	) );

	$cmb_home_page->add_field( array(
		'name' => esc_html__( 'Contact Address', 'cmb2' ),
		'id'   => 'home_contactaddress',
		'type' => 'textarea_small',
	) );
}
?>