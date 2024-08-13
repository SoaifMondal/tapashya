<?php
/***
* other_request Post Type
***/

if(! class_exists('Progressive_other_request_Post_Type')):
class Progressive_other_request_Post_Type{

	function __construct(){
		// Adds the other_request post type and taxonomies
		add_action('init',array(&$this,'other_request_init'),0);
		// Thumbnail support for other_request posts
		add_theme_support('post-thumbnails',array('other_request'));
	}

	function other_request_init(){
		/**
		 * Enable the other_request_init custom post type
		 * http://codex.wordpress.org/Function_Reference/register_post_type
		 */
		$labels = array(
			'name'					=> __('Other Requests','Progressive'),
			'singular_name'		=> __('Other Request Name','Progressive'),
			'add_new'				=> __('Add New','Progressive'),
			'add_new_item'			=> __('Add New Other Request','Progressive'),
			'edit_item'			=> __('Edit Other Request','Progressive'),
			'new_item'				=> __('Add New Other Request','Progressive'),
			'view_item'			=> __('View Other Request','Progressive'),
			'search_items'			=> __('Search Other Requests','Progressive'),
			'not_found'			=> __('No Other Requests items found','Progressive'),
			'not_found_in_trash'	=> __('No Other Requests found in trash','Progressive')
		);
		
		$args = array(
		    'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'has_archive' => false,
			'menu_icon' => 'dashicons-format-status',
			'rewrite' => true,			
			'map_meta_cap' => true,
			'hierarchical' => false,
			'menu_position' => 5,
			'supports' => array('title','thumbnail','editor')
		); 
		
		$args = apply_filters('Progressive_other_request_args',$args);
		register_post_type('other_request',$args);
	}
}
new Progressive_other_request_Post_Type;
endif;