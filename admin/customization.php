<?php
function wtst_customize_register( $wp_customize ) {
    $wp_customize->add_setting( 'second_logo' , array(
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'second_logo', array(
	'label'      => __( 'Second logo', 'wtst' ),
	'section'    => 'title_tagline',
	'settings'   => 'second_logo',
) ) );
}

add_action( 'customize_register', 'wtst_customize_register' );