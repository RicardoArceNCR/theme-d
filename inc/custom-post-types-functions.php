<?php


// Our custom post type function
function divergentes_create_post_type_covid_online() {

    register_post_type( 'covid-online',
        // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Post COVID' ),
                'singular_name' => __( 'Post COVID' )
            ),
            'public' => true,
            'has_archive' => true,
            //'rewrite' => array( 'slug' => 'theme-settings-divergentes'),
            //'has_archive' => true,
            'rewrite' => array('slug' => 'covid-online'),
            'show_in_rest' => true,
            'show_in_menu' => 'theme-settings-divergentes',
            'show_ui' => true,
            'map_meta_cap' => true

        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'divergentes_create_post_type_covid_online' );




function codex_custom_init() {
    // Our People
    $people_label = array(
        'name' => 'People',
        'singular_name' => 'People',
        'add_new' => 'Add People',
        'add_new_item' => 'Add New People',
        'edit_item' => 'Edit People',
        'new_item' => 'New People',
        'all_items' => 'All People',
        'view_item' => 'View People',
        'search_items' => 'Search People',
        'not_found' => 'No People found',
        'not_found_in_trash' => 'No People found in Trash',
        'parent_item_colon' => '',
        'menu_name' => 'People',
    );
    $people_args = array (
        'labels' => $people_label,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'show_in_menu' => 'theme-settings-divergentes',
        'rewrite' => array( 'slug' => 'theme-settings-divergentes'),
        'capability_type' => 'page',
        'has_archive' => false,
        'hierarchical' => true,
        'menu_position' => null,
        'menu_icon' => get_template_directory_uri() . '/images/icons/people.png',
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt','page-attributes'),
    );

    register_post_type('people', $people_args);
}