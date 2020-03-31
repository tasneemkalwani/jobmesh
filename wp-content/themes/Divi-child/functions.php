<?php 
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/style.css' );
 
}

//Add Excerpts to Pages
add_post_type_support('jobportal', 'excerpt');

?>