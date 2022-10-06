<?php 

function cc_enqueue_scripts() {
    $uri = get_theme_file_uri();
    $ver = CC_DEV_MODE ? time(): false;

    // Registering Styles
    wp_register_style( 'cc_google_fonts', 'https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap' );
    wp_register_style('cc_bootstrap', $uri . '/assets/vendor/bootstrap/css/bootstrap.min.css', [], $ver );
    wp_register_style( 'cc_fontawesome', $uri . '/assets/css/fontawesome.css',[], $ver );
    wp_register_style( 'cc_main_theme', $uri . '/assets/css/style.css',[], $ver );
    wp_register_style( 'cc_owl_carousel', $uri . '/assets/css/owl.css',[], $ver );
    wp_register_style( 'cc_linear_icons', 'https://cdn.linearicons.com/free/1.0.0/icon-font.min.css' );

    // Registering Scripts
    wp_register_script( 'cc_bootstrap', $uri . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', [], $ver, true );
    wp_register_script( 'cc_custom', $uri . '/assets/js/custom.js', [], $ver, true );
    wp_register_script( 'cc_owl_carousel', $uri . '/assets/js/owl.js', [], $ver, true );
    wp_register_script( 'cc_slick', $uri . '/assets/js/slick.js', [], $ver, true );
    wp_register_script( 'cc_accordions', $uri . '/assets/js/accordions.js', [], $ver, true );    

    // Enqueuing Styles
    wp_enqueue_style( 'cc_google_fonts' );
    wp_enqueue_style( 'cc_bootstrap' );
    wp_enqueue_style( 'cc_fontawesome' );
    wp_enqueue_style( 'cc_main_theme' );
    wp_enqueue_style( 'cc_owl_carousel' );
    wp_enqueue_style( 'cc_linear_icons' );

    // Enqueueing Scripts
    wp_enqueue_script('jquery');
    wp_enqueue_script('cc_bootstrap' );
    wp_enqueue_script('cc_custom' );
    wp_enqueue_script('cc_owl_carousel' );
    wp_enqueue_script('cc_slick' );
    wp_enqueue_script('cc_accordions' );
}