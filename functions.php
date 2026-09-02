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

// Auto-create About page if it doesn't exist
function create_about_page_if_not_exists() {
    if ( ! get_page_by_path('about') ) {
        wp_insert_post( array(
            'post_title'     => 'About Us',
            'post_name'      => 'about',
            'post_status'    => 'publish',
            'post_type'      => 'page',
            'page_template'  => 'template-about.php'
        ) );
    }
}
add_action( 'init', 'create_about_page_if_not_exists' );

// Handle Contact Form Submission
function handle_consultation_form_submission() {
    if ( ! isset( $_POST['consultation_nonce'] ) || ! wp_verify_nonce( $_POST['consultation_nonce'], 'consultation_form_nonce' ) ) {
        wp_die( 'Security check failed.' );
    }

    $title = sanitize_text_field( $_POST['title'] ?? '' );
    $first_name = sanitize_text_field( $_POST['first_name'] ?? '' );
    $last_name = sanitize_text_field( $_POST['last_name'] ?? '' );
    $email = sanitize_email( $_POST['email'] ?? '' );
    $mobile = sanitize_text_field( $_POST['mobile_number'] ?? '' );
    $whatsapp = sanitize_text_field( $_POST['whatsapp_number'] ?? '' );
    $destination = sanitize_text_field( $_POST['destination'] ?? '' );
    $date = sanitize_text_field( $_POST['pref_date'] ?? '' );
    $time = sanitize_text_field( $_POST['pref_time'] ?? '' );
    $message_body = sanitize_textarea_field( $_POST['message'] ?? '' );

    $to = 'info@syllora.edu.lk';
    $subject = 'New Free Consultation Booking: ' . $first_name . ' ' . $last_name;
    
    $body = "You have received a new consultation booking.\n\n";
    $body .= "Name: $title $first_name $last_name\n";
    $body .= "Email: $email\n";
    $body .= "Mobile: $mobile\n";
    $body .= "WhatsApp: $whatsapp\n";
    $body .= "Destination: $destination\n";
    $body .= "Preferred Date: $date\n";
    $body .= "Preferred Time: $time\n";
    $body .= "Message: \n$message_body\n";

    $headers = array('Reply-To: ' . $first_name . ' <' . $email . '>');

    $sent = wp_mail( $to, $subject, $body, $headers );

    if ( $sent ) {
        wp_redirect( home_url( '/?status=success#contact' ) );
    } else {
        wp_redirect( home_url( '/?status=error#contact' ) );
    }
    exit;
}
add_action( 'admin_post_nopriv_submit_consultation_form', 'handle_consultation_form_submission' );
add_action( 'admin_post_submit_consultation_form', 'handle_consultation_form_submission' );


// Customize Document Title (Fix trailing hyphen 'Syllora -')
add_filter( 'document_title_separator', function( $sep ) {
    return '|';
} );

add_filter( 'document_title_parts', function( $title ) {
    if ( empty( $title['tagline'] ) ) {
        if ( is_front_page() || is_home() ) {
            $title['tagline'] = 'Your Gateway to World-class Education';
        }
    }
    return $title;
} );
