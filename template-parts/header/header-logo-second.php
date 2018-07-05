<?php
$second_logo = get_theme_mod('second_logo', '');
if ( $second_logo != null ) {
    echo '<a id="wtst-navbar-logo" class="navbar-brand" href="'.esc_url( home_url( '/' ) ).'">'
            . '<img src="'.$second_logo.'" class="wtst-second-logo" itemprop="logo" >'
            .'</a>';
    
} else {
    echo '<a id="wtst-navbar-logo" class="navbar-brand" href="'.esc_url( home_url( '/' ) ).'">'. get_bloginfo( 'name' ) .'</a>';
}