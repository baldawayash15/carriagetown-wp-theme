<?php 

function cc_register_plugins() {
    $plugins = [
        [
            'name' => 'Contact Form 7',
            'slug' => 'contact-form-7',
            'required' => true
        ],
    ];
    $config = [
        'id' => 'carriagetown-cabinets',
        'menu' => 'tgmpa-install-plugins',
        'parent_slug' => 'themes.php',
        'capability' => 'edit_theme_options',
        'has_notices' => true,
        'dismissable' => true
    ];

    tgmpa($plugins, $config);
}