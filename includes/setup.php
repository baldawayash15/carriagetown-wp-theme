<?php

function cc_setup_theme() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );

    register_nav_menu( 'primary-menu', __('Primary Menu', 'carriagetown') );
    register_nav_menu( 'footer-menu', __( 'Footer Menu', 'carriagetown' ) );
}