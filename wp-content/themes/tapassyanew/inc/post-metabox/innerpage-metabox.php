<?php
/*About Us Page*/
add_action( 'cmb2_admin_init', 'about_metaboxes' );
function about_metaboxes(){

/*-----------------------------
    BANNER  SECTION
------------------------------*/
  
  $about_page_field = new_cmb2_box( array(
    'id'            => 'about_page_field',  // Belgrove Bouncing Castles
    'title'         => 'About Page Details',
    'object_types'  => array( 'page' ), // Post type
    'context'       => 'normal',
    'priority'      => 'high',
    'show_names'    => true, // Show field names on the left
    'show_on'      => array( 'key' => 'page-template','value' =>array('templates/template-aboutus.php')),
    //'show_on'      => array( 'key' => 'id', 'value' => array(42))
) );

    $about_page_field->add_field(array(
        'name' => 'Banner Image',
        'desc' => 'Upload Banner Image',
        'id'   => 'aboutus_image',
        'type' => 'file',
    ) );

    $about_page_field->add_field(array(
        'name' => 'Banner Heading',
        'desc' => 'Enter Banner Heading',
        'id'   => 'aboutus_heading',
        'type' => 'text',
    ) );

    $about_page_field->add_field(array(
        'name' => 'About Section Heading',
        'desc' => 'Enter about section heading',
        'id'   => 'aboutus_section_heading',
        'type' => 'text',
    ) );

    $group_about_section = $about_page_field->add_field( array(
        'id'          => 'aboutus_group_details',
        'type'        => 'group',
        'description' => esc_html__( 'Create Section', 'cmb2' ),
        'options'     => array(
            'group_title'   => esc_html__( 'Section {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Add Another Section', 'cmb2' ),
            'remove_button' => esc_html__( 'Remove Section', 'cmb2' ),
            'closed'     => true, // true to have the groups closed by default
        ),
    ) );

    $about_page_field->add_group_field( $group_about_section, array(
        'name'       => esc_html__( 'Section Image', 'cmb2' ),
        'id'         => 'aboutus_groupsection_image',
        'type'       => 'file',
    ) );

    $about_page_field->add_group_field( $group_about_section, array(
        'name'       => esc_html__( 'Section Heading', 'cmb2' ),
        'id'         => 'aboutus_groupsection_heading',
        'type'       => 'text',
    ) );

    $about_page_field->add_group_field( $group_about_section, array(
        'name'       => esc_html__( 'Section Details', 'cmb2' ),
        'id'         => 'aboutus_groupsection_details',
        'type'       => 'textarea',
    ) );

    $about_page_field->add_field(array(
        'name' => 'Upload Photos',
        'id'   => 'aboutus_photo_gallery',
        'type' => 'file_list',
    ) );
}


/*Join Us Page*/
add_action( 'cmb2_admin_init', 'join_metaboxes' );
function join_metaboxes(){

/*-----------------------------
    BANNER  SECTION
------------------------------*/
  
  $join_page_field = new_cmb2_box( array(
    'id'            => 'join_page_field',  // Belgrove Bouncing Castles
    'title'         => 'Join Us Page Details',
    'object_types'  => array( 'page' ), // Post type
    'context'       => 'normal',
    'priority'      => 'high',
    'show_names'    => true, // Show field names on the left
    'show_on'      => array( 'key' => 'page-template','value' =>array('templates/template-joinus.php')),
    //'show_on'      => array( 'key' => 'id', 'value' => array(42))
) );

    $join_page_field->add_field(array(
        'name' => 'Banner Image',
        'desc' => 'Upload Banner Image',
        'id'   => 'joinus_banner_image',
        'type' => 'file',
    ) );

    $join_page_field->add_field(array(
        'name' => 'Banner Heading',
        'desc' => 'Enter Banner Heading',
        'id'   => 'joinus_banner_heading',
        'type' => 'text',
    ) );

    $join_page_field->add_field(array(
        'name' => 'Join Us Page Heading',
        'desc' => 'Enter Join Us Page Heading',
        'id'   => 'joinus_page_heading',
        'type' => 'text',
    ) );

    $join_page_field->add_field(array(
        'name' => 'Join Us Page Left Image',
        'desc' => 'Upload Join Us left image',
        'id'   => 'joinus_page_leftimg',
        'type' => 'file',
    ) );

    $join_page_field->add_field(array(
        'name' => 'Join Us Page Right Details',
        'desc' => 'Upload Join Us right details',
        'id'   => 'joinus_page_rightdetails',
        'type'    => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 5,
        ),
    ) );

    $join_page_field->add_field(array(
        'name' => 'Join Us Page Full Width Details',
        'desc' => 'Upload Join Us full width details',
        'id'   => 'joinus_page_fullwidth_details',
        'type'    => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 5,
        ),
    ) );
}


/*Our Program Page*/
add_action( 'cmb2_admin_init', 'ourprogram_metaboxes' );
function ourprogram_metaboxes(){

/*-----------------------------
    BANNER  SECTION
------------------------------*/
  
  $ourprogram_page_field = new_cmb2_box( array(
    'id'            => 'ourprogram_page_field',  // Belgrove Bouncing Castles
    'title'         => 'Our Program Page Details',
    'object_types'  => array( 'page' ), // Post type
    'context'       => 'normal',
    'priority'      => 'high',
    'show_names'    => true, // Show field names on the left
    'show_on'      => array( 'key' => 'page-template','value' =>array('templates/template-ourprogram.php')),
    //'show_on'      => array( 'key' => 'id', 'value' => array(42))
) );

    $ourprogram_page_field->add_field(array(
        'name' => 'Banner Image',
        'desc' => 'Upload Banner Image',
        'id'   => 'ourprogram_banner_image',
        'type' => 'file',
    ) );

    $ourprogram_page_field->add_field(array(
        'name' => 'Banner Heading',
        'desc' => 'Enter Banner Heading',
        'id'   => 'ourprogram_banner_heading',
        'type' => 'text',
    ) );

    $ourprogram_page_field->add_field(array(
        'name' => 'First Program Heading',
        'desc' => 'Enter Program Heading',
        'id'   => 'ourprogram_firstprogram_heading',
        'type' => 'text',
    ) );

    $ourprogram_page_field->add_field(array(
        'name' => 'First Program Image',
        'desc' => 'Enter Program Image',
        'id'   => 'ourprogram_firstprogram_image',
        'type' => 'file',
    ) );

    $ourprogram_page_field->add_field(array(
        'name' => 'First Program Details',
        'desc' => 'Enter Program Details',
        'id'   => 'ourprogram_firstprogram_details',
        'type' => 'wysiwyg',
    ) );

    $ourprogram_page_field->add_field(array(
        'name' => 'Second Program Heading',
        'desc' => 'Enter Program Heading',
        'id'   => 'ourprogram_secondprogram_heading',
        'type' => 'text',
    ) );

    $group_second_program = $ourprogram_page_field->add_field( array(
        'id'          => 'ourprogram_group_details',
        'type'        => 'group',
        'description' => esc_html__( 'Create Tapassya Bhavan Program', 'cmb2' ),
        'options'     => array(
            'group_title'   => esc_html__( 'Program {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Add Another Program', 'cmb2' ),
            'remove_button' => esc_html__( 'Remove Program', 'cmb2' ),
            'closed'     => true, // true to have the groups closed by default
        ),
    ) );

    $ourprogram_page_field->add_group_field( $group_second_program, array(
        'name'       => esc_html__( 'Program Image', 'cmb2' ),
        'id'         => 'ourprogram_second_image',
        'type'       => 'file',
    ) );

    $ourprogram_page_field->add_group_field( $group_second_program, array(
        'name'       => esc_html__( 'Program Heading', 'cmb2' ),
        'id'         => 'ourprogram_second_heading',
        'type'       => 'text',
    ) );

    $ourprogram_page_field->add_group_field( $group_second_program, array(
        'name'       => esc_html__( 'Program Details', 'cmb2' ),
        'id'         => 'ourprogram_second_details',
        'type'       => 'textarea_small',
    ) );


    $ourprogram_page_field->add_field(array(
        'name' => 'Third Program Heading',
        'desc' => 'Enter Program Heading',
        'id'   => 'ourprogram_thirdprogram_heading',
        'type' => 'text',
    ) );

    $ourprogram_page_field->add_field(array(
        'name' => 'Third Program Sub Heading',
        'desc' => 'Enter Program Sub Heading',
        'id'   => 'ourprogram_thirdprogram_subheading',
        'type' => 'text',
    ) );

    $ourprogram_page_field->add_field(array(
        'name' => 'Third Program Details',
        'desc' => 'Enter Program Details',
        'id'   => 'ourprogram_thirdprogram_details',
        'type' => 'textarea_small',
    ) );

    $group_third_program = $ourprogram_page_field->add_field( array(
        'id'          => 'ourprogram_group_agomoni_details',
        'type'        => 'group',
        'description' => esc_html__( 'Create Tapassya Agomoni Program', 'cmb2' ),
        'options'     => array(
            'group_title'   => esc_html__( 'Program {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Add Another Program', 'cmb2' ),
            'remove_button' => esc_html__( 'Remove Program', 'cmb2' ),
            'closed'     => true, // true to have the groups closed by default
        ),
    ) );

    $ourprogram_page_field->add_group_field( $group_third_program, array(
        'name'       => esc_html__( 'Program Image', 'cmb2' ),
        'id'         => 'ourprogram_third_image',
        'type'       => 'file',
    ) );

    $ourprogram_page_field->add_group_field( $group_third_program, array(
        'name'       => esc_html__( 'Program Details', 'cmb2' ),
        'id'         => 'ourprogram_third_details',
        'type'       => 'textarea_small',
    ) );


    $ourprogram_page_field->add_field(array(
        'name' => 'Fourth Program Heading',
        'desc' => 'Enter Program Heading',
        'id'   => 'ourprogram_fourthprogram_heading',
        'type' => 'text',
    ) );

    $group_fourth_program = $ourprogram_page_field->add_field( array(
        'id'          => 'ourprogram_group_relief_details',
        'type'        => 'group',
        'description' => esc_html__( 'Create Disaster Relief Program', 'cmb2' ),
        'options'     => array(
            'group_title'   => esc_html__( 'Program {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Add Another Program', 'cmb2' ),
            'remove_button' => esc_html__( 'Remove Program', 'cmb2' ),
            'closed'     => true, // true to have the groups closed by default
        ),
    ) );

    $ourprogram_page_field->add_group_field( $group_fourth_program, array(
        'name'       => esc_html__( 'Program Image', 'cmb2' ),
        'id'         => 'ourprogram_fourth_image',
        'type'       => 'file',
    ) );

    $ourprogram_page_field->add_group_field( $group_fourth_program, array(
        'name'       => esc_html__( 'Program Heading', 'cmb2' ),
        'id'         => 'ourprogram_fourth_heading',
        'type'       => 'text',
    ) );

    $ourprogram_page_field->add_group_field( $group_fourth_program, array(
        'name'       => esc_html__( 'Program Details', 'cmb2' ),
        'id'         => 'ourprogram_fourth_details',
        'type'       => 'textarea_small',
    ) );


    $ourprogram_page_field->add_field(array(
        'name' => 'Fifth Program Heading',
        'desc' => 'Enter Program Heading',
        'id'   => 'ourprogram_fifthprogram_heading',
        'type' => 'text',
    ) );

    $group_fifth_program = $ourprogram_page_field->add_field( array(
        'id'          => 'ourprogram_group_medical_details',
        'type'        => 'group',
        'description' => esc_html__( 'Create Medical Support Program', 'cmb2' ),
        'options'     => array(
            'group_title'   => esc_html__( 'Program {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Add Another Program', 'cmb2' ),
            'remove_button' => esc_html__( 'Remove Program', 'cmb2' ),
            'closed'     => true, // true to have the groups closed by default
        ),
    ) );

    $ourprogram_page_field->add_group_field( $group_fifth_program, array(
        'name'       => esc_html__( 'Program Image', 'cmb2' ),
        'id'         => 'ourprogram_fifth_image',
        'type'       => 'file',
    ) );

    $ourprogram_page_field->add_group_field( $group_fifth_program, array(
        'name'       => esc_html__( 'Program Details', 'cmb2' ),
        'id'         => 'ourprogram_fifth_details',
        'type'       => 'textarea_small',
    ) );

    $ourprogram_page_field->add_field(array(
        'name' => 'Sixth Program Heading',
        'desc' => 'Enter Program Heading',
        'id'   => 'ourprogram_sixthprogram_heading',
        'type' => 'text',
    ) );

    $ourprogram_page_field->add_field(array(
        'name' => 'Sixth Program Image',
        'desc' => 'Enter Program Image',
        'id'   => 'ourprogram_sixthprogram_image',
        'type' => 'file',
    ) );

    $ourprogram_page_field->add_field(array(
        'name' => 'Sixth Program Details',
        'desc' => 'Enter Program Details',
        'id'   => 'ourprogram_sixthprogram_details',
        'type' => 'wysiwyg',
    ) );

    $ourprogram_page_field->add_field(array(
        'name' => 'Seventh Program Heading',
        'desc' => 'Enter Program Heading',
        'id'   => 'ourprogram_seventhprogram_heading',
        'type' => 'text',
    ) );

    $ourprogram_page_field->add_field(array(
        'name' => 'Seventh Program Details',
        'desc' => 'Enter Program Details',
        'id'   => 'ourprogram_seventhprogram_details',
        'type' => 'wysiwyg',
    ) );


    $ourprogram_page_field->add_field(array(
        'name' => 'Project Kishalay Heading',
        'desc' => 'Enter Project Kishalay Heading',
        'id'   => 'ourprogram_prokishalay_heading',
        'type' => 'text',
    ) );

    $ourprogram_page_field->add_field(array(
        'name' => 'Project Kishalay Sub Heading',
        'desc' => 'Enter Project Kishalay Sub Heading',
        'id'   => 'ourprogram_prokishalay_subheading',
        'type' => 'text',
    ) );

    $ourprogram_page_field->add_field(array(
        'name' => 'Project Kishalay PDF',
        'desc' => 'Enter Project Kishalay PDF',
        'id'   => 'ourprogram_prokishalay_pdf',
        'type' => 'file',
    ) );
}

/*HES Page*/
add_action( 'cmb2_admin_init', 'hes_metaboxes' );
function hes_metaboxes(){

/*-----------------------------
    BANNER  SECTION
------------------------------*/
  
  $hes_page_field = new_cmb2_box( array(
    'id'            => 'hes_page_field',  // Belgrove Bouncing Castles
    'title'         => 'HES Page Details',
    'object_types'  => array( 'page' ), // Post type
    'context'       => 'normal',
    'priority'      => 'high',
    'show_names'    => true, // Show field names on the left
    'show_on'      => array( 'key' => 'page-template','value' =>array('templates/template-hes.php')),
    //'show_on'      => array( 'key' => 'id', 'value' => array(42))
) );

    $hes_page_field->add_field(array(
        'name' => 'Banner Image',
        'desc' => 'Upload Banner Image',
        'id'   => 'hes_image',
        'type' => 'file',
    ) );

    $hes_page_field->add_field(array(
        'name' => 'Banner Heading',
        'desc' => 'Enter Banner Heading',
        'id'   => 'hes_heading',
        'type' => 'text',
    ) );

    $hes_page_field->add_field(array(
        'name' => 'HES Section Details',
        'desc' => 'Enter hes section details',
        'id'   => 'hes_section_details',
        'type' => 'textarea_small',
    ) );

    $hes_page_field->add_field(array(
        'name' => 'HES Left Section Heading',
        'desc' => 'Enter hes left section heading',
        'id'   => 'hes_left_section_heading',
        'type' => 'text',
    ) );

    $group_hes_section = $hes_page_field->add_field( array(
        'id'          => 'hes_group_details',
        'type'        => 'group',
        'description' => esc_html__( 'Create Section', 'cmb2' ),
        'options'     => array(
            'group_title'   => esc_html__( 'Section {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Add Another Section', 'cmb2' ),
            'remove_button' => esc_html__( 'Remove Section', 'cmb2' ),
            'closed'     => true, // true to have the groups closed by default
        ),
    ) );

    $hes_page_field->add_group_field( $group_hes_section, array(
        'name'       => esc_html__( 'Section Image', 'cmb2' ),
        'id'         => 'hes_groupsection_image',
        'type'       => 'file',
    ) );

    $hes_page_field->add_group_field( $group_hes_section, array(
        'name'       => esc_html__( 'Section Heading', 'cmb2' ),
        'id'         => 'hes_groupsection_heading',
        'type'       => 'text',
    ) );

    $hes_page_field->add_group_field( $group_hes_section, array(
        'name'       => esc_html__( 'Section Details', 'cmb2' ),
        'id'         => 'hes_groupsection_details',
        'type'       => 'textarea',
    ) );

    $hes_page_field->add_field(array(
        'name' => 'HES Right Section Heading',
        'desc' => 'Enter hes right section heading',
        'id'   => 'hes_right_section_heading',
        'type' => 'text',
    ) );

    $hes_page_field->add_field(array(
        'name' => 'HES Right Section Details',
        'desc' => 'Enter hes right section details',
        'id'   => 'hes_right_section_details',
        'type' => 'textarea',
    ) );
}

/*Programs Page*/
add_action( 'cmb2_admin_init', 'programs_metaboxes' );
function programs_metaboxes(){

/*-----------------------------
    BANNER  SECTION
------------------------------*/
  
  $programs_page_field = new_cmb2_box( array(
    'id'            => 'programs_page_field',  // Belgrove Bouncing Castles
    'title'         => 'Program Page Details',
    'object_types'  => array( 'page' ), // Post type
    'context'       => 'normal',
    'priority'      => 'high',
    'show_names'    => true, // Show field names on the left
    'show_on'      => array( 'key' => 'page-template','value' =>array('templates/template-programs.php')),
    //'show_on'      => array( 'key' => 'id', 'value' => array(42))
) );

    $programs_page_field->add_field(array(
        'name' => 'Banner Image',
        'desc' => 'Upload Banner Image',
        'id'   => 'programs_banner_image',
        'type' => 'file',
    ) );

    $programs_page_field->add_field(array(
        'name' => 'Banner Heading',
        'desc' => 'Enter Banner Heading',
        'id'   => 'programs_banner_heading',
        'type' => 'text',
    ) );

    $programs_page_field->add_field(array(
        'name' => 'Program Page Heading',
        'desc' => 'Enter program page heading',
        'id'   => 'programs_page_heading',
        'type' => 'text',
    ) );

    $programs_page_field->add_field(array(
        'name' => 'Program Page Left Image',
        'desc' => 'Enter program page left image',
        'id'   => 'programs_page_leftimg',
        'type' => 'file',
    ) );

    $programs_page_field->add_field(array(
        'name' => 'Program Page Right Details',
        'desc' => 'Enter program page right details',
        'id'   => 'programs_page_rightdetails',
        'type'    => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 8,
        ),  
    ) );

    $programs_page_field->add_field(array(
        'name' => 'Program Gallery Section Heading',
        'desc' => 'Enter program gallery section heading',
        'id'   => 'programs_galsec_heading',
        'type' => 'text',
    ) );

    $group_programs = $programs_page_field->add_field( array(
        'id'          => 'programs_group_details',
        'type'        => 'group',
        'description' => esc_html__( 'Create Program Gallery', 'cmb2' ),
        'options'     => array(
            'group_title'   => esc_html__( 'Program Gallery {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Add Another Program Gallery', 'cmb2' ),
            'remove_button' => esc_html__( 'Remove Program Gallery', 'cmb2' ),
            'closed'     => true, // true to have the groups closed by default
        ),
    ) );

    $programs_page_field->add_group_field( $group_programs, array(
        'name'       => esc_html__( 'Section Image', 'cmb2' ),
        'id'         => 'programs_groupsection_image',
        'type'       => 'file',
    ) );

    $programs_page_field->add_group_field( $group_programs, array(
        'name'       => esc_html__( 'Section Short Details', 'cmb2' ),
        'id'         => 'programs_groupsection_shortdetails',
        'type'       => 'textarea_small',
    ) );
}