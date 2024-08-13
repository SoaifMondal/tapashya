<?php
add_action('init','weaversweb_ftn_options');
if(!function_exists('weaversweb_ftn_options')){
	function weaversweb_ftn_options(){
		// If using image radio buttons,define a directory path
		$imagepath = get_stylesheet_directory_uri().'/images/'; 
		$options = array(
		/* ---------------------------------------------------------------------------- */
		/* Header Setting */
		/* ---------------------------------------------------------------------------- */
		array("name" => "Header Section",
			  "type" => "heading"),
		array("name" => "Top header Text",
			  "desc" => "Enter top header text",
			  "id"   => "weaversweb_topheader_text",
			  "std"  => "",
			  "type" => "text"),
		array("name" => "Choose Site Logo",
			  "desc" => "Optimal size: 311px width by 84px height.",
			  "id"   => "weaversweb_header_logo",
			  "std"  => "",
			  "type" => "upload"),
		/* ---------------------------------------------------------------------------- */
		/* Footer Setting */
		/* ---------------------------------------------------------------------------- */
		array("name" => "Footer Section",
			  "type" => "heading"),
		array("name" => "Membership Heading",
			  "desc" => "Enter membership heading",
			  "id"   => "weaversweb_footer_memberheading",
			  "std"  => "",
			  "type" => "text"),
		array("name" => "Membership Detials",
			  "desc" => "Enter membership details",
			  "id"   => "weaversweb_footer_memberdetails",
			  "std"  => "",
			  "type" => "textarea"),
		array("name" => "Facebook link",
			  "desc" => "Enter facebook link",
			  "id"   => "weaversweb_footer_facebooklink",
			  "std"  => "",
			  "type" => "text"),
		array("name" => "Contact Mail Text",
			  "desc" => "Enter contact mail text",
			  "id"   => "weaversweb_footer_contactmail_text",
			  "std"  => "",
			  "type" => "text"),
		array("name" => "Bottom Copyright",
			  "desc" => "Enter Copyright Text Content",
			  "id"   => "weaversweb_footer_copyright",
			  "std"  => "",
			  "type" => "text"),
		array("name" => "Donation Receipt",
			  "desc" => "Enter Donation Receipt",
			  "id"   => "weaversweb_donation_receipt",
			  "std"  => "",
			  "type" => "text"),			
			);		
		weaversweb_ftn_update_option('of_template',$options);
		}
	}
?>