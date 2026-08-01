<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container top-bar-container">
            <div class="top-bar-socials">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
            </div>
            <div class="top-bar-contact">
                <div class="contact-pill">
                    <span class="icon-circle"><i class="fas fa-phone-alt" style="color: #f59e0b;"></i></span>
                    <span class="pill-text">071 944 7447</span>
                </div>
                <div class="contact-pill">
                    <span class="icon-circle"><i class="fas fa-envelope" style="color: #f59e0b;"></i></span>
                    <span class="pill-text">info@syllora.edu.lk</span>
                </div>
                <div class="contact-pill">
                    <span class="icon-circle"><i class="fas fa-map-marker-alt" style="color: #f59e0b;"></i></span>
                    <span class="pill-text">7th Floor, Jaya City Mall, 718, Jana Nawala Rd</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="header" id="header">
        <div class="container nav-container">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo( 'name' ); ?> Logo" class="logo-img">
                <span class="logo-text">Syllora.lk</span>
            </a>
            <nav class="nav-menu" id="nav-menu">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>#home" class="nav-link active">Home</a>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>#about" class="nav-link">About Us</a>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>#services" class="nav-link">Services</a>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>#destinations" class="nav-link">Destinations</a>
                <?php if ( get_option( 'page_for_posts' ) ) : ?>
                    <a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>" class="nav-link">Vlogs</a>
                <?php else : ?>
                    <a href="<?php echo esc_url( home_url( '/vlog' ) ); ?>" class="nav-link">Vlogs</a>
                <?php endif; ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>#contact" class="btn btn-outline">Book Consultation</a>
            </nav>
            <button class="mobile-menu-btn" id="mobile-btn">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </header>
