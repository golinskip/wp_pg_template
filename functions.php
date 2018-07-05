<?php

if (!defined("DS"))
    define("DS", DIRECTORY_SEPARATOR);
if (!defined("UP"))
    define("UP", DS . "..");

add_theme_support('title-tag');
add_theme_support('custom-logo');

if (!function_exists('is_plugin_active')) {
    include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
}

/**
 * Version checker WordPress 4.7 or later.
 */
if (version_compare($GLOBALS['wp_version'], '4.7-alpha', '<')) {
    require get_template_directory() . '/inc/back-compat.php';
    return;
}
// Custom helpers
require_once(__DIR__ . DS . 'inc' . DS . 'helpers' . DS . 'fc.php');
require_once(__DIR__ . DS . 'inc' . DS . 'helpers' . DS . 'wtst_options.php');

// External class and scripts
require_once(__DIR__ . DS . 'inc' . DS . 'vendor' . DS . 'class-wp-bootstrap-navwalker.php');

// Main function file (others)
require_once(__DIR__ . DS . 'inc' . DS . 'function' . DS . 'function.php');

// Part of function file
require_once(__DIR__ . DS . 'inc' . DS . 'function' . DS . 'assets.php');
require_once(__DIR__ . DS . 'inc' . DS . 'function' . DS . 'header.php');
require_once(__DIR__ . DS . 'inc' . DS . 'function' . DS . 'navigation.php');

// Admin panel
require_once(__DIR__ . DS . 'admin' . DS . 'functions.php');
