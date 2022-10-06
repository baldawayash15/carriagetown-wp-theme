<?php 
// Setup
define( 'CC_DEV_MODE', true );

// Includes
include( get_theme_file_path( '/includes/front/enqueue.php' ) );
include( get_theme_file_path( '/includes/front/misc.php' ) );
include( get_theme_file_path( '/includes/setup.php' ) );
include( get_theme_file_path( '/includes/theme-customizer.php' ) );
include( get_theme_file_path( '/includes/customizer/theme-options.php' ) );
include( get_theme_file_path( '/includes/class-tgm-plugin-activation.php' ) );
include( get_theme_file_path( '/includes/register-plugins.php' ) );


// Hooks
add_action( 'after_setup_theme', 'cc_setup_theme' );
add_action( 'wp_enqueue_scripts', 'cc_enqueue_scripts' );
add_action( 'wp_footer', 'cc_footer' );
add_action( 'customize_register', 'cc_customize_register' );
add_filter( 'nav_menu_css_class', 'cc_add_additional_class_on_li', 1, 3 );
add_filter( 'nav_menu_link_attributes', 'cc_add_menu_link_class', 1, 3 );
add_action( 'tgmpa_register', 'cc_register_plugins' );