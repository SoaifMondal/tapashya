<?php 
function create_projects_post_type() {
    $labels = array(
        'name'               => _x( 'Projects', 'post type general name', 'your-text-domain' ),
        'singular_name'      => _x( 'Project', 'post type singular name', 'your-text-domain' ),
        'menu_name'          => _x( 'Projects', 'admin menu', 'your-text-domain' ),
        'name_admin_bar'     => _x( 'Project', 'add new on admin bar', 'your-text-domain' ),
        'add_new'            => _x( 'Add New', 'project', 'your-text-domain' ),
        'add_new_item'       => __( 'Add New Project', 'your-text-domain' ),
        'new_item'           => __( 'New Project', 'your-text-domain' ),
        'edit_item'          => __( 'Edit Project', 'your-text-domain' ),
        'view_item'          => __( 'View Project', 'your-text-domain' ),
        'all_items'          => __( 'All Projects', 'your-text-domain' ),
        'search_items'       => __( 'Search Projects', 'your-text-domain' ),
        'parent_item_colon'  => __( 'Parent Projects:', 'your-text-domain' ),
        'not_found'          => __( 'No projects found.', 'your-text-domain' ),
        'not_found_in_trash' => __( 'No projects found in Trash.', 'your-text-domain' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'project' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );

    register_post_type( 'project', $args );
}

add_action( 'init', 'create_projects_post_type' );


function create_project_taxonomies() {
    $labels = array(
        'name'              => _x( 'Project Categories', 'taxonomy general name', 'your-text-domain' ),
        'singular_name'     => _x( 'Project Category', 'taxonomy singular name', 'your-text-domain' ),
        'search_items'      => __( 'Search Project Categories', 'your-text-domain' ),
        'all_items'         => __( 'All Project Categories', 'your-text-domain' ),
        'parent_item'       => __( 'Parent Project Category', 'your-text-domain' ),
        'parent_item_colon' => __( 'Parent Project Category:', 'your-text-domain' ),
        'edit_item'         => __( 'Edit Project Category', 'your-text-domain' ),
        'update_item'       => __( 'Update Project Category', 'your-text-domain' ),
        'add_new_item'      => __( 'Add New Project Category', 'your-text-domain' ),
        'new_item_name'     => __( 'New Project Category Name', 'your-text-domain' ),
        'menu_name'         => __( 'Project Categories', 'your-text-domain' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'project-category' ),
    );

    register_taxonomy( 'project_category', array( 'project' ), $args );
}

add_action( 'init', 'create_project_taxonomies', 0 );


?>