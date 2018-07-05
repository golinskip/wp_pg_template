<?php

!is_admin() and add_action('init', 'load_frontend_assets');

function load_frontend_assets() {
    wp_enqueue_script('modernizr', fc::i()->av('modernizr', 'modernizr-2.6.2.js'));
    wp_enqueue_script('jquery-full', fc::i()->av('jquery', 'jquery-3.3.1.min.js'));
    wp_enqueue_script('bootstrap', fc::i()->av('bootstrap', 'js' . '/' . 'bootstrap.bundle.min.js'));

    wp_enqueue_style('bootstrap', fc::i()->av('bootstrap', 'css' . '/' . 'bootstrap.min.css'));
    wp_enqueue_style('wtst', get_template_directory_uri() . '/assets/css/wtst.css');
    wp_enqueue_style('main', get_bloginfo('stylesheet_url'));
}
