<?php 
/*Scholar Request Page*/
add_action( 'cmb2_admin_init', 'scholar_request_metaboxes' );
function scholar_request_metaboxes(){

/*-----------------------------
    BANNER  SECTION
------------------------------*/
  
  $scholar_request_field = new_cmb2_box( array(
    'id'            => 'scholar_request_field',  // Belgrove Bouncing Castles
    'title'         => 'Scholar Request Details',
    'object_types'  => array( 'scholar_request' ), // Post type
    'context'       => 'normal',
    'priority'      => 'high',
    'show_names'    => true, // Show field names on the left
  ) );

  $scholar_request_field->add_field(array(
      'name' => 'Request For Payment',
      'id'   => 'request_for_payment',
      'type' => 'text',
  ) );

  $scholar_request_field->add_field(array(
      'name' => 'Request Scholar Amount',
      'id'   => 'scholar_amount',
      'type' => 'text',
  ) );

  $scholar_request_field->add_field(array(
      'name' => 'Scholar User ID',
      'id'   => 'scholar_user_id',
      'type' => 'text',
  ) );

  $scholar_request_field->add_field(array(
      'name' => 'Scholar Request Number',
      'id'   => 'scholar_request_number',
      'type' => 'text',
  ) );

  $scholar_request_field->add_field( array(
    'name'             => esc_html__( 'Approved Status', 'cmb2' ),
    'desc'             => esc_html__( 'field description (optional)', 'cmb2' ),
    'id'               => 'approved_status',
    'type'             => 'select',
    'show_option_none' => true,
    'options'          => array(
      'Pending' => esc_html__( 'Pending', 'cmb2' ),
      'Approved'   => esc_html__( 'Approved', 'cmb2' ),
      'Deny'     => esc_html__( 'Deny', 'cmb2' ),
    ),
  ) );

  $scholar_request_field->add_field(array(
      'name' => 'Approved Amount',
      'id'   => 'approved_amount',
      'type' => 'text',
  ) );

  $scholar_request_field->add_field(array(
      'name' => 'Approved Date',
      'id'   => 'approved_date',
      'type' => 'text_date',
      'date_format' => 'd-m-Y',
  ) );
}

/*Scholar Request Page*/
add_action( 'cmb2_admin_init', 'confirmed_scholar_metaboxes' );
function confirmed_scholar_metaboxes(){

/*-----------------------------
    BANNER  SECTION
------------------------------*/
  
  $confirmed_scholar_field = new_cmb2_box( array(
    'id'            => 'confirmed_scholar_field',  // Belgrove Bouncing Castles
    'title'         => 'Confirmed Scholar Details',
    'object_types'  => array( 'scholar_request' ), // Post type
    'context'       => 'normal',
    'priority'      => 'high',
    'show_names'    => true, // Show field names on the left
  ) );

  $confirmed_scholar_field->add_field(array(
      'name' => 'Confirmed Scholar Amount',
      'id'   => 'con_scholar_amount',
      'type' => 'text',
  ) );

  $confirmed_scholar_field->add_field(array(
      'name' => 'Confirmed Scholar Bill',
      'id'   => 'con_scholar_bill',
      'type' => 'file',
  ) );
}

/*Scholar Request Page*/
add_action( 'cmb2_admin_init', 'other_request_metaboxes' );
function other_request_metaboxes(){

/*-----------------------------
    BANNER  SECTION
------------------------------*/
  
  $other_request_field = new_cmb2_box( array(
    'id'            => 'other_request_field',  // Belgrove Bouncing Castles
    'title'         => 'Other Request Details',
    'object_types'  => array( 'other_request' ), // Post type
    'context'       => 'normal',
    'priority'      => 'high',
    'show_names'    => true, // Show field names on the left
  ) );

  $other_request_field->add_field(array(
      'name' => 'Request for Payment',
      'id'   => 'other_request_for_payment',
      'type' => 'text',
  ) );
    
  $other_request_field->add_field(array(
      'name' => 'Request Date',
      'id'   => 'other_request_date',
      'type' => 'text_date',
  ) );
  
  $other_request_field->add_field(array(
      'name' => 'Purpose',
      'id'   => 'other_request_purpose',
      'type' => 'text',
  ) );

  $other_request_field->add_field(array(
      'name' => 'Amount',
      'id'   => 'other_request_amount',
      'type' => 'text',
  ) );

  $other_request_field->add_field(array(
      'name' => 'Frequency',
      'id'   => 'other_request_frequency',
      'type' => 'text',
  ) );

  $other_request_field->add_field(array(
      'name' => 'Details of Beneficiary',
      'id'   => 'other_request_details_beneficiary',
      'type' => 'textarea',
  ) );

  $other_request_field->add_field(array(
      'name' => 'To be disbursed by (date )',
      'id'   => 'other_request_disbursed_date',
      'type' => 'text_date',
  ) );

  $other_request_field->add_field(array(
      'name' => 'Member ID',
      'id'   => 'request_member_id',
      'type' => 'text',
  ) );

  $other_request_field->add_field(array(
      'name' => 'Member Request number',
      'id'   => 'member_request_number',
      'type' => 'text',
  ) );

  $other_request_field->add_field( array(
    'name'             => esc_html__( 'Approved Status', 'cmb2' ),
    'desc'             => esc_html__( 'field description (optional)', 'cmb2' ),
    'id'               => 'other_request_approved_status',
    'type'             => 'select',
    'show_option_none' => true,
    'options'          => array(
      'Pending'   => esc_html__( 'Pending', 'cmb2' ),
      'Approved'   => esc_html__( 'Approved', 'cmb2' ),
      'Rejected'     => esc_html__( 'Rejected', 'cmb2' ),
    ),
  ) );

  $other_request_field->add_field(array(
      'name' => 'Approved Amount',
      'id'   => 'other_request_approved_amount',
      'type' => 'text',
  ) );
}
?>