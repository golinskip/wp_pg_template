<?php

if ( has_custom_logo() && function_exists( 'the_custom_logo' ) ) {
    the_custom_logo();
} else {
    echo '<a id="wtst-navbar-logo" class="navbar-brand" href="'.esc_url( home_url( '/' ) ).'">'. get_bloginfo( 'name' ) .'</a>';
}