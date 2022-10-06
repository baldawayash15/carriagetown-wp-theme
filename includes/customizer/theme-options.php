<?php 

function cc_theme_options_customizer_section( $wp_customize ) {
    /* Customizer Settings - Adds to DB */
    $wp_customize->add_setting( 'cc_facebook_handle', [
        'capability' => 'edit_theme_options',
        'default' => ''
    ]);

    $wp_customize->add_setting( 'cc_telephone_handle', [
        'capability' => 'edit_theme_options',
        'default' => ''
    ]);

    $wp_customize->add_setting( 'cc_email_handle', [
        'capability' => 'edit_theme_options',
        'default' => ''
    ]);

    $wp_customize->add_setting( 'cc_address_handle', [
        'capability' => 'edit_theme_options',
        'default' => ''
    ]);

    /* Customizer Section - Create a customizer section */
    $wp_customize->add_section( 'cc_theme_options_handle_section', [
        'title' => __( 'Social Links and Address', 'carriagetown' ),
        'priority' => 30,
        'panel' => 'carriagetown-cabinets'
    ]);

    /* Customizer Controls - Create Input fields and update. Use get_theme_mod() to retrieve a setting */
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,  
        'cc_social_facebook_input', 
        array(
                'label' => __( 'Facebook Handle', 'carriagetown' ),
                'section' => 'cc_theme_options_handle_section',
                'settings' => 'cc_facebook_handle',
                'type' => 'text'
            )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,  
        'cc_telephone_input', 
        array(
                'label' => __( 'Telephone Handle', 'carriagetown' ),
                'section' => 'cc_theme_options_handle_section',
                'settings' => 'cc_telephone_handle',
                'type' => 'text'
            )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,  
        'cc_email_input', 
        array(
                'label' => __( 'Email Handle', 'carriagetown' ),
                'section' => 'cc_theme_options_handle_section',
                'settings' => 'cc_email_handle',
                'type' => 'text'
            )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,  
        'cc_address_input', 
        array(
                'label' => __( 'Address', 'carriagetown' ),
                'section' => 'cc_theme_options_handle_section',
                'settings' => 'cc_address_handle',
                'type' => 'textarea'
            )
    ));
}