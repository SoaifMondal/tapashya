<?php
if (!function_exists('general_contents')) {
    function general_contents($key)
    {
        return cmb2_get_option('general_contents_options', $key);
    }
}
add_action('cmb2_admin_init', 'general_contents_options_metabox');
function general_contents_options_metabox()
{
	$dir = wp_upload_dir();
	$cmb = new_cmb2_box(array(
		'id'           => 'general_contents_options_page',
		'title'        => esc_html__('General Contents', 'cmb2'),
		'object_types' => array('options-page'),
		'option_key'      => 'general_contents_options', // The option key and admin menu page slug.
		'icon_url'        => 'dashicons-table-row-after',
		'message_cb'        => 'yourprefix_options_page_message_callback',
	));

	$cmb->add_field(array(
		'name' => __( 'Header Logo', 'cmb2' ),
		'id' => 'header_logo',
		'type' => 'file',
	));

	$cmb->add_field(array(
		'name' => __( 'Footer Logo', 'cmb2' ),
		'id' => 'footer_logo',
		'type' => 'file',
	));

	$cmb->add_field( array(
		'name' => __( 'Contact Us Section', 'cmb2' ),
		'id' => 'contact_us_section',
		'type' => 'title',
	) );

	$cmb->add_field( array(
		'name' => __( 'Contact Us Heading', 'cmb2' ),
		'id' => 'contact_us_heading',
		'type' => 'text',
		'default' => 'Contact Us',
	) );

	$cmb->add_field( array(
		'name' => __( 'Contact No.', 'cmb2' ),
		'id' => 'contact_no',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Contact Email', 'cmb2' ),
		'id' => 'contact_email',
		'type' => 'text_email',
	) );

	$cmb->add_field( array(
		'name' => __( 'Location.', 'cmb2' ),
		'id' => 'location_info',
		'type' => 'textarea',
	) );

	$cmb->add_field( array(
		'name' => __( 'Follow Us Section', 'cmb2' ),
		'id' => 'follow_us_section',
		'type' => 'title',
	) );

	$cmb->add_field( array(
		'name' => __( 'Follow Us Heading', 'cmb2' ),
		'id' => 'follow_us_heading',
		'type' => 'text',
		'default' => 'Follow Us',
	) );

	$follow_links = $cmb->add_field( array(
		'name' => __( 'Follow Links', 'cmb2' ),
		'id' => 'follow_links',
		'type' => 'group',
		'options'     => array(
			'group_title'    => esc_html__( 'Link {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'     => esc_html__( 'Add Another Link', 'cmb2' ),
			'remove_button'  => esc_html__( 'Remove Link', 'cmb2' ),
			'sortable'       => true,
			// 'closed'      => true, // true to have the groups closed by default
			// 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
		),
	) );
	$cmb->add_group_field( $follow_links, array(
		'name'       => esc_html__( 'Follow Links Icon', 'cmb2' ),
		'id'         => 'follow_links_icon',
		'type'       => 'textarea_small',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );
	$cmb->add_group_field( $follow_links, array(
		'name'       => esc_html__( 'Follow Links URL', 'cmb2' ),
		'id'         => 'follow_links_url',
		'type'       => 'text_url',
	) );

	$cmb->add_field( array(
		'name' => __( 'Copyright Section Heading', 'cmb2' ),
		'id' => 'copyright_section_heading',
		'type' => 'textarea_small',
	) );

	$cmb->add_field( array(
		'name' => __( 'Privacy Policy Heading', 'cmb2' ),
		'id' => 'privacy_policy_heading',
		'type' => 'text',
		'default' => 'Privacy Policy',
	) );

	$cmb->add_field( array(
		'name' => __( 'Privacy Policy URL', 'cmb2' ),
		'id' => 'privacy_policy_url',
		'type' => 'text_url',
	) );

	$cmb->add_field( array(
		'name' => __( 'Terms & Conditions Heading', 'cmb2' ),
		'id' => 'terms_and_conditions_heading',
		'type' => 'text',
		'default' => 'Terms & Conditions',
	) );

	$cmb->add_field( array(
		'name' => __( 'Terms & Conditions URL', 'cmb2' ),
		'id' => 'terms_and_conditions_url',
		'type' => 'text_url',
	) );
}


function yourprefix_options_page_message_callback( $cmb, $args ) {
	if ( ! empty( $args['should_notify'] ) ) {
		if ( $args['is_updated'] ) {
			// Modify the updated message.
			$args['message'] = sprintf( esc_html__( '%s &mdash; Updated!', 'cmb2' ), $cmb->prop( 'title' ) );
		}
		add_settings_error( $args['setting'], $args['code'], $args['message'], $args['type'] );
	}
}
