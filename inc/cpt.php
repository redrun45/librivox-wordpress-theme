<?php

/***************************************************************
*
* Custom Post Type Homepage - ALL
*
****************************************************************/

add_action( 'init', 'register_cpt_homepage' );

function register_cpt_homepage( ) {

    $labels = array(
        'name' => _x( 'Homepage', 'homepage' ),
        'singular_name' => _x( 'Homepage', 'homepage' ),
        'add_new' => _x( 'Add New', 'homepage' ),
        'add_new_item' => _x( 'Add New Homepage', 'homepage' ),
        'edit_item' => _x( 'Edit Homepage', 'homepage' ),
        'new_item' => _x( 'New Homepage', 'homepage' ),
        'view_item' => _x( 'View Homepage', 'homepage' ),
        'search_items' => _x( 'Search Homepage', 'homepage' ),
        'not_found' => _x( 'No Homepage found', 'homepage' ),
        'not_found_in_trash' => _x( 'No Homepage in Trash', 'homepage' ),
        'parent_item_colon' => _x( 'Parent Homepage Link:', 'homepage' ),
        'menu_name' => _x( 'Homepage', 'homepage' )
    );

    $args = array(
        'labels' => $labels,
        'exclude_from_search' => true,
        'hierarchical' => true,
        'supports' => array('title', 'editor'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'page',
        'menu_position' => 20,
        'rewrite' => true,
        'menu_icon' => get_template_directory_uri() . '/images/icon_homepage.png'
    );

    register_post_type( 'homepage_content', $args );
}

?>