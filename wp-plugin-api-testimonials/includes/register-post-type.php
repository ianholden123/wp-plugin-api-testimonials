<?php

/*
* Create our new custom post type
*/
function custom_post_type() {
 
    $labels = array(
        'name'                => _x( 'Testimonials', 'Post Type General Name', 'api-testimonials' ),
        'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name', 'api-testimonials' ),
        'menu_name'           => __( 'Testimonials', 'api-testimonials' ),
        'parent_item_colon'   => __( 'Parent Testimonial', 'api-testimonials' ),
        'all_items'           => __( 'All Testimonials', 'api-testimonials' ),
        'view_item'           => __( 'View Testimonial', 'api-testimonials' ),
        'add_new_item'        => __( 'Add New Testimonial', 'api-testimonials' ),
        'add_new'             => __( 'Add New', 'api-testimonials' ),
        'edit_item'           => __( 'Edit Testimonial', 'api-testimonials' ),
        'update_item'         => __( 'Update Testimonial', 'api-testimonials' ),
        'search_items'        => __( 'Search Testimonial', 'api-testimonials' ),
        'not_found'           => __( 'Not Found', 'api-testimonials' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'api-testimonials' ),
    );
        
    $args = array(
        'label'               => __( 'testimonials', 'api-testimonials' ),
        'description'         => __( 'Client testimonials', 'api-testimonials' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 20,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => true,
        'publicly_queryable'  => false,
        'capability_type'     => 'post',
        'show_in_rest'        => true,
        'rest_base'           => 'testimonials'
    );
        
    // Registering your Custom Post Type
    register_post_type( 'testimonials', $args );
    
}

add_action( 'init', 'custom_post_type', 0 );
