<?php
add_theme_support( 'custom-logo' );

function wtst_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        //'width'       => 150,
        'flex-height' => false,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'wtst_custom_logo_setup' );