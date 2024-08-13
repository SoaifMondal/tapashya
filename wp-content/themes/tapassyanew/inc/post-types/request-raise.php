<?php
/***
* scholar_request Post Type
***/

if(! class_exists('Progressive_scholar_request_Post_Type')):
class Progressive_scholar_request_Post_Type{

	function __construct(){
		// Adds the scholar_request post type and taxonomies
		add_action('init',array(&$this,'scholar_request_init'),0);
		// Thumbnail support for scholar_request posts
		add_theme_support('post-thumbnails',array('scholar_request'));
	}

	function scholar_request_init(){
		/**
		 * Enable the scholar_request_init custom post type
		 * http://codex.wordpress.org/Function_Reference/register_post_type
		 */
		$labels = array(
			'name'					=> __('Scholar Requests','Progressive'),
			'singular_name'		=> __('Scholar Request Name','Progressive'),
			'add_new'				=> __('Add New','Progressive'),
			'add_new_item'			=> __('Add New Scholar Request','Progressive'),
			'edit_item'			=> __('Edit Scholar Request','Progressive'),
			'new_item'				=> __('Add New Scholar Request','Progressive'),
			'view_item'			=> __('View Scholar Request','Progressive'),
			'search_items'			=> __('Search Scholar Requests','Progressive'),
			'not_found'			=> __('No Scholar Requests items found','Progressive'),
			'not_found_in_trash'	=> __('No Scholar Requests found in trash','Progressive')
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
		
		$args = apply_filters('Progressive_scholar_request_args',$args);
		register_post_type('scholar_request',$args);
	}
}
new Progressive_scholar_request_Post_Type;
endif;