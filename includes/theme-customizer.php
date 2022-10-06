<?php

function cc_customize_register( $wp_customize ) {
    $wp_customize->get_section( 'title_tagline' )->title = 'General';

    $wp_customize->add_panel( 'carriagetown-cabinets', [
        'title' => __( 'Theme Settings', 'carriagetown' ),
        'description' => '<p>Carriage Town Cabinets Theme Settings</p>',
        'priority' => 160
    ]);

    cc_theme_options_customizer_section( $wp_customize );
}