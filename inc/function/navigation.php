<?php
add_theme_support( 'menus' );

function wtst_mytheme_setup() {
    register_nav_menus(
        array(
            'top' => __( 'Top Menu', 'wtst' ),
            'top-home' => __( 'Home page Top Menu', 'wtst' ),
        )
    );
}
add_action( 'after_setup_theme', 'wtst_mytheme_setup' );

function wtst_modify_nav_menu_args( $args ) {
	return array_merge( $args, array(
		'walker' => new WP_Bootstrap_Navwalker(),
	) );
}

add_filter( 'wp_nav_menu_args', 'wtst_modify_nav_menu_args' );