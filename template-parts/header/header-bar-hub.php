<?php
include(__DIR__.DS.'header-variables.php');

if(is_front_page() &&  has_nav_menu( 'top-home' )) {
    $navMenu = 'top-home';
} else {
    $navMenu = 'top';
}

include(__DIR__.DS.'preloader.php');

if($O_HDR_TOP_BANNER != 0) {
    include(__DIR__.DS.'header-top-bar.php');
}

if ($O_HDR_HEADER_ALTERNATIVES == 1 || (
        $O_HDR_HEADER_ALTERNATIVES == 2 &&
        is_front_page()
        )) {
    include(__DIR__.DS.'header-bar-1.php');
    include(__DIR__.DS.'header-bar-2.php');
} else {
    include(__DIR__.DS.'header-bar.php');
}
