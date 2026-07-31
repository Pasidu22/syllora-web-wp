<?php
function syllora_theme_setup() {
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'syllora_theme_setup' );

function syllora_theme_scripts() {
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0' );
    wp_enqueue_style( 'syllora-style', get_stylesheet_uri(), array(), '1.0.0' );
    wp_enqueue_script( 'syllora-main', get_template_directory_uri() . '/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'syllora_theme_scripts' );

// Register Custom Post Types for Events and Testimonials
function syllora_register_custom_post_types() {
    // 1. Events Post Type
    register_post_type('event', array(
        'labels' => array(
            'name' => __('Events', 'syllora'),
            'singular_name' => __('Event', 'syllora'),
            'add_new_item' => __('Add New Event', 'syllora'),
            'edit_item' => __('Edit Event', 'syllora'),
            'all_items' => __('All Events', 'syllora'),
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-calendar-alt',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'show_in_rest' => true, // Enables Block Editor (Gutenberg)
    ));

    // 2. Testimonials Post Type
    register_post_type('testimonial', array(
        'labels' => array(
            'name' => __('Testimonials', 'syllora'),
            'singular_name' => __('Testimonial', 'syllora'),
            'add_new_item' => __('Add New Testimonial', 'syllora'),
            'edit_item' => __('Edit Testimonial', 'syllora'),
            'all_items' => __('All Testimonials', 'syllora'),
        ),
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-format-quote',
        'supports' => array('title', 'editor', 'thumbnail'),
        'show_in_rest' => true, // Enables Block Editor (Gutenberg)
    ));
}
add_action('init', 'syllora_register_custom_post_types');

