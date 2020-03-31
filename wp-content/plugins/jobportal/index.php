<?php /*
   Plugin Name: Job Portal
   Plugin URI: https://www.genetechsolutions.com/
   description:A plugin to create jobportal
   Version: 1.0
   Author: Saira Zainab */


// Register Custom Jobportal
function jobportal_post_type()
{

    $labels = array(
        'name'                  => _x('Jobportals', 'Jobportal General Name', 'jobportal'),
        'singular_name'         => _x('Jobportal', 'Jobportal Singular Name', 'jobportal'),
        'menu_name'             => __('Jobportal', 'jobportal'),
        'name_admin_bar'        => __('Jobportal', 'jobportal'),
        'archives'              => __('Item Archives', 'jobportal'),
        'attributes'            => __('Item Attributes', 'jobportal'),
        'parent_item_colon'     => __('Parent Item:', 'jobportal'),
        'all_items'             => __('All Items', 'jobportal'),
        'add_new_item'          => __('Add New Item', 'jobportal'),
        'add_new'               => __('Add New', 'jobportal'),
        'new_item'              => __('New Item', 'jobportal'),
        'edit_item'             => __('Edit Item', 'jobportal'),
        'update_item'           => __('Update Item', 'jobportal'),
        'view_item'             => __('View Item', 'jobportal'),
        'view_items'            => __('View Items', 'jobportal'),
        'search_items'          => __('Search Item', 'jobportal'),
        'not_found'             => __('Not found', 'jobportal'),
        'not_found_in_trash'    => __('Not found in Trash', 'jobportal'),
        'featured_image'        => __('Featured Image', 'jobportal'),
        'set_featured_image'    => __('Set featured image', 'jobportal'),
        'remove_featured_image' => __('Remove featured image', 'jobportal'),
        'use_featured_image'    => __('Use as featured image', 'jobportal'),
        'insert_into_item'      => __('Insert into item', 'jobportal'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'jobportal'),
        'items_list'            => __('Items list', 'jobportal'),
        'items_list_navigation' => __('Items list navigation', 'jobportal'),
        'filter_items_list'     => __('Filter items list', 'jobportal'),
    );

    $args = array(
        'label'                 => __('Jobportal', 'jobportal'),
        'description'           => __('Jobportal Description', 'jobportal'),
        'labels'                => $labels,
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        "rewrite"               => ["slug" => "jobportal"],
        "query_var"             => true,
        "supports"              => ["title", "editor", "thumbnail", "revisions", "author"],
    );
    register_post_type('jobportal', $args);
}
add_action('init', 'jobportal_post_type');

//hook into the init action and call create_book_taxonomies when it fires
add_action('init', 'create_careers_taxonomy');

function create_careers_taxonomy()
{

    // Add new taxonomy, make it hierarchical like categories
    //first do the translations part for GUI

    $labels = array(
        'name' => _x('Careers', 'taxonomy general name'),
        'singular_name' => _x('Career', 'taxonomy singular name'),
        'search_items' =>  __('Search Careers'),
        'all_items' => __('All Careers'),
        'parent_item' => __('Parent Career'),
        'parent_item_colon' => __('Parent Career:'),
        'edit_item' => __('Edit Career'),
        'update_item' => __('Update Career'),
        'add_new_item' => __('Add New Career'),
        'new_item_name' => __('New Career Name'),
        'menu_name' => __('Careers'),
    );

    // Now register the taxonomy

    register_taxonomy('careers', array('jobportal'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'careers'),
    ));
}

?>