<?php
/***
* Testimonials Post Type
***/

if(! class_exists('arc_Testimonials_Post_Type')):
class arc_Testimonials_Post_Type{

	function __construct(){
		// Adds the testimonials post type and taxonomies
		add_action('init',array(&$this,'testimonials_init'),0);
		// Thumbnail support for testimonials posts
		add_theme_support('post-thumbnails',array('testimonials'));
	}

	function testimonials_init(){
		/**
		 * Enable the Testimonials_init custom post type
		 * http://codex.wordpress.org/Function_Reference/register_post_type
		 */
		$labels = array(
			'name'					=> __('Testimonials','arc'),
			'singular_name'		=> __('Testimonial Name','arc'),
			'add_new'				=> __('Add New','arc'),
			'add_new_item'			=> __('Add New Testimonial','arc'),
			'edit_item'			=> __('Edit Testimonial','arc'),
			'new_item'				=> __('Add New Testimonial','arc'),
			'view_item'			=> __('View Testimonial','arc'),
			'search_items'			=> __('Search Testimonials','arc'),
			'not_found'			=> __('No testimonials items found','arc'),
			'not_found_in_trash'	=> __('No testimonials found in trash','arc')
		);
		
		$args = array(
		    'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'menu_icon' => 'dashicons-testimonial',
			'rewrite' => true,			
			'map_meta_cap' => true,
			'hierarchical' => false,
			'menu_position' => 5,
			'supports' => array('title','editor','thumbnail','page-attributes')
		); 
		
		$args = apply_filters('arc_testimonials_args',$args);
		register_post_type('testimonials',$args);
	}
}
new arc_Testimonials_Post_Type;
endif;